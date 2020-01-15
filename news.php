<?php

use classes\News;

//require_once 'classes/News.php';

$id = 555;
$page = new News($id);
$page->render();
$page->a = 5;
echo $page->a;
