@extends('layouts/parentLayout')

@section('title', 'Home')
@section('content')

    <h1>All Ads</h1>
    <div class="row row-cols-1 row-cols-md-2">
        @foreach ($products as $product)
            <div class="card col-xs-4" style="width: 18rem; margin: 0.5rem;">
                <img class="card-img-top" src="{{ $product->thumbnail}}" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Price: <span style="color: #2a5ac0; font-weight: 700;">${{ $product->price }}</span></p>
                    <a href="product.html" class="btn btn-primary">CHECKOUT!</a>
                </div>
            </div>
        @endforeach
    </div>
    @endsection
