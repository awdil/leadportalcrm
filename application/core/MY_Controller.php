<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    
    protected $title                = "Kwik Car Hire - Admin Panel ";
    protected $Dashboard            = false;
    protected $data                 = array();
    protected $firstName;
    protected $lastName;
    protected $gender;
    protected $dob;
    protected $phone;
    protected $userName;
    protected $password;
    protected $address;
    protected $city;
    protected $state;
    protected $postCode;
    protected $country;
    
    public function __construct() {
        
        parent::__construct();
        
        ini_set('memory_limit', '-1');
        ini_set('upload_max_size', '200M');
        ini_set('post_max_size', '200M');
        ini_set('upload_max_filesize', '200M');
        ini_set('max_execution_time', '300');
        ini_set('max_input_time', '1000');
        date_default_timezone_set('Europe/London');

        // Load post model 
        $this->load->model('Mods'); 
        $this->load->library('user_agent');

        if ($this->agent->is_browser()) {
            $this->brs_agent        = $this->agent->browser();
            $this->browser_version  = $this->agent->version();
            $this->platform         = $this->agent->platform();
            $this->ip_address       = $this->input->ip_address();
            $this->device_type      = "Desktop";
        } elseif ($this->agent->isRobot()) {
            $this->device_type      = $this->agent->robot();
            $this->brs_agent        = $this->agent->browser();
            $this->browser_version  = $this->agent->version();
            $this->platform         = $this->agent->platform();
            $this->ip_address       = $this->input->ip_address();
        } elseif ($this->agent->isMobile()) {
            $this->device_type      = $this->agent->getMobile();
            $this->brs_agent        = $this->agent->browser();
            $this->browser_version  = $this->agent->version();
            $this->platform         = $this->agent->platform();
            $this->ip_address       = $this->input->ip_address();
        } else {
            $this->device_type      = 'Unidentified User Agent';
            $this->brs_agent        = $this->agent->browser();
            $this->browser_version  = $this->agent->version();
            $this->platform         = $this->agent->platform();
            $this->ip_address       = $this->input->ip_address();
        }
        
        // Per page limit 
        $this->perPage = 4;         
        
    }
    
    /*public function __construct() {
    parent::__construct();
    ini_set('memory_limit', '-1');
    ini_set('upload_max_size', '200M');
    ini_set('post_max_size', '200M');
    ini_set('upload_max_filesize', '200M');
    ini_set('max_execution_time', '300');
    ini_set('max_input_time', '1000');
    $this->load->model('Mods'); 
    $this->perPage = 4;  
    
    }*/
    protected function headerV($pageTitle = "") {        
            $slugAndLinks = array(
                'Dashboard' => array(
                    'Dashboard' => 'Dashboard'
                    ),
                'Companies' => array(
                    'addCompanies'        => 'addCompany',
                    'createCompanies'     => 'addCompany',
                    'editCompanies'       => 'editCompany',
                    'updateCompanies'     => 'updateCompany',
                    'viewCompanies'       => 'viewCompany',
                    'manageCompanies'         => 'companies',
                ),
                'Roles' => array(  
                    'addRoles'       => 'addRole',
                    'createRoles'    => 'createRole',
                    'editRoles'      => 'editRole',
                    'updateRoles'    => 'updateRole',
                    'viewRoles'      => 'viewRole',
                    'manageRoles'         => 'roles',
                ),
                'Permissions' => array(  
                    'addPermissions'         => 'addPermission',
                    'createPermissions'      => 'createPermission',
                    'editPermissions'        => 'editPermission',
                    'updatePermissions'      => 'updatePermission',
                    'viewPermissions'        => 'viewPermission',
                    'managePermissions'      => 'permissions'
                ),
                'AccessControls' => array(  
                    'addAccessControls'      => 'addAccessControl',
                    'createAccessControls'   => 'createAccessControl',
                    'editAccessControls'     => 'editAccessControl',
                    'updateAccessControls'   => 'updateAccessControl',
                    'viewAccessControls'     => 'viewAccessControl',
                    'manageAccessControls'   => 'accessControls'
                ),
                'Users' => array(  
                    'addUsers'           => 'AddUser',
                    'createUsers'        => 'CreateUser',
                    'editUsers'          => 'editUser',
                    'updateUsers'        => 'updateUser',
                    'viewUsers'          => 'viewUser',
                    'manageUsers'        => 'Users',
                ),
                'LeadStatuses' => array(
                    'addLeadStatuses'         => 'addLeadStatus',
                    'createLeadStatuses'      => 'createLeadStatus',
                    'editLeadStatuses'        => 'editLeadStatus',
                    'updateLeadStatuses'      => 'updateLeadStatus',
                    'viewLeadStatuses'        => 'viewLeadStatus',
                    'manageLeadStatuses'    => 'manageLeadStatuses'
                ),
                'Leads' => array(
                    'addLeads'                   => 'addLead',
                    'createLeads'                => 'createLead',
                    'editLeads'                  => 'editLead',
                    'updateLeads'                => 'updateLead',
                    'changeLeadsStatus'          => 'changeLeadStatus',
                    'updateChangeLeadsStatus'    => 'updateChangeLeadStatus',
                    'viewLeads'                  => 'viewLead',
                    'manageLeads'                 => 'manageLeads',
                ),
                'LeadBatches' => array(  
                    'addLeadBatches'          => 'addLeadsBatch',
                    'createLeadBatches'       => 'createLeadsBatch',
                ),            
                'Campaigns' => array(  
                    'addCampaigns'          => 'addCampaign',
                    'createCampaigns'       => 'createCampaign',
                    'editCampaigns'         => 'editCampaign',
                    'updateCampaigns'       => 'updateCampaign',                
                    'viewCampaigns'         => 'viewCampaign',
                    'manageCampaigns'       => 'manageCampaign',
                ),
                'HumanResource' => array(  
                    'addHumanResource'          => 'addHumanResource',
                    'createHumanResource'       => 'createHumanResource',
                    'editHumanResource'         => 'editHumanResource',
                    'updateHumanResource'       => 'updateHumanResource',                
                    'viewHumanResource'         => 'viewHumanResource',
                    'manageHumanResource'       => 'manageHumanResource',
                ),
                'Emails' => array(  
                    'addEmails'          => 'addEmails',
                    'manageEmails'       => 'manageEmails',
                    'createEmails'       => 'createEmails',
                    'editEmails'         => 'editEmails',
                    'updateEmails'       => 'updateEmails',   
                    'viewEmails'         => 'viewEmails',
                ),  

                'WIP' => array(
                    'addWIP'                        => 'addWIP',
                    'createWIP'                     => 'createWIP',
                    'editLeadswip'                  => 'editLeadswip',
                    'editWIP'                       => 'editWIP',
                    'updateWIP'                     => 'updateWIP',
                    'viewWIP'                       => 'viewWIP',
                    'updateLeadswip'                => 'updateLeadswip',
                    'changeLeadsStatuswip'          => 'changeLeadsStatuswip',
                    'updateChangeLeadsStatuswip'    => 'updateChangeLeadsStatuswip',
                    'viewLeadwip'                   => 'viewLeadwip',
                    'manageWIP'                     => 'manageWIP',
                ), 
                'KwikMail' => array(
                    'inbox'         => 'inbox',
                    'starred'       => 'starred',
                    'draft'         => 'draft',
                    'sentmail'      => 'sentmail',                
                    'trash'         => 'trash',
                    'indox_detials' => 'indox_detials',
                    'compose'       => 'compose',
                ),


            );
            $SQL = "";
            $SQL .= "SELECT ";
    if ($_SESSION['adminData']['company_name'] != "All"){
        $SQL .= "companies.company_name,";
    }        
    $SQL .= "   roles.role_name,
                            permissions.controller_name,
                            permissions.action_name,
                            permissions.is_crud,
                            permissions.sort,
                            users.id,
                            users.firstName,
                            users.lastName,
                            users.company_id,
                            users.userType,
                            users.avatar,    
                            users.is_active,        
                            users.userName,            
                            user_role.id,
                            user_role.user_id as 'user_id',    
                                user_role.role_id,    
                            user_role.role_permission_id,
                                user_role.permission_create,
                                user_role.permission_update,
                                user_role.permission_view,
                                user_role.permission_delete
                        FROM
                            users
                        INNER JOIN user_role ON users.id = user_role.user_id AND users.userType = user_role.role_id
                        INNER JOIN roles ON user_role.role_id = roles.role_id AND users.userType = roles.role_id
                        INNER JOIN permissions ON permissions.permission_id = user_role.role_permission_id " ;

    if ($_SESSION['adminData']['company_name'] != "All"){
        $SQL .= " INNER JOIN companies on users.company_id = companies.id ";
    }        
    $SQL .= "                    WHERE
                            users.is_active = 1 
                            AND 
                            roles.is_active = 1 
                            AND 
                            permissions.is_active = 1 ";
    if ($_SESSION['adminData']['company_name'] != "All"){
        $SQL .= " AND 
                            companies.status = 1  ";
    }        
    $SQL .=  " AND 
                            users.id = " . $_SESSION['adminData']['user_id'] . " order by permissions.sort ASC";
            $menus = $this->db->query($SQL)->result_array();
            $aar = array();
            foreach ($menus as $menu) {
                $arr_key = str_replace(" ", "", $menu['action_name']);
                if (array_key_exists($arr_key, $slugAndLinks)) {
                    $arra   = $slugAndLinks[$arr_key];
                    $ara    = $arra;
                    $mergr  = array_merge(array($menu), $ara);
                } else {
                    unset($mergr);
                }
                $aar[] = $mergr;
            }
            $campaign_id                = $_SESSION['adminData']['campaign_id'];
            $sql                        = "select campaign_id, campaign_name, campaign_short_name from campaign";
            if ($campaign_id != 0){
                $sql                   .=" where campaign_id in ($campaign_id) and campaign_status = 1";
            }else{
                $sql                   .=" where campaign_status = 1 ";        
            }
            $campaign_result                = $this->db->query($sql)->result();
            if ($_SESSION['adminData']['role_name'] == "Admin"){
                $get_all_companies_sql = "select * from companies where status = 1";
                $companies_result      = $this->db->query($get_all_companies_sql)->result();
            }else{
                $companies_result      = "";
            }
            $sql_user = "select firstName, lastName, email, avatar from users where id = " . $_SESSION['adminData']['user_id'];
            $user_result = $this->db->query($sql_user)->result();
            $this->load->view('Mod/header/header', array(
                'title'                 => $pageTitle,
                'menus'                 => $aar,
                'campaign_result'       => $campaign_result,
                'companies_result'      => $companies_result,
                'user_result'           => $user_result
            ));
        }
// Functions for form validations    
    
      
// Functions for form validations    
    
    public function CheckEmpty($name){
        
        if (isset($_POST[$name])) {
            if (empty($this->input->post($name))) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        
    }
    
    public function checkSelected($postName, $userData,$data){
        
        $selected = '';
        
        if (isset($_POST[$postName])){
            $selected = ($_POST[$postName] == $data) ? 'selected' : '';
        }else{
            $selected = ($userData == $data) ? 'selected' : '';
        }
        
        return $selected;
        
    }
    
}



?>