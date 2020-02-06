<?php

/*$fnames = glob("images/*.{gif,jpg,png}", GLOB_BRACE);
$fname = $fnames[mt_rand(0, count($fnames))];
//die(var_dump($fnames));
$size = getimagesize($fname);
//die(var_dump($size));
header("Content-type: {$size['mime']}");
echo file_get_contents($fname);*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <img src="button.php?Hello,qwe" alt="none">
</body>
</html>

<?php
/*$size = 300;
$im = imagecreatetruecolor($size, $size);
$back = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im, 0, 0, $size - 1, $size - 1, $back);

$yellow = imagecolorallocatealpha($im, 255, 255, 0, 75);
$red    = imagecolorallocatealpha($im, 255, 0, 0, 75);
$blue   = imagecolorallocatealpha($im, 0, 0, 255, 75);

$radius = 150;
imagefilledellipse($im, 100, 75, $radius, $radius, $yellow);
imagefilledellipse($im, 120, 165, $radius, $radius, $red);
imagefilledellipse($im, 187, 125, $radius, $radius, $blue);

header('Content-type: image/png');
imagepng($im);*/
