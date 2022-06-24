<?php 

$allusers = $this->Mods->getUsers();
$userData->campaign_id = json_decode($userData->campaign_id);
/*
echo "<pre>";
print_r($allusers);
die();
*/

//echo "<pre>";
//print_r($userData->campaign_id);
//die();

?>



<?php $CI = & get_instance();
$permission_view = $_SESSION['adminData']['Users']['permission_view'];
$permission_update = $_SESSION['adminData']['Users']['permission_update'];
$permission_delete = $_SESSION['adminData']['Users']['permission_delete'];
$permission_create = $_SESSION['adminData']['Users']['permission_create'];
if($permission_update ==1){ ?>

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">EDIT User</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li class="active">Edit User</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">EDIT USER</div>
                    </div>
                    
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/viewUser') . "/" . $userData->id; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> View User</a>                    
                        </div>
                    </div>
                    
                </div>
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <?php // echo '<pre>'; ?>
                <?php // print_r($getUserPermissions); ?>
                <?php // $_POST['getUserPermissions'] = $getUserPermissions; ?>
                <?php // $dataas = json_encode($getUserPermissions); ?>
                <?php // print_r(json_decode($dataas)); ?>
                <?php // print_r($userData->userType); ?>
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="<?php echo base_url('Mod/updateUser') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-body">
                                <h3 class="box-title" style="margin-top: -8px">User Info</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('firstName')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3">First Name<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-9" style="">
                                                <input type="text" class="form-control" placeholder="John" name="firstName" value="<?php echo (set_value('firstName') || form_error('firstName')) ? (set_value('firstName')) : (@$userData->firstName); ?>">
                                                <input type="hidden" class="form-control" id="getUserPermissions" name="getUserPermissions" value="<?php echo $encrypt; ?>">
                                                <input type="hidden" class="form-control" id="userID" name="userID" value="<?php echo base64_encode($id); ?>">
                                                 <?php echo (form_error('firstName')) ? '<br>' . form_error('firstName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('lastName')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Last Name<span style="color: red"> *</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Doe" name="lastName" value="<?php echo (set_value('lastName') || form_error('lastName')) ? (set_value('lastName')) : (@$userData->lastName); ?>"> 
                                                 <?php echo (form_error('lastName')) ? '<br>' . form_error('lastName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>

                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="gender">
                                                    <option value="">Select Gender</option>
                                                    <option <?php echo $CI->checkSelected('gender', $userData->gender,$data = 'Male') ?> value="Male">Male</option>
                                                    <option <?php echo $CI->checkSelected('gender', $userData->gender,$data = 'Female') ?> value="Female">Female</option>
                                                </select> 
                                                <!--<span class="help-block"> Select your gender. </span>--> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="datepicker-autoclose" placeholder="dd/mm/yyyy" name="dob" value="<?php echo (set_value('dob') || $CI->CheckEmpty('dob')) ? (set_value('dob')) : @$userData->dateOfBirth; ?>"> </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('email')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Email<span style="color: red"> *</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="johndoe@domain.com" name="email" value="<?php echo (set_value('email') || form_error('email')) ? (set_value('email')) :  @$userData->email; ?>"> 
                                                 <?php echo (form_error('email')) ? '<br>' . form_error('email', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Phone Number </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="07894561230" name="phone" value="<?php echo (set_value('phone') || $CI->CheckEmpty('phone')) ? (set_value('phone')) : @$userData->phoneNumber; ?>"> 
                                                 <?php echo (form_error('phone')) ? '<br>' . form_error('phone', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                                
                                        </div>
                                    </div>
                                    
                                    <!--/span-->
                                    
                                    
                                </div>

                                <!--/row-->
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('userName')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">User Name <span style="color: red"> *</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="johndoe" name="userName" value="<?php echo (set_value('userName') || form_error('userName')) ? (set_value('userName')) : @$userData->userName;  ?>"> 
                                                <?php echo (form_error('userName')) ? '<br>' . form_error('userName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('password')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Password<span style="color: red"> *</span></label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" placeholder="****************" name="password" value="<?php echo (set_value('password') || form_error('password')) ? (set_value('password')) :  @$userData->password; ?>"> 
                                                <?php echo (form_error('password')) ? '<br>' . form_error('password', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    
                                    
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <!--/row-->
                                
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('userType')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">User Type</label>
                                            <div class="col-md-9">
                                                <select name="userType" class="form-control" id="userType">
                                                    <option value="">Select User Type</option>
                                                    <?php foreach ($userType as $type): ?>
                                                        <option <?php echo $CI->checkSelected('userType', @$userData->userType, $data = @$type->role_id); ?>  value="<?php echo @$type->role_id ?>"><?php echo @$type->role_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?php echo (form_error('userType')) ? '<br>' . form_error('userType', "<b class='text-danger'>", '</b>') : ''; ?>                                                  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('company')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Company</label>
                                            <div class="col-md-9">
                                                <select name="company" id="comapny" class="form-control">
                                                    <option value="">Select Company</option>
                                                    <option <?php echo $CI->checkSelected('company', @$userData->company_id, $data = 0); ?>   id="allCompanies" style="display: none" value="0">All</option>
                                                    <?php foreach ($companies as $company): ?>
                                                            <option <?php echo $CI->checkSelected('company', @$userData->company_id, $data = @$company->id); ?>  value="<?php echo @$company->id ?>"><?php echo @$company->company_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                 <?php echo (form_error('company')) ? '<br>' . form_error('company', "<b class='text-danger'>", '</b>') : ''; ?>                                                  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>                                
                                
                                
                                
                                <div class="row">

                                    <div class="col-md-6" id="campaign_action">
                                        
                                        <div class="form-group <?php echo (form_error('campaign')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Campaign</label>
                                            
                                            <div class="col-md-9">
                                                
                                                <select name="campaign[]" class="form-control" multiple="">
                                                    
                                                    <option value="">Select Campaign</option>
                                                    <option id="allCampaign" <?php echo $CI->checkSelected('campaign', @$userData->campaign_id[0], $data = 0); ?> style="display: none" value="0">All</option>
                                                    
                                                    <?php 
                                                        if($campaigns): 
                                                        $campaign_count = count($userData->campaign_id);
                                                        $inc = 0;
                                                        
                                                    ?>
                                                        <?php foreach ($campaigns as $campaign): 
                                                            
                                                            
                                                        ?>
                                                    
                                                            
                                                    
                                                            <option <?php echo $CI->checkSelected('campaign', @$userData->campaign_id[$inc], $data = $campaign->campaign_id); ?> value="<?php echo $campaign->campaign_id ?>"><?php echo $campaign->campaign_name . " | " . $campaign->campaign_short_name; ?></option>
                                                        <?php 
                                                        
                                                            if (@$userData->campaign_id[$inc] == $campaign->campaign_id){
                                                                $inc++;
                                                            }
                                                            
                                                            endforeach; ?>
                                                    <?php endif; ?>
                                                            
                                                </select>
                                                
                                                <?php echo (form_error('campaign')) ? '<br>' . form_error('campaign', "<b class='text-danger'>", '</b>') : ''; ?>                                                  
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('bdm_name')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">BDM Name</label>
                                            <div class="col-md-9">
                                                <select name="bdm_name" class="form-control">
                                                    <option value="">Select BDM Name</option>
                                                    <?php foreach ($allusers as $single): ?>
                                                            <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = @$single->userName); ?>  value="<?php echo @$single->userName ?>"><?php echo @$single->userName; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <!--<select name="bdm_name" class="form-control">
                                                    
                                                    <option value="">Select BDM</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Faizan"); ?> value="Faizan">Faizan</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Zeeshan"); ?> value="Zeeshan">Zeeshan</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Syed Mohsin"); ?> value="Syed Mohsin">Syed Mohsin</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Mannaza"); ?> value="Mannaza">Mannaza</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Haider"); ?> value="Haider">Haider</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Shaz"); ?> value="Shaz">Shaz</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Nishma"); ?> value="Nishma">Nishma</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Daud"); ?> value="Daud">Daud</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Mohsin Ali"); ?> value="Mohsin Ali">Mohsin Ali</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Saddam"); ?> value="Saddam">Saddam</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Umer"); ?> value="Umer">Umer</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Danish"); ?> value="Danish">Danish</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Alisha"); ?> value="Alisha">Alisha</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Naveed"); ?> value="Naveed">Naveed</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Hamza"); ?> value="Hamza">Hamza</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Shaista"); ?> value="Shaista">Shaista</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Naz"); ?> value="Naz">Naz</option>
                                                    <option <?php echo $CI->checkSelected('bdm_name', @$userData->bdm_name, $data = "Awais"); ?> value="Awais">Awais</option>
                                                    
                                                </select>-->
                                                
                                                <?php echo (form_error('bdm_name')) ? '<br>' . form_error('bdm_name', "<b class='text-danger'>", '</b>') : ''; ?>                                                  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>

                                
                                <div class="row">
                                    
                                    
                                <?php if(@$userData->avatar): ?> 
                                <div class="col-md-7" style="text-align: center; margin-bottom: 10px; margin-top: -15px">
                                        <img src="<?php echo base_url('Uploads/profileImages/'. $userTypeName .'/' . @$userData->avatar .'' ); ?>" class="img-responsive img-thumbnail">
                                </div>

                                <?php endif; ?>
                                    
                                    

                                    <div class="col-md-12">

                                        
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Avatar</label>
                                            
                                            <div class="col-md-10">
                                                <input type="file" class="form-control" name="image"> 
                                                <input type="hidden" class="form-control" name="imageName" value="<?php echo @$userData->avatar ?>"> 
                                                <?php echo ($this->session->flashdata('error')) ? "<br>" . "<b class='text-danger'>" . $this->session->flashdata('error') . "</b>" : '' ; ?>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-12" id="user_Group_tt">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="control-label col-md-3">User Groups</label>
                                                <div class="col-md-9">

                                                    <select name="user_Group" id="user_Group" class="form-control">
                                                        <option value="">Select User Group</option>
                                                        <?php if ($user_group): ?>
                                                            <?php foreach ($user_group as $group): ?>
                                                                <option <?php echo $CI->checkSelected('user_Group', @$userData->user_group_id, $data = $group->id); ?> value="<?php echo $group->id ?>"><?php echo $group->group_name ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>

                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">User IP Restriction</label>
                                                <div class="col-md-9">
                                                <select class="form-control" name="IPRestrictionstatus">
                                                    <option <?php echo $CI->checkSelected('IPRestrictionstatus', @$userData->ip_address_is_active, $data = 0) ?> value="0">No</option>
                                                    <option <?php echo $CI->checkSelected('IPRestrictionstatus', @$userData->ip_address_is_active, $data = 1) ?> value="1">Yes</option>
                                                </select>  
                                                <?php echo ($this->session->flashdata('error')) ? "<br>" . "<b class='text-danger'>" . $this->session->flashdata('error') . "</b>" : '' ; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">User IP1</label>
                                                <div class="col-md-9">
                                                <input type="text" class="form-control" id="IPaddress1" name="IPaddress1" value="<?php echo @$userData->ip_address1 ?>"> 
                                                <?php echo ($this->session->flashdata('error')) ? "<br>" . "<b class='text-danger'>" . $this->session->flashdata('error') . "</b>" : '' ; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">User IP2</label>
                                                <div class="col-md-9">
                                                <input type="text" class="form-control" id="IPaddress2" name="IPaddress2" value="<?php echo @$userData->ip_address2 ?>"> 
                                                <?php echo ($this->session->flashdata('error')) ? "<br>" . "<b class='text-danger'>" . $this->session->flashdata('error') . "</b>" : '' ; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">User IP3</label>
                                                <div class="col-md-9">
                                                <input type="text" class="form-control" id="IPaddress3" name="IPaddress3" value="<?php echo @$userData->ip_address3 ?>"> 
                                                <?php echo ($this->session->flashdata('error')) ? "<br>" . "<b class='text-danger'>" . $this->session->flashdata('error') . "</b>" : '' ; ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('status')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Status</label>
                                            <div class="col-md-9">

                                                <select class="form-control" name="status">
                                                    <option <?php form_error('status') ? $_POST['status'] = 2 . 'selected' : ''; ?> value="">Status</option>
                                                    <option <?php echo $CI->checkSelected('status', @$userData->is_active, $data = 0) ?> value="0">In-Active</option>
                                                    <option <?php echo $CI->checkSelected('status', @$userData->is_active, $data = 1) ?> value="1">Active</option>
                                                </select> 


                                                
                                                <?php echo (form_error('status')) ? '<br>' . form_error('status', "<b class='text-danger'>", '</b>') : ''; ?>                                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--/row-->
                                
                                <hr class="m-t-0 m-b-40">
                                <h3 class="box-title" style="margin-top: -26px">User Access Ability</h3>
                                <hr class="m-t-0 m-b-40">
                                
                                
                                <div class="row">
                                    <div class='col-md-12'>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center">SR NO.</th>
                                                        <th style="text-align: center">Controllers</th>
                                                        <th style="text-align: center">Select Module</th>
                                                        <th style="text-align: center">Module</th>
                                                        <th style="text-align: center">Permission Add</th>
                                                        <th style="text-align: center">Permission Update</th>
                                                        <th style="text-align: center">Permission View</th>
                                                        <th style="text-align: center">Permission Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="userPermission">
                                                </tbody>
                                                
                                                <tbody id="user">
                                                    
                                                    <?php
                                                    
//                                                        echo '<pre>';
//                                                        print_r($postData);
                                                    
                                                        $i = 1;
                                                        if (is_array($results)):
                                                        foreach ($results as $result): 
                                                        $result->action_name = str_replace(" ", "_", $result->action_name);
                                                    ?>
                                                    
                                                    <tr>
                                                        
                                                        <td style="text-align: center"><b><?php echo $i ?></b></td>
                                                        <td style="text-align: center"><?php echo $result->controller_name ?></td>
                                                        <td style="text-align: center"><input <?php echo (@$postData[@$result->action_name]) ? 'checked' : ''; ?> type="checkbox" name="module[<?php echo $result->action_name ?>]" value="<?php echo $result->action_name ?>"></td>
                                                        <td style="text-align: center"><?php echo str_replace("_", " ", $result->action_name) ?></td>
                                                        
                                                    <?php if ($result->is_crud): ?>
                                                        
                                                        <td style="text-align: center"><input type="checkbox" <?php echo (@$postData[@$result->action_name]['create']) ? 'checked' : ''; ?> name="<?php echo $result->action_name ?>[create][]" value="1"></td>
                                                        <td style="text-align: center"><input type="checkbox" <?php echo (@$postData[@$result->action_name]['update']) ? 'checked' : ''; ?> name="<?php echo $result->action_name ?>[update][]" value="1"></td>
                                                        <td style="text-align: center"><input type="checkbox" <?php echo (@$postData[@$result->action_name]['view']) ? 'checked' : ''; ?> name="<?php echo $result->action_name ?>[view][]" value="1"></td>
                                                        <td style="text-align: center"><input type="checkbox" <?php echo (@$postData[@$result->action_name]['delete']) ? 'checked' : ''; ?> name="<?php echo $result->action_name ?>[delete][]" value="1"></td>
                                                        
                                                    <?php else: ?>
                                                        
                                                        <td colspan="4" style="text-align: center">No CRUD Exists.</td>   
                                                        
                                                    <?php endif; ?>    
                                                    </tr>                                                    
                                                    <?php
                                                        $i++;
                                                        endforeach;
                                                        endif;
                                                    ?>
                                                </tbody>
                                                
                                                
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="box-title" style="margin-top: -26px">Address</h3>
                                <hr class="m-t-0 m-b-40">
                                
                                <!--/row-->
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="98 Cloch Rd" name="address" value="<?php echo (set_value('address') || $CI->CheckEmpty('address')) ? (set_value('address')) : @$userData->address; ?>"> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="London" name="city" value="<?php echo (set_value('city') || $CI->CheckEmpty('city')) ? (set_value('city')) :  @$userData->city; ?>"> 
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="st helier" name="state" value="<?php echo (set_value('state') || $CI->CheckEmpty('state')) ? (set_value('state')) :  @$userData->State; ?>"> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="JE2 1TJ" name="postCode" value="<?php echo (set_value('postCode') || $CI->CheckEmpty('postCode')) ? (set_value('postCode')) : @$userData->postCode; ?>"> 
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2" name="country">
                                                    <option value=""><?php echo "Select Country"; ?></option>
                                                    <?php foreach ($countries as $country): ?>
                                                        <option <?php echo $CI->checkSelected('country' ,@$userData->country, @$country->name); ?> value="<?php echo @$country->name ?>"><?php echo @$country->name ?></option>
                                                        <!--<option <?php // echo (set_value('country') == $country->name || $CI->CheckEmpty('country')) ? 'selected' : ''; ?> value="<?php // echo $country->name ?>"><?php // echo $country->name ?></option>-->
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                
                                <!--/row-->
                            </div>
                            <hr class="m-t-0 m-b-40">
                            
                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12" style="text-align: center; padding: 0px 10px 10px 10px">
                                                <button type="submit" id="submit" class="btn btn-info">Edit User</button>
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

<?php } ?>

<!-- /.container-fluid -->
