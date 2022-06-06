<?php

namespace App\Http\Controllers;

use App\General;
use App\Http\Requests\GetVehiclesRequest;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Http\Resources\GetVehiclesAvailableResource;
use App\Http\Resources\VehicleDetailsResource;
use App\Http\Resources\VehicleResource;
use App\Models\Vehicle;
use Illuminate\Http\Request;

use function App\Helpers\ko;
use function App\Helpers\ok;

class VehicleController extends Controller
{
    public function show(int $id)
    {

        $vehicle = Vehicle::find($id);

        if (!$vehicle) return ko(__('custom_messages.vehicle_not_found'));

        return ok(VehicleResource::make($vehicle));
    }

    public function getVehiclesAvailable(GetVehiclesRequest $request)
    {
        //Seleccionamos al usuario loggeado
        $user = auth()->user();

        //Buscamos si tiene una reserva
        $book = $user->books()->first();

        $vehicles = Vehicle::selectRaw("* ,
         ( 6371 * acos( cos( radians(?) ) *
           cos( radians( lat ) )
           * cos( radians( lng ) - radians(?)
           ) + sin( radians(?) ) *
           sin( radians( lat ) ) )
         ) AS distance", [$request->lat, $request->lng, $request->lat])
            ->Available()
            ->orWhereIn('id', [$book ? $book->vehicle_id : null])
            ->having("distance", "<", 999999999999999999999999999999999999999)
            ->orderBy("distance", 'asc')
            ->get();

        return ok(GetVehiclesAvailableResource::collection($vehicles));
    }



    public function getVehiclesAvailable1(Request $request)
    {

        //Seleccionamos al usuario loggeado
        $user = auth()->user();

        //Buscamos si tiene una reserva
        $book = $user->books()->first();

        //Obtenemos la latitud y la longitud del usuario
        $lat = $request->lat;
        $lng = $request->lng;

        if (!isset($request->topRightLat) || !isset($request->topRightLng) || !isset($request->bottomLeftLat) || !isset($request->bottonLeftLng)) {
            $vehicles = Vehicle::selectRaw("* ,
            ( 6371 * acos( cos( radians(?) ) *
                cos( radians( lat ) )
                * cos( radians( lng ) - radians(?)
                ) + sin( radians(?) ) *
                sin( radians( lat ) ) )
            ) AS distance", [$lat, $lng, $lat])
                ->Available()
                ->orWhereIn('id', [$book ? $book->vehicle_id : null])
                ->Nearest()
                ->get();

            return ok(GetVehiclesAvailableResource::collection($vehicles));
        }
        //Obtenemos las coordenadas de la esquina superior derecha del mapa y la esquina inferior izquierda del mapa
        $topRightLat = $request->topRightLat;
        $topRightLng = $request->topRightLng;
        $bottomLeftLat = $request->bottomLeftLat;
        $bottomLeftLng = $request->bottonLeftLng;

        //En caso de que front nos envie la ultima distancia de la peticion anterior lo guardamos en la variable,
        //eso se hace ya que en caso de hacer un zoomout los vehiculos enviados anteriormente con
        $lastMaxDistance = $request->last_max_distance ?? 0;

        //Calculamos la distancia en linea recta entre las dos esquinas del mapa
        $maxDistance = General::calculateDistance($topRightLat, $topRightLng, $bottomLeftLat, $bottomLeftLng);

        //Seleccionamos los vehiculos disponibles y los que el usuario tenga una reserva activa
        $vehicles = Vehicle::selectRaw("* ,
         ( 6371 * acos( cos( radians(?) ) *
                cos( radians( lat ) )
                * cos( radians( lng ) - radians(?)
                ) + sin( radians(?) ) *
                sin( radians( lat ) ) )
            ) AS distance", [$lat, $lng, $lat])
            ->Available()
            ->orWhereIn('id', [$book ? $book->vehicle_id : null])
            // Que esten entre la maxima distancia calculada y la anterior distancia
            ->having("distance", "<", $maxDistance)
            ->having("distance", ">", $lastMaxDistance)
            //Ordenamos por distancia
            ->Nearest()
            ->get();

        $request->merge(["max_distance" => $maxDistance]);
        //Devolvemos datos
        return ok(GetVehiclesAvailableResource::collection($vehicles));
    }
}
