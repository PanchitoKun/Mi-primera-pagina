<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio</title>
    <link rel="icon" href="https://media.discordapp.net/attachments/1159307133867802654/1162137086917361724/f.gif?ex=653ad780&is=65286280&hm=db6175658dd653047a775b23a9f7b57c5a3d272db1d2c7dc4623d451c7d71255&=&width=827&height=676" >
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            background-image: url("https://media.discordapp.net/attachments/1159307133867802654/1159307357302571080/1602960687_1494423307_yakuza_high_life.gif?ex=65308c1c&is=651e171c&hm=7c1cddc4b563e2eb6586d45b491eed071a9468458e7fb53c646205123cc06cdd&=");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        header {
            background-color: #f6aecb;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        nav {
            text-align: center;
            background-color: #444;
            padding: 10px;
        }

        nav a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
        }

        nav a:hover {
            background-color: #555;
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

        a:link {
            color: blue;
            text-decoration: none;
        }

        a:visited {
            color: #bf4b9a;
            text-decoration: none;
        }

        a:hover {
            color: #cc97fc;
            text-decoration: underline;
        }

        a:active {
            color: #ffc4f4;
        }
        
    </style>
</head>
<body>
    <header>
        <h1>YAKUZA CLINT</h1>
    </header>
    <nav>
        <a href="AGREGAR.PHP">Agregar</a>
        <a href="Eliminar.php">Eliminar</a>
        <a href="index.php">Inicio</a>
        <a href="ModificarYakuza.php">Modificar</a>
        <a href="buscarYakuza.php">buscarYakuza</a>
    </nav>
    <div class="container">
        <h2>Bienvenido a YAKUZA CLIENT</h2>
        <p>Este es un sitio web para agregar, modificar y eliminar clientes por la COMPAÑÍA YAKUZA.</p>
        <p>Seleccione LA opción DE PLEY para comenzar la fiesta.</p>
        <audio  controls loop>
            <source src="audios/MUSICA.mp3" type="audio/mpeg">
            <source src="audios/MUSICA2.ogg" type="audio/mpeg">
        </audio>
    </div>
</body>
</html>
