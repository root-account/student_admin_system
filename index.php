<?php 
  require_once("includes/head.php"); 
  require_once("includes/header.php"); 
   require_once("logic/stats.php"); 

  $get_info = $con->query("SELECT * FROM student_info");
    $num_stud = mysqli_num_rows($get_info);


      $get_invo = $con->query("SELECT * FROM invoices");
    $num_inv = mysqli_num_rows($get_invo);



?>


  <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
      </script>

 <?php require_once("includes/nav.php"); ?>


      <div class="main-content">
        <div class="main-content-inner">
        

          <div class="page-content">
          <?php //require_once("includes/setting.php"); ?>



            <div class="page-header">
              <h1>
                WEPCoS
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  Home
                </small>
              </h1>
            </div><!-- /.page-header -->

            <div class="row">
              <div class="col-xs-12">
                <!--------------------------------------------- PAGE CONTENT BEGINS -------------------------------------->


<div class="row">
<center>
<div class="col-md-4">
<a href="register_stud.php" class=""> <h3><i class="fa fa-plus"></i> &nbsp; Register Student</h3></a> &nbsp;
</div>

<div class="col-md-4">
<a data-toggle="modal" href="#clear_payment" class=""> <h3><i class="fa fa-money"></i> &nbsp; Clear Payment</h3></a>
</div>

<div class="col-md-4">
<a data-toggle="modal" href="#find_stud" class=""> <h3><i class="fa fa-search"></i> &nbsp; Find a Student</h3></a>
</div>
</center>
</div>
<hr/>




<h4>Statistics...</h4>
<div class="row">

<div class="col-md-4">
 <div class="widget-box widget-color-green2">
  <div class="widget-header">
    <h5 class="widget-title lighter smaller">Registrations</h5>
  </div>
  <div class="widget-body">
      <div class="widget-main padding-8">
       

        <table class="table" border="0">
          <tr>
            <td>Total Registartions</td>
            <td> <span class="label label-danger"><?php echo $num_student; ?></span></td>
          </tr>

          <tr>
            <td>Completed</td>
            <td><span class="label label-danger"><?php echo $num_student_com; ?></span></td>
          </tr>

          <tr>
            <td>Incomplete</td>
            <td><span class="label label-danger"><?php echo $num_student_incom; ?></span></td>
          </tr>
          
        </table>
      </div>
  </div>
   
 </div>

</div>

<div class="col-md-4">
 <div class="widget-box widget-color-green2">
  <div class="widget-header">
    <h5 class="widget-title lighter smaller">Students per programme</h5>
  </div>
  <div class="widget-body">
      <div class="widget-main padding-8">
          <table class="table" border="0">
          <tr>
            <td>Matric upgrading</td>
            <td> <span class="label label-danger"><?php echo $num_upgrading; ?></span></td>
          </tr>

          <tr>
            <td>Matric ammended</td>
            <td><span class="label label-danger"><?php echo $num_ammended; ?></span></td>
          </tr>

          <tr>
            <td>Saturday Enrichment</td>
            <td><span class="label label-danger"><?php echo $num_enrich; ?></span></td>
          </tr>

          
        </table>
          
      </div>
  </div>
   
 </div>

</div>


<div class="col-md-4">
 <div class="widget-box widget-color-green2">
  <div class="widget-header">
    <h5 class="widget-title lighter smaller">Students per Campus</h5>
  </div>
  <div class="widget-body">
      <div class="widget-main padding-8">
        <table class="table" border="0">
          <tr>
            <td>Mahwelereng Campus</td>
            <td> <span class="label label-danger"><?php echo $num_mahwelereng; ?></span></td>
          </tr>

          <tr>
            <td>Mapela Campus</td>
            <td><span class="label label-danger"><?php echo $num_mapela; ?></span></td>
          </tr>

          
        </table>
      </div>
  </div>
   
 </div>

</div>

</div>

<hr/>

<div class="row">

<div class="col-md-4">
 <div class="widget-box widget-color-blue2">
  <div class="widget-header">
    <h5 class="widget-title lighter smaller">Students per Subject</h5>
  </div>
  <div class="widget-body">
      <div class="widget-main padding-8">
        <table class="table" border="0">
          <tr>
            <td>Mathematics</td>
            <td> <span class="label label-danger"><?php echo $num_math; ?></span></td>
          </tr>

          <tr>
            <td>Physical Science</td>
            <td><span class="label label-danger"><?php echo $num_pysc; ?></span></td>
          </tr>

          <tr>
            <td>Geography</td>
            <td><span class="label label-danger"><?php echo $num_geo; ?></span></td>
          </tr>

          <tr>
            <td>Life Science</td>
            <td><span class="label label-danger"><?php echo $num_lfsc; ?></span></td>
          </tr>

          <tr>
            <td>Mathematical Literacy</td>
            <td><span class="label label-danger"><?php echo $num_mathlit; ?></span></td>
          </tr>

          <tr>
            <td>Agricultural Science</td>
            <td><span class="label label-danger"><?php echo $num_agsc; ?></span></td>
          </tr>

          <tr>
            <td>Accounting</td>
            <td><span class="label label-danger"><?php echo $num_acc; ?></span></td>
          </tr>

          <tr>
            <td>Economics</td>
            <td><span class="label label-danger"><?php echo $num_econ; ?></span></td>
          </tr>

          <tr>
            <td>Business Studies</td>
            <td><span class="label label-danger"><?php echo $num_busst; ?></span></td>
          </tr>

          <tr>
            <td>Tourism</td>
            <td><span class="label label-danger"><?php echo $num_tour; ?></span></td>
          </tr>

          <tr>
            <td>English</td>
            <td><span class="label label-danger"><?php echo $num_eng; ?></span></td>
          </tr>
          
        </table>
      </div>
  </div>
   
 </div>

</div>

<div class="col-md-4">
 <div class="widget-box widget-color-blue2">
  <div class="widget-header">
    <h5 class="widget-title lighter smaller">Students per grade</h5>
  </div>
  <div class="widget-body">
      <div class="widget-main padding-8">
        <table class="table" border="0">
          <tr>
            <td>Grade 8</td>
            <td> <span class="label label-danger"><?php echo $num_8; ?></span></td>
          </tr>

          <tr>
            <td>Grade 9</td>
            <td><span class="label label-danger"><?php echo $num_9; ?></span></td>
          </tr>

          <tr>
            <td>Grade 10</td>
            <td><span class="label label-danger"><?php echo $num_10; ?></span></td>
          </tr>

          <tr>
            <td>Grade 11</td>
            <td><span class="label label-danger"><?php echo $num_11; ?></span></td>
          </tr>

          <tr>
            <td>Grade 12</td>
            <td><span class="label label-danger"><?php echo $num_12; ?></span></td>
          </tr>
          
        </table>
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
