<?php

/** Authentication
 * dir_ auth */
require 'auth/auth.php';

/** By default false */
$auth = false;

/** Sign in validation */
function signing_in($var)
{
    if ($var === true) {
        header("Location: index.php");
    } else {
        return false;
    }
}
signing_in($auth);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A apparel sourcing company">
    <meta name="theme-color" content="#ececec">
    <link rel="manifest" type="application/json" href="assets/manifest.json">

    <title>Bongo Apparel Limited.</title>
    <link rel="favicon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/svg+xml" href="assets/svg/icon.svg">

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="container p-4 p-xl-4 p-xl-5">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-12 col-md-8 col-xl-6 bg-white py-4 px-4 px-xl-5" style="border-radius: 1.5rem;">
                <div class="row">
                    <div class="col d-flex justify-content-center p-0">
                        <a href="https://bongoapparelltd.com"><img src="assets/svg/bongo.svg" alt="bongo" height="40"></a>
                    </div>
                    <hr class="mt-2">
                </div>
                <div class="row d-flex align-items-start">
                    <div class="col-12 col-md-6">
                        <div class="pb-2">
                            <small class="text-secondary">Sign in with</small>
                        </div>
                        <div class="d-flex flex-row justify-content-center flex-md-column pb-3 px-md-4">
                            <div class="py-2 mx-1"><a class="rounded-pill px-4 text-bold text-shadow shadow btn btn-danger" href="#">Google</a></div>
                            <div class="py-2 mx-1"><a class="rounded-pill px-4 text-bold text-shadow shadow btn btn-danger" href="#">Facebook</a></div>
                            <div class="py-2 mx-1"><a class="rounded-pill px-4 text-bold text-shadow shadow btn btn-danger" href="#">Twitter</a></div>
                            <div class="g-signin2" data-onsuccess="onSignIn"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="pb-2">
                            <small class="text-secondary">Sign in with email</small>
                        </div>
                        <form class="py-2">
                            <div class="form-group pb-3">
                                <input class="form-control px-3 rounded-pill" type="text" name="user_name" id="userName" placeholder="Email">
                            </div>

                            <div class="form-group pb-3">
                                <input class="form-control px-3 rounded-pill" type="password" name="user_pass" id="userPass" placeholder="Password" min="8" max="16">
                            </div>

                            <div class="pb-2 px-2 d-flex align-items-center">
                                <input type="checkbox" name="eye" value="open" id="passEye">
                                <label class="px-1" for="passEye"><small class="text-secondary">Show password</small></label>
                            </div>
                            <div class="form-group py-2 d-flex d-xl-block justify-content-center">
                                <button class="rounded-pill px-4 text-bold text-shadow shadow btn btn-danger" type="submit" id="submitSignin">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div><a class="link-secondary" href="signup.php">Go for sign up</a></div>
            </div>
        </div>
    </div>


    <script src="assets/js/signup.js" async></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }
    </script>
</body>

</html>