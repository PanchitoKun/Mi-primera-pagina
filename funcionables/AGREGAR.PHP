<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Datos Personales</title>

    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="icon" type="image/png" href="imagenes/pato.png">
    <style>
            body{
                background-image: url("https://cdn.discordapp.com/attachments/1105641701462261823/1159305376957743134/fondo1.gif");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
        </style>
</head>
<body>
    <div class="container">
        <h1>Formulario de Datos Personales</h1>
        <form method="post">
        <?php error_reporting(0); ?>
            <label for="rut">RUT:</label>
            <input type="text" name="rut" value="" required>
            <br>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="" required>
            <br>
            <label for="apellido">Apellidos:</label>
            <input type="text" name="apellido" value="" required>
            <br>
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" value="" required>

            <label for="sexo">Sexo:</label>
<select  name="sexo" required>
    <option value="Femenino">Femenino</option>
    <option value="Masculino">Masculino</option>
</select>

            <br>
            <label for="region">Región:</label>
            <select name="region" required>
                <option value="Región Metropolitana">Región Metropolitana</option>
                <option value="Valparaíso">Valparaíso</option>
                <option value="Biobío">Biobío</option>
                <option value="Otra">Otra</option>
            </select>
            <br>
            <input type="text" name="telefono" value="" required>
            <label for="telefono">Teléfono:</label>
<br>      
<input type="submit" name="btnenviar" value="Enviar">
            <br>
            <br>
            <a href="AGREGAR.PHP">Agregar</a><br>
        <a href="Eliminar.php">Eliminar</a><br>
        <a href="index.php">Inicio</a><br>
        <a href="ModificarYakuza.php">Modificar</a><br>
            
            <br>
            <br>
            <p> aprender la fiesta</p>
            <audio   autoplay loop volumen="30">
                <p> aprender la fiesta</p>
        <source src="https://cdn.discordapp.com/attachments/1159307133867802654/1161388814745485496/MUSICA.mp3"
         type="audio/mpeg">
    </audio>
        </form>
        <?php 
       if($_POST['btnenviar']=="Enviar"){
            # cuando tienes que $nombre = $_POST['nombre']; asi se hace no asi $nombre = $_POST['txtnombre'];
            include("funciones.php");
            $cnn = Conectar();
            $rut = $_POST['rut'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $FechaNAC = $_POST['fecha_nacimiento'];
            $sexso = $_POST['sexo'];
            $region = $_POST['region'];
            $fono = $_POST['telefono'];
            $sql = "INSERT INTO clientes VALUES ('$rut','$nombre','$apellido','$FechaNAC','$sexso','$region','$fono')";
            mysqli_query($cnn,$sql);
            echo "<script>alert('Se han grabado los datos')</script>";
        }?>  
   </div> 
    
</body>
</html>
