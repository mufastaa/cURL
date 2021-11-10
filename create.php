<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/php-crash/14_product_crud/01_bad/index.php');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

curl_close($ch);

print_r($result);

?>