<?php
include("./conexion.php");

$id = $_POST["id"];

$sql = "DELETE FROM productos WHERE id='$id'";

mysqli_query($conn, $sql);

include("./imprimir.php");