<?php

$headers = 'From: fananibastiana@yahoo.com' . "\r\n" . 
           'MIME-Version: 1.0' . "\r\n" .
           'Content-Type: text/html; charset=utf-8';

$result = mail("fbaabcd@gmail.com", "Hello World", "abcderfgfjfjh", $headers);
var_dump($result)
?>