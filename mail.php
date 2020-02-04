<?php

require_once 'functions/mailx.php';

/*$mail = mail(
    "safonov.open@gmail.com", #to
    "Mail robot", #Subject
    "Hello!!!",
    join("\r\n", [
        "From: safonov.open@example.test",
        "X-Mailer: PHP/" . phpversion()
    ])
);

echo ($mail) ? 'true' : 'false';*/

$text = "Robot!";
$tos = ['safonov.open@gmail.com'];
$tp1 = file_get_contents('mail.eml');
foreach ($tos as $to) {
    $mail = $tp1;
    $mail = strtr($mail, [
        "{TO}" => $to,
        "{TEXT}" => $text,
    ]);

    $mail = mailx($mail);
    echo $mail ? 'true' : 'false';
}
