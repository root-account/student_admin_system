<?php
session_start();
	require_once("logic/connect.php");
		

$message = "";


if (isset($_SESSION['username']) || !empty($username)) {
		header('Location: index.php');
}


if (isset($_POST["login"])) {
	
	$username = trim($_POST['username']);
	$pass = trim($_POST['passw']);

	$err_found = false;

	$check_details = $con->query("SELECT * FROM users WHERE username = '$username' AND password = md5('$pass')");

	$count = mysqli_num_rows($check_details);

	if ($count == 0) {
		$message =  '
			
				<p class="text-danger"><span class="ace-icon fa fa-times bigger-110 red"> </span>  Wrong username or password</p>
			';

		$err_found = true;
	}else{

		while ( $row = mysqli_fetch_array($check_details)) {
			session_start();
			$_SESSION["username"] = $row['username'];
			$username = $_SESSION["username"];
			
			header('Location: index.php');


			
	}

}
}

?>