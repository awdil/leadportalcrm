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
            <h4 class="page-title">Add Solicitor </h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Solicitors</a></li>
                <li class="active">Add Solicitor </li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">ADD SOLICITOR </div>
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
                        <form action="<?php echo base_url('Mod/createSolicitor/'). $this->uri->segment(3) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                             <!--First Name Fields-->

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('dateofbirth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Date of Birth<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Date of Birth" name="dateofbirth"  id="dateofbirth" value="<?php echo set_value('dateofbirth'); ?>">
                                                        <?php echo (form_error('dateofbirth')) ? '<br>' . form_error('dateofbirth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Last Name Fields-->

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('title')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Title<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Title" name="title" value="<?php echo set_value('title'); ?>">
                                                        <?php echo (form_error('title')) ? '<br>' . form_error('title', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

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
                                            


                                            <!--Phone 1 Fields-->                                        

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

                                            <!--Phone 2 Fields-->                                                                                

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('towncity')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">TownCity</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="towncity" name="towncity" value="<?php echo set_value('towncity'); ?>">
                                                        <?php echo (form_error('towncity')) ? '<br>' . form_error('towncity', "<b class='text-danger'>", '</b>') : ''; ?>  
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
                            </div>
                                 <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('PartnerType')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Partner Type </label>
                                                    <div class="col-md-8" style="">
                                                        <select class="form-control" name="PartnerType" id="PartnerType">
                                                            <option value="">Partner Type</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Energy Company USA") ? "selected" : ""; ?> value="Energy Company USA">Energy Company USA</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Home Agent") ? "selected" : ""; ?> value="Home Agent">Home Agent</option>
                                                            <option  <?php echo (set_value('PartnerType') == "PI-BACKEND REJECTED ONLY") ? "selected" : ""; ?> value="PI-BACKEND REJECTED ONLY">PI-BACKEND REJECTED ONLY</option>
                                                            <option  <?php echo (set_value('PartnerType') == "BDM") ? "selected" : ""; ?> value="BDM">BDM</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Client Refer") ? "selected" : ""; ?> value="Client Refer">Client Refer</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Scottish PI") ? "selected" : ""; ?> value="Scottish PI">Scottish PI</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Hire") ? "selected" : ""; ?> value="Hire">Hire</option>
                                                            <option  <?php echo (set_value('PartnerType') == "IVA") ? "selected" : ""; ?> value="IVA">IVA</option>
                                                            <option  <?php echo (set_value('PartnerType') == "PI") ? "selected" : ""; ?> value="PI">PI</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Debt management company") ? "selected" : ""; ?> value="Debt management company">Debt management company</option>
                                                            <option  <?php echo (set_value('PartnerType') == "IVA practitioner") ? "selected" : ""; ?> value="IVA practitioner">IVA practitioner</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Sign Up agency") ? "selected" : ""; ?> value="Sign Up agency">Sign Up agency</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Medical Company") ? "selected" : ""; ?> value="Medical Company">Medical Company</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Credit Hire Company") ? "selected" : ""; ?> value="Credit Hire Company">Credit Hire Company</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Training") ? "selected" : ""; ?> value="Training">Training</option>
                                                            <option  <?php echo (set_value('PartnerType') == "CMC") ? "selected" : ""; ?> value="CMC">CMC</option>
                                                            <option  <?php echo (set_value('PartnerType') == "IT") ? "selected" : ""; ?> value="IT">IT</option>
                                                            <option  <?php echo (set_value('PartnerType') == " Interpretation Company") ? "selected" : ""; ?> value=" Interpretation Company"> Interpretation Company</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Interpreter") ? "selected" : ""; ?> value="Interpreter">Interpreter</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Hot Keys Buyer") ? "selected" : ""; ?> value="Hot Keys Buyer">Hot Keys Buyer</option>
                                                            <option  <?php echo (set_value('PartnerType') == " Call Centre") ? "selected" : ""; ?> value=" Call Centre"> Call Centre</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Job Board") ? "selected" : ""; ?> value="Job Board">Job Board</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Solicitor") ? "selected" : ""; ?> value="Solicitor">Solicitor</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Introducer") ? "selected" : ""; ?> value="Introducer">Introducer</option>
                                                            <option  <?php echo (set_value('PartnerType') == "ATE Provider") ? "selected" : ""; ?> value="ATE Provider">ATE Provider</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Body Shop") ? "selected" : ""; ?> value="Body Shop">Body Shop</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Indian Introducer") ? "selected" : ""; ?> value="Indian Introducer">Indian Introducer</option>
                                                            <option  <?php echo (set_value('PartnerType') == "General Contacts") ? "selected" : ""; ?> value="General Contacts">General Contacts</option>
                                                            <option  <?php echo (set_value('PartnerType') == "Consultant") ? "selected" : ""; ?> value="Consultant">Consultant</option>Data Buyer
                                                            <option  <?php echo (set_value('PartnerType') == " Off shore Call Centre") ? "selected" : ""; ?> value=" Off shore Call Centre"> Call Centre</option>
                                                            <option  <?php echo (set_value('PartnerType') == " Off shore ") ? "selected" : ""; ?> value="Off shore"> Off shore </option>
                                                        </select>
                                                        <?php echo (form_error('PartnerType')) ? '<br>' . form_error('PartnerType', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group <?php echo (form_error('CampaignName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Campaign Name </label>
                                                    <div class="col-md-8" style="">
                                                        <select class="form-control" name="CampaignName" id="CampaignName">
                                                            <option value="">Campaign Name</option>
                                                            <option  <?php echo (set_value('CampaignName') == "IVA") ? "selected" : ""; ?> value="IVA">IVA</option>
                                                            <option  <?php echo (set_value('CampaignName') == "Personal Injury Introducer") ? "selected" : ""; ?> value="Personal Injury Introducer">Personal Injury Introducer</option>
                                                            <option  <?php echo (set_value('CampaignName') == "IVA Introducer") ? "selected" : ""; ?> value="IVA Introducer">IVA Introducer</option>
                                                            <option  <?php echo (set_value('CampaignName') == "Personal Injury Centre") ? "selected" : ""; ?> value="Personal Injury Centre">Personal Injury Centre</option>
                                                            <option  <?php echo (set_value('CampaignName') == "Dialler") ? "selected" : ""; ?> value="Dialler">Dialler</option>
                                                            
                                                        </select>
                                                        <?php echo (form_error('CampaignName')) ? '<br>' . form_error('CampaignName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('PortalLogins')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Portal Logins </label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="PortalLogins" name="PortalLogins" value="<?php echo set_value('PortalLogins'); ?>">
                                                        <?php echo (form_error('PortalLogins')) ? '<br>' . form_error('PortalLogins', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('PortalPassword')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Portal Password </label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Portal Password" name="PortalPassword" value="<?php echo set_value('PortalPassword'); ?>">
                                                        <?php echo (form_error('PortalPassword')) ? '<br>' . form_error('PortalPassword', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                         
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('RateAgreedforRTA')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Rate Agreed for RTA</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Rate Agreed for RTA" name="RateAgreedforRTA"  value="<?php echo set_value('RateAgreedforRTA'); ?>">
                                                        <?php echo (form_error('RateAgreedforRTA')) ? '<br>' . form_error('RateAgreedforRTA', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Last Name Fields-->

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('RateagreedforNonrta')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Rate agreed for Non rta</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Rate agreed for Non rta" name="RateagreedforNonrta" value="<?php echo set_value('RateagreedforNonrta'); ?>">
                                                        <?php echo (form_error('RateagreedforNonrta')) ? '<br>' . form_error('RateagreedforNonrta', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--First Name Fields-->

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Rateagreedtominors')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Rate agreed to minors</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Rate agreed to minors" name="Rateagreedtominors" value="<?php echo set_value('Rateagreedtominors'); ?>">
                                                        <?php echo (form_error('Rateagreedtominors')) ? '<br>' . form_error('Rateagreedtominors', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Last Name Fields-->

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Agreedpaymentterms')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Agreed payment terms</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Agreed payment terms" name="Agreedpaymentterms" value="<?php echo set_value('Agreedpaymentterms'); ?>">
                                                        <?php echo (form_error('Agreedpaymentterms')) ? '<br>' . form_error('Agreedpaymentterms', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('MOJRegulated')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">MOJ Regulated</label>
                                                    <div class="col-md-8" style="">
                                                        <select class="form-control" name="MOJRegulated" id="MOJRegulated">
                                                            <option value="">MOJ Regulated</option>
                                                            <option  <?php echo (set_value('MOJRegulated') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option  <?php echo (set_value('MOJRegulated') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('MOJRegulated')) ? '<br>' . form_error('MOJRegulated', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('SkypID')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Skyp ID</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Skyp ID" name="SkypID" value="<?php echo set_value('SkypID'); ?>">
                                                        <?php echo (form_error('SkypID')) ? '<br>' . form_error('SkypID', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('TelephoneNumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Telephone Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Telephone Number" name="TelephoneNumber" value="<?php echo set_value('TelephoneNumber'); ?>">
                                                        <?php echo (form_error('TelephoneNumber')) ? '<br>' . form_error('TelephoneNumber', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('NumberofAgents')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Number of Agents</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Number of Agents" name="NumberofAgents" value="<?php echo set_value('NumberofAgents'); ?>">
                                                        <?php echo (form_error('NumberofAgents')) ? '<br>' . form_error('NumberofAgents', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('BankAccountNumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Account Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Bank Account Number" name="BankAccountNumber" value="<?php echo set_value('BankAccountNumber'); ?>">
                                                        <?php echo (form_error('BankAccountNumber')) ? '<br>' . form_error('BankAccountNumber', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('BankName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Bank Name</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Bank Name" name="BankName" value="<?php echo set_value('BankName'); ?>">
                                                        <?php echo (form_error('BankName')) ? '<br>' . form_error('BankName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('BankAddress')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Bank Address</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Bank Address" name="BankAddress" value="<?php echo set_value('BankAddress'); ?>">
                                                        <?php echo (form_error('BankAddress')) ? '<br>' . form_error('BankAddress', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('IBANNumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">IBAN Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="IBAN Number" name="IBANNumber" value="<?php echo set_value('IBANNumber'); ?>">
                                                        <?php echo (form_error('IBANNumber')) ? '<br>' . form_error('IBANNumber', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('SWIFTCode')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">SWIFT Code</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="SWIFT Code" name="SWIFTCode" value="<?php echo set_value('SWIFTCode'); ?>">
                                                        <?php echo (form_error('SWIFTCode')) ? '<br>' . form_error('SWIFTCode', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('RecipientAddress')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Recipient Address</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Recipient Address" name="RecipientAddress" value="<?php echo set_value('RecipientAddress'); ?>">
                                                        <?php echo (form_error('RecipientAddress')) ? '<br>' . form_error('RecipientAddress', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('RecipientName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left;">Recipient Name</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="3" style="resize: none;" class="form-control" placeholder="Enter Recipient Name" name="RecipientName"><?php echo set_value('RecipientName'); ?></textarea> 
                                                        
                                                        <?php echo (form_error('RecipientName')) ? '<br>' . form_error('RecipientName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                <div class="row">
                                        <div class="col-md-12">

                                            <!-- Job Title Fields -->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('LiveDate')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Live Date</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Live Date" id="livedatesolicitor" name="LiveDate" value="<?php echo set_value('LiveDate'); ?>">
                                                        <?php echo (form_error('LiveDate')) ? '<br>' . form_error('LiveDate', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                            <!--Phone 1 Fields-->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Notes')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Notes</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Notes" name="Notes" value="<?php echo set_value('Notes'); ?>">
                                                        <?php echo (form_error('Notes')) ? '<br>' . form_error('Notes', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('details')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left;">Details</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="3" style="resize: none;" class="form-control" placeholder="Enter Details" name="details"><?php echo set_value('details'); ?></textarea> 
                                                        <?php echo (form_error('details')) ? '<br>' . form_error('details', "<b class='text-danger'>", '</b>') : ''; ?>  
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
                            <hr class="m-t-0 m-b-40">
                            
                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button type="submit" class="btn btn-info">Add Solicitor </button>
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
