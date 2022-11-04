<?php
$conex = array('localhost','root','');
$data_conexion = mysqli_connect($conex[0],$conex[1],$conex[2]);
if($data_conexion==TRUE){	
	//echo 'Conexion exitosa!!';	
}else{
    echo 'La conexion fue fallida!?';	
}
$data_base = mysqli_select_db($data_conexion,"motos");
if($data_base==TRUE){	
	//echo 'Conexion exitosa a la base de datos!!';	
}else{
    echo 'La conexion fue fallida a la base de datos!?';	
}
?>