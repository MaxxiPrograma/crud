<?php
include 'conexion.php';
$id = $_GET['id'];
$consulta = "DELETE FROM empleados WHERE id='$id'";
$resultado = mysqli_query($con, $consulta);
    if($resultado)
        Header('Location: tablas.php');
?>