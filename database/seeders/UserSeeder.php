<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Fernando",
            'email' => "fernando@gmail.com",
            'email_verified_at' => now(),
            'photo' => 'https://f.rpp-noticias.io/2019/04/18/214521_779805.jpg',
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
            'role' => 'admin',
            'photo' => 'https://f.rpp-noticias.io/2019/04/18/214521_779805.jpg'
        ]);
        User::factory(3)->create();
    }
}
