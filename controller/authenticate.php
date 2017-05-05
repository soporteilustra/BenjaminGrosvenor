<?php
session_start();
include_once 'connection.php';

$user = $_POST['user'];
$pass = $_POST['password'];
$table = 'admi';

if (userExists($user,$table, $conexion)) {
  if (matchPassword($user, $pass, $table, $conexion)) {
    $band = 'success';
  } else {
    $band = 'pass';
  }
} else {
    $band = 'user';
}
$_SESSION['result'] = $band;
header('Location: http://localhost:8000/registros/');

function userExists($user, $table,$conexion)
{
  $band = false;
  $consulta= "SELECT * FROM $table  WHERE usuario = '$user'";
  $resultado = mysqli_query($conexion,$consulta);
  $row = mysqli_fetch_row($resultado);
  if (sizeof($row) > 0) {
    $band = true;
  }
  return $band;
}

function matchPassword($user,$pass,$table,$conexion)
{
  $band = false;
  $consulta = "SELECT * FROM $table WHERE usuario = '$user' AND password = '$pass'";
  $resultado = mysqli_query($conexion,$consulta);
  $row = mysqli_fetch_row($resultado);
  if (sizeof($row) > 0) {
    $band = true;
  }
  return $band;
}

?>
