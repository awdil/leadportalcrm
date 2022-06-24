<?php
$permission_view = $_SESSION['adminData']['Permissions']['permission_view'];
$permission_update = $_SESSION['adminData']['Permissions']['permission_update'];
$permission_delete = $_SESSION['adminData']['Permissions']['permission_delete'];
$permission_create = $_SESSION['adminData']['Permissions']['permission_create'];
?>

<?php if($permission_update ==1){ ?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Edit Permission</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Permissions</a></li>
                <li class="active">Edit Permission</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">EDIT PERMISSION</div>
                    </div>
                    
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/viewPermission/'); echo!empty(@$permissionData->permission_id) ? @$permissionData->permission_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> View Permission</a>                    
                        </div>
                    </div>
                    
                </div>
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        
                        <form action="<?php echo base_url('Mod/updatePermission') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <div class="form-body">
                                
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        
                                        <div class="form-group <?php echo (form_error('controllerName')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3">Controller Name<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4" style="">
                                                
                                                <input type="text" class="form-control" placeholder="Controller Name" name="controllerName" value="<?php echo (set_value('controllerName') || form_error('controllerName')) ? (set_value('controllerName')) : (@$permissionData->controller_name); ?>">
                                                
                                                <input type="hidden" name="permissionId" value="<?php echo (@$permissionData->permission_id) ? base64_encode(@$permissionData->permission_id) : ''; ?>">
                                                
                                                <?php echo (form_error('controllerName')) ? '<br>' . form_error('controllerName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        
                                        <div class="form-group <?php echo (form_error('actionName')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3">Action Name<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4" style="">
                                                
                                                <input type="text" class="form-control" placeholder="Action Name" name="actionName" value="<?php echo (set_value('actionName') || form_error('actionName')) ? (set_value('actionName')) : (@$permissionData->action_name); ?>">
                                                <?php echo (form_error('actionName')) ? '<br>' . form_error('actionName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('isCrud')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3">Is Crud<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4" style="">
                                                
                                                <select class="form-control" name="isCrud">
                                                    
                                                    <option <?php form_error('isCrud') ? $_POST['isCrud'] = 2 . 'selected' : ''; ?> value="">Select Crud</option>
                                                    <option <?php echo $CI->checkSelected('isCrud', @$permissionData->is_crud, $data = 1) ?> value="1">Yes</option>
                                                    <option <?php echo $CI->checkSelected('isCrud', @$permissionData->is_crud, $data = 0) ?> value="0">No</option>
                                                    
                                                </select> 
                                                
                                                <?php echo (form_error('isCrud')) ? '<br>' . form_error('isCrud', "<b class='text-danger'>", '</b>') : ''; ?>                                                  
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        
                                        <div class="form-group <?php echo (form_error('sortOrder')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3">Sort Order<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4" style="">
                                                
                                                <input type="text" class="form-control" placeholder="Sort Order" name="sortOrder" value="<?php echo (set_value('sortOrder') || form_error('sortOrder')) ? (set_value('sortOrder')) : (@$permissionData->sort); ?>">
                                                <?php echo (form_error('sortOrder')) ? '<br>' . form_error('sortOrder', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                
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
                                                    
                                                    <option <?php form_error('status') ? $_POST['status'] = 2 . 'selected' : ''; ?> value="">Status</option>
                                                    <option <?php echo $CI->checkSelected('status', @$permissionData->is_active, $data = 0) ?> value="0">In-Active</option>
                                                    <option <?php echo $CI->checkSelected('status', @$permissionData->is_active, $data = 1) ?> value="1">Active</option>
                                                    
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
                                                <button type="submit" class="btn btn-info">Edit Permission</button>
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
<?php } ?>

