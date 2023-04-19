<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class usuarios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $users = [
            [
                'id' => 1,
                'name' => 'hosstin',
                'email' => 'danielcasriv12@gmail.com',
                'password' => Hash::make('123456789'),
                'rol' => 1, 
                'status'=> true,
                'remember_token'=> ''
            ],
            
            [
                'id' => 2,
                'name' => 'jovani',
                'email' => 'hosstin12@gmail.com',
                'password' => Hash::make('123456789'),
                'rol' => 2, 
                'status'=> true,
                'remember_token'=> ''
            ],
            // Agrega más usuarios aquí si lo deseas
        ];

        DB::table('users')->insert($users);
    }
}
