<?php
// declaracion estricta de tipos de datos
declare(strict_types = 1);

$a = 5;
$b = 15;

var_dump(suma($a, $b));

function saludo(string $mensaje, string $nombre = "Valentina"): void{
	echo $mensaje." ".$nombre;
}

echo "<p>";
function suma(int $nro1, int $nro2):int{
	return $nro1 + $nro2;
}

$mensaje1 = "Hola";
$nombre1 = "Ana";
saludo($mensaje1, $nombre1);
echo "<p>";
/*
1. desarrollar funciones para las operaciones basicas de matematicas y llamarlas, considerar los tipos de datos, mostrar en un mensaje el resultado de las operaciones.
*/ 
function suma2(int $nro1, int $nro2):void{
	echo "la suma es: ".($nro1 + $nro2)."<br>";
}

function resta(int $nro1, int $nro2):void{
	echo "la resta es: ".($nro1 - $nro2)."<br>";
}

function multiplicacion(int $nro1, int $nro2):void{
	echo "la multiplicacion es: ".$nro1 * $nro2."<br>";
}

function division(int $nro1, int $nro2):void{
	echo "la division es: ".$nro1 / $nro2."<br>";
}

$c = 13;
$d = 22;

suma2($c,$d);
resta($c,$d);
multiplicacion($c,$d);
division($c,$d);
echo "<p>";
/*
2. Una función que reciba cinco números enteros como parámetros y devuelva el resultado de sumar los cinco números (tipo función, hay un valor devuelto). Asigna el resultado de una invocación a la función con los números 2, 5, 1, 8, 10 a una variable de nombre $tmp y muestra por pantalla el valor de la variable.
*/

function suma5(int $nro1, int $nro2, int $nro3, int $nro4, int $nro5):int{
	return $nro1 + $nro2 + $nro3 + $nro4 + $nro5;
}

$tmp = suma5(2,5,1,8,10);
echo "La suma total es: ".$tmp;
echo "<p>";
/*
3. Una función que reciba como parámetros el valor del radio de la base y la altura de un cilindro y devuelva el volumen del cilindro, teniendo en cuenta que el volumen de un cilindro se calcula como Volumen = númeroPi * radio * radio * Altura siendo númeroPi = 3.1416 aproximadamente.
*/

function volumenCilindro(float $radio, float $altura):float{
	$numeroPi = 3.1416;
	$volumen = $numeroPi * ($radio ** 2) * $altura;
	return $volumen;
}

echo "el volumen del cilindro es: ".volumenCilindro(13.2, 25). "  m3";
