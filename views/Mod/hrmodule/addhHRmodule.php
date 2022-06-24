<?php
ini_set('display_errors', 1);
?>
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add </h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">HR</a></li>
                <li class="active">Add HR</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">ADD HR</div>
                    </div>
                    
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                       
                            <a href="<?php echo base_url('Mod/manageHumanResource'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Manage HR</a>                    
                        </div>
                    </div>
                    
                </div>
                
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="<?php echo base_url('Mod/createHumanResource') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-body">
                                <div class="col-md-12" style="padding: 0px; ">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Personal Details </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                                <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('title')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Title<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        
                                                        <select name="title" class="form-control">
                                                            <option value="">Select Title</option>
                                                            <option <?php echo (set_value('title') == "Mr") ? "selected" : ""; ?> value="Mr">Mr</option>
                                                            <option <?php echo (set_value('title') == "Mrs") ? "selected" : ""; ?> value="Mrs">Mrs</option>
                                                            <option <?php echo (set_value('title') == "Mr & Mrs") ? "selected" : ""; ?> value="Mr & Mrs">Mr & Mrs</option>
                                                            <option <?php echo (set_value('title') == "Ms") ? "selected" : ""; ?> value="Ms">Ms</option>
                                                            <option <?php echo (set_value('title') == "Miss") ? "selected" : ""; ?> value="Miss">Miss</option>
                                                            <option <?php echo (set_value('title') == "Dr") ? "selected" : ""; ?> value="Dr">Dr</option>
                                                            <option <?php echo (set_value('title') == "Rev") ? "selected" : ""; ?> value="Rev">Rev</option>
                                                            <option <?php echo (set_value('title') == "Dame") ? "selected" : ""; ?> value="Dame">Dame</option>
                                                            <option <?php echo (set_value('title') == "Lady") ? "selected" : ""; ?> value="Lady">Lady</option>
                                                            <option <?php echo (set_value('title') == "Sir") ? "selected" : ""; ?> value="Sir">Sir</option>
                                                            <option <?php echo (set_value('title') == "Lord") ? "selected" : ""; ?> value="Lord">Lord</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('title')) ? '<br>' . form_error('title', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('jobtitle')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Job title</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Job Title" name="jobtitle" value="<?php echo set_value('jobtitle'); ?>">
                                                        <?php echo (form_error('jobtitle')) ? '<br>' . form_error('jobtitle', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <!--< ROW 2 >-->                                

                                    <div class="row">
                                        <div class="col-md-12">
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

                                    <!--< ROW 3 >-->                                                                

                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('phone1')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 1</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 1" name="phone1" value="<?php echo set_value('phone1'); ?>">
                                                        <?php echo (form_error('phone1')) ? '<br>' . form_error('phone1', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Phone 2 Fields-->                                                                                

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('phone2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 2</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 2" name="phone2" value="<?php echo set_value('phone2'); ?>">
                                                        <?php echo (form_error('phone2')) ? '<br>' . form_error('phone2', "<b class='text-danger'>", '</b>') : ''; ?>  
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
                                                <div class="form-group <?php echo (form_error('empaddress2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Address 2</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="3" style="resize: none;" class="form-control" placeholder="Enter Address 2" name="empaddress2"><?php echo set_value('empaddress2'); ?></textarea> 
                                                        <?php echo (form_error('empaddress2')) ? '<br>' . form_error('empaddress2', "<b class='text-danger'>", '</b>') : ''; ?>  
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

                                    <!--< ROW 4 >-->                                                                                                

                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- Town City Fields -->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('towncity')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Town City </label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Town City" name="towncity" value="<?php echo set_value('towncity'); ?>">
                                                        <?php echo (form_error('towncity')) ? '<br>' . form_error('towncity', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Post Code Fields -->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Company')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Company</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Company" name="Company" value="<?php echo set_value('Company'); ?>">
                                                        <?php echo (form_error('Company')) ? '<br>' . form_error('Company', "<b class='text-danger'>", '</b>') : ''; ?>  
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
                                                        <input type="text" class="form-control" id="dateofbirth" placeholder="Enter Date Of Birth" name="dateOfBirth" value="<?php echo set_value('dateOfBirth'); ?>">
                                                        <?php echo (form_error('dateOfBirth')) ? '<br>' . form_error('dateOfBirth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('DepartmentName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Department Name</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="Department Name" value="<?php echo set_value('DepartmentName'); ?>" class="form-control" placeholder="Enter Department">
                                                        <?php echo (form_error('DepartmentName')) ? '<br>' . form_error('DepartmentName', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('status')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Status</label>
                                                    <div class="col-md-8" style="">
                                                       <select class="form-control" name="status">
                                                        <option <?php form_error('status') ? $_POST['status'] = 2 . 'selected' : ''; ?> value="">Select hr Status</option>
                                                        <option <?php echo (isset($_POST['status']) && $_POST['status'] == 0) ? 'selected' : ''; ?> value="0">In-Active</option>
                                                        <option <?php echo (isset($_POST['status']) && $_POST['status'] == 1) ? 'selected' : ''; ?> value="1">Active</option>
                                                    </select> 

                                                    <?php echo (form_error('status')) ? '<br>' . form_error('status', "<b class='text-danger'>", '</b>') : ''; ?>                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('postcode')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Post Code</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Post Code" name="postcode" value="<?php echo set_value('postcode'); ?>">
                                                        <?php echo (form_error('postcode')) ? '<br>' . form_error('postcode', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>  
                                    
                                </div>
                                
                            </div>
                            <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Employement Deatails </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                <div class="row">
                                    <div class= "col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('EmploymentStartDate')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Employment Start Date</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Employment Start Date" name="EmploymentStartDate" value="<?php echo set_value('EmploymentStartDate'); ?>"><?php echo (form_error('EmploymentStartDate')) ? '<br>' . form_error('EmploymentStartDate', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('CentreName')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Center Name </label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Centre Name " name="CentreName" value="<?php echo set_value('CentreName'); ?>"><?php echo (form_error('dateOfBirth')) ? '<br>' . form_error('CentreName', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class= "col-md-12">
                                        <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('Notes')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left;">Notes</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="3" style="resize: none;" class="form-control" placeholder="Enter Additioonal Notes" name="Notes"><?php echo set_value('Notes'); ?></textarea> 
                                                        <?php echo (form_error('Notes')) ? '<br>' . form_error('Notes', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class= "col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('Employmentcontrcattype')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Employment contrcat type</label>
                                                <div class="col-md-8" style="">
                                                    <select class="form-control" name="Employmentcontrcattype">
                                                        <option <?php form_error('Employmentcontrcattype') ? $_POST['Employmentcontrcattype'] = 2 . 'selected' : ''; ?> value="">Please Select </option>
                                                        <option <?php echo (isset($_POST['Employmentcontrcattype']) && $_POST['Employmentcontrcattype'] == "Employed") ? 'selected' : ''; ?> value="Employed">Employed</option>
                                                        <option <?php echo (isset($_POST['Employmentcontrcattype']) && $_POST['Employmentcontrcattype'] == "Self Employed") ? 'selected' : ''; ?> value="Self Employed">Self Employed</option>
                                                    </select>
                                                    <?php echo (form_error('Employmentcontrcattype')) ? '<br>' . form_error('Employmentcontrcattype', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('AnnualSalary')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Annual Salary</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Annual Salary" name="AnnualSalary" value="<?php echo set_value('AnnualSalary'); ?>"><?php echo (form_error('AnnualSalary')) ? '<br>' . form_error('AnnualSalary', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class= "col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('NextofKIn')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Next of KIn</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Next of KIn" name="NextofKIn" value="<?php echo set_value('NextofKIn'); ?>"><?php echo (form_error('NextofKIn')) ? '<br>' . form_error('NextofKIn', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('NextofKinTelephonenumber')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Next of Kin Telephone number</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Next of Kin Telephone number" name="NextofKinTelephonenumber" value="<?php echo set_value('NextofKinTelephonenumber'); ?>"><?php echo (form_error('NextofKinTelephonenumber')) ? '<br>' . form_error('NextofKinTelephonenumber', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class= "col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('NextofKinRelationship')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Next of Kin Relationship</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Next of Kin Relationship" name="NextofKinRelationship" value="<?php echo set_value('NextofKinRelationship'); ?>"><?php echo (form_error('NextofKinRelationship')) ? '<br>' . form_error('NextofKinRelationship', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('EmergencyContact')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Emergency Contact</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Emergency Contact" name="EmergencyContact" value="<?php echo set_value('EmergencyContact'); ?>"><?php echo (form_error('EmergencyContact')) ? '<br>' . form_error('EmergencyContact', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class= "col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('EmergencyContactRelationship')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Emergency contact relationship</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Emergency contact relationship" name="EmergencyContactRelationship" value="<?php echo set_value('EmergencyContactRelationship'); ?>"><?php echo (form_error('EmergencyContactRelationship')) ? '<br>' . form_error('EmergencyContactRelationship', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('GPDetails')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">GP Details</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="GP details" name="GPDetails" value="<?php echo set_value('GPDetails'); ?>"><?php echo (form_error('GPDetails')) ? '<br>' . form_error('GPDetails', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class= "col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('AccountName')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Account Name</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Account Name" name="AccountName" value="<?php echo set_value('AccountName'); ?>"><?php echo (form_error('AccountName')) ? '<br>' . form_error('AccountName', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('BankName')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Bank Name</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Bank Name" name="BankName" value="<?php echo set_value('BankName'); ?>"><?php echo (form_error('BankName')) ? '<br>' . form_error('BankName', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class= "col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('BankAccountNumber')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Bank Account Number</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Bank Account Number" name="BankAccountNumber" value="<?php echo set_value('BankAccountNumber'); ?>"><?php echo (form_error('BankAccountNumber')) ? '<br>' . form_error('BankAccountNumber', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('BankSortCode')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Bank Sort Code</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Bank Sort Code" name="BankSortCode" value="<?php echo set_value('BankSortCode'); ?>"><?php echo (form_error('BankSortCode')) ? '<br>' . form_error('BankSortCode', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class= "col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('NationalInsuranceNumber')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">National Insurance Number</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="National Insurance Number" name="NationalInsuranceNumber" value="<?php echo set_value('NationalInsuranceNumber'); ?>"><?php echo (form_error('NationalInsuranceNumber')) ? '<br>' . form_error('NationalInsuranceNumber', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('CurrentTaxCode')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Current Tax Code</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Current Tax Code" name="CurrentTaxCode" value="<?php echo set_value('CurrentTaxCode'); ?>"><?php echo (form_error('CurrentTaxCode')) ? '<br>' . form_error('CurrentTaxCode', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <hr style="margin-top: 0px; margin-bottom: 10px;">

                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Documents </p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px ">
                                <div class="row">
                                 <div class= "col-md-12">
                                    <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('CNICFrontSide')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">CNIC Front Side</label>
                                                    <div class="col-md-8" style="">
                                                        <input accept="image/*" type="file" class="form-control"  placeholder="" name="CNICFrontSide" value="<?php echo set_value('CNICFrontSide'); ?>">
                                                        <?php echo (form_error('CNICFrontSide')) ? '<br>' . form_error('CNICFrontSide', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('CNICBackSide')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">CNIC Back Side</label>
                                                    <div class="col-md-8" style="">
                                                        <input accept="image/*" type="file" class="form-control"  placeholder="" name="CNICBackSide" value="<?php echo set_value('CNICBackSide'); ?>">
                                                        <?php echo (form_error('CNICBackSide')) ? '<br>' . form_error('CNICBackSide', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>    
                                 </div>
                                </div>
                                <div class="row">
                                 <div class= "col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('docfile1')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">File 1</label>
                                                    <div class="col-md-8" style="">
                                                        <input  type="file" class="form-control" id="" placeholder="" name="docfile1" value="<?php echo set_value('docfile1'); ?>">
                                                        <?php echo (form_error('docfile1')) ? '<br>' . form_error('docfile1', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('docfile2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">File 2</label>
                                                    <div class="col-md-8" style="">
                                                        <input  type="file" class="form-control" id="" placeholder="" name="docfile2" value="<?php echo set_value('docfile2'); ?>">
                                                        <?php echo (form_error('docfile2')) ? '<br>' . form_error('docfile2', "<b class='text-danger'>", '</b>') : ''; ?>  
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
                                            
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('preferred_date_to_call')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Preferred date to call</label>
                                                    <div class="col-md-8" style="">
                                                        <input class="form-control" placeholder="Enter Preferred date to call" value="<?php set_value('preferred_date_to_call') ?>" name="preferred_date_to_call" id="preferred_date_to_call">
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
                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button type="submit" class="btn btn-info">Add HR</button>
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
