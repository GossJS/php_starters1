<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$rates = json_decode(file_get_contents('https://kodaktor.ru/j/rates'), true);
$rates_length = count($rates);

$the_highest_sell_value = max(array_map(function ($value) {
    // ['sell' => $sell] = $value;
    // list('sell' => $sell) = $value;
    extract($value);
    return $sell;
}, $rates));

// image dimensions
$image_width = 600;
$image_height = 600;

function find_proportion($number)
{
    global $image_height;
    global $the_highest_sell_value;
    return $image_height * $number / $the_highest_sell_value;
};

// create an image of given size
$image = imagecreatetruecolor($image_width, $image_height);

function create_chart($value, $key)
{
    // global vars list
    global $image;
    global $image_width;
    global $image_height;
    global $rates_length;

    // current value destructuring assignment
    extract($value);

    // colors
    $red_color = imagecolorallocate($image, 255, 0, 0);
    $white_color = imagecolorallocate($image, 255, 255, 255);

    // font
    $font = getcwd() . '/fonts/OpenSans.ttf';

    // chart
    $chart_height = $image_height;
    $chart_width = ($image_width / $rates_length);
    $chart_gap = $chart_width / ($rates_length);

    // chart coords
    $x1 = ($chart_width * $key) + $chart_gap;
    $y1 = 0;
    $x2 = ($chart_width * ($key + 1) - $chart_gap);
    $y2 = find_proportion($sell);

    // text options
    $text_size = 12;
    $x = $key * $chart_width + (($chart_width - $chart_gap) / 2) + $text_size / 2;
    $y = 10;
    $angle = -90;

    // draw rectangle
    imagefilledrectangle($image, $x1, $y1, $x2, $y2, $red_color);

    // draw text
    imagettftext($image, $text_size, $angle, $x, $y, $white_color, $font, $name);
};
array_walk($rates, 'create_chart');

// output image in png format
header("Content-type: image/png");
imagepng(imagerotate($image, 180, 0));

// free memory
imagedestroy($image);

/*


   http://kodaktor.ru:9876/php/andrey.php


*/
