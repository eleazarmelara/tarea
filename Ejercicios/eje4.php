<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 4</title>
    <link rel="stylesheet" type="text/css" href="../Estilos/Eje4.css">
</head>
<body>
    <form action="../index.php">
        <input type="submit" value="" class="btn2">
    </form>
<center>
    <label class="letra">
        
    <form action="eje4.php" method="post">
   <p>inicio: <input type="text" class="cajas" name="num1" maxlength="2" size="2" /></p>
   <p>termina: <input type="text" class="cajas" name="num2" maxlength="2" size="2"></p>
   <p><input type="submit" name="btn" value="" class="btn"></p>
</form>
<?php  
if (isset($_POST['btn'])) {
    $n1=$_POST['num1'];
$n2=$_POST['num2'];

     echo "numero Seleccionados<br><br>$n1 como inicio <br>$n2 como limite<br>";
     echo "---------------<br>";
     $i=1;
     while ($n1<=$n2) {
           
           if (($n1%2) == 0) {
            $r1=$n1."multiplo de 2<br>";
           }
           if (($n1%3)==0) {
            $r2= $n1." multiplo de 3<br>";
           }
           if (($n1%5)==0) {
            $r3= $n1." multiplo de 5<br>";
           }
           if (($n1%7) ==0) {
            $r4= $n1." multiplo de 7<br>";
           }
           if (($n1%$n1)==0) {
            $r5= $n1." multiplo de el mismo".$n1."<br>";
           }
           
           $n1++;

           } 
           if (isset($r1)) {
             echo $r1;
           }
            if (isset($r2)) {
             echo $r2;
           }
            if (isset($r3)) {
             echo $r3;
           }
            if (isset($r4)) {
             echo $r4;
           }
            if (isset($r5)) {
             echo $r5;
           }

     
}
?>
    </label>
</center>