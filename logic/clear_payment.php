<?php
	
	if (isset($_POST["clear_payment"])) {
		$ref =  $_POST["ref"];
		$amount = $_POST["amount"];


		//Get the customer infomation to dislay on the invoices
		$get_info = $con->query("SELECT * FROM student_info WHERE stud_num = '$ref' OR stud_id = '$ref'");

		//Check if any records where found
		$records_found = mysqli_num_rows($get_info);

if($records_found > 0){
		while ($row = mysqli_fetch_array($get_info)) {
			$stud_name = $row["full_name"];
			$surname = $row["surname"];
			$email = $row["email"];
			$cell = $row['cell'];
			$address = $row['h_address'];

			$stud_id = $row['stud_id'];
			$stud_num = $row['stud_num'];
			//$date = NOW();
		}

		$get_cost = $con->query("SELECT * FROM accounts WHERE stud_num = '$ref' OR stud_id = '$ref'");
		while ($row = mysqli_fetch_array($get_cost)) {
			$cost = $row['cost'];
		}

		
		//query to add up all the student's invoices
		$add_payments = $con->query("SELECT SUM(amount) AS payments FROM invoices WHERE referrence = '$stud_num' OR referrence = '$stud_id'");
		while ($row = mysqli_fetch_array($add_payments)) {
			$payments = $row['payments'];
		}
	

		//Calculate outstanding balance
		$oustanding = $cost - $payments - $amount;


		$count_invoices = mysqli_num_rows($con->query("SELECT * FROM invoices"));

		$inv_num = $count_invoices + 1;
}

	//Save the invoive details into database when the button on invoice.php is clicked
	}elseif(isset($_POST["submit_inv"])) {
		$reference = $_POST["refe"];
		$amt = $_POST["amt"];


		if($save_inv = $con->query("INSERT INTO invoices(referrence, amount, date) VALUES('$reference', '$amt', NOW())")){
			echo "<script type='text/javascript'> alert('Payment successfully saved');</script>";
			header("Location: reports.php");
		}else{
			
		}
	}else{
		header("Location: index.php");
	}





?>