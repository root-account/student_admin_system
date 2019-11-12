<?php 
  require_once("includes/head.php"); 
  require_once("includes/header.php"); 

  //require_once("logic/get_subjects.php");
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
                Statistics
                
              </h1>
            </div><!-- /.page-header -->

                <!--------------------------------------------- PAGE CONTENT BEGINS -------------------------------------->
<div class="row">
  <div class="col-md-12 alert alert-danger">
    <center>
      <h4>Page under construction</h4>
      <hr/>

    </center>
    <p><b>Description</b></p>
    <p>This page will just show some registration statistics such as:</p>
    <ul>
      <li>How many students are in each grade</li>
      <li>How many students per campus</li>
      <li>How many students are in a particular programme</li>
      <li>How many students are taking a particular subject</li>
      <li>Total number of registrations</li>
      <li>Number of Registrations that are incomplete</li>

    </ul>

  </div>
</div>


<div class="row">

<div class="col-md-4">
 <div class="widget-box widget-color-green2">
  <div class="widget-header">
    <h5 class="widget-title lighter smaller">Registrations</h5>
  </div>
  <div class="widget-body">
      <div class="widget-main padding-8">
        
      </div>
  </div>
   
 </div>

</div>

<div class="col-md-4">
 <div class="widget-box widget-color-green2">
  <div class="widget-header">
    <h5 class="widget-title lighter smaller">No. Students per grade</h5>
  </div>
  <div class="widget-body">
      <div class="widget-main padding-8">

      </div>
  </div>
   
 </div>

</div>


<div class="col-md-4">
 <div class="widget-box widget-color-green2">
  <div class="widget-header">
    <h5 class="widget-title lighter smaller">Student per Campus</h5>
  </div>
  <div class="widget-body">
      <div class="widget-main padding-8">
        
      </div>
  </div>
   
 </div>

</div>

</div>



<div class="row">

<div class="col-md-4">
 <div class="widget-box widget-color-blue2">
  <div class="widget-header">
    <h5 class="widget-title lighter smaller">Student per Subject</h5>
  </div>
  <div class="widget-body">
      <div class="widget-main padding-8">
        
      </div>
  </div>
   
 </div>

</div>

<div class="col-md-4">
 <div class="widget-box widget-color-blue2">
  <div class="widget-header">
    <h5 class="widget-title lighter smaller">No. Students per Programe</h5>
  </div>
  <div class="widget-body">
      <div class="widget-main padding-8">
        
      </div>
  </div>
   
 </div>

</div>


<div class="col-md-4">
 <div class="widget-box widget-color-blue2">
  <div class="widget-header">
    <h5 class="widget-title lighter smaller">Student per Campus</h5>
  </div>
  <div class="widget-body">
      <div class="widget-main padding-8">
        
      </div>
  </div>
   
 </div>

</div>

</div>




                <!--------------------------------------------- PAGE CONTENT ENDS ---------------------------------------->


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
