<?php
$host = "localhost";
$usuario = "aperezh_video2";
$contrasenia = "Quim_0710";
$base_de_datos = "aperezh_video2";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;