<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 3</title>
	<link rel="stylesheet" type="text/css" href="../Estilos/Eje3.css">
</head>
<body>
	<form action="../index.php">
	<input type="submit" name="btn" value="" class="btn2">
</form>
	<center>

	<label class="letra">
			<form method="POST" action="eje3.php">
			
	Nombre del Empleado:
<input type="text" name="nom" class="cajas"><br>
Horas trabajadas:
<input type="text" name="horas" class="cajas"><br>
<input type="submit" name="btnC" value="" class="btn">
		</form>

<?php
if (isset($_POST['btnC'])) {

	$Nombre = $_POST['nom'];
	$Hora = $_POST['horas'];
	$pagoN=0;
	$pagoD=0;
	$pagoT=0;
if ($Hora <= 40) {
	$pagoN = $Hora*15; 

}
if ($Hora >= 40 && $Hora <= 46) {
	$p = $Hora - 40;
	$p2 = $Hora - $p;
	$pagoD = $p*15*2;
	$pagoN=$p2*15;

}
if ($Hora >= 47) {
	$pagoD = $Hora - 46;
	$d = $Hora - $pagoD;
	$p = $d - 40;
	$p2 = $d - $p;
	$pagoD = $p*15*2;
	$pagoN=$p2*15;
	$pagoNN=$Hora - 40;
	$pagoN1=$Hora-$pagoNN;
	$pagoN=$pagoN1*15;
	$horaT=$Hora-46;
	$pagoT = $horaT*15*3;


}

echo "Nombre del empleado : $Nombre<br>";
echo "----Detalle de pago----<br>";
echo "Horas Trabajadas:<br>";
echo "Pago de Horas Normales:$$pagoN <br>";
echo "Pago de Horas Dobles :$$pagoD <br>";
echo "Pago de horas Triples :$$pagoT <br>";

}
?>
	</label>
	</center>