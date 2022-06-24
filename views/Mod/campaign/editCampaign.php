<?php
$permission_view = $_SESSION['adminData']['Campaigns']['permission_view'];
$permission_update = $_SESSION['adminData']['Campaigns']['permission_update'];
$permission_delete = $_SESSION['adminData']['Campaigns']['permission_delete'];
$permission_create = $_SESSION['adminData']['Campaigns']['permission_create'];
?>

<?php if($permission_update ==1){ ?>
<?php $CI = & get_instance(); ?>

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Edit Campaign</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Campaign</a></li>
                <li class="active">Edit Campaign</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">EDIT CAMPAIGN</div>
                    </div>
                    
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/viewCampaign/'); echo!empty($campaign->campaign_id) ? $campaign->campaign_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> View Campaign</a>
                        </div>
                    </div>
                    
                </div>
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        
                        <form action="<?php echo base_url('Mod/updateCampaign') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                            <div class="form-body">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('campaign_name')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3">Campaign Name<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4" style="">
                                                <input type="text" class="form-control" placeholder="Enter Campaign Name" name="campaign_name" value="<?php echo (set_value('campaign_name') || form_error('campaign_name')) ? (set_value('campaign_name')) : (@$campaign->campaign_name); ?>">
                                                <input type="hidden" name="campaign_id" value="<?php echo ($campaign->campaign_id) ? base64_encode($campaign->campaign_id) : ''; ?>">
                                                 <?php echo (form_error('campaign_name')) ? '<br>' . form_error('campaign_name', "<b class='text-danger'>", '</b>') : ''; ?>  
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('campaign_short_name')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3">Campaign Short Name<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4" style="">
                                                <input type="text" class="form-control" placeholder="Enter Campaign Short Name" name="campaign_short_name" value="<?php echo (set_value('campaign_short_name') || form_error('campaign_short_name')) ? (set_value('campaign_short_name')) : (@$campaign->campaign_short_name); ?>">
                                                 <?php echo (form_error('campaign_short_name')) ? '<br>' . form_error('campaign_short_name', "<b class='text-danger'>", '</b>') : ''; ?>  
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
                                                    <option <?php form_error('status') ? $_POST['status'] = 2 . 'selected' : ''; ?> value="">Select Campaign Status</option>
                                                    <option <?php echo $CI->checkSelected('status', $campaign->campaign_status, $data = 0) ?> value="0">In-Active</option>
                                                    <option <?php echo $CI->checkSelected('status', $campaign->campaign_status, $data = 1) ?> value="1">Active</option>
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
                                                <button type="submit" class="btn btn-info">Edit Campaign</button>
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