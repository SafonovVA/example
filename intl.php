<?php
echo IntlChar::ord('A') . '<br />';
echo decbin(IntlChar::ord('A')) . '<hr>';

echo IntlChar::chr(1040) . '<br />';
echo IntlChar::toupper('a') . '<br />';
echo IntlChar::isspace(' ') . '<br /><hr><br /><br /><br />';

class Monolog
{
    public $a = 3;
    public $b = 4;
    public $c = 5;
}

$mon = new Monolog;

echo '<pre>' . print_r($mon, true) . '</pre>';

foreach ($mon as $m) {
    echo $m;
}

class FSDirectory implements IteratorAggregate
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getIterator()
    {
        return new FSDirectoryIterator($this);
    }
}

class FSDirectoryIterator implements Iterator
{

    private $owner;
    private $d = null;
    private $cur = false;

    public function __construct(IteratorAggregate $owner)
    {
        $this->owner = $owner;
        $this->d = opendir($owner->path);
        $this->rewind();
    }

    /*Устанавливает итератор на первый элемет*/
    public function rewind()
    {
        rewinddir($this->d);
        $this->cur = readdir($this->d);
    }

    /*Возвращает текущее значение*/
    public function current()
    {
        $path = $this->owner->path . '/' . $this->cur;
        return is_dir($path) ? new FSDirectory($path) : new FSFile($path);
    }

    /*@Устанавливает итератор на следующий элемет*/
    public function next()
    {
        $this->cur = readdir($this->d);
    }

    /*Возвращает текущий ключ*/
    public function key()
    {
        return $this->cur;
    }

    /*Проверяет, не закончились ли элементы*/
    public function valid()
    {
        return $this->cur !== false;
    }
}

class FSFile
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getSize()
    {
        return filesize($this->path);
    }
}

$d = new FSDirectory('.');
foreach ($d as $path => $entry) {

    if ($entry instanceof FSFile) {
        echo '<h4>' . $path . '</h4>';
    }
    if ($entry instanceof FSDirectory) {
        echo '<h3>' . $path . ' directory</h3>';
        foreach ($entry as $pat => $ent) {
            if ($ent instanceof FSFile) {
                echo "$pat: " . $ent->getSize() . "<br />";
            }
            if ($ent instanceof FSDirectory) {
                echo "$pat<br />";
            }
        }
    }
}