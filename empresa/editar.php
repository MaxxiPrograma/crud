<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="estilos/estilosTablasEditar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>Edite un Empleado</h1>
<body>
    <div class="contenedor">
        <?php
            include 'conexion.php';
            $cod=$_GET['id'];
            $consulta="SELECT * from empleados WHERE id='$cod'";
            $ejecutar=mysqli_query($con, $consulta);
            while($fila=mysqli_fetch_assoc($ejecutar)){
 
        ?>

        <div class="todo">
            <form>
                <div class="Modificar">
                        <input type = "hidden" name = "id" value = "<?php echo $fila['id']?>">
                        <br><label> Nombre </label><br>
                        <input class="modibot" type="text" name="nombre" value="<?php echo $fila['nombre']?>">
                        <br><label> Apellido </label><br>
                        <input class="modibot" type="text" name="apellido" value="<?php echo $fila['apellido']?>">
                        <br><label> Edad </label><br>
                        <input class="modibot" type="int" name="edad" value="<?php echo $fila['edad']?>">
                        <br><label> Sueldo </label><br>
                        <input class="modibot" type="int" name="sueldo" value="<?php echo $fila['sueldo']?>">
                    <div class="modif">
                        <br><input class="botmodi" type="submit" name="" value="Modificar">
                    </div>
                </div>
            </form>
            <?php } ?>
        </div>
        <?php
            $id=$_GET['id'];
            $nombre=$_GET['nombre'];
            $apellido=$_GET['apellido'];
            $edad=$_GET['edad'];
            $sueldo=$_GET['sueldo'];
            if($nombre!=null||$apellido!=null||$edad!=null||$sueldo!=null){
                $consulta2="UPDATE empleados SET nombre='$nombre', apellido='$apellido', edad='$edad', sueldo='$sueldo' WHERE id='$id'";
                mysqli_query($con, $consulta2);
                if($nombre=1){
                    header("location:tablas.php");
                }
                
            }
            
        ?>
    </div>
</body>
</html>