<?php
//echo "<pre>";
//print_r($changeLeadStatus);
//die();
?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Edit Lead Note</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Edit Lead Note</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">Edit Lead Note</div>
                    </div>
                </div>

                <hr style="margin-bottom: 0; margin-top: 9px;">

                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body" style="padding: 0px;">
<!--                        <p style="font-weight: 600; color: #313131">Lead Details</p>
                        <hr style="width: 16%; float: left; margin-top: 0px">
                        -->
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
                                        <td class="text-center"><a><?php echo @$leadNote->status_name; ?></a></td> 
                                        <td class="text-center"><a><?php echo @$leadNote->lead_type; ?></a></td> 
                                    </tr>

                                </table>

                            </div>
                        </div>

                        <br>                        

                        <form action="<?php echo base_url('Mod/updateLeadNote') ?>" method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-top: 9%">

                            <div class="form-body">

<!--                                <p style="font-weight: 600; color: #313131">Edit Lead Note</p>

                                <hr style="width: 16%; float: left; margin-top: 0px">-->

                       <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Edit Lead Note</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                                
                                
                                <div class="row" style="margin-top: 40px">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('note')) ? 'has-error' : ''; ?>">
                                            <label class="control-label text-left col-md-3">Note<span style="color: red"> *</span></label>
                                            <input type="hidden" name="leadId" value="<?php echo (@$leadNote->lead_id) ? base64_encode(@$leadNote->lead_note_id) : ''; ?>">                                            
                                            <div class="col-md-4">

                                                <textarea name="note" style="resize: none" class="form-control" rows="6" placeholder="Enter Lead Note"><?php echo @$leadNote->note;  ?></textarea>
                                                <?php echo (form_error('note')) ? '<br>' . form_error('note', "<b class='text-danger'>", '</b>') : ''; ?>                                                      

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <hr class="m-t-0 m-b-40">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 10%; margin-top: -26px; margin-bottom: 19px">
                                                <button type="submit" class="btn btn-info">SUBMIT CHANGES </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </form>
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
