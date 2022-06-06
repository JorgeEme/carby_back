<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use Illuminate\Database\Seeder;

class VehicleTypeSeeder extends Seeder
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
                'name'                   => "Smart EQ ForFour",
                'brand'                  => "Smart",
                'model'                  => "EQ ForFour",
                'price_by_minute'        => 0.25,
                'seats'                  => 4,
                'doors'                  => 5,
                'automony_km'            => 129,
                'horse_power'            => 82,
                'gear'                   => "Manual",
                'air_conditioning'       => true,
                'spare_wheel'            => true,
                'smart_screen'           => true,
                'back_cam'               => true,
                'parking_sensor'         => true,
                'auto_emergency_braking' => false,
            ],
            [
                'name'                   => "Fiat 500e",
                'brand'                  => "Fiat",
                'model'                  => "500e",
                'price_by_minute'        => 0.30,
                'seats'                  => 4,
                'doors'                  => 3,
                'automony_km'            => 320,
                'horse_power'            => 95,
                'gear'                   => "Automatico",
                'air_conditioning'       => true,
                'spare_wheel'            => true,
                'smart_screen'           => true,
                'back_cam'               => true,
                'parking_sensor'         => true,
                'auto_emergency_braking' => false,
            ],
            [
                'name'                   => "Citroën ë-C4",
                'brand'                  => "Citroën",
                'model'                  => "ë-C4",
                'price_by_minute'        => 0.40,
                'seats'                  => 5,
                'doors'                  => 5,
                'automony_km'            => 351,
                'horse_power'            => 136,
                'gear'                   => "Automatico",
                'air_conditioning'       => true,
                'spare_wheel'            => true,
                'smart_screen'           => true,
                'back_cam'               => true,
                'parking_sensor'         => true,
                'auto_emergency_braking' => false,
            ],
            [
                'name'                   => "Keeway E-Zi Mini",
                'brand'                  => "Keeway",
                'model'                  => "E-Zi Mini",
                'price_by_minute'        => 0.15,
                'seats'                  => 2,
                'doors'                  => null,
                'automony_km'            => 40,
                'horse_power'            => 48,
                'gear'                   => "Automatico",
                'air_conditioning'       => false,
                'spare_wheel'            => false,
                'smart_screen'           => false,
                'back_cam'               => false,
                'parking_sensor'         => false,
                'auto_emergency_braking' => false,
            ],
        ];

        VehicleType::insert($payload);
    }
}
