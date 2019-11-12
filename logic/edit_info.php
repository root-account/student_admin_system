</<?php 

 $id = $_GET['id'];
 $stud_num = $_GET['stud_num'];

if (empty($stud_num) || empty($id)) {
	header('Location: stud_info.php');
}else{


		$get_info = $con->query("SELECT * FROM student_info WHERE stud_num = '$stud_num' AND stud_id = '$id'");

		$get_gud_info = $con->query("SELECT * FROM gurdian_info WHERE stud_num = '$stud_num' AND stud_id = '$id'");

		$num_stud = mysqli_num_rows($get_info);
		while ($row = mysqli_fetch_array($get_info)) {
			$fname = $row["full_name"];
			$surname = $row["surname"];
			$stud_num = $row["stud_num"];
						$stud_id = $row["stud_id"];
			$address = $row["h_address"];
						$cell = $row["cell"];
			$email = $row["email"];
			$p_addr = $row["p_address"];
			$prev_sch = $row["prev_school"];
		}



		while ($row = mysqli_fetch_array($get_gud_info)) {
			$gud_id = $row['parent_id'];
			$gud_name = $row["parent_name"];
			$gud_surname = $row["parent_surname"];

			$employer = $row["employer"];
			$occupation = $row["occupation"];

			$gud_cell = $row["parent_cell"];
			$alt_cell = $row["other_cell"];
			$work_cell = $row["work_cell"];
			$gud_email = $row["parent_email"];

			$gud_h_add = $row["parent_address"];
			$gud_p_addr = $row["postal"];
			$work_add = $row["work_addr"];
		}




}

if (isset($_POST['update_stud'])) {


	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$prev_school = $_POST['prev_school'];


	$phone = $_POST['cell'];
	$email = $_POST['email'];

	$h_address = $_POST['h_add'];
	$p_address = $_POST['p_add'];


	$qry = "UPDATE student_info SET full_name = '$fname', surname = '$sname', prev_school = '$prev_school', cell = '$phone', email = '$email', p_address = '$p_address', h_address = '$h_address' WHERE stud_num = '$stud_num' AND stud_id = '$id'";


	if ($con->query($qry)) {
		$message = "<b class='label label-success'><i class='fa fa-check'> </i> Student Details succesfully updated</b>";
	}else{
		$message = "Could not update";
	}


}else{
	$message = "To update details, delete the old details and type in new details.";
}

/************ Update guardian details **********/

if (isset($_POST['update_gud'])) {

	$gud_id = $row;['gud_id'];
	$gud_name = $_POST['gud_name'];
	$gud_sname = $_POST['gud_sname'];
	$emp = $_POST['gud_emp'];
	$occup = $_POST['occupation'];


	$phone = $_POST['gud_cell'];
	$email = $_POST['email'];
	$work_cell = $_POST['gud_work_cell'];
	$alt_cell = $_POST['alt_cell'];


	$h_address = $_POST['h_add'];
	$p_address = $_POST['p_add'];
	$w_address = $_POST['w_add'];




	$qry = "UPDATE gurdian_info SET parent_name = '$gud_name', parent_surname = '$gud_sname', employer = '$emp', occupation = '$occup', parent_cell = '$phone', parent_email = '$email', work_cell = '$work_cell', other_cell = '$alt_cell',  parent_address = '$h_address', postal = '$p_address', work_addr = '$w_address' WHERE stud_num = '$stud_num' AND stud_id = '$id'";


	if ($con->query($qry)) {
		$message = "<b class='label label-success'><i class='fa fa-check'> </i> GUARDIAN DETAILS succesfully updated</b>";
	}else{
		$message = "Could not update";
	}



}





 ?>