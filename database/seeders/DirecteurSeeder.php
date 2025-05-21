<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DirecteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'zolati',
            'email' => 'othman@gmail.com',
            'tel' => '0681989842',
            'ville' => 'casa',
            'email_verified_at' => now(),
            'password' => Hash::make('directeur'),
            'remember_token' => Str::random(10),
            'directeur' => 1,
        ]);
    }
}
