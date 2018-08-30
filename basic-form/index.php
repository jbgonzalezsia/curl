<?php
if (isset($_POST["producto"])){
	$producto = $_POST["producto"];
	$url = "http://clientwebservice-one.local/webservice/webservice-one.php";
	//Se inicia curl en el servidor
	$ch = curl_init($url);
	//Parametros
	$parametros = "producto=$producto";
	//Metodo de envio
	curl_setopt($ch, CURLOPT_POST, 1);
	//Agregar parametros
	curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);
	//tiempo de espera al servidor
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
	//Respuesta del servicio web
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//Ejecucion de la peticion
	$resultado = curl_exec($ch);
	//Cerrar
	curl_close($ch);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Basic-Form Client Webservice</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/main.css" />
	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

	<!--<script src="main.js"></script>-->
</head>
<body>
<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 center">
				<div class="panel panel-primary">
				<div class="panel-heading"><h1> Cliente WebService CURL</h1></div>
					<div class="panel-body">
						<form class="form-horizontal" method="post" action="">
							<div class="form-group">
								<label for="exampleInputEmail1" class="col-sm-2 control-label">Producto</label> 
								<div class="col-sm-10">
									<input type="text" class="form-control" name="producto" placeholder="Enter">
								</div>
							</div>
							<hr>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Buscar</button>
							</div>
						</form>
						<hr>
						<h3><?php if(isset($_POST["producto"])) echo $resultado ?></h3>
					</div>
					<br>
				</div>
			</div>
		</div>
	</div>
</body>
</html>