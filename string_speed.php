<?php
require_once 'config/main.php';

use classes\CalculateTime;

class Some
{
    public int $a = 4;
    public int $b = 5;

    public function __construct($newA = 0, $newB = 0)
    {
        $this->a = $newA;
        $this->b = $newB;
    }

    public function setA($newA, $newB)
    {
        $this->a = $newA;
        $this->b = $newB;
    }
    public function getA()
    {
        echo $this->a . ' ' . $this->b . ' ' . __METHOD__ . ' ' . __CLASS__;
    }

    public function __toString()
    {
        return 'obj: a = ' . $this->a . ', b = ' . $this->b . '<br />';
    }
}


$className = 'Some';

$a = new $className();
$b = [5, 4];

try {
    $class = new ReflectionClass($className);
} catch (ReflectionException $e) {
    echo 'Exception: ' . $e->getMessage();
}
$obj = $class->newInstance(101, 303);

call_user_func(['classes\CalculateTime', 'Start']);

echo 'First ojb: ' . $obj . '<br />';

$obj = call_user_func_array([$class, 'newInstance'], $b);

echo "Second obj $obj <br />";


call_user_func_array([&$a, 'setA'], $b);
call_user_func([$a, 'getA']);


call_user_func(['classes\CalculateTime', 'getDiff']);

/**
 * Documentation for next function
 * @param integer $a
 * @param integer $b
 */
function fun(int $a, int $b)
{
    echo "$a , $b";
}

$obj = new ReflectionFunction('fun');
var_dump($obj->getDocComment());

