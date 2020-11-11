<?php

//while 
echo "<table border='1'>
		<tr>";
$i = 1;
while ($i <= 10) {
	echo "<td>".$i++."</td>";
}
echo "	</tr>
	 </table>";

//while alternativo
echo "<table border='1'>
		<tr>";
$i = 1;
while ($i <= 10):
	echo "<td>".$i++."</td>";
endwhile;
echo "	</tr>
	 </table>";

//do - while
echo "<table border='1'>";
$i = 1;
do{
	echo "<tr>
			<td>".$i++."</td>
		  </tr>";
}while ($i <= 10);
echo "</table>"; 

// for
for ($i=30; $i >= 1; $i-=2) { 
	echo "$i, ";
}

echo "<p>";
// foreach
$nombres = array("Ana", "Miguel", "Pedro", "Valentina", "Jose");
var_dump($nombres);

echo "<table border='1'>";
echo "<tr>
		<th>#</th>
		<th>Nombres</th>
		<th>&nbsp</th>		
	  </tr>";
foreach ($nombres as $i => $nombre) {
	echo "<tr>
			<td>".($i+1)."</td>
			<td>".$nombre."</td>
			<td><a href='#'>Ver Ficha</a></td>
		  </tr>";
}
echo "</table>";

$comidas = array(
	"fruta" => "naranja",
	"verdura" => "coliflor",
	"fruta1" => "manzana",
	"verdura1" => "zanahoria",
	"fruta2" => "pera",
	"verdura3" => "nabo"
);
var_dump($comidas);

echo "<table border='1'>";
echo "<tr>
		<th>#</th>
		<th>Nombres</th>	
	  </tr>";
foreach ($comidas as $i => $comida) {
	echo "<tr>
			<td>".$i."</td>
			<td>".$comida."</td>
		  </tr>";
}
echo "</table>";


$array = [
    [1, 2, 3],
    [3, 4, 5],
];

foreach ($array as list($a, $b, $c)) {
	echo "A: $a; B: $b; C: $c<br>";
}

foreach ($array as $algo) {
	foreach ($algo as $value) {
		echo $value."<br>";
	}
}
?>