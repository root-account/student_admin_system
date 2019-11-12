<?php



	
	if (isset($_POST["find_stud"])) {
		$id = $_POST["id"];
		//query to get student information
		$get_info = $con->query("SELECT * FROM student_info WHERE stud_num = '$id' OR stud_id = '$id'");

		//Count to see if a student exist
		$stud_found = mysqli_num_rows($get_info);

if ($stud_found > 0) {
	# code...

		//while loop to get student information
		while ($row = mysqli_fetch_array($get_info)) {
			$fname = $row["full_name"];
			//$sname = $row["second_name"];
			$surname = $row["surname"];
			$stud_num = $row["stud_num"];
			$stud_id = $row["stud_id"];
			$address = $row["h_address"];
			$cell = $row["cell"];
			$email = $row["email"];
			$gender = $row["title"];

			$dob = $row["dob"];
			$nationality = $row["nationality"];
			$h_lan = $row["h_language"];
			$p_addr = $row["p_address"];
			$prev_sch = $row["prev_school"];
			$grade = $row["grade"];

			$programme = $row["programme"];
			$campus = $row["campus"];
			$reg_by = $row["reg_by"];

			if ($programme == 1) {
				$str_programme = "Matric Upgrading";
			}elseif ($programme == 2) {
				$str_programme = "Matric Ammended";
			}elseif ($programme == 3) {
				$str_programme = "Suturday Enrichment";
			}else{
				$str_programme = "";
			}

			if ($campus == 1) {
				$str_campus = "Mahwelereng Campus";
			}elseif ($campus == 2) {
				$str_campus = "Mapela Campus";
			}else{
				$str_campus = "";
			}


			$date_reg = $row["date_reg"];

			$step = $row['status'];
		}//end while loop


		//query to add up all the student's invoices
		$add_payments = $con->query("SELECT SUM(amount) AS payments FROM invoices WHERE referrence = '$stud_num' OR referrence = '$stud_id'");
		while ($row = mysqli_fetch_array($add_payments)) {
			$payments = $row['payments'];
		}


		//Get how much a student owes, total cost for duartion of studies
		$get_cost = $con->query("SELECT * FROM accounts WHERE stud_num = '$id' OR stud_id = '$id'");
		while ($row = mysqli_fetch_array($get_cost)) {
			$cost = $row['cost'];
		}

		if (empty($cost)) {
			$cost= 0;
		}

		

		//Calculate outstanding balance
		$oustanding = $cost - $payments;

		//Update payments in database
		$update_pay = $con->query("UPDATE accounts SET payments = '$payments' WHERE stud_num ='$stud_num' AND stud_id = '$stud_id'");

		//get guardian information
		$guard_info = $con->query("SELECT * FROM gurdian_info WHERE stud_id = '$stud_id' AND  stud_num = '$stud_num'");
		while ($row = mysqli_fetch_array($guard_info)) {
			$gud_name = $row['parent_name'];
			$gud_surname = $row['parent_surname'];
			$gud_title = $row['title'];
			$gud_id = $row['parent_id'];
			$gud_occu = $row['occupation'];
			$gud_employer = $row['employer'];
			$gud_cell = $row['parent_cell'];
			$gud_cell2 = $row['other_cell'];
			$gud_work_cell = $row['work_cell'];
			$gud_email = $row['parent_email'];
			$gud_h_add = $row['parent_address'];
			$gud_w_add = $row['work_addr'];
			$gud_p_add = $row['postal'];
		}



		//Get the subjects the student is doing
		/* This is placed in a function because the loop has to duplicate the HTML code and it has to place it on the right spot */
		function show_subjects($con, $id){
			$get_subjects = $con->query("SELECT * FROM registered_subj WHERE stud_num = '$id' OR stud_id = '$id'");

			while ($row = mysqli_fetch_array($get_subjects)) {
				$subj_code = $row["subj_cost"];
				$subj_name = $row["subj_name"];

			?>

				<div class="profile-info-row">
	                <div class="profile-info-name"> R<?php echo $subj_code; ?> </div>

	                <div class="profile-info-value">
	                  <span class="editable" id="username"><?php echo $subj_name; ?></span>
	                </div>
	              </div>


			<?php
			}//close while loop
		}//close function





}


	}


?>