<?php 
// Llamando a lo campos
$nombre = $_POST['nombre']; 
$correo= $_POST['email']; 
$asunto=$_POST['asunto']; 
$mensaje=$_POST['mensaje']; 

// Datos para el correo
$destinatario = "gabrielalexander2@gmail.com"; 
$carta = "De: $nombre \n";
$carta .="Correo: $email \n";
$carta .="Mensaje: $mensaje \n";

// enviando mensaje
mail($destinatario, $asunto, $carta); 
header('Location:mensaje.html')
?> 