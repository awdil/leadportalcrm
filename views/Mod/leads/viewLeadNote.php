<?php
//echo "<pre>";
//print_r($changeLeadStatus);
//die();
?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">View Lead Note</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">View Lead Note</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">View Lead Note</div>
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
                                        <th class="text-center">File Ref #</th> 
                                        <th class="text-center">First Name</th> 
                                        <th class="text-center">Last Name</th>                                         
                                        <th class="text-center">Phone</th>                                        
                                        <th class="text-center">Lead Status</th>                                         
                                        <th class="text-center">Lead Type</th>                                         
                                    </tr>

                                    <tr>
                                        <td class="text-center"><a><?php echo ($leadNote) ? $leadNote->lead_id : '' ?></a></td> 
                                        <td class="text-center"><a><?php echo @$leadNote->first_name; ?></a></td> 
                                        <td class="text-center"><a><?php echo @$leadNote->last_name; ?></a></td> 
                                        <td class="text-center"><a><?php echo @$leadNote->phone_1; ?></a></td> 
                                        <td class="text-center"><a><?php echo @$leadNote->Current_Lead_Status; ?></a></td> 
                                        <td class="text-center"><a><?php echo @$leadNote->Current_Lead_TYPE; ?></a></td> 
                                    </tr>

                                </table>
                            </div>
                        </div>

<!--                        <p style="font-weight: 600; color: #313131">Lead Note Detail</p>
                        
                        <hr style="width: 16%; float: left; margin-top: 0px">
 -->
                       <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Lead Note Detail</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                         
                        
                        <br>

                        <div class="col-md-12">                        

                            <div class="table-responsive" style="margin-top: 10px; margin-bottom: 20px ">

                                <table class="table table-striped table-bordered">                        

                                    <tr>
                                        <th width="30%">Lead Status</th>                                         
                                        <td style="text-align: left"><?php echo @$leadNote->status_name ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Lead Type</th>                                         
                                        <td style="text-align: left"><?php echo @$leadNote->lead_type ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Note</th> 
                                        <td style="text-align: left"><?php echo @$leadNote->note ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Note Added BY</th> 
                                        <td style="text-align: left"><?php echo @$leadNote->lead_addded_by ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Created Date</th>                                        
                                        <td style="text-align: left"><?php echo (@$leadNote->added_date) ? date("d M Y", strtotime(@$leadNote->added_date)) : '' ?></td>
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
