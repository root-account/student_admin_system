<?php
    require_once("logic/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>WEPCoS</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="assets/css/my_styles.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <link rel="stylesheet" href="assets/css/custom_styles.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>


<body>
	
		<div class="container">
		<br/>
		<br/>
		<br/>
			<div class="row">
				<div class="col-md-4">

				</div>

				<div class="col-md-4">
					<?php

						if (isset($_POST['proceed'])) {
							$pass = $_POST['pass'];

							$count = mysqli_num_rows($con->query("SELECT * FROM users WHERE username = 'Test account 1' AND password = md5('$pass')"));

							if ($count > 0) {
								session_start();
								$_SESSION['logged_in'] = 'userlogged';

								header("Location: reg_admin.php");
							}else{
								echo "<p style='color:red;'>That password is incorrect</p>";
							}
						}

					?>

					<div class="well">
						<h4>Enter password.</h4>

						<form method="POST" action="">
							<input type="password" class="form-control" placeholder="**********" name="pass" required><br/>
							<button class="btn btn-primary btn-sm" name="proceed" type="submit">
								Submit
							</button>
						</form>
					</div>
				</div>

			</div>

		</div>

</body>




<?php require_once("includes/scripts.php"); ?>