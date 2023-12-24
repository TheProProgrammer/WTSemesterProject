<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Product;


class myController extends Controller
{
    public function index () 
    {
        $products = DB::select('SELECT * FROM products');
        return view('home', ['products' => $products, 'user_id' => session()->get('user_id')]);
    }
    public function login(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('get')) 
        {
            return view('login');
        }
        else{
            $user = $request->input('username-input');
            $pass = $request->input('password-input');

            $found = DB::select('select * from users where email = "'.$user.'"'.' and pass = '.'"'.$pass.'"');

            if(count($found) > 0)
            {
                session()->put('user_id', $found[0]->user_id);
                return myController::index();
            }
            else
            {
                $msg = 'Wrong password. Please try again.';
                return view('login', compact('msg'));
            }
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
            $email = $request->input('email-input');
            $password = $request->input('password-input');
            $fullname = $request->input('fullname-input');
            $phone = $request->input('phone-input');
            $address = $request->input('address-input');
            $pfp = $request->input('pfp-input');

            DB::insert('insert into users (email, pass, name, phone_number, address, pfp_location) values (?,?,?,?,?,?)',[$email,$password, $fullname, $phone, $address, $pfp]);
            
            $found = DB::select('select * from users where email = "'.$email.'"'.' and pass = '.'"'.$password.'"');
            session()->put('user_id', $found[0]->user_id);

            return myController::index();
        }
    }
    public function post()
    {
        return view('post');
    }
}
