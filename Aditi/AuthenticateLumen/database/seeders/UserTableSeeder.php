<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'Aditi Agrawal', 
            'email' => 'aditi@gmail.com',
            'password' => Hash::make('1234')
        ]); 

            $user = User::create([
            'name' => 'book', 
            'email' => 'book@gmail.com',
            'password' => Hash::make('76543')
        ]); 

        $user = User::create([
            'name' => 'raj', 
            'email' => 'raj@gmail.com',
            'password' => Hash::make('54321')
        ]);

        $user = User::create([
            'name' => 'himani', 
            'email' => 'hiamni@gmail.com',
            'password' => Hash::make('9876')
        ]);

    }
}