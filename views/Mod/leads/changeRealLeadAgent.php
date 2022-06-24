<?php 

//echo "<pre>";
//print_r($lead_user[0]->userName);
//print_r($partner);
//print_r($campaign[0]->campaign_name);
//print_r($campaign[0]->campaign_short_name);
//die();

?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Change Agent</h4> 
        </div>
        
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Change Lead Agent</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Change Agent</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/addLeadNote/'); echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Add Lead Note</a>
                        </div>
                    </div>

                </div>
                
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    
                    <div class="panel-body" style="padding: 0px;">
                        
                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Lead Details</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                        
                        
                        <br>
                        <div class="col-md-12">                        

<?php if($this->session->flashdata('update_lead_user_error')): ?> 
                                        
<div class="alert alert-danger" style="padding: 25px;">

                                        <p style="color: white;"><strong>Form Errors !</strong><p>
                                        <p style="color: white;">Please Correct The Form Errors and Submit Again.</p>
                                        <p style='color: white; margin-top: 21px;'><strong>
                                            <?php echo $this->session->flashdata('update_lead_user_error'); ?>
                                        </strong></p>                                        
                                        
</div>    
                                        
<?php endif; ?>
                            
                            <div class="table-responsive" style="margin-top: 10px; margin-bottom: 20px ">

                                <table class="table table-striped table-bordered">                        

                                    <tr>
                                        <th class="text-center">File Ref #</th> 
                                        <th class="text-center">User</th> 
                                        <th class="text-center">Partner</th>                                         
                                        <th class="text-center">Campaign</th>                                        
                                        <th class="text-center">Campaign Short Name</th>                                        
                                    </tr>


                                    <tr>
                                        <td class="text-center"><a><?php echo ($changeLeadStatus->lead_id) ? $changeLeadStatus->lead_id : '' ?></a></td> 
                                        <td class="text-center"><a><?php echo $lead_user[0]->userName ?></a></td>
                                        <td class="text-center"><a><?php echo is_array($partner) ? $partner[0]->company_name : $partner ?></a></td>
                                        <td class="text-center"><a><?php echo $campaign[0]->campaign_name ?></a></td>
                                        <td class="text-center"><a><?php echo $campaign[0]->campaign_short_name ?></a></td>
                                    </tr>
                                    
                                    <tr>
                                        <th class="text-center">First Name</th> 
                                        <th class="text-center">Last Name</th>                                         
                                        <th class="text-center">Phone</th>                                        
                                        <th colspan="3" class="text-center">Lead Status</th>                                         

                                    </tr>

                                    <tr>

                                        <td class="text-center"><a><?php echo @$changeLeadStatus->first_name; ?></a></td> 
                                        <td class="text-center"><a><?php echo @$changeLeadStatus->last_name; ?></a></td> 
                                        <td class="text-center"><a><?php echo @$changeLeadStatus->phone_1 ?></a></td> 
                                        <td colspan="3" class="text-center"><a>

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
                        
                        
                        <form action="<?php echo base_url('Mod/updateRealLeadAgnet') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <div class="form-body">
                                
                                <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                                    <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                        <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Change Agent</p>
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                    </div>
                                </div>
                                
                                
                                <div class="row" style="margin-top: 40px">

                                    <div class="col-md-12">
                                        
<?php if($this->session->flashdata('update_lead_user_error')): ?> 
                                        
<div class="alert alert-danger" style="padding: 25px;">

                                        <p style="color: white;"><strong>Form Errors !</strong><p>
                                        <p style="color: white;">Please Correct The Form Errors and Submit Again.</p>
                                        <p style='color: white; margin-top: 21px;'><strong>
                                            <?php echo $this->session->flashdata('update_lead_user_error'); ?>
                                        </strong></p>                                        
                                        
</div>    
                                        
<?php endif; ?>

                                        
                                        <div class="form-group <?php echo (form_error('users')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Select User<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-4">
                                                <?php //
                                                //echo "<pre>"; 
                                                //print_r($users); 
                                                //die(); 
                                                
                                                ?>
                                                <input type="hidden" name="leadId" value="<?php echo (@$changeLeadStatus->lead_id) ? base64_encode(@$changeLeadStatus->lead_id) : ''; ?>">                                            
                                                
                                                <select class="form-control select2" name="users">
                                                    
                                                    <option <?php // form_error('status') ? $_POST['status'] = 2 . 'selected' : ''; ?> value="">Select User</option>
                                                    <?php foreach ($users as $user): ?>
                                                    
                                                    <?php 

                                                        $user_name      = $user['userName'];
                                                        $company_name   = !empty($user['company_name']) ? $user['company_name'] : 'All'; 
                                                        $role_name      = $user['role_name'];
                                                        $disply_content = ucfirst($user_name) . " | " . ucfirst($company_name) . " | " . ucfirst($role_name); 

                                                    ?>                                                    
                                                    
                                                        <option <?php echo $CI->checkSelected('users', @$changeLeadStatus->user_id, $data = $user['id']); ?> value="<?php echo $user['id']; ?>"><?php echo $disply_content; ?></option>
                                                        
                                                    <?php endforeach; ?>
                                                        
                                                </select> 
                                                
                                                <?php echo (form_error('users')) ? '<br><br>' . form_error('users', "<b class='text-danger'>", '</b>') : ''; ?>                                                      
                                                
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
                                                <button type="submit" class="btn btn-info">Change Agent</button>
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
