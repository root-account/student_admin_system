<?php 
  require_once("includes/head.php"); 
  require_once("includes/header.php"); 


  //Logic script
  require_once("logic/edit_info.php");





?>


  <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
      </script>



      <div class="main-content">
        <div class="main-content-inner">
          <?php require_once("includes/breadcrum.php"); ?>

          <div class="page-content">
          <?php require_once("includes/setting.php"); ?>



            <div class="page-header">
              <h1>
                Update Information
                
              </h1>
            </div><!-- /.page-header -->

            <div class="row">



              <div class="col-xs-12">
                <!--------------------------------------------- PAGE CONTENT BEGINS -------------------------------------->

<div class="row">

  <div class="col-md-12">
  <p><a href="stud_info.php" class="btn btn-white btn-danger"><span class="fa fa-home"></span> Back Home</a> </p>
  </div>
</div>



<div class="row">

<div class="tabbable">
                      <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
                        <li class="active">
                          <a data-toggle="tab" href="#home4"><h4>Student Details</h4></a>
                        </li>

                        <li>
                          <a data-toggle="tab" href="#profile4"><h4>Account Payer Details</h4></a>
                        </li>
                      </ul>

                      <div class="tab-content">
                        <div id="home4" class="tab-pane fade in active">
                            <div class="row">
                            <div class="col-md-12">
                              <p><?php echo $message; ?></p>
                                  <form method="POST" action="">
                                      
                                      <div class="col-md-4">
                                        <div class="well">
                                          <h5>ID Number</h5>
                                          <input type="text" disabled class="form-control" value="<?php echo $id; ?>" name="stud_id" placeholder="Type in here..."  required="">
                                          <br/>
                                          <h5>Full names</h5>
                                          <input type="text" class="form-control" value="<?php echo $fname; ?>" name="fname" placeholder=""  required="">
                                          <br/>
                                          <h5>Surname</h5>
                                          <input type="text" class="form-control" value="<?php echo $surname; ?>" name="sname" placeholder=""  required="">
                                          <br/>
                                          <h5>Previous school</h5>
                                          <input type="text" class="form-control" value="<?php echo $prev_sch;?>" name="prev_school" placeholder=""  required="">

                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="well">
                                          <h5>Phone Number</h5>
                                          <input type="text" class="form-control" value="<?php echo $cell;?>" name="cell" placeholder="Type in here...">
                                          <br/>
                                          <h5>Email Address</h5>
                                          <input type="text" class="form-control" value="<?php echo $email;?>" name="email" placeholder="Type in here...">

                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="well">
                                          <h5>Home address</h5>
                                          <small><i> eg... house, street, town, code, city</i></small>
                                          <input type="text" class="form-control" value="<?php echo $address;?>" name="h_add" placeholder="Type in here..." >
                                          <br/>
                                          <h5>Postal Address</h5>
                                          <small><i> eg... house, street, town, code, city</i></small>
                                          <input type="text" class="form-control" value="<?php echo $p_addr;?>" name="p_add" placeholder="Type in here...">

                                        </div>

                                        <button type="submit" name="update_stud" class="btn  btn-md btn-success"><i class="fa fa-check"></i>  UPDATE DETAILS</button>
                                      </div>
                <br/>
   
                                  </form>

                              
                              </div>
                            </div>


                        </div>

                        <div id="profile4" class="tab-pane">
                          <div id="home4" class="tab-pane fade in active">
                            
                          <div class="row">
                            <div class="col-md-12">
                                  <form method="POST" action="">
                                      
                                      <div class="col-md-4">
                                        <div class="well">
                                          <h5>Parent ID Number</h5>
                                          <input type="text" disabled class="form-control" value="<?php echo $gud_id; ?>" name="gud_id" placeholder=""  required="">
                                          <br/>
                                          <h5>Parent Full names</h5>
                                          <input type="text" class="form-control" value="<?php echo $gud_name; ?>" name="gud_name" placeholder=""  required="">
                                          <br/>
                                          <h5>Parent Surname</h5>
                                          <input type="text" class="form-control" value="<?php echo $gud_surname; ?>" name="gud_sname" placeholder=""  required="">
                                          <br/>
                                          <h5>Emoloyer</h5>
                                          <input type="text" class="form-control" value="<?php echo $employer; ?>" name="gud_emp" placeholder="Type in here..." >
                                          <br/>
                                          <h5>Occupation</h5>
                                          <input type="text" class="form-control" value="<?php echo $occupation;?>" name="occupation" placeholder="Type in here...">

                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="well">
                                          <h5>Phone Number</h5>
                                          <input type="text" class="form-control" value="<?php echo $gud_cell;?>" name="gud_cell" placeholder="Type in here...">
                                          <br/>
                                          <h5>Work Tel</h5>
                                          <input type="text" class="form-control" value="<?php echo $work_cell;?>" name="gud_work_cell" placeholder="Type in here...">
                                          <br/>
                                          <h5>Alternative Phone</h5>
                                          <input type="text" class="form-control" value="<?php echo $alt_cell;?>" name="alt_cell" placeholder="Type in here...">
                                          <br/>
                                          <h5>Email Address</h5>
                                          <input type="text" class="form-control" value="<?php echo $gud_email;?>" name="email" placeholder="Type in here...">

                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="well">
                                          <h5>Home address</h5>
                                          <small><i> eg... house, street, town, code, city</i></small>
                                          <input type="text" class="form-control" value="<?php echo $gud_h_add;?>" name="h_add" placeholder="Type in here..." >
                                          <br/>

                                          <h5>Postal Address</h5>
                                          <small><i> eg... house, street, town, code, city</i></small>
                                          <input type="text" class="form-control" value="<?php echo $gud_p_addr;?>" name="p_add" placeholder="Type in here...">

                                          <br/>
                                          <h5>Work address</h5>
                                          <small><i> eg... house, street, town, code, city</i></small>
                                          <input type="text" class="form-control" value="<?php echo $work_add;?>" name="w_add" placeholder="Type in here..." >
                                          

                                        </div>

                                        <button type="submit" name="update_gud" class="btn  btn-md btn-primary"><i class="fa fa-check"></i>  UPDATE DETAILS</button>
                                      </div>
                <br/>
   
                                  </form>

                              
                              </div>
                            </div>
                            

                          </div>
                        </div>
                      </div>
                    </div>

</div>



<?php 

    //This is the file that holds content of all the pop up modals
    require_once("includes/modals.php"); 
?>



                <!--------------------------------------------- PAGE CONTENT ENDS ---------------------------------------->
              </div><!-- /.col -->
            </div><!-- /.row -->

          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->

<?php require_once("includes/footer.php"); ?>

      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
      </a>
  </div><!-- /.main-container -->


<?php require_once("includes/scripts.php"); ?>

  </body>
</html>
