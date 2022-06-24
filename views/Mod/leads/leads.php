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
                        <div class="col-sm-12">
                            <div class="col-md-6">
                     <!--<h3 style="padding: 17px 0px 0px 28px"><b>MANAGEs LEADS</b></h3>-->
<?php                           if(($_SESSION['adminData']['role_name'] == "Admin")&&(isset($_SESSION['session_url_of_status']))){ ?>
                                <a target="_blank" href="<?php echo base_url('Mod/').$_SESSION['session_url_of_status'] ?>" style="padding-left: 17px;background: #cc2c8c;cursor: pointer;box-shadow: 0 0 0 rgba(204,169,44, 0.4);animation: pulse 2s infinite;margin-top: 20px;margin-left: 10px;" class="btn btn-info btn-rounded" >Here you updated last status</a>
                                
<?php } else{ ?> 
                                <h3 style="padding: 17px 0px 0px 28px"><b>MANAGE LEADS</b></h3>
<?php } ?>
                            </div>
                            
                            <div class="col-md-6 hidden-xs">
                                <?php if($_SESSION['adminData']['role_name'] == "Admin"){ ?>
                              <div class="col-sm-6" style=" padding-top: 19px; ">
                                    <div style="text-align: right; margin-right: 20px "> 
                                        <div style="text-align: right; margin-right: 20px "> 
                                            <select class="form-control" id="yourSelection"  name="bulkactions"> 
                                                <option value="">Bulk Actions</option> 
                                                <option value="ChangeStatus" url="#">Change Status</option> 
                                                <option value="AddNote" url="#">Add Note</option>
                                                <option value="SendEmailstoAll" url="#">Send Emails to Client</option> 
                                                <option value="ChangeUser" url="#">Change User</option> 
                                                <option value="ChangeWIPAgent" url="#">Change WIP Agent</option> 
                                                <option value="ChangeClaimHandler" url="#">Change Claim Handler</option> 
                                            </select> 
                                        </div> 
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="col-sm-6">
                                    <div style="text-align: right; margin-right: 20px ">                                
                                        <!--<a href="<?php // echo base_url('Mod/addLead'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Add New Lead</a>-->
                                        <button type="button" class="btn btn-info" style="margin-top: 20px" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add New Lead</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        </div>


                        <!--<div class="white-box" style="padding: 0px 25px 25px 25px;">-->
                <div class="white-box" style="padding: 0px 0px 0px 0px;">
                    <hr style="margin-top: 5px;">
                <div class="table-responsive">
                                <table id='leads' class="table table-striped table-bordered">                        
                        <thead>
                            
                            <tr style="padding: 0px;">
                                 <th style="padding: 1px;" class="text-center"></th> 
                                <th style="padding: 1px;" class="text-center">File Ref</th> 
                                <th style="padding: 1px;" class="text-center">User</th> 
                                <th style="padding: 1px;" class="text-center">Claim Handler</th>
                                <th style="padding: 1px;" class="text-center">WIP</th>
                                <th style="padding: 1px;" class="text-center">Partner</th>
                                <th style="padding: 1px;" class="text-center">Camp</th>
                                <th style="padding: 1px;" class="text-center">First Name</th>
                                <th style="padding: 1px;" class="text-center">Last Name</th>
                                <th style="padding: 1px;" class="text-center">Phone</th>
                                <th style="padding: 1px;" class="text-center">Lead Status</th>
                                <th style="padding: 1px;" class="text-center">Lead Type</th>
                                <th style="padding: 1px;" class="text-center">Vehicle Reg</th>
                                <th style="padding: 1px;" class="text-center">TP Reg.</th>
                                <th style="padding: 1px;" class="text-center">Created</th>
                                <th style="padding: 1px;" class="text-center">Actions</th>
                            </tr>

<!--                            <tr id="filter">
                                <th class="text-center">File Ref #</th> 
                                <th class="text-center">User</th> 
                                <th class="text-center">Partner</th>
                                <th class="text-center">Camp</th>
                                <th class="text-center">First Name</th>
                                <th class="text-center">Last Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Lead Status</th>
                                <th class="text-center">Lead Type</th>
                                <th class="text-center">FLG ID</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Actions</th>
                            </tr>
-->
                            
                        </thead>
                        
                        <tbody>
<!--                            <tr>
                                <td class="text-center">File Ref #</td> 
                                <td class="text-center">User</td> 
                                <td class="text-center">Partner</td>
                                <td class="text-center">Camp</td>
                                <td class="text-center">First Name</td>
                                <td class="text-center">Last Name</td>
                                <td class="text-center">Phone</td>
                                <td class="text-center">Lead Status</td>
                                <td class="text-center">Lead Type</td>
                                <th class="text-center">FLG ID</th>
                                <td class="text-center">Created At</td>
                            </tr>-->
                            
                            
                            
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

<script>
    $('#yourSelection').change(function(){ 
   
  /*delete*/
    if($(this).val() == 'Delete'){
      var dataArrOfdelete  = new Array();
       if($('input:checkbox:checked').length > 0){
          $('input:checkbox:checked').each(function(){
              dataArrOfdelete.push($(this).attr('id'));
              $(this).closest('tr').remove();
          });
          DeletesendResponse(dataArrOfdelete)
          console.log(dataArrOfdelete);
       }else{
         alert('No record selected ');
         $("#yourSelection")[0].selectedIndex = 0;
       }
    }
      /*delete*/
        /*Change Status*/
     if($(this).val() == 'ChangeStatus'){
      var dataArrOfStatus  = new Array();
      ;
       if($('input:checkbox:checked').length > 0){
          $('input:checkbox:checked').each(function(){
               if($(this).attr('id')!='checkAll'){
                dataArrOfStatus.push($(this).attr('id'));
               }
          });
          UpdateStatusOfSlected(dataArrOfStatus); 
          console.log(dataArrOfStatus);
        //window.location.replace("<?php echo base_url(); ?>Mod/changeStatusMultipleLeads");
       }else{
         alert('No record selected ');
         $("#yourSelection")[0].selectedIndex = 0;
       }

    }
    /*Active*/
    /*Add notes*/
     if($(this).val() == 'AddNote'){
      var dataArrOfNotes  = new Array();
       if($('input:checkbox:checked').length > 0){
          $('input:checkbox:checked').each(function(){
            if($(this).attr('id')!='checkAll'){
                dataArrOfNotes.push($(this).attr('id'));
               }
          });
          UpdateNotesOfSlected(dataArrOfNotes); 
          console.log(dataArrOfNotes);
          //window.location.reload(false);
       }else{
         alert('No record selected ');
         $("#yourSelection")[0].selectedIndex = 0;
       }

    }
    /*mails*/
     /*Send Emails*/
     if($(this).val() == 'SendEmailstoAll'){
      var dataArrOfEmails  = new Array();
       if($('input:checkbox:checked').length > 0){
          $('input:checkbox:checked').each(function(){
            if($(this).attr('id')!='checkAll'){
                dataArrOfEmails.push($(this).attr('id'));
               }
          });
          SendEMailsToSlected(dataArrOfEmails); 
          console.log(dataArrOfEmails);
          //window.location.reload(false);
       }else{
         alert('No record selected ');
         $("#yourSelection")[0].selectedIndex = 0;
       }

    }
    /*Send Emails*/
     /*Users*/
     /*Change user*/
     if($(this).val() == 'ChangeUser'){
      var dataArrOfChangeUser  = new Array();
       if($('input:checkbox:checked').length > 0){
          $('input:checkbox:checked').each(function(){
            if($(this).attr('id')!='checkAll'){
                dataArrOfChangeUser.push($(this).attr('id'));
               }
          });
          ChangeUserSlected(dataArrOfChangeUser); 
          console.log(dataArrOfChangeUser);
          //window.location.reload(false);
       }else{
         alert('No record selected ');
         $("#yourSelection")[0].selectedIndex = 0;
       }

    }
    /*Change user*/
    /*Change Wip*/
     if($(this).val() == 'ChangeWIPAgent'){
      var dataArrOfWIPAgent  = new Array();
       if($('input:checkbox:checked').length > 0){
          $('input:checkbox:checked').each(function(){
            if($(this).attr('id')!='checkAll'){
                dataArrOfWIPAgent.push($(this).attr('id'));
               }
          });
          ChangeWIPAgentSlected(dataArrOfWIPAgent); 
          console.log(dataArrOfWIPAgent);
          //window.location.reload(false);
       }else{
         alert('No record selected ');
         $("#yourSelection")[0].selectedIndex = 0;
       }

    }
    /*Change Wip*/
    /*Change Claim Handler*/
     if($(this).val() == 'ChangeClaimHandler'){
      var dataArrClaimHandler  = new Array();
       if($('input:checkbox:checked').length > 0){
          $('input:checkbox:checked').each(function(){
            if($(this).attr('id')!='checkAll'){
                dataArrClaimHandler.push($(this).attr('id'));
               }
          });
          ChangeClaimHandlerSlected(dataArrClaimHandler); 
          console.log(dataArrClaimHandler);
          //window.location.reload(false);
       }else{
         alert('No record selected ');
         $("#yourSelection")[0].selectedIndex = 0;
       }

    }
    /*Change  Claim Handler*/

});
    
     /*##########################update status################################*/
function UpdateStatusOfSlected(seekers) 
    {
         var arrStr = encodeURIComponent(JSON.stringify(seekers));
        $.ajax({
           
            url: "<?php echo base_url(); ?>Mod/changeStatusMultipleLeads",
            type: "POST",
            dataofstatus    : {'dataofstatus' : arrStr},    
            success: function()
                        {
                        window.location.replace("<?php echo base_url(); ?>Mod/changeStatusMultipleLeads?array=" + arrStr);
                            /*alert("ok");*/                                    
                          
                        },
            error: function()
                        {
                            alert("error");                                    
                        }
        });
    }
function UpdateNotesOfSlected(seekers) 
    {
        var arrStr = encodeURIComponent(JSON.stringify(seekers));
        $.ajax({
             url: "<?php echo base_url(); ?>Mod/AddMultipleLeadsNotes",
            type: "POST",
            dataofnotes    : {'dataofnotes' : arrStr},    
            success: function()
                        {
                            window.location.replace("<?php echo base_url(); ?>Mod/AddMultipleLeadsNotes?array=" + arrStr);
                            /*alert("ok");*/                                    
                        },
                        
            error: function()
                        {
                            alert("error");                                    
                        }
        });
    }
    
    function DeletesendResponse(dataArrOfdelete){
         var arrStr = encodeURIComponent(JSON.stringify(dataArrOfdelete));
        $.ajax({
            type    : 'POST',
            url: "<?php echo base_url(); ?>Mod/Multiple_Delete_Leads",
            data_ofdelete    : {'data_ofdelete' : arrStr},
            success : function(response){
                        alert("response");
                      },
            error   : function(errResponse){
                       alert("error");    
                      }                     
        });
    }
    function SendEMailsToSlected(dataArrOfEmails){
        var arrStr = encodeURIComponent(JSON.stringify(dataArrOfEmails));
        $.ajax({
             url: "<?php echo base_url(); ?>Mod/SendMultipleLeadsEmailsToClient",
            type: "POST",
            dataofEmails    : {'dataofEmails' : arrStr},    
            success: function()
                        {
                            window.location.replace("<?php echo base_url(); ?>Mod/SendMultipleLeadsEmailsToClient?array=" + arrStr);
                            /*alert("ok");*/                                    
                        },
                        
            error: function()
                        {
                            alert("error");                                    
                        }
        });
    }
    /*Users*/
    function ChangeUserSlected(dataArr){
        var arrStr = encodeURIComponent(JSON.stringify(dataArr));
        $.ajax({
             url: "<?php echo base_url(); ?>Mod/MultipleLeadsUserChange",
            type: "POST",
            dataArr    : {'dataArr' : arrStr},    
            success: function()
                        {
                            window.location.replace("<?php echo base_url(); ?>Mod/MultipleLeadsUserChange?array=" + arrStr);
                            /*alert("ok");*/                                    
                        },
                        
            error: function()
                        {
                            alert("error");                                    
                        }
        });
    }
    function ChangeWIPAgentSlected(dataArr){
        var arrStr = encodeURIComponent(JSON.stringify(dataArr));
        $.ajax({
             url: "<?php echo base_url(); ?>Mod/MultipleLeadsAgentChange",
            type: "POST",
            dataArr    : {'dataArr' : arrStr},    
            success: function()
                        {
                            window.location.replace("<?php echo base_url(); ?>Mod/MultipleLeadsAgentChange?array=" + arrStr);
                            /*alert("ok");*/                                    
                        },
                        
            error: function()
                        {
                            alert("error");                                    
                        }
        });
    }
    function ChangeClaimHandlerSlected(dataArr){
        var arrStr = encodeURIComponent(JSON.stringify(dataArr));
        $.ajax({
             url: "<?php echo base_url(); ?>Mod/MultipleLeadsClaimHandlerChange",
            type: "POST",
            dataArr    : {'dataArr' : arrStr},    
            success: function()
                        {
                            window.location.replace("<?php echo base_url(); ?>Mod/MultipleLeadsClaimHandlerChange?array=" + arrStr);
                            /*alert("ok");*/                                    
                        },
                        
            error: function()
                        {
                            alert("error");                                    
                        }
        });
    }
    
    /*Users*/
    
       /*##########################update status################################*/
</script>
