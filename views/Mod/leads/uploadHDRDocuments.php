<?php
/*echo "<pre>";
print_r($_SESSION['file_errors']['tenancy_agreement']);
print_r($_SESSION['file_errors']['pictures_of_disrepair']);
print_r($_SESSION['file_errors']['videos_of_disrepair']);
print_r($_SESSION['file_errors']['proof_of_rental_payment']);
print_r($_SESSION['file_errors']['survey_report']);
print_r($leads_documents);
die();*/
?>


<style>

    tr td{
        text-align: left;
    }

</style>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Upload Documents</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Upload Documents</li>
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
                        <div class="panel-heading" style="padding: 20px 0px 13px 30px"><?php echo $campaign_short_name ?> DOCUMENT</div>
                    </div>

                    <div class="col-md-6 hidden-xs">

                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/viewLead/') . $leadsData->lead_id; ?>" style="margin-top: 12px" class="btn btn-info btn-rounded" > View Lead</a>
                            <a href="<?php echo base_url('Mod/manageLeads'); ?>" style="margin-top: 12px" class="btn btn-info btn-rounded" > Manage Leads</a>                    
                        </div>

                    </div>

                </div>


                <hr style="margin-bottom: 0; margin-top: 5px;">

                <div class="panel-wrapper collapse in" aria-expanded="true">

                    <div class="col-md-12" style="padding: 0px; margin-top: 10px;">
                        <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> <?php echo $campaign_short_name ?> DOCUMENT </p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                        </div>
                    </div>

                    <?php if ($campaign_short_name == "HDR"){ ?>

                    <div class="panel-body">

                        <form id="form1" action="<?php echo base_url('Mod/uploadDocuments/') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <input type="hidden" name="leadId" value="<?php echo ($leadsData) ? $leadsData->lead_id : '' ?>">
                             <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Other Document </th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->other_files):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/') . $leads_document->other_files; ?>">
                                                                <?php echo $leads_document->other_files;  ?>
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>  
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_5')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document Any file<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_5" class="form-control" placeholder="Enter Document" name="Document_5" value="<?php echo set_value('Document_5'); ?>" >
                                                <?php echo (form_error('Document_5')) ? '<br>' . form_error('Document_5', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_5'])) {
                                                        $Document_5_error = $_SESSION['file_errors']['Document_5'];
                                                        echo "<br><b class='text-danger'>$Document_5_error</b>";
                                                        unset($_SESSION['file_errors']['Document_5']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            
                          
                            <div class="form-body">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Tenancy Agreement</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->tenancy_agreement_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/HDRDOCUMENTS/tenancy_agreement/') . $leads_document->tenancy_agreement_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/HDRDOCUMENTS/tenancy_agreement/thumb_images/') . $leads_document->tenancy_agreement_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                

                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_tenancy_agreement"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('tenancy_agreement')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Tenancy Agreement<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="tenancy_agreement" class="form-control" placeholder="Enter Tenancy Agreement" name="tenancy_agreement" value="<?php echo set_value('tenancy_agreement'); ?>" accept="image/*">
                                                <?php echo (form_error('tenancy_agreement')) ? '<br>' . form_error('tenancy_agreement', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['tenancy_agreement'])) {
                                                        $tenancy_agreement_error = $_SESSION['file_errors']['tenancy_agreement'];
                                                        echo "<br><b class='text-danger'>$tenancy_agreement_error</b>";
                                                        unset($_SESSION['file_errors']['tenancy_agreement']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">


                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >
                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Pictures of Disrepair</th>
                                                        <td width="80%">

                                                    <?php
                                                        foreach ($leads_documents as $leads_document):
                                                            $pictures_of_disrepair = json_decode($leads_document->pictures_of_disrepair_thumb_name);
                                                            $pictures_of_disrepair_org = json_decode($leads_document->pictures_of_disrepair_org_name);
                                                            if ($pictures_of_disrepair):

                                                //                                                                echo "<pre>";
                                                //                                                                print_r($pictures_of_disrepair);

                                                            foreach ($pictures_of_disrepair as $ke => $picture_of_disrepair):
                                                                if ($picture_of_disrepair):
                                                    ?>
                                                        <a target="_blank" href="<?php echo base_url('uploads/HDRDOCUMENTS/pictures_of_disrepair/') . $pictures_of_disrepair_org[$ke]; ?>">
                                                            <img class="img-responsive img-thumbnail" src="<?php echo base_url('uploads/HDRDOCUMENTS/pictures_of_disrepair/thumb_images/') . $picture_of_disrepair; ?>" alt="Pictures of Disrepair">
                                                        </a>                                                        

                                                    <?php
                                                                    endif;
                                                                endforeach;
                                                            endif;
                                                        endforeach;
                                                    ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                

                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_pictures_of_disrepair"></div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('pictures_of_disrepair')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Pictures of Disrepair<span style="color: red"> *</span></label>
                                            <div class="col-md-9" style="">
                                                <input type="file" class="form-control dropify" multiple="" id="pictures_of_disrepair" placeholder="Enter Pictures of Disrepair" name="pictures_of_disrepair[]" value="<?php echo set_value('pictures_of_disrepair'); ?>" accept="image/*">
                                                <?php echo (form_error('pictures_of_disrepair')) ? '<br>' . form_error('pictures_of_disrepair', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                <?php
                                                    if (isset($_SESSION['file_errors']['pictures_of_disrepair'])) {
                                                        foreach ($_SESSION['file_errors']['pictures_of_disrepair'] as $pictures_of_disrepair_error) {
                                                            $pictures_of_disrepair_error = $pictures_of_disrepair_error;
                                                            echo "<br><b class='text-danger'>$pictures_of_disrepair_error</b>";
                                                        }
                                                        unset($_SESSION['file_errors']['pictures_of_disrepair']);
                                                    }
                                                ?> 

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >
                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Videos Of Disrepair</th>
                                                        <td width="80%">

                                            <?php
                                                foreach ($leads_documents as $leads_document):
                                                    if ($leads_document->videos_of_disrepair_org_name):
                                            ?>

                                                <video controls="auto" class="img-responsive img-thumbnail" src="<?php echo base_url('uploads/HDRDOCUMENTS/videos_of_disrepair/') . $leads_document->videos_of_disrepair_org_name; ?>" alt="Videos Of Disrepair"></video>

                                            <?php
                                                    endif;
                                                endforeach;
                                            ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                

                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_videos_of_disrepair_loader"></div>
                                        <div id="files_videos_of_disrepair"></div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('videos_of_disrepair')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Videos Of Disrepair<span style="color: red"> *</span></label>
                                            <div class="col-md-9" style="">
                                                <input type="file" id="videos_of_disrepair" class="form-control" placeholder="Enter Videos Of Disrepair" id="videos_of_disrepair" name="videos_of_disrepair" value="<?php echo set_value('videos_of_disrepair'); ?>" accept="video/*">
                                                <?php echo (form_error('videos_of_disrepair')) ? '<br>' . form_error('videos_of_disrepair', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['videos_of_disrepair'])) {
                                                        $videos_of_disrepair_error = $_SESSION['file_errors']['videos_of_disrepair'];
                                                        echo "<br><b class='text-danger'>$videos_of_disrepair_error</b>";
                                                        unset($_SESSION['file_errors']['videos_of_disrepair']);
                                                    }
                                                ?> 

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">


                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Proof Of Rental Payment</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->proof_of_rental_payment_thumb_name):
                                                        ?>
                                                        <a target="_blank" href="<?php echo base_url('uploads/HDRDOCUMENTS/proof_of_rental_payment/') . $leads_document->proof_of_rental_payment_org_name; ?>">
                                                            <img class="img-responsive img-thumbnail" src="<?php echo base_url('uploads/HDRDOCUMENTS/proof_of_rental_payment/thumb_images/') . $leads_document->proof_of_rental_payment_thumb_name; ?>" alt="Proof Of Rental Payment">
                                                        </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                

                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_proof_of_rental_payment"></div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('proof_of_rental_payment')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Proof Of Rental Payment <span style="color: red"> *</span></label>
                                            <div class="col-md-9" style="">
                                                <input type="file" class="form-control" id="proof_of_rental_payment" placeholder="Enter Proof Of Rental Payment" name="proof_of_rental_payment" value="<?php echo set_value('proof_of_rental_payment'); ?>" accept="image/*">
                                                <?php echo (form_error('proof_of_rental_payment')) ? '<br>' . form_error('proof_of_rental_payment', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['proof_of_rental_payment'])) {
                                                        $proof_of_rental_payment_error = $_SESSION['file_errors']['proof_of_rental_payment'];
                                                        echo "<br><b class='text-danger'>$proof_of_rental_payment_error</b>";
                                                        unset($_SESSION['file_errors']['proof_of_rental_payment']);
                                                    }
                                                ?> 

                                            </div>
                                        </div>
                                    </div>

                                </div>


                                                <?php
                                                    if ($_SESSION['adminData']['role_name'] == "Admin"):
                                                ?>
                                                    <hr style="margin-top: 0px; margin-bottom: 15px;">

                                                    <?php if ($leads_documents): ?>

                                        <div class="row">
                                            <div class="col-md-12">

                                                <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >
                                                    <tbody>
                                                        <tr>
                                                            <th style="vertical-align: middle">Proof Of Rental Payment</th>
                                                            <td width="80%">

                                                    <?php
                                                        foreach ($leads_documents as $leads_document):
                                                            if ($leads_document->survey_report_thumb_name):
                                                    ?>
                                                                
                                                        <a target="_blank" href="<?php echo base_url('uploads/HDRDOCUMENTS/survey_report/') . $leads_document->survey_report_org_name; ?>">
                                                            <img class="img-responsive img-thumbnail" src="<?php echo base_url('uploads/HDRDOCUMENTS/survey_report/thumb_images/') . $leads_document->survey_report_thumb_name; ?>" alt="Survey Report">
                                                        </a>


                                                    <?php
                                                            endif;
                                                        endforeach;
                                                    ?>

                                                            </td>
                                                        </tr>
                                                    </tbody>                                
                                                </table>

                                            </div>
                                        </div>

                                        <hr style="margin-top: 0;">

                                    <?php endif; ?>                                

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="files_survey_report"></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('survey_report')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-3" style="text-align: left;">Survey Report <span style="color: red"> *</span></label>
                                                <div class="col-md-9" style="">
                                                    <input type="file" id="survey_report" class="form-control" placeholder="Enter Survey Report" name="survey_report" value="<?php echo set_value('survey_report'); ?>" accept="image/*">
                                                    <?php echo (form_error('survey_report')) ? '<br>' . form_error('survey_report', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                    <?php
                                                        if (isset($_SESSION['file_errors']['survey_report'])) {
                                                            $survey_report_error = $_SESSION['file_errors']['survey_report'];
                                                            echo "<br><b class='text-danger'>$survey_report_error</b>";
                                                            unset($_SESSION['file_errors']['survey_report']);
                                                        }
                                                    ?> 


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                <?php endif; ?>                                

                            </div>

                            <hr style="margin-top: 0px; margin-bottom: 15px;">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button style="width: 30%" type="submit" class="btn btn-info">ADD <?php echo $campaign_short_name ?> Document </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>

                        </form>
                        
                    </div>
                    
                    <?php }; ?>

                    <?php if ($campaign_short_name == "PI"){ ?>
                    
                    <div class="panel-body">
                        <form id="form1" action="<?php echo base_url('Mod/uploadDocuments/') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <input type="hidden" name="leadId" value="<?php echo ($leadsData) ? $leadsData->lead_id : '' ?>">
                            
                            <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Other Document </th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->other_files):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/') . $leads_document->other_files; ?>">
                                                                <?php echo $leads_document->other_files;  ?>
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>  
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_5')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document Any file<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_5" class="form-control" placeholder="Enter Document" name="Document_5" value="<?php echo set_value('Document_5'); ?>" >
                                                <?php echo (form_error('Document_5')) ? '<br>' . form_error('Document_5', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_5'])) {
                                                        $Document_5_error = $_SESSION['file_errors']['Document_5'];
                                                        echo "<br><b class='text-danger'>$Document_5_error</b>";
                                                        unset($_SESSION['file_errors']['Document_5']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            
                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 1</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_1_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/PIDOCUMENTS/Document_1/') . $leads_document->document_1_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/PIDOCUMENTS/Document_1/thumb_images/') . $leads_document->document_1_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                            
                            
                            
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_1"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_1')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3" style="text-align: left;">Document 1<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-9" style="">
                                                
                                                <input type="file" id="Document_1" class="form-control" placeholder="Enter Document 1" name="Document_1" value="<?php echo set_value('Document_1'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_1')) ? '<br>' . form_error('Document_1', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_1'])) {
                                                        $Document_1_error = $_SESSION['file_errors']['Document_1'];
                                                        echo "<br><b class='text-danger'>$Document_1_error</b>";
                                                        unset($_SESSION['file_errors']['Document_1']);
                                                    }
                                                ?> 
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                                

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 2</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_2_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/PIDOCUMENTS/Document_2/') . $leads_document->document_2_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/PIDOCUMENTS/Document_2/thumb_images/') . $leads_document->document_2_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_2"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_2')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 2<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_2" class="form-control" placeholder="Enter Document 2" name="Document_2" value="<?php echo set_value('Document_2'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_2')) ? '<br>' . form_error('Document_2', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_2'])) {
                                                        $Document_2_error = $_SESSION['file_errors']['Document_2'];
                                                        echo "<br><b class='text-danger'>$Document_2_error</b>";
                                                        unset($_SESSION['file_errors']['Document_2']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 3</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_3_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/PIDOCUMENTS/Document_3/') . $leads_document->document_3_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/PIDOCUMENTS/Document_3/thumb_images/') . $leads_document->document_3_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                


                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_3"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_3')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 3<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_3" class="form-control" placeholder="Enter Document 3" name="Document_3" value="<?php echo set_value('Document_3'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_3')) ? '<br>' . form_error('Document_3', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_3'])) {
                                                        $Document_3_error = $_SESSION['file_errors']['Document_3'];
                                                        echo "<br><b class='text-danger'>$Document_3_error</b>";
                                                        unset($_SESSION['file_errors']['Document_3']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 4</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_4_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/PIDOCUMENTS/Document_4/') . $leads_document->document_4_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/PIDOCUMENTS/Document_4/thumb_images/') . $leads_document->document_4_thumb_name; ?>" alt="">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_4"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_4')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 4<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_4" class="form-control" placeholder="Enter Document 4" name="Document_4" value="<?php echo set_value('Document_4'); ?>" >
                                                <?php echo (form_error('Document_4')) ? '<br>' . form_error('Document_4', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_4'])) {
                                                        $Document_4_error = $_SESSION['file_errors']['Document_4'];
                                                        echo "<br><b class='text-danger'>$Document_4_error</b>";
                                                        unset($_SESSION['file_errors']['Document_4']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                  <hr style="margin-top: 0px; margin-bottom: 15px;">

                                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >
                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Videos File</th>
                                                        <td width="80%">

                                            <?php
                                                foreach ($leads_documents as $leads_document):
                                                    if ($leads_document->videos_of_disrepair_org_name):
                                            ?>

                                                <video controls="auto" class="img-responsive img-thumbnail" src="<?php echo base_url('uploads/PIDOCUMENTS/videos_of_evidence/') . $leads_document->videos_of_disrepair_org_name; ?>" alt="Videos "></video>

                                            <?php
                                                    endif;
                                                endforeach;
                                            ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                

                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_videos_of_disrepair_loader"></div>
                                        <div id="files_videos_of_disrepair"></div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('videos_of_disrepair')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Videos File<span style="color: red"> *</span></label>
                                            <div class="col-md-9" style="">
                                                <input type="file" id="videos_of_disrepair" class="form-control" placeholder="Enter Videos Of Disrepair" id="videos_of_disrepair" name="videos_of_disrepair" value="<?php echo set_value('videos_of_disrepair'); ?>" accept="video/*">
                                                <?php echo (form_error('videos_of_disrepair')) ? '<br>' . form_error('videos_of_disrepair', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['videos_of_disrepair'])) {
                                                        $videos_of_disrepair_error = $_SESSION['file_errors']['videos_of_disrepair'];
                                                        echo "<br><b class='text-danger'>$videos_of_disrepair_error</b>";
                                                        unset($_SESSION['file_errors']['videos_of_disrepair']);
                                                    }
                                                ?> 

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('otherfile')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-2" style="text-align: left;">Others Files</label>
                                            
                                            <div class="col-md-2" style="">
                                                <input type="file" id="otherfile" class="form-control"  name="otherfile">
                                            </div>
                                            <div class="col-md-2" style="">
                                                <input type="file" id="otherfile1" class="form-control"  name="otherfile1">
                                            </div>
                                            <div class="col-md-2" style="">
                                                <input type="file" id="otherfile2" class="form-control"  name="otherfile2">
                                            </div>
                                            <div class="col-md-2" style="">
                                                <input type="file" id="otherfile3" class="form-control"  name="otherfile3">
                                            </div>
                                            <div class="col-md-2" style="">
                                                <input type="file" id="otherfile4" class="form-control"  name="otherfile4">
                                            </div>

                                        </div>
                                    </div>
                                </div>-->
                            </div>                        
                            
                            <hr style="margin-top: 0px; margin-bottom: 15px;">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button style="width: 30%" type="submit" class="btn btn-info">ADD <?php echo $campaign_short_name ?> Document </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    
                    
                    <?php }; ?>
                    
                    <?php if ($campaign_short_name == "CH"){ ?>
                        
                    <div class="panel-body">
                        <form id="form1" action="<?php echo base_url('Mod/uploadDocuments/') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <input type="hidden" name="leadId" value="<?php echo ($leadsData) ? $leadsData->lead_id : '' ?>">
                             <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Other Document </th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->other_files):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/') . $leads_document->other_files; ?>">
                                                                <?php echo $leads_document->other_files;  ?>
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>  
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_5')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document Any file<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_5" class="form-control" placeholder="Enter Document" name="Document_5" value="<?php echo set_value('Document_5'); ?>" >
                                                <?php echo (form_error('Document_5')) ? '<br>' . form_error('Document_5', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_5'])) {
                                                        $Document_5_error = $_SESSION['file_errors']['Document_5'];
                                                        echo "<br><b class='text-danger'>$Document_5_error</b>";
                                                        unset($_SESSION['file_errors']['Document_5']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            
                          
                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 1</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_1_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/CHDOCUMENTS/Document_1/') . $leads_document->document_1_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/CHDOCUMENTS/Document_1/thumb_images/') . $leads_document->document_1_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                            
                            
                            
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_1"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_1')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3" style="text-align: left;">Document 1<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-9" style="">
                                                
                                                <input type="file" id="Document_1" class="form-control" placeholder="Enter Document 1" name="Document_1" value="<?php echo set_value('Document_1'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_1')) ? '<br>' . form_error('Document_1', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_1'])) {
                                                        $Document_1_error = $_SESSION['file_errors']['Document_1'];
                                                        echo "<br><b class='text-danger'>$Document_1_error</b>";
                                                        unset($_SESSION['file_errors']['Document_1']);
                                                    }
                                                ?> 
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 2</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_2_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/CHDOCUMENTS/Document_2/') . $leads_document->document_2_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/CHDOCUMENTS/Document_2/thumb_images/') . $leads_document->document_2_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_2"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_2')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 2<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_2" class="form-control" placeholder="Enter Document 2" name="Document_2" value="<?php echo set_value('Document_2'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_2')) ? '<br>' . form_error('Document_2', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_2'])) {
                                                        $Document_2_error = $_SESSION['file_errors']['Document_2'];
                                                        echo "<br><b class='text-danger'>$Document_2_error</b>";
                                                        unset($_SESSION['file_errors']['Document_2']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 3</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_3_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/CHDOCUMENTS/Document_3/') . $leads_document->document_3_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/CHDOCUMENTS/Document_3/thumb_images/') . $leads_document->document_3_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                


                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_3"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_3')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 3<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_3" class="form-control" placeholder="Enter Document 3" name="Document_3" value="<?php echo set_value('Document_3'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_3')) ? '<br>' . form_error('Document_3', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_3'])) {
                                                        $Document_3_error = $_SESSION['file_errors']['Document_3'];
                                                        echo "<br><b class='text-danger'>$Document_3_error</b>";
                                                        unset($_SESSION['file_errors']['Document_3']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 4</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_4_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/CHDOCUMENTS/Document_4/') . $leads_document->document_4_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/CHDOCUMENTS/Document_4/thumb_images/') . $leads_document->document_4_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_4"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_4')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 4<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_4" class="form-control" placeholder="Enter Document 4" name="Document_4" value="<?php echo set_value('Document_4'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_4')) ? '<br>' . form_error('Document_4', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_4'])) {
                                                        $Document_4_error = $_SESSION['file_errors']['Document_4'];
                                                        echo "<br><b class='text-danger'>$Document_4_error</b>";
                                                        unset($_SESSION['file_errors']['Document_4']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>                        
                            
                            <hr style="margin-top: 0px; margin-bottom: 15px;">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button type="submit" class="btn btn-info">ADD <?php echo $campaign_short_name ?> Document </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    
                    <?php }; ?>
                    
                    <?php if ($campaign_short_name == "EC"){ ?>
                        
                    <div class="panel-body">
                        <form id="form1" action="<?php echo base_url('Mod/uploadDocuments/') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <input type="hidden" name="leadId" value="<?php echo ($leadsData) ? $leadsData->lead_id : '' ?>">
                             <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Other Document </th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->other_files):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/') . $leads_document->other_files; ?>">
                                                                <?php echo $leads_document->other_files;  ?>
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>  
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_5')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document Any file<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_5" class="form-control" placeholder="Enter Document" name="Document_5" value="<?php echo set_value('Document_5'); ?>" >
                                                <?php echo (form_error('Document_5')) ? '<br>' . form_error('Document_5', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_5'])) {
                                                        $Document_5_error = $_SESSION['file_errors']['Document_5'];
                                                        echo "<br><b class='text-danger'>$Document_5_error</b>";
                                                        unset($_SESSION['file_errors']['Document_5']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            
                          
                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 1</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_1_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/ECDOCUMENTS/Document_1/') . $leads_document->document_1_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/ECDOCUMENTS/Document_1/thumb_images/') . $leads_document->document_1_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                            
                            
                            
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_1"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_1')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3" style="text-align: left;">Document 1<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-9" style="">
                                                
                                                <input type="file" id="Document_1" class="form-control" placeholder="Enter Document 1" name="Document_1" value="<?php echo set_value('Document_1'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_1')) ? '<br>' . form_error('Document_1', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_1'])) {
                                                        $Document_1_error = $_SESSION['file_errors']['Document_1'];
                                                        echo "<br><b class='text-danger'>$Document_1_error</b>";
                                                        unset($_SESSION['file_errors']['Document_1']);
                                                    }
                                                ?> 
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 2</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_2_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/ECDOCUMENTS/Document_2/') . $leads_document->document_2_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/ECDOCUMENTS/Document_2/thumb_images/') . $leads_document->document_2_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_2"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_2')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 2<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_2" class="form-control" placeholder="Enter Document 2" name="Document_2" value="<?php echo set_value('Document_2'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_2')) ? '<br>' . form_error('Document_2', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_2'])) {
                                                        $Document_2_error = $_SESSION['file_errors']['Document_2'];
                                                        echo "<br><b class='text-danger'>$Document_2_error</b>";
                                                        unset($_SESSION['file_errors']['Document_2']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 3</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_3_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/ECDOCUMENTS/Document_3/') . $leads_document->document_3_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/ECDOCUMENTS/Document_3/thumb_images/') . $leads_document->document_3_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                


                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_3"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_3')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 3<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_3" class="form-control" placeholder="Enter Document 3" name="Document_3" value="<?php echo set_value('Document_3'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_3')) ? '<br>' . form_error('Document_3', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_3'])) {
                                                        $Document_3_error = $_SESSION['file_errors']['Document_3'];
                                                        echo "<br><b class='text-danger'>$Document_3_error</b>";
                                                        unset($_SESSION['file_errors']['Document_3']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 4</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_4_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/ECDOCUMENTS/Document_4/') . $leads_document->document_4_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/ECDOCUMENTS/Document_4/thumb_images/') . $leads_document->document_4_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_4"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_4')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 4<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_4" class="form-control" placeholder="Enter Document 4" name="Document_4" value="<?php echo set_value('Document_4'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_4')) ? '<br>' . form_error('Document_4', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_4'])) {
                                                        $Document_4_error = $_SESSION['file_errors']['Document_4'];
                                                        echo "<br><b class='text-danger'>$Document_4_error</b>";
                                                        unset($_SESSION['file_errors']['Document_4']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>                        
                            
                            <hr style="margin-top: 0px; margin-bottom: 15px;">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button type="submit" class="btn btn-info">ADD <?php echo $campaign_short_name ?> Document </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    
                    <?php }; ?>
                    
                    <?php if ($campaign_short_name == "TR"){ ?>
                        
                    <div class="panel-body">
                        <form id="form1" action="<?php echo base_url('Mod/uploadDocuments/') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <input type="hidden" name="leadId" value="<?php echo ($leadsData) ? $leadsData->lead_id : '' ?>">
                             <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Other Document </th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->other_files):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/') . $leads_document->other_files; ?>">
                                                                <?php echo $leads_document->other_files;  ?>
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>  
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_5')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document Any file<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_5" class="form-control" placeholder="Enter Document" name="Document_5" value="<?php echo set_value('Document_5'); ?>" >
                                                <?php echo (form_error('Document_5')) ? '<br>' . form_error('Document_5', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_5'])) {
                                                        $Document_5_error = $_SESSION['file_errors']['Document_5'];
                                                        echo "<br><b class='text-danger'>$Document_5_error</b>";
                                                        unset($_SESSION['file_errors']['Document_5']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            
                          
                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 1</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_1_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_1/') . $leads_document->document_1_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_1/thumb_images/') . $leads_document->document_1_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                            
                            
                            
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_1"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_1')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3" style="text-align: left;">Document 1<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-9" style="">
                                                
                                                <input type="file" id="Document_1" class="form-control" placeholder="Enter Document 1" name="Document_1" value="<?php echo set_value('Document_1'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_1')) ? '<br>' . form_error('Document_1', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_1'])) {
                                                        $Document_1_error = $_SESSION['file_errors']['Document_1'];
                                                        echo "<br><b class='text-danger'>$Document_1_error</b>";
                                                        unset($_SESSION['file_errors']['Document_1']);
                                                    }
                                                ?> 
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 2</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_2_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_2/') . $leads_document->document_2_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_2/thumb_images/') . $leads_document->document_2_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_2"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_2')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 2<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_2" class="form-control" placeholder="Enter Document 2" name="Document_2" value="<?php echo set_value('Document_2'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_2')) ? '<br>' . form_error('Document_2', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_2'])) {
                                                        $Document_2_error = $_SESSION['file_errors']['Document_2'];
                                                        echo "<br><b class='text-danger'>$Document_2_error</b>";
                                                        unset($_SESSION['file_errors']['Document_2']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 3</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_3_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_3/') . $leads_document->document_3_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_3/thumb_images/') . $leads_document->document_3_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                


                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_3"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_3')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 3<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_3" class="form-control" placeholder="Enter Document 3" name="Document_3" value="<?php echo set_value('Document_3'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_3')) ? '<br>' . form_error('Document_3', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_3'])) {
                                                        $Document_3_error = $_SESSION['file_errors']['Document_3'];
                                                        echo "<br><b class='text-danger'>$Document_3_error</b>";
                                                        unset($_SESSION['file_errors']['Document_3']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 4</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_4_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_4/') . $leads_document->document_4_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_4/thumb_images/') . $leads_document->document_4_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_4"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_4')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 4<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_4" class="form-control" placeholder="Enter Document 4" name="Document_4" value="<?php echo set_value('Document_4'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_4')) ? '<br>' . form_error('Document_4', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_4'])) {
                                                        $Document_4_error = $_SESSION['file_errors']['Document_4'];
                                                        echo "<br><b class='text-danger'>$Document_4_error</b>";
                                                        unset($_SESSION['file_errors']['Document_4']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>                        
                            
                            <hr style="margin-top: 0px; margin-bottom: 15px;">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button type="submit" class="btn btn-info">ADD <?php echo $campaign_short_name ?> Document </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    
                    <?php }; ?>
                    
                    <?php if ($campaign_short_name == "SO"){ ?>
                        
                    <div class="panel-body">
                        <form id="form1" action="<?php echo base_url('Mod/uploadDocuments/') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <input type="hidden" name="leadId" value="<?php echo ($leadsData) ? $leadsData->lead_id : '' ?>">
                             <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Other Document </th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->other_files):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/') . $leads_document->other_files; ?>">
                                                                <?php echo $leads_document->other_files;  ?>
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>  
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_5')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document Any file<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_5" class="form-control" placeholder="Enter Document" name="Document_5" value="<?php echo set_value('Document_5'); ?>" >
                                                <?php echo (form_error('Document_5')) ? '<br>' . form_error('Document_5', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_5'])) {
                                                        $Document_5_error = $_SESSION['file_errors']['Document_5'];
                                                        echo "<br><b class='text-danger'>$Document_5_error</b>";
                                                        unset($_SESSION['file_errors']['Document_5']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            
                          
                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 1</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_1_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/SOLICITORDOCUMENTS/Document_1/') . $leads_document->document_1_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/SOLICITORDOCUMENTS/Document_1/thumb_images/') . $leads_document->document_1_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                            
                            
                            
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_1"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_1')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3" style="text-align: left;">Document 1<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-9" style="">
                                                
                                                <input type="file" id="Document_1" class="form-control" placeholder="Enter Document 1" name="Document_1" value="<?php echo set_value('Document_1'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_1')) ? '<br>' . form_error('Document_1', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_1'])) {
                                                        $Document_1_error = $_SESSION['file_errors']['Document_1'];
                                                        echo "<br><b class='text-danger'>$Document_1_error</b>";
                                                        unset($_SESSION['file_errors']['Document_1']);
                                                    }
                                                ?> 
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 2</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_2_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/SOLICITORDOCUMENTS/Document_2/') . $leads_document->document_2_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/SOLICITORDOCUMENTS/Document_2/thumb_images/') . $leads_document->document_2_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_2"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_2')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 2<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_2" class="form-control" placeholder="Enter Document 2" name="Document_2" value="<?php echo set_value('Document_2'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_2')) ? '<br>' . form_error('Document_2', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_2'])) {
                                                        $Document_2_error = $_SESSION['file_errors']['Document_2'];
                                                        echo "<br><b class='text-danger'>$Document_2_error</b>";
                                                        unset($_SESSION['file_errors']['Document_2']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 3</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_3_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/SOLICITORDOCUMENTS/Document_3/') . $leads_document->document_3_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/SOLICITORDOCUMENTS/Document_3/thumb_images/') . $leads_document->document_3_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                


                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_3"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_3')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 3<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_3" class="form-control" placeholder="Enter Document 3" name="Document_3" value="<?php echo set_value('Document_3'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_3')) ? '<br>' . form_error('Document_3', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_3'])) {
                                                        $Document_3_error = $_SESSION['file_errors']['Document_3'];
                                                        echo "<br><b class='text-danger'>$Document_3_error</b>";
                                                        unset($_SESSION['file_errors']['Document_3']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 4</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_4_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/SOLICITORDOCUMENTS/Document_4/') . $leads_document->document_4_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/SOLICITORDOCUMENTS/Document_4/thumb_images/') . $leads_document->document_4_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_4"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_4')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 4<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_4" class="form-control" placeholder="Enter Document 4" name="Document_4" value="<?php echo set_value('Document_4'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_4')) ? '<br>' . form_error('Document_4', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_4'])) {
                                                        $Document_4_error = $_SESSION['file_errors']['Document_4'];
                                                        echo "<br><b class='text-danger'>$Document_4_error</b>";
                                                        unset($_SESSION['file_errors']['Document_4']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>                        
                            
                            <hr style="margin-top: 0px; margin-bottom: 15px;">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button type="submit" class="btn btn-info">ADD <?php echo $campaign_short_name ?> Document </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    
                    <?php }; ?>
                    
                    <?php if ($campaign_short_name == "MIB"){ ?>
                        
                    <div class="panel-body">
                        <form id="form1" action="<?php echo base_url('Mod/uploadDocuments/') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <input type="hidden" name="leadId" value="<?php echo ($leadsData) ? $leadsData->lead_id : '' ?>">
                             <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Other Document </th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->other_files):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/') . $leads_document->other_files; ?>">
                                                                <?php echo $leads_document->other_files;  ?>
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>  
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_5')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document Any file<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_5" class="form-control" placeholder="Enter Document" name="Document_5" value="<?php echo set_value('Document_5'); ?>" >
                                                <?php echo (form_error('Document_5')) ? '<br>' . form_error('Document_5', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_5'])) {
                                                        $Document_5_error = $_SESSION['file_errors']['Document_5'];
                                                        echo "<br><b class='text-danger'>$Document_5_error</b>";
                                                        unset($_SESSION['file_errors']['Document_5']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            
                          
                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 1</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_1_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_1/') . $leads_document->document_1_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_1/thumb_images/') . $leads_document->document_1_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                            
                            
                            
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_1"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_1')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3" style="text-align: left;">Document 1<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-9" style="">
                                                
                                                <input type="file" id="Document_1" class="form-control" placeholder="Enter Document 1" name="Document_1" value="<?php echo set_value('Document_1'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_1')) ? '<br>' . form_error('Document_1', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_1'])) {
                                                        $Document_1_error = $_SESSION['file_errors']['Document_1'];
                                                        echo "<br><b class='text-danger'>$Document_1_error</b>";
                                                        unset($_SESSION['file_errors']['Document_1']);
                                                    }
                                                ?> 
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 2</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_2_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_2/') . $leads_document->document_2_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_2/thumb_images/') . $leads_document->document_2_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_2"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_2')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 2<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_2" class="form-control" placeholder="Enter Document 2" name="Document_2" value="<?php echo set_value('Document_2'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_2')) ? '<br>' . form_error('Document_2', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_2'])) {
                                                        $Document_2_error = $_SESSION['file_errors']['Document_2'];
                                                        echo "<br><b class='text-danger'>$Document_2_error</b>";
                                                        unset($_SESSION['file_errors']['Document_2']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 3</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_3_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_3/') . $leads_document->document_3_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_3/thumb_images/') . $leads_document->document_3_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                


                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_3"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_3')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 3<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_3" class="form-control" placeholder="Enter Document 3" name="Document_3" value="<?php echo set_value('Document_3'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_3')) ? '<br>' . form_error('Document_3', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_3'])) {
                                                        $Document_3_error = $_SESSION['file_errors']['Document_3'];
                                                        echo "<br><b class='text-danger'>$Document_3_error</b>";
                                                        unset($_SESSION['file_errors']['Document_3']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 4</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_4_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_4/') . $leads_document->document_4_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_4/thumb_images/') . $leads_document->document_4_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_4"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_4')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 4<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_4" class="form-control" placeholder="Enter Document 4" name="Document_4" value="<?php echo set_value('Document_4'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_4')) ? '<br>' . form_error('Document_4', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_4'])) {
                                                        $Document_4_error = $_SESSION['file_errors']['Document_4'];
                                                        echo "<br><b class='text-danger'>$Document_4_error</b>";
                                                        unset($_SESSION['file_errors']['Document_4']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>                        
                            
                            <hr style="margin-top: 0px; margin-bottom: 15px;">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button type="submit" class="btn btn-info">ADD <?php echo $campaign_short_name ?> Document </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    
                    <?php }; ?>
                    <?php if ($campaign_short_name == "CICA"){ ?>
                        
                    <div class="panel-body">
                        <form id="form1" action="<?php echo base_url('Mod/uploadDocuments/') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <input type="hidden" name="leadId" value="<?php echo ($leadsData) ? $leadsData->lead_id : '' ?>">
                             <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Other Document </th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->other_files):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/') . $leads_document->other_files; ?>">
                                                                <?php echo $leads_document->other_files;  ?>
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>  
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_5')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document Any file<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_5" class="form-control" placeholder="Enter Document" name="Document_5" value="<?php echo set_value('Document_5'); ?>" >
                                                <?php echo (form_error('Document_5')) ? '<br>' . form_error('Document_5', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_5'])) {
                                                        $Document_5_error = $_SESSION['file_errors']['Document_5'];
                                                        echo "<br><b class='text-danger'>$Document_5_error</b>";
                                                        unset($_SESSION['file_errors']['Document_5']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            
                          
                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 1</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_1_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_1/') . $leads_document->document_1_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_1/thumb_images/') . $leads_document->document_1_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                            
                            
                            
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_1"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_1')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3" style="text-align: left;">Document 1<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-9" style="">
                                                
                                                <input type="file" id="Document_1" class="form-control" placeholder="Enter Document 1" name="Document_1" value="<?php echo set_value('Document_1'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_1')) ? '<br>' . form_error('Document_1', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_1'])) {
                                                        $Document_1_error = $_SESSION['file_errors']['Document_1'];
                                                        echo "<br><b class='text-danger'>$Document_1_error</b>";
                                                        unset($_SESSION['file_errors']['Document_1']);
                                                    }
                                                ?> 
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 2</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_2_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_2/') . $leads_document->document_2_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_2/thumb_images/') . $leads_document->document_2_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_2"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_2')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 2<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_2" class="form-control" placeholder="Enter Document 2" name="Document_2" value="<?php echo set_value('Document_2'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_2')) ? '<br>' . form_error('Document_2', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_2'])) {
                                                        $Document_2_error = $_SESSION['file_errors']['Document_2'];
                                                        echo "<br><b class='text-danger'>$Document_2_error</b>";
                                                        unset($_SESSION['file_errors']['Document_2']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 3</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_3_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_3/') . $leads_document->document_3_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_3/thumb_images/') . $leads_document->document_3_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                


                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_3"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_3')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 3<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_3" class="form-control" placeholder="Enter Document 3" name="Document_3" value="<?php echo set_value('Document_3'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_3')) ? '<br>' . form_error('Document_3', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_3'])) {
                                                        $Document_3_error = $_SESSION['file_errors']['Document_3'];
                                                        echo "<br><b class='text-danger'>$Document_3_error</b>";
                                                        unset($_SESSION['file_errors']['Document_3']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 4</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_4_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_4/') . $leads_document->document_4_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_4/thumb_images/') . $leads_document->document_4_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_4"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_4')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 4<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_4" class="form-control" placeholder="Enter Document 4" name="Document_4" value="<?php echo set_value('Document_4'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_4')) ? '<br>' . form_error('Document_4', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_4'])) {
                                                        $Document_4_error = $_SESSION['file_errors']['Document_4'];
                                                        echo "<br><b class='text-danger'>$Document_4_error</b>";
                                                        unset($_SESSION['file_errors']['Document_4']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>                        
                            
                            <hr style="margin-top: 0px; margin-bottom: 15px;">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button type="submit" class="btn btn-info">ADD <?php echo $campaign_short_name ?> Document </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    
                    <?php }; ?>
                    <?php if ($campaign_short_name == "EM"){ ?>
                        
                    <div class="panel-body">
                        <form id="form1" action="<?php echo base_url('Mod/uploadDocuments/') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <input type="hidden" name="leadId" value="<?php echo ($leadsData) ? $leadsData->lead_id : '' ?>">
                             <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Other Document </th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->other_files):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/') . $leads_document->other_files; ?>">
                                                                <?php echo $leads_document->other_files;  ?>
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>  
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_5')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document Any file<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_5" class="form-control" placeholder="Enter Document" name="Document_5" value="<?php echo set_value('Document_5'); ?>" >
                                                <?php echo (form_error('Document_5')) ? '<br>' . form_error('Document_5', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_5'])) {
                                                        $Document_5_error = $_SESSION['file_errors']['Document_5'];
                                                        echo "<br><b class='text-danger'>$Document_5_error</b>";
                                                        unset($_SESSION['file_errors']['Document_5']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            
                          
                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 1</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_1_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_1/') . $leads_document->document_1_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_1/thumb_images/') . $leads_document->document_1_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                            
                            
                            
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_1"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_1')) ? 'has-error' : ''; ?> ">
                                            
                                            <label class="control-label col-md-3" style="text-align: left;">Document 1<span style="color: red"> *</span></label>
                                            
                                            <div class="col-md-9" style="">
                                                
                                                <input type="file" id="Document_1" class="form-control" placeholder="Enter Document 1" name="Document_1" value="<?php echo set_value('Document_1'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_1')) ? '<br>' . form_error('Document_1', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_1'])) {
                                                        $Document_1_error = $_SESSION['file_errors']['Document_1'];
                                                        echo "<br><b class='text-danger'>$Document_1_error</b>";
                                                        unset($_SESSION['file_errors']['Document_1']);
                                                    }
                                                ?> 
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 2</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_2_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_2/') . $leads_document->document_2_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_2/thumb_images/') . $leads_document->document_2_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_2"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_2')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 2<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_2" class="form-control" placeholder="Enter Document 2" name="Document_2" value="<?php echo set_value('Document_2'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_2')) ? '<br>' . form_error('Document_2', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_2'])) {
                                                        $Document_2_error = $_SESSION['file_errors']['Document_2'];
                                                        echo "<br><b class='text-danger'>$Document_2_error</b>";
                                                        unset($_SESSION['file_errors']['Document_2']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 3</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_3_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_3/') . $leads_document->document_3_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_3/thumb_images/') . $leads_document->document_3_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                


                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_3"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_3')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 3<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_3" class="form-control" placeholder="Enter Document 3" name="Document_3" value="<?php echo set_value('Document_3'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_3')) ? '<br>' . form_error('Document_3', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_3'])) {
                                                        $Document_3_error = $_SESSION['file_errors']['Document_3'];
                                                        echo "<br><b class='text-danger'>$Document_3_error</b>";
                                                        unset($_SESSION['file_errors']['Document_3']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 15px;">

                                <?php if ($leads_documents): ?>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <table style="border: 1px solid #e4e7ea; margin-bottom: 25px;" class="table table-striped table-bordered table-hover table-condensed" >

                                                <tbody>
                                                    <tr>
                                                        <th style="vertical-align: middle">Document 4</th>
                                                        <td width="80%">

                                                        <?php
                                                            foreach ($leads_documents as $leads_document):
                                                                if ($leads_document->document_4_thumb_name):
                                                        ?>
                                                            <a target="_blank" href="<?php echo base_url('uploads/AllDocuments/Document_4/') . $leads_document->document_4_org_name; ?>">
                                                                <img src="<?php echo base_url('uploads/AllDocuments/Document_4/thumb_images/') . $leads_document->document_4_thumb_name; ?>" alt="Tenancy Agreement">
                                                            </a>                                                        

                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>                                
                                            </table>

                                        </div>
                                    </div>

                                    <hr style="margin-top: 0;">

                                <?php endif; ?>                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="files_Document_4"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group <?php echo (form_error('Document_4')) ? 'has-error' : ''; ?> ">
                                            <label class="control-label col-md-3" style="text-align: left;">Document 4<span style="color: red"> *</span></label>

                                            <div class="col-md-9" style="">
                                                <input type="file" id="Document_4" class="form-control" placeholder="Enter Document 4" name="Document_4" value="<?php echo set_value('Document_4'); ?>" accept="image/*">
                                                <?php echo (form_error('Document_4')) ? '<br>' . form_error('Document_4', "<b class='text-danger'>", '</b>') : ''; ?>  

                                                <?php
                                                    if (isset($_SESSION['file_errors']['Document_4'])) {
                                                        $Document_4_error = $_SESSION['file_errors']['Document_4'];
                                                        echo "<br><b class='text-danger'>$Document_4_error</b>";
                                                        unset($_SESSION['file_errors']['Document_4']);
                                                    }
                                                ?> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>                        
                            
                            <hr style="margin-top: 0px; margin-bottom: 15px;">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 7%">
                                                <button type="submit" class="btn btn-info">ADD <?php echo $campaign_short_name ?> Document </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    
                    <?php }; ?>
                    
                </div>                

            </div>
        </div>




    </div>
</div>





<!-- /.container-fluid -->
