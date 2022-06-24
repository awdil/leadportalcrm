<?php

//    echo "<pre>";
//    print_r($lead_campaign[0]->campaign_name == "Car Hire" );
//    print_r($lead_campaign);
//    die();
/*echo "<pre>";
print_r($leadData);
die();*/
    $formName = "";
    $clone_Action = "";
    
   if($lead_campaign[0]->campaign_name == "Tax Reclaim"){
        $formName = "Tax Reclaim Form";
        $clone_Action   = base_url('Mod/updateLead'); 
    }
    
    
    
?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

            <h4 class="page-title">Edit Lead</h4> </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Edit Lead</li>
            </ol>

        </div>

        <!-- /.col-lg-12 -->

    </div>

    
<style>
    
</style>
    
    
    <!--.row-->

    <div class="row">
        
        <div class="col-md-12">
            <div class="panel">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Edit <?php echo $formName; ?></div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/manageLeads'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded"><i class="fa "></i> Manage Leads</a>
                        </div>
                    </div>

                </div>


                <hr style="margin-bottom: 0; margin-top: 5px;">

                <div class="panel-wrapper collapse in" aria-expanded="true">

                    <div class="panel-body" style="padding: 15px 0px 15px 0px">
                    <!--<div class="panel-body">-->

<!--                        <p style="font-weight: 600; color: #313131"><i class="fa fa-arrow-down" style="font-size: 10px"></i> Contact Details</p>
                        <hr style="width: 16%; float: left; margin-top: 0px">-->

                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Personal Details </p>
                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>

                        <form action="<?php echo base_url('Mod/updateTRLead') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                            <div class="form-body">
                         <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                             <div class="row">
                              <div class="col-md-12">
                                 <!--First Name Fields--> 
                                 <div class="col-md-3">
                                    <div class="form-group <?php echo (form_error('TRDateofBirth')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-12" style="text-align: left;">
                                           <span class="label other">(1.1)</span>
                                           Your Date of birth</label> 
                                       <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Date of Birth" name="TRDateofBirth"  id ="dateofbirth" value="<?php echo (set_value('TRDateofBirth') || form_error('TRDateofBirth')) ? (set_value('TRDateofBirth')) : (@$leadData->date_of_birth); ?>"> <?php echo (form_error('TRDateofBirth')) ? '<br>' . form_error('TRDateofBirth', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <!--Last Name Fields--> 
                                 <div class="col-md-3">
                                    <div class="form-group <?php echo (form_error('firstname')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-12" style="text-align: left;">
                                           <span class="label other">(1.2)</span>
                                           First Name<span style="color: red"> *</span></label> 
                                       <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="First Name" name="firstname" value="<?php echo (set_value('firstname') || form_error('firstName')) ? (set_value('firstname')) : (@$leadData->first_name); ?>"> <?php echo (form_error('firstname')) ? '<br>' . form_error('firstname', "<b class='text-danger'>", '</b>') : ''; ?> 
                                        <input type="hidden" name="leadId" value="<?php echo (@$leadData->lead_id) ? base64_encode(@$leadData->lead_id) : ''; ?>"> 
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group <?php echo (form_error('lastname')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-12" style="text-align: left;">
                                           <span class="label other">(1.3)</span>
                                           Last Name<span style="color: red"> *</span></label> 
                                       <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Last Name" name="lastname" value="<?php echo (set_value('lastname') || form_error('lastname')) ? (set_value('lastname')) : (@$leadData->last_name); ?>"> <?php echo (form_error('lastname')) ? '<br>' . form_error('lastname', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                <div class="col-md-3">
                                    <div class="form-group <?php echo (form_error('jobtitle')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-12" style="text-align: left;">
                                           <span class="label other">(1.4)</span>
                                           Job Tittle</label> 
                                       <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Job Tittle" name="jobtitle" value="<?php echo (set_value('jobtitle') || form_error('jobtitle')) ? (set_value('jobtitle')) : (@$leadData->job_title); ?>">  <?php echo (form_error('jobtitle')) ? '<br>' . form_error('jobtitle', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="col-md-3">
                                    <div class="form-group <?php echo (form_error('phone1')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-12" style="text-align: left;">
                                           <span class="label other">(1.5)</span>
                                           Phone 1<span style="color: red"> *</span></label> 
                                       <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Enter Phone 1" name="phone1" value="<?php echo (set_value('phone1') || form_error('phone1')) ? (set_value('phone1')) : (@$leadData->phone_1); ?>">  <?php echo (form_error('phone1')) ? '<br>' . form_error('phone1', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-group <?php echo (form_error('phone2')) ? 'has-error' : ''; ?> ">
                                          <label class="control-label col-md-12" style="text-align: left;">
                                              <span class="label other">(1.6)</span>
                                              Phone 2</label> 
                                          <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Enter Phone 2" name="phone2" value="<?php echo (set_value('phone2') || form_error('phone2')) ? (set_value('phone2')) : (@$leadData->phone_2); ?>">  <?php echo (form_error('phone2')) ? '<br>' . form_error('phone2', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-group <?php echo (form_error('postcode')) ? 'has-error' : ''; ?> ">
                                          <label class="control-label col-md-12" style="text-align: left;">
                                              <span class="label other">(1.7)</span>
                                              Post Code<span style="color: red"> *</span></label> 
                                          <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Enter Post Code" name="postcode" value="<?php echo (set_value('postcode') || form_error('postcode')) ? (set_value('postcode')) : (@$leadData->post_code); ?>"> <?php echo (form_error('postcode')) ? '<br>' . form_error('postcode', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                       </div>
                                    </div>
                                  <div class="col-md-3">
                                    <div class="form-group <?php echo (form_error('faxnumber')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-12" style="text-align: left;">
                                           <span class="label other">(1.8)</span>
                                           Fax Number</label> 
                                       <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Enter fax number " name="faxnumber" value="<?php echo (set_value('faxnumber') || form_error('faxnumber')) ? (set_value('faxnumber')) : (@$leadData->fax); ?>">  <?php echo (form_error('faxnumber')) ? '<br>' . form_error('faxnumber', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                    <!--email Fields--> 
                              </div>
                           </div>
                           <div class="row">
                             <div class="col-md-12">
                                 <div class="col-md-3">
                                    <div class="form-group <?php echo (form_error('NationalInsurancenumber')) ? 'has-error' : ''; ?> ">
                                     <label class="control-label col-md-12" style="text-align: left;">
                                         <span class="label other">(1.9)</span>
                                         National Insurance number</label> 
                                        <div class="col-md-12" style=""> <input  type="text" class="form-control" style="resize: none;" placeholder="Enter National Insurance number" name="NationalInsurancenumber" value="<?php echo (set_value('NationalInsurancenumber') || form_error('NationalInsurancenumber')) ? (set_value('NationalInsurancenumber')) : (@$leadData->ni_number); ?>"> 
                                            <?php echo set_value('NationalInsurancenumber'); ?> <?php echo (form_error('NationalInsurancenumber')) ? '<br>' . form_error('NationalInsurancenumber', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-group <?php echo (form_error('Company')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-12" style="text-align: left;">
                                           <span class="label other">(1.10)</span>
                                           Company</label> 
                                       <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Company" name="Company" value="<?php echo (set_value('Company') || form_error('Company')) ? (set_value('Company')) : (@$leadData->company_name); ?>">  <?php echo (form_error('Company')) ? '<br>' . form_error('Company', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group <?php echo (form_error('email')) ? 'has-error' : ''; ?> ">
                                      <label class="control-label col-md-12" style="text-align: left;">
                                          <span class="label other">(1.11)</span>
                                          Email <span style="color: red"> *</span></label> 
                                        <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Enter Email" name="email" value="<?php echo (set_value('email') || form_error('email')) ? (set_value('email')) : (@$leadData->email); ?>">  <?php echo (form_error('email')) ? '<br>' . form_error('email', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-group <?php echo (form_error('address')) ? 'has-error' : ''; ?> ">
                                     <label class="control-label col-md-12" style="text-align: left;">
                                         <span class="label other">(1.12)</span>
                                         Address</label> 
                                        <div class="col-md-12" style=""> <input  type="text" class="form-control" style="resize: none;" placeholder="Enter address" name="address" value="<?php echo (set_value('address') || form_error('address')) ? (set_value('address')) : (@$leadData->address); ?>"> <?php echo set_value('address'); ?> <?php echo (form_error('address')) ? '<br>' . form_error('address', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                             <div class="row">
                              <div class="col-md-12">
                                 <!--First Name Fields--> 
                                 <div class="col-md-4">
                                    <div class="form-group <?php echo (form_error('AgentFullname')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-12" style="text-align: left;">
                                           <span class="label other">(1.13)</span>
                                           Agent Full Name</label> 
                                       <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Agent Full Name" name="AgentFullname" value="<?php echo (set_value('AgentFullname') || form_error('AgentFullname')) ? (set_value('AgentFullname')) : (@$leadData->clients_occupation); ?>">  <?php echo (form_error('AgentFullname')) ? '<br>' . form_error('AgentFullname', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-4">
                                    <div class="form-group <?php echo (form_error('agentaddress')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-12" style="text-align: left;">
                                           <span class="label other">(1.14)</span>
                                           Agent Address</label> 
                                       <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Enter Agent Address" name="agentaddress" value="<?php echo (set_value('agentaddress') || form_error('agentaddress')) ? (set_value('agentaddress')) : (@$leadData->are_you_a_litigation_friend); ?>">  <?php echo (form_error('agentaddress')) ? '<br>' . form_error('agentaddress', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group <?php echo (form_error('agenphonenumber')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-12" style="text-align: left;">
                                           <span class="label other">(1.15)</span>Agent Phone Number</label> 
                                       <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Agent Phone number" name="agenphonenumber" value="<?php echo (set_value('agenphonenumber') || form_error('agenphonenumber')) ? (set_value('agenphonenumber')) : (@$leadData->marital_status); ?>">  <?php echo (form_error('agenphonenumber')) ? '<br>' . form_error('agenphonenumber', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                             <div class="row">
                             <div class="col-md-12">
                                 <div class="col-md-4">
                                    <div class="form-group <?php echo (form_error('Address1')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-12" style="text-align: left;">
                                           <span class="label other">(1.16)</span>
                                           Address 1</label> 
                                       <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Address 1" name="Address1" value="<?php echo (set_value('Address1') || form_error('Address1')) ? (set_value('Address1')) : (@$leadData->address_1); ?>">  <?php echo (form_error('Address1')) ? '<br>' . form_error('Address1', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group <?php echo (form_error('Address2')) ? 'has-error' : ''; ?> ">
                                      <label class="control-label col-md-12" style="text-align: left;">
                                          <span class="label other">(1.17)</span>
                                          Address 2</label> 
                                        <div class="col-md-12" style=""> <input type="text" class="form-control" placeholder="Enter Address 2" name="Address2" value="<?php echo (set_value('Address2') || form_error('Address2')) ? (set_value('Address2')) : (@$leadData->address_3); ?>">  <?php echo (form_error('Address2')) ? '<br>' . form_error('Address2', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group <?php echo (form_error('bestTimeofCall')) ? 'has-error' : ''; ?> ">
                                     <label class="control-label col-md-12" style="text-align: left;">
                                         <span class="label other">(1.18)</span>
                                         Best Time of Call</label> 
                                        <div class="col-md-12" style=""> 
                                            <input id="TimeofAccident"  type="text" class="form-control" style="resize: none;" placeholder="Best Time of Call" name="bestTimeofCall" <?php echo set_value('bestTimeofCall'); ?> value="<?php echo (set_value('bestTimeofCall') || form_error('bestTimeofCall')) ? (set_value('bestTimeofCall')) : (@$leadData->client_password); ?>"> 
                                             <?php echo (form_error('bestTimeofCall')) ? '<br>' . form_error('bestTimeofCall', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                </div>
                                   
                            </div>
                         </div>
                        <div class="row">
                             <div class="col-md-12">
                                 <div class="col-md-4">
                                    <div class="form-group <?php echo (form_error('incomeBeforetheEnd')) ? 'has-error' : ''; ?> ">
                                     <label class="control-label col-md-12" style="text-align: left;">
                                         <span class="label other">(1.19)</span>
                                         Expecting income before the end (5 April)</label> 
                                        <div class="col-md-12" style=""> 
                                            <select class="form-control" name="incomeBeforetheEnd"  >
                                                
                                                 <option  <?php echo (set_value('incomeBeforetheEnd') == "Yes") ? "selected" : ""; ?> value="Yes"> Yes</option>
                                                   <option  <?php echo (set_value('incomeBeforetheEnd') == "No") ? "selected" : ""; ?> value="No"> No </option>
                                              </select>
                                            <?php echo (form_error('incomeBeforetheEnd')) ? '<br>' . form_error('incomeBeforetheEnd', "<b class='text-danger'>", '</b>') : ''; ?>
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                         </div>
                             
                        
                           <!--< ROW 3 >--> 
                        </div>
                                <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> UK employment income, pensions and state benefits </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                               <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('TottalEmploymentsPayments')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(2.1)</span> Total pay from all employments, before tax taken off (from P60/P45) </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type = "number" placeholder="0.00" step="0.01" value="<?php echo (set_value('TottalEmploymentsPayments') || form_error('TottalEmploymentsPayments')) ? (set_value('TottalEmploymentsPayments')) : (@$leadData->number_of_passengers); ?>" class="form-control"  name="TottalEmploymentsPayments"> <?php echo (form_error('TottalEmploymentsPayments')) ? '<br>' . form_error('TottalEmploymentsPayments', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('Taxtakenoff')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(2.2)</span> Tax taken off box 2.1 income </label> 
                                           <div class="col-md-12" style=""> 
                                               <input class="form-control"  type = "number" placeholder="0.00" step="0.01" value="<?php echo (set_value('Taxtakenoff') || form_error('Taxtakenoff')) ? (set_value('Taxtakenoff')) : (@$leadData->passenger_1); ?>"> <?php echo (form_error('Taxtakenoff')) ? '<br>' . form_error('Taxtakenoff', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('Amountreceiveweeklyearly')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(2.3)</span> Amount you were entitled to receive in the year not the weekly or 4 weekly amount. Read R40</label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('Amountreceiveweeklyearly') || form_error('Amountreceiveweeklyearly')) ? (set_value('Amountreceiveweeklyearly')) : (@$leadData->passenger_1_relationship); ?>" class="form-control" id="" placeholder="" name="Amountreceiveweeklyearly"> <?php echo (form_error('Amountreceiveweeklyearly')) ? '<br>' . form_error('Amountreceiveweeklyearly', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('receiveStatePension')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(2.4)</span> If you do not receive State Pension, put ‘X’ in the box </label> 
                                           <div class="col-md-12" style=""> 
                                               <input class="form-control"  type="text" value="<?php echo (set_value('receiveStatePension') || form_error('receiveStatePension')) ? (set_value('receiveStatePension')) : (@$leadData->passenger_1_position_in_car); ?>"> <?php echo (form_error('receiveStatePension')) ? '<br>' . form_error('receiveStatePension', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('Taxablestatebenefits')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(2.5)</span> Total of other taxable state benefits  </label> 
                                           <div class="col-md-12" style=""> 
                                               <input class="form-control"  type="text" value="<?php echo (set_value('Taxablestatebenefits') || form_error('Taxablestatebenefits')) ? (set_value('Taxablestatebenefits')) : (@$leadData->passenger_2); ?>"> <?php echo (form_error('Taxablestatebenefits')) ? '<br>' . form_error('Taxablestatebenefits', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('TaxableIncapacityBenefit')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(2.6)</span> Tax taken off any taxable Incapacity Benefit included in box 2.5  </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('TaxableIncapacityBenefit') || form_error('TaxableIncapacityBenefit')) ? (set_value('TaxableIncapacityBenefit')) : (@$leadData->passenger_2_relationship); ?>" class="form-control" id="" placeholder="" name="TaxableIncapacityBenefit"> <?php echo (form_error('TaxableIncapacityBenefit')) ? '<br>' . form_error('TaxableIncapacityBenefit', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('TotalofOtherPensions')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(2.7)</span> Total of other pensions and retirement annuities, before tax taken off  </label> 
                                           <div class="col-md-12" style=""> 
                                               <input class="form-control" name="TotalofOtherPensions"  type="text" value="<?php echo (set_value('TotalofOtherPensions') || form_error('TotalofOtherPensions')) ? (set_value('TotalofOtherPensions')) : (@$leadData->passenger_2_position_in_car); ?>"> <?php echo (form_error('TotalofOtherPensions')) ? '<br>' . form_error('TotalofOtherPensions', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('Taxtakenoffbox')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(2.8)</span> Tax taken off box 2.7 </label> 
                                           <div class="col-md-12" style=""> 
                                               <input class="form-control"  type="text" value="<?php echo (set_value('Taxtakenoffbox') || form_error('Taxtakenoffbox')) ? (set_value('Taxtakenoffbox')) : (@$leadData->passenger_3); ?>"> <?php echo (form_error('Taxtakenoffbox')) ? '<br>' . form_error('Taxtakenoffbox', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ProfessionalSubscriptions')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(2.9)</span> Flat rate expenses, professional subscriptions, etc  </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ProfessionalSubscriptions') || form_error('ProfessionalSubscriptions')) ? (set_value('ProfessionalSubscriptions')) : (@$leadData->passenger_4); ?>" class="form-control" id="" placeholder="" name="ProfessionalSubscriptions"> <?php echo (form_error('ProfessionalSubscriptions')) ? '<br>' . form_error('ProfessionalSubscriptions', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     
                                  </div>
                               </div>
                            </div>
                             <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> UK interest  and dividends </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                        <p>With joint accounts, only enter your share of the interest received.</p>
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                               <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('PPIPayments')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(3.1)</span> Net interest paid by banks, building societies etc, purchased life annuities and PPI payments – after tax taken off </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('PPIPayments') || form_error('PPIPayments')) ? (set_value('PPIPayments')) : (@$leadData->position_on_liability); ?>" class="form-control" id="" placeholder="" name="PPIPayments"> <?php echo (form_error('PPIPayments')) ? '<br>' . form_error('PPIPayments', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('Taxtakenoff32')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(3.2)</span> Tax taken off </label>
                                           <div class="col-md-12" style=""> <br>
                                               <input type="text" value="<?php echo (set_value('Taxtakenoff32') || form_error('Taxtakenoff32')) ? (set_value('Taxtakenoff32')) : (@$leadData->tp_insurer_details_name); ?>" class="form-control" id="" placeholder="" name="Taxtakenoff32"> <?php echo (form_error('Taxtakenoff32')) ? '<br>' . form_error('Taxtakenoff32', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('AmountBeforeTaxTakenOff')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(3.3)</span> Gross amount – the amount before tax taken off </label> 
                                           <div class="col-md-12" style=""> <br>
                                               <input type="text" value="<?php echo (set_value('AmountBeforeTaxTakenOff') || form_error('AmountBeforeTaxTakenOff')) ? (set_value('AmountBeforeTaxTakenOff')) : (@$leadData->additional_notes); ?>" class="form-control" id="" placeholder="" name="AmountBeforeTaxTakenOff"> <?php echo (form_error('AmountBeforeTaxTakenOff')) ? '<br>' . form_error('AmountBeforeTaxTakenOff', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('UntaxedInterest')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(3.4)</span> Untaxed interest not included in box 3.3 (if you have more than one account – read the R40 notes for boxes 3.1 to 3.7) </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('UntaxedInterest') || form_error('UntaxedInterest')) ? (set_value('UntaxedInterest')) : (@$leadData->nature_of_disrepair); ?>" class="form-control" id="" placeholder="" name="UntaxedInterest"> <?php echo (form_error('UntaxedInterest')) ? '<br>' . form_error('UntaxedInterest', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('UKcompanydividends')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(3.5)</span>  UK company dividends (but do not add on the tax credit</label> 
                                           <div class="col-md-12" style=""> <br>
                                               <input type="text" value="<?php echo (set_value('UKcompanydividends') || form_error('UKcompanydividends')) ? (set_value('UKcompanydividends')) : (@$leadData->date_disrepair_first_notice); ?>" class="form-control" id="" placeholder="" name="UKcompanydividends"> <?php echo (form_error('UKcompanydividends')) ? '<br>' . form_error('UKcompanydividends', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('DividendsfromUKAuthorised')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(3.6)</span>  Dividends from UK authorised unit trusts, open-ended investment companies and investment trusts (but do not add on the tax credit)  </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('DividendsfromUKAuthorised') || form_error('DividendsfromUKAuthorised')) ? (set_value('DividendsfromUKAuthorised')) : (@$leadData->were_you_injured); ?>" class="form-control" id="" placeholder="" name="DividendsfromUKAuthorised"> <?php echo (form_error('DividendsfromUKAuthorised')) ? '<br>' . form_error('DividendsfromUKAuthorised', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('EntertheAppropriateShareCapital')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"><span class="label other">(3.7)</span>  Stock dividends – enter the appropriate amount in cash/ cash equivalent of the share capital – without any tax </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('EntertheAppropriateShareCapital') || form_error('EntertheAppropriateShareCapital')) ? (set_value('EntertheAppropriateShareCapital')) : (@$leadData->date_hrd_noticed); ?>" class="form-control" id="" placeholder="" name="EntertheAppropriateShareCapital"> <?php echo (form_error('EntertheAppropriateShareCapital')) ? '<br>' . form_error('EntertheAppropriateShareCapital', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('EntertheAppropriateShareCapital')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"></label> 
                                           
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            
                             <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Trust, settlement and estate income </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                               <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('UniqueTaxpayerReference')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(4.1)</span>  Unique Taxpayer Reference (UTR) of the trust </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('UniqueTaxpayerReference') || form_error('UniqueTaxpayerReference')) ? (set_value('UniqueTaxpayerReference')) : (@$leadData->med_neg_only); ?>" class="form-control" id="" placeholder="" name="UniqueTaxpayerReference"> <?php echo (form_error('UniqueTaxpayerReference')) ? '<br>' . form_error('UniqueTaxpayerReference', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('NetAmountTaxed')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(4.2)</span> Net amount taxed at trust rate – after tax taken off </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('NetAmountTaxed') || form_error('NetAmountTaxed')) ? (set_value('NetAmountTaxed')) : (@$leadData->ol_pl_only); ?>" class="form-control" id="" placeholder="" name="NetAmountTaxed"> <?php echo (form_error('NetAmountTaxed')) ? '<br>' . form_error('NetAmountTaxed', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('Taxpaidonboxincome')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(4.3)</span>
                                               Tax paid on box 4.2 income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('Taxpaidonboxincome') || form_error('Taxpaidonboxincome')) ? (set_value('Taxpaidonboxincome')) : (@$leadData->interpreter_name); ?>" class="form-control" id="" placeholder="" name="Taxpaidonboxincome"> <?php echo (form_error('Taxpaidonboxincome')) ? '<br>' . form_error('Taxpaidonboxincome', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('NetAmountofnonSavingsIncome')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(4.4)</span>
                                                Net amount of non-savings income – after tax taken off 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('NetAmountofnonSavingsIncome') || form_error('NetAmountofnonSavingsIncome')) ? (set_value('NetAmountofnonSavingsIncome')) : (@$leadData->interpreter_paid); ?>" class="form-control" id="" placeholder="" name="NetAmountofnonSavingsIncome"> <?php echo (form_error('NetAmountofnonSavingsIncome')) ? '<br>' . form_error('NetAmountofnonSavingsIncome', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('TaxPidorTaxCredit')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(4.5)</span>
                                                Tax paid or tax credit on box 4.4 income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('TaxPidorTaxCredit') || form_error('TaxPidorTaxCredit')) ? (set_value('TaxPidorTaxCredit')) : (@$leadData->type_of_hire_car); ?>" class="form-control" id="" placeholder="" name="TaxPidorTaxCredit"> <?php echo (form_error('TaxPidorTaxCredit')) ? '<br>' . form_error('TaxPidorTaxCredit', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('AfterTaxTakenoffNetAmount')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(4.6)</span>
                                               Net amount of savings income – after tax taken off 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('AfterTaxTakenoffNetAmount') || form_error('AfterTaxTakenoffNetAmount')) ? (set_value('AfterTaxTakenoffNetAmount')) : (@$leadData->hire_provided_by); ?>" class="form-control" id="" placeholder="" name="AfterTaxTakenoffNetAmount"> <?php echo (form_error('AfterTaxTakenoffNetAmount')) ? '<br>' . form_error('AfterTaxTakenoffNetAmount', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('TaxPaidonbox46income')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(4.7)</span>
                                               Tax paid on box 4.6 income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('TaxPaidonbox46income') || form_error('TaxPaidonbox46income')) ? (set_value('TaxPaidonbox46income')) : (@$leadData->were_you_injured); ?>" class="form-control" id="" placeholder="" name="TaxPaidonbox46income"> <?php echo (form_error('TaxPaidonbox46income')) ? '<br>' . form_error('TaxPaidonbox46income', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('NetAmountofDividendIncome')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(4.8)</span>
                                               Net amount of dividend income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('NetAmountofDividendIncome') || form_error('NetAmountofDividendIncome')) ? (set_value('NetAmountofDividendIncome')) : (@$leadData->description_of_injuries); ?>" class="form-control" id="" placeholder="" name="NetAmountofDividendIncome"> <?php echo (form_error('NetAmountofDividendIncome')) ? '<br>' . form_error('NetAmountofDividendIncome', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('TaxCreditonBox48Income')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(4.9)</span>
                                               Tax credit on box 4.8 income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('TaxCreditonBox48Income') || form_error('TaxCreditonBox48Income')) ? (set_value('TaxCreditonBox48Income')) : (@$leadData->office_use_only_rejection_reason); ?>" class="form-control" id="" placeholder="" name="TaxCreditonBox48Income"> <?php echo (form_error('TaxCreditonBox48Income')) ? '<br>' . form_error('TaxCreditonBox48Income', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('IncomePaymentsfromSettlor')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(4.10)</span>
                                               Income payments from settlor-interested trusts 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('IncomePaymentsfromSettlor') || form_error('IncomePaymentsfromSettlor')) ? (set_value('IncomePaymentsfromSettlor')) : (@$leadData->client_policy_number); ?>" class="form-control" id="" placeholder="" name="IncomePaymentsfromSettlor"> <?php echo (form_error('IncomePaymentsfromSettlor')) ? '<br>' . form_error('IncomePaymentsfromSettlor', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('NetAmountofDividendIncome411')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(4.11)</span>
                                                Net amount of dividend income – after tax taken off 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('NetAmountofDividendIncome411') || form_error('NetAmountofDividendIncome411')) ? (set_value('NetAmountofDividendIncome411')) : (@$leadData->client_insurer); ?>" class="form-control" id="" placeholder="" name="NetAmountofDividendIncome411"> <?php echo (form_error('NetAmountofDividendIncome411')) ? '<br>' . form_error('NetAmountofDividendIncome411', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('Taxpaidonbox411income ')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(4.12)</span>
                                               Tax paid on box 4.11 income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('Taxpaidonbox411income') || form_error('Taxpaidonbox411income')) ? (set_value('Taxpaidonbox411income')) : (@$leadData->is_this_a_linked_passenger); ?>" class="form-control" id="" placeholder="" name="Taxpaidonbox411income"> <?php echo (form_error('Taxpaidonbox411income')) ? '<br>' . form_error('Taxpaidonbox411income', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            
                            </div>
                             <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> UK land  and property </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                               <div class="row">
                                   <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('Income51')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(5.1)</span>
                                               Income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('Income51') || form_error('Income51')) ? (set_value('Income51')) : (@$leadData->ec_repid); ?>" class="form-control" id="" placeholder="" name="Income51"> <?php echo (form_error('Income51')) ? '<br>' . form_error('Income51', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ExpensesAllowableforTax')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(5.2)</span>
                                                Expenses allowable for tax
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ExpensesAllowableforTax') || form_error('ExpensesAllowableforTax')) ? (set_value('ExpensesAllowableforTax')) : (@$leadData->ec_language); ?>" class="form-control" id="" placeholder="" name="ExpensesAllowableforTax"> <?php echo (form_error('ExpensesAllowableforTax')) ? '<br>' . form_error('ExpensesAllowableforTax', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                   <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('Profit53')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(5.3)</span>
                                               Profit
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('Profit53') || form_error('Profit53')) ? (set_value('Profit53')) : (@$leadData->ec_auth_fname); ?>" class="form-control" id="" placeholder="" name="Profit53"> <?php echo (form_error('Profit53')) ? '<br>' . form_error('Profit53', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('Loss54')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(5.4)</span>
                                               Loss 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('Loss54') || form_error('Loss54')) ? (set_value('Loss54')) : (@$leadData->ec_auth_lname); ?>" class="form-control" id="" placeholder="" name="Loss54"> <?php echo (form_error('Loss54')) ? '<br>' . form_error('Loss54', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                   <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('LandandPropertyLosses55')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(5.5)</span>
                                                 Land and property losses brought forward from earlier years 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('LandandPropertyLosses55') || form_error('LandandPropertyLosses55')) ? (set_value('LandandPropertyLosses55')) : (@$leadData->copy_of_complaint_letter); ?>" class="form-control" id="" placeholder="" name="LandandPropertyLosses55"> <?php echo (form_error('LandandPropertyLosses55')) ? '<br>' . form_error('LandandPropertyLosses55', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        
                                     </div>
                                  </div>
                               </div>
                           
                            </div>
                            <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Foreign income </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                        <p>Enter the sterling equivalent of your foreign income and tax paid. If there’s more than one country of origin,  give the additional details on a separate sheet. Enter foreign dividends of £300 or less. <br>If you’re a non-resident landlord, then foreign interest and foreign pensions need to be reported through self-assessment.</p>
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                               <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ForeignDividends')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(6.1)</span> 
                                            Foreign dividends (net amount) 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ForeignDividends') || form_error('ForeignDividends')) ? (set_value('ForeignDividends')) : (@$leadData->fi_net_amunt); ?>" class="form-control" id="" placeholder="" name="ForeignDividends"> <?php echo (form_error('ForeignDividends')) ? '<br>' . form_error('ForeignDividends', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ForeignTaxTakenoffBox')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(6.2)</span> 
                                             Foreign tax taken off box 6.1 income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ForeignTaxTakenoffBox') || form_error('ForeignTaxTakenoffBox')) ? (set_value('ForeignTaxTakenoffBox')) : (@$leadData->fi_tax_takenoff61); ?>" class="form-control" id="" placeholder="" name="ForeignTaxTakenoffBox"> <?php echo (form_error('ForeignTaxTakenoffBox')) ? '<br>' . form_error('ForeignTaxTakenoffBox', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ForeignDividendsEligible')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(6.3)</span>
                                               Foreign dividends eligible for tax credit (net amount) 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ForeignDividendsEligible') || form_error('ForeignDividendsEligible')) ? (set_value('ForeignDividendsEligible')) : (@$leadData->fi_eligble_tax_credit); ?>" class="form-control" id="" placeholder="" name="ForeignDividendsEligible"> <?php echo (form_error('ForeignDividendsEligible')) ? '<br>' . form_error('ForeignDividendsEligible', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ForeigntaxTakenOff64')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(6.4)</span>
                                                Foreign tax taken off box 6.3 income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ForeigntaxTakenOff64') || form_error('ForeigntaxTakenOff64')) ? (set_value('ForeigntaxTakenOff64')) : (@$leadData->fi_tax_tk_63); ?>" class="form-control" id="" placeholder="" name="ForeigntaxTakenOff64"> <?php echo (form_error('ForeigntaxTakenOff64')) ? '<br>' . form_error('ForeigntaxTakenOff64', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ForeignPropertyIncome65')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(6.5)</span>
                                                Foreign property income – before expenses 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ForeignPropertyIncome65') || form_error('ForeignPropertyIncome65')) ? (set_value('ForeignPropertyIncome65')) : (@$leadData->fi_icome_b_expnse); ?>" class="form-control" id="" placeholder="" name="ForeignPropertyIncome65"> <?php echo (form_error('ForeignPropertyIncome65')) ? '<br>' . form_error('ForeignPropertyIncome65', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ForeignPropertyexpensesallowable')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(6.6)</span>
                                                Foreign property – expenses allowable for tax 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ForeignPropertyexpensesallowable') || form_error('ForeignPropertyexpensesallowable')) ? (set_value('ForeignPropertyexpensesallowable')) : (@$leadData->fi_expne_allowble_f_tx); ?>" class="form-control" id="" placeholder="" name="ForeignPropertyexpensesallowable"> <?php echo (form_error('ForeignPropertyexpensesallowable')) ? '<br>' . form_error('ForeignPropertyexpensesallowable', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ForeignTaxTakenoffBox65Income')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(6.7)</span>
                                               Foreign tax taken off box 6.5 income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ForeignTaxTakenoffBox65Income') || form_error('ForeignTaxTakenoffBox65Income')) ? (set_value('ForeignTaxTakenoffBox65Income')) : (@$leadData->fi_takenoffbox65income); ?>" class="form-control" id="" placeholder="" name="ForeignTaxTakenoffBox65Income"> <?php echo (form_error('ForeignTaxTakenoffBox65Income')) ? '<br>' . form_error('ForeignTaxTakenoffBox65Income', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ForeignInterestandOtherSaving')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(6.8)</span>
                                               Foreign interest and other saving
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ForeignInterestandOtherSaving') || form_error('ForeignInterestandOtherSaving')) ? (set_value('ForeignInterestandOtherSaving')) : (@$leadData->fi_othersaving); ?>" class="form-control" id="" placeholder="" name="ForeignInterestandOtherSaving"> <?php echo (form_error('ForeignInterestandOtherSaving')) ? '<br>' . form_error('ForeignInterestandOtherSaving', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ForeignTaxTakenOffbox68Income')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(6.9)</span>
                                               Foreign tax taken off box 6.8 income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ForeignTaxTakenOffbox68Income') || form_error('ForeignTaxTakenOffbox68Income')) ? (set_value('ForeignTaxTakenOffbox68Income')) : (@$leadData->fi_taxtken_68); ?>" class="form-control" id="" placeholder="" name="ForeignTaxTakenOffbox68Income"> <?php echo (form_error('ForeignTaxTakenOffbox68Income')) ? '<br>' . form_error('ForeignTaxTakenOffbox68Income', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ForeignPensionsOtherForeignIncome')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(6.10)</span>
                                                Foreign pensions and any other foreign income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ForeignPensionsOtherForeignIncome') || form_error('ForeignPensionsOtherForeignIncome')) ? (set_value('ForeignPensionsOtherForeignIncome')) : (@$leadData->fi_pen_other_income); ?>" class="form-control" id="" placeholder="" name="ForeignPensionsOtherForeignIncome"> <?php echo (form_error('ForeignPensionsOtherForeignIncome')) ? '<br>' . form_error('ForeignPensionsOtherForeignIncome', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ForeignTaxTakenoffBox610Income')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(6.11)</span>
                                                 Foreign tax taken off box 6.10 income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ForeignTaxTakenoffBox610Income') || form_error('ForeignTaxTakenoffBox610Income')) ? (set_value('ForeignTaxTakenoffBox610Income')) : (@$leadData->fi_tax_of610); ?>" class="form-control" id="" placeholder="" name="ForeignTaxTakenoffBox610Income"> <?php echo (form_error('ForeignTaxTakenoffBox610Income')) ? '<br>' . form_error('ForeignTaxTakenoffBox610Income', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('CountryofOrigin')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(6.12)</span>
                                                 Country of origin
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('CountryofOrigin') || form_error('CountryofOrigin')) ? (set_value('CountryofOrigin')) : (@$leadData->fi_counttax); ?>" class="form-control" id="" placeholder="" name="CountryofOrigin"> <?php echo (form_error('CountryofOrigin')) ? '<br>' . form_error('CountryofOrigin', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            
                            </div>
                             <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Any other income and benefits </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                               <div class="row">
                                   <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('ChargeableEventGains')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(7.1)</span>
                                               Chargeable event gains 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('ChargeableEventGains') || form_error('ChargeableEventGains')) ? (set_value('ChargeableEventGains')) : (@$leadData->ec_acc_fname); ?>" class="form-control" id="" placeholder="" name="ChargeableEventGains"> <?php echo (form_error('ChargeableEventGains')) ? '<br>' . form_error('ChargeableEventGains', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('NumberofYears')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(7.2)</span>
                                               Number of years
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('NumberofYears') || form_error('NumberofYears')) ? (set_value('NumberofYears')) : (@$leadData->ec_state); ?>" class="form-control" id="" placeholder="" name="NumberofYears"> <?php echo (form_error('NumberofYears')) ? '<br>' . form_error('NumberofYears', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                   <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('TaxTreatedasPaidonBox71Income')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(7.3)</span>
                                                Tax treated as paid on box 7.1 income 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('TaxTreatedasPaidonBox71Income') || form_error('TaxTreatedasPaidonBox71Income')) ? (set_value('TaxTreatedasPaidonBox71Income')) : (@$leadData->ec_relationship); ?>" class="form-control" id="" placeholder="" name="TaxTreatedasPaidonBox71Income"> <?php echo (form_error('TaxTreatedasPaidonBox71Income')) ? '<br>' . form_error('TaxTreatedasPaidonBox71Income', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('OtherIncomeandBenefits')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(7.4)</span>
                                               Other income and benefits (gross amount)
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('OtherIncomeandBenefits') || form_error('OtherIncomeandBenefits')) ? (set_value('OtherIncomeandBenefits')) : (@$leadData->ec_accountclass); ?>" class="form-control" id="" placeholder="" name="OtherIncomeandBenefits"> <?php echo (form_error('OtherIncomeandBenefits')) ? '<br>' . form_error('OtherIncomeandBenefits', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                   <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('TaxTakenoffBox74')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(7.5)</span>
                                               Tax taken off box 7.4 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('TaxTakenoffBox74') || form_error('TaxTakenoffBox74')) ? (set_value('TaxTakenoffBox74')) : (@$leadData->ec_salestype); ?>" class="form-control" id="" placeholder="" name="TaxTakenoffBox74"> <?php echo (form_error('TaxTakenoffBox74')) ? '<br>' . form_error('TaxTakenoffBox74', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('DescriptionofBox74Income')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(7.6)</span>
                                                Description of box 7.4 income
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('DescriptionofBox74Income') || form_error('DescriptionofBox74Income')) ? (set_value('DescriptionofBox74Income')) : (@$leadData->ec_acc_lname); ?>" class="form-control" id="" placeholder="" name="DescriptionofBox74Income"> <?php echo (form_error('DescriptionofBox74Income')) ? '<br>' . form_error('DescriptionofBox74Income', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            
                             <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Gift Aid </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                               <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('GiftAidPaymentsClaimYear')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(8.1)</span>
                                               Gift Aid payments made in the year of claim </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('GiftAidPaymentsClaimYear') || form_error('GiftAidPaymentsClaimYear')) ? (set_value('GiftAidPaymentsClaimYear')) : (@$leadData->ec_commodity); ?>" class="form-control" id="GiftAidPaymentsClaimYear" placeholder="Enter Amount" name="GiftAidPaymentsClaimYear"> <?php echo (form_error('GiftAidPaymentsClaimYear')) ? '<br>' . form_error('GiftAidPaymentsClaimYear', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('GiftAidPaymentsClaimYearProcedding')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(8.2)</span>
                                              Gift Aid payments made in the year of claim but treated as if made in the preceding year 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('GiftAidPaymentsClaimYearProcedding') || form_error('GiftAidPaymentsClaimYearProcedding')) ? (set_value('GiftAidPaymentsClaimYearProcedding')) : (@$leadData->ec_accounttype); ?>" class="form-control" id="GiftAidPaymentsClaimYearProcedding" placeholder="Enter Proceeding year amount" name="GiftAidPaymentsClaimYearProcedding"> <?php echo (form_error('GiftAidPaymentsClaimYearProcedding')) ? '<br>' . form_error('GiftAidPaymentsClaimYearProcedding', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('oneOffPaymentAmount')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(8.3)</span>
                                            Total of any ‘one-off’ payments included in box 8.1    
                                            </label> 
                                           <div class="col-md-12" style=""> <br>
                                               <input type="text" value="<?php echo (set_value('oneOffPaymentAmount') || form_error('oneOffPaymentAmount')) ? (set_value('oneOffPaymentAmount')) : (@$leadData->ec_utillity); ?>" class="form-control" id="TottlClaimAmount" placeholder="" name="oneOffPaymentAmount"> <?php echo (form_error('oneOffPaymentAmount')) ? '<br>' . form_error('oneOffPaymentAmount', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('GiftAidPaymentsClaimYearAfter')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(8.4)</span>
                                              Gift Aid payments made after the end of the year of claim but to be treated as if made in that year 
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('GiftAidPaymentsClaimYearAfter') || form_error('GiftAidPaymentsClaimYearAfter')) ? (set_value('GiftAidPaymentsClaimYearAfter')) : (@$leadData->ec_plancode); ?>" class="form-control" id="GiftAidPaymentsClaimYearAfter" placeholder="Enter Amount Year After" name="GiftAidPaymentsClaimYearAfter"> <?php echo (form_error('GiftAidPaymentsClaimYearAfter')) ? '<br>' . form_error('GiftAidPaymentsClaimYearAfter', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                             <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Blind Person’s Allowance </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                               <div class="row">
                                  <div class="col-md-12">
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('severelysightimpairedreg')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(9.1)</span>
                                                Are you registered blind (severely sight impaired) with a local authority, or other register?
                                            </label> 
                                           <div class="col-md-12" style=""> 
                                               <select class="form-control" name="severelysightimpairedreg" >
                                                
                                                 <option  <?php echo (set_value('severelysightimpairedreg') == "Yes") ? "selected" : ""; ?> value="Yes"> Yes</option>
                                                   <option  <?php echo (set_value('severelysightimpairedreg') == "No") ? "selected" : ""; ?> value="No"> No</option>
                                              </select> <?php echo (form_error('severelysightimpairedreg')) ? '<br>' . form_error('severelysightimpairedreg', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('LocalAuthorityRegister')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"> 
                                               <span class="label other">(9.2)</span>
                                               Enter the name of the local authority, or other register (or ‘Scotland’ or ‘Northern Ireland’, as appropriate)</label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('LocalAuthorityRegister') || form_error('LocalAuthorityRegister')) ? (set_value('LocalAuthorityRegister')) : (@$leadData->ec_meternumber); ?>" class="form-control" id="" placeholder="" name="LocalAuthorityRegister">
                                                <?php echo (form_error('LocalAuthorityRegister')) ? '<br>' . form_error('LocalAuthorityRegister', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                
                            </div>
                            <!--Married Couple Alownces-->
                            <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Married Couple’s Allowance </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                        <p>This allowance is only due if you, or your spouse or civil partner, were born before 6 April 1935.</p>
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('claimthefullallowance')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"> 
                                            <span class="label other">(10.1)</span>
                                                To claim the full allowance, enter your spouse’s or civil partner’s full name</label> 
                                           <div class="col-md-12" style=""> <br>
                                               <input type="text" value="<?php echo (set_value('claimthefullallowance') || form_error('claimthefullallowance')) ? (set_value('claimthefullallowance')) : (@$leadData->ec_namekey); ?>" class="form-control" id="" placeholder="Enter full name" name="claimthefullallowance">
                                                <?php echo (form_error('claimthefullallowance')) ? '<br>' . form_error('claimthefullallowance', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('minimumCoupleamount')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(10.2)</span>
                                                 Have you already asked us to give all of the minimum amount to your spouse or civil partner?</label> 
                                           <div class="col-md-12" style=""> <br>
                                               <select class="form-control" name="minimumCoupleamount" id="" >
                                                 <option value="">Please Select</option>
                                                 <option  <?php echo (set_value('minimumCoupleamount') == "Yes") ? "selected" : ""; ?> value="Yes"> Yes</option>
                                                <option  <?php echo (set_value('minimumCoupleamount') == "No") ? "selected" : ""; ?> value="No"> No </option>
                                              </select> <?php echo (form_error('minimumCoupleamount')) ? '<br>' . form_error('minimumCoupleamount', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('AlreadyAgreedminimumCoupleamount')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                            <span class="label other">(10.3)</span>
                                                 Have you already agreed that half of the minimum amount is to go to your spouse or civil partner?

                                            </label> 
                                           <div class="col-md-12" style=""><br> 
                                               <select class="form-control" name="AlreadyAgreedminimumCoupleamount" id="" >
                                                
                                                 <option  <?php echo (set_value('AlreadyAgreedminimumCoupleamount') == "Yes") ? "selected" : ""; ?> value="Yes"> Yes</option>
                                                   <option  <?php echo (set_value('AlreadyAgreedminimumCoupleamount') == "No") ? "selected" : ""; ?> value="no"> No</option>
                                              </select> <?php echo (form_error('AlreadyAgreedminimumCoupleamount')) ? '<br>' . form_error('AlreadyAgreedminimumCoupleamount', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('spousesorcivilpartnerdate')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"> 
                                               <span class="label other">(10.4)</span>
                                                Your spouse’s or civil partner’s date of birth if older than you and you filled in boxes 10.1, 10.2 or 10.3  DD MM YYYY</label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" value="<?php echo (set_value('spousesorcivilpartnerdate') || form_error('spousesorcivilpartnerdate')) ? (set_value('spousesorcivilpartnerdate')) : (@$leadData->ec_servicestate); ?>" class="form-control" id="dateofbirth" placeholder="DD MM YYYY" name="spousesorcivilpartnerdate">
                                                <?php echo (form_error('spousesorcivilpartnerdate')) ? '<br>' . form_error('spousesorcivilpartnerdate', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                      
                                  </div>
                               </div>
                               <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('marriageOrcivilpartnership')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"> 
                                               <span class="label other">(10.5)</span>
                                               Enter the date of the marriage or civil partnership  DD MM YYYY</label> 
                                           <div class="col-md-12" style=""> <br>
                                               <input type="text" value="<?php echo (set_value('marriageOrcivilpartnership') || form_error('marriageOrcivilpartnership')) ? (set_value('marriageOrcivilpartnership')) : (@$leadData->ec_serviceaddress); ?>" class="form-control" id="dateofbirth" placeholder="DD MM YYYY" name="marriageOrcivilpartnership">
                                               <?php echo (form_error('marriageOrcivilpartnership')) ? '<br>' . form_error('marriageOrcivilpartnership', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                            
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('BlindPersonsAllowance')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(10.6)</span>
                                               Any unused Married Couple’s, or Blind Person’s Allowance can be transferred from one spouse  or civil partner to the other – if you want us to  send you a form to do this please Select </label> 
                                           <div class="col-md-12" style=""> 
                                               <select class="form-control" name="BlindPersonsAllowance" id="BlindPersonsAllowance">
                                                 <option value="">Please Select</option>
                                                 <option  <?php echo (set_value('BlindPersonsAllowance') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                 <option  <?php echo (set_value('BlindPersonsAllowance') == "No") ? "selected" : ""; ?> value="No">No</option>
                                
                                              </select> <?php echo (form_error('BlindPersonsAllowance')) ? '<br>' . form_error('BlindPersonsAllowance', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                    
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            
                            <!--Married Couple Alownces-->
                            <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Repayment instructions </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                               <div class="row">
                                  <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('SendtheRepaymentTo')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(11.1)</span>
                                               Where should we send the repayment to ?</label> 
                                           <div class="col-md-12" style=""> <br>
                                               <select class="form-control" name="SendtheRepaymentTo" >
                                                
                                                 <option  <?php echo (set_value('SendtheRepaymentTo') == "On Yur address") ? "selected" : ""; ?> value="Your address ">  Your address </option>
                                                 <option  <?php echo (set_value('SendtheRepaymentTo') == "on my nominees address") ? "selected" : ""; ?> value="on your nominees address">  Your nominee’s address (go to question 11.2 to 11.3) </option>
                                                
                                              </select> <?php echo (form_error('SendtheRepaymentTo')) ? '<br>' . form_error('PreferredTimetoCall', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('PayableOrdertogotoyourNominee')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"> 
                                               <span class="label other">(11.2)</span>
                                               If you would like the payable order to go to your nominee, enter in full the name, address and postcode  </label> 
                                           <div class="col-md-12" style="">
                                               <textarea rows="3" class="form-control" style="resize: none;" placeholder="Enter address" name="PayableOrdertogotoyourNominee"><?php echo set_value('PayableOrdertogotoyourNominee'); ?></textarea> 
                                               
                                                <?php echo (form_error('PayableOrdertogotoyourNominee')) ? '<br>' . form_error('PayableOrdertogotoyourNominee', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                            
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                <div class="row">
                                  <div class="col-md-12">
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('NomineeisyourAdviser')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left"> 
                                               <span class="label other">(11.3)</span>
                                               If your nominee is your adviser, enter their reference </label> 
                                           <div class="col-md-12" style=""> 
                                               <input type="text" class="form-control" placeholder="Enter their reference" name="NomineeisyourAdviser" value="<?php echo (set_value('NomineeisyourAdviser') || form_error('NomineeisyourAdviser')) ? (set_value('NomineeisyourAdviser')) : (@$leadData->ec_billingstate); ?>">
                                                <?php echo (form_error('NomineeisyourAdviser')) ? '<br>' . form_error('NomineeisyourAdviser', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                            
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            
                            <!--Payment Instructions-->
                            <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Declaration – Please make sure that you’ve read the R40 Notes at section 12.2 before signing </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                               <div class="row">
                                  <div class="col-md-12">
                                      
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('SignanddatethisDeclare')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(12.1)</span>
                                               Sign and date this form and then write your full name (in capital letters) in the space provided </label> 
                                           <div class="col-md-12" style=""> 
                                               <textarea rows="3" class="form-control" style="resize: none;" placeholder="Enter address" name="SignanddatethisDeclare"><?php echo set_value('SignanddatethisDeclare'); ?></textarea> 
                                                <?php echo (form_error('SignanddatethisDeclare')) ? '<br>' . form_error('SignanddatethisDeclare', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                            
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('SignedonBehalfofSomeoneElse')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                                <span class="label other">(12.2)</span>
                                                 If you’ve signed on behalf of someone else, enter the capacity, for example, parent, executor, receiver, attorney </label> 
                                        <div class="col-md-12" style=""> 
                                            <input type="text" class="form-control" placeholder="Enter the capacity" name="SignedonBehalfofSomeoneElse" value="<?php echo (set_value('SignedonBehalfofSomeoneElse') || form_error('SignedonBehalfofSomeoneElse')) ? (set_value('SignedonBehalfofSomeoneElse')) : (@$leadData->ec_billingapsuite); ?>">
                                            <?php echo (form_error('SignedonBehalfofSomeoneElse')) ? '<br>' . form_error('SignedonBehalfofSomeoneElse', "<b class='text-danger'>", '</b>') : ''; ?>
                                         </div>
                                         </div>
                                     </div>
                                  </div>
                               </div>
                                
                                <div class="row">
                                  <div class="col-md-12">
                                    
                                     <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('NeedclaimforminFuture')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-12" style="text-align: left;" style="text-align: left">
                                               <span class="label other">(12.3)</span>
                                               Tick this box if you do not need a claim form in future</label> 
                                           <div class="col-md-12" style=""> 
                                               <select class="form-control" name="NeedclaimforminFuture" >
                                               
                                                 <option  <?php echo (set_value('NeedclaimforminFuture') == "Yes") ? "selected" : ""; ?> value="Yes">Yes</option>
                                                 <option  <?php echo (set_value('NeedclaimforminFuture') == "No") ? "selected" : ""; ?> value="No">No</option>
                                              </select> <?php echo (form_error('NeedclaimforminFuture')) ? '<br>' . form_error('NeedclaimforminFuture', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                            
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <!--Payment Instructions-->
                            
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
<!-- /.container-fluid -->
    </div>
