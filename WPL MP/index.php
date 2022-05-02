<!DOCTYPE HTML>

<html>
	<head>
		<title>Silver Valley Institute</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
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
												<a href="#">Our Staff</a>
												<ul>
													<li><a href="#">Pre-Primary</a></li>
													<li><a href="#">Primary</a></li>
													<li><a href="#">Secondary</a></li>
												</ul>
											</li>
											<li><a href="#">Gallery</a></li>
										</ul>
									</li>
									<li><a class="icon solid fa-cog" href="enrollment.html"><span>Enrollment</span></a></li>
									<li><a class="icon solid fa-retweet" href="right-sidebar.html"><span>Student Life</span></a></li>
									<li><a class="icon solid fa-sitemap" href="#footer"><span>Contact us</span></a></li>
								</ul>
							</nav>

					</div>
				</section>

			<!-- Features -->
				<section id="features">
					<div class="container">
						<header>
							<h2>Enter a new world of Education</h2>
						</header>
						<div class="row aln-center">
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/kindergarten.jpg" alt="" /></a>
										<header>
											<h3>Early Learning</h3>
										</header>
										<p>Somthing about pre Primary</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/Primary.jpg" alt="" /></a>
										<header>
											<h3>Primary</h3>
										</header>
										<p>Something about Primary</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/Secondary.jpg" alt="" /></a>
										<header>
											<h3>Secondary</h3>
										</header>
										<p>Something about Secondary</p>
									</section>

							</div>
							<div class="col-12">
								<ul class="actions">
									<li><a href="#" class="button icon solid fa-file">Learn more about us</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>

			<!-- Banner -->
				<section id="banner">
					<div class="container">
						<p>“Live as if you were to die tomorrow. Learn as if you were to live forever” – Mahatma Gandhi</p>
					</div>
				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">

							<!-- Content -->
								<div id="content" class="col-8 col-12-medium">

									<!-- Post -->
										<article class="box post">
											<header>
												<h2><a href="#">Our Vision</a></h2>
											</header>
											<a href="#" class="image featured"><img src="images/s_building.jpg" alt="" /></a>
											<h3>Empaty Respect and Love</h3>
											<p>To be a professsionally managed premier institution within all judging parameters 
												that provides an environment where excellence, holistic growth is nurtured. 
												Students are prepared for a ever evolving society and develop lifelong learning skills.<br>

												Silver Valley aims to provide an exciting all around education to create global citizens
												 through the values of love,empathy,respect and discipline.
											</p>
										</article>

									<!-- Post -->
										<article class="box post">
											<header>
												<h2><a href="#">Accomplishments(Make carousel)</a></h2>
											</header>
											<a href="#" class="image featured"><img src="#" alt="" /></a>
											<h3></h3>
											
											<ul class="actions">
												
											</ul>
										</article>

								</div>

							<!-- Sidebar -->
								<div id="sidebar" class="col-4 col-12-medium">
								<?php 

							include('config.php');
							$sql = 'SELECT * FROM notices';
							$result = mysqli_query($conn,$sql);
							$notices = mysqli_fetch_all($result,MYSQLI_ASSOC);


								?>

								<?php foreach($notices as $notice){?>
									<!-- Excerpts -->
										<section>
											<ul class="divided">
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date"><?php echo htmlspecialchars($notice['Dated']);?></span>
																<h3><a href="#"><?php echo htmlspecialchars($notice['Title']);?></a></h3>
															</header>
															<p><?php echo htmlspecialchars($notice['Content']);?></p>
														</article>

												</li>
											</ul>
										</section>
										<?php }?>
									<!-- Highlights -->
										
									
								</div>

						</div>
					</div>
				</section>

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
									<p>HI</p>
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