<?php

use classes\News;
use classes\Page;
use classes\StaticPage;

$id = 3;
$page = new StaticPage($id);
$page->render();
echo $page->id($id);
echo '<hr>';

$page = new News(123);
echoPage(5);

function echoPage($obj) {
    $class = 'Page';
    if (!($obj instanceof Page)) {
        die('<--Argument 1 must be an instance of ' . $class . '-->');
    }
    $obj->render();
    echo $obj->id(3);
}

