<?php
// operadores aritmeticos
$a = 2;
$b = 3;

$suma = $a+$b;
$resta = $a-$b;
$multiplicacion = $a*$b;
$division = $a/$b;
$modulo = $a%$b;
$potencia = $a**$b;

var_dump($suma);
echo "<br>";
var_dump($resta);
echo "<br>";
var_dump($multiplicacion);
echo "<br>";
var_dump($division);
echo "<br>";
var_dump($modulo);
echo "<br>";
var_dump($potencia);
echo "<p>";

//operadores de asignacion;
echo "=";
echo "<br>";
echo ".=";
echo $a .= $b; // para cadenas
var_dump($a);
echo "<br>";
echo "+="; 
echo $a += $b; // para nros $a = $b + $a;
var_dump($a);
echo "<p>";

//operadores de comparacion
var_dump(3<8);
var_dump(8>2);
var_dump(8=="8");
var_dump(8==="8");
var_dump(3!=2);
var_dump("Hola"<>"Ola");
var_dump(3<=5);
var_dump(5>=4);
var_dump(8<=>8);

//operadores logicos

AND == &&
OR == ||
XOR
var_dump(!true);

