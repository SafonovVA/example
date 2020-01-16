<?php

require_once __DIR__ . '/vendor/autoload.php';

use classes\News;

$id = 555;
$page = new News($id);
$page->render();
$page->a = 5;
echo $page->a;
