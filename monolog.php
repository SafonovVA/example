<?php

require_once 'config/main.php';

$log = new Monolog\Logger('name');
$handler = new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING);
$log->pushHandler($handler);

eval(\Psy\sh());

$log->warning('warning');
