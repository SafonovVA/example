<?php

{
    $cat = dir('./logs');

    while (($file = $cat->read()) !== false) {
        echo $file . '<br />';
    }
    $cat->close();
}

echo '<br />';

{
    unset($cat);

    function simple($from = 0, $to = 10)
    {
        for ($i = $from; $i < $to; $i++) {
            yield $i;
        }
    }

    $value = simple();

    foreach ($value as $val) {
        echo ($val * $val) . ' ';
    }
}

echo '<br />';

{
    $value = simple(4);

    while ($value->valid()) {
        echo ($value->current() * $value->current()) . ' ';
        $value->next();
    }
}

echo '<br />';

{
    $message = 'cant work';
    $check = function (array $errors) use ($message)
    {
        if (isset($errors) && count($errors) > 0) {
            echo $message;
            foreach ($errors as $error) {
                echo $error . '<br />';
            }
        }
    };


    echo '<pre>';
    print_r($check);
    echo '</pre>';

}
echo '<br />';

{

}

echo '<br />';

{

}