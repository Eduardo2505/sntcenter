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
								<a href="#tab-1">Instrucciones y objetivos generales:</a>
							</li>
							<li>
								<a href="#tab-2">Why we do it</a>
							</li>
							<li>
								<a href="#tab-3">How we do it</a>
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