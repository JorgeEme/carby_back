<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use App\Models\VehicleTypeMedia;
use Illuminate\Database\Seeder;

class VehicleTypeMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payload = [
            [
                'vehicle_type_id' => 1,
                'media' => "vehicles/smart-front.png",
            ],
            [
                'vehicle_type_id' => 1,
                'media' => "vehicles/smart-back.png",
            ],
            [
                'vehicle_type_id' => 1,
                'media' => "vehicles/smart-inside.png",
            ],
            [
                'vehicle_type_id' => 2,
                'media' => "vehicles/fiat-front.png",
            ],
            [
                'vehicle_type_id' => 2,
                'media' => "vehicles/fiat-back.png",
            ],
            [
                'vehicle_type_id' => 2,
                'media' => "vehicles/fiat-inside.png",
            ],
            [
                'vehicle_type_id' => 3,
                'media' => "vehicles/citroen-front.png",
            ],
            [
                'vehicle_type_id' => 3,
                'media' => "vehicles/citroen-back.png",
            ],
            [
                'vehicle_type_id' => 3,
                'media' => "vehicles/citroen-inside.png",
            ],
            [
                'vehicle_type_id' => 4,
                'media' => "vehicles/keeway.png",
            ]
        ];

        VehicleTypeMedia::insert($payload);
    }
}
