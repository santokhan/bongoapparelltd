<?php

class Product
{
    public static function main(string $var = null): void
    {
        # code...
    }
}


require_once 'theme/functions.php';


require_once 'theme/header.php';


require_once 'theme/navbar.php';


include_once 'theme/product/product_filter.php';
?>

<style>
<?php include_once 'assets/css/product.css'?>
</style>

<main class="main">
    <div class="container-fluid py-xl-5 py-3">
        <div class="container">
            <div class="row">
                <?php include_once 'theme/product/side_nav.php'; ?>


                <div class="col-9">
                    <div class="home-product">
                        <?php include_once 'theme/product/product.php' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once 'theme/footer.html'; ?>