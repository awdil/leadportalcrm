<?php // echo $sortOrder ?>

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">ADD Access Controls</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Access Controls</a></li>
                <li class="active">Add Access Control</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">ADD ACCESS CONTROL</div>
                    </div>
                    
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/accessControls'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Manage Access Controls</a>                    
                        </div>
                    </div>
                    
                </div>
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        
                        <form action="<?php echo base_url('Mod/createAccessControl') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <div class="form-body">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('role')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Role<span style="color: red"> *</span></label>
                                            <div class="col-md-4">
                                                <select name="role" class="form-control" id="role">
                                                    <option value="">Select Role</option>
                                                    <?php foreach ($roles as $role): ?>
                                                        <option <?php echo (set_value('role') == $role->role_id ) ? 'selected' : ''; ?> value="<?php echo $role->role_id ?>"><?php echo $role->role_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <input type="hidden" id="seniro" name="seniro" value="insert">                                                
                                                 <?php echo (form_error('role')) ? '<br>' . form_error('role', "<b class='text-danger'>", '</b>') : ''; ?>                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('permission')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Permission<span style="color: red"> *</span></label>
                                            <div class="col-md-4">
                                                <select name="permission" class="form-control" id="permission">
                                                    <option value="">Select Permission</option>
                                                    <?php 
                                                        if ($permissions):
                                                        foreach ($permissions as $permission): 
                                                    ?>
                                                            <option <?php echo ( @$_POST['permission'] == $permission->permission_id ) ? 'selected' : ''; ?> value="<?php echo $permission->permission_id ?>"><?php echo $permission->permission_name; ?></option>
                                                    <?php 
                                                        endforeach; 
                                                        endif;
                                                    ?>
                                                </select>
                                                 <?php echo (form_error('permission')) ? '<br>' . form_error('permission', "<b class='text-danger'>", '</b>') : ''; ?>                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('permissionCreate')) ? 'has-error' : ''; ?>">
                                            
                                            <label class="control-label col-md-3">Permission Create<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4">
                                                
                                                <select class="form-control" name="permissionCreate">
                                                    <option <?php form_error('permissionCreate') ? $_POST['permissionCreate'] = 2 . 'selected' : ''; ?> value="">Select Permission Create</option>
                                                    <option <?php echo (isset($_POST['permissionCreate']) && $_POST['permissionCreate'] == 1) ? 'selected' : ''; ?> value="1">Yes</option>
                                                    <option <?php echo (isset($_POST['permissionCreate']) && $_POST['permissionCreate'] == 0) ? 'selected' : ''; ?> value="0">No</option>
                                                </select> 
                                                
                                                <?php echo (form_error('permissionCreate')) ? '<br>' . form_error('permissionCreate', "<b class='text-danger'>", '</b>') : ''; ?>                                                      
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('permissionUpdate')) ? 'has-error' : ''; ?>">
                                            
                                            <label class="control-label col-md-3">Permission Update<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4">
                                                
                                                <select class="form-control" name="permissionUpdate">
                                                    
                                                    <option <?php form_error('permissionUpdate') ? $_POST['permissionUpdate'] = 2 . 'selected' : ''; ?> value="">Select Permission Update</option>
                                                    <option <?php echo (isset($_POST['permissionUpdate']) && $_POST['permissionUpdate'] == 1) ? 'selected' : ''; ?> value="1">Yes</option>
                                                    <option <?php echo (isset($_POST['permissionUpdate']) && $_POST['permissionUpdate'] == 0) ? 'selected' : ''; ?> value="0">No</option>
                                                    
                                                </select> 
                                                
                                                <?php echo (form_error('permissionUpdate')) ? '<br>' . form_error('permissionUpdate', "<b class='text-danger'>", '</b>') : ''; ?>                                                      
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('permissionView')) ? 'has-error' : ''; ?>">
                                            
                                            <label class="control-label col-md-3">Permission View<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4">
                                                
                                                <select class="form-control" name="permissionView">
                                                    
                                                    <option <?php form_error('permissionView') ? $_POST['permissionView'] = 2 . 'selected' : ''; ?> value="">Select Permission View</option>
                                                    <option <?php echo (isset($_POST['permissionView']) && $_POST['permissionView'] == 1) ? 'selected' : ''; ?> value="1">Yes</option>
                                                    <option <?php echo (isset($_POST['permissionView']) && $_POST['permissionView'] == 0) ? 'selected' : ''; ?> value="0">No</option>
                                                    
                                                </select> 
                                                
                                                <?php echo (form_error('permissionView')) ? '<br>' . form_error('permissionView', "<b class='text-danger'>", '</b>') : ''; ?>                                                      
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('permissionDelete')) ? 'has-error' : ''; ?>">
                                            
                                            <label class="control-label col-md-3">Permission Delete<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4">
                                                
                                                <select class="form-control" name="permissionDelete">
                                                    
                                                    <option <?php form_error('permissionDelete') ? $_POST['permissionDelete'] = 2 . 'selected' : ''; ?> value="">Select Permission Delete</option>
                                                    <option <?php echo (isset($_POST['permissionDelete']) && $_POST['permissionDelete'] == 1) ? 'selected' : ''; ?> value="1">Yes</option>
                                                    <option <?php echo (isset($_POST['permissionDelete']) && $_POST['permissionDelete'] == 0) ? 'selected' : ''; ?> value="0">No</option>
                                                    
                                                </select> 
                                                
                                                <?php echo (form_error('permissionDelete')) ? '<br>' . form_error('permissionDelete', "<b class='text-danger'>", '</b>') : ''; ?>                                                      
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('status')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Status<span style="color: red"> *</span></label>
                                            <div class="col-md-4">
                                                
                                                <select class="form-control" name="status">
                                                    <option <?php form_error('status') ? $_POST['status'] = 2 . 'selected' : ''; ?> value="">Select Status</option>
                                                    <option <?php echo (isset($_POST['status']) && $_POST['status'] == 0) ? 'selected' : ''; ?> value="0">In-Active</option>
                                                    <option <?php echo (isset($_POST['status']) && $_POST['status'] == 1) ? 'selected' : ''; ?> value="1">Active</option>
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
                                                <button type="submit" class="btn btn-info">Add Access Control</button>
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
