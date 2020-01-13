<?php
 $destino="apolocorporativo3@gmail.com";
 $nombre=$_POST["name"];
 $correo=$_POST["email"];
 $asunto=$_POST["subject"];
 $mensaje=$_POST["message"];
 $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: " .$asunto. "\nsubject: ".$mensaje "\nmessage";
 mail($destino, $contenido);
 header("Location: index.html");
?>