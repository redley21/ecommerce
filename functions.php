<?php


function formatPrice(float $vlprice){
    return number_format($vlprice, 2 ,",", ".");
}
function dd($var){
    var_dump($var);
    die;
}