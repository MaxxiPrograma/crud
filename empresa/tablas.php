<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="estilos/estilosTablas.css">
    <title>Tablas</title>
</head>
<header>
    <p> TABLA </p>
</header><br>
<body>
    <div class="contenedor">
        <section>
                <?php
                    include 'conexion.php';
                    $consulta="SELECT * FROM empleados";
                    $resultado=mysqli_query($con, $consulta);
                ?>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>Apellido</td>
                                <td>Edad</td>
                                <td>Sueldo</td>
                        </thead>
                        <tbody>
                            <?php
                            while($filas = mysqli_fetch_assoc($resultado)){

                            ?>
                            <tr>
                                <td><?php echo $filas['id']?></td>
                                <td><?php echo $filas['nombre']?></td>
                                <td><?php echo $filas['apellido']?></td>
                                <td><?php echo $filas['edad']?></td>
                                <td><?php echo $filas['sueldo']?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $filas['id'] ?>">Editar</a>
                                    <a href="eliminar.php?id=<?php echo $filas['id']?>">Eliminar</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        
            </table>     
        </section>
        <div class="Volver">
            <a href="http://localhost/empresa/modificar.php"><input class="VolverBut" type="submit" name="" value="Volver"></a>
        </div>
    </div>
</body>
</html>