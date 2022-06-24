<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
<?php

$ApiErrors = FALSE;


if (isset($_SESSION['Errors'])) {
    $ApiErrors = $_SESSION['Errors'];
    unset($_SESSION['Errors']);
}

/*echo "<pre>";
print_r($Message_formname);
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
                <hr style="margin-bottom: 0; margin-top: 5px;">

                <div class="panel-wrapper collapse in" aria-expanded="true">

                    
                        <hr class="m-t-40 m-b-10">
                        
                        <div class="col-md-12" style="padding: 0px; ">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Messages Conversation </p>
                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                        <?php
            $messages	=	$this->db->get_where('message' , array('message_thread_code' => $this->uri->segment(3)))->result_array();
                        foreach ($messages as $row):

                            $sender 				=	$row['sender'];
                            /*$sender_account_type	=	$sender[0];
                            $sender_id				=	$sender[1];*/
                            ?>
                         <div class="row">
                             <div class="col-md-12" style="padding-left: 40px;padding-right: 40px;">
                                 <div class="alert alert-primary" style="margin-bottom: 0px; padding-top: 2px;padding-bottom: 29px;">                            
                                    
                                    
                                     <div class="mail-info"> 
                                         <div class="col-md-9"> 
                                             <div class="col-md-12">
                                                 <div class="col-md-6">
                                                     <div class="mail-sender">      
                                                        <b style="font-size: 18px; text-transform: uppercase;"> Message From </b>  
                                                         <img src="<?php echo base_url('public/adminAssets/'); ?>plugins/images/users/user-default-image.png" class="img-circle" width="30"> 
                                                        <b>
                                                                <span>
                                                                    <?php echo $this->db->get_where('users' , array('id' => $sender))->row()->userName; ?>
                                                                </span>
                                                         </b> 
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="mail-date" style="background: #fff; float: right;"> 
                                                         <p style="font-size: 17px;color: #f00;">
                                                             <b>Client Name: </b> <?php echo @$changeLeadStatus->first_name; ?> 
                                                            <?php echo @$changeLeadStatus->last_name; ?> 
                                                        </p>
                                                     </div> 
                                                 </div>
                                             </div> 
                                              
                                         </div> 
                                         <div class="col-md-3"> 
                                             <div class="mail-date" style="float: right; "> 
                                                 <?php echo $row['timestamp'];?> 
                                             </div> 
                                         </div> 
                                     </div>
                                    
                                        <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                </div>
                                
                                
                                 <div class="col-md-12" >
                                     <!--<div class="col-md-3">
                                         <p  style="font-size: 18px;color: #f00;">
                                             <b>Client Name: </b> <?php echo @$changeLeadStatus->first_name; ?> 
                                            <?php echo @$changeLeadStatus->last_name; ?> 
                                        </p>
                                     </div>-->
                                     <div class="col-md-12">
                                         <div class="mail-text">			
                                            <p style="padding-right: 20px;padding-left: 20px;"> <?php echo $row['message'];?></p>
                                        </div>
                                     </div>
                                </div>
                             </div>
                        </div>
                        <?php endforeach;?>
                    <div class="panel-body" style="padding: 0px;">
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
                        <form action="<?php echo base_url('Mod/send_create_reply_message/') . $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <div class="row">
                                <input type="hidden" value=" ">
                                <div class="col-md-12" style="padding-left: 40px;padding-right: 40px;">
                                   <!-- <textarea name="bodymessage" id="" cols=60 rows=10 class="form-control"></textarea>-->
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
                                                <button type="submit" class="btn btn-info">Reply</button>
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

<!-- Bootstrap WYSIHTML5 -->