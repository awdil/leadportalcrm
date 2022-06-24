
<?php
$ApiErrors = FALSE;


if (isset($_SESSION['Errors'])) {
    $ApiErrors = $_SESSION['Errors'];
    unset($_SESSION['Errors']);
}

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

        <div class="col-lg-3  col-sm-4 col-xs-12">

            <h4 class="page-title">ADD Energy</h4> </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">ADD Energy</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Energy Form</div>
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

                                                        <?php foreach ($errors as $error): ?>
                                                            <?php echo "<br><p style='color: white; margin-top: 21px;'><strong>Field = " . @$error['field'] . "; <br>Error = " . @$error['message'] . "</p></strong>" ?>                                
                                                        <?php endforeach; ?>


                                                        <?php
                                                    }
                                                    else {

                                                        echo "<br><p style='color: white'><strong>Field = " . $errors['field'] . "; <br>Error = " . $errors['message'] . "</p></strong>";
                                                    }
                                                endforeach;
                                                ?>
                                            <?php
                                            endif;
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

                        <form action="<?php echo base_url('Mod/createECWIP/') . $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <?php  if ($this->input->post('clone') == "clone" || $this->session->userdata('clone')): ?>
                                <input type="hidden" name="clone" value="clone">                                
                           <?php endif; ?> 
                            <div class="form-body">
                             <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                            
                             <div class="row">
                              <div class="col-md-12">
                                 <!--First Name Fields--> 
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('tittle')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Tittle</label> 
                                       <div class="col-md-8" style="">
                                           <select name="tittle" class="form-control"> 
                                               <option value="">Select Title</option> 
                                               <option <?php echo (set_value('title') == "Mr") ? "selected" : ""; ?> value="Mr">Mr</option> <option <?php echo (set_value('title') == "Mrs") ? "selected" : ""; ?> value="Mrs">Mrs</option> 
                                               <option <?php echo (set_value('title') == "Mr & Mrs") ? "selected" : ""; ?> value="Mr & Mrs">Mr & Mrs</option> 
                                               <option <?php echo (set_value('title') == "Ms") ? "selected" : ""; ?> value="Ms">Ms</option> 
                                               <option <?php echo (set_value('title') == "Miss") ? "selected" : ""; ?> value="Miss">Miss</option> 
                                               <option <?php echo (set_value('title') == "Dr") ? "selected" : ""; ?> value="Dr">Dr</option> 
                                               <option <?php echo (set_value('title') == "Rev") ? "selected" : ""; ?> value="Rev">Rev</option> 
                                               <option <?php echo (set_value('title') == "Dame") ? "selected" : ""; ?> value="Dame">Dame</option> 
                                               <option <?php echo (set_value('title') == "Lady") ? "selected" : ""; ?> value="Lady">Lady</option> 
                                               <option <?php echo (set_value('title') == "Sir") ? "selected" : ""; ?> value="Sir">Sir</option> <option <?php echo (set_value('title') == "Lord") ? "selected" : ""; ?> value="Lord">Lord</option> 
                                           </select>
                                            <?php echo (form_error('tittle')) ? '<br>' . form_error('tittle', "<b class='text-danger'>", '</b>') : ''; ?> 
                                        </div>
                                    </div>
                                 </div>
                                 <!--Last Name Fields--> 
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('firstname')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">First Name<span style="color: red"> *</span></label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="First Name" name="firstname" value="<?php echo set_value('firstname'); ?>"> <?php echo (form_error('firstname')) ? '<br>' . form_error('firstname', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('lastname')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Last Name<span style="color: red"> *</span></label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Last Name" name="lastname" value="<?php echo set_value('lastname'); ?>"> <?php echo (form_error('lastname')) ? '<br>' . form_error('lastname', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('jobtitle')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Job Tittle</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Job Tittle" name="jobtitle" value="<?php echo set_value('jobtitle'); ?>"> <?php echo (form_error('jobtitle')) ? '<br>' . form_error('jobtitle', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <!--First Name Fields--> 
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('AuthorizerFirstname')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Authorizer First Name</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Enter Authorizer First name" name="AuthorizerFirstname" value="<?php echo set_value('AuthorizerFirstname'); ?>"> <?php echo (form_error('AuthorizerFirstname')) ? '<br>' . form_error('AuthorizerFirstname', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('AuthorizerLastName')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Authorizer Last name</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Enter Authorizer Last name" name="AuthorizerLastName" value="<?php echo set_value('AuthorizerLastName'); ?>"> <?php echo (form_error('AuthorizerLastName')) ? '<br>' . form_error('AuthorizerLastName', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('AccountHolderFirstName')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Account Holder First Name</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Account Holder First Name" name="AccountHolderFirstName" value="<?php echo set_value('AccountHolderFirstName'); ?>"> <?php echo (form_error('AccountHolderFirstName')) ? '<br>' . form_error('AccountHolderFirstName', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('AccountHolderLastName')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Account Holder Last Name</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Account Holder First Name" name="AccountHolderLastName" value="<?php echo set_value('AccountHolderLastName'); ?>"> <?php echo (form_error('AccountHolderLastName')) ? '<br>' . form_error('AccountHolderLastName', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('phone1')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Phone 1<span style="color: red"> *</span></label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Enter Phone 1" name="phone1" value="<?php echo set_value('phone1'); ?>"> <?php echo (form_error('phone1')) ? '<br>' . form_error('phone1', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group <?php echo (form_error('phone2')) ? 'has-error' : ''; ?> ">
                                          <label class="control-label col-md-4" style="text-align: left;">Phone 2</label> 
                                          <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Enter Phone 2" name="phone2" value="<?php echo set_value('phone2'); ?>"> <?php echo (form_error('phone2')) ? '<br>' . form_error('phone2', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group <?php echo (form_error('postcode')) ? 'has-error' : ''; ?> ">
                                          <label class="control-label col-md-4" style="text-align: left;">Post Code<span style="color: red"> *</span></label> 
                                          <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Enter Post Code" name="postcode" value="<?php echo set_value('postcode'); ?>"> <?php echo (form_error('postcode')) ? '<br>' . form_error('postcode', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                       </div>
                                    </div>
                                  <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('faxnumber')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Fax Number</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Enter fax number " name="faxnumber" value="<?php echo set_value('faxnumber'); ?>"> <?php echo (form_error('faxnumber')) ? '<br>' . form_error('faxnumber', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                    <!--email Fields--> 
                              </div>
                           </div>
                           <div class="row">
                             <div class="col-md-12">
                                 <div class="col-md-6">
                                     <div class="form-group <?php echo (form_error('dateOfBirth')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Date of Birth</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" id="dateofbirth" placeholder="Enter Date Of Birth" name="dateOfBirth" value="<?php echo set_value('dateOfBirth'); ?>"> <?php echo (form_error('dateOfBirth')) ? '<br>' . form_error('dateOfBirth', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('Company')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Company</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Company" name="Company" value="<?php echo set_value('Company'); ?>"> <?php echo (form_error('Company')) ? '<br>' . form_error('Company', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('email')) ? 'has-error' : ''; ?> ">
                                      <label class="control-label col-md-4" style="text-align: left;">Email</label> 
                                        <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Enter Email" name="email" value="<?php echo set_value('email'); ?>"> <?php echo (form_error('email')) ? '<br>' . form_error('email', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('TownCity')) ? 'has-error' : ''; ?> ">
                                     <label class="control-label col-md-4" style="text-align: left;">Town City</label> 
                                        <div class="col-md-8" style=""> <input  type="text" class="form-control" style="resize: none;" placeholder="Town City" name="TownCity"><?php echo set_value('TownCity'); ?> <?php echo (form_error('TownCity')) ? '<br>' . form_error('TownCity', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                        <div class="row">
                             <div class="col-md-12">
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('address')) ? 'has-error' : ''; ?> ">
                                     <label class="control-label col-md-4" style="text-align: left;">Address</label> 
                                        <div class="col-md-8" style=""> <input  type="text" class="form-control" style="resize: none;" placeholder="Enter address" name="address"><?php echo set_value('address'); ?> <?php echo (form_error('address')) ? '<br>' . form_error('address', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>   
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('Address2')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Address 2</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Address 2" name="Address2" value="<?php echo set_value('Address2'); ?>"> <?php echo (form_error('Address2')) ? '<br>' . form_error('Address2', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('Address3')) ? 'has-error' : ''; ?> ">
                                      <label class="control-label col-md-4" style="text-align: left;">Address 3</label> 
                                        <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Enter Address 3" name="Address3" value="<?php echo set_value('Address3'); ?>"> <?php echo (form_error('Address3')) ? '<br>' . form_error('Address3', "<b class='text-danger'>", '</b>') : ''; ?> </div>
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
                                       <div class="col-md-8" style=""> <input type="text" name="RepId" value="<?php echo set_value('RepId'); ?>" class="form-control" placeholder="Enter RepId"> <?php echo (form_error('RepId')) ? '<br>' . form_error('RepId', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('ECLanguage')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Language</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="ECLanguage" value="<?php echo set_value('ECLanguage'); ?>" class="form-control" placeholder="Enter Language"> <?php echo (form_error('ECLanguage')) ? '<br>' . form_error('ECLanguage', "<b class='text-danger'>", '</b>') : ''; ?> </div>
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
                                                        <option <?php echo (set_value('State') == $singlestates->name ) ? 'selected' : ''; ?> value="<?php echo $singlestates->name ?>"><?php echo $singlestates->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                           <?php echo (form_error('State')) ? '<br>' . form_error('State', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('Relationship')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Relationship </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Relationship" name="Relationship" value="<?php echo set_value('Relationship'); ?>"> <?php echo (form_error('Relationship')) ? '<br>' . form_error('Relationship', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('AccountClass')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Account Class </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Account Class" name="AccountClass" value="<?php echo set_value('AccountClass'); ?>"> <?php echo (form_error('AccountClass')) ? '<br>' . form_error('AccountClass', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
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
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" id="SalesType" placeholder="Sales Type" name="SalesType" value="<?php echo set_value('SalesType'); ?>"> <?php echo (form_error('SalesType')) ? '<br>' . form_error('SalesType', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('Commodity')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Commodity</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="Commodity" value="<?php echo set_value('Commodity'); ?>" class="form-control" placeholder="Enter Commodity"> <?php echo (form_error('Commodity')) ? '<br>' . form_error('Commodity', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('Accounttype')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Account Type</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="Accounttype" value="<?php echo set_value('Accounttype'); ?>" class="form-control" placeholder="Enter Account Type"> <?php echo (form_error('Accounttype')) ? '<br>' . form_error('Accounttype', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('Utilityec')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Utillity</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="Utilityec" value="<?php echo set_value('Utilityec'); ?>" class="form-control" placeholder="Enter Utillity"> <?php echo (form_error('Utilityec')) ? '<br>' . form_error('Utilityec', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                               </div>
                               <div class="row">
                                   <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('PlanCode')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Plan Code </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Plan Code" name="PlanCode" value="<?php echo set_value('PlanCode'); ?>"> <?php echo (form_error('PlanCode')) ? '<br>' . form_error('PlanCode', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                  <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('MeterNumber')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Meter Number </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Meter Number" name="MeterNumber" value="<?php echo set_value('MeterNumber'); ?>"> <?php echo (form_error('MeterNumber')) ? '<br>' . form_error('MeterNumber', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                   <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('AccountNumber')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Account Number</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" id="AccountNumber" placeholder="Account Number" name="AccountNumber" value="<?php echo set_value('AccountNumber'); ?>"> <?php echo (form_error('AccountNumber')) ? '<br>' . form_error('AccountNumber', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('NameKey')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Name Key</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="NameKey" value="<?php echo set_value('NameKey'); ?>" class="form-control" placeholder="Name Key"> <?php echo (form_error('NameKey')) ? '<br>' . form_error('NameKey', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                               </div>
                               <div class="row">
                                   <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('ServiceZip')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Service Zip</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="ServiceZip" value="<?php echo set_value('ServiceZip'); ?>" class="form-control" placeholder="Service Zip"> <?php echo (form_error('ServiceZip')) ? '<br>' . form_error('ServiceZip', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('ServiceCity')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Service City </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Service City" name="ServiceCity" value="<?php echo set_value('ServiceCity'); ?>"> <?php echo (form_error('ServiceCity')) ? '<br>' . form_error('ServiceCity', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('ServiceState')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Service State </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Service State" name="ServiceState" value="<?php echo set_value('ServiceState'); ?>"> <?php echo (form_error('ServiceState')) ? '<br>' . form_error('ServiceState', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                  <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('ServiceAddress')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Service Address </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Service Address" name="ServiceAddress" value="<?php echo set_value('ServiceAddress'); ?>"> <?php echo (form_error('ServiceAddress')) ? '<br>' . form_error('ServiceAddress', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                               </div>
                            
                               <div class="row">
                                   <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('ServiceAptSuite')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Service Apt/Suite</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" id="ServiceAptSuite" placeholder="Service Apt/Suite" name="ServiceAptSuite" value="<?php echo set_value('ServiceAptSuite'); ?>"> <?php echo (form_error('ServiceAptSuite')) ? '<br>' . form_error('ServiceAptSuite', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                   <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('BillingZip')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Billing Zip</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="BillingZip" value="<?php echo set_value('BillingZip'); ?>" class="form-control" placeholder="Billing Zip"> <?php echo (form_error('BillingZip')) ? '<br>' . form_error('BillingZip', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('BillingCity')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Billing City</label> 
                                       <div class="col-md-8" style=""> <input type="text" name="BillingCity" value="<?php echo set_value('BillingCity'); ?>" class="form-control" placeholder="Billing City"> <?php echo (form_error('BillingCity')) ? '<br>' . form_error('BillingCity', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                  <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('BillingAddress')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Billing Address </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Billing Address" name="BillingAddress" value="<?php echo set_value('BillingAddress'); ?>"> <?php echo (form_error('BillingAddress')) ? '<br>' . form_error('BillingAddress', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('(BillingAptSuite')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Billing Apt Suite </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="(Billing Apt./Suite" name="BillingAptSuite" value="<?php echo set_value('BillingAptSuite'); ?>"> <?php echo (form_error('BillingAptSuite')) ? '<br>' . form_error('BillingAptSuite', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                 </div>
                                   <div class="col-md-6">
                                   <div class="form-group <?php echo (form_error('ServiceAddress2')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Service Address </label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Service Address" name="ServiceAddress2" value="<?php echo set_value('ServiceAddress2'); ?>"> <?php echo (form_error('ServiceAddress2')) ? '<br>' . form_error('ServiceAddress2', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('BudgetBilling')) ? 'has-error' : ''; ?> ">
                                    <label class="control-label col-md-4" style="text-align: left;"> Budget Billing </label> 
                                       <div class="col-md-8" style=""> 
                                           <select class="form-control" name="BudgetBilling">
                                                    <option <?php form_error('BudgetBilling') ? $_POST['BudgetBilling'] = 'Yes' . 'selected' : ''; ?> value="Yes">Yes</option>
                                                    <option <?php echo (isset($_POST['BudgetBilling']) && $_POST['BudgetBilling'] == 'No') ? 'selected' : ''; ?> value="No">No</option>
                                                </select> 
                                        <?php echo (form_error('BudgetBilling')) ? '<br>' . form_error('BudgetBilling', "<b class='text-danger'>", '</b>') : ''; ?> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('BillingState')) ? 'has-error' : ''; ?> ">
                                       <label class="control-label col-md-4" style="text-align: left;">Billing State</label> 
                                       <div class="col-md-8" style=""> <input type="text" class="form-control" placeholder="Billing State" name="BillingState " value="<?php echo set_value('BillingState'); ?>"> <?php echo (form_error('BillingState')) ? '<br>' . form_error('BillingState', "<b class='text-danger'>", '</b>') : ''; ?> </div>
                                    </div>
                                </div>
                               </div>
                               
                               <div class="row">
                                  <div class="col-md-12">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
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
                                <!--< ROW 5 >-->
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
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('contactemail')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Permission to Email</label> 
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
                                           <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Permission to Mail</label> 
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
                                      <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('contacttime')) ? 'has-error' : ''; ?> ">
                                           <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Preferred time of Contact</label> 
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
                                           <label class="control-label col-md-4" style="text-align: left;" style="text-align: left">Preferred Time to Call</label> 
                                           <div class="col-md-8" style=""> 
                                               <input type="text" value="<?php echo set_value('PreferredTimetoCall'); ?>" class="form-control" id="PreferredTimetoCall" placeholder="Enter Preferred Time to Call" name="PreferredTimetoCall"> <?php echo (form_error('PreferredTimetoCall')) ? '<br>' . form_error('PreferredTimetoCall', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <!--< ROW 6 >--> 
                               
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


