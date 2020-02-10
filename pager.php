<?php
spl_autoload_register(function ($class) {
    $class_name = explode('\\', $class);
    $class_name = array_reverse($class_name);

    require_once 'classes/safonovva/pager/src/' . $class_name[0] . '.php';
});

$obj = new safonovva\pager\DirPager(
    new safonovva\pager\PagesList(),
    'images',
    3,
    2
);

foreach ($obj->getItems() as $img) {
    echo '<img src="' . $img . '" width="600" height="300" />';
}

echo '<p>' . $obj . '</p>';