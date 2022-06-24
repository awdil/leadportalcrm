<?php // echo validation_errors(); ?>

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">ADD Permission</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Permissions</a></li>
                <li class="active">Add Permission</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">ADD PERMISSION</div>
                    </div>
                    
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/permissions'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Manage Permissions</a>                    
                        </div>
                    </div>
                    
                </div>
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        
                        <form action="<?php echo base_url('Mod/createPermission') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <div class="form-body">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('controllerName')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3">Controller Name<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4" style="">
                                                <input type="text" class="form-control" placeholder="Enter Controller Name" name="controllerName" value="<?php echo set_value('controllerName'); ?>">
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
                                                <input type="text" class="form-control" placeholder="Enter Role Name" name="actionName" value="<?php echo set_value('actionName'); ?>">
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
                                                    <option <?php echo (isset($_POST['isCrud']) && $_POST['isCrud'] == 1) ? 'selected' : ''; ?> value="1">Yes</option>
                                                    <option <?php echo (isset($_POST['isCrud']) && $_POST['isCrud'] == 0) ? 'selected' : ''; ?> value="0">No</option>
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
                                                
                                                <input type="text" class="form-control" readonly="" placeholder="Enter Sort Order" name="sortOrder" value="<?php echo ($sortOrder) ? $sortOrder : set_value('sortOrder'); ?>">
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
                                                <button type="submit" class="btn btn-info">Add Permission</button>
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
