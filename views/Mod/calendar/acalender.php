<?php 
/*echo "<pre>";
print_r($events);
die();*/
?>

<!--<style>
    
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
    
    
</style>-->


<!-- Loading Image -->

<div class="loading" style="display: none;">
    <div class="content"><img src="<?php echo base_url('assets/images/loading.gif'); ?>"/></div>
</div>

<div class="container-fluid">

    <div class="row bg-title">
        
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">User Tasks</h4> 
        </div>
            
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">User Tasks</li>
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
                                <h3 style="padding: 17px 0px 0px 28px"><b>Tasks</b></h3>
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
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles">
                        <div class="col-md-5 align-self-center">
                            <h4 class="text-themecolor">Calendar</h4>
                        </div>
                        <div class="col-md-7 align-self-center text-right">
                            <div class="d-flex justify-content-end align-items-center">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active">Calendar</li>
                                </ol>
                                
                               <!-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>-->
                            </div>
                        </div>
                        
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div id="calendar" > </div>
                        </div>
                    </div>
                    
                    
                    <div class="white-box" style="padding: 25px 25px 25px 25px;">
                            <div class="col-md-12 align-self-center"></div>
                            <hr style="margin-top: 5px;">
                            <hr style="margin-top: 5px;">
                            <br>
                            <?php if ($_SESSION['adminData']['role_name'] == "Admin"){ ?>
                            <h3>All Users Calender Stats </h3>
                            <div class="white-box" style="padding: 0px 0px 0px 0px;"> 
                                <hr style="margin-top: 5px;"> 
                                <div class="table-responsive"> 
                                    <table id='alluserCalender' class="table table-striped table-bordered" cellspacing="0" cellpadding="0"> 
                                        <thead> 
                                            <tr style="padding: 0px;"> 
                                                <th style="padding: 1px;" class="text-center">User Name</th> 
                                                <th style="padding: 1px;" class="text-center">Total Number of Tasks</th> 
                                                <th style="padding: 1px;" class="text-center">Pending Tasks Last 7 Days</th> 
                                                <th style="padding: 1px;" class="text-center">Tasks Done Last 7 Days</th> 
                                                <th style="padding: 1px;" class="text-center">Actions</th> 
                                            </tr> 
                                        </thead> 
                                        <tbody style="margin: 0;padding: 0"> 
                                            <?php
                                      
                                            $sql_label = "SELECT  users.id, users.userName FROM users  INNER JOIN events ON events.created_by = users.id GROUP by users.userName ASC";                                          
                                     $label_data  = $this->db->query($sql_label)->result();
                                     $view_data['AllUsersEvents'] = $label_data;                                          
                                            ?>
                                            <?php foreach($view_data['AllUsersEvents'] as $singleEvent): ?>
                                            <tr style="padding: 0px;"> 
                                                <td style="padding: 0px;" class="text-center"><?php echo $singleEvent->userName; ?></td> 
                                                <td style="padding: 0px;" class="text-center">
                                                    <?php $sql_totaltasks = "SELECT Count(*) AS totalTask FROM events WHERE created_by = $singleEvent->id";                                          
                                                    $Taskdata  = $this->db->query($sql_totaltasks)->result();
                                                    /*echo "<pre>";
                                                    print_r($Taskdata);*/
                                                       echo $Taskdata[0]->totalTask;                               
                                                    ?>
                                                </td> 
                                                <td style="padding: 0px;" class="text-center">
                                                    <span class="label label-danger" style="font-size: 14px;">
                                                <?php $sql_totaltasksPend = "SELECT count(*) AS 'LAST_7_DAYS_PENDING_EVENTS'  FROM events WHERE events.eventstatus = 'Pending' AND events.created_by = $singleEvent->id AND events.created_at >= DATE(NOW()) - INTERVAL 7 DAY";                                          
                                                    $TaskPenddata  = $this->db->query($sql_totaltasksPend)->result();
                                                    /*echo "<pre>";
                                                    print_r($Taskdata);*/
                                                       echo $TaskPenddata[0]->LAST_7_DAYS_PENDING_EVENTS;                               
                                                    ?>
                                                    </span>
                                                </td> 
                                                <td style="padding: 0px;" class="text-center">
                                                    <span class="label label-success" style="background:  #81948a; font-size: 14px;">
                                                 <?php $sql_totaltasksDone = "SELECT count(*) AS 'LAST_7_DAYS_DONE_EVENTS'  FROM events WHERE events.eventstatus = 'Done' AND events.created_by = $singleEvent->id AND events.created_at >= DATE(NOW()) - INTERVAL 7 DAY";                                          
                                                    $TaskdataDone  = $this->db->query($sql_totaltasksDone)->result();
                                                    /*echo "<pre>";
                                                    print_r($Taskdata);*/
                                                       echo $TaskdataDone[0]->LAST_7_DAYS_DONE_EVENTS;                               
                                                    ?>
                                                    </span>
                                                </td> 
                                                <td style="padding: 0px;" class="text-center">
                                                    <a title="View Details" href="<?php echo base_url('Mod/view_userevents_details/').$singleEvent->id;  ?>  ">
                                                        <i class="ti-search"> View Details</i>
                                                    </a>
                                                </td> 
                                            </tr> 
                                            <?php endforeach; ?>
                                        </tbody> 
                                    </table> 
                                </div> 
                            </div>
                            <?php } ?>  
                        </div>
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Modal -->
                    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <form class="form-horizontal" method="POST" action="<?php echo base_url('Mod/saveCalenderEvents') ?>">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Event</h4>
                          </div>
                          <div class="modal-body">

                              <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                                </div>
                              </div>
                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                  <textarea rows="8" name="description"  id="description" class="form-control" placeholder="Description" required="required"></textarea>
                                </div>
                              </div>
                               <?php if ($_SESSION['adminData']['role_name'] == "Admin"){ ?>
                              <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Users</label>
                                   
                                <div class="col-sm-10">
                                
                                <select class="form-control select2" name="users">
                                    <option value=""> Select User </option>
                                    <?php foreach($allusersdata as $single): ?>
                                       <option value="<?php echo $single->id ?>"> <?php echo $single->userName; ?>  </option>
                                    <?php endforeach; ?>
                                </select>
                                  
                                </div>
                              </div>
                                <?php } ?>  
                                <div class="form-group">
                                <label for="color" class="col-sm-2 control-label">Color</label>
                                <div class="col-sm-10">
                                  <select required="required" name="color" class="form-control" id="color">
                                      <option value="">Choose</option>
                                      <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                      <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                      <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
                                      <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                      <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                      <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                      <option style="color:#000;" value="#000">&#9724; Black</option>

                                    </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="start" class="col-sm-2 control-label">Start date</label>
                                <div class="col-sm-10">
                                  <input type="text" name="start" class="form-control" id="start" >
                                </div>
                              </div>
                              <!--<div class="form-group">
                                <label for="start" class="col-sm-2 control-label">Start Time</label>
                                <div class="col-sm-10">
                                  <input type="text" name="start_time" value="" id="start_time" class="form-control" placeholder="Start time">
                                </div>
                              </div>-->
                              <div class="form-group">
                                <label for="end" class="col-sm-2 control-label">End date</label>
                                <div class="col-sm-10">
                                  <input type="text" name="end" class="form-control" id="end" >
                                </div>
                              </div>
                              <!--<div class="form-group">
                                <label for="end" class="col-sm-2 control-label">End Time</label>
                                <div class="col-sm-10">
                                  <input type="text" name="end_time" value="" id="end_time" class="form-control" placeholder="End time">
                                </div>
                              </div>-->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>



                    <!-- Modal -->
                    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <form class="form-horizontal" method="POST" action="<?php echo base_url('Mod/EditEntireEventsData/').$this->uri->segment(3); ?>">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
                          </div>
                          <div class="modal-body">
                              <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Client </label>
                                <div class="col-sm-10">
                                  <input disabled type="text" class="form-control" id="shortDetailsClient" placeholder="Title">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                <?php //if($this->uri->segment(3)==$_SESSION['adminData']['user_id']){ ?>    
                                  <input required="required" type="text" name="title" class="form-control" id="oldishTittle" placeholder="Title">
                                <?php //}else{ ?>
                                    <!--<input required="required" type="text" name="title" class="form-control" id="oldishTittle" placeholder="Title">-->
                                <?php //} ?>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                  <textarea required="required" rows="8" name="description" id="description" class="form-control" placeholder="Description"></textarea>
                                </div>
                              </div>
                              <?php if ($_SESSION['adminData']['role_name'] == "Admin"){ ?>
                              <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Users</label>
                                   <input name = "created_by" type ="hidden" id="created_by" >
                                <div class="col-sm-10">
                                
                                <select class="form-control select2" name="users" >
                                    
                                    <option value=""> Select User </option>
                                    <?php foreach($allusersdata as $single): ?>
                                       <option value="<?php echo $single->id ?>"> <?php echo $single->userName; ?>  </option>
                                    <?php endforeach; ?>
                                </select>
                                  
                                </div>
                              </div>
                               <?php }else{ ?> 
                                     <input name = "created_by" type ="hidden" id="created_by">
                                <?php } ?>  
                              <div class="form-group">
                                <label for="color" class="col-sm-2 control-label">Color</label>
                                <div class="col-sm-10">
                                  <select required="required" name="color" class="form-control" id="color">
                                      <option value="">Choose</option>
                                      <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                      <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                      <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
                                      <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                      <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                      <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                      <option style="color:#000;" value="#000">&#9724; Black</option>

                                    </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="eventstatus" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="eventstatus" class="form-control" id="eventstatus">
                                      <option value="">Choose</option>
                                      <option style="color:#008000;" value="Done">Done</option>
                                      <option style="color:#FF0000;" value="Pending">Pending</option>
                                    </select>
                                </div>
                              </div>
                                <!--<div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <div class="checkbox">
                                        <input type="checkbox"  name="delete"><label class="text-danger"> Delete event</label>
                                      </div>
                                    </div>
                                </div>-->

                              <input type="hidden" name="id" class="form-control" id="id">


                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
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
        if(!this.todayDate) {
            this.todayDate = new Date();
        }
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay,listYear'
                /*right: 'month,basicWeek,basicDay'*/
			},
			//defaultDate: that.todayDate,
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                /*$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD'));*/
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
                    $('#ModalEdit #shortDetailsClient').val(event.shortDetailsClient);
                    $('#ModalEdit #oldishTittle').val(event.oldishTittle);
                    $('#ModalEdit #title').val(event.title);
					$('#ModalEdit #eventstatus').val(event.eventstatus);
					$('#ModalEdit #description').val(event.description);
                    $('#ModalEdit #created_by').val(event.created_by);
                    $('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
			<?php foreach($events as $event): 
			
				/*$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);*/
                $start = $event['start'];
				$end = $event['end'];
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
                    oldishTittle: '<?php echo $event['oldishTittle']; ?>',
					title: '<?php echo $event['title']; ?>',
                   // created_by: '<?php //echo $event['created_by']; ?>',
                    description: '<?php echo $event['description']; ?>',
                    shortDetailsClient: '<?php echo $event['shortDetailsClient']; ?>',
                    eventstatus: '<?php echo $event['eventstatus']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event['color']; ?>',
				},
			<?php endforeach; ?>
			]
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			id = event.id;
			
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			
			$.ajax({
			 url: '<?php echo base_url() . 'Mod/EditEventsDate' ?>',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Saved');
					}else{
						alert('Could not be saved. try again.'); 
					}
				}
			});
		}
		
	});
        
    /*function run() {
         var e = document.getElementById("selectorofUser");
        var strUser = e.options[e.selectedIndex].value;
        alert(strUser);
    }*/
    
    $(function(){
         $("#slectedusers").on('change', function(){
              var realvalues = new Array();//storing the selected values inside an array
                $('#slectedusers :selected').each(function(i, selected) {
                    realvalues[i] = $(selected).val();
                   // alert($(selected).val());
                });
          //   var UsersofSel = new [];
            //var UsersofSel = [];
            //var selectvar = $(this).val();
            /*alert(selectvar);*/
             //UsersofSel = selectvar;
            //var arrStr = encodeURIComponent(JSON.stringify(UsersofSel));
             
            $.ajax({
			 url: '<?php echo base_url() . 'Mod/tasks_events_calendar' ?>',
			 type: "POST",
			// dataofusers    : {'dataofusers' : arrStr}, 
            data: {slectedusers: realvalues, ID: '1'},
			/* success: function(data) {
					if(rep == 'OK'){
						alert('Send');
					}else{
						alert('Could not be shared. try again.'); 
					}
				}*/
            success: function(data)
                        {
                            console.log(data);
                            //window.location.replace("<?php echo base_url(); ?>Mod/tasks_events_calendar?array=" + arrStr);
                            //alert("ok");                                    
                        },
                        
            error: function()
                        {
                            alert("error");                                    
                        }
			});
         })

        });
   
    /*$(document).on('change','.selectorofUser',function(){
        var selectvar = $(this).val();
        alert(selectvar);
    });  */  
     $(function() {
            
$('#start, #end', ).datetimepicker({
                changeYear: true,
                changeMonth: true,
                showButtonPanel: true,
                format : 'yy-mm-dd HH:mm',
                yearRange: "1930:2030"
            });
            
        });
</script>