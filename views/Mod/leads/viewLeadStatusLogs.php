<?php
//echo "<pre>";
//print_r($leads_statuses_logs);
//die();
?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">View Lead Status Log</h4> 
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">View Lead Status Log</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">View Lead Status Log</div>
                    </div>

                </div>

                <hr style="margin-bottom: 0; margin-top: 9px;">

                <div class="panel-wrapper collapse in" aria-expanded="true">
                    
                    <div class="panel-body" style="padding: 0px;">

                       <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Lead Status Log Detail</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                         
                        
                        <br>

                        <div class="col-md-12">                        

                            <div class="table-responsive" style="margin-top: 10px; margin-bottom: 20px ">

                                <table class="table table-striped table-bordered">                        

                                    <tr>
                                        <th width="30%">File Ref #</th>                                         
                                        <td style="text-align: left"><?php echo ($leads_statuses_logs->reference_id) ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="30%">Company Name</th>                                         
                                        <td style="text-align: left"><?php echo ($leads_statuses_logs->company_name) ? $leads_statuses_logs->company_name: 'All'; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="30%">Campaign Name</th>                                         
                                        <td style="text-align: left"><?php echo $leads_statuses_logs->campaign_name; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="30%">First Name</th>                                         
                                        <td style="text-align: left"><?php echo $leads_statuses_logs->first_name; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="30%">First Name</th>                                         
                                        <td style="text-align: left"><?php echo $leads_statuses_logs->first_name; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="30%">Last Name</th>                                         
                                        <td style="text-align: left"><?php echo $leads_statuses_logs->last_name; ?></td>
                                    </tr>

                                    <tr>
                                        <th width="30%">Phone</th>                                         
                                        <td style="text-align: left"><?php echo $leads_statuses_logs->phone_1; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="30%">Lead Status</th>                                         
                                        <td style="text-align: left"><?php echo $leads_statuses_logs->status_name; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Lead Type</th>                                         
                                        <td style="text-align: left"><?php echo $leads_statuses_logs->lead_type; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Status Changed BY User</th> 
                                        <td style="text-align: left"><?php echo $leads_statuses_logs->userName; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Status Change Date</th>                                        
                                        <td style="text-align: left"><?php echo $leads_statuses_logs->created_at; ?></td>
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
