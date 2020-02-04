<?php

$email_correct = 'safonov.open@gmail.com';
$email_wrong = 'http://github.com';
echo 'correct = ' . filter_var($email_correct, FILTER_SANITIZE_EMAIL) . '<br />';
echo 'wrong = ' . filter_var($email_wrong, FILTER_VALIDATE_URL) . '<br />';