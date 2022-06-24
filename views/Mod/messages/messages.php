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
                                            $sql = "select * from users WHERE userType = 13";
                                            $sqlemails = $this->db->query($sql)->result();
                                                 
                                                       
                                        /*    echo "<pre>";
                                            print_r($sqlemails);*/
                                            
                                           ?>
                                            <div class="col-md-12">
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

                                            <!--Last Name Fields-->

                                           


                                        </div>
                                    </div>
                            
                            <div class="row">
                                
                                <div class="col-md-12" style="padding-left: 40px;padding-right: 40px;">
                                    <textarea name="bodymessage" id="" cols=60 rows=10 class="form-control"></textarea>
                                    
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
        </div>
    </div>

    <!--./row-->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
</div>

<!-- Bootstrap WYSIHTML5 -->