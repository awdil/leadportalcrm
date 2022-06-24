<?php

class Authenticate {

    protected $CI;

    public function __construct() {
        $this->CI = & get_instance();
    }

    
    public function check_user_login() {

        // Admin hook
        
        if ($this->CI->uri->segment(1) == "Mod" || $this->CI->uri->segment(1) == "Leads" || $this->CI->uri->segment(1) == "KwikMail") {

            if ($this->CI->uri->segment(2) == 'accountVerification') {
                
            } 
            
            else {

                if (!$this->CI->session->userdata('adminData') && $this->CI->uri->segment(2) != "adminLogin") {
                    redirect('Mod/adminLogin');
                }

                if ($this->CI->session->userdata('adminData') && $this->CI->uri->segment(2) == "login") {
                    redirect(site_url('Mod/Dashboard'));
                }

                if ($this->CI->session->userdata('adminData') && $this->CI->uri->segment(2) == "") {
                    redirect(site_url('Mod/Dashboard'));
                }

                if ($this->CI->session->userdata('adminData') && $this->CI->uri->segment(2) == "adminLogin") {
                    redirect(site_url('Mod/Dashboard'));
                }
            }
        }

        // Navigation Active Links by Page.
        
        
        
    }
    
        // user hook

//        if ($this->CI->uri->segment(1) == "user") {
//
//            $controllers = array('register', 'login');
//
//            foreach ($controllers as $controller){
//                
//                if ($this->CI->uri->segment(2) == $controller){
//                    
//                    if (!$this->CI->session->userdata('userData') && $this->CI->uri->segment(2) != $controller ) {
//                        redirect('user/login');
//                    }
//
//                    if ($this->CI->session->userdata('userData') && $this->CI->uri->segment(2) == $controller ) {
//                        redirect(site_url('user/dashboard'));
//                    }
//
//                    if ($this->CI->session->userdata('userData') && $this->CI->uri->segment(2) == "") {
//                        redirect(site_url('user/dashboard'));
//                    }
//                    
//                }
//            }
//            
//            
//        }
        
       
//        if ($this->CI->uri->segment(1) == "user") {
//            $controllers = array('register', 'login');
//            
//            if (!$this->CI->session->userdata('userData')) {
//                if (!in_array($this->CI->uri->segment(2), $controllers)){
//                    redirect('user/login');                    
//                }
//            }
//
//            if ($this->CI->session->userdata('userData')) {
//                
//                if (in_array($this->CI->uri->segment(2), $controllers)){
//                    redirect(site_url('user/dashboard'));
//                }
//                
//            }
//
//            if ($this->CI->session->userdata('userData') && $this->CI->uri->segment(2) == "") {
//                redirect(site_url('user/dashboard'));
//            }
//        }        
//        
//        
//        if (!$this->CI->uri->segment(1)) {
//            if ($this->CI->session->userdata('userData')){
//                redirect(site_url('user/dashboard'));
//            }        
//        }
//        
//        
//        
//    }

}

?>