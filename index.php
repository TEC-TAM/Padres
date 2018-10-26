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
		<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'>
		<link rel='icon' href='https://pbs.twimg.com/profile_images/637400062243434496/vbLcnryf_400x400.png'>
		<title>Congreso para Padres</title>
	</head>
	<body>
		<ul id='slide-out' class='side-nav'>
			<li><div class='user-view'>
				<div class='background black'>
				</div>
				<a><span class='white-text email'>virginia.rdz@itesm.mx</span></a>
			</div></li>
			<li><a href='#inf' class='blue-text'>Información</a></li>
			<li><a href='#con' class='blue-text'>Contacto</a></li>
			<li><div class='divider'></div></li>
			<li><a href='#reg' class='blue-text'>Registro</a></li>
		</ul>
		<div id="conf1" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4>LA FAMILIA Y SUS RETOS EN LA ERA DIGITAL</h4>
				<p>Platica sobre valores en los millenials y zillenials o también llamada Generación Z, una generación que busca disfrutar de las cosas como viajar, ayudar a otros, y no busca acumular, si no compartir  (casa, coche, tiempo, dinero, lugar de trabajo, etc.)</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516737659/valores_kysqac.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
			</div>
		</div>
		<div id="prof1" class="modal">
			<div class="modal-content center">
				<h4>Lic. Rubén Nuñez</h4>
				<p>Profesor de la Escuela de Negocios y Emprendimiento del Tecnológico de Monterrey. </p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516737067/1.ruben.nunez_itfkfh.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		<div id="prof2" class="modal">
			<div class="modal-content center">
				<h4>Dra. Luisa Georgina Lemus.</h4>
				<p>Doctora en Investigación Psicoanalítica. Maestría en Terapia Familiar.Licenciada en Psicología Social. </p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516737067/2.luisageorgina_wch0rl.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		<div id="prof3" class="modal">
			<div class="modal-content center">
				<h4>Lic. Silvia Eunice García.</h4>
				<p>Directora del Centro de Neurodesarrollo y Apoyo a la Familia (CENYAF)</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516737067/3.silviaeunice_zlorqd.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		<div id="prof4" class="modal">
			<div class="modal-content center">
				<h4>Lic. Ana Soledad Martínez.</h4>
				<p>Directora del Centro de Idiomas y responsable del programa Pequeños empresarios en 2013 y 2015 en el Tecnológico de Monterrey.</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516737067/4.anasoledad_kn9wrm.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		<div id="prof5" class="modal">
			<div class="modal-content center">
				<h4>Lic. Ana Paola Alcalá.</h4>
				<p>Colaborador en STOOPEN EMA PARTNERS, México. Licenciada en mercadotecnia. Diplomado en comercio exterior. Mastering team management (coaching) Loreal, ITAM.</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516737067/5.anapaola_aiuurm.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		<div id="prof6" class="modal">
			<div class="modal-content center">
				<h4>Lic. Gabriel Rubio.</h4>
				<p>Conductor y editorialista en Televisa/Imagen Radio/MVS Radio/Grupo AS MILENIO. Presidente de la Asociación de padres de Familia de Cd. Madero Fundador Grupo Freedom.</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516737067/6.gabrielrubio_mztpcn.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		<div id="prof7" class="modal">
			<div class="modal-content center">
				<h4>Dr. Pablo Ayala Enriquez</h4>
				<p>Director del Sentido Humano en el Tecnológico de Monterrey.</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516737068/7.pabloayala_axsxq8.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		<div id="prof8" class="modal">
			<div class="modal-content center">
				<h4>Ing. Ana Leticia Szymanski.</h4>
				<p>Tutor 1er año en Tecnológico de Monterrey. Certificada en Inteligencia Emocional RULER, modelo del centro de IE de la universidad de Yale</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516737068/8.AnaLeticia_rdxorh.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		
		
		<div id="taller1" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4>Límites en los Milennials y generación Z</h4>
				<p>El taller está enfocado en orientar a los padres de familia de manera dinámica; el manejo de los límites en la vida de los milennials y la generación Z. Hay una diferencia enorme entre ver la tecnología cambiar el mundo y nacer en un mundo cambiado por la tecnología.</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516669484/1.Limites_fdqwmz.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
			</div>
		</div>
		<div id="taller2" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4>Haciendo puentes de comunicación entre padres e hijos</h4>
				<p>El tiempo proporcionado a nuestros hijos es invaluable y encontrar la forma y los espacios para acercarnos y comunicarnos con ellos es sin duda una problemática que a muchos padres se nos presenta; de manera dinámica el taller nos proporcionará las estrategias para hacerlo.</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516669484/2.Puentes_agwn8p.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
			</div>
		</div>
		<div id="taller3" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4>La fuerza de voluntad y el éxito personal.</h4>
				<p>Es un taller enfocado en reflexionar sobre como la fuerza de voluntad, vista como la capacidad que tenemos de controlar la atención, las emociones y los deseos influyen en la salud física, estabilidad emocional y por consiguiente en el éxito personal.</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516669486/3._Fuerza_Voluntad_tgerub.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
			</div>
		</div>
		<div id="taller4" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4>El manejo de la comunicación con asertividad en los milennials y generación Z.</h4>
				<p>En este taller se desarrolla de manera dinámica el cómo manejar de manera efectiva comunicación a todos los niveles, enfocado a los papás de jóvenes, formados con constante evolución, cuidando el manejo de los cambios buscando resultados íntegros con facilidad de adaptación.</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516669484/4._asertividad_qsw1l9.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
			</div>
		</div>
		<div id="taller5" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4>Evaluación de la funcionalidad familiar.</h4>
				<p>Es un taller en el cual de manera dinámica, nos orienta a manejar de manera efectiva nuestra funcionalidad en la familia, y así comprender a las nuevas generaciones.</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516669484/5.funcionalidad_yfzca1.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
			</div>
		</div>
		<div id="taller6" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4>Taller: Ruller</h4>
				<p>Las emociones importan porque impulsan el aprendizaje, la toma de decisiones, la creatividad, las relaciones y la salud. En este taller aprenderás a identificar las emociones, sacar provechos de esas emociones.</p>
				<img src="https://res.cloudinary.com/itesm-tam/image/upload/v1516737068/RULER_fz3p6l.jpg" class="responsive-img">
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
			</div>
		</div>
		<div class='navbar-fixed'>
			<nav class='white'>
				<div class='nav-wrapper'>
					<a href='#' class='brand-logo button-collapse' data-activates='slide-out'><img src='https://pbs.twimg.com/profile_images/637400062243434496/vbLcnryf_400x400.png' class='z-depth-1' style='max-width:100px'></a>
					<ul id='nav-mobile' class='right hide-on-med-and-down'>
						<li><a href='#inf' class='blue-text'>Información</a></li>
						<li><a href='#sch' class='blue-text'>Programa</a></li>
						<li><a href='#reg' class='blue-text'>Registro</a></li>
						<li><a href='#con' class='blue-text'>Contacto</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<section id='inf' class='scrollspy'>
			<div class='parallax-container'>
				<div class='parallax'>
					<img src='https://www.qu.edu/content/dam/parents/parents-promo-events-1200x664-jh2_9787.jpg'>
				</div>
				<div class='white-text' style='margin-top:18em;background-color:rgba(0,0,0,.5);font-weight: 900'>
					<h1 class='center'>CONGRESO PARA PADRES</h1>
					<h5 class='center hide-on-med-and-down'>LA FAMILIA Y SUS RETOS EN LA ERA DIGITAL</h5>
				</div>
			</div>
		</section>
		<section id='sch'>
			<h4 class='center'>Agenda General de Evento</h4>
			<table>
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
						<td>Cristina García</td>
						<td>Domo CCI</td>
					</tr>
					<tr>
						<td>9:00 - 9:20</td>
						<td>Bienvenida</td>
						<td>Lic. María Adriana Garza<br>Ing. Marco Vargas</td>
						<td>Auditorio Raul Aguilar</td>
					</tr>
					<tr>
						<td>9:15 - 10:00</td>
						<td><a class="modal-trigger" href="#conf1">Conferencia I</a></td>
						<td><a class="modal-trigger" href="#prof1">DR. JUAN DI CONSTANZO ZARAGOZA</a> </td>
						<td>Auditorio Raul Aguilar</td>
					</tr>
					<tr>
						<td>10:00 - 11:30</td>
						<td><a class="modal-trigger" href="#taller1">Taller I</a></td>
						<td><a class="modal-trigger" href="#prof2">LIC. HERMILDA PATRICIA VÁZQUEZ DÍAZ</a> </td>
						<td>Sale Empresarial 2</td>
					</tr>
					<tr>
						<td>10:00 - 11:30</td>
						<td><a class="modal-trigger" href="#taller2">Conferencia II</a></td>
						<td><a class="modal-trigger" href="#prof3">LIC. ARTURO DAVID ARGENTE VILLARREAL</a></td>
						<td>Lobby CCI</td>
					</tr>
					<!-- <tr>
						<td>10:00 - 11:30</td>
						<td><a class="modal-trigger" href="#taller3">Taller: La fuerza de la voluntad y el éxito personal</a></td>
						<td><a class="modal-trigger" href="#prof4">Lic. Ana Soledad</a></td>
						<td>Sala Ejecutiva 2</td>
					</tr>
					<tr>
						<td>10:00 - 11:30</td>
						<td><a class="modal-trigger" href="#taller4">Taller: El manejo de la comunicación con asertividad en los milennials</a></td>
						<td><a class="modal-trigger" href="#prof5">Lic. Ana Paola Alcalá Carrillo</a></td>
						<td>Sala Empresarial 1</td>
					</tr>
					<tr>
						<td>10:00 - 11:30</td>
						<td><a class="modal-trigger" href="#taller5">Taller: Evaluación de la funcionalidad familiar</a></td>
						<td><a class="modal-trigger" href="#prof6">Lic. Gabriel Rubio Badillo</a></td>
						<td>Learnning Commons</td>
					</tr>
					<tr>
						<td>11:30 - 13:00</td>
						<td>Conferencia: Los Dilemas morales en IGENS</td>
						<td><a class="modal-trigger" href="#prof7">Dr.  Pablo Ayala Enríquez</a></td>
						<td>Auditorio Raul Aguilar</td>
					</tr> -->
					<tr>
						<td>13:00 - 14:30</td>
						<td>Comida</td>
						<td>Stands, Grupos</td>
						<td>Explanada CCI</td>
					</tr>
					<tr>
						<td>14:30 - 14:40</td>
						<td><a class="modal-trigger" href="#taller6">Coach Dinámico</a></td>
						<td><a class="modal-trigger" href="#prof8">COACH ELÍAS MIRANDA</a></td>
						<td>Auditorio Raúl Aguilar</td>
					</tr>
					<tr>
						<td>14:40 - 15:40</td>
						<td><a class="modal-trigger" href="#taller6">Taller II</a></td>
						<td><a class="modal-trigger" href="#prof8">DR. PABLO AYALA ENRÌQUEZ</a></td>
						<td>Auditorio Raúl Aguilar</td>
					</tr>
					<tr>
						<td>15:40 - 17:40</td>
						<td><a class="modal-trigger" href="#taller6">Conferencia Final</a></td>
						<td><a class="modal-trigger" href="#prof8">ING. PAULINO BERNOT SILIS </a></td>
						<td>Auditorio Raúl Aguilar</td>
					</tr>
				</tbody>
			</table>
		</section>
		<section id='con' class='scrollspy blue' style='margin-top: -2em'>
			<h4 class='center white-text cyan' style='padding: 1em 0em 1em 0em'>LA FAMILIA Y SUS RETOS EN LA ERA DIGITAL</h4>
			<div class='row' style='padding: 1em 0em 1em 0em'>
				<div class='col s12 m4 l4 center'>
					<h5>8:30 a.m.</h5>
				</div>
				<div class='col s12 m4 l4 center'>
					<h5>Tecnológico de Monterrey Tampico</h5>
				</div>
				<div class='col s12 m4 l4 center'>
					<h5>9 Feb. 2019</h5>
				</div>
			</div>
			<h5 class='left-align blue darken-4' style='padding: 1em 0em 1em 1em'>
			<b class='cyan-text'>Informes:</b>
			<br>
			<a href='mailto:virginia.rdz@itesm.mx' class='white-text'>virginia.rdz@itesm.mx</a>
			<br>
			<a href='mailto:dalma.leon@hotmail.com' class='white-text'>dalma.leon@hotmail.com</a>
			<br>
			<a href='bcu.cristina@hotmail.com' class='white-text'>bcu.cristina@hotmail.com</a>
			<br>
			Tel: 229160 ext. 2806
			</h5>
			
		</section>
		<section id='reg' class='scrollspy'>
			<div class='container'>
				<div class='row'>
					<form class='col s12' action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?> method='POST'>
						<h4 class='center'>Registro</h4>
						<div class='row'>
							<div class='input-field col s12 l6'>
								<input id='name' name='name' type='text' class='validate' max='100' require>
								<label for='name'>Nombre</label>
							</div>
							<div class='input-field col s12 l6'>
								<input id='email' name='email' type='email' class='validate' max='50' required>
								<label for='email'>Email</label>
							</div>
							<div class='input-field col s12 l6'>
								<select name='class'>
									<option value='' disabled selected>Seleccionar Taller</option>
									<option value='1'>Límites en los milennials</option>
									<option value='2'>Puentes de comunicación entre padres e hijos</option>
									<option value='3'>La fuerza de la voluntad y el éxito personal</option>
									<option value='4'>Comunicación con asertividad en los milennials</option>
									<option value='5'>Evaluación de la funcionalidad familiar</option>
								</select>
							</div>
							<div class="input-field col s12 l6 file-field">
								<div class="btn cyan">
									<span>Comprobante</span>
									<input type="file" required>
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
								</div>
							</div>
						</div>
						<div class='row'>
							<div class='right'>
								<button type='submit' class='waves-effect waves-light btn cyan'>Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script>
		<script type='text/javascript'>
			$(document).ready(function(){
				$('.scrollspy').scrollSpy();
				$('.parallax').parallax();
				$('.button-collapse').sideNav();
				$('select').material_select();
				$('.modal').modal();
			});
		</script>
	</body>
</html>
<?php endif; ?>