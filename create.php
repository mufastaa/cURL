<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/simple-project-/');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

curl_close($ch);

print_r($result);

?>
