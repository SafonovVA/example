<?php

namespace classes;

use traits\Tag;

class News extends Cached
{
    use Tag;
    public function __construct($id)
    {
        //$connection = new PDO('mysql:host=localhost;dbname=php;charset=utf8', 'root', '1');

        if ($this->isCached($this->id($id))) {
            parent::__construct($this->title(), $this->content());
        }
        else {
            /*$query = 'SELECT * FROM news WHERE id = :id LIMIT 1';
            $sth = $connection->prepare($query);
            $sth = $connection->execute($query, [$id]);
            $page = $sth->fetch(PDO::FETCH_ASSOC);
            parent::__construct($page['title'], $page['content']);*/
            parent::__construct('News', 'Page content');
        }
    }

    public function id($name)
    {
        return 'new_' . $name;
    }
}