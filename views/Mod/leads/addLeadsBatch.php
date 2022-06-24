<?php 

//echo "<pre>";
//print_r($campaign_result);
//die();

?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">add Leads Batch</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Add Leads Batch</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">ADD LEADS BATCH</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/viewLead/') ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Manage Leads Batches</a>
                        </div>
                    </div>

                </div>
                
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        
                        <form action="<?php echo base_url('Mod/createLeadsBatch') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <div class="form-body">
                                
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        
                                        <div class="form-group <?php echo (form_error('batchName')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3">Batch Name<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-6" style="">
                                                
                                                <input required="" type="text" class="form-control" placeholder="Enter Batch Name" name="batchName" value="<?php echo (set_value('batchName') || form_error('batchName')) ? (set_value('batchName')) : ''; ?>">
                                                <?php echo (form_error('batchName')) ? '<br>' . form_error('batchName', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        
                                        <div class="form-group <?php echo (form_error('campaign_id')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3">Campaigns<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-6" style="">
                                                
                                                <select name="campaign_id" class="form-control" required="">
                                                    
                                                    <option value="">Select Campaign</option>
                                                    
                                                    <?php if($campaign_result): ?>
                                                        <?php foreach ($campaign_result as $campaign): ?>
                                                            <option value="<?php echo $campaign->campaign_id ?>"><?php echo $campaign->campaign_name ?></option>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                            
                                                </select>
                                                
                                                <?php echo (form_error('campaign_id')) ? '<br>' . form_error('campaign_id', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        
                                        <div class="form-group <?php echo (form_error('uploadBatchFile')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3">Upload Batch File<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-6" style="">
                                                
                                                <input required="" type="file" class="form-control" placeholder="Upload Batch File" name="uploadBatchFile" value="<?php echo (set_value('uploadBatchFile') || form_error('uploadBatchFile')) ? (set_value('uploadBatchFile')) : (@$changeLeadStatus->phone_1); ?>">
                                                <!--<a class="btn btn-info" style="border-radius: 0px; margin-top: 8px; margin-bottom: 8px" href="<?php // echo base_url('Mod/downloadSample') ?>">Download Sample</a>-->                                                
                                                <?php echo (form_error('uploadBatchFile')) ? '<br>' . form_error('uploadBatchFile', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                <b style="margin-top: 5px;" class="text-danger"><?php echo $this->session->flashdata('file_error'); ?></b>
                                                
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
                                                <button type="submit" class="btn btn-info">ADD BATCH </button>
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
