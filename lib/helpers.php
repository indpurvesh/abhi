<?php


if(!function_exists('dd')) {
    function dd($var) {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
        die;
    }
}