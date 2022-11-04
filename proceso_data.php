<?php

require_once 'conexiondb.php';

$marca = (string)$_POST['marca'];
echo $modelo = (string)$_POST['modelo'];
$precio = (int)$_POST['precio'];
$idmoto = substr(sha1($marca.$modelo.$precio),0,8);

    $sentencia = "INSERT INTO motoventas (idmoto,marca,modelo,precio) VALUES ('$idmoto','$marca','$modelo','$precio')";
    $data = mysqli_query($data_conexion,$sentencia);
	if($data==TRUE):
	   echo 'Los datos se guardaron con &eacute;xito!!';
	endif;
	
     mysqli_free_result($sentencia);
     mysqli_close($data_conexion);


?>