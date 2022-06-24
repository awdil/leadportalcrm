<?php
//echo "<pre>";
//print_r($changeLeadStatus);
//die();
?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Linked Leads</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Linked Leads</li>
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
                        <!--<div class="panel-heading" style="padding: 28px 0px 13px 30px">Linked Leads</div>-->
                        <h3 style="padding: 17px 0px 0px 28px"><b>LEAD DETAIL </b></h3>                        
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/manageLeads/'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Manage Leads</a>
                        </div>
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
                        <?php
                        /*echo '<pre>';
                        print_r($data);
                        die();*/
                        ?>
                        <div class="col-md-12">                        

                            <div class="table-responsive" style="margin-top: 10px; margin-bottom: 20px ">

                                <table id='linkedLeads' class="table table-striped table-bordered">                        
                                    
                        <thead>
                            <tr>
                                <th class="text-center">SR #</th> 
                                <th class="text-center">Name</th> 
                                <th class="text-center">Company Name</th>
                                <th class="text-center">Client First Name</th>
                                <th class="text-center">Client Last Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Lead Status</th>
                                <th class="text-center">Lead Type</th>
                                <th class="text-center">API Inseration ID</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                    <tbody>
                    </tbody>
                                </table>
                            </div>
                        </div>

                        <br>                        


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">
                    <div class="col-sm-12">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h3 style="padding: 17px 0px 0px 28px"><b>MANAGE LINKED LEADS</b></h3>
                            </div>
                        </div>

                        <div class="white-box" style="padding: 0px 25px 25px 25px;">
                            <hr style="margin-top: 5px;">
                            <div class="table-responsive">
                                <table id='LeadDetails' class="table table-striped table-bordered">                        
                                    <thead>
                                        <tr>
                                <th class="text-center">SR #</th> 
                                <th class="text-center">Name</th> 
                                <th class="text-center">Company Name</th>
                                <th class="text-center">Client First Name</th>
                                <th class="text-center">Client Last Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Lead Status</th>
                                <th class="text-center">Lead Type</th>
                                <th class="text-center">API Inseration ID</th>
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
                </div>

            </div>
        </div>
    </div>    


    <!--./row-->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
</div>
<!-- /.container-fluid -->
