<script type="text/javascript" src="<?php echo site_url('') ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo site_url('') ?>js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo site_url('') ?>rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo site_url('') ?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIZmIZenLpYCnq_YPMH3D9eMfCA2K3_rU">
</script>
<script type="text/javascript" src="<?php echo site_url('') ?>js/scripts.js"></script>
<script type="text/javascript" src="<?php echo site_url('') ?>js/custom.js"></script>
<style>
.fixedbutton {
	position: fixed;
	bottom: 0px;
	right: 0px;
	cursor: pointer; 
	z-index: 100;
}
</style>
<script>
	$(document).ready(function(){
		
		 var clockMessenger = localStorage.getItem("clockMessenger");
		 if(clockMessenger==1){
		 	$("#cont_facebook").css("display", "block");
			//$("#bottomMess").css("display", "none");
		}else{
		    $("#cont_facebook").css("display", "none");
			//$("#bottomMess").css("display", "block");
		}
	})

	$(document).ready(function(){
		$(".open_01").on("click",function(){

			localStorage.setItem("clockMessenger", 1);
			$("#cont_facebook").css("display", "block");
			//$("#bottomMess").css("display", "none");
		})
	})

	$(document).ready(function(){
		$("#close").on("click",function(){
            localStorage.setItem("clockMessenger", 0);
			$("#cont_facebook").css("display", "none");
			//$("#bottomMess").css("display", "block");
		})
	})
</script>

<div class="fixedbutton" id="cont_facebook" style="display: none; ">
	<a href="#cerrar" id="close"> <img src="<?php echo site_url('') ?>images/cerrar.png"> </a><br>
	<iframe style="margin: 10 10 10 10 " src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSNTCenter.SportNutritionandTrainningCenter%2F&tabs=messages&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=341527799694160" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
</div>