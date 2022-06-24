<?php
//echo "<pre>";
//print_r($roleData);
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
            <h4 class="page-title">Batch Upload Summary</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Batch Upload Summary</li>
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
                        <div class="panel-heading" style="padding: 20px 0px 13px 30px">BATCH UPLOAD SUMMARY</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/addLeadsBatch'); ?>" style="margin-top: 12px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Add Leads Batch</a>
                            <a href="<?php echo base_url(''); ?>" style="margin-top: 12px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Manage Leads Batches</a>                    
                        </div>
                    </div>

                </div>

                <hr style="margin-top: 2px;">


                <ul class="nav nav-tabs" style="padding: 0px 0px 0 76px">
                    <li class="active"><a data-toggle="tab" href="#home">SUMMARY</a></li>
                    <li><a data-toggle="tab" href="#menu1">SUCCESS <?php echo ($_SESSION['SuccessInsert']) ? "(" . count($_SESSION['SuccessInsert']) . ")" : '' ?></a></li>
                    <li><a data-toggle="tab" href="#menu2">ERRORS  <?php echo ($_SESSION['SuccessErrors']) ? "(" . count($_SESSION['SuccessErrors']) . ")" : '' ?></a></li>
                </ul>

                <div class="tab-content" style="padding: 10px 10px 10px 10px;">

                    <div id="home" class="tab-pane fade in active">

                        <div class="panel-heading" style="padding: 5px 0px 21px 0px; margin-top: -16px ">UPLOAD SUMMARY</div>
                        <hr style="margin-top: -10px">
                        <div class="table-responsive">
                            
                            <table class="table table-striped table-bordered">                        
                                
                                    <tr>
                                        <th width="50%" class="text-center">TOTAL RECORDS</th> 
                                        <td class="text-center"><a><?php echo count($_SESSION['SuccessInsert']) + count($_SESSION['SuccessErrors']); ?></a></td> 
                                    </tr>
                                    
                                    <tr>
                                        <th class="text-center">SUCCESS INSERT</th> 
                                        <td class="text-center"><a><?php echo count($_SESSION['SuccessInsert']) ?></a></td> 
                                    </tr>
                                    
                                    <tr>
                                        <th class="text-center">TOTAL ERRORS</th> 
                                        <td class="text-center"><a><?php echo count($_SESSION['SuccessErrors']); ?></a></td> 
                                    </tr>

                            </table>

                        </div>

                    </div>

                    <div id="menu1" class="tab-pane fade">

                        <div class="panel-heading" style="padding: 5px 0px 21px 0px; margin-top: -16px ">SUCCESS</div>
                        <hr style="margin-top: -10px">
                        <div class="table-responsive">
                            
                            <table class="table table-striped table-bordered">                        

                                <tr>
                                    <th>SR NO.</th>
                                    <th>First Name</th>
                                    <th>Last Number</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                </tr>

                                
                                <?php 
                                    if ($_SESSION['SuccessInsert']):
                                        
                                        $si = 1;
                                        foreach ($_SESSION['SuccessInsert'] as $successInsert):
                                ?>

                                <tr>
                                    <td><?php echo $si; ?></td>
                                    <td><?php echo $successInsert['first_name'] ; ?></td>
                                    <td><?php echo $successInsert['last_name'] ?></td>
                                    <td><?php echo $successInsert['phone_1'] ?></td>
                                    <td>Record Inserted.</td>
                                </tr>
                                
                                
                                <?php
                                        $si++;
                                        endforeach;
                                        
                                    endif;
                                
                                ?>


                            </table>

                        </div>
                        
                        
                    </div>

                    <div id="menu2" class="tab-pane fade">
                        <div class="panel-heading" style="padding: 5px 0px 21px 0px; margin-top: -16px ">ERRORS</div>
                        <hr style="margin-top: -10px">
                        <div class="table-responsive">
                            
                            <table class="table table-striped table-bordered">                        
                                
                                <tr>
                                    <th>SR NO.</th>
                                    <th>First Name</th>
                                    <th>Last Number</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                </tr>

                                
                                <?php 
                                    if ($_SESSION['SuccessErrors']):
                                        
                                        $ei = 1;
                                        foreach ($_SESSION['SuccessErrors'] as $successErrors):
                                            
                                ?>

                                
                                <tr>
                                    <td><?php echo $ei; ?></td>
                                    <td><?php echo $successErrors['first_name'] ; ?></td>
                                    <td><?php echo $successErrors['last_name'] ?></td>
                                    <td><?php echo $successErrors['phone_1'] ?></td>
                                    <td>Record Not Inserted. - <?php echo $successErrors['error'] ?></td>
                                </tr>
                                
                                
                                <?php
                                        $ei++;
                                        endforeach;
                                        
                                    endif;
                                
                                ?>

                            </table>

                        </div>
                        


                    </div>

                </div>
            </div>
        </div>




    </div>
</div>





<!-- /.container-fluid -->
