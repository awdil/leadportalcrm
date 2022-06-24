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
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add MIB Claims </h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">MIB Claimss</a></li>
                <li class="active">Add MIB Claims </li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">ADD MIB Claims </div>
                    </div>
                    
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                       
                            <a href="<?php echo base_url('Mod/manageLeads'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Manage Leads</a>                    
                        </div>
                    </div>
                    
                </div>
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="<?php echo base_url('Mod/createMIBClaims/'). $this->uri->segment(3) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                             <?php //  if ($this->input->post('clone') == "clone" || $this->session->userdata('clone')): ?>
                            
                           <?php  if ($this->input->post('clone') == "clone" || $this->session->userdata('clone')): ?>
                                <input type="hidden" name="clone" value="clone">                                
                           <?php endif; ?> 
                            <div class="form-body">
                                
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
                                
                                 <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Personal Details </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <div class="row">
                                        <div class="col-md-12">
                                             

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('title')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Title<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Title" name="title" value="<?php echo set_value('title'); ?>">
                                                        <?php echo (form_error('title')) ? '<br>' . form_error('title', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('dateofbirth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Date of Birth<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Date of Birth" name="dateofbirth"  id="dateofbirth" value="<?php echo set_value('dateofbirth'); ?>">
                                                        <?php echo (form_error('dateofbirth')) ? '<br>' . form_error('dateofbirth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                          </div>  
                                            <!--First Name Fields-->
                                        <div class="col-md-12">
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
                                <div class="row"> 
                                <div class="col-md-12">  
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('email')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-4" style="text-align: left;">Email</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" placeholder="Enter Email" name="email" value="<?php echo set_value('email'); ?>">
                                                    <?php echo (form_error('email')) ? '<br>' . form_error('email', "<b class='text-danger'>", '</b>') : ''; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('postcode')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-4" style="text-align: left;">Postcode<span style="color: red"> *</span></label>
                                            <div class="col-md-8" style="">
                                                <input type="text" class="form-control" placeholder="postcode" name="postcode" value="<?php echo set_value('postcode'); ?>">
                                                <?php echo (form_error('postcode')) ? '<br>' . form_error('postcode', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                        </div>
                                    </div>                             
                                </div>
                            </div>    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('phone1')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 1<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 1" name="phone1" value="<?php echo set_value('phone1'); ?>">
                                                        <?php echo (form_error('phone1')) ? '<br>' . form_error('phone1', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Job Title Fields -->                                        
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('phone2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 2</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 2" name="phone2" value="<?php echo set_value('phone2'); ?>">
                                                        <?php echo (form_error('phone2')) ? '<br>' . form_error('phone2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <!--Phone 1 Fields-->                                        
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('towncity')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">TownCity</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="towncity" name="towncity" value="<?php echo set_value('towncity'); ?>">
                                                        <?php echo (form_error('towncity')) ? '<br>' . form_error('towncity', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">
                                        <div class="col-md-12">

                                    
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
                                            
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('NINumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left;">NI Number</label>
                                                    <div class="col-md-10" style="">
                                                        <input type="text" class="form-control" placeholder="NI Number" name="NINumber" value="<?php echo set_value('NINumber'); ?>">
                                                        <?php echo (form_error('NINumber')) ? '<br>' . form_error('NINumber', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('Medicalattention')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-2" style="text-align: left;">
                                                        Did you seek medical attention? 
                                                    </label> 
                                                    <div class="col-md-10" style=""> 
                                                        <input type="text" placeholder="Did you seek medical attention?  " value="" class="form-control" name="Medicalattention"> 
                                                        <?php echo (form_error('Medicalattention')) ? '<br>' . form_error('Medicalattention', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('GPDetails')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                       GP Details, Address and contact details 
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="GP Details, Address and contact details " value="" class="form-control" name="GPDetails"> 
                                                        <?php echo (form_error('GPDetails')) ? '<br>' . form_error('GPDetails', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                            </div>
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> About you</p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('HowinvoledInAccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">How was you involved in the accident?</label>
                                                    <div class="col-md-12" style="">
                                                        <select class="form-control" name="HowinvoledInAccident" id="HowinvoledInAccident">
                                                            <option  <?php echo (set_value('HowinvoledInAccident') == "As a Driver or passenger of their vehicle") ? "selected" : ""; ?> value="As a Driver or passenger of their vehicle">As a Driver or passenger of their vehicle</option>
                                                            <option  <?php echo (set_value('HowinvoledInAccident') == "As a Owner of the Vehicle") ? "selected" : ""; ?> value="As a Owner of the Vehicle">As a Owner of the Vehicle</option>
                                                            <option  <?php echo (set_value('HowinvoledInAccident') == "As a passenger of a vehicle they don&#039;t own") ? "selected" : ""; ?> value="As a passenger of a vehicle they don&#039;t own">As a passenger of a vehicle they don&#039;t own</option>
                                                            <option  <?php echo (set_value('HowinvoledInAccident') == "As a Pedestrian") ? "selected" : ""; ?> value="As a Pedestrian">As a Pedestrian</option>
                                                            <option  <?php echo (set_value('HowinvoledInAccident') == "As a Cyclist") ? "selected" : ""; ?> value="As a Cyclist">As a Cyclist</option>
                                                            <option  <?php echo (set_value('HowinvoledInAccident') == "As a Horse Rider") ? "selected" : ""; ?> value="As a Horse Rider">As a Horse Rider</option>
                                                            <option  <?php echo (set_value('HowinvoledInAccident') == "As a Witnessed the incident") ? "selected" : ""; ?> value="As a Witnessed the incident">As a Witnessed the incident</option>
                                                            <option  <?php echo (set_value('HowinvoledInAccident') == "As Owner of damaged property that is not a vehicle") ? "selected" : ""; ?> value="As Owner of damaged property that is not a vehicle">As Owner of damaged property that is not a vehicle</option>
                                                        </select>
                                                        <?php echo (form_error('HowinvoledInAccident')) ? '<br>' . form_error('HowinvoledInAccident', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                                <div class="form-group <?php echo (form_error('comprehensiveInsurance')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                        Do you have comprehensive insurance?</label>
                                                    <div class="col-md-12" style="">
                                                        <select class="form-control" name="comprehensiveInsurance" id="comprehensiveInsurance">
                                                            <option value="">Comprehensive insurance</option>
                                                            <option  <?php echo (set_value('comprehensiveInsurance') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('comprehensiveInsurance') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('comprehensiveInsurance')) ? '<br>' . form_error('comprehensiveInsurance', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            <div class="form-group <?php echo (form_error('DamageOfVehicle')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                        Is the cost of the damage to your vehicle likely to be less than the value of your policy </label>
                                                    <div class="col-md-12" style="">
                                                        <select class="form-control" name="DamageOfVehicle" id="DamageOfVehicle">
                                                            <option value="">Cost of demage vehcile</option>
                                                            <option  <?php echo (set_value('DamageOfVehicle') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('DamageOfVehicle') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('DamageOfVehicle')) ? '<br>' . form_error('DamageOfVehicle', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            <div class="form-group <?php echo (form_error('DamageOfVehicleExcess')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                       What are you claiming for? Damage to your vehicle, Loss of earnings, Damage to property other than a vehicle, Hire Vehicle, Excess     
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Enter Details" value="" class="form-control" name="DamageOfVehicleExcess"> 
                                                        <?php echo (form_error('DamageOfVehicleExcess')) ? '<br>' . form_error('DamageOfVehicleExcess', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            </div>
                                    </div>  
                                    <hr style="margin-top: 0px; margin-bottom: 10px;"> 
                                    <div class="col-md-12" style="padding: 0px;"> 
                                        <div class="alert alert-primary" style=" background-color: #2cabe3"> 
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Client Vehicle Details </p> 
                                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)"> 
                                        </div> 
                                    </div> 
                                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('VehicleRegistrationNumber')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                       Registration Number of your Vehicle or the Vehicle you were in     
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Enter Registration Number of your Vehicle or the Vehicle you were in  " value="" class="form-control" name="VehicleRegistrationNumber"> 
                                                        <?php echo (form_error('VehicleRegistrationNumber')) ? '<br>' . form_error('VehicleRegistrationNumber', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('Makemodelofvehicle')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                       Make and model of vehicle     
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Enter Make and model of vehicle" value="" class="form-control" name="Makemodelofvehicle"> 
                                                        <?php echo (form_error('Makemodelofvehicle')) ? '<br>' . form_error('Makemodelofvehicle', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('DamagedAreasOfVehcile')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                          Damaged areas of the vehicle
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Damaged areas of the vehicle " value="" class="form-control" name="DamagedAreasOfVehcile"> 
                                                        <?php echo (form_error('DamagedAreasOfVehcile')) ? '<br>' . form_error('DamagedAreasOfVehcile', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                            </div>
                                            <div class="form-group <?php echo (form_error('ExcessAmount')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                          Excess Amount  
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Emter Excess Amount" value="" class="form-control" name="ExcessAmount"> 
                                                        <?php echo (form_error('ExcessAmount')) ? '<br>' . form_error('ExcessAmount', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('NameofcompanyHiring')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                           Name of company providing hire 
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Enter Name of company providing hire " value="" class="form-control" name="NameofcompanyHiring"> 
                                                        <?php echo (form_error('NameofcompanyHiring')) ? '<br>' . form_error('NameofcompanyHiring', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            
                                            <div class="form-group <?php echo (form_error('hirePeriodstart')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                            When did your hire period start? 
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Please provide the date When did your hire period start " value="" class="form-control" name="hirePeriodstart"> 
                                                        <?php echo (form_error('hirePeriodstart')) ? '<br>' . form_error('hirePeriodstart', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('thehireongoing')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                           Is the hire ongoing? 
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <select class="form-control" name="thehireongoing" id="thehireongoing">
                                                            <option  <?php echo (set_value('thehireongoing') == "Unkown") ? "selected" : ""; ?> value="Unkown">Unkown</option>
                                                            <option  <?php echo (set_value('thehireongoing') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('thehireongoing') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select> 
                                                        <?php echo (form_error('thehireongoing')) ? '<br>' . form_error('thehireongoing', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('hireperiodend')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                           When did the hire period end?
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input id="date_instructed" type="text" placeholder="Please Provide the date When did the hire period end? " value="" class="form-control" name="hireperiodend"> 
                                                        <?php echo (form_error('hireperiodend')) ? '<br>' . form_error('hireperiodend', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <hr style="margin-top: 0px; margin-bottom: 10px;"> 
                                        <div class="col-md-12" style="padding: 0px;"> 
                                            <div class="alert alert-primary" style=" background-color: #2cabe3"> 
                                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Employment Details </p> 
                                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)"> 
                                            </div> 
                                        </div> 
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('EmploymentStatus')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                        What is your Employment status?   
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <select class="form-control" name="EmploymentStatus" id="EmploymentStatus">
                                                            <option  <?php echo (set_value('EmploymentStatus') == "Employed") ? "selected" : ""; ?> value="Employed">Employed</option>
                                                            <option  <?php echo (set_value('EmploymentStatus') == "Self-Employed") ? "selected" : ""; ?> value="Self-Employed">Self-Employed</option>
                                                        </select> 
                                                        <?php echo (form_error('EmploymentStatus')) ? '<br>' . form_error('EmploymentStatus', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('occupationonAccident')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                            What was your occupation at the time of this accident?
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Enter occupation at the time of this accident" value="" class="form-control" name="occupationonAccident"> 
                                                        <?php echo (form_error('occupationonAccident')) ? '<br>' . form_error('occupationonAccident', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('AbsentfromWork')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                         How many days were they absent from work? 
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="How many days were they absent from work? " value="" class="form-control" name="AbsentfromWork"> 
                                                        <?php echo (form_error('AbsentfromWork')) ? '<br>' . form_error('AbsentfromWork', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('stilloffWork ')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                          Are you still off work ? 
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <select class="form-control" name="stilloffWork" id="stilloffWork">
                                                            <option  <?php echo (set_value('stilloffWork') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('stilloffWork') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select> 
                                                        <?php echo (form_error('stilloffWork')) ? '<br>' . form_error('stilloffWork', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('YortotallosinEaring')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                        Confirm your total loss of earnings due to your absence from work   
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Confirm your total loss of earnings due to your absence from work  " value="" class="form-control" name="YortotallosinEaring"> 
                                                        <?php echo (form_error('YortotallosinEaring')) ? '<br>' . form_error('YortotallosinEaring', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            <hr style="margin-top: 0px; margin-bottom: 10px;"> 
                                                <div class="col-md-12" style="padding: 0px;"> 
                                                <div class="alert alert-primary" style=" background-color: #2cabe3"> 
                                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Vehicle Damage& Loss of Earnings </p> 
                                                    <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)"> 
                                                </div> 
                                            </div> 
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('AbouttheDamagedProperty')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                          Tell us about the damaged property 
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Tell us about the damaged property  " value="" class="form-control" name="AbouttheDamagedProperty"> 
                                                        <?php echo (form_error('AbouttheDamagedProperty')) ? '<br>' . form_error('AbouttheDamagedProperty', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                             <div class="form-group <?php echo (form_error('isDamagesRepaired')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                        Has the damage been repaired or replaced?   
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <select class="form-control" name="isDamagesRepaired" id="isDamagesRepaired">
                                                            <option  <?php echo (set_value('isDamagesRepaired') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('isDamagesRepaired') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>  
                                                        <?php echo (form_error('isDamagesRepaired')) ? '<br>' . form_error('isDamagesRepaired', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('RepairorReplacement')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                        Estimated cost of repair or replacement or if repaired, provide the Repair or replacement cost. 
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Estimated cost of repair or replacement or if repaired, provide the Repair or replacement cost  " value="" class="form-control" name="RepairorReplacement"> 
                                                        <?php echo (form_error('RepairorReplacement')) ? '<br>' . form_error('RepairorReplacement', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('coveredbyaninsurancePolicy')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                        Was the damaged property covered by an insurance policy?   
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <select class="form-control" name="coveredbyaninsurancePolicy" id="coveredbyaninsurancePolicy">
                                                            <option  <?php echo (set_value('coveredbyaninsurancePolicy') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('coveredbyaninsurancePolicy') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select> 
                                                        <?php echo (form_error('coveredbyaninsurancePolicy')) ? '<br>' . form_error('coveredbyaninsurancePolicy', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('detailsforthedamagedProperty')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                         The insurer details for the damaged property, Name of insurer, Policy number or reference, Phone Number, Email address.
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder=" The insurer details for the damaged property, Name of insurer, Policy number or reference, Phone Number, Email address" value="" class="form-control" name="detailsforthedamagedProperty"> 
                                                        <?php echo (form_error('detailsforthedamagedProperty')) ? '<br>' . form_error('detailsforthedamagedProperty', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('lossestotheirClaim')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                          Would your client like to add any other losses to their claim?
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <select class="form-control" name="lossestotheirClaim" id="lossestotheirClaim">
                                                            <option  <?php echo (set_value('lossestotheirClaim') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('lossestotheirClaim') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('lossestotheirClaim')) ? '<br>' . form_error('lossestotheirClaim', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('Yudriverdetails')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                          Do you have the driver's details?
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <select class="form-control" name="Yudriverdetails" id="Yudriverdetails">
                                                            <option  <?php echo (set_value('Yudriverdetails') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('Yudriverdetails') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('Yudriverdetails')) ? '<br>' . form_error('Yudriverdetails', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('Fulldetails')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                        Full Name, Phone Number, Email Address, Full Address   
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Full Name, Phone Number, Email Address, Full Address  " value="" class="form-control" name="Fulldetails"> 
                                                        <?php echo (form_error('Fulldetails')) ? '<br>' . form_error('Fulldetails', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('additionalDetails')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                          Are additional details held by someone else? 
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <select class="form-control" name="additionalDetails" id="additionalDetails">
                                                            <option  <?php echo (set_value('additionalDetails') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('additionalDetails') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('additionalDetails')) ? '<br>' . form_error('additionalDetails', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('DiffrentDriverthenOwner')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                       Does you believe that the driver of the vehicle differs from its owner?    
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <select class="form-control" name="DiffrentDriverthenOwner" id="DiffrentDriverthenOwner">
                                                            <option  <?php echo (set_value('DiffrentDriverthenOwner') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('DiffrentDriverthenOwner') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('DiffrentDriverthenOwner')) ? '<br>' . form_error('DiffrentDriverthenOwner', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <hr style="margin-top: 0px; margin-bottom: 10px;"> 
                                            <div class="col-md-12" style="padding: 0px;"> 
                                            <div class="alert alert-primary" style=" background-color: #2cabe3"> 
                                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Accident Details</p> 
                                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)"> 
                                            </div> 
                                        </div> 
                                        <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                            
                                            <div class="form-group <?php echo (form_error('TimeofAccident')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                          Time of Accident 
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder=" Time of Accident " value="" class="form-control" name="TimeofAccident"> 
                                                        <?php echo (form_error('TimeofAccident ')) ? '<br>' . form_error('TimeofAccident', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('AccidentCricumstances')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                          Enter a description of the accident events (Accident Cricumstances) 
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Enter a description of the accident events (Accident AccidentCricumstances)  " value="" class="form-control" name="AccidentCricumstances"> 
                                                        <?php echo (form_error('AccidentCricumstances')) ? '<br>' . form_error('AccidentCricumstances', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('CountryofAccident')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                          Country of Accident 
                                                    </label> 
                                                    <div class="col-md-12" style="">
                                                        <select class="form-control" name="CountryofAccident" id="CountryofAccident">
                                                            <option  <?php echo (set_value('CountryofAccident') == "England") ? "selected" : ""; ?> value="England">England</option>
                                                            <option  <?php echo (set_value('CountryofAccident') == "Wales") ? "selected" : ""; ?> value="Wales">Wales</option>
                                                            <option  <?php echo (set_value('CountryofAccident') == "Guernsey") ? "selected" : ""; ?> value="Guernsey">Guernsey</option>
                                                            <option  <?php echo (set_value('CountryofAccident') == "Gibralter") ? "selected" : ""; ?> value="Gibralter">Gibralter</option>
                                                            <option  <?php echo (set_value('CountryofAccident') == "Isle or Man") ? "selected" : ""; ?> value="Isle or Man">Isle or Man</option>
                                                            <option  <?php echo (set_value('CountryofAccident') == "Jersey") ? "selected" : ""; ?> value="Jersey">Jersey</option>
                                                            <option  <?php echo (set_value('CountryofAccident') == "Nothern Ireland") ? "selected" : ""; ?> value="Nothern Ireland">Nothern Ireland</option>
                                                            <option  <?php echo (set_value('CountryofAccident') == "Scotland") ? "selected" : ""; ?> value="Scotland">Scotland</option>
                                                        </select>
                                                        <?php echo (form_error('CountryofAccident')) ? '<br>' . form_error('CountryofAccident', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('ExactLocationofaccident')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                         Exact Location of accident (Must have full address)  
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder=" Exact Location of accident (Must have full address) " value="" class="form-control" name="ExactLocationofaccident"> 
                                                        <?php echo (form_error('ExactLocationofaccident')) ? '<br>' . form_error('ExactLocationofaccident', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('AbouttheAccidentLocation')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                       Is there anything else you want to tell us about the accident location?    
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder=" Is there anything else you want to tell us about the accident location? " value="" class="form-control" name="AbouttheAccidentLocation"> 
                                                        <?php echo (form_error('AbouttheAccidentLocation')) ? '<br>' . form_error('AbouttheAccidentLocation', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('PoliceAttendtheAccident')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                        Did the Police attend the accident?  
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                    <select class="form-control" name="PoliceAttendtheAccident" id="PoliceAttendtheAccident">
                                                        <option  <?php echo (set_value('PoliceAttendtheAccident') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option> 
                                                        <option  <?php echo (set_value('PoliceAttendtheAccident') == "No") ? "selected" : ""; ?> value="No">No</option> 
                                                    </select>
                                                        <?php echo (form_error('PoliceAttendtheAccident')) ? '<br>' . form_error('PoliceAttendtheAccident', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('accidentReportedPolice')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                          Has the accident been reported to the Police?
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                    <select class="form-control" name="accidentReportedPolice" id="accidentReportedPolice">
                                                        <option  <?php echo (set_value('accidentReportedPolice') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option> 
                                                        <option  <?php echo (set_value('accidentReportedPolice') == "No") ? "selected" : ""; ?> value="No">No</option> 
                                                    </select> 
                                                        <?php echo (form_error('accidentReportedPolice')) ? '<br>' . form_error('accidentReportedPolice', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                           
                                            
                                            <div class="form-group <?php echo (form_error('witnessdetailsknown')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                          Are any witness details known?
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        
                                                    <select class="form-control" name="witnessdetailsknown" id="witnessdetailsknown">
                                                        <option  <?php echo (set_value('witnessdetailsknown') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option> 
                                                        <option  <?php echo (set_value('witnessdetailsknown') == "No") ? "selected" : ""; ?> value="No">No</option> 
                                                    </select>
                                                        <?php echo (form_error('witnessdetailsknown')) ? '<br>' . form_error('witnessdetailsknown', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('FullWitnessesDetails')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                        Full details of all Witnesses, Full name, Phone number, Email address, Address &amp; Postcode 
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder="Full details of all Witnesses, Full name, Phone number, Email address, Address &amp; Postcode " value="" class="form-control" name="FullWitnessesDetails"> 
                                                        <?php echo (form_error('FullWitnessesDetails')) ? '<br>' . form_error('FullWitnessesDetails', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('witnessBeforeAccident')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                         Do you know this witness before the accident?  
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                    <select class="form-control" name="witnessBeforeAccident" id="witnessBeforeAccident">
                                                        <option  <?php echo (set_value('witnessBeforeAccident') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option> 
                                                        <option  <?php echo (set_value('witnessBeforeAccident') == "No") ? "selected" : ""; ?> value="No">No</option> 
                                                    </select>
                                                        <?php echo (form_error('witnessBeforeAccident')) ? '<br>' . form_error('witnessBeforeAccident', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                            <div class="form-group <?php echo (form_error('relationshipOfClient')) ? 'has-error' : ''; ?> "> 
                                                    <label class="control-label col-md-12" style="text-align: left;">
                                                        Describe your client's relationship with this person
                                                    </label> 
                                                    <div class="col-md-12" style=""> 
                                                        <input type="text" placeholder=" Describe your client's relationship with this person" value="" class="form-control" name="relationshipOfClient"> 
                                                        <?php echo (form_error('relationshipOfClient')) ? '<br>' . form_error('relationshipOfClient', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                    </div> 
                                                </div>
                                        </div>
                                           <hr style="margin-top: 0px; margin-bottom: 10px;"> 
                                            <div class="col-md-12" style="padding: 0px;"> 
                                                <div class="alert alert-primary" style=" background-color: #2cabe3"> 
                                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Injury Details</p> 
                                                    <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)"> 
                                                </div> 
                                            </div> 
                                        <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                            <div class="row">
                                                <div class="form-group <?php echo (form_error('InjuriesSuffer')) ? 'has-error' : ''; ?> "> 
                                                        <label class="control-label col-md-12" style="text-align: left;">
                                                            What Injuries did you suffer? 
                                                        </label> 
                                                        <div class="col-md-12" style=""> 
                                                            <input type="text" placeholder="What Injuries did you suffer?  " value="" class="form-control" name="InjuriesSuffer"> 
                                                            <?php echo (form_error('InjuriesSuffer')) ? '<br>' . form_error('InjuriesSuffer', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                        </div> 
                                                    </div>
                                                <div class="form-group <?php echo (form_error('MedicationUndergo')) ? 'has-error' : ''; ?> "> 
                                                        <label class="control-label col-md-12" style="text-align: left;">
                                                            What Medication or treatment did you undergo 
                                                        </label> 
                                                        <div class="col-md-12" style=""> 
                                                            <input type="text" placeholder="What Medication or treatment did you undergo  " value="" class="form-control" name="MedicationUndergo"> 
                                                            <?php echo (form_error('MedicationUndergo')) ? '<br>' . form_error('MedicationUndergo', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                        </div> 
                                                    </div>
                                                <div class="form-group <?php echo (form_error('Hospitalattended')) ? 'has-error' : ''; ?> "> 
                                                        <label class="control-label col-md-12" style="text-align: left;">
                                                            Did you attend a Hospital?                  

                                                        </label> 
                                                        <div class="col-md-12" style=""> 
                                                        <select class="form-control" name="Hospitalattended" id="Hospitalattended">                          
                                                            <option  <?php echo (set_value('Hospitalattended') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option> 
                                                            <option  <?php echo (set_value('Hospitalattended') == "No") ? "selected" : ""; ?> value="No">No</option> 
                                                        </select>
                                                            <?php echo (form_error('Hospitalattended')) ? '<br>' . form_error('Hospitalattended', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                        </div> 
                                                    </div>
                                                <div class="form-group <?php echo (form_error('DatClaimReferenceNumbereofAccident ')) ? 'has-error' : ''; ?> "> 
                                                            <label class="control-label col-md-12" style="text-align: left;">
                                                                MIB Claim Reference Number   
                                                            </label> 
                                                                <div class="col-md-12" style=""> 
                                                                    <input type="text" placeholder="MIB Claim Reference Number" value="" class="form-control" name="ClaimReferenceNumber" > 
                                                                    <?php echo (form_error('ClaimReferenceNumber')) ? '<br>' . form_error('ClaimReferenceNumber', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                                </div> 
                                                        </div>
                                                <div class="form-group <?php echo (form_error('RegistrationTP')) ? 'has-error' : ''; ?> "> 
                                                        <label class="control-label col-md-12" style="text-align: left;">
                                                            TP Vehicle Registration   
                                                        </label> 
                                                        <div class="col-md-12" style=""> 
                                                            <input type="text" placeholder="TP Vehicle Registration  " value="" class="form-control" name="RegistrationTP"> 
                                                            <?php echo (form_error('RegistrationTP')) ? '<br>' . form_error('RegistrationTP', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                        </div> 
                                                    </div>
                                                <div class="form-group <?php echo (form_error('MademodelColor')) ? 'has-error' : ''; ?> "> 
                                                        <label class="control-label col-md-12" style="text-align: left;">
                                                             Make, Model, Colour of Vehicle 
                                                        </label> 
                                                        <div class="col-md-12" style=""> 
                                                            <input type="text" placeholder="Make, Model, Colour of Vehicle " value="" class="form-control" name="MademodelColor"> 
                                                            <?php echo (form_error('MademodelColor')) ? '<br>' . form_error('MademodelColor', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                        </div> 
                                                    </div>
                                                <div class="form-group <?php echo (form_error('AwareOfVehcileinsurer')) ? 'has-error' : ''; ?> "> 
                                                        <label class="control-label col-md-12" style="text-align: left;">
                                                              Are you aware of an insurer for this vehicle?
                                                        </label> 
                                                        <div class="col-md-12" style=""> 
                                                            <select class="form-control" name="AwareOfVehcileinsurer" id="AwareOfVehcileinsurer">
                                                                <option  <?php echo (set_value('AwareOfVehcileinsurer') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                                <option  <?php echo (set_value('AwareOfVehcileinsurer') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            </select>
                                                            <?php echo (form_error('AwareOfVehcileinsurer')) ? '<br>' . form_error('AwareOfVehcileinsurer', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                        </div> 
                                                    </div>
                                                <div class="form-group <?php echo (form_error('NameofInsuer')) ? 'has-error' : ''; ?> "> 
                                                        <label class="control-label col-md-12" style="text-align: left;">
                                                             Name of Insuer. Policy Number or claim reference number, Insurer phone number 
                                                        </label> 
                                                        <div class="col-md-12" style=""> 
                                                            <input type="text" placeholder="Name of Insuer. Policy Number or claim reference number, Insurer phone number " value="" class="form-control" name="NameofInsuer"> 
                                                            <?php echo (form_error('NameofInsuer')) ? '<br>' . form_error('NameofInsuer', "<b class='text-danger'>", '</b>') : ''; ?> 
                                                        </div> 
                                                    </div>
                                                
                                                <div class="form-group <?php echo (form_error('DateofAccident')) ? 'has-error' : ''; ?>">
                                                    <label class="control-label col-md-12" style="text-align: left">Date of Accident</label>
                                                    <div class="col-md-12" style="">
                                                        <input name="DateofAccident" class="form-control" id="rep_due" value="<?php echo set_value('DateofAccident'); ?>" placeholder="Enter Date of Accident">
                                                        <?php echo (form_error('DateofAccident')) ? '<br>' . form_error('DateofAccident', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i>Contact Prefrences  </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                    <hr style="margin-top: 0px; margin-bottom: 10px;">
                                    
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
                            <hr class="m-t-0 m-b-40">
                            
                                <div class="form-actions">

                                    <div class="row">
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="col-md-12" style="text-align: Left; left: 7%">
                                                    <button type="submit" class="btn btn-info">Add MIB Claims </button>
                                                </div>
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
