@extends('layouts/parentLayout')

@section('title', 'Register')
@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="loginDiv">
                <div class="jumbotron">
                    <h1 class="display-4">Register</h1>
                </div>

                <form method="POST" action="/register" enctype="multipart/form-data">
                    @csrf
                    <fieldset title="User Registration" id="userRegistration">

                        <label for="email-input">Email:</label>
                        <input value="{{old('email-input')}}" required type="email" id="email" name="email-input" placeholder="Enter your email">

                        <label for="fullname-input">Full Name:</label>
                        <input value="{{old('fullname-input')}}" required type="text" id="fullname" name="fullname-input" placeholder="Enter your full name">

                        <label for="phone-input">Phone Number:</label>
                        <input value="{{old('phone-input')}}" required type="tel" id="phone" name="phone-input" placeholder="Enter your phone number">

                        <label for="address-input">Address:</label>
                        <textarea required type="text" id="address" name="address-input" placeholder="Enter your address">{{old('address-input')}}</textarea>
                        
                        <label for="pfp-input">Select Profile Picture:</label>
                        <input value="{{old('pfp-input')}}" required type="file" id="pfp" name="pfp-input">

                        <label for="password-input">Password:</label>
                        <input value="{{old('password-input')}}" required type="password" id="password" name="password-input" placeholder="Enter your password">

                        <input type="submit" value="Register">
                    </fieldset>
                </form>
                @error('email-input')
            <span class="error">{{ $message }}</span>
        @enderror

        @error('fullname-input')
            <span class="error">{{ $message }}</span>
        @enderror

        @error('phone-input')
            <span class="error">{{ $message }}</span>
        @enderror

        @error('address-input')
            <span class="error">{{ $message }}</span>
        @enderror

        @error('pfp-input')
            <span class="error">{{ $message }}</span>
        @enderror

        @error('password-input')
            <span class="error">{{ $message }}</span>
        @enderror
            </div>
        </div>
    </div>
    @endsection