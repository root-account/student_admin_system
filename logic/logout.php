<?php
	require_once('connect.php');
	session_start();

	unset($_SESSION['username']);


	session_destroy();

	header('Location: ../login.php');





?>