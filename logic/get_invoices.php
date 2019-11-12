<?php


//Function displays all the invoices saved in the database
function display_invoices($con){

	$get_invoices = $con->query("SELECT * FROM invoices ORDER BY inv_no DESC");
	while ($row = mysqli_fetch_array($get_invoices)) {
		$ref = $row["referrence"];
		$amount = $row["amount"];
		$date = $row["date"];
		$inv_no = $row["inv_no"];

		$get_name = $con->query("SELECT * FROM student_info WHERE stud_num = '$ref' OR stud_id = '$ref'");
		while ($row2 = mysqli_fetch_array($get_name)) {
			$fname = $row2["full_name"];
			//$sname = $row2["second_name"];
			$surname = $row2["surname"];
		}


		?>

                       <tr>
                       		<td><?php echo $inv_no; ?></td>
                          <td><?php echo $ref; ?></td>
                          <td><?php echo $fname." ".$surname; ?></td>
                          <td><b>R<?php echo $amount; ?></b></td>
                          <td><?php echo $date; ?></td>
                          <td>
                                <a href="view_invoice.php?inv_no=<?php echo $inv_no; ?>&ref=<?php echo $ref; ?>" class=""> <span class="fa fa-download"></span> View & Print</a>          
                                         
                          </td>

                          
                        </tr>


		<?php
	}
}





//Function displays todays invoices
function inv_search($con){

  if (isset($_POST['find_inv'])) {
    $ref = $_POST['ref'];

  $get_invoices = $con->query("SELECT * FROM invoices WHERE referrence = '$ref' OR inv_no = '$ref' ORDER BY inv_no DESC");

  $count_inv = mysqli_num_rows($get_invoices);


  if($count_inv > 0){

?>


      <table class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Reference</th>
                                        <th>To</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                      
                                      </tr>
                                    </thead>
                                    <tbody>



<?php
  while ($row = mysqli_fetch_array($get_invoices)) {
    $ref = $row["referrence"];
    $amount = $row["amount"];
    $date = $row["date"];
    $inv_no = $row["inv_no"];

    $get_name = $con->query("SELECT * FROM student_info WHERE stud_num = '$ref' OR stud_id = '$ref'");
    while ($row2 = mysqli_fetch_array($get_name)) {
      $name = $row2["full_name"];
      $surname = $row2["surname"];
    }


    ?>

                       <tr>
                          <td><?php echo $inv_no; ?></td>
                          <td><?php echo $ref; ?></td>
                          <td><?php echo $name." ".$surname; ?></td>
                          <td><?php echo $date; ?></td>
                          <td><b>R<?php echo $amount; ?></b></td>
                  
                          <td>
                            <a href="View_invoice.php?inv_no=<?php echo $inv_no; ?>&ref=<?php echo $ref; ?>" class="btn btn-round btn-primary btn-sm">View & Print</a>
          
                          </td>

                          
                        </tr>


    <?php
  }//close while loop

}else{
  echo "<div class='col-md-4 alert alert-danger'>
          <h4><span class='fa fa-times'> </span> No results found...</h4>


          </div>
          ";

}

}//close isset


}//close function












?>