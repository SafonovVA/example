<?php

{
    $cat = dir('./logs');

    while (($file = $cat->read()) !== false) {
        echo $file . '<br />';
    }
    $cat->close();
}

echo '<hr>';

{
    unset($cat);

    $simple = function($from = 0, $to = 10)
    {
        for ($i = $from; $i < $to; $i++) {
            yield $i;
        }
    };

    //$value = simple();

    foreach ($simple() as $val) {
        echo ($val * $val) . ' ';
    }
}

echo '<hr>';

{
    $value = $simple(4);

    while ($value->valid()) {
        echo ($value->current() * $value->current()) . ' ';
        $value->next();
    }
}

echo '<hr>';

{
    $message = 'cant work because:<br />';
    $check = function (array $errors) use ($message)
    {
        if (isset($errors) && count($errors) > 0) {
            echo $message;
            foreach ($errors as $error) {
                echo $error . '<br />';
            }
        }
    };

    $message = 'adf';


    echo '<pre>';
    //print_r($check);
    echo '</pre>';
    echo $check(['FIRST', 'Second']);

}

echo '<hr>';

{

}

echo '<hr>';

{

}