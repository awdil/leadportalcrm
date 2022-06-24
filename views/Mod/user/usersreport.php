<?php
/*echo "<pre>";
print_r($users);
die();*/
$permission_view = $_SESSION['adminData']['Leads']['permission_view'];
$permission_update = $_SESSION['adminData']['Leads']['permission_update'];
$permission_delete = $_SESSION['adminData']['Leads']['permission_delete'];
$permission_create = $_SESSION['adminData']['Leads']['permission_create'];
?>

<?php if(($permission_view ==1)&&($permission_update ==1)&&($permission_delete ==1)&&($permission_create ==1)){ ?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Leads Report</h4> 
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Leads Report</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">USERS LEADS REPORT</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/manageLeads/') ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Manage Leads</a>
                        </div>
                    </div>

                </div>

                <hr style="margin-bottom: 0; margin-top: 5px;">

                <div class="panel-wrapper collapse in" aria-expanded="true">
                        <div class="col-md-12" style="padding: 0px; margin-top: 10px;">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> USERS LEADS REPORT </p>
                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                    
                    <div class="panel-body">

                        <form action="<?php echo base_url('Mod/UsersReports') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <div class="form-body">

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="row">
                                            
                                            <div class="col-md-4">
                                                
                                                <div class="form-group" id="sel-user">
                                                    <div class="col-md-12" style="">
                                                        
                                                        <select class="form-control select2" name="user" id="user">
                                                            <option value="">Select User</option>
                                                            <option <?php echo ( set_value('user') == "All") ? 'selected' : '' ?> value="All">All</option>                                                                                                                        
                                                            <?php if(isset($users)): ?>
                                                                <?php foreach ($users as $user): ?>
                                                            <option <?php echo ($user->id == set_value('user')) ? 'selected' : ''  ?> value="<?php echo $user->id; ?>"><?php echo ucfirst($user->userName); ?></option>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </select>
                                                        
                                                        <div id="user_error"></div>                                                        
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-4">
                                                
                                                <div class="form-group" id="sel_lead_status">
                                                    <div class="col-md-12" style="">
                                                        
                                                        <select class="form-control select2" name="lead_status" id="lead_status">
                                                            <option value="">Select Lead Status</option>
                                                            <option <?php echo ( set_value('lead_status') == "All") ? 'selected' : '' ?> value="All">All</option>                                                                                                                        
                                                            <?php if($statuses): ?>
                                                                <?php foreach ($statuses as $status): ?>
                                                            <option <?php echo ($status->id == set_value('lead_status')) ? 'selected' : ''  ?> value="<?php echo $status->id; ?>"><?php echo ucfirst($status->Lead_Status_Name); ?></option>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </select>
                                                        <div id="lead_status_error"></div>                                                                                                                
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-4">
                                                
                                                <div class="form-group" id="sel-campaign-error">
                                                    <div class="col-md-12" style="">
                                                        
                                                        <select class="form-control select2" name="Campaign" id="campanign">
                                                            <option value="">Select Campaign</option>
                                                            <option <?php echo ( set_value('Campaign') == "All") ? 'selected' : '' ?> value="All">All</option>                                                            
                                                            
                                                            <?php if(isset($campaigns)): ?>
                                                                <?php foreach ($campaigns as $campaign): ?>
                                                                    <option <?php echo ($campaign->campaign_id == @$_POST['Campaign']) ? 'selected' : ''  ?> value="<?php echo $campaign->campaign_id; ?>"><?php echo ucfirst($campaign->campaign_name) . " | " . ucfirst($campaign->campaign_short_name); ?></option>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                                    
                                                        </select>
                                                        
                                                        <div id="campaign-error"></div>                                                        
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group" id="input_end_date">
                                                    <div class="col-md-12" style="">
                                                        <input type="text" name="end_date" placeholder="SELECT END DATE" id="end_date" class="form-control" readonly="" value="<?php echo set_value('end_date') ?>">
                                                        <div id="end_date_error"></div>                                                                                                                
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" id="input_start_date">
                                                    <div class="col-md-12" style="">
                                                        <input type="text" name="start_date" placeholder="SELECT START DATE" id="start_date" class="form-control" readonly="" value="<?php echo set_value('start_date') ?>">
                                                        <div id="start_date_error"></div>                                                                                                                
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-md-4">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12" style="text-align: center; padding: 0px 10px 10px 10px">
                                                            <button style=" width: 100%; " type="button" id="usersreportsubmit" class="btn btn-info col-md-2">SUBMIT</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            </div>
                                        </div>
                                        
                                        <hr class="m-t-0 m-b-40" style="margin-bottom: 19px!important">
                            
                                        

                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </form>
                            
                    </div>

                </div>
            </div>
        </div>
    </div>
    
<?php if (isset($UsersleadsReport)): ?>    
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">
                    <div class="col-sm-12">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h3 style="padding: 17px 0px 0px 28px"><b>USERS LEADS DETAILS REPORT</b></h3>
                            </div>
                        </div>
                        
                        <hr style="margin-top: 5px;">
                        
                        <div class="row">
                            <div class="col-md-12" style="">
                                <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                    <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> USERS LEADS DETAIL REPORT </p>
                                    <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                </div>
                            </div>                            
                        </div>                            
                        
                        
                        <div class="white-box" style="padding: 0px 25px 25px 25px;">
                            
                            <div class="table-responsive">
                                <table id='report' class="table table-striped table-bordered">                        
                                    <thead>
                                        <tr>
                                            <th class="text-center">SR #</th> 
                                            <th class="text-center">Name</th> 
                                            <th class="text-center">Center</th>
                                            <th class="text-center">CAMP</th>
                                            <th class="text-center">First Name</th>
                                            <th class="text-center">Last Name</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Lead Status</th>
                                            <th class="text-center">Lead Type</th>
                                            <th class="text-center">Created At</th>
                                            <th class="text-center">Actions</th>                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php if (!empty($UsersleadsReport)): ?>    
                                        <?php $i = 1; foreach ($UsersleadsReport as $report): ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $report->Name; ?></td>
                                            <td><?php echo $report->center_name; ?></td>
                                            <td><?php echo $report->campaign_name; ?></td>
                                            <td><?php echo $report->first_name; ?></td>
                                            <td><?php echo $report->last_name; ?></td>
                                            <td><?php echo $report->phone_1; ?></td>
                                            <td><?php echo $report->status_name; ?></td>
                                            <td><?php echo $report->status_type; ?></td>
                                            <!--<td><?php // echo $report->api_inseration_id; ?></td>-->
                                            <td><?php echo date("Y M d", strtotime($report->created_at)); ?></td>
                                            <td>
                                                <a title="Edit Lead" style="padding: 0 0 0 0" href="<?php echo base_url('Mod/editLead/') . $report->lead_id ?>" type="button" class="btn" ><i class="ti-pencil-alt"></i></a>
                                                <a title="View Lead" style="padding: 0 0 0 0" href="<?php echo base_url('Mod/viewLead/') . $report->lead_id ?>" type="button" class="btn" ><i class="ti-search"></i></a>                                                
                                                <button title="Delete Lead" style="padding: 0 0 0 0; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden;outline:none; color: red" class="" onclick="deleteLead('<?php echo $report->lead_id ?>')" name="del" data-value="<?php echo $report->lead_id ?>"><i class="ti-trash"></i></button>                                                
                                            </td>
                                        </tr>
                                        <?php $i++; endforeach; ?>
                                        <?php endif; ?>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>                
                </div>

            </div>
        </div>
    </div>    
    
    
    
<?php endif; ?>    
    
    
    
    
</div>
<!--./row-->
<!-- ============================================================== -->
<!-- .right-sidebar -->
</div>
<!-- /.container-fluid -->

<?php } ?>
