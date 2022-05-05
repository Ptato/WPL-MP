<!DOCTYPE HTML>

<html>
	<head>
		<title>Faculty Details</title>
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
											<li><a href="History.html">History</a>
											<li><a href="#">Academics</a></li>
											<ul>
												<li><a href="Academics_PrePrimary.html">Pre-Primary</a></li>
												<li><a href="Academics_Primary.html">Primary</a></li>
												<li><a href="Academics_Secondary.html">Secondary</a></li>
											</ul>
											</li>
											<li>
												<a href="staff.php">Our Staff</a>
											</li>
										</ul>
									</li>
									<li><a class="icon solid fa-address-book" href="enrollment.html"><span>Enrollment</span></a></li>
									<li><a class="icon solid fa-child" href="StudentLife.html"><span>Student Life</span></a></li>
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
									<form method="POST" action="contact_us.php">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input name="name" placeholder="Name" type="text" required>
											</div>
											<div class="col-6 col-12-small">
												<input name="email" placeholder="Email" type="text" required>
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Message" required></textarea>
											</div>
				
											<div class="col-12">
												<input type="submit" class="btn btn-primary">
											</div>
									
										</div>
									</form>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									<p>It is always a pleasure for us at Silver Valley to talk to you. Please feel free to reach out to us if you have any concerns. We love to talk to parents and guardians and you can assume a response from us within three to four business days.</p>
									<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon solid fa-home">
												786, Link road<br />
												Mumbai, MH 464-223<br />
												India
												</li>
												<li class="icon solid fa-phone">
													(022) 213-0831
												</li>
												<li class="icon solid fa-envelope">
													<a href="#">svalley@gmail.com</a>
												</li>
											</ul>
										</div>
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon brands fa-twitter">
													<a href="#">@SilverValleyInstitute</a>
												</li>
												<li class="icon brands fa-instagram">
													<a href="#">instagram.com/SilverValleyInstitute</a>
												</li>
												<li class="icon brands fa-facebook-f">
													<a href="#">facebook.com/SilverValleyInstitute</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
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