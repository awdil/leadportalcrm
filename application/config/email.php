
<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
   // 'smtp_host' => 'smtp.ionos.co.uk',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
   // 'smtp_user' => 'portalemails@kwikcarhire.co.uk',
     'smtp_user' => 'kwikcarhire12@gmail.com',
    'smtp_pass' => 'White2020@',
    'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '20', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
);
