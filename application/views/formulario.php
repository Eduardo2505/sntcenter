<!DOCTYPE html>
<html lang="en-ES">
<?php include 'plantilla/head.php'; ?>
<body>
	<header id="dz_main_header" class="clearfix">
		<?php echo $menu; ?>
	</header>
	<div id="dz_header_spacer">
	</div>

	<section id="title_breadcrumbs_bar">
		<div class="container">
			<div class="row">
				<div class="span8">
					<h1>Cuestionario</h1>
				</div>
				<div class="span4 right_aligned">
					<div class="breadcrumbs">
						<a href="index.html">Inicios</a> 
						<i class="ABdev_icon-chevron-right"></i> 
						<span class="current">Cuestionario
						</span>
					</div>									
				</div>
			</div>
		</div>
	</section>

	<section id="our_team" class="dzen_section_DD ">
		<div class="dzen_section_content">
			<div class="dzen_container">
				<div class="dzen_column_DD_span12 ">

					<h3 class="column_title_left">
						<span>CUESTIONARIO PARA LA OBTENCION DE DATOS EN LA PRIMERA CONSULTA. </span>
					</h3>
					<div class="dzen-tabs" data-selected="1" data-break_point="449" data-effect="slide">
						<ul>
							<li>
								<a href="#tab-1">Paso 1</a>
							</li>
							<li>
								<a href="#tab-2">Paso 2</a>
							</li>
							<li>
								<a href="#tab-3">Paso 3</a>
							</li>
							<li>
								<a href="#tab-4">Paso 4</a>
							</li>
							<li>
								<a href="#tab-5">Paso 5</a>
							</li>
							<li>
								<a href="#tab-6">Paso 6</a>
							</li>
							<li>
								<a href="#tab-7">Paso 7</a>
							</li>
							

						</ul>

						<form action="#" method="post" class="contact-form">
							<div class="dzen-tabs-wrapper">
								<div id="tab-1">
									<div>
										Información general: Este cuestionario tiene la finalidad de obtener la mayor cantidad de información personal posible, esto para poder realizar el mejor plan de Alimentación y Entrenamiento totalmente personalizado acorde a sus necesidades, objetivos y nivel actual, y de esta manera poder fijar metas realistas y asegurar la consecución de las mismas. Le pedimos de la manera más atenta que sea lo más específico posible al contestar. 
									</div>


									<div class="dzencf" id="dzencf-wrapper" dir="ltr">

										<input type="text" name="nombreCompleto" maxlength="350" class="dzencf-text" placeholder="Nombre completo" required="">

										<select name="sexo" class="dzencf-text" required="">
											<option value="">Seleccione Género</option>
											<option value="Mujer">Mujer</option>
											<option value="Hombre">Hombre</option>
											
										</select>
										<input type="date" name="fecha"  
										required="" step="2" class="dzencf-text" 
										placeholder="Fecha exacta de nacimiento (día-mes-año)">
										<input type="text" name="telefono" maxlength="350" class="dzencf-text" placeholder="WhatsApp" required="">
										<input type="text" name="WhatsApp" maxlength="350" class="dzencf-text" placeholder="Télefono" required="">
										<input type="text" name="email" maxlength="350" class="dzencf-text" placeholder="Correo Electrónico" required="">
										<input type="text" name="email" maxlength="350" class="dzencf-text" placeholder="Perfil en Facebook " required="">
										
										
										<!-- <div class="dzencf-response-output dzencf-display-none"></div> -->
									</div>

									<div>
										Lugar de residencia:Este apartado nos servirá para futuras referencias al momento de hacerle llegar algún paquete y/o producto. 
									</div>

									<div class="dzencf" id="dzencf-wrapper" dir="ltr">

										<input type="text" name="domicio" maxlength="350" class="dzencf-text" placeholder="Domicilio" required="">
										<input type="text" name="colonia" maxlength="350" class="dzencf-text" placeholder="Colonia" required="">
										<input type="text" name="ciudad" maxlength="350" class="dzencf-text" placeholder="Ciudad" required="">
										<input type="text" name="estado" maxlength="350" class="dzencf-text" placeholder="Estado" required="">
										<input type="text" name="Pais" maxlength="350" class="dzencf-text" placeholder="País" required="">
										<input type="text" name="cp" maxlength="350" class="dzencf-text" placeholder="Código postal" required="">
									</div>

									<a href="#enviar" style="background-color:#eeeeee" class="dzen-button dzen-button_light dzen-button_large">Siguiente</a>

								</div>
								<div id="tab-2">
									<div>
										Este apartado nos servirá para poder saber de qué manera podremos adaptar las estrategias nutricionales y de entrenamiento a su vida actual sin que estas cambien demasiado su calidad de vida, ya que trabajamos con seres humanos integrales y no solo con números y datos.
									</div>
									<div class="dzencf" id="dzencf-wrapper" dir="ltr">

										<select name="nivelEducativo" class="dzencf-text" required="">
											<option value="">Nivel educativo terminado</option>
											<option value="Secuandario">Secuandario</option>
											<option value="Preparatoria">Preparatoria</option>
											<option value="Media Superior">Media Superior</option>
											
										</select>

										
										<input type="text" name="actividadLaboral" maxlength="350" class="dzencf-text" placeholder="Actividad laboral remunerada" required="">

										<select name="nivelSocioeconomico" class="dzencf-text" required="">
											<option value="">Nivel socio-económico</option>
											<option value="Alto">Alto</option>
											<option value="Medio">Medio</option>
											<option value="Bajo">Bajo</option>
											
										</select>
										
										<input type="text" name="actividadocio" maxlength="350" class="dzencf-text" placeholder="Actividades de ocio y placer" required="">
										
										<select name="estadocivil" class="dzencf-text" required="">
											<option value="">Estado civil actual</option>
											<option value="Casado(a)">Casad@</option>
											<option value="Divorciado(a)">Divorciado (a)</option>
											<option value="Soltero(a)">Soltero(a)</option>
											<option value="Unión Libre">Unión Libre</option>
											<option value="Viudo(a)">Viudo(a)</option>
											
										</select>

										
										<input type="text" name="cuantosHijos" maxlength="350" class="dzencf-text" placeholder="¿Cuántos hijos tiene?" required="">
										<input type="text" name="conquienvives" maxlength="350" class="dzencf-text" placeholder="¿Con quién vive?" required="">
										<input type="text" name="quienpreparaTucomida" maxlength="350" class="dzencf-text" placeholder="¿Quién prepara su comida? " required="">
										

										<select name="niveldeEstres" class="dzencf-text" required="">
											<option value="">Nivel de estrés diario</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											
										</select>

										<select name="horasdeTiempo" class="dzencf-text" required="">
											<option value="">Horas de sueño</option>
											<option value="Ininterrumpido">Ininterrumpido</option>
											<option value="Lapsos">Lapsos</option>
											
											
										</select>
										
										
										<input type="text" name="cuantasvecesdefecta" maxlength="350" class="dzencf-text" placeholder="¿Cuántas veces defeca en promedio al día?" required="">
										<input type="text" name="cuantasVecesOrina" maxlength="350" class="dzencf-text" placeholder="¿Cuántas veces orina en promedio al día?" required="">

									</div>
								</div>
								<div id="tab-3">
									<div>
										Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam 
										nonumy eirmod tempor invidunt ut labore. Lorem ipsum dolor sit amet, 
										consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
										labore.
									</div>
									<div>
										Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam 
										nonumy eirmod tempor invidunt ut labore. Lorem ipsum dolor sit amet.
									</div>
								</div>
							</div>
						</form>
					</div>




				</div>










			</div>
		</div>
	</section>








	<div id="footer_copyright">
		<div class="container">
			<div class="row">
				<div class="span7 footer_copyright">
					Copyright © 2015. All Rights reserved.  <a href="http://apilink.com.mx/" target="_blank">Apilink</a>
				</div>
				<div class="span5 footer_social">
					<a href="https://www.linkedin.com/in/luis-alberto-g%C3%B3mez-mart%C3%ADn-758125b0/" target="_blank"><i class="ABdev_icon-linkedin"></i></a>
					<a href="https://www.facebook.com/SNTCenter.SportNutritionandTrainningCenter/" target="_blank"><i class="ABdev_icon-facebook"></i></a>
					<!-- <a href="#" target="_blank"><i class="ABdev_icon-skype"></i></a> -->
					<a href="https://www.youtube.com/channel/UC4JiqN4IHp_SKLOVwZb4Isw?view_as=subscriber" target="_blank"><i class="ABdev_icon-youtube"></i></a>

					<a href="https://twitter.com/SNT_Center" target="_blank"><i class="ABdev_icon-twitter"></i></a>
				</div>
			</div>
		</div>
	</div>


	<?php include 'plantilla/js.php'; ?>

</body>
</html>