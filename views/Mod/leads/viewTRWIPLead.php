<?php
    /*echo "<pre>";
    echo "<pre>";
    print_r($getleadData);
    print_r($lead_campaign[0]->campaign_short_name);
    die();*/
?>


<style>

    tr td{
        text-align: left;
    }

</style>

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
                                    <td width="25%"><?php echo $getleadData[0]->flg_ccj_id ?></td>

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
                                    <th width='25%'>Job Tittle</th>
                                    <td width='25%'><?php echo $getleadData[0]->job_title ?></td>
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
                                    <th width='25%'>Agent Name</th>
                                    <td width='25%'><?php echo $getleadData[0]->clients_occupation ?></td>
                                    <th width='25%'>National Insurance number</th>
                                    <td width='25%'><?php echo $getleadData[0]->ni_number ?></td>
                                </tr>
                                
                                <tr>
                                    <th width='25%'>Agent Phone Number</th>
                                    <td width='25%'><?php echo $getleadData[0]->marital_status ?></td>
                                    <th width='25%'>Agent Address</th>
                                    <td width='25%'><?php echo $getleadData[0]->are_you_a_litigation_friend ?></td>
                                </tr>
                                
                                <tr>
                                    <th width='25%'>Expecting income before the end (5 April)</th>
                                    <td width='25%'><?php echo $getleadData[0]->if_litigation_friend_name_and_date_of_birth_of_the_claimant ?></td>
                                    <th width='25%'>Best Time of Call</th>
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
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i>   UK employment income, pensions and state benefits </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>
                    
                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >

                            <tbody>                            

                                <tr>
                                    <th width="25%">Total pay from all employments, before tax taken off (from P60/P45)</th>
                                    <td width="25%"><?php echo $getleadData[0]->number_of_passengers ?></td>
                                    <th width="25%">Tax taken off box 2.1 income</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_1 ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Amount you were entitled to receive in the year not the weekly or 4 weekly amount. Read R40</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_1_relationship ?></td>
                                    <th width="25%">If you do not receive State Pension, put ‘X’ in the box</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_1_position_in_car ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Total of other taxable state benefits</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_2 ?></td>
                                    <th width="25%">Tax taken off any taxable Incapacity Benefit included in box 2.5</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_2_relationship ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Total of other pensions and retirement annuities, before tax taken off</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_2_position_in_car ?></td>
                                    <th width="25%">Tax taken off box 2.7</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_3 ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Flat rate expenses, professional subscriptions, etc</th>
                                    <td width="25%"><?php echo $getleadData[0]->passenger_4 ?></td>
                                    
                                </tr>
                                
                            </tbody>
                            
                        </table>

                    </div>
                       
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i>    UK interest and dividends</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>
                    
                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >

                            <tbody>                            
                                
                                <tr>
                                    <th width="25%">Net interest paid by banks, building societies etc, purchased life annuities and PPI payments – after tax taken off</th>
                                    <td width="25%"><?php echo $getleadData[0]->position_on_liability ?></td>
                                    <th width="25%">Tax taken off</th>
                                    <td width="25%"><?php echo $getleadData[0]->tp_insurer_details_name ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Gross amount – the amount before tax taken off</th>
                                    <td width="25%"><?php echo $getleadData[0]->additional_notes ?></td>
                                    <th width="25%">Untaxed interest not included in box 3.3 (if you have more than one account – read the R40 notes for boxes 3.1 to 3.7)</th>
                                    <td width="25%"><?php echo $getleadData[0]->nature_of_disrepair ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">UK company dividends (but do not add on the tax credit</th>
                                    <td width="25%"><?php echo $getleadData[0]->date_disrepair_first_notice ?></td>
                                    <th width="25%">Dividends from UK authorised unit trusts, open-ended investment companies and investment trusts (but do not add on the tax credit)</th>
                                    <td width="25%"><?php echo $getleadData[0]->were_you_injured ?></td>
                                </tr>
                                
                                <tr>
                                    <th width="25%">Stock dividends – enter the appropriate amount in cash/ cash equivalent of the share capital – without any tax</th>
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
                
                <div class="panel-body" style="padding: 0px;">                
                    <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Trust, settlement and estate income</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>


                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">                    


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                            <tbody>

                                    <tr>
                                        <th width="25%">Unique Taxpayer Reference (UTR) of the trust</th>
                                        <td width="25%"><?php echo $getleadData[0]->med_neg_only ?></td>
                                        <th width="25%">Net amount taxed at trust rate – after tax taken off</th>
                                        <td width="25%"><?php echo $getleadData[0]->ol_pl_only ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="25%">Tax paid on box 4.2 income</th>
                                        <td width="25%"><?php echo $getleadData[0]->interpreter_name ?></td>
                                        <th width="25%">Net amount of non-savings income – after tax taken off</th>
                                        <td width="25%"><?php echo $getleadData[0]->interpreter_paid ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="25%">Tax paid or tax credit on box 4.4 income</th>
                                        <td width="25%"><?php echo $getleadData[0]->type_of_hire_car ?></td>
                                        <th width="25%">Net amount of savings income – after tax taken off</th>
                                        <td><?php echo $getleadData[0]->hire_provided_by ?></td>
                                    </tr>
                                <tr>
                                        <th width="25%">Tax paid on box 4.6 income</th>
                                        <td width="25%"><?php echo $getleadData[0]->were_you_injured ?></td>
                                        <th width="25%">Net amount of dividend income</th>
                                        <td width="25%"><?php echo $getleadData[0]->description_of_injuries ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="25%">Tax credit on box 4.8 income</th>
                                        <td width="25%"><?php echo $getleadData[0]->office_use_only_rejection_reason ?></td>
                                        <th width="25%">Income payments from settlor-interested trusts</th>
                                        <td width="25%"><?php echo $getleadData[0]->client_policy_number ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="25%"> Net amount of dividend income – after tax taken off</th>
                                        <td width="25%"><?php echo $getleadData[0]->client_insurer ?></td>
                                        <th width="25%">Tax paid on box 4.11 income</th>
                                        <td><?php echo $getleadData[0]->is_this_a_linked_passenger ?></td>
                                    </tr>

                            </tbody>                                
                        </table>
                    </div>

                    <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> UK land and property</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered" >

                            <tbody>

                                 <tr>
                                    <th width="25%">Income</th>
                                    <td width="25%"><?php echo $getleadData[0]->ec_repid ?></td>
                                    <th width="25%">Expenses allowable for tax</th>
                                    <td width="25%"><?php echo $getleadData[0]->ec_language ?></td>
                                </tr>
                                <tr>
                                    <th width="25%"> Profit</th>
                                    <td width="25%"><?php echo $getleadData[0]->ec_auth_fname ?></td>
                                    <th width="25%">Loss</th>
                                    <td width="25%"><?php echo $getleadData[0]->ec_auth_lname ?></td>
                                </tr>
                                <tr>
                                    <th width="25%">Land and property losses brought forward from earlier years</th>
                                    <td width="25%"><?php echo $getleadData[0]->copy_of_complaint_letter ?></td>
                                </tr>

                            </tbody>                                
                        </table>
                    </div>
                    
                    <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i>  Foreign income</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">
                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered" >
                            <tbody>

                                    <tr>
                                        <th width="25%">Foreign dividends (net amount)</th>
                                        <td width="25%"><?php echo $getleadData[0]->fi_net_amunt ?></td>
                                        <th width="25%">Foreign tax taken off box 6.1 income</th>
                                        <td width="25%"><?php echo $getleadData[0]->fi_tax_takenoff61 ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="25%">Foreign dividends eligible for tax credit (net amount)</th>
                                        <td width="25%"><?php echo $getleadData[0]->fi_eligble_tax_credit ?></td>
                                        <th width="25%"> Foreign tax taken off box 6.3 income</th>
                                        <td width="25%"><?php echo $getleadData[0]->fi_tax_tk_63 ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="25%"> Foreign property income – before expenses</th>
                                        <td width="25%"><?php echo $getleadData[0]->fi_icome_b_expnse ?></td>
                                        <th width="25%">Foreign property – expenses allowable for tax</th>
                                        <td><?php echo $getleadData[0]->fi_expne_allowble_f_tx ?></td>
                                    </tr>
                                <tr>
                                        <th width="25%">Foreign tax taken off box 6.5 income</th>
                                        <td width="25%"><?php echo $getleadData[0]->fi_takenoffbox65income ?></td>
                                        <th width="25%">Foreign interest and other saving</th>
                                        <td width="25%"><?php echo $getleadData[0]->fi_othersaving ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="25%">Foreign tax taken off box 6.8 income</th>
                                        <td width="25%"><?php echo $getleadData[0]->fi_taxtken_68 ?></td>
                                        <th width="25%">Foreign pensions and any other foreign income</th>
                                        <td width="25%"><?php echo $getleadData[0]->fi_pen_other_income ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="25%"> Foreign tax taken off box 6.10 income</th>
                                        <td width="25%"><?php echo $getleadData[0]->fi_tax_of610 ?></td>
                                        <th width="25%">Country of origin</th>
                                        <td><?php echo $getleadData[0]->fi_counttax ?></td>
                                    </tr>
                       
                            </tbody>  
                        </table>
                    </div>
               
                    
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i>  Any other income and benefits</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>

                                <tr>
                                    <th width="35%">Chargeable event gains</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_acc_fname ?></td>
                                </tr>

                                <tr>
                                    <th>Number of years</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_acc_lname ?></td>
                                </tr>  
                                
                                <tr>
                                    <th width="35%">Tax treated as paid on box 7.1 income</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_state ?></td>
                                </tr>

                                <tr>
                                    <th>Other income and benefits (gross amount)</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_relationship ?></td>
                                </tr> 
                                <tr>
                                    <th width="35%">Tax taken off box 7.4</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_accountclass ?></td>
                                </tr>

                                <tr>
                                    <th>Description of box 7.4 income</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_salestype ?></td>
                                </tr> 

                            </tbody>                            
                        </table>


                    </div>                                

                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Gift Aid</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>


                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">


                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>

                                <tr>
                                    <th width="80%">Gift Aid payments made in the year of claim</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_commodity ?></td>
                                </tr>  
                                <tr>
                                    <th width="80%">Gift Aid payments made in the year of claim but treated as if made in the preceding year</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_accounttype ?></td>
                                </tr>  
                                <tr>
                                    <th width="80%">Total of any ‘one-off’ payments included in box 8.1</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_utillity ?></td>
                                </tr>  
                                <tr>
                                    <th width="80%">Gift Aid payments made after the end of the year of claim but to be treated as if made in that year</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_plancode ?></td>
                                </tr>  

                            </tbody>
                        </table>

                    </div>

                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Blind Person’s Allowance </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                        
                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>

                                <tr>
                                    <th width="80%">If you’re registered blind (severely sight impaired) with a local authority, or other register, check from following in the box</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_accountnumber ?></td>
                                </tr>
                                <tr>
                                    <th width="80%">Enter the name of the local authority, or other register (or ‘Scotland’ or ‘Northern Ireland’, as appropriate)</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_meternumber ?></td>
                                </tr>

                            </tbody>
                        </table>

                    </div> 
                    
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Married Couple’s Allowance </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                        
                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>

                                <tr>
                                    <th width="80%">To claim the full allowance, enter your spouse’s or civil partner’s full name</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_namekey ?></td>
                                </tr>
                                <tr>
                                    <th width="80%">If, as a couple, you’ve already asked us to give all of the minimum amount to your spouse or civil partner</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_servicezip ?></td>
                                </tr>
                                <tr>
                                    <th width="80%">If you’ve already agreed that half of the minimum amount is to go to your spouse or civil partner</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_servicecity ?></td>
                                </tr>
                                <tr>
                                    <th width="80%"> Your spouse’s or civil partner’s date of birth if older than you and you filled in boxes 10.1, 10.2 or 10.3 DD MM YYYY</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_servicestate ?></td>
                                </tr>
                                <tr>
                                    <th width="80%">Enter the date of the marriage or civil partnership DD MM YYYY</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_serviceaddress ?></td>
                                </tr>
                                <tr>
                                    <th width="80%"> Any unused Married Couple’s, or Blind Person’s Allowance can be transferred from one spouse or civil partner to the other – if you want us to send you a form to do this please Select</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_servicepsuite ?></td>
                                </tr>

                            </tbody>
                        </table>

                    </div> 
 
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Repayment instructions  </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                        
                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>

                            

                                <tr>
                                    <th colspan="80%">Where should we send the repayment to ?</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_billingzip ?></td>                                    
                                </tr>

                                <tr>
                                    <th colspan="80%">If you would like the payable order to go to your nominee, enter in full the name, address and postcode</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_billingcity ?></td>                                    
                                </tr>

                                <tr>
                                    <th width="80%">If your nominee is your adviser, enter their reference</th>
                                    <td colspan="2"><?php echo $getleadData[0]->ec_billingstate ?></td>
                                
                                </tr>

                                

                            </tbody>
                        </table>

                    </div> 

                    <div class="col-md-12" style="padding: 0px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Declaration – Please make sure that you’ve read the R40 Notes at section 12.2 before signing </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                        
                        <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                            <tbody>
                                <tr>
                                    <th width="20%">Sign and date this form and then write your full name (in capital letters) in the space provided</th>
                                    <td width="20%"><?php echo $getleadData[0]->ec_billingaddress ?></td>                                
                                    <th width="20%">Date</th>
                                    <td width="20%"><?php echo $getleadData[0]->created_at ?></td>                                    
                                </tr>                             

                                <tr>
                                    <th width="20%">Name and title in capital letters</th>
                                    <td width="20%"><?php echo $getleadData[0]->title.' '.$getleadData[0]->first_name.' '.$getleadData[0]->last_name ?></td>
                                    <th width="20%">If you’ve signed on behalf of someone else, enter the capacity, for example, parent, executor, receiver, attorney</th>
                                    <td width="20%"><?php echo $getleadData[0]->ec_billingapsuite ?></td>
                                </tr>
                                <tr>
                                    <th width="20%"> Tick this box if you do not need a claim form in future</th>
                                    <td width="20%"><?php echo $getleadData[0]->ec_budgetbilling ?></td>
                                    
                                </tr>


                            </tbody>
                        </table>
                    </div>                    
                
                        <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px; overflow-x:auto; ">

                            
                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-success table-bordered table-striped table-hover table-condensed" >
                                <tbody>


                                    <tr>
                                        <th width="25%">Marketing Source</th>
                                        <td width="25%"><?php echo $getleadData[0]->marketing_source ?></td>
                                        <th width="25%">Replacement invoice Number</th>
                                        <td width="25%"><?php echo $getleadData[0]->replacement_invoice_number ?></td>
                                    </tr>                    

                                    
                                    
                                </tbody>
                            </table>

                        </div>        
                        
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
                
                
                
            
            
            
            </div>

        </div>
        <!-- /.container-fluid -->
