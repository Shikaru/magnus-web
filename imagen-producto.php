<?php
include './magnusConnDb.php';
if (isset($_GET['id'])) {
	$sql = "SELECT  imagen FROM productos WHERE id_PK=" . $_GET['id'];
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	



	header("Content-Type: image/jpg");
	echo $row['imagen'];

}

?>