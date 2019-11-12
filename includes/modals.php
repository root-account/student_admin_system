
<!--************************** MODAL FOR SHOWING ACCOUNT PAYER INFORMATION *******************************-->
    <div class="container">
    <div class="modal fade in" id="stud_info">
        <div class="modal-dialog">
            <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="blue bigger"><?php echo $gud_title." ".$gud_surname; ?> </h4>
                      </div>

                      <div class="modal-body">
                      <div class="row">
                        


                              
                    <div class="col-md-12">

                        <h4>Personal Info</h4>
                        <div class="profile-user-info profile-user-info-striped">
  
                            <div class="profile-info-row">
                              <div class="profile-info-name"> Names </div>

                              <div class="profile-info-value">
                       
                                <span class="editable" id="about"><?php echo $gud_name; ?></span>
                              </div>
                            </div>

                            <div class="profile-info-row">
                              <div class="profile-info-name"> Surname </div>

                              <div class="profile-info-value">
                              
                                <span class="editable" id="about"><?php echo $gud_surname; ?></span>
                              </div>
                            </div>

                            <div class="profile-info-row">
                              <div class="profile-info-name"> Title </div>

                              <div class="profile-info-value">
                              
                                <span class="editable" id="about"><?php echo $gud_title; ?></span>
                              </div>
                            </div>

                            <div class="profile-info-row">
                              <div class="profile-info-name"> ID Number </div>

                              <div class="profile-info-value">
                              
                                <span class="editable" id="about"><?php echo $gud_id; ?></span>
                              </div>
                            </div>

                            <div class="profile-info-row">
                              <div class="profile-info-name"> Occupation </div>

                              <div class="profile-info-value">
                              
                                <span class="editable" id="about"><?php echo $gud_occu; ?></span>
                              </div>
                            </div>

                            <div class="profile-info-row">
                              <div class="profile-info-name"> Employer </div>

                              <div class="profile-info-value">
                              
                                <span class="editable" id="about"><?php echo $gud_employer; ?></span>
                              </div>
                            </div>

                        </div>

<hr/>
                  <h4>Contact details</h4>
                        <div class="profile-user-info profile-user-info-striped">
                            <div class="profile-info-row">
                              <div class="profile-info-name"> Cellphone </div>

                              <div class="profile-info-value">
                              
                                <span class="editable" id="about"><?php echo $gud_cell; ?></span>
                              </div>
                            </div>

                            <div class="profile-info-row">
                              <div class="profile-info-name"> Work Tel </div>

                              <div class="profile-info-value">
                              
                                <span class="editable" id="about"><?php echo $gud_work_cell; ?></span>
                              </div>
                            </div>

                            <div class="profile-info-row">
                              <div class="profile-info-name"> Email </div>

                              <div class="profile-info-value">
                              
                                <span class="editable" id="about"><?php echo $gud_email; ?></span>
                              </div>
                            </div>

                            <div class="profile-info-row">
                              <div class="profile-info-name"> Alternative Phone </div>

                              <div class="profile-info-value">
                              
                                <span class="editable" id="about"><?php echo $gud_cell2; ?></span>
                              </div>
                            </div>

                        </div>

<hr/>
                  <h4>Addresses</h4>
                        <div class="profile-user-info profile-user-info-striped">
                            <div class="profile-info-row">
                              <div class="profile-info-name"> Home Address </div>

                              <div class="profile-info-value">
                              
                                <span class="editable" id="about"><?php echo $gud_h_add; ?></span>
                              </div>
                            </div>

                            <div class="profile-info-row">
                              <div class="profile-info-name"> Postal Address </div>

                              <div class="profile-info-value">
                              
                                <span class="editable" id="about"><?php echo $gud_p_add; ?></span>
                              </div>
                            </div>

                            <div class="profile-info-row">
                              <div class="profile-info-name"> Work Address </div>

                              <div class="profile-info-value">
                              
                                <span class="editable" id="about"><?php echo $gud_w_add; ?></span>
                              </div>
                            </div>

                        </div>



                      </div>
                            







                      </div>
                      </div>

                      <div class="modal-footer">
                        <button class="btn btn-sm btn-danger" data-dismiss="modal">
                          <i class="ace-icon fa fa-times"></i>
                          Close
                        </button>
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- ******************************************** MODAL FOR CLEARING PAYMENTS ********************************************************-->
    <div class="container">
    <div class="modal fade in" id="clear_payment">
        <div class="modal-dialog">
            <div class="modal-content">
                                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="blue bigger">Payment Information</h4>
                      </div>
<form action="invoice.php" method="POST">
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            <div class="space"></div>

                              <div class="col-md-6">
                                  <input type="text" id="form-field-1" name="ref" placeholder="Reference Number" required="required"  class="col-xs-10 col-sm-10">
                              </div>

                              <div class="col-md-6">
                                  <input type="number" id="form-field-1" name="amount" placeholder="Amount (R)" required="required" class="col-xs-10 col-sm-10">
                              </div>
                            


                          </div>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button class="btn btn-sm btn-danger" data-dismiss="modal">
                          <i class="ace-icon fa fa-times"></i>
                          Cancel
                        </button>

                        <button class="btn btn-sm btn-primary" type="submit" name="clear_payment">
                          <i class="ace-icon fa fa-check"></i>
                          Save
                        </button>

</form>
                    </div>
            </div>
        </div>
    </div>
</div>

<!--****************************************************** MODAL FOR SEARCHING FOR A STUDENT ***************************************************-->
    <div class="container">
    <div class="modal fade in" id="find_stud">
        <div class="modal-dialog">
            <div class="modal-content">
                                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="blue bigger">Find a student</h4>
                      </div>
<form action="search_results.php" method="POST">
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            <div class="space"></div>

                              <div class="col-md-12">
                                  <input type="text" id="form-field-1" autofocus name="id" placeholder="ID or Student Number" class="col-xs-12 col-sm-12">
                              </div>
                            
                          </div>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button class="btn btn-sm btn-danger" data-dismiss="modal">
                          <i class="ace-icon fa fa-times"></i>
                          Cancel
                        </button>

                        <button type="submit" name="find_stud" class="btn btn-sm btn-primary">
                          <i class="ace-icon fa fa-search"></i>
                          Find
                        </button>

</form>
                    </div>
            </div>
        </div>
    </div>
</div>