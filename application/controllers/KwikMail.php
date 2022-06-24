<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Mod.php';

class KwikMail extends Mod {
    
    protected $title = "Kwik Mail";
    protected $data = array();
    
    public function __construct() {
        parent::__construct();
    }
    
    public function inbox(){
        
        $permission_access      = isset($_SESSION['adminData']['KwikMail']);
        $permission_add         = isset($_SESSION['adminData']['KwikMail']['permission_view']);
        $permission_view        = isset($_SESSION['adminData']['KwikMail']['permission_view']);
        $permission_update      = isset($_SESSION['adminData']['KwikMail']['permission_update']);
        $permission_delete      = isset($_SESSION['adminData']['KwikMail']['permission_delete']);
        
        $this->data['page_title']    = "Inbox";        
        $user_id = $_SESSION['adminData']['user_id'];
        
        $sql                    = " SELECT 
                                        kwikmail_statuses.*, kwikmail_statuses.id as 'kwikmail_statuses_id',
                                        kwikmail.*
                                    FROM 
                                        kwikmail_statuses 
                                    inner join kwikmail on kwikmail.id = kwikmail_statuses.kwil_mail_id 
                                    WHERE 
                                        (kwikmail_statuses.reciever_id = $user_id OR kwikmail_statuses.mail_cc_id = $user_id OR kwikmail_statuses.mail_bcc_id = $user_id 
                                         )
AND kwikmail_statuses.status = 'inbox'                                         
                                    
and kwikmail_statuses.is_trash = 0
                                    order by 
                                        kwikmail_statuses.kwil_mail_id 
                                    desc";
        
        $inbox_result           = $this->db->query($sql)->result_array();        
        
        foreach ($inbox_result as $key => $inbox){
            
            if (in_array('new', $inbox)){
                $inbox_result_sub[$inbox['id']][] = $inbox;                
            }
            
            elseif (in_array($inbox['parent_mail_id'], $inbox)){
                $inbox_result_sub[$inbox['parent_mail_id']][] = $inbox;
            }else{
                unset($inbox);
            }
            
            
        }     
        
        $sql_count_unread       = " SELECT 
                                        count(kwikmail_statuses.id) as 'unread_count'
                                    FROM 
                                        kwikmail_statuses 
                                    inner join kwikmail on kwikmail.id = kwikmail_statuses.kwil_mail_id 
                                    WHERE 
                                        (kwikmail_statuses.reciever_id = $user_id OR kwikmail_statuses.mail_cc_id = $user_id OR kwikmail_statuses.mail_bcc_id = $user_id)
                                    AND
                                        kwikmail_statuses.status = 'inbox' and kwikmail_statuses.is_read = 0 and kwikmail_statuses.is_trash = 0
                                    ";
        
        $inbox_result_count_unread           = $this->db->query($sql_count_unread)->result();        
        
        if (!empty($inbox_result_sub)){
            $this->data['inbox']    = $inbox_result_sub;
            $this->data['inbox_unread_count']    = $inbox_result_count_unread;
            
        }else{
            $this->data['inbox']    = '';
            $this->data['inbox_unread_count']    = "";
            
        }
        
        
        if($permission_access){
            $this->headerV($this->title = "Kwik Mail | Inbox");
            $this->load->view('Mod/kwikmail/inbox', $this->data);
            $this->load->view('Mod/footer/footer'); 
        }else{
            $this->headerV($this->title = "Restricted Area");
            $this->load->view('Mod/leads/permissiontothis');                
            $this->load->view('Mod/footer/footer');  
        }
        
        /*if($_SESSION['adminData']['company_id']=='230'){
            $this->title = "Leads Portal";
            $this->headerV($this->title);
            $this->load->view('Mod/dashboard/dashboard', $this->data);
            $this->load->view('Mod/footer/footer');
        }else{
        $this->headerV($this->title = "Kwik Mail | Inbox");
        $this->load->view('Mod/kwikmail/inbox', $this->data);
        $this->load->view('Mod/footer/footer'); 
        }*/
        
    }
    
    public function starred(){

        $this->data['page_title']    = "Starred";                
        $this->data['inbox']    = "";
        
        $this->headerV($this->title = "Kwik Mail | Starred");
        $this->load->view('Mod/kwikmail/inbox', $this->data);
        $this->load->view('Mod/footer/footer');        
        
    }
    
    public function draft(){

        $this->data['page_title']    = "Draft";                
        
        $this->data['inbox']    = "";
        
        $this->headerV($this->title = "Kwik Mail | Draft");
        $this->load->view('Mod/kwikmail/inbox', $this->data);
        $this->load->view('Mod/footer/footer');        
        
    }
    
    public function move_to_trash($id){
        
        $mail_id = base64_decode($id);
        $user_id = $_SESSION['adminData']['user_id'];
        
        $sql_single_mail_ref        = "SELECT 
                                        kwikmail_statuses.*, kwikmail.parent_mail_id
                                    FROM 
                                        kwikmail 
                                    inner join kwikmail_statuses on kwikmail_statuses.kwil_mail_id = kwikmail.id
                                    inner join users on users.id = kwikmail.user_id                                       
                                    where 
                                        kwikmail.parent_mail_id = $mail_id 
                                    and 
                                            ( kwikmail_statuses.reciever_id = $user_id 
                                            OR kwikmail_statuses.mail_cc_id = $user_id 
                                            OR kwikmail_statuses.mail_bcc_id = $user_id and kwikmail.parent_mail_id = $mail_id or kwikmail.id = $mail_id ) 

                                    OR ( kwikmail_statuses.sender_id = $user_id and kwikmail.parent_mail_id = $mail_id or kwikmail.id = $mail_id
                                            AND kwikmail_statuses.status in ('sent'))
                                    order by kwikmail.id asc";
        
        $result_single_mail_ref     = $this->db->query($sql_single_mail_ref)->result();     
        
        $is_trash = array('is_trash' => 1);

        if (!empty($result_single_mail_ref)){
        
            foreach ($result_single_mail_ref as $data){
                $this->Mods->update($table_name = 'kwikmail_statuses', $conditionField = array('id' => $data->id), $userId = $data->id, $data = $is_trash);            
            }
            
        }
        
        redirect(base_url('KwikMail/inbox'));
        
    }
    
    public function sentmail(){

        $this->data['page_title']    = "Sent Mail";                
        
        
        $user_id = $_SESSION['adminData']['user_id'];
        
    $sql                    = " SELECT 
                                        kwikmail_statuses.*, 
                                        kwikmail.*, kwikmail_statuses.id as 'kwikmail_statuses_id',
                                        (SELECT kwikmail_attchment.attchments FROM kwikmail_attchment 
                                        WHERE 
                                            kwikmail_attchment.mail_type = 'sent' 
                                        and 
                                            kwikmail_attchment.sender_id = $user_id and kwikmail_attchment.mail_cc_id is null and kwikmail_attchment.mail_bcc_id is null and kwikmail_attchment.reciever_id is null
                                        and 
                                            kwikmail_attchment.user_id = $user_id 
                                        and 
                                            kwikmail_attchment.mail_id = kwikmail.id) 
                                        as 
                                            'attchments'
                                    FROM 
                                        kwikmail_statuses 
                                    inner join kwikmail on kwikmail.id = kwikmail_statuses.kwil_mail_id 
                                    WHERE 
                                        kwikmail_statuses.user_id = $user_id 
                                    AND 
                                        kwikmail_statuses.sender_id = $user_id 
--                                            and kwikmail.parent_mail_id = 0
                                    and 
                                        kwikmail_statuses.status = 'sent' and kwikmail_statuses.mail_bcc_id is null and kwikmail_statuses.mail_cc_id is null and kwikmail_statuses.reciever_id is null and kwikmail_statuses.is_trash = 0
                                    order by 
                                        kwikmail_statuses.kwil_mail_id 
                                    desc";


       
        $inbox_result           = $this->db->query($sql)->result_array();        
        
        /*echo "<pre>";
        print_r($inbox_result);
        die();*/
        
        foreach ($inbox_result as $key => $inbox){
            
            if (in_array('new', $inbox)){
                $inbox_result_sub[$inbox['id']][] = $inbox;                
            }
            
            elseif (in_array($inbox['parent_mail_id'], $inbox)){
                $inbox_result_sub[$inbox['parent_mail_id']][] = $inbox;
            }else{
                unset($inbox);
            }
            
        }     
        
        if (!empty($inbox_result_sub)){
            $this->data['inbox']    = $inbox_result_sub;
        }else{
            $this->data['inbox']    = '';
        }
        
        $this->headerV($this->title = "Kwik Mail | Sent Mail");
        $this->load->view('Mod/kwikmail/inbox', $this->data);
        $this->load->view('Mod/footer/footer');                
        
    }
    
    public function trash(){

        $this->data['page_title']    = "Trash";              
        $user_id                     = $_SESSION['adminData']['user_id'];
                
         $sql                    = " SELECT 
                                        kwikmail_statuses.*, kwikmail_statuses.id as 'kwikmail_statuses_id',
                                        kwikmail.*
                                    FROM 
                                        kwikmail_statuses 
                                    inner join kwikmail on kwikmail.id = kwikmail_statuses.kwil_mail_id 
                                    WHERE 
                                        (kwikmail_statuses.reciever_id = $user_id OR kwikmail_statuses.mail_cc_id = $user_id OR kwikmail_statuses.mail_bcc_id = $user_id 
                                         )
AND kwikmail_statuses.status = 'inbox'                                         
and kwikmail_statuses.is_trash = 1                                    
                                    order by 
                                        kwikmail_statuses.kwil_mail_id 
                                    desc";
        
        $inbox_result           = $this->db->query($sql)->result_array();        
        
        foreach ($inbox_result as $key => $inbox){
            
            if (in_array('new', $inbox)){
                $inbox_result_sub[$inbox['id']][] = $inbox;                
            }
            
            elseif (in_array($inbox['parent_mail_id'], $inbox)){
                $inbox_result_sub[$inbox['parent_mail_id']][] = $inbox;
            }else{
                unset($inbox);
            }
            
            
        }     
        
        if (!empty($inbox_result_sub)){
            $this->data['inbox']    = $inbox_result_sub;
        }else{
            $this->data['inbox']    = '';
        }
        
        
        $this->headerV($this->title = "Kwik Mail | Trash");
        $this->load->view('Mod/kwikmail/inbox', $this->data);
        $this->load->view('Mod/footer/footer');                
        
    }
    
    public function indox_detial($id){

        $sql                 = "SELECT userName FROM users where is_active = 1";
        $query               = $this->db->query($sql)->result();
        $this->data['users'] = $query;        
        
        $user_id = $_SESSION['adminData']['user_id'];        
        
        $sql_count_unread       = " SELECT 
                                        count(kwikmail_statuses.id) as 'unread_count'
                                    FROM 
                                        kwikmail_statuses 
                                    inner join kwikmail on kwikmail.id = kwikmail_statuses.kwil_mail_id 
                                    WHERE 
                                        (kwikmail_statuses.reciever_id = $user_id OR kwikmail_statuses.mail_cc_id = $user_id OR kwikmail_statuses.mail_bcc_id = $user_id)
                                    AND
                                        kwikmail_statuses.status = 'inbox' and kwikmail_statuses.is_read = 0 and kwikmail_statuses.is_trash = 0
                                    ";        

        $inbox_result_count_unread           = $this->db->query($sql_count_unread)->result();        
        $this->data['inbox_unread_count']    = $inbox_result_count_unread;
        
        $data_mail_id           = explode("&M=", $id);
        $data_sender_id         = explode("&S=", $data_mail_id[1]);
        $mail_id                = base64_decode($data_mail_id[0]);
        $mail_status_id         = base64_decode($data_sender_id[1]);
        
        $user_id                = $_SESSION['adminData']['user_id'];        
        $is_read_data           = array('is_read' => 1);
        
        $sql_sent               = "select * from kwikmail_statuses where kwil_mail_id = $mail_id and status = 'sent' and user_id = $user_id and is_read = 0";
        $query_sent             = $this->db->query($sql_sent)->result();
        $sql_status_mail        = "select * from kwikmail_statuses where id = $mail_status_id and is_read = 0";
        $query_status_mail      = $this->db->query($sql_status_mail)->result();
        
        if (!empty($query_sent)){
            $this->Mods->update($table_name = 'kwikmail_statuses', $conditionField = array('id' => $query_sent[0]->id), $userId = $query_sent[0]->id, $data = $is_read_data);            
        }

        if (!empty($query_status_mail)){
            $this->Mods->update($table_name = 'kwikmail_statuses', $conditionField = array('id' => $query_status_mail[0]->id), $userId = $query_status_mail[0]->id, $data = $is_read_data);
        }

        
        
        $sql_single_mail        = "SELECT 
                                        kwikmail.*, kwikmail.id as 'kwik_mail_id',  kwikmail_attchment.*, users.*, users.id as 'user_id' 
                                    FROM 
                                        `kwikmail` 
                                    left join kwikmail_attchment on kwikmail_attchment.mail_id = kwikmail.id 
                                    inner join users on users.id = kwikmail.user_id                                     
                                    inner join kwikmail_statuses on kwikmail_statuses.kwil_mail_id = kwikmail.id                                    
                                    where 
                                        kwikmail.id = $mail_id 
and 
        ( kwikmail_statuses.reciever_id = $user_id 
        OR kwikmail_statuses.mail_cc_id = $user_id 
        OR kwikmail_statuses.mail_bcc_id = $user_id and kwikmail.id = $mail_id )

OR ( kwikmail_statuses.sender_id = $user_id and kwikmail.id = $mail_id 
        AND kwikmail_statuses.status in ('sent'))

                                     and 
                                        kwikmail.parent_mail_id = 0";
        
        $result_single_mail     = $this->db->query($sql_single_mail)->result();        
        
        $sql_single_mail_clone        = "SELECT 
                                        kwikmail.*, kwikmail.id as 'kwik_mail_id',  kwikmail_attchment.*, users.*, users.id as 'user_id' 
                                    FROM 
                                        `kwikmail` 
                                    left join kwikmail_attchment on kwikmail_attchment.mail_id = kwikmail.id 
                                    inner join users on users.id = kwikmail.user_id                                     
                                    where 
                                        kwikmail.id = $mail_id 
                                     and 
                                        kwikmail.parent_mail_id = 0";
        
        $result_single_mail_clone     = $this->db->query($sql_single_mail_clone)->result();        
        
        $sql_single_mail_ref        = "SELECT 
                                        users.*, users.id as 'user_id', 
                                        kwikmail.*
                                        , 
                                        kwikmail_statuses.*,
                                         (SELECT attchments FROM `kwikmail_attchment` where mail_id = kwikmail.id limit 0,1) as 'attchments'
                                    FROM 
                                        kwikmail 
                                    inner join kwikmail_statuses on kwikmail_statuses.kwil_mail_id = kwikmail.id
                                    inner join users on users.id = kwikmail.user_id                                       
                                    where 
                                        kwikmail.parent_mail_id = $mail_id 
and 
        ( kwikmail_statuses.reciever_id = $user_id 
        OR kwikmail_statuses.mail_cc_id = $user_id 
        OR kwikmail_statuses.mail_bcc_id = $user_id and kwikmail.parent_mail_id = $mail_id  ) 
            
OR ( kwikmail_statuses.sender_id = $user_id and kwikmail.parent_mail_id = $mail_id 
        AND kwikmail_statuses.status in ('sent'))
 


 order by kwikmail.id asc";
        
        $result_single_mail_ref     = $this->db->query($sql_single_mail_ref)->result();        

//        echo "<pre>";
//        print_r($result_single_mail_ref);
//        die();

        
        if ($result_single_mail){
            $this->data['single_mail']    = $result_single_mail[0];
        }else{
            $this->data['single_mail']           = "";         
            $result_single_mail_clone[0]->colne = 'Clonr';
            $this->data['single_mail']           = $result_single_mail_clone[0];            
        }
        
        if ($result_single_mail_ref){
            $this->data['result_single_mail_ref']    = $result_single_mail_ref;
        }else{
            $this->data['result_single_mail_ref']    = '';            
        }
        
        $this->data['page_title']    = "Indox Detial";             
        $this->headerV($this->title = "Kwik Mail | inbox detail");
        $this->load->view('Mod/kwikmail/inbox-detail', $this->data);
        $this->load->view('Mod/footer/footer');        
        
    }
    
    public function compose(){

        $user_id = $_SESSION['adminData']['user_id'];        
        $sql_count_unread       = " SELECT 
                                        count(kwikmail_statuses.id) as 'unread_count'
                                    FROM 
                                        kwikmail_statuses 
                                    inner join kwikmail on kwikmail.id = kwikmail_statuses.kwil_mail_id 
                                    WHERE 
                                        (kwikmail_statuses.reciever_id = $user_id OR kwikmail_statuses.mail_cc_id = $user_id OR kwikmail_statuses.mail_bcc_id = $user_id)
                                    AND
                                        kwikmail_statuses.status = 'inbox' and kwikmail_statuses.is_read = 0
                                    ";
        
        $inbox_result_count_unread           = $this->db->query($sql_count_unread)->result();        
            $this->data['inbox_unread_count']    = $inbox_result_count_unread;
        
        
        $sql                 = "SELECT userName FROM users where is_active = 1";
        $query               = $this->db->query($sql)->result();
        $this->data['users'] = $query;
        
        $this->form_validation->set_rules('mail_to', 'Mail TO', 'trim|xss_clean');
        $this->form_validation->set_rules('mail_cc', 'Mail CC', 'trim|xss_clean');
        $this->form_validation->set_rules('mail_bcc', 'Mail BCC', 'trim|xss_clean');
        $this->form_validation->set_rules('mail_subject', 'Mail Subject', 'trim|xss_clean');
        $this->form_validation->set_rules('mail_body', 'Mail Body', 'trim');
        
        if ($this->form_validation->run() == FALSE) {            

            $this->headerV($this->title = "Kwik Mail | Compose");
            $this->load->view('Mod/kwikmail/compose', $this->data);
            $this->load->view('Mod/footer/footer');        
            
        }else{
            
            $getReceiverName    = ($this->input->post('mail_to') && strstr( $this->input->post('mail_to'), '@kwikcarhire.co.uk' )) ? explode("@kwikcarhire.co.uk, ", $this->input->post('mail_to')) : '';
            $getCcName          = ($this->input->post('mail_cc') && strstr( $this->input->post('mail_cc'), '@kwikcarhire.co.uk' )) ? explode("@kwikcarhire.co.uk, ", $this->input->post('mail_cc')) : '';
            $getBccName         = ($this->input->post('mail_bcc') && strstr( $this->input->post('mail_bcc'), '@kwikcarhire.co.uk' )) ? explode("@kwikcarhire.co.uk, ", $this->input->post('mail_bcc')) : '';
            
            $get_receiver_id    = array();
            $get_cc_id          = array();
            $get_bcc_id         = array();

            $file_names         = array();
            $kwikmailUploadDir  = "kwikmail/attchments/";
            
            if ($getReceiverName){
                foreach ($getReceiverName as $receiverName){
                    $get_r_name         = "'" . str_replace("@kwikcarhire.co.uk,", "", $receiverName) . "'";
                    $sql_receiver_id    = "SELECT userName, id FROM users where userName = $get_r_name";
                    $query_receiver_id  = $this->db->query($sql_receiver_id)->result();      
                    $get_receiver_id[]  = ($query_receiver_id) ? $query_receiver_id[0]->id : '';
                }
            }else{
                $get_receiver_id = '';
            }
            
            if ($getCcName){            
                foreach ($getCcName as $ccName){
                    $get_cc_name         = "'" . str_replace("@kwikcarhire.co.uk,", "", $ccName) . "'";
                    $sql_cc_id           = "SELECT userName, id FROM users where userName = $get_cc_name";
                    $query_cc_id         = $this->db->query($sql_cc_id)->result();      
                    $get_cc_id[]         = ($query_cc_id) ? $query_cc_id[0]->id : '';
                }
            }else{
                $get_cc_id = '';
            }
            
            if ($getBccName){            
                foreach ($getBccName as $bccName){
                    $get_bcc_name         = "'" . str_replace("@kwikcarhire.co.uk,", "", $bccName) . "'";
                    $sql_bcc_id           = "SELECT userName, id FROM users where userName = $get_bcc_name";
                    $query_bcc_id         = $this->db->query($sql_bcc_id)->result();      
                    $get_bcc_id[]         = ($query_bcc_id) ? $query_bcc_id[0]->id : '';
                }
            }else{
                $get_bcc_id = "";
            }
            
            $kwikmail_data = array(
                "company_id"        => $_SESSION['adminData']['company_id'],
                "user_id"           => $_SESSION['adminData']['user_id'], 
                "sender_id"         => $_SESSION['adminData']['user_id'],
                "serder_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                "reciever_ids"      => ($get_receiver_id) ? implode(",", $get_receiver_id) : '',
                "reciever_mails"    => $this->input->post('mail_to'),
                "mail_cc_ids"       => ($get_cc_id) ? implode(",", $get_cc_id) : '',
                "mail_cc_mails"     => $this->input->post('mail_cc'),
                "mail_bcc_ids"      => ($get_bcc_id) ? implode(",", $get_bcc_id) : '',
                "mail_bcc_mails"    => $this->input->post('mail_bcc'),
                "mail_title"        => $this->input->post('mail_subject'),
                "mail_body"         => $this->input->post('mail_body'),
                "mail_type"         => 'new',
                "mail_sent_date"    => date('y-m-d H:i:s'), 
            );
            
           
            $kwikmail_insertion_id = $this->Mods->single_insert('kwikmail', $kwikmail_data);            
            
            if ($kwikmail_insertion_id) {

                // Upload mail attchment to server. and store file name is variables.
                
                if ($_FILES['file']['name'][0]){
                        
                    foreach ($_FILES['file']['error'] as $Serviced => $error){
                        $ext       = '.' . pathinfo($_FILES['file']['name'][$Serviced], PATHINFO_EXTENSION);
                        $file_name = str_replace($ext, "", $_FILES['file']['name'][$Serviced]);
                        $file_name = str_replace(" ", "-", $file_name);
                        $file_names['file']['org_name'][$Serviced] = $file_name . "_" . $kwikmail_insertion_id . "_N_" . time() . $ext;
                        $src = $kwikmailUploadDir . $file_names['file']['org_name'][$Serviced];
                        move_uploaded_file($_FILES['file']['tmp_name'][$Serviced], $kwikmailUploadDir . $file_names['file']['org_name'][$Serviced]);
                    }   
                        
                }else{
                    $file_names['file']['org_name']    = "";
                }
                
            // Mail Sender Logs
            
                if ($_SESSION['adminData']['user_id']){

                    $sender_id = $_SESSION['adminData']['user_id'];

                    $sql_sender_name = "SELECT userName, id FROM users where id = $sender_id";
                    $query_sender_name = $this->db->query($sql_sender_name)->result();

                    $kwikmail_log_sender_data = array(

                                "kwikmail_id"           => $kwikmail_insertion_id,
                                "user_id"               => $_SESSION['adminData']['user_id'],
                                "company_id"            => $_SESSION['adminData']['company_id'],
                                "mail_sender_id"        => $_SESSION['adminData']['user_id'],
                                "sender_mail"           => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                                "mail_cc_id"            => NULL,
                                "cc_mail"               => NULL,
                                "mail_bcc_id"           => NULL,
                                "bcc_mail"              => NULL,
                                "mail_recever_id"       => NULL,
                                "reciever_mail"         => NULL,
                                "type"                  => 'sent',
                        'is_read'               => 1,   
                                "date"                  => date('y-m-d H:i:s'),

                    );

                    $kwikmail_logs_sender_insertion_id = $this->Mods->single_insert('kwikmail_logs', $kwikmail_log_sender_data);            

                    $kwikmail_status_sender_data = array(

                                "user_id"           => $_SESSION['adminData']['user_id'], 
                                "company_id"        => $_SESSION['adminData']['company_id'],
                                "sender_id"         => $_SESSION['adminData']['user_id'], 
                                "mail_cc_id"        => NULL,
                                "mail_bcc_id"       => NULL, 
                                "reciever_id"       => NULL,
                                "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk', 
                                "cc_mail"           => NULL, 
                                "bcc_mail"          => NULL,
                                "reciever_mail"     => NULL,                             
                                "kwil_mail_id"      => $kwikmail_insertion_id,
                                "status"            => 'sent',
                                'is_read'           => 1,                           
                                "created_at"        => date('y-m-d H:i:s'),

                            );

                    $kwikmail_status_sender_insertion_id = $this->Mods->single_insert('kwikmail_statuses', $kwikmail_status_sender_data);            

                    if ($file_names['file']['org_name']){
                    
                        $kwikmail_attchment_sender_data = array(

                                                            "company_id"        => $_SESSION['adminData']['company_id'],
                                                            "user_id"           => $_SESSION['adminData']['user_id'],  
                                                            "mail_id"           => $kwikmail_insertion_id,
                                                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                                                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                                                            "mail_cc_id"        => NULL,
                                                            "cc_mail"           => NULL,
                                                            "mail_bcc_id"       => NULL,
                                                            "bcc_mail"          => NULL,
                                                            "reciever_id"       => NULL,
                                                            "reciever_mail"     => NULL,
                                                            "attchments"        => json_encode($file_names['file']['org_name']),  
                                                            "mail_type"         => 'sent',  
                                                            "date"              => date('y-m-d H:i:s'),

                                                    );

                        $kwikmail_attchment_sender_insertion_id = $this->Mods->single_insert('kwikmail_attchment', $kwikmail_attchment_sender_data);            
                        
                    }
                }
                
            // mail receiver Logs
                
                if (is_array($get_receiver_id)) {

                    foreach ($get_receiver_id as $receiver_id) {

                        $sql_receiver_name = "SELECT userName, id FROM users where id = $receiver_id";
                        $query_receiver_name = $this->db->query($sql_receiver_name)->result();

                        $kwikmail_log_rec_data = array(
                            "kwikmail_id"           => $kwikmail_insertion_id,
                            "user_id"               => $_SESSION['adminData']['user_id'],
                            "company_id"            => $_SESSION['adminData']['company_id'],
                            "mail_sender_id"        => $_SESSION['adminData']['user_id'],
                            "sender_mail"           => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                            "mail_cc_id"            => NULL,
                            "cc_mail"               => NULL,
                            "mail_bcc_id"           => NULL,
                            "bcc_mail"              => NULL,
                            "mail_recever_id"       => $receiver_id,
                            "reciever_mail"         => ($query_receiver_name) ? $query_receiver_name[0]->userName . '@kwikcarhire.co.uk' : '',
                            "type"                  => 'inbox',
                            "date"                  => date('y-m-d H:i:s'),
                        );
                        
                        $kwikmail_logs_rec_insertion_id = $this->Mods->single_insert('kwikmail_logs', $kwikmail_log_rec_data);            
                        
                        $kwikmail_status_rec_data = array(
                            
                            "user_id"           => $_SESSION['adminData']['user_id'], 
                            "company_id"        => $_SESSION['adminData']['company_id'],
                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                            "mail_cc_id"        => NULL,
                            "mail_bcc_id"       => NULL, 
                            "reciever_id"       => $receiver_id,
                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk', 
                            "cc_mail"           => NULL, 
                            "bcc_mail"          => NULL,
                            "reciever_mail"     => ($query_receiver_name) ? $query_receiver_name[0]->userName . '@kwikcarhire.co.uk' : '',                             
                            "kwil_mail_id"      => $kwikmail_insertion_id,
                            "status"            => 'inbox', 
                            "created_at"        => date('y-m-d H:i:s'),
                            
                        );
                        
                        $kwikmail_status_rec_insertion_id = $this->Mods->single_insert('kwikmail_statuses', $kwikmail_status_rec_data);            
                        
                        if ($file_names['file']['org_name']){

                            $kwikmail_attchment_rec_data = array(

                                                            "company_id"        => $_SESSION['adminData']['company_id'],
                                                            "user_id"           => $_SESSION['adminData']['user_id'],  
                                                            "mail_id"           => $kwikmail_insertion_id,
                                                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                                                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                                                            "mail_cc_id"        => NULL,
                                                            "cc_mail"           => NULL,
                                                            "mail_bcc_id"       => NULL,
                                                            "bcc_mail"          => NULL,
                                                            "reciever_id"       => $receiver_id,
                                                            "reciever_mail"     => ($query_receiver_name) ? $query_receiver_name[0]->userName . '@kwikcarhire.co.uk' : '',
                                                            "attchments"        => json_encode($file_names['file']['org_name']),    
                                                            "mail_type"         => 'inbox',  
                                                            "date"              => date('y-m-d H:i:s'),

                                                    );

                            $kwikmail_attchment_rec_insertion_id = $this->Mods->single_insert('kwikmail_attchment', $kwikmail_attchment_rec_data);            
                            
                        }
                    }
                }

            // mail cc Logs
                
                if (is_array($get_cc_id)) {

                    foreach ($get_cc_id as $cc_id) {

                        $sql_cc_name = "SELECT userName, id FROM users where id = $cc_id";
                        $query_cc_name = $this->db->query($sql_cc_name)->result();

                        $kwikmail_log_cc_data = array(
                            "kwikmail_id"           => $kwikmail_insertion_id,
                            "user_id"               => $_SESSION['adminData']['user_id'],
                            "company_id"            => $_SESSION['adminData']['company_id'],
                            "mail_sender_id"        => $_SESSION['adminData']['user_id'],
                            "sender_mail"           => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                            "mail_cc_id"            => $cc_id,
                            "cc_mail"               => ($query_cc_name) ? $query_cc_name[0]->userName . '@kwikcarhire.co.uk' : '',
                            "mail_bcc_id"           => NULL,
                            "bcc_mail"              => NULL,
                            "mail_recever_id"       => NULL,
                            "reciever_mail"         => NULL,
                            "type"                  => 'inbox',
                            "date"                  => date('y-m-d H:i:s'),
                        );
                        
                        $kwikmail_logs_cc_insertion_id = $this->Mods->single_insert('kwikmail_logs', $kwikmail_log_cc_data);            

                        $kwikmail_status_cc_data = array(
                            
                            "user_id"           => $_SESSION['adminData']['user_id'], 
                            "company_id"        => $_SESSION['adminData']['company_id'],
                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                            "mail_cc_id"        => $cc_id,
                            "mail_bcc_id"       => NULL, 
                            "reciever_id"       => NULL,
                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk', 
                            "cc_mail"           => ($query_cc_name) ? $query_cc_name[0]->userName . '@kwikcarhire.co.uk' : '', 
                            "bcc_mail"          => NULL,
                            "reciever_mail"     => NULL,                             
                            "kwil_mail_id"      => $kwikmail_insertion_id,
                            "status"            => 'inbox', 
                            "created_at"        => date('y-m-d H:i:s'),
                            
                        );
                        
                        $kwikmail_status_cc_insertion_id = $this->Mods->single_insert('kwikmail_statuses', $kwikmail_status_cc_data);            

                        if ($file_names['file']['org_name']){
                        
                            $kwikmail_attchment_cc_data = array(

                                                            "company_id"        => $_SESSION['adminData']['company_id'],
                                                            "user_id"           => $_SESSION['adminData']['user_id'],  
                                                            "mail_id"           => $kwikmail_insertion_id,
                                                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                                                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                                                            "mail_cc_id"        => $cc_id,
                                                            "cc_mail"           => ($query_cc_name) ? $query_cc_name[0]->userName . '@kwikcarhire.co.uk' : '',
                                                            "mail_bcc_id"       => NULL,
                                                            "bcc_mail"          => NULL,
                                                            "reciever_id"       => NULL,
                                                            "reciever_mail"     => NULL,
                                                            "attchments"        => json_encode($file_names['file']['org_name']),  
                                                            "mail_type"         => 'inbox',  
                                                            "date"              => date('y-m-d H:i:s'),

                                                    );

                            $kwikmail_attchment_cc_insertion_id = $this->Mods->single_insert('kwikmail_attchment', $kwikmail_attchment_cc_data);            
                            
                        }                        
                        
                    }
                }

            // mail bcc Logs                
                
                if (is_array($get_bcc_id)) {

                    foreach ($get_bcc_id as $bcc_id) {

                        $sql_bcc_name = "SELECT userName, id FROM users where id = $bcc_id";
                        $query_bcc_name = $this->db->query($sql_bcc_name)->result();

                        $kwikmail_log_bcc_data = array(
                            "kwikmail_id"       => $kwikmail_insertion_id,
                            "user_id"           => $_SESSION['adminData']['user_id'],
                            "company_id"        => $_SESSION['adminData']['company_id'],
                            "mail_sender_id"    => $_SESSION['adminData']['user_id'],
                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                            "mail_cc_id"        => NULL,
                            "cc_mail"           => NULL,
                            "mail_bcc_id"       => $bcc_id,
                            "bcc_mail"          => ($query_bcc_name) ? $query_bcc_name[0]->userName . '@kwikcarhire.co.uk' : '',
                            "mail_recever_id"   => NULL,
                            "reciever_mail"     => NULL,
                            "type"              => 'inbox',
                            "date"              => date('y-m-d H:i:s'),
                        );
                        
                        $kwikmail_logs_bcc_insertion_id = $this->Mods->single_insert('kwikmail_logs', $kwikmail_log_bcc_data);            

                        $kwikmail_status_bcc_data = array(
                            
                            "user_id"           => $_SESSION['adminData']['user_id'], 
                            "company_id"        => $_SESSION['adminData']['company_id'],
                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                            "mail_cc_id"        => NULL,
                            "mail_bcc_id"       => $bcc_id, 
                            "reciever_id"       => NULL,
                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk', 
                            "cc_mail"           => NULL, 
                            "bcc_mail"          => ($query_bcc_name) ? $query_bcc_name[0]->userName . '@kwikcarhire.co.uk' : '',
                            "reciever_mail"     => NULL,                             
                            "kwil_mail_id"      => $kwikmail_insertion_id,
                            "status"            => 'inbox', 
                            "created_at"        => date('y-m-d H:i:s'),
                            
                        );
                        
                        $kwikmail_status_bcc_insertion_id = $this->Mods->single_insert('kwikmail_statuses', $kwikmail_status_bcc_data);            

                        if ($file_names['file']['org_name']){
                        
                            $kwikmail_attchment_bcc_data = array(

                                                            "company_id"        => $_SESSION['adminData']['company_id'],
                                                            "user_id"           => $_SESSION['adminData']['user_id'],  
                                                            "mail_id"           => $kwikmail_insertion_id,
                                                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                                                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                                                            "mail_cc_id"        => NULL,
                                                            "cc_mail"           => NULL,
                                                            "mail_bcc_id"       => $bcc_id,
                                                            "bcc_mail"          => ($query_bcc_name) ? $query_bcc_name[0]->userName . '@kwikcarhire.co.uk' : '',
                                                            "reciever_id"       => NULL,
                                                            "reciever_mail"     => NULL,
                                                            "attchments"        => json_encode($file_names['file']['org_name']),  
                                                            "mail_type"         => 'inbox',  
                                                            "date"              => date('y-m-d H:i:s'),

                                                    );

                            $kwikmail_attchment_bcc_insertion_id = $this->Mods->single_insert('kwikmail_attchment', $kwikmail_attchment_bcc_data);            
                        
                        }
                    }
                }
                
            }

            if ($kwikmail_insertion_id){
                $this->session->set_flashdata('mailSent', 'alertify.success("Success Mail Sent.");');
                redirect(base_url('KwikMail/inbox'));
            }            
            
        }
        
    }
    
    public function actions(){
        
        $this->form_validation->set_rules('mail_to', 'Mail TO', 'trim|xss_clean');
        $this->form_validation->set_rules('mail_cc', 'Mail CC', 'trim|xss_clean');
        $this->form_validation->set_rules('mail_bcc', 'Mail BCC', 'trim|xss_clean');
        $this->form_validation->set_rules('mail_subject', 'Mail Subject', 'trim|xss_clean');
        $this->form_validation->set_rules('mail_body', 'Mail Body', 'trim');
        
        if ($this->form_validation->run() == FALSE) {            

//            $this->headerV($this->title = "Kwik Mail | Compose");
//            $this->load->view('Mod/kwikmail/compose', $this->data);
//            $this->load->view('Mod/footer/footer');        
            
        }else{
            
            $getReceiverName    = ($this->input->post('mail_to') && strstr( $this->input->post('mail_to'), '@kwikcarhire.co.uk' )) ? explode("@kwikcarhire.co.uk, ", $this->input->post('mail_to')) : '';
            $getCcName          = ($this->input->post('mail_cc') && strstr( $this->input->post('mail_cc'), '@kwikcarhire.co.uk' )) ? explode("@kwikcarhire.co.uk, ", $this->input->post('mail_cc')) : '';
            $getBccName         = ($this->input->post('mail_bcc') && strstr( $this->input->post('mail_bcc'), '@kwikcarhire.co.uk' )) ? explode("@kwikcarhire.co.uk, ", $this->input->post('mail_bcc')) : '';
            
            $get_receiver_id    = array();
            $get_cc_id          = array();
            $get_bcc_id         = array();

            $file_names         = array();
            $kwikmailUploadDir  = "kwikmail/attchments/";
            
            if ($getReceiverName){
                foreach ($getReceiverName as $receiverName){
                    $get_r_name         = "'" . str_replace("@kwikcarhire.co.uk,", "", $receiverName) . "'";
                    $sql_receiver_id    = "SELECT userName, id FROM users where userName = $get_r_name";
                    $query_receiver_id  = $this->db->query($sql_receiver_id)->result();      
                    $get_receiver_id[]  = ($query_receiver_id) ? $query_receiver_id[0]->id : '';
                }
            }else{
                $get_receiver_id = '';
            }
            
            if ($getCcName){            
                foreach ($getCcName as $ccName){
                    $get_cc_name         = "'" . str_replace("@kwikcarhire.co.uk,", "", $ccName) . "'";
                    $sql_cc_id           = "SELECT userName, id FROM users where userName = $get_cc_name";
                    $query_cc_id         = $this->db->query($sql_cc_id)->result();      
                    $get_cc_id[]         = ($query_cc_id) ? $query_cc_id[0]->id : '';
                }
            }else{
                $get_cc_id = '';
            }
            
            if ($getBccName){            
                foreach ($getBccName as $bccName){
                    $get_bcc_name         = "'" . str_replace("@kwikcarhire.co.uk,", "", $bccName) . "'";
                    $sql_bcc_id           = "SELECT userName, id FROM users where userName = $get_bcc_name";
                    $query_bcc_id         = $this->db->query($sql_bcc_id)->result();      
                    $get_bcc_id[]         = ($query_bcc_id) ? $query_bcc_id[0]->id : '';
                }
            }else{
                $get_bcc_id = "";
            }
            
            $kwikmail_data = array(
                    "company_id"        => $_SESSION['adminData']['company_id'],
                    "user_id"           => $_SESSION['adminData']['user_id'], 
                    "sender_id"         => $_SESSION['adminData']['user_id'],
                    "serder_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                    "reciever_ids"      => ($get_receiver_id) ? implode(",", $get_receiver_id) : '',
                    "reciever_mails"    => $this->input->post('mail_to'),
                    "mail_cc_ids"       => ($get_cc_id) ? implode(",", $get_cc_id) : '',
                    "mail_cc_mails"     => $this->input->post('mail_cc'),
                    "mail_bcc_ids"      => ($get_bcc_id) ? implode(",", $get_bcc_id) : '',
                    "mail_bcc_mails"    => $this->input->post('mail_bcc'),
                    "mail_title"        => $this->input->post('mail_subject'),
                    'parent_mail_id'    => $this->input->post('mail_id'), 
                    "mail_sent_date"    => date('y-m-d H:i:s'), 
            );        

            if ($this->input->post('action_type') == "reply"){
                $kwikmail_data['mail_body'] = $this->input->post('mail_body_rep');
                $kwikmail_data['mail_type'] = 'replay';
                $file_reg = "R";
            }

            elseif ($this->input->post('action_type') == "reply_all"){
                $kwikmail_data['mail_body'] = $this->input->post('mail_body_rep_all');
                $kwikmail_data['mail_type'] = 'replay_all';
                $file_reg = "RAL";                
            }

            elseif ($this->input->post('action_type') == "forward"){
                $kwikmail_data['mail_body'] = $this->input->post('mail_body_fwd');
                $kwikmail_data['mail_type'] = 'forward';
                $file_reg = "F";                                
            }
            
            $kwikmail_insertion_id = $this->Mods->single_insert('kwikmail', $kwikmail_data);            
            
            if ($kwikmail_insertion_id) {

                // Upload mail attchment to server. and store file name is variables.
                
                if ($_FILES['file']['name'][0]){
                        
                    foreach ($_FILES['file']['error'] as $Serviced => $error){
                        $ext       = '.' . pathinfo($_FILES['file']['name'][$Serviced], PATHINFO_EXTENSION);
                        $file_name = str_replace($ext, "", $_FILES['file']['name'][$Serviced]);
                        $file_name = str_replace(" ", "-", $file_name);
                        $file_names['file']['org_name'][$Serviced] = $file_name . "_" . $kwikmail_insertion_id . "_" . $file_reg . "_" . time() . $ext;
                        $src = $kwikmailUploadDir . $file_names['file']['org_name'][$Serviced];
                        move_uploaded_file($_FILES['file']['tmp_name'][$Serviced], $kwikmailUploadDir . $file_names['file']['org_name'][$Serviced]);
                    }   
                        
                }else{
                    $file_names['file']['org_name'] = "";
                }

                if ($this->input->post('action_type') == "forward"){
                    if (count($this->input->post('attchments_fwd')) > 0){
                        
                        foreach ($this->input->post('attchments_fwd') as $attchments_files){
                            $ext  = '.' . pathinfo($attchments_files, PATHINFO_EXTENSION);
                            $copy_file_name = str_replace(base_url('kwikmail/attchments/'), "", $attchments_files);
                            $copy_file_name_org = explode("_", $copy_file_name);
                            $file_names['file']['org_name'][$copy_file_name_org[0]] = $copy_file_name_org[0] . "_" . $kwikmail_insertion_id . "_F_" . time() . $ext;                            
                            copy($attchments_files, 'kwikmail/attchments/' . $copy_file_name_org[0] . "_" . $kwikmail_insertion_id . "_F_" . time() . $ext);            
                        }

                    }
                }
                
            // Mail Sender Logs
            
                if ($_SESSION['adminData']['user_id']){

                    $sender_id = $_SESSION['adminData']['user_id'];

                    $sql_sender_name = "SELECT userName, id FROM users where id = $sender_id";
                    $query_sender_name = $this->db->query($sql_sender_name)->result();

                    $kwikmail_log_sender_data = array(

                                "kwikmail_id"           => $kwikmail_insertion_id,
                                "user_id"               => $_SESSION['adminData']['user_id'],
                                "company_id"            => $_SESSION['adminData']['company_id'],
                                "mail_sender_id"        => $_SESSION['adminData']['user_id'],
                                "sender_mail"           => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                                "mail_cc_id"            => NULL,
                                "cc_mail"               => NULL,
                                "mail_bcc_id"           => NULL,
                                "bcc_mail"              => NULL,
                                "mail_recever_id"       => NULL,
                                "reciever_mail"         => NULL,
                                "type"                  => 'sent',
                                'is_read'               => 1,    
                                "date"                  => date('y-m-d H:i:s'),

                    );

                    $kwikmail_logs_sender_insertion_id = $this->Mods->single_insert('kwikmail_logs', $kwikmail_log_sender_data);            

                    $kwikmail_status_sender_data = array(

                                "user_id"           => $_SESSION['adminData']['user_id'], 
                                "company_id"        => $_SESSION['adminData']['company_id'],
                                "sender_id"         => $_SESSION['adminData']['user_id'], 
                                "mail_cc_id"        => NULL,
                                "mail_bcc_id"       => NULL, 
                                "reciever_id"       => NULL,
                                "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk', 
                                "cc_mail"           => NULL, 
                                "bcc_mail"          => NULL,
                                "reciever_mail"     => NULL,                             
                                "kwil_mail_id"      => $kwikmail_insertion_id,
                                "status"            => 'sent', 
                                'is_read'           => 1,
                                "created_at"        => date('y-m-d H:i:s'),

                            );

                    $kwikmail_status_sender_insertion_id = $this->Mods->single_insert('kwikmail_statuses', $kwikmail_status_sender_data);            

                    if ($file_names['file']['org_name']){
                    
                        $kwikmail_attchment_sender_data = array(

                                                            "company_id"        => $_SESSION['adminData']['company_id'],
                                                            "user_id"           => $_SESSION['adminData']['user_id'],  
                                                            "mail_id"           => $kwikmail_insertion_id,
                                                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                                                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                                                            "mail_cc_id"        => NULL,
                                                            "cc_mail"           => NULL,
                                                            "mail_bcc_id"       => NULL,
                                                            "bcc_mail"          => NULL,
                                                            "reciever_id"       => NULL,
                                                            "reciever_mail"     => NULL,
                                                            "attchments"        => json_encode($file_names['file']['org_name']),  
                                                            "mail_type"         => 'sent',
                                                            "date"              => date('y-m-d H:i:s'),

                                                    );

                        $kwikmail_attchment_sender_insertion_id = $this->Mods->single_insert('kwikmail_attchment', $kwikmail_attchment_sender_data);            
                        
                    }
                }
                
            // mail receiver Logs
                
                if (is_array($get_receiver_id)) {

                    foreach ($get_receiver_id as $receiver_id) {

                        $sql_receiver_name = "SELECT userName, id FROM users where id = $receiver_id";
                        $query_receiver_name = $this->db->query($sql_receiver_name)->result();

                        $kwikmail_log_rec_data = array(
                            "kwikmail_id"           => $kwikmail_insertion_id,
                            "user_id"               => $_SESSION['adminData']['user_id'],
                            "company_id"            => $_SESSION['adminData']['company_id'],
                            "mail_sender_id"        => $_SESSION['adminData']['user_id'],
                            "sender_mail"           => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                            "mail_cc_id"            => NULL,
                            "cc_mail"               => NULL,
                            "mail_bcc_id"           => NULL,
                            "bcc_mail"              => NULL,
                            "mail_recever_id"       => $receiver_id,
                            "reciever_mail"         => ($query_receiver_name) ? $query_receiver_name[0]->userName . '@kwikcarhire.co.uk' : '',
                            "type"                  => 'inbox',
                            "date"                  => date('y-m-d H:i:s'),
                        );
                        
                        $kwikmail_logs_rec_insertion_id = $this->Mods->single_insert('kwikmail_logs', $kwikmail_log_rec_data);            
                        
                        $kwikmail_status_rec_data = array(
                            
                            "user_id"           => $_SESSION['adminData']['user_id'], 
                            "company_id"        => $_SESSION['adminData']['company_id'],
                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                            "mail_cc_id"        => NULL,
                            "mail_bcc_id"       => NULL, 
                            "reciever_id"       => $receiver_id,
                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk', 
                            "cc_mail"           => NULL, 
                            "bcc_mail"          => NULL,
                            "reciever_mail"     => ($query_receiver_name) ? $query_receiver_name[0]->userName . '@kwikcarhire.co.uk' : '',                             
                            "kwil_mail_id"      => $kwikmail_insertion_id,
                            "status"            => 'inbox', 
                            "created_at"        => date('y-m-d H:i:s'),
                            
                        );
                        
                        $kwikmail_status_rec_insertion_id = $this->Mods->single_insert('kwikmail_statuses', $kwikmail_status_rec_data);            
                        
                        if ($file_names['file']['org_name']){

                            $kwikmail_attchment_rec_data = array(

                                                            "company_id"        => $_SESSION['adminData']['company_id'],
                                                            "user_id"           => $_SESSION['adminData']['user_id'],  
                                                            "mail_id"           => $kwikmail_insertion_id,
                                                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                                                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                                                            "mail_cc_id"        => NULL,
                                                            "cc_mail"           => NULL,
                                                            "mail_bcc_id"       => NULL,
                                                            "bcc_mail"          => NULL,
                                                            "reciever_id"       => $receiver_id,
                                                            "reciever_mail"     => ($query_receiver_name) ? $query_receiver_name[0]->userName . '@kwikcarhire.co.uk' : '',
                                                            "attchments"        => json_encode($file_names['file']['org_name']),    
                                                            "mail_type"         => 'inbox',  
                                                            "date"              => date('y-m-d H:i:s'),

                                                    );

                            $kwikmail_attchment_rec_insertion_id = $this->Mods->single_insert('kwikmail_attchment', $kwikmail_attchment_rec_data);            
                            
                        }
                    }
                }

            // mail cc Logs
                
                if (is_array($get_cc_id)) {

                    foreach ($get_cc_id as $cc_id) {

                        $sql_cc_name = "SELECT userName, id FROM users where id = $cc_id";
                        $query_cc_name = $this->db->query($sql_cc_name)->result();

                        $kwikmail_log_cc_data = array(
                            "kwikmail_id"           => $kwikmail_insertion_id,
                            "user_id"               => $_SESSION['adminData']['user_id'],
                            "company_id"            => $_SESSION['adminData']['company_id'],
                            "mail_sender_id"        => $_SESSION['adminData']['user_id'],
                            "sender_mail"           => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                            "mail_cc_id"            => $cc_id,
                            "cc_mail"               => ($query_cc_name) ? $query_cc_name[0]->userName . '@kwikcarhire.co.uk' : '',
                            "mail_bcc_id"           => NULL,
                            "bcc_mail"              => NULL,
                            "mail_recever_id"       => NULL,
                            "reciever_mail"         => NULL,
                            "type"                  => 'inbox',
                            "date"                  => date('y-m-d H:i:s'),
                        );
                        
                        $kwikmail_logs_cc_insertion_id = $this->Mods->single_insert('kwikmail_logs', $kwikmail_log_cc_data);            

                        $kwikmail_status_cc_data = array(
                            
                            "user_id"           => $_SESSION['adminData']['user_id'], 
                            "company_id"        => $_SESSION['adminData']['company_id'],
                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                            "mail_cc_id"        => $cc_id,
                            "mail_bcc_id"       => NULL, 
                            "reciever_id"       => NULL,
                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk', 
                            "cc_mail"           => ($query_cc_name) ? $query_cc_name[0]->userName . '@kwikcarhire.co.uk' : '', 
                            "bcc_mail"          => NULL,
                            "reciever_mail"     => NULL,                             
                            "kwil_mail_id"      => $kwikmail_insertion_id,
                            "status"            => 'inbox', 
                            "created_at"        => date('y-m-d H:i:s'),
                            
                        );
                        
                        $kwikmail_status_cc_insertion_id = $this->Mods->single_insert('kwikmail_statuses', $kwikmail_status_cc_data);            

                        if ($file_names['file']['org_name']){
                        
                            $kwikmail_attchment_cc_data = array(

                                                            "company_id"        => $_SESSION['adminData']['company_id'],
                                                            "user_id"           => $_SESSION['adminData']['user_id'],  
                                                            "mail_id"           => $kwikmail_insertion_id,
                                                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                                                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                                                            "mail_cc_id"        => $cc_id,
                                                            "cc_mail"           => ($query_cc_name) ? $query_cc_name[0]->userName . '@kwikcarhire.co.uk' : '',
                                                            "mail_bcc_id"       => NULL,
                                                            "bcc_mail"          => NULL,
                                                            "reciever_id"       => NULL,
                                                            "reciever_mail"     => NULL,
                                                            "attchments"        => json_encode($file_names['file']['org_name']),  
                                                            "mail_type"         => 'inbox',  
                                                            "date"              => date('y-m-d H:i:s'),

                                                    );

                            $kwikmail_attchment_cc_insertion_id = $this->Mods->single_insert('kwikmail_attchment', $kwikmail_attchment_cc_data);            
                            
                        }                        
                        
                    }
                }

            // mail bcc Logs                
                
                if (is_array($get_bcc_id)) {

                    foreach ($get_bcc_id as $bcc_id) {

                        $sql_bcc_name = "SELECT userName, id FROM users where id = $bcc_id";
                        $query_bcc_name = $this->db->query($sql_bcc_name)->result();

                        $kwikmail_log_bcc_data = array(
                            "kwikmail_id"       => $kwikmail_insertion_id,
                            "user_id"           => $_SESSION['adminData']['user_id'],
                            "company_id"        => $_SESSION['adminData']['company_id'],
                            "mail_sender_id"    => $_SESSION['adminData']['user_id'],
                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                            "mail_cc_id"        => NULL,
                            "cc_mail"           => NULL,
                            "mail_bcc_id"       => $bcc_id,
                            "bcc_mail"          => ($query_bcc_name) ? $query_bcc_name[0]->userName . '@kwikcarhire.co.uk' : '',
                            "mail_recever_id"   => NULL,
                            "reciever_mail"     => NULL,
                            "type"              => 'inbox',
                            "date"              => date('y-m-d H:i:s'),
                        );
                        
                        $kwikmail_logs_bcc_insertion_id = $this->Mods->single_insert('kwikmail_logs', $kwikmail_log_bcc_data);            

                        $kwikmail_status_bcc_data = array(
                            
                            "user_id"           => $_SESSION['adminData']['user_id'], 
                            "company_id"        => $_SESSION['adminData']['company_id'],
                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                            "mail_cc_id"        => NULL,
                            "mail_bcc_id"       => $bcc_id, 
                            "reciever_id"       => NULL,
                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk', 
                            "cc_mail"           => NULL, 
                            "bcc_mail"          => ($query_bcc_name) ? $query_bcc_name[0]->userName . '@kwikcarhire.co.uk' : '',
                            "reciever_mail"     => NULL,                             
                            "kwil_mail_id"      => $kwikmail_insertion_id,
                            "status"            => 'inbox', 
                            "created_at"        => date('y-m-d H:i:s'),
                            
                        );
                        
                        $kwikmail_status_bcc_insertion_id = $this->Mods->single_insert('kwikmail_statuses', $kwikmail_status_bcc_data);            

                        if ($file_names['file']['org_name']){
                        
                            $kwikmail_attchment_bcc_data = array(

                                                            "company_id"        => $_SESSION['adminData']['company_id'],
                                                            "user_id"           => $_SESSION['adminData']['user_id'],  
                                                            "mail_id"           => $kwikmail_insertion_id,
                                                            "sender_id"         => $_SESSION['adminData']['user_id'], 
                                                            "sender_mail"       => $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk',
                                                            "mail_cc_id"        => NULL,
                                                            "cc_mail"           => NULL,
                                                            "mail_bcc_id"       => $bcc_id,
                                                            "bcc_mail"          => ($query_bcc_name) ? $query_bcc_name[0]->userName . '@kwikcarhire.co.uk' : '',
                                                            "reciever_id"       => NULL,
                                                            "reciever_mail"     => NULL,
                                                            "attchments"        => json_encode($file_names['file']['org_name']),  
                                                            "mail_type"         => 'inbox',  
                                                            "date"              => date('y-m-d H:i:s'),

                                                    );

                            $kwikmail_attchment_bcc_insertion_id = $this->Mods->single_insert('kwikmail_attchment', $kwikmail_attchment_bcc_data);            
                        
                        }
                    }
                }
                
            }

            if ($kwikmail_insertion_id){
                $this->session->set_flashdata('mailSent', 'alertify.success("Success Mail Sent.");');
                redirect(str_replace("'", "", $this->input->post('url')));
            }            
            
        }
        
    }
   
    public function getInbox(){
        
        $mail_reciever = '....';
        $user_id = $_SESSION['adminData']['user_id'];
        $sql = " SELECT 
                                        kwikmail_statuses.*, kwikmail_statuses.id as 'kwikmail_statuses_id',
                                        kwikmail.*
                                    FROM 
                                        kwikmail_statuses 
                                    inner join kwikmail on kwikmail.id = kwikmail_statuses.kwil_mail_id 
                                    WHERE 
                                        (kwikmail_statuses.reciever_id = $user_id OR kwikmail_statuses.mail_cc_id = $user_id OR kwikmail_statuses.mail_bcc_id = $user_id 
                                         )
AND kwikmail_statuses.status = 'inbox'                                         
and kwikmail_statuses.is_trash = 0                                    
                                    order by 
                                        kwikmail_statuses.kwil_mail_id 
                                    desc";

        $inbox_result = $this->db->query($sql)->result_array();

        foreach ($inbox_result as $key => $inbox_result_sub) {

            if (in_array('new', $inbox_result_sub)) {
                $inbox[$inbox_result_sub['id']][] = $inbox_result_sub;
            } elseif (in_array($inbox_result_sub['parent_mail_id'], $inbox_result_sub)) {
                $inbox[$inbox_result_sub['parent_mail_id']][] = $inbox_result_sub;
            } else {
                unset($inbox_result_sub);
            }
        }

//        echo "<pre>";
//        print_r($inbox);
//        die();

        $html = "";

        $html .= '<table class="table table-active table-responsive table-hover">
                                <thead style="">

                                    <tr>
                                        
                                        <th colspan="7" style="vertical-align: middle; line-height: 0px">
                                            <h1 style="line-height: 0px; margin-top: -20px">Kwil Mail Inbox</h1>
                                        </th>
                                        
                                    </tr>

                                </thead>
                                
                                
                                <tbody>
                                <br>';


        if (!empty($inbox)):
            foreach ($inbox as $key => $inbox_data):

                /*$sql = "select users.firstName from users where users.id in (" . $inbox[$key][0]['reciever_ids'] . ")";
                $query = $this->db->query($sql)->result();*/
        $sql = "select users.firstName from users where users.id in (" . $inbox[$key][0]['sender_id'] . ")";
                $query = $this->db->query($sql)->result();

                $sql_attchment = "SELECT kwikmail_attchment.attchments as 'attchments' FROM kwikmail_attchment 
                                                                WHERE 
                                                                    kwikmail_attchment.mail_type = 'inbox' 
                                                                and 
                                                                    kwikmail_attchment.mail_id = " . $inbox[$key][0]['id'];
                $query_attchment = $this->db->query($sql_attchment)->result();

                $read_unread_style = ($inbox[$key][0]['is_read']) ? "background-color: #f7fafc!important" : "background-color: #fff!important";
                $read_unread_class = ($inbox[$key][0]['is_read'] ) ? "read" : "unread";

                $html .= '<tr class="' . $read_unread_class . '" style="' . $read_unread_style . '">

<td style="width: 5%"><div class="checkbox m-t-0 m-b-0"><input type="checkbox"><label></label></div></td>';


                $html .= '<td class = "hidden-xs text-left" style="width: 15%">
                <a href="' . base_url("KwikMail/indox_detial/") . (($inbox[$key][0]["parent_mail_id"] > 0) ? base64_encode($inbox[$key][0]["parent_mail_id"]) : base64_encode($inbox[$key][0]["id"])) . "&M=" . base64_encode($inbox[$key][0]["mail_title"]) . "&S=" . base64_encode($inbox[$key][0]["kwikmail_statuses_id"]) . '"> ';

                
                foreach ($query as $key_1 => $firstname) {

                    if ($key_1 > 2) {
                        $html .= $firstname->firstName . $mail_reciever;
                        unset($firstname->firstName);
                    }else{
                        $html .= $firstname->firstName . ',';                        
                    }
                    
                }
                
                $html .= '</a></td>';

                $html .= '<td class = "max-texts text-left" style="width: 250px;">
<a href="' . base_url("KwikMail/indox_detial/") . (($inbox[$key][0]["parent_mail_id"] > 0) ? base64_encode($inbox[$key][0]["parent_mail_id"]) : base64_encode($inbox[$key][0]["id"])) . "&M=" . base64_encode($inbox[$key][0]["mail_title"]) . "&S=" . base64_encode($inbox[$key][0]["kwikmail_statuses_id"]) . '"> ' . ($inbox[$key][0]["mail_title"]) . '</a></td>
                                        <td class="hidden-xs" style="width: 50px;">';
                $attchment_icon = ($query_attchment) ? "<i class='fa fa-paperclip'></i>" : "No File Attchment";
                $html .= $attchment_icon . '</td>
                                        <td class="text-right" style="width: 200px;"> .' . $inbox[$key][0]['mail_sent_date'] . ' </td>
<td class="text-center" style="width: 5%;">
<a href="' . base_url("KwikMail/move_to_trash/"). (($inbox[$key][0]['parent_mail_id'] > 0)  ? base64_encode($inbox[$key][0]['parent_mail_id']) : base64_encode($inbox[$key][0]['id'])) .'">
<i class="fa fa-trash-o"></i></a> 
</td>
                                        
                                    </tr>';


            endforeach;

        else:

            $html .= "<tr><td colspan='7'>No Conversation Found.</td></tr>";

        endif;


        $html .= '                                </tbody>
                            </table>';

        echo $html;
    }
    
    public function getInboxNotification(){

        $html = "Inbox";

        $user_id = $_SESSION['adminData']['user_id'];        
        
        $sql_count_unread       = " SELECT 
                                        count(kwikmail_statuses.id) as 'unread_count'
                                    FROM 
                                        kwikmail_statuses 
                                    inner join kwikmail on kwikmail.id = kwikmail_statuses.kwil_mail_id 
                                    WHERE 
                                        (kwikmail_statuses.reciever_id = $user_id OR kwikmail_statuses.mail_cc_id = $user_id OR kwikmail_statuses.mail_bcc_id = $user_id)
                                    AND
                                        kwikmail_statuses.status = 'inbox' and kwikmail_statuses.is_read = 0 and kwikmail_statuses.is_trash = 0
                                    ";
        
        $inbox_result_count_unread           = $this->db->query($sql_count_unread)->result();  
        
        $inbox_result_count_unread[0]->unread_count;
        
        if ($inbox_result_count_unread[0]->unread_count > 0){
        
            $count = $inbox_result_count_unread[0]->unread_count;
            $html .= ' <span class="label label-rouded label-success pull-right">' . $count . '</span>';
            
        }
        
        echo $html;
        
    }

    public function getInboxDetialNotification(){

        $html = "";

        $url    = urldecode($this->input->post('url'));
        $id     = str_replace(base_url('KwikMail/indox_detial/'), "", $url);
        $id     = str_replace("'", "", $id);
        $data_mail_id           = explode("&M=", $id);
        $data_sender_id         = explode("&S=", $data_mail_id[1]);
        $mail_id                = base64_decode($data_mail_id[0]);
        $mail_status_id         = base64_decode($data_sender_id[1]);
        
        
        $user_id = $_SESSION['adminData']['user_id'];        
        
        $sql_count_unread       = " SELECT 
                                        count(kwikmail_statuses.id) as 'unread_count'
                                    FROM 
                                        kwikmail_statuses 
                                    inner join kwikmail on kwikmail.id = kwikmail_statuses.kwil_mail_id 
                                    WHERE 
                                        (kwikmail_statuses.reciever_id = $user_id OR kwikmail_statuses.mail_cc_id = $user_id OR kwikmail_statuses.mail_bcc_id = $user_id)
                                    AND
                                        kwikmail_statuses.status = 'inbox' and kwikmail_statuses.is_read = 0 and kwikmail.parent_mail_id = $mail_id and kwikmail_statuses.is_trash = 0
                                    ";
        
        $inbox_result_count_unread           = $this->db->query($sql_count_unread)->result();  
        
        $inbox_result_count_unread[0]->unread_count;
        
        if ($inbox_result_count_unread[0]->unread_count > 0){
        
            $count = $inbox_result_count_unread[0]->unread_count;
            
            $onclick = "this.parentElement.style.display='none'";
            $onclick_show_new_msg = "onclick_shownew_msg()";
            
            $html .= '<div class="ajs-message ajs-success ajs-visible" id="dis_msg" style="width: 500px; right: 541px">
                        <a id="click_to_show_new_msgs" onclick="'. $onclick_show_new_msg .'" style="cursor: pointer; color: white;"><b>You Got New MESSAGE Click to here to read new MESSAGE</b></a>
                        <a class="text-right" id="click_to_show_new_msgs_not_now" onclick="'. $onclick . '" style="cursor: pointer; color: white; margin-left: 54px;"><i class="fa fa-close"></i></a>
                    </div>';
            
        }
        
        echo $html;
        
    }
    
    public function getInboxDetial(){

        $url    = urldecode($this->input->post('url'));
        $id     = str_replace(base_url('KwikMail/indox_detial/'), "", $url);
        $id     = str_replace("'", "", $id);
        
        $sql                 = "SELECT userName FROM users where is_active = 1";
        $query               = $this->db->query($sql)->result();
        $this->data['users'] = $query;        
        
        $user_id = $_SESSION['adminData']['user_id'];        
        
        $sql_count_unread       = " SELECT 
                                        count(kwikmail_statuses.id) as 'unread_count'
                                    FROM 
                                        kwikmail_statuses 
                                    inner join kwikmail on kwikmail.id = kwikmail_statuses.kwil_mail_id 
                                    WHERE 
                                        (kwikmail_statuses.reciever_id = $user_id OR kwikmail_statuses.mail_cc_id = $user_id OR kwikmail_statuses.mail_bcc_id = $user_id)
                                    AND
                                        kwikmail_statuses.status = 'inbox' and kwikmail_statuses.is_read = 0
                                    ";        

        $inbox_result_count_unread           = $this->db->query($sql_count_unread)->result();        
        $this->data['inbox_unread_count']    = $inbox_result_count_unread;
        
        $data_mail_id           = explode("&M=", $id);
        $data_sender_id         = explode("&S=", $data_mail_id[1]);
        $mail_id                = base64_decode($data_mail_id[0]);
        $mail_status_id         = base64_decode($data_sender_id[1]);
        
        $user_id                = $_SESSION['adminData']['user_id'];        
        $is_read_data           = array('is_read' => 1);
        
        $sql_sent               = "select * from kwikmail_statuses where kwil_mail_id = $mail_id and status = 'sent' and user_id = $user_id and is_read = 0";
        $query_sent             = $this->db->query($sql_sent)->result();
        
        $sql_status_mail        = "select 
            kwikmail_statuses.* 
            from kwikmail 
            INNER JOIN kwikmail_statuses on kwikmail.id = kwikmail_statuses.kwil_mail_id 
            WHERE 
            kwikmail.parent_mail_id = $mail_id  
            and 
            kwikmail_statuses.is_read = 0 
            and ( kwikmail_statuses.reciever_id = $user_id OR kwikmail_statuses.mail_cc_id = $user_id OR kwikmail_statuses.mail_bcc_id = $user_id and kwikmail.parent_mail_id = $mail_id  ) 
            OR ( kwikmail_statuses.sender_id = $user_id and kwikmail.parent_mail_id = $mail_id AND kwikmail_statuses.status in ('sent'))";
        
        $query_status_mail      = $this->db->query($sql_status_mail)->result();
        
        if (!empty($query_sent)){
            $this->Mods->update($table_name = 'kwikmail_statuses', $conditionField = array('id' => $query_sent[0]->id), $userId = $query_sent[0]->id, $data = $is_read_data);            
        }

        if (!empty($query_status_mail) ){
            
            foreach ($query_status_mail as $update_status){
                $this->Mods->update($table_name = 'kwikmail_statuses', $conditionField = array('id' => $update_status->id), $userId = $update_status->id, $data = $is_read_data);
            }
            
        }
        
        $sql_single_mail        = "SELECT 
                                        kwikmail.*, kwikmail.id as 'kwik_mail_id',  kwikmail_attchment.*, users.*, users.id as 'user_id' 
                                    FROM 
                                        `kwikmail` 
                                    left join kwikmail_attchment on kwikmail_attchment.mail_id = kwikmail.id 
                                    inner join users on users.id = kwikmail.user_id                                     
                                    inner join kwikmail_statuses on kwikmail_statuses.kwil_mail_id = kwikmail.id                                    
                                    where 
                                        kwikmail.id = $mail_id 
and 
        ( kwikmail_statuses.reciever_id = $user_id 
        OR kwikmail_statuses.mail_cc_id = $user_id 
        OR kwikmail_statuses.mail_bcc_id = $user_id and kwikmail.id = $mail_id )

OR ( kwikmail_statuses.sender_id = $user_id and kwikmail.id = $mail_id 
        AND kwikmail_statuses.status in ('sent'))

                                     and 
                                        kwikmail.parent_mail_id = 0";
        
        $result_single_mail     = $this->db->query($sql_single_mail)->result();        
        
        $sql_single_mail_clone        = "SELECT 
                                        kwikmail.*, kwikmail.id as 'kwik_mail_id',  kwikmail_attchment.*, users.*, users.id as 'user_id' 
                                    FROM 
                                        `kwikmail` 
                                    left join kwikmail_attchment on kwikmail_attchment.mail_id = kwikmail.id 
                                    inner join users on users.id = kwikmail.user_id                                     
                                    where 
                                        kwikmail.id = $mail_id 
                                     and 
                                        kwikmail.parent_mail_id = 0";
        
        $result_single_mail_clone     = $this->db->query($sql_single_mail_clone)->result();        
        
        $sql_single_mail_ref        = "SELECT 
                                        users.*, users.id as 'user_id', 
                                        kwikmail.*
                                        , 
                                        kwikmail_statuses.*,
                                         (SELECT attchments FROM `kwikmail_attchment` where mail_id = kwikmail.id limit 0,1) as 'attchments'
                                    FROM 
                                        kwikmail 
                                    inner join kwikmail_statuses on kwikmail_statuses.kwil_mail_id = kwikmail.id
                                    inner join users on users.id = kwikmail.user_id                                       
                                    where 
                                        kwikmail.parent_mail_id = $mail_id 
and 
        ( kwikmail_statuses.reciever_id = $user_id 
        OR kwikmail_statuses.mail_cc_id = $user_id 
        OR kwikmail_statuses.mail_bcc_id = $user_id and kwikmail.parent_mail_id = $mail_id  ) 
            
OR ( kwikmail_statuses.sender_id = $user_id and kwikmail.parent_mail_id = $mail_id 
        AND kwikmail_statuses.status in ('sent'))
 


 order by kwikmail.id asc";
        
        $result_single_mail_ref     = $this->db->query($sql_single_mail_ref)->result();        


        
        if ($result_single_mail){
            $single_mail    = $result_single_mail[0];
        }else{
            $single_mail           = "";         
            $result_single_mail_clone[0]->colne = 'Clonr';
            $single_mail           = $result_single_mail_clone[0];            
        }
        
        if ($result_single_mail_ref){
            $result_single_mail_ref    = $result_single_mail_ref;
        }else{
            $result_single_mail_ref  = '';            
        }

$count_sub_rep = ($result_single_mail_ref) ? count($result_single_mail_ref) : 0;
        
    $html = '';

        $html .= '<div class="media m-b-30 p-t-20">
                            <h4 class="font-bold m-t-0">' . $single_mail->mail_title .'</h4>
                        </div>';
        
        if (!isset($single_mail->colne)):

            $html .= '<div class="media m-b-30 p-t-20">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">

                                        <h4 class="panel-title">

                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse0">

                                                <div class="media-body"> 
                                                    <span class="media-meta pull-right">' . date("d-M-Y H:i:s", strtotime($single_mail->mail_sent_date)) . '</span>
                                                    <h4 class="text-danger m-0"> ' . $single_mail->firstName . ' ' . $single_mail->lastName . ' </h4> 
                                                    <div class="col-md-10 pull-left">
                                                        <small class="text-muted"><b>From:</b> ' . $single_mail->userName . '@kwikcarhire.co.uk ' . ' </small> 
                                                        <small class="text-muted"><b>To:</b> ' . $single_mail->reciever_mails .'</small> 
                                                    </div>
                                                    <div class="col-md-10 pull-left">
                                                        <small class="text-muted"><b>CC:</b> ' . $single_mail->mail_cc_mails . ' </small> 
                                                        <small class="text-muted"><b>BCC:</b> ' . $single_mail->mail_bcc_mails . '</small> 
                                                    </div>
                                                </div>

                                            </a>
                                        </h4>

                                    </div>';

            $ist_collapse_class = ($count_sub_rep > 0) ? 'out' : 'in';


            $html .= '<div id="collapse0" class="panel-collapse collapse '. $ist_collapse_class .'">
                                        <div class="panel-body">
                                            ' . $single_mail->mail_body . ' <hr>';

            $single_mail->attchments = ($single_mail->attchments) ? json_decode($single_mail->attchments, true) : '';

            $html .= '<h4> <i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments 
                        <span>';

            $attchment_status_1 = ($single_mail->attchments) ? "( " . count($single_mail->attchments) . " )" : ' - No file Attchment';

            $html .= $attchment_status_1 . ' </span> </h4>

                                            <div class="row">';

            if ($single_mail->attchments):
                foreach ($single_mail->attchments as $attchments):

                    $html .= '<div class="col-xs-4">
<a href="' . base_url('kwikmail/attchments/') . $attchments . '" target="_blank"> <i class="fa fa-paperclip m-r-10 m-b-10"></i> ' . $attchments . ' </a>
</div>';

                endforeach;
            endif;

            $html .= '                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>';

        endif;


        $inc = 1;
        if ($result_single_mail_ref):
            foreach ($result_single_mail_ref as $single_mail_ref):

                $html .= '<div class="media m-b-30 p-t-20">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">

                                        <h4 class="panel-title">

                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$inc.'">

                                                <div class="media-body"> 
                                                    <span class="media-meta pull-right">' . date("d-M-Y H:i:s", strtotime($single_mail_ref->mail_sent_date)) . '</span>
                                                    <h4 class="text-danger m-0"> ' . $single_mail_ref->firstName . ' ' . $single_mail_ref->lastName . ' </h4> 
                                                    <div class="col-md-10 pull-left">
                                                        <small class="text-muted"><b>From:</b> ' . $single_mail_ref->userName . "@kwikcarhire.co.uk" . '</small> 
                                                        <small class="text-muted"><b>To:</b> ' . $single_mail_ref->reciever_mails . '</small> 
                                                    </div>
                                                    <div class="col-md-10 pull-left">
                                                        <small class="text-muted"><b>CC:</b> ' . $single_mail_ref->mail_cc_mails . '</small> 
                                                        <small class="text-muted"><b>BCC:</b> ' . $single_mail_ref->mail_bcc_mails . '</small> 
                                                    </div>
                                                </div>

                                            </a>
                                        </h4>

                                    </div>';

                $sec_collapse_class = ($count_sub_rep != $inc) ? 'out' : 'in';

                $html .= '<div id="collapse'.$inc.'" class="panel-collapse collapse ' .$sec_collapse_class.'">
    
                                        <div class="panel-body">

                                            ' . $single_mail_ref->mail_body . '
                                            <hr>';

                $single_mail_ref->attchments = ($single_mail_ref->attchments) ? json_decode($single_mail_ref->attchments, true) : '';
                $attchment_status_2 = ($single_mail_ref->attchments) ? "( " . count($single_mail_ref->attchments) . " )" : ' - No file Attchment';

                $html .= '<h4> <i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments 
<span> ' . $attchment_status_2 . '</span> </h4>
<div class="row">';

                if ($single_mail_ref->attchments):
                    foreach ($single_mail_ref->attchments as $attchment):

                        $html .= ' <div class="col-xs-4">
<a href="' . base_url('kwikmail/attchments/') . $attchment . '" target="_blank"> <i class="fa fa-paperclip m-r-10 m-b-10"></i> ' . $attchment . ' </a>
</div>';

                    endforeach;
                endif;

                $html .= '                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div> ';


                $inc++;

// if cc send a mail then cc will not send the cc mail to by self

                $single_mail->reciever_mails = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', $single_mail_ref->serder_mail . ',', $single_mail_ref->reciever_mails);

                if (strpos($single_mail_ref->mail_cc_mails, $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,') !== false) {
                    $single_mail->mail_cc_mails = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', '', $single_mail_ref->mail_cc_mails);
                    $single_mail->reciever_mails .= " " . $single_mail_ref->serder_mail . ",";
                } else {
                    $single_mail->mail_cc_mails = $single_mail_ref->mail_cc_mails;
                }

                if (strpos($single_mail_ref->mail_bcc_mails, $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk') !== false) {
                    $single_mail->mail_bcc_mails = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', '', $single_mail_ref->mail_bcc_mails);
                    $single_mail->reciever_mails .= " " . $single_mail_ref->serder_mail . ",";
                } else {
                    $single_mail->mail_bcc_mails = $single_mail_ref->mail_bcc_mails;
                }

                $single_mail->mail_body = $single_mail_ref->mail_body;
                $single_mail->attchments = $single_mail_ref->attchments;

                $html .= '<input type="hidden" value="'.$single_mail->reciever_mails.'" id="sample_mail_to">
                          <input type="hidden" value="'.$single_mail->mail_cc_mails.'" id="sample_mail_cc">                    
                        <input type="hidden" value="'.$single_mail->mail_bcc_mails.'" id="sample_mail_bcc">                    
                    ';                 
                
            endforeach;
        endif;


        if (empty($result_single_mail_ref)) {

            $single_mail->reciever_mails = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', $single_mail->serder_mail . ',', $single_mail->reciever_mails);

            if (strpos($single_mail->mail_cc_mails, $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,') !== false) {

                $single_mail->mail_cc_mails = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', "", $single_mail->mail_cc_mails);
                $single_mail->reciever_mails .= " " . $single_mail->serder_mail . ",";
            } else {

                $single_mail->mail_cc_mails;
            }

            if (strpos($single_mail->mail_bcc_mails, $_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk') !== false) {

                $single_mail->mail_bcc_mails = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', '', $single_mail->mail_bcc_mails);
                $single_mail->reciever_mails .= " " . $single_mail->serder_mail . ",";
            } else {

                $single_mail->mail_bcc_mails;
            }

                $html .= '<input type="hidden" value="'.$single_mail->reciever_mails.'" id="sample_mail_to">
                          <input type="hidden" value="'.$single_mail->mail_cc_mails.'" id="sample_mail_cc">                    
                        <input type="hidden" value="'.$single_mail->mail_bcc_mails.'" id="sample_mail_bcc">                    
                    ';                 

//    $single_mail->mail_bcc_mails = str_replace($_SESSION['adminData']['user_name'] . '@kwikcarhire.co.uk,', "", $single_mail->mail_bcc_mails);    
        }

        $onKeyDown = "getseg()";

        $html .= '<input id="url" type="hidden" value="'.$url.'">';         
        
        $html .= ' <form id="form-sender-replay" style="display: none" action="' . base_url('KwikMail/actions') . '" method="post" enctype="multipart/form-data">         
                            
                            <hr>
                            
                            <h3 class="box-title">Compose New Message</h3>
                            
                            <div class="form-group">
                                <input class="form-control mail_to" onkeydown="'. $onKeyDown .'" name="mail_to" value="" id="mail_to" placeholder="To:" required=""> 
                            </div>

                            <div class="form-group">
                                <input class="form-control mail_cc" onkeydown="'. $onKeyDown .'" name="mail_cc" value="" id="mail_cc" placeholder="CC:"> 
                            </div>

                            <div class="form-group">
                                <input class="form-control mail_bcc" onkeydown="getseg('. $onKeyDown .')" name="mail_bcc" value="" id="mail_bcc" placeholder="BCC:"> 
                            </div>

                            <div class="form-group" id="for-area" style="display: none">
                                <textarea class="textarea_editor_1 form-control" rows="15" name="mail_body_fwd" id="mail_body_fwd"> ' . $single_mail->mail_body . ' </textarea>                                
                            </div>

                            <div class="form-group" id="reply-all-area" style="display: none">
                                <textarea class="textarea_editor_2 form-control" rows="15" name="mail_body_rep_all" id="mail_body_rep_all"></textarea>                                
                            </div>

                            <div class="form-group" id="reply-area" style="display: none">
                                <textarea class="textarea_editor form-control" rows="15" name="mail_body_rep" id="mail_body_rep"></textarea>                                
                            </div>

                            <h4><i class="ti-link"></i> Attachment</h4>

                            <div class="dropzone">
                                <div class="fallback">
                                    <input name="file[]" type="file" multiple /> 

                                    <div class="row" id="fwd_attchment" style="display: none">';

        if ($single_mail->attchments):
            $html .= '<br>';
            foreach ($single_mail->attchments as $attchment):

                $ext = '.' . pathinfo($attchment, PATHINFO_EXTENSION);
                $id_name = str_replace($ext, "", $attchment);

                $html .= '<div class="col-xs-4" id="' . $id_name . '" >
<a href="' . base_url('kwikmail/attchments/') . $attchment . '" target="_blank"> <i class="fa fa-paperclip m-r-10 m-b-10"></i> ' . $attchment . ' </a>
<input type="hidden" name="attchments_fwd[]"  value="' . base_url('kwikmail/attchments/') . $attchment . '">
<a style="color: black"><i class="fa fa-close" onclick="remo("' . $id_name . '")"></i></a>
                                                        </div>';

            endforeach;
        endif;

        $reply_all = "reply_all_mod()";
        $reply = "reply_mod()";
        $forward_mod = "forward_mod()";
        
        $html .= '</div>
                                    
                                </div>
                            </div>

                            <input name="action_type" type="hidden" id="action_type" value="">                             
                            <input name="url" type="hidden" value="' . $url . ' ">                             
                            <input name="mail_id" type="hidden" value="' . $single_mail->kwik_mail_id . '">                             
                            <input name="mail_subject" type="hidden" value="' . $single_mail->mail_title . '">                             
                            
                            <hr>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                            <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                            
                        </form>

                        <hr>
                        
                        <div class="b-all p-20">
                            <p class="p-b-20">
                                click here to <a onclick="'. $reply_all.'" id="reply_all" style="cursor: pointer">Reply All</a> or 
                                <a id="reply" onclick="'. $reply.'" style="cursor: pointer">Reply</a> or 
                                <a id="forward" onclick="'. $forward_mod.'" style="cursor: pointer">Forward</a></p>
                        </div>';

        echo $html;
    }
    
}