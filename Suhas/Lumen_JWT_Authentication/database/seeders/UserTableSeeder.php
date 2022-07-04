<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Suhas Surwase', 
            'email' => 'suhas1432@gmail.com',
            'password' => Hash::make('969696')
        ]);

        $user = User::create([
            'name' => 'Pooja', 
            'email' => 'supoo@gmail.com',
            'password' => Hash::make('143200')
        ]);
    }
}
