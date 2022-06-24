<?php 
/*echo "<pre>";
print_r($events[0]);*/
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
                        
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                        <div class="panel-body" style="padding: 0px;">

    <!--                        <p style="font-weight: 600; color: #313131">Lead Details</p>
                            <hr style="width: 16%; float: left; margin-top: 0px">-->

                            <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                                <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                                <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Lead Details</p>
                                <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                                </div>
                            </div>

                            <br>

                            <div class="col-md-12">                        

                                <div class="table-responsive" style="margin-top: 10px; margin-bottom: 20px ">

                                    <table class="table table-striped table-bordered">                        

                                        <tr>
                                            <th class="text-center">File Ref #.</th> 
                                            <th class="text-center">First Name</th> 
                                            <th class="text-center">Last Name</th>                                         
                                            <th class="text-center">Phone</th>                                        
                                            <th class="text-center">Lead Status</th>                                         
                                        </tr>


                                        <tr>

                                            <td class="text-center"><a><?php echo ($changeLeadStatus) ? $changeLeadStatus->lead_id : '' ?></a></td> 
                                            <td class="text-center"><a><?php echo @$changeLeadStatus->first_name; ?></a></td> 
                                            <td class="text-center"><a><?php echo @$changeLeadStatus->last_name; ?></a></td> 
                                            <td class="text-center"><a><?php echo @$changeLeadStatus->phone_1 ?></a></td> 
                                            <td class="text-center"><a>

                                                    <?php if ($leadsStatuses): foreach ($leadsStatuses as $leadsStatus): ?>
                                                            <?php echo (@$changeLeadStatus->lead_status == $data = $leadsStatus->id) ? $leadsStatus->status_name : ''; ?>
                                                        <?php endforeach; ?>                                                
                                                            <?php endif; ?>                                                

                                                </a>
                                            </td> 
                                        </tr>

                                    </table>

                                </div>
                            </div>

                            <br>                        


                        </div>
                    </div>
                        
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
                        <div class="white-box" style="padding: 25px 25px 25px 25px;">
                            <!--<div class="col-md-6 align-self-center">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-label" class="btn m-t-10 btn-info btn-block waves-effect waves-light"> <i class="fa fa-tags"></i> Manage Labels </a>
                            </div>-->
                            <div class="col-md-12 align-self-center">
                                <!--<a href="javascript:void(0)" data-toggle="modal" data-target="#ModalAdd" class="btn m-t-10 btn-info btn-block waves-effect waves-light"> <i class="ti-plus"></i> Add New Event </a>-->
                            </div>
                            <hr style="margin-top: 5px;">
                            <hr style="margin-top: 5px;">
                            <br>
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
                    
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Modal -->
                    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                    <form class="form-horizontal" method="POST" action="<?php echo base_url('Mod/saveCalenderEventsofLeads/'). $this->uri->segment(3); ?>">
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
                        <form class="form-horizontal" method="POST" action="<?php echo base_url('Mod/EditEntireEventsData') ?>">
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
                                  <input required="required" type="text" name="title" class="form-control" id="oldishTittle" placeholder="Title">
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
                                   <input name = "created_by" type ="hidden" id="created_by">
                                <div class="col-sm-10">
                                
                                <select class="form-control select2" name="users">
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
                 //   created_by: '<?php //echo $event['created_by']; ?>',
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
			
			id =  event.id;
			
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

</script>
