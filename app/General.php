<?php

namespace App;

use App\Models\User;
use App\Services\FCMService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class General
{

    public static function ok($response = null)
    {
        return response()->json([
            'status'        => true,
            'data'          => $response ?? true,
        ]);
    }

    public static function ko($response = null)
    {
        return response()->json([
            'status'        => false,
            'data'          => $response,
        ]);
    }

    public static function createAvatar(User $user)
    {
        $rounded = User::ROUNDED;
        $bold = User::BOLD;
        $lenght = User::LENGHT;
        $background = Str::replaceFirst('#', '', config('app.custom.color'));
        $size = User::SIZE;
        $name = "";
        $format = User::FORMAT;
        $color = User::COLOR;
        $filename = Str::random(16);

        if ($user->full_name) {
            $name = $user->full_name;
        } else {
            $name = $user->email;
        }

        $url = "https://eu.ui-avatars.com/api/";
        $url .= "?rounded=" . $rounded . "&bold=" . $bold . "&name=" . $name . "&length=" . $lenght . "&background=" . $background . "&size=" . $size . "&format=" . $format . "&color=" . $color;

        try {
            Storage::makeDirectory('public/' . User::IMG_FOLDER . $user->id, 0777);
            $path = 'app/public/' . User::IMG_FOLDER . $user->id . '/' . $filename . '.' . $format;
            $path = storage_path($path);
            file_put_contents($path, file_get_contents($url));
            return User::IMG_FOLDER . $user->id . '/' . $filename . '.' . $format;
        } catch (\Throwable $th) {
        }
    }


    //Funció per pujar imatges a la carpeta public. Se li pot especificar les subcarpetes al parametre $location, i el nom en el $name. A més, valida les extensions de les imatges
    public static function uploadImage($media, string $path = "users/", $format = 'png')
    {
        $file = base64_decode($media);
        $filename = Str::random(16) . '.' . $format;
        $returnPath = $path . $filename;
        $success = file_put_contents('storage/' . $returnPath, $file);

        // Image::make(file_get_contents($media))->save($path);

        return $success ? $returnPath : null;
    }

    public static function getPostalCode($lat, $lng)
    {

        $key = "AIzaSyA7isARfCj7CVyge3mEHm9CWTiOipwoWTQ";
        $geocodeFromLatlon = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng=' . $lat . ',' . $lng . '&sensor=true_or_false&key=' . $key);

        $output2 = json_decode($geocodeFromLatlon);

        if (!empty($output2)) {
            $addressComponents = $output2->results[0]->address_components;
            foreach ($addressComponents as $addrComp) {
                if ($addrComp->types[0] == 'postal_code') {
                    return $addrComp->long_name;
                }
            }
            return false;
        } else {
            return false;
        }
    }

    public static function getAddress($lat, $lng)
    {

        $key = "AIzaSyA7isARfCj7CVyge3mEHm9CWTiOipwoWTQ";
        $geocodeFromLatlon = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng=' . $lat . ',' . $lng . '&sensor=true_or_false&key=' . $key);

        $output2 = json_decode($geocodeFromLatlon);
        if (!empty($output2)) {
            $address = "";
            $addressComponents = $output2->results[0]->address_components;
            foreach ($addressComponents as $addrComp) {
                if ($addrComp->types[0] == 'route') {
                    $address = $address . $addrComp->long_name . ", ";
                }
            }
            foreach ($addressComponents as $addrComp) {
                if ($addrComp->types[0] == 'street_number') {
                    $address = $address . $addrComp->long_name;
                }
            }
            return $address;
        } else {
            return null;
        }
    }


    public static function sendPush($user, $title, $text)
    {
    FCMService::send($user, $title, $text);
        // return FCMService::send(
        //     $user->device_token,
        //     $data,
        //     [],
        // );
    }



    public static function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371;  // earth radius in km

        $deltaLat = deg2rad($lat1 - $lat2);
        $deltaLong = deg2rad($lon1 - $lon2);
        $a = sin($deltaLat / 2) * sin($deltaLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($deltaLong / 2) * sin($deltaLong / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $earthRadius * $c;
        return $distance;    // in km
    }




}
