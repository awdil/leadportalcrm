
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

            <h4 class="page-title">Add CICA Lead</h4> </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Add CICA Lead</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">CICA Claim Form</div>
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

                        <form action="<?php echo base_url('Mod/createCICALead/') . $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                           <?php  if ($this->input->post('clone') == "clone" || $this->session->userdata('clone')): ?>
                                <input type="hidden" name="clone" value="clone">                                
                           <?php endif; ?> 
                            
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
                                        </div>
                                    </div>                              
    
                                </div>
                                <!--< ROW 5 >-->  
                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> About You </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">                                 <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('applyingfor')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">What are you applying for?</label>
                                                    <div class="col-md-12" style="">
                                                        <select name="applyingfor" class="form-control">
                                                            <option <?php echo (set_value('applyingfor') == "I am applying because of a single incident") ? "selected" : ""; ?> value="I am applying because of a single incident">I am applying because of a single incident</option>
                                                            <option <?php echo (set_value('applyingfor') == "I am applying because of a period of abuse") ? "selected" : ""; ?> value="I am applying because of a period of abuse">I am applying because of a period of abuse</option>
                                                            <option <?php echo (set_value('applyingfor') == " I am applying because someone has died") ? "selected" : ""; ?> value="I am applying because someone has died">I am applying because someone has died</option>
                                                        </select>
                                                        <?php echo (form_error('applyingfor')) ? '<br>' . form_error('applyingfor', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('ClientPolicyNumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">If client is under 18, please provide full details of the person who has full parental access</label>
                                                    <div class="col-md-12" style="">
                                                        <input type="text" name="ClientPolicyNumber" value="<?php echo set_value('ClientPolicyNumber'); ?>" class="form-control" placeholder="If client is under 18, please provide full details of the person who has full parental access">
                                                        <?php echo (form_error('ClientPolicyNumber')) ? '<br>' . form_error('ClientPolicyNumber', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('Whatwastheexactlocationoftheaccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Are you the injured person?</label>
                                                    <div class="col-md-12" style="">
                                                        <select name="Whatwastheexactlocationoftheaccident" class="form-control">
                                                            <option <?php echo (set_value('Whatwastheexactlocationoftheaccident') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('Whatwastheexactlocationoftheaccident') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('Whatwastheexactlocationoftheaccident')) ? '<br>' . form_error('Whatwastheexactlocationoftheaccident', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('Whodoyoublamefortheaccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Are you using a representative?</label>
                                                    <div class="col-md-12" style="">
                                                        <select name="Whodoyoublamefortheaccident" class="form-control">
                                                            <option  <?php echo (set_value('Whodoyoublamefortheaccident') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('Whodoyoublamefortheaccident') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('Whodoyoublamefortheaccident')) ? '<br>' . form_error('Whodoyoublamefortheaccident', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('Whatwastheweatherlike')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Full Representatives Details (Our Details)</label>
                                                    <div class="col-md-12" style="">
                                                        <textarea rows="5" style="resize: none" name="Whatwastheweatherlike" placeholder="Full Representatives Details (Our Details)" class="form-control"><?php echo set_value('Whatwastheweatherlike'); ?></textarea>
                                                        <?php echo (form_error('Whatwastheweatherlike')) ? '<br>' . form_error('Whatwastheweatherlike', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>  
                                    <div class="row">
                                        <div class="col-md-12">
  
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('passenger_1')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left;">On the date of the incident giving rise to the criminal injury I was ordinarily resident in the United Kingdom.</label>

                                                        <div class="col-md-12" style="">
                                                            <select name="passenger_1" id="passenger_1" class="form-control">
                                                                <option <?php echo (set_value('passenger_1') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                                <option <?php echo (set_value('passenger_1') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            </select>
                                                            <?php echo (form_error('passenger_1')) ? '<br>' . form_error('passenger_1', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('passenger_1_position_in_car')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left;">On the date of the incident giving rise to the criminal injury I was a close relative of a British citizen.:</label>

                                                        <div class="col-md-12" style="">

                                                            <select name="passenger_1_position_in_car" id="passenger_1_position_in_car" class="form-control">
                                                                <option <?php echo (set_value('passenger_1_position_in_car') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                                <option <?php echo (set_value('passenger_1_position_in_car') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            </select>

                                                             <?php echo (form_error('passenger_1_position_in_car')) ? '<br>' . form_error('passenger_1_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('deferYourApplication')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left;">Would you like us to defer your application while your status is determined?</label>

                                                        <div class="col-md-12" style="">

                                                            <select name="deferYourApplication" id="deferYourApplication" class="form-control">
                                                                <option <?php echo (set_value('deferYourApplication') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                                <option <?php echo (set_value('deferYourApplication') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            </select>

                                                             <?php echo (form_error('deferYourApplication')) ? '<br>' . form_error('deferYourApplication', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('passenger_1_relationship')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left;">I am, or have applied to be, a person identified as a victim of human trafficking by a competent authority for the purpose of the Council of Europe Convention against Trafficking in Human Beings (CETS no. 197, 2005)</label>

                                                        <div class="col-md-12" style="">
                                                            <select name="passenger_1_position_in_car"  class="form-control">
                                                                <option <?php echo (set_value('passenger_1_relationship') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                                <option <?php echo (set_value('passenger_1_relationship') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            </select>
                                                            <?php echo (form_error('passenger_1_relationship')) ? '<br>' . form_error('passenger_1_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('passenger_1_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left;">Would you like us to defer your application while your status is determined?</label>

                                                        <div class="col-md-12" style="">
                                                            <select name="passenger_1_date_of_birth"  class="form-control">
                                                                <option <?php echo (set_value('passenger_1_date_of_birth') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                                <option <?php echo (set_value('passenger_1_date_of_birth') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            </select>
                                                            <?php echo (form_error('passenger_1_date_of_birth')) ? '<br>' . form_error('passenger_1_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                        </div>

                                                    </div>
                                                </div>

                                                

                                            </div>
                                        </div>
                                           

                                        </div>                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('Werethepoliceinvolved')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-12" style="text-align: left">On the date of the incident giving rise to the criminal injury I was a British citizen.</label>
                                                <div class="col-md-12" style="">
                                                    <select class="form-control" name="Werethepoliceinvolved">
                                                        <option value="">Select Were the Police Involved</option>
                                                        <option <?php echo (set_value('Werethepoliceinvolved') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                        <option <?php echo (set_value('Werethepoliceinvolved') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                    </select>
                                                    <?php echo (form_error('Werethepoliceinvolved')) ? '<br>' . form_error('Werethepoliceinvolved', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                </div>
                                            </div>
                                        </div>
   
                                    </div>
                                    </div>
                                </div>
                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Incident Details </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                <div class="row">
                                <div class="col-md-12">
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('DateofAccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Date of Incident</label>
                                                    <div class="col-md-12" style="">
                                                        <input name="DateofAccident" class="form-control" id="passenger_1_date_of_birth" value="<?php echo set_value('DateofAccident'); ?>" placeholder="Enter Date">
                                                        <?php echo (form_error('DateofAccident')) ? '<br>' . form_error('DateofAccident', "<b class='text-danger'>", '</b>') : ''; ?>                                                 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('TimeofAccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Time of Incident</label>
                                                    <div class="col-md-12" style="">
                                                        <input name="TimeofAccident" id="TimeofAccident" class="form-control" value="<?php echo set_value('TimeofAccident'); ?>" placeholder="Enter Time of Accident">                                                 
                                                        <?php echo (form_error('TimeofAccident')) ? '<br>' . form_error('TimeofAccident', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>                                        
                                </div> 
                                <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('OLPLONLY')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Full address of Incident</label>
                                                    <div class="col-md-12" style="">
                                                        <textarea name="OLPLONLY" rows="5" style="resize: none" class="form-control" placeholder="Full address of Incident"><?php echo set_value('OLPLONLY'); ?></textarea>
                                                        <?php echo (form_error('OLPLONLY')) ? '<br>' . form_error('OLPLONLY', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                        </div>                                
                                    </div>
                                <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('MedNegOnly')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">What was the cause of your injuries?</label>
                                                    <div class="col-md-12" style="">
                                                        <textarea name="MedNegOnly" class="form-control" rows="5" style="resize: none" placeholder="Enter What was the cause of your injuries?"><?php echo set_value('MedNegOnly'); ?></textarea>
                                                        <?php echo (form_error('MedNegOnly')) ? '<br>' . form_error('MedNegOnly', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    <div class="col-md-12">
                                     <div class="col-md-12">    
                                    <div class="form-group <?php echo (form_error('DetailsofTheIncident')) ? 'has-error' : ''; ?> ">
                                        <label class="control-label col-md-12" style="text-align: left">Please provide brief details of the incident</label>
                                            <div class="col-md-12" style="">
                                                <textarea name="DetailsofTheIncident" class="form-control" rows="5" style="resize: none" placeholder="Please provide brief details of the incident"><?php echo set_value('DetailsofTheIncident'); ?></textarea>
                                                <?php echo (form_error('DetailsofTheIncident')) ? '<br>' . form_error('DetailsofTheIncident', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('InWhichCountry')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-12" style="text-align: left">In which country did the incident take place?</label>
                                                <div class="col-md-12" style="">
                                                    <select class="form-control" name="InWhichCountry" id="InWhichCountry">
                                                            <option  <?php echo (set_value('CountryofAccident') == "England") ? "selected" : ""; ?> value="England">England</option>
                                                            <option  <?php echo (set_value('CountryofAccident') == "Wales") ? "selected" : ""; ?> value="Wales">Wales</option>
                                                            <option  <?php echo (set_value('CountryofAccident') == "Other") ? "selected" : ""; ?> value="Other">Other</option>
                                                            <option  <?php echo (set_value('CountryofAccident') == "Scotland") ? "selected" : ""; ?> value="Scotland">Scotland</option>
                                                        </select>
                                                    <?php echo (form_error('InWhichCountry')) ? '<br>' . form_error('InWhichCountry', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('CreditHireorVehicleReplacement')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-12" style="text-align: left">Were you and the assailant living together as members of the same family when the incident took place?</label>
                                                <div class="col-md-12" style="">
                                                    <select name="CreditHireorVehicleReplacement" class="form-control">
                                                       
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
                                    
                                    
                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('ClientStatusinAccident')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-12" style="text-align: left">Are you and the assailant still living together as members of the same family?</label>
                                                <div class="col-md-12" style="">
                                                    <select name="ClientStatusinAccident" class="form-control">
                                                       
                                                        <option <?php echo (set_value('ClientStatusinAccident') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                        <option <?php echo (set_value('ClientStatusinAccident') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                    </select>
                                                    <?php echo (form_error('ClientStatusinAccident')) ? '<br>' . form_error('ClientStatusinAccident', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Police Details </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                <div class="row">
                                 <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('Isthisalinkedpassenger')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-12" style="text-align: left">Was the incident reported to the police?</label>
                                                <div class="col-md-12" style="">
                                                    <select name="Isthisalinkedpassenger" class="form-control">
                                                        <option <?php echo (set_value('Isthisalinkedpassenger') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                        <option <?php echo (set_value('Isthisalinkedpassenger') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                    </select>
                                                    <?php echo (form_error('Isthisalinkedpassenger')) ? '<br>' . form_error('Isthisalinkedpassenger', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('WasAccidentreportedorrecordedintheaccidentBook')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Who was the incident reported to?</label>
                                                    <div class="col-md-12" style="">
                                                        <select name="WasAccidentreportedorrecordedintheaccidentBook" class="form-control">
                                                            <option <?php echo (set_value('WasAccidentreportedorrecordedintheaccidentBook') == "No-one") ? "selected" : ""; ?> value="No-one">No-one</option>
                                                            <option <?php echo (set_value('WasAccidentreportedorrecordedintheaccidentBook') == "Another person or authority") ? "selected" : ""; ?> value="Another person or authority">Another person or authority</option>
                                                        </select>
                                                        <?php echo (form_error('WasAccidentreportedorrecordedintheaccidentBook')) ? '<br>' . form_error('WasAccidentreportedorrecordedintheaccidentBook', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Date and time incident was reported</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Enter" name="passenger_2" id="passenger_2" value="<?php echo set_value('passenger_2'); ?>">
                                                        <?php echo (form_error('passenger_2')) ? '<br>' . form_error('passenger_2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_2_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Please advise which police force the incident was reported to</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Enter " name="passenger_2_relationship" id="passenger_2_relationship" value="<?php echo set_value('passenger_2_relationship'); ?>">
                                                        <?php echo (form_error('passenger_2_relationship')) ? '<br>' . form_error('passenger_2_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_2_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Who reported the incident?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Enter " name="passenger_2_date_of_birth" value="<?php echo set_value('passenger_2_date_of_birth'); ?>">
                                                        <?php echo (form_error('passenger_2_date_of_birth')) ? '<br>' . form_error('passenger_2_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_2_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Officers name dealing with the incident</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <input class="form-control" placeholder="Enter " name="passenger_2_position_in_car" value="<?php echo set_value('passenger_2_position_in_car'); ?>">
                                                        
                                                         <?php echo (form_error('passenger_2_position_in_car')) ? '<br>' . form_error('passenger_2_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    
                            
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_3')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Officers ID Number dealing with the incident</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Enter Officers ID Number dealing with the incident" name="passenger_3" value="<?php echo set_value('passenger_3'); ?>">
                                                        <?php echo (form_error('passenger_3')) ? '<br>' . form_error('passenger_3', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_3_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Unique police reference number?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Enter Unique police reference number" name="passenger_3_relationship" id="passenger_3_relationship" value="<?php echo set_value('passenger_3_relationship'); ?>">
                                                        <?php echo (form_error('passenger_3_relationship')) ? '<br>' . form_error('passenger_3_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_3_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Did the police take a statement?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_3_date_of_birth" class="form-control">
                                                            <option <?php echo (set_value('passenger_3_date_of_birth') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('passenger_3_date_of_birth') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('passenger_3_date_of_birth')) ? '<br>' . form_error('passenger_3_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_3_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Has the case gone to court?:</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <select name="passenger_3_position_in_car" class="form-control">
                                                            <option <?php echo (set_value('passenger_3_position_in_car') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('passenger_3_position_in_car') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            <option <?php echo (set_value('passenger_3_position_in_car') == "Don&#039;t know") ? "selected" : ""; ?> value="Don&#039;t know">Don&#039;t know</option>
                                                        </select>
                                                        
                                                         <?php echo (form_error('passenger_3_position_in_car')) ? '<br>' . form_error('passenger_3_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_4')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Is the case going to court?: </label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_4" class="form-control">
                                                            <option <?php echo (set_value('passenger_4') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('passenger_4') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            <option <?php echo (set_value('passenger_4') == "Don&#039;t know") ? "selected" : ""; ?> value="Don&#039;t know">Don&#039;t know</option>
                                                        </select>
                                                        <?php echo (form_error('passenger_4')) ? '<br>' . form_error('passenger_4', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_4_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Has the assailant been identified by the police?: </label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_4_relationship" class="form-control">
                                                            <option <?php echo (set_value('passenger_4_relationship') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('passenger_4_relationship') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('passenger_4_relationship')) ? '<br>' . form_error('passenger_4_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>    
                                    
                                </div>
                                
                                <hr style="margin-top: 0px; margin-bottom: 10px;"> 
                                <div class="col-md-12" style="padding: 0px;"> 
                                    <div class="alert alert-primary" style=" background-color: #2cabe3"> 
                                    <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Injury Details </p> 
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)"> 
                                    </div> 
                                </div> 
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                     <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_4_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Who caused the injuries?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Who caused the injuries?" name="passenger_4_date_of_birth" value="<?php echo set_value('passenger_4_date_of_birth'); ?>">
                                                        <?php echo (form_error('passenger_4_date_of_birth')) ? '<br>' . form_error('passenger_4_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_4_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Have you sought any medical treatment for your injuries?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <select name="passenger_4_position_in_car" class="form-control">
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        
                                                         <?php echo (form_error('passenger_4_position_in_car')) ? '<br>' . form_error('passenger_4_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                   
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_5')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">As a direct result of your injury, did you have no, or a very limited, capacity for paid work for a period exceeding 28 weeks?:</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_5" class="form-control">
                                                            <option <?php echo (set_value('passenger_5') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('passenger_5') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('passenger_5')) ? '<br>' . form_error('passenger_5', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_5_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Please confirm one of the following options: </label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_5_relationship" class="form-control">
                                                            <option <?php echo (set_value('passenger_5_relationship') == "I was in paid work at the date of the incident in") ? "selected" : ""; ?> value="I was in paid work at the date of the incident in">I was in paid work at the date of the incident in</option>
                                                            <option <?php echo (set_value('passenger_5_relationship') == "I was not in paid work at the time of the incident but") ? "selected" : ""; ?> value="I was not in paid work at the time of the incident but">I was not in paid work at the time of the incident but</option>
                                                            <option <?php echo (set_value('passenger_5_relationship') == "I was not in paid work at the time of the incident because I was too young to be in work") ? "selected" : ""; ?> value="I was not in paid work at the time of the incident because I was too young to be in work">I was not in paid work at the time of the incident because I was too young to be in work</option>
                                                            <option <?php echo (set_value('passenger_5_relationship') == "I was not in paid work at the time of the incident because I was in full-time education") ? "selected" : ""; ?> value="I was not in paid work at the time of the incident because I was in full-time education">I was not in paid work at the time of the incident because I was in full-time education</option>
                                                            <option <?php echo (set_value('passenger_5_relationship') == "I was not in paid work at the time of the incident because I had caring responsibilities which required that I take a temporary break from paid employment") ? "selected" : ""; ?> value="I was not in paid work at the time of the incident because I had caring responsibilities which required that I take a temporary break from paid employment">I was not in paid work at the time of the incident because I had caring responsibilities which required that I take a temporary break from paid employment</option>
                                                            
                                                        </select>
                                                        <?php echo (form_error('passenger_5_relationship')) ? '<br>' . form_error('passenger_5_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_5_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">As a direct result of your injury, did you incur costs for ‘special expenses’ such as treatment, care, special equipment?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_5_position_in_car" class="form-control">
                                                            <option <?php echo (set_value('passenger_6') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('passenger_6') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('passenger_5_position_in_car')) ? '<br>' . form_error('passenger_5_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_5_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">If you were off work, when did you go back to work?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <input class="form-control" placeholder="Date of Work" name="passenger_5_date_of_birth" id="passenger_5_date_of_birth" value="<?php echo set_value('passenger_5_date_of_birth'); ?>">
                                                        
                                                         <?php echo (form_error('passenger_5_position_in_car')) ? '<br>' . form_error('passenger_5_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                
                                </div>
                                                                
                                <hr style="margin-top: 0px; margin-bottom: 10px;"> 
                                <div class="col-md-12" style="padding: 0px;"> 
                                    <div class="alert alert-primary" style=" background-color: #2cabe3"> 
                                    <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Medical Details </p> 
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)"> 
                                    </div> 
                                </div> 
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_6')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Are you registered with a GP?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_6" class="form-control">
                                                            <option <?php echo (set_value('passenger_6') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('passenger_6') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('passenger_6')) ? '<br>' . form_error('passenger_6', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('AccidentEmergency?')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Did you go to Accident &amp; Emergency?: </label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="AccidentEmergency" class="form-control">
                                                            <option <?php echo (set_value('AccidentEmergency') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('AccidentEmergency') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('AccidentEmergency')) ? '<br>' . form_error('AccidentEmergency', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_6_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Please advise which hospital you visited</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Please advise which hospital you visited" name="passenger_6_date_of_birth"  value="<?php echo set_value('passenger_6_date_of_birth'); ?>">
                                                        <?php echo (form_error('passenger_6_date_of_birth')) ? '<br>' . form_error('passenger_6_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_6_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Date of visit?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <input class="form-control" placeholder="Date of visit?" name="passenger_6_position_in_car" id="passenger_6_position_in_car" value="<?php echo set_value('passenger_6_date_of_birth'); ?>">
                                                        
                                                         <?php echo (form_error('passenger_6_position_in_car')) ? '<br>' . form_error('passenger_6_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('DidYouVisit')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Did you visit any other treatment providers (e.g. physiotherapist)?</label>
                                                    <div class="col-md-12" style="">
                                                        <select name="DidYouVisit" class="form-control">
                                                            <option <?php echo (set_value('DidYouVisit') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('DidYouVisit') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('DidYouVisit')) ? '<br>' . form_error('DidYouVisit', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('fi_tax_of610')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Please provide details of other treatment providers</label>
                                                    <div class="col-md-12" style="">
                                                        <textarea rows="5" style="resize: none" name="fi_tax_of610" class="form-control" placeholder="Please provide details of other treatment providers"><?php echo set_value('fi_tax_of610'); ?></textarea>
                                                        <?php echo (form_error('fi_tax_of610')) ? '<br>' . form_error('fi_tax_of610', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                
                                
                                <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> CICA Claim Details  </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">


                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('haveYouApplied')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Have you applied to us for compensation before? If yes, Do you know your previous CICA reference number?</label>
                                                    <div class="col-md-12" style="">
                                                        <textarea rows="5" style="resize: none" name="haveYouApplied" class="form-control" placeholder="Have you applied to us for compensation before? If yes, Do you know your previous CICA reference number?"><?php echo set_value('DidYouVisit'); ?></textarea>
                                                        <?php echo (form_error('haveYouApplied')) ? '<br>' . form_error('haveYouApplied', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('DidyouseekMedicalAttention')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">What was your previous CICA reference number?</label>
                                                    <div class="col-md-12" style="">
                                                        <input name="DidyouseekMedicalAttention"  value="<?php echo set_value('DidyouseekMedicalAttention'); ?>"  class="form-control" placeholder="What was your previous CICA reference number?">
                                                        <?php echo (form_error('DidyouseekMedicalAttention')) ? '<br>' . form_error('DidyouseekMedicalAttention', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php  echo (form_error('HaveyouClaimded')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Have you claimed or do you intend to claim compensation from any other source for the same incident? If Yes, What is the name of the person or organisation you are claiming from?</label>
                                                    <div class="col-md-12" style="">
                                                        <textarea name="HaveyouClaimded" class="form-control" rows="5" style="resize: none" placeholder="Have you claimed or do you intend to claim compensation from any other source for the same incident? If Yes, What is the name of the person or organisation you are claiming from?"><?php echo set_value('HaveyouClaimded'); ?></textarea>
                                                        <?php  echo (form_error('HaveyouClaimded')) ? '<br>' . form_error('HaveyouClaimded', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('Additionalnotes')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Date of claim?</label>
                                                    <div class="col-md-12" style="">
                                                        <input name="Additionalnotes"  value="<?php echo set_value('Additionalnotes'); ?>"  class="form-control" placeholder="Date of claim?">
                                                        <?php echo (form_error('Additionalnotes')) ? '<br>' . form_error('Additionalnotes', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                        </div>                                        
                                    </div>                                        

                                    <div class="row">
                                            <div class="col-md-12">


                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('marketing_source')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left">If you haven’t claimed or tried to claim compensation from elsewhere, please explain why?:</label>
                                                        <div class="col-md-12" style="">
                                                            <select name="marketing_source" class="form-control">
                                                               
                                                                <option <?php echo (set_value('marketing_source') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                                <option <?php echo (set_value('marketing_source') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            </select>
                                                            <?php echo (form_error('marketing_source')) ? '<br>' . form_error('marketing_source', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>

                                    </div>
                                
                                <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                   <div class="alert alert-primary" style=" background-color: #2cabe3">
                                      <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Criminal Background </p>
                                      <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                   </div>
                                </div>
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                <div class="row">
                                   <div class="col-md-12">
                                      <div class="form-group <?php echo (form_error('replacementInvoiceNumber')) ? 'has-error' : ''; ?> ">
                                         <label class="control-label col-md-12" style="text-align: left">Do you have any criminal convictions, including simple cautions and reprimands, in the UK or abroad? If Yes, Provide full details including Country, Offernce, Sentence and date of sentence</label>
                                         <div class="col-md-12" style="">
                                            <textarea name="replacementInvoiceNumber" rows="5" style="resize: none" class="form-control" placeholder="Do you have any criminal convictions, including simple cautions and reprimands, in the UK or abroad? If Yes, Provide full details including Country, Offernce, Sentence and date of sentence"><?php echo set_value('replacementInvoiceNumber'); ?></textarea>
                                            <?php echo (form_error('replacementInvoiceNumber')) ? '<br>' . form_error('replacementInvoiceNumber', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                    <div class="row">
                                            <div class="col-md-12">

                                                <!--Interpreter Name Field-->

                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('InterpreterName')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left">Please tell us anything else that you think we need to know</label>
                                                        <div class="col-md-12" style="">
                                                            <textarea name="InterpreterName" class="form-control" placeholder="Enter Details"><?php echo set_value('InterpreterName'); ?></textarea>
                                                            <?php echo (form_error('InterpreterName')) ? '<br>' . form_error('InterpreterName', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <!--Interpreter Paid Field-->                                            

                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('Interpreterpaid')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left">Equal Opportunities Questionnaire: Gender, Do you identify yourself as Transgender, transexual or intersex. Religion. Sexual Orientation. Do you consider yourself disabled. Are you white,mixed,asian,black,chinese other. Ethnicity</label>
                                                        <div class="col-md-12" style="">
                                                            <textarea name="Interpreterpaid" class="form-control" placeholder="Enter Details"><?php echo set_value('Interpreterpaid'); ?></textarea>
                                                            <?php echo (form_error('Interpreterpaid')) ? '<br>' . form_error('Interpreterpaid', "<b class='text-danger'>", '</b>') : ''; ?>  
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
                                        </div>
                                    </div>


                                </div>

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


