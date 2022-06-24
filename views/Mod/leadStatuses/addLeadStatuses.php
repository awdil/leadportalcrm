


<?php // echo $sortOrder 

//echo "<pre>";
//print_r($campaigns);
//die();

?>

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add Lead Status</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Lead Statuses</a></li>
                <li class="active">Add Lead Status</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">ADD LEAD STATUS</div>
                    </div>
                    
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/manageLeadStatuses'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Manage Lead Statuses</a>                    
                        </div>
                    </div>
                    
                </div>
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        
                        <form action="<?php echo base_url('Mod/createLeadStatus') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <div class="form-body">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('statusName')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3">Status Name<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4" style="">
                                                <input type="text" class="form-control" placeholder="Enter Status Name" name="statusName" value="<?php echo set_value('statusName'); ?>">
                                                 <?php echo (form_error('statusName')) ? '<br>' . form_error('statusName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('leadType')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3">Lead Type<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4" style="">
                                                <input type="text" class="form-control" placeholder="Enter Lead Type" name="leadType" value="<?php echo set_value('leadType'); ?>">
                                                 <?php echo (form_error('leadType')) ? '<br>' . form_error('leadType', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('campaign_id')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3">Campaign<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4" style="">
                                                <select name="campaign_id" class="form-control">
                                                    <option value="">Select Campaign</option>
                                                    <?php 
                                                    if ($campaigns):
                                                        foreach ($campaigns as $campaign):
                                                    ?> 
                                                    
<option <?php echo (isset($_POST['campaign_id']) && $_POST['campaign_id'] == $campaign->campaign_id) ? 'selected' : ''; ?> value="<?php echo $campaign->campaign_id ?>"><?php echo $campaign->campaign_name . " | " . $campaign->campaign_short_name ?></option>
                                                    
                                                    <?php     
                                                        endforeach;
                                                    endif; ?>
                                                    
                                                </select>
                                                 <?php echo (form_error('campaign_id')) ? '<br>' . form_error('campaign_id', "<b class='text-danger'>", '</b>') : ''; ?>  
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
                                                <button type="submit" class="btn btn-info">Add Lead Status</button>
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
