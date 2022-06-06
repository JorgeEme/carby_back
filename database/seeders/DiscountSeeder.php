<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
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
                'code'     => 'A6h0L1',
                'percentage' => 10,
                'amount'    => null,
            ],
            [
                'code'     => 'LfG41M',
                'percentage' => null,
                'amount'    => 3.50,
            ],
            [
                'code'     => 'WELCOME',
                'percentage' => 30,
                'amount'    => null,
            ],
            [
                'code'     => 'SUMMER2',
                'percentage' => null,
                'amount'    => 2,
            ],
        ];

        Discount::insert($payload);
    }
}
