<?php
$section = $_GET['section'];
$json = file_get_contents("http://prep-ine.appspot.com/api/v1/21/{$section}/seccion.json");
header("Content-Type: application/json");
echo $json;
?>