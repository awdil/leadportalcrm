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
//    echo "<pre>";
//    print_r($inbox[61][0]['']);
//    print_r($inbox);
//    die();
    
?>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title"><?php echo $page_title ?></h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
            
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('Mod/Dashboard') ?>">Dashboard</a></li>
                <li class="active"><?php echo $page_title ?> </li>
            </ol>
            
        </div>
        
        <!-- /.col-lg-12 -->
    </div>
    
    <!-- row -->
    <div class="row">
        <!-- Left sidebar -->
        <div class="col-md-12">
            <div class="white-box">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12 col-xs-12 inbox-panel">
                        <div> 
                            <a href="<?php echo base_url('KwikMail/compose'); ?>" class="btn btn-custom btn-block waves-effect waves-light">Compose</a>
                            <div class="list-group mail-list m-t-20"> 
                                <a id="unread_count" href="<?php echo base_url('KwikMail/inbox'); ?>" class="list-group-item <?php echo ($this->uri->segment(2) == "inbox") ? 'active' : '' ?>">Inbox 
                                    <?php if(@$inbox_unread_count[0]->unread_count > 0): ?>
                                    <span class="label label-rouded label-success pull-right" id="unread_count"><?php echo ($inbox_unread_count) ? $inbox_unread_count[0]->unread_count : '' ?></span>                                    
                                    <?php endif; ?>
                                </a> 
                                <!--<a href="<?php // echo base_url('KwikMail/draft'); ?>" class="list-group-item <?php // echo ($this->uri->segment(2) == "draft") ? 'active' : '' ?>">Draft <span class="label label-rouded label-warning pull-right">15</span></a>--> 
                                <a href="<?php echo base_url('KwikMail/sentmail'); ?>" class="list-group-item <?php echo ($this->uri->segment(2) == "sentmail") ? 'active' : '' ?>">Sent Mail</a> 
                                <a href="<?php echo base_url('KwikMail/trash'); ?>" class="list-group-item <?php echo ($this->uri->segment(2) == "trash") ? 'active' : '' ?>">Trash 
                                    <!--<span class="label label-rouded label-default pull-right">55</span>-->
                                </a> 
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
                    
                    <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 mail_listing">
                        <div class="inbox-center" id="html-inbox-table">
                            <table class="table table-active table-responsive table-hover">
                                <thead style="">
                                    <tr>
                                        
                                        <th colspan="7" style="vertical-align: middle; line-height: 0px">
                                            <h1 style="line-height: 0px; margin-top: -20px">Kwil Mail <?php echo str_replace("Sent Mail", "Sent", $page_title); ?></h1>
                                        </th>
                                        
                                    </tr>
                                </thead>
                                
                                
                                <tbody>
                                <br>
                                    

                                <?php 
                                
                                    $mail_reciever = '....';
                                    if (!empty($inbox)): 
                                        foreach ($inbox as $key => $inbox_data):
                                        
                                        /*$sql            = "select users.firstName from users where users.id in (" . $inbox[$key][0]['reciever_ids'] . ")";*/
                                     $sql            = "select users.firstName from users where users.id in (" . $inbox[$key][0]['sender_id'] . ")";
                                        $query          = $this->db->query($sql)->result();                                                
                                        
                                        $sql_attchment            = "SELECT kwikmail_attchment.attchments as 'attchments' FROM kwikmail_attchment 
                                                                WHERE 
                                                                    kwikmail_attchment.mail_type = 'inbox' 
                                                                and 
                                                                    kwikmail_attchment.mail_id = " . $inbox[$key][0]['id'];     
                                        $query_attchment          = $this->db->query($sql_attchment)->result();                                                
                                        
                                ?>
                                    
                                    <tr class="<?php echo ($inbox[$key][0]['is_read']) ? 'read' : 'unread' ?>" style="<?php echo ($inbox[$key][0]['is_read']) ? 'background-color: #f7fafc!important' : 'background-color: #fff!important' ?>">
                                        
                                        <td style="width: 5%"><div class="checkbox m-t-0 m-b-0"><input type="checkbox"><label></label></div></td>
                                        
                                        <td class="hidden-xs text-left" style="width: 15%">
                                            <a href="<?php echo base_url('KwikMail/indox_detial/') . 
                                                (($inbox[$key][0]['parent_mail_id'] > 0)  ? base64_encode($inbox[$key][0]['parent_mail_id']) : base64_encode($inbox[$key][0]['id'])) . 
                                                "&M=". base64_encode($inbox[$key][0]['mail_title']) . 
                                                "&S=" . base64_encode($inbox[$key][0]['kwikmail_statuses_id'])  ?>">
                                            <?php 
                                            
                                                foreach ($query as $key_1 => $firstname){
                                                /* foreach ($query as $single){
                                            echo "<pre>";
                                                     print_r($single);*/
                                                    if ($key_1 > 2){
                                                        echo $firstname->firstName . ", " . $mail_reciever ;
                                                        unset($firstname->firstName);
                                                    }else{
                                                        echo $firstname->firstName . ", ";
                                                    }
                                                
                                                }
                                                
                                            ?>
                                            </a>
                                        </td>
                                        
<td class="max-texts text-left" style="width: 250px;">
    <a href="<?php echo base_url('KwikMail/indox_detial/') . 
    (($inbox[$key][0]['parent_mail_id'] > 0)  ? base64_encode($inbox[$key][0]['parent_mail_id']) : base64_encode($inbox[$key][0]['id'])) . 
    "&M=". base64_encode($inbox[$key][0]['mail_title']) . 
    "&S=" . base64_encode($inbox[$key][0]['kwikmail_statuses_id'])  ?>">
        <?php echo ($inbox[$key][0]['mail_title']) ?></a></td>
<td class="hidden-xs" style="width: 50px;"><?php echo ($query_attchment) ? '<i class="fa fa-paperclip"></i>' : 'No File Attchment' ?></td>
                                        <td class="text-right" style="width: 200px;"><?php echo ($inbox[$key][0]['mail_sent_date']) ?> </td>
<?php if ($inbox[$key][0]['is_trash'] == 0): ?>                                        
<td class="text-center" style="width: 5%;">
    <a href="<?php echo base_url('KwikMail/move_to_trash/') . (($inbox[$key][0]['parent_mail_id'] > 0)  ? base64_encode($inbox[$key][0]['parent_mail_id']) : base64_encode($inbox[$key][0]['id'])) ?>"><i class="fa fa-trash-o"></i></a> 
</td>
<?php endif; ?>                                        
                                    </tr>

                                <?php 
                                        endforeach;
                                        
                                        else:
                                            
                                           echo "<tr><td colspan='7'>No Conversation Found.</td></tr>";
                                        
                                    endif; 
                                ?>
                                    

                                </tbody>
                            </table>
                        </div>

                        <hr style="margin-top: -10px">
                        
                        <div class="row">
                            <div class="col-xs-7 m-t-20"> Showing 1 - 15 of 200 </div>
                            <div class="col-xs-5 m-t-20">
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                    <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
</div>