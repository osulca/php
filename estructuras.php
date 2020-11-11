<?php
// estructuras condicionales
// IF - ELSE
$a = 10;
$b = "Hola";

if($a != $b){
	// si se cumple
	echo "no son iguales";
}
echo "<br>";
if($a == $b){
	// si se cumple
	echo "son iguales";
}else{
	// si no se cumple
	echo "no son iguales";
}

echo "<p>";
//SWITCH
$c = "Otro";
switch ($c) {
	case 'Hola':
		echo "Hola";
		break;

	case 'Ola':
		echo "Ola";
		break;
	
	default:
		echo "Ninguno";
		break;
}
echo "<p>";

//ESTRUCTURAS DE CONTROL 
// FOR
for($i=0; $i<=10; $i++){
	echo $i."<br>";
}
echo "<p>";
// FOREACH
$array1 = array(1,2,3, "Ana", "Julio");
$array12 = array(
	"nro1" => 1,
	"nro2" => 2,
	"nro3" => 3, 
	"nombre1" => "Ana", 
	"nombre 2" => "Julio"
);

foreach ($array1 as $item) {
	echo $item."<br>";
}
echo "<p>";
foreach ($array12 as $indice => $item2) {
	echo $indice." ".$item2."<br>";
}
// WHILE
// DO - WHILE


