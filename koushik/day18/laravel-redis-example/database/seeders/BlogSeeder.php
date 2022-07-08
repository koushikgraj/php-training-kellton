<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
          'title' => 'First blog',
          'sub_header' => 'This is the first sub header',
          'content' => 'BLOG_CONTENT'
      ]);

        DB::table('blogs')->insert([
          'title' => 'Second blog',
          'sub_header' => 'This is the second sub header',
          'content' => 'BLOG_CONTENT'
      ]);
    }
}
