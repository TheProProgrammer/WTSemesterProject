<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBay Clone - @yield('title')</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <nav>
        <a class="navbar-brand" href="/">eBay Clone</a>
        <ul class="navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="post">Post a Product</a></li>
            <li><a href="#">My Account</a></li>
            <li><a class= "loginButton" href="login">Login</a></li>
        </ul>
    </nav>

    @yield('content')

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
