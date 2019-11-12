
<?php
	require_once("includes/head.php");
?>

	<?php
		
		
		$id = $_GET['stud_id'];
		$stud_num = $_GET['stud_num'];

		$get_user_info = $con->query("SELECT * FROM student_info WHERE stud_id = '$id' AND stud_num ='$stud_num'");
		$get_invoice = $con->query("SELECT * FROM invoices WHERE referrence = '$id' OR referrence ='$stud_num'");
		$get_acc = $con->query("SELECT * FROM accounts WHERE stud_id = '$id'");


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
		<h3><span class="fa fa-check"></span> Statement of accounts</h3>
	</center>
	<hr/>
	<p>These are invoices of payments made.</p>
		<div class="well">
		<div class="row">
			<div class="col-md-4">
				<table class="table table-bordered">
					<tr>
						<td style="text-align: right;"><b>Student :</b></td>
						<td><?php echo $names." ".$sname; ?></td>
					</tr>
					<tr>
						<td style="text-align: right;"><b>ID Number :</b></td>
						<td><?php echo $id; ?></td>
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


		<div class="row">
			<div class="col-md-4">
				
			</div>

			<div class="col-md-4">
			</div>

			<div class="col-md-4">
				<table class="table table-bordered">
					<tr>
						<td style="text-align: right;"><b>Total Fees :</b></td>
						<td>R<?php echo $cost; ?></td>
					</tr>
					<tr>
						<td style="text-align: right;"><b>Total Paid :</b></td>
						<td>R<?php echo $payments; ?></td>
					</tr>
					<tr>
						<td style="text-align: right;"><b>Outstanding Amount :</b></td>
						<td>R<?php echo $Outstanding; ?></i></td>
					</tr>
		
				</table>

			</div>
		</div>


		</div>


		<a href="stud_info.php" class="btn btn-primary btn-white btn-round" id="back"> <span class="fa fa-arrow-left"></span> Go back</a>

		<a href="javascript:window.print()" class="btn btn-primary btn-round" id="print"> <span class="fa fa-print"></span>  Save & Print</a>

		</div>
	</div>
</div>



	
</body>



<?php require_once("includes/scripts.php"); ?>