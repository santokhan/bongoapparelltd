<?php
function Review($range)
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
    list($id) = $pr;
?>
<div class="grid-card" data-product-id="<?php echo $pr['id'] ?>">
    <div>
        <a href="/product.php?pid=<?= $id ?>">
            <img class="product_img" src="/bongoapparelltd/assets/product_img/<?= jpg_to_webp($pr['image']) ?>" alt="grid-img" width="100%">
        </a>
    </div>
    <div class="details">
        <small class="p-brand"><?= $pr['category']; ?></small>

        <div class="review"><?php Review(5) ?></div>

        <a class="p-name" href="<?= $_SERVER['PHP_SELF'] ?>/product.php?pid=<?= $pr['id'] ?>"><?= $pr['name']; ?></a>
        <h4 class="p-price">$<?= $pr['price']; ?></h4>
        <a href="/cart.php/pid=<?= $pr['id'] ?>" class="add-to-cart">ADD TO <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
    </div>
</div>

<?php
}
?>



<?php
$response = Global_Function::apiRequest('GET', 'https://bongoapparelltd.com/admin/product.php');

foreach ($response as $value) {
    print_product_data($value);
}
?>