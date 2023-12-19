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
                        <a class="nav-link" href="login.blade.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="card col-xs-4" style="width: 18rem; margin: 0.5rem;">
                        <img class="card-img-top" src="assets/image1.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">2018 Dodge RAM</h5>
                          <p class="card-text">Ohio Registered | 25000 miles | Diesel variant</p>
                          <p class="card-text">Highest bid: <span style="color: #2a5ac0; font-weight: 700;">49200 USD</span></p>
                          <p class="card-text">Closes in: <span style="color: #db1515; font-weight: 700;">15 HOURS!</span></p>
                          <a href="product.html" class="btn btn-primary">CHECKOUT!</a>
                        </div>
            </div>
            <div class="card col-xs-4" style="width: 18rem; margin: 0.5rem;">
                        <img class="card-img-top" src="assets/image3.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Lenovo ThinkPad 2340</h5>
                          <p class="card-text">Core i7 4thGen | 8GB RAM | 128GB SSD</p>
                          <p class="card-text">Highest bid: <span style="color: #2a5ac0; font-weight: 700;">260 USD</span></p>
                          <p class="card-text">Closes in: <span style="color: #db1515; font-weight: 700;">15 HOURS!</span></p>
                          <a href="#" class="btn btn-primary">CHECKOUT!</a>
                        </div>
            </div>
            <div class="card col-xs-4" style="width: 18rem; margin: 0.5rem;">
                <img class="card-img-top" src="assets/image4.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">2021 Cadilac Eldorado</h5>
                  <p class="card-text">Minesotta Registered | 2000 miles | Petrol variant</p>
                  <p class="card-text">Highest bid: <span style="color: #2a5ac0; font-weight: 700;">35700 USD</span></p>
                  <p class="card-text">Closes in: <span style="color: #db1515; font-weight: 700;">15 HOURS!</span></p>
                  <a href="#" class="btn btn-primary">CHECKOUT!</a>
                </div>
            </div>
            <div class="card col-xs-4" style="width: 18rem; margin: .5rem;">
                <img class="card-img-top" src="assets/image5.jpg" alt="Card image cap">
                <div class="card-body">
          <h5 class="card-title">iPhone 6 256GB</h5>
          <p class="card-text">BLack color | Screen cracked | FaceID Working</p>
          <p class="card-text">Highest bid: <span style="color: #2a5ac0; font-weight: 700;">99 USD</span></p>
          <p class="card-text">Closes in: <span style="color: #db1515; font-weight: 700;">15 HOURS!</span></p>
          <a href="#" class="btn btn-primary">CHECKOUT!</a>
            </div>
            </div>
            <div class="card col-xs-4" style="width: 18rem; margin: 0.5rem;">
                <img class="card-img-top" src="assets/image2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">HP LaserJet 2350</h5>
                  <p class="card-text">Carefully used | Ink not included</p>
                  <p class="card-text">Highest bid: <span style="color: #2a5ac0; font-weight: 700;">96 USD</span></p>
                  <p class="card-text">Closes in: <span style="color: #db1515; font-weight: 700;">15 HOURS!</span></p>
                  <a href="#" class="btn btn-primary">CHECKOUT!</a>
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
