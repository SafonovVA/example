<?php
session_name('asdf');
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
$count =& $_SESSION['count'];
$count++;

$server =& $_SERVER['SCRIPT_NAME'];

phpinfo();
?>

<h2>Counter</h2>
<?= $count . '<br />' . session_name() . '<br />' . session_id() . '<br />' . session_save_path() ?><br />
<a href="<?= $server; ?>" target="_blank">Open new window</a>

