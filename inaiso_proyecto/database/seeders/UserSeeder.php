<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;   // importamos

class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Alex Oscar',
                'email' => 'alex@gmail.com',
                'password' => '123'

            ],
            [
                'name' => 'María Perla',
                'email' => 'maria@gmail.com',
                'password' => '789'
            ],
            [
                'name' => 'Juan marin',
                'email' => 'juan@gmail.com',
                'password' => '567'
            ],
            [
                'name' => 'Cristobal',
                'email' => 'cristobal@gmail.com',
                'password' => '456'
            ],
            [
                'name' => 'Camila',
                'email' => 'camila@gmail.com',
                'password' => '345'
            ]
        ]);
    }
}
