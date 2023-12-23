@extends('layouts/parentLayout')

@section('title', 'Product')
@section('content')

    <div class="row">
        <div class="col-md-6">
            <img class="product-image" src="assets/image1.jpg" alt="Product Image">
        </div>
        <div class="col-md-6">
            <div class="product-details">
                <h5 class="card-title">2018 Dodge RAM</h5>
                <p class="card-text">Ohio Registered | 25000 miles | Diesel variant</p>
                <p class="card-text">Highest bid: <span style="color: #2a5ac0; font-weight: 700;">49200 USD</span></p>
                <p class="card-text">Closes in: <span style="color: #db1515; font-weight: 700;">15 HOURS!</span></p>
                <p class="card-text">Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="btn btn-primary">Place Bid</a>
            </div>
        </div>
    </div>
@endsection