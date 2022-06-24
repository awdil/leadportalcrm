
<?php

$ApiErrors = FALSE;


if (isset($_SESSION['Errors'])) {
    $ApiErrors = $_SESSION['Errors'];
    unset($_SESSION['Errors']);
}

//echo "<pre>";
//print_r($ApiErrors);
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

            <h4 class="page-title">ADD Lead</h4> </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Add Lead</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Accident Claim Form</div>
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

                        <form action="<?php echo base_url('Mod/createLead/') . $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                           <?php  if ($this->input->post('clone') == "clone" || $this->session->userdata('clone')): ?>
                                <input type="hidden" name="clone" value="clone">                                
                           <?php endif; ?> 
                            <input type="hidden" name="ClaimHnadlerUser" value="<?php echo (69) ? base64_encode(69) : ''; ?>"> 
                            <div class="form-body">
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <!--First Name Fields-->

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('firstName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">First Name<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter First Name" name="firstName" value="<?php echo set_value('firstName'); ?>">
                                                        <?php echo (form_error('firstName')) ? '<br>' . form_error('firstName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

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


                                        </div>
                                    </div>

                                    <!--< ROW 2 >-->                                

                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- Job Title Fields -->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('jobtitle')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Job title</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Job Title" name="jobtitle" value="<?php echo set_value('jobtitle'); ?>">
                                                        <?php echo (form_error('jobtitle')) ? '<br>' . form_error('jobtitle', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


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
                                                    <label class="control-label col-md-4" style="text-align: left;">Town City </label>
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
                                                <div class="form-group <?php echo (form_error('NINumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">NI Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="NINumber" value="<?php echo set_value('NINumber'); ?>" class="form-control" placeholder="Enter NI Number">
                                                        <?php echo (form_error('NINumber')) ? '<br>' . form_error('NINumber', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>                                

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('ClientsOccupation')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Client Occupation</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="ClientsOccupation" value="<?php echo set_value('ClientsOccupation'); ?>" class="form-control" placeholder="Enter Client Occupation">
                                                        <?php echo (form_error('ClientsOccupation')) ? '<br>' . form_error('ClientsOccupation', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Haveyouclaimedbefore')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Have you tried to claim before?</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="Haveyouclaimedbefore" class="form-control">
                                                            <option value="">Select Have You Claimed Before</option>
                                                            <option <?php echo (set_value('Haveyouclaimedbefore') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('Haveyouclaimedbefore') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('Haveyouclaimedbefore')) ? '<br>' . form_error('Haveyouclaimedbefore', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Doyouwishtomakeaclaim')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Do you wish to make a claim?</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="Doyouwishtomakeaclaim" class="form-control">
                                                            <option value="">Select Do you wish to make a claim</option>
                                                            <option <?php echo (set_value('Doyouwishtomakeaclaim') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('Doyouwishtomakeaclaim') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('Doyouwishtomakeaclaim')) ? '<br>' . form_error('Doyouwishtomakeaclaim', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('AreyouaLitigationFriend')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Are you a Litigation Friend</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="AreyouaLitigationFriend" class="form-control">
                                                            <option value="">Select Litigation Friend</option>
                                                            <option  <?php echo (set_value('AreyouaLitigationFriend') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('AreyouaLitigationFriend') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('AreyouaLitigationFriend')) ? '<br>' . form_error('AreyouaLitigationFriend', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('iflitigationfriendnameanddateofbirthoftheclaimant')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">If so Enter Details </label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" style="resize: none" name="iflitigationfriendnameanddateofbirthoftheclaimant" placeholder="Enter Litigation Friend, Name And Date of Birth of the Claimant" class="form-control"><?php echo set_value('iflitigationfriendnameanddateofbirthoftheclaimant'); ?></textarea>
                                                        <?php echo (form_error('iflitigationfriendnameanddateofbirthoftheclaimant')) ? '<br>' . form_error('iflitigationfriendnameanddateofbirthoftheclaimant', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>                                

                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('ClientPassword')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-2" style="text-align: left">Client Password</label>
                                                <div class="col-md-10" style="">
                                                    <input type="text" name="ClientPassword" value="<?php echo set_value('ClientPassword'); ?>" class="form-control" placeholder="Enter Client Password">
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

                                            <div class="col-md-6" id="PreferredTimetoCall" style="display: none">
                                            <div class="form-group <?php echo (form_error('PreferredTimetoCall')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left">Preferred Time to Call</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" value="<?php echo set_value('PreferredTimetoCall'); ?>" class="form-control" id="PreferredTimetoCall" placeholder="Enter Preferred Time to Call" name="PreferredTimetoCall">
                                                    <?php echo (form_error('PreferredTimetoCall')) ? '<br>' . form_error('PreferredTimetoCall', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                </div>
                                            </div>
                                        </div>

<!--                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('PreferredtimeofContact')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left">Preferred Time of Contact</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" name="PreferredtimeofContact" value="<?php echo set_value('PreferredtimeofContact'); ?>" id="PreferredtimeofContact" class="form-control" placeholder="Enter Preferred time of Contact">
                                                    <?php echo (form_error('PreferredtimeofContact')) ? '<br>' . form_error('PreferredtimeofContact', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                </div>
                                            </div>
                                        </div>-->


                                            
                                        </div>
                                    </div>

<!--                                    <div class="row">                                
                                        <div class="col-md-12">
                                    
                                    

                                        </div>
                                    </div>-->


                                </div>

                                <!--< ROW 5 >-->                                                                                                                                

                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Accident Details </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">                                
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('accidentCircumstances')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Accident Circumstances</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea name="accidentCircumstances" placeholder="Enter Accident Circumstances" class="form-control" style="resize: none" rows="5"><?php echo set_value('accidentCircumstances'); ?></textarea> 
                                                        <?php echo (form_error('accidentCircumstances')) ? '<br>' . form_error('accidentCircumstances', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>                                        
                                    </div>                                        

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('DateofAccident')) ? 'has-error' : ''; ?>">
                                                    <label class="control-label col-md-4" style="text-align: left">Date of Accident</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="DateofAccident" class="form-control" id="DateofAccident" value="<?php echo set_value('DateofAccident'); ?>" placeholder="Enter Date of Accident">
                                                        <?php echo (form_error('DateofAccident')) ? '<br>' . form_error('DateofAccident', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('TimeofAccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Time of Accident</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="TimeofAccident" id="TimeofAccident" class="form-control" value="<?php echo set_value('TimeofAccident'); ?>" placeholder="Enter Time of Accident">                                                 
                                                        <?php echo (form_error('TimeofAccident')) ? '<br>' . form_error('TimeofAccident', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>                                        
                                    </div>                                        

                                    <div class="row">
                                        <div class="col-md-12">
                                    
                                    
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('Whatwastheexactlocationoftheaccident')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left">Accident Location</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" value="<?php echo set_value('Whatwastheexactlocationoftheaccident'); ?>" name="Whatwastheexactlocationoftheaccident" class="form-control" placeholder="Enter The Exact Location Of The Accident">
                                                    <?php echo (form_error('Whatwastheexactlocationoftheaccident')) ? '<br>' . form_error('Whatwastheexactlocationoftheaccident', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('Whodoyoublamefortheaccident')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left">Who do you blame for the accident?</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" name="Whodoyoublamefortheaccident" value="<?php echo set_value('Whodoyoublamefortheaccident'); ?>" class="form-control" placeholder="Enter Blame For The Accident"> 
                                                    <?php echo (form_error('Whodoyoublamefortheaccident')) ? '<br>' . form_error('Whodoyoublamefortheaccident', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                </div>
                                            </div>
                                        </div>

                                        </div>                                        
                                    </div>                                        
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('PositiononLiability')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Position on Liability</label>
                                                    <div class="col-md-8" style="">
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

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Whatwastheweatherlike')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">What was the weather like?</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" value="<?php echo set_value('Whatwastheweatherlike'); ?>" class="form-control" placeholder="Enter What was the weather like" name="Whatwastheweatherlike">
                                                        <?php echo (form_error('Whatwastheweatherlike')) ? '<br>' . form_error('Whatwastheweatherlike', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                        </div>                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                    

                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('Werethepoliceinvolved')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left">Were the police involved?</label>
                                                <div class="col-md-8" style="">
                                                    <select class="form-control" name="Werethepoliceinvolved">
                                                        <option value="">Select Were the Police Involved</option>
                                                        <option <?php echo (set_value('Werethepoliceinvolved') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                        <option <?php echo (set_value('Werethepoliceinvolved') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                    </select>
                                                    <?php echo (form_error('Werethepoliceinvolved')) ? '<br>' . form_error('Werethepoliceinvolved', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('WastheClientVehiclerepairedortotalloss')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left">Was the client’s vehicle repaired or a total loss?</label>
                                                <div class="col-md-8" style="">
                                                    <select class="form-control" name="WastheClientVehiclerepairedortotalloss">
                                                        <option value="">Select Client Vehicle Repaired or Total Loss</option>
                                                        <option <?php echo (set_value('WastheClientVehiclerepairedortotalloss') == "Repaired") ? "selected" : ""; ?> value="Repaired">Repaired</option>
                                                        <option <?php echo (set_value('WastheClientVehiclerepairedortotalloss') == "Total Loss") ? "selected" : ""; ?> value="Total Loss">Total Loss</option>
                                                        <option <?php echo (set_value('WastheClientVehiclerepairedortotalloss') == "N/A") ? "selected" : ""; ?> value="N/A">N/A</option>
                                                    </select>
                                                    <?php echo (form_error('WastheClientVehiclerepairedortotalloss')) ? '<br>' . form_error('WastheClientVehiclerepairedortotalloss', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('Hastheclientbeenpaidoutforhis-hervehicledamage')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left">Has the client been paid out for his/her vehicle damage?</label>
                                                <div class="col-md-8" style="">
                                                    <select name="Hastheclientbeenpaidoutforhis-hervehicledamage" class="form-control">
                                                        <option value="">Select Vehicle Damage</option>
                                                        <option <?php echo (set_value('Hastheclientbeenpaidoutforhis-hervehicledamage') == "Yes") ? "selected" : ""; ?>  value="Yes">Yes</option>
                                                        <option <?php echo (set_value('Hastheclientbeenpaidoutforhis-hervehicledamage') == "No") ? "selected" : ""; ?>  value="No">No</option>
                                                    </select>
                                                    <?php echo (form_error('Hastheclientbeenpaidoutforhis-hervehicledamage')) ? '<br>' . form_error('Hastheclientbeenpaidoutforhis-hervehicledamage', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('CreditHireorVehicleReplacement')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left">Credit Hire or Vehicle Replacement</label>
                                                <div class="col-md-8" style="">
                                                    <select name="CreditHireorVehicleReplacement" class="form-control">
                                                        <option value="">Select Credit Hire or Vehicle Replacement</option>
                                                        <option <?php echo (set_value('CreditHireorVehicleReplacement') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                        <option <?php echo (set_value('CreditHireorVehicleReplacement') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                    </select>
                                                    <?php echo (form_error('CreditHireorVehicleReplacement')) ? '<br>' . form_error('CreditHireorVehicleReplacement', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                    
                                    
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('ClientStatusinAccident')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left">Client Status in Accident</label>
                                                <div class="col-md-8" style="">
                                                    <select name="ClientStatusinAccident" class="form-control">
                                                        <option value="">Select Client Status in Accident </option>
                                                        <option <?php echo (set_value('ClientStatusinAccident') == "Driver") ? "selected" : ""; ?> value="Driver">Driver</option>
                                                        <option <?php echo (set_value('ClientStatusinAccident') == "Passenger") ? "selected" : ""; ?> value="Passenger">Passenger</option>
                                                        <option <?php echo (set_value('ClientStatusinAccident') == "Pedestrian") ? "selected" : ""; ?> value="Pedestrian">Pedestrian</option>
                                                        <option <?php echo (set_value('ClientStatusinAccident') == "Cyclist") ? "selected" : ""; ?> value="Cyclist">Cyclist</option>
                                                        <option <?php echo (set_value('ClientStatusinAccident') == "Victim") ? "selected" : ""; ?> value="Victim">Victim</option>
                                                    </select>
                                                    <?php echo (form_error('ClientStatusinAccident')) ? '<br>' . form_error('ClientStatusinAccident', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('Isthisalinkedpassenger')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left">Is this a Linked Passenger</label>
                                                <div class="col-md-8" style="">
                                                    <select name="Isthisalinkedpassenger" class="form-control">
                                                        <option value="">Select Is this a Linked Passenger</option>
                                                        <option <?php echo (set_value('Isthisalinkedpassenger') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                        <option <?php echo (set_value('Isthisalinkedpassenger') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                    </select>
                                                    <?php echo (form_error('Isthisalinkedpassenger')) ? '<br>' . form_error('Isthisalinkedpassenger', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                        
                                    
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Passengers Information </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('number_of_passengers')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left;">Number of Passengers</label>
                                                    
                                                    <div class="col-md-10" style="">
                                                        <input class="form-control" placeholder="Enter Number of Passengers" name="number_of_passengers" id="number_of_passengers" value="<?php echo set_value('number_of_passengers'); ?>">
                                                        <?php echo (form_error('number_of_passengers')) ? '<br>' . form_error('number_of_passengers', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    
                                    <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1); margin-bottom: 10px;">
                                    
                                    <div class="col-md-12" style="padding: 0px;">
                                        <p style="font-weight: 500; color: black; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Passengers 1 </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_1')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 1</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 1" name="passenger_1" id="Passenger_1" value="<?php echo set_value('passenger_1'); ?>">
                                                        <?php echo (form_error('passenger_1')) ? '<br>' . form_error('passenger_1', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_1_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 1 Relationship</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 1 Relationship" name="passenger_1_relationship" id="passenger_1_relationship" value="<?php echo set_value('passenger_1_relationship'); ?>">
                                                        <?php echo (form_error('passenger_1_relationship')) ? '<br>' . form_error('passenger_1_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_1_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 1 Date of Birth</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 1 Date of Birth" name="passenger_1_date_of_birth" id="passenger_1_date_of_birth" value="<?php echo set_value('passenger_1_date_of_birth'); ?>">
                                                        <?php echo (form_error('passenger_1_date_of_birth')) ? '<br>' . form_error('passenger_1_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_1_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 1 Position In Car</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="passenger_1_position_in_car" id="passenger_1_position_in_car" class="form-control">
                                                            
                                                            <option value="">Position In Car</option>
                                                            <option <?php echo (set_value('passenger_1_position_in_car') == "FRONT SEAT") ? "selected" : ""; ?> value="FRONT SEAT">FRONT SEAT</option>
                                                            <option <?php echo (set_value('passenger_1_position_in_car') == "BACK RIGHT WINDOW SEAT") ? "selected" : ""; ?> value="BACK RIGHT WINDOW SEAT">BACK RIGHT WINDOW SEAT</option>
                                                            <option <?php echo (set_value('passenger_1_position_in_car') == "BACK LEFT WINDOW SEAT") ? "selected" : ""; ?> value="BACK LEFT WINDOW SEAT">BACK LEFT WINDOW SEAT</option>
                                                            <option <?php echo (set_value('passenger_1_position_in_car') == "BACK MIDDLE") ? "selected" : ""; ?> value="BACK MIDDLE">BACK MIDDLE</option>
                                                            
                                                        </select>
                                                        
                                                         <?php echo (form_error('passenger_1_position_in_car')) ? '<br>' . form_error('passenger_1_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1); margin-bottom: 10px;">

                                    <div class="col-md-12" style="padding: 0px;">
                                        <p style="font-weight: 500; color: black; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Passengers 2 </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 2</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 2" name="passenger_2" id="passenger_2" value="<?php echo set_value('passenger_2'); ?>">
                                                        <?php echo (form_error('passenger_2')) ? '<br>' . form_error('passenger_2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_2_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 2 Relationship</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 2 Relationship" name="passenger_2_relationship" id="passenger_2_relationship" value="<?php echo set_value('passenger_2_relationship'); ?>">
                                                        <?php echo (form_error('passenger_2_relationship')) ? '<br>' . form_error('passenger_2_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_2_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 2 Date of Birth</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 2 Date of Birth" name="passenger_2_date_of_birth" id="passenger_2_date_of_birth" value="<?php echo set_value('passenger_2_date_of_birth'); ?>">
                                                        <?php echo (form_error('passenger_2_date_of_birth')) ? '<br>' . form_error('passenger_2_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_2_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 2 Position In Car</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="passenger_2_position_in_car" id="passenger_2_position_in_car" class="form-control">
                                                            
                                                            <option value="">Position In Car</option>
                                                            <option <?php echo (set_value('passenger_2_position_in_car') == "FRONT SEAT") ? "selected" : ""; ?> value="FRONT SEAT">FRONT SEAT</option>
                                                            <option <?php echo (set_value('passenger_2_position_in_car') == "BACK RIGHT WINDOW SEAT") ? "selected" : ""; ?> value="BACK RIGHT WINDOW SEAT">BACK RIGHT WINDOW SEAT</option>
                                                            <option <?php echo (set_value('passenger_2_position_in_car') == "BACK LEFT WINDOW SEAT") ? "selected" : ""; ?> value="BACK LEFT WINDOW SEAT">BACK LEFT WINDOW SEAT</option>
                                                            <option <?php echo (set_value('passenger_2_position_in_car') == "BACK MIDDLE") ? "selected" : ""; ?> value="BACK MIDDLE">BACK MIDDLE</option>

                                                        </select>
                                                        
                                                         <?php echo (form_error('passenger_2_position_in_car')) ? '<br>' . form_error('passenger_2_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    
                                    <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1); margin-bottom: 10px;">
                                    
                                    <div class="col-md-12" style="padding: 0px;">
                                        <p style="font-weight: 500; color: black; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Passengers 3 </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_3')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 3</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 3" name="passenger_3" id="passenger_3" value="<?php echo set_value('passenger_3'); ?>">
                                                        <?php echo (form_error('passenger_3')) ? '<br>' . form_error('passenger_3', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_3_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 3 Relationship</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 3 Relationship" name="passenger_3_relationship" id="passenger_3_relationship" value="<?php echo set_value('passenger_3_relationship'); ?>">
                                                        <?php echo (form_error('passenger_3_relationship')) ? '<br>' . form_error('passenger_3_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_3_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 3 Date of Birth</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 3 Date of Birth" name="passenger_3_date_of_birth" id="passenger_3_date_of_birth" value="<?php echo set_value('passenger_3_date_of_birth'); ?>">
                                                        <?php echo (form_error('passenger_3_date_of_birth')) ? '<br>' . form_error('passenger_3_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_3_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 3 Position In Car</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="passenger_3_position_in_car" id="passenger_3_position_in_car" class="form-control">
                                                            
                                                            <option value="">Position In Car</option>
                                                            <option <?php echo (set_value('passenger_3_position_in_car') == "FRONT SEAT") ? "selected" : ""; ?> value="FRONT SEAT">FRONT SEAT</option>
                                                            <option <?php echo (set_value('passenger_3_position_in_car') == "BACK RIGHT WINDOW SEAT") ? "selected" : ""; ?> value="BACK RIGHT WINDOW SEAT">BACK RIGHT WINDOW SEAT</option>
                                                            <option <?php echo (set_value('passenger_3_position_in_car') == "BACK LEFT WINDOW SEAT") ? "selected" : ""; ?> value="BACK LEFT WINDOW SEAT">BACK LEFT WINDOW SEAT</option>
                                                            <option <?php echo (set_value('passenger_3_position_in_car') == "BACK MIDDLE") ? "selected" : ""; ?> value="BACK MIDDLE">BACK MIDDLE</option>

                                                        </select>
                                                        
                                                         <?php echo (form_error('passenger_3_position_in_car')) ? '<br>' . form_error('passenger_3_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1); margin-bottom: 10px;">

                                    <div class="col-md-12" style="padding: 0px;">
                                        <p style="font-weight: 500; color: black; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Passengers 4 </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_4')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 4</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 4" name="passenger_4" id="passenger_4" value="<?php echo set_value('passenger_4'); ?>">
                                                        <?php echo (form_error('passenger_4')) ? '<br>' . form_error('passenger_4', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_4_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 4 Relationship</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 4 Relationship" name="passenger_4_relationship" id="passenger_4_relationship" value="<?php echo set_value('passenger_4_relationship'); ?>">
                                                        <?php echo (form_error('passenger_4_relationship')) ? '<br>' . form_error('passenger_4_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_4_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 4 Date of Birth</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 4 Date of Birth" name="passenger_4_date_of_birth" id="passenger_4_date_of_birth" value="<?php echo set_value('passenger_4_date_of_birth'); ?>">
                                                        <?php echo (form_error('passenger_4_date_of_birth')) ? '<br>' . form_error('passenger_4_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_4_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 4 Position In Car</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="passenger_4_position_in_car" id="passenger_4_position_in_car" class="form-control">
                                                            
                                                            <option value="">Position In Car</option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "FRONT SEAT") ? "selected" : ""; ?> value="FRONT SEAT">FRONT SEAT</option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "BACK RIGHT WINDOW SEAT") ? "selected" : ""; ?> value="BACK RIGHT WINDOW SEAT">BACK RIGHT WINDOW SEAT</option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "BACK LEFT WINDOW SEAT") ? "selected" : ""; ?> value="BACK LEFT WINDOW SEAT">BACK LEFT WINDOW SEAT</option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "BACK MIDDLE") ? "selected" : ""; ?> value="BACK MIDDLE">BACK MIDDLE</option>

                                                        </select>
                                                        
                                                         <?php echo (form_error('passenger_4_position_in_car')) ? '<br>' . form_error('passenger_4_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1); margin-bottom: 10px;">
                                    
                                    <div class="col-md-12" style="padding: 0px;">
                                        <p style="font-weight: 500; color: black; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Passengers 5 </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_5')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 5</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 5" name="passenger_5" id="passenger_5" value="<?php echo set_value('passenger_5'); ?>">
                                                        <?php echo (form_error('passenger_5')) ? '<br>' . form_error('passenger_5', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_5_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 5 Relationship</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 5 Relationship" name="passenger_5_relationship" id="passenger_5_relationship" value="<?php echo set_value('passenger_5_relationship'); ?>">
                                                        <?php echo (form_error('passenger_5_relationship')) ? '<br>' . form_error('passenger_5_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_5_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 5 Date of Birth</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 5 Date of Birth" name="passenger_5_date_of_birth" id="passenger_5_date_of_birth" value="<?php echo set_value('passenger_5_date_of_birth'); ?>">
                                                        <?php echo (form_error('passenger_5_date_of_birth')) ? '<br>' . form_error('passenger_5_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_5_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 5 Position In Car</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="passenger_5_position_in_car" id="passenger_5_position_in_car" class="form-control">
                                                            
                                                            <option value="">Position In Car</option>
                                                            <option <?php echo (set_value('passenger_5_position_in_car') == "FRONT SEAT") ? "selected" : ""; ?> value="FRONT SEAT">FRONT SEAT</option>
                                                            <option <?php echo (set_value('passenger_5_position_in_car') == "BACK RIGHT WINDOW SEAT") ? "selected" : ""; ?> value="BACK RIGHT WINDOW SEAT">BACK RIGHT WINDOW SEAT</option>
                                                            <option <?php echo (set_value('passenger_5_position_in_car') == "BACK LEFT WINDOW SEAT") ? "selected" : ""; ?> value="BACK LEFT WINDOW SEAT">BACK LEFT WINDOW SEAT</option>
                                                            <option <?php echo (set_value('passenger_5_position_in_car') == "BACK MIDDLE") ? "selected" : ""; ?> value="BACK MIDDLE">BACK MIDDLE</option>

                                                        </select>
                                                        
                                                         <?php echo (form_error('passenger_5_position_in_car')) ? '<br>' . form_error('passenger_5_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1); margin-bottom: 10px;">

                                    <div class="col-md-12" style="padding: 0px;" >
                                        <p style="font-weight: 500; color: black; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Passengers 6 </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_6')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 6</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 6" name="passenger_6" id="passenger_6" value="<?php echo set_value('passenger_6'); ?>">
                                                        <?php echo (form_error('passenger_6')) ? '<br>' . form_error('passenger_6', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_6_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 6 Relationship</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 6 Relationship" name="passenger_6_relationship" id="passenger_6_relationship" value="<?php echo set_value('passenger_6_relationship'); ?>">
                                                        <?php echo (form_error('passenger_6_relationship')) ? '<br>' . form_error('passenger_6_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_6_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 6 Date of Birth</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 6 Date of Birth" name="passenger_6_date_of_birth" id="passenger_6_date_of_birth" value="<?php echo set_value('passenger_6_date_of_birth'); ?>">
                                                        <?php echo (form_error('passenger_6_date_of_birth')) ? '<br>' . form_error('passenger_6_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_6_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 6 Position In Car</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="passenger_6_position_in_car" id="passenger_6_position_in_car" class="form-control">
                                                            
                                                            <option value="">Position In Car</option>
                                                            <option <?php echo (set_value('passenger_6_position_in_car') == "FRONT SEAT") ? "selected" : ""; ?> value="FRONT SEAT">FRONT SEAT</option>
                                                            <option <?php echo (set_value('passenger_6_position_in_car') == "BACK RIGHT WINDOW SEAT") ? "selected" : ""; ?> value="BACK RIGHT WINDOW SEAT">BACK RIGHT WINDOW SEAT</option>
                                                            <option <?php echo (set_value('passenger_6_position_in_car') == "BACK LEFT WINDOW SEAT") ? "selected" : ""; ?> value="BACK LEFT WINDOW SEAT">BACK LEFT WINDOW SEAT</option>
                                                            <option <?php echo (set_value('passenger_6_position_in_car') == "BACK MIDDLE") ? "selected" : ""; ?> value="BACK MIDDLE">BACK MIDDLE</option>

                                                        </select>
                                                        
                                                         <?php echo (form_error('passenger_6_position_in_car')) ? '<br>' . form_error('passenger_6_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                
                                
                                <hr style="margin-top: 0px; margin-bottom: 10px;">


                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> EL ONLY </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">                                
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('WasAccidentreportedorrecordedintheaccidentBook')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Was the Accident reported in the accident book?</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="WasAccidentreportedorrecordedintheaccidentBook" class="form-control">
                                                            <option value="">Select Accident Reported</option>
                                                            <option <?php echo (set_value('WasAccidentreportedorrecordedintheaccidentBook') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('WasAccidentreportedorrecordedintheaccidentBook') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('WasAccidentreportedorrecordedintheaccidentBook')) ? '<br>' . form_error('WasAccidentreportedorrecordedintheaccidentBook', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('EmployersName-Address-TelephoneNumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Employers Name, Address, Telephone Number</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea name="EmployersName-Address-TelephoneNumber" class="form-control" rows="5" style="resize: none" placeholder="Enter Employers Name, Address, Telephone Number"><?php echo set_value('EmployersName-Address-TelephoneNumber'); ?></textarea>
                                                        <?php echo (form_error('EmployersName-Address-TelephoneNumber')) ? '<br>' . form_error('EmployersName-Address-TelephoneNumber', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>                                    
                                    </div>                                    
                                    
                                </div>                                
                                
                                <hr style="margin-top: 0px; margin-bottom: 10px;">


                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> OL/PL ONLY </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('OLPLONLY')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">OL PL ONLY</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea name="OLPLONLY" rows="5" style="resize: none" class="form-control" placeholder="Enter How long has the defect been there"><?php echo set_value('OLPLONLY'); ?></textarea>
                                                        <?php echo (form_error('OLPLONLY')) ? '<br>' . form_error('OLPLONLY', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                        </div>                                
                                    </div>                                
                                </div>                                

                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> MED NEG ONLY </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('MedNegOnly')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Med Neg Only</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea name="MedNegOnly" class="form-control" rows="5" style="resize: none" placeholder="Enter Full Details of Hospital or Doctor to blame. Including their contact details."><?php echo set_value('MedNegOnly'); ?></textarea>
                                                        <?php echo (form_error('MedNegOnly')) ? '<br>' . form_error('MedNegOnly', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Vehicle Details  </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('ClientCarRegistration')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Client Vehicle Registration</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="ClientCarRegistration" value="<?php echo set_value('ClientCarRegistration'); ?>" class="form-control" placeholder="Enter Client Car Registration"> 
                                                        <?php echo (form_error('ClientCarRegistration')) ? '<br>' . form_error('ClientCarRegistration', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('ClientCarMakeModel')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Client Vehicle Make Model</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="ClientCarMakeModel" type="text" class="form-control" value="<?php echo set_value('ClientCarMakeModel'); ?>" placeholder="Enter Client Car Make Model">
                                                        <?php echo (form_error('ClientCarMakeModel')) ? '<br>' . form_error('ClientCarMakeModel', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('ClientInsurer')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Client Insurer</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="ClientInsurer" value="<?php echo set_value('ClientInsurer'); ?>" class="form-control" placeholder="Enter Client Insurer"> 
                                                        <?php echo (form_error('ClientInsurer')) ? '<br>' . form_error('ClientInsurer', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('ClientPolicyNumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Client Policy Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="ClientPolicyNumber" type="text" value="<?php echo set_value('ClientPolicyNumber'); ?>" class="form-control" placeholder="Enter Client Policy Number">
                                                        <?php echo (form_error('ClientPolicyNumber')) ? '<br>' . form_error('ClientPolicyNumber', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('HowmanyOccupantsinthevehicle')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">How many Occupants were in your vehicle ?</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="HowmanyOccupantsinthevehicle" value="<?php echo set_value('HowmanyOccupantsinthevehicle'); ?>" class="form-control" placeholder="Enter How many Occupants in the vehicle">
                                                        <?php echo (form_error('HowmanyOccupantsinthevehicle')) ? '<br>' . form_error('HowmanyOccupantsinthevehicle', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Doyouhaveaccesstothedetailsofthepartyyoublame')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Do you have access to the details of the party you blame?</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="Doyouhaveaccesstothedetailsofthepartyyoublame" class="form-control">
                                                            <option value="">Select Details of the party you blame</option>
                                                            <option  <?php echo (set_value('Doyouhaveaccesstothedetailsofthepartyyoublame') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('Doyouhaveaccesstothedetailsofthepartyyoublame') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('Doyouhaveaccesstothedetailsofthepartyyoublame')) ? '<br>' . form_error('Doyouhaveaccesstothedetailsofthepartyyoublame', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">


                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('TPCarRegistration')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">TP Car Registration</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="TPCarRegistration" value="<?php echo set_value('TPCarRegistration'); ?>" class="form-control" placeholder="Enter TP Car Registration"> 
                                                        <?php echo (form_error('TPCarRegistration')) ? '<br>' . form_error('TPCarRegistration', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('TPCarMakeModel')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">TP Car Make Model</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="TPCarMakeModel" type="text" value="<?php echo set_value('TPCarMakeModel'); ?>" class="form-control" placeholder="Enter TP Car Make Model">
                                                        <?php echo (form_error('TPCarMakeModel')) ? '<br>' . form_error('TPCarMakeModel', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">


                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('TPInsurerDetailsName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">TP Insurer Details-Name</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="TPInsurerDetailsName" class="form-control" placeholder="Enter TP Insurer Details-Name" value="<?php echo set_value('TPInsurerDetailsName'); ?>">
                                                        <?php echo (form_error('TPInsurerDetailsName')) ? '<br>' . form_error('TPInsurerDetailsName', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('ThirdpartypolicyNumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">TP Policy Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="ThirdpartypolicyNumber" class="form-control" placeholder="Enter TP Policy Number" value="<?php echo set_value('ThirdpartypolicyNumber'); ?>">
                                                        <?php echo (form_error('ThirdpartypolicyNumber')) ? '<br>' . form_error('ThirdpartypolicyNumber', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>


                                </div>                                

                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Injury Details  </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('WhatInjuriesdidyousuffer')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">What Injuries did you suffer?</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" style="resize: none" name="WhatInjuriesdidyousuffer" class="form-control" placeholder="Enter Injuries"><?php echo set_value('WhatInjuriesdidyousuffer'); ?></textarea>
                                                        <?php echo (form_error('WhatInjuriesdidyousuffer')) ? '<br>' . form_error('WhatInjuriesdidyousuffer', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">


                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('IsInjuryOngoingInjury-Physio')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Is the Injury Ongoing?</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="IsInjuryOngoingInjury-Physio" class="form-control">
                                                            <option value="">Select Injury Ongoing Injury-Physio</option>
                                                            <option <?php echo (set_value('IsInjuryOngoingInjury-Physio') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('IsInjuryOngoingInjury-Physio') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('IsInjuryOngoingInjury-Physio')) ? '<br>' . form_error('IsInjuryOngoingInjury-Physio', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('DidyouseekMedicalAttention')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Did you seek Medical Attention</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="DidyouseekMedicalAttention" class="form-control">
                                                            <option value="">Select Medical Attention</option>
                                                            <option <?php echo (set_value('DidyouseekMedicalAttention') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('DidyouseekMedicalAttention') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('DidyouseekMedicalAttention')) ? '<br>' . form_error('DidyouseekMedicalAttention', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

<!--                                            <div class="col-md-6">
                                                <div class="form-group <?php // echo (form_error('EmployersName-Address-TelephoneNumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">GP Details</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea name="EmployersName-Address-TelephoneNumber" class="form-control" rows="5" style="resize: none" placeholder="Enter Employers Name, Address, Telephone Number"><?php echo set_value('EmployersName-Address-TelephoneNumber'); ?></textarea>
                                                        <?php // echo (form_error('EmployersName-Address-TelephoneNumber')) ? '<br>' . form_error('EmployersName-Address-TelephoneNumber', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>-->

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('Additionalnotes')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Additional Notes</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea name="Additionalnotes" rows="5" style="resize: none" class="form-control" placeholder="Enter Additional Notes"><?php echo set_value('Additionalnotes'); ?></textarea>
                                                        <?php echo (form_error('Additionalnotes')) ? '<br>' . form_error('Additionalnotes', "<b class='text-danger'>", '</b>') : ''; ?>                                              
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
                                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> OFFICE USE ONLY  </p>
                                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                        </div>
                                    </div>

                                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                        <div class="row">
                                            <div class="col-md-12">


                                                <div class="col-md-6">
                                                    <div class="form-group <?php echo (form_error('marketing_source')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left">Marketing Source</label>
                                                        <div class="col-md-8" style="">
                                                            <input name="marketing_source" class="form-control" value="<?php echo set_value('marketing_source'); ?>" placeholder="Enter Marketing Source">
                                                            <?php echo (form_error('marketing_source')) ? '<br>' . form_error('marketing_source', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group <?php echo (form_error('replacementInvoiceNumber')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left">Replacement Invoice Number</label>
                                                        <div class="col-md-8" style="">
                                                            <input name="replacementInvoiceNumber" class="form-control" value="<?php echo set_value('replacementInvoiceNumber'); ?>" placeholder="Enter Replacement Invoice Number">
                                                            <?php echo (form_error('replacementInvoiceNumber')) ? '<br>' . form_error('replacementInvoiceNumber', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">

                                                <!--Interpreter Name Field-->

                                                <div class="col-md-6">
                                                    <div class="form-group <?php echo (form_error('InterpreterName')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left">Interpreter Name</label>
                                                        <div class="col-md-8" style="">
                                                            <select name="InterpreterName" class="form-control">
                                                                <option value="">Select Interpreter Name</option>
                                                                <option <?php echo (set_value('InterpreterName') == "Nishma") ? "selected" : ""; ?> value="Nishma">Nishma</option>
                                                                <option <?php echo (set_value('InterpreterName') == "Aisha") ? "selected" : ""; ?> value="Aisha">Aisha</option>
                                                                <option <?php echo (set_value('InterpreterName') == "Haider") ? "selected" : ""; ?> value="Haider">Haider</option>
                                                                <option <?php echo (set_value('InterpreterName') == "Waqas") ? "selected" : ""; ?> value="Waqas">Waqas</option>
                                                                <option <?php echo (set_value('InterpreterName') == "Shaz") ? "selected" : ""; ?> value="Shaz">Shaz</option>
                                                            </select>
                                                            <?php echo (form_error('InterpreterName')) ? '<br>' . form_error('InterpreterName', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <!--Interpreter Paid Field-->                                            

                                                <div class="col-md-6">
                                                    <div class="form-group <?php echo (form_error('Interpreterpaid')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left">Interpreter Paid</label>
                                                        <div class="col-md-8" style="">
                                                            <select name="Interpreterpaid" class="form-control">
                                                                <option value="">Select Interpreter Paid</option>
                                                                <option <?php echo (set_value('Interpreterpaid') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                                <option <?php echo (set_value('Interpreterpaid') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            </select>
                                                            <?php echo (form_error('Interpreterpaid')) ? '<br>' . form_error('Interpreterpaid', "<b class='text-danger'>", '</b>') : ''; ?>  
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


