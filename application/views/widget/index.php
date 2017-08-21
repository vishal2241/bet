<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="es">
<head>
	<?php $this->load->view('overall/header'); ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/dataTables.bootstrap.css">
</head>

<body class="components-page">
	<?php $this->load->view('overall/nav2'); ?>
	<div class="main main-raised">
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="tim-container">
							<iframe width="100%" height="100vh" style="overflow: hidden;height: 80vh;display: block;" src="https://apifootball.com/widget/display/index.php?display=nextMatch&id=1164"></iframe>
						</div>
						<!-- end container -->
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<?php $this->load->view('overall/footer'); ?>


	<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/dataTables.bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#bets').DataTable({
				"iDisplayLength": -1,
			});
		} );


				/*for (var i = 0; i < 40; i++) {
				$("#bets > tbody").append('<tr> \
				<td class="text-center">19:00</td> \
				<td class="text-center">Botafogo PB</td> \
				<td class="text-center">Fortaleza</td> \
				<td class="text-center">2.00</td> \
				<td class="text-center"3.15</td> \
					<td class="text-center">3.30</td> \
					<td class="text-center">2.05</td> \
					<td class="text-center">1.58</td> \
					<td class="text-center">2.30</td> \
					<td class="text-center">1.98</td> \
					<td class="text-center">3.60</td> \
					<td class="text-center">1.21</td> \
					<td class="text-center">1.32</td> \
					<td class="text-center">1.59</td> \
					<td class="text-center">11.00</td> \
					<td class="text-center">7.60</td> \
				</tr>');
			} */


			var header_height;
			var fixed_section;
			var floating = false;

			$().ready(function(){
				suggestions_distance = $("#suggestions").offset();
				pay_height = $('.fixed-section').outerHeight();

				$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

			});

		</script>
		</html>
