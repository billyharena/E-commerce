<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css?h=ae510b1c65562a9ddc65f41fcd50c745')}}">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/simple-line-icons.min.css?h=bb270fba1988038f5680f75b7475565e')}}">
    <link rel="stylesheet" href="{{asset('assets/css/baguetteBox.min.css?h=3175ea2a373db4ce2aec072db96e7473')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vanilla-zoom.min.css?h=b1904b38fb5db9c70aa0a0b48e09a39c')}}">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-dark clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">Brand</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{route('listeProduit')}}">My product</a></li>
                <li class="nav-item"><a class="nav-link" href="catalog-page.html">Catalog</a></li>
                <li class="nav-item"><a class="nav-link" href="features.html">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="shopping-cart.html">Shopping Cart</a></li>
                <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="page landing-page">
    @yield('page-content')
</main>
<footer class="page-footer dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Get started</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Downloads</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>About us</h5>
                <ul>
                    <li><a href="#">Company Information</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Support</h5>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Help desk</a></li>
                    <li><a href="#">Forums</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Legal</h5>
                <ul>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2023 Copyright Text</p>
    </div>
</footer>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js?h=79ff9637b74326c362fb6f7f5801a7ba')}}"></script>
<script src="{{asset('assets/js/baguetteBox.min.js?h=add865daffd8b6e10264279f48d8ac50')}}"></script>
<script src="{{asset('assets/js/vanilla-zoom.js?h=6a37ea9c996b05f763161c73127d66bc')}}"></script>
<script src="{{asset('assets/js/theme.js?h=a083aeb15550c5e1266c666e8a5846d9')}}"></script>
</body>

</html>
