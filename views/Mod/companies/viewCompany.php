<?php 

//echo "<pre>";
//print_r($campanyData->id);


?>


<style>
    
    tr td{
        text-align: left;
    }
    
</style>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">View Company</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Companies</a></li>
                <li class="active">View Company</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">VIEW COMPANY</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/editCompany/'); echo!empty($campanyData->id) ? $campanyData->id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-pencil"></i> Edit Company</a>
                            <a href="<?php echo base_url('Mod/companies'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Manage Companies</a>                    
                        </div>
                    </div>

                </div>


                <hr style="margin-bottom: 0; margin-top: 5px;">

                <div class="table-responsive" style="padding: 25px 15px 5px 15px">
                    <table style="border: 1px solid #e4e7ea" class="table table-bordered table-hover table-striped" >
                        <tbody>

                            <tr>
                                <th>Company Name</th>
                                <td><?php echo!empty($campanyData->company_name) ? $campanyData->company_name : ''; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Status</th>
                                <td><?php echo!empty($campanyData->status) ? 'Active' : 'In-Active'; ?></td>
                            </tr>

                            <tr>
                                <th>Created At</th>
                                <td><?php echo!empty($campanyData->created_at) ? $campanyData->created_at : ''; ?></td>                                                                                                                
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
