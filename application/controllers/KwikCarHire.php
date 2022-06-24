<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KwikCarHire extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        $this->load->view('KwikCarHire/header/header');
        $this->load->view('KwikCarHire/home/home');
        $this->load->view('KwikCarHire/footer/footer');
        
    }
    
    
    public function accidentManagement(){
        
        $this->load->view('KwikCarHire/header/header');
        $this->load->view('KwikCarHire/accidentManagement/accidentManagement');
        $this->load->view('KwikCarHire/footer/footer');
        
    }

    public function creditHire(){

        $this->load->view('KwikCarHire/header/header');
        $this->load->view('KwikCarHire/creditHire/creditHire');
        $this->load->view('KwikCarHire/footer/footer');
        
    }

    public function accidentRecovery(){

        $this->load->view('KwikCarHire/header/header');
        $this->load->view('KwikCarHire/accidentRecovery/accidentRecovery');
        $this->load->view('KwikCarHire/footer/footer');
        
    }

    public function ourFleet(){

        $this->load->view('KwikCarHire/header/header');
        $this->load->view('KwikCarHire/ourFleet/ourFleet');
        $this->load->view('KwikCarHire/footer/footer');
        
    }

    public function termsAndConditions(){
        
        $this->load->view('KwikCarHire/header/header');
        $this->load->view('KwikCarHire/termsAndConditions/termsAndConditions');
        $this->load->view('KwikCarHire/footer/footer');
        
    }
    
    public function privacyPolicy(){
        
        $this->load->view('KwikCarHire/header/header');
        $this->load->view('KwikCarHire/privacyPolicy/privacyPolicy');
        $this->load->view('KwikCarHire/footer/footer');
        
    }
    
    public function CreateData(){
        $this->form_validation->set_rules('inquiryselect', 'NATURE OF ENQUIRY', 'trim|required|xss_clean');
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email ', 'trim|required|xss_clean');
        $this->form_validation->set_rules('telephone', 'telephone ', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) { 
            $this->index(); 
        }else{
				$inquiryselect          = $_POST['inquiryselect'];
				$first_name             = $_POST['first_name'];
				$last_name              = $_POST['last_name'];
				$email                  = $_POST['email'];
				$telephone              = $_POST['telephone'];
				$AvailabilityDate       = $_POST['AvailabilityDate'];
                $AvailabilityTime       = $_POST['AvailabilityTime'];
         
        }
    }
    
}
