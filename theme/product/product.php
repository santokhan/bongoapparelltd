<?php
function Review($range): void
{
    for ($i = 0; $i < $range; $i++) {
        echo '<i class="fa fa-star" aria-hidden="true" data-index="' . $i . '"></i>';
    }
}


function jpg_to_webp(string $var): string
{
    return str_replace(".jpg", ".webp", $var);
}


function print_product_data($pr): void
{
    $href_p = 'product.php?pid=' . $pr['id'];

    $img = $pr['image'];
    $img_name = jpg_to_webp($img);
?>
<div class="grid-card" data-product-id="<?php echo $pr['id'] ?>">
    <div>
        <a href="<?= $href_p ?>">
            <img class="product_img" src="assets/product_img/<?= $img_name ?>" alt="grid-img" width="100%">
        </a>
    </div>
    <div class="details py-3">
        <small class="p-brand"><?= $pr['category']; ?></small>

        <div class="review"><?php Review(5) ?></div>

        <a class="p-name" href="<?= $href_p ?>"><?= $pr['name']; ?></a>
        <h4 class="p-price">$<?= $pr['price']; ?></h4>
        <a href="/cart.php/pid=<?= $pr['id'] ?>" class="h4 link-secondary"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
    </div>
</div>
<?php
}
?>



<?php
$json_data = Global_Function::apiRequest('GET', 'https://bongoapparelltd.com/admin/product.php');

if ($json_data === null) {
    $json_data = json_decode(file_get_contents('assets/product.json'), true);
}

foreach ($json_data as $value) {
    /** $category from product_filter.php */
    global $category;

    if ($category === 'all') {
        print_product_data($value);
    } elseif ($category === strtolower($value['category'])) {
        /**
         * if category match with product category pass the value
         * 
         * it will auto filter the values of array
         */
        print_product_data($value);
    }
}

function print_array(array $arr): void
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
?>