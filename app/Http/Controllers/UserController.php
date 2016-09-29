<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $users = DB::table('ytf_user')
                ->where('username', '=', $username)->where('password', '=', $password)
                ->get();

        if (count($users)==1) {
            $request->session()->put('userId',$users[0]->id);
            return redirect()->route("index");
        }else{
            
            $mes ="用户名或者密码错误！";
            return view('login',compact('mes'));

        }
    }
    public function hasUserIdSession(Request $request)
    {
        if($request->session()->has('userId')){
            return 1;
        }else{
            return 2;
        }

    }
    public function safeExit(Request $request){
        $request->session()->forget('userId');
        return view('login');
    }
}
