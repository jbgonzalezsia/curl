<?php
	function producto ($producto=''){
		$productos = [
			"zapatos" => 900,
			"pantalon" => 500,
			"camisa" => 400,
		];
        if(array_key_exists($producto, $productos)){
            return $producto." cuesta ".$productos[$producto]."$";
        } else {
            return "El producto seleccionado no se ha encontrado";
        }
    }

    if(isset($_POST["producto"])){
        print producto($_POST["producto"]);
    }
?>