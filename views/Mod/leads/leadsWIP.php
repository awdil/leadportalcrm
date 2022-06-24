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

<div class="container-fluidzero">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">MANAGE Leads</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Leads</a></li>
                <li class="active">Manage Leads</li>
            </ol>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!--.row-->

    <!-- ============================================================== -->
    <!-- Demo table -->
    <!-- ============================================================== -->

    <div class="row" style=" margin-right: -25px; ">
        <div class="col-md-12">
            <div class="panel">
                
                <div class="row">
                    
                    
                    
                    <div class="col-sm-12">
                        
                        <div class="row">
                            
                            <div class="col-md-6">
                     <!--<h3 style="padding: 17px 0px 0px 28px"><b>MANAGEs LEADS</b></h3>-->

                                <h3 style="padding: 17px 0px 0px 28px"><b>MANAGE LEADS</b></h3>

                            </div>
                            
                            <div class="col-md-6 hidden-xs">

                                <div style="text-align: right; margin-right: 20px ">                                
                                    <!--<a href="<?php // echo base_url('Mod/addLead'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Add New Lead</a>-->
                                    <button type="button" class="btn btn-info" style="margin-top: 20px" data-toggle="modal" data-target="#myModalWIP"><i class="fa fa-plus"></i> Add New WIP Lead</button>
                                </div>
                                
                            </div>
                            
                        </div>


                        <!--<div class="white-box" style="padding: 0px 25px 25px 25px;">-->
                <div class="white-box" style="padding: 0px 0px 0px 0px;">
                    <hr style="margin-top: 5px;">
                <div class="table-responsive">
                                <table id='leadsWIP' class="table table-striped table-bordered">                        
                        <thead>
                            
                            <tr>
                                <th class="text-center">File Ref</th> 
                                <th class="text-center">User</th> 
                                <th class="text-center">Agent Name</th>
                                <th class="text-center">WIP Creator</th>
                                <th class="text-center">Partner</th>
                                <th class="text-center">Camp</th>
                                <th class="text-center">First Name</th>
                                <th class="text-center">Last Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Lead Status</th>
                                <th class="text-center">Lead Type</th>
                                <th class="text-center">Vehicle Reg</th>
                                <th class="text-center">TP Reg.</th>
                                <th class="text-center">Created</th>
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


