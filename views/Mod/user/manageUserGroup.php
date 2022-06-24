<!-- Loading Image -->
<div class="loading" style="display: none;">
    <div class="content"><img src="<?php echo base_url('assets/images/loading.gif'); ?>"/></div>
</div>


<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Manage User Group</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li class="active">Manage User Group </li>
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
                    
                    
                    
                    <div class="col-sm-12">
                        
                        <div class="row">
                            
                            <div class="col-md-6">
                                <h3 style="padding: 17px 0px 0px 28px"><b>MANAGE USER GROUP</b></h3>
                            </div>
                            
                            <div class="col-md-6 hidden-xs">
                                <div style="text-align: right; margin-right: 20px ">                                
                                    <a href="<?php echo base_url('Mod/addUserGroup'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Add New User Group</a>
                                </div>
                            </div>
                            
                        </div>


                        <div class="white-box" style="padding: 0px 25px 25px 25px;">
                            <hr style="margin-top: 5px;">
                <div class="table-responsive">
                                <table id='user_group' class="table table-striped table-bordered">                        
                        <thead>
                            <tr>
                                <th class="text-center">SR #</th> 
                                <th class="text-center">Group Name</th> 
                                <th class="text-center">Status</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                        </tbody>
                        
                    </table>

                            </div>
                        </div>
                    </div>                
                
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                </div>
                <hr>
            </div>

            
            
        </div>
        
    </div>


</div>
<!-- /.container-fluid -->


