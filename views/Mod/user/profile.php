<?php
//    echo "<pre>";
//    print_r($userData->avatar);
//    die();
?>
<?php $CI = & get_instance(); ?>

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">User Profile</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">User Profile</li>
            </ol>
        </div>
    </div>

    <!-- /.row -->
    <!-- .row -->

    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="white-box">
                <div class="user-bg"> 
                    <div class="overlay-box" style="background: #707cd2eb">
                        
                        <div class="user-content">
                            <a href="javascript:void(0)"><img src="<?php echo  base_url('public/adminAssets/plugins/images/users/user-default-image.png'); ?>" class="thumb-lg" alt="img"></a>
                            <h4 class="text-white"><?php echo ($userData->userName) ? ucfirst($userData->userName) : ''; ?></h4>
                            <h5 class="text-white"><?php echo ($userData->email) ? $userData->email : ''; ?></h5> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xs-12">
            <div class="white-box">
                
                <ul class="nav nav-tabs tabs customtab">

                    <li class="tab <?php echo ($this->uri->segment(3) == "profile") ? 'active' : ''; ?>">
                        <a href="#profile" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Profile</span> </a>
                    </li>

                    <li class="tab <?php echo ($this->uri->segment(3) == "settings" || $this->uri->segment(2) == "settings") ? 'active' : ''; ?>">
                        <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Settings</span> </a>
                    </li>

                    <li class="tab <?php echo ($this->uri->segment(3) == "resetPassword" || $this->uri->segment(2) == "resetPassword") ? 'active' : ''; ?>">
                        <a href="#resetPassword" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Reset Password</span> </a>
                    </li>

                </ul>
                
                <div class="tab-content">

                    <div class="tab-pane <?php echo ($this->uri->segment(3) == "profile") ? 'active' : ''; ?>" id="profile">
                        
                        <div class="row">
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                <br>
                                <p class="text-muted"><?php echo ($userData->firstName || $userData->lastName) ? $userData->firstName . " " . $userData->lastName : ''; ?></p>
                            </div>
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                <br>
                                <p class="text-muted"><?php echo ($userData->phoneNumber) ? $userData->phoneNumber : ''; ?></p>
                            </div>
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                <br>
                                <p class="text-muted"><?php echo ($userData->email) ? $userData->email : ''; ?></p>
                            </div>
                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                <br>
                                <p class="text-muted"><?php echo ($userData->country) ? $userData->country : ''; ?></p>
                            </div>
                        </div>

                        <hr>                        
                        
                        <div class="row">
                            
                            <div class="col-md-3 col-xs-6 b-r"> <strong>User Type</strong>
                                <br>
                                <p class="text-muted"><?php echo ($_SESSION['adminData']['role_name']) ? $_SESSION['adminData']['role_name'] : ''; ?></p>
                            </div>
                            
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Company</strong>
                                <br>
                                <p class="text-muted"><?php echo ($_SESSION['adminData']['company_name']) ? $_SESSION['adminData']['company_name'] : ''; ?></p>
                            </div>
                        </div>
                        
                        <hr>
                            <h4 class="font-bold m-t-30">Permissions</h4>
                        <hr>
                        
                        <div class="table-responsive">
                        
                    <table style="border: 1px solid #e4e7ea" class="table table-bordered table-hover table-striped" >

                            <tr>    
                                <th style="text-align: left">Permissions</th>
                                <th style="text-align: left">Modules</th>
                                <th style="text-align: left">Permission Create</th>
                                <!--<td><i class="fa fa-check"></i> <i class="fa fa-times"></i></td>-->                                
                                <th style="text-align: left">Permission Update</th>
                                <!--<td><i class="fa fa-check"></i> <i class="fa fa-times"></i></td>-->                                
                                <th style="text-align: left">Permission View</th>
                                <!--<td><i class="fa fa-check"></i> <i class="fa fa-times"></i></td>-->                                
                                <th style="text-align: left">Permission Delete</th>
                                <!--<td><i class="fa fa-check"></i> <i class="fa fa-times"></i></td>-->                                
                            </tr>
                        <?php 
//                          echo "<pre>";
//                          print_r($userPer);
                        ?>
                        <?php if ($userPer): ?>
                            <?php foreach ($userPer as $per): ?>
                            
                            <tr>
                                <td style="text-align: left"><?php echo $per['controller_name'] ?></td>
                                <td style="text-align: left"><?php echo $per['action_name'] ?></td>
                                <td><?php echo ($per['permission_create']) ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>' ?></td>
                                <td><?php echo ($per['permission_update']) ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>' ?></td>
                                <td><?php echo ($per['permission_view']) ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>' ?></td>
                                <td><?php echo ($per['permission_delete']) ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>' ?></td>
                            </tr>

                            <?php endforeach; ?>                            
                        <?php endif; ?>                            
                            
                        </table>
                        </div>
                    </div>

                    <div class="tab-pane <?php echo ($this->uri->segment(3) == "settings" || $this->uri->segment(2) == "settings") ? 'active' : ''; ?>" id="settings">

                    <?php if ($this->session->flashdata('Error')): ?>                                                        

                            <div class="alert alert-danger" style="margin-top: 20px">
                                <p style="color: white;"><strong>Form Errors !</strong><p>
                                <b style="color: white;">Please Correct The From Errors and Submit Again.</b>
                                <p style='color: white;'><strong><?php echo $this->session->flashdata('Error') ?></strong></p>
                            </div>

                    <?php endif; ?>                                                        

                    <?php if ($this->session->flashdata('ProfileUpdate')): ?>                                                        

                            <div class="alert alert-success" style="margin-top: 20px">
                                <p style="color: white;"><strong>Success !</strong><p>
                                <p style='color: white;'><strong><?php echo $this->session->flashdata('ProfileUpdate') ?></strong></p>
                            </div>

                    <?php endif; ?>                                                        
                        
                        
                        <form class="form-horizontal form-material" action="<?php echo base_url('Mod/settings') ?>" method="POST">

                            <div class="form-group <?php echo (form_error('firstName')) ? 'has-error' : ''; ?>">
                                <label class="col-md-12">First Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="firstName" placeholder="Enter First Name" class="form-control form-control-line" value="<?php echo (set_value('firstName') || $CI->CheckEmpty('firstName')) ? (set_value('firstName')) : @$userData->firstName; ?>"> 
                                    <input type="hidden" class="form-control" id="userID" name="userID" value="<?php echo base64_encode($userData->id); ?>">                                    
                                    <?php echo (form_error('firstName')) ? '<br>' . form_error('firstName', "<b class='text-danger'>", '</b>') : ''; ?>                                                                        
                                </div>
                            </div>

                            <div class="form-group <?php echo (form_error('lastName')) ? 'has-error' : ''; ?>">
                                <label class="col-md-12">Last Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Enter Last Name" class="form-control form-control-line" name="lastName" value="<?php echo (set_value('lastName') || $CI->CheckEmpty('lastName')) ? (set_value('lastName')) : @$userData->lastName; ?>"> 
                                    <?php echo (form_error('lastName')) ? '<br>' . form_error('lastName', "<b class='text-danger'>", '</b>') : ''; ?>                                                                        
                                </div>
                            </div>
                            
                            <div class="form-group <?php echo (form_error('gender')) ? 'has-error' : ''; ?>">
                                <label class="col-md-12">Gender</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="gender">
                                        <option value="">Select Gender</option>
                                        <option <?php echo $CI->checkSelected('gender', $userData->gender, $data = 'Male') ?> value="Male">Male</option>
                                        <option <?php echo $CI->checkSelected('gender', $userData->gender, $data = 'Female') ?> value="Female">Female</option>
                                    </select> 
                                    <?php echo (form_error('gender')) ? '<br>' . form_error('gender', "<b class='text-danger'>", '</b>') : ''; ?>                                                                        
                                </div>
                            </div>

                            <div class="form-group <?php echo (form_error('dateOfBirth')) ? 'has-error' : ''; ?>">
                                <label class="col-md-12">Date of Birth</label>
                                <div class="col-md-12">
                                    <input type="text" id="set-DOB" name="dateOfBirth" placeholder="Enter Date Of Birth" class="form-control form-control-line" value="<?php echo (set_value('dateOfBirth') || $CI->CheckEmpty('dateOfBirth')) ? (set_value('dateOfBirth')) : @$userData->dateOfBirth; ?>"> 
                                    <?php echo (form_error('dateOfBirth')) ? '<br>' . form_error('dateOfBirth', "<b class='text-danger'>", '</b>') : ''; ?>                                                                        
                                </div>
                            </div>

                            <div class="form-group <?php echo (form_error('email')) ? 'has-error' : ''; ?>">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Enter Email Address" name="email" class="form-control form-control-line" value="<?php echo (set_value('email') || $CI->CheckEmpty('email')) ? (set_value('email')) : @$userData->email; ?>"> 
                                    <?php echo (form_error('email')) ? '<br>' . form_error('email', "<b class='text-danger'>", '</b>') : ''; ?>                                                                        
                                </div>
                            </div>

                            <div class="form-group <?php echo (form_error('phoneNumber')) ? 'has-error' : ''; ?>">
                                <label class="col-md-12">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Enter Phone Number" name="phoneNumber" class="form-control form-control-line" value="<?php echo (set_value('phoneNumber') || $CI->CheckEmpty('phoneNumber')) ? (set_value('phoneNumber')) : @$userData->phoneNumber; ?>"> 
                                    <?php echo (form_error('phoneNumber')) ? '<br>' . form_error('phoneNumber', "<b class='text-danger'>", '</b>') : ''; ?>                                                                        
                                </div>
                            </div>
                            
                            <div class="form-group <?php echo (form_error('address')) ? 'has-error' : ''; ?>">
                                <label class="col-md-12">Address</label>
                                <div class="col-md-12">
                                    <textarea name="address" class="form-control form-control-line" placeholder="Enter Address">
                                        <?php echo (set_value('address') || $CI->CheckEmpty('address')) ? trim(set_value('address')) : trim(@$userData->address); ?>                                        
                                    </textarea>
                                    <?php echo (form_error('address')) ? '<br>' . form_error('address', "<b class='text-danger'>", '</b>') : ''; ?>                                                                        
                                </div>
                            </div>
                            
                            <div class="form-group <?php echo (form_error('city')) ? 'has-error' : ''; ?>">
                                <label class="col-md-12">City</label>
                                <div class="col-md-12">
                                    <input name="city" type="text" placeholder="Enter City" class="form-control form-control-line" value="<?php echo (set_value('city') || $CI->CheckEmpty('city')) ? (set_value('city')) : @$userData->city; ?>"> 
                                    <?php echo (form_error('city')) ? '<br>' . form_error('city', "<b class='text-danger'>", '</b>') : ''; ?>                                                                        
                                </div>
                            </div>
                            
                            <div class="form-group <?php echo (form_error('state')) ? 'has-error' : ''; ?>">
                                <label class="col-md-12">State</label>
                                <div class="col-md-12">
                                    <input name="state" type="text" placeholder="Enter State" class="form-control form-control-line" value="<?php echo (set_value('State') || $CI->CheckEmpty('State')) ? (set_value('State')) : @$userData->State; ?>"> 
                                    <?php echo (form_error('state')) ? '<br>' . form_error('state', "<b class='text-danger'>", '</b>') : ''; ?>                                                                        
                                </div>
                            </div>
                            
                            <div class="form-group <?php echo (form_error('postCode')) ? 'has-error' : ''; ?>">
                                <label class="col-md-12">Post Code</label>
                                <div class="col-md-12">
                                    <input name="postCode" type="text" placeholder="Enter Post Code" class="form-control form-control-line" value="<?php echo (set_value('postCode') || $CI->CheckEmpty('postCode')) ? (set_value('postCode')) : @$userData->postCode; ?>"> 
                                    <?php echo (form_error('postCode')) ? '<br>' . form_error('postCode', "<b class='text-danger'>", '</b>') : ''; ?>                                                                        
                                </div>
                            </div>

                            <div class="form-group <?php echo (form_error('country')) ? 'has-error' : ''; ?>">
                                <label class="col-sm-12">Country</label>
                                <div class="col-sm-12">

                                    <select class="form-control form-control-line select2" name="country">
                                        <option value=""><?php echo "Select Country"; ?></option>
                                        <?php foreach ($countries as $country): ?>
                                            <option <?php echo $CI->checkSelected('country', @$userData->country, @$country->name); ?> value="<?php echo @$country->name ?>"><?php echo @$country->name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo (form_error('country')) ? '<br>' . form_error('country', "<b class='text-danger'>", '</b>') : ''; ?>                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Update Profile</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    
                    <div class="tab-pane <?php echo ($this->uri->segment(3) == "resetPassword" || $this->uri->segment(2) == "resetPassword") ? 'active' : ''; ?>" id="resetPassword">
                        
                        <!--<p style="font-weight: 600; color: #313131"><i class="fa fa-arrow-down" style="font-size: 10px"></i> Reset Password</p>-->
                        
                        <p style="font-weight: 600; color: #313131"><i class="" style="font-size: 10px; margin-top: -15px;"></i> Reset Password</p>
                        <hr style="width: 100%; float: left; margin-top: 0px">
                        
                <?php if ($this->session->flashdata('Error')): ?>                                                        
                        
                        <div class="alert alert-danger" style="margin-top: 20px">
                            <p style="color: white;"><strong>Form Errors !</strong><p>
                            <b style="color: white;">Please Correct The From Errors and Submit Again.</b>
                            <p style='color: white;'><strong><?php echo $this->session->flashdata('Error') ?></strong></p>
                        </div>
                        
                <?php endif; ?>                                                        
                        
                        <form class="form-horizontal form-material" action="<?php echo base_url('Mod/resetPassword'); ?>" method="post" style="margin-top: 32px">

                            <div class="form-group <?php echo (form_error('OldPassowrd')) ? 'has-error' : ''; ?>">
                                <label class="col-md-12">Old Password</label>
                                <div class="col-md-12">
                                    <input type="password" name="OldPassowrd" placeholder="Enter Password" class="form-control form-control-line" value="<?php echo set_value('OldPassowrd'); ?>"> 
                                    <?php echo (form_error('OldPassowrd')) ? '<br>' . form_error('OldPassowrd', "<b class='text-danger'>", '</b>') : ''; ?>                                    
                                </div>
                            </div>

                            <div class="form-group <?php echo (form_error('NewPassowrd')) ? 'has-error' : ''; ?>">
                                <label class="col-md-12">New Password</label>
                                <div class="col-md-12">
                                    <input type="password" name="NewPassowrd" placeholder="Enter New Password" class="form-control form-control-line" value="<?php echo set_value('NewPassowrd'); ?>"> 
                                    <?php echo (form_error('NewPassowrd')) ? '<br>' . form_error('NewPassowrd', "<b class='text-danger'>", '</b>') : ''; ?>                                    
                                </div>
                            </div>
                            
                            <div class="form-group <?php echo (form_error('Re-TypePassowrd')) ? 'has-error' : ''; ?>">
                                <label class="col-md-12">Re-Type Password</label>
                                <div class="col-md-12">
                                    <input type="password" name="Re-TypePassowrd" placeholder="Enter Re-Type Password" class="form-control form-control-line" value="<?php echo set_value('Re-TypePassowrd'); ?>"> 
                                    <?php echo (form_error('Re-TypePassowrd')) ? '<br>' . form_error('Re-TypePassowrd', "<b class='text-danger'>", '</b>') : ''; ?>                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary">Reset Password</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
