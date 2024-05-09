<?php
include("./conexion.php");

$nombre = $_POST ["nombre"];
$precio = $_POST ["precio"];

$sql = "INSERT INTO productos (nombre,precio) VALUES ('$nombre','$precio')";

mysqli_query($conn, $sql);

include('./imprimir.php');