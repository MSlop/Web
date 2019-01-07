<?php

/* @var $content string */

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
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body class="grey lighten-3">
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">
            <a href="/" class="navbar-brand waves-effect">My Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarContent" aria-controls="navbarContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <?php
                    $menuHome[] = ['label' => 'Home', 'url' => ['/']];
                    echo \yii\bootstrap\Nav::widget(array(
                        'options' => array('class' => 'active navbar-nav mr-auto nav-link waves-effect'),
                        'items' => $menuHome,
                    ));

                    $menutov[] = ['label' => 'Catalog', 'url' => ['/tovar']];
                    echo \yii\bootstrap\Nav::widget(array(
                        'options' => array('class' => 'navbar-nav mr-auto nav-link waves-effect'),
                        'items' => $menutov,
                    ));
                    ?>
                    <?php

                    if (Yii::$app->user->isGuest){
                        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                        //$menuItems[] = ['label' => 'Sign up', 'url' => ['/site/signup']];
                    } else {
                        $menuItems[] = '<li>'
                            . \yii\bootstrap\Html::beginForm(['/site/logout'], 'post')
                            . \yii\bootstrap\Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->getAuthKey() . ')',
                                ['class' => 'btn btn-link logout right']
                            )
                            . \yii\bootstrap\Html::endForm()
                            . '</li>';

                    }

                    echo \yii\bootstrap\Nav::widget(array(
                        'options' => array('class' => 'navbar-nav mr-auto nav-link waves-effect'),
                        'items' => $menuItems,
                    ));
                    ?>

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

<main>
    <?= $content ?>
</main>

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
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/js/mdb.min.js"></script>
<script>
    new WOW().init();
</script>

</body>
</html>