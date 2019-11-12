<?php 
  require_once("includes/head.php"); 
  require_once("includes/header.php"); 

  //Logic Script.
  //All the coding is in this file
  require_once("logic/search.php");
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
                Student Details
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  <?php echo $id ; ?>
                </small>
              </h1>
            </div><!-- /.page-header -->

            <div class="row">
              <div class="col-xs-12">
                <!--------------------------------------------- PAGE CONTENT BEGINS -------------------------------------->


<!--- ********************************** SEARCH RESULTS FOR STUDENT INFORMATIOM ************************************************************** -->
                  <?php 
                      //Find and display student information
                        if (isset($_POST["find_stud"])) {
                          $id = $_POST["id"];

                          if ($stud_found > 0) {

                            if ($step == 1) {
                                $alert = '
                                    <p><span class="fa fa-times"> Step 2: Account payer details</span></p>
                                    <p><span class="fa fa-times"> Step 3: Subjects & Progrogramme</span></p>
                                ';

                                $name = "comp_step2";
                                $action = "register_guard.php?stud_id=$stud_id&stud_num=$stud_num";

                              }elseif ($step == 2) {
                                $alert = '
                                    <p><span class="fa fa-times"> Step 3: Subjects & Progrogramme</span></p>
                                ';

                                $name = "comp_step3";
                                 $action = "register_sub.php?stud_id=$stud_id&stud_num=$stud_num";
                                 
                              }
                              
                              if ($step < 3) {

                                $style = "display:none;";

                              
                  ?>


                              <div class="alert alert-danger">
                                <h2>Registration Incomplete!</h2>
                                <p><u>The following information is misssing.</u></p>
                                  <?php echo $alert; ?>
                                <hr/>

                                <a href="<?php echo $action; ?>" class="btn btn-danger ">Go and Complete</a>

                              </div>

                              <?php
                              
                              }//close if status
                              ?>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="space"></div>



                      <div class="col-md-4 center alert alert-info">
                      <div>
                       <!-- <span class="profile-picture">
                          <img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                        </span> -->

                        <div class="space-4"></div>

                        <center><h4> <span class="fa fa-user"></span> <?php echo $fname.", ".$surname; ?></h4></center>
                      </div>

                      <div class="space-6"></div>

                      <div class="" style="text-align: left; <?php echo $style;?>">
                        <span class="label label-danger label-white middle"><i class="ace-icon fa fa-university bigger-120"> </i> <?php echo $str_campus; ?></span>
                        <span class="label label-danger label-white middle"><i class="ace-icon fa fa-book bigger-120"></i> <?php echo $str_programme; ?></span>
                        <hr/>
                        <h6>Total for Fees : <b>R<?php echo $cost; ?></b></h6>
                         <h6>Payments made : <b>R<?php echo $payments; ?> </b></h6>
                          <h6>Outstanding Balance : <b class="label label-danger">R<?php echo $oustanding; ?></b></h6>
                      </div>


                      <hr/>

                      
                      
                      <a data-toggle="modal" href="#stud_info" class="btn btn-primary btn-round" style="<?php echo $style;?>"> <span class="fa fa-user"> </span> View Account payer details</a><br/><br/>


                      <a href="prof_registration.php?stud_id=<?php echo $stud_id; ?>" style="<?php echo $style;?>" class="btn btn-primary btn-white btn-xs"><span class="fa fa-print"> </span> Proof of registration</a>

                      <a href="view_statement.php?stud_id=<?php echo $stud_id; ?>&stud_num=<?php echo $stud_num; ?>" style="<?php echo $style;?>" class="btn btn-primary btn-white btn-xs"><span class="fa fa-print"> </span> Statement of accounts</a>

                      <hr/>
                      <center>
                        <a href="edit.php?id=<?php echo $stud_id; ?>&stud_num=<?php echo $stud_num; ?>"> Edit information</a>
                      </center>
                      


                    </div>


                              
                          <div class="col-md-8">
                            <div class="profile-user-info profile-user-info-striped">
                          <div class="profile-info-row">
                            <div class="profile-info-name"> ID Number </div>

                            <div class="profile-info-value">
                              <span class="editable" id="username"><?php echo $stud_id; ?></span>
                            </div>
                          </div>

                          <div class="profile-info-row">
                            <div class="profile-info-name"> Student Number </div>

                            <div class="profile-info-value">
                              <span class="editable" id="username"><?php echo $stud_num; ?></span>
                            </div>
                          </div>

                          <div class="profile-info-row">
                            <div class="profile-info-name"> Full Names </div>

                            <div class="profile-info-value">
                              
                              <span class="editable" id="country"><?php echo $fname." ".$surname; ?></span>
                            </div>
                          </div>

                          <div class="profile-info-row">
                            <div class="profile-info-name"> phone Number </div>

                            <div class="profile-info-value">
                              <span class="editable" id="login"><?php echo $cell; ?></span>
                            </div>
                          </div>

                          <div class="profile-info-row">
                            <div class="profile-info-name"> Email Address </div>

                            <div class="profile-info-value">
                              <span class="editable" id="about"><?php echo $email; ?></span>
                            </div>
                          </div>

                          <div class="profile-info-row">
                            <div class="profile-info-name"> Grade </div>

                            <div class="profile-info-value">
                              <span class="editable" id="age"><?php echo $grade; ?></span>
                            </div>
                          </div>

                          <div class="profile-info-row">
                            <div class="profile-info-name"> Title </div>

                            <div class="profile-info-value">
                              <span class="editable" id="signup"><?php echo $gender; ?></span>
                            </div>
                          </div>

                           <div class="profile-info-row">
                            <div class="profile-info-name"> Nationality </div>

                            <div class="profile-info-value">
                              <span class="editable" id="signup"><?php echo $nationality; ?></span>
                            </div>
                          </div>

                           <div class="profile-info-row">
                            <div class="profile-info-name"> Home Language</div>

                            <div class="profile-info-value">
                              <span class="editable" id="signup"><?php echo $h_lan; ?></span>
                            </div>
                          </div>

                           <div class="profile-info-row">
                            <div class="profile-info-name"> Previous School </div>

                            <div class="profile-info-value">
                              <span class="editable" id="signup"><?php echo $prev_sch; ?></span>
                            </div>
                          </div>

                          

                          <div class="profile-info-row">
                            <div class="profile-info-name"> Home Address </div>

                            <div class="profile-info-value">
                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                              <span class="editable" id="about"><?php echo $address; ?></span>
                            </div>
                          </div>

                          <div class="profile-info-row">
                            <div class="profile-info-name"> Postal Address </div>

                            <div class="profile-info-value">
                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                              <span class="editable" id="about"><?php echo $p_addr; ?></span>
                            </div>
                          </div>

                          

                        </div>

<hr/>
<h4>Subjects</h4>
                        <div class="profile-user-info profile-user-info-striped">
                          
                            <?php
                              show_subjects($con, $id);

                            ?>

                        </div>
                        <hr/>
                        <h5><i>Registered by <b><?php echo $reg_by; ?></b></i></h5>
                      </div>
                            


                          </div>
                        </div>




                  <?php
                      }else{
                        ?>

                          <center>
                              <br/>
                              <br/>
                              <h1>:(</h1>

                              <h4>No results found for <span style="color:red;">"<?php echo $id; ?>"</span></h4>

                              <a data-toggle="modal" href="#find_stud" class="btn btn-primary"><i class="fa fa-search"></i> &nbsp; Try again</a>


                          </center>

                        <?php
                      }
                        
                    }

                  ?>




<!--- ********************************** SEARCH RESULTS FOR SUBJECTS INFORMATION ************************************************************** -->












<!--- ********************************** SEARCH RESULTS FOR INVOICES ************************************************************** -->










<?php

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
