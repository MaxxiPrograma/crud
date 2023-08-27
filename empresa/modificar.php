<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscador</title>
</head>
<header>
    <p> Bienvenido a la EmPrEsA </p>
</header><br>
<body>
<div class="contenedor1">
    <h1>Ingrese Al Nuevo Empleado</h1>
    <div class="loquesea">
            <div class="conte1">
                <form action="#" method="POST" enctype="multipart/fotm-date">
                        <div class="todo1">
                            <label> ID</label> <br><input class="insertbot" type="int" name="id" id="id"><br>
                            <label> Nombre</label> <br> <input class="insertbot" type="varchar" name="nombre" id="nombre"><br>
                            <label> Apellido</label> <br> <input class="insertbot" type="varchar" name="apellido" id="apellido"><br>
                            <label> Edad</label> <br> <input class="insertbot" type="int" name="edad" id="edad"><br>
                            <label> Sueldo</label> <br> <input class="insertbot" type="float" name="sueldo" id="sueldo">
                        </div>
                        <div class="insertbut1">
                            <br><input class="insertbut" type="submit" name="insertar" value = "Insertar" id="insertar"><br>
                        </div>
                </form>
            </div>
            <article>
                <?php
                    if(isset($_POST['insertar'])){
                        $id=$_POST['id'];
                        $nombre=$_POST['nombre'];
                        $apellido=$_POST['apellido'];
                        $edad=$_POST['edad'];
                        $sueldo=$_POST['sueldo'];
                        require("conexion.php");
                        $consulta="INSERT INTO empleados(id, nombre, apellido, edad, sueldo) values ('$id', '$nombre', '$apellido', '$edad','$sueldo')";
                        $resultados=mysqli_query($con, $consulta);

                        if($resultados==false){
                            echo"<script> alert ('Error al Insertar Registro')</script>";
                            
                        }
                        else{
                            
                            echo"<script> alert ('Registro Insertado Correctamente')</script>";
                        }
                        mysqli_close($con);
                                
                    }
                 
                 
                ?>
            </article>
    </div>
</div>
        <div class="Tabla">
            <br><a href="http://localhost/empresa/tablas.php"><input class="Ver_Tabla" type="submit" name="" value="Ver Tabla"></a>
        </div>
</body>
</html>
