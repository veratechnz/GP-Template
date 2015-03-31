<!DOCTYPE	html>
<html>

<!-- HEAD -->
<?php include('inc/head-inc.php') ?>

<body id="home">

	<!-- MAIN WRAPPER -->
	<div class="container-fluid">

<!-- TOP PANEL -->
<?php include('inc/logo-inc.php') ?>

<!-- NAV BAR -->
<?php include('inc/nav-inc.php') ?>

		<!-- SLIDER -->
		<div class="row slider">
			<div class="col-xs-12">
				<div id="slider" class="nivoSlider">
			    <img src="img/slide-a.jpg" alt="" />
			    <img src="img/slide-b.jpg" alt="" />
				</div>
			</div>
		</div>
		<!-- CONTENT -->
		<div class="row content">
			<div class="container services-home">
				<div class="col-md-12 text-center">
					<h2 class="title-home"><span class="gp-red">Glass</span><span class="gp-black">Protech</span> <span class="title-home-thin">Serious About Surface Protection</span></h2>
				</div>
				<div class="service-home first">
					<img src="img/glassprotech-services-a.jpg" alt="">
				</div>
				<div class="service-home">
					<img src="img/glassprotech-services-b.jpg" alt="">
				</div>
				<div class="service-home last">
					<img src="img/glassprotech-services-c.jpg" alt="">
				</div>
				<div class="news-home">
					<h3 class="h3 news-title">Newsletter</h3>
					<div class="news-item first">
						<h4 class="h4">Lorem ipsum dolor sit amet.</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolores.</p>
						<p class="text-right">
							<small><a href="">Read More >></a></small>
						</p>
					</div>
					<div class="news-item">
						<h4 class="h4">Lorem ipsum dolor sit amet.</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolores.</p>
						<p class="text-right">
							<small><a href="">Read More >></a></small>
						</p>
					</div>
				</div>
			</div>
		</div>
<!-- FOOTER -->
<?php include('inc/footer-inc.php') ?>

	</div><!-- main wrapper ends -->

<!-- All JS Files -->
<script src="js/jquery.js"></script>
<script src="js/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script src="js/custom.js"></script>
</body>
</html>