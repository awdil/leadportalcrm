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
            <h4 class="page-title">User Emails </h4> 
        </div>
            
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">User Emails</li>
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
                                <h3 style="padding: 17px 0px 0px 28px"><b>Emails</b></h3>
                            </div>
                            
                            <div class="col-md-6 hidden-xs">
                                
                            </div>
                            
                        </div>


                        <div class="white-box" style="padding: 0px 25px 25px 25px;">
                            <hr style="margin-top: 5px;">
                            
                <div class="table-responsive">
                    
                                <table id='user_emails_hist' class="table table-striped table-bordered">                       
                                    
                        <thead>
                            
                            <tr>
                                <th class="text-center">SR No.</th> 
                                <th class="text-center">User Name</th> 
                                <th class="text-center">Sent to</th> 
                                <th class="text-center">Subject</th> 
                                <!--<th>Ip Address</th>--> 
                                <th class="text-center">Sent At</th>            
                                <th class="text-center">Actions</th>            
                           </tr>
                            
                        </thead>
                        
                        <tbody>
                            
                        </tbody>
                        
                    </table>

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
<!-- /.container-fluid -->
