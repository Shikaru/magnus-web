<?php 
$id_producto=4; //se obtendra mediante Gett_Post ID o mediante una funcion que traiga el id
$elemento='Titulo';
$marca='Gates';
$codigo='7389';
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<title></title>
	</head>
<div class="bloque-producto-statico"><div class="bloque-producto-flex">
<div class="foto-producto"><img src="imagen-producto.php?id=<?php echo $id_producto ?>&prueba=hola mundo"></img></div>
<div class="descripcion-producto"><h1><?php echo $elemento ?></h1>
	<div class="detail">Marca: <?php echo $marca ?></div>
	<div class="detail" >Codigo: <?php echo $codigo ?></div>
</div>
</div></div>
</html>