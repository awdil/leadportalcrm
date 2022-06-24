<?php 

//echo "<pre>";
//print_r($users);
//die();

?>


<style>
    
    tr td{
        text-align: left;
    }
    
</style>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">View User Group</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li class="active">View User Group</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">View User Group</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/editUserGroup/'); echo !empty($user_group_data->id) ? $user_group_data->id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-pencil"></i> Edit User Group</a>
                            <a href="<?php echo base_url('Mod/manageUserGroup'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Manage User Group</a>                    
                        </div>
                    </div>

                </div>


                <hr style="margin-bottom: 0; margin-top: 5px;">

                <div class="table-responsive" style="padding: 25px 15px 5px 15px">
                    <table style="border: 1px solid #e4e7ea" class="table table-bordered table-hover table-striped" >
                        <tbody>

                            <tr>
                                <th width="20%">User Group Name</th>
                                <td><?php echo!empty($user_group_data->group_name) ? $user_group_data->group_name : ''; ?></td>
                            </tr>
                            
                            <tr>
                                <th width="20%">Company</th>
                                <td><?php echo!empty($user_group_data->company_id) ? $user_group_data->company_id : ''; ?></td>
                            </tr>
                            
                            <tr>
                                <th width="20%">Users</th>
                                <td>
                                    <?php if ($users): ?>
                                    <table>
                                        <?php foreach($users as $user): ?>
                                        <tr>
                                            <td>
                                                <?php echo $user[0]->userName ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </table>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <th>Status</th>
                                <td><?php echo!empty($user_group_data->user_groups_status) ? 'Active' : 'In-Active'; ?></td>
                            </tr>

                            <tr>
                                <th>Created At</th>
                                <td><?php echo!empty($user_group_data->created_at) ? $user_group_data->created_at : ''; ?></td>                                                                                                                
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
