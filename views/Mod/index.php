<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('public/adminAssets/');?>plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('public/adminAssets/');?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- animation CSS -->
    <link href="<?php echo base_url('public/adminAssets/');?>css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('public/adminAssets/');?>css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url('public/adminAssets/');?>css/colors/megna-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
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
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-gmail"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- .Task dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-check-circle"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <!-- .Megamenu -->
                    <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                        <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Forms Elements</li>
                                    <li><a href="form-basic.html">Basic Forms</a></li>
                                    <li><a href="form-layout.html">Form Layout</a></li>
                                    <li><a href="form-advanced.html">Form Addons</a></li>
                                    <li><a href="form-material-elements.html">Form Material</a></li>
                                    <li><a href="form-float-input.html">Form Float Input</a></li>
                                    <li><a href="form-upload.html">File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-img-cropper.html">Image Cropping</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Advance Forms</li>
                                    <li><a href="form-dropzone.html">File Dropzone</a></li>
                                    <li><a href="form-pickers.html">Form-pickers</a></li>
                                    <li><a href="form-wizard.html">Form-wizards</a></li>
                                    <li><a href="form-typehead.html">Typehead</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                                    <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Table Example</li>
                                    <li><a href="basic-table.html">Basic Tables</a></li>
                                    <li><a href="table-layouts.html">Table Layouts</a></li>
                                    <li><a href="data-table.html">Data Table</a></li>
                                    <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                                    <li><a href="responsive-tables.html">Responsive Tables</a></li>
                                    <li><a href="editable-tables.html">Editable Tables</a></li>
                                    <li><a href="foo-tables.html">FooTables</a></li>
                                    <li><a href="jsgrid.html">JsGrid Tables</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Charts</li>
                                    <li> <a href="flot.html">Flot Charts</a> </li>
                                    <li><a href="morris-chart.html">Morris Chart</a></li>
                                    <li><a href="chart-js.html">Chart-js</a></li>
                                    <li><a href="peity-chart.html">Peity Charts</a></li>
                                    <li><a href="knob-chart.html">Knob Charts</a></li>
                                    <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                                    <li><a href="extra-charts.html">Extra Charts</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- /.Megamenu -->
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/varun.jpg" alt="user" /></div>
                                    <div class="u-text">
                                        <h4>Steave Jobs</h4>
                                        <p class="text-muted">varun@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
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
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> Steve Gection<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> <span class="hide-menu">My Profile</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-wallet"></i> <span class="hide-menu">My Balance</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> <span class="hide-menu">Inbox</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-inverse pull-right">4</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="index.html"><i class=" fa-fw">1</i><span class="hide-menu">Dashboard 1</span></a> </li>
                            <li> <a href="index2.html"><i class=" fa-fw">2</i><span class="hide-menu">Dashboard 2</span></a> </li>
                            <li> <a href="index3.html"><i class=" fa-fw">3</i><span class="hide-menu">Dashboard 3</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">20</span> </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="panels-wells.html"><i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Panels and Wells</span></a></li>
                            <li><a href="panel-ui-block.html"><i data-icon="&#xe025;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Panels With BlockUI</span></a></li>
                            <li><a href="buttons.html"><i class="ti-layout-menu fa-fw"></i> <span class="hide-menu">Buttons</span></a></li>
                            <li><a href="sweatalert.html"><i class="ti-alert fa-fw"></i> <span class="hide-menu">Sweat alert</span></a></li>
                            <li><a href="typography.html"><i data-icon="k" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Typography</span></a></li>
                            <li><a href="grid.html"><i data-icon="&#xe009;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Grid</span></a></li>
                            <li><a href="tabs.html"><i  class="ti-layers fa-fw"></i> <span class="hide-menu">Tabs</span></a></li>
                            <li><a href="tab-stylish.html"><i class=" ti-layers-alt fa-fw"></i> <span class="hide-menu">Stylish Tabs</span></a></li>
                            <li><a href="modals.html"><i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Modals</span></a></li>
                            <li><a href="progressbars.html"><i class="ti-line-double fa-fw"></i> <span class="hide-menu">Progress Bars</span></a></li>
                            <li><a href="notification.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Notifications</span></a></li>
                            <li><a href="carousel.html"><i class="ti-layout-slider fa-fw"></i> <span class="hide-menu">Carousel</span></a></li>
                            <li><a href="list-style.html"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">List & Media object</span></a></li>
                            <li><a href="user-cards.html"><i class="ti-user fa-fw"></i> <span class="hide-menu">User Cards</span></a></li>
                            <li><a href="timeline.html"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Timeline</span></a></li>
                            <li><a href="timeline-horizontal.html"><i class="ti-layout-list-thumb fa-fw"></i> <span class="hide-menu">Horizontal Timeline</span></a></li>
                            <li><a href="nestable.html"><i class="ti-layout-accordion-separated fa-fw"></i> <span class="hide-menu">Nesteble</span></a></li>
                            <li><a href="range-slider.html"><i class=" ti-layout-slider-alt fa-fw"></i> <span class="hide-menu">Range Slider</span></a></li>
                            <li><a href="tooltip-stylish.html"><i class="ti-comments-smiley fa-fw"></i> <span class="hide-menu">Stylish Tooltip</span></a></li>
                            <li><a href="bootstrap.html"><i class="ti-rocket fa-fw"></i> <span class="hide-menu">Bootstrap UI</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-content-copy fa-fw"></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-warning pull-right">30</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">Starter Page</span></a></li>
                            <li><a href="blank.html"><i class="ti-layout-sidebar-left fa-fw"></i> <span class="hide-menu">Blank Page</span></a></li>
                            <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-email fa-fw"></i> <span class="hide-menu">Email Templates</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="../email-templates/basic.html"><i class="fa-fw">B</i> <span class="hide-menu">Basic</span></a></li>
                                    <li> <a href="../email-templates/alert.html"><i class="ti-alert fa-fw"></i> <span class="hide-menu">Alert</span></a></li>
                                    <li> <a href="../email-templates/billing.html"><i class="ti-wallet fa-fw"></i> <span class="hide-menu">Billing</span></a></li>
                                    <li> <a href="../email-templates/password-reset.html"><i class="ti-more fa-fw"></i> <span class="hide-menu">Reset Pwd</span></a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-lock fa-fw"></i><span class="hide-menu">Authentication</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="login.html"><i class="fa-fw">L</i> <span class="hide-menu">Login Page</span></a></li>
                                    <li><a href="login2.html"><i class="fa-fw">L</i> <span class="hide-menu">Login v2</span></a></li>
                                    <li><a href="register.html"><i class="fa-fw">R</i> <span class="hide-menu">Register</span></a></li>
                                    <li><a href="register2.html"><i class="fa-fw">R</i> <span class="hide-menu">Register v2</span></a></li>
                                    <li><a href="register3.html"><i class="fa-fw">3</i> <span class="hide-menu">3 Step Registration</span></a></li>
                                    <li><a href="recoverpw.html"><i class="fa-fw">R</i> <span class="hide-menu">Recover Password</span></a></li>
                                    <li><a href="lock-screen.html"><i class="fa-fw">L</i> <span class="hide-menu">Lock Screen</span></a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-info-alt fa-fw"></i><span class="hide-menu">Error Pages</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="400.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 400</span></a></li>
                                    <li><a href="403.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 403</span></a></li>
                                    <li><a href="404.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 404</span></a></li>
                                    <li><a href="500.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 500</span></a></li>
                                    <li><a href="503.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 503</span></a></li>
                                </ul>
                            </li>
                            <li><a href="lightbox.html"><i class="fa-fw">L</i> <span class="hide-menu">Lightbox Popup</span></a></li>
                            <li><a href="treeview.html"><i class="fa-fw">T</i> <span class="hide-menu">Treeview</span></a></li>
                            <li><a href="search-result.html"><i class="fa-fw">S</i> <span class="hide-menu">Search Result</span></a></li>
                            <li><a href="utility-classes.html"><i class="fa-fw">U</i> <span class="hide-menu">Utility Classes</span></a></li>
                            <li><a href="custom-scroll.html"><i class="fa-fw">C</i> <span class="hide-menu">Custom Scrolls</span></a></li>
                            <li><a href="animation.html"><i class="fa-fw">A</i> <span class="hide-menu">Animations</span></a></li>
                            <li><a href="profile.html"><i class="fa-fw">P</i> <span class="hide-menu">Profile</span></a></li>
                            <li><a href="invoice.html"><i class="fa-fw">I</i> <span class="hide-menu">Invoice</span></a></li>
                            <li><a href="faq.html"><i class="fa-fw">F</i> <span class="hide-menu">FAQ</span></a></li>
                            <li><a href="gallery.html"><i class="fa-fw">G</i> <span class="hide-menu">Gallery</span></a></li>
                            <li><a href="pricing.html"><i class="fa-fw">P</i> <span class="hide-menu">Pricing</span></a></li>
                        </ul>
                    </li>
                    <li><a href="inbox.html" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> <span class="hide-menu">Apps<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">Chat-message</span></a></li>
                            <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-desktop fa-fw"></i><span class="hide-menu">Inbox</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="inbox.html"><i class="ti-email fa-fw"></i><span class="hide-menu">Mail box</span></a></li>
                                    <li> <a href="inbox-detail.html"><i class="ti-layout-media-left-alt fa-fw"></i><span class="hide-menu">Inbox detail</span></a></li>
                                    <li> <a href="compose.html"><i class="ti-layout-media-center-alt fa-fw"></i><span class="hide-menu">Compose mail</span></a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-user fa-fw"></i><span class="hide-menu">Contacts</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="contact.html"><i class="icon-people fa-fw"></i><span class="hide-menu">Contact1</span></a></li>
                                    <li> <a href="contact2.html"><i class="icon-user-follow fa-fw"></i><span class="hide-menu">Contact2</span></a></li>
                                    <li> <a href="contact-detail.html"><i class="icon-user-following fa-fw"></i><span class="hide-menu">Contact Detail</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="devider"></li>
                    <li> <a href="forms.html" class="waves-effect"><i class="mdi mdi-clipboard-text fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="form-basic.html"><i class="fa-fw">B</i><span class="hide-menu">Basic Forms</span></a></li>
                            <li><a href="form-layout.html"><i class="fa-fw">L</i><span class="hide-menu">Form Layout</span></a></li>
                            <li><a href="form-advanced.html"><i class="fa-fw">A</i><span class="hide-menu">Form Addons</span></a></li>
                            <li><a href="form-material-elements.html"><i class="fa-fw">M</i><span class="hide-menu">Form Material</span></a></li>
                            <li><a href="form-float-input.html"><i class="fa-fw">F</i><span class="hide-menu">Form Float Input</span></a></li>
                            <li><a href="form-upload.html"><i class="fa-fw">U</i><span class="hide-menu">File Upload</span></a></li>
                            <li><a href="form-mask.html"><i class="fa-fw">M</i><span class="hide-menu">Form Mask</span></a></li>
                            <li><a href="form-img-cropper.html"><i class="fa-fw">C</i><span class="hide-menu">Image Cropping</span></a></li>
                            <li><a href="form-validation.html"><i class="fa-fw">V</i><span class="hide-menu">Form Validation</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa-fw">D</i><span class="hide-menu">File Dropzone</span></a></li>
                            <li><a href="form-pickers.html"><i class="fa-fw">P</i><span class="hide-menu">Form-pickers</span></a></li>
                            <li><a href="form-wizard.html"><i class="fa-fw">W</i><span class="hide-menu">Form-wizards</span></a></li>
                            <li><a href="form-typehead.html"><i class="fa-fw">T</i><span class="hide-menu">Typehead</span></a></li>
                            <li><a href="form-xeditable.html"><i class="fa-fw">X</i><span class="hide-menu">X-editable</span></a></li>
                            <li><a href="form-summernote.html"><i class="fa-fw">S</i><span class="hide-menu">Summernote</span></a></li>
                            <li><a href="form-bootstrap-wysihtml5.html"><i class=" fa-fw">W</i><span class="hide-menu">Bootstrap wysihtml5</span></a></li>
                            <li><a href="form-tinymce-wysihtml5.html"><i class="fa-fw">T</i><span class="hide-menu">Tinymce wysihtml5</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="tables.html" class="waves-effect"><i class="mdi mdi-table fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">9</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="basic-table.html"><i class="fa-fw">B</i><span class="hide-menu">Basic Tables</span></a></li>
                            <li><a href="table-layouts.html"><i class="fa-fw">L</i><span class="hide-menu">Table Layouts</span></a></li>
                            <li><a href="data-table.html"><i class="fa-fw">D</i><span class="hide-menu">Data Table</span></a></li>
                            <li><a href="bootstrap-tables.html"><i class="fa-fw">B</i><span class="hide-menu">Bootstrap Tables</span></a></li>
                            <li><a href="responsive-tables.html"><i class="fa-fw">R</i><span class="hide-menu">Responsive Tables</span></a></li>
                            <li><a href="editable-tables.html"><i class="fa-fw">E</i><span class="hide-menu">Editable Tables</span></a></li>
                            <li><a href="foo-tables.html"><i class="fa-fw">F</i><span class="hide-menu">FooTables</span></a></li>
                            <li><a href="jsgrid.html"><i class="fa-fw">J</i><span class="hide-menu">JsGrid Tables</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-chart-bar fa-fw"></i> <span class="hide-menu">Charts<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="flot.html"><i class="fa-fw">F</i><span class="hide-menu">Flot Charts</span></a> </li>
                            <li><a href="morris-chart.html"><i class="fa-fw">M</i><span class="hide-menu">Morris Chart</span></a></li>
                            <li><a href="chart-js.html"><i class="fa-fw">P</i><span class="hide-menu">Chart-js</span></a></li>
                            <li><a href="peity-chart.html"><i class="fa-fw">P</i><span class="hide-menu">Peity Charts</span></a></li>
                            <li><a href="chartist-js.html"><i class="fa-fw">C</i><span class="hide-menu">Chartist-js</span></a></li>
                            <li><a href="knob-chart.html"><i class="fa-fw">K</i><span class="hide-menu">Knob Charts</span></a></li>
                            <li><a href="sparkline-chart.html"><i class="fa-fw">S</i><span class="hide-menu">Sparkline charts</span></a></li>
                            <li><a href="extra-charts.html"><i class="fa-fw">E</i><span class="hide-menu">Extra Charts</span></a></li>
                        </ul>
                    </li>
                    <li class="devider"></li>
                    <li> <a href="widgets.html" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-emoticon fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="fontawesome.html"><i class="fa-fw">F</i><span class="hide-menu">Font awesome</span></a> </li>
                            <li> <a href="themifyicon.html"><i class="fa-fw">T</i><span class="hide-menu">Themify Icons</span></a> </li>
                            <li> <a href="simple-line.html"><i class="fa-fw">S</i><span class="hide-menu">Simple line Icons</span></a> </li>
                            <li> <a href="material-icons.html"><i class="fa-fw">M</i><span class="hide-menu">Material Icons</span></a> </li>
                            <li><a href="linea-icon.html"><i class="fa-fw">L</i><span class="hide-menu">Linea Icons</span></a></li>
                            <li><a href="weather.html"><i class="fa-fw">W</i><span class="hide-menu">Weather Icons</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="map-google.html" class="waves-effect"><i class="mdi mdi-google-maps fa-fw"></i><span class="hide-menu">Google Map</span></a> </li>
                    <li> <a href="map-vector.html" class="waves-effect"><i class="mdi mdi-map-marker fa-fw"></i><span class="hide-menu">Vector Map</span></a> </li>
                    <li> <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-check fa-fw"></i> <span class="hide-menu">Calendar</span></a></li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-checkbox-multiple-marked-outline fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="javascript:void(0)"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Second Level Item</span></a> </li>
                            <li> <a href="javascript:void(0)"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Second Level Item</span></a> </li>
                            <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Third Level </span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="javascript:void(0)"><i class=" fa-fw">T</i><span class="hide-menu">Third Level Item</span></a> </li>
                                    <li> <a href="javascript:void(0)"><i class=" fa-fw">M</i><span class="hide-menu">Third Level Item</span></a> </li>
                                    <li> <a href="javascript:void(0)"><i class=" fa-fw">R</i><span class="hide-menu">Third Level Item</span></a> </li>
                                    <li> <a href="javascript:void(0)"><i class=" fa-fw">G</i><span class="hide-menu">Third Level Item</span></a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="login.html" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    <li class="devider"></li>
                    <li><a href="documentation.html" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
                    <li><a href="gallery.html" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Gallery</span></a></li>
                    <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a></li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard 1</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard 1</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row row-in">
                                <div class="col-lg-4 col-sm-12 row-in-br">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-danger"><i class="ti-clipboard"></i></span>
                                        </li>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15">23</h3></li>
                                        <li class="col-middle">
                                            <h4>Total projects</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-sm-12 row-in-br  b-r-none">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-info"><i class="ti-wallet"></i></span>
                                        </li>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15">76</h3></li>
                                        <li class="col-middle">
                                            <h4>Total Earnings</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-sm-12  b-0">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-warning"><i class="fa fa-dollar"></i></span>
                                        </li>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15">83</h3></li>
                                        <li class="col-middle">
                                            <h4>Total Earnings</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-8 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Products Yearly Sales</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-info"></i>Mac</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-danger"></i>Windows</h5> </li>
                            </ul>
                            <div id="ct-visits" style="height: 285px;"></div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12">
                        <div class="bg-theme-alt">
                            <div id="ct-daily-sales" class="p-t-30" style="height: 300px"></div>
                        </div>
                        <div class="white-box">
                            <div class="row">
                                <div class="col-xs-8">
                                    <h2 class="m-b-0 font-medium">Week Sales</h2>
                                    <h5 class="text-muted m-t-0">Ios app - 160 sales</h5></div>
                                <div class="col-xs-4">
                                    <div class="circle circle-md bg-info pull-right m-t-10"><i class="ti-shopping-cart"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- wallet, & manage users widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <!-- col-md-9 -->
                    <div class="col-md-12 col-lg-8">
                        <div class="manage-users">
                            <div class="sttabs tabs-style-iconbox">
                                <nav>
                                    <ul>
                                        <li><a href="#section-iconbox-1" class="sticon ti-user"><span>Select Users</span></a></li>
                                        <li><a href="#section-iconbox-2" class="sticon ti-lock"><span>Set Permissions</span></a></li>
                                        <li><a href="#section-iconbox-3" class="sticon ti-receipt"><span>Message Users</span></a></li>
                                        <li><a href="#section-iconbox-4" class="sticon ti-check-box"><span>Save and finish</span></a></li>
                                    </ul>
                                </nav>
                                <div class="content-wrap">
                                    <section id="section-iconbox-1">
                                        <div class="p-20 row">
                                            <div class="col-sm-6">
                                                <h3 class="m-t-0">Select Users to Manage</h3></div>
                                            <div class="col-sm-6">
                                                <ul class="side-icon-text pull-right">
                                                    <li><a href="#"><span class="circle circle-sm bg-success di"><i class="ti-plus"></i></span><span>Add Users</span></a></li>
                                                    <li><a href="#"><span class="circle circle-sm bg-danger di"><i class="ti-pencil-alt"></i></span><span>Edit</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="table-responsive manage-table">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th style="width: 150px;">NAME</th>
                                                        <th>POSITION</th>
                                                        <th>JOINED</th>
                                                        <th>LOCATION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advance-table-row active">
                                                        <td style="width: 10px;"></td>
                                                        <td style="width: 40px;">
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox7" checked="" type="checkbox">
                                                                <label for="checkbox7"> </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 60px;"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/varun.jpg" class="img-circle" alt="user img" width="30" /></td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox8" type="checkbox">
                                                                <label for="checkbox8"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/genu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin</td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox9" type="checkbox">
                                                                <label for="checkbox9"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/sonu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox10" type="checkbox">
                                                                <label for="checkbox10"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/pawandeep.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="p-10 p-t-30 row">
                                            <div class="col-sm-8">
                                                <h3>1 members selected</h3></div>
                                            <div class="col-sm-2 pull-right m-t-10"><a href="javascript:void(0);" class="btn btn-block p-10 btn-rounded btn-danger"><span>Next</span><i class="ti-arrow-right m-l-5"></i></a></div>
                                        </div>
                                    </section>
                                    <section id="section-iconbox-2">
                                        <div class="p-20 row">
                                            <div class="col-sm-6">
                                                <h3 class="m-t-0">Set Users Permission</h3></div>
                                            <div class="col-sm-6">
                                                <ul class="side-icon-text pull-right">
                                                    <li><a href="#"><span class="circle circle-sm bg-success di"><i class="ti-plus"></i></span><span>Add Users</span></a></li>
                                                    <li><a href="#"><span class="circle circle-sm bg-danger di"><i class="ti-pencil-alt"></i></span><span>Edit</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="table-responsive manage-table">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>NAME</th>
                                                        <th>POSITION</th>
                                                        <th>JOINED</th>
                                                        <th>LOCATION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advance-table-row">
                                                        <td style="width: 10px;"></td>
                                                        <td style="width: 40px;">
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox25" type="checkbox">
                                                                <label for="checkbox25"> </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 60px;"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/varun.jpg" class="img-circle" alt="user img" width="30" /></td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row active">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox12" checked="" type="checkbox">
                                                                <label for="checkbox12"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/genu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin</td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox13" type="checkbox">
                                                                <label for="checkbox13"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/sonu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox14" type="checkbox">
                                                                <label for="checkbox14"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/pawandeep.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="p-10 row">
                                            <div class="col-sm-8">
                                                <h3>1 members selected</h3></div>
                                            <div class="col-sm-2 pull-right m-t-10"><a href="javascript:void(0);" class="btn btn-block p-10 btn-rounded btn-danger"><span>Next</span><i class="ti-arrow-right m-l-5"></i></a></div>
                                        </div>
                                    </section>
                                    <section id="section-iconbox-3">
                                        <div class="p-20 row">
                                            <div class="col-sm-6">
                                                <h3 class="m-t-0">Manage Users</h3></div>
                                            <div class="col-sm-6">
                                                <ul class="side-icon-text pull-right">
                                                    <li><a href="#"><span class="circle circle-sm bg-success di"><i class="ti-plus"></i></span><span>Add Users</span></a></li>
                                                    <li><a href="#"><span class="circle circle-sm bg-danger di"><i class="ti-pencil-alt"></i></span><span>Edit</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="table-responsive manage-table">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>NAME</th>
                                                        <th>POSITION</th>
                                                        <th>JOINED</th>
                                                        <th>LOCATION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advance-table-row">
                                                        <td style="width: 10px;"></td>
                                                        <td style="width: 40px;">
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox16" type="checkbox">
                                                                <label for="checkbox16"> </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 60px;"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/varun.jpg" class="img-circle" alt="user img" width="30" /></td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox15" type="checkbox">
                                                                <label for="checkbox15"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/genu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin</td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row active">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox17" checked="" type="checkbox">
                                                                <label for="checkbox17"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/sonu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox18" type="checkbox">
                                                                <label for="checkbox18"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/pawandeep.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="p-10 row">
                                            <div class="col-sm-8">
                                                <h3>1 members selected</h3></div>
                                            <div class="col-sm-2 pull-right m-t-10"><a href="javascript:void(0);" class="btn btn-block p-10 btn-rounded btn-danger"><span>Next</span><i class="ti-arrow-right m-l-5"></i></a></div>
                                        </div>
                                    </section>
                                    <section id="section-iconbox-4">
                                        <div class="p-20 row">
                                            <div class="col-sm-6">
                                                <h3 class="m-t-0">Save and finish</h3></div>
                                            <div class="col-sm-6">
                                                <ul class="side-icon-text pull-right">
                                                    <li><a href="#"><span class="circle circle-sm bg-success di"><i class="ti-plus"></i></span><span>Add Users</span></a></li>
                                                    <li><a href="#"><span class="circle circle-sm bg-danger di"><i class="ti-pencil-alt"></i></span><span>Edit</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="table-responsive manage-table">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>NAME</th>
                                                        <th>POSITION</th>
                                                        <th>JOINED</th>
                                                        <th>LOCATION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advance-table-row">
                                                        <td style="width: 10px;"></td>
                                                        <td style="width: 40px;">
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox19" type="checkbox">
                                                                <label for="checkbox19"> </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 60px;"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/varun.jpg" class="img-circle" alt="user img" width="30" /></td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox20" type="checkbox">
                                                                <label for="checkbox20"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/genu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin</td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox21" type="checkbox">
                                                                <label for="checkbox21"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/sonu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row active">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox22" checked="" type="checkbox">
                                                                <label for="checkbox22"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/pawandeep.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="p-10 row">
                                            <div class="col-sm-8">
                                                <h3>1 members selected</h3></div>
                                            <div class="col-sm-2 pull-right m-t-10"><a href="javascript:void(0);" class="btn btn-block p-10 btn-rounded btn-danger"><span>Save</span><i class="ti-arrow-right m-l-5"></i></a></div>
                                        </div>
                                    </section>
                                </div>
                                <!-- /content -->
                            </div>
                            <!-- /tabs -->
                        </div>
                    </div>
                    <!-- /col-md-9 -->
                    <!-- col-md-3 -->
                    <div class="col-md-12 col-lg-4">
                        <div class="panel wallet-widgets">
                            <div class="panel-body">
                                <ul class="side-icon-text">
                                    <li class="m-0"><a href="#"><span class="circle circle-md bg-success di vm"><i class="ti-plus"></i></span><div class="di vm"><h1 class="m-b-0">$458.50</h1><h5 class="m-t-0">Your wallet Banalce</h5></div></a></li>
                                </ul>
                            </div>
                            <div id="morris-area-chart2" style="height:208px"></div>
                            <ul class="wallet-list">
                                <li><i class="icon-wallet"></i><a href="javascript:void(0)">Withdrow money</a></li>
                                <li><i class="icon-handbag"></i><a href="javascript:void(0)">Shop Now</a></li>
                                <li><i class="ti-archive"></i><a href="javascript:void(0)">Add funds</a></li>
                                <li><i class=" ti-wallet"></i><a href="javascript:void(0)">Withdrow money</a></li>
                                <li><i class="icon-wallet"></i><a href="javascript:void(0)">Withdrow money</a></li>
                                <li><i class="icon-handbag"></i><a href="javascript:void(0)">Shop Now</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /col-md-3 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Profile, & inbox widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">MANAGE USERS</div>
                            <div class="table-responsive">
                                <table class="table table-hover manage-u-table">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px;" class="text-center">#</th>
                                            <th>NAME</th>
                                            <th>OCCUPATION</th>
                                            <th>EMAIL</th>
                                            <th>CATEGORY</th>
                                            <th>MANAGE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>
                                            <td>
                                                <select class="form-control">
                                                    <option>Modulator</option>
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                    <option>Subscriber</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>
                                            <td>
                                                <select class="form-control">
                                                    <option>Modulator</option>
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                    <option>Subscriber</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>
                                            <td>
                                                <select class="form-control">
                                                    <option>Modulator</option>
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                    <option>Subscriber</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>
                                            <td>
                                                <select class="form-control">
                                                    <option>Modulator</option>
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                    <option>Subscriber</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>
                                            <td>
                                                <select class="form-control">
                                                    <option>Modulator</option>
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                    <option>Subscriber</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>
                                            <td>
                                                <select class="form-control">
                                                    <option>Modulator</option>
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                    <option>Subscriber</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>
                                            <td>
                                                <select class="form-control">
                                                    <option>Modulator</option>
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                    <option>Subscriber</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- calendar widgets -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="panel">
                            <div class="p-20">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h5 class="m-b-0">This months task</h5>
                                        <h3 class="m-t-0 font-medium">TO-DO LIST</h3>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="javascript:void(0)" class="pull-right btn btn-rounded btn-danger m-t-15" data-toggle="modal" data-target="#myModal">Add Task</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .modal for add task -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title">Add Task</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail2">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            <div class="panel-footer">
                                <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                            <label for="inputSchedule"> <span>Schedule meeting with</span> </label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/1.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Steave" /></li>
                                            <li><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/2.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Jessica" /></li>
                                            <li><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/3.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Priyanka" /></li>
                                            <li><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/4.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Selina" /></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                            <label for="inputCall"> <span>Give Purchase report to</span> <span class="label label-danger label-rounded">Today</span> </label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/3.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Priyanka" /></li>
                                            <li><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/4.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Selina" /></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                            <label for="inputBook"> <span>Book flight for holiday</span> </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                            <label for="inputForward"> <span>Forward all tasks</span> <span class="label label-warning label-rounded">2 weeks</span> </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                            <label for="inputRecieve"> <span>Recieve shipment</span> </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                                            <label for="inputForward2"> <span>Important tasks</span> <span class="label label-success label-rounded">2 weeks</span> </label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/1.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Assign to Steave" /></li>
                                            <li><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/2.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Assign to Jessica" /></li>
                                            <li><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/4.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Assign to Selina" /></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-sm-12 m-b-30">
                        <div id="calendar"></div>
                    </div>
                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="my-event">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"><strong>Add Event</strong></h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-new-event">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Category Name</label>
                                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Choose Category Color</label>
                                                <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                    <option value="success">Success</option>
                                                    <option value="danger">Danger</option>
                                                    <option value="info">Info</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="warning">Warning</option>
                                                    <option value="inverse">Inverse</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                    <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL -->
                </div>
                <!-- ============================================================== -->
                <!-- Blog-component -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12"> <img class="img-responsive" alt="user" src="<?php echo base_url('public/adminAssets/');?>plugins/images/big/img2.jpg">
                        <div class="white-box">
                            <div class="text-muted"><span class="m-r-10"><i class="icon-calender"></i> May 16</span> <a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 38</a></div>
                            <h3 class="m-t-20 m-b-20">Top 20 Models are on the ramp</h3>
                            <p>Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                            <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12"> <img class="img-responsive" alt="user" src="<?php echo base_url('public/adminAssets/');?>plugins/images/big/img3.jpg">
                        <div class="white-box">
                            <div class="text-muted"><span class="m-r-10"><i class="icon-calender"></i> May 16</span> <a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 38</a></div>
                            <h3 class="m-t-20 m-b-20">Top 20 Models are on the ramp</h3>
                            <p>Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                            <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12"> <img class="img-responsive" alt="user" src="<?php echo base_url('public/adminAssets/');?>plugins/images/big/img4.jpg">
                        <div class="white-box">
                            <div class="text-muted"><span class="m-r-10"><i class="icon-calender"></i> May 16</span> <a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 38</a></div>
                            <h3 class="m-t-20 m-b-20">Top 20 Models are on the ramp</h3>
                            <p>Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                            <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- chats, message & profile widgets -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-themecolor">
                                    <div class="panel-heading">
                                        CHAT LISTING
                                    </div>
                                    <div class="panel-body">
                                        <ul class="chatonline">
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel panel-themecolor">
                            <div class="panel-heading">USER ACTIVITY</div>
                            <div class="panel-body">
                                <div class="steamline">
                                    <div class="sl-item">
                                        <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div><a href="#">Tohnathan Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Contrary to popular belief</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left bg-info"><i class="fa fa-image"></i></div>
                                        <div class="sl-right">
                                            <div><a href="#">Hritik Roshan</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Lorem Ipsum is simply dummy</div>
                                            <div class="row inline-photos">
                                                <div class="col-xs-4"><img class="img-responsive" alt="user" src="<?php echo base_url('public/adminAssets/');?>plugins/images/small/vd1.jpg"></div>
                                                <div class="col-xs-4"><img class="img-responsive" alt="user" src="<?php echo base_url('public/adminAssets/');?>plugins/images/small/vd2.jpg"></div>
                                                <div class="col-xs-4"><img class="img-responsive" alt="user" src="<?php echo base_url('public/adminAssets/');?>plugins/images/small/vd3.jpg"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url('public/adminAssets/');?>plugins/images/users/sonu.jpg"> </div>
                                        <div class="sl-right">
                                            <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">The standard chunk of ipsum </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url('public/adminAssets/');?>plugins/images/users/ritesh.jpg"> </div>
                                        <div class="sl-right">
                                            <div><a href="#">Varun Dhavan</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Contrary to popular belief</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url('public/adminAssets/');?>plugins/images/users/govinda.jpg"> </div>
                                        <div class="sl-right">
                                            <div><a href="#">Tiger Sroff</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">The generated lorem ipsum
                                                <br><a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline btn-success">Apporve</a> <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline btn-danger">Refuse</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="panel panel-themecolor">
                            <div class="panel-heading"> CHATBOX
                                <div class="pull-right"> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" role="dialog" aria-expanded="true">
                                <div class="panel-body">
                                    <div class="chat-box" style="height: 510px;">
                                        <ul class="chat-list slimscroll" style="overflow: hidden;" tabindex="5005">
                                            <li>
                                                <div class="chat-image"> <img alt="male" src="<?php echo base_url('public/adminAssets/');?>plugins/images/users/sonu.jpg"> </div>
                                                <div class="chat-body">
                                                    <div class="chat-text">
                                                        <h4>Sonu Nigam</h4>
                                                        <p> Hi, All! </p> <b>10.00 am</b> </div>
                                                </div>
                                            </li>
                                            <li class="odd">
                                                <div class="chat-image"> <img alt="Female" src="<?php echo base_url('public/adminAssets/');?>plugins/images/users/genu.jpg"> </div>
                                                <div class="chat-body">
                                                    <div class="chat-text">
                                                        <h4>Genelia</h4>
                                                        <p> Hi, How are you Sonu? ur next concert? </p> <b>10.03 am</b> </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="chat-image"> <img alt="male" src="<?php echo base_url('public/adminAssets/');?>plugins/images/users/ritesh.jpg"> </div>
                                                <div class="chat-body">
                                                    <div class="chat-text">
                                                        <h4>Ritesh</h4>
                                                        <p> Hi, Sonu and Genelia, </p> <b>10.05 am</b> </div>
                                                </div>
                                            </li>
                                            <li class="odd">
                                                <div class="chat-image"> <img alt="Female" src="<?php echo base_url('public/adminAssets/');?>plugins/images/users/genu.jpg"> </div>
                                                <div class="chat-body">
                                                    <div class="chat-text">
                                                        <h4>Genelia</h4>
                                                        <p> Hi, How are you Sonu? ur next concert? </p> <b>10.03 am</b> </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <textarea placeholder="Type your message here" class="chat-box-input"></textarea>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <button class="btn btn-success btn-circle btn-xl" type="button"><i class="fa fa-paper-plane-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- ============================================================== -->
                <!-- start right sidebar -->
                <!-- ============================================================== -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="full-width"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme working">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('public/adminAssets/');?>/plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('public/adminAssets/');?>bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url('public/adminAssets/');?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('public/adminAssets/');?>js/waves.js"></script>
    <!--Counter js -->
    <script src="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/morrisjs/morris.js"></script>
    <!-- chartist chart -->
    <script src="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Calendar JavaScript -->
    <script src="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/moment/moment.js"></script>
    <script src='<?php echo base_url('public/adminAssets/');?>plugins/bower_components/calendar/dist/fullcalendar.min.js'></script>
    <script src="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/calendar/dist/cal-init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('public/adminAssets/');?>js/custom.min.js"></script>
    <script src="<?php echo base_url('public/adminAssets/');?>js/dashboard1.js"></script>
    <!-- Custom tab JavaScript -->
    <script src="<?php echo base_url('public/adminAssets/');?>js/cbpFWTabs.js"></script>
    <script type="text/javascript">
    (function() {
        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
    </script>
    <script src="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url('public/adminAssets/');?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
