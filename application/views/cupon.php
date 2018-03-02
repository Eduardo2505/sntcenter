<!DOCTYPE html>
<html lang="es-MX">
<head>
	<?php include 'plantilla/head.php'; ?>
</head>

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
					<h1>Cupón</h1>
				</div>
				<div class="span4 right_aligned">
					<div class="breadcrumbs">
						<a href="<?php echo site_url('') ?>">Inicio</a> 
						<i class="ABdev_icon-chevron-right"></i> 
						<span class="current">Cupón
						</span>
					</div>									
				</div>
			</div>
		</div>
	</section>

	<section class="dzen_section_DD">
		<header>
			<div class="dzen_container">
				<h3>¿Cómo uso un código de cupón?</h3>
				
			</div>
		</header>
		<div class="dzen_section_content">
			<div class="dzen_container" style="text-align: justify;">
				<div class="row">
					<div class="span2"></div>
					<div class="span8">



						Si tienes un código de cupón de Airbnb y quieres utilizarlo en una nueva reservación, puedes agregarlo en la página de pago. Los códigos de cupón no pueden aplicarse a reservaciones o experiencias existentes.

						<br><br>Para utilizar tu cupón:<br>

						<br>1.- Cuando estés completando la página de pago, haz clic en <strong>Código Promocional</strong> debajo del método de pago.
						<br>2.- Ingresa el código.
						<br>3.- Haz clic en <strong>Añadir</strong>.
						<br><strong>Nota: </strong>para las experiencias solo se aceptan tarjetas de regalo de Airbnb. Los demás tipos de cupones (por ejemplo, el crédito por invitaciones o los cupones promocionales) no se pueden deducir del costo de una experiencia. Para realizar el pago mediante una tarjeta de regalo, tendrás que iniciar sesión en la aplicación para móviles de Airbnb.
						<br><br><br>
						¿Tienes algún problema con el código? Comprueba que lo ingresaste correctamente u obtén más información sobre las restricciones de los códigos de cupón.
					</div>
				</div>
			</div>
		</div>


	</section>

	


	<section class="dzen_section_DD no_padding callout_box_blue">
		<?php include 'plantilla/suscribete.php'; ?>
	</section>
	<footer id="dz_main_footer">
		<?php include 'plantilla/footer.php'; ?>
	</footer>

	<?php include 'plantilla/js.php'; ?>

</body>
</html>