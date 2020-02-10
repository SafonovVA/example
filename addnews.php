<?php

require_once 'config/pdo.php';

try {
    if (empty($_POST['name'])) {
        exit('Title is empty');
    }
    if (empty($_POST['content'])) {
        exit('Content is empty');
    }

    $query = 'INSERT INTO news VALUES (NULL, :name, NOW())';
    $news = $pdo->prepare($query);
    $news->execute(['name' => $_POST['name']]);

    $news_id = $pdo->lastInsertId();
    $query = 'INSERT INTO news_contents VALUES (NULL, :content, :news_id)';
    $news = $pdo->prepare($query);
    $news->execute(['content' => $_POST['content'], 'news_id' => $news_id]);

    header('Location: database.php');
}
catch (PDOException $e) {
    echo $e->getMessage();
}