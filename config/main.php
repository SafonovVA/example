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
    echo '<hr><div style = "border-style: inset; border-width: 2px">';
    echo 'Error: <b>' . $errors[$errno] . '</b><br />';
    echo 'File: <b>' . $file . '</b>, line <b>' . $line . '</b><br />';
    echo 'Text: <b>' . $msg . '</b>';
    echo '</div><hr>';
}

set_error_handler('myErrorHandler', E_ALL);
restore_error_handler();