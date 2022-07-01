<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class TestRedisController extends Controller
{
    public function getRconnection()
    {
        $redis = Redis::connection();
        dd($redis);
    }
    public function setvalue()
    {
        Redis::set('name','virendra Rajput');
        echo "name is set";
    }
    public function getvalue()
    {
        dd(Redis::get('name')); 
    }
    public function deletevalue()
    {
        Redis::del('name');
        echo "name deleted from cache";
    }
}