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
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     return view('user.profile', [
    //         'user' => Redis::get('user:profile:'.$id)
    //     ]);
    // }
    function setvalue(){
        
Redis::set('name', 'Harsh');
echo "name is set";
    }
    function getvalue(){
        $name = Redis::get('name');
        return $name;
        
    }
    function delvalue(){
        Redis::del('name');
        echo "deleted sucessfully";
        
    }
}