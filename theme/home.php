<?php

use Product as GlobalProduct;

/** category or overview */
function product_category(): void
{
    $category = array(
        array(
            "title" => "women",
            "item" => array("awesome", "beachwear", "cool", "gap", "guess")
        ),
        array(
            "title" => "men",
            "item" => array("lacoste", "levi's", "nice", "polo", "pullover")
        ),
        array(
            "title" => "others",
            "item" => array("shirt", "shoes", "sports", "summer", "vintage")
        )
    );


    foreach ($category as $arr) {
        echo "<div class=\"apparel women\">";

        title_and_img($arr);

        ul($arr);

        echo "</div>";
    }
}


function title_and_img($item): void
{
    $title = $item['title'];

    echo "<div class=\"title\">$title</div>";

    echo "<a href=\"/category.php?category={$title}\">";
    echo "<img class=\"example\" src=\"assets/category_img/{$title}.webp\" alt=\"women\" width=\"100%\">";
    echo '</a>';
}


function ul($list): void
{
    $fa_caret = '<i class="fa fa-tags" aria-hidden="true"></i>';

    echo '<ul class="list">';

    $arr = $list["item"];
    foreach ($arr as $value) {
        echo '<li class="item">';
        echo "<a class=\"link\" href=\"product.php?category=$value\">$fa_caret<span class=\"px-2\">$value</span></a>";
        echo '</li>';
    }

    echo '</ul>';
}


function filter_btn()
{
    $arr = array("Featured Products", "New Arriavals", "Special", "Best Sellers", "Most Viewed");

    foreach ($arr as $btn) {
        echo "<button class=\"filter-btn\" type=\"button\">{$btn}</button>";
    }
}



function product_grid(): void
{
    /**
     * @param string $method
     * @param string $api
     * @return mixed
     */
    $fetch_data = Global_Function::apiRequest('GET', 'https://bongoapparelltd.com/admin/product.php');
    // $fetch_data = null;

    if (is_array($fetch_data) != true) {
        $fetch_data = json_decode(file_get_contents('assets/product.json'), true);
        // print_array($fetch_data);
    }

    foreach ($fetch_data as $value) {
        print_product_data($value);
    }
}


function jpg_to_webp(string $jpg): string
{
    $webp = str_replace(".jpg", ".webp", $jpg);
    return $webp;
}


function Review($range): void
{
    for ($i = 0; $i < $range; $i++) {
        echo '<i class="fa fa-star" aria-hidden="true" data-index="' . $i . '"></i>';
    }
}

function print_array(array $arr): void
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
?>


<?php
function print_product_data($arr)
{
    $href_p = 'product.php?pid=' . $arr['id'];

    $img = $arr['image'];
    $img_name = jpg_to_webp($img);
?>
<div class="grid-card" data-product-id="<?= $arr['id'] ?>">
    <div>
        <a href="<?= $href_p ?>">
            <img class="product_img" src="assets/product_img/<?= $img_name ?>" alt="grid-img" width="100%">
        </a>
    </div>
    <div class="details py-3">
        <small class="p-brand"><?= $arr['category']; ?></small>

        <div class="review"><?php Review(5) ?></div>

        <a class="p-name" href="<?= $href_p ?>"><?= $arr['name'] ?></a>
        <div class="p-price h5">$<?= $arr['price']; ?></div>
        <a href="/cart.php/pid=<?= $arr['id'] ?>" class="h4 link-secondary"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
    </div>
</div>
<?php
}
?>


<main class="main">
    <div class="d-flex justify-content-center pt-3 pb-2 d-none">
        <div>Sister Company of <a href="https://ssbanglaexpress.net" class="link-dark text-bold" target="_blank" rel="noreferrer">SS Bangla Express</a></div>
    </div>

    <section class="overview">
        <?php product_category() ?>
    </section>

    <section class="product-topper">
        <div class="header">
            <?php filter_btn() ?>
        </div>
    </section>

    <section class="home-product py-4">
        <?php product_grid() ?>
    </section>
</main>


<script async src="assets/js/product.js"></script>