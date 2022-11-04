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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script language="javascript">
$(document).ready(function(){
    $().ajaxStart(function(){
        $('#loading').show();
        $('#result').hide();
		document.getElementById("submit").disabled = true;
	    document.getElementById("submit").value = 'Cargando...';
    }).ajaxStop(function(){
        $('#loading').hide();
        $('#result').fadeIn('slow');
		/*$('#infopersons').val("");
		$('#correo').val("");
		$('#telefono').val("");
		$('#relacion').val("");
		$('#motivo').val("");*/
		document.getElementById("marca").value = '';
		document.getElementById("modelo").value = '';
		document.getElementById("precio").value = '';
		document.getElementById("submit").disabled = false;
	    document.getElementById("submit").value = 'Cargar Producto';
		document.getElementById("reset").click();
		document.querySelector("#reset").click();
		$('#resultado').load("view_motos.php");
    });
    $('#form').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#result').html(data);
				document.getElementById("reset").click();
        		document.querySelector("#reset").click();
				$('#marca').val("");
		        $('#modelo').val("");
		        $('#precio').val("");
				$('#resultado').load("view_motos.php");
            }
        })
        
        return false;
    }); 
	$('#resultado').load("view_motos.php");	
})  


	function ver(){
	
	$('#resultado').load("view_motos.php");
	
	}
	$('#resultado').load("view_motos.php");
	
	
</script>
    <form id="form" class="form" name="form" action="proceso_data.php" method="post">
<table border="0">
<tr>
<td colspan="2"><center><div style="font-size:1.3vw; font-weight:670;">Ingrese Moto al Sistema</div></center></td>
</tr>

<tr>
<td class="labelt"><label>Marca</label></td>
<td><input type="text" id="marca" name="marca" placeholder="Ingrese marca..."></td>
</tr>

<tr>
<td class="labelt"><label>Modelo</label> </td>
<td><input type="text" id="modelo" name="modelo" placeholder="Ingrese modelo..."></td>
</tr>

<tr>
<td class="labelt"><label>Precio</label></td>
<td><input type="text" id="precio" name="precio" placeholder="Ingrese precio..."></td>
</tr>

<tr>
<td><input id="reset" type="reset" name="reset" value="Borrar"></td>
<td><input id="submit" type="submit" name="submit" value="Cargar Producto" onclick="javascript:ver();"></td>
</tr>

</table>
    </form>
<br />
<div id="resultado"></div>

</div>
</center>
<br />
</body>
</html>