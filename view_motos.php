<table class="productos" border="0">
	
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