<a href="news.php">News</a><br />
<a href="static_page.php">Static Page</a><br />
<a href="destruct.php">Exceptions</a><br />
<a href="directory.php">Directory</a><br />
<?php

require_once 'config/main.php';

if (!@filemtime('text.txt')) {
    echo '<hr>File not found<hr>';
}

//$a = 5;

if (@$a === 5) {
   trigger_error("it's error", E_USER_ERROR);
}
else {
    echo 0 . '<br />';
}

try {
    $a = 0;
    if ($a === 0) {
        throw new Exception('Division by zeroooo!');
    }
    echo 4;
}
catch (Exception $e) {
    echo $e->getCode();
}
