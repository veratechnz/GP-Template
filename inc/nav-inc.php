<!-- PHP Server Script -->
<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<!-- End PHP Server Script -->

		<!-- NAV BAR -->
		<div class="row nav-bar">
			<div class="container">
				<!-- <div class="col-lg-12"> -->
					<nav class="navbar navbar-default">
	          <div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	              <li <?php if ($currentPage == 'index.php'){echo 'class="active"';}?>><a href="index.php">Home</a></li>
	              <li <?php if ($currentPage == 'about-us.php'){echo 'class="active"';}?>><a href="about-us.php">About Us</a></li>
	              <li <?php if ($currentPage == 'what-we-do.php'){echo 'class="active"';}?>><a href="what-we-do.php">What We Do</a></li>
	              <li <?php if ($currentPage == 'gallery.php'){echo 'class="active"';}?>><a href="gallery.php">Gallery</a></li>
	              <li <?php if ($currentPage == 'licensee.php'){echo 'class="active"';}?>><a href="licensee.php">Become A Licensee</a></li>
	              <li <?php if ($currentPage == 'newsletter.php'){echo 'class="active"';}?>><a href="newsletter.php">Newsletter</a></li>
	              <li <?php if ($currentPage == 'faq.php'){echo 'class="active"';}?>><a href="faq.php">F.A.Q</a></li>
	              <li <?php if ($currentPage == 'contact.php'){echo 'class="active"';}?>><a href="contact.php">Contact</a></li>
	              <li><i class="fa fa-search"></i></li>
	            </ul>
	          </div><!--/.nav-collapse -->
	          <!-- <input type="text" class="form-control" placeholder="Search for..."> -->
		      </nav>
				<!-- </div> -->
			</div>
		</div>