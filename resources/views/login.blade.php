<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBay Clone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .card {
            height: 100%;
            padding:0px;
        }
        input{
            margin: 10px;
        }
        .loginDiv{
            margin: 40px;
        }
        
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">eBay Clone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="loginDiv">
                    <div class="jumbotron">
                        <h1 class="display-4">Login</h1>
                      </div>
                    
                    <form method="POST" action="/login">
                        @csrf
                    <fieldset title="Basic inputs" id="ïnput">
                    
                    <h2>Username</h2>
                    <label for="text-input">Text Input:</label>
                    <input type="text" id="username" name="text-input" placeholder="Enter text here">
                
                    <h2>Password:</h2>
                    <label for="password-input">Password Input:</label>
                    <input type="password" id="password" name="password-input" placeholder="Enter your password">
                    
                    <input type="submit" value="Login" onclick="return validateForm();">
                </fieldset>
    </form>
                    <div><h3 id="error"></h3></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2023 eBay Clone</p>
                </div>
                <div class="col-md-6 text-right">
                    <p>Contact Us | Privacy Policy | Terms & Conditions</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
