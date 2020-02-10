<?php

$string = $_SERVER['QUERY_STRING'] ?? 'Hello, World!';
$im = imagecreatefromgif('images/button.gif');
$color = imagecolorallocate($im, 0, 0, 0);
$px = (imagesx($im) - 6.5 * strlen($string)) / 2;
imageString($im, 3, $px, 1, $string, $color);
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
