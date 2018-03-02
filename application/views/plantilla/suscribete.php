<div class="dzen_section_content">
	<div class="dzen_container">
		<div class="dzen_column_DD_span12 ">
			<div class="dzen-callout_box color_white no_margin">
				<div class="dzen_container">
					<div class="dzen_column_DD_span7">
						<span class="dzen-callout_box_title">Consejos y tips para tu bienestar y salud</span>
						<p>
							Te enviaremos artículos  interasantes que te podran ayudar día a día.
						</p>
					</div>
					<div class="dzen_column_DD_span5">
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
						<script>

							$(document).ready(function() {
								$('#clickSus').click(function() {
									var email = $('#emaialSus').val();
									if(isValidEmailAddress(email))
									{
										alert("Se envio");
										var dataString = 'email=' + email+'&id=1';
										$.ajax({
											type: "GET",
											url: 'http://sntcadmin.pvessy.com/sntc/suscriptores/registrar',
											data: dataString,
											success: function(data) {
											//alert(data);
											$("#enviarSubmit").click();

										}
									});

									}else{
										$("#enviarSubmit").click();
									}
									

								}


								);
							});

							function isValidEmailAddress(emailAddress) {
								var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
								return pattern.test(emailAddress);
							}

						</script>
						<script>
							$(document).ready(function(){
								$("#open_01").on("click",function(){
									$(".cont_facebook").toggleClass("open");
								})
							})
						</script>
						<form action="<?php echo site_url('') ?>welcome/suscripcion" method="post" id="enviarSus">
							<div class="dzen_column_DD_span9">
								<input type="email" name="email" id="emaialSus"  class="dzencf-text" placeholder="Email " required="true">

							</div>
							<div class="dzen_column_DD_span2">
								<input type="submit" id="enviarSubmit" value="ENVIAR" class="dzencf-submit"  style="display: none">
								<a href="#enviar" id="clickSus"  class="dzen-button dzen-button_light dzen-button_large">Suscribete</a>

							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>