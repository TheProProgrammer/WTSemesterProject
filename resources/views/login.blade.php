@extends('layouts/parentLayout')

@section('title', 'Login')
@section('content')

<div class="column">
    <div class="col-md-6">
        <div class="loginDiv">
            <div class="jumbotron">
                <h1 class="display-4">Login</h1>
            </div>
            <form method="POST" action="/login">
            @csrf
                <fieldset title="Basic inputs" id="ïnput">
                    <label for="text-input">Email:</label>
                    <input type="text" id="username" name="text-input" placeholder="Enter text here">
                    <label for="password-input">Password:</label>
                    <input type="password" id="password" name="password-input" placeholder="Enter your password">
                    <input type="submit" value="Login" onclick="return validateForm();">
                </fieldset>
            </form>
            <div><h3 id="error"></h3></div>
        </div>
    </div>
    <h3>New Here? <a href="register">Register</a></h3>
</div>
@endsection