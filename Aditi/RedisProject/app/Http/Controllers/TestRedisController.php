<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class TestRedisController extends Controller{

    public function getRConnection(){
    $redis = Redis::connection('aditi-prod-redis');
    dd($redis);
    }
    public function setValue(){
        Redis::set('name','Aditi');
        echo "Name is Set.";
        }
    public function getValue(){
        dd(Redis::get('name'));
        }   
    public function deleteValue(){
        Redis::del('name');
        echo "Name is deleted from the cache.";
        } 
}




?>