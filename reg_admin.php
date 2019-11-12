<?php
session_start();
    require_once("logic/connect.php");



    if (!isset($_SESSION['logged_in'])) {
        header("Location: add_admin.php");
    }
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
                        $message = "";
						if (isset($_POST['save'])) {


							$pass = $_POST['pass'];
                            $pass2 = $_POST['pass2'];
                            $name = $_POST['fnames'];
                            $surname = $_POST['surname'];
                            $username = $_POST['username'];
                            $cell = $_POST['cellphone'];
                            $email = $_POST['email'];

                            $id = rand(10000000, 99999999);
                            $err_found = false;

                            if ($pass !== $pass2) {
                                $err_found = true;
                                $message = "Your passwords do not match";
                            }

                           if ($err_found !== true) {
                            if ($con->query("INSERT INTO users(username, id, name, surname, phone, email, password, status) VALUES('$username', '$id', '$name', '$surname', '$cell', '$email', md5('$pass'), 0)")) {
                                
                                echo "

                                    <script type='text/javascript'> alert('Admin registred'); window.location='add_admin.php'; </script>

                                " ;

                                unset($_SESSION['logged_in']);
                                session_destroy();


                                //header('Location: add_admin.php');
                            }else{
                                 echo "

                                    <script type='text/javascript'> alert('Something went wrong'); </script>

                                " ;
                            }

                            
						}

                        }

                        if(isset($_POST['back'])){
                            unset($_SESSION['logged_in']);
                            session_destroy();

                            header('Location: login.php');
                        }

					?>

					<div class="well">
						<h4>Add new system admin.</h4>
                        <p style="color:red;"><?php echo $message;  ?></p>
						<form method="POST" action="">
							<input type="text" class="form-control" placeholder="username" name="username" required><br/>
                            <input type="text" class="form-control" placeholder="Full names" name="fnames" required><br/>
                            <input type="text" class="form-control" placeholder="surname" name="surname" required><br/>
                            <input type="text" class="form-control" placeholder="Cellphone" name="cellphone" required><br/>
                            <input type="email" class="form-control" placeholder="Email" name="email" required><br/>
                            <input type="password" class="form-control" placeholder="Password" name="pass" required><br/>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="pass2" required><br/>

							<button class="btn btn-primary btn-sm" name="save" type="submit">
								Add admin
							</button>

                            
						</form><br/>
                        <form class="" method="POST" action="">
                            <button class="btn btn-danger btn-sm" name="back" type="submit">
                                Go back
                            </button>
                        </form>
					</div>
				</div>

			</div>

		</div>

</body>




<?php require_once("includes/scripts.php"); ?>