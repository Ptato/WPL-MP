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
    <body>
    <a href='logout.php'><input type=button value=Logout name=button></a>
	<div class="container py-5">
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <?php
                            
                            include('config.php');
                            $query = "SELECT * FROM contact_us";
                            $query_run= mysqli_query($conn,$query);
                            $check_faculty = mysqli_num_rows($query_run)>0;

                            if($check_faculty){
                                while($row = mysqli_fetch_array($query_run)){
                                    

                                    ?>
                                 <div class="card">
                                    <div class="card-body">
                                    <h2 class="card-title"><?php echo $row['Name']; ?></h2>
                                    <p class="card-text">
                                    <?php echo $row['email']; ?><br>
                                    <?php echo $row['Content']; ?>
                                    </p>
                                    <form action="delete_cu.php" method="post">
                                       <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                    <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                                   </form>
                                </div>
                            </div>
                                    <?php

                                }
                            }

                            ?>
                           
                        </div>
                    </div>
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