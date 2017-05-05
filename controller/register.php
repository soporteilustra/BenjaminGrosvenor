<?php
include_once 'connection.php';
include 'sendcupon.php';

//get parameters
$name = $_POST['name'];
$edad = $_POST['edad'];
$distrito = $_POST['distrito'];
$email = $_POST['email'];
$phone = $_POST['telefono'];


//table data
$table = 'registros';

if (!userExists($email, $conexion)) {
  # code...
  $insertar = "INSERT INTO $table (nombre,edad,distrito,email,telefono) VALUES ('$name','$edad','$distrito','$email','$phone')";
  mysqli_query($conexion,$insertar);
  $correlativo = mysqli_insert_id();
  sendCupon($email, $correlativo, $name);
  $message = 'success';

} else {
  # code...
  $message = 'warning';
}


function userExists($user, $conexion)
{
  $band = false;
  $consulta= "SELECT * FROM registros WHERE email = '$user'";
  $resultado = mysqli_query($conexion,$consulta);
  $row = mysqli_fetch_row($resultado);
  if (sizeof($row) > 0) {
    $band = true;
  }
  return $band;
}

mysqli_close($conexion);

echo $message;
?>
