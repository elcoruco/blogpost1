<?php
$conn = new PDO("mysql:host=localhost;dbname=ine_facil;charset=utf8;", "root", "root");

$section = $_GET['section'];

$sql = "SELECT * FROM votaciones_diputados_2015 WHERE estado = 21 AND distrito = 5 AND seccion = {$section}";

$statement = $conn->query($sql);
$response = $statement->fetchAll(PDO::FETCH_OBJ);

header("Content-Type: application/json");
echo json_encode($response);