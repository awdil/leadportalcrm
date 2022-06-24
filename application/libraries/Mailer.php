<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."/third_party/phpmailer/PHPMailer.php";
require_once APPPATH."/third_party/phpmailer/OAuth.php";
require_once APPPATH."/third_party/phpmailer/POP3.php";
require_once APPPATH."/third_party/phpmailer/SMTP.php";

class Mailer extends PHPMailer{
    
    public function __construct() {
        parent::__construct();
    }
    
    
}




