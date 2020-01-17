<?php
require_once 'config/main.php';

use classes\CalculateTime;

class Some
{
    public int $a = 4;
    public int $b = 5;

    public function __construct($newA, $newB)
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
}
call_user_func(['classes\CalculateTime', 'Start']);

$class = 'Some';

$a = new $class();
$b = [5, 4];

$new = new ReflectionClass($class);
$obj = $new->newInstance(101, 303);

echo 'First ojb: ' . $obj . '<br />';

$obj = call_user_func_array([$class, 'newInstance'], $b);
echo 'Second obj' . $obj . '<br />';

//call_user_func_array([&$a, 'setA'], $b);
//call_user_func([$a, 'getA']);

call_user_func(['classes\CalculateTime', 'getDiff']);

