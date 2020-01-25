<!--
	Diretório geral em debian-based distros: /var/www/html;
	Endereço http://localhost/path/to/file.php para acessar a aplicação;

	Ex.: 2 - Formulários & PHP.
-->
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Ex.: 02</title>

	<style>
		body{text-align: center;}
		h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
		text-transform: capitalize;}
		fieldset{width: 40%; margin: auto;}
		input{width: 20%; align: left;}
		span{font-weight: bold; font-size: 150%;}
		.align{width: 50%; text-align: right; display: block;}
	</style>
</head>

<body>
	<h1>PHP form</h1>
	<br/><br/>

	<fieldset>
		<form id="form" action="01.php" method="post">
			<label class="align" for="">Distancy (km) </label>
			<input type="number" name="distancy" min="0"/>
			<br/>

			<label class="align" for="">Consumption (km/L)</label>
			<input type="number" name="consumption" min="0"/>
			<br/>

			<label class="align" for="">Price (L)</label>
			<input type="number" name="price" step="0.01" min="0"/>
		</form>
		<br/>

		<button type="submit" form="form" value="submit">Submit</button>
	</fieldset>
</body>
</html>