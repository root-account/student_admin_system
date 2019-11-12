<?php

	$message = 'Fill in the form to proceed to next step.';

	if (isset($_POST["reg_stud"])) {
		//get all the form data
		$name = $_POST["stud_names"];
		$surname = $_POST["stud_sname"];
		$stud_id = $_POST["stud_id"];
		$title = $_POST["stud_title"];
		$dob = $_POST["stud_dob"];
		$nation = $_POST["stud_nation"];
		$lan = $_POST["stud_lan"];
		$cell = $_POST["stud_cell"];
		$email = $_POST["stud_email"];
		$h_addr = $_POST["stud_add"];
		$city_addr = $_POST["stud_add2"];
		$post_code = $_POST["stud_postal_home"];
		$stud_province = $_POST["stud_province"];
		$pos_addre = $_POST["stud_pos_add"];
		$pos_city = $_POST["stud_pos_add2"];
		$pos_code = $_POST["stud_pos"];
		$prev_school = $_POST["stud_prev_sch"];
		$grade = $_POST["stud_grade"];

		$reg_by = $user_names." ".$user_surname;

		$check_id = $con->query("SELECT * FROM student_info WHERE stud_id = '$stud_id'");
		$count_id = mysqli_num_rows($check_id);

		while ($row = mysqli_fetch_array($check_id)) {
			$other_stud = $row['full_name'];

			$other_stud_sname = $row['surname'];
		}


		if($count_id == 0){
		//Generate a student number
		$get_stud = $con->query("SELECT * FROM student_info");
        $count_stud = mysqli_num_rows($get_stud);
        $year = date("Y")."000000";
        $stud_num = $year + $count_stud + 1;

		//Create addresses
		$h_address = $h_addr.", ".$city_addr.", ".$post_code.", ".$stud_province;
		$postal_address = $pos_addre.", ".$pos_city.", ".$pos_code;


		//Inset student information into the database
		$query = "INSERT INTO student_info(stud_num, stud_id, full_name, surname, h_address, cell, email, date_reg, title, dob, nationality, h_language, p_address, prev_school, grade, programme, campus, status, reg_by) VALUES('$stud_num', '$stud_id', '$name', '$surname', '$h_address', '$cell', '$email', NOW(), '$title', '$dob', '$nation', '$lan', '$postal_address', '$prev_school', '$grade', '', '', 1,'$reg_by')";

		if ($save_guard_info = mysqli_query($con, $query)) {
				echo "
					<script type='text/javascript'> alert('Student information saved...... Proceed with next step.'); window.location='register_guard.php?stud_id=$stud_id&stud_num=$stud_num'; </script>

				";
		}else{

			echo "
				<script type='text/javascript'> alert('Something went wrong. Contact support on support@pharrage.com.'); </script>

			";

		}

	}else{

		$message = "
			<div class='row' >
				<div class='col-md-12 alert alert-danger'>

					<h4>ID alrady registered</h4>
					<hr/>
					<p>This ID number is already to <b>$other_stud $other_stud_sname.</b>

				</div>
			</div>

		";
	}
}

















?>