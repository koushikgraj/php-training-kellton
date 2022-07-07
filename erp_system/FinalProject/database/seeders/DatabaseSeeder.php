<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //1st
         DB::table('users')->insert([
            'email' => 'admin@site.co.uk',
            'first_name' => 'Site',
            'last_name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('localhostPassword') // <---- check this
        ]);

         //2nd
         DB::table('users')->insert([
          'email' => 'admin@site.co.uk',
          'first_name' => 'Site',
          'last_name' => 'Admin',
          'username' => 'admin',
          'password' => bcrypt('localhostPassword')
       ]);

         //3rd
         DB::table('users')->insert([
          'email' => 'admin@site.co.uk',
          'first_name' => 'Site',
          'last_name' => 'Admin',
          'username' => 'admin',
          'password' => md5('localhostPassword')
       ]);

         //4th
          DB::table('users')->insert([
          'email' => 'admin@site.co.uk',
          'first_name' => 'Site',
          'last_name' => 'Admin',
          'username' => 'admin',
          'password' => sha1('localhostPassword')
       ]);

    }
}
