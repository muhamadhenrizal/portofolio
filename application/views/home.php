<!DOCTYPE html>
<html lang="en">
<head>
	<title>muhamadhenrizal</title>
	<?php $this->load->view('_partials/head.php'); ?>
</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
	<?php $this->load->view('_partials/navbar.php'); ?>
	<section class="site-hero" style="background-image: url(<?php echo base_url().'assets/img/89.jpg'?>)" id="section-home" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row intro-text align-items-center justify-content-center">
				<div class="col-md-10 text-center pt-5">
					<h1 class="site-heading site-animate">Hello, I'm <strong class="d-block">Muhamad Henrizal</strong></h1>
					<strong class="d-block text-white text-uppercase letter-spacing">Student Vocational High School</strong>
				</div>
			</div>
		</div>
	</section> 
	<!-- about -->
	<?php $this->load->view('about'); ?>

	<!-- resume -->
	<?php $this->load->view('resume'); ?>

	<!-- portofolio -->
	<?php $this->load->view('portofolio'); ?>

	<!-- services -->
	<?php $this->load->view('services'); ?>
	
	<!-- footer -->
	<?php $this->load->view('_partials/footer.php'); ?>

	<script src="<?php echo base_url().'assets/js/vendor/jquery.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/js/vendor/jquery-migrate-3.0.1.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/js/vendor/popper.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/js/vendor/bootstrap.min.js' ?>"></script>

	<script src="<?php echo base_url().'assets/js/vendor/jquery.easing.1.3.js' ?>"></script>

	<script src="<?php echo base_url().'assets/js/vendor/jquery.stellar.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/js/vendor/jquery.waypoints.min.js' ?>"></script>

	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url().'assets/js/custom.js' ?>"></script>

	<!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?php echo base_url().'assets/js/google-map.js' ?>"></script>

    </body>
    </html>