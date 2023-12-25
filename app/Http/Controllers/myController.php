<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User_Info;
use App\Models\Product;
use Carbon\Carbon;

class myController extends Controller
{
    public function index () 
    {
        $products = Product::all();
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
                return redirect('/');
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
        return redirect('/');
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

            return redirect('/');
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
            $currentDate = Carbon::today();

            $product = new Product;
            $product->title = $request->input('title');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->user_id = session()->get('user_id');
            $formattedDate = $currentDate->format('Y-m-d');
            $product->posted_date = $formattedDate;

            $storedFileName = $request->file('image')->store('public');
            $storedFileName = str_replace('public', 'storage', $storedFileName);

            $product->thumbnail = $storedFileName;

            $product->save();

            return redirect('/');
        }
    }
    public function product($id)
    {
        $product = Product::whereRaw('product_id = ?', [$id])->get()[0];
        $user = User_Info::whereRaw('user_id = '.$product->user_id)->get()[0];
        return view('product',  ['user_id' => session()->get('user_id'), 'product' => $product, 'user' => $user]);
    }
}
