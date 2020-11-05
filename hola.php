<?php
	echo "Hola mundo";
// declaracion de variables
	$variable = " otra vez";
	echo "hola".$variable;
	echo "<p>";

/* ------
Tipos de datos
--------- */
$boleano1 = true;
$boleano2 = false;

$enteros = 34;
$número_grande = 9223372036854775807; //para 64bits

$float = 10.4;

$string1 = "Cadena 1";
$string2 = 'Cadena 2';
var_dump($string2);
echo "<p>";
// forma 1
$array1 = array(1,2,3, "Ana", "Julio");
$array12 = array(
	"nro1" => 1,
	"nro2" => 2,
	"nro3" => 3, 
	"nombre1" => "Ana", 
	"nombre 2" => "Julio"
);
var_dump($array1);
echo "<br>";
var_dump($array12);
echo "<p>";
// forma 2
$array2 = [1,2,3, "Ana", "Julio"];
$array22 = [
	"nro1" => 1,
	"nro2" => 2,
	"nro3" => 3, 
	"nombre1" => "Ana", 
	"nombre 2" => "Julio"
];
var_dump($array2);
echo "<br>";
var_dump($array22);