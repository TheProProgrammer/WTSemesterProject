@extends('layouts/parentLayout')

@section('title', 'Product')
@section('content')

<div class ='productPage'>
 <div class = "cardGroup">
    <div class="pageCard">
        <img src="{{url($product->thumbnail)}}" alt="Card image">
            <div class="card-body">
            <p class="card-text"><price>${{ $product->price }}</price></p>
                <h2 class="card-title">{{ $product->title }}</h2>
            </div>
    </div>
    <div class="pageCard">
            <div class="card-body">
                <h2 class="card-title">Description:</h2>
                <p class="card-text">{{ $product->description }}</p>
            </div>
    </div>
</div>
<div class="pageCard2">
        <img src="{{url($user->pfp_location)}}" alt="Card image">
            <div class="card-body">
                <h2 class="card-title">{{ $user->name }}</h2>
                <p class="card-text">{{ $user->address }}</p>
                <p class="card-text">Contact Number: <price>{{ $user->phone_number }}</price></p>
            </div>
    </div>
</div>

    
@endsection