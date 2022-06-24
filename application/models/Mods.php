<?php

class Mods extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getAllData($fields, $order, $sort, $tableName){
        
        $this->db->select($fields)->order_by($order, $sort);
        $query = $this->db->get($tableName);
        return ($query->result_id->num_rows > 0 ) ?  $query->result() : FALSE;
       
    }
    
    public function getAllData_where($fields, $order, $sort, $tableName, $where){
        
        $this->db->select($fields)->where($where)->order_by($order, $sort);
        $query = $this->db->get($tableName);
        return ($query->result_id->num_rows > 0 ) ?  $query->result() : FALSE;
       
    }
    
    public function update($table_name, $conditionField, $id, $data){
        
        $this->db->where($conditionField);
        $data = $this->db->update($table_name, $data);
        
        if ($data){
            return $id;
        }else{
            return FALSE;
        }
        
    }    
    
    public function delete_single($id, $conditionField, $table_name){
        
        $res    = $this->db->where($conditionField, $id)->delete($table_name);
        
        if ($res){
            return TRUE;
        }else{
            return FALSE;
        }
        
    }    
    
    public function single_insert($table_name ,$data){
        
        $this->db->insert($table_name, $data);
        $insert_id = $this->db->insert_id();
        
        if ($insert_id){
            return $insert_id;
        }else{
            return FALSE;
        }
        
    }
 
    public function getDataByCondition( $fields, $tableName, $conditionData ){
        
        $this->db->select($fields)->where($conditionData);
        $query = $this->db->get($tableName);
        return ($query->result_id->num_rows > 0 ) ?  $query->result() : FALSE;        
        
    }
    
    public function getBoleanDataByCondition( $fields, $tableName, $conditionData ){
        
        $this->db->select($fields)->where($conditionData);
        $query = $this->db->get($tableName);
       // $this->db->limit(1); 
         if($query->result_id->num_rows > 0)
         {
             return 1;
         }else{
             return 0;
         }
        //return ($query->result_id->num_rows > 0 ) ?  $query->result() : FALSE;        
        
    }
    
    
    public function login($username){
        

        $userName   = $this->db->escape($username);
        
        $sql        = "SELECT
                            users.id,
                            users.userName,
                            users.company_id,
                            users.userType,
                            roles.role_name,
                            users.passwordHash,
                            users.is_active,
                            users.actCode,
                            users.campaign_id,
                            users.ip_address1,
                            users.ip_address2,
                            users.ip_address3,
                            users.ip_address_is_active,
                            
                            CASE 
                                WHEN users.company_id = 0 THEN 'All' 
                                WHEN users.company_id != 0 THEN (SELECT companies.company_name from companies WHERE companies.id = users.company_id)
                            END AS 'company_name',  
                            
                            CASE 
                                WHEN users.campaign_id = 0 THEN 'All' 
                                WHEN users.campaign_id != 0 THEN (SELECT campaign.campaign_name from campaign WHERE campaign.campaign_id = users.campaign_id)
                            END AS 'campaign_name'
                           
                            
                        FROM
                            users
                        INNER JOIN roles ON users.userType = roles.role_id 
                        WHERE
                           users.userName = '$username' AND users.is_active = 1 AND roles.is_active = 1";
        
//        $sql        = "SELECT 
//                            users.id, 
//                            users.userName, 
//                            users.company_id, 
//--                            companies.company_name,                            
//                            users.userType, 
//                            roles.role_name,                            
//                            users.passwordHash, 
//                            users.is_active, 
//                            users.actCode 
//                        FROM 
//                            users
//                        INNER JOIN roles ON users.userType = roles.role_id            
//--                        INNER JOIN companies on users.company_id = companies.id            
//                        WHERE 
//                            users.userName = '$username' 
//                        AND 
//                            users.is_active = 1 
//                        AND 
//                            roles.is_active = 1 
//--                        AND 
//--                            companies.status = 1";

//        $sql = "SELECT
//                        companies.company_name,
//                        roles.role_name,
//                        permissions.controller_name,
//                        permissions.action_name,
//                        permissions.is_crud,
//                        permissions.sort,
//                        users.id,
//                        users.firstName,
//                        users.lastName,
//                        users.company_id,
//                        users.userType,
//                        users.avatar,    
//                        users.is_active,        
//                        users.userName,            
//                        users.passwordHash,            
//                        user_role.id,
//                        user_role.user_id as 'user_id',    
//                        user_role.role_id,    
//                        user_role.role_permission_id,
//                        user_role.permission_create,
//                        user_role.permission_update,
//                        user_role.permission_view,
//                        user_role.permission_delete
//                    FROM
//                        users
//                    INNER JOIN user_role ON users.id = user_role.user_id AND users.userType = user_role.role_id
//                    INNER JOIN roles ON user_role.role_id = roles.role_id AND users.userType = roles.role_id
//                    INNER JOIN permissions ON permissions.permission_id = user_role.role_permission_id
//                    INNER JOIN companies on users.company_id = companies.id
//                    WHERE
//                        users.is_active = 1 
//                    AND 
//                        roles.is_active = 1 
//                    AND 
//                        permissions.is_active = 1 
//                    AND 
//                        companies.status = 1 
//                    AND 
//                        users.userName = '$username' 
//                    order by 
//                        permissions.sort 
//                    ASC";

//        $_SESSION['adminData']['user_id']

//        $menus = $this->db->query($SQL)->result_array();
//        
        
        
        $query      = $this->db->query($sql);
        
        if ($query->num_rows()){
            return $query->result();
        }else{
            return FALSE;
        }
        
    }
    
    
    // Fetch records
    
    public function getData($rowno,$rowperpage) {

        $this->db->select('id, firstName, lastName, email, gender, dateOfBirth, dateRegistered, phoneNumber, userName, userRole, is_active');
        $this->db->from('users');
        $this->db->limit($rowperpage, $rowno);  
        $query = $this->db->get();
        return $query->result_array();
    }

    // Select total records
    
    public function getrecordCount() {

        $this->db->select('count(*) as allcount');
        $this->db->from('users');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
        
    }    

    
    public function getUserPermission($roleID = ''){
        
        $sql = "SELECT
                    role_permission.id,
                    role_permission.role_id,
                    role_permission.permission_id,
                    role_permission.permission_create,
                    role_permission.permission_update,
                    role_permission.permission_view,
                    role_permission.permission_delete,
                    roles.role_id,
                    roles.role_name,
                    permissions.permission_id,
                    permissions.controller_name,
                    permissions.action_name,
                    permissions.is_crud
                FROM
                    role_permission
                INNER JOIN 
                    roles 
                ON 
                    roles.role_id = role_permission.role_id
                INNER JOIN 
                    permissions 
                ON 
                    permissions.permission_id = role_permission.permission_id
                WHERE
                    role_permission.role_id = $roleID 
                AND 
                    role_permission.is_active = 1 
                AND 
                    roles.role_id = $roleID 
                AND 
                    roles.is_active = 1 
                AND 
                    role_permission.role_id = $roleID 
                AND 
                    role_permission.is_active = 1 order by permissions.sort asc";
        
        $query = $this->db->query($sql)->result();
        
        return ($query == TRUE) ? $query : 'No Results Exists.';
        
    }
    
    public function getIdByName($table_name, $condition, $data){
        
        $this->db->select('*')->where_in($condition, array($data));
        $query = $this->db->get($table_name);
        return ($query->result_id->num_rows > 0 ) ?  $query->result() : FALSE;
        
    }
    
    
    public function getUserPermissions($userID){
        
        $sql = "SELECT 
                    user_role.user_id, 
                    roles.role_name,
                    permissions.permission_id,
                    permissions.controller_name, 
                    permissions.action_name,
                    user_role.role_id,
                    user_role.permission_create, 
                    user_role.permission_update, 
                    user_role.permission_view, 
                    user_role.permission_delete
                FROM 
                    users
                INNER JOIN 
                    user_role 
                ON 
                    user_role.user_id = users.id 
                INNER JOIN 
                    roles 
                ON 
                    user_role.role_id = roles.role_id 
INNER JOIN permissions ON permissions.permission_id = user_role.role_permission_id
                WHERE 
                    users.id = $userID order by permissions.sort ASC";
        
         
        $query = $this->db->query($sql)->result();
        
        return ($query == TRUE) ? $query : 'No Results Exists.';        
        
        
    }
    
    public function getActCodeWithID($id){
        
        $sql    = (is_numeric($id)) ? "SELECT email, actCode, CONCAT(firstName, ' ', lastName) as FullName FROM `users` where id = $id and NULLIF(actCode, ' ') IS NOT NULL" : FALSE;
        $query  = ($sql) ? $this->db->query($sql)->result() : FALSE;
        return ($query == TRUE) ? $query[0] : '';        
        
    }
    
    public function getLeadByID($id){
        
        $sql = "SELECT 
                    leads.*, 
                    companies.company_name AS 'cmp_name', 
                    lead_statuses.status_name,
                    users.userName
                FROM 
                    leads 
                INNER JOIN 
                    users 
                ON 
                    users.id = leads.user_id 
                left JOIN 
                    companies 
                ON 
                    companies.id = leads.company_id 
                INNER JOIN 
                    lead_statuses 
                ON 
                    lead_statuses.id = leads.lead_status 
                where 
                    leads.lead_id = $id";
        
        $query  = ($sql) ? $this->db->query($sql)->result() : FALSE;
        return ($query == TRUE) ? $query : '';        
        
    }
    
     public function getwipLeadByID($id){
        
        $sql = "SELECT 
                    leadswip.*, 
                    companies.company_name AS 'cmp_name', 
                    lead_statuses.status_name,
                    users.userName
                FROM 
                    leadswip 
                INNER JOIN 
                    users 
                ON 
                    users.id = leadswip.user_id 
                left JOIN 
                    companies 
                ON 
                    companies.id = leadswip.company_id 
                INNER JOIN 
                    lead_statuses 
                ON 
                    lead_statuses.id = leadswip.lead_status 
                where 
                    leadswip.lead_id = $id";
        
        $query  = ($sql) ? $this->db->query($sql)->result() : FALSE;
        return ($query == TRUE) ? $query : '';        
        
    }
    
    public function getAllCompanies(){
        
        $sql    = "select id, company_name from companies where status = 1 order by company_name asc";
        $query  = ($sql) ? $this->db->query($sql)->result() : FALSE;
        return ($query == TRUE) ? $query : '';        
        
    }
    
    public function getAllUserType(){
        
        $sql    = "select role_id, role_name from roles where is_active = 1 order by role_name asc";
        $query  = ($sql) ? $this->db->query($sql)->result() : FALSE;
        return ($query == TRUE) ? $query : '';        
        
    }
    
    public function getAllUsersByCompany($companyID = 0, $user_type_id = 0){
        
        $sql    = "";
        $sql    .= "SELECT id, CONCAT(firstName, ' ', lastName) as 'full_name' FROM users where is_active = 1 "; 
        $sql    .= ($user_type_id == "All") ? '' : " and userType = $user_type_id  ";
        
        if ($companyID == "All"){
            $sql    .= " " ;
        }else{
            if ($user_type_id == 1){
                $sql    .= " and company_id in  ($companyID, 0)" ;
            }else{
                $sql    .= " and company_id in  ($companyID)" ;
            }
        }
        
        $query  = ($sql) ? $this->db->query($sql)->result() : FALSE;
        
        return ($query == TRUE) ? $query : '';        
        
    }
    
    public function getAllStatuses(){
        
        $sql    = "select id, status_name from lead_statuses where is_active = 1 order by status_name asc";
        $query  = ($sql) ? $this->db->query($sql)->result() : FALSE;
        return ($query == TRUE) ? $query : '';        
        
    }
    
    public function userLeadReportStats($campaign_id, $user_id, $lead_status_id, $start_date, $end_date){
        $sql = "";
        $sql    .= "SELECT 
                        lead_id,
                        user_id,
                        (select CONCAT(firstName, ' ', lastName) as 'full_name' FROM users where is_active = 1 and id = user_id) as 'Name',
                        company_id,
                        (SELECT company_name FROM `companies` WHERE status = 1 AND id = company_id) as 'center_name',
                        (SELECT campaign.campaign_short_name FROM campaign WHERE campaign.campaign_status = 1 AND campaign.campaign_id = leads.campaign_id) as 'campaign_name',
                        seniro,
                        batch_id,
                        first_name,
                        last_name,
                        company_name,
                        job_title,
                        phone_1,
                        phone_2,
                        fax,
                        email,
                        address,
                        address_2,
                        address_3,
                        town_city,
                        post_code,
                        date_of_birth,
                        contact_phone,
                        contact_sms,
                        contact_email,
                        contact_mail,
                        contact_fax,
                        contact_time,
                        position_on_liability,
                        tp_insurer_details_name,
                        accident_circumstances,
                        client_status_in_accident,
                        are_you_a_litigation_friend,
                        replacement_invoice_number,
                        if_litigation_friend_name_and_date_of_birth_of_the_claimant,
                        date_of_accident,
                        time_of_accident,
                        what_injuries_did_you_suffer,
                        did_you_seek_medical_attention,
                        who_do_you_blame_for_the_accident,
                        do_you_have_access_to_the_details_of_the_party_you_blame,
                        client_car_registration,
                        client_car_make_model,
                        client_insurer,
                        client_policy_number,
                        tp_car_registration,
                        tp_car_make_model,
                        have_you_claimed_before,
                        do_you_wish_to_make_a_claim,
                        additional_notes,
                        is_this_a_linked_passenger,
                        preferred_time_of_contact,
                        clients_occupation,
                        ni_number,
                        was_the_client_vehicle_repaired_or_total_loss,
                        has_the_client_been_paid_out_for_his_her_vehicle_damage,
                        were_the_police_involved,
                        what_was_the_exact_location_of_the_accident,
                        what_was_the_weather_like,
                        how_many_occupants_in_the_vehicle,
                        preferred_time_to_call,
                        client_password,
                        was_accident_reported_or_recorded_in_the_accident_book,
                        employers_name_address_telephone_number,
                        med_neg_only,
                        ol_pl_only,
                        credit_hire_or_vehicle_replacement,
                        is_injury_on_going_injury_physio,
                        third_party_policy_number,
                        interpreter_name,
                        interpreter_paid,
                        marketing_source,
                        lead_status,
                        (SELECT status_name FROM lead_statuses WHERE is_active = 1 and id = lead_status) as 'status_name',
                        (SELECT lead_type FROM lead_statuses WHERE is_active = 1 and id = lead_status) as 'status_type',
                        status_change_by_user_id,
                        (select CONCAT(firstName, ' ', lastName) as 'full_name' FROM users where is_active = 1 and id = status_change_by_user_id) as 'status_change_by_user_id_2',
                        date_of_status_change,
                        api_inseration_id,
                        lead_update_user_id,
                        (select CONCAT(firstName, ' ', lastName) as 'full_name' FROM users where is_active = 1 and id = lead_update_user_id) as 'lead_update_user_id_2',
                        lead_update_company_id,
                        (SELECT company_name FROM `companies` WHERE status = 1 AND id = lead_update_company_id) as 'lead_update_company_id_2',
                        created_at,
                        updated_at
                    FROM 
                        `leads` 
                    WHERE ";
        
           // $sql .= ($company_id == "All") ? '' : " company_id in ($company_id) and ";
            
            
            if ($user_id == "All"){
                $sql .= "";
            }else{
                $sql .= " user_id in (SELECT id FROM `users` WHERE ";
                //$sql .= ($user_type_id == "All") ? '' :" userType in ($user_type_id) AND ";
                $sql .= ($user_id == "All") ? '' : " id in ($user_id)) AND ";
            }
            
            $sql .= ($lead_status_id == "All") ? '' : " lead_status in ($lead_status_id) AND ";
            
            $sql .= ($campaign_id == "All") ? '' : " campaign_id in ($campaign_id) AND ";
            
            $sql .= " created_at 
                    BETWEEN 
                        '$start_date 00:00:00' 
                    AND 
                        '$end_date 23:59:59'";
        
                    $query  = ($sql) ? $this->db->query($sql)->result() : FALSE;
                    return ($query == TRUE) ? $query : '';        
        
    }
    public function userLeadReport($company_id, $user_type_id, $campaign_id, $user_id, $lead_status_id, $start_date, $end_date){
        
        $sql = "";
        
        $sql    .= "SELECT 
                        lead_id,
                        user_id,
                        (select CONCAT(firstName, ' ', lastName) as 'full_name' FROM users where is_active = 1 and id = user_id) as 'Name',
                        company_id,
                        (SELECT company_name FROM `companies` WHERE status = 1 AND id = company_id) as 'center_name',
                        (SELECT campaign.campaign_short_name FROM campaign WHERE campaign.campaign_status = 1 AND campaign.campaign_id = leads.campaign_id) as 'campaign_name',
                        seniro,
                        batch_id,
                        first_name,
                        last_name,
                        company_name,
                        job_title,
                        phone_1,
                        phone_2,
                        fax,
                        email,
                        address,
                        address_2,
                        address_3,
                        town_city,
                        post_code,
                        date_of_birth,
                        contact_phone,
                        contact_sms,
                        contact_email,
                        contact_mail,
                        contact_fax,
                        contact_time,
                        position_on_liability,
                        tp_insurer_details_name,
                        accident_circumstances,
                        client_status_in_accident,
                        are_you_a_litigation_friend,
                        replacement_invoice_number,
                        if_litigation_friend_name_and_date_of_birth_of_the_claimant,
                        date_of_accident,
                        time_of_accident,
                        what_injuries_did_you_suffer,
                        did_you_seek_medical_attention,
                        who_do_you_blame_for_the_accident,
                        do_you_have_access_to_the_details_of_the_party_you_blame,
                        client_car_registration,
                        client_car_make_model,
                        client_insurer,
                        client_policy_number,
                        tp_car_registration,
                        tp_car_make_model,
                        have_you_claimed_before,
                        do_you_wish_to_make_a_claim,
                        additional_notes,
                        is_this_a_linked_passenger,
                        preferred_time_of_contact,
                        clients_occupation,
                        ni_number,
                        was_the_client_vehicle_repaired_or_total_loss,
                        has_the_client_been_paid_out_for_his_her_vehicle_damage,
                        were_the_police_involved,
                        what_was_the_exact_location_of_the_accident,
                        what_was_the_weather_like,
                        how_many_occupants_in_the_vehicle,
                        preferred_time_to_call,
                        client_password,
                        was_accident_reported_or_recorded_in_the_accident_book,
                        employers_name_address_telephone_number,
                        med_neg_only,
                        ol_pl_only,
                        credit_hire_or_vehicle_replacement,
                        is_injury_on_going_injury_physio,
                        third_party_policy_number,
                        interpreter_name,
                        interpreter_paid,
                        marketing_source,
                        lead_status,
                        (SELECT status_name FROM lead_statuses WHERE is_active = 1 and id = lead_status) as 'status_name',
                        (SELECT lead_type FROM lead_statuses WHERE is_active = 1 and id = lead_status) as 'status_type',
                        status_change_by_user_id,
                        (select CONCAT(firstName, ' ', lastName) as 'full_name' FROM users where is_active = 1 and id = status_change_by_user_id) as 'status_change_by_user_id_2',
                        date_of_status_change,
                        api_inseration_id,
                        lead_update_user_id,
                        (select CONCAT(firstName, ' ', lastName) as 'full_name' FROM users where is_active = 1 and id = lead_update_user_id) as 'lead_update_user_id_2',
                        lead_update_company_id,
                        (SELECT company_name FROM `companies` WHERE status = 1 AND id = lead_update_company_id) as 'lead_update_company_id_2',
                        created_at,
                        updated_at
                    FROM 
                        `leads` 
                    WHERE ";
        
            $sql .= ($company_id == "All") ? '' : " company_id in ($company_id) and ";
            
            
            if ($user_id == "All"){
                $sql .= "";
            }else{
                $sql .= " user_id in (SELECT id FROM `users` WHERE ";
                $sql .= ($user_type_id == "All") ? '' :" userType in ($user_type_id) AND ";
                $sql .= ($user_id == "All") ? '' : " id in ($user_id)) AND ";
            }
            
            $sql .= ($lead_status_id == "All") ? '' : " lead_status in ($lead_status_id) AND ";
            
            $sql .= ($campaign_id == "All") ? '' : " campaign_id in ($campaign_id) AND ";
            
            $sql .= " created_at 
                    BETWEEN 
                        '$start_date 00:00:00' 
                    AND 
                        '$end_date 23:59:59'";
        
                    $query  = ($sql) ? $this->db->query($sql)->result() : FALSE;
                    return ($query == TRUE) ? $query : '';        
        
    }
 
    public function getLeadStatusByCampaign($campaign_id = 0){
        
        $sql = "";
        
        $sql  .= "select 
                    lead_statuses.id, 
--                    campaign.campaign_name, 
--                    campaign.campaign_short_name,
                    CONCAT(lead_statuses.status_name, ' | ', campaign.campaign_short_name) as 'Lead_Status_Name'
                from 
                    lead_statuses 
                inner join  
                    campaign 
                on 
                    campaign.campaign_id = lead_statuses.campaign_id 
                where ";

                if ($campaign_id){
                    $sql .= "   lead_statuses.campaign_id = $campaign_id and  ";

                }
                
                $sql .= "
                    lead_statuses.is_active = 1 
                and 
                    campaign.campaign_status = 1";
        
        $query  = ($sql) ? $this->db->query($sql)->result() : FALSE;
        return ($query == TRUE) ? $query : '';        
        
    }
    
     public function getUsersbycompany(){
        
        $sql = "SELECT
                    users.id,
                    users.userName,
                    users.company_id,
                    (select roles.role_name FROM roles WHERE roles.is_active = 1 AND roles.role_id in(users.userType)) as 'role_name',
                    (select companies.company_name FROM companies WHERE companies.status = 1 AND companies.id = users.company_id) as 'company_name'
                --  (select campaign.campaign_short_name FROM campaign WHERE campaign.campaign_status = 1 AND campaign.campaign_id in(JSON_EXTRACT(users.campaign_id))) as 'campaign_name'
                FROM
                        users
                WHERE
                    users.is_active = 1";

        $query  = ($sql) ? $this->db->query($sql)->result() : FALSE;
        return ($query == TRUE) ? $query : '';        
        
    }
    
    public function getUsers(){
        
        $sql = "SELECT
                    users.id,
                    users.userName,
                    (select roles.role_name FROM roles WHERE roles.is_active = 1 AND roles.role_id in(users.userType)) as 'role_name',
                    (select companies.company_name FROM companies WHERE companies.status = 1 AND companies.id = users.company_id) as 'company_name'
                --  (select campaign.campaign_short_name FROM campaign WHERE campaign.campaign_status = 1 AND campaign.campaign_id in(JSON_EXTRACT(users.campaign_id))) as 'campaign_name'
                FROM
                        users
                WHERE
                    users.is_active = 1";

        $query  = ($sql) ? $this->db->query($sql)->result() : FALSE;
        return ($query == TRUE) ? $query : '';        
        
    }
      function count_unread_message_of_thread($message_thread_code)
    {
        $unread_message_counter = 0;
        $current_user           = $_SESSION['adminData']['user_id'];
        /*$messages               = $this->db->get_where('message', array(
            'message_thread_code' => $message_thread_code
        ))->result_array();*/
        $sql = "SELECT 
                message.*, message_thread.* 
            FROM message 
                JOIN message_thread ON message_thread.message_thread_code = message.message_thread_code  
            WHERE message.message_thread_code = '$message_thread_code'";
        
        $messages  = $this->db->query($sql)->result_array();
        foreach ($messages as $row) {
            if (($row['sender'] != $current_user) && ($row['read_status'] == '0') && ($row['lead_note_id'] != '1'))
                $unread_message_counter++;
        }
        return $unread_message_counter;
    }
    
     function count_unread_message_of_threadwithMessages()
    {
        $unread_message_counter = 0;
        $current_user           = $_SESSION['adminData']['user_id'];
         $sql = "SELECT message.*, message_thread.message_thread_code, message_thread.lead_id  
        FROM message JOIN message_thread ON message_thread.message_thread_code = message.message_thread_code WHERE message_thread.is_note_added != 1 AND message.read_status = 0 AND message.reciver_id = $current_user";
//       $sql = "SELECT * FROM `message` WHERE reciver_id = $current_user AND read_status = 0 ORDER BY timestamp DESC";
        $messagesdata  = $this->db->query($sql)->result();
       
        return $messagesdata;
    }
    
     function count_unread_leadNotes_of_threadwithNotes()
    {
        $unread_message_counter = 0;
        $current_user           = $_SESSION['adminData']['user_id'];
       
        $sql = "SELECT message.*, message_thread.*  
        FROM message JOIN message_thread ON message_thread.message_thread_code = message.message_thread_code 
        WHERE message_thread.is_note_added = 1 AND message.read_status = 0 AND message_thread.sender!= $current_user AND  message_thread.reciever= $current_user GROUP BY message_thread.reciever";
        
        $leadsNotessdata  = $this->db->query($sql)->result();
       
        return $leadsNotessdata;
    }
    
    function count_unread_notes_of_thread($message_thread_code)
    {
        $unread_message_counter = 0;
        $current_user           = $_SESSION['adminData']['user_id'];
        $sql = "SELECT 
                message.*, message_thread.* 
            FROM message 
                JOIN message_thread ON message_thread.message_thread_code = message.message_thread_code  
            WHERE (message.message_thread_code = '$message_thread_code') AND (message_thread.is_note_added = 1) AND (message.read_status = 0)";
        
     /*   SELECT 
                message.*, message_thread.* 
            FROM message 
                JOIN message_thread ON message_thread.message_thread_code = message.message_thread_code  
            WHERE message.message_thread_code = '28d5855ff7ab30a5f9ebc6e40c85'*/
        
        /*SELECT 
                message.*, message_thread.* 
            FROM message 
                JOIN message_thread ON message_thread.message_thread_code = message.message_thread_code  
            WHERE message.message_thread_code = '28d5855ff7ab30a5f9ebc6e40c85' AND message_thread.is_note_added = 1 AND message.read_status*/
        
        $messages  = $this->db->query($sql)->result_array();
       /* return ($query == TRUE) ? $query : '';    */
        
        /*$messages       = $this->db->get_where('message', array(
            'message_thread_code' => $message_thread_code
        ))->result_array();*/
        foreach ($messages as $row) {
            if ($row['sender'] != $current_user)
                $unread_message_counter++;
        }
        return $unread_message_counter;
    }
   
    function mark_thread_messages_read($message_thread_code)
    {
        // mark read only the oponnent messages of this thread, not currently logged in user's sent messages
         $current_user           = $_SESSION['adminData']['user_id'];
        $this->db->where('sender !=', $current_user);
        $this->db->where('message_thread_code', $message_thread_code);
        $this->db->update('message', array(
            'read_status' => 1
        ));
    }
    
     /*Check fo wip*/
    
}