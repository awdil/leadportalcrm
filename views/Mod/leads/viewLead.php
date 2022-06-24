<?php
//    echo "<pre>";
//    echo "<pre>";
//    print_r($getleadData);
//    print_r($lead_campaign[0]->campaign_short_name);
//    die();

$permission_view = $_SESSION['adminData']['Leads']['permission_view'];
$permission_update = $_SESSION['adminData']['Leads']['permission_update'];
$permission_delete = $_SESSION['adminData']['Leads']['permission_delete'];
?>


<style>

    tr td{
        text-align: left;
    }

</style>
<?php if($permission_view == 1){ ?>
<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">VIEW LEAD </h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">View Lead</li>
            </ol>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!--.row-->


    <!-- ============================================================== -->
    <!-- Demo table -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">

                    <div class="col-md-9">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">LEAD DETAIL 
        
                        </div>
                    </div>

                    <div class="col-md-3 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php
                            echo base_url('Mod/editLead/');
                            echo!empty($getleadData[0]->lead_id) ? $getleadData[0]->lead_id : '';
                            ?>" style="margin-top: 20px;" class="btn btn-info btn-rounded" ><i class="fa fa-pencil"></i> Edit Lead</a>
                            <a href="<?php echo base_url('Mod/manageLeads'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Manage Leads</a>                    
                        </div>
                    </div>
<div class="col-md-12" >
    <?php echo($getleadData[0]->duplicateLeadofEmail) ? '<span class="label label-danger">Email Duplicate</span>' : ''; ?>
        <?php echo($getleadData[0]->duplicateLeadofPhone) ? '<span class="label label-danger">Phone Duplicate</span>' : ''; ?>
        <?php echo($getleadData[0]->duplicateLeadofPhone1) ? '<span class="label label-danger"> Work Phone Duplicate</span>' : ''; ?>
        <?php echo($getleadData[0]->duplicateLeadofpost_code) ? '<span class="label label-danger">Post Code Duplicate</span>' : ''; ?>
        <?php echo($getleadData[0]->duplicateLeadofVehicle) ? '<span class="label label-danger">Vehicle Reg. Number Duplicate</span>' : ''; ?>
        <?php echo($getleadData[0]->duplicateLeadofVehicleTP) ? '<span class="label label-danger">TP Vehicle Reg. Number Duplicate</span>' : ''; ?>
</div>
                </div>


                <hr style="margin-bottom: 0; margin-top: 5px;">
                <?php if($lead_campaign[0]->campaign_short_name == "TR"): ?>
                
                <?php 
                //exit;
                endif; 
                ?>
                <?php if($lead_campaign[0]->campaign_short_name == "HDR"): ?>
                
                <div class="panel-body" style="padding: 0px;">
                    
                    <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> User Info</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>
                    
                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">                    


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                            <tbody>

                                <tr>
                                    <th width="16%">User</th>
                                    <td width="16%"><?php echo $getleadData[0]->userName ?></td>
                                    <th width="16%">Users Company Name</th>
                                    <td width="16%"><?php echo $getleadData[0]->cmp_name ?></td>
                                    <th width="16%">File Reference #</th>
                                    <td width="16%"><?php echo $getleadData[0]->reference_id ?></td>
                                </tr>

                            </tbody>                                
                            
                        </table>
                    </div>
                    
                    <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Lead Status</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>
                    
                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table  style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered" >

                            <tbody>

                                <tr>
                                    <th width="25%">Lead Status</th>
                                    <td width="25%"><?php echo $getleadData[0]->status_name ?></td>
                                    <th width="25%">FLG Insertion ID</th>
                                    <td width="25%"><?php echo $getleadData[0]->api_inseration_id ?></td>

                                </tr>

                            </tbody>                                
                        </table>
                    </div>
                    
                    <div class="col-md-12" style="padding: 0px; ">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Personal Details </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >

                            <tbody>
                                
                                <tr>
                                    <th width='25%'>Title</th>
                                    <td width='25%'><?php echo $getleadData[0]->title ?></td>
                                    <th width='25%'>First Name</th>
                                    <td width='25%'><?php echo $getleadData[0]->first_name ?></td>
                                </tr>
                                
                                <tr>
                                    <th width='25%'>Last Name</th>
                                    <td width='25%'><?php echo $getleadData[0]->last_name ?></td>
                                    <th width='25%'>Phone 1</th>
                                    <td width='25%'><?php echo $getleadData[0]->phone_1 ?>
                                    
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th width='25%'>Phone 2</th>
                                    <td width='25%'><?php echo $getleadData[0]->phone_2 ?></td>
                                    <th width='25%'>Email</th>
                                    <td width='25%'><?php echo $getleadData[0]->email ?></td>
                                </tr>
                                
                                <tr>
                                    <th width='25%'>Address</th>
                                    <td width='25%'><?php echo $getleadData[0]->address ?></td>
                                    <th width='25%'>Address 2</th>
                                    <td width='25%'><?php echo $getleadData[0]->address_2 ?></td>
                                </tr>
                                
                                <tr>
                                    <th width='25%'>Address 3</th>
                                    <td width='25%'><?php echo $getleadData[0]->address_3 ?></td>
                                    <th width='25%'>Town / City</th>
                                    <td width='25%'><?php echo $getleadData[0]->town_city ?></td>
                                </tr>
                                
                                <tr>
                                    <th width='25%'>Date of Birth</th>
                                    <td width='25%'><?php echo $getleadData[0]->date_of_birth ?></td>
                                    <th width='25%'>Post Code</th>
                                    <td width='25%'><?php echo $getleadData[0]->post_code ?></td>
                                </tr>
                                
                                <tr>
                                    <th width='25%'>Client Occupation</th>
                                    <td width='25%'><?php echo $getleadData[0]->clients_occupation ?></td>
                                    <th width='25%'>NI Number</th>
                                    <td width='25%'><?php echo $getleadData[0]->ni_number ?></td>
                                </tr>
                                
                                <tr>
                                    <th width='25%'>Marital status</th>
                                    <td width='25%'><?php echo $getleadData[0]->marital_status ?></td>
                                    <th width='25%'>Are you a Litigation Friend</th>
                                    <td width='25%'><?php echo $getleadData[0]->are_you_a_litigation_friend ?></td>
                                </tr>
                                
                                <tr>
                                    <th width='25%'>If litigation friend, name and date of birth of the claimant</th>
                                    <td width='25%'><?php echo $getleadData[0]->if_litigation_friend_name_and_date_of_birth_of_the_claimant ?></td>
                                    <th width='25%'>Client Password</th>
                                    <td width='25%'><?php echo $getleadData[0]->client_password ?></td>
                                </tr>
                                
                            </tbody>
                            
                        </table>
                    </div>
                    
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Contact Preferences </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >

                            <tbody>                            

                                <tr>
                                    <th width="17%">Permission to Phone</th>
                                    <td width="17%"><?php echo $getleadData[0]->contact_phone ?></td>
                                    <th width="17%">Permission to SMS</th>
                                    <td width="17%"><?php echo $getleadData[0]->contact_sms ?></td>
                                    <th width="17%">Permission to Email</th>
                                    <td width="16%"><?php echo $getleadData[0]->contact_email ?></td>
                                </tr>

                                <tr>
                                    <th width="17%">Permission to Mail</th>
                                    <td width="17%"><?php echo $getleadData[0]->contact_mail ?></td>
                                    <th width="17%">Preferred Contact Time</th>
                                    <td width="17%"><?php echo $getleadData[0]->contact_time ?></td>
                                    <th width="20%">Preferred Date to Call</th>
                                    <td width="20%"><?php echo $getleadData[0]->preferred_date_to_call ?></td>                                    
                                </tr>

                            </tbody>                            
                        </table>                        
                    </div>
                    
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i>   Property Details </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>
                    
                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >

                            <tbody>                            

                                <tr>
                                    <th width="25%">Full Address of Property if different from the one you are living in now</th>
                                    <td width="25%"><?php echo $getleadData[0]->full_address_of_property_if_different_from_the_one_you_are_livin ?></td>
                                    <th width="25%">Name of Landlord Address</th>
                                    <td width="25%"><?php echo $getleadData[0]->name_of_landlord_address ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Number of occupants residing in the House Including Children</th>
                                    <td width="25%"><?php echo $getleadData[0]->number_of_occupants_residing_in_the_house_including_children ?></td>
                                    <th width="25%">Names and Date of Birth of all occupants</th>
                                    <td width="25%"><?php echo $getleadData[0]->names_and_date_of_birth_of_all_occupants ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">What is your monthly Rent</th>
                                    <td width="25%"><?php echo $getleadData[0]->what_is_your_monthly_rent ?></td>
                                    <th width="25%">If you pay weekly how much do you pay</th>
                                    <td width="25%"><?php echo $getleadData[0]->if_you_pay_weekly_how_much_do_you_pay ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Do you pay rent Cash or DSS</th>
                                    <td width="25%"><?php echo $getleadData[0]->do_you_pay_rent_cash_or_dss ?></td>
                                    <th width="25%">Do you claim Housing Benefit</th>
                                    <td width="25%"><?php echo $getleadData[0]->do_you_claim_housing_benefit ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">How is this payment made</th>
                                    <td width="25%"><?php echo $getleadData[0]->how_is_this_payment_made ?></td>
                                    <th width="25%">Do you have a copy of Tenancy agreement</th>
                                    <td width="25%"><?php echo $getleadData[0]->do_you_have_a_copy_of_tenancy_agreement ?></td>
                                </tr>
                                
                            </tbody>
                            
                        </table>

                    </div>
                       
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i>    Disrepair Details </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>
                    
                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >

                            <tbody>                            
                                
                                <tr>
                                    <th width="25%">Position on Liability</th>
                                    <td width="25%"><?php echo $getleadData[0]->position_on_liability ?></td>
                                    <th width="25%">Note</th>
                                    <td width="25%"><?php echo $getleadData[0]->notes ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Additional Notes</th>
                                    <td width="25%"><?php echo $getleadData[0]->additional_notes ?></td>
                                    <th width="25%">Nature of Disrepair</th>
                                    <td width="25%"><?php echo $getleadData[0]->nature_of_disrepair ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Date Disrepair first notice</th>
                                    <td width="25%"><?php echo $getleadData[0]->date_disrepair_first_notice ?></td>
                                    <th width="25%">Were you Injured</th>
                                    <td width="25%"><?php echo $getleadData[0]->were_you_injured ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Description of Injuries</th>
                                    <td width="25%"><?php echo $getleadData[0]->description_of_injuries ?></td>
                                    <th width="25%">Have you noticed any issues outside the house</th>
                                    <td width="25%"><?php echo $getleadData[0]->have_you_noticed_any_issues_outside_the_house ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Do the windows and doors open freely</th>
                                    <td width="25%"><?php echo $getleadData[0]->do_the_windows_and_doors_open_freely ?></td>
                                    <th width="25%">Do you have any extraction fans in the house? If so, are they working correctly?</th>
                                    <td width="25%"><?php echo $getleadData[0]->do_you_have_any_extraction_fans_in_the_house_if_so_are_they_work ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Have you claimed before</th>
                                    <td width="25%"><?php echo $getleadData[0]->have_you_claimed_before ?></td>
                                    <th width="25%">Tenancy Document</th>
                                    <td width="25%"><?php echo $getleadData[0]->tenancy_document ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Copy of Complaint Letter</th>
                                    <td width="25%"><?php echo $getleadData[0]->copy_of_complaint_letter ?></td>
                                    <th width="25%">Pictures of Disrepair Supplied</th>
                                    <td width="25%"><?php echo $getleadData[0]->pictures_of_disrepair_supplied ?></td>
                                </tr>
                                
                                
                                <tr>
                                    <th width="25%">Date HDR Noticed</th>
                                    <td width="25%"><?php echo $getleadData[0]->date_hrd_noticed ?></td>
                                </tr>
                                
                            </tbody>
                        </table>

                    </div>
                    
                    <?php if ($_SESSION['adminData']['role_name'] == "Admin"): ?>
                    
                        <div class="col-md-12" style="padding: 0px;">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> OFFICE USE ONLY  </p>
                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>

                        <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                            
                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                                <tbody>

                                    <tr>
                                        <th width="25%">Invoice Number</th>
                                        <td width="25%"><?php echo $getleadData[0]->invoice_number ?></td>
                                        <th width="25%">Replacement Invoice Number</th>
                                        <td width="25%"><?php echo $getleadData[0]->replacement_invoice_number ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="25%">Triage Invoice Number</th>
                                        <td width="25%"><?php echo $getleadData[0]->triage_invoive_number ?></td>
                                        <th width="25%">Date Instructed</th>
                                        <td width="25%"><?php echo $getleadData[0]->date_instructed ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="25%">Date triage Invoice Paid</th>
                                        <td width="25%"><?php echo $getleadData[0]->date_triage_invoice_paid ?></td>
                                        <th width="25%">Rejection Reason</th>
                                        <td><?php echo $getleadData[0]->office_use_only_rejection_reason ?></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>      
                    <?php endif; ?>
                       
                </div>
                <?php else: ?>
                <div class="panel-body" style="padding: 0px;">                
                    <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> User Info</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>


                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">                    


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                            <tbody>

                                <tr>
                                    <th width="16%">User</th>
                                    <td width="16%"><?php echo $getleadData[0]->userName ?></td>
                                    <th width="16%">Users Company Name</th>
                                    <td width="16%"><?php echo $getleadData[0]->cmp_name ?></td>
                                    <th width="16%">File Reference #</th>
                                    <td width="16%"><?php echo $getleadData[0]->reference_id ?></td>
                                </tr>

                            </tbody>                                
                        </table>
                    </div>

                    <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Lead Status</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered" >

                            <tbody>

                                <tr>
                                    <th width="25%">Lead Status</th>
                                    <td width="25%"><?php echo $getleadData[0]->status_name ?></td>
                                    <th width="25%">FLG Insertion ID</th>
                                    <td width="25%"><?php echo $getleadData[0]->api_inseration_id ?></td>

                                </tr>

                            </tbody>                                
                        </table>
                    </div>


                    <div class="col-md-12" style="padding: 0px; ">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Personal Details </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >

                            <tbody>

                                <tr>
                                    <th width="17%">First Name</th>
                                    <td width="17%"><?php echo $getleadData[0]->first_name ?></td>
                                    <th width="17%">Last Name</th>
                                    <td width="17%"><?php echo $getleadData[0]->last_name ?></td>
                                    <th width="17%">Job Title</th>
                                    <td width="17%"><?php echo $getleadData[0]->job_title ?></td>
                                </tr>   

                                <tr>                                                
                                    <th width="17%">Phone 1</th>
                                    <td width="17%"><?php echo $getleadData[0]->phone_1 ?></td>
                                    <th width="17%">Phone 2</th>
                                    <td width="16%"><?php echo $getleadData[0]->phone_2 ?></td>
                                    <th width="17%">Email</th>
                                    <td width="17%"><?php echo $getleadData[0]->email ?></td>
                                </tr>

                                <tr>
                                    <th width="17%">Address</th>
                                    <td width="17%"><?php echo $getleadData[0]->address ?></td>
                                    <th width="17%">Address 2</th>
                                    <td width="16%"><?php echo $getleadData[0]->address_2 ?></td>
                                    <th width="17%">Address 3</th>
                                    <td width="17%"><?php echo $getleadData[0]->address_3 ?></td>
                                </tr>

                                <tr>
                                    <th width="17%">Town City</th>
                                    <td width="17%"><?php echo $getleadData[0]->town_city ?></td>
                                    <th width="17%">Post code</th>
                                    <td width="16%"><?php echo $getleadData[0]->post_code ?></td>
                                    <th width="17%">Date of Birth</th>
                                    <td width="17%"><?php echo $getleadData[0]->date_of_birth ?></td>
                                </tr>
                            <?php if($lead_campaign[0]->campaign_short_name != "EC"): ?>
                                <tr>
                                    <th width="20%">NI Number</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ni_number ?></td>
                                    <th width="20%">Clients Occupation</th>
                                    <td colspan="2"><?php echo $getleadData[0]->clients_occupation ?></td>                                                                        
                                </tr>

                                <tr>
                                    <th colspan="2">Have you tried to claim before?</th>
                                    <td width="20%"><?php echo $getleadData[0]->have_you_claimed_before ?></td>                                    
                                    <th colspan="2">Do you wish to make a claim?</th>
                                    <td width="20%"><?php echo $getleadData[0]->do_you_wish_to_make_a_claim ?></td>                                    
                                </tr>

                                <tr>
                                    <th width="20%">Are you a Litigation Friend</th>
                                    <td width="20%"><?php echo $getleadData[0]->are_you_a_litigation_friend ?></td>                                    
                                    <th width="20%">Litigation Friend Details</th>
                                    <td colspan="4"><?php echo $getleadData[0]->if_litigation_friend_name_and_date_of_birth_of_the_claimant ?></td>                                   
                                </tr>

                                <tr>
                                    <th width="20%">Client Password</th>
                                    <td colspan="5"><?php echo $getleadData[0]->client_password ?></td>
                                </tr>
                                <?php endif; ?>
                                <?php if($lead_campaign[0]->campaign_short_name == "EC"): ?>
                                <tr>
                                    <th width="20%"> Authorizer First Name</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_auth_fname ?></td>
                                    <th width="20%"> Authorizer Last name</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_auth_lname ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%"> Account Holder First Name</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_acc_fname ?></td>
                                    <th width="20%"> Account Holder Last Name</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_acc_lname ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%"> Rep Id</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_repid ?></td>
                                    <th width="20%"> Language</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_language ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%"> State</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_state ?></td>
                                    <th width="20%"> Relationship</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_relationship ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%"> Account Class</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_accountclass ?></td>
                                    <th width="20%"> Sales Type</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_salestype ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%"> Commodity</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_commodity ?></td>
                                    <th width="20%"> Account Type</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_accounttype ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%"> Utility</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_utillity ?></td>
                                    <th width="20%"> Plan Code</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_plancode ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%"> Meter Number</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_meternumber ?></td>
                                    <th width="20%"> Account Number</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_accountnumber ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%"> Name Key</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_namekey ?></td>
                                    <th width="20%"> Service Zip</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_servicezip ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%"> Service City</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_servicecity ?></td>
                                    <th width="20%">Service State</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_servicestate ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%"> Service Address</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_serviceaddress ?></td>
                                    <th width="20%">Service Apt/Suite</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_servicepsuite ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%"> Billing Zip</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_billingzip ?></td>
                                    <th width="20%"> Billing City</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_billingcity ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%"> Billing Address </th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_billingaddress ?></td>
                                    <th width="20%"> Billing State</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_billingstate ?></td>                                 
                                </tr>
                                <tr>
                                    <th width="20%">Budget Billing </th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_budgetbilling ?></td>
                                    <th width="20%">Billing State</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_billingapsuite ?></td>                                 
                                </tr>
                                <?php endif; ?>
                            </tbody>                            

                        </table>

                    </div>

                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Contact Preferences </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >

                            <tbody>                            

                                <tr>
                                    <th width="17%">Permission to Phone</th>
                                    <td width="17%"><?php echo $getleadData[0]->contact_phone ?></td>
                                    <th width="17%">Permission to SMS</th>
                                    <td width="17%"><?php echo $getleadData[0]->contact_sms ?></td>
                                    <th width="17%">Permission to Email</th>
                                    <td width="16%"><?php echo $getleadData[0]->contact_email ?></td>
                                </tr>

                                <tr>
                                    <th width="17%">Permission to Mail</th>
                                    <td width="17%"><?php echo $getleadData[0]->contact_mail ?></td>
                                    <th width="17%">Preferred Contact Time</th>
                                    <td width="17%"><?php echo $getleadData[0]->contact_time ?></td>
                                    <th width="20%">Preferred Time to Call</th>
                                    <td width="20%"><?php echo $getleadData[0]->preferred_time_to_call ?></td>                                    
                                </tr>

                            </tbody>                            
                        </table>                        


                    </div>
<?php if($lead_campaign[0]->campaign_short_name == "PI"): ?>
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i>  Passengers Information </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>
                    
                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                        
                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >

                            <tbody>                            

                                <tr>
                                    <th colspan="2">Number of Passengers</th>
                                    <td colspan="2"><?php echo $getleadData[0]->number_of_passengers ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Passenger 1</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_1 ?></td>
                                    <th width="25%">Passenger 1 Relationship</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_1_relationship ?></td>
                                </tr>

                                <tr>
                                    <th width="25%">Passenger 1 Date Of Birth</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_1_date_of_birth ?></td>
                                    <th width="25%">Passenger 1 Position In Car</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_1_position_in_car ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Passenger 2</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_2 ?></td>
                                    <th width="25%">Passenger 2 Relationship</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_2_relationship ?></td>
                                </tr>

                                <tr>
                                    <th width="25%">Passenger 2 Date Of Birth</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_2_date_of_birth ?></td>
                                    <th width="25%">Passenger 2 Position In Car</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_2_position_in_car ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Passenger 3</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_3 ?></td>
                                    <th width="25%">Passenger 3 Relationship</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_3_relationship ?></td>
                                </tr>

                                <tr>
                                    <th width="25%">Passenger 3 Date Of Birth</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_3_date_of_birth ?></td>
                                    <th width="25%">Passenger 3 Position In Car</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_3_position_in_car ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Passenger 4</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_4 ?></td>
                                    <th width="25%">Passenger 4 Relationship</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_4_relationship ?></td>
                                </tr>

                                <tr>
                                    <th width="25%">Passenger 4 Date Of Birth</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_4_date_of_birth ?></td>
                                    <th width="25%">Passenger 4 Position In Car</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_4_position_in_car ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Passenger 5</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_5 ?></td>
                                    <th width="25%">Passenger 5 Relationship</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_5_relationship ?></td>
                                </tr>

                                <tr>
                                    <th width="25%">Passenger 5 Date Of Birth</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_5_date_of_birth ?></td>
                                    <th width="25%">Passenger 5 Position In Car</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_5_position_in_car ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Passenger 6</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_6 ?></td>
                                    <th width="25%">Passenger 6 Relationship</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_6_relationship ?></td>
                                </tr>

                                <tr>
                                    <th width="25%">Passenger 6 Date Of Birth</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_6_date_of_birth ?></td>
                                    <th width="25%">Passenger 6 Position In Car</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_6_position_in_car ?></td>
                                </tr>
                                
                            </tbody>                            
                        </table>                        
                        

                    </div>                    
                    
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Accident Details </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>
                                <tr>
                                    <th>Accident Circumstances</th>
                                    <td colspan="3"><?php echo $getleadData[0]->accident_circumstances ?></td>                                    
                                </tr>

                                <tr>
                                    <th width="20%">Date of Accident</th>
                                    <td width="20%"><?php echo $getleadData[0]->date_of_accident ?></td>
                                    <th width="20%">Time of Accident</th>
                                    <td width="20%"><?php echo $getleadData[0]->time_of_accident ?></td>
                                </tr>

                                <tr>
                                    <th>Accident Location </th>
                                    <td colspan="3"><?php echo $getleadData[0]->what_was_the_exact_location_of_the_accident ?></td>
                                </tr> 

                                <tr>
                                    <th>Who do you blame for the accident?</th>
                                    <td colspan="3"><?php echo $getleadData[0]->who_do_you_blame_for_the_accident ?></td>                                    
                                </tr> 

                                <tr>
                                    <th width="20%">Position on Liability</th>
                                    <td width="20%"><?php echo $getleadData[0]->position_on_liability ?></td>
                                    <th width="20%">What was the weather like?</th>
                                    <td width="20%"><?php echo $getleadData[0]->what_was_the_weather_like ?></td>                                    
                                </tr>                                    

                                <tr>
                                    <th colspan="1">Were the police involved?</th>
                                    <td colspan="1"><?php echo $getleadData[0]->were_the_police_involved ?></td>
                                    <th width="20%">Was the Client Vehicle repaired or total loss</th>
                                    <td width="20%"><?php echo $getleadData[0]->was_the_client_vehicle_repaired_or_total_loss ?></td>                                    
                                </tr>

                                <tr>
                                    <th colspan="2">Has the client been paid out for his/her vehicle damage?</th>
                                    <td colspan="2"><?php echo $getleadData[0]->has_the_client_been_paid_out_for_his_her_vehicle_damage ?></td>                                    
                                </tr>    
                                <tr>    
                                    <th colspan="2">Credit Hire or Vehicle Replacement Required</th>
                                    <td colspan="2"><?php echo $getleadData[0]->credit_hire_or_vehicle_replacement ?></td>                                    
                                </tr>

                                <tr>
                                    <th width="20%">Client Status in Accident</th>
                                    <td width="20%"><?php echo $getleadData[0]->client_status_in_accident ?></td>                                    
                                    <th width="20%">Is this a linked passenger</th>
                                    <td width="20%"><?php echo $getleadData[0]->is_this_a_linked_passenger ?></td>                                    
                                </tr>

                            </tbody>                            
                        </table>

                    </div>
<?php endif; ?>
<?php if($lead_campaign[0]->campaign_name != "Car Hire" && $lead_campaign[0]->campaign_short_name != "EC" ): ?>                    
                    
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> EL ONLY </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>

                                <tr>
                                    <th width="35%">Was Accident reported or recorded in the accident Book?</th>
                                    <td colspan="2"><?php echo $getleadData[0]->was_accident_reported_or_recorded_in_the_accident_book ?></td>
                                </tr>

                                <tr>
                                    <th>Employers Name, Address, Telephone Number</th>
                                    <td colspan="2"><?php echo $getleadData[0]->employers_name_address_telephone_number ?></td>
                                </tr>    

                            </tbody>                            
                        </table>


                    </div>                                

                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> OL/PL ONLY </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>


                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>

                                <tr>
                                    <th width="20%">OL PL ONLY</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ol_pl_only ?></td>
                                </tr>                    

                            </tbody>
                        </table>

                    </div>

                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> MED NEG ONLY </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                        
                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>

                                <tr>
                                    <th width="20%">Med Neg Only</th>
                                    <td colspan="2"><?php echo $getleadData[0]->med_neg_only ?></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>                    

<?php endif; ?>
    <?php if($lead_campaign[0]->campaign_short_name != "EC" ): ?> 
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Vehicle Details  </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                        
                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>

                                <tr>
                                    <th width="20%">Client Vehicle Registration</th>
                                    <td width="20%"><?php echo $getleadData[0]->client_car_registration ?></td>
                                    <th width="20%">Client Vehicle Make Model</th>
                                    <td width="20%"><?php echo $getleadData[0]->client_car_make_model ?></td>
                                </tr>

                                <tr>
                                    <th width="20%">Client Insurer</th>
                                    <td width="20%"><?php echo $getleadData[0]->client_insurer ?></td>
                                    <th width="20%">Client Policy Number</th>
                                    <td width="20%"><?php echo $getleadData[0]->client_policy_number ?></td>                                    
                                </tr>

                                <tr>
                                    <th colspan="2">How many Occupants were in your vehicle?</th>
                                    <td colspan="2"><?php echo $getleadData[0]->how_many_occupants_in_the_vehicle ?></td>                                    
                                </tr>

                                <tr>
                                    <th colspan="2">Do you have access to the details of the party you blame?</th>
                                    <td colspan="2"><?php echo $getleadData[0]->do_you_have_access_to_the_details_of_the_party_you_blame ?></td>                                    
                                </tr>

                                <tr>
                                    <th width="20%">TP Car Registration</th>
                                    <td width="20%"><?php echo $getleadData[0]->tp_car_registration ?></td>
                                    <th width="20%">TP Car Make Model</th>
                                    <td width="20%"><?php echo $getleadData[0]->tp_car_make_model ?></td>
                                </tr>

                                <tr>
                                    <th width="20%">TP Insurer Details-Name</th>
                                    <td width="20%"><?php echo $getleadData[0]->tp_insurer_details_name ?></td>
                                    <th width="20%">TP Policy Number</th>
                                    <td width="20%"><?php echo $getleadData[0]->third_party_policy_number ?></td>                                    
                                </tr>

                            </tbody>
                        </table>

                    </div> 

                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Injury Details  </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                        
                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>
                                <tr>
                                    <th width="20%">What Injuries did you suffer?</th>
                                    <td width="20%"><?php echo $getleadData[0]->what_injuries_did_you_suffer ?></td>                                
                                    <th width="20%">Is Injury Ongoing?</th>
                                    <td width="20%"><?php echo $getleadData[0]->is_injury_on_going_injury_physio ?></td>                                    
                                </tr>                             

                                <tr>
                                    <th width="20%">Did you seek Medical Attention</th>
                                    <td width="20%"><?php echo $getleadData[0]->did_you_seek_medical_attention ?></td>
                                    <th width="20%">Additional notes</th>
                                    <td width="20%"><?php echo $getleadData[0]->additional_notes ?></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>                    
<?php endif; ?>  
                    <?php if ($_SESSION['adminData']['role_name'] == "Admin"): ?>

                        <div class="col-md-12" style="padding: 0px;">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> OFFICE USE ONLY  </p>
                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>

<?php if($lead_campaign[0]->campaign_name == "Car Hire"): ?>


                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                        
                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>
                                
                                    <tr>
                                        <th width="25%">Referred By Your name</th>
                                        <td width="25%"><?php echo @$getleadData[0]->referred_by_your_name; ?></td>
                                        <th width="25%">Referrer Contact Number</th>
                                        <td width="25%"><?php echo @$getleadData[0]->referrer_contact_number; ?></td>
                                    </tr>

                                    <tr>
                                        <th width="25%">Best time to call client</th>
                                        <td width="25%"><?php echo @$getleadData[0]->est_time_to_call_client; ?></td>
                                        <th width="25%">Introducer Name</th>
                                        <td width="25%"><?php @$getleadData[0]->introducer_name; ?></td>
                                    </tr>

                                    <tr>                        
                                        <th width="25%">Best Day and time to call</th>
                                        <td width="25%"><?php echo @$getleadData[0]->best_day_and_time_to_call; ?></td>
                                        <th width="25%">Type of Hire car</th>
                                        <td width="25%"><?php echo @$getleadData[0]->type_of_hire_car; ?></td>
                                    </tr>

                                    <tr>    
                                        <th width="25%">Hire Provided By</th>
                                        <td width="25%"><?php echo @$getleadData[0]->hire_provided_by; ?></td>
                                        <th width="25%">Date Hire Provided</th>
                                        <td width="25%"><?php echo @$getleadData[0]->date_hire_provided; ?></td>
                                    </tr>

                            </tbody>
                        </table>

                    </div>                    
                    
<?php endif; ?>                    
                    
                        <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                            
                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                                <tbody>


                                    <tr>
                                        <th width="25%">Marketing Source</th>
                                        <td width="25%"><?php echo $getleadData[0]->marketing_source ?></td>
                                        <th width="25%">Replacement invoice Number</th>
                                        <td width="25%"><?php echo $getleadData[0]->replacement_invoice_number ?></td>
                                    </tr>                    

                                    <tr>
                                        
                                        <th width="25%">Interpreter Name</th>
                                        <td width="25%"><?php echo $getleadData[0]->interpreter_name ?></td>
                                        <th width="25%">Interpreter paid</th>
                                        <td width="25%"><?php echo $getleadData[0]->interpreter_paid ?></td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>

                        </div>        

<?php if(isset($lead_campaign[0]->campaign_name) && $lead_campaign[0]->campaign_name == "Car Hire"): ?>

                                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                                        
                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>
                                
                                    <tr>
                                        <th width="25%">Invoice Number</th>
                                        <td width="25%"><?php echo $getleadData[0]->invoice_number; ?></td>
                                        <th width="25%">Date Invoice Paid</th>
                                        <td width="25%"><?php echo @$getleadData[0]->date_invoice_paid; ?></td>
                                    </tr>                            
                                    
                                    <tr>                            
                                        <th width="25%">Date Introducer Paid</th>
                                        <td width="25%"><?php echo @$getleadData[0]->date_introducer_paid; ?></td>
                                        <th width="25%">Date Agent Paid</th>
                                        <td width="25%"><?php echo @$getleadData[0]->date_agent_paid; ?></td>
                                    </tr>
                                    
                                    <tr>                            
                                        <th width="25%">Ref Date</th>
                                        <td width="25%"><?php echo @$getleadData[0]->ref_date; ?></td>  
                                        <th width="25%">REP DUE</th>
                                        <td width="25%"><?php echo @$getleadData[0]->rep_due; ?></td>
                                    </tr>
                                                            
                                </tbody>
                            </table>

                        </div>        
                                                            
                                                            
<?php endif; ?>                    
                    <?php endif; ?>                    

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                        
                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>


                                <tr>                                    
                                    <th width="20%">Added At</th>
                                    <td width="20%"><?php echo $getleadData[0]->created_at ?></td>
                                </tr>

                                                              
                            </tbody>
                        </table>

                    </div>  


                    </div>
                    </div>
                </div>
                
                <?php endif; ?>
                
            
            
            
            </div>

        </div>
<?php } ?>
        <!-- /.container-fluid -->
