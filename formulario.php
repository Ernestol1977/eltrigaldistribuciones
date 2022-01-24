<?php
$destino = "eltrigaldistribuciones@gmail.com";
$apellido = $_POST["apellido"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$domicilio = $_POST["domicilio"];
$correo = $_POST["correo"];
$option = $_POST["option"];
$trato = $_POST["trato"];
$comentario = $_POST["comentario"];

$contenido = "Apellido: " . $apellido . "\nNombre: "  . $nombre . "\nTelefono: " . $telefono . "\nDomicilio: " . $domicilio . "\nCorreo: " . $correo . . "\noption: " . $option . "\nTrato: " . $trato .  "\nComentario: " .$comentario;
    
    
mail($destino,"contacto",$contenido);
header("location:./secciones/gracias.html");
?>