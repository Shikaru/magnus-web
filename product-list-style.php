<!--
$this = es el objeto "product_info" del archivo productos.php

-->					

<!-- Version 0.1 -->
<!-- 
<div class="bloque-producto-statico">
	<div class="bloque-producto-flex">
		<div class="foto-producto">
			<img src="imagen-producto.php?id=<?php echo $this->id; ?>"></img>
		</div>
		<div class="descripcion-producto">
			<h1><?php echo $this->name;  ?></h1>
			<div class="detalles">
				<div class="detail">Marca: <?php echo $this->marca; ?></div>
				<div class="detail">Cod: <?php echo $this->product_code; ?></div>
				<div class="detail">Cod: <?php echo $this->otros; ?></div>
				<div class="detail">Cod: <?php echo $this->otros; ?></div>
				<div class="detail">Cod: <?php echo $this->otros; ?></div>
			</div>
		</div>
	</div>
</div>
-->
<!-- Version 0.2 -->
<div class="bloque-principal">
	<img class="foto" src="imagen-producto.php?id=<?php echo $this->id; ?>"></img>
	<div class="bloque-descripcion">
		<h1 class="bloque-titulo"><?php echo $this->name;  ?></h1>
		<div class="bloque-datos">Datos
		
		</div>
	</div>
	<div class="bloque-tres">Tres
		
	</div>
</div>