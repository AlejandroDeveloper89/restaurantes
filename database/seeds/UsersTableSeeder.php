<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nombre' => 'Esteban Dido',
                'Apellido' => 'Malo',
                'email' => 'esteban@gmail.com',
                'password' => bcrypt('estebandido'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rol_id' => 1
            ],
            [
                'nombre' => 'Elver Galarga',
                'Apellido' => 'Patuano',
                'email' => 'elver@hotmail.com',
                'password' => bcrypt('elvergon'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rol_id' => 2
            ],
            [
                'nombre' => 'Maite',
                'Apellido' => 'Lometo',
                'email' => 'maite@gmail.com',
                'password' => bcrypt('maite'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rol_id' => 2
            ],
        ];

        foreach($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
