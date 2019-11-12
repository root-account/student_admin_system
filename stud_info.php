<?php 
  require_once("includes/head.php"); 
  require_once("includes/header.php"); 


  //Logic script
  require_once("logic/show_stud_info.php");
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
                Student Information
                
              </h1>
            </div><!-- /.page-header -->

            <div class="row">



              <div class="col-xs-12">
                <!--------------------------------------------- PAGE CONTENT BEGINS -------------------------------------->

<div class="row">

  <div class="col-md-12">
  <h4>Total Registered Students : <?php echo $num_stud; ?></h4>
  <p><a href="register_stud.php"><span class="fa fa-plus"></span> Register new student</a> </p>
  </div>
</div>



<div class="row">

<div class="tabbable">
                      <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
                        <li class="active">
                          <a data-toggle="tab" href="#home4">Completed <span class="label label-warning label-white"><span class="fa fa-check"></span> <?php  echo $completed; ?></span></a>
                        </li>

                        <li>
                          <a data-toggle="tab" href="#profile4">Incomplete <span class="label label-danger label-white"><span class="fa fa-exclamation-triangle"></span> &nbsp;<?php  echo $incomplete; ?></span></a>
                        </li>
                      </ul>

                      <div class="tab-content">
                        <div id="home4" class="tab-pane fade in active">
                          <div class="table-responsive">
                            <table class="table  table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>Student No</th>
                                    <th>Surname</th>
                                    <th>Names</th>
                                    <th>Cellphone</th>
                                    <th>Email </th>
                                    <th>No. Subjects </th>
                                    <th>Status</th>
                                    <th>
                                      <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                      Action
                                    </th>
                                  </tr>
                                  </thead>
                                <tbody>
                                    <!-- The php script to populate the table begins here -->
                                     <?php

                                        get_stud_info($con,3,3);
                                     ?>
                                </tbody>
                              </table>
                            </div>
                        </div>

                        <div id="profile4" class="tab-pane">
                          <div id="home4" class="tab-pane fade in active">
                            <div class="table-responsive">
                              <table class="table  table-bordered table-hover">
                                  <thead>
                                    <tr>
                                      <th>Student No</th>
                                      <th>Surname</th>
                                      <th>Names</th>
                                      <th>Cellphone</th>
                                      <th>Email </th>
                                      <th>No. Subjects </th>
                                      <th>Status</th>
                                      <th>
                                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                        Action
                                      </th>
                                    </tr>
                                    </thead>
                                  <tbody>
                                      <!-- The php script to populate the table begins here -->
                                       <?php

                                          get_stud_info($con,1,2);
                                       ?>
                                  </tbody>
                                </table>
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
