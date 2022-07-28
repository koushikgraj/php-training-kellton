<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function index()
    {
        return view('admin/adminlogin');
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @return void
     */

    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        $result = Admin::where(['email' => $email, 'password' => md5($password)])->get();
        if (isset($result['0']->id)) {
            $request->session()->put('ADMIN_LOGIN', true);
            $request->session()->put('ADMIN_ID', $result['0']->id);
            return redirect('admin/dashboard');
        } else {

            $request->session()->flash('error', 'Please enter valid login details');
            return redirect('admin');
        }
    }

    /**
     * Display a Dashboard of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Log out admin account user.
     *
     * @return \Illuminate\Routing\Redirector
     */

    public function logoutadmin()
    {
        Session::flush();
        Session::forget('user');
        return redirect('admin');
    }
}
