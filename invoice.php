<?php 

  require_once("includes/head.php"); 
  require_once("includes/header.php");

  //Logic Script
  require_once("logic/clear_payment.php");



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
                Confirm & save payment
                
              </h1>
            </div><!-- /.page-header -->

            <div class="row">
              <div class="col-xs-12">
                <!--------------------------------------------- PAGE CONTENT BEGINS -------------------------------------->




<?php
  if ($records_found > 0) {
?>
           <div class="row">
                  <div class="col-sm-10 col-sm-offset-1">
                    <div class="widget-box transparent">
                      <div class="widget-header widget-header-large">
                        <h3 class="widget-title grey lighter">
                          <i class="ace-icon fa fa-credit-card green"></i>
                          Customer Details
                        </h3>

                        <div class="widget-toolbar no-border invoice-info">
       
                          <br />
                          <span class="invoice-info-label">Date:</span>
                          <span class="blue"><?php echo date('d-m-Y'); ?></span>
                        </div>

                      </div>

                      <div class="widget-body">
                        <div class="widget-main padding-24">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="row">
                                <div class="col-xs-11 label label-lg label-success">
                                  <b>Student Info</b>
                                </div>
                              </div>

                              <div>
                                <ul class="list-unstyled  spaced">
                                  <li>
                                    <i class="ace-icon fa fa-caret-right green"></i><?php echo $stud_name." ".$surname; ?>
                                  </li>

                                  <li>
                                    <i class="ace-icon fa fa-caret-right green"></i><?php echo $address; ?>
                                  </li>

                                  <li>
                                    <i class="ace-icon fa fa-caret-right green"></i><?php echo $cell; ?>
                                  </li>

                                  <li class="divider"></li>

                                  <li>
                                    <i class="ace-icon fa fa-caret-right green"></i><?php echo $email; ?>
                                    
                                  </li>
                                </ul>
                              </div>
                            </div><!-- /.col -->
                          </div><!-- /.row -->

                          <div class="space"></div>

                          <div>
                            <table class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                  <th class="center">#</th>
                                  <th>Desc</th>
                                  <th class="hidden-xs">referrence</th>
                                  <th>Amount</th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td class="center"><?php echo $inv_num; ?></td>

                                  <td>
                                    <a href="#">Fees</a>
                                  </td>
                                  <td class="hidden-xs">
                                    <?php echo $ref; ?>
                                  </td>
                                  <td>R<?php echo $amount; ?></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          <div class="hr hr8 hr-double hr-dotted"></div>

                          <div class="row">
                            <div class="col-sm-5 pull-right">
                              <h4 class="pull-right">
                                Total amount : <b>R</b>
                                <span class="red"><?php echo $amount; ?></span>
                              </h4><br/>
                              <h4 class="pull-right">
                                Outstanding Amount : <b>R</b>
                                <span class="red"><?php echo $oustanding; ?></span>
                              </h4>
                            </div>
                            
                          </div>

                          <div class="space-6"></div>
                          <div class="well">
                            <form method="POST" action="">
                              <input type="hidden" name="amt" value="<?php echo $amount; ?>"> </input>
                              <input type="hidden" name="refe" value="<?php echo $ref; ?>"> </input>
                              <center><button type="submit" name="submit_inv" class="btn btn-primary"><span class="fa fa-check"></span> Complete & Save Invoice</button></center>

                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

<?php
  }else{




    ?>
    <center>
    <br/>
    <br/>
        <h4>The referrence <span style="color:red"> "<?php echo $ref;?>" </span> Does not match any student. <br/>Please double check.</h4> <br/><br/>

        <a data-toggle="modal" href="#clear_payment" class="btn btn-primary"> <i class="fa fa-undo"></i> &nbsp; Try again</a>

    </center>

  <?php  
  }

?>



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
