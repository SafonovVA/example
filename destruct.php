<?php
require_once 'config/main.php';
require_once 'classes/PHP_Exceptionizer.php';

use classes\News;
use classes\PHP_Exceptionizer;
use classes\E_USER_WARNING;

/*class FilesystemException extends Exception
{
    private $name;
    public function __construct($name)
    {
        parent::__construct($name);
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class FileNotFoundException extends FilesystemException {}

class FileWriteException extends FilesystemException {}

class A extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

try {
    $a = 4 / 1;
    if (!file_exists('spoon')) {
        throw new FileNotFoundException('spoon');
    }
}
catch (FilesystemException $e) {
    echo 'Filesystem error ' . $e;
}
catch (Exception $e) {
    echo 'Other error ' . $e->getFile();
}*/

/*class Orator
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
        echo 'Object <b>'. $this->name . '</b> created<br />';
    }

    public function __destruct()
    {
        echo 'Destroyed <b>' . $this->name . '</b><br />';
    }
}

function outer ()
{
    $obj = new Orator(__METHOD__);
    inner();
}

function inner()
{
    $obj = new Orator(__METHOD__);
    echo 'Attention, throwing!<br />';
    throw new Exception('Hello');
}

echo 'Program begin.<br />';
try {
    echo 'Try begin<br />';
    outer();
    echo 'Try end<br />';
}
catch (Exception $e) {
    echo '<pre>Exception ' . $e->__toString() . '</pre>><br />';
}
echo 'Program end.<br />';*/

/*try {
    $string = 'чашка';
    $name = 'кофе';
    $str = 'Это $string с моим $name.';
    echo $str. "<br />";
    eval("\$str = \"$str\";");
    echo $str. "<br />";
}
catch (ParseError $e) {
    echo $e->getMessage();
}
catch (Exception $e) {
    echo $e->getMessage();
}*/

/*try {
    $str = 'Hello world';
    $str[] = 4;
    echo $str;
}
catch (Error $e) {
    echo $e->getMessage();
}*/


// TODO: razobrat'
/*suffer();

function suffer()
{
    new News(3);
    $w2e = new PHP_Exceptionizer(E_ALL);
    try {
        trigger_error('Damn it!', E_USER_ERROR);
    }
    catch (E_USER_WARNING $e) {
        echo '<pre><b>Error catched!</b>\n' . $e, '</pre>';
    }
}*/