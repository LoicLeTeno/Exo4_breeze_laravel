<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'le Téno',
                'nickName' => 'Loïc',
                'year' => 25,
                'adress' => 'Rue de Ton Uc',
                'email' => 'leteno.loic@gmail.com',
                'password' => bcrypt('123456789'),
                'role_id' => 2,
            ],
            [
                'name' => 'De la Haute',
                'nickName' => 'Alexis',
                'year' => 69,
                'adress' => 'Pas par là',
                'email' => 'alexis@gmail.com',
                'password' => bcrypt('123456789'),
                'role_id' => 1,
            ],
            [
                'name' => 'Meme-World',
                'nickName' => 'Tania',
                'year' => 55,
                'adress' => "vers l'Infini et Au de là",
                'email' => 'tania@gmail.com',
                'password' => bcrypt('123456789'),
                'role_id' => 1,
            ]
        ]);
    }
}
