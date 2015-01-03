<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de ventas</title>
</head>
<body>
	<form method="post">
Servicio de ventas:</br>
<br />Cliente:</br>
<input name="cliente" type="text" />
<br />Producto:</br>
<input name="producto" type="text"  />
<br />Cantidad:</br>
<input name="cantidad" type="number" />
<br />Precio unitario:</br>
<input name="precio" type="number" /></br></br>
<input type="submit"/>
</form>

<?php 
echo "Cliente </br>";
echo htmlspecialchars($_POST['cliente']); ?>.
<?php
echo "Nombre del Producto </br>";
echo htmlspecialchars($_POST['producto']); ?>.
<?php 
 echo "Cantidad:</br>";
 $cant=(int)$_POST['cantidad'];
 echo "<br>" 

 ?>.
<?php 
echo "precio </br>";
$precio=(int)$_POST['precio']; 

?>.
<?php
echo "Monto a pagar:</br>";
 $valor=$precio*$cant;
 if($valor > 1000){
 	echo $valor."</br>vale por 100 soles";
 }
?>.


</body>
</html>