<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=forum', 'root', '1', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (PDOException $e) {
    echo $e->getMessage();
}


