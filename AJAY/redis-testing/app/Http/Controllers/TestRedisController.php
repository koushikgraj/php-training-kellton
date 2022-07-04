<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;

use Illuminate\Http\Request;

class TestRedisController extends Controller
{
    public function getRconnection()
    {
         $redis = Redis::connection();
         dd($redis);
    }
}
