<!--
	Diretório geral em debian-based distros: /var/www/html;
	Endereço http://localhost/path/to/file.php para acessar a aplicação;

	1 - Script simples, utilizando construtor "echo" mostrando
	mensagem principal e que contenha comandos php incorporados no html
	(com comentários de uma ou mais linhas).
-->
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>php 1</title>
	
	<style>
		body{text-align: center;}
		h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;}
	</style>
</head>

<body>
	<h1>The PHP Application</h1>

	<!--
		Chamado do PHP - Primeira "ZONA": Não importa o local, as Zonas do
		php podem ser abertas em qualquer lugar do código. O PHP nunca mostrará
		o código executado. Com o wget ou outras ferramentas, somente é
		possível enxergar o trabalho já feito, o resultado do processamento.
	-->
	<?php
		// Esta é uma simples linha de comentário em php inserida em html.
		// O Comando "echo" retorna o texto recebido:
		echo "<p>Yeah!</p>";
	?>
</body>

</html>