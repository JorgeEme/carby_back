<?php

namespace App\Services;

class FCMService
{
    public static function send($user, $title, $text)
    {
        $payload = [
            'registration_ids' => [$user->device_token],
            'notification' => [
                'title' => $title,
                'body' => $text,
                'vibrate' => 1,
                'sound' => 1,
                'badge' => 1,
                'icon' => 'notification',
                'android_channel_id' => 'default',
                "image" => null
            ],
            'data' => [
                "body" => $text,
                "title" => $title,
                "click_action" => "FLUTTER_NOTIFICATION_CLICK",
                "id" => null,
                "status" => "done",
                "type" => 1
            ],
            "apns" => [
                "payload" => [
                    "aps" => [
                        "mutable-content" => 1
                    ]
                ],
                "fcm_options" => [
                    "image" => null
                ]
            ],
        ];

        $headers = [
            'Authorization: key=' .  config('app.fcm'),
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }
}
