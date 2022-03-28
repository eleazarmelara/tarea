<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 2</title>
	<link rel="stylesheet" type="text/css" href="../Estilos/Eje02.css">
</head>
<body>
	<form action="../index.php">
		<input type="submit" class="btn" value="">
	</form>
	<center>
		
<label class="contenedor-principal">
	
<form method="POST" action="eje2.php">
	
Seleccione una Fecha
<br>Dia:
<select name="Dia" class="cajas">
	<option>-</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>
Mes:<select name="Mes" class="cajas">
	<option>-</option>
	<option value="Enero">Enero</option>
	<option value="Febrero">Febrero</option>
	<option value="Marzo">Marzo</option>
	<option value="Abril">Abril</option>
	<option value="Mayo">Mayo</option>
	<option value="Junio">Junio</option>
	<option value="Julio">Julio</option>
	<option value="Agosto">Agosto</option>
	<option value="Septiembre">Septiembre</option>
	<option value="Octubre">Octubre</option>
	<option value="Noviembre">Noviembre</option>
	<option value="Diciembre">Diciembre</option>
</select>
Año: "2022"
<input type="submit" name="btn" id="btn" value="" class="btn2">
</form>
	
</label>

	<?php 
if (isset($_POST['btn'])) {
	if (isset($_POST['Dia'],$_POST['Mes'])) {
		$D= $_POST['Dia'];
		$M= $_POST['Mes'];
		if ($D == "15" && $M == "Septiembre") {
			
			?>
			<body class="f1">
			<label class="texto1"> 
				<br>
				Feliz Dia de Independencia 
			
			</label>
			</body>
			<?php
		}elseif ($D == "1" && $M == "Octubre") {
			?>
			<body class="f2">
				<label class="texto2">
					Dia del Niñ@
				</label>
			</body>
			<?php
		}elseif ($D == "10" && $M == "Mayo") {
			?>
			<body class="f3">
				<label class="texto3">
					Dia de la Madre
				</label>
			</body>
			<?php
		}elseif ($D == "17" && $M == "Junio") {
			?>
			<body class="f4">
				<labelv class="texto4">
					Dia del padre
				</label>
			</body>
			<?php
		}elseif ($D == "22" && $M == "Junio") {
			?>
			<body class="f5">
				<label class="texto5">
					Dia del Maestro
				</label>
			</body>
			<?php
		}elseif ($D == "25" && $M == "Diciembre") {
			?>
			<body class="f6">
				<label class="texto6">
					Feliz Navidad
				</label>
			</body>
			<?php
		}elseif ($D == "13" && $M == "Septiembre") {
			?>
			<body class="f7">
				<label class="texto7">
				Dia del programador
				</label> 
			</body>
			<?php
		}elseif ($D == "3" && $M == "Mayo") {
			?>
			<body class="f8">
			<label class="texto8">
				Dia de la Cruz
			</label>
			</body>
			<?php
		}elseif ($D >= "10" && $D <= "16" && $M == "Abril") {
			?>
			<body class="f9">
				<label class="texto9">
					Semana Sanat
				</label>
			</body>
			<?php
		}else{
			?>
			<label class="contenedor-principal">
				<br><br>
				<body class="p1">
					 
				</body>
			</label>
			<?php
		}
	}
	
}

?>
		

<br>



</center>
</labelv>


</body>