<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/6/19
 * Time: 9:17 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Shop</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand waves-effect">My Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarContent" aria-controls="navbarContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="index.html" class="nav-link waves-effect">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="tovar.html" class="nav-link waves-effect">Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin.html" class="nav-link waves-effect">About us</a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item mr-2">
                        <a href="#" class="nav-link border border-light rounded waves-effect">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-2">
                        <a href="#" class="nav-link border border-light rounded waves-effect">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-2">
                        <a href="#" class="nav-link border border-light rounded waves-effect">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main1>
    <div class="product-item pt-5 max-lg-5">
        <img src="../vas9.jpeg">
        <div class="product-list">
            <h3>Автомобиль 1</h3>
            <span class="price">₽ 1999</span>
            <a href="" class="button">Приобрести</a>
        </div>
    </div>
</main1>

<footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">
    <div class="pt-4">
        <a href="#" class="btn btn-outline-white">Catalog
            <i class="fa fa-download ml-2"></i></a>
        <a href="#" class="btn btn-outline-white">News
            <i class="fa fa-graduation-cap ml-2"></i></a>
    </div>
    <hr class="my-4">
    <div class="pb-4">
        <a>
            <i class="fa fa-facebook mr-3"></i>
        </a>
        <a>
            <i class="fa fa-twitter mr-3"></i>
        </a>
        <a>
            <i class="fa fa-youtube mr-3"></i>
        </a>
        <a>
            <i class="fa fa-google-plus mr-3"></i>
        </a>
        <a>
            <i class="fa fa-github mr-3"></i>
        </a>
        <a>
            <i class="fa fa-instagram mr-3"></i>
        </a>
    </div>
    <div class="footer-copyright py-3">My Shop</div>
</footer>


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<script>
new WOW().init();
</script>
</body>
</html>