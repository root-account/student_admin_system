<?php 
  require_once("includes/head.php"); 
  require_once("includes/header.php");


  //Logic script
  require_once("logic/reg_subject.php");

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
          <?php require_once("includes/setting.php"); ?>



            <div class="page-header">
              <h1>
                Step 3 of 3 : Subjects & Programme <br/>                
              </h1>
            </div><!-- /.page-header -->

            <div class="row">
              <div class="col-xs-12">
                <!--------------------------------------------- PAGE CONTENT BEGINS -------------------------------------->

<form action="" method="POST">
  
            <p>Student No : <?php echo $stud_num; ?> <b>|</b>
            Student ID : <?php echo $stud_id; ?></p>

            <input type="hidden" name="stud_num" value="<?php echo $stud_num; ?>">
            <input type="hidden" name="stud_id" value="<?php echo $stud_id; ?>">


<div class="row">

          
<div class="col-md-6">
          
                    <div class="alert alert-info">
                      <h4>School Details</h4>
                      <hr/>

                      <div class="row">

                      <div class="col-md-6">
                      <h6 class="label label-primary">Choose Programme</h6>

                      <div class="radio">
                        <label><input type="radio" value="1" required name="programme" class="ace" />
                            <span class="lbl"> MATRIC UPGRADING </span></label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="programme" value="2" class="ace" />
                            <span class="lbl"></span> MATRIC AMENDED</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="programme" value="3" class="ace" />
                            <span class="lbl"> SATURDAY ENRICHMENT </span></label>
                      </div>

                      </div>

                      <div class="col-md-6">
                      <h6 class="label label-primary">Choose Campus</h6>

                        <div class="radio">
                        <label><input type="radio" name="campus" required value="1" class="ace" />
                            <span class="lbl"> Mahwelereng Campus </span></label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="campus" value="2" class="ace" />
                            <span class="lbl"> Mapela Campus </span></label>
                        </div>

                      </div>


                      </div>

                      <br/>

                    </div>
</div>
                     <!-- *********************************************************************** -->


<div class="col-md-6">
                    <div class="alert alert-info">
                      <h4>Subject Registration</h4>
                      <hr/>

                      <div class="row">

                      <div class="col-md-6">

                      <div class="checkbox">
                        <label><input type="checkbox" name="subject[]" value="Mathematics" class="ace ace-checkbox-2"> <span class="lbl"> &nbsp; Mathematics</span></label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="subject[]" value="Physical Science" class="ace ace-checkbox-2"> <span class="lbl"> &nbsp;  Physical Science </span></label>
                      </div>

                      <div class="checkbox">
                        <label><input type="checkbox" name="subject[]" value="Life Science" class="ace ace-checkbox-2"> <span class="lbl"> &nbsp;  Life Science </span></label>
                      </div>

                      <div class="checkbox">
                        <label><input type="checkbox" name="subject[]" value="Geography" class="ace ace-checkbox-2"> <span class="lbl"> &nbsp;  Geography</span></label>
                      </div>

                      <div class="checkbox">
                          <label><input type="checkbox" name="subject[]" value="Maths Literacy" class="ace ace-checkbox-2"> <span class="lbl"> &nbsp;  Maths Literacy </span></label>
                        </div>

                        <div class="checkbox">
                          <label><input type="checkbox" name="subject[]" value="Agricultural Science" class="ace ace-checkbox-2"> <span class="lbl"> &nbsp;  Agricultural Science </span></label>
                        </div>

                      </div>

                      <div class="col-md-6">
                        <div class="checkbox">
                          <label><input type="checkbox" name="subject[]" value="Accounting" class="ace ace-checkbox-2"> <span class="lbl"> &nbsp;  Accounting</span></label>
                        </div>

                        <div class="checkbox">
                        <label><input type="checkbox" name="subject[]" value="Economics" class="ace ace-checkbox-2"> <span class="lbl"> &nbsp;  Economics </span></label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="subject[]" value="Business Studies" class="ace ace-checkbox-2"> <span class="lbl"> &nbsp;  Business Studies</span></label>
                        </div>

                        <div class="checkbox">
                          <label><input type="checkbox" name="subject[]" value="Tourism"  class="ace ace-checkbox-2"> <span class="lbl"> &nbsp;  Tourism </span></label>
                        </div>

                        <div class="checkbox">
                          <label><input type="checkbox" name="subject[]" value="English" class="ace ace-checkbox-2"> <span class="lbl"> &nbsp;  English </span></label>
                        </div>

                    

                      </div>


                      </div>

                    </div>
</div>



</div>

<hr/> 


<div class="row">
<center>
    <button type="submit" name="complete_reg" class="btn btn-white btn-primary btn-round btn-bold"><span class="fa fa-check"> </span> Complete Registration </button>
</center>
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
