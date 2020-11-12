<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
	<input type="text" name="usuario" placeholder="Ingrese usuario"><br>
	<input type="password" name="password" placeholder="Ingrese contraseña"><br>
	<input type="submit" name="submit" value="Login"><br>
</form>
<?php
var_dump($_POST);
echo "<br>";
if(!empty($_POST)){
	echo $_POST["usuario"];
	echo "<br>";
	echo $_POST["password"];
}


