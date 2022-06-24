<?php 
/*echo "<pre>";
print_r($events);*/
?>

<style>
    
    tr{
        font-size: 14px;
    }
    
    table{
      margin: 0 auto;
      width: 100%;
      clear: both;
      border-collapse: collapse;
      table-layout: fixed; 
      word-wrap:break-word; 
    }    
    
    
</style>


<!-- Loading Image -->

<div class="loading" style="display: none;">
    <div class="content"><img src="<?php echo base_url('assets/images/loading.gif'); ?>"/></div>
</div>

<div class="container-fluid">

    <div class="row bg-title">
        
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Emails</h4> 
        </div>
            
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Emails</li>
            </ol>

        </div>
        
        <!-- /.col-lg-12 -->
    </div>
    <!--.row-->

    <!-- ============================================================== -->
    <!-- Demo table -->
    <!-- ============================================================== -->

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                
                <div class="row">
                    
                    
                    
                    <div class="col-sm-12">
                        
                        <div class="row">
                            
                            <div class="col-md-6">
                                <h3 style="padding: 17px 0px 0px 28px"><b>
                                    <?php echo $page_title; ?></b></h3>
                            </div>
                            
                            <div class="col-md-6 hidden-xs">
                                
                            </div>
                            
                        </div>


                    <div class="white-box" style="padding: 0px 25px 25px 25px;">
                        <hr style="margin-top: 5px;">

                        <div class="page-wrapper">
                            <!-- ============================================================== -->
                            <!-- Container fluid  -->
                            <!-- ============================================================== -->
                             <?php 
                            $email_templates	=	$this->db->get('email_template')->result_array();
                            ?>
                            <div class="container-fluid">
                        <?php
				            foreach ($email_templates as $row):
					       ?>
                            <?php echo form_open(site_url('Mod/email_settings/do_update/' . $row['email_template_id']));?>
                            <div class="row"> 
                                <!-- ?>-->
                                        <div class="col-md-12"> 
                                             <div class="form-group">
                                                <label for="User Name">Subject <span class="required">*</span></label>        
                                                <input id="subject" type="text" name="subject"  class="form-control" value="<?php echo $row['subject'];?>">
                                                <?php echo form_error('subject'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12"> 
                                             <div class="form-group">
                                                <label for="User Name">Body <span class="required">*</span></label>  
                                                  <?php $contents = set_value('body',$row['body'], FALSE); ?>
                                                <?php $this->ckeditor->editor("body", $contents); ?>
                                                <?php echo form_error('body'); ?>
                                            </div>
                                            <?php echo $row['instruction'];?>
                                        </div>

                                        <center>
                                          <button type="submit" class="btn btn-info btn-icon icon-left">
                                            <?php echo "Save";?>
                                            <i class="entypo-floppy"></i>
                                            </button>
                                        </center>
                                    <?php endforeach;?>
                            </div>


                            <?php echo form_close();?>

                        </div>
                            <!-- ============================================================== -->
                            <!-- End Container fluid  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>                
                
                <hr style="margin-bottom: 0; margin-top: 5px;">
                
                </div>
                <hr>
            </div>

            
            
        </div>
        
    </div>



  
</div>

    

</div>
	<script>

	$(document).ready(function() {
		var that = this;
       
		
	});
        
    
</script>