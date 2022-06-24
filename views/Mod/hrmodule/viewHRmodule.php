<?php 

/*
echo "<pre>";
print_r($humanresources);
die();
*/

?>


<style>
    
    tr td{
        text-align: left;
    }
    
</style>

<div class="container-fluid">

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">View HR</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">HR</a></li>
                <li class="active">View HR</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <!-- ============================================================== -->
    <!-- Demo table -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">VIEW HR</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/editHumanResource/'); echo!empty($humanresources->id) ? $humanresources->id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-pencil"></i> Edit HR</a>
                            <a href="<?php echo base_url('Mod/manageHumanResource'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Manage HR</a>                    
                        </div>
                    </div>
                </div>
            <hr style="margin-bottom: 0; margin-top: 5px;">
                <div class="table-responsive" style="padding: 25px 15px 5px 15px"> 
                    <table style="border: 1px solid #e4e7ea" class="table table-bordered table-hover table-striped" > 
                        <tbody> 
                            <tr> 
                                <th>Tittle </th> 
                                <td><?php echo!empty($humanresources->tittle ) ? $humanresources->tittle  : ''; ?></td> 
                            </tr> 
                            <tr> 
                                <th> Full Name </th> 
                                <td><?php echo!empty($humanresources->full_name ) ? $humanresources->full_name  : ''; ?>
                                </td> 
                            </tr> 
                            <tr> 
                                <th>Phone1 </th> 
                                <td><?php echo!empty($humanresources->phone1 ) ? $humanresources->phone1  : ''; ?> 
                            </tr> 
                            <tr> 
                                <th>Phone2 </th> 
                                <td><?php echo!empty($humanresources->phone2 ) ? $humanresources->phone2  : ''; ?></td> 
                            </tr>
                            <tr> 
                                <th>Email </th> 
                                <td><?php echo!empty($humanresources->email ) ? $humanresources->email  : ''; ?></td> 
                            </tr> 
                            <tr> 
                                <th>Address </th> 
                                <td><?php echo!empty($humanresources->address ) ? $humanresources->address  : ''; ?></td> 
                            </tr> 
                           <tr> 
                                <th>Address 1 </th> 
                                <td><?php echo!empty($humanresources->addres2 ) ? $humanresources->addres2  : ''; ?></td> 
                            </tr> 
                            <tr> 
                                <th>Address 2</th> 
                                <td><?php echo!empty($humanresources->address3 ) ? $humanresources->address3  : ''; ?></td> 
                            </tr> 
                            <tr> 
                                <th>Towncity</th> 
                                <td><?php echo!empty($humanresources->towncity ) ? $humanresources->towncity  : ''; ?></td> 
                            </tr> 
                            <tr> 
                                <th>Company </th> 
                                <td><?php echo!empty($humanresources->company ) ? $humanresources->company  : ''; ?>
                                </td> 
                            </tr> 
                            <tr> 
                                <th> Status</th> 
                                <td><?php echo!empty($humanresources->status ) ? 'Active' : 'In-Active'; ?></td> 
                            </tr> 
                            <tr> 
                                <th> postcode</th> 
                                <td><?php echo!empty($humanresources->postcode ) ? $humanresources->postcode  : ''; ?></td> 
                            </tr>
                            <tr> 
                                <th> date of birth</th> 
                                <td><?php echo!empty($humanresources->dateofbirth ) ? $humanresources->dateofbirth  : ''; ?></td> 
                            </tr> 
                            <tr> 
                                <th> contact phone</th> 
                                <td><?php echo!empty($humanresources->contactphone ) ? $humanresources->contactphone  : ''; ?>
                                </td> 
                            </tr> 
                            <tr> 
                                <th> contact sms</th> 
                                <td><?php echo!empty($humanresources->contactsms ) ? $humanresources->contactsms  : ''; ?>
                            </tr> 
                            <tr> 
                                <th> contact email</th> 
                                <td><?php echo!empty($humanresources->contactemail ) ? $humanresources->contactemail  : ''; ?></td> 
                            </tr>
                            <tr> 
                                <th> contact email</th> 
                                <td><?php echo!empty($humanresources->contactmail ) ? $humanresources->contactmail  : ''; ?></td> 
                            </tr> 
                            <tr> 
                                <th> contact time</th> 
                                <td><?php echo!empty($humanresources->contacttime ) ? $humanresources->contacttime  : ''; ?>
                                </td> 
                            </tr> 
                            <tr> 
                                <th> Employment Start Date</th> 
                                <td><?php echo!empty($humanresources->EmploymentStartDate ) ? $humanresources->EmploymentStartDate  : ''; ?>
                            </tr> 
                            <tr> 
                                <th> Center Name</th> 
                                <td><?php echo!empty($humanresources->CentreName ) ? $humanresources->CentreName  : ''; ?></td> 
                            </tr>
                            <tr> 
                                <th> Notes</th> 
                                <td><?php echo!empty($humanresources->Notes ) ? $humanresources->Notes  : ''; ?></td> 
                            </tr> 
                            <tr> 
                                <th> Employment Contrcat Type</th> 
                            <td><?php echo!empty($humanresources->Employmentcontrcattype ) ? $humanresources->Employmentcontrcattype  : ''; ?>
                                </td> 
                            </tr> 
                            <tr> 
                                <th> Annual Salary</th> 
                                <td><?php echo!empty($humanresources->AnnualSalary ) ? $humanresources->AnnualSalary  : ''; ?>
                            </tr> 
                            <tr> 
                                <th> Next of KIn</th> 
                                <td><?php echo!empty($humanresources->NextofKIn ) ? $humanresources->NextofKIn  : ''; ?></td> 
                            </tr>
                            <tr> 
                                <th> Next of Kin Telephonenumber</th> 
                                <td><?php echo!empty($humanresources->NextofKinTelephonenumber ) ? $humanresources->NextofKinTelephonenumber  : ''; ?></td> 
                            </tr> 
                            <tr> 
                                <th> Next of Kin Relationship</th> 
                                <td><?php echo!empty($humanresources->NextofKinRelationship ) ? $humanresources->NextofKinRelationship  : ''; ?>
                                </td> 
                            </tr> 
                            <tr> 
                                <th>Emergency Contact </th> 
                                <td><?php echo!empty($humanresources->EmergencyContact ) ? $humanresources->EmergencyContact  : ''; ?>
                            </tr> 
                            <tr> 
                                <th> Emergency Contact Relationship</th> 
                                <td><?php echo!empty($humanresources->EmergencyContactRelationship ) ? $humanresources->EmergencyContactRelationship  : ''; ?></td> 
                            </tr>
                            <tr> 
                                <th> GP Details</th> 
                                <td><?php echo!empty($humanresources->GPDetails ) ? $humanresources->GPDetails  : ''; ?></td> 
                            </tr> 
                            <tr> 
                                <th> BankName</th> 
                                <td><?php echo!empty($humanresources->BankName ) ? $humanresources->BankName  : ''; ?>
                                </td> 
                            </tr> 
                            <tr> 
                                <th> Bank Account Number</th> 
                                <td><?php echo!empty($humanresources->BankAccountNumber ) ? $humanresources->BankAccountNumber  : ''; ?>
                            </tr> 
                            <tr> 
                                <th> Bank Sort Code</th> 
                                <td><?php echo!empty($humanresources->BankSortCode ) ? $humanresources->BankSortCode  : ''; ?></td> 
                            </tr>
                            <tr> 
                                <th> National Insurance Number</th> 
                                <td><?php echo!empty($humanresources->NationalInsuranceNumber ) ? $humanresources->NationalInsuranceNumber  : ''; ?></td> 
                            </tr> 
                            <tr> 
                                <th> Current Tax Code</th> 
                                <td><?php echo!empty($humanresources->CurrentTaxCode ) ? $humanresources->CurrentTaxCode  : ''; ?>
                                </td> 
                            </tr> 
                           
                            <tr> 
                                <th> created at</th> 
                                <td><?php echo!empty($humanresources->created_at ) ? $humanresources->created_at  : ''; ?></td> 
                            </tr>
                            <tr> 
                                <th> updated at</th> 
                                <td><?php echo!empty($humanresources->updated_at ) ? $humanresources->updated_at  : ''; ?></td> 
                            </tr>
                            <tr> 
                                <td>Front Side</td>
                                <th><img src="<?php echo base_url('uploads/HR-Documents/') . $humanresources->CNICFrontSide; ?>" alt=" Agreement"></th> 
                                 
                            </tr>
                            <tr> 
                                <td>Back Side</td>
                                <td><img src="<?php echo base_url('uploads/HR-Documents/') . $humanresources->CNICBackSide; ?>" alt=" Agreement"></td> 
                            </tr>
                            <tr> 
                                <th> 
                                    <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/'). $humanresources->Other_doc2; ?>"> Document File 2</a>
                                </th> 
                                <td>
                                <a target="_blank" href="<?php echo base_url('uploads/OTHERFILES/') . $humanresources->Other_doc2; ?>"> Document File 2</a>
                                </td> 
                            </tr>
                        </tbody> 
                    </table> 
                </div>
            <hr>
            <div style='text-align: center; margin-top: -16px' id='pagination'></div>
        </div>
    </div>
</div>




</div>
<!-- /.container-fluid -->
