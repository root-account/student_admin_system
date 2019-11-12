<?php 
  require_once("includes/head.php"); 
  require_once("includes/header.php");


  //Logic script
  require_once("logic/reg_guardian.php");

?>


  <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
      </script>

 <?php require_once("includes/nav.php"); ?>


      <div class="main-content">
        <div class="main-content-inner">
          <?php require_once("includes/breadcrum.php"); ?>

          <div class="page-content">
          <?php //require_once("includes/setting.php"); ?>



            <div class="page-header">
              <h1>
                Step 2 of 3: Account payer details<br/>                
              </h1>
            </div><!-- /.page-header -->

            <div class="row">
            <center>
            <p>Student No : <?php echo $stud_num; ?> <b>|</b>
            Student ID : <?php echo $stud_id; ?></p>
            </center>
              <div class="col-xs-12">
                <!--------------------------------------------- PAGE CONTENT BEGINS -------------------------------------->

<form action="" method="POST">
  
<div class="row">
                   <div class="col-md-3">

                   </div>


                    <div class="col-md-6">
                    <div class="alert alert-info">
                      <h4>Account Payer Details</h4>
                      <hr/>

                      <div class="input-group">
                        <input type="hidden" class="form-control" value="<?php echo $stud_id ?>" name="stud_id" required>
                        <input type="hidden" class="form-control" value="<?php echo $stud_num ?>" name="stud_num" required>
                      </div>
<br/>

                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Full names </b>*</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_names']) ? $_POST['gud_names'] : ''; ?>" name="gud_names" required="">
                      </div>
<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Surname </b> *</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_sname']) ? $_POST['gud_sname'] : ''; ?>" name="gud_sname" required="">
                      </div>
<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" ><b>Title</b> *</span>
                        <select name="gud_title" class="form-control" required="">
                          <option value="">--Choose--</option>
                          <option value="Mr">Mr</option>
                          <option value="Miss">Miss</option>
                          <option value="Mrs">Mrs</option>
                          <option name="Dr">Dr</option>
                          <option name="Prof">Prof</option>

                          
                        </select>
                      </div>

<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>ID number</b> *</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_id']) ? $_POST['gud_id'] : ''; ?>" name="gud_id" required="">
                      </div>
<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Cellphone</b> *</span>
                        <input type="number" class="form-control" value="<?php echo isset($_POST['gud_cell']) ? $_POST['gud_cell'] : ''; ?>" name="gud_cell" required="">
                      </div>
<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Email</b></span>
                        <input type="email" class="form-control" value="<?php echo isset($_POST['gud_email']) ? $_POST['gud_cell'] : ''; ?>" name="gud_email">
                      </div>
<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Home address</b> *</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_h_add']) ? $_POST['gud_h_add'] : ''; ?>" name="gud_h_add" required="">
                      </div>

                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_city']) ? $_POST['gud_city'] : ''; ?>" name="gud_city" required="">

                        <span class="input-group-addon" id="basic-addon1"><b>Postal code</b> *</span>
                        <input type="number" class="form-control" value="<?php echo isset($_POST['gud_h_pos']) ? $_POST['gud_h_pos'] : ''; ?>" name="gud_h_pos" required="">
                      </div>

                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Province</b> *</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_province']) ? $_POST['gud_province'] : ''; ?>" name="gud_province" required="">
                      </div>

<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Postal address</b> </span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_post']) ? $_POST['gud_post'] : ''; ?>" name="gud_post">
                      </div>

                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_add']) ? $_POST['gud_add'] : ''; ?>" name="gud_add" >
                        <span class="input-group-addon" id="basic-addon1"><b>Postal code</b></span>
                        <input type="number" class="form-control" value="<?php echo isset($_POST['gud_postal']) ? $_POST['gud_postal'] : ''; ?>"name="gud_postal">
                      </div>

<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Employer</b></span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_employer']) ? $_POST['gud_employer'] : ''; ?>" name="gud_employer">
                      </div>

<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Occupation</b></span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_occu']) ? $_POST['gud_occu'] : ''; ?>" name="gud_occu">
                      </div>

<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>WORK ADDRESS</b></span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_work_add']) ? $_POST['gud_work_add'] : ''; ?>" name="gud_work_add">
                      </div>

                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_work_add2']) ? $_POST['gud_work_add2'] : ''; ?>" name="gud_work_add2">
                        <span class="input-group-addon" id="basic-addon1"><b>Postal code</b> </span>
                        <input type="number" class="form-control" value="<?php echo isset($_POST['gud_work_postal']) ? $_POST['gud_work_postal'] : ''; ?>" name="gud_work_postal">
                      </div>
<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>TEL (work)</b></span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_tel_work']) ? $_POST['gud_tel_work'] : ''; ?>" name="gud_tel_work" >
                      </div>

<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Alternative phone</b></span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['gud_alt_phone']) ? $_POST['gud_alt_phone'] : ''; ?>" name="gud_alt_phone">
                      </div>

                    </div>
                    </div>
  </div>

<hr/> 

<div class="row">
<div class="col-md-10">
</div>
<button type="submit" name="reg_guard" class="btn btn-white btn-primary btn-bold">Save & Next Step <span class="fa fa-arrow-right"></span></button>


</div>

</form>


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
