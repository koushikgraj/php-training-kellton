<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RedisController extends COntroller{

    public function getRConnection()
    {
        $redis= Redis::connection('Arshil-prod-redis');
        dd($redis);
    }

    public function setValue()
    {
         Redis::set('name','Arshil');
        echo 'name is set';
    }

    public function getValue()
    {
        dd(Redis::get('name'));
    }

    public function deleteValue()
    {
         Redis::del('name');
        echo 'Name got deleted from Cache Memory';
    }
}