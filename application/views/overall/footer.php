<!--   Core JS Files   -->
<script src="<?= base_url(); ?>public/js/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>public/js/material.min.js"></script>
 
<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="<?= base_url(); ?>public/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="<?= base_url(); ?>public/js/material-kit.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>public/js/moment.js"></script> 	
<script src="<?= base_url(); ?>public/js/moment-with-locales.min.js"></script> 	


<script>
	var header_height;
	var fixed_section;
	var floating = false;

	$().ready(function(){
		suggestions_distance = $("#suggestions").offset();
		pay_height = $('.fixed-section').outerHeight();

		$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

 
		});
	</script>
