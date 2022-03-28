<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Estilos/Eje01.css">
	<title>Ejercicio1</title>
</head>
<body>
	<form action="../index.php">
		<input type="submit" value="" class="btn2">
	</form>
	<center>
	
	
					
	<form method="POST" action="eje1.php">
		<label class="letra">
ingresar total de compra:<input type="text" name="Comp" class="cajas" size="3" required=""><br>
ingresar un numero (1 al 100):<input type="text" name="Num" class="cajas" size="3" required=""><br>
<input type="submit" value="" class="btn" name="btn" id="btn">
<br>
	</form>
	</div>
	
					<?php
if (isset($_POST['btn'])) {
	$num = $_POST['Num'];
	$Comp= $_POST['Comp']; 
		if ($num < 56) {
			$t = $Comp*0.10;
			$tt = $Comp - $t;
			$d = "%10";
		}elseif ($num >= 56) {
			$t = $Comp*0.30;
			$tt = $Comp - $t;
			$d = "%30";
		}
		echo "Felicidades tiene un descuento del $d<br>";
		echo "Pago ingresado:$$Comp (Pago sin el descuento Aplicado)<br>";
		echo "El descuento del $d es :$$t <br>";
		echo "Pago con el descuento Aplicado es de: $$tt";
}

?>
</label>
	</center>