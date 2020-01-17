<a href="news.php">News</a><br />
<a href="static_page.php">Static Page</a><br />
<a href="destruct.php">Exceptions</a><br />
<a href="directory.php">Directory</a><br />
<a href="clojure.php">Clojure</a><br />
<a href="intl.php">intlChar, user generator</a><br />
<a href="virtual_arr.php">Virtual array</a><br />
<a href="SPL.php">SPL</a><br />
<a href="string_speed.php">string_speed</a><br />
<?php

require_once 'config/main.php';

if (!@filemtime('text.txt')) {
    echo '<hr>File not found<hr>';
}

//$a = 5;

if (@$a === 5) {
   trigger_error("<USER ERROR>", E_USER_ERROR);
}
else {
    echo 0 . '<br />';
}

try {
    $a = 0;
    if ($a === 0) {
        throw new Exception('Division by zero!');
    }
    echo 4;
}
catch (Exception $e) {
    echo $e->getMessage();
}
