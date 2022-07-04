<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Database\Seeders\UsersTableSeeder;



class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

      public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'ajay',
            'email' => 'ajay@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'arshil',
            'email' => 'arshil@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }
    public function test_delete_user()
    {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user) {
            $user->delete();
        }

        $this->assertTrue(true);
    }
    public function test_if_it_stores_new_users()
    {
        $response = $this->post('/register', [
            'name' => 'Ajaykumar',
            'email' => 'ajaykumar@gmail.com',
            'password' => 'ajay7078',
            'password_confirmation' => 'ajay7078'
        ]);

        $response->assertRedirect('/home');
    }

     

}
