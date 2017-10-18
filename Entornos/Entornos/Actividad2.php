<?php
//Actividad1
//Area del triangulo
$altura=3;
$base=5;
$area=($altura*$base)/2;
echo "$area" . "<br>";

//Actividad2
//Definir Pi
define ("pi",3,1415927);
echo pi . "<br>";
//Area del círculo
$radio=10;
$area=pi*($radio*$radio);
echo "$area" . "<br>";

//Actividad3
//Par o impar
$num=39;
if ($num%2==0) echo "Par" . "<br>";
else if ($num%2!=0) echo "impar" . "<br>";

//Actividad4
$num1=29;
$num2=39;
$num3=7;
if ($num1>$num2 && $num1>$num3) echo ("num1 es el mas grande ".$num1) . "<br>";
else if ($num2>$num1 && $num2>$num3) echo ("num2 es enorme ".$num2) . "<br>";
else if ($num3>$num1 && $num3>$num2) echo ("num3 es el mas grande ".$num3) . "<br>";

//Actividad5
for ($cont=1; $cont<=10; $cont++) echo $cont . "<br>";

//Actividad6
$numbase=39;
$numpot=3;
$n=$numbase;
for ($cont=2;$cont<=$numpot;$cont++){
    $n=$n*$numbase;
}
echo "$n" . "<br>";

//Actividad7
$fact=5
for ($cont=1;$cont<=5; $cont++)
?>