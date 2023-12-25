<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBay - @yield('title')</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
</head>

<body>
    <nav>
        <a class="navbar-brand" href="/"><img src = "images/ebayLogo.png" height="35"></a>
        <ul class="navbar-nav">
            @if($user_id != 0)
                <li><a href="post">Post</a></li>
                <li><a href="#">My Account</a></li>
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
