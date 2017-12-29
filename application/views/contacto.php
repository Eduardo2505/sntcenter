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
					<h1>Contácto</h1>
				</div>
				<div class="span4 right_aligned">
					<div class="breadcrumbs">
						<a href="<?php echo site_url('') ?>">Inicio</a> 
						<i class="ABdev_icon-chevron-right"></i> 
						<span class="current">Contácto
						</span>
					</div>									
				</div>
			</div>
		</div>
	</section>

	<section class="dzen_section_DD">
		<header>
			<div class="dzen_container">
				<h3>Envianos un mensaje</h3>
				
			</div>
		</header>
		<div class="dzen_section_content">
			<div class="dzen_container">
				<div class="dzen_column_DD_span6">
					<div class="dzencf" id="dzencf-wrapper" dir="ltr">
						<form action="#" method="post" class="contact-form">
							<input type="text" name="name" size="40" class="dzencf-text" placeholder="NOMBRE ">
							<input type="email" name="email" size="40" class="dzencf-text dzencf-email dzencf-validates-as-email" placeholder="CORREO ELECTRONICO">
							<input type="text" name="subject" size="40" class="dzencf-text" placeholder="ASUNTO">
							<textarea name="message" cols="40" rows="10" class="dzencf-textarea" placeholder="MENSAJE"></textarea>
							<input type="submit" value="ENVIAR" class="dzencf-submit" id="dzencf-submit">
						</form>
						<div class="dzencf-response-output dzencf-display-none"></div>
					</div>
				</div>
				<div class="dzen_column_DD_span6">
					<h3 class="column_title_left">
						<span>Contáctanos
						</span>
					</h3>
					<table>
						<tbody>
							<tr>
								<td>
									<p class="contact_page_info">
										<span class=""><i class="ABdev_icon-envelope"></i></span>contacto@sntcenter.com.mx
									</p>
									<p class="contact_page_info">
										<span class=""><i class="ABdev_icon-home"></i></span>Palma CDMX
									</p>
									<p class="contact_page_info">
										<span class=""><i class="ABdev_icon-globe"></i></span>somewebsitehere.net
									</p>
								</td>
								<td>
									<p class="contact_page_info">
										<span class=""><i class="ABdev_icon-phonealt"></i></span>378 113 05 44
									</p>
									<!-- <p class="contact_page_info">
										<span class=""><i class="ABdev_icon-draft"></i></span>378 113 05 44
									</p> -->
								</td>
							</tr>
						</tbody>
					</table>
					<h3 class="column_title_left">
						<span>Siguenos</span>
					</h3>
					<div class="dzen_follow_us">
						<a title="Follow us on Facebook" class="dzen_socialicon_facebook dzen_tooltip" data-gravity="s" href="#" target="_blank"><i class="ABdev_icon-facebook"></i></a>
						<a title="Follow us on Twitter" class="dzen_socialicon_twitter dzen_tooltip" data-gravity="s" href="#" target="_blank"><i class="ABdev_icon-twitter"></i></a>
						<a title="Follow us on Google+" class="dzen_socialicon_googleplus dzen_tooltip" data-gravity="s" href="#" target="_blank"><i class="ABdev_icon-googleplus"></i></a>
						<a title="Follow us on Linkedin" class="dzen_socialicon_linkedin dzen_tooltip" data-gravity="s" href="#" target="_blank"><i class="ABdev_icon-linkedin"></i></a>
						<a title="Follow us on Youtube" class="dzen_socialicon_youtube dzen_tooltip" data-gravity="s" href="#" target="_blank"><i class="ABdev_icon-youtube"></i></a>
						<a title="Our RSS feed" class="dzen_socialicon_feed dzen_tooltip" data-gravity="s" href="#" target="_blank"><i class="ABdev_icon-rss"></i></a>
						<a title="Our Vimeo Profile" class="dzen_socialicon_vimeo dzen_tooltip" data-gravity="s" href="#" target="_blank"><i class="ABdev_icon-vimeo"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="dzen_section_DD no_padding section_body_fullwidth">
		<div class="dzen_section_content">
			<div class="dzen_container">
				<div class="dzen_column_DD_span12">
					<div id="dzen_google_map_1" 
					data-map_type="ROADMAP" 
					data-lat="20.672915" 
					data-lng="-103.353359" 
					data-zoom="17" 
					data-scrollwheel="0" 
					data-maptypecontrol="1" 
					data-pancontrol="1" 
					data-zoomcontrol="1" 
					data-scalecontrol="1" 
					data-markertitle="Our Company" 
					data-markericon="images/map-pointer.png" 
					data-markercontent="Our Address" 
					data-markerlat="20.672915" 
					data-markerlng="-103.353359" 
					class="dzen_google_map" style="height:400px;width:100%;">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="dzen_section_DD no_padding">
	<div class="dzen_section_content">
		<div class="dzen_container">
			<div class="dzen_column_DD_span12 ">
				<div class="dzen-callout_box no_margin">
					<div class="dzen_container">
						<div class="dzen_column_DD_span9">
							<span class="dzen-callout_box_title">Localizanos
							</span>
							
						</div>
						<div class="dzen_column_DD_span3">
							<a href="#" target="_self" class="dzen-button dzen-button_blue dzen-button_normal dzen-button_large">Mostrar Ubucacón</a>
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