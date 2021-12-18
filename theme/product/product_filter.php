<?php

class Filter
{
    public static function category(): string
    {
        if (isset($_GET['category'])) {
            return $_GET['category'];
        } else {
            return 'All';
        }
    }
}


$filter = new Filter();

$category = $filter->category();