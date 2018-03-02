<!DOCTYPE html>
<html lang="es-MX">
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
					<h1><?php echo $titulo?></h1>
				</div>
				<div class="span4 right_aligned">
					<div class="breadcrumbs">
						<a href="<?php echo site_url('') ?>">Inicio</a> 
						<i class="ABdev_icon-chevron-right"></i> 
						<span class="current"><?php echo $titulo?>
						</span>
					</div>									
				</div>
			</div>
		</div>
	</section>

	

	
	<section id="our_work" class="dzen_section_DD ">
		<header>

			<div class="dzen_container">
				<h3>
					¿Qué tenemos para ti?
				</h3>
			</div>
			<div class="dzen_container">


				<div class="row">
					<div class="dzen_column_DD_span12">
						
						<img src="<?php echo site_url('') ?>images/<?php echo $imagen?>" alt="">
					</div>
				</div>
				<div class="row">
					<br><br>
					<div class="dzen_column_DD_span2"></div>
					<div class="dzen_column_DD_span5" style="text-align: justify;">
						
						<?php echo $iformacion;?>
					</div>
				</div>
			</div>

		</header>
	</section>


	<section class="dzen_section_DD no_padding_top">
		<div class="dzen_section_content">
			<div class="dzen_container">
				<div class="dzen_column_DD_span3 ">
					
				</div>
				<div class="dzen_column_DD_span6 ">
					<div class="dzen_pricing-table-2">
						<div class="dzen_pricebox_feature dzen_pricebox_feature_button">
								<a href="#Contacta" target="_self" class="dzen-button dzen-button_blue dzen-button_large open_01">Contáctanos</a>
							</div> 
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