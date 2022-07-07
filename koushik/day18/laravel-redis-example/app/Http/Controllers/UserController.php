<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile()
    {
        $id = 1;
        $user = Redis::get('user:profile:'.$id);
        dd($user);
        //return view('company.employee', ['user' => $user]);
    }

    public function setProfile()
    {
        Redis::set('name', 'Koushik');
 

    }

    public function getKey()
    {
        $key = Redis::get('name');
 
        dd($key);
    }

    public function getAllKeys()
    {
        $all = Redis::keys('*');
 
        dd($all);
    }

    public function deleteKey()
    {
        $all = Redis::keys('*');
 
        dd($all);
    }

    public function getRedisConnDetails(){
        $redis = Redis::connection();
        dd($redis);
    }


    public function integerIncrExample()
    {
        Redis::set("counter", 0);
        //dd(Redis::get('counter'));
        Redis::incr("counter"); // 1
        Redis::incr("counter"); // 2

        Redis::decr("counter"); // 1

        dd(Redis::get('counter'));
    }

    public function stackExample()
    {
        /* Redis::set("languages", 0);
        Redis::rpush("languages", "french"); // [french]
        Redis::rpush("languages", "arabic"); // [french, arabic]

        Redis::lpush("languages", "english"); // [english, french, arabic]
        Redis::lpush("languages", "swedish"); // [swedish, english, french, arabic]

        Redis::lpop("languages"); // [english, french, arabic]
        Redis::rpop("languages"); // [english, french]

        Redis::llen("languages"); // 2

        Redis::lrange("languages", 0, -1); // returns all elements
        Redis::lrange("languages", 0, 1); // [english, french]

        dd(Redis::get('languages'));*/

        $key = "countries";
Redis::sadd($key, ';china');
Redis::sadd($key, ['england', 'france', 'germany']);
Redis::sadd($key, 'china'); // this entry is ignored

Redis::srem($key, ['england', 'china']);

Redis::sismember($key, 'england'); // false

Redis::smembers($key); // ['france', 'germany']
dd(Redis::get('countries'));
    }

}