<?php
//echo "<pre>";
//print_r($file_headers);
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
            <h4 class="page-title">Batch Upload Profiler</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Batch Upload Profiler</li>
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
                        <div class="panel-heading" style="padding: 20px 0px 13px 30px">BATCH UPLOAD PROFILER</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/addLeadsBatch'); ?>" style="margin-top: 12px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Add Leads Batch</a>
                            <a href="<?php echo base_url(''); ?>" style="margin-top: 12px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Manage Leads Batches</a>                    
                        </div>
                    </div>

                </div>


                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    
                    <div class="panel-body">
                        
                        <form action="<?php echo base_url('Mod/Profiler/') . $leadInsertId ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <input type="hidden" name="leadInsertId" value="<?php echo $leadInsertId ?>">
                            
                            <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-6" style="margin-bottom: 10px;">
                                                    
                                                    <b>Select File FIELDS</b>                                                    

                                                </div>

                                                <div class="col-md-6" style="margin-bottom: 10px;">

                                                    <b>Select File FIELDS</b>                                                    

                                                </div>

                                            </div>
                                        </div>


                                
                                <?php if ($leads_db_fields): ?>
                                
                                <?php $i = 0; foreach($leads_db_fields as $leads_db_field): 
                                    
                                $db_select = str_replace("_", " ", $leads_db_field->Field);    
                                    
                                ?>
                                
                                
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <div class="col-md-12" style="">
                                                            <select class="form-control" name="db_fields[<?php echo $i; ?>]">
                                                                <option>Select Profiler</option>
                                                                <option selected="" value="<?php echo str_replace(" ", "_", $db_select); ?>"><?php echo ucfirst($db_select); ?></option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <div class="col-md-12" style="">
                                                            
                                                            <select class="form-control select2" name="file_fields[<?php echo $i ?>]" id="<?php echo $db_select ?>">
                                                                
                                                                <option value="">Select File Headers</option>
                                                                
                                                                <?php if($file_headers): ?>
                                                                
                                                                    <?php 

                                                                        foreach ($file_headers as $file_header): 
                                                                            foreach ($file_header as $header_key => $header): 

                                                                    ?>
                                                                
<option 
    <?php echo ( isset($_POST['file_fields'][$i]) && !empty($_POST['file_fields'][$i]) && $_POST['file_fields'][$i] == str_replace(" ", "_", $header) . "<->||||" . $header_key) ? 'selected' : '' ?> 
    value="<?php echo str_replace(" ", "_", $header) . "<->||||" . $header_key; ?>">
    <?php echo $header; ?>
</option>
                                                                    
                                                                    <?php 
                                                                            endforeach; 
                                                                        endforeach; 
                                                                    ?>
                                                                    
                                                                <?php endif; ?>
                                                                    
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    <?php $i++; endforeach; ?>
                                <?php endif; ?>
                                
                            </div>
                            
                            <hr class="m-t-0 m-b-40">
                            
                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            
                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button type="submit" class="btn btn-info">ADD BATCH </button>
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
</div>





<!-- /.container-fluid -->
