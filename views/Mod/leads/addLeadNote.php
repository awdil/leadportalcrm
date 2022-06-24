<?php
//echo "<pre>";
//print_r($changeLeadStatus);
//die();
?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add Lead Note</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Add Lead Note</li>
            </ol>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!--.row-->
<?php 
        if ($_SESSION['adminData']['role_name'] == "Admin"):    
?>    
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Add Lead Note</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/viewLead/');
echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> View Lead</a>
                            <?php if ($_SESSION['adminData']['role_name'] == "Admin"):   ?>
                            
                            <a href="<?php echo base_url('Mod/changeLeadStatus/');
echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Change Lead Status</a>
                            
                            <?php endif; ?>  
                            
                            <a href="<?php echo base_url('Mod/editLead/');
echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Edit this Lead</a>
                            
                        <a href="<?php echo base_url('Mod/New_messageWithLeads/');
echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Message</a>
        
                            
                        </div>
                    </div>

                </div>

                <hr style="margin-bottom: 0; margin-top: 9px;">

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
                                        <th class="text-center">File Ref #.</th> 
                                        <th class="text-center">First Name</th> 
                                        <th class="text-center">Last Name</th>                                         
                                        <th class="text-center">Phone</th>                                        
                                        <th class="text-center">Lead Status</th>                                         
                                    </tr>


                                    <tr>

                                        <td class="text-center"><a><?php echo ($changeLeadStatus) ? $changeLeadStatus->lead_id : '' ?></a></td> 
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

                        <form action="<?php echo base_url('Mod/createLeadNote') ?>" method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-top: 9%">

                            <div class="form-body">

<!--                                <p style="font-weight: 600; color: #313131">Add Note</p>
                                <hr style="width: 16%; float: left; margin-top: 0px">-->

                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Add Note</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                                
                                
                                <div class="row" style="margin-top: 40px">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('note')) ? 'has-error' : ''; ?>">
                                            <label class="control-label text-left col-md-3">Note<span style="color: red"> *</span></label>
                                            <input type="hidden" name="leadId" value="<?php echo (@$changeLeadStatus->lead_id) ? base64_encode(@$changeLeadStatus->lead_id) : ''; ?>">                                            
                                            <div class="col-md-8">
                                            <?php $contents = set_value('note', FALSE); ?>
                                                <?php $this->ckeditor->editor("note", $contents); ?>
                                                <?php echo form_error('note'); ?>
                                                <?php echo (form_error('note')) ? '<br>' . form_error('note', "<b class='text-danger'>", '</b>') : ''; ?>                                                      

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
                                                <button type="submit" class="btn btn-info">ADD LEAD NOTE </button>
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

<?php endif; ?>
<?php 
        if ($_SESSION['adminData']['role_name'] == "Supervisor"):    
?>    
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Add Lead Note</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/viewLead/');
echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> View Lead</a>
                        </div>
                    </div>

                </div>

                <hr style="margin-bottom: 0; margin-top: 9px;">

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
                                        <th class="text-center">File Ref #.</th> 
                                        <th class="text-center">First Name</th> 
                                        <th class="text-center">Last Name</th>                                         
                                        <th class="text-center">Phone</th>                                        
                                        <th class="text-center">Lead Status</th>                                         
                                    </tr>


                                    <tr>

                                        <td class="text-center"><a><?php echo ($changeLeadStatus) ? $changeLeadStatus->lead_id : '' ?></a></td> 
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

                        <form action="<?php echo base_url('Mod/createLeadNote') ?>" method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-top: 9%">

                            <div class="form-body">

<!--                                <p style="font-weight: 600; color: #313131">Add Note</p>
                                <hr style="width: 16%; float: left; margin-top: 0px">-->

                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Add Note</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                                
                                
                                <div class="row" style="margin-top: 40px">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('note')) ? 'has-error' : ''; ?>">
                                            <label class="control-label text-left col-md-3">Note<span style="color: red"> *</span></label>
                                            <input type="hidden" name="leadId" value="<?php echo (@$changeLeadStatus->lead_id) ? base64_encode(@$changeLeadStatus->lead_id) : ''; ?>">                                            
                                            <div class="col-md-4">

                                                <!--<textarea name="note" style="resize: none" class="form-control" rows="6" placeholder="Enter Lead Note"></textarea>-->
                                                 <?php $contents = set_value('note', FALSE); ?>
                                                <?php $this->ckeditor->editor("note", $contents); ?>
                                                <?php echo form_error('note'); ?>
                                                <?php echo (form_error('note')) ? '<br>' . form_error('note', "<b class='text-danger'>", '</b>') : ''; ?>  
<?php echo (form_error('note')) ? '<br>' . form_error('note', "<b class='text-danger'>", '</b>') : ''; ?>                                                      

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
                                                <button type="submit" class="btn btn-info">ADD LEAD NOTE </button>
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

<?php endif; ?>
    
<?php 
        if ($_SESSION['adminData']['role_name'] == "Closer"):    
?>    
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Add Lead Note</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/viewLead/');
echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> View Lead</a>
                        </div>
                    </div>

                </div>

                <hr style="margin-bottom: 0; margin-top: 9px;">

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
                                        <th class="text-center">File Ref #.</th> 
                                        <th class="text-center">First Name</th> 
                                        <th class="text-center">Last Name</th>                                         
                                        <th class="text-center">Phone</th>                                        
                                        <th class="text-center">Lead Status</th>                                         
                                    </tr>


                                    <tr>

                                        <td class="text-center"><a><?php echo ($changeLeadStatus) ? $changeLeadStatus->lead_id : '' ?></a></td> 
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

                        <form action="<?php echo base_url('Mod/createLeadNote') ?>" method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-top: 9%">

                            <div class="form-body">

<!--                                <p style="font-weight: 600; color: #313131">Add Note</p>
                                <hr style="width: 16%; float: left; margin-top: 0px">-->

                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Add Note</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                                
                                
                                <div class="row" style="margin-top: 40px">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('note')) ? 'has-error' : ''; ?>">
                                            <label class="control-label text-left col-md-3">Note<span style="color: red"> *</span></label>
                                            <input type="hidden" name="leadId" value="<?php echo (@$changeLeadStatus->lead_id) ? base64_encode(@$changeLeadStatus->lead_id) : ''; ?>">                                            
                                            <div class="col-md-4">

                                                <!--<textarea name="note" style="resize: none" class="form-control" rows="6" placeholder="Enter Lead Note"></textarea>-->
                                                 <?php $contents = set_value('note', FALSE); ?>
                                                <?php $this->ckeditor->editor("note", $contents); ?>
                                                <?php echo form_error('note'); ?>
                                                <?php echo (form_error('note')) ? '<br>' . form_error('note', "<b class='text-danger'>", '</b>') : ''; ?>  
<?php echo (form_error('note')) ? '<br>' . form_error('note', "<b class='text-danger'>", '</b>') : ''; ?>                                                      

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
                                                <button type="submit" class="btn btn-info">ADD LEAD NOTE </button>
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

<?php endif; ?>

<?php 
        if ($_SESSION['adminData']['role_name'] == "Claim Handler"):    
?>    
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Add Lead Note</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/viewLead/');
echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> View Lead</a>
                        </div>
                    </div>

                </div>

                <hr style="margin-bottom: 0; margin-top: 9px;">

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
                                        <th class="text-center">File Ref #.</th> 
                                        <th class="text-center">First Name</th> 
                                        <th class="text-center">Last Name</th>                                         
                                        <th class="text-center">Phone</th>                                        
                                        <th class="text-center">Lead Status</th>                                         
                                    </tr>


                                    <tr>

                                        <td class="text-center"><a><?php echo ($changeLeadStatus) ? $changeLeadStatus->lead_id : '' ?></a></td> 
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

                        <form action="<?php echo base_url('Mod/createLeadNote') ?>" method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-top: 9%">

                            <div class="form-body">

<!--                                <p style="font-weight: 600; color: #313131">Add Note</p>
                                <hr style="width: 16%; float: left; margin-top: 0px">-->

                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Add Note</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                                
                                
                                <div class="row" style="margin-top: 40px">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('note')) ? 'has-error' : ''; ?>">
                                            <label class="control-label text-left col-md-3">Note<span style="color: red"> *</span></label>
                                            <input type="hidden" name="leadId" value="<?php echo (@$changeLeadStatus->lead_id) ? base64_encode(@$changeLeadStatus->lead_id) : ''; ?>">                                            
                                            <div class="col-md-4">

                                                <!--<textarea name="note" style="resize: none" class="form-control" rows="6" placeholder="Enter Lead Note"></textarea>-->
                                                 <?php $contents = set_value('note', FALSE); ?>
                                                <?php $this->ckeditor->editor("note", $contents); ?>
                                                <?php echo form_error('note'); ?>
                                                <?php echo (form_error('note')) ? '<br>' . form_error('note', "<b class='text-danger'>", '</b>') : ''; ?>  
<?php echo (form_error('note')) ? '<br>' . form_error('note', "<b class='text-danger'>", '</b>') : ''; ?>                                                      

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
                                                <button type="submit" class="btn btn-info">ADD LEAD NOTE </button>
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

<?php endif; ?>  
<?php 
        if ($_SESSION['adminData']['role_name'] == "Client"):    
?>    
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Add Lead Note</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/viewLead/');
echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> View Lead</a>
                        </div>
                    </div>

                </div>

                <hr style="margin-bottom: 0; margin-top: 9px;">

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
                                        <th class="text-center">File Ref #.</th> 
                                        <th class="text-center">First Name</th> 
                                        <th class="text-center">Last Name</th>                                         
                                        <th class="text-center">Phone</th>                                        
                                        <th class="text-center">Lead Status</th>                                         
                                    </tr>


                                    <tr>

                                        <td class="text-center"><a><?php echo ($changeLeadStatus) ? $changeLeadStatus->lead_id : '' ?></a></td> 
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

                        <form action="<?php echo base_url('Mod/createLeadNote') ?>" method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-top: 9%">

                            <div class="form-body">

<!--                                <p style="font-weight: 600; color: #313131">Add Note</p>
                                <hr style="width: 16%; float: left; margin-top: 0px">-->

                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Add Note</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                                
                                
                                <div class="row" style="margin-top: 40px">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('note')) ? 'has-error' : ''; ?>">
                                            <label class="control-label text-left col-md-3">Note<span style="color: red"> *</span></label>
                                            <input type="hidden" name="leadId" value="<?php echo (@$changeLeadStatus->lead_id) ? base64_encode(@$changeLeadStatus->lead_id) : ''; ?>">                                            
                                            <div class="col-md-4">

                                                <!--<textarea name="note" style="resize: none" class="form-control" rows="6" placeholder="Enter Lead Note"></textarea>-->
                                                 <?php $contents = set_value('note', FALSE); ?>
                                                <?php $this->ckeditor->editor("note", $contents); ?>
                                                <?php echo form_error('note'); ?>
                                                <?php echo (form_error('note')) ? '<br>' . form_error('note', "<b class='text-danger'>", '</b>') : ''; ?>  
<?php echo (form_error('note')) ? '<br>' . form_error('note', "<b class='text-danger'>", '</b>') : ''; ?>                                                      

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
                                                <button type="submit" class="btn btn-info">ADD LEAD NOTE </button>
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

<?php endif; ?>  
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 style="padding: 17px 0px 0px 28px"><b>MANAGE LEAD NOTES</b></h3>
                            </div>
                        </div>

                        <div class="white-box" style="padding: 0px 25px 25px 25px;">
                            <hr style="margin-top: 5px;">
                            <div class="table-responsive">
                                <table id='leadNotes' class="table table-striped table-bordered">                        
                                    <thead>
                                        <tr>
                                            <th class="text-center">SR #</th> 
                                            <th class="text-center">First Name</th> 
                                            <th class="text-center">Last Name</th>
                                            <th class="text-center">Phone 1</th>
                                            <th class="text-center">Status Name</th>
                                            <!--<th class="text-center">Lead Type</th>-->
                                            <th class="text-center">Note</th>
                                            <th class="text-center">Added By</th>
                                            <th class="text-center">Added Date</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>



                                    </tbody>

                                </table>

                            </div>
                        </div>
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
