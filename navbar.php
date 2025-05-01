<?php session_start(); ?>
<!DOCTYPE html>
    <html lang="en">
        <head>
          	  <?php include("resources/connection.php"); ?>
              <!-- <title><?= $_SESSION['CurrentPage']; ?></title> -->
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <!-- <meta name='description' content="<?= $_SESSION['Description']; ?>">             -->
              <!-- <meta name="author" content="<?= $_SESSION['ArticleAuthor']; ?>"> -->
              <!-- <link rel="icon" href="/images/halfLogo.png"> -->
              <link href="/style/bootstrap.css" rel="stylesheet">
              <link href="/style/font-awesome.min.css" rel="stylesheet">
              <link href="/style/main.css" rel="stylesheet">
              <script src="/script/jquery-3.4.1.js"></script>
              <script src="/script/bootstrap.js"></script>
        </head>


        
	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
						<!-- <a class="navbar-brand" href="/"><img src="/logo.svg"></a>	 -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<span style="font-size: 1.6rem; font-weight: 700;"><img style="width: 2.1rem;" src="/svg/phone-fill.svg"></i>(313)555-5555</span>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/">Home</a>
								</li>
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/learn.php">Learn</a>
								</li> -->
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 d-block d-lg-none">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
									<div class="dropdown-menu">
										<!-- <a class="dropdown-item">Services</a> -->
										<a class="dropdown-item" href="/pages/services/concrete-driveway.php">Driveways</a>
										<a class="dropdown-item" href="/pages/services/concrete-commercial.php">Commercial</a>
										<a class="dropdown-item" href="/pages/services/concrete-foundation.php">Foundations</a>
										<a class="dropdown-item" href="/pages/services/sidewalks.php">Sidewalks</a>
									</div>
								</li>
								<li class="nav-item dropdown pl-4 pl-md-0 ml-0 ml-md-4 d-none d-lg-block">
									<a class="nav-link dropdown-toggle">Services</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/pages/services/concrete-driveway.php">Driveways</a>
										<a class="dropdown-item" href="/pages/services/concrete-commercial.php">Commercial</a>
										<a class="dropdown-item" href="/pages/services/concrete-foundation.php">Foundations</a>
										<a class="dropdown-item" href="/pages/services/sidewalks.php">Sidewalks</a>
									</div>
								</li>
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/about-us.php">About Us</a>
								</li> -->
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/articles.php">Articles</a>
								</li> -->
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/pages/faq.php">FAQ</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/pages/contact-us.php">Contact Us</a>
								</li>
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/pages/privacy-policy.php">Privacy</a>
								</li> -->
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/pages/disclaimer.php">Disclaimer</a>
								</li> -->
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/jobs.php">Jobs</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/donate.php">Donate</a>
								</li> -->

								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/contact.php">Chat</a>
								</li> -->
								<?php
									if(!isset($_SESSION['User'])){
								?>
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/login.php">Login</a>
								</li> -->
								<?php
									}
									else{
								?>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['User']; ?></a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/account/profile.php">View Profile</a>
										<a class="dropdown-item" href="/handler/signout.php">Sign Out</a>
									</div>
								</li>
								<?php
									}
								?>
							</ul>
						</div>
					</nav>		
				</div>
			</div>
		</div>
	</div>
