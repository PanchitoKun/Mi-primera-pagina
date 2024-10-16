<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos2.css">
    <link rel="icon" type="image/jpg" href="imagenes/icon.ico">
    <?php error_reporting(0); ?>
    <style>
            body{
                background-image: url("https://media.discordapp.net/attachments/1159307133867802654/1159726126374068264/antender.gif?ex=6532121f&is=651f9d1f&hm=e84b4f1881cdaed243473879fec0dbfa012ed72e7d3c8bdd082f345f5c32d8de&=");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            a:link {
        color: blue;
        text-decoration: none;
    }
    .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ff72ff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            animation: disco 3s linear infinite;
        }

        @keyframes disco {
            0% { border: 3px solid #ff72ff; }
            25% { border: 3px solid #ff0000; }
            50% { border: 3px solid #00ff00; }
            75% { border: 3px solid #0000ff; }
            100% { border: 3px solid #ff72ff; }
        }

    


    
    a:visited {
        color: #120908;
        text-decoration: none;
    }

   
    a:hover {
        color: #85367f;
        text-decoration: underline; /* Esto subraya el enlace al pasar el mouse */
    }

   
    a:active {
        color: #0000ff;
    }
        </style>
    
    <title>Modificar Datos</title>
</head>
<body>
    <h1>Modificar Datos del Cliente</h1>
    <div class="container">
        <h2>Bienvenido a YAKUZA CLIENT</h2>
        <p> EXPLICACION  :  es modificar, sus datos por si llego a cometer un error, por la COMPAÑÍA YAKUZA.</p>
        <p>!Complete LAS opciónes para comenzar la fiesta!.</p>
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
                $fechaNacimiento = $row[3];
                $sexo = $row[4];
                $region = $row[5];
                $fono = $row[6];
            } else {
                echo "<script>alert('El rut no existe')</script>";
            }
        }
        ?>

        <form  method="post">
            Rut:
            <input type="text" name="txtRut" value="<?php echo isset($rut) ? $rut : ''; ?>" size="10" maxlength="11" >
            <input type="submit" name="txtBus" value="Buscar">
            <br>
            Nombre:
            <input type="text" name="Nomtxt" value="<?php echo isset($nombre) ? $nombre : ''; ?>" maxlength="25">
            <br>
            Apellido:
            <input type="text" name="Apetxt" value="<?php echo isset($apellido) ? $apellido : ''; ?>" maxlength="25">
            <br>
            Fecha de Nacimiento:
            <input type="date" name="FecNactxt" value="<?php echo isset($fechaNacimiento) ? $fechaNacimiento : ''; ?>">
            <br>
            Sexo:
            <select name="Sexotxt">
                <option value="Femenino" <?php if(isset($sexo) && $sexo == 'Femenino') echo 'selected'; ?>>Femenino</option>
                <option value="Masculino" <?php if(isset($sexo) && $sexo == 'Masculino') echo 'selected'; ?>>Masculino</option>
            </select>
            <br>
            Región:
            <select name="Regtxt">
                <option value="Región Metropolitana" <?php if(isset($region) && $region == 'Región Metropolitana') echo 'selected'; ?>>Región Metropolitana</option>
                <option value="Valparaíso" <?php if(isset($region) && $region == 'Valparaíso') echo 'selected'; ?>>Valparaíso</option>
                <option value="Biobío" <?php if(isset($region) && $region == 'Biobío') echo 'selected'; ?>>Biobío</option>
                <option value="Otra" <?php if(isset($region) && $region == 'Otra') echo 'selected'; ?>>Otra</option>
            </select>
            <br>
            Teléfono:
            <input type="text" name="Teltxt" value="<?php echo isset($fono) ? $fono : ''; ?>">
            <br>
            <input type="submit" name="TxtMod" value="Modificar">
            <br>
            <a href="index.php">Inicio</a>
<br>
<br>
<a href="Eliminar.php">Eliminar</a>
<br>
<a href="ModificarYakuza.php">Modificar</a><br>
<br>
<a href="index.php">Inicio</a>
<a href="AGREGAR.PHP">Agregar</a><br>
<a href="buscarYakuza.php">Agregar</a><br>
<audio  controls loop>
    <source src="audios/MUSICA.mp3" type="audio/mpeg">
    <source src="audios/MUSICA2.ogg" type="audio/mpeg">
</audio>

            
        </form>
        <?php
        if($_POST['TxtMod']=="Modificar"){
            include("funciones.php"); 
            $cnn = Conectar();
            $rut = $_POST['txtRut'];
            $nombre = $_POST['Nomtxt'];
            $apellido = $_POST['Apetxt'];
            $fechaNacimiento = $_POST['FecNactxt'];
            $sexo = $_POST['Sexotxt'];
            $region = $_POST['Regtxt'];
            $fono = $_POST['Teltxt'];

            $sql = "UPDATE clientes SET nombre='$nombre', apellido='$apellido', fechaNAC='$fechaNacimiento', sexso='$sexo', region='$region', fono='$fono' WHERE Rut='$rut'";
            mysqli_query($cnn, $sql);
            echo "<script>alert('Se han modificado los datos')</script>";
        }
        ?>
    </div>
</body>
</html>

