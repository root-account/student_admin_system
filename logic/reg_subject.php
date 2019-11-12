<?php


		$stud_id = $_GET["stud_id"];
		$stud_num = $_GET["stud_num"];

		$get_info = $con->query("SELECT * FROM student_info WHERE stud_id = '$stud_id' AND stud_num = '$stud_num'");
		$count = mysqli_num_rows($get_info);

		if ($count == 0) {
			header("Location: stud_info.php");
		}


if (isset($_POST['complete_reg'])) {

	$campus = $_POST['campus'];
	$programme = $_POST['programme'];
	$count = 0;

	$err_found = false;

	if ($campus == 1 && $programme == 1) {
		$reg_fee = 850;
		$sub_cost = 390;
		$duration = 10;
	}elseif ($campus == 1 && $programme == 2) {
		$reg_fee = 850;
		$sub_cost = 390;
		$duration = 5;
	}elseif ($campus == 1 && $programme == 3) {
		$reg_fee = 390;
		$sub_cost = 110;
		$duration = 10;
	}elseif ($campus == 2 && $programme == 1) {
		$reg_fee = 600;
		$sub_cost = 250;
		$duration = 10;
	}elseif ($campus == 2 && $programme == 2) {
		$reg_fee = 850;
		$sub_cost = 390;
		$duration = 5;
	}elseif ($campus == 2 && $programme == 3) {
		$reg_fee = 250;
		$sub_cost = 50;
		$duration = 10;
	}else{
		$reg_fee = '';
		$sub_cost = '';
		$duration = '';
	}



	foreach ($_POST['subject'] as $subject) {
		echo $stud_num." | ".$stud_id." | ".$subject." | ".$sub_cost."<br/>";
		$count++;
		$search_reg = $con->query("SELECT * FROM registered_subj WHERE stud_num = '$stud_num' AND subj_name = '$subject'");
		$reg_found = mysqli_num_rows($search_reg);

		

		if($reg_found == 0){
			if ($save_subjects = $con->query("INSERT INTO registered_subj(stud_num, stud_id, subj_name, subj_cost, date_reg) VALUES('$stud_num', '$stud_id', '$subject', '$sub_cost', NOW())")) {
				
			}else{
				$err_found = true;
			}
		}else{
			$err_found = true;
			header("Location: stud_info.php");
		}

	}


	$total = ($count * $sub_cost) * $duration;



		if (!$err_found) {
			if ($save_acc = $con->query("INSERT INTO accounts(stud_num, stud_id, cost, reg_fee) VALUES('$stud_num', '$stud_id', $total, $reg_fee)")) {
				if ($update_stud_info = $con->query("UPDATE student_info SET campus = '$campus', programme ='$programme', status = 3, duration = '$duration' WHERE stud_num = '$stud_num' AND stud_id = '$stud_id'")) {

					echo "<script type='text/javascript'> alert('Student successfully registered.'); window.location='prof_registration.php?stud_id=$stud_id';</script>";

					//header("Location: prof_registration.php?stud_id=$stud_id");
				}else{
					echo "<script type='text/javascript'> alert(' Could not update student information......');</script>";
				}
			}
		}else{
			echo "<script type='text/javascript'> alert(' Could not register subjects...........');</script>";
		}



}


?>