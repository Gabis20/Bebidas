<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastre sua bebida</title>
	<link rel="stylesheet"href="css/estilos.css">
</head>
<body>
	<div id="ContainerDiv">
		<h2>Cadastro de vinhos</h2>
		<form action="#" method="post">
			<label>Nome do vinho</label><br/>
			<input type="text" name="CadVinho" id="CadVinho"><br/>
			<label>Preço</label><br/>
			<input type="text" name="PrecoVinho" id="PrecoVinho"><br/><br/>
			<label>Nome do refrigerante</label><br/>
			<input type="text" name="CadRefrigerante" id="CadRefrigerante"><br	/>
			<label>Preço</label><br/>
			<input type="text" name="PrecoRefrigerante" id="PrecoRefrigerante"	><br/><br/>
			<label>Nome do suco</label><br/>
			<input type="text" name="CadSuco" id="CadSuco"><br/>
			<label>Preço</label><br/>
			<input type="text" name="PrecoSuco" id="PrecoSuco"><br/><br/>
			<label>Consulta de preço</label><br/><br/>
			<select name="SelecionePreco">
				<option value="0">=== SELECIONE ===</option>
				<option value="1">Vinho</option>
				<option value="2">Refrigerante</option>
				<option value="3">Suco</option>
			</select><br/>
			<label>Digite o preço</label><br/>
			<input type="text" name="ConsultaPreco" id="ConsultaPreco"><br/><br/>
			<input type="submit" name="Registro" id="Registro"><br/>
		</form>
	</div>
</body>
</html>

<?php
	require_once 'Vinho.php';
	require_once 'Refrigerante.php';
	require_once 'Suco.php';

	$vinho 			= new Vinho();
	$refrigerante 	= new Refrigerante();
	$suco 			= new Suco();
	//$inputVinho = $_POST['CadVinho'];
	//$inputRefrigerante = $_POST['CadRefrigerante'];
	//$inputSuco = $_POST['CadSuco'];

	if (isset($_POST['Registro'])) 
	{
		if((!empty($_POST['CadVinho'])))
		{
			$vinho->setNome($_POST['CadVinho']);
			$vinho->setPreco($_POST['PrecoVinho']);
		}

		if ((!empty($_POST['CadRefrigerante']))) 
		{
			$refrigerante->setNome($_POST['CadRefrigerante']);
			$refrigerante->setPreco($_POST['PrecoRefrigerante']);
		}

		if ((!empty($_POST['CadSuco']))) 
		{
			$suco->setNome($_POST['CadSuco']);
			$suco->setPreco($_POST['PrecoSuco']);
		}
	}
	//$vinho->setNome('Viñapeña Tempranillo');
?>