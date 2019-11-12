<?php 
  require_once("includes/head.php"); 
  require_once("includes/header.php");


    //Logic script
  require_once("logic/get_invoices.php");
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
                Recorded Invoices
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  overview &amp; stats
                </small>
              </h1>
            </div><!-- /.page-header -->

            <div class="row">
              <div class="col-xs-12">
                <!--------------------------------------------- PAGE CONTENT BEGINS -------------------------------------->



<div class="row">

<div class="col-md-9">
<form class="form-search" action="invoice_search.php" method="POST">
                <span class="input-icon">
                  <input type="text" placeholder="Invoice No, Ref" name="ref" class="nav-search-input" id="nav-search-input" autocomplete="on" />

                  <button type="submit" name="find_inv" class="ace-icon fa fa-search nav-search-icon"></button>
                </span>
              </form>

</div>

<div class="col-md-3">
<a data-toggle="modal" href="#clear_payment" class="btn btn-round btn-primary btn-bold"><i class="ace-icon fa fa-share bigger-200"></i> Clear New Payment</a>
    </div>

</div>


<div class="row">
    <div class="col-md-12">



<br/>


        <table class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Reference</th>
                                        <th>To</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                      
                                      </tr>
                                    </thead>
                                    <tbody>

                                      <?php
                                        //call function to disaplay all the data
                                        display_invoices($con);

                                      ?>


                                    </tbody>
                                  </table>

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
