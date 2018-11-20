<?php
	require 'rb.php';
	R::setup('mysql:host=localhost;dbname=daeregistro','daeregistro','daeregistro');
if (!empty($_POST)): ?>
<?php
$record = R::dispense('parents');
$record->name = htmlspecialchars($_POST["name"]);
$record->class = htmlspecialchars($_POST["class"]);
$record->email = htmlspecialchars($_POST["email"]);
$record->date = date('d-M-Y H:i:s');
R::store($record);
// print_r($record);
$título = 'Registro a Congreso de Padres 2018';
$mensaje = "<html>
									<head>
																	<meta charset='utf-8'>
																	<meta name='viewport' content='width=device-width, initial-scale=1'>
																	<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'>
																	<link rel='icon' href='https://pbs.twimg.com/profile_images/637400062243434496/vbLcnryf_400x400.png'>
																	<title>Congreso para Padres</title>
										</head>
									<body>
																<div class='container'>
																							<div class='row'>
																															<div class='col m12 center'>
																																						<h1>¡Hola {$record->name}!</h1>
																																						<img src='https://res.cloudinary.com/itesm-tam/image/upload/v1515864337/congreso.jpg'>
																																						<h3> Su registro ha sido completado con éxito, favor de presentar su boleto el día del evento</h3>
																															</div>
																							</div>
																</div>
									</body>
</html>";
print_r($mensaje);
?>
<?php else: ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
		<link rel='icon' href='https://pbs.twimg.com/profile_images/637400062243434496/vbLcnryf_400x400.png'>
		<title>Congreso para Padres</title>
	</head>
	<body>
		<div id="prof1" class="modal">
			<div class="modal-content center">
				<h4>Dr. Juan Di Costanzo Zaragoza</h4>
				<p>Director de División de Posgrado y Extensión Académica Campus Tampico</p>
				<img src="https://scontent.fntr4-1.fna.fbcdn.net/v/t1.0-9/45204931_2007215896005994_4492301363711049728_n.png?_nc_cat=106&_nc_ht=scontent.fntr4-1.fna&oh=baf489ebc1cde7975cf39a2180f7bc61&oe=5C4464C7" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		<div id="prof2" class="modal">
			<div class="modal-content center">
				<h4>Lic. Patricia Vázquez Díaz</h4>
				<p>Departamento de Bienestar y Consejería Liderazgo y Formación Estudiantil Campus Ciudad de México</p>
				<img src="https://scontent.fntr4-1.fna.fbcdn.net/v/t1.0-9/45064101_2007216052672645_5963173310056366080_n.png?_nc_cat=108&_nc_ht=scontent.fntr4-1.fna&oh=1017663e2e0901f787dd30df261ea1df&oe=5C7943B3" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		<div id="prof3" class="modal">
			<div class="modal-content center">
				<h4>Lic. Arturo David Argente Villarreal</h4>
				<p>Director Asociado de Escuela de Ciencias Sociales y Gobierno Campus Ciudad de México</p>
				<img src="https://scontent.fntr4-1.fna.fbcdn.net/v/t1.0-9/45068922_2007215916005992_7720830431892865024_n.jpg?_nc_cat=101&_nc_ht=scontent.fntr4-1.fna&oh=521a6e4cdeef18e972b382f3d28185ba&oe=5C844A7F" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		<div id="prof4" class="modal">
			<div class="modal-content center">
				<h4>Lic. Paulino Bernot Silis</h4>
				<p>Decano de Preparatoria Sistema Tecnológico de Monterrey.</p>
				<img src="https://scontent.fntr4-1.fna.fbcdn.net/v/t1.0-9/45011786_2007216042672646_921654180190355456_n.png?_nc_cat=102&_nc_ht=scontent.fntr4-1.fna&oh=def081848b97125b9cabbee9f9cbb231&oe=5C7D7ABA" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		<div id="prof5" class="modal">
			<div class="modal-content center">
				<h4>Lic. Elias Miranda.</h4>
				<p>Coach de gimnasio y vida en Tecnólogico de Monterrey en Tampico. Entrenador certificado ante la SEP (coaching de entrenamiento y alimentación).</p>
				<img src="https://scontent-lax3-2.xx.fbcdn.net/v/t1.0-9/41656732_1795046097216127_309869263202549760_n.jpg?_nc_cat=107&_nc_ht=scontent-lax3-2.xx&oh=24e53aeda03d32f92ec56ed98e174f46&oe=5C6BF687" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		<div class='navbar-fixed'>
			<nav class='white'>
				<div class='nav-wrapper'>
					<a href='#' class='brand-logo button-collapse' data-activates='slide-out'><img src='https://pbs.twimg.com/profile_images/637400062243434496/vbLcnryf_400x400.png' class='z-depth-1 hide-on-small-and-down' style='max-width:100px'><img src="https://res.cloudinary.com/itesm-tam/image/upload/v1540849310/logo.png" class="z-depth-1 white" style='max-width:100px'></a>
					<ul id='nav-mobile' class='right hide-on-med-and-down'>
						<li><a href='#inf' class='blue-text'>Información</a></li>
						<li><a href='#sch' class='blue-text'>Programa</a></li>
						<li><a href='#reg' class='blue-text'>Registro</a></li>
						<li><a href='#con' class='blue-text'>Contacto</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<ul id='slide-out' class='sidenav'>
			<li><div class='user-view'>
				<div class='background black'>
				</div>
				<a><span class='white-text email'>adriwm69@hotmail.com y rosssalba@hotmail.com</span></a>
			</div></li>
			<li><a href='#inf' class='blue-text'>Información</a></li>
			<li><a href='#con' class='blue-text'>Contacto</a></li>
			<li><div class='divider'></div></li>
			<li><a href='#reg' class='blue-text'>Registro</a></li>
		</ul>
		<section id='inf' class='scrollspy'>
			<div class="carousel carousel-slider center">
				<div class="carousel-fixed-item center">
					<h1 class='center white-text' style='padding: 0em 0em 8em 0em'><b>II CONGRESO<br> ESCUELA PARA PADRES</b></h1>
				</div>
				<a class="carousel-item"><img src="https://res.cloudinary.com/itesm-tam/image/upload/c_scale,h_800/v1540597172/7TcHloEk_yywvqu.jpg"></a>
				<a class="carousel-item"><img src="https://res.cloudinary.com/itesm-tam/image/upload/c_scale,h_800/v1540597170/hDtGsH7U_hkjsca.jpg"></a>
				<a class="carousel-item"><img src="https://res.cloudinary.com/itesm-tam/image/upload/c_scale,h_800/v1540597163/LtAyuvcM_jgynk8.jpg"></a>
				<a class="carousel-item"><img src="https://res.cloudinary.com/itesm-tam/image/upload/c_scale,h_800/v1540597167/niFca2dc_rogoii.jpg"></a>
				<a class="carousel-item"><img src="https://res.cloudinary.com/itesm-tam/image/upload/c_scale,h_800/v1540597174/ucV75CBQ_hbzzof.jpg"></a>
				<a class="carousel-item"><img src="https://res.cloudinary.com/itesm-tam/image/upload/c_scale,h_800/v1540597169/XY_vXC4E_er226i.jpg"></a>
			</div>
		</section>
		<section id='sch'>
			<div class="col m-10">
				<h5 class="center cyan-text" style='padding: 0em 0em 1em 0em'><b>Objetivo: </b>Reforzar los valores familiares ante los desafíos tecnológicos en la Era Digital, proporcionando herramientas efectivas para construir canales de comunicación entre padres e hijos y su entorno.</h5>
			</div>
			<h4 class='center'>Agenda General de Evento</h4>
			<table style="text-transform:uppercase!important">
				<thead class='responsive-table'>
					<tr>
						<th>Hora</th>
						<th>Actividad</th>
						<th>Responsable</th>
						<th>Lugar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>8:30 - 9:00</td>
						<td>Registro</td>
						<td>COMITÉ ORGANIZADOR</td>
						<td>Domo CCI</td>
					</tr>
					<tr>
						<td>9:00 - 9:20</td>
						<td>Bienvenida</td>
						<td>Lic. María Adriana Garza Arroyo<br>Ing. Marco Edgar Vargas</td>
						<td>Auditorio Raul Aguilar</td>
					</tr>
					<tr>
						<td>9:25 - 10:20</td>
						<td>Educación para la era digital: El reto de los padres de hoy</td>
						<td><a class="waves-effect waves-light modal-trigger" href="#prof1">DR. JUAN DI CONSTANZO ZARAGOZA</a></td>
						<td>Auditorio Raul Aguilar</td>
					</tr>
					<tr>
						<td>10:20 - 12:00</td>
						<td>Familia y Tecnología</td>
						<td><a class="waves-effect waves-light modal-trigger" href="#prof2">LIC. HERMILDA PATRICIA VÁZQUEZ DÍAZ</a></td>
						<td>Sale Empresarial 2</td>
					</tr>
					<tr>
						<td>12:00 - 1:30</td>
						<td>La importancia de la familia en la educación</td>
						<td><a class="waves-effect waves-light modal-trigger" href="#prof3">LIC. ARTURO DAVID ARGENTE VILLARREAL</a></td>
						<td>Lobby CCI</td>
					</tr>
					<tr>
						<td>13:30 - 15:00</td>
						<td>Comida</td>
						<td>PEROLLES</td>
						<td>Lobby CCI</td>
					</tr>
					<tr>
						<td>15:00 - 15:10</td>
						<td>Coach Dinámico</td>
						<td><a <a class="waves-effect waves-light modal-trigger" href="#prof5">COACH ELÍAS MIRANDA</a></td>
						<td>Auditorio Raúl Aguilar</td>
					</tr>
					<tr>
						<td>15:10 - 16:10</td>
						<td>Barreras y activadores de la vida ética</td>
						<td><a class="waves-effect waves-light modal-trigger" href="#prof7">DR. PABLO AYALA ENRÌQUEZ</a></td>
						<td>Auditorio Raúl Aguilar</td>
					</tr>
					<tr>
						<td>16:10 - 17:40</td>
						<td>Una visión en familia</td>
						<td><a class="waves-effect waves-light modal-trigger" href="#prof4">ING. PAULINO BERNOT SILIS</a></td>
						<td>Auditorio Raúl Aguilar</td>
					</tr>
				</tbody>
			</table>
		</section>
		<section id='con' class='scrollspy blue' style='margin-top: -2em'>
			<h4 class='center white-text cyan' style='padding: 1em 0em 1em 0em'>LA FAMILIA Y SUS RETOS EN LA ERA DIGITAL</h4>
			<div class='row' style='padding: 1em 0em 1em 0em'>
				<div class='col s12 m4 l4 center'>
					<h5>8:30 a.m. - 18:30 p.m.</h5>
					<p>Costo de boleto <b>$300</b></p>
				</div>
				<div class='col s12 m4 l4 center'>
					<h5>Tecnológico de Monterrey Tampico</h5>
					<small>Duela del Gimnasio H.H. Jack Fleishman, en el edificio CCD</small>
				</div>
				<div class='col s12 m4 l4 center'>
					<h5>9 Feb. 2019</h5>
				</div>
			</div>
			<div class="row center blue darken-4">
				<h5 class='left-align ' style='padding: 1em 0em 1em 1em'>
				<b class='cyan-text'>Informes:</b>
				<br>
				<a href='mailto:virginia.rdz@tec.mx' class='white-text'>virginia.rdz@tec.mx</a>
				<br>
				<a href='mailto:adriwm69@hotmail.com' class='white-text'>adriwm69@hotmail.com</a>
				<br>
				<a href='rosssalba@hotmail.com' class='white-text'>rosssalba@hotmail.com</a>
				<br>
				Tel: 229160 ext. 2806
				</h5>
			</div>
			
		</section>
		<section id='reg' class='scrollspy'>
			<div class='container'>
				<div class='row'>
					<div class="col s12">
						<div class="card-panel">
							<h1 class="center" style="margin-top:-25px;margin-bottom:0px">REGISTRO</h1>
							<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc1XNRyqCVq8YD92WHfFqCL5OB8YrjYsmE6u7dYPVTOlSFs4A/viewform" width="100%" border="0" height="400px"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="page-footer blue darken-4">
			<div class="footer-copyright">
				<div class="container">
					© <?php echo date('Y') ?> Tecnológico de Monterrey
					<a class="grey-text text-lighten-4 right" href="https://tec.mx/es/politicas-de-privacidad-del-tecnologico-de-monterrey">Políticas de Privacidad</a>
				</div>
			</div>
		</footer>
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
		<script type='text/javascript'>
			$(document).ready(function(){
				$('.scrollspy').scrollSpy();
				$('.parallax').parallax();
				$('.sidenav').sidenav();
				$('select').formSelect();
				$('.modal').modal();
				$('.carousel.carousel-slider').carousel({
					fullWidth: true,
					indicators: true
				});
				var autoplay = true;
				setInterval(function() { if(autoplay) $('.carousel.carousel-slider').carousel('next'); }, 4500);
				$('.carousel.carousel-slider').hover(function(){ autoplay = false; },function(){ autoplay = true; });
				});
		</script>
	</body>
</html>
<?php endif; ?>