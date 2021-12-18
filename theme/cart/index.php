<?php
session_start();

function br()
{
    echo '<br>';
}


function path()
{
    /** In live server document root is empty */
    if (empty($_SERVER['DOCUMENT_ROOT'])) {
        $php_host = $_SERVER['HTTP_HOST'];

        return "$php_host";
    } else {
        $php_self = $_SERVER['PHP_SELF'];

        $php_self = rtrim($php_self, '/');

        $php_self = ltrim($php_self, '/');

        $php_self = strtok($php_self, '?');

        $arr = explode('/', $php_self);

        return '/' . $arr[0];
    }
}
$document_root = path();


function auth()
{
    if ($_SESSION["AUTH"]["authentication"]) {
        $status = $_SESSION["AUTH"]["authentication"];

        if ($status === false) {
            header("Location: signin.php");
            exit;
        } else {
            require_once "theme/header.php";
        }
    }
}
// auth();

include_once __DIR__ . "/../../theme/header.php";
?>

<style>
<?php
/** Keep in mind it is a PHP path not HTML we useing <style> not <link> */
include_once __DIR__ . '/../../assets/css/cart.css'
?>
</style>

<main class="main">

    <?php
    include 'order.php';

    include 'payment_summary.php';

    include 'delivery.php';

    include 'additional_service.php';

    include 'payment.php';
    ?>

</main>


<script async src="/bongoapparelltd/assets/js/cart.js"></script>
<script async src="/bongoapparelltd/assets/js/navbar.js"></script>