<?php
$root = $_SERVER['DOCUMENT_ROOT'];


/**
 * Use  assets/  as directory
 * 
 * |__index.php
 * |__assets
 *    |__css
 */

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A apparel sourcing company">
    <meta name="theme-color" content="#ececec">

    <!--  -->
    <meta name="google-signin-client_id" content="540400975447-na2kte9ad4i31tj9309ms9dtltkkeaf3.apps.googleusercontent.com">
    <link rel="manifest" type="application/json" href="assets/manifest.json">

    <title>Bongo Apparel Limited.</title>
    <link rel="favicon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/svg+xml" href="assets/svg/icon.svg">

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="assets/css/product.css">
</head>

<body>
    <!-- Facebook Auth -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=860961217809631&autoLogAppEvents=1" nonce="fl7ny6OT"></script>
    <script async defer src="assets/js/facebook.js"></script>

    <div class="container-fluid app_header">
        <div class="row py-2">
            <div class="col d-flex justify-content-between">
                <div>
                    <a href="https://bongoapparelltd.com" class="logo" aria-label="Logo" data-name="Logo">
                        <img src="assets/svg/bongo.svg" alt="Logo" height="100%">
                    </a>
                </div>

                <div class="d-flex align-items-center">
                    <div class="px-2">
                        <a class="position-relative text-decoration-none" href="cart.php?uid=<?= '' ?>">
                            <img src="assets/svg/cart.svg" alt="Cart" width="40">
                            <span class="counter d-flex justify-content-center align-items-center text-white rounded-circle bg-danger">0</span>
                        </a>
                    </div>
                    <a class="link text-decoration-none" href="signin.php">
                        <img src="assets/img/profile.png" alt="Profile" width="40">
                    </a>
                </div>
            </div>
        </div>
    </div>