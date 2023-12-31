<?php

namespace App\Http\Controllers;

use Session;
Use Validator;
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
        if(session()->get('user_id') == 0)
        {
            foreach ($products as $product)
            {
                $product->price = "xxx.xx";
            }
        }
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

            $validator = Validator::make($request->all(), [
                'email-input' => 'required|email',
                'fullname-input' => 'required|min:12',
                'phone-input' => 'required|regex:/^[0-9\-\+\(\) ]+$/',
                'address-input' => 'required|string',
                'pfp-input' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'password-input' => 'required|min:8|regex:/^(?=.*[0-9])/',
            ]);
             if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

            $user = new User_Info;
            $user -> email = $request->input('email-input');
            $user -> pass = $request->input('password-input');
            $user -> name = $request->input('fullname-input');
            $user -> phone_number = $request->input('phone-input');
            $user -> address = $request->input('address-input');

            $storedFileName = $request->file('pfp-input')->store('public');
            $storedFileName = str_replace('public', 'storage', $storedFileName);

            $user->pfp_location = $storedFileName;

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

            $validator = Validator::make($request->all(), [
                'title' => 'required|min:12',
                'description' => 'required|min:50',
                'price' => 'required|numeric|min:1',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            if ($validator->fails()) {
                return redirect('/post')
                    ->withErrors($validator)
                    ->withInput();
            }

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
        if(session()->get('user_id') == 0)
        {
            $user->phone_number = "xxxxxxxxxxx";
            $user->address = "xxxxxxxxxxx";
            $user->name = "Login or create account to view";
            $product->price = "xxx.xxx";
        }
        return view('product',  ['user_id' => session()->get('user_id'), 'product' => $product, 'user' => $user]);
    }
    public function account()
    {
        $currentUserID = session()->get('user_id');

        $products = Product::whereRaw('user_id = '.$currentUserID)->get();
        $user = User_Info::whereRaw('user_id = '.$currentUserID)->get()[0];

        return view('account',  ['user_id' => $currentUserID, 'products' => $products, 'user' => $user]);
    }
    public function delete($id)
    {

        if(Product::whereRaw('product_id = '.$id)->get()[0]->user_id == session()->get('user_id'))
            Product::where('product_id',$id)->delete();
        return redirect('/account');
    }
    public function showSearched($term)
    {
        //$products = DB::select(DB::raw("select * from products where title like '%$term%'"));
        $products = DB::select(DB::raw("SELECT * FROM products WHERE title LIKE '%$term%' OR description LIKE '%$term%'"));
        if(session()->get('user_id') == 0)
        {
            foreach ($products as $product)
            {
                $product->price = "xxx.xx";
            }
        }       
        return $products;
    }
}
