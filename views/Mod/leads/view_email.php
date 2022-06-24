<?php
/*
echo "<pre>";
print_r($emails_data);
echo $emails_data[0]->id;
die();
*/

?>

<?php $CI = & get_instance(); ?>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">USER EMAILS</h4> 
        </div>
        
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">View email</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">View email</div>
                    </div>

                </div>

                <hr style="margin-bottom: 0; margin-top: 9px;">

                <div class="panel-wrapper collapse in" aria-expanded="true">
                    
                    <div class="panel-body" style="padding: 0px;">
                        
                       <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> View User email history</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                        
                        <br>

                        <div class="col-md-12">                        

                            <div class="table-responsive" style="margin-top: 10px; margin-bottom: 20px ">

                                <table class="table table-striped table-bordered">                        

                                    <tr>
                                        <th width="30%">Send by User Name</th>                                         
                                        <td style="text-align: left"><?php echo $emails_data[0]->user_id; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Email</th>                                         
                                        <td style="text-align: left"><?php echo $emails_data[0]->sent_to; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Subject</th> 
                                        <td style="text-align: left"><?php echo $emails_data[0]->subject; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Body</th> 
                                        <td style="text-align: left"><?php echo $emails_data[0]->body; ?></td>
                                    </tr>
                                    
                                   
                                    
                                    <tr>
                                        <th>Sent at</th>                                        
                                        <td style="text-align: left"><?php echo ($emails_data[0]->created_at) ? date("d M Y H:i:s", strtotime($emails_data[0]->created_at)) : '' ?></td>
                                    </tr>

                                </table>
                            </div>
                        </div>


                        
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
