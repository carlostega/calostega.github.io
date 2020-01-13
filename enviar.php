<?php
 $destino="apolocorporativo3@gmail.com";
 $nombre=$_POST["name"];
 $correo=$_POST["email"];
 $asunto=$_POST["asunto"];
 $mensaje=$_POST["message"];
 $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: " .$asunto. "\nAsunto: ".$mensaje;
 mail($destino,"Contacto", $contenido);
 header("Location: index.html");

?>