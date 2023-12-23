@extends('layouts/parentLayout')

@section('title', 'Register')
@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="loginDiv">
                <div class="jumbotron">
                    <h1 class="display-4">Register</h1>
                </div>

                <form method="POST" action="/register">
                    @csrf
                    <fieldset title="User Registration" id="userRegistration">

                        <label for="email-input">Email:</label>
                        <input type="email" id="email" name="email-input" placeholder="Enter your email">

                        <label for="fullname-input">Full Name:</label>
                        <input type="text" id="fullname" name="fullname-input" placeholder="Enter your full name">

                        <label for="phone-input">Phone Number:</label>
                        <input type="tel" id="phone" name="phone-input" placeholder="Enter your phone number">

                        <label for="address-input">Address:</label>
                        <input type="text" id="address" name="address-input" placeholder="Enter your address">

                        <label for="pfp-input">Select Profile Picture:</label>
                        <input type="file" id="pfp" name="pfp-input" accept="image/*" onchange="displayImage(this)">

                        <label for="password-input">Password:</label>
                        <input type="password" id="password" name="password-input" placeholder="Enter your password">

                        <input type="submit" value="Register" onclick="return validateForm();">
                    </fieldset>
                </form>
                <div><h3 id="error"></h3></div>
            </div>
        </div>
    </div>
    @endsection