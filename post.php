<?php
$body = "first_name=Igor&last_name=Bayer";
$opts = [
    'http' => [
        'method' => 'POST',
        'user_agent' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:72.0)',
        'header' => "Content-type: application/x-www-form-urlencoded\r\n" .
                    "Content-length: " . mb_strlen($body),
        'content' => $body
    ]
];

/*echo '<pre>';
print_r($opts);
echo '</pre>';
die();*/

$context = stream_context_create($opts);
echo file_get_contents('http://example.test/handler.php', false, $context);
