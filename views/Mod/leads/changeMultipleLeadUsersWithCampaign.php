<?php 

/*
echo "<pre>";
print_r($DualCampaignIdFlg);
die();
*/

?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Change Lead Users</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Change Lead Users</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Change Lead Users</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/manageLeads'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Manage Leads</a>
                        </div>
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
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Your Selected Leads Details</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                        
                        
                        <br>
                        <div class="col-md-12">                        

                            <div class="table-responsive" style="margin-top: 10px; margin-bottom: 20px ">

                                <table class="table table-striped table-bordered">                        

                                    <tr>
                                        <th class="text-center">Sr No.</th> 
                                        <th class="text-center">UserName</th>
                                        <th class="text-center">First Name</th> 
                                        <th class="text-center">Last Name</th> 
                                        <th class="text-center">Email</th> 
                                        <th class="text-center">Phone</th>    
                                        <th class="text-center">Campaign Short Name</th>    
                                        <th class="text-center">Lead Users</th>                                         

                                    </tr>
                                    
                                    <?php
                                    $i=1;
                                    foreach($LeadRecords as $singlearr){  
                                              /*  echo "<pre>";
                                                print_r($singlearr);
                                                die();*/
                                    ?>
                                      <?php foreach($singlearr as $singlead){ //print_r($singlead);  ?>
                                    <tr>
                                        <td class="text-center"><a><?php echo $i++; ?></a></td> 
                                        <td class="text-center"><a><?php echo $singlead->UserName; ?></a></td>
                                       <td class="text-center"><a><?php echo $singlead->first_name; ?></a></td>
                                        <td class="text-center"><a><?php echo $singlead->last_name; ?></a></td>
                                         <td class="text-center"><a><?php echo $singlead->email; ?></a></td>
                                       <td class="text-center"><a><?php echo $singlead->phone_1; ?></a></td> 
                                        <td class="text-center"><a><?php echo $singlead->campaign_short_name; ?></a></td>
                                        <td class="text-center"><a><?php echo $singlead->Users_name; ?></a></td> 
                                    </tr>
                                   <?php  }?>
                                    
                                    <?php  } ?>
                                </table>

                            </div>
                        </div>

                        <br>                        
                        
                        <?php if($DualCampaignIdFlg == 0) { ?> 
                        <form action="<?php echo base_url('Mod/MultipleupdateChangeLeadUsers') ?>" method="post" enctype="multipart/form-data" class="form-changeleads-Users">
                            
                            <div class="form-body">
                                
<!--                                <p style="font-weight: 600; color: #313131">Change Lead Users</p>

                                <hr style="width: 16%; float: left; margin-top: 0px">-->

                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Change Lead Users</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                                
                                
                                <div class="row" style="margin-top: 40px">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Users')) ? 'has-error' : ''; ?>">
                                            <label class="control-label col-md-3">Lead Users<span style="color: red"> *</span></label>
                                            <div class="col-md-4">
                                               <?php $postvalue = base64_encode(serialize($SlectedLeadRecords)); ?>


                                                <input type="hidden" name="Multipleleads_Id" value="<?php echo $postvalue; ?>">
                                                
                                                <select class="form-control select2" required name="Users">
                                                    
                                                    <option <?php form_error('Users') ? $_POST['Users'] = 2 . 'selected' : ''; ?> value="">Select Lead Users</option>
                                                    
                                                    <?php foreach ($leadsUserses as $leadsUsers): ?>
                                                        <!--<option <?php // echo $CI->checkSelected('Users', @$leadUsersData->is_active, $data = 1) ?> value="1">Active</option>-->
                                                        <option <?php echo $CI->checkSelected('Users', @$changeLeadUsers->lead_Users, $data = $leadsUsers->id) ?> value="<?php echo $leadsUsers->id ?>"><?php echo $leadsUsers->Users_name ?></option>
                                                    <?php endforeach; ?>
                                                    
                                                </select> 
                                                
                                                <?php echo (form_error('Users')) ? '<br>' . form_error('Users', "<b class='text-danger'>", '</b>') : ''; ?>                                                      
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
                        <?php } else { ?>
                        
                         <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #ff7676">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Your Selection contains more than one campaign, For Users changing lead Selection must be within one campaign</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                        <?php } ?>
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
