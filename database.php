<?php

require_once 'config/pdo.php';

/*$query = 'CREATE TABLE catalogs (catalog_id INT(11) NOT NULL AUTO_INCREMENT, name TINYTEXT NOT NULL, PRIMARY KEY (catalog_id))';
$count = $pdo->exec($query);
if ($count !== false) {
    echo 'Success ' . $count;
}
else {
    echo 'error';
    echo '<pre>' . print_r($pdo->errorInfo(), true) . '</pre>';
}*/

/*try {
    $query = 'SELECT VERSION1() AS version';
    $ver = $pdo->query($query);
    echo $ver->fetch()['version'];
}
catch (PDOException $e) {
    echo $e->getMessage();
}*/

/*$query = 'SELECT * FROM tbl';
$cat = $pdo->query($query);
try {
    while($catalog = $cat->fetch(PDO::FETCH_ASSOC)) {
        echo '<pre>' . print_r($catalog, true) . '</pre>';
        echo $catalog['putdate'].'<br />';
    }
}
catch (PDOException $e) {
    echo $e->getMessage();
}*/

/*$query = 'SELECT * FROM tbl';
$cat = $pdo->query($query);
$catalogs = $cat->fetchAll(PDO::FETCH_CLASS);
echo '<pre>' . print_r($catalogs, true) . '</pre>';
try {
    foreach($catalogs as $catalog) {
        echo '<pre>' . print_r($catalog, true) . '</pre>';
        echo $catalog->putdate.'<br />';
    }
}
catch (PDOException $e) {
    echo $e->getMessage();
}*/

/*try {
$query = 'SELECT * FROM tbl WHERE id = :id';
$cat = $pdo->prepare($query);
$cat->execute(['id' => 1]);
echo $cat->fetch(PDO::FETCH_ASSOC)['putdate'];
}
catch (PDOException $e) {
    echo $e->getMessage();
}*/

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database</title>
</head>
<body>
<table>
    <form action="addnews.php" method="post">
        <tr>
            <td>Title</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><label>
                    <textarea name="content" cols="40" rows="10"></textarea>
                </label></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Add"></td>
        </tr>
    </form>
</table>
</body>
</html>

