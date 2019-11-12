
<?php
	
	require_once("includes/head.php");
?>

	<?php
		

		

		$id = $_GET['stud_id'];

		$get_user_info = $con->query("SELECT * FROM student_info WHERE stud_id = '$id'");
		$get_subj = $con->query("SELECT * FROM registered_subj WHERE stud_id = '$id'");
		$get_acc = $con->query("SELECT * FROM accounts WHERE stud_id = '$id'");


		$count = mysqli_num_rows($get_user_info);

		if ($count > 0) {
			
			while ($row = mysqli_fetch_array($get_user_info)) {
				$names = $row['full_name'];
				$sname = $row['surname'];
				$stud_num = $row['stud_num'];
				$grade = $row['grade'];
				$campus = $row['campus'];
				$programme = $row['programme'];
				$duration = $row['duration'];
			}

			while ($row = mysqli_fetch_array($get_acc)) {
				$payments = $row['payments'];
				$cost = $row['cost'];
				$reg_fee = $row['reg_fee'];
			}

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



		}else{
			header("Location: stud_info.php");
		}


	?>


<body>



<div class="container">
	<br/>
	<br/>
	<div class="row">
		<div class="col-md-1">
			
		</div>
		<div class="col-md-10">

	<center>
		<h3><span class="fa fa-check"></span> Proof of Registration</h3>
	</center>
	<hr/>
	<p>This is to declare that <u><b><?php echo $names." ".$sname; ?></b></u> is registered with WepCos.</p>
		<div class="well">
		<div class="row">
			<div class="col-md-4">
				<table class="table table-stripped">
					<tr>
						<td style="text-align: right;"><b>ID Number :</b></td>
						<td><?php echo $id; ?></td>
					</tr>
					<tr>
						<td style="text-align: right;"><b>Programme :</b></td>
						<td><?php echo $str_programme; ?></td>
					</tr>
					<tr>
						<td style="text-align: right;"><b>Campus :</b></td>
						<td><?php echo $str_campus; ?></td>
					</tr>
					<tr>
						<td style="text-align: right;"><b>Grade :</b></td>
						<td><?php echo $grade; ?></td>
					</tr>
		
				</table>
			</div>

			<div class="col-md-4">
			</div>

			<div class="col-md-4">
			<p>Student Number : <h4><?php echo $stud_num; ?></h4></p>

			</div>
		</div>
		<div class="row">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Date registered</th>
						<th>Subject name</th>
						<th>Cost p/m</th>
						<th>Duration</th>
					</tr>
				</thead>

				<tbody>

					<?php

					while ($row = mysqli_fetch_array($get_subj)) {?>
					<tr>
						<td><?php echo $row['date_reg']; ?></td>
						<td><?php echo $row['subj_name']; ?></td>
						<td>R<?php echo $row['subj_cost']; ?></td>
						<td><?php echo $duration; ?> Months</td>
					</tr>

					<?php
					}
					?>

				</tbody>
				
			</table>
		</div>


		<div class="row">
			<div class="col-md-4">
				
			</div>

			<div class="col-md-4">
			</div>

			<div class="col-md-4">
				<table class="table table-stripped">
					<tr>
						<td style="text-align: right;"><b>Total Fees :</b></td>
						<td>R<?php echo $cost; ?></td>
					</tr>
					<tr>
						<td style="text-align: right;"><b>Registration Fee :</b></td>
						<td>R<?php echo $reg_fee; ?> <i>(paid)</i></td>
					</tr>
		
				</table>

			</div>
		</div>


		</div>
<br/>
<br/>

<small><i>cut here.......</i></small>
<hr style="border: 0.5px dotted black; margin-top: 0px;" />

		<a href="stud_info.php" class="btn btn-primary btn-white btn-round" id="back"> <span class="fa fa-arrow-left"></span> Go back</a>

		<a href="javascript:window.print()" class="btn btn-primary btn-round" id="print"> <span class="fa fa-print"></span>  Save & Print</a>


<br/>
<br/>

		</div>
	</div>
</div>



	
</body>



<?php require_once("includes/scripts.php"); ?>