<?php
       $permission_access      = isset($_SESSION['adminData']['KwikMail']);
        $permission_add         = isset($_SESSION['adminData']['KwikMail']['permission_view']);
        $permission_view        = isset($_SESSION['adminData']['KwikMail']['permission_view']);
        $permission_update      = isset($_SESSION['adminData']['KwikMail']['permission_update']);
        $permission_delete      = isset($_SESSION['adminData']['KwikMail']['permission_delete']);
if($permission_access){
}else{ 
    redirect(base_url('Mod/Dashboard'));
}

?>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<script type="text/javascript">

    function getseg() {

        var availableTags = [

<?php
if ($users) {
    foreach ($users as $user) {
        echo " '" . $user->userName . '@kwikcarhire.co.uk' . "',";
    }
}
?>

        ];

        function split(val) {
            return val.split(/,\s*/);
        }
        function extractLast(term) {
            return split(term).pop();
        }

        $(".mail_to, .mail_cc, .mail_bcc")
                // don't navigate away from the field on tab when selecting an item
                .on("keydown", function (event) {
                    if (event.keyCode === $.ui.keyCode.TAB &&
                            $(this).autocomplete("instance").menu.active) {
                        event.preventDefault();
                    }
                })
                .autocomplete({
                    minLength: 0,
                    source: function (request, response) {
                        // delegate back to autocomplete, but extract the last term
                        response($.ui.autocomplete.filter(
                                availableTags, extractLast(request.term)));
                    },
                    focus: function () {
                        // prevent value inserted on focus
                        return false;
                    },
                    select: function (event, ui) {
                        var terms = split(this.value);
                        // remove the current input
                        terms.pop();
                        // add the selected item
                        terms.push(ui.item.value);
                        // add placeholder to get the comma-and-space at the end
                        terms.push("");
                        this.value = terms.join(", ");
                        return false;
                    }
                });
    }

</script> 

                                    <?php $count_sub_rep = ($result_single_mail_ref) ? count($result_single_mail_ref) : 0; ?>

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title"><?php echo $page_title ?></h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>

            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('Mod/Dashboard') ?>">Dashboard</a></li>
                <li class="active"><?php echo $page_title ?></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <!-- Left sidebar -->
        <div class="col-md-12">
            <div class="white-box">
                <div class="row">

                    <div class="col-lg-2 col-md-3  col-sm-12 col-xs-12 inbox-panel">
                        <div> 
                            <a href="<?php echo base_url('KwikMail/compose'); ?>" class="btn btn-custom btn-block waves-effect waves-light">Compose</a>
                            <div class="list-group mail-list m-t-20"> 
                                
                                <a id="unread_count" href="<?php echo base_url('KwikMail/inbox'); ?>" class="list-group-item <?php echo ($this->uri->segment(2) == "inbox") ? 'active' : '' ?>">Inbox 
                                    <?php if (@$inbox_unread_count[0]->unread_count > 0): ?>
                                        <span class="label label-rouded label-success pull-right"><?php echo ($inbox_unread_count) ? $inbox_unread_count[0]->unread_count : '' ?></span>                                    
                                    <?php endif; ?>
                                </a> 
                                <a href="<?php echo base_url('KwikMail/sentmail'); ?>" class="list-group-item <?php echo ($this->uri->segment(2) == "sentmail") ? 'active' : '' ?>">Sent Mail</a> 
                                <a href="<?php echo base_url('KwikMail/trash'); ?>" class="list-group-item <?php echo ($this->uri->segment(2) == "trash") ? 'active' : '' ?>">Trash</a> 
                                
                            </div>

                            <!--<h3 class="panel-title m-t-40 m-b-0">Labels</h3>-->
                            <hr class="m-t-5">

                            <!--                            <div class="list-group b-0 mail-list"> 
                                                            <a href="#" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Work</a> 
                                                            <a href="#" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>Family</a> 
                                                            <a href="#" class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>Private</a> 
                                                            <a href="#" class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>Friends</a> 
                                                            <a href="#" class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>Corporate</a> 
                                                        </div>-->

                        </div>
                    </div>

                    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing" id="content-single-mail">
                        
                        <div class="media m-b-30 p-t-20">
                            <h4 class="font-bold m-t-0"><?php echo $single_mail->mail_title ?></h4>
                        </div>
                        <?php if(!isset($single_mail->colne)): ?>
                        
                        <div class="media m-b-30 p-t-20">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">

                                        <h4 class="panel-title">

                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse0">

                                                <div class="media-body"> 
                                                    <span class="media-meta pull-right"><?php echo date("d-M-Y H:i:s", strtotime($single_mail->mail_sent_date)); ?></span>
                                                    <h4 class="text-danger m-0"><?php echo $single_mail->firstName . ' ' . $single_mail->lastName ?> </h4> 
                                                    <div class="col-md-10 pull-left">
                                                        <small class="text-muted"><b>From:</b> <?php echo $single_mail->userName . '@kwikcarhire.co.uk ' ?></small> 
                                                        <small class="text-muted"><b>To:</b> <?php echo $single_mail->reciever_mails ?></small> 
                                                    </div>
                                                    <div class="col-md-10 pull-left">
                                                        <small class="text-muted"><b>CC:</b> <?php echo $single_mail->mail_cc_mails ?></small> 
                                                        <small class="text-muted"><b>BCC:</b> <?php echo $single_mail->mail_bcc_mails ?></small> 
                                                    </div>
                                                </div>

                                            </a>
                                        </h4>

                                    </div>

                                    
                                    <div id="collapse0" class="panel-collapse collapse <?php echo ($count_sub_rep > 0) ? 'out' : 'in'; ?>">
                                        <div class="panel-body">

                                            <?php echo $single_mail->mail_body ?>                        
                                            <hr>

                                            <?php $single_mail->attchments = ($single_mail->attchments) ? json_decode($single_mail->attchments, true) : ''; ?>

                                            <h4> <i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments 
                                                <span><?php echo ($single_mail->attchments) ? "( " . count($single_mail->attchments) . " )" : ' - No file Attchment' ?></span> </h4>

                                            <div class="row">

                                                <?php
                                                if ($single_mail->attchments):
//                                echo "<pre>";
//                                print_r($single_mail->attchments);
                                                    foreach ($single_mail->attchments as $attchments):
                                                        ?>

                                                        <div class="col-xs-4">
                                                            <a href="<?php echo base_url('kwikmail/attchments/') . $attchments ?>" target="_blank"> <i class="fa fa-paperclip m-r-10 m-b-10"></i> <?php echo $attchments; ?></a>
                                                        </div>

                                                    <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <?php 
                        
//                        else: 
//                        $single_mail = $result_single_mail_clone;
                            
                        endif; 
                        
                        
                        ?>
                        
                        
                        <?php 
                            $inc = 1;
                            if ($result_single_mail_ref): 
                                foreach ($result_single_mail_ref as $single_mail_ref):
                        ?>
                        
                        <div class="media m-b-30 p-t-20">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">

                                        <h4 class="panel-title">

                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $inc ?>">

                                                <div class="media-body"> 
                                                    <span class="media-meta pull-right"><?php echo date("d-M-Y H:i:s", strtotime($single_mail_ref->mail_sent_date)); ?></span>
                                                    <h4 class="text-danger m-0"><?php echo $single_mail_ref->firstName . ' ' . $single_mail_ref->lastName ?> </h4> 
                                                    <div class="col-md-10 pull-left">
                                                        <small class="text-muted"><b>From:</b> <?php echo $single_mail_ref->userName . '@kwikcarhire.co.uk ' ?></small> 
                                                        <small class="text-muted"><b>To:</b> <?php echo $single_mail_ref->reciever_mails ?></small> 
                                                    </div>
                                                    <div class="col-md-10 pull-left">
                                                        <small class="text-muted"><b>CC:</b> <?php echo $single_mail_ref->mail_cc_mails ?></small> 
                                                        <small class="text-muted"><b>BCC:</b> <?php echo $single_mail_ref->mail_bcc_mails ?></small> 
                                                    </div>
                                                </div>

                                            </a>
                                        </h4>

                                    </div>

                                    <div id="collapse<?php echo $inc ?>" class="panel-collapse collapse <?php echo ($count_sub_rep != $inc) ? 'out' : 'in'; ?>">
                                        <div class="panel-body">

                                            <?php echo $single_mail_ref->mail_body ?>                        
                                            <hr>
                                            <?php 
//                                                $sql_attchment = "SELECT attchments FROM `kwikmail_attchment` where mail_id = $single_mail_ref->     limit 0,1";  
//                                                $res_attchment = $this->db->query($sql_attchment)->result();
                                            ?> 
                                            <?php $single_mail_ref->attchments = ($single_mail_ref->attchments) ? json_decode($single_mail_ref->attchments, true) : ''; ?>
                                            
                                            <h4> <i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments 
                                                <span><?php echo ($single_mail_ref->attchments) ? "( " . count($single_mail_ref->attchments) . " )" : ' - No file Attchment' ?></span> </h4>

                                            <div class="row">

                                                <?php
                                                if ($single_mail_ref->attchments):

                                                    foreach ($single_mail_ref->attchments as $attchment):
                                                        ?>

                                                        <div class="col-xs-4">
                                                            <a href="<?php echo base_url('kwikmail/attchments/') . $attchment ?>" target="_blank"> <i class="fa fa-paperclip m-r-10 m-b-10"></i> <?php echo $attchment; ?></a>
                                                        </div>

                                                    <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>

<?php 

$inc++;

// if cc send a mail then cc will not send the cc mail to by self

$single_mail->reciever_mails = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', $single_mail_ref->serder_mail . ',', $single_mail_ref->reciever_mails);

if(strpos($single_mail_ref->mail_cc_mails, $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,') !== false){
    $single_mail->mail_cc_mails     = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', '', $single_mail_ref->mail_cc_mails);
    $single_mail->reciever_mails .= " " . $single_mail_ref->serder_mail . ",";    
} else{
    $single_mail->mail_cc_mails     = $single_mail_ref->mail_cc_mails;
}

if(strpos($single_mail_ref->mail_bcc_mails, $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk') !== false){
    $single_mail->mail_bcc_mails    = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', '', $single_mail_ref->mail_bcc_mails);
    $single_mail->reciever_mails .= " " . $single_mail_ref->serder_mail . ",";    
} else{
    $single_mail->mail_bcc_mails    = $single_mail_ref->mail_bcc_mails;
}

$single_mail->mail_body = $single_mail_ref->mail_body;
$single_mail->attchments = $single_mail_ref->attchments;

endforeach; 
endif; 


if (empty($result_single_mail_ref)){
    
    $single_mail->reciever_mails = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', $single_mail->serder_mail . ',', $single_mail->reciever_mails);

if(strpos($single_mail->mail_cc_mails, $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,') !== false){
    
    $single_mail->mail_cc_mails = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', "", $single_mail->mail_cc_mails);    
    $single_mail->reciever_mails .= " " . $single_mail->serder_mail . ",";    
    
} else{
    
    $single_mail->mail_cc_mails;
    
}

if(strpos($single_mail->mail_bcc_mails, $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk') !== false){
    
    $single_mail->mail_bcc_mails    = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', '', $single_mail->mail_bcc_mails);
    $single_mail->reciever_mails .= " " . $single_mail->serder_mail . ",";    
    
} else{
    
    $single_mail->mail_bcc_mails;
    
}

    
    
//    $single_mail->mail_bcc_mails = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', "", $single_mail->mail_bcc_mails);    
    
}

//echo $single_mail->reciever_mails;
//echo $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk';
//echo $single_mail->serder_mail;


?>
                        
                        <input id="url" type="hidden" value="<?php echo base_url() . $this->uri->segment(1) . "/" . $this->uri->segment(2) . "/" . urlencode($this->uri->segment(3)); ?>">                             
                        
                        <form id="form-sender-replay" style="display: none" action="<?php echo base_url('KwikMail/actions'); ?>" method="post" enctype="multipart/form-data">         
                            
                            <hr>
                            
                            <h3 class="box-title">Compose New Message</h3>
                            
                            <div class="form-group">
                                <input class="form-control mail_to" onkeydown="getseg()" name="mail_to" value="" id="mail_to" placeholder="To:" required=""> 
                            </div>

                            <div class="form-group">
                                <input class="form-control mail_cc" onkeydown="getseg()" name="mail_cc" value="" id="mail_cc" placeholder="CC:"> 
                            </div>

                            <div class="form-group">
                                <input class="form-control mail_bcc" onkeydown="getseg()" name="mail_bcc" value="" id="mail_bcc" placeholder="BCC:"> 
                            </div>

                            <div class="form-group" id="for-area" style="display: none">
                                <textarea class='textarea_editor_1 form-control' rows='15' name='mail_body_fwd' id='mail_body_fwd'><?php echo $single_mail->mail_body; ?></textarea>                                
                            </div>

                            <div class="form-group" id="reply-all-area" style="display: none">
                                <textarea class='textarea_editor_2 form-control' rows='15' name='mail_body_rep_all' id='mail_body_rep_all'></textarea>                                
                            </div>

                            <div class="form-group" id="reply-area" style="display: none">
                                <textarea class='textarea_editor form-control' rows='15' name='mail_body_rep' id='mail_body_rep'></textarea>                                
                            </div>

                            <h4><i class="ti-link"></i> Attachment</h4>

                            <div class="dropzone">
                                <div class="fallback">
                                    <input name="file[]" type="file" multiple /> 

                                    <div class="row" id="fwd_attchment" style="display: none">

                                                <?php
                                                if ($single_mail->attchments):
                                                    echo "<br>";
                                                    foreach ($single_mail->attchments as $attchment):
                                                        
                                                    $ext       = '.' . pathinfo($attchment, PATHINFO_EXTENSION);
                                                    $id_name   = str_replace($ext, "", $attchment);
                                                        
                                                ?>
                                    
                                                        <div class="col-xs-4" id="<?php echo $id_name; ?>" >
                                                            <a href="<?php echo base_url('kwikmail/attchments/') . $attchment ?>" target="_blank"> <i class="fa fa-paperclip m-r-10 m-b-10"></i> <?php echo $attchment; ?></a>
                                                            <input type="hidden" name="attchments_fwd[]"  value="<?php echo base_url('kwikmail/attchments/') . $attchment ?>">
                                                            <a style="color: black"><i class="fa fa-close" onclick="remo('<?php echo $id_name; ?>')"></i></a>
                                                        </div>

                                                    <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                        
                                    </div>
                                    
                                </div>
                            </div>

                            <input name="action_type" type="hidden" id="action_type" value="">                             
                            <input name="url" type="hidden" value="<?php echo base_url() . $this->uri->segment(1) . "/" . $this->uri->segment(2) . "/" . $this->uri->segment(3); ?>">                             
                            <input name="mail_id" type="hidden" value="<?php echo $single_mail->kwik_mail_id; ?>">                             
                            <input name="mail_subject" type="hidden" value="<?php echo $single_mail->mail_title ?>">                             
                            
                            <hr>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                            <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                            
                        </form>

                        <hr>
                        
                        <div class="b-all p-20">
                            <p class="p-b-20">click here to <a id="reply_all" style="cursor: pointer">Reply All</a> or <a id="reply" style="cursor: pointer">Reply</a> or <a id="forward" style="cursor: pointer">Forward</a></p>
                        </div>
                    
                                       
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

</div>

<div class="alertify-notifier ajs-bottom ajs-right" id="notification-new-msg">
    
    
</div>