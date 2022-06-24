<?php

//    echo "<pre>";
//    print_r($lead_campaign[0]->campaign_name == "Car Hire" );
//    print_r($lead_campaign);
//    die();

    $formName = "";
    $clone_Action = "";
    
   if ($lead_campaign[0]->campaign_name == "Energy Campaign"){
        
         $formName = "Energy Campaign Form";
        $clone_Action   = base_url('Mod/createEC/') . $lead_campaign[0]->campaign_short_name; 
        
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

                        <form action="<?php echo $clone_Action; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="clone" value="clone">
                            <!--It enrygy edit belongs to enrgy-->
                            <?php if($lead_campaign[0]->campaign_name == "Energy Campaign"): ?>
                            <div class="form-body">
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                    <div class="row">
                                        <div class="col-md-12">
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
                                        <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('jobtitle')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Job title</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Job Title" name="jobtitle" value="<?php echo (set_value('jobtitle') || $CI->CheckEmpty('jobtitle')) ? (set_value('jobtitle')) : @$leadData->job_title; ?>">
                                                        <?php echo (form_error('jobtitle')) ? '<br>' . form_error('jobtitle', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('firstname')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">First Name<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter First Name" name="firstname" value="<?php echo (set_value('firstname') || form_error('firstname')) ? (set_value('firstname')) : (@$leadData->first_name); ?>">
                                                        <input type="hidden" name="leadId" value="<?php echo (@$leadData->lead_id) ? base64_encode(@$leadData->lead_id) : ''; ?>">                                                                                                    
                                                        <?php echo (form_error('firstname')) ? '<br>' . form_error('firstname', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('lastname')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Last Name<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Last Name" name="lastname" value="<?php echo (set_value('lastname') || form_error('lastname')) ? (set_value('lastname')) : (@$leadData->last_name); ?>">
                                                        <?php echo (form_error('lastname')) ? '<br>' . form_error('lastname', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('AuthorizerFirstname')) ? 'has-error' : ''; ?> ">
                                               <label class="control-label col-md-4" style="text-align: left;">Authorizer First Name</label> 
                                               <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Enter Authorizer First name" name="AuthorizerFirstname" value="<?php echo (set_value('AuthorizerFirstname') || form_error('AuthorizerFirstname')) ? (set_value('AuthorizerFirstname')) : (@$leadData->ec_auth_fname); ?>"> <?php echo (form_error('AuthorizerFirstname')) ? '<br>' . form_error('AuthorizerFirstname', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                            </div>
                                         </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('AuthorizerLastName')) ? 'has-error' : ''; ?> ">
                                               <label class="control-label col-md-4" style="text-align: left;">Authorizer Last name</label> 
                                               <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Enter Authorizer Last name" name="AuthorizerLastName" value="<?php echo (set_value('AuthorizerLastName') || form_error('AuthorizerLastName')) ? (set_value('AuthorizerLastName')) : (@$leadData->ec_auth_lname); ?>"> <?php echo (form_error('AuthorizerLastName')) ? '<br>' . form_error('AuthorizerLastName', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                            </div>
                                         </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('AccountHolderFirstName')) ? 'has-error' : ''; ?> ">
                                               <label class="control-label col-md-4" style="text-align: left;">Account Holder First Name</label> 
                                               <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Account Holder First Name" name="AccountHolderFirstName" value="<?php echo (set_value('AccountHolderFirstName') || form_error('AccountHolderFirstName')) ? (set_value('AccountHolderFirstName')) : (@$leadData->ec_acc_fname); ?>"> <?php echo (form_error('AccountHolderFirstName')) ? '<br>' . form_error('AccountHolderFirstName', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                            </div>
                                         </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('AccountHolderLastName')) ? 'has-error' : ''; ?> ">
                                               <label class="control-label col-md-4" style="text-align: left;">Account Holder Last Name</label> 
                                               <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Account Holder First Name" name="AccountHolderLastName" value="<?php echo (set_value('AccountHolderLastName') || form_error('AccountHolderLastName')) ? (set_value('AccountHolderLastName')) : (@$leadData->ec_acc_lname); ?>"> <?php echo (form_error('AccountHolderLastName')) ? '<br>' . form_error('AccountHolderLastName', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                            </div>
                                         </div>
                                        <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('phone1')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 1<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 1" name="phone1" value="<?php echo (set_value('phone1') || form_error('phone1')) ? (set_value('phone1')) : (@$leadData->phone_1); ?>">
                                                        <?php echo (form_error('phone1')) ? '<br>' . form_error('phone1', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
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
                                        <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('address')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Address</label>
                                                    <div class="col-md-8" style="">
                                                        <input  class="form-control" style="resize: none;" placeholder="Enter address" name="address" value="<?php echo (set_value('address') || $CI->CheckEmpty('address')) ? (set_value('address')) : @$leadData->address; ?>">
                                                        <?php echo (form_error('address')) ? '<br>' . form_error('address', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('address2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Address 2</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="7" style="resize: none;" class="form-control" placeholder="Enter Address 2" name="address2"><?php echo (set_value('address2') || $CI->CheckEmpty('address2')) ? (set_value('address2')) : @$leadData->address_2; ?></textarea> 
                                                        <?php echo (form_error('address2')) ? '<br>' . form_error('address2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('address3')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Address 3</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="7" style="resize: none;" class="form-control" placeholder="Enter Address 3" name="address3"><?php echo (set_value('address3') || $CI->CheckEmpty('address3')) ? (set_value('address3')) : @$leadData->address_3; ?></textarea> 
                                                        <?php echo (form_error('address3')) ? '<br>' . form_error('address3', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('towncity')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Town / City </label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Town City" name="towncity" value="<?php echo (set_value('towncity') || $CI->CheckEmpty('towncity')) ? (set_value('towncity')) : @$leadData->town_city; ?>">
                                                        <?php echo (form_error('towncity')) ? '<br>' . form_error('towncity', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('postcode')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Post Code</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Post Code" name="postcode" value="<?php echo (set_value('postcode') || $CI->CheckEmpty('postcode')) ? (set_value('postcode')) : @$leadData->post_code; ?>">
                                                        <?php echo (form_error('postcode')) ? '<br>' . form_error('postcode', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('dateOfBirth')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Date of Birth</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" id="dateofbirth" placeholder="Enter Date Of Birth" name="dateOfBirth" value="<?php echo (set_value('dateOfBirth') || $CI->CheckEmpty('dateOfBirth')) ? (set_value('dateOfBirth')) : @$leadData->date_of_birth; ?>">
                                                        <?php echo (form_error('dateOfBirth')) ? '<br>' . form_error('dateOfBirth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Rep Details </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('RepId')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Rep Id</label> 
                                       <div  class="col-md-8" style=""> <input class="form-control" type="text" name="RepId" value="<?php echo (set_value('RepId') || $CI->CheckEmpty('RepId')) ? (set_value('RepId')) : @$leadData->ec_repid; ?>"> <?php echo (form_error('RepId')) ? '<br>' . form_error('RepId', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('ECLanguage')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Language</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="ECLanguage" value="<?php echo (set_value('ECLanguage') || $CI->CheckEmpty('ECLanguage')) ? (set_value('ECLanguage')) : @$leadData->ec_language; ?>" class="form-control" placeholder="Enter Language"> <?php echo (form_error('ECLanguage')) ? '<br>' . form_error('ECLanguage', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('State')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">State </label> 
                                       <div class="col-md-8" style=""> 
                                           
                                           <?php 
                                            $sql = "select * from states";
                                            $sqlstates = $this->db->query($sql)->result();
                                          
                                           ?>
                                           <select class="form-control select2" name="State">
                                                    <option value=""><?php echo "Select State"; ?></option>
                                                    <?php foreach ($sqlstates as $singlestates): ?>
                                                        <?php if(@$leadData->ec_state == $singlestates->name){ ?>
                                               <option  selected  value="<?php echo $singlestates->name ?>"><?php echo $singlestates->name ?></option>
                                                         <?php   }else{ ?>
                                               <option <?php echo (set_value('State') == $singlestates->name ) ? 'selected' : ''; ?> value="<?php echo $singlestates->name ?>"><?php echo $singlestates->name ?></option>
                                                    <?php    } ?>
                                                        
                                                    <?php endforeach; ?>
                                                </select>
                                           <?php echo (form_error('State')) ? '<br>' . form_error('State', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('Relationship')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Relationship </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Relationship" name="Relationship" value="<?php echo (set_value('Relationship') || $CI->CheckEmpty('Relationship')) ? (set_value('Relationship')) : @$leadData->ec_relationship; ?>"> <?php echo (form_error('Relationship')) ? '<br>' . form_error('Relationship', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('AccountClass')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Account Class </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Account Class" name="AccountClass" value="<?php echo (set_value('AccountClass') || $CI->CheckEmpty('AccountClass')) ? (set_value('AccountClass')) : @$leadData->ec_accountclass; ?>"> <?php echo (form_error('AccountClass')) ? '<br>' . form_error('AccountClass', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Sales Details </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                                <!--< ROW Sales >-->
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                               <div class="row">
                                   <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('SalesType')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Sales Type</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" id="SalesType" placeholder="Sales Type" name="SalesType" value="<?php echo (set_value('SalesType') || $CI->CheckEmpty('SalesType')) ? (set_value('SalesType')) : @$leadData->ec_salestype; ?>"> <?php echo (form_error('SalesType')) ? '<br>' . form_error('SalesType', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('Commodity')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Commodity</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="Commodity" value="<?php echo (set_value('Commodity') || $CI->CheckEmpty('Commodity')) ? (set_value('Commodity')) : @$leadData->ec_commodity; ?>" class="form-control" placeholder="Enter Commodity"> <?php echo (form_error('Commodity')) ? '<br>' . form_error('Commodity', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('Accounttype')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Account Type</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="Accounttype" value="<?php echo (set_value('Accounttype') || $CI->CheckEmpty('Accounttype')) ? (set_value('Accounttype')) : @$leadData->ec_accounttype; ?>" class="form-control" placeholder="Enter Account Type"> <?php echo (form_error('Accounttype')) ? '<br>' . form_error('Accounttype', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('Utility')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Utility </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Utility" name="Utility" value="<?php echo (set_value('Utility') || $CI->CheckEmpty('Utility')) ? (set_value('Utility')) : @$leadData->ec_utillity; ?>"> <?php echo (form_error('Utility')) ? '<br>' . form_error('Utility', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                               </div>
                               <div class="row">
                                   <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('PlanCode')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Plan Code </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Plan Code" name="PlanCode" value="<?php echo (set_value('PlanCode') || $CI->CheckEmpty('PlanCode')) ? (set_value('PlanCode')) : @$leadData->ec_plancode; ?>"> <?php echo (form_error('PlanCode')) ? '<br>' . form_error('PlanCode', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                  <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('MeterNumber')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Meter Number </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Meter Number" name="MeterNumber" value="<?php echo (set_value('MeterNumber') || $CI->CheckEmpty('MeterNumber')) ? (set_value('MeterNumber')) : @$leadData->ec_meternumber; ?>"> <?php echo (form_error('MeterNumber')) ? '<br>' . form_error('MeterNumber', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                   <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('AccountNumber')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Account Number</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" id="AccountNumber" placeholder="Account Number" name="AccountNumber" value="<?php echo (set_value('AccountNumber') || $CI->CheckEmpty('AccountNumber')) ? (set_value('AccountNumber')) : @$leadData->ec_accountnumber; ?>"> <?php echo (form_error('AccountNumber')) ? '<br>' . form_error('AccountNumber', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('NameKey')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Name Key</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="NameKey" value="<?php echo (set_value('NameKey') || $CI->CheckEmpty('NameKey')) ? (set_value('NameKey')) : @$leadData->ec_namekey; ?>" class="form-control" placeholder="Name Key"> <?php echo (form_error('NameKey')) ? '<br>' . form_error('NameKey', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                               </div>
                               <div class="row">
                                   <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('ServiceZip')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Service Zip</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="Accounttype" value="<?php echo (set_value('ServiceZip') || $CI->CheckEmpty('ServiceZip')) ? (set_value('ServiceZip')) : @$leadData->ec_servicezip; ?>" class="form-control" placeholder="Service Zip"> <?php echo (form_error('ServiceZip')) ? '<br>' . form_error('ServiceZip', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('ServiceCity')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Service City </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Service City" name="ServiceCity" value="<?php echo (set_value('ServiceCity') || $CI->CheckEmpty('ServiceCity')) ? (set_value('ServiceCity')) : @$leadData->ec_servicecity; ?>"> <?php echo (form_error('ServiceCity')) ? '<br>' . form_error('ServiceCity', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('ServiceState')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Service State </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Service State" name="ServiceState" value="<?php echo (set_value('ServiceState') || $CI->CheckEmpty('ServiceState')) ? (set_value('ServiceState')) : @$leadData->ec_servicestate; ?>"> <?php echo (form_error('ServiceState')) ? '<br>' . form_error('ServiceState', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                  <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('ServiceAddress')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Service Address </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Service Address" name="ServiceAddress" value="<?php echo (set_value('ServiceAddress') || $CI->CheckEmpty('ServiceAddress')) ? (set_value('ServiceAddress')) : @$leadData->ec_serviceaddress; ?>"> <?php echo (form_error('ServiceAddress')) ? '<br>' . form_error('ServiceAddress', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                               </div>
                            
                               <div class="row">
                                   <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('ServiceAptSuite')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Service Apt/Suite</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" id="ServiceAptSuite" placeholder="Service Apt/Suite" name="ServiceAptSuite" value="<?php echo (set_value('ServiceAptSuite') || $CI->CheckEmpty('ServiceAptSuite')) ? (set_value('ServiceAptSuite')) : @$leadData->ec_servicepsuite; ?>"> <?php echo (form_error('ServiceAptSuite')) ? '<br>' . form_error('ServiceAptSuite', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                   <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('BillingZip')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Billing Zip</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="BillingZip" value="<?php echo (set_value('BillingZip') || $CI->CheckEmpty('BillingZip')) ? (set_value('BillingZip')) : @$leadData->ec_billingzip; ?>" class="form-control" placeholder="Billing Zip"> <?php echo (form_error('BillingZip')) ? '<br>' . form_error('BillingZip', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('BillingCity')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Billing City</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="BillingCity" value="<?php echo (set_value('BillingCity') || $CI->CheckEmpty('BillingCity')) ? (set_value('BillingCity')) : @$leadData->ec_billingcity; ?>" class="form-control" placeholder="Billing City"> <?php echo (form_error('BillingCity')) ? '<br>' . form_error('BillingCity', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                  <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('BillingAddress')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Billing Address </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Billing Address" name="BillingAddress" value="<?php echo (set_value('BillingAddress') || $CI->CheckEmpty('BillingAddress')) ? (set_value('BillingAddress')) : @$leadData->ec_billingaddress; ?>"> <?php echo (form_error('BillingAddress')) ? '<br>' . form_error('BillingAddress', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('(BillingAptSuite')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Billing Apt Suite </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="(Billing Apt./Suite" name="BillingAptSuite" value="<?php echo (set_value('BillingAptSuite') || $CI->CheckEmpty('BillingAptSuite')) ? (set_value('BillingAptSuite')) : @$leadData->ec_billingapsuite; ?>"> <?php echo (form_error('BillingAptSuite')) ? '<br>' . form_error('BillingAptSuite', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                   <div class="col-md-6">
                                   <div class="form-group <?php echo (form_error('ServiceAddress2')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Service Address </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Service Address" name="ServiceAddress2" value="<?php echo (set_value('ServiceAddress2') || $CI->CheckEmpty('ServiceAddress2')) ? (set_value('dateOfBirth')) : @$leadData->date_of_birth; ?>"> <?php echo (form_error('ServiceAddress2')) ? '<br>' . form_error('ServiceAddress2', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('BudgetBilling')) ? 'has-error' : ''; ?> ">
                                    <label class="control-label col-md-4" style="text-align: left;"> Budget Billing </label> 
                                       <div class="col-md-8" style=""> 
                                        <select class="form-control" name="BudgetBilling">
                                                <option <?php echo $CI->checkSelected('BudgetBilling', @$leadData->contact_email, "Yes"); ?> value="Yes">Yes</option>
                                                <option <?php echo $CI->checkSelected('BudgetBilling', @$leadData->contact_email, "No"); ?> value="No">No</option>
                                        </select>
                                        <?php echo (form_error('BudgetBilling')) ? '<br>' . form_error('BudgetBilling', "<b class='text-danger'>", '</b>') : ''; ?> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('BillingState')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Billing State</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Billing State" name="BillingState " value="<?php echo (set_value('BillingState') || $CI->CheckEmpty('BillingState')) ? (set_value('BillingState')) : @$leadData->ec_billingstate; ?>"> <?php echo (form_error('BillingState')) ? '<br>' . form_error('BillingState', "<b class='text-danger'>", '</b>') : ''; ?> </div>
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
                            <?php endif; ?>
                            <!--It enrygy edit belongs to enrgy-->
                        </form>
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
