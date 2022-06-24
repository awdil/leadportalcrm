<?php
$permission_view = $_SESSION['adminData']['Users']['permission_view'];
$permission_update = $_SESSION['adminData']['Users']['permission_update'];
$permission_delete = $_SESSION['adminData']['Users']['permission_delete'];
$permission_create = $_SESSION['adminData']['Users']['permission_create'];
?>

<?php if($permission_create ==1){ 
$allusers = $this->Mods->getUsers();
?>
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">ADD USER</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li class="active">Add User</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">ADD USER</div>
                    </div>
                    
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/Users'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Manage Users</a>                    
                        </div>
                    </div>
                    
                </div>
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="<?php echo base_url('Mod/CreateUser') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-body">
                                <h3 class="box-title" style="margin-top: -8px">User Info</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('firstName')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3">First Name<span style="color: red"> *</span></label>
                                            <div class="col-md-9" style="">
                                                <input type="text" class="form-control" placeholder="John" name="firstName" value="<?php echo set_value('firstName'); ?>">
                                                 <?php echo (form_error('firstName')) ? '<br>' . form_error('firstName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('lastName')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Last Name<span style="color: red"> *</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Doe" name="lastName" value="<?php echo set_value('lastName'); ?>"> 
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
                                                    <option <?php echo (set_value('gender') == 'Male') ? 'selected' : ''; ?> value="Male">Male</option>
                                                    <option <?php echo (set_value('gender') == 'Female') ? 'selected' : ''; ?> value="Female">Female</option>
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
                                                <input type="text" class="form-control" id="datepicker-autoclose" placeholder="dd/mm/yyyy" name="dob" value="<?php echo set_value('dob'); ?>"> </div>
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
                                                <input type="text" class="form-control" placeholder="johndoe@domain.com" name="email" value="<?php echo set_value('email'); ?>"> 
                                                 <?php echo (form_error('email')) ? '<br>' . form_error('email', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Phone Number </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="07894561230" name="phone" value="<?php echo set_value('phone'); ?>"> 
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
                                                <input type="text" class="form-control" placeholder="johndoe" name="userName" value="<?php echo set_value('userName'); ?>"> 
                                                <?php echo (form_error('userName')) ? '<br>' . form_error('userName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('password')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Password<span style="color: red"> *</span></label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" placeholder="****************" name="password" value="<?php echo set_value('password'); ?>"> 
                                                <?php echo (form_error('password')) ? '<br>' . form_error('password', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    
                                    
                                    <!--/span-->
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group <?php echo (form_error('userType')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">User Type</label>
                                            
                                            <div class="col-md-9">
                                                <select name="userType" class="form-control" id="userType">
                                                    <option value="">Select User Type</option>
                                                    <?php foreach ($userType as $type): ?>
                                                        <option <?php echo (set_value('userType') == $type->role_id ) ? 'selected' : ''; ?> value="<?php echo $type->role_id ?>"><?php echo $type->role_name; ?></option>
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
                                                    <option id="allCompanies" style="display: none" value="0">All</option>
                                                    <?php foreach ($companies as $company): ?>
                                                        <option <?php echo (set_value('company') == $company->id ) ? 'selected' : ''; ?> value="<?php echo $company->id ?>"><?php echo $company->company_name; ?></option>
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
                                                
                                                <select name="campaign[]" multiple="" class="form-control">
                                                    <option value="">Select Campaign</option>
                                                    <option id="allCampaign" style="display: none" value="0">All</option>
                                                    <?php if($campaigns): 
                                                        $inc = 0;
                                                    ?>
                                                        <?php foreach ($campaigns as $campaign): ?>
                                                            <option <?php echo ($this->input->post('campaign')[$inc] == $campaign->campaign_id ) ? 'selected' : ''; ?> value="<?php echo $campaign->campaign_id ?>"><?php echo $campaign->campaign_name . " | " . $campaign->campaign_short_name ; ?></option>
                                                        <?php 
                                                            if ($this->input->post('campaign')[$inc] == $campaign->campaign_id){
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
                                                        <option <?php echo (set_value('bdm_name') == @$single->userName ) ? 'selected' : ''; ?> value="<?php echo @$single->userName ?>"><?php echo @$single->userName; ?></option>
                                                    <?php endforeach; ?>
                                                    <!--<option value="">Select BDM</option>
                                                    <option <?php echo (set_value('bdm_name') == "Faizan" ) ? 'selected' : ''; ?> value="Faizan">Faizan</option>
                                                    <option <?php echo (set_value('bdm_name') == "Zeeshan" ) ? 'selected' : ''; ?> value="Zeeshan">Zeeshan</option>
                                                    <option <?php echo (set_value('bdm_name') == "Syed Mohsin" ) ? 'selected' : ''; ?> value="Syed Mohsin">Syed Mohsin</option>
                                                    <option <?php echo (set_value('bdm_name') == "Mannaza" ) ? 'selected' : ''; ?> value="Mannaza">Mannaza</option>
                                                    <option <?php echo (set_value('bdm_name') == "Haider" ) ? 'selected' : ''; ?> value="Haider">Haider</option>
                                                    <option <?php echo (set_value('bdm_name') == "Shaz" ) ? 'selected' : ''; ?> value="Shaz">Shaz</option>
                                                    <option <?php echo (set_value('bdm_name') == "Nishma" ) ? 'selected' : ''; ?> value="Nishma">Nishma</option>
                                                    <option <?php echo (set_value('bdm_name') == "Daud" ) ? 'selected' : ''; ?> value="Daud">Daud</option>
                                                    <option <?php echo (set_value('bdm_name') == "Mohsin Ali" ) ? 'selected' : ''; ?> value="Mohsin Ali">Mohsin Ali</option>
                                                    <option <?php echo (set_value('bdm_name') == "Saddam" ) ? 'selected' : ''; ?> value="Saddam">Saddam</option>
                                                    <option <?php echo (set_value('bdm_name') == "Umer" ) ? 'selected' : ''; ?> value="Umer">Umer</option>
                                                    <option <?php echo (set_value('bdm_name') == "Danish" ) ? 'selected' : ''; ?> value="Danish">Danish</option>
                                                    <option <?php echo (set_value('bdm_name') == "Alisha" ) ? 'selected' : ''; ?> value="Alisha">Alisha</option>
                                                    <option <?php echo (set_value('bdm_name') == "Naveed" ) ? 'selected' : ''; ?> value="Naveed">Naveed</option>
                                                    <option <?php echo (set_value('bdm_name') == "Hamza" ) ? 'selected' : ''; ?> value="Hamza">Hamza</option>
                                                    <option <?php echo (set_value('bdm_name') == "Shaista" ) ? 'selected' : ''; ?> value="Shaista">Shaista</option>
                                                    <option <?php echo (set_value('bdm_name') == "Naz" ) ? 'selected' : ''; ?> value="Naz">Naz</option>
                                                    <option <?php echo (set_value('bdm_name') == "Awais" ) ? 'selected' : ''; ?> value="Awais">Awais</option>-->
                                                </select>
                                                <?php echo (form_error('bdm_name')) ? '<br>' . form_error('bdm_name', "<b class='text-danger'>", '</b>') : ''; ?>                                                  
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">

                                    <div class="col-md-12" id="user_Group_tt">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">User Groups</label>
                                                <div class="col-md-9">

                                                    <select name="user_Group" id="user_Group" class="form-control">
                                                        <option value="">Select User Group</option>
                                                        <?php if ($user_group): ?>
                                                            <?php foreach ($user_group as $group): ?>
                                                                <option <?php echo (set_value('user_Group') == $group->id ) ? 'selected' : ''; ?>  value="<?php echo $group->id ?>"><?php echo $group->group_name ?></option>
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
                                                    <option <?php echo (isset($_POST['IPRestrictionstatus']) && $_POST['IPRestrictionstatus'] == 0) ? 'selected' : ''; ?> value="0">No</option>
                                                    <option <?php echo (isset($_POST['IPRestrictionstatus']) && $_POST['IPRestrictionstatus'] == 1) ? 'selected' : ''; ?> value="1">Yes</option>
                                                </select>  
                                                <?php echo ($this->session->flashdata('error')) ? "<br>" . "<b class='text-danger'>" . $this->session->flashdata('error') . "</b>" : '' ; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">User IP1</label>
                                                <div class="col-md-9">
                                                <input type="text" class="form-control" id="IPaddress1" name="IPaddress1"> 
                                                <?php echo ($this->session->flashdata('error')) ? "<br>" . "<b class='text-danger'>" . $this->session->flashdata('error') . "</b>" : '' ; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">User IP2</label>
                                                <div class="col-md-9">
                                                <input type="text" class="form-control" id="IPaddress2" name="IPaddress2"> 
                                                <?php echo ($this->session->flashdata('error')) ? "<br>" . "<b class='text-danger'>" . $this->session->flashdata('error') . "</b>" : '' ; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">User IP3</label>
                                                <div class="col-md-9">
                                                <input type="text" class="form-control" id="IPaddress3" name="IPaddress3"> 
                                                <?php echo ($this->session->flashdata('error')) ? "<br>" . "<b class='text-danger'>" . $this->session->flashdata('error') . "</b>" : '' ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Avatar</label>
                                            <div class="col-md-10">
                                                <input type="file" class="form-control" name="image"> 
                                                <?php echo ($this->session->flashdata('error')) ? "<br>" . "<b class='text-danger'>" . $this->session->flashdata('error') . "</b>" : '' ; ?>
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
                                                    <option <?php echo (isset($_POST['status']) && $_POST['status'] == 0) ? 'selected' : ''; ?> value="0">In-Active</option>
                                                    <option <?php echo (isset($_POST['status']) && $_POST['status'] == 1) ? 'selected' : ''; ?> value="1">Active</option>
                                                </select> 
                                                
                                                <?php echo (form_error('status')) ? '<br>' . form_error('status', "<b class='text-danger'>", '</b>') : ''; ?>                                                      
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>



                                
                                <!--/row-->
                                
                                <hr class="m-t-0 m-b-40">
                                <h3 class="box-title" style="margin-top: -26px">User Access Ablity</h3>
                                <hr class="m-t-0 m-b-40">
                                
<!--                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group <?php // echo (form_error('userType')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">User Type</label>
                                            
                                            <div class="col-md-9">
                                                <select name="userType" class="form-control" id="userType">
                                                    <option value="">Select User Type</option>
                                                    <?php // foreach ($userType as $type): ?>
                                                        <option <?php // echo (set_value('userType') == $type->role_id ) ? 'selected' : ''; ?> value="<?php // echo $type->role_id ?>"><?php // echo $type->role_name; ?></option>
                                                    <?php // endforeach; ?>
                                                </select>
                                                 <?php // echo (form_error('userType')) ? '<br>' . form_error('userType', "<b class='text-danger'>", '</b>') : ''; ?>                                                  
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6" id="campaign_action">
                                        
                                        <div class="form-group <?php // echo (form_error('campaign')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Campaign</label>
                                            
                                            <div class="col-md-9">
                                                
                                                <select name="campaign" class="form-control">
                                                    <option value="">Select Campaign</option>
                                                    <option value="0">All</option>
                                                    <?php // if($campaigns): ?>
                                                        <?php // foreach ($campaigns as $campaign): ?>
                                                            <option <?php // echo (set_value('campaign') == $campaign->campaign_id ) ? 'selected' : ''; ?> value="<?php // echo $campaign->campaign_id ?>"><?php // echo $campaign->campaign_name . " | " . $campaign->campaign_short_name ; ?></option>
                                                        <?php // endforeach; ?>
                                                    <?php // endif; ?>
                                                </select>
                                                
                                                <?php // echo (form_error('campaign')) ? '<br>' . form_error('campaign', "<b class='text-danger'>", '</b>') : ''; ?>                                                  
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    
                                </div>                                -->
                                
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
                                <?php // if (isset($_POST['userType'])): ?>                                                
                                                <tbody id="user">
                                                    
                                                    <?php
                                                    
                                                        $i = 1;
                                                        if (is_array($results)):
                                                        foreach ($results as $result): 
                                                        $result->action_name = str_replace(" ", "_", $result->action_name);                                                            
                                                    ?>
                                                    
                                                    <tr>
                                                        <td style="text-align: center"><b><?php echo $i ?></b></td>
                                                        <td style="text-align: center"><?php echo $result->controller_name ?></td>
                                                        <td style="text-align: center"><input <?php echo (@$postData[@$result->action_name]) ? 'checked' : ''; ?> type="checkbox" name="module[<?php echo $result->action_name ?>]" value="<?php echo $result->action_name ?>"></td>
                                                        <td style="text-align: center"><?php echo str_replace("_", " ", $result->action_name); ?></td>
                                                        
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
                                <?php // endif; ?>
                                                
                                                
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
                                                <input type="text" class="form-control" placeholder="98 Cloch Rd" name="address" value="<?php echo set_value('address'); ?>"> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="London" name="city" value="<?php echo set_value('city'); ?>"> 
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
                                                <input type="text" class="form-control" placeholder="st helier" name="state" value="<?php echo set_value('state'); ?>"> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="JE2 1TJ" name="postCode" value="<?php echo set_value('postCode'); ?>"> 
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
                                                        <option <?php echo (set_value('country') == $country->name ) ? 'selected' : ''; ?> value="<?php echo $country->name ?>"><?php echo $country->name ?></option>
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
                                                <button type="submit" class="btn btn-info">Add User</button>
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
