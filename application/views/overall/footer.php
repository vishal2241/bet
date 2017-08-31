
<footer class="footer footer-transparent">
	<div class="container">
		<nav class="pull-left">
			<a class="btn btn-social btn-twitter btn-simple" href="https://twitter.com/CreativeTim">
				<i class="fa fa-twitter"></i>
			</a>
			<a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/CreativeTim">
				<i class="fa fa-facebook-square"></i>
			</a>
			<a class="btn btn-social btn-google btn-simple" href="https://plus.google.com/+CreativetimPage">
				<i class="fa fa-google-plus"></i>
			</a>
		</nav>

 
		<!--<div class="copyright">
			&copy; 2017 
		</div>-->
	</div>
</footer>

</div>

<!-- Modal Core  
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info btn-simple">Save</button>
			</div>
		</div>
	</div>
</div> -->
</body>
<!--   Core JS Files   -->
<script src="<?= base_url(); ?>public/js/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>public/js/material.min.js"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="<?= base_url(); ?>public/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="<?= base_url(); ?>public/js/material-kit.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>public/js/moment.js"></script> 	
<script src="<?= base_url(); ?>public/js/moment-with-locales.min.js"></script> 	
<script src="<?= base_url(); ?>public/js/general.js"></script> 	
<script src="<?= base_url(); ?>public/js/loading.js"></script>
<script src="<?= base_url(); ?>public/js/jquery.number.js"></script>
<script src="<?= base_url(); ?>public/js/jquery.sticky.js" type="text/javascript"></script>

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
