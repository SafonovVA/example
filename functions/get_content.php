<?php
function get_content($hostname)
{
    $curl = curl_init($hostname);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_HEADER, true);
    curl_setopt($curl, CURLOPT_NOBODY, true);

    $content = curl_exec($curl);
    curl_close($curl);
    return $content;

    return explode("\r\n", $content);
}