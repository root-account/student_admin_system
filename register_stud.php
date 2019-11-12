<?php 
  require_once("includes/head.php"); 
  require_once("includes/header.php");

  //Logic script
  require_once("logic/reg_student.php");
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
                Step 1 of 3 : Student information<br/>                
              </h1>
            </div><!-- /.page-header -->

            <div class="row">
              <div class="col-xs-12">
                <!--------------------------------------------- PAGE CONTENT BEGINS -------------------------------------->

<form action="" method="POST">
  
<div class="row">
<div class="col-md-3">
</div>
                <div class="col-md-6">
                <?php echo $message; ?>
                    <div class="alert alert-info reg-section">
                      <h4 class="">Student Details</h4>
                      <hr/>

                      <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon1"><b>Full names </b>*</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['stud_names']) ? $_POST['stud_names'] : ''; ?>" name="stud_names" placeholder=""  required="">
                      </div>
<br/>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Surname </b> *</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['stud_sname']) ? $_POST['stud_sname'] : ''; ?>" name="stud_sname" placeholder="" required="">
                      </div>
<br/>
                      <div class="input-group input-group-sm" style="width: 140px;">
                        <span class="input-group-addon" id="basic-addon1"><b>Title</b> *</span>
                        <select class="form-control" name="stud_title">
                          <option value="Mr">Mr</option>
                          <option value="Miss">Miss</option>
                          <option value="Mrs">Mrs</option>
                          <option name="Dr">Dr</option>
                          <option name="Prof">Prof</option>

                          
                        </select>
                      </div>

<br/>
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon1"><b>ID number</b> *</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['stud_id']) ? $_POST['stud_id'] : ''; ?>" id="password" name="stud_id" required>
                      </div>
<br/>
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon1"><b>Date of birth</b> *</span>
                        <input type="date" class="form-control" placeholder="Eg 2017/01/31" value="<?php echo isset($_POST['stud_dob']) ? $_POST['stud_dob'] : ''; ?>" name="stud_dob" required="">

                      </div>
<br/>
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon1"><b>Nationality</b> *</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['stud_nation']) ? $_POST['stud_nation'] : ''; ?>" name="stud_nation" required="">
                      </div>
<br/>
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon1"><b>Home language</b> *</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['stud_lan']) ? $_POST['stud_lan'] : ''; ?>" name="stud_lan" required>
                      </div>

<br/>
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon1"><b>Cellphone</b> *</span>
                        <input type="number" class="form-control" value="<?php echo isset($_POST['stud_cell']) ? $_POST['stud_cell'] : ''; ?>" name="stud_cell" required="">
                      </div>
<br/>
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon1"><b>Email</b> </span>
                        <input type="email" class="form-control" value="<?php echo isset($_POST['stud_email']) ? $_POST['stud_email'] : ''; ?>" name="stud_email">
                      </div>
<br/>
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon1"><b>Home address</b> *</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['stud_add']) ? $_POST['stud_add'] : ''; ?>" name="stud_add" required="">
                      </div>

                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" value="<?php echo isset($_POST['stud_add2']) ? $_POST['stud_add2'] : ''; ?>" name="stud_add2" required="">
                        <span class="input-group-addon" id="basic-addon1"><b>Postal code</b> *</span>
                        <input type="number" class="form-control" value="<?php echo isset($_POST['stud_postal_home']) ? $_POST['stud_postal_home'] : ''; ?>" name="stud_postal_home" required="">
                      </div>

                      <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon1"><b>Province</b> *</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['stud_province']) ? $_POST['stud_province'] : ''; ?>" name="stud_province" required="">
                      </div>

<br/>
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon1"><b>Postal address</b></span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['stud_pos_add']) ? $_POST['stud_pos_add'] : ''; ?>" name="stud_pos_add">
                      </div>

                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" value="<?php echo isset($_POST['stud_pos_add2']) ? $_POST['stud_pos_add2'] : ''; ?>" name="stud_pos_add2">
                        <span class="input-group-addon" id="basic-addon1"><b>Postal code</b></span>
                        <input type="number" class="form-control" value="<?php echo isset($_POST['stud_pos']) ? $_POST['stud_pos'] : ''; ?>" name="stud_pos" >
                      </div>

<br/>
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon1"><b>Previous school</b> *</span>
                        <input type="text" class="form-control" value="<?php echo isset($_POST['stud_prev_sch']) ? $_POST['stud_prev_sch'] : ''; ?>" name="stud_prev_sch" required="">
                      </div>
<br/>


                      <div class="input-group input-group-sm" style="width: 140px;">
                        <span class="input-group-addon" id="basic-addon1"><b>Grade</b> *</span>
                        <select class="form-control" name="stud_grade" required> 
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                      </div>  



                    </div>
                    </div>
                    <!-- *********************************************************************** -->
  </div>

<hr/> 


<div class="row">
    <div class="col-md-10">
        <a href="index.php" class="btn btn-white btn-default btn-round btn-bold"> <i class="fa fa-arrow-left"></i> &nbsp; Go back</a>
    </div>
    <button type="submit" name="reg_stud" class="btn btn-white btn-primary btn-round btn-bold">Save & Next Step <span class="fa fa-arrow-right"></span></button>
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
