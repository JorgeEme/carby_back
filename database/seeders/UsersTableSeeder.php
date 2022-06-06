<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
        }


        $payload = [
            [
                'name'     => 'Alejandro',
                'surnames' => 'Tolosa',
                'email'    => 'alejandrotolosaiglesias74@gmail.com',
                'avatar'   => 'api-images/AT.png',
                'email_verified_at' => now(),
                'password' =>  Hash::make('123456789'),
                'role_id'  => 2
            ],
            [
                'name'     => 'David',
                'surnames' => 'Garcia',
                'email'    =>  ' davidgp.1299@gmail.com',
                'avatar'   =>  'api-images/DG.png',
                'email_verified_at' =>   now(),
                'password' =>   Hash::make('123456789'),
                'role_id'  => 2
            ],
            [
                'name'     =>   'Jorge',
                'surnames' =>   'Martín',
                'email'    =>   'jorgevk94@gmail.com',
                'avatar'   =>  'api-images/JM.png',
                'email_verified_at' =>   now(),
                'password' =>   Hash::make('123456789'),
                'role_id'  => 2
            ],
            [
                'name'     => 'Eloi',
                'surnames' => 'Mondelo',
                'email'    => 'emondelossalle@gmail.com',
                'avatar'   => 'api-images/EM.png',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'role_id'  => 2
            ],
        ];

        User::insert($payload);
    }
}
