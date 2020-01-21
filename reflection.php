<?php
class Base
{
    private int $prop = 0;
    private int $a;

    public function getBase(): int
    {
        return $this->prop;
    }
}

class Derive extends Base
{
    public int $prop = 1;

    public function getDerive(): int
    {
        return $this->prop;
    }
}

echo '<pre>';

$cls = new ReflectionClass('Derive');
$obj = $cls->newInstance();
$obj->prop = 2;
echo 'Base: ' . $obj->getBase() . ', Derive: ' . $obj->getDerive() . '<br />';

var_dump($cls->getProperties());
var_dump($cls->getMethods());

echo '</pre><hr>';
$ext = 0;
foreach(get_loaded_extensions() as $extension) {
    $ext = new ReflectionExtension($extension);
    //var_dump($ext->getConstants());
}

Reflection::export($ext);
