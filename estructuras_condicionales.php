<?php

//if - else 
echo "<table border='1'>
		<tr>";
$i = 1;
while ($i <= 100) {
	echo "<td>".$i;
	if($i%10 == 0){	
		echo "</tr>";
	}else{
		echo "</td>";
	}	
	$i++;
}
echo "	</tr>
	 </table>";

// operador ternario
echo "<p>";
echo "<table border='1'>
		<tr>";
$i = 1;
while ($i <= 100) {
	echo "<td>".$i;
	echo ($i%5 == 0)?"</tr>":"</td>";
	$i++;
}
echo "	</tr>
	 </table>";

//elseif
$a = 5;
$b = 5;

if($a < $b){
	echo "$a < $b";
} elseif ($a == $b) {
	echo "$a = $b";
} else {
	echo "$a > $b";
}

//switch
echo "<p>";
switch ($a <=> $b) {
	case 0:
		echo "$a = $b";
		break;
	case 1:
		echo "$a > $b";
		break;		
	case -1:
		echo "$a < $b";
		break;
}

echo "<p>";
$tipoUsuario = "";
switch ($tipoUsuario) {
	case "estudiante":
		echo "eres estudiante";
		break;
	case "profesor":
		echo "eres profesor";
		break;
	default:
		echo "eres administrador";
		break;
}