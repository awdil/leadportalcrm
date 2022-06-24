<?php
    
    $formName       = "";
    $clone_Action   = "";
    
 if($lead_campaign[0]->campaign_name == "CICA Claims"){
        
        $formName = "CICA Clone Claims Form";
        $Name_Action   = base_url('Mod/createCICALead/') . $lead_campaign[0]->campaign_short_name . "/" . $leadData->lead_id; 
        
    }
    
?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

            <h4 class="page-title">Clone Lead</h4> </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Clone Lead</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px"><?php echo $formName; ?></div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/manageLeads'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded"><i class="fa "></i> Manage Leads</a>
                            <a href="<?php echo base_url('Mod/addLeadNote/'); echo!empty(@$leadData->lead_id) ? @$leadData->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Add Lead Note</a>
                            <?php if ($_SESSION['adminData']['role_name'] == "Admin"):   ?>
                            <a href="<?php echo base_url('Mod/changeLeadStatus/'); echo!empty(@$leadData->lead_id) ? @$leadData->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Change Lead Status</a>
                            <?php endif; ?>  
                            <a href="<?php echo base_url('Mod/New_messageWithLeads/'); echo!empty(@$leadData->lead_id) ? @$leadData->lead_id : ''; ?>"  style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Message</a>
                        </div>
                    </div>

                </div>


                <hr style="margin-bottom: 0; margin-top: 5px;">

                <div class="panel-wrapper collapse in" aria-expanded="true">


                    <div class="panel-body" style="padding: 0px;">

<!--                        <p style="font-weight: 600; color: #313131"><i class="fa fa-arrow-down" style="font-size: 10px"></i> Contact Details</p>
                        <hr style="width: 16%; float: left; margin-top: 0px">-->

                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Personal Details </p>
                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>



                        <form action="<?php echo $Name_Action ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <div class="form-body">
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">  
                                    <!--< ROW 1 >-->
                                    <div class="row">
                                        <div class="col-md-12">                                           
                                            
                                            <!--First Name Fields-->

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('firstName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">First Name<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter First Name" name="firstName" value="<?php echo (set_value('firstName') || form_error('firstName')) ? (set_value('firstName')) : (@$leadData->first_name); ?>">
                                                        <input type="hidden" name="leadId" value="<?php echo (@$leadData->lead_id) ? base64_encode(@$leadData->lead_id) : ''; ?>">                                                                                                    
                                                        <?php echo (form_error('firstName')) ? '<br>' . form_error('firstName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Last Name Fields-->

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('lastName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Last Name<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Last Name" name="lastName" value="<?php echo (set_value('lastName') || form_error('lastName')) ? (set_value('lastName')) : (@$leadData->last_name); ?>">
                                                        <?php echo (form_error('lastName')) ? '<br>' . form_error('lastName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--< ROW 2 >-->                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('jobtitle')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Job Title</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Job Title" name="jobtitle" value="<?php echo (set_value('jobtitle') || form_error('jobtitle')) ? (set_value('jobtitle')) : (@$leadData->job_title); ?>">
                                                        <?php echo (form_error('jobtitle')) ? '<br>' . form_error('jobtitle', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('email')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Email</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo (set_value('email') || $CI->CheckEmpty('email')) ? (set_value('email')) : @$leadData->email; ?>">
                                                        <?php echo (form_error('email')) ? '<br>' . form_error('email', "<b class='text-danger'>", '</b>') : ''; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Job Title Fields -->                                        
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('phone1')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 1<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 1" name="phone1" value="<?php echo (set_value('phone1') || $CI->CheckEmpty('phone1')) ? (set_value('phone1')) : @$leadData->phone_1; ?>">
                                                        <?php echo (form_error('phone1')) ? '<br>' . form_error('phone1', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Phone 2 Fields-->                                                                                

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('phone2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 2</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 2" name="phone2" value="<?php echo (set_value('phone2') || $CI->CheckEmpty('phone2')) ? (set_value('phone2')) : @$leadData->phone_2; ?>">
                                                        <?php echo (form_error('phone2')) ? '<br>' . form_error('phone2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            

                                        </div>
                                    </div>
                                    <!--< ROW 3 >-->                                                                
                                    <div class="row">
                                        <div class="col-md-12">

                                            <!--Address 1 Fields-->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('address')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Address</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="7" class="form-control" style="resize: none;" placeholder="Enter address" name="address"><?php echo (set_value('address') || $CI->CheckEmpty('address')) ? (set_value('address')) : @$leadData->address; ?></textarea> 
                                                        <?php echo (form_error('address')) ? '<br>' . form_error('address', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Address 2 Fields-->                                                                                

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('address2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Address 2</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="7" style="resize: none;" class="form-control" placeholder="Enter Address 2" name="address2"><?php echo (set_value('address2') || $CI->CheckEmpty('address2')) ? (set_value('address2')) : @$leadData->address_2; ?></textarea> 
                                                        <?php echo (form_error('address2')) ? '<br>' . form_error('address2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Address 3 Fields-->                                                                                                                        

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('address3')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left;">Address 3</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="7" style="resize: none;" class="form-control" placeholder="Enter Address 3" name="address3"><?php echo (set_value('address3') || $CI->CheckEmpty('address3')) ? (set_value('address3')) : @$leadData->address_3; ?></textarea> 
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
                                                        <input type="text" class="form-control" placeholder="Enter Town City" name="towncity" value="<?php echo (set_value('towncity') || $CI->CheckEmpty('towncity')) ? (set_value('towncity')) : @$leadData->town_city; ?>">
                                                        <?php echo (form_error('towncity')) ? '<br>' . form_error('towncity', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Post Code Fields -->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('postcode')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Post Code</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Post Code" name="postcode" value="<?php echo (set_value('postcode') || $CI->CheckEmpty('postcode')) ? (set_value('postcode')) : @$leadData->post_code; ?>">
                                                        <?php echo (form_error('postcode')) ? '<br>' . form_error('postcode', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>     
                                    <!--< ROW 5 >-->
                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- Date of Birth Fields -->                                                                                

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('dateOfBirth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Date of Birth</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" id="dateofbirth" placeholder="Enter Date Of Birth" name="dateOfBirth" value="<?php echo (set_value('dateOfBirth') || $CI->CheckEmpty('dateOfBirth')) ? (set_value('dateOfBirth')) : @$leadData->date_of_birth; ?>">
                                                        <?php echo (form_error('dateOfBirth')) ? '<br>' . form_error('dateOfBirth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('DateofAccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Date of Incident</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="DateofAccident" class="form-control" id="passenger_1_date_of_birth" value="<?php echo (set_value('dateOfBirth') || $CI->CheckEmpty('dateOfBirth')) ? (set_value('dateOfBirth')) : @$leadData->date_of_accident; ?>" placeholder="Enter Date">
                                                        <?php echo (form_error('DateofAccident')) ? '<br>' . form_error('DateofAccident', "<b class='text-danger'>", '</b>') : ''; ?>                                                 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>  
                                    <!--< ROW 6 >-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('ClientsOccupation')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">What are you applying for?</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="ClientsOccupation" class="form-control">
                                                            <option <?php echo $CI->checkSelected('ClientsOccupation', @$leadData->passenger_4_position_in_car, "I am applying because of a single incident"); ?> value="I am applying because of a single incident">I am applying because of a single incident</option>
                                                            <option <?php echo $CI->checkSelected('ClientsOccupation', @$leadData->passenger_4_position_in_car, "I am applying because of a period of abuse"); ?> value="I am applying because of a period of abuse">I am applying because of a period of abuse</option>
                                                            <option <?php echo $CI->checkSelected('ClientsOccupation', @$leadData->passenger_4_position_in_car, "I am applying because someone has died"); ?> value="I am applying because someone has died">I am applying because someone has died</option>
                                                        </select>
                                                        <?php echo (form_error('ClientsOccupation')) ? '<br>' . form_error('ClientsOccupation', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('ClientPolicyNumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">If client is under 18, please provide full details of the person who has full parental access</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="ClientPolicyNumber" value="<?php echo (set_value('ClientPolicyNumber') || form_error('ClientPolicyNumber')) ? (set_value('ClientPolicyNumber')) : (@$leadData->ec_billingapsuite); ?>" class="form-control" placeholder="If client is under 18, please provide full details of the person who has full parental access">
                                                        <?php echo (form_error('ClientPolicyNumber')) ? '<br>' . form_error('ClientPolicyNumber', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Whatwastheexactlocationoftheaccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Are you the injured person?</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="Whatwastheexactlocationoftheaccident" class="form-control">
                                                            <option <?php echo $CI->checkSelected('Whatwastheexactlocationoftheaccident', @$leadData->passenger_4_position_in_car, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('Whatwastheexactlocationoftheaccident', @$leadData->passenger_4_position_in_car, "No"); ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('Whatwastheexactlocationoftheaccident')) ? '<br>' . form_error('Whatwastheexactlocationoftheaccident', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Whodoyoublamefortheaccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Are you using a representative?</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="Whodoyoublamefortheaccident" class="form-control">
                                                            <option  <?php echo $CI->checkSelected('Whodoyoublamefortheaccident', @$leadData->credit_hire_or_vehicle_replacement, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('Whodoyoublamefortheaccident', @$leadData->credit_hire_or_vehicle_replacement, "No"); ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('Whodoyoublamefortheaccident')) ? '<br>' . form_error('Whodoyoublamefortheaccident', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('Whatwastheweatherlike')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Full Representatives Details (Our Details)</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" style="resize: none" name="Whatwastheweatherlike" placeholder="Full Representatives Details (Our Details)" class="form-control"><?php echo (set_value('Whatwastheweatherlike') || form_error('Whatwastheweatherlike')) ? (set_value('Whatwastheweatherlike')) : (@$leadData->ec_billingapsuite); ?></textarea>
                                                        <?php echo (form_error('Whatwastheweatherlike')) ? '<br>' . form_error('Whatwastheweatherlike', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>  
                                    
                                    
                                    
                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Additional Details </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">                             
                                    <div class="row">
                                        <div class="col-md-12">
  
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('passenger_1')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left;">On the date of the incident giving rise to the criminal injury I was ordinarily resident in the United Kingdom.</label>

                                                        <div class="col-md-12" style="">
                                                            <select name="passenger_1" id="passenger_1" class="form-control">
                                                                <option  <?php echo $CI->checkSelected('passenger_1', @$leadData->credit_hire_or_vehicle_replacement, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('passenger_1', @$leadData->credit_hire_or_vehicle_replacement, "No"); ?> value="No">No</option>
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
                                                                <option  <?php echo $CI->checkSelected('passenger_1_position_in_car', @$leadData->credit_hire_or_vehicle_replacement, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('passenger_1_position_in_car', @$leadData->credit_hire_or_vehicle_replacement, "No"); ?> value="No">No</option>
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
                                                                <option  <?php echo $CI->checkSelected('deferYourApplication', @$leadData->credit_hire_or_vehicle_replacement, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('deferYourApplication', @$leadData->credit_hire_or_vehicle_replacement, "No"); ?> value="No">No</option>
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
                                                                <option  <?php echo $CI->checkSelected('passenger_1_position_in_car', @$leadData->credit_hire_or_vehicle_replacement, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('passenger_1_position_in_car', @$leadData->credit_hire_or_vehicle_replacement, "No"); ?> value="No">No</option>
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
                                                                <option  <?php echo $CI->checkSelected('passenger_1_date_of_birth', @$leadData->credit_hire_or_vehicle_replacement, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('passenger_1_date_of_birth', @$leadData->credit_hire_or_vehicle_replacement, "No"); ?> value="No">No</option>
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
                                                        <option value="<?php echo $CI->checkSelected('Werethepoliceinvolved', @$leadData->credit_hire_or_vehicle_replacement, ""); ?>">Select Were the Police Involved</option>
                                                        <option  <?php echo $CI->checkSelected('Werethepoliceinvolved', @$leadData->credit_hire_or_vehicle_replacement, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('Werethepoliceinvolved', @$leadData->credit_hire_or_vehicle_replacement, "No"); ?> value="No">No</option>
                                                    </select>
                                                    <?php echo (form_error('Werethepoliceinvolved')) ? '<br>' . form_error('Werethepoliceinvolved', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                </div>
                                            </div>
                                        </div>
   
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-12">

                                            
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('TimeofAccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Time of Incident</label>
                                                    <div class="col-md-12" style="">
                                                        <input name="TimeofAccident" id="TimeofAccident" class="form-control" value="<?php echo (set_value('TimeofAccident') || form_error('TimeofAccident')) ? (set_value('TimeofAccident')) : (@$leadData->time_of_accident); ?>" placeholder="Enter Time of Accident">                                                 
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
                                                        <textarea name="OLPLONLY" rows="5" style="resize: none" class="form-control" placeholder="Full address of Incident"><?php echo (set_value('OLPLONLY') || form_error('OLPLONLY')) ? (set_value('OLPLONLY')) : (@$leadData->ol_pl_only); ?></textarea>
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
                                                        <textarea name="MedNegOnly" class="form-control" rows="5" style="resize: none" placeholder="Enter What was the cause of your injuries?"><?php echo (set_value('MedNegOnly') || form_error('MedNegOnly')) ? (set_value('MedNegOnly')) : (@$leadData->med_neg_only); ?></textarea>
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
                                                <textarea name="DetailsofTheIncident" class="form-control" rows="5" style="resize: none" placeholder="Please provide brief details of the incident"><?php echo (set_value('DetailsofTheIncident') || form_error('DetailsofTheIncident')) ? (set_value('DetailsofTheIncident')) : (@$leadData->ec_relationship); ?></textarea>
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
                                                            <option  <?php echo $CI->checkSelected('InWhichCountry', @$leadData->ec_servicestate, "England"); ?> value="England">England</option>
                                                            <option  <?php echo $CI->checkSelected('InWhichCountry', @$leadData->ec_servicestate, "Wales"); ?> value="Wales">Wales</option>
                                                            <option  <?php echo $CI->checkSelected('InWhichCountry', @$leadData->ec_servicestate, "Other"); ?> value="Other">Other</option>
                                                            <option  <?php echo $CI->checkSelected('InWhichCountry', @$leadData->ec_servicestate, "Scotland"); ?> value="Scotland">Scotland</option>
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
                                                       
                                                        <option  <?php echo $CI->checkSelected('CreditHireorVehicleReplacement', @$leadData->credit_hire_or_vehicle_replacement, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('CreditHireorVehicleReplacement', @$leadData->credit_hire_or_vehicle_replacement, "No"); ?> value="No">No</option>
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
                                                       
                                                       <option  <?php echo $CI->checkSelected('ClientStatusinAccident', @$leadData->client_status_in_accident, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('ClientStatusinAccident', @$leadData->client_status_in_accident, "No"); ?> value="No">No</option>
                                                    </select>
                                                    <?php echo (form_error('ClientStatusinAccident')) ? '<br>' . form_error('ClientStatusinAccident', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('Isthisalinkedpassenger')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-12" style="text-align: left">Was the incident reported to the police?</label>
                                                <div class="col-md-12" style="">
                                                    <select name="Isthisalinkedpassenger" class="form-control">
                                                       <option  <?php echo $CI->checkSelected('Isthisalinkedpassenger', @$leadData->is_this_a_linked_passenger, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('Isthisalinkedpassenger', @$leadData->is_this_a_linked_passenger, "No"); ?> value="No">No</option>
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
                                                            <option <?php echo $CI->checkSelected('Isthisalinkedpassenger', @$leadData->is_injury_on_going_injury_physio, "No-one"); ?> value="No-one">No-one</option>
                                                            <option <?php echo $CI->checkSelected('Isthisalinkedpassenger', @$leadData->is_injury_on_going_injury_physio, "Another person or authority"); ?> value="Another person or authority">Another person or authority</option>
                                                        </select>
                                                        <?php echo (form_error('WasAccidentreportedorrecordedintheaccidentBook')) ? '<br>' . form_error('WasAccidentreportedorrecordedintheaccidentBook', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                                     
                                    
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Data Information </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Date and time incident was reported</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Enter" name="passenger_2" id="passenger_2" value="<?php echo (set_value('passenger_2') || form_error('passenger_2')) ? (set_value('passenger_2')) : (@$leadData->passenger_2); ?>">
                                                        <?php echo (form_error('passenger_2')) ? '<br>' . form_error('passenger_2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_2_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Please advise which police force the incident was reported to</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Enter " name="passenger_2_relationship" id="passenger_2_relationship" value="<?php echo (set_value('passenger_2_relationship') || form_error('passenger_2_relationship')) ? (set_value('passenger_2_relationship')) : (@$leadData->passenger_2_relationship); ?>">
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
                                                        <input class="form-control" placeholder="Enter " name="passenger_2_date_of_birth" value="<?php echo (set_value('passenger_2_date_of_birth') || form_error('passenger_2_date_of_birth')) ? (set_value('passenger_2_date_of_birth')) : (@$leadData->passenger_2_date_of_birth); ?>">
                                                        <?php echo (form_error('passenger_2_date_of_birth')) ? '<br>' . form_error('passenger_2_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_2_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Officers name dealing with the incident</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <input class="form-control" placeholder="Enter " name="passenger_2_position_in_car" value="<?php echo (set_value('passenger_2_position_in_car') || form_error('passenger_2_position_in_car')) ? (set_value('passenger_2_position_in_car')) : (@$leadData->passenger_2_position_in_car); ?>">
                                                        
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
                                                        <input class="form-control" placeholder="Enter Officers ID Number dealing with the incident" name="passenger_3" value="<?php echo (set_value('passenger_3') || form_error('passenger_3')) ? (set_value('passenger_3')) : (@$leadData->passenger_3); ?>">
                                                        <?php echo (form_error('passenger_3')) ? '<br>' . form_error('passenger_3', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_3_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Unique police reference number?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Enter Unique police reference number" name="passenger_3_relationship" id="passenger_3_relationship" value="<?php echo (set_value('passenger_3_relationship') || form_error('passenger_3_relationship')) ? (set_value('passenger_3_relationship')) : (@$leadData->passenger_3_relationship); ?>">
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
                                                            <option  <?php echo $CI->checkSelected('passenger_3_date_of_birth', @$leadData->passenger_3_date_of_birth, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('passenger_3_date_of_birth', @$leadData->passenger_3_date_of_birth, "No"); ?> value="No">No</option>
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
                                                            <option  <?php echo $CI->checkSelected('thehireongoing', @$leadData->passenger_3_position_in_car, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('thehireongoing', @$leadData->passenger_3_position_in_car, "No"); ?> value="No">No</option>
                                                            <option <?php echo $CI->checkSelected('thehireongoing', @$leadData->passenger_3_position_in_car, "Don&#039;t know"); ?> value="Don&#039;t know">Don&#039;t know</option>
                                                        </select>
                                                        
                                                         <?php echo (form_error('passenger_3_position_in_car')) ? '<br>' . form_error('passenger_3_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <!--<div class="col-md-12">
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
                                            </div>-->

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_4_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Has the assailant been identified by the police?: </label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_4_relationship" class="form-control">
                                                            <option  <?php echo $CI->checkSelected('passenger_4_relationship', @$leadData->passenger_4_relationship, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('passenger_4_relationship', @$leadData->passenger_4_relationship, "No"); ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('passenger_4_relationship')) ? '<br>' . form_error('passenger_4_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_4_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Who caused the injuries?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Who caused the injuries?" name="passenger_4_date_of_birth" value="<?php echo (set_value('passenger_4_date_of_birth') || form_error('passenger_4_date_of_birth')) ? (set_value('passenger_4_date_of_birth')) : (@$leadData->passenger_4_date_of_birth); ?>">
                                                        <?php echo (form_error('passenger_4_date_of_birth')) ? '<br>' . form_error('passenger_4_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_4_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Have you sought any medical treatment for your injuries?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <select name="passenger_4_position_in_car" class="form-control">
                                                            <option  <?php echo $CI->checkSelected('passenger_4_position_in_car', @$leadData->passenger_4_position_in_car, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('passenger_4_position_in_car', @$leadData->passenger_4_position_in_car, "No"); ?> value="No">No</option>
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
                                                            <option  <?php echo $CI->checkSelected('passenger_5', @$leadData->passenger_5, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('passenger_5', @$leadData->passenger_5, "No"); ?> value="No">No</option>
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
                                                            <option  <?php echo $CI->checkSelected('passenger_5_position_in_car', @$leadData->passenger_5_position_in_car, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('passenger_5_position_in_car', @$leadData->passenger_5_position_in_car, "No"); ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('passenger_5_position_in_car')) ? '<br>' . form_error('passenger_5_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_5_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">If you were off work, when did you go back to work?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <input class="form-control" placeholder="Date of Work" name="passenger_5_date_of_birth" id="passenger_5_date_of_birth" value="<?php echo (set_value('passenger_5_date_of_birth') || form_error('passenger_5_date_of_birth')) ? (set_value('passenger_5_date_of_birth')) : (@$leadData->passenger_5_date_of_birth); ?>">
                                                        
                                                         <?php echo (form_error('passenger_5_position_in_car')) ? '<br>' . form_error('passenger_5_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_6')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Are you registered with a GP?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_6" class="form-control">
                                                            <option  <?php echo $CI->checkSelected('passenger_6', @$leadData->passenger_6, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('passenger_6', @$leadData->passenger_6, "No"); ?> value="No">No</option>
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
                                                            <option  <?php echo $CI->checkSelected('AccidentEmergency', @$leadData->employers_name_address_telephone_number, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('AccidentEmergency', @$leadData->employers_name_address_telephone_number, "No"); ?> value="No">No</option>
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
                                                        <input class="form-control" placeholder="Please advise which hospital you visited" name="passenger_6_date_of_birth"  value="<?php echo (set_value('passenger_6_date_of_birth') || form_error('passenger_6_date_of_birth')) ? (set_value('passenger_6_date_of_birth')) : (@$leadData->passenger_6_date_of_birth); ?>">
                                                        <?php echo (form_error('passenger_6_date_of_birth')) ? '<br>' . form_error('passenger_6_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_6_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Date of visit?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <input class="form-control" placeholder="Date of visit?" name="passenger_6_position_in_car" id="passenger_6_position_in_car" value="<?php echo (set_value('passenger_6_position_in_car') || form_error('passenger_6_position_in_car')) ? (set_value('passenger_6_position_in_car')) : (@$leadData->passenger_6_position_in_car); ?>">
                                                        
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
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Details  </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('DidYouVisit')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Did you visit any other treatment providers (e.g. physiotherapist)?</label>
                                                    <div class="col-md-12" style="">
                                                        <select name="DidYouVisit" class="form-control">
                                                            <option  <?php echo $CI->checkSelected('DidYouVisit', @$leadData->credit_hire_or_vehicle_replacement, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('DidYouVisit', @$leadData->credit_hire_or_vehicle_replacement, "No"); ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('DidYouVisit')) ? '<br>' . form_error('DidYouVisit', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('fi_tax_of610')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Please provide details of other treatment providers</label>
                                                    <div class="col-md-12" style="">
                                                        <textarea rows="5" style="resize: none" name="fi_tax_of610" class="form-control" placeholder="Please provide details of other treatment providers"><?php echo (set_value('fi_tax_of610') || form_error('fi_tax_of610')) ? (set_value('fi_tax_of610')) : (@$leadData->ec_billingapsuite); ?></textarea>
                                                        <?php echo (form_error('fi_tax_of610')) ? '<br>' . form_error('fi_tax_of610', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">


                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('haveYouApplied')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Have you applied to us for compensation before? If yes, Do you know your previous CICA reference number?</label>
                                                    <div class="col-md-12" style="">
                                                        <textarea rows="5" style="resize: none" name="haveYouApplied" class="form-control" placeholder="Have you applied to us for compensation before? If yes, Do you know your previous CICA reference number?"><?php echo (set_value('haveYouApplied') || form_error('haveYouApplied')) ? (set_value('haveYouApplied')) : (@$leadData->have_you_claimed_before); ?></textarea>
                                                        <?php echo (form_error('haveYouApplied')) ? '<br>' . form_error('haveYouApplied', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('DidyouseekMedicalAttention')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">What was your previous CICA reference number?</label>
                                                    <div class="col-md-12" style="">
                                                        <input name="DidyouseekMedicalAttention"  value="<?php echo (set_value('DidyouseekMedicalAttention') || form_error('DidyouseekMedicalAttention')) ? (set_value('DidyouseekMedicalAttention')) : (@$leadData->did_you_seek_medical_attention); ?>"  class="form-control" placeholder="What was your previous CICA reference number?">
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
                                                        <textarea name="HaveyouClaimded" class="form-control" rows="5" style="resize: none" placeholder="Have you claimed or do you intend to claim compensation from any other source for the same incident? If Yes, What is the name of the person or organisation you are claiming from?"><?php echo (set_value('HaveyouClaimded') || form_error('HaveyouClaimded')) ? (set_value('HaveyouClaimded')) : (@$leadData->third_party_policy_number); ?></textarea>
                                                        <?php  echo (form_error('HaveyouClaimded')) ? '<br>' . form_error('HaveyouClaimded', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('Additionalnotes')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Date of claim?</label>
                                                    <div class="col-md-12" style="">
                                                        <input name="Additionalnotes"  value="<?php echo (set_value('Additionalnotes') || form_error('Additionalnotes')) ? (set_value('Additionalnotes')) : (@$leadData->additional_notes); ?>"  class="form-control" placeholder="Date of claim?">
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
                                                               
                                                            <option  <?php echo $CI->checkSelected('marketing_source', @$leadData->marketing_source, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('marketing_source', @$leadData->marketing_source, "No"); ?> value="No">No</option>
                                                            </select>
                                                            <?php echo (form_error('marketing_source')) ? '<br>' . form_error('marketing_source', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('replacementInvoiceNumber')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left">Do you have any criminal convictions, including simple cautions and reprimands, in the UK or abroad? If Yes, Provide full details including Country, Offernce, Sentence and date of sentence</label>
                                                        <div class="col-md-12" style="">
                                                            <textarea name="replacementInvoiceNumber" rows="5" style="resize: none" class="form-control" placeholder="Do you have any criminal convictions, including simple cautions and reprimands, in the UK or abroad? If Yes, Provide full details including Country, Offernce, Sentence and date of sentence"><?php echo (set_value('replacementInvoiceNumber') || form_error('replacementInvoiceNumber')) ? (set_value('replacementInvoiceNumber')) : (@$leadData->replacement_invoice_number); ?></textarea>
                                                            <?php echo (form_error('replacementInvoiceNumber')) ? '<br>' . form_error('replacementInvoiceNumber', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
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
                                                            <textarea name="InterpreterName" class="form-control" placeholder="Enter Details"><?php echo (set_value('InterpreterName') || form_error('InterpreterName')) ? (set_value('InterpreterName')) : (@$leadData->interpreter_name); ?></textarea>
                                                            <?php echo (form_error('InterpreterName')) ? '<br>' . form_error('InterpreterName', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <!--Interpreter Paid Field-->                                            

                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('Interpreterpaid')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left">Equal Opportunities Questionnaire: Gender, Do you identify yourself as Transgender, transexual or intersex. Religion. Sexual Orientation. Do you consider yourself disabled. Are you white,mixed,asian,black,chinese other. Ethnicity</label>
                                                        <div class="col-md-12" style="">
                                                            <textarea name="Interpreterpaid" class="form-control" placeholder="Enter Details"><?php echo (set_value('Interpreterpaid') || form_error('Interpreterpaid')) ? (set_value('Interpreterpaid')) : (@$leadData->interpreter_paid); ?></textarea>
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
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('contactphone')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Permission to Phone</label>
                                                    <div class="col-md-8" style="">
                                                        <select class="form-control" name="contactphone">
                                                            <option value="">Permission to SMS</option>
                                                            <option <?php echo $CI->checkSelected('contactphone', @$leadData->contact_phone, "Unknown"); ?> value="Unknown">Unknown</option>
                                                            <option <?php echo $CI->checkSelected('contactphone', @$leadData->contact_phone, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('contactphone', @$leadData->contact_phone, "No"); ?> value="No">No</option>
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
                                                        <select class="form-control" name="contactsms">
                                                            <option value="">Permission to SMS</option>
                                                            <option <?php echo $CI->checkSelected('contactsms', @$leadData->contact_sms, "Unknown"); ?> value="Unknown">Unknown</option>
                                                            <option <?php echo $CI->checkSelected('contactsms', @$leadData->contact_sms, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('contactsms', @$leadData->contact_sms, "No"); ?> value="No">No</option>
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
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('contactemail')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Permission to Email</label>
                                                    <div class="col-md-8" style="">
                                                        <select class="form-control" name="contactemail">
                                                            <option value="">Select Permission to Email</option>
                                                            <option <?php echo $CI->checkSelected('contactemail', @$leadData->contact_email, "Unknown"); ?> value="Unknown">Unknown</option>
                                                            <option <?php echo $CI->checkSelected('contactemail', @$leadData->contact_email, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('contactemail', @$leadData->contact_email, "No"); ?> value="No">No</option>
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
                                                        <select class="form-control" name="contactmail">
                                                            <option value="">Select Permission to Mail</option>
                                                            <option  <?php echo $CI->checkSelected('contactmail', @$leadData->contact_mail, "Unknown"); ?> value="Unknown">Unknown</option>
                                                            <option  <?php echo $CI->checkSelected('contactmail', @$leadData->contact_mail, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('contactmail', @$leadData->contact_mail, "No"); ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('contactmail')) ? '<br>' . form_error('contactmail', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Contact to Time-->                                         

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('contacttime')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Preferred Contact Time</label>
                                                    <div class="col-md-8" style="">
                                                        <select class="form-control" name="contacttime" id="contacttime">
                                                            <option value="">Select Contact Time</option>
                                                            <option <?php echo $CI->checkSelected('contacttime', @$leadData->contact_time, "Anytime"); ?> value="Anytime">Anytime</option>
                                                            <option <?php echo $CI->checkSelected('contacttime', @$leadData->contact_time, "Morning"); ?> value="Morning">Morning</option>
                                                            <option <?php echo $CI->checkSelected('contacttime', @$leadData->contact_time, "Afternoon"); ?> value="Afternoon">Afternoon</option>
                                                            <option <?php echo $CI->checkSelected('contacttime', @$leadData->contact_time, "Evening"); ?> value="Evening">Evening</option>
                                                        </select>
                                                        <?php echo (form_error('contacttime')) ? '<br>' . form_error('contacttime', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-md-6" id="PreferredTimetoCall" style="display: none">
                                                <div class="form-group <?php echo (form_error('PreferredTimetoCall')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Preferred Time to Call</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" value="<?php echo (set_value('PreferredTimetoCall') || $CI->CheckEmpty('PreferredTimetoCall')) ? (set_value('PreferredTimetoCall')) : @$leadData->preferred_time_to_call; ?>" class="form-control" placeholder="Enter Preferred Time to Call" name="PreferredTimetoCall">
                                                        <?php echo (form_error('PreferredTimetoCall')) ? '<br>' . form_error('PreferredTimetoCall', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
     
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('preferred_date_to_call')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Preferred date to call</label>
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Preferred date to call" value="<?php echo (set_value('preferred_date_to_call') || $CI->CheckEmpty('preferred_date_to_call')) ? (set_value('preferred_date_to_call')) : @$leadData->preferred_date_to_call; ?>" name="preferred_date_to_call" id="preferred_date_to_call">
                                                        <?php echo (form_error('preferred_date_to_call')) ? '<br>' . form_error('preferred_date_to_call', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>                               
                               
                            </div>
                                </div>                                                                
                            </div>
                                    
<input type="hidden" name="clone" value="clone">
                            <hr class="m-t-0 m-b-40">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">

                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 30%; margin-top: -26px; margin-bottom: 19px">
                                                <button type="submit" class="btn btn-info">Submit Changes</button>
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
        
    </div>    
    
    
    
    <!--./row-->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
</div>
<!-- /.container-fluid -->
