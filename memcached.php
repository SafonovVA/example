<?php

use function Psy\sh;

require_once 'config/connect.php';
require_once 'config/main.php';

/*if ($m->add('key', 'value')) {
    echo 'success: ' . $m->get('key');
}*/

/*if ($m->append('key', 123)) {
    echo 'success: ' . $m->get('key');
}*/

/*if ($m->add('key', 'value')) {
    echo 'success: ' . $m->get('key');
}
else {
    echo $m->getResultCode();
}*/

/*if (!($key = $m->get('key'))) {
    if ($m->getResultCode() == Memcached::RES_NOTFOUND) {
        $key = 'value';
        $m->add('key', $key);
    }
}
echo $key;*/

eval(sh());

$m->setOption(Memcached::OPT_BINARY_PROTOCOL, true);
echo $m->increment('number', 1, 0);