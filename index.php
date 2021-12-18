<?php

/**
 * |__ Store all main page to root directory
 *     |__ Then include_once(section.php) sections and functions from a directory(header.php)
 * 
 * Do notinclude_once one file to another
 * 
 * |__ pages.php
 *     |__ header.php
 *     |__ main.php
 *     |__ footer.php
 * 
 * index.php is a public page and it does not require authentication
 */

include_once 'theme/functions.php';


require_once  'theme/header.php';


include_once 'theme/navbar.php';


include_once 'theme/home.php';


include 'theme/subscribe_page.php';


include 'theme/footer.html';