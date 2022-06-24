
<!DOCTYPE html>  
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('public/adminAssets/'); ?>plugins/images/favicon.png">
        <title>Leads Portal</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('public/adminAssets/'); ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="<?php echo base_url('public/adminAssets/'); ?>css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url('public/adminAssets/'); ?>css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="<?php echo base_url('public/adminAssets/'); ?>css/colors/default.css" id="theme"  rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <!-- Preloader -->
        
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        
        <section id="wrapper" class="new-login-register">
            <div class="lg-info-panel">
                <div class="inner-panel">
                    <div class="lg-content" style="margin-top: 20%">
                        <h2 style="font-weight: bolder; font-size: 30px ">Admin Login</h2>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="new-login-box" style="margin-top: 5%; /* margin-top: 5%; margin-left: 44% */">
                
                <div class="white-box">
                    
                    <img src="<?php echo base_url('public/adminAssets/plugins/images/logo.png') ?>" alt="">
                    
                    <!--#35b7ff-->
                    
                    <h3 class="box-title m-b-0" style="color: #35b7ff;">Sign In to Partner Panel</h3>
                    <small style="color: #000;">Enter your details below</small>
                    
                    

                        
                <?php if ($this->session->flashdata('error') || validation_errors()): ?>                                                        
                        
                        <div class="alert alert-danger" style="margin-top: 20px">
                            <p style="color: white;"><strong>Form Errors !</strong><p>
                            <?php echo (validation_errors()) ? "<p style='color: white;'>" . validation_errors('<strong>', '</strong><br>') . "</p>" : ''; ?>                            
                            <p style='color: white;'><strong><?php echo $this->session->flashdata('error'); ?> </strong></p>
                        </div>
                        
                <?php endif; ?>                                                        
                        
                        
                <?php if ($this->session->flashdata('resetPassword')): ?>                                                        
                        
                        <div class="alert alert-success" style="margin-top: 20px">
                            <p style="color: white;"><strong>Password Changed. !</strong><p>
                            <p style='color: white;'><strong><?php echo $this->session->flashdata('resetPassword'); ?> </strong></p>
                        </div>
                        
                <?php endif; ?>                                                        
                    
                    <form class="form-horizontal new-lg-form" id="loginform" action="<?php echo base_url('Mod/adminLogin'); ?>" method="post" style="padding: 0px">

                        <div class="form-group  m-t-20">
                            <div class="col-xs-12">
                                <label>User Name</label>
                                <input class="form-control" name="userName" type="text" required="" placeholder="Username">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label>Password</label>
                                <input class="form-control" name="password" type="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-info pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> Remember me </label>
                                </div>
                                <!--<a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>--> 
                            </div>
                        </div>
                        
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" style="border-radius: 2px" type="submit">Log In</button>
                            </div>
                        </div>
                        
<!--                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <p>Don't have an account? <a href="register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                            </div>
                        </div>-->
                        
                    </form>
                    
                    <form class="form-horizontal" id="recoverform" action="">
                        
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>            


        </section>
        <!-- jQuery -->
        <script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('public/adminAssets/'); ?>bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

        <!--slimscroll JavaScript -->
        <script src="<?php echo base_url('public/adminAssets/'); ?>js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="<?php echo base_url('public/adminAssets/'); ?>js/waves.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('public/adminAssets/'); ?>js/custom.min.js"></script>
        <!--Style Switcher -->
        <script src="<?php echo base_url('public/adminAssets/'); ?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    </body>
</html>
