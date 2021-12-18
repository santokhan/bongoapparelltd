<?php

/**
 * Does not require authentication for this page
 * 
 * It is a public page
 * 
 * Need auth only in cart.php
 */

class SideNav
{
    public static function main($var = null)
    {
        $category = array(
            'global' => array('all', 'men', 'women', 'boys', 'girls'),
            'men' => array('awesome', 'beachwear', 'cool', 'gap', 'guess'),
            'women' => array('lacoste', "levi's", 'nice', 'polo', 'pullover'),
            'others' => array('shirt', 'shoes', 'sports', 'summer', 'vintage'),
        );

        foreach ($category as $value) {
            SideNav::list($value);
        }
    }

    public static function list(mixed $arr = null): void
    {
        echo '<ul class="list-unstyled">';

        foreach ($arr as $filter) {
            SideNav::item($filter);
        }

        echo '</ul>';
    }

    public static function item(string $var = null)
    {
        echo '<li class="items py-2">';

        SideNav::link($var);

        echo '</li>';
    }

    public static function link(string $val = null)
    {
        $href = Global_Function::url() . '/product.php?category=' . $val;

        echo "<a class=\"link-secondary text-decoration-none text-capitalize\" href=\"$href\">";

        echo '<i class="fa fa-tags" aria-hidden="true"></i>';

        echo "<span class=\"px-2\">$val</span>";

        echo "</a>";
    }
}


$category_arr = array(
    'men' => array('awesome', 'beachwear', 'cool', 'gap', 'guess'),
    'women' => array('lacoste', "levi's", 'nice', 'polo', 'pullover'),
    'others' => array('shirt', 'shoes', 'sports', 'summer', 'vintage'),
    'global' => array('all', 'men', 'women', 'boys', 'girls')
);


function print_filter_item(array $val = array())
{
    echo '<ul class="list-unstyled">';

    foreach ($val as $filter) {
        filter_items($filter);
    }

    echo '</ul>';
}
?>


<?php
function filter_items($val = null)
{
    $href = Global_Function::url() . '/product.php?category=' . $val;
?>
<li class="items py-2">
    <a class="link-secondary text-decoration-none text-capitalize" href="<?= $href ?>">
        <i class="fa fa-tags" aria-hidden="true"></i><span class="px-2"><?= $val ?></span>
    </a>
</li>
<?php
}
?>


<div class="col-12 col-md-3 py-3 p-xl-0">
    <div class="bg-white rounded p-4">
        <div class="py-2">
            <a class="link-secondary text-bold text-decoration-none" href="product.php?category=all">Product</a>
            >
            <a class="link-secondary text-bold text-decoration-none text-capitalize" href="product.php?category=<?= $category ?>"><?= $category ?></a>
        </div>

        <?php print_filter_item($category_arr['global']) ?>

        <div class="pt-4 pb-2 text-bold">Tags</div>

        <?php
        print_filter_item($category_arr['men']);


        print_filter_item($category_arr['women']);


        print_filter_item($category_arr['others']);
        ?>
    </div>
</div>