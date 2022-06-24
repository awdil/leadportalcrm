<footer class="footer text-center"> &copy; <?php echo date("Y") ?> Copyright 2020 Leads Portal. All Rights Reserved.  </footer>

</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('public/adminAssets/'); ?>bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--Counter js -->
<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/counterup/jquery.counterup.min.js"></script>

<!--slimscroll JavaScript -->
<script src="<?php echo base_url('public/adminAssets/'); ?>js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('public/adminAssets/'); ?>js/waves.js"></script>

<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/html5-editor/wysihtml5-0.3.0.js"></script>
<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/html5-editor/bootstrap-wysihtml5.js"></script>
<!--<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/dropzone-master/dist/dropzone.js"></script>-->

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url('public/adminAssets/'); ?>js/custom.min.js"></script>
<script src="<?php echo base_url('public/adminAssets/'); ?>js/jasny-bootstrap.js"></script>
<!--Style Switcher -->
<!--<script src="<?php // echo base_url('public/adminAssets/');   ?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>-->



<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/switchery/dist/switchery.min.js"></script>
<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>

<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

 <script src="<?php echo base_url('public/adminAssets/'); ?>node_modules/moment/moment.js"></script>
<script src='<?php echo base_url('public/adminAssets/'); ?>node_modules/calendar/dist/fullcalendar.min.js'></script>
   
<!--asstes bootsrap date time-->
<!--<script src="<?php echo base_url('public/adminAssets/'); ?>assets_date_time/bootstrap/js/bootstrap.min.js"></script>-->
<script src="<?php echo base_url('public/adminAssets/'); ?>assets_date_time/js/bootstrap-datetimepicker.js"></script>
<script src="<?php echo base_url('public/adminAssets/'); ?>assets_date_time/js/locales/bootstrap-datetimepicker.fr.js"></script>
<script>
    jQuery(document).ready(function () {
        $(".select2").select2();
        $('.selectpicker').selectpicker();

        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });

    });
    
    $(".form-changeleads-status").submit(function(){
    return true;
    });
   
</script>
<!--Style Switcher -->
<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>


<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
<script src="<?php echo base_url('public/adminAssets/'); ?>js/jquery-ui.js"></script>
<script src="<?php echo base_url('public/adminAssets/'); ?>js/wickedpicker.min.js"></script>
<script src="<?php echo base_url('public/adminAssets/'); ?>/plugins/bower_components/dropify/dist/js/dropify.min.js"></script>


<!--https://code.jquery.com/jquery-3.3.1.js
https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js
https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js-->


<script type="text/javascript">
    
    $(document).ready(function() {

         $('.textarea_editor').wysihtml5();
        $('.textarea_editor_1').wysihtml5();
        $('.textarea_editor_2').wysihtml5();
        
    function readURL(input, divID, divClass) {
        for(var i =0; i< input.files.length; i++){
            if (input.files[i]) {
            var reader = new FileReader();

            reader.onload = function (e) {
               var img = $('<div class="'+divClass+'"><img id="dynamic" src="'+e.target.result+'" class="img-responsive img-thumbnail" style="margin-bottom: 20px; width: 50%" ></div>');
//               img.attr('src', e.target.result);
               img.appendTo('#' + divID);  
            }
            
            reader.readAsDataURL(input.files[i]);
            
           }
        }
    }

    function readVidURL(input, divID, divClass) {
        for(var i =0; i< input.files.length; i++){
            if (input.files[i]) {
            var reader = new FileReader();

            reader.onloadstart = function(e) {
               var loader = $("<div style='text-align: center;'><img src='https://miro.medium.com/max/1158/1*9EBHIOzhE1XfMYoKz1JcsQ.gif'></div>");  
//               var loader = $("Hello world");  
               loader.appendTo('#files_videos_of_disrepair_loader');  
            };
            
//            reader.onprogress = function(event) {
//                if (event.lengthComputable) {
//                    if (LoadingBarVisible)
//                        ShowLoadingBar();
//                        AddProgress();
//                }
//            };

//reader.onloadstart = (e) => {
//    console.log('start');
//};

            reader.onload = function (e) {
                
               $('#files_videos_of_disrepair_loader').html('');
               var img = $('<div class="'+divClass+'"><video width="500" controls><source src="'+e.target.result+'"></video></div><br>');
//               img.attr('src', e.target.result);
               img.appendTo('#' + divID);  
               
            }
            
            reader.readAsDataURL(input.files[i]);
            
           }
        }
    }


    $("#tenancy_agreement").change(function(){
    
        $('#files_tenancy_agreement').html('');
        
        var divID       = "files_tenancy_agreement";
        var divClass    = "col-md-6 col-md-offset-3";
        
        readURL(this, divID, divClass);
        
    });
    
    $("#proof_of_rental_payment").change(function(){
    
        $('#files_proof_of_rental_payment').html('');
        
        var divID       = "files_proof_of_rental_payment";
        var divClass    = "col-md-6 col-md-offset-3";
        
        readURL(this, divID, divClass);
        
    });
    
    $("#survey_report").change(function(){
    
        $('#files_survey_report').html('');
        
        var divID       = "files_survey_report";
        var divClass    = "col-md-6 col-md-offset-3";
        
        readURL(this, divID, divClass);
        
    });

    $("#pictures_of_disrepair").change(function(){
    
        $('#files_pictures_of_disrepair').html('');
        
        var divID       = "files_pictures_of_disrepair";
        var divClass    = "col-md-3";
        
        readURL(this, divID, divClass);
        
    });
        
    $("#videos_of_disrepair").change(function(){
    
        $('#files_videos_of_disrepair').html('');
        var divID       = "files_videos_of_disrepair";
        var divClass    = "col-md-6 col-md-offset-3";
        readVidURL(this, divID, divClass);
        
    });
        
//    $('#files_videos_of_disrepair').after('<embed src="'+e.target.result+'" width="450" height="300">');

    $("#Document_4").change(function(){
    
        $('#files_Document_4').html('');
        var divID       = "files_Document_4";
        var divClass    = "col-md-6 col-md-offset-3";
        readURL(this, divID, divClass);
        
    });

    $("#Document_3").change(function(){
    
        $('#files_Document_3').html('');
        var divID       = "files_Document_3";
        var divClass    = "col-md-6 col-md-offset-3";
        readURL(this, divID, divClass);
        
    });

    $("#Document_2").change(function(){
    
        $('#files_Document_2').html('');
        var divID       = "files_Document_2";
        var divClass    = "col-md-6 col-md-offset-3";
        readURL(this, divID, divClass);
        
    });

    $("#Document_1").change(function(){
    
        $('#files_Document_1').html('');
        var divID       = "files_Document_1";
        var divClass    = "col-md-6 col-md-offset-3";
        readURL(this, divID, divClass);
        
    });

        /*New footer Start*/
        
    <?php if ($this->uri->segment(2) == 'inbox'){ ?>

        setInterval(function()
        { 
            $.ajax({

              type: "post",
              url: "<?php echo base_url('KwikMail/getInbox'); ?>",
        //      datatype:"html",
              success:function(data)
              {
                  $('#html-inbox-table').html(data);
              }
            });
        }, 7000);//time in milliseconds     

    <?php } ?>

        setInterval(function()
        { 
            $.ajax({

              type: "post",
              url: "<?php echo base_url('KwikMail/getInboxNotification'); ?>",
        //      datatype:"html",
              success:function(data)
              {
                  $('#unread_count').html(data);
              }
            });
        }, 1000);//time in milliseconds     

    <?php if ($this->uri->segment(2) == 'indox_detial'){ ?>

        setInterval(function()
        { 

            var url = $('#url').val();
            $.ajax({

              type: "post",
    //          url: "<?php // echo base_url('KwikMail/getInboxDetial'); ?>",
              url: "<?php echo base_url('KwikMail/getInboxDetialNotification'); ?>",
              data: "url='<?php echo base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . urlencode($this->uri->segment(3)); ?>'",

        //      datatype:"html",
              success:function(data)
              {
                  $('#notification-new-msg').html(data);
              }
            });
        }, 10000);//time in milliseconds     

    <?php } ?> 

        $('#reply_all').click(function (){

            $('#form-sender-replay').show();
            $('#mail_to').val('<?php echo (isset($single_mail)) ? $single_mail->reciever_mails : ''; ?>');
            $('#mail_cc').val('<?php echo (isset($single_mail)) ? $single_mail->mail_cc_mails : ''; ?>');
            $('#mail_bcc').val('<?php echo (isset($single_mail)) ? $single_mail->mail_bcc_mails : ''; ?>');
            $("#for-area").hide();
            $("#reply-all-area").show();
            $("#reply-area").hide();
            $("#action_type").val('');        
            $("#action_type").val('reply_all');
            $("#fwd_attchment").hide();        
        });

        $('#reply').click(function (){

            $('#form-sender-replay').show();
            $('#mail_to').val('<?php echo (isset($single_mail)) ? $single_mail->reciever_mails : ''; ?>');
            $('#mail_cc').val('');
            $('#mail_bcc').val('');

            $("#for-area").hide();
            $("#reply-all-area").hide();
            $("#reply-area").show();
            $("#action_type").val('');
            $("#action_type").val('reply');
            $("#fwd_attchment").hide();        

        });

        $('#forward').click(function (){

            $('#form-sender-replay').show();

            $('#mail_to').val('');
            $('#mail_cc').val('');
            $('#mail_bcc').val('');

            $("#for-area").show();
            $("#reply-all-area").hide();
            $("#reply-area").hide();
            $("#fwd_attchment").show();
            $("#action_type").val('');        
            $("#action_type").val('forward');



        });


    <?php echo $this->session->flashdata('mailSent'); ?>

            $('#to').keyup(function () {
                var value = $(this).val();

                $.ajax({

                    url: '<?php echo base_url() . 'Mod/getAjaxPermissions' ?>',
                    type: 'post',
                    data: "roleId=" + roleID + "&seniro=" + seniro + "&accessControlID=" + accessControlID,

                    success: function (response) {
                        $('#permission').show();
                        $('#permission').html(response);
                    }

                });
            });

        // Dropzone class:

      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myList li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

        /*New footer end*/
    });    
    
    
$(document).ready(function () {
    
    $('#contactphone').val('Yes');
    $('#contactsms').val('Yes');
    $('#contactemail').val('Yes');
    $('#contactmail').val('Yes');
    
    
});
    
    
</script>

<script type='text/javascript'>
    
    

$(document).ready(function () {

<?php if ($this->uri->segment(2) == "updateUser"): ?>
        
                var userType = $("#userType").val();
                
                if (userType == 1){
                    $("#allCampaign").show();
                    $("#allCompanies").show();
                }
                
                if (userType > 1){
                    $("#allCampaign").hide();
                    $("#allCompanies").hide();
                }
                
<?php endif; ?>                


        $(function() {
            
$('#dateofbirth, #livedatesolicitor, #set-DOB, #start_date, #end_date, #passenger_1_date_of_birth, #passenger_2_date_of_birth, #passenger_3_date_of_birth, #passenger_4_date_of_birth, #passenger_5_date_of_birth, #passenger_6_date_of_birth, \n\
    #date_hire_provided, #date_invoice_paid, #date_introducer_paid, #date_agent_paid, #ref_date, #rep_due, #preferred_date_to_call, #DateDisrepairfirstnotice, #date_HDR_noticed, #date_instructed, #DatetriageInvoicePaid ', ).datepicker({
                changeYear: true,
                changeMonth: true,
                showButtonPanel: true,
                dateFormat: 'yy-mm-dd',
                yearRange: "1930:2030"
            });
            
        });


var options = {
//  now: "12:35", //hh:mm 24 hour format only, defaults to current time
  twentyFour: false, //Display 24 hour format, defaults to false
  upArrow: 'wickedpicker__controls__control-up', //The up arrow class selector to use, for custom CSS
  downArrow: 'wickedpicker__controls__control-down', //The down arrow class selector to use, for custom CSS
  close: 'wickedpicker__close', //The close class selector to use, for custom CSS
  hoverState: 'hover-state', //The hover state class to use, for custom CSS
  title: 'Timepicker', //The Wickedpicker's title,
  showSeconds: false, //Whether or not to show seconds,
  secondsInterval: 1, //Change interval for seconds, defaults to 1,
  minutesInterval: 1, //Change interval for minutes, defaults to 1
  beforeShow: null, //A function to be called before the Wickedpicker is shown
  show: null, //A function to be called when the Wickedpicker is shown
  clearable: false, //Make the picker's input clearable (has clickable "x")
};

var optionsfortime2 = {
  now: "1:00", //hh:mm 24 hour format only, defaults to current time
  twentyFour: true, //Display 24 hour format, defaults to false
  upArrow: 'wickedpicker__controls__control-up', //The up arrow class selector to use, for custom CSS
  downArrow: 'wickedpicker__controls__control-down', //The down arrow class selector to use, for custom CSS
  close: 'wickedpicker__close', //The close class selector to use, for custom CSS
  hoverState: 'hover-state', //The hover state class to use, for custom CSS
  title: 'Timepicker', //The Wickedpicker's title,
  showSeconds: false, //Whether or not to show seconds,
  secondsInterval: 1, //Change interval for seconds, defaults to 1,
  minutesInterval: 1, //Change interval for minutes, defaults to 1
  beforeShow: null, //A function to be called before the Wickedpicker is shown
  show: null, //A function to be called when the Wickedpicker is shown
  clearable: false, //Make the picker's input clearable (has clickable "x")
};

$('#TimeofAccident, #PreferredtimeofContact, #PreferredTimetoCall, #start_time11, #end_time11').wickedpicker(options);
    $('#start_time, #end_time').wickedpicker(optionsfortime2);


    $("#role").change(function () {
                
        var roleID = $("#role").val();
        var seniro = $("#seniro").val();
        var accessControlID = $("#accessControlID").val();
        
        if (roleID){
            
            $.ajax({
                
                url: '<?php echo base_url() . 'Mod/getAjaxPermissions' ?>',
                type: 'post',
                data: "roleId=" + roleID + "&seniro=" + seniro + "&accessControlID=" + accessControlID,

                success: function (response) {
                    $('#permission').show();
                    $('#permission').html(response);
                }

            });            
            
        }else{
        
            $('#permission').hide();
            $('#permission').html("<option>Select Permission</option>");
            $('#permission').show();
            
        }
                
    });

<?php if ($this->uri->segment(2) == "editUser"): ?>

            $("#user").hide();

            var getUserPermissions = $('#getUserPermissions').val();
            var userType = $("#userType").val();
            
                if (userType == 1){
                    $("#allCampaign").show();
                    $("#allCompanies").show();
                }
                
                if (userType > 1){
                    $("#allCampaign").hide();
                    $("#allCompanies").hide();
                }
                

            if (userType) {

                $.ajax({
                    url: '<?php echo base_url() . 'Mod/getUserPermission' ?>',
                    type: 'post',
                    data: "userType=" + userType + "&getUserPermissions=" + getUserPermissions,

                    success: function (response) {
                        $('#userPermission').html(response);
                    }

                });
                $("#userPermission").show();
            }

            if (userType == '') {
                $("#userPermission").hide();
            }
            $("#userType").change(function () {
                var userType = $(this).children("option:selected").val();
                var getUserPermissions = $('#getUserPermissions').val();
                var userType = $("#userType").val();
                
                if (userType == 1){
                    $("#allCampaign").show();
                    $("#allCompanies").show();
                }
                
                if (userType > 1){
                    $("#allCampaign").hide();
                    $("#allCompanies").hide();
                }
                

                if (userType) {
                    $.ajax({
                        url: '<?php echo base_url() . 'Mod/getUserPermission' ?>',
                        type: 'post',
                        data: "userType=" + userType + "&getUserPermissions=" + getUserPermissions,

                        success: function (response) {
                            $('#userPermission').html(response);
                        }
                    });
                    $("#userPermission").show();
                }

                if (userType == '') {
                    $("#userPermission").hide();
                }

            });
<?php endif; ?>

<?php if ($this->uri->segment(2) == "updateUser"): ?>
            $("#userType").change(function () {
                var userType = $(this).children("option:selected").val();
                var getUserPermissions = $('#getUserPermissions').val();
                var userType = $("#userType").val();
                
                if (userType == 1){
                    $("#allCampaign").show();
                    $("#allCompanies").show();
                }
                
                if (userType > 1){
                    $("#allCampaign").hide();
                    $("#allCompanies").hide();
                }
                

                if (userType) {
                    $.ajax({
                        url: '<?php echo base_url() . 'Mod/getUserPermission' ?>',
                        type: 'post',
                        data: "userType=" + userType + "&getUserPermissions=" + getUserPermissions + "&seniro=2",

                        success: function (response) {

                            if (response == 2) {
                                $("#user").show();
                                $('#userPermission').hide();
                            } else {
                                $('#userPermission').html(response);
                                $("#userPermission").show();
                                $("#user").hide();
                            }
                        }

                    });
    //               $("#userPermission").show(); 
    //                       $("#user").hide(); 
                }

                if (userType == '') {
                    $("#userPermission").hide();
                }

            });
<?php endif; ?>

<?php if ($this->uri->segment(2) == "CreateUser"): ?>
            
            $("#userType").change(function () {
            var userRoleID = "<?php echo @$_POST['userType']; ?>";                
                
                var userType = $(this).children("option:selected").val();
                var getUserPermissions = $('#getUserPermissions').val();
                
                var userType = $("#userType").val();

                if (userType == 1){
                    $("#allCampaign").show();
                    $("#allCompanies").show();
                }
                
                if (userType > 1){
                    $("#allCampaign").hide();
                    $("#allCompanies").hide();
                }
                



                if (userType == userRoleID){
                    var seniro = 2;
                }else{
                    var seniro = 3;                    
                }

//                alert(seniro);


                if (userType) {
                    $.ajax({
                        url: '<?php echo base_url() . 'Mod/getUserPermission' ?>',
                        type: 'post',
                        data: "userType=" + userType + "&getUserPermissions=" + getUserPermissions + "&seniro=" + seniro,

                        success: function (response) {
                            
//                            alert(response);
                            
                            if (response == 2) {
                                $("#user").show();
                                $('#userPermission').hide();
                            } else {
                                $('#userPermission').html(response);
                                $("#userPermission").show();
                                $("#user").hide();
                            }
                        }

                    });
    //               $("#userPermission").show(); 
    //                       $("#user").hide(); 
                }

                if (userType == '') {
                    $("#userPermission").hide();
                }

            });
            
            
<?php endif; ?>

<?php if ($this->uri->segment(2) == "AddUser"): ?>
            $("#userType").change(function () {
                var userType = $(this).children("option:selected").val();

//                alert(userType);

                if (userType == 1){
                    $("#allCampaign").show();
                    $("#allCompanies").show();
                }
                
                if (userType > 1){
                    $("#allCampaign").hide();
                    $("#allCompanies").hide();
                }
                
                if (userType) {
                    $.ajax({
                        url: '<?php echo base_url() . 'Mod/getUserPermission' ?>',
                        type: 'post',
                        data: "userType=" + userType,

                        success: function (response) {
                            $('#userPermission').html(response);
                        }
                    });

                    $("#userPermission").show();
                    $("#user").hide();

                }

                if (userType == '') {
                    $("#userPermission").hide();
                }


            });

<?php endif; ?>


//////////////////////////////// Create Alerts ///////////////////////////////////////

<?php if ($this->session->flashdata('Success')) { ?>
            swal("User Created!", "Activation Code Sended to User Mail Address.", "success");
<?php } ?>


<?php if ($this->session->flashdata('SuccessConmpanies')) { ?>
            swal("Company Created!", "Company Has Been Created.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessSolicitors')) { ?>
            swal("Solicitors Created!", "Solicitor Has Been Created.", "success");
<?php } ?>

<?php if ($this->session->flashdata('Successcampaigns')) { ?>
            swal("New Campaign Created!", "New Campaign is Created.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessHR')) { ?>
            swal("New HR Created!", "New HR is Created.", "success");
<?php } ?>

<?php if ($this->session->flashdata('SuccessRoles')) { ?>
            swal("Role Created!", "Role Has Been Created.", "success");
<?php } ?>

<?php if ($this->session->flashdata('SuccessPermission')) { ?>
            swal("Permission Created!", "Permission Has Been Created.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessAccessControlData')) { ?>
            swal("Access Control Created!", "Access Control Has Been Created.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessLeadStatusData')) { ?>
            swal("Lead Status Created!", "Lead Status Has Been Created.", "success");
<?php } ?>

<?php if ($this->session->flashdata('SuccessLeadData')) { ?>
            swal("Lead Created!", "Lead Has Been Created.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessEmail')) { ?>
            swal("Email!", "Email Has Been Sent.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessLeadsBatchData')) { ?>
            swal("Leads Batch!", "Leads Batch Has been Loded.", "success");
<?php } ?>

//////////////////////////////// Update Alerts ///////////////////////////////////////

<?php if ($this->session->flashdata('userUpdateSuccess')) { ?>
            swal("User Record Updated!", "User Record Has Been Updated.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessUpdateConmpanies')) { ?>
            swal("Company Record Updated!", "Company Record Has Been Updated.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessUpdateSolicters')) { ?>
            swal("Solicitors Record Updated!", "Solicitor Record Has Been Updated.", "success");
<?php } ?>

<?php if ($this->session->flashdata('SuccessUpdateRole')) { ?>
            swal("Role Record Updated!", "Role Has Been Updated.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessUpdatePermission')) { ?>
            swal("Permission Record Updated!", "Permission Has Been Updated.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessUpdateAccessControl')) { ?>
            swal("Access Control Record Updated!", "Access Control Has Been Updated.", "success");
<?php } ?>

<?php if ($this->session->flashdata('SuccessupdateleadStatus')) { ?>
            swal("Lead Status Record Updated!", "Lead Status Has Been Updated.", "success");
<?php } ?>

<?php if ($this->session->flashdata('Successupdatelead')) { ?>
            swal("Lead Record Updated!", "Lead Has Been Updated.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessupdateChangeleadStatus')) { ?>
            swal("Lead Status Record Updated!", "Lead Status Has Been Changed.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('leadNoteSuccess')) { ?>
            swal("Lead Note Added!", "Lead Note Has Been Created and Notification mail send to Client Mail Address.", "success");
<?php } ?>

<?php if ($this->session->flashdata('updateleadNoteSuccess')) { ?>
            swal("Lead Note Updated!", "Lead Note Has Been Created and Notification mail send to Client Mail Address.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessUpdateCampaign')) { ?>
            swal("Campaign Recod Updated!", "Campaign Record Has Been Updated.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('Success_Leads_documents')) { ?>
            swal(" Documents Added!", " Documents Added.", "success");
<?php } ?>

<?php if ($this->session->flashdata('SuccessUpdateHR')) { ?>
            swal("Human Resource Record Updated!", "Human resource Updates.", "success");
<?php } ?>
    
    
<?php if ($this->session->flashdata('SuccessUpdateLeadUser')) { ?>
            swal("Lead User Has been Changed!", "Lead User Has been Changed.", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('SuccessUpdateLeadHandler')) { ?>
            swal("Lead Handler Has been Changed!", "Lead Handler Has been Changed.", "success");
<?php } ?>

<?php if ($this->session->flashdata('SuccessUpdateagentChanged')) { ?>
            swal("Agent Has been Changed!", "New Agent Asigned Now.", "success");
<?php } ?>  
    
<?php if ($this->session->flashdata('SuccessUpdateWIPUserChanged')) { ?>
            swal("User Has been Changed!", "New User Asigned Now.", "success");
<?php } ?>  
    
<?php if ($this->session->flashdata('SuccessApiInsertionLeadData')) { ?>
            swal("<?php echo $this->session->flashdata('SuccessApiInsertionLeadData') ?>", "<?php echo $this->session->flashdata('SuccessApiInsertionLeadData') ?>", "success");
<?php } ?>
    
<?php if ($this->session->flashdata('Success_user_groups')) { ?>
            swal("<?php echo $this->session->flashdata('Success_user_groups') ?>", "<?php echo $this->session->flashdata('Success_user_groups') ?>", "success");
<?php } ?>

//        });


<?php if ($this->session->flashdata('manuallyApiIntegrationleadDataError')): ?>

            swal({
                title: "Lead Record Not Exists!",
                text: "Redirect to Manage Leads Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/manageLeads'); ?>");
            });

<?php endif; ?>

<?php if ($this->session->flashdata('leadsWIPDataError')): ?>

            swal({
                title: "LeadWIP Record Not Exists!",
                text: "Redirect to Manage WIP Leads Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/manageWIP'); ?>");
            });

<?php endif; ?>
    
<?php if ($this->session->flashdata('leadsDataError')): ?>

            swal({
                title: "Lead Record Not Exists!",
                text: "Redirect to Manage Leads Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/manageLeads'); ?>");
            });

<?php endif; ?>

<?php if ($this->session->flashdata('NoUoload_Leads_documents')): ?>

            swal({
                
                title: "No New Documents Found for Upload!",
                text: "Redirect to Manage Leads Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/manageLeads'); ?>");
            });

<?php endif; ?>


<?php if ($this->session->flashdata('DataError') && $this->uri->segment(2) == "viewUser"): ?>

            swal({
                title: "User Record Not Exists!",
                text: "Redirect to Manage Users Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/Users'); ?>");
            });

<?php endif; ?>


<?php if ($this->session->flashdata('DataErrorUserGroup') && $this->uri->segment(2) == "viewUserGroup"): ?>

            swal({
                title: "User Group Record Not Exists!",
                text: "Redirect to Manage User Group Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/manageUserGroup'); ?>");
            });

<?php endif; ?>

<?php if ($this->session->flashdata('viewLeadStatusLogsDataError') && $this->uri->segment(2) == "viewLeadStatusLogs"): ?>
    
            swal({
                title: "Lead Status Logs Data Not Exists!",
                text: "Redirect to Manage Leads Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/manageLeads'); ?>");
            });
    
    
<?php endif; ?>
    
<?php if ( 
            $this->session->flashdata('solicitorDataError') && $this->uri->segment(2) == "viewSolicitor" || 
            $this->uri->segment(2) == "editSolicitor" && $this->session->flashdata('solicitorDataError')
        ): ?>

            swal({
                title: "Solicitor Record Not Exists!",
                text: "Redirect to Manage Solicitors Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/manageLeads'); ?>");
            });

<?php endif; ?>
    
<?php if ( 
            $this->session->flashdata('campanyDataError') && $this->uri->segment(2) == "viewCompany" || 
            $this->uri->segment(2) == "editCompany" && $this->session->flashdata('campanyDataError')
        ): ?>

            swal({
                title: "Company Record Not Exists!",
                text: "Redirect to Manage Companies Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/companies'); ?>");
            });

<?php endif; ?>


<?php if ( 
            $this->session->flashdata('roleDataError') && $this->uri->segment(2) == "viewRole" || 
            $this->uri->segment(2) == "editRole" && $this->session->flashdata('roleDataError')
        ): 
?>

            swal({
                title: "Role Record Not Exists!",
                text: "Redirect to Manage Roles Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/roles'); ?>");
            });

<?php endif; ?>

<?php if (
            $this->session->flashdata('permissionDataError') && $this->uri->segment(2) == "viewPermission" || 
            $this->uri->segment(2) == "editPermission" && $this->session->flashdata('permissionDataError')
        ): 
?>

            swal({
                title: "Permission Record Not Exists!",
                text: "Redirect to Manage Permissions Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/permissions'); ?>");
            });

<?php endif; ?>

<?php if (
            $this->session->flashdata('leadStatusDataError') && $this->uri->segment(2) == "viewLeadStatus" || 
            $this->uri->segment(2) == "editLeadStatus" && $this->session->flashdata('leadStatusDataError') ||
            $this->uri->segment(2) == "updateLeadStatus" && $this->session->flashdata('leadStatusDataError') 
        ): 
?>

            swal({
                title: "Lead Status Record Not Exists!",
                text: "Redirect to Manage Lead Statuses Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/manageLeadStatuses'); ?>");
            });

<?php endif; ?>

<?php if (
        
            $this->session->flashdata('leadsDataError') && $this->uri->segment(2) == "viewLead" || 
            $this->uri->segment(2) == "editLead" && $this->session->flashdata('leadsDataError') ||
            $this->uri->segment(2) == "updateLead" && $this->session->flashdata('leadsDataError') || 
            $this->uri->segment(2) == "changeLeadStatus" && $this->session->flashdata('changeLeadStatusDataError') || 
            $this->uri->segment(2) == "updateChangeLeadStatus" && $this->session->flashdata('changeLeadStatusDataError') ||
            $this->uri->segment(2) == "addLeadNote" && $this->session->flashdata('leadNoteDataError') ||
            $this->uri->segment(2) == "createLeadNote" && $this->session->flashdata('leadNoteDataError') ||
            $this->uri->segment(2) == "viewLeadNote" && $this->session->flashdata('leadNoteDataError') ||
            $this->uri->segment(2) == "editLeadNote" && $this->session->flashdata('leadNoteDataError') ||
            $this->uri->segment(2) == "updateLeadNote" && $this->session->flashdata('leadNoteDataError') || 
            $this->uri->segment(2) == "viewLinkedLeads" && $this->session->flashdata('linkedLeadDataError') ||
            $this->uri->segment(2) == "cloneLead" && $this->session->flashdata('leadsDataError') ||  
            $this->uri->segment(2) == "HDRDocuments" && $this->session->flashdata('leadsDataError') ||  
            $this->uri->segment(2) == "uploadHDRDocuments" && $this->session->flashdata('leadsDataError') ||  
            $this->uri->segment(2) == "changeLeadUser" && $this->session->flashdata('changeLeadUserDataError') ||   
            $this->uri->segment(2) == "updateLeadUser" && $this->session->flashdata('changeLeadUserDataError') 
//            $this->uri->segment(2) == "uploadDocuments" && $this->session->flashdata('leadsDataError')  
//            $this->uri->segment(2) == "manuallyApiIntegration" && $this->session->flashdata('manuallyApiIntegrationleadDataError')    
                    
        ): 
?>

            swal({
                title: "Lead Record Not Exists!",
                text: "Redirect to Manage Leads Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/manageLeads'); ?>");
            });

<?php endif; ?>
    
<?php if (
        
            $this->session->flashdata('HRDataError') && $this->uri->segment(2) == "editHumanResource" || 
            $this->uri->segment(2) == "updateHumanResource" && $this->session->flashdata('HRDataError') ||
            $this->uri->segment(2) == "viewHumanResource" && $this->session->flashdata('HRDataError') 
                    
        ): 
?>

            swal({
                title: "Record Not Exists!/FLG",
                text: "Redirect to Manage Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/manageHumanResource'); ?>");
            });

<?php endif; ?>

<?php if (
        
            $this->session->flashdata('campaignDataError') && $this->uri->segment(2) == "editCampaign" || 
            $this->uri->segment(2) == "updateCampaign" && $this->session->flashdata('campaignDataError') ||
            $this->uri->segment(2) == "viewCampaign" && $this->session->flashdata('campaignDataError') 
                    
        ): 
?>

            swal({
                title: "Campaign Record Not Exists!",
                text: "Redirect to Manage Campaigns Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/manageCampaign'); ?>");
            });

<?php endif; ?>

<?php if (
            $this->session->flashdata('accessControlDataError') && $this->uri->segment(2) == "viewAccessControl" || 
            $this->session->flashdata('accessControlDataError') && $this->uri->segment(2) == "editAccessControl" ||  
            $this->session->flashdata('accessControlDataError') && $this->uri->segment(2) == "updateAccessControl"  
        ): 
?>

            swal({
                title: "Access Control Record Not Exists!",
                text: "Redirect to Manage Leads Page. Click To OKAY Button to complete the Process...",
                type: "warning",
    //            showCancelButton: true,   
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/accessControls'); ?>");
            });

<?php endif; ?>


<?php if ($this->session->flashdata('DataEditError') && $this->uri->segment(2) == "editUser"): ?>

            swal({
                title: "User Record Not Exists!",
                text: "Redirect to Manage Users Page. Click To OKAY Button to complete the Process...",
                type: "warning",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OKAY!",
                closeOnConfirm: false
            }, function () {
                window.location.assign("<?php echo base_url('Mod/Users'); ?>");
            });
<?php endif; ?>
    });
    
    function getInsertedApiRec(id){
        
        if (id){
            
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/getInsertedApiRec' ?>',
                        type: 'post',
                        data: "getInsertedApiRec=" + id,

                        success: function (response) {
                            
                            $('#api_rec').html(response);
                            
                        }

                    });
            
            
        }
        
    }
    
    function deleteLeadNote(id) {
        
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {
                
//                var value = $('button').attr('data-value');

                if (id) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deleteLeadNote' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            
//                            console.log(response);
                            
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to Manage Lead Note Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/addLeadNote/') . $this->uri->segment(3); ?>");
                                });
                            } else {
                                swal({
                                    title: "Lead Note Record Not Exists!",
                                    text: "Redirect to Manage Lead Statuses Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/addLeadNote/') . $this->uri->segment(3); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }
    
     function deleteLeadsEmails(id) {
        
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {
                
//                var value = $('button').attr('data-value');

                if (id) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deleteLeadmailMessages' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            
                            console.log(response);
                            
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to your Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/New_messageWithLeads/') . $this->uri->segment(3); ?>");
                                });
                            } else {
                                swal({
                                    title: "Record Not Exists!",
                                    text: "Redirect to your Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/New_messageWithLeads/') . $this->uri->segment(3); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }
    
    function deleteLead(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {

//                var value = $('button').attr('data-value');
                var value = id;

                if (value) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deleteLead' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to Manage Lead Statuses Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/manageLeads'); ?>");
                                });
                            } else {
                                swal({
                                    title: "User Record Not Exists!",
                                    text: "Redirect to Manage Lead Statuses Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/manageLeads'); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }
    
    function deleteLeadStatuses(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {

                var value = id;

                if (value) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deleteLeadStatus' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to Manage Lead Statuses Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/manageLeadStatuses'); ?>");
                                });
                            } else {
                                swal({
                                    title: "User Record Not Exists!",
                                    text: "Redirect to Manage Lead Statuses Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/manageLeadStatuses'); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }
    
    function deleteAccessControl(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {

                var value = id;
                
                if (value) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deleteAccessControl' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to Manage Companies Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/accessControls'); ?>");
                                });
                            } else {
                                swal({
                                    title: "User Record Not Exists!",
                                    text: "Redirect to Manage Companies Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/accessControls'); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }
    
    function deletePermission(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {

                var value = id;

                if (value) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deletePermission' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to Manage Companies Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/permissions'); ?>");
                                });
                            } else {
                                swal({
                                    title: "User Record Not Exists!",
                                    text: "Redirect to Manage Companies Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/permissions'); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }

    function deleteRole(id) {
    
//        var value = $('button').attr('data-value');
//        alert(id);
    
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {

                var value = id;
                
                if (value) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deleteRole' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to Manage Companies Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/roles'); ?>");
                                });
                            } else {
                                swal({
                                    title: "User Record Not Exists!",
                                    text: "Redirect to Manage Companies Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/roles'); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }
    
    function deleteCompany(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {

                var value = id;

                if (value) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deleteCompany' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to Manage Companies Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/companies'); ?>");
                                });
                            } else {
                                swal({
                                    title: "User Record Not Exists!",
                                    text: "Redirect to Manage Companies Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/companies'); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }
    
    function deleteUserGroup(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {

                var value = id;

                if (value) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deleteUserGroup' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to Manage User Group Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/manageUserGroup'); ?>");
                                });
                            } else {
                                swal({
                                    title: "User Group Record Not Exists!",
                                    text: "Redirect to Manage User Group Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/manageUserGroup'); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }
    
    function deleteUser(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {

                var value = id;

                if (value) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deleteUser' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to Manage Companies Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/Users'); ?>");
                                });
                            } else {
                                swal({
                                    title: "User Record Not Exists!",
                                    text: "Redirect to Manage Companies Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/Users'); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }
    
    function deleteCampaign(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {

                var value = id;

                if (value) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deleteCampaign' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to Manage Campaign Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/manageCampaign'); ?>");
                                });
                            } else {
                                swal({
                                    title: "Campaign Record Not Exists!",
                                    text: "Redirect to Manage Campaign Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/manageCampaign'); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }
    function deleteHR(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {

                var value = id;

                if (value) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deleteHumanResource' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to Manage HR Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/manageHumanResource'); ?>");
                                });
                            } else {
                                swal({
                                    title: "HR Record Not Exists!",
                                    text: "Redirect to Manage HR Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/manageHumanResource'); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }

    
    function deleteLeadwip(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {

            if (isConfirm) {

//                var value = $('button').attr('data-value');
                var value = id;

                if (value) {
                    $.ajax({

                        url: '<?php echo base_url() . 'Mod/deleteLeadwip' ?>',
                        type: 'post',
                        data: "delID=" + id,

                        success: function (response) {
                            if (response) {
                                swal({
                                    title: "Deleted!",
                                    text: "Redirect to Manage Lead Statuses Page. Click To OKAY Button to complete the Process...",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/manageWIP'); ?>");
                                });
                            } else {
                                swal({
                                    title: "User Record Not Exists!",
                                    text: "Redirect to Manage Lead Statuses Page. Click To OKAY Button to complete the Process...",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OKAY!",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.assign("<?php echo base_url('Mod/manageWIP'); ?>");
                                });
                            }
                        }

                    });
                }
            } else {

                swal("Cancelled", "Your imaginary file is safe :)", "error");

            }
        });
    }
</script>


<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>

<script>

    $(document).ready(function () {

   var userType = $('#userType').val();
   
    if (userType == 1){
       
        $('#user_Group_tt').hide();
       
        
    }else{
        $('#user_Group_tt').show();
    }


        $('#usersList').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadUsersData'); ?>"

        });

        $('#companiesList').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadCompaniesData'); ?>"

        });
        
        $('#MessagesList').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadMessagesData'); ?>"

        });
        
         $('#MessagesListofLeads').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadLeadsMessagesData/'). $this->uri->segment(3); ?>"

        });

        $('#rolesList').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadRoleData'); ?>"

        });

        $('#permissionList').DataTable({

            'aaSorting': [[0, 'asc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadPermissionData'); ?>"

        });

        $('#accesscontrol').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadAccessControlData'); ?>"

        });

        $('#leadStatuses').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 200,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100, 200], [5, 10, 25, 50, 100, 200]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadLeadStatuses'); ?>"

        });

        $('#user_group').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 200,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100, 200], [5, 10, 25, 50, 100, 200]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadUserGroupData'); ?>"

        });

//    $('#leads thead #filter th').each( function () {
//        var title = $('#leads thead th').eq( $(this).index() ).text();
//        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
//    });


    $('#leads thead tr').clone(true).appendTo( '#leads thead' );

    $('#leads thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        //alert(i);
        if(i == 0){
            $(this).html('<input type="checkbox" id="checkAll" />');
           }else{
            $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
           }
        if(i != 0){
            $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
        }
    } );

        


    var table =   $('#leads').DataTable({

            "columnDefs": [
                { "width": "2%", "targets": 0 },
                { "width": "7%", "targets": 1 },
                { "width": "6%", "targets": 2 },
                { "width": "6%", "targets": 3 },
                { "width": "6%", "targets": 4 },
                { "width": "7%", "targets": 5 },
                { "width": "4%", "targets": 6 },
                { "width": "6%", "targets": 7 },
                { "width": "6%", "targets": 8 },
                { "width": "8%", "targets": 9 },
                { "width": "12%", "targets": 10 },
                { "width": "6%", "targets": 11 },
                { "width": "6%", "targets": 12 },
                { "width": "6%", "targets": 13 },
                { "width": "6%", "targets": 14 },
                { "width": "6%", "targets": 15 },
            ],

            orderCellsTop: true,
            fixedHeader: true,            
//            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadLeads'); ?>"

        });
        
     /*selecting all element*/
    $("#checkAll").click(function () {
        $('#leads tbody input[type="checkbox"]').prop('checked', this.checked);
    });
/*selecting all element*/
        
$('#leadsWIP thead tr').clone(true).appendTo( '#leadsWIP thead' );

    $('#leadsWIP thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            
            if ( tablewip.column(i).search() !== this.value ) {
                /*alert(this.value );*/
                tablewip
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
        
        
var tablewip =   $('#leadsWIP').DataTable({

           /* "columnDefs": [
                { "width": "6%", "targets": 0 },
                { "width": "5%", "targets": 1 },
                { "width": "7%", "targets": 2 },
                { "width": "6%", "targets": 3 },
                { "width": "5%", "targets": 4 },
                { "width": "8%", "targets": 5 },
                { "width": "8%", "targets": 6 },
                { "width": "8%", "targets": 7 },
                { "width": "8%", "targets": 8 },
                { "width": "11%", "targets": 9 },
                { "width": "8%", "targets": 10 },
                { "width": "6%", "targets": 11 },
                { "width": "7%", "targets": 12 },
                { "width": "6%", "targets": 13 },
                { "width": "6%", "targets": 14 },
            ],*/

            orderCellsTop: true,
            fixedHeader: true,            
//            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadLeadsWIP'); ?>"

        });



//    table.columns().eq( 0 ).each( function ( colIdx ) {
//        $( 'input', table.column( colIdx ).header() ).on( 'keyup change', function () {
//            table
//                .column( colIdx )
//                .search( this.value )
//                .draw();
//        });
//    });

        
        $('#leadNotes').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadLeadNotes/') . $this->uri->segment(3); ?>"

        });
        
         $('#leadEmailsclients').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadEmailHistory/') . $this->uri->segment(3); ?>"

        });
        
        $('#leadNotesWIP').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadLeadNotesWIP/') . $this->uri->segment(3); ?>"

        });
        
        $('#LeadDetails').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadLinkedLeadsDetials/') . $this->uri->segment(3); ?>"

        });
        
        $('#linkedLeads').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadLinkedLeads/') . $this->uri->segment(3); ?>"

        });
        
        $('#lead_status_log').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadLeadStatusLogs/') . $this->uri->segment(3); ?>"

        });

        $('#campaignList').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadCampaignData') ?>"

        });
        $('#SolicitorsList').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 100,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadsolicitorsData') ?>"

        });
        
         $('#HRList').DataTable({

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 1000,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100, 1000], [5, 10, 25, 50, 100, 1000 ]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadHR') ?>"

        });
        
        $('#user_activities').DataTable({

            "columnDefs": [
                { "width": "45px", "targets": 0 },
                { "width": "85px", "targets": 1 },
                { "width": "85px", "targets": 2 },
//                { "width": "40px", "targets": 3 },
                { "width": "120px", "targets": 4 },
                { "width": "55px", "targets": 5 },
//                { "width": "55px", "targets": 6 },
//                { "width": "220px", "targets": 7 },
//                { "width": "70px", "targets": 8 },
//                { "width": "80px", "targets": 9 },
//                { "width": "55px", "targets": 10 },

 { className: "text-left", "targets": [ 3 ] }

            ],

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 1000,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100, 1000], [5, 10, 25, 50, 100, 1000]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadActivitiesData') ?>"

        });
        
          $('#user_emails_hist').DataTable({

            "columnDefs": [
                { "width": "", "targets": 0 },
                { "width": "", "targets": 1 },
                { "width": "", "targets": 2 },
                { "width": "", "targets": 4 },
                { "width": "", "targets": 5 },


 { className: "text-left", "targets": [ 3 ] }

            ],

            'aaSorting': [[0, 'desc']],
            'bJQueryUI': false,
            'bPaginate': true,
            'iDisplayLength': 1000,
            'bProcessing': true,
            'bServerSide': true,
            "lengthMenu": [[5, 10, 25, 50, 100, 1000], [5, 10, 25, 50, 100, 1000]],
            "sAjaxSource": "<?php echo base_url('Mod/adminLoadEmailData') ?>"

        });


    });

</script>

<script type="text/javascript">

$("#submitCampaignWIP").click(function(){

    var campaign        = $('#campaignWIP').val();
    var company         = $('#companyWIP').val();

    if (campaign == ''){
        $("#campaign_error").html('<br><b class="text-danger">Campaign Field Is Required.</b>');
        $('#sel-campaignWIP').addClass('has-error');
    }
        
    if (company == ''){
        $("#company_error").html('<br><b class="text-danger">Company Field Is Required.</b>');
        $('#sel-companyWIP').addClass('has-error');
    }
        
    if (campaign !== "" && company !== ""){
        
        if (campaign == "PI"){
            window.location.assign('<?php echo base_url('Mod/addWIP/'); ?>' + campaign);
        }
       /* if(campaign == "HDR"){
            window.location.assign('<?php echo base_url('Mod/addWIP/'); ?>' + campaign);            
        }
        if(campaign == "CH"){
            window.location.assign('<?php echo base_url('Mod/addWIP/'); ?>' + campaign);            
        }
         if(campaign == "EC"){
            window.location.assign('<?php echo base_url('Mod/addWIP/'); ?>' + campaign);            
        }
        if(campaign == "TR"){
            window.location.assign('<?php echo base_url('Mod/addWIP/'); ?>' + campaign);            
        }
        if(campaign == "SO"){
            window.location.assign('<?php echo base_url('Mod/addWIP/'); ?>' + campaign);            
        }*/
       

    }
        
});
    
$("#submitCampaign").click(function(){

    var campaign        = $('#campaign').val();
    var company         = $('#company').val();

    if (campaign == ''){
        $("#campaign_error").html('<br><b class="text-danger">Campaign Field Is Required.</b>');
        $('#sel-campaign').addClass('has-error');
    }
        
    if (company == ''){
        $("#company_error").html('<br><b class="text-danger">Company Field Is Required.</b>');
        $('#sel-company').addClass('has-error');
    }
        
    if (campaign !== "" && company !== ""){
        
        if (campaign == "PI"){
            window.location.assign('<?php echo base_url('Mod/addLead/'); ?>' + campaign);
        }
        if(campaign == "HDR"){
            window.location.assign('<?php echo base_url('Mod/AddHDR/'); ?>' + campaign);            
        }
        if(campaign == "CH"){
            window.location.assign('<?php echo base_url('Mod/addCH/'); ?>' + campaign);            
        }
         if(campaign == "EC"){
            window.location.assign('<?php echo base_url('Mod/addEC/'); ?>' + campaign);            
        }
        if(campaign == "TR"){
            window.location.assign('<?php echo base_url('Mod/addTR/'); ?>' + campaign);            
        }
        if(campaign == "SO"){
            window.location.assign('<?php echo base_url('Mod/addSolicitor/'); ?>' + campaign);            
        } 
        if(campaign == "MIB"){
            window.location.assign('<?php echo base_url('Mod/addMIBClaims/'); ?>' + campaign);            
        }
        if(campaign == "CICA"){
            window.location.assign('<?php echo base_url('Mod/addCICA/'); ?>' + campaign);            
        }
        if(campaign == "EM"){
            window.location.assign('<?php echo base_url('Mod/addEmployment/'); ?>' + campaign);            
        }

    }
        
});

$('#campaign').change(function(){

    var campaign     = $('#campaign').val();

    if (campaign != ''){
        $("#campaign_error").html('');
        $('#sel-campaign').removeClass('has-error');
    }
        
});

$('#company').change(function(){

    var company     = $('#company').val();

    if (company != ''){
        $("#company_error").html('');
        $('#sel-company').removeClass('has-error');
    }
        
});

$("#usersreportsubmit").click(function(){

    var user        = $('#user').val();
    var lead_status = $('#lead_status').val();
    var start_date  = $('#start_date').val();
    var end_date    = $('#end_date').val();
    var campaign    = $('#campanign').val();


    if (user == ''){

        $("#user_error").html('<br><b class="text-danger">User Field Is Required.</b>');
        $('#sel-user').addClass('has-error');

    }
     if (campaign == ''){
        
        $("#campaign-error").html('<br><b class="text-danger">Campanign Field Is Required.</b>');
        $('#sel-campaign-error').addClass('has-error');
        
    }
    if (lead_status == ''){

        $("#lead_status_error").html('<br><b class="text-danger">Lead Status Field Is Required.</b>');
        $('#sel_lead_status').addClass('has-error');

    }
    
    if (start_date == ''){

        $("#start_date_error").html('<br><b class="text-danger">Start Date Field Is Required.</b>');
        $('#input_start_date').addClass('has-error');

    }
    
    if (end_date == ''){
        
        $("#end_date_error").html('<br><b class="text-danger">End Date Field Is Required.</b>');
        $('#input_end_date').addClass('has-error');

    }
    
    var DateError = "";
    
    if (end_date != ''){
        if (start_date > end_date){
            
            $("#start_date_error").html('<br><b class="text-danger">Start Date Not be grater then End Date.</b>');
            $('#input_start_date').addClass('has-error');
            DateError = "Start Date Not be grater then End Date.";

        }else{
            DateError = '';
        }
        
    }
    
        
    if (user && lead_status && start_date && end_date && campaign && DateError == ""){
        $(this).prop('type','usersreportsubmit');
    }
        
});

$("#submit").click(function(){

    var company     = $('#company_id').val();
    var user_type   = $('#user_type').val();
    var user        = $('#user').val();
    var lead_status = $('#lead_status').val();
    var start_date  = $('#start_date').val();
    var end_date    = $('#end_date').val();
    var campaign    = $('#campanign').val();



    if (company == ''){
        
        $("#company_errors").html('<br><b class="text-danger">Company Field Is Required.</b>');
        $('#selt-company').addClass('has-error');


    }
    
    if (campaign == ''){
        
        $("#campaign-error").html('<br><b class="text-danger">Campanign Field Is Required.</b>');
        $('#sel-campaign-error').addClass('has-error');
        
    }
        
    if (user_type == ''){

        $("#user_type_error").html('<br><b class="text-danger">User Type Field Is Required.</b>');
        $('#sel-user_type').addClass('has-error');
        
    }
    
    if (user == ''){

        $("#user_error").html('<br><b class="text-danger">User Field Is Required.</b>');
        $('#sel-user').addClass('has-error');

    }
    
    if (lead_status == ''){

        $("#lead_status_error").html('<br><b class="text-danger">Lead Status Field Is Required.</b>');
        $('#sel_lead_status').addClass('has-error');

    }
    
    if (start_date == ''){

        $("#start_date_error").html('<br><b class="text-danger">Start Date Field Is Required.</b>');
        $('#input_start_date').addClass('has-error');

    }
    
    if (end_date == ''){
        
        $("#end_date_error").html('<br><b class="text-danger">End Date Field Is Required.</b>');
        $('#input_end_date').addClass('has-error');

    }
    
    var DateError = "";
    
    if (end_date != ''){
        if (start_date > end_date){
            
            $("#start_date_error").html('<br><b class="text-danger">Start Date Not be grater then End Date.</b>');
            $('#input_start_date').addClass('has-error');
            DateError = "Start Date Not be grater then End Date.";

        }else{
            DateError = '';
        }
        
    }
    
        
    if (company && user_type && user && lead_status && start_date && end_date && campaign && DateError == ""){
        $(this).prop('type','submit');
    }
        
});

$("#company_id").change(function(){
    
    var company     = $('#company').val();
    var user_type   = $('#user_type').val();
    var user        = $('#user').val();
    
    if (company != ''){
        $("#company_errors").html('');
        $('#selt-company').removeClass('has-error');
    }

});

$("#campanign").change(function(){
    
    var campanign     = $('#campanign').val();
    
    if (campanign != ''){
        $("#campaign-error").html('');
        $('#sel-campaign-error').removeClass('has-error');
    }

});

$("#lead_status").change(function(){
    
    var lead_status = $('#lead_status').val();
    
    if (lead_status != ''){

        $("#lead_status_error").html('');
        $('#sel_lead_status').removeClass('has-error');

    }

});

$("#start_date").change(function(){
    
    var start_date = $('#start_date').val();
    
    if (start_date != ''){

        $("#start_date_error").html('');
        $('#input_start_date').removeClass('has-error');

    }

});

$("#end_date").change(function(){
    
    var start_date = $('#start_date').val();
    var end_date = $('#end_date').val();

    if (start_date == ''){

        $("#start_date_error").html('<br><b class="text-danger">Start Date Field Is Required.</b>');
        $('#input_start_date').addClass('has-error');

    }
    
    if (end_date != ''){

        $("#end_date_error").html('');
        $('#input_end_date').removeClass('has-error');
        
    }
    
    if (start_date > end_date){
//        alert('Start Date Not be grater then End Date.');
        $("#start_date_error").html('<br><b class="text-danger">Start Date Not be grater then End Date.</b>');
        $('#input_start_date').addClass('has-error');
        
    }
    

});

$("#user_type").change(function(){
    
    var company     = $('#company_id').val();
    var user_type   = $('#user_type').val();
    var user        = $('#user').val();
    
    if (company == ''){
        $("#company_errors").html('<br><b class="text-danger">Company Field Is Required.</b>');
        $('#selt-company').addClass('has-error');
    }

    if (user_type != ''){

        $("#user_type_error").html('');
        $('#sel-user_type').removeClass('has-error');
        
    }

    if (company && user_type){
        
        $.ajax({

            url: '<?php echo base_url() . 'Mod/ajaxGetUsers' ?>',
            type: 'post',
            data: "companyID=" + company + "&user_type_id=" + user_type,

            success: function (response) {
                
                if (response) {
                    $('#user').html(response);
                } else {
                    $('#user').html('<option value="">No Result Found</option>');                                
                }
                
            }

        });        
        
    }

});

$("#campanign").change(function(){
    
    var campanign_id     = $('#campanign').val();
//    var user_type   = $('#user_type').val();
//    var user        = $('#user').val();
//    
//    if (company == ''){
//        $("#company_errors").html('<br><b class="text-danger">Company Field Is Required.</b>');
//        $('#selt-company').addClass('has-error');
//    }

//    if (user_type != ''){
//
//        $("#user_type_error").html('');
//        $('#sel-user_type').removeClass('has-error');
//        
//    }

    if (campanign_id){
        
        $.ajax({

            url: '<?php echo base_url() . 'Mod/ajaxGetLeadStatus' ?>',
            type: 'post',
            data: "campanign_id=" + campanign_id,

            success: function (response) {
                
                if (response) {
                    $('#lead_status').html(response);
                } else {
                    $('#lead_status').html('<option value="">No Result Found</option>');                                
                }
                
            }

        });        
        
    }

});

$("#user").change(function(){

    var user = $('#user').val();
        
    if (user != ''){
        $("#user_error").html('');
        $('#sel-user').removeClass('has-error');
    }

});



$(document).ready( function () {
    
    $('#report').DataTable({
        
        'iDisplayLength': 100,
        
        
    });
    
});


// user module configrations

$('#contacttime').change(function(){
   
   var contacttime = $('#contacttime').val();

    if (contacttime != "Anytime"){
        $('#PreferredTimetoCall').show();
    }
    
    if (contacttime == "Anytime"){
        $('#PreferredTimetoCall').hide();
    }
   
});

</script>

<script type="text/javascript">


$("#company_id").change(function(){

   var company_id = $('#company_id').val();

    if (company_id){
        
        $.ajax({

            url: '<?php echo base_url() . 'Mod/ajaxGetUsersByComapny' ?>',
            type: 'post',
            data: "company_id=" + company_id,

            success: function (response) {
                
                if (response) {
                    $('#users_ids').html(response);
                } else {
                    $('#users_ids').html('<option value="">No Result Found</option>');                                
                }
                
            }

        });        
        
        
    }

});

$("#comapny").change(function(){

   var company_id = $('#comapny').val();
   
    if (company_id){
        
        $.ajax({

            url: '<?php echo base_url() . 'Mod/ajaxGetUserGroup' ?>',
            type: 'post',
            data: "company_id=" + company_id,

            success: function (response) {
                $('#user_Group').html(response);
            }

        });        
        
        
    }

});

$("#userType").change(function(){

   var userType = $('#userType').val();
   
    if (userType == 1){
       
        $('#user_Group_tt').hide();
       
        
    }else{
        $('#user_Group_tt').show();
    }

});


    
/*New footer setup*/
    function remo(id){
       $('#' + id).remove();
    }
    
    function reply_all_mod(){
        
        $('#form-sender-replay').show();
        
        var to = $('#sample_mail_to').val();
        var cc = $('#sample_mail_cc').val();
        var bcc = $('#sample_mail_bcc').val();
        
        $('#mail_to').val(to);
        $('#mail_cc').val(cc);
        $('#mail_bcc').val(bcc);
        $("#for-area").hide();
        $("#reply-all-area").show();
        $("#reply-area").hide();
        $("#action_type").val('');        
        $("#action_type").val('reply_all');
        $("#fwd_attchment").hide();        

    }
    
    function reply_mod(){
        
        var to = $('#sample_mail_to').val();        
        
        $('#form-sender-replay').show();
        $('#mail_to').val(to);
        $('#mail_cc').val('');
        $('#mail_bcc').val('');
        $("#for-area").hide();
        $("#reply-all-area").hide();
        $("#reply-area").show();
        $("#action_type").val('');
        $("#action_type").val('reply');
        $("#fwd_attchment").hide();        

    }

    function forward_mod(){
        
        $('#form-sender-replay').show();
        $('#mail_to').val('');
        $('#mail_cc').val('');
        $('#mail_bcc').val('');
        $("#for-area").show();
        $("#reply-all-area").hide();
        $("#reply-area").hide();
        $("#fwd_attchment").show();
        $("#action_type").val('');        
        $("#action_type").val('forward');

    }

    function onclick_shownew_msg(){
             $.ajax({

               type: "post",
               url: "<?php echo base_url('KwikMail/getInboxDetial'); ?>",
               data: "url='<?php echo base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . urlencode($this->uri->segment(3)); ?>'",

               success:function(data)
               {
                   $('#content-single-mail').html('');
                   $('#content-single-mail').html(data);
                   $('#dis_msg').hide();
               }
             });    
    }
    
    function onclick_shownew_msg(){
             $.ajax({

               type: "post",
               url: "<?php echo base_url('KwikMail/getInboxDetial'); ?>",
               data: "url='<?php echo base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . urlencode($this->uri->segment(3)); ?>'",

               success:function(data)
               {
                   $('#content-single-mail').html(data);
                   $('#dis_msg').hide();
               }
             });    
    }
/*New footer ends*/
</script>


</body>

</html>



