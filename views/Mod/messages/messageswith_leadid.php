<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
<?php

$ApiErrors = FALSE;


if (isset($_SESSION['Errors'])) {
    $ApiErrors = $_SESSION['Errors'];
    unset($_SESSION['Errors']);
}

/*echo "<pre>";
print_r($email_formname);
die();*/
?>

<style>

    .form-group{
        margin-bottom: 0;
    }

    .form-horizontal{
        padding-top: 0;
    }

    .control-label{
        padding-top: 0;
    }



</style>

<div class="container-fluid">
    <!--.row-->
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px"> Lead Conversation</div>
                    </div>
                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">
                            <a href="<?php echo base_url('Mod/viewLead/');
echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> View Lead</a>
                            <a href="<?php echo base_url('Mod/changeLeadStatus/');
echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Change Lead Status</a>
                            <a href="<?php echo base_url('Mod/editLead/');
echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Edit this Lead</a>
 <a href="<?php echo base_url('Mod/addLeadNote/'); echo!empty(@$changeLeadStatus->lead_id) ? @$changeLeadStatus->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa "></i> Add Lead Note</a>
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

                        <div class="col-md-12">                        

                            <div class="table-responsive" style="margin-top: 10px; margin-bottom: 20px ">

                                <table class="table table-striped table-bordered">                        

                                    <tr>
                                        <th class="text-center">File Ref #.</th> 
                                        <th class="text-center">First Name</th> 
                                        <th class="text-center">Last Name</th>                                         
                                        <th class="text-center">Phone</th>                                        
                                        <th class="text-center">Lead Status</th>                                         
                                    </tr>


                                    <tr>

                                        <td class="text-center"><a><?php echo ($changeLeadStatus) ? $changeLeadStatus->lead_id : '' ?></a></td> 
                                        <td class="text-center"><a><?php echo @$changeLeadStatus->first_name; ?></a></td> 
                                        <td class="text-center"><a><?php echo @$changeLeadStatus->last_name; ?></a></td> 
                                        <td class="text-center"><a><?php echo @$changeLeadStatus->phone_1 ?></a></td> 
                                        <td class="text-center"><a>

                                                <?php if ($leadsStatuses): foreach ($leadsStatuses as $leadsStatus): ?>
                                                        <?php echo (@$changeLeadStatus->lead_status == $data = $leadsStatus->id) ? $leadsStatus->status_name : ''; ?>
                                                    <?php endforeach; ?>                                                
                                                        <?php endif; ?>                                                

                                            </a>
                                        </td> 
                                    </tr>

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
                <hr style="margin-bottom: 0; margin-top: 5px;">

                <div class="panel-wrapper collapse in" aria-expanded="true">

                    <div class="panel-body" style="padding: 0px;">
                        <hr class="m-t-40 m-b-10">
                        
                        <div class="col-md-12" style="padding: 0px; ">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Compose New </p>
                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>

                        <form action="<?php echo base_url('Mod/send_messagetoHandler/') . $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <div class="row">
                                        <div class="col-md-12">

                                            <!--First Name Fields-->
                                                 <?php 
                                            $utype = $_SESSION['adminData']['role_name'];
                                            
                                            if($utype=='Claim Handler' || $utype=='Admin'){
                                                $sql = "select * from users";
                                            }elseif($utype=='Supervisor'){
                                                $sql = "select * from users WHERE userType = 13 OR company_id = 210";
                                            }else{
                                                $sql = "select * from users WHERE userType = 13";
                                            }
                                            
                                            $sqlemails = $this->db->query($sql)->result();
                                                 
                                                       
                                            /*echo "<pre>";
                                            print_r($sqlemails);*/
                                            
                                           ?>
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <div class="form-group <?php echo (form_error('usr_email')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left;">To<span style="color: red"> *</span></label>
                                                        <div class="col-md-8" style="">
                                                            <select class="form-control select2" name="usr_email">
                                                        <option value=""><?php echo "Select User"; ?></option>
                                                        <?php foreach ($sqlemails as $single): 
                                                            $user_name      = $single->userName;
                                                            $email          = $single->email; 

                                                            $disply_content = ucfirst($user_name) . " | " . ucfirst($email); 
                                                        ?>
                                                                <option value="<?php echo $single->id ?>"><?php echo $disply_content; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                            <?php echo (form_error('usr_email')) ? '<br>' . form_error('usr_email', "<b class='text-danger'>", '</b>') : ''; ?>  
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group <?php echo (form_error('usr_email')) ? 'has-error' : ''; ?> ">
                                                        <label class="control-label col-md-4" style="text-align: left;">Subject<span style="color: red"> *</span></label>
                                                         <div class="col-md-8" style="">
                                                        <input type="text" name="subject" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group <?php echo (form_error('Document_5')) ? 'has-error' : ''; ?> ">
                                                <label class="control-label col-md-2" style="text-align: left;">Report file</label>

                                                <div class="col-md-10" style="">
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
                                            <!--Last Name Fields-->

                                           


                                        </div>
                                    </div>
                            
                            <div class="row">
                                
                                <div class="col-md-12" style="padding-left: 40px;padding-right: 40px;">
                                    <input type="hidden" name="leadId" value="<?php echo $this->uri->segment(3); ?>"> 
                                    <!--<textarea name="bodymessage" id="" cols=60 rows=10 class="form-control"></textarea>-->
                                    <?php $contents = set_value('bodymessage', FALSE); ?>
                                                <?php $this->ckeditor->editor("bodymessage", $contents); ?>
                                                <?php echo form_error('bodymessage'); ?>
                                        <?php echo (form_error('bodymessage')) ? '<br>' . form_error('bodymessage', "<b class='text-danger'>", '</b>') : ''; ?>
                                   <!-- <textarea id="editor" class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>-->
                                    
                                </div>
                                  
                                            
                                       
                            </div>

                            <hr class="m-t-0 m-b-40">

                            <div class="form-actions">

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">

                                        <div class="row">

                                            <div class="col-md-12" style="text-align: Left; left: 30%; margin-top: -26px; margin-bottom: 19px">
                                                <button type="submit" class="btn btn-info">Send</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
             
            <p style="font-weight: 500; color: #000; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Old History of emails </p>
            <div class="white-box" style="padding: 0px 25px 25px 25px;"> 
                <hr style="margin-top: 5px;"> 
                <div class="table-responsive"> 
                <table id='MessagesListofLeads' class="table table-striped table-bordered"> 
                    <thead> 
                        <tr> 
                            <th class="text-center">SR #</th> 
                            <th class="text-center"> Reciver</th> 
                            <th class="text-center"> Sender</th> 
                            <th class="text-center">Created At</th> 
                            <th class="text-center">Actions</th> 
                        </tr> 
                    </thead> 
                    <tbody> </tbody> 
                </table> 
                </div> 
            </div>
        </div>
    </div>

    <!--./row-->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
</div>

<!-- Bootstrap WYSIHTML5 -->