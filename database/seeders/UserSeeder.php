<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Administrador',
            'email' => 'administrador@ejemplo.net',
            'email_verified_at' => now(),
            'password' => '$2y$10$CDXQdL5T29bWFul.HIpSeuYjS0URlqnoOFWMX5GNTOK8t6fCEWkIW', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
        ]);

        
        
        $user2=User::create([
            'name' => 'webmaster',
            'email' => 'r.rojas.ruiz@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$CDXQdL5T29bWFul.HIpSeuYjS0URlqnoOFWMX5GNTOK8t6fCEWkIW', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
        ]);

       

    }
}
