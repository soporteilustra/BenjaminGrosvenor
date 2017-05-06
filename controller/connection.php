<?php
$conexion = new mysqli("localhost", "benjamin_root", "ilustra27@@!!", "benjamin_concierto");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}

?>
