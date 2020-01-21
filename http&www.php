<?php
require_once 'functions/nocache.php';
//nocache();
//var_dump(getallheaders());
//die();
//header('Location: http://php.net');
//exit();

/*header('Content-type: text/plain');
$headers = getallheaders();
print_r($_SERVER);*/

/*$counter = $_COOKIE['counter'] ?? 0;
$counter++;
setcookie('counter', $counter, time() + 3600);
echo 'Value: ' . $counter;*/

/*$str = 'sullivan=paul&names[roy]=noni&names[read]=tom';
parse_str($str, $out);
http_build_query($out);
var_dump($out);*/

$url = "http://username:password@host.com:80/path?arg=value#anchor";
echo "<pre>"; print_r(parse_url($url)); echo "</pre>";