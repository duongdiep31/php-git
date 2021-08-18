
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title> Dự Án Mẫu </title>
    
    <link href="<?= LIB ?>/css/themify-icons.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/icomoon.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/flaticon.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/animate.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/owl.theme.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/slick.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/slick-theme.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/swiper.min.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/owl.transitions.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/jquery-ui.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="page-wrapper">

<div class="body-overlay"></div>

<!-- start preloader -->
<div class="preloader">
    <div class="sk-chase">
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
    </div>
</div>
<!-- end preloader -->


<?php 
require BASE_MAIN . '/Views/main/header.php'; 
echo $contents;
require BASE_MAIN . '/Views/main/footer.php'; 
?>

</div>
    <!-- All JavaScript files
    ================================================== -->
    <script src="<?= LIB ?>/js/jquery.min.js"></script>
    <script src="<?= LIB ?>/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="<?= LIB ?>/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="<?= LIB ?>/js/script.js"></script>
</body>
</html>
