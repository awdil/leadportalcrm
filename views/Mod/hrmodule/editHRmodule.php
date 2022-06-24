<?php 



/*echo "<pre>";
print_r($humanresource);
die();*/




?>

<?php $CI = & get_instance(); 
//echo $CI->checkSelected('contacttime', @$humanresource->contact_time, "Evening"); 

?>

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Edit HR</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">HR</a></li>
                <li class="active">Edit HR</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">EDIT HR</div>
                    </div>
                    
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/viewHumanResource/'); echo!empty($humanresource->id) ? $humanresource->id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> View HR</a>
                        </div>
                    </div>
                    
                </div>
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="col-md-12">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
			<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">HR Details</a></li>
			<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Related Documents</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
            <div class="panel-body">
                        
                <form action="<?php echo base_url('Mod/updateHumanResource') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
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
                                                            <option <?php echo $CI->checkSelected('title', @$humanresource->title, "Mr"); ?> value="Mr">Mr</option>
                                                            <option <?php echo $CI->checkSelected('title', @$humanresource->title, "Mrs"); ?> value="Mrs">Mrs</option>
                                                            <option <?php echo $CI->checkSelected('title', @$humanresource->title, "Mr & Mrs"); ?> value="Mr & Mrs">Mr & Mrs</option>
                                                            <option <?php echo $CI->checkSelected('title', @$humanresource->title, "Ms"); ?> value="Ms">Ms</option>
                                                            <option <?php echo $CI->checkSelected('title', @$humanresource->title, "Miss"); ?> value="Miss">Miss</option>
                                                            <option <?php echo $CI->checkSelected('title', @$humanresource->title, "Dr"); ?> value="Dr">Dr</option>
                                                            <option <?php echo $CI->checkSelected('title', @$humanresource->title, "Rev"); ?> value="Rev">Rev</option>
                                                            <option <?php echo $CI->checkSelected('title', @$humanresource->title, "Dame"); ?> value="Dame">Dame</option>
                                                            <option <?php echo $CI->checkSelected('title', @$humanresource->title, "Lady"); ?> value="Lady">Lady</option>
                                                            <option <?php echo $CI->checkSelected('title', @$humanresource->title, "Sir"); ?> value="Sir">Sir</option>
                                                            <option <?php echo $CI->checkSelected('title', @$humanresource->title, "Lord"); ?> value="Lord">Lord</option>
                                                        </select>
                                                        
                                                        <?php echo (form_error('title')) ? '<br>' . form_error('title', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('jobtitle')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Job title</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Job Title" name="jobtitle" value="<?php echo (set_value('jobtitle') || form_error('jobtitle')) ? (set_value('jobtitle')) : (@$humanresource->jobtitle); ?>">
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
                                                        <input type="text" class="form-control" placeholder="Enter First Name" name="firstName" value="<?php echo (set_value('firstName') || form_error('firstName')) ? (set_value('firstName')) : (@$humanresource->first_name); ?>">
                                                        <input type="hidden" name="id" value="<?php echo (@$humanresource->id) ? base64_encode(@$humanresource->id) : ''; ?>">                                                                                                    
                                                        <?php echo (form_error('firstName')) ? '<br>' . form_error('firstName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Last Name Fields-->

                                             <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('lastName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Last Name<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Last Name" name="lastName" value="<?php echo (set_value('lastName') || form_error('lastName')) ? (set_value('lastName')) : (@$humanresource->last_name); ?>">
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
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 1<span style="color: red"> *</span></label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 1" name="phone1" value="<?php echo (set_value('phone1') || form_error('phone1')) ? (set_value('phone1')) : (@$humanresource->phone1); ?>">
                                                        <?php echo (form_error('phone1')) ? '<br>' . form_error('phone1', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Phone 2 Fields-->                                                                                

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('phone2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Phone 2</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Phone 2" name="phone2" value="<?php echo (set_value('phone2') || $CI->CheckEmpty('phone2')) ? (set_value('phone2')) : @$humanresource->phone2; ?>">
                                                        <?php echo (form_error('phone2')) ? '<br>' . form_error('phone2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--email Fields-->                                                                                                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('email')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Email</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo (set_value('email') || $CI->CheckEmpty('email')) ? (set_value('email')) : @$humanresource->email; ?>">
                                                        <?php echo (form_error('email')) ? '<br>' . form_error('email', "<b class='text-danger'>", '</b>') : ''; ?>
                                                    </div>
                                                </div>
                                            </div>


                                            <!--Address 1 Fields-->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('address')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Address</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="7" class="form-control" style="resize: none;" placeholder="Enter address" name="address"><?php echo (set_value('address') || $CI->CheckEmpty('address')) ? (set_value('address')) : @$humanresource->address; ?></textarea> 
                                                        <?php echo (form_error('address')) ? '<br>' . form_error('address', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Address 2 Fields-->                                                                                

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('empaddress2')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Address 2</label>
                                                    <div class="col-md-8" style="">
                                                        <textarea rows="7" style="resize: none;" class="form-control" placeholder="Enter Address 2" name="empaddress2"><?php echo (set_value('empaddress2') || $CI->CheckEmpty('empaddress2')) ? (set_value('empaddress2')) : @$humanresource->addres2; ?></textarea> 
                                                        <?php echo (form_error('empaddress2')) ? '<br>' . form_error('empaddress2', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Address 3 Fields-->                                                                                                                        

                                            <div class="col-md-12">
                                                <div class="form-group <?php echo (form_error('address3')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-2" style="text-align: left;">Address 3</label>
                                                    <div class="col-md-10" style="">
                                                        <textarea rows="7" style="resize: none;" class="form-control" placeholder="Enter Address 3" name="address3"><?php echo (set_value('address3') || $CI->CheckEmpty('address3')) ? (set_value('address3')) : @$humanresource->address3; ?></textarea> 
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
                                                        <input type="text" class="form-control" placeholder="Enter Town City" name="towncity" value="<?php echo (set_value('towncity') || $CI->CheckEmpty('towncity')) ? (set_value('towncity')) : @$humanresource->towncity; ?>">
                                                        <?php echo (form_error('towncity')) ? '<br>' . form_error('towncity', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Post Code Fields -->                                        

                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('Company')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Company</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Company" name="Company" value="<?php echo (set_value('Company') || $CI->CheckEmpty('Company')) ? (set_value('Company')) : @$humanresource->company; ?>">
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
                                                        <input type="text" class="form-control" id="dateofbirth" placeholder="Enter Date Of Birth" name="dateOfBirth" value="<?php echo (set_value('dateOfBirth') || $CI->CheckEmpty('dateOfBirth')) ? (set_value('dateOfBirth')) : @$humanresource->dateofbirth; ?>">
                                                        <?php echo (form_error('dateOfBirth')) ? '<br>' . form_error('dateOfBirth', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('DepartmentName')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Department Name</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" name="DepartmentName" value="<?php echo (set_value('DepartmentName') || $CI->CheckEmpty('DepartmentName')) ? (set_value('DepartmentName')) : @$humanresource->DepartmentName; ?>" class="form-control" placeholder="Enter Department name">
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
                                                            <option <?php form_error('status') ? $_POST['status'] = 2 . 'selected' : ''; ?> value="">Select Status</option>
                                                            <option <?php echo $CI->checkSelected('status', $humanresource->status, $data = 0) ?> value="0">In-Active</option>
                                                            <option <?php echo $CI->checkSelected('status', $humanresource->status, $data = 1) ?> value="1">Active</option>
                                                        </select> 

                                                    <?php echo (form_error('status')) ? '<br>' . form_error('status', "<b class='text-danger'>", '</b>') : ''; ?>                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo (form_error('postcode')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left;">Post Code</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" class="form-control" placeholder="Enter Post Code" name="postcode" value="<?php echo (set_value('postcode') || $CI->CheckEmpty('postcode')) ? (set_value('postcode')) : @$humanresource->postcode; ?>">
                                                        <?php echo (form_error('postcode')) ? '<br>' . form_error('postcode', "<b class='text-danger'>", '</b>') : ''; ?>  
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
                                                    <input type="text" class="form-control" placeholder="Employment Start Date"  id="dateofbirth" name="EmploymentStartDate" value="<?php echo (set_value('EmploymentStartDate') || form_error('EmploymentStartDate')) ? (set_value('EmploymentStartDate')) : (@$humanresource->EmploymentStartDate); ?>">
                                                    
                                                    <?php echo (form_error('EmploymentStartDate')) ? '<br>' . form_error('EmploymentStartDate', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('CentreName')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Centr Name </label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Centre Name " name="CentreName" value="<?php echo (set_value('CentreName') || form_error('CentreName')) ? (set_value('EmploymentStartDate')) : (@$humanresource->CentreName); ?>"><?php echo (form_error('CentreName')) ? '<br>' . form_error('CentreName', "<b class='text-danger'>", '</b>') : ''; ?>
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
                                                        <textarea rows="3" style="resize: none;" class="form-control" placeholder="Enter Additioonal Notes" name="Notes"><?php echo (set_value('Notes') || $CI->CheckEmpty('Notes')) ? (set_value('Notes')) : @$humanresource->Notes; ?></textarea> 
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
                                                            <option <?php form_error('Employmentcontrcattype') ? $_POST['Employmentcontrcattype'] = 2 . 'selected' : ''; ?> value="">Select Status</option>
                                                            <option <?php echo $CI->checkSelected('Employmentcontrcattype', $humanresource->Employmentcontrcattype, $data = "Employed") ?> value="Employed">Employed</option>
                                                            <option <?php echo $CI->checkSelected('Employmentcontrcattype', $humanresource->Employmentcontrcattype, $data = "Self Employed") ?> value="Self Employed">Self Employed</option>
                                                        </select>
                                                    <?php echo (form_error('Employmentcontrcattype')) ? '<br>' . form_error('Employmentcontrcattype', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('AnnualSalary')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Annual Salary</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Annual Salary" name="AnnualSalary" value="<?php echo (set_value('AnnualSalary') || form_error('AnnualSalary')) ? (set_value('AnnualSalary')) : (@$humanresource->AnnualSalary); ?>"><?php echo (form_error('AnnualSalary')) ? '<br>' . form_error('AnnualSalary', "<b class='text-danger'>", '</b>') : ''; ?>
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
                                                    <input type="text" class="form-control" id="" placeholder="Next of KIn" name="NextofKIn" value="<?php echo (set_value('NextofKIn') || form_error('NextofKIn')) ? (set_value('NextofKIn')) : (@$humanresource->NextofKIn); ?>">
                                                    <?php echo (form_error('NextofKIn')) ? '<br>' . form_error('NextofKIn', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('NextofKinTelephonenumber')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Next of Kin Telephone number</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Next of Kin Telephone number" name="NextofKinTelephonenumber" value="<?php echo (set_value('NextofKinTelephonenumber') || form_error('NextofKinTelephonenumber')) ? (set_value('NextofKinTelephonenumber')) : (@$humanresource->NextofKinTelephonenumber); ?>"><?php echo (form_error('NextofKinTelephonenumber')) ? '<br>' . form_error('NextofKinTelephonenumber', "<b class='text-danger'>", '</b>') : ''; ?>
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
                                                    <input type="text" class="form-control" id="" placeholder="Next of Kin Relationship" name="NextofKinRelationship" value="<?php echo (set_value('NextofKinRelationship') || form_error('NextofKinRelationship')) ? (set_value('NextofKinRelationship')) : (@$humanresource->NextofKinRelationship); ?>">
                                                    <?php echo (form_error('NextofKinRelationship')) ? '<br>' . form_error('NextofKinRelationship', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('EmergencyContact')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Emergency Contact</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Emergency Contact" name="EmergencyContact" value="<?php echo (set_value('EmergencyContact') || form_error('EmergencyContact')) ? (set_value('EmergencyContact')) : (@$humanresource->EmergencyContact); ?>">
                                                    <?php echo (form_error('EmergencyContact')) ? '<br>' . form_error('EmergencyContact', "<b class='text-danger'>", '</b>') : ''; ?>
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
                                                    <input type="text" class="form-control" id="" placeholder="Emergency contact relationship" name="EmergencyContactRelationship" value="<?php echo (set_value('EmergencyContactRelationship') || form_error('EmergencyContactRelationship')) ? (set_value('EmergencyContactRelationship')) : (@$humanresource->AnnualSalary); ?>">
                                                    <?php echo (form_error('EmergencyContactRelationship')) ? '<br>' . form_error('EmergencyContactRelationship', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('GPDetails')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">GP Details</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="GP details" name="GPDetails" value="<?php echo (set_value('GPDetails') || form_error('GPDetails')) ? (set_value('GPDetails')) : (@$humanresource->GPDetails); ?>">
                                                    <?php echo (form_error('GPDetails')) ? '<br>' . form_error('GPDetails', "<b class='text-danger'>", '</b>') : ''; ?>
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
                                                    <input type="text" class="form-control" id="" placeholder="Account Name" name="AccountName" value="<?php echo (set_value('AccountName') || form_error('AccountName')) ? (set_value('AccountName')) : (@$humanresource->BankAccountNumber); ?>">
                                                    <?php echo (form_error('AccountName')) ? '<br>' . form_error('AccountName', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('BankName')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Bank Name</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Bank Name" name="BankName" value="<?php echo (set_value('BankName') || form_error('BankName')) ? (set_value('BankName')) : (@$humanresource->BankName); ?>">
                                                    <?php echo (form_error('BankName')) ? '<br>' . form_error('BankName', "<b class='text-danger'>", '</b>') : ''; ?>
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
                                                    <input type="text" class="form-control" id="" placeholder="Bank Account Number" name="BankAccountNumber" value="<?php echo (set_value('BankAccountNumber') || form_error('BankAccountNumber')) ? (set_value('BankAccountNumber')) : (@$humanresource->BankAccountNumber); ?>">
                                                    <?php echo (form_error('BankAccountNumber')) ? '<br>' . form_error('BankAccountNumber', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('BankSortCode')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Bank Sort Code</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Bank Sort Code" name="BankSortCode" value="<?php echo (set_value('BankSortCode') || form_error('BankSortCode')) ? (set_value('BankSortCode')) : (@$humanresource->BankSortCode); ?>">
                                                    <?php echo (form_error('BankSortCode')) ? '<br>' . form_error('BankSortCode', "<b class='text-danger'>", '</b>') : ''; ?>
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
                                                    <input type="text" class="form-control" id="" placeholder="National Insurance Number" name="NationalInsuranceNumber" value="<?php echo (set_value('AnnualSalary') || form_error('NationalInsuranceNumber')) ? (set_value('NationalInsuranceNumber')) : (@$humanresource->NationalInsuranceNumber); ?>">
                                                    <?php echo (form_error('NationalInsuranceNumber')) ? '<br>' . form_error('NationalInsuranceNumber', "<b class='text-danger'>", '</b>') : ''; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('CurrentTaxCode')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">Current Tax Code</label>
                                                <div class="col-md-8" style="">
                                                    <input type="text" class="form-control" id="" placeholder="Current Tax Code" name="CurrentTaxCode" value="<?php echo (set_value('AnnualSalary') || form_error('CurrentTaxCode')) ? (set_value('CurrentTaxCode')) : (@$humanresource->CurrentTaxCode); ?>">
                                                    <?php echo (form_error('CurrentTaxCode')) ? '<br>' . form_error('CurrentTaxCode', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <hr style="margin-top: 0px; margin-bottom: 10px;"> 
                            <div class="col-md-12" style="padding: 0px;"> 
                                <div class="alert alert-primary" style=" background-color: #2cabe3"> 
                                    <p style="font-weight: 500; color: #fff; font-size: 17px;">
                                        <i class="fa fa-arrow-down" style="font-size: 13px"></i> Documents 
                                    </p> 
                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)"> </div> 
                            </div>
                            <div style="padding-left: 25px; padding-right: 25px; padding-top: 0; padding-bottom: 0px "> 
                             <div class="row"> 
                              <div class= "col-md-12"> 
                                  <div class="col-md-6"> 
                                      <div class="form-group <?php echo (form_error('CNICFrontSide')) ? 'has-error' : ''; ?> "> 
                                          <label class="control-label col-md-4" style="text-align: left;">CNIC Front Side</label> 
                                          <div class="col-md-8" style=""> 
                                              <!--<input accept="image/*" type="file" class="form-control" id="" placeholder="" name="CNICFrontSide" value="<?php echo set_value('CNICFrontSide'); ?>">--> <?php echo (form_error('CNICFrontSide')) ? '<br>' . form_error('CNICFrontSide', "<b class='text-danger'>", '</b>') : ''; ?> 
                                          </div> 
<?php if(!empty($humanresource->CNICFrontSide)){ ?>
                                          <a target="_blank" href="<?php echo base_url('uploads/HR-Documents/') . $humanresource->CNICFrontSide; ?>">
                                              <img style="height: auto;width: 300px;" src="<?php echo base_url('uploads/HR-Documents/') . $humanresource->CNICFrontSide; ?>" alt=" Agreement">
                                          </a>
    
<?php } ?>  
                                          
                                      </div> 
                                  </div> 
                                  <div class="col-md-6"> 
                                      <div class="form-group <?php echo (form_error('CNICBackSide')) ? 'has-error' : ''; ?> "> 
                                          <label class="control-label col-md-4" style="text-align: left;">CNIC Back Side</label> 
                                          <div class="col-md-8" style=""> 
                                              <!--<input accept="image/*" type="file" class="form-control" id="" placeholder="" name="CNICBackSide" value="<?php echo set_value('CNICBackSide'); ?>">--> <?php echo (form_error('CNICBackSide')) ? '<br>' . form_error('CNICBackSide', "<b class='text-danger'>", '</b>') : ''; ?> 
                                          </div>
<?php if(!empty($humanresource->CNICBackSide)){ ?>
                                          <a target="_blank" href="<?php echo base_url('uploads/HR-Documents/') . $humanresource->CNICBackSide; ?>">
                                              <img style="height: auto;width: 300px;" src="<?php echo base_url('uploads/HR-Documents/') . $humanresource->CNICBackSide; ?>" alt=" Agreement">
                                          </a>
    
<?php } ?>  
                                          
                                      </div> 
                                  </div> 
                                 </div> 
                            </div> 
                            <div class="row"> 
                                <div class= "col-md-12"> 
                                    <div class="col-md-6"> 
                                        <div class="form-group <?php echo (form_error('docfile1')) ? 'has-error' : ''; ?> "> 
                                            <label class="control-label col-md-4" style="text-align: left;">Document File 1</label> 
                                            <div class="col-md-8" style=""> 
                                            <!--<input  type="file" class="form-control" id="" placeholder="" name="docfile1" value="<?php echo set_value('docfile1'); ?>">--> <?php echo (form_error('docfile1')) ? '<br>' . form_error('docfile1', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div> 
<?php if(!empty($humanresource->Other_doc1)){ ?>
                                            <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/') . $humanresource->Other_doc1; ?>"> Document File 1</a>
    
<?php } ?>        
                                        
                                        </div> 
                                    </div> 
                                    <div class="col-md-6"> 
                                        <div class="form-group <?php echo (form_error('docfile2')) ? 'has-error' : ''; ?> "> 
                                            <label class="control-label col-md-4" style="text-align: left;">Document File 2</label> 
                                            <div class="col-md-8" style=""> 
                                                <!--<input  type="file" class="form-control" id="" placeholder="" name="docfile2" value="<?php echo set_value('docfile2'); ?>">--> <?php echo (form_error('docfile2')) ? '<br>' . form_error('docfile2', "<b class='text-danger'>", '</b>') : ''; ?> 
                                            </div> 
<?php if(!empty($humanresource->Other_doc2)){ ?>
                                            <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/') . $humanresource->Other_doc2; ?>"> Document File 2</a>
    
<?php } ?>  
                                        
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
                                                           
                                                            <option <?php echo $CI->checkSelected('contactphone', @$humanresource->contact_phone, $data = "Yes") ?> value="Yes">Yes </option>
                                                            <option <?php echo $CI->checkSelected('contactphone', @$humanresource->contact_phone, $data = "No") ?> value="Yes">No </option>
                                                            
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
                                                            
                                                            <option <?php echo $CI->checkSelected('contactsms', @$humanresource->contact_sms, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('contactsms', @$humanresource->contact_sms, "No"); ?> value="No">No</option>
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
                                                    <label class="control-label col-md-4" style="text-align: left">Permission to Email<?php echo $humanresource->contact_email ?></label>
                                                    <div class="col-md-8" style="">
                                                        <select class="form-control" name="contactemail">
                                                            
                                                            <option <?php echo $CI->checkSelected('contactemail', @$humanresource->contact_email, "Yes"); ?> value="Yes">Yes</option>
                                                            <option <?php echo $CI->checkSelected('contactemail', @$humanresource->contact_email, "No"); ?> value="No">No</option>
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
                                                            
                                                            <option  <?php echo $CI->checkSelected('contactmail', @$humanresource->contact_mail, "Yes"); ?> value="Yes">Yes</option>
                                                            <option  <?php echo $CI->checkSelected('contactmail', @$humanresource->contact_mail, "No"); ?> value="No">No</option>
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
                                                            
                                                            <option <?php echo $CI->checkSelected('contacttime', @$humanresource->contact_time, "Anytime"); ?> value="Anytime">Anytime</option>
                                                            <option <?php echo $CI->checkSelected('contacttime', @$humanresource->contact_time, "Morning"); ?> value="Morning">Morning</option>
                                                            <option <?php echo $CI->checkSelected('contacttime', @$humanresource->contact_time, "Afternoon"); ?> value="Afternoon">Afternoon</option>
                                                            <option <?php echo $CI->checkSelected('contacttime', @$humanresource->contact_time, "Evening"); ?> value="Evening">Evening</option>
                                                        </select>
                                                        <?php echo (form_error('contacttime')) ? '<br>' . form_error('contacttime', "<b class='text-danger'>", '</b>') : ''; ?>                                              
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6" id="PreferredTimetoCall" style="display: none">
                                                <div class="form-group <?php echo (form_error('PreferredTimetoCall')) ? 'has-error' : ''; ?> ">
                                                    <label class="control-label col-md-4" style="text-align: left">Preferred Time to Call</label>
                                                    <div class="col-md-8" style="">
                                                        <input type="text" value="<?php echo (set_value('PreferredTimetoCall') || $CI->CheckEmpty('PreferredTimetoCall')) ? (set_value('PreferredTimetoCall')) : @$humanresource->preferred_time_to_call; ?>" class="form-control" placeholder="Enter Preferred Time to Call" name="PreferredTimetoCall">
                                                        <?php echo (form_error('PreferredTimetoCall')) ? '<br>' . form_error('PreferredTimetoCall', "<b class='text-danger'>", '</b>') : ''; ?>  
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
                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button type="submit" class="btn btn-info">Edit HR</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </form>
                    </div>
            </div>
            <div class="tab-pane" id="tab_2">
                <form action="<?php echo base_url('Mod/updateHumanResourceDocs') ?>" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <input type="hidden" name="id" value="">
                    <div class="box box-info">
                        <div class="box-body">
                            <hr style="margin-top: 0px; margin-bottom: 10px;">
                            <div class="col-md-12" style="padding: 0px;">
                                <div class="alert alert-primary" style=" background-color: #2cabe3">
                                    <p style="font-weight: 500; color: #fff; font-size: 17px;">
                                        <i class="fa fa-arrow-down" style="font-size: 13px"></i> Documents 
                                    </p>
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
                                                    <input accept="image/*" type="file" class="form-control" placeholder="" name="CNICFrontSide" value="<?php echo set_value('CNICFrontSide'); ?>">
                                                    <input type="hidden" name="id" value="<?php echo (@$humanresource->id) ? base64_encode(@$humanresource->id) : ''; ?>"> 
                                                    <?php echo (form_error('CNICFrontSide')) ? '<br>' . form_error('CNICFrontSide', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('CNICBackSide')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">CNIC Back Side</label>
                                                <div class="col-md-8" style="">
                                                    <input accept="image/*" type="file" class="form-control" placeholder="" name="CNICBackSide" value="<?php echo set_value('CNICBackSide'); ?>">
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
                                                    <input type="file" class="form-control" id="" placeholder="" name="docfile1" value="<?php echo set_value('docfile1'); ?>">
                                                    <?php echo (form_error('docfile1')) ? '<br>' . form_error('docfile1', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group <?php echo (form_error('docfile2')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-4" style="text-align: left;">File 2</label>
                                                <div class="col-md-8" style="">
                                                    <input type="file" class="form-control" id="" placeholder="" name="docfile2" value="<?php echo set_value('docfile2'); ?>"><?php echo (form_error('docfile2')) ? '<br>' . form_error('docfile2', "<b class='text-danger'>", '</b>') : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-success pull-left" name="form_favicon">Update Daocuments</button>
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
        </div>
    </div>
    <!--./row-->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
</div>
<!-- /.container-fluid -->
