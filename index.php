<!DOCTYPE	html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css">
	<title>GlassProtech</title>
</head>
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
		<div class="row footer">
			<div class="container">
				<!-- LOGO -->
				<div class="col-sm-3">
					<img src="img/logo.png" alt="Glass Protech Logo" >
				</div>
				<!-- CONTACT US -->
				<div class="col-sm-3 contact-us">
					<h4 class="footer-title">Contact Us</h4>
					<p><i class="fa fa-phone fa-lg"></i>0800 457 776</p>
					<p class="email"><i class="fa fa-envelope"></i><a href="mailto:info@glassprotech.co.nz">info@glassprotech.co.nz</a></p>
					<p><i class="fa fa-map-marker fa-lg"></i>&nbsp;At an address.<br><span class="indent">Somewhere in</span><br><span class="indent">New Zealand.</span></p>
				</div>
				<!-- WHAT WE DO -->
				<div class="col-sm-3">
					<h4 class="footer-title">What We Do</h4>
					<p>Sed ut per spiciat it  unde om nis iste natus error sit volup tat em acc usant ium do.</p>
					<p class="footer-sub-title">Sign Up to Newsletter</p>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Email Address" aria-describedby="basic-addon2">
						<span class="input-group-addon" id="basic-addon2">SUBMIT</span>
					</div>
				</div>
				<!-- LOGIN -->
				<div class="col-sm-3">
					<h4 class="footer-title">Licencee Login</h4>
					<input type="text" class="form-control" placeholder="Email Address">
					<hr>
					<input type="text" class="form-control" placeholder="Password">
					<button type="button" class="btn btn-default" aria-label="login">LOGIN</button>
				</div>
			</div>
		</div>
		<!-- BOTTOM PANEL -->
		<div class="row bottom-panel">
			<div class="col-xs-12 text-center">
				<p>All Content Copyright - GlassProtech 2015</p>
			</div>
		</div>
	</div><!-- main wrapper ends -->

<!-- All JS Files -->
<script src="js/jquery.js"></script>
<script src="js/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script src="js/custom.js"></script>
</body>
</html>