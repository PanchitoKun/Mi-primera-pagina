<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css4">
    <title>Buscar Clientes</title>
</head>
<body>
    <div class="container">
        <h1 class="titulo">Buscar Clientes</h1>

        <!-- Mostrar a todos los clientes -->
        <h2 class="subtitulo">Mostrar todos los clientes:</h2>
        <form method="post">
            <input type="submit" name="btnVer" value="Mostrar todo">
        </form>

        <?php 
        if(isset($_POST['btnVer']) && $_POST['btnVer'] == "Mostrar todo"){
            include("funciones.php");
            $cnn = Conectar();
            $rs = mysqli_query($cnn,"SELECT * FROM clientes");

            if (mysqli_num_rows($rs) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Rut</th>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido</th>";
                echo "<th>Fecha de Nacimiento</th>";
                echo "<th>Sexo</th>";
                echo "<th>Región</th>";
                echo "<th>Teléfono</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_array($rs)){
                    echo "<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "<td>$row[4]</td>";
                    echo "<td>$row[5]</td>";
                    echo "<td>$row[6]</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "No se encontraron resultados";
            }
        }
        ?>

        <!-- Buscar por Rut -->
        <h2 class="subtitulo">Buscar cliente por Rut:</h2>
        <form method="post">
            <input type="text" name="rut_buscar" placeholder="Ingrese Rut">
            <input type="submit" name="btnBuscarRut" value="Buscar">
        </form>

        <?php 
        if(isset($_POST['btnBuscarRut']) && $_POST['btnBuscarRut'] == "Buscar"){
            include("funciones.php");
            $rut = $_POST['rut_buscar'];
            $cnn = Conectar();
            $rs = mysqli_query($cnn, "SELECT * FROM clientes WHERE rut='$rut'");

            if (mysqli_num_rows($rs) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Rut</th>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido</th>";
                echo "<th>Fecha de Nacimiento</th>";
                echo "<th>Sexo</th>";
                echo "<th>Región</th>";
                echo "<th>Teléfono</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_array($rs)){
                    echo "<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "<td>$row[4]</td>";
                    echo "<td>$row[5]</td>";
                    echo "<td>$row[6]</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "No se encontraron resultados para el Rut: $rut";
            }
        }
        ?>

        <!-- Buscar por Región -->
        <h2 class="subtitulo">Buscar cliente por Región:</h2>
        <form method="post">
            <select name="region_buscar">
                <option value="Región Metropolitana">Región Metropolitana</option>
                <option value="Valparaíso">Valparaíso</option>
                <option value="Biobío">Biobío</option>
                <option value="Otra">Otra</option>
            </select>
            <input type="submit" name="btnBuscarRegion" value="Buscar">
        </form>

        <?php 
        if(isset($_POST['btnBuscarRegion']) && $_POST['btnBuscarRegion'] == "Buscar"){
            include("funciones.php");
            $region = $_POST['region_buscar'];
            $cnn = Conectar();
            $rs = mysqli_query($cnn, "SELECT * FROM clientes WHERE region='$region'");

            if (mysqli_num_rows($rs) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Rut</th>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido</th>";
                echo "<th>Fecha de Nacimiento</th>";
                echo "<th>Sexo</th>";
                echo "<th>Región</th>";
                echo "<th>Teléfono</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_array($rs)){
                    echo "<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "<td>$row[4]</td>";
                    echo "<td>$row[5]</td>";
                    echo "<td>$row[6]</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "No se encontraron resultados para la Región: $region";
            }
        }
        ?>

        <!-- Buscar por Fecha de Nacimiento -->
        <h2 class="subtitulo">Buscar cliente por Fecha de Nacimiento:</h2>
        <form method="post">
            <label for="fecha_nacimiento_desde">Desde:</label>
            <input type="date" name="fecha_nacimiento_desde">
            <label for="fecha_nacimiento_hasta">Hasta:</label>
            <input type="date" name="fecha_nacimiento_hasta">
            <input type="submit" name="btnBuscarFechaNac" value="Buscar">
        </form>

        <?php 
        if(isset($_POST['btnBuscarFechaNac']) && $_POST['btnBuscarFechaNac'] == "Buscar"){
            include("funciones.php");
            $fecha_nacimiento_desde = $_POST['fecha_nacimiento_desde'];
            $fecha_nacimiento_hasta = $_POST['fecha_nacimiento_hasta'];
            $cnn = Conectar();
            $rs = mysqli_query($cnn, "SELECT * FROM clientes WHERE fechaNAC BETWEEN '$fecha_nacimiento_desde' AND '$fecha_nacimiento_hasta'");

            if (mysqli_num_rows($rs) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Rut</th>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido</th>";
                echo "<th>Fecha de Nacimiento</th>";
                echo "<th>Sexo</th>";
                echo "<th>Región</th>";
                echo "<th>Teléfono</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_array($rs)){
                    echo "<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "<td>$row[4]</td>";
                    echo "<td>$row[5]</td>";
                    echo "<td>$row[6]</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "No se encontraron resultados para las fechas seleccionadas.";
            }
        }
        ?>
    </div>
</body>
</html>
