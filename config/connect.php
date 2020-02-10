<?php
$m = new Memcached();
$m->addServer('example.test', 11211);
$m->setOption(Memcached::OPT_COMPRESSION, false);

/*$m = new Memcached();
$m->addServers([
   ['localhost', 11211, 10],
   ['localpost', 11212, 10],
]);*/
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

</body>
</html>
