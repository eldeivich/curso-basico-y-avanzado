<?php
$nombre_usuario=$_POST['nombre'];
$email_usuario=$_POST['correo'];
$consulta_usuario=$_POST['consulta'];
// Creo 3 variables que me toman lo que se envía por POST de cada valor

$destino="eldey2017@outlook.com";

$asunto="Consulta enviada desde tu página web";

$mensaje="Nombre: ".$nombre_usuario."\r\n";
$mensaje.="Email: ".$email_usuario."\r\n";
$mensaje.="Consulta: ".$consulta_usuario."\r\n";

$remitente="From: a@a.com";

mail($destino, $asunto, $mensaje, $remitente);


header("Location:index.php?i=ok");
// Si el formulario se envió correctamente, ponme en la url despues del index.php un signo de cerrar pregunta, una letra i, un signo de igual y un ok.
 ?>
