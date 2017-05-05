<?php
//Base de datos
$conexion = new mysqli('localhost','root','root','concierto');

//fecha de la exportación
$fecha = date("d-m-Y");
$consulta= "SELECT * FROM registros";
$resultado= $conexion->query($consulta);

//Inicio de la instancia para la exportación en Excel
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Registros_Concierto_BenjaminGrosvenor_$fecha.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<table border=1> ";
echo "<tr> ";
echo  "<th colspan='6'>REPORTE DE REGISTROS - CONCIERTO BENJAMIN GROSVENOR </th> ";
echo "</tr> ";
echo "<tr> ";
echo  "<th>N&deg;</th> ";
echo  "<th>Nombre</th> ";
echo 	"<th>Edad</th> ";
echo 	"<th>Distrito</th> ";
echo  "<th>Correo electrónico</th> ";
echo  "<th>Número de contacto</th> ";
echo  "<th>Mensaje</th> ";
echo 	"<th>Fecha de suscripción</th> ";
echo "</tr> ";

while($row = mysqli_fetch_array($resultado)){

	$id = $row['id'];
	$nombre = $row['nombre'];
	$edad = $row['edad'];
	$distrito = $row['distrito'];
	$email = $row['email'];
  $telefono = $row['telefono'];
  $message = $row['mensaje'];
	$fecha = $row['fecha'];

	echo "<tr> ";
	echo 	"<td>".$id."</td> ";
	echo 	"<td>".$nombre."</td> ";
	echo 	"<td>".$edad."</td> ";
	echo 	"<td>".$distrito."</td> ";
  echo 	"<td>".$email."</td> ";
  echo 	"<td>".$telefono."</td> ";
  echo 	"<td>".$message."</td> ";
	echo 	"<td>".$fecha."</td> ";
	echo "</tr> ";

}
echo "</table> ";

?>
