<?php

namespace classes;

class StaticPage extends Cached
{
    public function __construct($id)
    {
        //$connection = new PDO('mysql:host=localhost;dbname=php;charset=utf8', 'root', '1');

        if ($this->isCached($this->id($id))) {
            parent::__construct($this->title(), $this->content());
        }
        else {
            /*$query = 'SELECT * FROM static_pages WHERE id = :id LIMIT 1';
            $sth = $connection->prepare($query);
            $sth = $connection->execute($query, [$id]);
            $page = $sth->fetch(PDO::FETCH_ASSOC);
            parent::__construct($page['title'], $page['content']);*/
            parent::__construct('Static Page', 'Page content');
        }
    }

    public function id($name)
    {
        return 'static_page_' . $name;
    }
}