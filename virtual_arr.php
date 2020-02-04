<?php
class InsensitiveArray implements ArrayAccess
{
    private $a = [];

    /*if exist $offset element*/
    public function offsetExists($offset)
    {
        $offset = strtolower($offset);
        $this->log('offsetExists(' . $offset . ')');
        return isset($this->a[$offset]);
    }

    /*return an element by key*/
    public function offsetGet($offset)
    {
        $offset = strtolower($offset);
        $this->log('offsetGet(' . $offset . ')');
        return $this->a[$offset];
    }

    /*sets the new value of an element by key*/
    public function offsetSet($offset, $value)
    {
        $offset = strtolower($offset);
        $this->log('offsetSet(' . $offset . ', ' . $value . ')');
        $this->a[$offset] = $value;
    }

    /*unset an element by key*/
    public function offsetUnset($offset)
    {
        $offset = strtolower($offset);
        $this->log('offsetUnset(' . $offset . ')');
        unset($this->a[$offset]);
    }

    public function log($str)
    {
        echo $str . '<br />';
    }
}

    $a = new InsensitiveArray;
    $a->log('## Set the value (operator =).');
    $a['php'] = 'There is more than one way to do it.';
    $a['php'] = 'Is new value above previous.';
    $a->log('## Gets value of an element (operator[]).');
    $a->log('<b>Value</b>:' . $a['php']);
    $a->log('## Checks isset of an element (operator isset()).');
    $a->log('<b>Exists</b>: ' . (isset($a['php']) ? 'true' : 'false'));
    $a->log('## Unset an element (operator unset()).');
    unset($a['php']);
