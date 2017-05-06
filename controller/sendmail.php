<?php
function sendEmail($name,$edad,$distrito,$email,$phone,$message)
{
  # code...
  $email_to = "soporte@ilustraconsultores.com, branco@ilustraconsultores.com, jeanmev@outlook.es";
  $email_subject = "Consulta desde Benjamin Grosvenor en Lima - Landing";

  $email_message = "Detalles de la consulta: <br>\n\n";
  $email_message .= "Nombre: " . $name . "<br>\n";
  $email_message .= "Edad: " . $edad . "<br>\n";
  $email_message .= "Distrito: " . $distrito . "<br>\n";
  $email_message .= "Correo: " . $email . "<br>\n";
  $email_message .= "Tel&eacute;fono: " . $phone . "<br>\n";
  $email_message .= "Mensaje: " . $message . "<br>\n";

  // Ahora se envía el e-mail usando la función mail() de PHP
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  //dirección del remitente
  $headers .= "From: Benjamin Grosvenor en Lima | < soporte@ilustraconsultores.com >\r\n";
  //Enviamos el mensaje a tu_dirección_email
  $bool = mail($email_to,$email_subject,$email_message,$headers);

  return $bool;
}

?>
