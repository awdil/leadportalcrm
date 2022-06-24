<?php 

/*
echo "<pre>";
print_r($getleadData[0]);
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
            <h4 class="page-title">View Solicitor</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Solicitors</a></li>
                <li class="active">View Solicitor</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">VIEW SOLICITORS</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/editLead/'); echo!empty($getleadData[0]->lead_id) ? $getleadData[0]->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-pencil"></i> Edit Solicitor</a>
                            <a href="<?php echo base_url('Mod/manageSolicitor'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Manage Solicitors</a>                    
                        </div>
                    </div>

                </div>


                <hr style="margin-bottom: 0; margin-top: 5px;">

                <div class="table-responsive" style="padding: 25px 15px 5px 15px">
                    <table style="border: 1px solid #e4e7ea" class="table table-bordered table-hover table-striped" >
                        <tbody>
                            <tr>
                                <th>Tittle</th>
                                <td><?php echo!empty($getleadData[0]->title) ? $getleadData[0]->title : ''; ?></td>                                                                                                                
                            </tr>
                            <tr>
                                <th>First Name</th>
                                <td><?php echo!empty($getleadData[0]->first_name) ? $getleadData[0]->first_name : ''; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Last Name</th>
                                <td><?php echo!empty($getleadData[0]->last_name) ? $getleadData[0]->last_name : ''; ?></td>
                            </tr>
                            <tr>
                                <th>job Tittle </th>
                                <td><?php echo!empty($getleadData[0]->job_title) ? $getleadData[0]->job_title : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Phone 1 </th>
                                <td><?php echo!empty($getleadData[0]->phone_1) ? $getleadData[0]->phone_1 : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Phone 2 </th>
                                <td><?php echo!empty($getleadData[0]->phone_2) ? $getleadData[0]->phone_2 : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Email  </th>
                                <td><?php echo!empty($getleadData[0]->email) ? $getleadData[0]->email : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Address </th>
                                <td><?php echo!empty($getleadData[0]->address) ? $getleadData[0]->address : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Address 2 </th>
                                <td><?php echo!empty($getleadData[0]->address_2) ? $getleadData[0]->address_2 : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Address 3</th>
                                <td><?php echo!empty($getleadData[0]->address_3) ? $getleadData[0]->address_3 : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Towncity </th>
                                <td><?php echo!empty($getleadData[0]->town_city) ? $getleadData[0]->town_city : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Postcode </th>
                                <td><?php echo!empty($getleadData[0]->post_code) ? $getleadData[0]->post_code : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Date of Birth </th>
                                <td><?php echo!empty($getleadData[0]->date_of_birth) ? $getleadData[0]->date_of_birth : ''; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Partner Type</th>
                                <td><?php echo!empty($getleadData[0]->med_neg_only) ? $getleadData[0]->med_neg_only : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Campaign Name </th>
                                <td><?php echo!empty($getleadData[0]->fi_pen_other_income) ? $getleadData[0]->fi_pen_other_income : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Portal Logins </th>
                                <td><?php echo!empty($getleadData[0]->ec_meternumber) ? $getleadData[0]->ec_meternumber : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Portal Password </th>
                                <td><?php echo!empty($getleadData[0]->client_password) ? $getleadData[0]->client_password : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Rate Agreed for RTA </th>
                                <td><?php echo!empty($getleadData[0]->fi_net_amunt) ? $getleadData[0]->fi_net_amunt : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Rate agreed for Non rta </th>
                                <td><?php echo!empty($getleadData[0]->fi_tax_takenoff61) ? $getleadData[0]->fi_tax_takenoff61 : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Rate agreed to minors </th>
                                <td><?php echo!empty($getleadData[0]->fi_eligble_tax_credit) ? $getleadData[0]->fi_eligble_tax_credit : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Agreed payment terms </th>
                                <td><?php echo!empty($getleadData[0]->fi_tax_tk_63) ? $getleadData[0]->fi_tax_tk_63 : ''; ?></td>
                            </tr>
                            <tr>
                                <th>MOJ Regulated </th>
                                <td><?php echo!empty($getleadData[0]->accident_circumstances) ? $getleadData[0]->accident_circumstances : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Skyp ID </th>
                                <td><?php echo!empty($getleadData[0]->ec_meternumber) ? $getleadData[0]->ec_meternumber : ''; ?></td>
                            </tr><tr>
                                <th>Telephone Number </th>
                                <td><?php echo!empty($getleadData[0]->ec_namekey) ? $getleadData[0]->ec_namekey : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Number of Agents </th>
                                <td><?php echo!empty($getleadData[0]->ec_servicezip) ? $getleadData[0]->ec_servicezip : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Account Number </th>
                                <td><?php echo!empty($getleadData[0]->ec_servicecity) ? $getleadData[0]->ec_servicecity : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Bank Name </th>
                                <td><?php echo!empty($getleadData[0]->ec_servicestate) ? $getleadData[0]->ec_servicestate : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Bank Address </th>
                                <td><?php echo!empty($getleadData[0]->ec_serviceaddress) ? $getleadData[0]->ec_serviceaddress : ''; ?></td>
                            </tr><tr>
                                <th>IBAN Number </th>
                                <td><?php echo!empty($getleadData[0]->ec_servicepsuite) ? $getleadData[0]->ec_servicepsuite : ''; ?></td>
                            </tr>
                            <tr>
                                <th>SWIFT Code </th>
                                <td><?php echo!empty($getleadData[0]->ec_billingzip) ? $getleadData[0]->ec_billingzip : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Recipient Address </th>
                                <td><?php echo!empty($getleadData[0]->ec_billingstate) ? $getleadData[0]->ec_billingstate : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Recipient Name </th>
                                <td><?php echo!empty($getleadData[0]->ec_billingcity) ? $getleadData[0]->ec_billingcity : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Live Date </th>
                                <td><?php echo!empty($getleadData[0]->fi_icome_b_expnse) ? $getleadData[0]->fi_icome_b_expnse : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Notes </th>
                                <td><?php echo!empty($getleadData[0]->fi_expne_allowble_f_tx) ? $getleadData[0]->fi_expne_allowble_f_tx : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Details </th>
                                <td><?php echo!empty($getleadData[0]->ec_budgetbilling) ? $getleadData[0]->ec_budgetbilling : ''; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Contact Phone </th>
                                <td><?php echo!empty($getleadData[0]->contact_phone) ? $getleadData[0]->contact_phone : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Contact SMS </th>
                                <td><?php echo!empty($getleadData[0]->contact_sms) ? $getleadData[0]->contact_sms : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Contact Email </th>
                                <td><?php echo!empty($getleadData[0]->contact_email) ? $getleadData[0]->contact_email : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Contact Mail </th>
                                <td><?php echo!empty($getleadData[0]->contact_mail) ? $getleadData[0]->contact_mail : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Contact Fax </th>
                                <td><?php echo!empty($getleadData[0]->contact_fax) ? $getleadData[0]->contact_fax : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Contact Time </th>
                                <td><?php echo!empty($getleadData[0]->contact_time) ? $getleadData[0]->contact_time : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Created At  </th>
                                <td><?php echo!empty($getleadData[0]->created_at) ? $getleadData[0]->created_at : ''; ?></td>
                            </tr>
                            <tr>
                                <th>FLG  CCJ</th>
                                <td><?php echo!empty($getleadData[0]->flg_ccj_id) ? $getleadData[0]->flg_ccj_id : ''; ?></td>
                            </tr>
                            <tr>
                                <th>FLG ROS </th>
                                <td><?php echo!empty($getleadData[0]->flg_ros_id) ? $getleadData[0]->flg_ros_id : ''; ?></td>
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
