<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class TestRedisController extends Controller
{

	public function getRConnection()
	{
		$redis = Redis::connection('koushik-prod-redis');
		dd($redis);
	}

	public function setValue()
	{
		Redis::set('name','Koushik');
		echo "name is set";
	}

	public function getValue()
	{
		dd(Redis::get('name'));
	}

	public function deleteValue()
	{
		Redis::del('name');
		echo "Name got deleted from cacche";
	}
}