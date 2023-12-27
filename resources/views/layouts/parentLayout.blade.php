<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBay - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('styles/styles.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.png')}}">
    <script src="script.js"></script> 
</head>

<body>
    <nav>
        <a class="navbar-brand" href="/"><img src = "{{asset('images/ebayLogo.png')}}" height="35"></a>
        @if(request()->is('/'))
            <input id="searchbar" class="searchbar" type="text" onkeyup="suggest()" placeholder="Search..">
        @endif
        <ul class="navbar-nav">
            @if($user_id != 0)
                <li><a href="post">Post</a></li>
                <li><a href="account">My Account</a></li>
                <a class="loginButton" href="/logout">Logout</a>
            @else
                <a class="loginButton" href="/login">Login</a>
            @endif
        </ul>
    </nav>

    <body>
    @yield('content')
    </body>

    <footer>
            <div>
                <p>&copy; 2023 eBay Clone</p>
            </div>
            <div>
                <p>Contact Us | Privacy Policy | Terms & Conditions</p>
            </div>
    </footer>
</body>
</html>
