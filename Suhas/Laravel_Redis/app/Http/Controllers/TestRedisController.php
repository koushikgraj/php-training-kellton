<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use Predis;
class TestRedisController extends Controller
{
    public function redisConnection()
    {
        dd($redis = Redis::connection('supoo_server'));
        //echo "connected to the Supoo Server";
    }

    public function setName()
    {
        Redis::set('name', 'Suhas');
        echo "the name is set successfully.";
    }

    public function getName()
    {
        dd(Redis::get('name'));

    }

    public function delete()
    {
        Redis::del('name');
    }
}
