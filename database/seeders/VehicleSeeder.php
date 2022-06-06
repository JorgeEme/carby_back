<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
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
                "vehicle_type_id" => 1,
                'lat' => "41.368743",
                'lng' => "2.099377",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 1,
                'lat' => "41.380226",
                'lng' => "2.150604",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 2,
                'lat' => "41.362501",
                'lng' => "2.074983",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 2,
                'lat' => "41.380117",
                'lng' => "2.174873",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 3,
                'lat' => "41.409612",
                'lng' => "2.158031",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 3,
                'lat' => "41.416917",
                'lng' => "2.182376",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 4,
                'lat' => "41.393540",
                'lng' => "2.196650",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 4,
                'lat' => "41.383940",
                'lng' => "2.166723",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 1,
                'lat' => "40.434657",
                'lng' => "-3.676203",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 1,
                'lat' => "40.431213",
                'lng' => "-3.716432",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 2,
                'lat' => "40.465162",
                'lng' => "-3.655930",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 2,
                'lat' => "40.382290",
                'lng' => "-3.651528",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 3,
                'lat' => "40.400497",
                'lng' => "-3.698986",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 3,
                'lat' => "40.419519",
                'lng' => "-3.692501",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 4,
                'lat' => "40.422300",
                'lng' => "-3.674644",
                "available" => true,
            ],
            [
                "vehicle_type_id" => 4,
                'lat' => "40.405823",
                'lng' => "-3.676810",
                "available" => true,
            ],
        ];

        Vehicle::insert($payload);
    }
}
