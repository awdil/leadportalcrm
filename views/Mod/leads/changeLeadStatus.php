<?php 

//echo "<pre>";
//print_r($changeLeadStatus);
//die();

?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Change Lead Status</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Change Lead Status</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Change Lead Status</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/viewLead/');
                                echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> View Lead</a>
                            <a href="<?php echo base_url('Mod/addLeadNote/'); echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Add Lead Note</a>
                            <a href="<?php echo base_url('Mod/editLead/'); echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Edit this Lead</a>
                             <a href="<?php echo base_url('Mod/New_messageWithLeads/'); echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>"  style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Message</a>
                        </div>
                    </div>

                </div>
                
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    
                    <div class="panel-body" style="padding: 0px;">
                    
<!--                        <p style="font-weight: 600; color: #313131">Lead Details</p>

                        <hr style="width: 16%; float: left; margin-top: 0px">-->
                        
                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Lead Details</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                        
                        
                        <br>
                        <div class="col-md-12">                        

                            <div class="table-responsive" style="margin-top: 10px; margin-bottom: 20px ">

                                <table class="table table-striped table-bordered">                        

                                    <tr>
                                        <th class="text-center">Sr No.</th> 
                                        <th class="text-center">First Name</th> 
                                        <th class="text-center">Last Name</th>                                         
                                        <th class="text-center">Phone</th>                                        
                                        <th class="text-center">Lead Status</th>                                         

                                    </tr>


                                    <tr>

                                        <td class="text-center"><a><?php echo ($changeLeadStatus) ? 1 : '' ?></a></td> 
                                        <td class="text-center"><a><?php echo @$changeLeadStatus->first_name; ?></a></td> 
                                        <td class="text-center"><a><?php echo @$changeLeadStatus->last_name; ?></a></td> 
                                        <td class="text-center"><a><?php echo @$changeLeadStatus->phone_1 ?></a></td> 
                                        <td class="text-center"><a>

                                                <?php if ($leadsStatuses): foreach ($leadsStatuses as $leadsStatus): ?>
                                                        <?php echo (@$changeLeadStatus->lead_status == $data = $leadsStatus->id) ? $leadsStatus->status_name : ''; ?>
                                                    <?php endforeach; ?>                                                
                                                <?php endif; ?>                                                

                                            </a>
                                        </td> 
                                    </tr>

                                </table>

                            </div>
                        </div>

                        <br>                        
                        
                        
                        <form action="<?php echo base_url('Mod/updateChangeLeadStatus') ?>" method="post" enctype="multipart/form-data" class="form-changeleads-status">
                            
                            <div class="form-body">
                                
<!--                                <p style="font-weight: 600; color: #313131">Change Lead Status</p>

                                <hr style="width: 16%; float: left; margin-top: 0px">-->

                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Change Lead Status</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                                
                                
                                <div class="row" style="margin-top: 40px">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('status')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Lead Status<span style="color: red"> *</span></label>
                                            <div class="col-md-4">
                                                
                                                <input type="hidden" name="leadId" value="<?php echo (@$changeLeadStatus->lead_id) ? base64_encode(@$changeLeadStatus->lead_id) : ''; ?>">                                            
                                                
                                                <select class="form-control select2" name="status">
                                                    
                                                    <option <?php form_error('status') ? $_POST['status'] = 2 . 'selected' : ''; ?> value="">Select Lead Status</option>
                                                    
                                                    <?php foreach ($leadsStatuses as $leadsStatus): ?>
                                                        <!--<option <?php // echo $CI->checkSelected('status', @$leadStatusData->is_active, $data = 1) ?> value="1">Active</option>-->
                                                        <option <?php echo $CI->checkSelected('status', @$changeLeadStatus->lead_status, $data = $leadsStatus->id) ?> value="<?php echo $leadsStatus->id ?>"><?php echo $leadsStatus->status_name ?></option>
                                                    <?php endforeach; ?>
                                                    
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
                                            
                                            <div class="col-md-12" style="text-align: Left; left: 10%; margin-top: -26px; margin-bottom: 19px">
                                                <button type="submit" class="btn btn-info">Submit Changes</button>
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
    
    
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                
                <div class="row">

                    <div class="col-md-6">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Lead Status Logs</div>
                    </div>

                    <div class="col-md-6">
<!--                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php // echo base_url('Mod/addLeadNote/'); echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Add Lead Note</a>
                        </div>-->
                    </div>

                </div>
                
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    
                    <div class="panel-body" style="padding: 0px;">
                    
<!--                        <p style="font-weight: 600; color: #313131">Lead Details</p>

                        <hr style="width: 16%; float: left; margin-top: 0px">-->
                        
<!--                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Lead Details</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>-->
                        
                        
                        <br>
                        <div class="col-md-12">                        

                            <div class="table-responsive" style="margin-top: 10px; margin-bottom: 20px ">

                                <table class="table table-striped table-bordered" id="lead_status_log">                        
                                    <thead>
                                        <tr>
                                            <th class="text-center">Sr No.</th> 
                                            <th class="text-center">File Ref #</th> 
                                            <!--<th class="text-center">Last Name</th>-->                                         
                                            <!--<th class="text-center">Phone</th>-->                                        
                                            <th class="text-center">Lead Status</th>                                         
                                            <th class="text-center">Lead Status Type</th>
                                            <th class="text-center">Lead Status Changed By</th>
                                            <th class="text-center">Date Of Status Changed</th>                                         
                                            <th class="text-center">Actions</th>                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>


                                </table>

                            </div>
                        </div>

                        <br>                        
                        
                        

                    </div>
                </div>
            </div>
        </div>
    </div>    
    
</div>
<!-- /.container-fluid -->
