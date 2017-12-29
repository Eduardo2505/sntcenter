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
					<h1>¿Quién soy?</h1>
				</div>
				<div class="span4 right_aligned">
					<div class="breadcrumbs">
						<a href="index.html">Inicios</a> 
						<i class="ABdev_icon-chevron-right"></i> 
						<span class="current">¿Quién soy yo ?
						</span>
					</div>									
				</div>
			</div>
		</div>
	</section>

	<section class="dzen_section_DD ">
		<div class="dzen_section_content">
			<div class="dzen_container">
				<div class="dzen_column_DD_span6 ">
					<!-- START REVOLUTION SLIDER 4.6.0 fullwidth mode -->
					<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:300px;">
						<div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;max-height:300px;height:300px;">
							<ul>	<!-- SLIDE  -->
								<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
									<!-- MAIN IMAGE -->
									<img src="<?php echo site_url('') ?>images/photodune-358775-team-xs.jpg"  alt="photodune-1860048-professional-team-xs"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
									<!-- LAYERS -->
								</li>
								<!-- SLIDE  -->
								<li data-transition="random" data-slotamount="7"  data-saveperformance="off" >
									<!-- MAIN IMAGE -->
									<img src="<?php echo site_url('') ?>images/photodune-358775-team-xs.jpg"  alt="photodune-358775-team-xs"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
									<!-- LAYERS -->
								</li>
							</ul>
							<div class="tp-bannertimer"></div>	
						</div>
					</div><!-- END REVOLUTION SLIDER -->
				</div>
				<div class="dzen_column_DD_span6 about_us_introducton">
					<h3>
						<span>Nosotros</span>
					</h3>
					<div class="margin_bottom">
						<div>
							<span>
								Trabajamos conforme a un plan integral para lograr conseguir la meta que te propongas, ya sea de salud y bienestar, de recomposición corporal con enfoque estético (aumento de masa muscular y/o disminución de grasa corporal) o de mejora del rendimiento (culturismo y cualquier deporte), este consta de un plan de nutrición (alimentación y suplementación) y el plan de entrenamiento, ambos están diseñados para trabajar en conjunto y lograr óptimos resultados. (aplica la misma mecánica para on-line y presencial). 
							</span>
						</div>
						<div>
						</div>
						<!-- <div>
							<span>
								Sed ut
								perspiciatis unde omnis iste natus error sit voluptatem accusantium 
								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo 
								inventore veritatis et quasi architecto beatae vitae dicta sunt 
								explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut 
								odit aut fugit, sed quia consequuntur magni dolores eos qui ratione 
								voluptatem sequi nesciunt.
							</span>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	
	

	
	<section class="dzen_section_DD no_padding callout_box_blue">
		<div class="dzen_section_content">
			<div class="dzen_container">
				<div class="dzen_column_DD_span12 ">
					<div class="dzen-callout_box color_white no_margin">
						<div class="dzen_container">
							<div class="dzen_column_DD_span9">
								<span class="dzen-callout_box_title">Consejos y tips para tu bienestar y salud</span>
								<p>
									Te enviaremos artículos  interasantes que te podran ayudar día a día.
								</p>
							</div>
							<div class="dzen_column_DD_span3">
								<a href="#" target="_self" class="dzen-button dzen-button_light dzen-button_large">Suscribete</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer id="dz_main_footer">
		<?php include 'plantilla/footer.php'; ?>
	</footer>


	<?php include 'plantilla/js.php'; ?>

</body>
</html>