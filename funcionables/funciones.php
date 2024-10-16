<?php
function Conectar() {
    $host = "localhost";
    $user = "id21392446_kun";
    $pass = "123456789A-a";
    $bd = "id21392446_clientes";

    // Crear una conexión a la base de datos
    $cnn = mysqli_connect($host, $user, $pass);

    mysqli_select_db($cnn,$bd);
    return $cnn;

}
?>
