<?php 

//    echo "<pre>";
//    print_r($accessControlData);
//    die();

?>


<style>
    
    tr td{
        text-align: left;
    }
    
</style>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">View Access Control</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Access Controls</a></li>
                <li class="active">view Access Control</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <!-- ============================================================== -->
    <!-- Demo table -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">VIEW ACCESS CONTROL</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                                                        
                            <a href="<?php echo base_url('Mod/editAccessControl/'); echo!empty($accessControlData->id) ? $accessControlData->id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-pencil"></i> Edit Access Control</a>
                            <a href="<?php echo base_url('Mod/accessControls'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Manage Access Controls</a>                    
                        </div>
                    </div>

                </div>


                <hr style="margin-bottom: 0; margin-top: 5px;">

                <div class="table-responsive" style="padding: 25px 15px 5px 15px">
                    <table style="border: 1px solid #e4e7ea" class="table table-bordered table-hover table-striped" >
                        <tbody>

                            <tr>
                                <th>Role Name</th>
                                <td><?php echo!empty($accessControlData->role_name) ? $accessControlData->role_name : ''; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Controller Name</th>
                                <td><?php echo!empty($accessControlData->controller_name) ? $accessControlData->controller_name : ''; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Action Name</th>
                                <td><?php echo!empty($accessControlData->action_name) ? $accessControlData->action_name : ''; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Action Name</th>
                                <td><?php echo!empty($accessControlData->is_crud) ? 'Yes' : 'No'; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Sort Order</th>
                                <td><?php echo!empty($accessControlData->sort) ?  $accessControlData->sort : ''; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Permission Create</th>
                                <td><?php echo!empty($accessControlData->permission_create) ? 'Yes' : 'No'; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Permission Update</th>
                                <td><?php echo!empty($accessControlData->permission_update) ? 'Yes' : 'No'; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Permission View</th>
                                <td><?php echo!empty($accessControlData->permission_view) ? 'Yes' : 'No'; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Permission Delete</th>
                                <td><?php echo!empty($accessControlData->permission_delete) ? 'Yes' : 'No'; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Status</th>
                                <td><?php echo!empty($accessControlData->is_active) ? 'Active' : 'In-Active'; ?></td>
                            </tr>

                            <tr>
                                <th>Created At</th>
                                <td><?php echo!empty($accessControlData->created_at) ? $accessControlData->created_at : ''; ?></td>                                                                                                                
                            </tr>


                        </tbody>
                    </table>

                    


                </div>


                <hr>
                <div style='text-align: center; margin-top: -16px' id='pagination'></div>
            </div>



        </div>

    </div>




</div>
<!-- /.container-fluid -->
