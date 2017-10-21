<?php
$resultado="";
$error="";

if(isset($_POST["nombre"]) && strlen($_POST["nombre"])>0)
{
	// El campo se ha rellenado correctamente
	// En este punto, podemos añadir el valor a la base de datos
	// verificar que sea correcto, saltar de pagina, etc..
	//
	// Nosotros, valor a mostrar un texto indicando que se ha recibido
	// correctamente y vamos a vaciar el input
 
	$resultado="Se ha recibido correctamente el nombre de: ".$_POST["nombre"];
 
	// Vaciamos el contenido para que no se muestre en el input
	$_POST["nombre"]="";

}elseif(isset($_POST["nombre"])){
	// En este punto, el valor de la variable esta definida, pero no tiene valor
	// Lo normal es indicar que hay un error
	$error="El nombre no puede estar vacio";
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validar un campo texto en un formulario con PHP</title>
	<style>
	.error {color:red;}
	.resultado {color:green;}
	</style>
</head>
<body>
	<h1>Validar un campo texto en un formulario con PHP</h1>
	<p>Este código de ejemplo, valida que se haya introducido un texto en el input
	desde PHP</p>

	<form action="<?php echo $_SERVER?>" method="POST">
		<?php
		if($error)
		{
			echo "<div class='error'>".$error."</div>";
		}
		if($resultado)
		{
			echo "<div class='resultado'>".$resultado."</div>";
		}
		?>
		Nombre: <input type="text" id="nombre" name="nombre" value="<?php echo $_POST['nombre']?>">
		<input type="submit" value="Enviar">
	</form>
 
</body>
</html>

<br /><b>Notice</b>:  Undefined index: SELF in <b>C:/xampp/htdocs/dashboard/Sertero WMS/validationdemo.php</b> on line <b>41</b><br />

