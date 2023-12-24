@extends('layouts/parentLayout')

@section('title', 'Login')
@section('content')

<div class="loginDiv">
    <h1>Login</h1>
    <form method="POST" action="/login">
    @csrf
    <fieldset title="Login" id="input">
            <label for="username-input">Email</label>
            <input type="text" id="username" name="username-input">
            <label for="password-input">Password</label>
            <input type="password" id="password" name="password-input">
        <input type="submit" value="Login" onclick="return validateForm();">
    </fieldset>
    </form>
    <div><h3 id="error"></h3></div>
    <h3>New Here? <a href="register">Register</a></h3>
</div>
@endsection