<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VENTA - MOTOS</title>
<link href="esquema.css" rel="stylesheet" />
</head>

<body>
<br />
<center>
<div class="vitral">
<br />
<div class="titulo">Venta de Motos</div>
<br />
<?php require_once 'lista.php'; ?>
<br />


<table class="productos" border="1">

<tr>
<td><b>VALOR DISPONIBLE</b></td>
<td colspan="3">
<?php
echo $valordisp = $_POST['montodisp'];
?>
</td>
</tr>

<tr>
<td colspan="4"><b>COMPRA DE MOTOS DE SEGUNDA</b></td>
</tr>

<tr>
<td><b>Valor m&aacute;ximo de compra</b></td>
<td><b>Deducci&oacute;n por participaci&oacute;n</b></td>
<td><b>Deducci&oacute;n por papeler&iacute;a</b></td>
<td><b>Seguro de riesgo</b></td>
</tr>

<?php

$valordisp = $_POST['montodisp'];

if($valordisp > 1 && $valordisp < 100000){
	$disponible = ($valordisp * 2)/100; 
}

if($valordisp > 100000 && $valordisp < 500000){
	$disponible = ($valordisp * 3)/100; 
}

if($valordisp >= 500000){
	$disponible = ($valordisp * 5)/100; 
}

//Papeleria.
$papeleria = 25000;

//Seguro de riesgos.
$seguro = ($valordisp * 5)/100; 

$adisponer = $valordisp - ($disponible + $papeleria + $seguro);

?>

<tr>
<td><?php echo $adisponer; ?></td>
<td><?php echo $disponible; ?></td>
<td><?php echo $papeleria; ?></td>
<td><?php echo $seguro; ?></td>
</tr>

</table>

<br />

<table class="productos" border="0">

<tr>    
<td colspan="3" class="celdastlx"><center>Listado de Motos</center></td>
</tr>

<tr>    
<td class="celdast">Marca</td>
<td class="celdast">Modelo</td>
<td class="celdast">Precio</td>
</tr>

<?php
require_once 'conexiondb.php';
    $sentenciaXX = "SELECT * FROM motoventas";
    $dataX = mysqli_query($data_conexion,$sentenciaXX);
	while($REST = mysqli_fetch_array($dataX)){
?>		
	
<tr>    
<td class="celdas"><?php echo $REST['marca']; ?></td>
<td class="celdas"><?php echo $REST['modelo']; ?></td>
<td class="celdas"><?php echo $REST['precio']; ?></td>
</tr>	
		
<?php		
	}
	
    mysqli_free_result($sentenciaXX);
    mysqli_close($data_conexion);
?>

</table>

<br />

<form action="" method="post">
<label class="labelt" style="background:#000; color:#FFF; padding:8px;">Monto Disponible</label>
<input id="modelo" type="text" name="montodisp" style="width:40%;" placeholder="Ingrese Monto..." />
<br />
<input id="submit" type="submit" name="enviarmonto" value="Cargar Monto" />

</form>


</div>
</center>
<br />
</body>
</html>