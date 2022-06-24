<?php
//echo "<pre>";
//print_r($changeLeadStatus);
//die();
?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">USER ACTIVITIES</h4> 
        </div>
        
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">View Activity</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">View Activity</div>
                    </div>

                </div>

                <hr style="margin-bottom: 0; margin-top: 9px;">

                <div class="panel-wrapper collapse in" aria-expanded="true">
                    
                    <div class="panel-body" style="padding: 0px;">
                        
                       <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> View User Activity</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                        
                        <br>

                        <div class="col-md-12">                        

                            <div class="table-responsive" style="margin-top: 10px; margin-bottom: 20px ">

                                <table class="table table-striped table-bordered">                        

                                    <tr>
                                        <th width="30%">User Name</th>                                         
                                        <td style="text-align: left"><?php echo @$activity_data->user_id ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Company Name</th>                                         
                                        <td style="text-align: left"><?php echo @$activity_data->company_id ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Note</th> 
                                        <td style="text-align: left"><?php echo @$activity_data->note ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>IP Address</th> 
                                        <td style="text-align: left"><?php echo @$activity_data->ip_address ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Platform</th> 
                                        <td style="text-align: left"><?php echo @$activity_data->platform ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Browser</th> 
                                        <td style="text-align: left"><?php echo @$activity_data->browser ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Browser Version</th> 
                                        <td style="text-align: left"><?php echo @$activity_data->browser_version ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Device Type</th> 
                                        <td style="text-align: left"><?php echo @$activity_data->device_type ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Created Date</th>                                        
                                        <td style="text-align: left"><?php echo (@$activity_data->created_at) ? date("d M Y H:i:s", strtotime(@$activity_data->created_at)) : '' ?></td>
                                    </tr>

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
