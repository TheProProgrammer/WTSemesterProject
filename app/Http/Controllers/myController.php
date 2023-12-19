<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class myController extends Controller
{
    public function index () 
    { 
        return view('home');
    }
    /*public function login () 
    { 
        return view('login');
    }*/
    public function login(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('get')) 
        {
            return view('login');
        }
        else{
            $user = $request->input('text-input');
            $pass = $request->input('password-input');

            $found = DB::select('select * from logininfo where username = "'.$user.'"'.' and password = '.'"'.$pass.'"');
            
            if(count($found) > 0)
                echo "User Exists";
            else
                echo "User not Exist";

            return view('login');
        }
    }
    public function register(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('get')) 
        {
            return view('register');
        }
        else{
            $user = $request->input('text-input');
            $pass = $request->input('password-input');

            $found = DB::insert('insert into logininfo (username, password) values (?,?)',[$user,$pass]);
            return view('register');
        }
    }
}
