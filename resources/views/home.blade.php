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
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
            <div class="container">
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
