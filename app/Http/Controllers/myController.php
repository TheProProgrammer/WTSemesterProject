<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Product;
use App\Models\User_Info;


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
            return view('login', ['user_id' => session()->get('user_id')]);
        }
        else{
            $user = $request->input('username-input');
            $pass = $request->input('password-input');

            $found = User_Info::whereRaw('email = ? and pass = ?', [$user,$pass])->get();

            if(count($found) > 0)
            {
                session()->put('user_id', $found[0]->user_id);
                return myController::index();
            }
            else
            {
                $msg = 'Wrong password. Please try again.';
                return view('login', ['user_id' => session()->get('user_id'), 'msg' => $msg]);
            }
        }
    }
    public function logout(Request $request)
    {
        session()->put('user_id', 0);
        return myController::index();
    }
    public function register(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('get')) 
        {
            return view('register', ['user_id' => session()->get('user_id')]);
        }
        else{
            $user = new User_Info;
            $user -> email = $request->input('email-input');
            $user -> pass = $request->input('password-input');
            $user -> name = $request->input('fullname-input');
            $user -> phone_number = $request->input('phone-input');
            $user -> address = $request->input('address-input');
            $user -> pfp_location = $request->input('pfp-input');
            $user->save();

            $found = User_Info::whereRaw('email = ? and pass = ?', [$user->email,$user->pass])->get();
            session()->put('user_id', $found[0]->user_id);

            return myController::index();
        }
    }
    public function post(Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('get')) 
        {
            return view('post', ['user_id' => session()->get('user_id')]);
        }
        else{
            $title = $request->input('title');
            $description = $request->input('description');
            $price = $request->input('price');
            $image = $request->file('image');

        }
    }
}
