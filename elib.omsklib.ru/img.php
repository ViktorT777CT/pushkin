<?php

// файл временная загрушка для вывода на HTTPS, т.к. картинки на HTTP

$ch = curl_init(urldecode($_GET['img']));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_HEADER, TRUE);
$data = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

list($header,$body) = explode("\r\n\r\n", $data, 2);

$headers = explode("\r\n", $header);

foreach ($headers as $h) {
    if (preg_match('/Content-/i', $h)) {
        header($h);
    }
}

echo $body;
