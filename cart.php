<?php

/**
 * Require authentication to view cart.php
 * 
 * It will redirect to the sign in page
 */

class Cart
{
    public static function main(string $var = null): void
    {
        # code...
    }
}


include_once 'theme/header.php';


include_once 'theme/navbar.php';


require_once 'theme/cart.php';


require_once 'theme/footer.php';