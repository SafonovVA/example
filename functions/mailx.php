<?php

function mailx($mail)
{
    list($head, $body) = preg_split("/\r?\n\r?\n/s", $mail, 2);
    $to = '';
    if (preg_match('/^To:\s*([^\r\n]*)[\r\n]/m', $head, $p)) {
        $to = @$p[1];
        $head = str_replace($p[0], '', $head);
    }

    $subject = '';
    if (preg_match('/^Subject:\s*([^\r\n]*)[\r\n]/m', $head, $p)) {
        $subject = @$p[1];
        $head = str_replace($p[0], '', $head);
    }

    return mail($to, $subject, $body, trim($head));

}