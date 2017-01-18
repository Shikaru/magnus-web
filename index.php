<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
<!--	<link rel="stylesheet" type="text/css" href="mystyle.css">
-->
	<link rel="stylesheet" type="text/css" href="productos-en-venta.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title></title>
	</head>
	<body>
					
		<?php
			include_once './include.php';

//			$sql = "SELECT id_PK, elemento, marca, codigo, otros FROM productos";
			$sql = "SELECT * FROM productos_disponibles";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
//					$var = new product_info($row["id_PK"],$row["elemento"],$row["marca"],$row["codigo"], $row["otros"]);
					$var = new product_info($row["id"],$row["elemento"],$row["marca"],$row["codigo"], $row["otros"], $row["Disponibilidad"], $row["precio_legal"]);
					$var->show_product_info();
/*					echo'<div class="bloque-producto-statico"><div class="bloque-producto-flex">';
					echo '<div class="foto-producto"><img src="imagen-producto.php?id='.$row["id"].'"></img></div>';
					echo '<div class="descripcion-producto"><h1>Titulo descripcion</h1><p>Descripcion</p><p>2nd Descripcion</p></div>';
					echo '</div></div>';
*/				}
			} else {
				echo "0 results";
			}
			$conn->close();
			////////////////////////////////////////////////////////////////////




		?>

		
	</body>
</html>
