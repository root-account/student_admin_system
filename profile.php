<?php 
  require_once("includes/head.php"); 
  require_once("includes/header.php"); 

  //require_once("logic/get_subjects.php");


  $get_user_details = $con->query("SELECT * FROM users WHERE username = '$username'");
  while ($row = mysqli_fetch_array($get_user_details)) {
    $cell = $row['phone'];
    $email = $row['email'];

  }
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
                <span> </span> Profile
                
              </h1>
            </div><!-- /.page-header -->

                <!--------------------------------------------- PAGE CONTENT BEGINS -------------------------------------->


<div class="row">
    <div class="col-md-4">
      <div class="alert alert-warning">
      <h4><span class="fa fa-user"></span> &nbsp; Your details.</h4>
          <table class="table table-hover">
            <tr>
              <td>Username</td>
              <td><b>: <?php echo $username; ?><b></td>
            </tr>

            <tr>
              <td>Surname</td>
              <td><b>: <?php echo $user_surname; ?></b></td>
            </tr>

            <tr>
              <td>Name</td>
              <td><b>: <?php echo $user_names; ?></b></td>
            </tr>

            <tr>
              <td>Cell</td>
              <td><b>: <?php echo $cell; ?></b></td>
            </tr>

            <tr>
              <td>Email</td>
              <td><b>: <?php echo $email; ?></b></td>
            </tr>


          </table>
          
      </div>
      
    </div>

    <div class="col-md-8">

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
