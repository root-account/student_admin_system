<?php
		$get_info = $con->query("SELECT * FROM student_info");
		$num_stud = mysqli_num_rows($get_info);

		$completed = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE status = 3"));
		$incomplete = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE status < 3"));

	//This fuction is called in stud_info.php and its to display all the student info in a table.
	function get_stud_info($con, $status, $stat2){
		$get_info = $con->query("SELECT * FROM student_info WHERE status = $status OR status = $stat2");


		$num_stud = mysqli_num_rows($get_info);
		while ($row = mysqli_fetch_array($get_info)) {
			$name = $row["full_name"];
			//$name2 = $row["second_name"];
			$surname = $row["surname"];
			
			$stud_no = $row["stud_num"];
			$cell = $row["cell"];
			$email = $row["email"];
			$stud_id = $row["stud_id"];
			$status = $row["status"];
			

			if ($status != 3) {
				$status = "<span class='label label-danger'><i class='ace-icon fa fa-exclamation-triangle bigger-120'> </i> Incomplete </span>";
			}else{
				$status = "<span class='label label-warning'><i class='fa fa-check'> </i> Completed </span>";
			}

			$get_subjects = $con->query("SELECT * FROM registered_subj WHERE stud_num ='$stud_no' OR stud_id = '$stud_id'");

			$num_subj = mysqli_num_rows($get_subjects);

		?>


		                <tr>
                          <td><?php echo $stud_no; ?></td>
                          <td><?php echo $surname; ?></td>
                          <td><?php echo $name ?></td>
                          <td><?php echo $cell; ?></td>
                          <td><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>  </td>
                          <td><?php echo $num_subj; ?></td>
                          <td><?php echo $status; ?></td>

                          <td>
                            
                            
                          <div class="">

                          <div class="col-md-6">
                            <form action="search_results.php" method="POST">
                            	<input type="hidden" name="id" value="<?php echo $stud_no; ?>">
                              <button class="btn btn-sm btn-white btn-round btn-primary btn-bold" type="submit" name="find_stud">
                                <i class="ace-icon fa fa-eye bigger-120"></i> <small>VIEW</small>
                              </button>
                            </form>
                           </div>

                           <div class="col-md-6">
                            <form action="edit.php" method="GET">
                            	<input type="hidden" name="id" value="<?php echo $stud_id; ?>">
                            	<input type="hidden" name="stud_num" value="<?php echo $stud_no; ?>">
                              <button class="btn btn-sm btn-round btn-primary btn-bold" type="submit">
                                <i class="ace-icon fa fa-pencil bigger-120"></i> <small>EDIT</small>
                              </button>
                            </form>
                            </div>
                              
                          </div>

                          </td>
                        </tr>



       <?php
		}
	}
?>