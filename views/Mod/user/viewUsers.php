<?php
$permission_view = $_SESSION['adminData']['Users']['permission_view'];
$permission_update = $_SESSION['adminData']['Users']['permission_update'];
$permission_delete = $_SESSION['adminData']['Users']['permission_delete'];
$permission_create = $_SESSION['adminData']['Users']['permission_create'];


?>

<?php if($permission_view == 1){ ?>
<div class="container-fluid">
    
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Manage Users</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li class="active">Manage Users</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">MANAGE USERS</div>
                    </div>
                    
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 10px ">
                            <a href="<?php echo base_url('Mod/AddUser'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Add New User</a>                    
                        </div>                        
                    </div>
                    
                </div>
                
                
                
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="table-responsive">
                    <table class="table table-hover manage-u-table" id='postsList'>
                        <thead>
                            <tr>
                                <th width="50" class="text-center">#</th>
                                <th class="text-center">Name</th> 
                                <th class="text-center">email</th>
                                <th class="text-center">Gender</th>
                                <th class="text-center">Date Of Birth</th>
                                <th class="text-center">Phone Number</th> 
                                <th class="text-center">User Name </th>
                                <th class="text-center">User Role</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">created_at</th>
                                <th class="text-center" width="300">MANAGE</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                <hr>
                <div style='text-align: center; margin-top: -16px' id='pagination'></div>
            </div>

            
            
        </div>
        
    </div>
    
    
    
    
</div>
<?php } ?>
<!-- /.container-fluid -->
