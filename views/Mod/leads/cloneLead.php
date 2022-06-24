<?php
    
    $formName       = "";
    $clone_Action   = "";
    
    if ($lead_campaign[0]->campaign_name == "Car Hire"){
        
        $formName       = "Car Hire Form";
        $clone_Action   = base_url('Mod/createCH/') . $lead_campaign[0]->campaign_short_name; 
        
    }
    
    elseif($lead_campaign[0]->campaign_name == "Personal Injury"){
        
        $formName       = "Accident Claim Form";
        $clone_Action   = base_url('Mod/createLead/') . $lead_campaign[0]->campaign_short_name; 
        
    }
    
    elseif($lead_campaign[0]->campaign_name == "Housing Disrepair"){
        
        $formName = "Housing Disrepair Form";
        $clone_Action   = base_url('Mod/createHDR/') . $lead_campaign[0]->campaign_short_name . "/" . $leadData->lead_id; 
        
    } elseif($lead_campaign[0]->campaign_name == "MIB Claims"){
        
        $formName = "MIB Claims Form";
        $clone_Action   = base_url('Mod/createMIBClaims/') . $lead_campaign[0]->campaign_short_name . "/" . $leadData->lead_id; 
        
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Clone <?php echo $formName; ?></div>
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

<!--                        <p style="font-weight: 600; color: #313131"><i class="fa fa-arrow-down" style="font-size: 10px"></i> Contact Details</p>
                        <hr style="width: 16%; float: left; margin-top: 0px">-->

                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Personal Details </p>
                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>



                        <form action="<?php echo $clone_Action ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <div class="form-body">

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">                                



                                    <!--< ROW 1 >-->

                                    <div class="row">
                                        <div class="col-md-12">

<?php if($lead_campaign[0]->campaign_name == "Housing Disrepair"): ?>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('title')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Title<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="title" class="form-control">
                                                            <option value="">Select Title</option>
                                                            <option <?php echo $CI->checkSelected('title', @$leadData->title, "Mr"); ?> value="Mr">Mr</option>
                                                            <option <?php echo $CI->checkSelected('title', @$leadData->title, "Mrs"); ?> value="Mrs">Mrs</option>
                                                            <option <?php echo $CI->checkSelected('title', @$leadData->title, "Mr & Mrs"); ?> value="Mr & Mrs">Mr & Mrs</option>
                                                            <option <?php echo $CI->checkSelected('title', @$leadData->title, "Ms"); ?> value="Ms">Ms</option>
                                                            <option <?php echo $CI->checkSelected('title', @$leadData->title, "Miss"); ?> value="Miss">Miss</option>
                                                            <option <?php echo $CI->checkSelected('title', @$leadData->title, "Dr"); ?> value="Dr">Dr</option>
                                                            <option <?php echo $CI->checkSelected('title', @$leadData->title, "Rev"); ?> value="Rev">Rev</option>
                                                            <option <?php echo $CI->checkSelected('title', @$leadData->title, "Dame"); ?> value="Dame">Dame</option>
                                                            <option <?php echo $CI->checkSelected('title', @$leadData->title, "Lady"); ?> value="Lady">Lady</option>
                                                            <option <?php echo $CI->checkSelected('title', @$leadData->title, "Sir"); ?> value="Sir">Sir</option>
                                                            <option <?php echo $CI->checkSelected('title', @$leadData->title, "Lord"); ?> value="Lord">Lord</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('title')) ? '<br>' . form_error('title', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
<?php endif; ?>                                            
                                            
                                            
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

<?php if($lead_campaign[0]->campaign_name == "Housing Disrepair"): ?>
                                           
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('phone1')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 1<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 1" name="phone1" value="<?php echo (set_value('phone1') || form_error('phone1')) ? (set_value('phone1')) : (@$leadData->phone_1); ?>">
                                                        <?php echo (form_error('phone1')) ? '<br>' . form_error('phone1', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
<?php endif; ?>
                                            

                                        </div>
                                    </div>

                                    <!--< ROW 2 >-->                                

                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- Job Title Fields -->                                        

<?php if($lead_campaign[0]->campaign_name != "Housing Disrepair"): ?>
                                            
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('jobtitle')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Job title</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Job Title" name="jobtitle" value="<?php echo (set_value('jobtitle') || $CI->CheckEmpty('jobtitle')) ? (set_value('jobtitle')) : @$leadData->job_title; ?>">
                                                        <?php echo (form_error('jobtitle')) ? '<br>' . form_error('jobtitle', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Phone 1 Fields-->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('phone1')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 1<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 1" name="phone1" value="<?php echo (set_value('phone1') || form_error('phone1')) ? (set_value('phone1')) : (@$leadData->phone_1); ?>">
                                                        <?php echo (form_error('phone1')) ? '<br>' . form_error('phone1', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
<?php endif; ?>

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

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('email')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Email</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo (set_value('email') || $CI->CheckEmpty('email')) ? (set_value('email')) : @$leadData->email; ?>">
                                                        <?php echo (form_error('email')) ? '<br>' . form_error('email', "<b class='text-danger'>", '</b>') : ''; ?>
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
                                                <div class="form-group <?php echo (form_error('NINumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">NI Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="NINumber" value="<?php echo (set_value('NINumber') || $CI->CheckEmpty('NINumber')) ? (set_value('NINumber')) : @$leadData->ni_number; ?>" class="form-control" placeholder="Enter NI Number">
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
                                                        <input type="text" name="ClientsOccupation" value="<?php echo (set_value('ClientsOccupation') || $CI->CheckEmpty('ClientsOccupation')) ? (set_value('ClientsOccupation')) : @$leadData->clients_occupation; ?>" class="form-control" placeholder="Enter Clients Occupation">
                                                        <?php echo (form_error('ClientsOccupation')) ? '<br>' . form_error('ClientsOccupation', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

<?php if($lead_campaign[0]->campaign_name != "Housing Disrepair"): ?>
                                            
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Haveyouclaimedbefore')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Have you tried to claim before?</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="Haveyouclaimedbefore" class="form-control">
                                                            <option value="">Select Have You Claimed Before</option>
                                                            <option <?php echo $CI->checkSelected('Haveyouclaimedbefore', @$leadData->have_you_claimed_before, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('Haveyouclaimedbefore', @$leadData->have_you_claimed_before, "No"); ?>  value="No">No</option>
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
                                                            <option <?php echo $CI->checkSelected('Doyouwishtomakeaclaim', @$leadData->do_you_wish_to_make_a_claim, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('Doyouwishtomakeaclaim', @$leadData->do_you_wish_to_make_a_claim, "No"); ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('Doyouwishtomakeaclaim')) ? '<br>' . form_error('Doyouwishtomakeaclaim', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

<?php endif; ?>                                            

<?php if($lead_campaign[0]->campaign_name == "Housing Disrepair"): ?>

                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('Maritalstatus')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Marital status</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="Maritalstatus" class="form-control" placeholder="Enter Marital status" value="<?php echo (set_value('Maritalstatus') || form_error('Maritalstatus')) ? (set_value('Maritalstatus')) : (@$leadData->marital_status); ?>">
                                                        <?php echo (form_error('Maritalstatus')) ? '<br>' . form_error('Maritalstatus', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
<?php endif; ?>                                            
                                            
<?php if($lead_campaign[0]->campaign_name != "Housing Disrepair"): ?>
                                            
                                            <div class="col-md-6">
<?php else: ?>                                            
                                            <div class="col-md-12">
                                                
<?php endif; ?>                                            
                                                
                                                <div class="form-group <?php echo (form_error('AreyouaLitigationFriend')) ? 'has-error' : ''; ?> ">

<?php if($lead_campaign[0]->campaign_name != "Housing Disrepair"): ?>
                                                    <label class="control-label col-md-4" style="text-align: left">Are you a Litigation Friend</label>
                                                    <div class="col-md-8" style="">
                                                    
<?php else: ?>                                            
                                                    <label class="control-label col-md-2" style="text-align: left">Are you a Litigation Friend</label>
                                                    <div class="col-md-10" style="">
                                                
<?php endif; ?>                                            
                                                
                                                    
                                                    
                                                        <select name="AreyouaLitigationFriend" class="form-control">
                                                            <option value="">Select Litigation Friend</option>
                                                            <option <?php echo $CI->checkSelected('AreyouaLitigationFriend', @$leadData->are_you_a_litigation_friend, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('AreyouaLitigationFriend', @$leadData->are_you_a_litigation_friend, "No"); ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('AreyouaLitigationFriend')) ? '<br>' . form_error('AreyouaLitigationFriend', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('iflitigationfriendnameanddateofbirthoftheclaimant')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">If so Enter Details </label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" style="resize: none" name="iflitigationfriendnameanddateofbirthoftheclaimant" placeholder="Enter Litigation Friend, Name And Date of Birth of the Claimant" class="form-control"><?php echo (set_value('iflitigationfriendnameanddateofbirthoftheclaimant') || $CI->CheckEmpty('iflitigationfriendnameanddateofbirthoftheclaimant')) ? (set_value('iflitigationfriendnameanddateofbirthoftheclaimant')) : @$leadData->if_litigation_friend_name_and_date_of_birth_of_the_claimant; ?></textarea>
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
                                                        <input type="text" name="ClientPassword" value="<?php echo (set_value('ClientPassword') || $CI->CheckEmpty('ClientPassword')) ? (set_value('ClientPassword')) : @$leadData->client_password; ?>" class="form-control" placeholder="Enter Client Password">
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

                                            <!-- Permission to SMS Fields -->                                                                                                                                                                

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

<?php if($lead_campaign[0]->campaign_name != "Housing Disrepair"): ?>

                                            <div class="col-md-6" id="PreferredTimetoCall" style="display: none">
                                                <div class="form-group <?php echo (form_error('PreferredTimetoCall')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Preferred Time to Call</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" value="<?php echo (set_value('PreferredTimetoCall') || $CI->CheckEmpty('PreferredTimetoCall')) ? (set_value('PreferredTimetoCall')) : @$leadData->preferred_time_to_call; ?>" class="form-control" placeholder="Enter Preferred Time to Call" name="PreferredTimetoCall">
                                                        <?php echo (form_error('PreferredTimetoCall')) ? '<br>' . form_error('PreferredTimetoCall', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
<?php else: ?>     
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('preferred_date_to_call')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Preferred date to call</label>
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Preferred date to call" value="<?php echo (set_value('preferred_date_to_call') || $CI->CheckEmpty('preferred_date_to_call')) ? (set_value('preferred_date_to_call')) : @$leadData->preferred_date_to_call; ?>" name="preferred_date_to_call" id="preferred_date_to_call">
                                                        <?php echo (form_error('preferred_date_to_call')) ? '<br>' . form_error('preferred_date_to_call', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
<?php endif; ?>                                            
                                            


                                        </div>
                                    </div>


                                </div>

<?php if($lead_campaign[0]->campaign_name != "Housing Disrepair"): ?>
                                
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
                                                        <textarea name="accidentCircumstances" placeholder="Enter Accident Circumstances" class="form-control" rows="5" style="resize: none"><?php echo (set_value('accidentCircumstances') || $CI->CheckEmpty('accidentCircumstances')) ? (set_value('accidentCircumstances')) : @$leadData->accident_circumstances; ?></textarea> 
                                                        <?php echo (form_error('accidentCircumstances')) ? '<br>' . form_error('accidentCircumstances', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('DateofAccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Date of Accident</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="DateofAccident" class="form-control" id="DateofAccident" value="<?php echo (set_value('DateofAccident') || $CI->CheckEmpty('DateofAccident')) ? (set_value('DateofAccident')) : @$leadData->date_of_accident; ?>" placeholder="Enter Date of Accident">
                                                        <?php echo (form_error('DateofAccident')) ? '<br>' . form_error('DateofAccident', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('TimeofAccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Time of Accident</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="TimeofAccident" class="form-control" value="<?php echo (set_value('TimeofAccident') || $CI->CheckEmpty('TimeofAccident')) ? (set_value('TimeofAccident')) : @$leadData->time_of_accident; ?>" placeholder="Enter Time of Accident">                                                 
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
                                                        <input type="text" value="<?php echo (set_value('Whatwastheexactlocationoftheaccident') || $CI->CheckEmpty('Whatwastheexactlocationoftheaccident')) ? (set_value('Whatwastheexactlocationoftheaccident')) : @$leadData->what_was_the_exact_location_of_the_accident; ?>" name="Whatwastheexactlocationoftheaccident" class="form-control" placeholder="Enter The Exact Location Of The Accident">
                                                        <?php echo (form_error('Whatwastheexactlocationoftheaccident')) ? '<br>' . form_error('Whatwastheexactlocationoftheaccident', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Whodoyoublamefortheaccident')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Who do you blame for the accident?</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="Whodoyoublamefortheaccident" value="<?php echo (set_value('Whodoyoublamefortheaccident') || $CI->CheckEmpty('Whodoyoublamefortheaccident')) ? (set_value('Whodoyoublamefortheaccident')) : @$leadData->who_do_you_blame_for_the_accident; ?>" class="form-control" placeholder="Enter Blame For The Accident"> 
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
                                                            <option <?php echo $CI->checkSelected('PositiononLiability', @$leadData->position_on_liability, "Liability Admitted"); ?> value="Liability Admitted">Liability Admitted</option>
                                                            <option <?php echo $CI->checkSelected('PositiononLiability', @$leadData->position_on_liability, "Liability Disputed"); ?> value="Liability Disputed">Liability Disputed</option>
                                                            <option <?php echo $CI->checkSelected('PositiononLiability', @$leadData->position_on_liability, "No position on liability"); ?> value="No position on liability">No position on liability</option>
                                                            <option <?php echo $CI->checkSelected('PositiononLiability', @$leadData->position_on_liability, "50/50"); ?> value="50/50">50/50</option>
                                                            <option <?php echo $CI->checkSelected('PositiononLiability', @$leadData->position_on_liability, "Liability Denied"); ?> value="Liability Denied">Liability Denied</option>
                                                        </select>
                                                        <?php echo (form_error('PositiononLiability')) ? '<br>' . form_error('PositiononLiability', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Whatwastheweatherlike')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">What was the weather like?</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" value="<?php echo (set_value('Whatwastheweatherlike') || $CI->CheckEmpty('Whatwastheweatherlike')) ? (set_value('Whatwastheweatherlike')) : @$leadData->what_was_the_weather_like; ?>" class="form-control" placeholder="Enter What was the weather like" name="Whatwastheweatherlike">
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
                                                            <option <?php echo $CI->checkSelected('Werethepoliceinvolved', @$leadData->were_the_police_involved, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('Werethepoliceinvolved', @$leadData->were_the_police_involved, "No"); ?> value="No">No</option>
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
                                                            <option <?php echo $CI->checkSelected('WastheClientVehiclerepairedortotalloss', @$leadData->was_the_client_vehicle_repaired_or_total_loss, "Repaired"); ?> value="Repaired">Repaired</option>
                                                            <option <?php echo $CI->checkSelected('WastheClientVehiclerepairedortotalloss', @$leadData->was_the_client_vehicle_repaired_or_total_loss, "Total Loss"); ?> value="Total Loss">Total Loss</option>
                                                            <option <?php echo $CI->checkSelected('WastheClientVehiclerepairedortotalloss', @$leadData->was_the_client_vehicle_repaired_or_total_loss, "N/A"); ?> value="N/A">N/A</option>
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
                                                            <option <?php echo $CI->checkSelected('Hastheclientbeenpaidoutforhis-hervehicledamage', @$leadData->has_the_client_been_paid_out_for_his_her_vehicle_damage, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('Hastheclientbeenpaidoutforhis-hervehicledamage', @$leadData->has_the_client_been_paid_out_for_his_her_vehicle_damage, "No"); ?> value="No">No</option>
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
                                                            <option <?php echo $CI->checkSelected('CreditHireorVehicleReplacement', @$leadData->credit_hire_or_vehicle_replacement, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('CreditHireorVehicleReplacement', @$leadData->credit_hire_or_vehicle_replacement, "No"); ?> value="No">No</option>
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
                                                            <option <?php echo $CI->checkSelected('ClientStatusinAccident', @$leadData->client_status_in_accident, "Driver"); ?> value="Driver">Driver</option>
                                                            <option <?php echo $CI->checkSelected('ClientStatusinAccident', @$leadData->client_status_in_accident, "Passenger"); ?> value="Passenger">Passenger</option>
                                                            <option <?php echo $CI->checkSelected('ClientStatusinAccident', @$leadData->client_status_in_accident, "Pedestrian"); ?> value="Pedestrian">Pedestrian</option>
                                                            <option <?php echo $CI->checkSelected('ClientStatusinAccident', @$leadData->client_status_in_accident, "Cyclist"); ?> value="Cyclist">Cyclist</option>
                                                            <option <?php echo $CI->checkSelected('ClientStatusinAccident', @$leadData->client_status_in_accident, "Victim"); ?> value="Victim">Victim</option>
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
                                                            <option <?php echo $CI->checkSelected('Isthisalinkedpassenger', @$leadData->is_this_a_linked_passenger, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('Isthisalinkedpassenger', @$leadData->is_this_a_linked_passenger, "No"); ?> value="No">No</option>
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
                                                        <input class="form-control" placeholder="Enter Number of Passengers" name="number_of_passengers" id="number_of_passengers" value="<?php echo (set_value('number_of_passengers') || $CI->CheckEmpty('number_of_passengers')) ? (set_value('number_of_passengers')) : @$leadData->number_of_passengers; ?>">
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
                                                        <input class="form-control" placeholder="Enter Passenger 1" name="passenger_1" id="Passenger_1" value="<?php echo (set_value('passenger_1') || $CI->CheckEmpty('passenger_1')) ? (set_value('passenger_1')) : @$leadData->passenger_1; ?>">
                                                        <?php echo (form_error('passenger_1')) ? '<br>' . form_error('passenger_1', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_1_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 1 Relationship</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 1 Relationship" name="passenger_1_relationship" id="passenger_1_relationship" value="<?php echo (set_value('passenger_1_relationship') || $CI->CheckEmpty('passenger_1_relationship')) ? (set_value('passenger_1_relationship')) : @$leadData->passenger_1_relationship; ?>">
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
                                                        <input class="form-control" placeholder="Enter Passenger 1 Date of Birth" name="passenger_1_date_of_birth" id="passenger_1_date_of_birth" value="<?php echo (set_value('passenger_1_date_of_birth') || $CI->CheckEmpty('passenger_1_date_of_birth')) ? (set_value('passenger_1_date_of_birth')) : @$leadData->passenger_1_date_of_birth; ?>">
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
                                                            <option <?php echo $CI->checkSelected('passenger_1_position_in_car', @$leadData->passenger_1_position_in_car, "FRONT SEAT"); ?> value="FRONT SEAT">FRONT SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_1_position_in_car', @$leadData->passenger_1_position_in_car, "BACK RIGHT WINDOW SEAT"); ?> value="BACK RIGHT WINDOW SEAT">BACK RIGHT WINDOW SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_1_position_in_car', @$leadData->passenger_1_position_in_car, "BACK LEFT WINDOW SEAT"); ?> value="BACK LEFT WINDOW SEAT">BACK LEFT WINDOW SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_1_position_in_car', @$leadData->passenger_1_position_in_car, "BACK MIDDLE"); ?> value="BACK MIDDLE">BACK MIDDLE</option>
                                                            
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
                                                        <input class="form-control" placeholder="Enter Passenger 2" name="passenger_2" id="passenger_2" value="<?php echo (set_value('passenger_2') || $CI->CheckEmpty('passenger_2')) ? (set_value('passenger_2')) : @$leadData->passenger_2; ?>">
                                                        <?php echo (form_error('passenger_2')) ? '<br>' . form_error('passenger_2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_2_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 2 Relationship</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 2 Relationship" name="passenger_2_relationship" id="passenger_2_relationship" value="<?php echo (set_value('passenger_2_relationship') || $CI->CheckEmpty('passenger_2_relationship')) ? (set_value('passenger_2_relationship')) : @$leadData->passenger_2_relationship; ?>">
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
                                                        <input class="form-control" placeholder="Enter Passenger 2 Date of Birth" name="passenger_2_date_of_birth" id="passenger_2_date_of_birth" value="<?php echo (set_value('passenger_2_date_of_birth') || $CI->CheckEmpty('passenger_2_date_of_birth')) ? (set_value('passenger_2_date_of_birth')) : @$leadData->passenger_2_date_of_birth; ?>">
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
                                                            <option <?php echo $CI->checkSelected('passenger_2_position_in_car', @$leadData->passenger_2_position_in_car, "FRONT SEAT"); ?> value="FRONT SEAT">FRONT SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_2_position_in_car', @$leadData->passenger_2_position_in_car, "BACK RIGHT WINDOW SEAT"); ?> value="BACK RIGHT WINDOW SEAT">BACK RIGHT WINDOW SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_2_position_in_car', @$leadData->passenger_2_position_in_car, "BACK LEFT WINDOW SEAT"); ?> value="BACK LEFT WINDOW SEAT">BACK LEFT WINDOW SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_2_position_in_car', @$leadData->passenger_2_position_in_car, "BACK MIDDLE"); ?> value="BACK MIDDLE">BACK MIDDLE</option>

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
                                                        <input class="form-control" placeholder="Enter Passenger 3" name="passenger_3" id="passenger_3" value="<?php echo (set_value('passenger_3') || $CI->CheckEmpty('passenger_3')) ? (set_value('passenger_3')) : @$leadData->passenger_3; ?>">
                                                        <?php echo (form_error('passenger_3')) ? '<br>' . form_error('passenger_3', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_3_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 3 Relationship</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 3 Relationship" name="passenger_3_relationship" id="passenger_3_relationship" value="<?php echo (set_value('passenger_3_relationship') || $CI->CheckEmpty('passenger_3_relationship')) ? (set_value('passenger_3_relationship')) : @$leadData->passenger_3_relationship; ?>">
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
                                                        <input class="form-control" placeholder="Enter Passenger 3 Date of Birth" name="passenger_3_date_of_birth" id="passenger_3_date_of_birth" value="<?php echo (set_value('passenger_3_date_of_birth') || $CI->CheckEmpty('passenger_3_date_of_birth')) ? (set_value('passenger_3_date_of_birth')) : @$leadData->passenger_3_date_of_birth; ?>">
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
                                                            <option <?php echo $CI->checkSelected('passenger_3_position_in_car', @$leadData->passenger_3_position_in_car, "FRONT SEAT"); ?> value="FRONT SEAT">FRONT SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_3_position_in_car', @$leadData->passenger_3_position_in_car, "BACK RIGHT WINDOW SEAT"); ?> value="BACK RIGHT WINDOW SEAT">BACK RIGHT WINDOW SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_3_position_in_car', @$leadData->passenger_3_position_in_car, "BACK LEFT WINDOW SEAT"); ?> value="BACK LEFT WINDOW SEAT">BACK LEFT WINDOW SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_3_position_in_car', @$leadData->passenger_3_position_in_car, "BACK MIDDLE"); ?> value="BACK MIDDLE">BACK MIDDLE</option>

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
                                                        <input class="form-control" placeholder="Enter Passenger 4" name="passenger_4" id="passenger_4" value="<?php echo (set_value('passenger_4') || $CI->CheckEmpty('passenger_4')) ? (set_value('passenger_4')) : @$leadData->passenger_4; ?>">
                                                        <?php echo (form_error('passenger_4')) ? '<br>' . form_error('passenger_4', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_4_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 4 Relationship</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 4 Relationship" name="passenger_4_relationship" id="passenger_4_relationship" value="<?php echo (set_value('passenger_4_relationship') || $CI->CheckEmpty('passenger_4_relationship')) ? (set_value('passenger_4_relationship')) : @$leadData->passenger_4_relationship; ?>">
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
                                                        <input class="form-control" placeholder="Enter Passenger 4 Date of Birth" name="passenger_4_date_of_birth" id="passenger_4_date_of_birth" value="<?php echo (set_value('passenger_4_date_of_birth') || $CI->CheckEmpty('passenger_4_date_of_birth')) ? (set_value('passenger_4_date_of_birth')) : @$leadData->passenger_4_date_of_birth; ?>">
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
                                                            <option <?php echo $CI->checkSelected('passenger_4_position_in_car', @$leadData->passenger_4_position_in_car, "FRONT SEAT"); ?> value="FRONT SEAT">FRONT SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_4_position_in_car', @$leadData->passenger_4_position_in_car, "BACK RIGHT WINDOW SEAT"); ?> value="BACK RIGHT WINDOW SEAT">BACK RIGHT WINDOW SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_4_position_in_car', @$leadData->passenger_4_position_in_car, "BACK LEFT WINDOW SEAT"); ?> value="BACK LEFT WINDOW SEAT">BACK LEFT WINDOW SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_4_position_in_car', @$leadData->passenger_4_position_in_car, "BACK MIDDLE"); ?> value="BACK MIDDLE">BACK MIDDLE</option>

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
                                                        <input class="form-control" placeholder="Enter Passenger 5" name="passenger_5" id="passenger_5" value="<?php echo (set_value('passenger_5') || $CI->CheckEmpty('passenger_5')) ? (set_value('passenger_5')) : @$leadData->passenger_5; ?>">
                                                        <?php echo (form_error('passenger_5')) ? '<br>' . form_error('passenger_5', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_5_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 5 Relationship</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 5 Relationship" name="passenger_5_relationship" id="passenger_5_relationship" value="<?php echo (set_value('passenger_5_relationship') || $CI->CheckEmpty('passenger_5_relationship')) ? (set_value('passenger_5_relationship')) : @$leadData->passenger_5_relationship; ?>">
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
                                                        <input class="form-control" placeholder="Enter Passenger 5 Date of Birth" name="passenger_5_date_of_birth" id="passenger_5_date_of_birth" value="<?php echo (set_value('passenger_5_date_of_birth') || $CI->CheckEmpty('passenger_5_date_of_birth')) ? (set_value('passenger_5_date_of_birth')) : @$leadData->passenger_5_date_of_birth; ?>">
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
                                                            <option <?php echo $CI->checkSelected('passenger_5_position_in_car', @$leadData->passenger_5_position_in_car, "FRONT SEAT"); ?> value="FRONT SEAT">FRONT SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_5_position_in_car', @$leadData->passenger_5_position_in_car, "BACK RIGHT WINDOW SEAT"); ?> value="BACK RIGHT WINDOW SEAT">BACK RIGHT WINDOW SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_5_position_in_car', @$leadData->passenger_5_position_in_car, "BACK LEFT WINDOW SEAT"); ?> value="BACK LEFT WINDOW SEAT">BACK LEFT WINDOW SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_5_position_in_car', @$leadData->passenger_5_position_in_car, "BACK MIDDLE"); ?> value="BACK MIDDLE">BACK MIDDLE</option>

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
                                                        <input class="form-control" placeholder="Enter Passenger 6" name="passenger_6" id="passenger_6" value="<?php echo (set_value('passenger_6') || $CI->CheckEmpty('passenger_6')) ? (set_value('passenger_6')) : @$leadData->passenger_6; ?>">
                                                        <?php echo (form_error('passenger_6')) ? '<br>' . form_error('passenger_6', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('passenger_6_relationship')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Passenger 6 Relationship</label>
                                                    
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Passenger 6 Relationship" name="passenger_6_relationship" id="passenger_6_relationship" value="<?php echo (set_value('passenger_6_relationship') || $CI->CheckEmpty('passenger_6_relationship')) ? (set_value('passenger_6_relationship')) : @$leadData->passenger_6_relationship; ?>">
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
                                                        <input class="form-control" placeholder="Enter Passenger 6 Date of Birth" name="passenger_6_date_of_birth" id="passenger_6_date_of_birth" value="<?php echo (set_value('passenger_6_date_of_birth') || $CI->CheckEmpty('passenger_6_date_of_birth')) ? (set_value('passenger_6_date_of_birth')) : @$leadData->passenger_6_date_of_birth; ?>">
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
                                                            <option <?php echo $CI->checkSelected('passenger_6_position_in_car', @$leadData->passenger_6_position_in_car, "FRONT SEAT"); ?> value="FRONT SEAT">FRONT SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_6_position_in_car', @$leadData->passenger_6_position_in_car, "BACK RIGHT WINDOW SEAT"); ?> value="BACK RIGHT WINDOW SEAT">BACK RIGHT WINDOW SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_6_position_in_car', @$leadData->passenger_6_position_in_car, "BACK LEFT WINDOW SEAT"); ?> value="BACK LEFT WINDOW SEAT">BACK LEFT WINDOW SEAT</option>
                                                            <option <?php echo $CI->checkSelected('passenger_6_position_in_car', @$leadData->passenger_6_position_in_car, "BACK MIDDLE"); ?> value="BACK MIDDLE">BACK MIDDLE</option>

                                                        </select>
                                                        
                                                         <?php echo (form_error('passenger_6_position_in_car')) ? '<br>' . form_error('passenger_6_position_in_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

<?php if(isset($lead_campaign[0]->campaign_name) && $lead_campaign[0]->campaign_name != "Car Hire"): ?>                                
                                
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
                                                    <label class="control-label col-md-4" style="text-align: left">Was Accident reported or recorded in the accident Book?</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="WasAccidentreportedorrecordedintheaccidentBook" class="form-control">
                                                            <option value="">Select Accident Reported</option>
                                                            <option <?php echo $CI->checkSelected('WasAccidentreportedorrecordedintheaccidentBook', @$leadData->was_accident_reported_or_recorded_in_the_accident_book, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('WasAccidentreportedorrecordedintheaccidentBook', @$leadData->was_accident_reported_or_recorded_in_the_accident_book, "No"); ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('WasAccidentreportedorrecordedintheaccidentBook')) ? '<br>' . form_error('WasAccidentreportedorrecordedintheaccidentBook', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('EmployersName-Address-TelephoneNumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Employers Name, Address, Telephone Number</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea name="EmployersName-Address-TelephoneNumber" class="form-control" rows="5" style="resize: none" placeholder="Enter Employers Name, Address, Telephone Number"><?php echo (set_value('EmployersName-Address-TelephoneNumber') || $CI->CheckEmpty('EmployersName-Address-TelephoneNumber')) ? (set_value('EmployersName-Address-TelephoneNumber')) : @$leadData->employers_name_address_telephone_number; ?></textarea>
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
                                                        <textarea name="OLPLONLY" rows="5" class="form-control" style="resize: none" placeholder="Enter How long has the defect been there"><?php echo (set_value('OLPLONLY') || $CI->CheckEmpty('OLPLONLY')) ? (set_value('OLPLONLY')) : @$leadData->ol_pl_only; ?></textarea>
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
                                                        <textarea name="MedNegOnly" class="form-control" rows="5" style="resize: none" placeholder="Enter Full Details of Hospital or Doctor to blame. Inc Telephone Number"><?php echo (set_value('MedNegOnly') || $CI->CheckEmpty('MedNegOnly')) ? (set_value('MedNegOnly')) : @$leadData->med_neg_only; ?></textarea>
                                                        <?php echo (form_error('MedNegOnly')) ? '<br>' . form_error('MedNegOnly', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>                                

<?php endif; ?>                                
                                
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
                                                        <input type="text" name="ClientCarRegistration" value="<?php echo (set_value('ClientCarRegistration') || $CI->CheckEmpty('ClientCarRegistration')) ? (set_value('ClientCarRegistration')) : @$leadData->client_car_registration; ?>" class="form-control" placeholder="Enter Client Car Registration">                                                     <?php echo (form_error('ClientCarRegistration')) ? '<br>' . form_error('ClientCarRegistration', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('ClientCarMakeModel')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Client Vehicle Make Model</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="ClientCarMakeModel" type="text" class="form-control" value="<?php echo (set_value('ClientCarMakeModel') || $CI->CheckEmpty('ClientCarMakeModel')) ? (set_value('ClientCarMakeModel')) : @$leadData->client_car_make_model; ?>" placeholder="Enter Client Car Make Model">
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
                                                        <input type="text" name="ClientInsurer" value="<?php echo (set_value('ClientInsurer') || $CI->CheckEmpty('ClientInsurer')) ? (set_value('ClientInsurer')) : @$leadData->client_insurer; ?>" class="form-control" placeholder="Enter Client Insurer"> 
                                                        <?php echo (form_error('ClientInsurer')) ? '<br>' . form_error('ClientInsurer', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('ClientPolicyNumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Client Policy Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="ClientPolicyNumber" type="text" value="<?php echo (set_value('ClientPolicyNumber') || $CI->CheckEmpty('ClientPolicyNumber')) ? (set_value('ClientPolicyNumber')) : @$leadData->client_policy_number; ?>" class="form-control" placeholder="Enter Client Policy Number">
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
                                                    <label class="control-label col-md-4" style="text-align: left">How many Occupants were in your vehicle?</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="HowmanyOccupantsinthevehicle" value="<?php echo (set_value('HowmanyOccupantsinthevehicle') || $CI->CheckEmpty('HowmanyOccupantsinthevehicle')) ? (set_value('HowmanyOccupantsinthevehicle')) : @$leadData->how_many_occupants_in_the_vehicle; ?>" class="form-control" placeholder="Enter How many Occupants in the vehicle">
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
                                                            <option <?php echo $CI->checkSelected('Doyouhaveaccesstothedetailsofthepartyyoublame', @$leadData->do_you_have_access_to_the_details_of_the_party_you_blame, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('Doyouhaveaccesstothedetailsofthepartyyoublame', @$leadData->do_you_have_access_to_the_details_of_the_party_you_blame, "No"); ?> value="No">No</option>
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
                                                        <input type="text" name="TPCarRegistration" value="<?php echo (set_value('TPCarRegistration') || $CI->CheckEmpty('TPCarRegistration')) ? (set_value('TPCarRegistration')) : @$leadData->tp_car_registration; ?>" class="form-control" placeholder="Enter TP Car Registration"> 
                                                        <?php echo (form_error('TPCarRegistration')) ? '<br>' . form_error('TPCarRegistration', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('TPCarMakeModel')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">TP Car Make Model</label>
                                                    <div class="col-md-8" style="">
                                                        <input name="TPCarMakeModel" type="text" value="<?php echo (set_value('TPCarMakeModel') || $CI->CheckEmpty('TPCarMakeModel')) ? (set_value('TPCarMakeModel')) : @$leadData->tp_car_make_model; ?>" class="form-control" placeholder="Enter TP Car Make Model">
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
                                                        <input name="TPInsurerDetailsName" class="form-control" placeholder="Enter TP Insurer Details-Name" value="<?php echo (set_value('TPInsurerDetailsName') || $CI->CheckEmpty('TPInsurerDetailsName')) ? (set_value('TPInsurerDetailsName')) : @$leadData->tp_insurer_details_name; ?>">
                                                        <?php echo (form_error('TPInsurerDetailsName')) ? '<br>' . form_error('TPInsurerDetailsName', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('ThirdpartypolicyNumber')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">TP Policy Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="ThirdpartypolicyNumber" class="form-control" placeholder="Enter TP Policy Number" value="<?php echo (set_value('ThirdpartypolicyNumber') || $CI->CheckEmpty('ThirdpartypolicyNumber')) ? (set_value('ThirdpartypolicyNumber')) : @$leadData->third_party_policy_number; ?>">
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
                                                        <textarea rows="4" name="WhatInjuriesdidyousuffer" class="form-control" style="resize: none" placeholder="Enter Injuries"><?php echo (set_value('WhatInjuriesdidyousuffer') || $CI->CheckEmpty('WhatInjuriesdidyousuffer')) ? (set_value('WhatInjuriesdidyousuffer')) : @$leadData->what_injuries_did_you_suffer; ?></textarea>
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
                                                            <option <?php echo $CI->checkSelected('IsInjuryOngoingInjury-Physio', @$leadData->is_injury_on_going_injury_physio, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('IsInjuryOngoingInjury-Physio', @$leadData->is_injury_on_going_injury_physio, "No"); ?> value="No">No</option>
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
                                                            <option <?php echo $CI->checkSelected('DidyouseekMedicalAttention', @$leadData->did_you_seek_medical_attention, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('DidyouseekMedicalAttention', @$leadData->did_you_seek_medical_attention, "No"); ?> value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('DidyouseekMedicalAttention')) ? '<br>' . form_error('DidyouseekMedicalAttention', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('Additionalnotes')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Additional Notes</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea name="Additionalnotes" rows="5" class="form-control" style="resize: none" placeholder="Enter Additional Notes"><?php echo (set_value('Additionalnotes') || $CI->CheckEmpty('Additionalnotes')) ? (set_value('Additionalnotes')) : @$leadData->additional_notes; ?></textarea>
                                                        <?php echo (form_error('Additionalnotes')) ? '<br>' . form_error('Additionalnotes', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>                                    

                                </div>

<?php endif; ?>
                                
<?php if($lead_campaign[0]->campaign_name == "Housing Disrepair"): ?>


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
                                                        <textarea rows="5" name="FullAddressofPropertyifdifferentfromtheoneyouarelivinginnow" class="form-control" placeholder="Enter Full Address of Property if different from the one you are living in now">

                                                            <?php 
                                                                echo (set_value('FullAddressofPropertyifdifferentfromtheoneyouarelivinginnow') || 
                                                                $CI->CheckEmpty('FullAddressofPropertyifdifferentfromtheoneyouarelivinginnow')) ? 
                                                                (set_value('FullAddressofPropertyifdifferentfromtheoneyouarelivinginnow')) : 
                                                                @$leadData->full_address_of_property_if_different_from_the_one_you_are_livin; 
                                                            ?>
                                                            
                                                        </textarea>
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
                                                        <input type="text" name="NameofLandlordAddress" class="form-control" placeholder="Enter Full Address and Full Name of Landlord" value="<?php echo (set_value('NameofLandlordAddress') || $CI->CheckEmpty('NameofLandlordAddress')) ? (set_value('NameofLandlordAddress')) : @$leadData->name_of_landlord_address; ?>">
                                                        <?php echo (form_error('NameofLandlordAddress')) ? '<br>' . form_error('NameofLandlordAddress', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('NumberofoccupantsresidingintheHouseIncludingChildren')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Number of occupants residing in the House Including Children</label>
                                                    <div class="col-md-8" style="">
                                                        <input placeholder="Enter Number of occupants residing in the House Including Children" type="text" name="NumberofoccupantsresidingintheHouseIncludingChildren" value="<?php echo (set_value('NumberofoccupantsresidingintheHouseIncludingChildren') || $CI->CheckEmpty('NumberofoccupantsresidingintheHouseIncludingChildren')) ? (set_value('NumberofoccupantsresidingintheHouseIncludingChildren')) : @$leadData->number_of_occupants_residing_in_the_house_including_children; ?>" class="form-control">
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
                                                        <textarea name="NamesandDateofBirthofalloccupants" placeholder="Enter Names and Date of Birth of all occupants" class="form-control" rows="5">

                                                            <?php 
                                                                echo (set_value('NamesandDateofBirthofalloccupants') || 
                                                                $CI->CheckEmpty('NamesandDateofBirthofalloccupants')) ? 
                                                                (set_value('NamesandDateofBirthofalloccupants')) : 
                                                                @$leadData->names_and_date_of_birth_of_all_occupants; 
                                                            ?>

                                                        </textarea>
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
                                                        <input type="text" placeholder="Enter What is your monthly Rent" name="WhatisyourmonthlyRent" class="form-control" value="<?php echo (set_value('WhatisyourmonthlyRent') || $CI->CheckEmpty('WhatisyourmonthlyRent')) ? (set_value('WhatisyourmonthlyRent')) : @$leadData->what_is_your_monthly_rent; ?>">
                                                        <?php echo (form_error('WhatisyourmonthlyRent')) ? '<br>' . form_error('WhatisyourmonthlyRent', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('Ifyoupayweeklyhowmuchdoyoupay')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">If you pay weekly how much do you pay </label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="Ifyoupayweeklyhowmuchdoyoupay" class="form-control" placeholder="Enter If you pay weekly how much do you pay" value="<?php echo (set_value('Ifyoupayweeklyhowmuchdoyoupay') || $CI->CheckEmpty('Ifyoupayweeklyhowmuchdoyoupay')) ? (set_value('Ifyoupayweeklyhowmuchdoyoupay')) : @$leadData->if_you_pay_weekly_how_much_do_you_pay; ?>">
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
                                                        <input type="text" name="DoyoupayrentCashorDSS" class="form-control" placeholder="Enter Do you pay rent Cash or DSS" value="<?php echo (set_value('DoyoupayrentCashorDSS') || $CI->CheckEmpty('DoyoupayrentCashorDSS')) ? (set_value('DoyoupayrentCashorDSS')) : @$leadData->do_you_pay_rent_cash_or_dss; ?>">
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
                                                            <option <?php echo $CI->checkSelected('DoyouclaimHousingBenefit', @$leadData->do_you_claim_housing_benefit, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('DoyouclaimHousingBenefit', @$leadData->do_you_claim_housing_benefit, "No"); ?> value="No">No</option>
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
                                                            <option <?php echo $CI->checkSelected('Howisthispaymentmade', @$leadData->how_is_this_payment_made, "Direct Debit"); ?> value="Direct Debit">Direct Debit</option>
                                                            <option <?php echo $CI->checkSelected('Howisthispaymentmade', @$leadData->how_is_this_payment_made, "Standing Order"); ?> value="Standing Order">Standing Order</option>
                                                            <option <?php echo $CI->checkSelected('Howisthispaymentmade', @$leadData->how_is_this_payment_made, "Cash"); ?> value="Cash">Cash</option>
                                                            <option <?php echo $CI->checkSelected('Howisthispaymentmade', @$leadData->how_is_this_payment_made, "Other"); ?> value="Other">Other</option>
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
                                                            <option <?php echo $CI->checkSelected('DoyouhaveacopyofTenancyagreement', @$leadData->do_you_have_a_copy_of_tenancy_agreement, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('DoyouhaveacopyofTenancyagreement', @$leadData->do_you_have_a_copy_of_tenancy_agreement, "No"); ?> value="No">No</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('DoyouhaveacopyofTenancyagreement')) ? '<br>' . form_error('DoyouhaveacopyofTenancyagreement', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    
                                </div>


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
                                                            <option <?php echo $CI->checkSelected('PositiononLiability', @$leadData->position_on_liability, "Liability Admitted"); ?> value="Liability Admitted">Liability Admitted</option>
                                                            <option <?php echo $CI->checkSelected('PositiononLiability', @$leadData->position_on_liability, "Liability Disputed"); ?> value="Liability Disputed">Liability Disputed</option>
                                                            <option <?php echo $CI->checkSelected('PositiononLiability', @$leadData->position_on_liability, "No position on liability"); ?> value="No position on liability">No position on liability</option>
                                                            <option <?php echo $CI->checkSelected('PositiononLiability', @$leadData->position_on_liability, "50/50"); ?> value="50/50">50/50</option>
                                                            <option <?php echo $CI->checkSelected('PositiononLiability', @$leadData->position_on_liability, "Liability Denied"); ?> value="Liability Denied">Liability Denied</option>
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
                                                        <textarea rows="5" class="form-control" name="Note" placeholder="Enter Note">
                                                            <?php echo (set_value('Note') || $CI->CheckEmpty('Note')) ? (set_value('Note')) : @$leadData->notes; ?>
                                                        </textarea>
                                                        <?php echo (form_error('Note')) ? '<br>' . form_error('Note', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('additional_notes')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Additional Notes</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="5" class="form-control" name="additional_notes" placeholder="Enter Additional Notes">
                                                            <?php echo (set_value('additional_notes') || $CI->CheckEmpty('additional_notes')) ? (set_value('additional_notes')) : @$leadData->additional_notes; ?>                                                        
                                                        </textarea>
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
                                                        <textarea rows="5" class="form-control" name="NatureofDisrepair" placeholder="Enter Nature of Disrepair">
                                                            <?php echo (set_value('NatureofDisrepair') || $CI->CheckEmpty('NatureofDisrepair')) ? (set_value('NatureofDisrepair')) : @$leadData->nature_of_disrepair; ?>                                                        
                                                        </textarea>
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
                                                        <input type="text" class="form-control" name="DateDisrepairfirstnotice" id="DateDisrepairfirstnotice" placeholder="Enter Date Disrepair first notice" value="<?php echo (set_value('DateDisrepairfirstnotice') || $CI->CheckEmpty('DateDisrepairfirstnotice')) ? (set_value('DateDisrepairfirstnotice')) : @$leadData->date_disrepair_first_notice; ?>">
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
                                                            <option <?php echo $CI->checkSelected('WereyouInjured', @$leadData->were_you_injured, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('WereyouInjured', @$leadData->were_you_injured, "No"); ?> value="No">No</option>
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
                                                        <textarea name="DescriptionofInjuries" class="form-control" rows="5" placeholder="Enter Description of Injuries">
                                                            <?php echo (set_value('DescriptionofInjuries') || $CI->CheckEmpty('DescriptionofInjuries')) ? (set_value('DescriptionofInjuries')) : @$leadData->description_of_injuries; ?>
                                                        </textarea>
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
                                                        <textarea rows="5" name="Haveyounoticedanyissuesoutsidethehouse" class="form-control" placeholder="Enter Have you noticed any issues outside the house">
                                                            <?php echo (set_value('Haveyounoticedanyissuesoutsidethehouse') || $CI->CheckEmpty('Haveyounoticedanyissuesoutsidethehouse')) ? (set_value('Haveyounoticedanyissuesoutsidethehouse')) : @$leadData->have_you_noticed_any_issues_outside_the_house; ?>
                                                        </textarea>
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
                                                        <textarea rows="5" name="Dothewindowsanddoorsopenfreely" placeholder="Enter Do the windows and doors open freely" class="form-control">
                                                            <?php echo (set_value('Dothewindowsanddoorsopenfreely') || $CI->CheckEmpty('Dothewindowsanddoorsopenfreely')) ? (set_value('Dothewindowsanddoorsopenfreely')) : @$leadData->do_the_windows_and_doors_open_freely; ?>
                                                        </textarea>
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
                                                        <textarea rows="5" name="DoyouhaveanyextractionfansinthehouseIfsoaretheyworkingcorrectly" placeholder="Enter Do you have any extraction fans in the house? If so, are they working correctly" class="form-control">
                                                            <?php echo (set_value('DoyouhaveanyextractionfansinthehouseIfsoaretheyworkingcorrectly') || $CI->CheckEmpty('DoyouhaveanyextractionfansinthehouseIfsoaretheyworkingcorrectly')) ? (set_value('DoyouhaveanyextractionfansinthehouseIfsoaretheyworkingcorrectly')) : @$leadData->do_you_have_any_extraction_fans_in_the_house_if_so_are_they_work; ?>
                                                        </textarea>
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
                                                            <option <?php echo $CI->checkSelected('Haveyouclaimedbefore', @$leadData->have_you_claimed_before, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('Haveyouclaimedbefore', @$leadData->have_you_claimed_before, "No"); ?> value="No">No</option>
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
                                                            <option <?php echo $CI->checkSelected('tenancy_document', @$leadData->tenancy_document, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('tenancy_document', @$leadData->tenancy_document, "No"); ?> value="No">No</option>
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
                                                            <option <?php echo $CI->checkSelected('copy_of_complaint_letter', @$leadData->copy_of_complaint_letter, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('copy_of_complaint_letter', @$leadData->copy_of_complaint_letter, "No"); ?> value="No">No</option>
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
                                                            <option <?php echo $CI->checkSelected('pictures_of_disrepair_supplied', @$leadData->pictures_of_disrepair_supplied, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('pictures_of_disrepair_supplied', @$leadData->pictures_of_disrepair_supplied, "No"); ?> value="No">No</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('pictures_of_disrepair_supplied')) ? '<br>' . form_error('pictures_of_disrepair_supplied', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('date_HDR_noticed')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Date HDR Noticed</label>
                                                    <div class="col-md-8" style="">
                                                        <input id="date_HDR_noticed" value="<?php echo (set_value('date_HDR_noticed') || $CI->CheckEmpty('date_HDR_noticed')) ? (set_value('date_HDR_noticed')) : @$leadData->date_hrd_noticed; ?>" placeholder="Enter Date HDR Noticed" id="date_HDR_noticed" name="date_HDR_noticed" class="form-control">
                                                        <?php echo (form_error('date_HDR_noticed')) ? '<br>' . form_error('date_HDR_noticed', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            
                                        </div>
                                    </div>
                                    
                                </div>

                                
<?php endif; ?>                                
                                
                                

                                <?php if ($_SESSION['adminData']['role_name'] == "Admin"): ?>
                                
                                <hr style="margin-top: 0px; margin-bottom: 10px;">

                                    <div class="col-md-12" style="padding: 0px;">
                                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> OFFICE USE ONLY  </p>
                                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                        </div>
                                    </div>
                                
<?php if($lead_campaign[0]->campaign_name == "Housing Disrepair"): ?>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">                                
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                    
                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('invoice_number')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Invoice Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="invoice_number" placeholder="Enter Invoice Number" class="form-control" value="<?php echo (set_value('invoice_number') || $CI->CheckEmpty('invoice_number')) ? (set_value('invoice_number')) : @$leadData->invoice_number; ?>">
                                                        <?php echo (form_error('invoice_number')) ? '<br>' . form_error('invoice_number', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group <?php echo (form_error('replacement_invoice_number')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Replacement Invoice Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="replacement_invoice_number" placeholder="Enter Replacement Invoice Number" class="form-control" value="<?php echo (set_value('replacement_invoice_number') || $CI->CheckEmpty('replacement_invoice_number')) ? (set_value('replacement_invoice_number')) : @$leadData->replacement_invoice_number; ?>">
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
                                                        <input type="text" name="triage_invoive_number" placeholder="Enter Triage Invoive Number" class="form-control" value="<?php echo (set_value('triage_invoive_number') || $CI->CheckEmpty('triage_invoive_number')) ? (set_value('triage_invoive_number')) : @$leadData->triage_invoive_number; ?>">
                                                        <?php echo (form_error('triage_invoive_number')) ? '<br>' . form_error('triage_invoive_number', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('date_instructed')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Date Instructed</label>
                                                    <div class="col-md-10" style="">
                                                        <input type="text" name="date_instructed" placeholder="Enter Date Instructed" id="date_instructed" class="form-control" value="<?php echo (set_value('date_instructed') || $CI->CheckEmpty('date_instructed')) ? (set_value('date_instructed')) : @$leadData->date_instructed; ?>">
                                                        <?php echo (form_error('date_instructed')) ? '<br>' . form_error('date_instructed', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('DatetriageInvoicePaid')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Date triage Invoice Paid</label>
                                                    <div class="col-md-10" style="">
                                                        <input type="text" name="DatetriageInvoicePaid" placeholder="Enter Date triage Invoice Paid" id="DatetriageInvoicePaid" class="form-control" value="<?php echo (set_value('DatetriageInvoicePaid') || $CI->CheckEmpty('DatetriageInvoicePaid')) ? (set_value('DatetriageInvoicePaid')) : @$leadData->date_triage_invoice_paid; ?>">
                                                        <?php echo (form_error('DatetriageInvoicePaid')) ? '<br>' . form_error('DatetriageInvoicePaid', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="col-md-12">

                                                <div class="form-group <?php echo (form_error('rejectionreason')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left">Rejection Reason</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" name="rejectionreason" placeholder="Enter Rejection Reason" class="form-control">
                                                            <?php echo (set_value('rejectionreason') || $CI->CheckEmpty('rejectionreason')) ? (set_value('rejectionreason')) : @$leadData->office_use_only_rejection_reason; ?>
                                                        </textarea>
                                                        <?php echo (form_error('rejectionreason')) ? '<br>' . form_error('rejectionreason', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            

                                            
                                            
                                        </div>
                                    </div>

                                    

                                    
                                </div>
                                
                                
                                
<?php endif; ?>                                
                                
<?php if($lead_campaign[0]->campaign_name != "Housing Disrepair"): ?>
                                
                                
<?php if(isset($lead_campaign[0]->campaign_name) && $lead_campaign[0]->campaign_name == "Car Hire"): ?>

                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('referred_by_your_name')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left;">Referred By Your name</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="5" class="form-control" id="referred_by_your_name" placeholder="Enter Referred By Your name" name="referred_by_your_name"><?php echo (set_value('referred_by_your_name') || $CI->CheckEmpty('referred_by_your_name')) ? (set_value('referred_by_your_name')) : @$leadData->referred_by_your_name; ?></textarea>
                                                        <?php echo (form_error('referred_by_your_name')) ? '<br>' . form_error('referred_by_your_name', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('referrer_contact_number')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Referrer Contact Number</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" id="referrer_contact_number" placeholder="Enter Referrer Contact Number" name="referrer_contact_number" value="<?php echo (set_value('referrer_contact_number') || $CI->CheckEmpty('referrer_contact_number')) ? (set_value('referrer_contact_number')) : @$leadData->referrer_contact_number; ?>">
                                                        <?php echo (form_error('referrer_contact_number')) ? '<br>' . form_error('referrer_contact_number', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('best_time_to_call_client')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Best time to call client</label>
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select class="form-control" name="best_time_to_call_client" id="best_time_to_call_client">
                                                            <option value="">Select Best Time to Call Client</option>
                                                            <option <?php echo $CI->checkSelected('best_time_to_call_client', @$leadData->est_time_to_call_client, "Anytime"); ?> value="Anytime">Anytime</option>
                                                            <option <?php echo $CI->checkSelected('best_time_to_call_client', @$leadData->est_time_to_call_client, "Morning"); ?> value="Morning">Morning</option>
                                                            <option <?php echo $CI->checkSelected('best_time_to_call_client', @$leadData->est_time_to_call_client, "Afternoon"); ?> value="Afternoon">Afternoon</option>
                                                            <option <?php echo $CI->checkSelected('best_time_to_call_client', @$leadData->est_time_to_call_client, "Evening"); ?> value="Evening">Evening</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('best_time_to_call_client')) ? '<br>' . form_error('best_time_to_call_client', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('introducer_name')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Introducer Name</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="5" class="form-control" id="introducer_name" placeholder="Enter Introducer Name" name="introducer_name"><?php echo (set_value('introducer_name') || $CI->CheckEmpty('introducer_name')) ? (set_value('introducer_name')) : @$leadData->introducer_name; ?></textarea>
                                                        <?php echo (form_error('introducer_name')) ? '<br>' . form_error('introducer_name', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('best_day_and_time_to_call')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Best Day and time to call</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea placeholder="Enter Best Day and time to call" name="best_day_and_time_to_call" id="best_day_and_time_to_call" class="form-control" rows="5"><?php echo (set_value('best_day_and_time_to_call') || $CI->CheckEmpty('best_day_and_time_to_call')) ? (set_value('best_day_and_time_to_call')) : @$leadData->best_day_and_time_to_call; ?></textarea>
                                                        <?php echo (form_error('best_day_and_time_to_call')) ? '<br>' . form_error('best_day_and_time_to_call', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('type_of_hire_car')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Type of Hire car</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="5" class="form-control" id="type_of_hire_car" placeholder="Enter Type of Hire car" name="type_of_hire_car" ><?php echo (set_value('type_of_hire_car') || $CI->CheckEmpty('type_of_hire_car')) ? (set_value('type_of_hire_car')) : @$leadData->type_of_hire_car; ?></textarea>
                                                        <?php echo (form_error('type_of_hire_car')) ? '<br>' . form_error('type_of_hire_car', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('hire_provided_by')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Hire Provided By</label>
                                                    <div class="col-md-8" style="">
                                                    <textarea name="hire_provided_by" class="form-control" rows="5" placeholder="Enter Hire Provided By"><?php echo (set_value('hire_provided_by') || $CI->CheckEmpty('hire_provided_by')) ? (set_value('hire_provided_by')) : @$leadData->hire_provided_by; ?></textarea>
                                                        <?php echo (form_error('hire_provided_by')) ? '<br>' . form_error('hire_provided_by', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('date_hire_provided')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left;">Date Hire Provided</label>
                                                    <div class="col-md-10" style="">
                                                        <input type="text" class="form-control" id="date_hire_provided" placeholder="Enter Date Hire Provided" name="date_hire_provided" value="<?php echo (set_value('date_hire_provided') || $CI->CheckEmpty('date_hire_provided')) ? (set_value('date_hire_provided')) : @$leadData->date_hire_provided; ?>">
                                                        <?php echo (form_error('date_hire_provided')) ? '<br>' . form_error('date_hire_provided', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                </div>                                    
                                
<?php endif; ?>

                                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">

                                                <div class="col-md-6">
                                                    <div class="form-group <?php echo (form_error('marketing_source')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left">Marketing Source</label>
                                                        <div class="col-md-8" style="">
                                                            <input name="marketing_source" class="form-control" value="<?php echo (set_value('marketing_source') || $CI->CheckEmpty('marketing_source')) ? (set_value('marketing_source')) : @$leadData->marketing_source; ?>" placeholder="Enter Marketing Source">
                                                            <?php echo (form_error('marketing_source')) ? '<br>' . form_error('marketing_source', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            
                                        
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('replacementInvoiceNumber')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left">Replacement Invoice Number</label>
                                                <div class="col-md-8" style="">
                                                    <input name="replacementInvoiceNumber" class="form-control" value="<?php echo (set_value('replacementInvoiceNumber') || $CI->CheckEmpty('replacementInvoiceNumber')) ? (set_value('replacementInvoiceNumber')) : @$leadData->replacement_invoice_number; ?>" placeholder="Enter Replacement Invoice Number">
                                                    <?php echo (form_error('replacementInvoiceNumber')) ? '<br>' . form_error('replacementInvoiceNumber', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                </div>
                                            </div>
                                        </div>


                                        </div>
                                    </div>                                    


                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('InterpreterName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Interpreter Name</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="InterpreterName" class="form-control">
                                                            <option value="">Select Interpreter Name</option>
                                                            <option <?php echo $CI->checkSelected('InterpreterName', @$leadData->interpreter_name, "Nishma"); ?> value="Nishma">Nishma</option>
                                                            <option <?php echo $CI->checkSelected('InterpreterName', @$leadData->interpreter_name, "Aisha"); ?> value="Aisha">Aisha</option>
                                                            <option <?php echo $CI->checkSelected('InterpreterName', @$leadData->interpreter_name, "Haider"); ?> value="Haider">Haider</option>
                                                            <option <?php echo $CI->checkSelected('InterpreterName', @$leadData->interpreter_name, "Waqas"); ?> value="Waqas">Waqas</option>
                                                            <option <?php echo $CI->checkSelected('InterpreterName', @$leadData->interpreter_name, "Shaz"); ?> value="Shaz">Shaz</option>
                                                        </select>
                                                        <?php echo (form_error('InterpreterName')) ? '<br>' . form_error('InterpreterName', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Interpreterpaid')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Interpreter Paid</label>
                                                    <div class="col-md-8" style="">
                                                        <select name="Interpreterpaid" class="form-control">
                                                            <option value="">Select Interpreter Paid</option>
                                                            <option <?php echo $CI->checkSelected('Interpreterpaid', @$leadData->interpreter_paid, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('Interpreterpaid', @$leadData->interpreter_paid, "No"); ?>  value="No">No</option>
                                                        </select>
                                                        <?php echo (form_error('Interpreterpaid')) ? '<br>' . form_error('Interpreterpaid', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                        
                                        
                                        
                                    </div>                                
                                
<?php if(isset($lead_campaign[0]->campaign_name) && $lead_campaign[0]->campaign_name == "Car Hire"): ?>
                                
                                
                                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-6">

                                                    <div class="form-group <?php echo (form_error('invoice_number')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left">Invoice Number</label>

                                                        <div class="col-md-8" style="">
                                                            <input type="text" name="invoice_number" placeholder="Enter Invoice Number" class="form-control" value="<?php echo (set_value('invoice_number') || $CI->CheckEmpty('invoice_number')) ? (set_value('invoice_number')) : @$leadData->invoice_number; ?>">
                                                            <?php echo (form_error('invoice_number')) ? '<br>' . form_error('invoice_number', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group <?php echo (form_error('date_invoice_paid')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left">Date Invoice Paid</label>
                                                        <div class="col-md-8" style="">
                                                            <input type="text" name="date_invoice_paid" id="date_invoice_paid" placeholder="Enter Date Invoice Paid" class="form-control" value="<?php echo (set_value('date_invoice_paid') || $CI->CheckEmpty('date_invoice_paid')) ? (set_value('date_invoice_paid')) : @$leadData->date_invoice_paid; ?>">
                                                            <?php echo (form_error('date_invoice_paid')) ? '<br>' . form_error('date_invoice_paid', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-6">

                                                    <div class="form-group <?php echo (form_error('date_introducer_paid')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left">Date Introducer Paid</label>
                                                        <div class="col-md-8" style="">
                                                            <input type="text" name="date_introducer_paid" id="date_introducer_paid" placeholder="Enter Date Introducer Paid" class="form-control" value="<?php echo (set_value('date_introducer_paid') || $CI->CheckEmpty('date_introducer_paid')) ? (set_value('date_introducer_paid')) : @$leadData->date_introducer_paid; ?>">
                                                            <?php echo (form_error('date_introducer_paid')) ? '<br>' . form_error('date_introducer_paid', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group <?php echo (form_error('date_agent_paid')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left">Date Agent Paid</label>
                                                        <div class="col-md-8" style="">
                                                            <input name="date_agent_paid" placeholder="Enter Date Agent Paid" id="date_agent_paid" class="form-control" value="<?php echo (set_value('date_agent_paid') || $CI->CheckEmpty('date_agent_paid')) ? (set_value('date_agent_paid')) : @$leadData->date_agent_paid; ?>">
                                                            <?php echo (form_error('date_agent_paid')) ? '<br>' . form_error('date_agent_paid', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-6">

                                                    <div class="form-group <?php echo (form_error('ref_date')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left">Ref Date</label>
                                                        <div class="col-md-8" style="">
                                                            <input type="text" name="ref_date" placeholder="Enter Ref Date" id="ref_date" class="form-control" value="<?php echo (set_value('ref_date') || $CI->CheckEmpty('ref_date')) ? (set_value('ref_date')) : @$leadData->ref_date; ?>">  
                                                            <?php echo (form_error('ref_date')) ? '<br>' . form_error('ref_date', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group <?php echo (form_error('rep_due')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left">REP DUE</label>
                                                        <div class="col-md-8" style="">
                                                            <input rows="5" name="rep_due" placeholder="Enter REP DUE" id="rep_due" class="form-control" value="<?php echo (set_value('rep_due') || $CI->CheckEmpty('rep_due')) ? (set_value('rep_due')) : @$leadData->rep_due; ?>">
                                                            <?php echo (form_error('rep_due')) ? '<br>' . form_error('rep_due', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                
                                
<?php endif; ?>
                                
                                
                                
                                
                                <?php endif; ?>
<?php endif; ?>                                                                

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
