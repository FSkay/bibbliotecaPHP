<?php

$ch = curl_int();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_URL, "http://192.162.1.153/android/json1/listar_livros.php");

$result = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$arrResultado = json_decode($result);
echo '<h1>';
echo '<pre>' . print_r($httpCode, true) . '</pre><br>';
echo '<h1>';
echo '<pre>' . print_r($arrResultado [0], true) . '</pre><br>';

?>
