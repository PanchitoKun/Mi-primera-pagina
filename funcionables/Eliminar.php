<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos2.css">
    <link rel="icon" type="image/ico" href="imagenes/icon2.ico">
    <?php error_reporting(0); ?>
    <title>Eliminar</title>
    <style>
            body{
                background-image: url("https://media.discordapp.net/attachments/1159307133867802654/1159726088008765480/fondo2.gif?ex=65321216&is=651f9d16&hm=473de68473f53c82f6f2f0d1430fc1afaabaa16ad906960ddd8ab62c90de1ebb&=");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            a:link {
        color: blue;
        text-decoration: none;
    }

    
    a:visited {
        color: #ff2a8d;
        text-decoration: none;
    }

   
    a:hover {
        color: red;
        text-decoration: underline; /* Esto subraya el enlace al pasar el mouse */
    }

   
    a:active {
        color: #96abff;
    }
        </style>
</head>
<body>
<h1>Eliminar Cliente</h1>
<br>
<div name="container">
    <?php 
    if(isset($_POST['txtBus']) && $_POST['txtBus'] == "Buscar"){
        include("funciones.php");
        $cnn = Conectar();
        $rut = $_POST['txtRut'];
        $rs = mysqli_query($cnn, "SELECT * FROM clientes WHERE Rut='$rut'");
        if($row = mysqli_fetch_array($rs)){
            $nombre = $row[1];
            $apellido = $row[2];
            $reg = $row[6];
        } else {
            echo "<script>alert('El rut no existe')</script>";
        }
    }
    ?>

    <form  method="post">
        Rut:
        <input type="text" name="txtRut" value="<?php echo isset($rut) ? $rut : ''; ?>" size="10" maxlength="11">
        <input type="submit" name="txtBus" value="Buscar">
        <br>
        Nombre:
        <input type="text" name="Nomtxt" value="<?php echo isset($nombre) ? $nombre : ''; ?>" maxlength="25" readonly>
        <br>
        Apellido:
        <input type="text" name="Apetxt" value="<?php echo isset($apellido) ? $apellido : ''; ?>" maxlength="25" readonly>
        <br>
        Región:
        <input type="text" name="SelReg" value="<?php echo isset($reg) ? $reg : ''; ?>" maxlength="25" readonly>
        <br>
        <input type="submit" name="TxtEli" value="Eliminar">
        <br>
        <a href="AGREGAR.php">Agregar</a><br>
        <br>
        <a href="ModificarYakuza.php">Modificar</a>
        <br>
        <a href="index.php">Incio</a>
        <a href="Eliminar.php">Eliminar</a><br>
        <a href="ModificarYakuza.php">Modificar</a><br>
        <a href="AGREGAR.PHP">Agregar</a><br>
        <br>
        <p> aprender la fiesta</p>
            <audio  controls loop>
                <p> aprender la fiesta</p>
        <source src="audios/MUSICA.mp3" type="audio/mpeg">
        <source src="audios/MUSICA2.ogg" type="audio/mpeg">
    </audio>
    </form>
<?php

    if($_POST['TxtEli']=="Eliminar"){
            include("funciones.php"); 
            $cnn = Conectar();
            $rut = $_POST['txtRut'];
            $sql = "delete from clientes where Rut='$rut'";
            mysqli_query($cnn,$sql);
            echo "<script>alert('Se ha eliminado el dato')</script>";
        }
        ?>
</div>
</body>
</html>
