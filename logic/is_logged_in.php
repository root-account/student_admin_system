<?php
ob_start();
	require_once('connect.php');
	session_start();
 
	if (!isset($_SESSION['username'])) {
		header('Location: login.php');
	}else{
		$username = $_SESSION['username'];


		$query = "SELECT * FROM users WHERE username = '$username'";
		$result = mysqli_query($con, $query);

		if ($result){
			while ($row = mysqli_fetch_array($result)){
				$status = $row['status'];
				$user_surname = $row['surname'];
				$user_names = $row['name'];
			}
		}



		function adminBtn($status){
			if ($status > 100) {
					echo "<a href='' class='btn btn-primary'>Go to admin panel</a>";
			}

		}
		
	}




?>