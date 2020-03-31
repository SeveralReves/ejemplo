<?php

    $usuario = "user";
    $password = "";
    $servidor = "localhost";
    $basededatos ="gabo";



$conexion = mysqli_connect  ($servidor,$usuario,$password) or die ("No se ha podido conectar con el servidor de Base de datos");


$db = mysqli_select_db($conexion, "nueva") or die ("Nada! Pues va a ser que no se ha podido conectar a la Base de datos");

        //recuperar las variables
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $genero=$_POST['genero'];
    $correo=$_POST['email'];
    $ciudad=$_POST['ciudad'];
    $nacimiento=$_POST['bday'];
    $universidad=$_POST['universidad'];
    $mensaje=$_POST['info'];
    $taller_1=$_POST['taller1'];
    $taller_2=$_POST['taller2'];

    //sentencia sql
    $sql="INSERT INTO congreso VALUES ('$nombre','$apellido','$genero','$correo','$ciudad','$nacimiento','$universidad','$mensaje','$taller_1','$taller_2')";
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);
    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"hubo algun error";
    }else{
        header("Location: confirmacion.html");
    }
     
?>