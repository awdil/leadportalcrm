<?php
$permission_view = $_SESSION['adminData']['Users']['permission_view'];
$permission_update = $_SESSION['adminData']['Users']['permission_update'];
$permission_delete = $_SESSION['adminData']['Users']['permission_delete'];
$permission_create = $_SESSION['adminData']['Users']['permission_create'];

?>
<style>
    
    tr td {
        text-align: left;
    }
    
</style>

<?php 
//echo "<pre>";
//print_r($userData->campaign_id);
//die();

?>

<?php if($permission_view == 1){ ?>
<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Manage Users</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li class="active">View User</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <!-- ============================================================== -->
    <!-- Demo table -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">VIEW USER</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 12px ">                        
                            <a href="<?php echo base_url('Mod/editUser') . "/" . $userData->id; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-pencil"></i> Edit User</a>
                            <a href="<?php echo base_url('Mod/Users'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Manage Users</a>                    
                        </div>
                    </div>

                </div>


                <hr style="margin-bottom: 0; margin-top: 5px;">

                <div class="table-responsive" style="padding: 25px 15px 5px 15px">
                    <table style="border: 1px solid #e4e7ea" class="table table-bordered table-hover table-striped" >
                        <tbody>

                            <tr>
                                <th>First Name</th>
                                <td><?php echo!empty($userData->firstName) ? $userData->firstName : ''; ?></td>
                                <th>Last Name</th>
                                <td><?php echo!empty($userData->lastName) ? $userData->lastName : ''; ?></td>
                                <th>Email</th>
                                <td colspan="2"><?php echo!empty($userData->email) ? $userData->email : ''; ?></td>                            
                            </tr>
                            
                            <tr>    
                                <th>Gender</th>
                                <td ><?php echo!empty($userData->gender) ? $userData->gender : ''; ?></td>                                                        
                                <th>Date Of Birth</th>
                                <td><?php echo!empty($userData->dateOfBirth) ? $userData->dateOfBirth : ''; ?></td>                                                                                    
                                <th>Phone Number</th>
                                <td colspan="2"><?php echo!empty($userData->phoneNumber) ? $userData->phoneNumber : ''; ?></td>                                                                                                                                            
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td colspan="4"><?php echo!empty($userData->address) ? $userData->address : ''; ?></td>                           
                                <th>City</th>
                                <td><?php echo!empty($userData->city) ? $userData->city : ''; ?></td>                            
                            </tr>
                            
                            <tr>
                                <th>State</th>
                                <td><?php echo!empty($userData->State) ? $userData->State : ''; ?></td>                           
                                <th>Post Code</th>
                                <td><?php echo!empty($userData->postCode) ? $userData->postCode : ''; ?></td>                                                       
                                <th>Country</th>
                                <td colspan="2"><?php echo!empty($userData->country) ? $userData->country : ''; ?></td>                            
                            </tr>
                            
                            <tr>
                                <th colspan="3" style="border: 1px solid #e4e7ea; text-align: center">User Account Credentials</th>
                            </tr>
                            
                            <tr>
                                <th colspan="2">User Name</th>
                                <td colspan="2"><?php echo!empty($userData->userName) ? $userData->userName : ''; ?></td>                            
                                <th>Password</th>
                                <td colspan="2"><?php echo!empty($userData->password) ? $userData->password : ''; ?></td>                            
                            </tr>
                            
                            <tr>
                                <th>Company</th>
                                <td><?php echo!empty($userData->company_id) ? $userData->company_id : ''; ?></td>                            
                                <th>Campaign</th>
                                <!--<td><?php // echo!empty($userData->campaign_id) ? $userData->campaign_id : ''; ?></td>-->                            
                                
                                <td>
                                    
                                    <?php foreach ($userData->campaign_id as $campaign){ ?>
                                    <table>
                                        <tbody>
                                            <td><?php echo $campaign->campaign_name ?></td>
                                        </tbody>
                                    </table>
                                        
                                    <?php } ?>
                                    
                                </td>
                                
                                <th>BDM Name </th>
                                <td colspan="2"><?php echo!empty($userData->bdm_name) ? $userData->bdm_name : ''; ?></td>                            
                            </tr>

                            <tr>
                                <th colspan="2">User Group</th>
                                <td colspan="5"><?php echo!empty($userData->user_group_id) ? $userData->user_group_id : ''; ?></td>                            
                            </tr>
                            
                            <tr>
                                <th colspan="3" style="border: 1px solid #e4e7ea; text-align: Center">User Account permissions</th>
                            </tr>
                            
                            
                            <tr>
                                <th style="text-align: center">User Type</th>
                                <th style="text-align: center">Controller Name</th>
                                <th style="text-align: center">Action Name</th>
                                <th style="text-align: center">Permission Create</th>
                                <th style="text-align: center">Permission Update</th>
                                <th style="text-align: center">Permission View</th>
                                <th style="text-align: center">Permission Delete</th>
                            </tr>

                            <?php if (is_array($getUserPermissions)): ?>
                                <?php foreach ($getUserPermissions as $getUserPermission): ?>

                                    <tr>
                                        <td style="text-align: center"><?php echo $getUserPermission->role_name; ?></td>
                                        <td style="text-align: center"><?php echo $getUserPermission->controller_name; ?></td>
                                        <td style="text-align: center"><?php echo $getUserPermission->action_name; ?></td>
                                        <td style="text-align: center"><?php echo ($getUserPermission->permission_create) ? '<i class="fa fa-check"></i>': '<i class="fa fa-times"></i>' ; ?></td>
                                        <td style="text-align: center"><?php echo ($getUserPermission->permission_update) ? '<i class="fa fa-check"></i>': '<i class="fa fa-times"></i>' ; ?></td>
                                        <td style="text-align: center"><?php echo ($getUserPermission->permission_view) ? '<i class="fa fa-check"></i>': '<i class="fa fa-times"></i>' ; ?></td>
                                        <td style="text-align: center"><?php echo ($getUserPermission->permission_delete) ? '<i class="fa fa-check"></i>': '<i class="fa fa-times"></i>' ; ?></td>
                                    </tr>

                                <?php endforeach; ?>
                                    
                                    <?php else: ?>
                                    
                                    <tr><td style="text-align: center" colspan="7">User Account permissions Not Added Yet!</td></tr>
                                    
                            <?php endif; ?>

                            <tr>
                                <th style="vertical-align: middle">Status</th>
                                <td style="vertical-align: middle" colspan="2"><?php echo!empty($userData->is_active) ? 'Active' : 'In-Active'; ?></td>                            
                                <th style="vertical-align: middle">Avatar</th>
                                <td colspan="3" style="text-align: center;"><img class="img-responsive img-thumbnail" src="<?php echo !empty(@$userData->avatar) ? base_url('Uploads/profileImages/' . @$getUserPermissions[0]->role_name . '/' . @$userData->avatar . '') : ''; ?>"></td>
                            </tr>

                            <tr>
                                <th>Date Registered</th>
                                <td colspan="6"><?php echo!empty($userData->dateRegistered) ? $userData->dateRegistered : ''; ?></td>                                                                                                                
                            </tr>


                        </tbody>
                    </table>

                    


                </div>


                <hr>
                <div style='text-align: center; margin-top: -16px' id='pagination'></div>
            </div>



        </div>

    </div>




</div>
<!-- /.container-fluid -->
<?php } ?>
