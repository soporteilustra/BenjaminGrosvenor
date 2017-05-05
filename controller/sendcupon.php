<?php

function sendCupon($email, $correlativo, $user)
{

  $email_subject = "Benjamin Grosvenor en Lima | Descuento";

  $email_message .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
  $email_message = "<html xmlns='http://www.w3.org/1999/xhtml'>";
  $email_message .= "<head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
  $email_message .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
  $email_message .= "<style media='screen'>.header td{text-align:left;padding:1em 2em}.header td ";
  $email_message .= "h1,.header td h4{margin:0;Margin:0}.img-content{padding:0;margin:0;Margin:0;position:relative}.img-content ";
  $email_message .= "img{width:100%;height:auto}.img-content h1{position:absolute;top:0;right:20px;display:inline-block;background:#fff;padding:.3em}";
  $email_message .= "table.container{background:#000;width:840px;margin:0 auto;Margin:0 auto;text-align:inherit;font-family:monospace,sans-serif}";
  $email_message .= "tr{text-align:center;background:#fff}td img{margin:auto}table{border-spacing:0;border-collapse:collapse}";
  $email_message .= "td{padding:.2em;width:70px}body{background:#e0e0e0;padding:0;margin:0}</style></head>";
  $email_message .= "<body><table class='container'><tr class='header'><td class='' colspan='12'><h1>Felicidades ".$user."!</h1>";
  $email_message .= "<h4 class='text-new'>Imprime este cupón y recibirás el 10% de descuento en la compra de tu entrada.</h4></td></tr>";
  $email_message .= "<tr class='cupon-content'><td class='img-content' colspan='12'><h1>CUPON 000-".$correlativo."</h1>";
  $email_message .= "<img src='http://www.tci.net.pe/emailing/media/imagen2.jpg' alt=''></td></tr></table></body></html>";
  // Ahora se envía el e-mail usando la función mail() de PHP
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  //dirección del remitente
  $headers .= "From: TQ Producciones  < soporte@ilustraconsultores.com >\r\n";
  //Enviamos el mensaje a tu_dirección_email

  mail($email,$email_subject,$email_message,$headers);

}

?>
