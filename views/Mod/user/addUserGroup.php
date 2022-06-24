<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add User Group </h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Campaigns</a></li>
                <li class="active">Add User Group</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Add User Group</div>
                    </div>
                    
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                       
                            <a href="<?php echo base_url('Mod/manageUserGroup'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Manage User Group</a>                    
                        </div>
                    </div>
                    
                </div>
                
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="<?php echo base_url('Mod/createUserGroup') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-body">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('user_group_name')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3">User Group Name<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-7" style="">
                                                <input type="text" class="form-control" placeholder="Enter User Group Name" name="user_group_name" value="<?php echo set_value('user_group_name'); ?>">
                                                 <?php echo (form_error('user_group_name')) ? '<br>' . form_error('user_group_name', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('company')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3">Company<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-7" style="">
                                                
                                                <select name="company" id="company_id" class="form-control">
                                                    <option value="">Select Company</option>
                                                    
                                                    <?php if($companies): ?>
                                                        <?php foreach ($companies as $company): ?>
                                                            <option <?php echo ($company->id == set_value('company')) ? 'selected' : '' ?> value="<?php echo $company->id ?>"><?php echo $company->company_name ?></option>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                            
                                                </select>
                                                
                                                <?php echo (form_error('company')) ? '<br>' . form_error('company', "<b class='text-danger'>", '</b>') : ''; ?>  

                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('users')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3">Users<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-7" style="" >
                                                
                                                <select name="users[]" class="form-control" id="users_ids" multiple="">
                                                    <option value="">Select Users</option>
                                                    
                                                    <?php if ($users): ?>
                                                        <?php foreach ($users as $key => $user): ?>
                                                            <option <?php echo ( isset(set_value('users')[$key]) && $user->id == set_value('users')[$key]) ? 'selected' : '' ?> value='<?php echo $user->id ?>'><?php echo $user->userName ?></option>
                                                        <?php endforeach; ?>                                                        
                                                    <?php endif; ?>
                                                            
                                                </select>
                                                
                                                <?php echo (form_error('users')) ? '<br>' . form_error('users', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('status')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Status<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-7">
                                                
                                                <select class="form-control" name="status">
                                                    <option <?php form_error('status') ? $_POST['status'] = 2 . 'selected' : ''; ?> value="">Select User Group Status</option>
                                                    <option <?php echo (isset($_POST['status']) && $_POST['status'] == 1) ? 'selected' : ''; ?> value="1">Active</option>
                                                    <option <?php echo (isset($_POST['status']) && $_POST['status'] == 0) ? 'selected' : ''; ?> value="0">In-Active</option>
                                                </select> 
                                                
                                                <?php echo (form_error('status')) ? '<br>' . form_error('status', "<b class='text-danger'>", '</b>') : ''; ?>                                                      
                                                
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
                                                <button type="submit" class="btn btn-info">Add User Group</button>
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

