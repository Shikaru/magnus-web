<?php
class product_info {
	public $id;
	public $name;
	public $maca;
	public $product_code;
	public $otros;
	
	function __construct($id, $name, $marca, $product_code, $otros, $disponibilidad, $precio_legal){
		$this->id = $id;
		$this->name = $name;//yeah 
		$this->marca = $marca;
		$this->product_code = $product_code;
		$this->otros = $otros;
		$this->disponibilidad = $disponibilidad;
		$this->precio_legal = $precio_legal;
		//$this->img_source="imagen-producto.php?id=$id";
		//echo $this->img_source;
		
	}
	
	function show_product_info(){
		
			include './product-list-style.php';


	}
	
}

?>