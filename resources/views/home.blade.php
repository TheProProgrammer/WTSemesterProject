@extends('layouts/parentLayout')

@section('title', 'Home')
@section('content')
    <header>
        <h1>All Ads</h1>
    </header>

    <div id="gridContainer" class="gridContainer">
        @foreach ($products as $product)
            <div class="card">
                <img src="{{url($product->thumbnail)}}" alt="Card image">
                <div class="card-body">
                    <h2 class="card-title">{{ $product->title }}</h2>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Price: <price>${{ $product->price }}</price></p>
                    <a href="/product/{{$product->product_id}}" class="btn">VIEW</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
