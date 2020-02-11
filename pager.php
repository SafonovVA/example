<?php
spl_autoload_register(function ($class) {
    $class_name = explode('\\', $class);
    $class_name = array_reverse($class_name);

    require_once 'classes/safonovva/pager/src/' . $class_name[0] . '.php';
});

/*$obj = new safonovva\pager\DirPager(
    new safonovva\pager\PagesList(),
    'images',
    3,
    2
);
foreach ($obj->getItems() as $img) {
    echo '<img src="' . $img . '" width="600" height="300" />';
}
echo '<p>' . $obj . '</p>';*/

/*$obj = new safonovva\pager\DirPager(
    new safonovva\pager\ItemsRange(),
    'images',
    3,
    2
);
foreach ($obj->getItems() as $img) {
    echo '<img src="' . $img . '" width="600" height="300" />';
}
echo '<p>' . $obj . '</p>';*/

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*$obj = new safonovva\pager\FilePager(
    new safonovva\pager\PagesList(),
    'lorem.txt'
);
foreach ($obj->getItems() as $line) {
    echo htmlspecialchars($line) . '<br />';
}
echo '<p>' . $obj . '</p>';

*/
$obj = new safonovva\pager\FilePager(
    new safonovva\pager\ItemsRange(),
    'lorem.txt'
);
foreach ($obj->getItems() as $line) {
    echo htmlspecialchars($line) . '<br />';
}
echo '<p>' . $obj . '</p>';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=forum',
        'root',
        '1',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $obj = new safonovva\pager\PdoPager(
        new safonovva\pager\PagesList(),
        $pdo,
        'forums'
    );
    foreach ($obj->getItems() as $item) {
        echo htmlspecialchars($item['name'] . ' ' . $item['hide']) . '<br />';
    }
    echo '<p>' . $obj . '</p>';
} catch (PDOException $e) {
    echo $e->getMessage();
}*/


/*try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=forum',
        'root',
        '1',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $obj = new safonovva\pager\PdoPager(
        new safonovva\pager\ItemsRange(),
        $pdo,
        'forums'
    );
    foreach ($obj->getItems() as $item) {
        echo htmlspecialchars($item['name'] . ' ' . $item['hide']) . '<br />';
    }
    echo '<p>' . $obj . '</p>';
} catch (PDOException $e) {
    echo $e->getMessage();
}*/
