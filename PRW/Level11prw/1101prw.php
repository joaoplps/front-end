<!DOCTYPE html>
<html lang="en">
	<!--
		Notas:
		Diretório geral em debian-based distros: /var/www/html;
		Endereço http://localhost/path/to/file.php para acessar a aplicação;
		Ex.: 1 - POO + SQL
	-->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PRW + SQL 1</title>

		<style>
			body{width:66.6%; color:#666; margin: auto;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:capitalize; text-align:center; position:sticky; top:0;}
			fieldset{margin-top:20px;}
			input{margin:5px;}
			p{float:right;}
      table{margin: auto; border: 1px solid #666; border-collapse: collapse;}
      caption{text-align: left; font-style: italic; margin-bottom: 5px;}
      th{background: #999;}
      td{padding-left: 10px;}
      td.centralize, p{text-align: center;}
      td, th{min-width:70px;border: 1px solid #b1b1b1;}
		</style>
	</head>

	<body>
		<h1>php + sql</h1>

		<form name="form" action="" method="post">
			<fieldset>
				<label class="align">Student</label>
				<input type="varchar" />
				<br/>

				<label class="align">Registry</label>
				<input type="number" />
				<br/>

				<?php
					for ($i=0; $i < 3; $i++) { 
						echo "
							<label class='align'>Grade $i</label>
							<input type='number' name='g$i'/>
							<br/>
						";
					}
				?>
		</form>

    <?php
      //Inclusão da classe:
      require_once "1101prw.inc.php";
    ?>
	</body>
</html>