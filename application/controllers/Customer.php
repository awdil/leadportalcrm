<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    
    
    public function login(){
        $this->load->view('Customer/login');
    }

    public function dashboard(){
        $this->load->view('ampleadmin-sidebar/index');
    }
    
    public function customerDashboard(){
        $this->load->view('ampleadmin-sidebar/index');
    }
    
    
}
