<?php

/**
 * Store only php functions
 * 
 * Not any html, css, js, img
 */

class Global_Function
{
    public static function url()
    {
        return false;

        // if (str_contains($_SERVER["HTTP_HOST"], 'localhost') === true) {
        //     return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER["HTTP_HOST"] . '/bongoapparelltd';
        // } else {
        //     return false;
        // }
    }

    public static function apiRequest(string $method, string $url)
    {
        $curl = curl_init();

        /** Should have write all method below */
        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $jsonData = curl_exec($curl);

        $arrayData = json_decode($jsonData, true);

        curl_close($curl);

        return $arrayData;
    }

    public static function Document_Url()
    {
        return $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"];
    }

    public static function print_arr_data(array $var = null): void
    {
        echo '<pre>';

        print_r($var);

        echo '</pre>';
    }
}


function view_data(array $var = null)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}



/** Get document URL or API */
function Document_Url()
{
    return $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"];
}