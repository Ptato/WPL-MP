<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>No Sidebar - Strongly Typed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<section id="header">
					<div class="container">

						<!-- Logo -->
							<h1 id="logo">Silver Valley Institute</h1>
							<p>Preparing the future</p>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="icon solid fa-home" href="index.php"><span>Home</span></a></li>
									<li>
										<a href="#" class="icon fa-chart-bar"><span>About us</span></a>
										<ul>
											<li><a href="#">History</a></li>
											<li><a href="#">Academics</a></li>
											<li><a href="#">Alumni</a></li>
											<li>
												<a href="staff.php">Our Staff</a>
												
											</li>
											
										</ul>
									</li>
									<li><a class="icon solid fa-address-book" href="enrollment.html"><span>Enrollment</span></a></li>
									<li><a class="icon solid fa-child" href="right-sidebar.html"><span>Student Life</span></a></li>
									<li><a class="icon solid fa-sitemap" href="#footer"><span>Contact us</span></a></li>
									<li><a class="icon solid fa-id-badge" href="login.php"><span>Admin</span></a></li>
								</ul>
							</nav>

					</div>
				</section>


			<!-- Main -->
				<div class="container ">
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <?php
                            
                            include('config.php');
                            $query = "SELECT * FROM staff";
                            $query_run= mysqli_query($conn,$query);
                            $check_faculty = mysqli_num_rows($query_run)>0;

                            if($check_faculty){
                                while($row = mysqli_fetch_array($query_run)){
                                    

                                    ?>
                                 <div class="card">
                                    <div class="card-body">
                                    <img src="<?php echo $row['image'];?>" height="100" width="100"alt="Faculty images">
                                    <h2 class="card-title"><?php echo $row['Name']; ?></h2>
                                    <h4 class="card-title"><?php echo $row['Id']; ?></h4>
                                    <p class="card-text">
                                    <?php echo $row['email']; ?><br>
                                    <?php echo $row['Qualification']; ?>
                                    </p>
                                </div>
                            </div>
                                    <?php

                                }
                            }

                            ?>
                           
                        </div>
                    </div>
                </div>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<header>
							<h2>Questions or comments? <strong>Get in touch:</strong></h2>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">
								<section>
									<form method="post" action="#">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input name="name" placeholder="Name" type="text" />
											</div>
											<div class="col-6 col-12-small">
												<input name="email" placeholder="Email" type="text" />
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Message"></textarea>
											</div>
											<div class="col-12">
												<a href="#" class="form-button-submit button icon solid fa-envelope">Send Message</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phaselamet
									mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur
									leo nibh, rutrum eu malesuada.</p>
									<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon solid fa-home">
													1234 Somewhere Road<br />
													Nashville, TN 00000<br />
													USA
												</li>
												<li class="icon solid fa-phone">
													(000) 000-0000
												</li>
												<li class="icon solid fa-envelope">
													<a href="#">info@untitled.tld</a>
												</li>
											</ul>
										</div>
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon brands fa-twitter">
													<a href="#">@untitled</a>
												</li>
												<li class="icon brands fa-instagram">
													<a href="#">instagram.com/untitled</a>
												</li>
												<li class="icon brands fa-dribbble">
													<a href="#">dribbble.com/untitled</a>
												</li>
												<li class="icon brands fa-facebook-f">
													<a href="#">facebook.com/untitled</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>