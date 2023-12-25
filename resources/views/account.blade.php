@extends('layouts/parentLayout')

@section('title', 'Account')
@section('content')

<div class="myAccountPage">
<div class="pageCard2">
        <img src="{{url($user->pfp_location)}}" alt="Card image">
            <div class="card-body">
                <h2 class="card-title">{{ $user->name }}</h2>
                <p class="card-text">{{ $user->address }}</p>
                <p class="card-text">Contact Number: <price>{{ $user->phone_number }}</price></p>
            </div>
    </div>
    <header>
        <h1>My Ads</h1>
    </header>

    <div class="gridContainer">
        @foreach ($products as $product)
            <div class="card">
                <img src="{{url($product->thumbnail)}}" alt="Card image">
                <div class="card-body">
                    <h2 class="card-title">{{ $product->title }}</h2>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Price: <price>${{ $product->price }}</price></p>
                    <a href="/delete/{{$product->product_id}}" class="btn2">SOLD!</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
