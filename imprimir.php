<?php

include('./conexion.php');


$resultado = mysqli_query ($conn,"SELECT * FROM productos");


while ($fila = $resultado->fetch_assoc()){
    echo
    $fila["precio"]."".$fila["nombre"];
}