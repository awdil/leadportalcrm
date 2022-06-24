<?php

$config = array(
    
    'adminLogin' => array(
        
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
            )
        ), 
        
        array(
            'field' => 'userName',
            'label' => 'User Name',
            'rules' => 'trim|required|alpha_numeric|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
                'alpha_numeric'   => '%s must be valid. For example, johndoe, johndoe123'
            )            
        ),
        
    ),
    
    'ResetPassword' => array(
        
        array(
            'field' => 'OldPassowrd',
            'label' => 'Old Passowrd',
            'rules' => 'trim|required|max_length[25]|min_length[6]|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
                'min_length'    => '%s must be between 6-25 characters long.',
                'max_length'    => '%s must be between 6-25 characters long.'
            )            
        ),
        
        array(
            'field' => 'NewPassowrd',
            'label' => 'New Password',
            'rules' => 'trim|required|max_length[25]|min_length[6]|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
                'min_length'    => '%s must be between 6-25 characters long.',
                'max_length'    => '%s must be between 6-25 characters long.'
            )            
        ),
        
        array(
            'field' => 'Re-TypePassowrd',
            'label' => 'Re-Type Passowrd',
            'rules' => 'trim|required|max_length[25]|min_length[6]|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
                'min_length'    => '%s must be between 6-25 characters long.',
                'max_length'    => '%s must be between 6-25 characters long.'
            )            
        ),
        
    ),

    'settings' => array(

        array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[20]|min_length[3]|alpha|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'alpha'     => 'Only letters are allowed, numbers and space are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'lastName',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[20]|min_length[3]|alpha|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'alpha'     => 'Only letters are allowed, numbers and space are not allowed for %s.'
            )            
        ),

        array(
            'field' => 'gender',
            'label' => 'gender',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
            )            
        ),

        array(
            'field' => 'dateOfBirth',
            'label' => 'dateOfBirth',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|callback_emailIsUnique|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
                'emailIsUnique'  => '%s is already taken.',
                'valid_email'   => '%s must be valid. For example, johndoe@example.com'
            )
        ),        
        
        array(
            'field' => 'phoneNumber',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean|callback_phoneIsUnique'
        ),
        
        array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'city',
            'label' => 'City',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'state',
            'label' => 'State',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'postCode',
            'label' => 'Post Code',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
            )            
        ),

        array(
            'field' => 'country',
            'label' => 'Country',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
            )            
        ),

        
    ),
        
        
    'AddUser' => array(
        
        array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[20]|min_length[3]|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
//                'alpha'     => 'Only letters are allowed, numbers and space are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'lastName',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[20]|min_length[3]|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
//                'alpha'     => 'Only letters are allowed, numbers and space are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|is_unique[users.email]|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
                'is_unique'     => '%s is already taken.',
                'valid_email'   => '%s must be valid. For example, johndoe@example.com'
            )
        ),
        
        array(
            'field' => 'userName',
            'label' => 'User Name',
            'rules' => 'trim|required|max_length[20]|min_length[3]|alpha_numeric|is_unique[users.userName]|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
                'is_unique'     => '%s is already taken.',
                'alpha_numeric'   => '%s must be valid. For example, johndoe, johndoe123'
            )            
        ),
        
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|max_length[25]|min_length[6]|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
                'min_length'    => '%s must be between 6-25 characters long.',
                'max_length'    => '%s must be between 6-25 characters long.'
            )            
        ),
        
        array(
            'field' => 'userType',
            'label' => 'User Type',
            'rules' => 'trim|required|is_natural_no_zero',
            'errors' => array(
                'required'      => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'campaign[]',
            'label' => 'Campaign',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
//                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'phone',
            'label' => 'Phone Number',
            'rules' => 'trim|max_length[11]|min_length[10]|xss_clean|is_unique[users.phoneNumber]'
        ),
        
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),        
        
        array(
            'field' => 'company',
            'label' => 'Company',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
//                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),        
        
    ),
    
    'UpdateUser' => array(
        
        array(
            'field' => 'campaign[]',
            'label' => 'Campaign',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
//                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[20]|min_length[3]|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
//                'alpha'     => 'Only letters are allowed, numbers and space are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'lastName',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[20]|min_length[3]|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
//                'alpha'     => 'Only letters are allowed, numbers and space are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|callback_emailIsUnique|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
                'emailIsUnique'  => '%s is already taken.',
                'valid_email'   => '%s must be valid. For example, johndoe@example.com'
            )
        ),
        
        array(
            'field' => 'userName',
            'label' => 'User Name',
            'rules' => 'trim|required|max_length[20]|min_length[3]|alpha_numeric|callback_userNameIsUnique|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
                'userNameIsUnique'     => '%s is already taken.',
                'alpha_numeric'   => '%s must be valid. For example, johndoe, johndoe123'
            )            
        ),
        
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|max_length[25]|min_length[6]|xss_clean',
            'errors' => array(
                'required'      => '%s is Required field.',
                'min_length'    => '%s must be between 6-25 characters long.',
                'max_length'    => '%s must be between 6-25 characters long.'
            )            
        ),
        
        array(
            'field' => 'userType',
            'label' => 'User Type',
            'rules' => 'trim|required|is_natural_no_zero',
            'errors' => array(
                'required'      => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),

        
        array(
            'field' => 'phone',
            'label' => 'Phone Number',
            'rules' => 'trim|max_length[11]|min_length[10]|xss_clean|callback_phoneIsUnique'
        ),
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),        
        
        array(
            'field' => 'company',
            'label' => 'Company',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
//                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),        
        
    ),
    
    'addCompany' => array(
        
        array(
            'field' => 'companyName',
            'label' => 'Company Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|is_unique[companies.company_name]|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'alpha_numeric_spaces'     => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),

    ),
    
    'updateCompany' => array(
        
        array(
            'field' => 'companyName',
            'label' => 'Company Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|callback_companyNameIsUnique|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'companyNameIsUnique'  => '%s is already Exists.',
                'alpha_numeric_spaces'     => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),

    ),
    
    'addRole' => array(
        
        array(
            'field' => 'roleName',
            'label' => 'Role Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|is_unique[roles.role_name]|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'alpha_numeric_spaces'     => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),

    ),    

    'updateRole' => array(
        
        array(
            'field' => 'roleName',
            'label' => 'Role Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|callback_roleNameIsUnique|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'roleNameIsUnique'  => '%s is already Exists.',
                'alpha_numeric_spaces'     => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),

    ),    
    
    'addPermission' => array(
        
        array(
            'field' => 'controllerName',
            'label' => 'Controller Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'alpha_numeric_spaces'     => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'actionName',
            'label' => 'Action Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|is_unique[permissions.action_name]|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'alpha_numeric_spaces'     => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'isCrud',
            'label' => 'Is Crud',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',

            )            
        ),
        
        array(
            'field' => 'sortOrder',
            'label' => 'Sort Order',
            'rules' => 'trim|required|is_natural|xss_clean',
            
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
            
        ),
        
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),

    ),    
    
    'updatePermission' => array(
        
        array(
            'field' => 'controllerName',
            'label' => 'Controller Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'alpha_numeric_spaces'     => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'actionName',
            'label' => 'Action Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|callback_permissionActionNameIsUnique|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'permissionActionNameIsUnique' => '%s is already Exists.',
                'alpha_numeric_spaces'     => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'isCrud',
            'label' => 'Is Crud',
            'rules' => 'trim|required|is_natural|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'sortOrder',
            'label' => 'Sort Order',
            'rules' => 'trim|required|is_natural_no_zero|xss_clean',
            
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
            
        ),
        
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),

    ),    
    
    'addAccessControl' => array(
        
        array(
            'field' => 'role',
            'label' => 'Role',
            'rules' => 'trim|required|is_natural_no_zero|xss_clean',
            'errors' => array(
                'required'        => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),        
        
        array(
            'field' => 'permission',
            'label' => 'Permission',
            'rules' => 'trim|required|is_natural_no_zero|xss_clean',
            'errors' => array(
                'required'        => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),        

        array(
            'field' => 'permissionCreate',
            'label' => 'Permission Create',
            'rules' => 'trim|required|is_natural|xss_clean',
            'errors' => array(
                'required'        => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),

        array(
            'field' => 'permissionUpdate',
            'label' => 'Permission Update',
            'rules' => 'trim|required|is_natural|xss_clean',
            'errors' => array(
                'required'        => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),        

        array(
            'field' => 'permissionView',
            'label' => 'Permission View',
            'rules' => 'trim|required|is_natural|xss_clean',
            'errors' => array(
                'required'        => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),        
        
        array(
            'field' => 'permissionDelete',
            'label' => 'Permission Delete',
            'rules' => 'trim|required|is_natural|xss_clean',
            'errors' => array(
                'required'        => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),        
        
        
        
    ),
    
    'updateAccessControl' => array(
        
        array(
            'field' => 'role',
            'label' => 'Role',
            'rules' => 'trim|required|is_natural_no_zero|xss_clean',
            'errors' => array(
                'required'        => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),        
        
        array(
            'field' => 'permission',
            'label' => 'Permission',
            'rules' => 'trim|required|is_natural_no_zero|xss_clean',
            'errors' => array(
                'required'        => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),        

        array(
            'field' => 'permissionCreate',
            'label' => 'Permission Create',
            'rules' => 'trim|required|is_natural|xss_clean',
            'errors' => array(
                'required'        => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),

        array(
            'field' => 'permissionUpdate',
            'label' => 'Permission Update',
            'rules' => 'trim|required|is_natural|xss_clean',
            'errors' => array(
                'required'        => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),        

        array(
            'field' => 'permissionView',
            'label' => 'Permission View',
            'rules' => 'trim|required|is_natural|xss_clean',
            'errors' => array(
                'required'        => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),        
        
        array(
            'field' => 'permissionDelete',
            'label' => 'Permission Delete',
            'rules' => 'trim|required|is_natural|xss_clean',
            'errors' => array(
                'required'        => '%s is Required field.',
                'is_natural'      => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),        
        
        
        
    ),
    
    'addLeadStatus' => array(
        
        array(
            'field' => 'statusName',
            'label' => 'Status Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'alpha_numeric_spaces'     => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'campaign_id',
            'label' => 'Campaign',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'leadType',
            'label' => 'Lead Type',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|is_unique[permissions.action_name]|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'alpha_numeric_spaces'     => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),

    ),    
    
    'updateLeadStatus' => array(
        
        array(
            'field' => 'statusName',
            'label' => 'Status Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'alpha_numeric_spaces'     => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'leadType',
            'label' => 'Lead Type',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|is_unique[permissions.action_name]|xss_clean',
            'errors' => array(
                'required'  => '%s is Required field.',
                'alpha_numeric_spaces'     => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )            
        ),
        
        array(
            'field' => 'campaign_id',
            'label' => 'Campaign',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),

    ),    
    
    'addLeadFromWIP' => array(
        
        array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'lastName',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'valid_email' => '%s Address is not Valid.'
            )
        ),
        
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean'
        ),        
        
        array(
            'field' => 'DateofAccident',
            'label' => 'Date of Accident',
            'rules' => 'trim|required|xss_clean'
        ),        

        array(
            'field' => 'postcode',
            'label' => 'Post Code',
            'rules' => 'trim|required|regex_match[/^[A-Za-z]{1,2}[\d]{1,2}([A-Za-z])?\s?[\d][A-Za-z]{2}$/]|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'regex_match' => '%s is not Valid.'
            )
        ),
        
        array(
            'field' => 'contactphone',
            'label' => 'Permission to Phone',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactsms',
            'label' => 'Permission to SMS',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactemail',
            'label' => 'Permission to Email',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactmail',
            'label' => 'Permission to Mail',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contacttime',
            'label' => 'Preferred time of Contact',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'PreferredTimetoCall',
            'label' => 'Preferred Time to Call',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
    ),
    
    'addLead' => array(
        
        array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'lastName',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'valid_email' => '%s Address is not Valid.'
            )
        ),
        
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean'
        ),        
        
        array(
            'field' => 'DateofAccident',
            'label' => 'Date of Accident',
            'rules' => 'trim|required|xss_clean'
        ),        

        array(
            'field' => 'postcode',
            'label' => 'Post Code',
//            'rules' => 'trim|required|regex_match[/^([A-PR-UWYZ0-9][A-HK-Y0-9][AEHMNPRTVXY0-9]?[ABEHMNPRVWXY0-9]? {1,2}[0-9][ABD-HJLN-UW-Z]{2}|GIR 0AA)$/]|xss_clean',
            'rules' => 'trim|required|regex_match[/^[A-Za-z]{1,2}[\d]{1,2}([A-Za-z])?\s?[\d][A-Za-z]{2}$/]|xss_clean',
//            'rules' => 'trim|required|regex_match[/^[a-zA-Z]{1,2}([0-9]{1,2}|[0-9][a-zA-Z])\s*[0-9][a-zA-Z]{2}$/]|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'regex_match' => '%s is not Valid.'
            )
        ),
        
        array(
            'field' => 'contactphone',
            'label' => 'Permission to Phone',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactsms',
            'label' => 'Permission to SMS',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactemail',
            'label' => 'Permission to Email',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactmail',
            'label' => 'Permission to Mail',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contacttime',
            'label' => 'Preferred time of Contact',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
       /* array(
            'field' => 'PreferredTimetoCall',
            'label' => 'Preferred Time to Call',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),*/
        
        
        
    ),
    
     'addMIB' => array(
        
        array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'lastName',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'valid_email' => '%s Address is not Valid.'
            )
        ),
        
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean'
        ),        
        
        array(
            'field' => 'DateofAccident',
            'label' => 'Date of Accident',
            'rules' => 'trim|required|xss_clean'
        ),        

        array(
            'field' => 'postcode',
            'label' => 'Post Code',
            'rules' => 'trim|required|regex_match[/^[A-Za-z]{1,2}[\d]{1,2}([A-Za-z])?\s?[\d][A-Za-z]{2}$/]|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'regex_match' => '%s is not Valid.'
            )
        ),
        
        array(
            'field' => 'contactphone',
            'label' => 'Permission to Phone',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactsms',
            'label' => 'Permission to SMS',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactemail',
            'label' => 'Permission to Email',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactmail',
            'label' => 'Permission to Mail',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contacttime',
            'label' => 'Preferred time of Contact',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'PreferredTimetoCall',
            'label' => 'Preferred Time to Call',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        
        
    ),
    
    'addSolicitor' => array(
          array(
                'field' => 'firstName',
                'label' => 'First Name',
                'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
                'errors' => array(
                    'required' => '%s is Required field.',
                    'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
                )
            ),

            array(
                'field' => 'lastName',
                'label' => 'Last Name',
                'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
                'errors' => array(
                    'required' => '%s is Required field.',
                    'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
                )
            ),
   
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean'
        ),        
        

        
        array(
            'field' => 'contactphone',
            'label' => 'Permission to Phone',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactsms',
            'label' => 'Permission to SMS',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactemail',
            'label' => 'Permission to Email',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactmail',
            'label' => 'Permission to Mail',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contacttime',
            'label' => 'Preferred time of Contact',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'PreferredTimetoCall',
            'label' => 'Preferred Time to Call',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        
        
    ),
    
     'updateSolicitor' => array(
         array(
                'field' => 'firstName',
                'label' => 'First Name',
                'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
                'errors' => array(
                    'required' => '%s is Required field.',
                    'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
                )
            ),

            array(
                'field' => 'lastName',
                'label' => 'Last Name',
                'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
                'errors' => array(
                    'required' => '%s is Required field.',
                    'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
                )
            ),
      
        
        
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean'
        ),        
        
    ),
    
    
    'addEMPLead' => array(
        
        array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'lastName',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'valid_email' => '%s Address is not Valid.'
            )
        ),
        
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean'
        ),        
      

        array(
            'field' => 'postcode',
            'label' => 'Post Code',
            'rules' => 'trim|required|regex_match[/^[A-Za-z]{1,2}[\d]{1,2}([A-Za-z])?\s?[\d][A-Za-z]{2}$/]|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'regex_match' => '%s is not Valid.'
            )
        ),
        
        array(
            'field' => 'contactphone',
            'label' => 'Permission to Phone',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactsms',
            'label' => 'Permission to SMS',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactemail',
            'label' => 'Permission to Email',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactmail',
            'label' => 'Permission to Mail',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contacttime',
            'label' => 'Preferred time of Contact',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),

        
    ),
    
    
'addLeadwip' => array(
        
         array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean'
        ),
        array(
            'field' => 'wiptouserCloser',
            'label' => 'Colser Name',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
            'required'                => '%s is Required.',
            )            
        ),
        
    ),
    
    'aupdateLeadwip' => array(
        
         array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean'
        ),
        
    ),
    
    'addHousingDisrepairLead' => array(
        
        array(
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
//                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'lastName',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'valid_email' => '%s Address is not Valid.'
            )
        ),
        
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean'
        ),        
        
//        array(
//            'field' => 'DateofAccident',
//            'label' => 'Date of Accident',
//            'rules' => 'trim|required|xss_clean'
//        ),        

        array(
            'field' => 'postcode',
            'label' => 'Post Code',
//            'rules' => 'trim|required|regex_match[/^([A-PR-UWYZ0-9][A-HK-Y0-9][AEHMNPRTVXY0-9]?[ABEHMNPRVWXY0-9]? {1,2}[0-9][ABD-HJLN-UW-Z]{2}|GIR 0AA)$/]|xss_clean',
            'rules' => 'trim|required|regex_match[/^[A-Za-z]{1,2}[\d]{1,2}([A-Za-z])?\s?[\d][A-Za-z]{2}$/]|xss_clean',
//            'rules' => 'trim|required|regex_match[/^[a-zA-Z]{1,2}([0-9]{1,2}|[0-9][a-zA-Z])\s*[0-9][a-zA-Z]{2}$/]|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'regex_match' => '%s is not Valid.'
            )
        ),
        
        array(
            'field' => 'contactphone',
            'label' => 'Permission to Phone',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactsms',
            'label' => 'Permission to SMS',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactemail',
            'label' => 'Permission to Email',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactmail',
            'label' => 'Permission to Mail',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contacttime',
            'label' => 'Preferred time of Contact',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),

      /*  array(
            'field' => 'preferred_date_to_call',
            'label' => 'Preferred Date To Call',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
            )            
        ),
        */
    ),
    
    'addCarHireLead' => array(
        
        array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'lastName',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'valid_email' => '%s Address is not Valid.'
            )
        ),
        
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean'
        ),        
        
        array(
            'field' => 'DateofAccident',
            'label' => 'Date of Accident',
            'rules' => 'trim|required|xss_clean'
        ),        

        array(
            'field' => 'postcode',
            'label' => 'Post Code',
//            'rules' => 'trim|required|regex_match[/^([A-PR-UWYZ0-9][A-HK-Y0-9][AEHMNPRTVXY0-9]?[ABEHMNPRVWXY0-9]? {1,2}[0-9][ABD-HJLN-UW-Z]{2}|GIR 0AA)$/]|xss_clean',
            'rules' => 'trim|required|regex_match[/^[A-Za-z]{1,2}[\d]{1,2}([A-Za-z])?\s?[\d][A-Za-z]{2}$/]|xss_clean',
//            'rules' => 'trim|required|regex_match[/^[a-zA-Z]{1,2}([0-9]{1,2}|[0-9][a-zA-Z])\s*[0-9][a-zA-Z]{2}$/]|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'regex_match' => '%s is not Valid.'
            )
        ),
        
        array(
            'field' => 'contactphone',
            'label' => 'Permission to Phone',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactsms',
            'label' => 'Permission to SMS',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactemail',
            'label' => 'Permission to Email',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactmail',
            'label' => 'Permission to Mail',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contacttime',
            'label' => 'Preferred time of Contact',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'PreferredTimetoCall',
            'label' => 'Preferred Time to Call',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        
        
    ),
    
        'addEnergyLead' => array(
        
        array(
            'field' => 'firstname',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'lastname',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'valid_email' => '%s Address is not Valid.'
            )
        ),
        
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[13]|min_length[10]|xss_clean'
        ),                
        
    ),
    
    /*tr*/
    
        'addtaxreclaimlead' => array(
        
        array(
            'field' => 'firstname',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'lastname',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'valid_email' => '%s Address is not Valid.'
            )
        ),
        
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[13]|min_length[10]|xss_clean'
        ),  
    
        array(
            'field' => 'postcode',
            'label' => 'Post Code',
            'rules' => 'trim|required|regex_match[/^[A-Za-z]{1,2}[\d]{1,2}([A-Za-z])?\s?[\d][A-Za-z]{2}$/]|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'regex_match' => '%s is not Valid.'
            )
        ),
        
    ),
    /*tr*/
    
     /*updatetr*/
    
        'updatetaxreclaimlead' => array(
        
        array(
            'field' => 'firstname',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'lastname',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'valid_email' => '%s Address is not Valid.'
            )
        ),
        
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[13]|min_length[10]|xss_clean'
        ),  
    
        array(
            'field' => 'postcode',
            'label' => 'Post Code',
            'rules' => 'trim|required|regex_match[/^[A-Za-z]{1,2}[\d]{1,2}([A-Za-z])?\s?[\d][A-Za-z]{2}$/]|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'regex_match' => '%s is not Valid.'
            )
        ),
        
    ),
    /*tr*/
    
    'updateLead' => array(
        
        array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'lastName',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean'
        ),        

    array(
            'field' => 'postcode',
            'label' => 'Post Code',
//            'rules' => 'trim|required|regex_match[/^([A-PR-UWYZ0-9][A-HK-Y0-9][AEHMNPRTVXY0-9]?[ABEHMNPRVWXY0-9]? {1,2}[0-9][ABD-HJLN-UW-Z]{2}|GIR 0AA)$/]|xss_clean',
            'rules' => 'trim|required|regex_match[/^[A-Za-z]{1,2}[\d]{1,2}([A-Za-z])?\s?[\d][A-Za-z]{2}$/]|xss_clean',
//            'rules' => 'trim|required|regex_match[/^[a-zA-Z]{1,2}([0-9]{1,2}|[0-9][a-zA-Z])\s*[0-9][a-zA-Z]{2}$/]|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'regex_match' => '%s is not Valid.'
            )
        ),

        array(
            'field' => 'contactphone',
            'label' => 'Permission to Phone',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'valid_email' => '%s Address is not Valid.'
            )
        ),
        array(
            'field' => 'contactsms',
            'label' => 'Permission to SMS',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactemail',
            'label' => 'Permission to Email',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactmail',
            'label' => 'Permission to Mail',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contacttime',
            'label' => 'Preferred time of Contact',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
//        array(
//            'field' => 'PreferredTimetoCall',
//            'label' => 'Preferred Time to Call',
//            'rules' => 'trim|required|xss_clean',
//            'errors' => array(
//                'required'                => '%s is Required field.',
//            )            
//        ),
//        


        
    ),
    
        'updateEnergyLead' => array(
        
        array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'lastName',
            'label' => 'Last Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
        array(
            'field' => 'phone1',
            'label' => 'Phone Number',
            'rules' => 'trim|required|max_length[13]|min_length[10]|xss_clean'
        ),        

        array(
            'field' => 'contactphone',
            'label' => 'Permission to Phone',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactsms',
            'label' => 'Permission to SMS',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactemail',
            'label' => 'Permission to Email',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactmail',
            'label' => 'Permission to Mail',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contacttime',
            'label' => 'Preferred time of Contact',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
    ),
    
    'updateChangeLeadStatus' => array(
        
//        array(
//            'field' => 'firstName',
//            'label' => 'First Name',
//            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
//            'errors' => array(
//                'required' => '%s is Required field.',
//                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
//            )
//        ),
//        
//        array(
//            'field' => 'lastName',
//            'label' => 'Last Name',
//            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
//            'errors' => array(
//                'required' => '%s is Required field.',
//                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
//            )
//        ),
//        
//        array(
//            'field' => 'phone1',
//            'label' => 'Phone Number',
//            'rules' => 'trim|required|max_length[11]|min_length[10]|xss_clean'
//        ),        
        
        array(
            'field' => 'status',
            'label' => 'Lead Status',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
                'is_natural_no_zero'      => '%s is Required field.',
            )            
        ),                
        
    ),
    
    'addLeadsBatch' => array(
        
        array(
            'field' => 'batchName',
            'label' => 'Batch Name',
            'rules' => 'trim|required|max_length[30]|min_length[3]|alpha_numeric_spaces|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric_spaces' => 'Only letters, Numbers and space are allowed, Special Characters are not allowed for %s.'
            )
        ),
        
    ),
    
    'addLeadNote' => array(
        
        array(
            'field' => 'note',
            'label' => 'Note',
            'rules' => 'trim|required|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.'
            )
            
        ),
        
    ),
    
    'updateLeadNote' => array(
        
        array(
            'field' => 'note',
            'label' => 'Note',
            'rules' => 'trim|required|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.'
            )
            
        ),
    ),
  
    'addCampaign' => array(
        
        array(
            'field' => 'campaign_name',
            'label' => 'Campaign Name',
            'rules' => 'trim|required|is_unique[campaign.campaign_name]|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'is_unique' => '%s is already exists.'
            )
            
        ),
        
        array(
            
            'field' => 'campaign_short_name',
            'label' => 'Campaign Short Name',
            'rules' => 'trim|required|is_unique[campaign.campaign_short_name]|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'is_unique' => '%s is already exists.'
            )
            
        ),
        
        array(
            
            'field' => 'status',
            'label' => 'Campaign Status',
            'rules' => 'trim|required|alpha_numeric|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric' => '%s is Required field.'
            )
            
        ),
        
        
    ),
    
    'updateCampaign' => array(
        
        array(
            'field' => 'campaign_name',
            'label' => 'Campaign Name',
            'rules' => 'trim|required|callback_campaignNameIsUnique|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'campaignNameIsUnique' => '%s is already exists.'
            )
            
        ),
        
        array(
            
            'field' => 'campaign_short_name',
            'label' => 'Campaign Short Name',
            'rules' => 'trim|required|callback_campaignShortNameIsUnique|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'campaignShortNameIsUnique' => '%s is already exists.'
            )
            
        ),
        
        array(
            
            'field' => 'status',
            'label' => 'Campaign Status',
            'rules' => 'trim|required|alpha_numeric|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric' => '%s is Required field.'
            )
            
        ),
        
        
    ),
    
    'updateLeadUser' => array(
        
        array(
            
            'field' => 'users',
            'label' => 'Users',
            'rules' => 'trim|required|alpha_numeric|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric' => '%s is Required field.'
            )
            
        ),
        
    ),
  
    'createUserGroup' => array(
        
        array(
            
            'field' => 'user_group_name',
            'label' => 'User Group Name',
            'rules' => 'trim|required|is_unique[user_groups.group_name]|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric' => '%s is Required field.'
            )
            
        ),
        
        array(
            
            'field' => 'company',
            'label' => 'Company',
            'rules' => 'trim|required|alpha_numeric|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric' => '%s is Required field.'
            )
            
        ),
        
        array(
            
            'field' => 'users[]',
            'label' => 'Users',
            'rules' => 'trim|required|alpha_numeric|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric' => '%s is Required field.'
            )
            
        ),
        
        array(
            
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|alpha_numeric|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric' => '%s is Required field.'
            )
            
        ),
        
    ),
    
    'updateUserGroup' => array(
        
        array(
            
            'field' => 'user_group_name',
            'label' => 'User Group Name',
            'rules' => 'trim|required|callback_groupNameIsUnique|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric' => '%s is Required field.'
            )
            
        ),
        
        array(
            
            'field' => 'company',
            'label' => 'Company',
            'rules' => 'trim|required|alpha_numeric|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric' => '%s is Required field.'
            )
            
        ),
        
        array(
            
            'field' => 'users[]',
            'label' => 'Users',
            'rules' => 'trim|required|alpha_numeric|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric' => '%s is Required field.'
            )
            
        ),
        
        array(
            
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required|alpha_numeric|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.',
                'alpha_numeric' => '%s is Required field.'
            )
            
        ),
        
    ),
    
    
     'addHRmodule' => array(
        
         array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'valid_email' => '%s Address is not Valid.'
            )
        ),
         array(
            'field' => 'contactphone',
            'label' => 'Permission to Phone',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactsms',
            'label' => 'Permission to SMS',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactemail',
            'label' => 'Permission to Email',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactmail',
            'label' => 'Permission to Mail',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contacttime',
            'label' => 'Preferred time of Contact',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        
    ),
  'EditHRmodule' => array(
        
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array(
                'required' => '%s is Required field.',
                'valid_email' => '%s Address is not Valid.'
            )
        ),
      array(
            'field' => 'contactphone',
            'label' => 'Permission to Phone',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactsms',
            'label' => 'Permission to SMS',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactemail',
            'label' => 'Permission to Email',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contactmail',
            'label' => 'Permission to Mail',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
        array(
            'field' => 'contacttime',
            'label' => 'Preferred time of Contact',
            'rules' => 'trim|required|xss_clean',
            'errors' => array(
                'required'                => '%s is Required field.',
            )            
        ),
        
    ),
     'sendemail' => array(
        
        array(
            'field' => 'usr_email',
            'label' => 'Email',
            'rules' => 'trim|required|xss_clean',
            
            'errors' => array(
                'required' => '%s is Required field.'
            )
            
        ),
    ),
    
    
);
?>