<?php

$cat = dir('./logs');

while (($file = $cat->read()) !== false) {
    echo $file . '<br />';
}
$cat->close();