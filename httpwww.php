<?php
require_once 'functions/nocache.php';
//echo phpinfo();
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

//$url = "http://username:password@host.com:80/path?arg=value#anchor";
//echo "<pre>"; print_r(parse_url($url)); echo "</pre>";

/*echo '<h1>First page (HTTP): </h1>';
echo file_get_contents('http://php.net');
echo '<h1>Second page (FTP): </h1>';
echo file_get_contents('ftp://ftp.aha.ru/');*/

/*echo '<pre>';
echo file_get_contents('file:///etc/hosts');
echo '</pre>';*/

/*$opst = [
    'http' => [
        'method' => 'GET',
        'user_agent' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:72.0)',
        'header' => 'Content-type: text/html; charset=UTF-8'
    ]
];
echo file_get_contents('http://php.net', false, stream_context_create($opst));*/

$fp = fsockopen('localhost', 80);
fputs($fp, 'GET / HTTP.1.1\r\n');
fputs($fp, 'Host: localhost\r\n');
fputs($fp, 'Connection: close\r\n');
fputs($fp, '\r\n');
echo '<pre>';
while (!feof($fp)) {
    echo htmlspecialchars(fgets($fp, 1000));
}
echo '</pre>';
fclose($fp);

