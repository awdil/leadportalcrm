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

    $(function () {

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

        $("#mail_to, #mail_cc, #mail_bcc")
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
    });

</script> 


<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Compose Mail</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Compose Mail</li>
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
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12 inbox-panel">
                        <div>
                            <a href="<?php echo base_url('KwikMail/compose'); ?>" class="btn btn-custom btn-block waves-effect waves-light">Compose</a>
                            <div class="list-group mail-list m-t-20"> 
                                <a href="<?php echo base_url('KwikMail/inbox'); ?>" class="list-group-item <?php echo ($this->uri->segment(2) == "inbox") ? 'active' : '' ?>">Inbox 
                                    <?php if(@$inbox_unread_count[0]->unread_count > 0): ?>
                                        <span class="label label-rouded label-success pull-right"><?php echo ($inbox_unread_count) ? $inbox_unread_count[0]->unread_count : '' ?></span>                                    
                                    <?php endif; ?>
                                </a> 
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

                    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">

                        <h3 class="box-title">Compose New Message</h3>
                        
                        <form action="<?php echo base_url('KwikMail/compose'); ?>" method="post" enctype="multipart/form-data">         
                            
                            <div class="form-group">
                                <input class="form-control" name="mail_to" id="mail_to" placeholder="To:" required=""> 
                            </div>

                            <div class="form-group">
                                <input class="form-control" name="mail_cc" id="mail_cc" placeholder="CC:"> 
                            </div>

                            <div class="form-group">
                                <input class="form-control" name="mail_bcc" id="mail_bcc" placeholder="BCC:"> 
                            </div>

                            <div class="form-group">
                                <input class="form-control" name="mail_subject" placeholder="Subject:"> 
                            </div>

                            <div class="form-group">
                                <textarea class="textarea_editor form-control" rows="15" name="mail_body" placeholder="Enter text ..."></textarea>
                            </div>

                            <h4><i class="ti-link"></i> Attachment</h4>

                            <div class="dropzone">
                                <div class="fallback">
                                    <input name="file[]" type="file" multiple /> 
                                </div>
                            </div>

                            <hr>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                            <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


