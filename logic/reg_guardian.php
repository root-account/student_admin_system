

<?php

	$message = '';
		$stud_id = $_GET["stud_id"];
		$stud_num = $_GET["stud_num"];

		$get_info = $con->query("SELECT * FROM student_info WHERE stud_id = '$stud_id' AND stud_num = '$stud_num'");
		$count = mysqli_num_rows($get_info);

		if ($count == 0) {
			header("Location: stud_info.php");
		}

	if (isset($_POST["reg_guard"])) {

		

		$name = $_POST["gud_names"];
		$surname = $_POST["gud_sname"];
		$guard_id = $_POST["gud_id"];
		$title = $_POST["gud_title"];
		$cell = $_POST["gud_cell"];
		$email = $_POST["gud_email"];

		$h_addr = $_POST["gud_h_add"];
		$city_addr = $_POST["gud_city"];
		$post_code = $_POST["gud_h_pos"];
		$stud_province = $_POST["gud_province"];


		$pos_addre = $_POST["gud_post"];
		$pos_city = $_POST["gud_add"];
		$pos_code = $_POST["gud_postal"];


		
		$work_add = $_POST["gud_work_add"];
		$work_city = $_POST["gud_work_add2"];
		$work_code = $_POST["gud_work_postal"];

		$employer = $_POST["gud_employer"];
		$occupation = $_POST["gud_occu"];

		$work_tel =  $_POST["gud_tel_work"];
		$alt_tel =  $_POST["gud_alt_phone"];


		$h_address = $h_addr.", ".$city_addr.", ".$post_code.", ".$stud_province;
		$postal_address = $pos_addre.", ".$pos_city.", ".$pos_code;
		$work_address = $work_add.", ".$work_city.", ".$work_code;

		$in_query = "INSERT INTO gurdian_info(stud_id, stud_num, parent_id, parent_name, parent_surname, parent_address, parent_cell, work_cell, parent_email, title, postal, employer, occupation, work_addr, other_cell) VALUES('$stud_id', '$stud_num', '$guard_id', '$name', '$surname', '$h_address', '$cell', '$work_tel', '$email', '$title', '$postal_address', '$employer', '$occupation', '$work_address', '$alt_tel')";


		if($save_guard = $con->query($in_query)){

			if ($update_status = $con->query("UPDATE student_info SET status = 2 WHERE stud_num = '$stud_num' AND  stud_id = '$stud_id'")) {
				echo "
					<script type='text/javascript'> alert('Account payer Details information saved...... Proceed with next step.'); window.location='register_sub.php?stud_id=$stud_id&stud_num=$stud_num';</script>

				";

			}else{

				echo "
					<script type='text/javascript'> alert(Update error. Contact support on support@pharrage.com.'); </script>

				";
			}
		}else{
			echo "
				<script type='text/javascript'> alert('Something went wrong. Contact support on support@pharrage.com.'); </script>
			";
		}


}












?>


















?>