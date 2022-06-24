<?php

$ApiErrors = FALSE;

if (isset($_SESSION['Errors'])) {
    $ApiErrors = $_SESSION['Errors'];
    unset($_SESSION['Errors']);
}

//echo "<pre>";
//print_r($this->session->userdata('clone'));
//die();



?>

<style>

    .form-group{
        margin-bottom: 0;
    }

    .form-horizontal{
        padding-top: 0;
    }

    .control-label{
        padding-top: 0;
    }



</style>

<div class="container-fluid">

    <div class="row bg-title">

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

            <h4 class="page-title">ADD Housing Disrepair</h4> </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Add Housing Disrepair</li>
            </ol>

        </div>

        <!-- /.col-lg-12 -->

    </div>

    <!--.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Housing Disrepair Form</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/manageLeads'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Manage Leads</a>
                        </div>
                    </div>

                </div>


                <hr style="margin-bottom: 0; margin-top: 5px;">

                <div class="panel-wrapper collapse in" aria-expanded="true">


                    <div class="panel-body" style="padding: 0px;">

                        <div class="col-md-12" style="padding: 0px; margin-top: 10px;">

                            <?php if (validation_errors() || $ApiErrors || $this->session->flashdata('duplicateLeadError')): ?>

                                <div class="alert alert-danger" style="padding: 25px;">

                                    <?php if ($this->session->flashdata('duplicateLeadError')) { ?>

                                        <p style="color: white;"><strong>Lead Errors !</strong><p>
                                            <?php echo "<p style='color: white'><strong>" . $this->session->flashdata('duplicateLeadError') . "</strong></p>" ?>
                                        <?php } else { ?>

                                        <p style="color: white;"><strong>Form Errors !</strong><p>
                                        <p style="color: white;">Please Correct The Form Errors and Submit Again.</p>

                                        <hr style="width: 60%; float: left; margin-top: 6px; margin-bottom: 0px;">

                                        <?php echo (validation_errors()) ? "<p style='color: white; margin-top: 21px;'>" . validation_errors('<strong>', '</strong><br>') . "</p>" : ''; ?>


                                        <?php if (is_array($ApiErrors)) { ?>
                                                <?php 
                                                    if ($ApiErrors): 
                                                        foreach ($ApiErrors as $errors): 
                                                ?>
                                        
                                            <?php if (count($errors) != count($errors, COUNT_RECURSIVE)) { ?>                                        
                                        
                                                <?php  foreach ($errors as $error): ?>
                                                        <?php echo "<br><p style='color: white; margin-top: 21px;'><strong>Field = " . @$error['field'] . "; <br>Error = " . @$error['message'] . "</p></strong>" ?>                                
                                                    <?php endforeach; ?>
                                        
                                        
                                                <?php
                                            }
                                            else {
                                                
                                                echo "<br><p style='color: white'><strong>Field = " . $errors['field'] . "; <br>Error = " . $errors['message'] . "</p></strong>";
                                                
                                            }                                    
                                                    endforeach; ?>
                                                <?php endif; 
                                                
                                            }
                                    
                                    ?>

                                </div>
                            
                            <?php } endif; ?>

                        </div>                        
                        

                        <div class="col-md-12" style="padding: 0px; ">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Personal Details </p>
                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>

                        <form action="<?php echo base_url('Mod/createHDRWIP/') . $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                           <?php //  if ($this->input->post('clone') == "clone" || $this->session->userdata('clone')): ?>
                            
                           <?php  if ($this->input->post('clone') == "clone" || $this->session->userdata('clone')): ?>
                                <input type="hidden" name="clone" value="clone">                                
                           <?php endif; ?> 
                            
                            <div class="form-body">
                                
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <!--First Name Fields-->

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('title')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Title<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="title" class="form-control">
                                                            <option value="">Select Title</option>
                                                            <option <?php echo (set_value('title') == "Mr") ? "selected" : ""; ?> value="Mr">Mr</option>
                                                            <option <?php echo (set_value('title') == "Mrs") ? "selected" : ""; ?> value="Mrs">Mrs</option>
                                                            <option <?php echo (set_value('title') == "Mr & Mrs") ? "selected" : ""; ?> value="Mr & Mrs">Mr & Mrs</option>
                                                            <option <?php echo (set_value('title') == "Ms") ? "selected" : ""; ?> value="Ms">Ms</option>
                                                            <option <?php echo (set_value('title') == "Miss") ? "selected" : ""; ?> value="Miss">Miss</option>
                                                            <option <?php echo (set_value('title') == "Dr") ? "selected" : ""; ?> value="Dr">Dr</option>
                                                            <option <?php echo (set_value('title') == "Rev") ? "selected" : ""; ?> value="Rev">Rev</option>
                                                            <option <?php echo (set_value('title') == "Dame") ? "selected" : ""; ?> value="Dame">Dame</option>
                                                            <option <?php echo (set_value('title') == "Lady") ? "selected" : ""; ?> value="Lady">Lady</option>
                                                            <option <?php echo (set_value('title') == "Sir") ? "selected" : ""; ?> value="Sir">Sir</option>
                                                            <option <?php echo (set_value('title') == "Lord") ? "selected" : ""; ?> value="Lord">Lord</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('title')) ? '<br>' . form_error('title', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('firstName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">First Name<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter First Name" name="firstName" value="<?php echo set_value('firstName'); ?>">
                                                        <?php echo (form_error('firstName')) ? '<br>' . form_error('firstName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!--< ROW 2 >-->                                

                                    <div class="row">
                                        <div class="col-md-12">

                                            <!--Last Name Fields-->

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('lastName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Last Name<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Last Name" name="lastName" value="<?php echo set_value('lastName'); ?>">
                                                        <?php echo (form_error('lastName')) ? '<br>' . form_error('lastName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Job Title Fields -->                                        

<!--                                            <div class="col-md-6">
                                                <div class="form-group <?php // echo (form_error('jobtitle')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Job title</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Job Title" name="jobtitle" value="<?php // echo set_value('jobtitle'); ?>">
                                                        <?php // echo (form_error('jobtitle')) ? '<br>' . form_error('jobtitle', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>-->


                                            <!--Phone 1 Fields-->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('phone1')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 1<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 1" name="phone1" value="<?php echo set_value('phone1'); ?>">
                                                        <?php echo (form_error('phone1')) ? '<br>' . form_error('phone1', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!--< ROW 3 >-->                                                                

                                    <div class="row">
                                        <div class="col-md-12">

                                            <!--Phone 2 Fields-->                                                                                

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('phone2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 2</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 2" name="phone2" value="<?php echo set_value('phone2'); ?>">
                                                        <?php echo (form_error('phone2')) ? '<br>' . form_error('phone2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--email Fields-->                                                                                                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('email')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Email</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Email" name="email" value="<?php echo set_value('email'); ?>">
                                                        <?php echo (form_error('email')) ? '<br>' . form_error('email', "<b class='text-danger'>", '</b>') : ''; ?>
                                                    </div>
                                                </div>
                                            </div>


                                            <!--Address 1 Fields-->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('address')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Address</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="3" class="form-control" style="resize: none;" placeholder="Enter address" name="address"><?php echo set_value('address'); ?></textarea> 
                                                        <?php echo (form_error('address')) ? '<br>' . form_error('address', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Address 2 Fields-->                                                                                

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('address2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Address 2</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="3" style="resize: none;" class="form-control" placeholder="Enter Address 2" name="address2"><?php echo set_value('address2'); ?></textarea> 
                                                        <?php echo (form_error('address2')) ? '<br>' . form_error('address2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Address 3 Fields-->                                                                                                                        

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('address3')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left;">Address 3</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="3" style="resize: none;" class="form-control" placeholder="Enter Address 3" name="address3"><?php echo set_value('address3'); ?></textarea> 
                                                        <?php echo (form_error('address3')) ? '<br>' . form_error('address3', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!--< ROW 4 >-->                                                                                                

                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- Town City Fields -->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('towncity')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Town / City </label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Town City" name="towncity" value="<?php echo set_value('towncity'); ?>">
                                                        <?php echo (form_error('towncity')) ? '<br>' . form_error('towncity', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Post Code Fields -->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('postcode')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Post Code</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Post Code" name="postcode" value="<?php echo set_value('postcode'); ?>">
                                                        <?php echo (form_error('postcode')) ? '<br>' . form_error('postcode', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- Date of Birth Fields -->                                                                                

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('dateOfBirth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Date of Birth</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" id="dateofbirth" placeholder="Enter Date Of Birth" name="dateOfBirth" value="<?php echo set_value('dateOfBirth'); ?>">
                                                        <?php echo (form_error('dateOfBirth')) ? '<br>' . form_error('dateOfBirth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('ClientsOccupation')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Client Occupation</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="ClientsOccupation" class="form-control" placeholder="Enter Client Occupation" value="<?php echo set_value('ClientsOccupation'); ?>">
                                                        <?php echo (form_error('ClientsOccupation')) ? '<br>' . form_error('ClientsOccupation', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            
                                        </div>
                                    </div>                                                                    
                                   

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('NINumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">NI Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="NINumber" placeholder="Enter NI Number" class="form-control" value="<?php echo set_value('NINumber'); ?>">
                                                        <?php echo (form_error('NINumber')) ? '<br>' . form_error('NINumber', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('Maritalstatus')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Marital status</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="Maritalstatus" class="form-control" placeholder="Enter Marital status" value="<?php echo set_value('Maritalstatus'); ?>">
                                                        <?php echo (form_error('Maritalstatus')) ? '<br>' . form_error('Maritalstatus', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                    
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('AreyouaLitigationFriend')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Are you a Litigation Friend</label>
                                                    <div class="col-md-10" style="">
                                                        <select class="form-control" name="AreyouaLitigationFriend">
                                                            <option value="">Select Litigation Friend</option>
                                                            <option  <?php echo (set_value('AreyouaLitigationFriend') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('AreyouaLitigationFriend') == "No") ? "selected" : ""; ?> value="No">No</option>                                                        
                                                        </select>                                                            
                                                        <?php echo (form_error('AreyouaLitigationFriend')) ? '<br>' . form_error('AreyouaLitigationFriend', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('Iflitigationfriendnameanddateofbirthoftheclaimant')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">If litigation friend, name and date of birth of the claimant</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea class="form-control" rows="5" name="Iflitigationfriendnameanddateofbirthoftheclaimant"><?php echo set_value('Iflitigationfriendnameanddateofbirthoftheclaimant'); ?></textarea>
                                                        <?php echo (form_error('Iflitigationfriendnameanddateofbirthoftheclaimant')) ? '<br>' . form_error('Iflitigationfriendnameanddateofbirthoftheclaimant', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('ClientPassword')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Client Password</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="ClientPassword" placeholder="Enter Client Password" class="form-control" value="<?php echo set_value('ClientPassword'); ?>">
                                                        <?php echo (form_error('ClientPassword')) ? '<br>' . form_error('ClientPassword', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                </div>


                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Contact Preferences </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- Permission to Phone Fields -->                                                                                

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('contactphone')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Permission to Phone</label>
                                                    <div class="col-md-8" style="">
                                                        <select class="form-control" name="contactphone" id="contactphone">
                                                            <option value="">Permission to SMS</option>
                                                            <option  <?php echo (set_value('contactphone') == "Unknown") ? "selected" : ""; ?> value="Unknown">Unknown</option>
                                                            <option  <?php echo (set_value('contactphone') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('contactphone') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('contactphone')) ? '<br>' . form_error('contactphone', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Permission to SMS Fields -->                                                                                                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('contactsms')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Permission to SMS</label>
                                                    <div class="col-md-8" style="">
                                                        <select class="form-control" name="contactsms" id="contactsms">
                                                            <option value="">Permission to SMS</option>
                                                            <option <?php echo (set_value('contactsms') == "Unknown") ? "selected" : ""; ?> value="Unknown">Unknown</option>
                                                            <option <?php echo (set_value('contactsms') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('contactsms') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('contactsms')) ? '<br>' . form_error('contactsms', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>                                        

                                        </div>
                                    </div>

                                    <!--< ROW 6 >-->

                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- Permission to SMS Fields -->                                                                                                                                                                

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('contactemail')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Permission to Email</label>
                                                    <div class="col-md-8" style="">
                                                        <select class="form-control" name="contactemail" id="contactemail">
                                                            <option value="">Select Permission to Email</option>
                                                            <option <?php echo (set_value('contactemail') == "Unknown") ? "selected" : ""; ?> value="Unknown">Unknown</option>
                                                            <option <?php echo (set_value('contactemail') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('contactemail') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('contactemail')) ? '<br>' . form_error('contactemail', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Permission to SMS Fields -->                                                                                                                                                                                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('contactmail')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Permission to Mail</label>
                                                    <div class="col-md-8" style="">
                                                        <select class="form-control" name="contactmail" id="contactmail">
                                                            <option value="">Select Permission to Mail</option>
                                                            <option <?php echo (set_value('contactmail') == "Unknown") ? "selected" : ""; ?> value="Unknown">Unknown</option>
                                                            <option <?php echo (set_value('contactmail') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('contactmail') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('contactmail')) ? '<br>' . form_error('contactmail', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">                                
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('contacttime')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Preferred time of Contact</label>
                                                    <div class="col-md-8" style="">
                                                        <select class="form-control" name="contacttime" id="contacttime">
                                                            <option value="">Select Contact Time</option>
                                                            <option  <?php echo (set_value('contacttime') == "Anytime") ? "selected" : "selected"; ?> value="Anytime">Anytime</option>
                                                            <option  <?php echo (set_value('contacttime') == "Morning") ? "selected" : ""; ?> value="Morning">Morning</option>
                                                            <option  <?php echo (set_value('contacttime') == "Afternoon") ? "selected" : ""; ?> value="Afternoon">Afternoon</option>
                                                            <option  <?php echo (set_value('contacttime') == "Evening") ? "selected" : ""; ?> value="Evening">Evening</option>
                                                        </select>
                                                        <?php echo (form_error('contacttime')) ? '<br>' . form_error('contacttime', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('preferred_date_to_call')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Preferred date to call</label>
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Preferred date to call" value="<?php set_value('preferred_date_to_call') ?>" name="preferred_date_to_call" id="preferred_date_to_call">
                                                        <?php echo (form_error('preferred_date_to_call')) ? '<br>' . form_error('preferred_date_to_call', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                </div>
                                
                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Property Details </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row"> 
                                        <div class="col-md-12">
                                            
                                            <div class="col-md-12">
                                                
                                                <div class="form-group <?php echo (form_error('FullAddressofPropertyifdifferentfromtheoneyouarelivinginnow')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Full Address of Property if different from the one you are living in now</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" name="FullAddressofPropertyifdifferentfromtheoneyouarelivinginnow" class="form-control" placeholder="Enter Full Address of Property if different from the one you are living in now"><?php echo set_value('FullAddressofPropertyifdifferentfromtheoneyouarelivinginnow'); ?></textarea>
                                                        <?php echo (form_error('FullAddressofPropertyifdifferentfromtheoneyouarelivinginnow')) ? '<br>' . form_error('FullAddressofPropertyifdifferentfromtheoneyouarelivinginnow', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('NameofLandlordAddress')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Name of Landlord Address</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="NameofLandlordAddress" class="form-control" placeholder="Enter Full Address and Full Name of Landlord" value="<?php echo set_value('NameofLandlordAddress'); ?>">
                                                        <?php echo (form_error('NameofLandlordAddress')) ? '<br>' . form_error('NameofLandlordAddress', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('NumberofoccupantsresidingintheHouseIncludingChildren')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Number of occupants residing in the House Including Children</label>
                                                    <div class="col-md-8" style="">
                                                        <input placeholder="Enter Number of occupants residing in the House Including Children" type="text" name="NumberofoccupantsresidingintheHouseIncludingChildren" value="<?php echo set_value('NumberofoccupantsresidingintheHouseIncludingChildren'); ?>" class="form-control">
                                                        <?php echo (form_error('NumberofoccupantsresidingintheHouseIncludingChildren')) ? '<br>' . form_error('NumberofoccupantsresidingintheHouseIncludingChildren', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                    
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('NamesandDateofBirthofalloccupants')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Names and Date of Birth of all occupants</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea name="NamesandDateofBirthofalloccupants" placeholder="Enter Names and Date of Birth of all occupants" class="form-control" rows="5"><?php echo set_value('NamesandDateofBirthofalloccupants'); ?></textarea>
                                                        <?php echo (form_error('NamesandDateofBirthofalloccupants')) ? '<br>' . form_error('NamesandDateofBirthofalloccupants', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('WhatisyourmonthlyRent')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">What is your monthly Rent</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" placeholder="Enter What is your monthly Rent" name="WhatisyourmonthlyRent" class="form-control" value="<?php echo set_value('WhatisyourmonthlyRent'); ?>">
                                                        <?php echo (form_error('WhatisyourmonthlyRent')) ? '<br>' . form_error('WhatisyourmonthlyRent', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('Ifyoupayweeklyhowmuchdoyoupay')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">If you pay weekly how much do you pay </label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="Ifyoupayweeklyhowmuchdoyoupay" class="form-control" placeholder="Enter If you pay weekly how much do you pay" value="<?php echo set_value('Ifyoupayweeklyhowmuchdoyoupay'); ?>">
                                                        <?php echo (form_error('Ifyoupayweeklyhowmuchdoyoupay')) ? '<br>' . form_error('Ifyoupayweeklyhowmuchdoyoupay', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('DoyoupayrentCashorDSS')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Do you pay rent Cash or DSS</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="DoyoupayrentCashorDSS" class="form-control" placeholder="Enter Do you pay rent Cash or DSS" value="<?php echo set_value('DoyoupayrentCashorDSS'); ?>">
                                                        <?php echo (form_error('DoyoupayrentCashorDSS')) ? '<br>' . form_error('DoyoupayrentCashorDSS', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('DoyouclaimHousingBenefit')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Do you claim Housing Benefit</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="DoyouclaimHousingBenefit" class="form-control">
                                                            <option value="">Select Do you claim Housing Benefit</option>
                                                            <option <?php echo (set_value('DoyouclaimHousingBenefit') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('DoyouclaimHousingBenefit') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('DoyouclaimHousingBenefit')) ? '<br>' . form_error('DoyouclaimHousingBenefit', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('Howisthispaymentmade')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">How is this payment made?</label>
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="Howisthispaymentmade" class="form-control">
                                                            <option value="">Select How is this payment made</option>
                                                            <option <?php echo (set_value('Howisthispaymentmade') == "Direct Debit") ? "selected" : ""; ?> value="Direct Debit">Direct Debit</option>
                                                            <option <?php echo (set_value('Howisthispaymentmade') == "Standing Order") ? "selected" : ""; ?> value="Standing Order">Standing Order</option>
                                                            <option <?php echo (set_value('Howisthispaymentmade') == "Cash") ? "selected" : ""; ?> value="Cash">Cash</option>
                                                            <option <?php echo (set_value('Howisthispaymentmade') == "Other") ? "selected" : ""; ?> value="Other">Other</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('Howisthispaymentmade')) ? '<br>' . form_error('Howisthispaymentmade', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('DoyouhaveacopyofTenancyagreement')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Do you have a copy of Tenancy agreement</label>
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="DoyouhaveacopyofTenancyagreement" class="form-control">
                                                            <option value="">Select Do you have a copy of Tenancy agreement</option>
                                                            <option <?php echo (set_value('DoyouhaveacopyofTenancyagreement') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('DoyouhaveacopyofTenancyagreement') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('DoyouhaveacopyofTenancyagreement')) ? '<br>' . form_error('DoyouhaveacopyofTenancyagreement', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    
                                </div>

                                <!--< ROW 5 >-->                                                                                                                                

                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Disrepair Details </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">                                
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('PositiononLiability')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Position on Liability</label>
                                                    <div class="col-md-10" style="">
                                                        <select class="form-control" name="PositiononLiability">
                                                            <option value="">Select Position on Liability</option>
                                                            <option <?php echo (set_value('PositiononLiability') == "Liability Admitted") ? "selected" : ""; ?> value="Liability Admitted">Liability Admitted</option>
                                                            <option <?php echo (set_value('PositiononLiability') == "Liability Disputed") ? "selected" : ""; ?> value="Liability Disputed">Liability Disputed</option>
                                                            <option <?php echo (set_value('PositiononLiability') == "No position on liability") ? "selected" : ""; ?> value="No position on liability">No position on liability</option>
                                                            <option <?php echo (set_value('PositiononLiability') == "50/50") ? "selected" : ""; ?> value="50/50">50/50</option>
                                                            <option <?php echo (set_value('PositiononLiability') == "Liability Denied") ? "selected" : ""; ?> value="Liability Denied">Liability Denied</option>
                                                        </select>
                                                        <?php echo (form_error('PositiononLiability')) ? '<br>' . form_error('PositiononLiability', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Note')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Note</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="5" class="form-control" name="Note" placeholder="Enter Note"><?php echo set_value('Note'); ?></textarea>
                                                        <?php echo (form_error('Note')) ? '<br>' . form_error('Note', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('additional_notes')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Additional Notes</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="5" class="form-control" name="additional_notes" placeholder="Enter Additional Notes"><?php echo set_value('additional_notes'); ?></textarea>
                                                        <?php echo (form_error('additional_notes')) ? '<br>' . form_error('additional_notes', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('NatureofDisrepair')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Nature of Disrepair</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" class="form-control" name="NatureofDisrepair" placeholder="Enter Nature of Disrepair"><?php echo set_value('NatureofDisrepair'); ?></textarea>
                                                        <?php echo (form_error('NatureofDisrepair')) ? '<br>' . form_error('NatureofDisrepair', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                    
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('DateDisrepairfirstnotice')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Date Disrepair first notice</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" name="DateDisrepairfirstnotice" id="DateDisrepairfirstnotice" placeholder="Enter Date Disrepair first notice" value="<?php echo set_value('DateDisrepairfirstnotice'); ?>">
                                                        <?php echo (form_error('DateDisrepairfirstnotice')) ? '<br>' . form_error('DateDisrepairfirstnotice', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('WereyouInjured')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Were you Injured?</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="WereyouInjured" class="form-control">
                                                            <option value="">Select Were you Injured</option>
                                                            <option <?php echo (set_value('WereyouInjured') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('WereyouInjured') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('WereyouInjured')) ? '<br>' . form_error('WereyouInjured', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    

                                    <div class="row">
                                        <div class="col-md-12">
                                    
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('DescriptionofInjuries')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Description of Injuries</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea name="DescriptionofInjuries" class="form-control" rows="5" placeholder="Enter Description of Injuries"><?php echo set_value('DescriptionofInjuries'); ?></textarea>
                                                        <?php echo (form_error('DescriptionofInjuries')) ? '<br>' . form_error('DescriptionofInjuries', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('Haveyounoticedanyissuesoutsidethehouse')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Have you noticed any issues outside the house?</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" name="Haveyounoticedanyissuesoutsidethehouse" class="form-control" placeholder="Enter Have you noticed any issues outside the house"><?php echo set_value('Haveyounoticedanyissuesoutsidethehouse'); ?></textarea>
                                                        <?php echo (form_error('Haveyounoticedanyissuesoutsidethehouse')) ? '<br>' . form_error('Haveyounoticedanyissuesoutsidethehouse', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('Dothewindowsanddoorsopenfreely')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Do the windows and doors open freely?</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" name="Dothewindowsanddoorsopenfreely" placeholder="Enter Do the windows and doors open freely" class="form-control"><?php echo set_value('Dothewindowsanddoorsopenfreely'); ?></textarea>
                                                        <?php echo (form_error('Dothewindowsanddoorsopenfreely')) ? '<br>' . form_error('Dothewindowsanddoorsopenfreely', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                    
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('DoyouhaveanyextractionfansinthehouseIfsoaretheyworkingcorrectly')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Do you have any extraction fans in the house? If so, are they working correctly?</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" name="DoyouhaveanyextractionfansinthehouseIfsoaretheyworkingcorrectly" placeholder="Enter Do you have any extraction fans in the house? If so, are they working correctly" class="form-control"><?php echo set_value('DoyouhaveanyextractionfansinthehouseIfsoaretheyworkingcorrectly'); ?></textarea>
                                                        <?php echo (form_error('DoyouhaveanyextractionfansinthehouseIfsoaretheyworkingcorrectly')) ? '<br>' . form_error('DoyouhaveanyextractionfansinthehouseIfsoaretheyworkingcorrectly', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                    
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('Haveyouclaimedbefore')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Have you claimed before</label>
                                                    <div class="col-md-10" style="">
                                                        
                                                        <select name="Haveyouclaimedbefore" class="form-control">
                                                            <option value="">Select Have you claimed before</option>
                                                            <option <?php echo (set_value('Haveyouclaimedbefore') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('Haveyouclaimedbefore') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('Haveyouclaimedbefore')) ? '<br>' . form_error('Haveyouclaimedbefore', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                    
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('tenancy_document')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Tenancy Document</label>
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="tenancy_document" class="form-control">
                                                            <option value="">Select Tenancy Document</option>
                                                            <option <?php echo (set_value('tenancy_document') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('tenancy_document') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('tenancy_document')) ? '<br>' . form_error('tenancy_document', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('copy_of_complaint_letter')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Copy of Complaint Letter</label>
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="copy_of_complaint_letter" class="form-control">
                                                            <option value="">Select Copy of Complaint Letter</option>
                                                            <option <?php echo (set_value('copy_of_complaint_letter') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('copy_of_complaint_letter') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('copy_of_complaint_letter')) ? '<br>' . form_error('copy_of_complaint_letter', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                    
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('pictures_of_disrepair_supplied')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Pictures of Disrepair Supplied</label>
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="pictures_of_disrepair_supplied" class="form-control">
                                                            <option value="">Select Pictures of Disrepair Supplied</option>
                                                            <option <?php echo (set_value('pictures_of_disrepair_supplied') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('pictures_of_disrepair_supplied') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('pictures_of_disrepair_supplied')) ? '<br>' . form_error('pictures_of_disrepair_supplied', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('date_HDR_noticed')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Date HDR Noticed</label>
                                                    <div class="col-md-8" style="">
                                                        
                                                        <input id="date_HDR_noticed" value="<?php echo set_value('date_HDR_noticed') ?>" placeholder="Enter Date HDR Noticed" id="date_HDR_noticed" name="date_HDR_noticed" class="form-control">
                                                        
                                                        <?php echo (form_error('date_HDR_noticed')) ? '<br>' . form_error('date_HDR_noticed', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            
                                        </div>
                                    </div>

                                    
                                    
                                    
                                </div>

                                

                                <?php if ($_SESSION['adminData']['role_name'] == "Admin"): ?>

                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> OFFICE USE ONLY </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                                
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">                                
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                    
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('invoice_number')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Invoice Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="invoice_number" placeholder="Enter Invoice Number" class="form-control" value="<?php echo set_value('invoice_number'); ?>">
                                                        <?php echo (form_error('invoice_number')) ? '<br>' . form_error('invoice_number', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('replacement_invoice_number')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Replacement Invoice Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="replacement_invoice_number" placeholder="Enter Replacement Invoice Number" class="form-control" value="<?php echo set_value('replacement_invoice_number'); ?>">
                                                        <?php echo (form_error('replacement_invoice_number')) ? '<br>' . form_error('replacement_invoice_number', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            

                                            
                                            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                    
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('triage_invoive_number')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Triage Invoice Number</label>
                                                    <div class="col-md-10" style="">
                                                        <input type="text" name="triage_invoive_number" placeholder="Enter Triage Invoive Number" class="form-control" value="<?php echo set_value('triage_invoive_number'); ?>">
                                                        <?php echo (form_error('triage_invoive_number')) ? '<br>' . form_error('triage_invoive_number', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('date_instructed')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Date Instructed</label>
                                                    <div class="col-md-10" style="">
                                                        <input type="text" name="date_instructed" placeholder="Enter Date Instructed" id="date_instructed" class="form-control" value="<?php echo set_value('date_instructed'); ?>">
                                                        <?php echo (form_error('date_instructed')) ? '<br>' . form_error('date_instructed', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('DatetriageInvoicePaid')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Date triage Invoice Paid</label>
                                                    <div class="col-md-10" style="">
                                                        <input type="text" name="DatetriageInvoicePaid" placeholder="Enter Date triage Invoice Paid" id="DatetriageInvoicePaid" class="form-control" value="<?php echo set_value('DatetriageInvoicePaid'); ?>">
                                                        <?php echo (form_error('DatetriageInvoicePaid')) ? '<br>' . form_error('DatetriageInvoicePaid', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('rejectionreason')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Rejection Reason</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" name="rejectionreason" placeholder="Enter Rejection Reason" class="form-control"><?php echo set_value('rejectionreason'); ?></textarea>
                                                        <?php echo (form_error('rejectionreason')) ? '<br>' . form_error('rejectionreason', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            

                                            
                                            
                                        </div>
                                    </div>

                                    

                                    
                                </div>
                                
                                
                                
                                
                                <?php endif; ?>


                            </div>

                            <hr class="m-t-0 m-b-40">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">

                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 30%; margin-top: -26px; margin-bottom: 19px">
                                                <button type="submit" class="btn btn-info">Submit Lead</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./row-->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
</div>
<!-- /.container-fluid -->
