
<?php
	require_once("includes/head.php");
?>

	<?php
		
		
		//$id = $_GET['stud_id'];
		$ref = $_GET['ref'];
		$inv_num = $_GET['inv_no'];

		$get_user_info = $con->query("SELECT * FROM student_info WHERE stud_id = '$ref' OR stud_num ='$ref'");
		$get_invoice = $con->query("SELECT * FROM invoices WHERE inv_no = '$inv_num'");
		$get_acc = $con->query("SELECT * FROM accounts WHERE stud_id = '$ref' OR stud_num ='$ref'");


		$count = mysqli_num_rows($get_user_info);

		if ($count > 0) {
			
			while ($row = mysqli_fetch_array($get_user_info)) {
				$names = $row['full_name'];
				$sname = $row['surname'];
				$stud_num = $row['stud_num'];
				$grade = $row['grade'];
				$campus = $row['campus'];
			}

			while ($row = mysqli_fetch_array($get_acc)) {
				$payments = $row['payments'];
				$cost = $row['cost'];
				$reg_fee = $row['reg_fee'];
			}

			$Outstanding = $cost - $payments;

		}else{
			header("Location: reports.php");
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
		<h3><span class="fa fa-check"></span> Invoice #<?php echo $inv_num; ?></h3>
	</center>
	<hr/>
		<div class="well">
		<div class="row">
			<div class="col-md-4">
				<table class="table table-bordered">
					<tr>
						<td style="text-align: right;"><b>Student :</b></td>
						<td><?php echo $names." ".$sname; ?></td>
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
						<th>#</th>
						<th>Date Cleared</th>
						<th>Referrence</th>
						<th>Amount Paid</th>
					</tr>
				</thead>

				<tbody>
				<?php while ($row = mysqli_fetch_array($get_invoice)) {?>
					<tr>	
						<td><?php echo $row['inv_no']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['referrence']; ?></td>
						<td>R<?php echo $row['amount']; ?></td>
					</tr>
				<?php } ?>
				</tbody>
				
			</table>
		</div>


		</div>


		<a href="reports.php" class="btn btn-primary btn-white btn-round" id="back"> <span class="fa fa-arrow-left"></span> Go back</a>

		<a href="javascript:window.print()" class="btn btn-primary btn-round" id="print"> <span class="fa fa-print"></span>  Save & Print</a>

		</div>
	</div>
</div>



	
</body>



<?php require_once("includes/scripts.php"); ?>