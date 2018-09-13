<?php 
require 'rb.php';
R::setup('mysql:host=localhost;dbname=daeregistro','daeregistro','daeregistro');
$taller1 = R::find('parents','class = 1');
$taller2 = R::find('parents','class = 2');
$taller3 = R::find('parents','class = 3');
$taller4 = R::find('parents','class = 4');
$taller5 = R::find('parents','class = 5');
 ?>
 <!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'>
		<link rel='icon' href='https://pbs.twimg.com/profile_images/637400062243434496/vbLcnryf_400x400.png'>
		<title>Congreso para Padres</title>
	</head>
	<body>
		<section id='sch'>
			<h4 class='center'>Registrados</h4>
			<table>
				<thead class='responsive-table'>
					<tr>
						<th>Límites en los milennials</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($taller1 as $key => $value) 	echo "<tr><td>{$value->name}</td></tr>";	?>	
				</tbody>
			</table>
			<table>
				<thead class='responsive-table'>
					<tr>
						<th>Puentes de comunicación entre padres e hijos</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($taller2 as $key => $value) 	echo "<tr><td>{$value->name}</td></tr>";	?>	
				</tbody>
			</table>
			<table>
				<thead class='responsive-table'>
					<tr>
						<th>La fuerza de la voluntad y el éxito personal</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($taller3 as $key => $value) 	echo "<tr><td>{$value->name}</td></tr>";	?>	
				</tbody>
			</table>
			<table>
				<thead class='responsive-table'>
					<tr>
						<th>Comunicación con asertividad en los milennials</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($taller4 as $key => $value) 	echo "<tr><td>{$value->name}</td></tr>";	?>	
				</tbody>
			</table>
			<table>
				<thead class='responsive-table'>
					<tr>
						<th>Evaluación de la funcionalidad familiar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($taller5 as $key => $value) 	echo "<tr><td>{$value->name}</td></tr>";	?>	
				</tbody>
			</table>
		</section>
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script>
	</body>
</html>