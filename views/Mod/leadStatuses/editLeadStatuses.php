<?php 

//echo "<pre>";
//print_r($permissionData);
//die();

?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Edit Lead Status</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Lead Statuses</a></li>
                <li class="active">Edit Lead Status</li>
            </ol>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!--.row-->
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                
                <div class="row">
                    
                    <div class="col-md-10">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">EDIT LEAD STATUS</div>
                    </div>
                    
                    <div class="col-md-2 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/viewLeadStatus/'); echo!empty(@$leadStatusData->id) ? @$leadStatusData->id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> View Lead Status</a>                    
                        </div>
                    </div>
                    
                </div>
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        
                        <form action="<?php echo base_url('Mod/updateLeadStatus') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <div class="form-body">
                                
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        
                                        <div class="form-group <?php echo (form_error('statusName')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3">Status Name<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4" style="">
                                                
                                                <input type="text" class="form-control" placeholder="Enter Status Name" name="statusName" value="<?php echo (set_value('statusName') || form_error('statusName')) ? (set_value('statusName')) : (@$leadStatusData->status_name); ?>">
                                                <input type="hidden" name="leadStatusesId" value="<?php echo (@$leadStatusData->id) ? base64_encode(@$leadStatusData->id) : ''; ?>">
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
                                                
                                                <input type="text" class="form-control" placeholder="Enter Lead Type" name="leadType" value="<?php echo (set_value('leadType') || form_error('leadType')) ? (set_value('leadType')) : (@$leadStatusData->lead_type); ?>">
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
                                                    
<option <?php echo $CI->checkSelected('campaign_id', @$leadStatusData->campaign_id, $data = $campaign->campaign_id) ?> value="<?php echo $campaign->campaign_id ?>"><?php echo $campaign->campaign_name . " | " . $campaign->campaign_short_name ?></option>
                                                    
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
                                                    <option <?php echo $CI->checkSelected('status', @$leadStatusData->is_active, $data = 0) ?> value="0">In-Active</option>
                                                    <option <?php echo $CI->checkSelected('status', @$leadStatusData->is_active, $data = 1) ?> value="1">Active</option>
                                                    
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
                                                <button type="submit" class="btn btn-info">Edit Lead Status </button>
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
