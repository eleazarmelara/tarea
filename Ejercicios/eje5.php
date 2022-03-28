<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio</title>
		<link rel="stylesheet" type="text/css" href="../Estilos/Eje5.css">
		<meta charset="utf-8">
	</head>
	<body>
		<form action="../index.php">
			<input type="submit" value="" class="btn2">
		</form>
		<center>

<label class="letra">
				<form method="POST" action="eje5.php">
			<div class="contenedor"> 
					
		ingrese un texto:
	<input type="text" name="texto" class="cajas">
	<input type="submit" name="btn" value="" class="btn">
	<br>
		<?php
	if (isset($_POST['btn'])) {
			$texto= $_POST['texto'];
			$a = str_replace('a', '@',$texto);
			$e = str_replace('e','!',$a);
			$i = str_replace('i','%',$e);
			$o = str_replace('o','#',$i);
			$u = str_replace('u','/',$o);

			echo ($u);

	}
			?>
			</div>
		
</label>
			</form>
		</center>