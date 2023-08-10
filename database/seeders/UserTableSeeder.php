<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
            [
                'name' => "SODOKIN Yao Marius",
                'username' => "Admin",
                "email" => "admin@gmail.com",
                "password" => Hash::make('111'),
                "phone"=> "90500075",
                "adress" => "Adomey Calavi",
                "role" => "admin",
                "status" => "active"
            ],

                [
                    'name' => "EDOU Etienne",
                    'username' => "Agent",
                    "email" => "agent@gmail.com",
                    "password" => Hash::make('111'),
                    "phone"=> "94340400",
                    "adress" => "Cotonou",
                    "role" => "agent",
                    "status" => "active"
                ],

                [
                    'name' => "VEGLO Rosaline",
                    'username' => "User",
                    "email" => "user@gmail.com",
                    "password" => Hash::make('111'),
                    "phone"=> "90505050",
                    "adress" => "Adomey Calavi",
                    "role" => "user",
                    "status" => "active"
                ]
            ]

        );
    }
}
