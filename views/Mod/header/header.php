<?php

/*echo "<pre>";
print_r($_SESSION['adminData']['role_name'] == "Admin");
print_r($menus);
echo "<here is sessions><br><pre>";
echo "<pre>";
print_r($_SESSION);
die(); */

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="">
        <title><?php echo $title; ?></title>
        <!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
        
        <script src="<?php echo base_url('public/adminAssets/'); ?>/jquery-1.11.3.min.js"></script>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('public/adminAssets/'); ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="<?php echo base_url('public/adminAssets/'); ?>css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" />
        <!-- Custom CSS -->
        <link href="<?php echo base_url('public/adminAssets/'); ?>css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="<?php echo base_url('public/adminAssets/'); ?>css/colors/megna-dark.css" id="theme" rel="stylesheet">

        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">        

        <link href="<?php echo base_url('public/adminAssets/'); ?>css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('public/adminAssets/'); ?>css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url('public/adminAssets/'); ?>css/jquery-ui.css" rel="stylesheet">
        <link href="<?php echo base_url('public/adminAssets/'); ?>css/wickedpicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url('public/adminAssets/'); ?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url('public/adminAssets/'); ?>css/colors/megna-dark.css" id="theme" rel="stylesheet">
        <link href="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet">
        
        <link href="<?php echo base_url('public/adminAssets/'); ?>/calender/css/fullcalendar.css" rel="stylesheet">
        
        <link href="<?php echo base_url('public/adminAssets/'); ?>assets_date_time/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
      
        <link href="http://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">
        
        
        <link href="<?php echo base_url('public/adminAssets/'); ?>AlertifyJS-master/AlertifyJS-master/build/css/alertify.min.css" rel="stylesheet">






        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


        <style>

            tr td{
                text-align: center;
            }

        </style>        

    </head>
<?php //flush(); ?>
    <body class="fix-header">
        <!-- ============================================================== -->
        <!-- Preloader -->
        <!-- ============================================================== -->

        <!--        <div class="preloader">
                    <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>-->

        <!-- ============================================================== -->
        <!-- Wrapper -->
        <!-- ============================================================== -->
        <div id="wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            
            <nav class="navbar navbar-default navbar-static-top m-b-0">
                

            <div class="navbar-header">


                    <div class="top-left-part">
                        <a class="logo" href="<?php echo base_url('Mod/Dashboard'); ?>">
                            <b>
                                <img style="padding-top: 8px; padding-left: 5px;" src="<?php echo base_url('public/adminAssets/'); ?>plugins/images/logo.png" alt="home" class="light-logo" />
                            </b>
                        </a>
                        
                    </div>

                
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                
                <ul class="nav navbar-top-links navbar-left">
                    
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
                    
                    <!-- .Megamenu -->
                    
                </ul>
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                    
                    <li class="dropdown">
                        <?php 
                        
                        $permission_access      = isset($_SESSION['adminData']['KwikMail']);
                        $permission_add         = isset($_SESSION['adminData']['KwikMail']['permission_view']);
                        $permission_view        = isset($_SESSION['adminData']['KwikMail']['permission_view']);
                        $permission_update      = isset($_SESSION['adminData']['KwikMail']['permission_update']);
                        $permission_delete      = isset($_SESSION['adminData']['KwikMail']['permission_delete']);
                        
                        if($permission_access){ ?>
                        <a  class="waves-effect waves-light" href="<?php echo base_url('/KwikMail/inbox'); ?>"> 
                          Total Unread emails in your
                            <span id="unread_count" style=" margin-top: 8px;"></span>
                            
                        </a>
                        <?php } ?>
                       <!-- <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div   class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url('public/adminAssets'); ?>/plugins/images/users/user-default-image.png" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>-->
                        <!-- /.dropdown-messages -->
                    </li>
                    
                     
                    <!-- /.Megamenu -->
                </ul>
                
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="dropdown">
                         
                            <?php
                            $total_unread_message_number = 0;
                            $this->load->model('Mods');
                            $unread_messages  =   $this->Mods->count_unread_message_of_threadwithMessages();
                            $total_unread_message_number = count($unread_messages);
                            
                            
                          
                            ?>
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                <p>
                                    <span class="badge badge-danger badge-header" style=" padding: 5px 5px 5px 5px; ">
                                        <?php echo $total_unread_message_number;?>
                                    </span>
                                </p>
                              
                                <i class="ti-email"></i>
                                
                                <div class="notify"> 
                                    
                                    <span class="heartbit"></span> <span class="point"></span> 
                                </div>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <div class="force-overflow" style=" min-height: 282px; max-height: 390px; ">
                                  <ul class="scrollbar " style=" border-bottom: 1px solid #e9ecef; text-decoration: none; display: block; padding: 0px; ">
                                    <li>
                                        <div class="drop-title">Messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                             <?php
                                           foreach($unread_messages as $row):
                                                $last_unread_message    =   $row->message;
                                                $last_message_timestamp =   $row->timestamp;
                                            
                                            
                                            ?>
                                            <!-- Message -->
                                      
                                            <a href="<?php echo base_url('Mod/reply_message/').$row->message_thread_code; ?>">
                                                <div class="mail-contnet">
                                                    
                                                    <h4><b>Message From: </b>
                                                        <?php
                                                        echo $row->sendername; 
                                                        ?>
                                                    </h4> 
                                                    <h5><b>Client Name: </b><?php
                                                        $fullnameOfClient = $this->db->get_where('leads',array('lead_id' => $row->lead_id) )->row();
                                                       echo $fullnameOfClient->first_name.' '.$fullnameOfClient->last_name; ?></h5>
                                                    <!--<span class="mail-desc"><?php  echo substr($last_unread_message , 0 , 50); ?></span> -->
                                                  <span class="mail-desc"><?php  echo substr(strip_tags($last_unread_message), 0 , 50); ?></span> 
                                                    <span class="time"><?php echo $last_message_timestamp; ?></span> 
                                                </div>
                                            </a>
                                            <?php endforeach;?>
                                        </div>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                         
                            <?php
                            $total_unread_notes_number = 0;
                            $this->load->model('Mods');
                            $unread_notes  =   $this->Mods->count_unread_leadNotes_of_threadwithNotes();
                            $total_unread_notes_number = count($unread_notes);
                            
                            ?>
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                
                                <p><span class="badge badge-danger badge-header" style=" padding: 5px 5px 5px 5px; ">
                                    <?php echo $total_unread_notes_number;?></span>
                                </p>
                               
                                <i class="icon-note"></i>
                                
                                <div class="notify"> 
                                    
                                    <span class="heartbit"></span> <span class="point"></span> 
                                </div>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <div class="force-overflow" style=" min-height: 282px; max-height: 390px; ">
                                  <ul class="scrollbar " style=" border-bottom: 1px solid #e9ecef; text-decoration: none; display: block; padding: 0px; ">
                                    <li>
                                        <div class="drop-title">Leads Note</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                             <?php
                                           foreach($unread_notes as $rowNotes):
                                              
                                            ?>
                                            <!-- Message -->
                                            
                                            <a href="<?php echo base_url('Mod/viewLeadNote/').$rowNotes->lead_note_id; ?>">
                                                <div class="mail-contnet">
                                                    
                                                    <h4><b>New Lead Note: </b>
                                                        <?php
                                                        echo $rowNotes->sendername; 
                                                        ?>
                                                    </h4> 
                                                    <h5><b>Client Name: </b>
                                                    <?php 
                                                    $fullnameOfClient = $this->db->get_where('leads',array('lead_id' => $rowNotes->lead_id) )->row();
                                                         echo $fullnameOfClient->first_name.' '.$fullnameOfClient->last_name; 
                                                        ?>
                                                    </h5>
                                                </div>
                                            </a>
                                     
                                            
                                           <?php endforeach;?>
                                        </div>
                                    </li>
                                    
                                </ul>
                                </div>
                            </div>
                        </li>
                        
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->

                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo base_url('public/adminAssets/'); ?>plugins/images/users/user-default-image.png" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo ucfirst($_SESSION['adminData']['user_name']) ?></b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="<?php echo base_url('public/adminAssets/'); ?>plugins/images/users/user-default-image.png" alt="user" /></div>
                                    <div class="u-text">
                                        <h4><?php echo ucfirst($_SESSION['adminData']['user_name']) ?></h4>
                                        <p class="text-muted" style="font-size: 12px"><?php echo $user_result[0]->email ?></p>
                                        <a href="<?php echo base_url('Mod/userProfile/profile'); ?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url('Mod/userProfile/profile'); ?>"><i class="ti-user"></i> My Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url('Mod/userProfile/settings'); ?>"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url('Mod/userProfile/resetPassword'); ?>"><span class="fa-stack">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-undo fa-stack-1x fa-inverse"></i>
                                    </span> Reset Password</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url('Mod/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>


                    <!-- /.dropdown -->
                </ul>
                
            </div>

                
                <!-- /.navbar-header -->
                <!-- /.navbar-top-links -->
                <!-- /.navbar-static-side -->
            </nav>

            <!-- End Top Navigation -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav slimscrollsidebar">
                    
                    <div class="sidebar-head">
                        <h3>
                            <span class="fa-fw open-close">
                                <i class="ti-close ti-menu"></i></span> 
                                <span class="hide-menu">Navigation</span>
                        </h3> 
                    </div>
                    
                    <ul class="nav" id="side-menu">

                        <!--<li class="devider"></li>-->

                        <?php
                        if ($menus):
                            $i = 0;
                            foreach ($menus as $menu):
                          /*  echo "<pre>";
                        print_r($menu);*/
                                ?>

                                <?php
                                if ($menu[0]['is_crud'] == 0):

                                    if ($this->uri->segment(2) == "Dashboard") {
                                        $active = "active";
                                    } else {
                                        $active = "";
                                    }
                                    ?>                        

                                    <li> <a class="<?php echo $active; ?>" href="<?php echo base_url('Mod/Dashboard'); ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"></i> <span class="hide-menu"><?php echo $menu[0]['action_name'] ?></span></a></li>                        

                                <?php endif; ?>                         

                                <?php
                                if ($menu[0]['is_crud'] == 1):

                                    $arr_key = str_replace(" ", "", $menu[0]['action_name']);

                                    $add = 'add' . $arr_key;
                                    $create = 'create' . $arr_key;
                                    
                                    if ($menu[0]['action_name'] != "Lead Batches"){
                                    
                                    $edit = 'edit' . $arr_key;
                                    $update = 'update' . $arr_key;
                                    $view = 'view' . $arr_key;
                                    $manage = 'manage' . $arr_key;

}else{


                                    $edit = "";
                                    $update = "";
                                    $view = "";
                                    $manage = "";

    
}

if ($_SESSION['adminData']['role_name'] == "Admin"){                                    
    if($menu[0]['action_name'] == "Leads"){
        $report = 'report';    
    }else{
        $report = '';
    }                                     
} else {
    $report = '';
    
}                                     
if ($_SESSION['adminData']['role_name'] == "Admin"){                                    
    if($menu[0]['action_name'] == "Users"){
        $UserGroup = 'manageUserGroup';    
    }else{
        $UserGroup = '';
    }                                     
} else {
    $UserGroup = '';
    
}                                     
                                    
$url = array(
        $menu[$add], 
        $menu[$create], 
        ($menu[0]['action_name'] != "Lead Batches") ? $menu[$edit] : '', 
        ($menu[0]['action_name'] != "Lead Batches") ? $menu[$update] : '', 
        ($menu[0]['action_name'] != "Lead Batches") ? $menu[$view] : '', 
        ($menu[0]['action_name'] != "Lead Batches") ? $menu[$manage] : '', 
        $report, 
        $UserGroup,
        ($menu[0]['action_name'] == "KwikMail") ? 'inbox' : '',
        ($menu[0]['action_name'] == "KwikMail") ? 'starred' : '',
        ($menu[0]['action_name'] == "KwikMail") ? 'draft' : '',
        ($menu[0]['action_name'] == "KwikMail") ? 'sentmail' : '',
        ($menu[0]['action_name'] == "KwikMail") ? 'trash' : '',
        ($menu[0]['action_name'] == "KwikMail") ? 'indox_detials' : '',
        ($menu[0]['action_name'] == "KwikMail") ? 'compose' : '',
);                                    
                                    
//echo "<pre>";
//print_r($manage);
//print_r($url );
//die();

                                    if (in_array($this->uri->segment(2), $url)) {
                                        $active = "active";
                                    } else {
                                        $active = "";
                                    }
($menu[0]['action_name'] == "KwikMail") ? $menu[0]['action_name'] = "Kwik Mail" : '';
/*echo $this->uri->segment(2);
echo $active;
echo "<pre>";
print_r($menu[$add]);*/
                                    ?>                        

                                    <li> <a href="#" class="waves-effect <?php echo $active; ?> "><i class=""></i> <span class="hide-menu"> <?php echo $menu[0]['action_name'] ?> <span class="fa arrow"></span></span></a>
                                        
                                        <ul class="nav nav-second-level <?php echo (!empty($active)) ? 'collapse in' : '' ?> ">
                                        
                                            <?php if (@$menu[$add] == "addLead"): ?>
    
                                            <li><a href="#"  data-toggle="modal" data-target="#myModal"><i class="fa-fw"></i><span class="hide-menu"> Add Lead</span></a></li>                                                                                                
                                            <?php elseif($menu[$add] == "addWIP"): ?>

                                                <li><a href="#"  data-toggle="modal" data-target="#myModalWIP"><i class="fa-fw"></i><span class="hide-menu"> Add WIP</span></a></li>
                                            <?php else: ?>

                                            <li>
                                                <a href="<?php echo base_url($menu[0]['controller_name']) . "/"; echo (@$menu[$add]) ? @$menu[$add] : 'inbox'; 
                                                ?>"><i class="fa-fw"></i>
                                                    <span class="hide-menu"><?php echo ($menu[0]['action_name'] == "Kwik Mail") ? 'Mail' : 'Add ' . @$menu[0]['action_name'];  ?></span>
                                                </a>
                                            </li>

                                            <?php endif; ?>
                                           <?php if (!empty($menu[$manage])): ?>
                                                <li>
                                                    <a href="<?php echo base_url('Mod/' . $menu[$manage]); ?>"><i class="fa-fw"></i>
                                                    <span class="hide-menu"><?php echo 'Manage ' . $menu[0]['action_name']; ?></span></a>
                                            </li>
                                            <?php endif; ?>
                                               
                                                
<?php if ($_SESSION['adminData']['role_name'] == "Admin"){ ?>
    <?php if($menu[0]['action_name'] == "Leads"){ ?>
        <li><a href="<?php echo base_url('Mod/report'); ?>"><i class="fa-fw"></i><span class="hide-menu"><?php echo "Leads Report" ?></span></a></li>
    <?php } ?>                                            
<?php } ?>                                            
                                            
<?php if ($_SESSION['adminData']['role_name'] == "Admin"){ ?>
    <?php if($menu[0]['action_name'] == "Users"){ ?>
        <li><a href="<?php echo base_url('Mod/manageUserGroup'); ?>"><i class="fa-fw"></i><span class="hide-menu"><?php echo "User Groups" ?></span></a></li>
        <li><a href="<?php echo base_url('Mod/UsersReports'); ?>"><i class="fa-fw"></i><span class="hide-menu"><?php echo "Users Reports" ?></span></a></li>
    <?php } ?>                                            
<?php } ?>                                            
                                            
                                        </ul>
                                        
                                    </li>
                                     

                                    <?php
                                endif;
                                $i++;
                            endforeach;
                        endif;
                        ?>

<?php if ($_SESSION['adminData']['role_name'] == "Admin"){ ?>
    <li><a href="<?php echo base_url('Mod/activities'); ?>" class="waves-effect"><i style="font-size: 15px" class="fa fa-history"></i> <span class="hide-menu">Activities</span></a></li>
    <li><a href="<?php echo base_url('Mod/email_settings'); ?>" class="waves-effect"><i style="font-size: 15px" class="fa fa-envelope"></i> <span class="hide-menu">Email Settings</span></a></li>
<?php } ?>              
                        
                    <li><a href="<?php echo base_url('Mod/tasks_events_calendar'); ?>" class="waves-effect"><i style="font-size: 15px" class="fa fa-calendar"></i> <span class="hide-menu">Calendar</span></a></li>         
                        <li><a href="<?php echo base_url('Mod/logout'); ?>" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>

                    </ul>
                </div>
            </div>
            
            <!-- ============================================================== 
            <!-- End Left Sidebar -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Page Content -->
            <!-- ============================================================== -->


            <div id="page-wrapper">
                
                
  <!-- Modal -->
  <div class="modal fade" id="myModalWIP" role="dialog">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">

                  <button type="button" class="close" data-dismiss="modal">&times;</button>

                  <h4 class="modal-title">Create Lead Work in Progress (WIP)</h4>

              </div>
              <div class="modal-body">

                  <form class="form-horizontal">

                      <div class="row">

                              <div class="col-md-12">
                                  <div class="form-group" id="sel-campaignWIP">
                                      <label class="control-label col-md-3" style="text-align: left;">Select Campaign<span style="color: red"> *</span></label>
                                      <div class="col-md-9" style="">
                                          
                                          <select name="campaign" class="form-control" required="" id="campaignWIP">
                                              <option value="">Select Campaign</option>
                                                <?php if($campaign_result): ?> 
                                                    <?php foreach($campaign_result as $campaign): ?> 
                                                        <option value="<?php echo $campaign->campaign_short_name; ?>"><?php echo $campaign->campaign_name; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                          </select>
                                          
                                          <div id="campaign_error">
                                              
                                          </div>
                                          
                                      </div>
                                      
                                  </div>
                              </div>
                          </div>
                      
<?php if ($_SESSION['adminData']['role_name'] == "Admin"){ ?>                      
                      
                      <div class="row">
                          
                              <div class="col-md-12">
                                  <div class="form-group" style="margin-bottom: 0" id="sel-companyWIP">
                                      <label class="control-label col-md-3" style="text-align: left;">Select Company<span style="color: red"> *</span></label>
                                      <div class="col-md-9" style="">
                                          
                                          <select name="company" class="form-control" required="" id="companyWIP">
                                              <option value="">Select Company</option>
                                                <?php if($companies_result): ?> 
                                                    <?php foreach($companies_result as $company): ?> 
                                                        <option value="<?php echo $company->id; ?>"><?php echo $company->company_name; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                          </select>
                                          
                                          <div id="company_error">
                                              
                                          </div>
                                          
                                      </div>
                                      
                                  </div>
                              </div>

                          </div>

<?php } ?>                      
                      
                  </form>

              </div>

              <div class="modal-footer">
                  <button type="button" value="2" id="submitCampaignWIP" class="btn btn-success">Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>

          </div>
      </div>
  </div> 
  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">

                  <button type="button" class="close" data-dismiss="modal">&times;</button>

                  <h4 class="modal-title">Campaigns</h4>

              </div>
              <div class="modal-body">

                  <form class="form-horizontal">

                      <div class="row">

                              <div class="col-md-12">
                                  <div class="form-group" id="sel-campaign">
                                      <label class="control-label col-md-3" style="text-align: left;">Select Campaign<span style="color: red"> *</span></label>
                                      <div class="col-md-9" style="">
                                          
                                          <select name="campaign" class="form-control" required="" id="campaign">
                                              <option value="">Select Campaign</option>
                                                <?php if($campaign_result): ?> 
                                                    <?php foreach($campaign_result as $campaign): ?> 
                                                        <option value="<?php echo $campaign->campaign_short_name; ?>"><?php echo $campaign->campaign_name; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                          </select>
                                          
                                          <div id="campaign_error">
                                              
                                          </div>
                                          
                                      </div>
                                      
                                  </div>
                              </div>
                          </div>
                      
<?php if ($_SESSION['adminData']['role_name'] == "Admin"){ ?>                      
                      
                      <div class="row">
                          
                              <div class="col-md-12">
                                  <div class="form-group" style="margin-bottom: 0" id="sel-company">
                                      <label class="control-label col-md-3" style="text-align: left;">Select Company<span style="color: red"> *</span></label>
                                      <div class="col-md-9" style="">
                                          
                                          <select name="company" class="form-control" required="" id="company">
                                              <option value="">Select Company</option>
                                                <?php if($companies_result): ?> 
                                                    <?php foreach($companies_result as $company): ?> 
                                                        <option value="<?php echo $company->id; ?>"><?php echo $company->company_name; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                          </select>
                                          
                                          <div id="company_error">
                                              
                                          </div>
                                          
                                      </div>
                                      
                                  </div>
                              </div>

                          </div>

<?php } ?>                      
                      
                  </form>

              </div>

              <div class="modal-footer">
                  <button type="button" value="2" id="submitCampaign" class="btn btn-success">Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>

          </div>
      </div>
  </div> 
    
  
    <div class="modal fade" id="manul_flg" role="dialog">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">FLG Details</h4>
              </div>
              
                    <div class="panel-body" style="padding: 0px;">

                        <div class="col-md-12" style="padding: 0px; margin-top: 10px">
                            <div class="alert alert-primary" style=" background-color: #2cabe3">                            
                            <p style="font-weight: 500; color: #fff; font-size: 17px;"><i class="fa fa-arrow-down" style="font-size: 13px"></i> Manually Inserted Flg API Details</p>
                            <hr style="width: 100%; float: left; margin-top: 0px; border-color: rgba(247, 246, 240, 1)">
                            </div>
                        </div>
                    </div>
              
              <div class="modal-body">
                  
                            <div class="table-responsive" style="margin-top: 10px; margin-bottom: 20px ">

                                <table class="table table-striped table-bordered" id="api_rec">                        
                                    
                                    
                                </table>
                                
                            </div>                  
                  
                  
            </div>

              <div class="modal-footer">
                  <button type="button" value="2" id="submitCampaign" class="btn btn-success">Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>

          </div>
      </div>
    </div>                