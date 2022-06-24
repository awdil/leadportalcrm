
<?php
    
    $formName       = "";
    $Name_Action   = "";
    
   if($lead_campaign[0]->campaign_name == "Employment"){
       
        $formName = "Employment Claims Form";
        $Name_Action   = base_url('Mod/createEmploymentLead/'). $lead_campaign[0]->campaign_short_name;         
    }
    
?>

<?php $CI = & get_instance(); ?>

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

            <h4 class="page-title">Employment Lead</h4> </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active"> Employment Lead</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Clone <?php echo $formName; ?></div>
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

                        <div class="col-md-12" style="padding: 0px; ">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Personal Details </p>
                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>

                         <form action="<?php echo $Name_Action; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                           <?php  if ($this->input->post('clone') == "clone" || $this->session->userdata('clone')): ?>
                                <input type="hidden" name="clone" value="clone">                                
                           <?php endif; ?> 
                            
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
                                                    <label class="control-label col-md-4" style="text-align: left">Your save and return number</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="DateofAccident" class="form-control"  value="<?php echo (set_value('dateOfBirth') || $CI->CheckEmpty('dateOfBirth')) ? (set_value('dateOfBirth')) : @$leadData->fi_othersaving; ?>" placeholder="Your save and return number">
                                                        <?php echo (form_error('DateofAccident')) ? '<br>' . form_error('DateofAccident', "<b class='text-danger'>", '</b>') : ''; ?>                                                 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>  
                               

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('memorableword')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Create your memorable word</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="memorableword" class="form-control"  value="<?php echo (set_value('memorableword') || $CI->CheckEmpty('memorableword')) ? (set_value('memorableword')) : @$leadData->position_on_liability; ?>" placeholder="Create your memorable word">
                                                        <?php echo (form_error('memorableword')) ? '<br>' . form_error('memorableword', "<b class='text-danger'>", '</b>') : ''; ?>                                               
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Whatwastheexactlocationoftheaccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Best way to send correspondence to you (the claimant)</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="Whatwastheexactlocationoftheaccident" class="form-control">
                                                            <option <?php echo $CI->checkSelected('Whatwastheexactlocationoftheaccident', @$leadData->what_was_the_exact_location_of_the_accident, "Email"); ?> value="Email">Email</option>
                                                            <option <?php echo $CI->checkSelected('Whatwastheexactlocationoftheaccident', @$leadData->what_was_the_exact_location_of_the_accident, "Post"); ?> value="Post">Post</option>
                                                        
                                                        </select>
                                                        <?php echo (form_error('Whatwastheexactlocationoftheaccident')) ? '<br>' . form_error('Whatwastheexactlocationoftheaccident', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Whodoyoublamefortheaccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Would you be able to take part in a hearing by video? (Requires internet access):</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="Whodoyoublamefortheaccident" class="form-control">
                                                            <option  <?php echo $CI->checkSelected('Whodoyoublamefortheaccident', @$leadData->who_do_you_blame_for_the_accident, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('Whodoyoublamefortheaccident', @$leadData->who_do_you_blame_for_the_accident, "No"); ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('Whodoyoublamefortheaccident')) ? '<br>' . form_error('Whodoyoublamefortheaccident', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('Whatwastheweatherlike')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Give the name of your employer or the person or organisation you are claiming against (If you need to you can add more respondents at 2.5)</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" style="resize: none" name="Whatwastheweatherlike" placeholder="Give the name of your employer or the person or organisation you are claiming against (If you need to you can add more respondents at 2.5)" class="form-control"><?php echo (set_value('Whatwastheweatherlike') || form_error('Whatwastheweatherlike')) ? (set_value('Whatwastheweatherlike')) : (@$leadData->what_was_the_weather_like); ?></textarea>
                                                        <?php echo (form_error('Whatwastheweatherlike')) ? '<br>' . form_error('Whatwastheweatherlike', "<b class='text-danger'>", '</b>') : ''; ?>  
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
                                                        <label class="control-label col-md-12" style="text-align: left">Respondent&#039;s Full Address</label>
                                                        <div class="col-md-12" style="">
                                                            <textarea rows="5" style="resize: none" name="passenger_1" class="form-control" placeholder="Respondent&#039;s Full Address"><?php echo (set_value('passenger_1') || form_error('passenger_1')) ? (set_value('passenger_1')) : (@$leadData->passenger_1); ?></textarea>
                                                            <?php echo (form_error('passenger_1')) ? '<br>' . form_error('passenger_1', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('passenger_1_position_in_car')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left;">Respondents Contact Number</label>

                                                        <div class="col-md-12" style="">

                                                        <input name="passenger_1_position_in_car" class="form-control"  value="<?php echo (set_value('passenger_1_position_in_car') || $CI->CheckEmpty('passenger_1_position_in_car')) ? (set_value('passenger_1_position_in_car')) : @$leadData->passenger_1_position_in_car; ?>" placeholder="Respondents Contact Number">
                                                        <?php echo (form_error('passenger_1_position_in_car')) ? '<br>' . form_error('passenger_1_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>   

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('deferYourApplication')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left;">If Yes, please give the Acas early conciliation certificate number.</label>
                                                        <div class="col-md-12" style="">
                                                            <input name="deferYourApplication" class="form-control"  value="<?php echo (set_value('deferYourApplication') || $CI->CheckEmpty('deferYourApplication')) ? (set_value('deferYourApplication')) : @$leadData->triage_invoive_number; ?>" placeholder="If Yes, please give the Acas early conciliation certificate number.">
                                                             <?php echo (form_error('deferYourApplication')) ? '<br>' . form_error('deferYourApplication', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('passenger_1_relationship')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left;">If No, why don’t you have this number?</label>
                                                        <div class="col-md-12" style="">
                                                            <select name="passenger_1_relationship"  class="form-control">
                                                                <option <?php echo (set_value('passenger_1_relationship') == "Another person I&#039;m making the claim with has an acas early concilation certificate number") ? "selected" : ""; ?> value="Another person I&#039;m making the claim with has an acas early concilation certificate number">Another person I&#039;m making the claim with has an acas early concilation certificate number</option>
                                                                <option <?php echo (set_value('passenger_1_relationship') == "Acas doesn&#039;t have the power to conciliate on some or all of my claim") ? "selected" : ""; ?> value="Acas doesn&#039;t have the power to conciliate on some or all of my claim">Acas doesn&#039;t have the power to conciliate on some or all of my claim</option>
                                                                <option <?php echo (set_value('passenger_1_relationship') == "My employer has already been in touch with Acas") ? "selected" : ""; ?> value="My employer has already been in touch with Acas">My employer has already been in touch with Acas</option>
                                                                <option <?php echo (set_value('passenger_1_relationship') == "My claim consists only of a complaint of unfair dismissal which contains an application for interim relief") ? "selected" : ""; ?> value="My claim consists only of a complaint of unfair dismissal which contains an application for interim relief">My claim consists only of a complaint of unfair dismissal which contains an application for interim relief</option>
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
                                                        <label class="control-label col-md-12" style="text-align: left;">If you worked at a different address from the one you have given at 2.2 please give the full address)</label>
                                                        <div class="col-md-12" style="">
                                                            <input name="passenger_1_date_of_birth" class="form-control"  value="<?php echo (set_value('passenger_1_date_of_birth') || $CI->CheckEmpty('passenger_1_date_of_birth')) ? (set_value('passenger_1_date_of_birth')) : @$leadData->passenger_1_date_of_birth; ?>" placeholder="If you worked at a different address from the one you have given at 2.2 please give the full address)">
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
                                                <div class="form-group <?php echo (form_error('OLPLONLY')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">5 If there are other respondents please tick this box and put their names and addresses here. )</label>
                                                    <div class="col-md-12" style="">
                                                        <textarea name="OLPLONLY" rows="5" style="resize: none" class="form-control" placeholder="5 If there are other respondents please tick this box and put their names and addresses here. )"><?php echo (set_value('OLPLONLY') || $CI->CheckEmpty('OLPLONLY')) ? (set_value('OLPLONLY')) : @$leadData->ol_pl_only; ?></textarea>
                                                        <?php echo (form_error('OLPLONLY')) ? '<br>' . form_error('OLPLONLY', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                        </div>                                
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">

                                            
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('TimeofAccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Please give the Acas early conciliation certificate number if you have one</label>
                                                    <div class="col-md-12" style="">
                                                        <input name="TimeofAccident" class="form-control" value="<?php echo (set_value('TimeofAccident') || $CI->CheckEmpty('TimeofAccident')) ? (set_value('TimeofAccident')) : @$leadData->time_of_accident; ?>" placeholder="Please give the Acas early conciliation certificate number if you have one">                                                 
                                                        <?php echo (form_error('TimeofAccident')) ? '<br>' . form_error('TimeofAccident', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>                                        
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-12">
                                    

                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('Werethepoliceinvolved')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-12" style="text-align: left">If No, why don’t you have this number?:</label>
                                                <div class="col-md-12" style="">
                                                    <select class="form-control" name="Werethepoliceinvolved">
                                                        <option <?php echo (set_value('Werethepoliceinvolved') == "Another person I&#039;m making the claim with has an acas early concilation certificate number") ? "selected" : ""; ?> value="Another person I&#039;m making the claim with has an acas early concilation certificate number">Another person I&#039;m making the claim with has an acas early concilation certificate number</option>
                                                        <option <?php echo (set_value('Werethepoliceinvolved') == "Acas doesn&#039;t have the power to conciliate on some or all of my claim") ? "selected" : ""; ?> value="Acas doesn&#039;t have the power to conciliate on some or all of my claim">Acas doesn&#039;t have the power to conciliate on some or all of my claim</option>
                                                        <option <?php echo (set_value('Werethepoliceinvolved') == "My employer has already been in touch with Acas") ? "selected" : ""; ?> value="My employer has already been in touch with Acas">My employer has already been in touch with Acas</option>
                                                        <option <?php echo (set_value('Werethepoliceinvolved') == "My claim consists only of a complaint of unfair dismissal which contains an application for interim relief") ? "selected" : ""; ?> value="My claim consists only of a complaint of unfair dismissal which contains an application for interim relief">My claim consists only of a complaint of unfair dismissal which contains an application for interim relief</option>
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
                                                <div class="form-group <?php echo (form_error('MedNegOnly')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Provide full details of respondent 3 and others if there are more </label>
                                                    <div class="col-md-12" style="">
                                                        <textarea name="MedNegOnly" class="form-control" rows="5" style="resize: none" placeholder="Provide full details of respondent 3 and others if there are more "><?php echo (set_value('MedNegOnly') || $CI->CheckEmpty('MedNegOnly')) ? (set_value('MedNegOnly')) : @$leadData->med_neg_only; ?></textarea>
                                                        <?php echo (form_error('MedNegOnly')) ? '<br>' . form_error('MedNegOnly', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    <div class="col-md-12">
                                     
                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('InWhichCountry')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-12" style="text-align: left">Are you aware that your claim is one of a number of claims against the same employer arising from the same, or similar, circumstances? </label>
                                                <div class="col-md-12" style="">
                                                    <select class="form-control" name="InWhichCountry" >
                                                            <option <?php echo (set_value('InWhichCountry') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('InWhichCountry') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                    <?php echo (form_error('InWhichCountry')) ? '<br>' . form_error('InWhichCountry', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="row">
                                    <div class="col-md-12">

                                    <div class="col-md-12">    
                                        <div class="form-group <?php echo (form_error('DetailsofTheIncident')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-12" style="text-align: left">If Yes, and you know the names of any other claimants, add them here. This will allow us to link your claim to other related claims.</label>
                                                <div class="col-md-12" style="">
                                                    <textarea name="DetailsofTheIncident" class="form-control" rows="5" style="resize: none" placeholder="If Yes, and you know the names of any other claimants, add them here. This will allow us to link your claim to other related claims."><?php echo (set_value('DetailsofTheIncident') || $CI->CheckEmpty('DetailsofTheIncident')) ? (set_value('DetailsofTheIncident')) : @$leadData->ec_relationship; ?></textarea>
                                                    <?php echo (form_error('DetailsofTheIncident')) ? '<br>' . form_error('DetailsofTheIncident', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('CreditHireorVehicleReplacement')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-12" style="text-align: left">1 If you were not employed by any of the respondents you have named but are making a claim for some reason connected to employment (for example, relating to a job application which you made or against a trade union, qualifying body or the like) please state the type of claim you are making here. (You will get the chance to provide details later):</label>
                                                <div class="col-md-12" style="">
                                                    <textarea name="CreditHireorVehicleReplacement" class="form-control" rows="5" style="resize: none" placeholder="1 If you were not employed by any of the respondents you have named but are making a claim for some reason connected to employment (for example, relating to a job application which you made or against a trade union, qualifying body or the like) please state the type of claim you are making here. (You will get the chance to provide details later):"><?php echo (set_value('CreditHireorVehicleReplacement') || $CI->CheckEmpty('CreditHireorVehicleReplacement')) ? (set_value('CreditHireorVehicleReplacement')) : @$leadData->credit_hire_or_vehicle_replacement; ?></textarea>
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
                                                <label class="control-label col-md-12" style="text-align: left">When did your employment start?</label>
                                                <div class="col-md-12" style="">
                                                    <input name="ClientStatusinAccident" class="form-control"  value="<?php echo (set_value('ClientStatusinAccident') || $CI->CheckEmpty('ClientStatusinAccident')) ? (set_value('ClientStatusinAccident')) : @$leadData->client_status_in_accident; ?>" placeholder="When did your employment start?">
                                                    <?php echo (form_error('ClientStatusinAccident')) ? '<br>' . form_error('ClientStatusinAccident', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('Isthisalinkedpassenger')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-12" style="text-align: left">Is your employment continuing?: </label>
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
                                                    <label class="control-label col-md-12" style="text-align: left">If your employment has ended, when did it end?</label>
                                                    <div class="col-md-12" style="">
                                                        <input name="WasAccidentreportedorrecordedintheaccidentBook" class="form-control"  value="<?php echo (set_value('WasAccidentreportedorrecordedintheaccidentBook') || $CI->CheckEmpty('WasAccidentreportedorrecordedintheaccidentBook')) ? (set_value('WasAccidentreportedorrecordedintheaccidentBook')) : @$leadData->is_injury_on_going_injury_physio; ?>" placeholder="If your employment has ended, when did it end?">
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
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Oter Information </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">If your employment has not ended, are you in a period of notice and, if so, when will that end?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Enter" name="passenger_2"  value="<?php echo (set_value('passenger_2') || $CI->CheckEmpty('passenger_2')) ? (set_value('passenger_2')) : @$leadData->passenger_2; ?>">
                                                        <?php echo (form_error('passenger_2')) ? '<br>' . form_error('passenger_2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_2_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Please say what job you do or did.</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Enter " name="passenger_2_relationship" value="<?php echo (set_value('passenger_2_relationship') || $CI->CheckEmpty('passenger_2_relationship')) ? (set_value('passenger_2_relationship')) : @$leadData->passenger_2_relationship; ?>" >
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
                                                    <label class="control-label col-md-12" style="text-align: left;">How many hours on average do, or did you work each week in the job this claim is about?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Enter " name="passenger_2_date_of_birth" value="<?php echo (set_value('passenger_2_date_of_birth') || $CI->CheckEmpty('memorableword2222')) ? (set_value('passenger_2_date_of_birth')) : @$leadData->passenger_2_date_of_birth; ?>">
                                                        <?php echo (form_error('passenger_2_date_of_birth')) ? '<br>' . form_error('passenger_2_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_2_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">6.2 How much are, or were you paid? Pay before tax and normal take-home pay. State if this was paid weekly or monthly</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <input class="form-control" placeholder="Enter " name="passenger_2_position_in_car" value="<?php echo (set_value('passenger_2_position_in_car') || $CI->CheckEmpty('passenger_2_position_in_car')) ? (set_value('passenger_2_position_in_car')) : @$leadData->passenger_2_position_in_car; ?>">
                                                        
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
                                                    <label class="control-label col-md-12" style="text-align: left;">If your employment has ended, did you work (or were you paid for) a period of notice?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_3" class="form-control">
                                                            <option <?php echo (set_value('passenger_3') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('passenger_3') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('passenger_3')) ? '<br>' . form_error('passenger_3', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_3_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">If Yes, how many weeks, or months’ notice did you work, or were you paid for?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="If Yes, how many weeks, or months’ notice did you work, or were you paid for?" name="passenger_3_relationship" id="passenger_3_relationship" value="<?php echo (set_value('passenger_3_relationship') || $CI->CheckEmpty('passenger_3_relationship')) ? (set_value('passenger_3_relationship')) : @$leadData->passenger_3_relationship; ?>">
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
                                                    <label class="control-label col-md-12" style="text-align: left;">4 Were you in your employer’s pension scheme?: </label>
                                                    
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
                                                    <label class="control-label col-md-12" style="text-align: left;">If you received any other benefits, e.g. company car, medical insurance, etc, from your employer, please give details.</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <input name="passenger_3_position_in_car" class="form-control"  value="<?php echo (set_value('passenger_3_position_in_car') || $CI->CheckEmpty('passenger_3_position_in_car')) ? (set_value('passenger_3_position_in_car')) : @$leadData->passenger_3_position_in_car; ?>" placeholder="">
                                                        
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
                                                    <label class="control-label col-md-12" style="text-align: left;">Have you got another job? </label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_4" class="form-control">
                                                            <option <?php echo (set_value('passenger_4') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('passenger_4') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            
                                                        </select>
                                                        <?php echo (form_error('passenger_4')) ? '<br>' . form_error('passenger_4', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_4_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Please say when you started (or will start) work </label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input name="passenger_4_relationship" class="form-control"  value="<?php echo (set_value('passenger_4_relationship') || $CI->CheckEmpty('passenger_4_relationship')) ? (set_value('passenger_4_relationship')) : @$leadData->passenger_4_relationship; ?>" placeholder="">
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
                                                    <label class="control-label col-md-12" style="text-align: left;">Please say how much you are now earning (or will earn)</label>
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="Please say how much you are now earning (or will earn)" name="passenger_4_date_of_birth" value="<?php echo (set_value('passenger_4_date_of_birth') || $CI->CheckEmpty('passenger_4_date_of_birth')) ? (set_value('passenger_4_date_of_birth')) : @$leadData->passenger_4_date_of_birth; ?>">
                                                        <?php echo (form_error('passenger_4_date_of_birth')) ? '<br>' . form_error('passenger_4_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('discriminatedby')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Please indicate the type of claim you are making by ticking one or more of the boxes below.: I was unfairly dismissed, I was discriminated</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <select name="discriminatedby" class="form-control">
                                                            <option <?php echo (set_value('discriminatedby') == "I was unfairly dismissed ") ? "selected" : ""; ?> value="I was unfairly dismissed">I was unfairly dismissed </option>
                                                            <option <?php echo (set_value('discriminatedby') == ", I was discriminated") ? "selected" : ""; ?> value="I was discriminated">, I was discriminated </option>
                                                        </select>
                                                        
                                                         <?php echo (form_error('discriminatedby')) ? '<br>' . form_error('discriminatedby', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_4_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">I was discriminated on the grounds of </label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <select name="passenger_4_position_in_car" class="form-control">
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "Age ") ? "selected" : ""; ?> value="Age">Age </option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "Race ") ? "selected" : ""; ?> value="Race">Race </option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "Gender Reassignment") ? "selected" : ""; ?> value="Gender Reassignment">Gender Reassignment</option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "Pregnancy or maternity") ? "selected" : ""; ?> value="Pregnancy or maternity">Pregnancy or maternity</option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "Sexual Oriientation") ? "selected" : ""; ?> value="Sexual Oriientation">Sexual Oriientation</option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "Religion or belief") ? "selected" : ""; ?> value="Religion or belief">Religion or belief</option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "Disability") ? "selected" : ""; ?> value="Disability">Disability</option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "Marriage or partnership") ? "selected" : ""; ?> value="Marriage or partnership">Marriage or partnership</option>
                                                            <option <?php echo (set_value('passenger_4_position_in_car') == "Sex") ? "selected" : ""; ?> value="Sex">Sex</option>
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
                                                    <label class="control-label col-md-12" style="text-align: left;">I am claiming;</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_5" class="form-control">
                                                            <option <?php echo (set_value('passenger_5') == "Redundancy Payment") ? "selected" : ""; ?> value="Redundancy Payment">Redundancy Payment</option>
                                                            <option <?php echo (set_value('passenger_5') == "Notice Pay") ? "selected" : ""; ?> value="Notice Pay">Notice Pay</option>
                                                            <option <?php echo (set_value('passenger_5') == "Holiday Pay") ? "selected" : ""; ?> value="Holiday Pay">Holiday Pay</option>
                                                            <option <?php echo (set_value('passenger_5') == "Arrears of pay") ? "selected" : ""; ?> value="Arrears of pay">Arrears of pay</option>
                                                            <option <?php echo (set_value('passenger_5') == "other payments") ? "selected" : ""; ?> value="other payments">other payments</option>
                                                        </select>
                                                        <?php echo (form_error('passenger_5')) ? '<br>' . form_error('passenger_5', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_5_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">I am making another type of claim which the Employment Tribunal can deal with.  </label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <input class="form-control" placeholder="I am making another type of claim which the Employment Tribunal can deal with. " name="passenger_5_relationship" value="<?php echo (set_value('passenger_5_relationship') || $CI->CheckEmpty('passenger_5_relationship')) ? (set_value('passenger_5_relationship')) : @$leadData->passenger_5_relationship; ?>">
                                                        <?php echo (form_error('passenger_5_relationship')) ? '<br>' . form_error('passenger_5_relationship', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_5_date_of_birth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Please set out the background and details of your claim in the space below. The details of your claim should include the date(s) when the event(s) you are complaining about happened. Please use the blank sheet at the end of the form if needed.</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <input class="form-control" placeholder="Enter" value="<?php echo (set_value('passenger_5_date_of_birth') || $CI->CheckEmpty('passenger_5_date_of_birth')) ? (set_value('passenger_5_date_of_birth')) : @$leadData->passenger_5_date_of_birth; ?>">
                                                        
                                                         <?php echo (form_error('passenger_5_date_of_birth')) ? '<br>' . form_error('passenger_5_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_5_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Please Select the relevant option to say what you want if your claim is successful</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_5_position_in_car" class="form-control">
                                                            <option <?php echo (set_value('passenger_6') == "If claiming unfair dismissal") ? "selected" : ""; ?> value="If claiming unfair dismissal">If claiming unfair dismissal</option>
                                                            <option <?php echo (set_value('passenger_6') == "to get your old job back and compensation") ? "selected" : ""; ?> value="to get your old job back and compensation">to get your old job back and compensation</option>
                                                            <option <?php echo (set_value('passenger_6') == "If claiming unfair dismissal") ? "selected" : ""; ?> value="If claiming unfair dismissal">If claiming unfair dismissal</option>
                                                             <option <?php echo (set_value('passenger_6') == "to get another job with the same employer or associated employer and compensation") ? "selected" : ""; ?> value="to get another job with the same employer or associated employer and compensation">to get another job with the same employer or associated employer and compensation</option>
                                                            <option <?php echo (set_value('passenger_6') == "compensation only") ? "selected" : ""; ?> value="compensation only">compensation only</option>
                                                            <option <?php echo (set_value('passenger_6') == "if claiming discrimination") ? "selected" : ""; ?> value="if claiming discrimination">if claiming discrimination</option>
                                                            <option <?php echo (set_value('passenger_6') == "a recommendation") ? "selected" : ""; ?> value="a recommendation">a recommendation</option>
                                                        </select>
                                                        <?php echo (form_error('passenger_5_position_in_car')) ? '<br>' . form_error('passenger_5_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            

                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_6')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">What compensation or remedy are you seeking? If you are claiming financial compensation please give as much detail as you can about how much you are claiming and how you have calculated this sum. (Please note any figure stated below will be viewed as helpful information but it will not restrict what you can claim and you will be permitted to revise the sum claimed later. See the Guidance for further information about how you can calculate compensation). If you are seeking any other remedy from the Tribunal which you have not already identified please also state this below.</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <textarea name="passenger_6" class="form-control" rows="5" style="resize: none" placeholder="What compensation or remedy are you seeking? If you are claiming financial compensation please give as much detail as you can about how much you are claiming and how you have calculated this sum. (Please note any figure stated below will be viewed as helpful information but it will not restrict what you can claim and you will be permitted to revise the sum claimed later. See the Guidance for further information about how you can calculate compensation). If you are seeking any other remedy from the Tribunal which you have not already identified please also state this below."><?php echo (set_value('passenger_6') || $CI->CheckEmpty('passenger_6')) ? (set_value('passenger_6')) : @$leadData->passenger_6; ?></textarea>
                                                        <?php echo (form_error('passenger_6')) ? '<br>' . form_error('passenger_6', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('AccidentEmergency?')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">If your claim consists of, or includes, a claim that you are making a protected disclosure under the Employment Rights Act 1996 (otherwise known as a ‘whistleblowing’ claim), please tick the box if you want a copy of this form, or information from it, to be forwarded on your behalf to a relevant regulator (known as a ‘prescribed person’ under the relevant legislation) by tribunal staff. (See Guidance).</label>
                                                    
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
                                                    <label class="control-label col-md-12" style="text-align: left;">Do you have a disability?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        <select name="passenger_6_date_of_birth" class="form-control">
                                                            <option <?php echo (set_value('Accipassenger_6_date_of_birthdentEmergency') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                            <option <?php echo (set_value('passenger_6_date_of_birth') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('passenger_6_date_of_birth')) ? '<br>' . form_error('passenger_6_date_of_birth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <!--<div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('passenger_6_position_in_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left;">Date of visit?</label>
                                                    
                                                    <div class="col-md-12" style="">
                                                        
                                                        <input class="form-control" placeholder="Date of visit?" name="passenger_6_position_in_car" id="passenger_6_position_in_car" value="<?php echo set_value('passenger_6_date_of_birth'); ?>">
                                                        
                                                         <?php echo (form_error('passenger_6_position_in_car')) ? '<br>' . form_error('passenger_6_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>-->

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
                                                <div class="form-group <?php echo (form_error('DidyouseekMedicalAttention')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">If Yes, it would help us if you could say what this disability is and tell us what assistance, if any, you will need as your claim progresses through the system, including for any hearings that maybe held at tribunal premises.</label>
                                                    <div class="col-md-12" style="">
                                                        <input name="DidyouseekMedicalAttention"  value="<?php echo (set_value('DidyouseekMedicalAttention') || $CI->CheckEmpty('DidyouseekMedicalAttention')) ? (set_value('DidyouseekMedicalAttention')) : @$leadData->did_you_seek_medical_attention; ?>"  class="form-control" placeholder="">
                                                        <?php echo (form_error('DidyouseekMedicalAttention')) ? '<br>' . form_error('DidyouseekMedicalAttention', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('fi_tax_of610')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Section 2 allows you to list up to three respondents. If there are any more respondents please provide their details here</label>
                                                    <div class="col-md-12" style="">
                                                        <textarea rows="5" style="resize: none" name="fi_tax_of610" class="form-control" placeholder="Section 2 allows you to list up to three respondents. If there are any more respondents please provide their details here"><?php echo (set_value('fi_tax_of610') || $CI->CheckEmpty('fi_tax_of610')) ? (set_value('fi_tax_of610')) : @$leadData->fi_tax_of610; ?></textarea>
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
                                                    <label class="control-label col-md-12" style="text-align: left">You can provide additional information about your claim in this section. If you’re part of a group claim, give the Acas early conciliation certificate numbers for other people in your group. If they don’t have numbers, tell us why</label>
                                                    <div class="col-md-12" style="">
                                                        <textarea rows="5" style="resize: none" name="haveYouApplied" class="form-control" placeholder="You can provide additional information about your claim in this section. If you’re part of a group claim, give the Acas early conciliation certificate numbers for other people in your group. If they don’t have numbers, tell us why"><?php echo (set_value('haveYouApplied') || $CI->CheckEmpty('haveYouApplied')) ? (set_value('haveYouApplied')) : @$leadData->ec_servicecity; ?></textarea>
                                                        <?php echo (form_error('haveYouApplied')) ? '<br>' . form_error('haveYouApplied', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                           
                                            
                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('DidYouVisit')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Which age group are you in?</label>
                                                    <div class="col-md-12" style="">
                                                        <select name="DidYouVisit" class="form-control">
                                                            <option <?php echo (set_value('DidYouVisit') == "Under 25") ? "selected" : ""; ?> value="Under 25">Under 25</option>
                                                            <option <?php echo (set_value('DidYouVisit') == "25 - 34") ? "selected" : ""; ?> value="25 - 34">25 - 34</option>
                                                            <option <?php echo (set_value('DidYouVisit') == "35-44") ? "selected" : ""; ?> value="35-44">35-44</option>
                                                            <option <?php echo (set_value('DidYouVisit') == "45-54") ? "selected" : ""; ?> value="45-54">45-54</option>
                                                            <option <?php echo (set_value('DidYouVisit') == "55-64") ? "selected" : ""; ?> value="55-64">55-64</option>
                                                            <option <?php echo (set_value('DidYouVisit') == "65 and over") ? "selected" : ""; ?> value="65 and over">65 and over</option>
                                                            <option <?php echo (set_value('DidYouVisit') == "prefer not to say") ? "selected" : ""; ?> value="prefer not to say">prefer not to say</option>
                                                        </select>
                                                        <?php echo (form_error('DidYouVisit')) ? '<br>' . form_error('DidYouVisit', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('Additionalnotes')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">What is your ethnic group?</label>
                                                    <div class="col-md-12" style="">
                                                        <input name="Additionalnotes"  value="<?php echo (set_value('Additionalnotes') || $CI->CheckEmpty('Additionalnotes')) ? (set_value('Additionalnotes')) : @$leadData->additional_notes; ?>" class="form-control" placeholder="What is your ethnic group?">
                                                        <?php echo (form_error('Additionalnotes')) ? '<br>' . form_error('Additionalnotes', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group <?php  echo (form_error('HaveyouClaimded')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-12" style="text-align: left">Do you have any physical or mental health conditions or illnesses lasting or expected to last for 12 months or more?</label>
                                                    <div class="col-md-12" style="">
                                                        <select name="HaveyouClaimded" class="form-control">
                                                               
                                                                <option <?php echo (set_value('HaveyouClaimded') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                                <option <?php echo (set_value('HaveyouClaimded') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                                <option <?php echo (set_value('HaveyouClaimded') == "Prefer not to say") ? "selected" : ""; ?> value="Prefer not to say">Prefer not to say</option>
                                                            </select>
                                                        <?php  echo (form_error('HaveyouClaimded')) ? '<br>' . form_error('HaveyouClaimded', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                        </div>                                        
                                    </div>                                        

                                <div class="row">
                                            <div class="col-md-12">


                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('marketing_source')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left">Are you?</label>
                                                        <div class="col-md-12" style="">
                                                            <select name="marketing_source" class="form-control">
                                                               
                                                                <option <?php echo (set_value('marketing_source') == "Single") ? "selected" : ""; ?> value="Single">Single</option>
                                                                <option <?php echo (set_value('marketing_source') == "Married") ? "selected" : ""; ?> value="Married">Married</option>
                                                                <option <?php echo (set_value('marketing_source') == "Seperated") ? "selected" : ""; ?> value="Seperated">Seperated</option>
                                                                <option <?php echo (set_value('marketing_source') == "Divorced") ? "selected" : ""; ?> value="Divorced">Divorced</option>
                                                                <option <?php echo (set_value('marketing_source') == "Widowed") ? "selected" : ""; ?> value="Widowed">Widowed</option>
                                                                <option <?php echo (set_value('marketing_source') == "In a registered same-sex civil parthership") ? "selected" : ""; ?> value="In a registered same-sex civil parthership">In a registered same-sex civil parthership</option>
                                                                <option <?php echo (set_value('marketing_source') == "Seperated but still legally in a same sex partnership") ? "selected" : ""; ?> value="Seperated but still legally in a same sex partnership">Seperated but still legally in a same sex partnership</option>
                                                                <option <?php echo (set_value('marketing_source') == "Formally in a same-sex civil partnership whichi s now legally dissolved") ? "selected" : ""; ?> value="Formally in a same-sex civil partnership whichi s now legally dissolved">Formally in a same-sex civil partnership whichi s now legally dissolved</option>
                                                                <option <?php echo (set_value('marketing_source') == "Surviving partner from a same-sex partnership") ? "selected" : ""; ?> value="Surviving partner from a same-sex partnership">Surviving partner from a same-sex partnership</option>
                                                                <option <?php echo (set_value('marketing_source') == "Prefer not to say") ? "selected" : ""; ?> value="Prefer not to say">Prefer not to say</option>
                                                            </select>
                                                            <?php echo (form_error('marketing_source')) ? '<br>' . form_error('marketing_source', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('replacementInvoiceNumber')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left">Do you have any caring responsibilities, (for example; children, elderly relatives, partners etc.)?</label>
                                                        <div class="col-md-12" style="">
                                                            <select name="replacementInvoiceNumber" class="form-control">
                                                               
                                                                <option <?php echo (set_value('replacementInvoiceNumber') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                                <option <?php echo (set_value('replacementInvoiceNumber') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            </select>
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
                                                        <label class="control-label col-md-12" style="text-align: left">Which of the options below best describes how you think of yourself?</label>
                                                        <div class="col-md-12" style="">
                                                            <select name="InterpreterName" class="form-control">
                                                               
                                                                <option <?php echo (set_value('InterpreterName') == "Hetrosexual/Straight") ? "selected" : ""; ?> value="Hetrosexual/Straight">Hetrosexual/Straight</option>
                                                                <option <?php echo (set_value('InterpreterName') == "Bisexual") ? "selected" : ""; ?> value="Bisexual">Bisexual</option>
                                                                <option <?php echo (set_value('InterpreterName') == "Other") ? "selected" : ""; ?> value="Other">Other</option>
                                                                <option <?php echo (set_value('InterpreterName') == "Prefer not to say") ? "selected" : ""; ?> value="Prefer not to say">Prefer not to say</option>
                                                            </select>
                                                            <?php echo (form_error('InterpreterName')) ? '<br>' . form_error('InterpreterName', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <!--Interpreter Paid Field-->                                            

                                                <div class="col-md-12">
                                                    <div class="form-group <?php echo (form_error('Interpreterpaid')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-12" style="text-align: left">Were you pregnant when the issue you are making a claim about took place?</label>
                                                        <select name="Interpreterpaid" class="form-control"> 
                                                                <option <?php echo (set_value('Interpreterpaid') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                                <option <?php echo (set_value('Interpreterpaid') == "No") ? "selected" : ""; ?> value="No">No</option>
                                                            <option <?php echo (set_value('Interpreterpaid') == "Prefer not to say") ? "selected" : ""; ?> value="Prefer not to say">Prefer not to say</option>
                                                            </select>
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

                            <hr class="m-t-0 m-b-40">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">

                                        <div class="row">
                                            <input type="hidden" name="clone" value="clone">
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


