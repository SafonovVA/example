<?php

require_once './vendor/autoload.php';

define('DEBUG', true);

define('APP', $_SERVER['DOCUMENT_ROOT'] . '/');
define('CONF', APP . 'config/');
define('VENDOR', APP . 'vendor/');

ini_set('log_errors', 'On');
ini_set('error_log', './logs/php_log.log');

if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    ini_set('display_startup_errors', 'On');
}
else {
    error_reporting(0);
    ini_set('display_errors', 'Off');
    ini_set('display_startup_errors', 'Off');
}

function myErrorHandler($errno, $msg, $file, $line) {
    $errors = [
        2 => 'Warning',
        8 => 'Notice',
    ];
    if (error_reporting() === 0) {
        return;
    }
    $stacks = debug_backtrace();
    //die(var_dump($stacks));
    echo '<hr><div style = "border-style: inset; border-width: 2px">';
    echo 'Error: <b>' . $errors[$errno] . '</b><br />';
    echo 'File: <b>' . $file . '</b>, line <b>' . $line . '</b><br />';
    echo 'Text: <b>' . $msg . '</b>';
    ?>
    <table border="1">
        <tr>
            <th>Function</th>
            <th>Stack trace</th>
            <th>Line</th>
        </tr>
        <?php foreach ($stacks as $stack): ?>
            <tr>
                <td><?= $stack['function'] . '(' . $stack['args'][0] . ')'; ?></td>
                <td><?= $stack['file']; ?></td>
                <td><?= $stack['line']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php
    echo '</div><hr>';
}

set_error_handler('myErrorHandler', E_ALL);
//restore_error_handler();