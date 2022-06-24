<?php 

/*
echo "<pre>";
print_r($getleadData[0]);
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
            <h4 class="page-title">View MIB</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">MIBs</a></li>
                <li class="active">View MIB</li>
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
                        <div class="panel-heading" style="padding: 28px 0px 13px 30px">VIEW MIB</div>
                    </div>

                    <div class="col-md-6 hidden-xs">
                        <div style="text-align: right; margin-right: 15px ">                        
                            <a href="<?php echo base_url('Mod/editLead/'); echo!empty($getleadData[0]->lead_id) ? $getleadData[0]->lead_id : ''; ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-pencil"></i> Edit MIB</a>
                            <a href="<?php echo base_url('Mod/manageLeads'); ?>" style="margin-top: 20px" class="btn btn-info btn-rounded" ><i class="fa fa-plus"></i> Manage Leas</a>                    
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
                                <th>Has the damage been repaired or replaced?</th>
                                <td><?php echo!empty($getleadData[0]->number_of_passengers) ? $getleadData[0]->number_of_passengers : ''; ?></td>
                            </tr>
                            <tr>   
                                <th> Estimated cost of repair or replacement or if repaired, provide the Repair or replacement cost.</th>
                                <td><?php echo!empty($getleadData[0]->passenger_1) ? $getleadData[0]->passenger_1 : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Was the damaged property covered by an insurance policy? </th>
                                <td><?php echo!empty($getleadData[0]->passenger_1_relationship) ? $getleadData[0]->passenger_1_relationship : ''; ?></td>
                            </tr>
                            <tr>
                                <th>The insurer details for the damaged property, Name of insurer, Policy number or reference, Phone Number, Email address.</th>
                                <td><?php echo!empty($getleadData[0]->passenger_1_date_of_birth) ? $getleadData[0]->passenger_1_date_of_birth : ''; ?></td>
                            </tr>
                            <tr> 
                                <th>Would your client like to add any other losses to their claim? </th>
                                <td><?php echo!empty($getleadData[0]->passenger_1_position_in_car) ? $getleadData[0]->passenger_1_position_in_car : ''; ?></td>
                            </tr>
                            <tr>
                                <th> Do you have the driver's details? </th>
                                <td><?php echo!empty($getleadData[0]->passenger_2) ? $getleadData[0]->passenger_2 : ''; ?></td>
                            </tr>
                            <tr>  
                                <th>Full Name, Phone Number, Email Address, Full Address </th>
                                <td><?php echo!empty($getleadData[0]->passenger_2_relationship) ? $getleadData[0]->passenger_2_relationship : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Are additional details held by someone else? </th>
                                <td><?php echo!empty($getleadData[0]->passenger_2_date_of_birth) ? $getleadData[0]->passenger_2_date_of_birth : ''; ?></td>
                            </tr>
                            <tr>  
                                <th>Does you believe that the driver of the vehicle differs from its owner? </th>
                                <td><?php echo!empty($getleadData[0]->passenger_2_position_in_car) ? $getleadData[0]->passenger_2_position_in_car : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Make, Model, Colour of Vehicle </th>
                                <td><?php echo!empty($getleadData[0]->passenger_3) ? $getleadData[0]->passenger_3 : ''; ?></td>
                            </tr>
                            <tr>  
                                <th>Damaged areas of the vehicle </th>
                                <td><?php echo!empty($getleadData[0]->passenger_3_relationship) ? $getleadData[0]->passenger_3_relationship : ''; ?></td>
                            </tr>
                            <tr>
                                <th> Are you aware of an insurer for this vehicle?</th>
                                <td><?php echo!empty($getleadData[0]->passenger_3_date_of_birth) ? $getleadData[0]->passenger_3_date_of_birth : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Name of Insuer. Policy Number or claim reference number, Insurer phone number</th>
                                <td><?php echo!empty($getleadData[0]->passenger_3_position_in_car) ? $getleadData[0]->passenger_3_position_in_car : ''; ?></td>
                            </tr>
                            <tr>  
                                <th>Enter a description of the accident events (Accident Cricumstances)</th>
                                <td><?php echo!empty($getleadData[0]->passenger_4) ? $getleadData[0]->passenger_4 : ''; ?></td>
                            </tr>
                            <tr>  
                                <th>Country of Accident </th>
                                <td><?php echo!empty($getleadData[0]->passenger_4_relationship) ? $getleadData[0]->passenger_4_relationship : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Exact Location of accident (Must have full address)</th>
                                <td><?php echo!empty($getleadData[0]->passenger_4_date_of_birth) ? $getleadData[0]->passenger_4_date_of_birth : ''; ?></td>
                            </tr>
                            <tr>
                                <th>How was you involved in the accident?</th>
                                <td><?php echo!empty($getleadData[0]->passenger_4_position_in_car) ? $getleadData[0]->passenger_4_position_in_car : ''; ?></td>
                            </tr>
                            <tr>  
                                <th>Full details of all Witnesses, Full name, Phone number, Email address, Address & Postcode</th>
                                <td><?php echo!empty($getleadData[0]->passenger_5) ? $getleadData[0]->passenger_5 : ''; ?></td>
                            </tr>
                            <tr>
                                <th> Do you know this witness before the accident? </th>
                                <td><?php echo!empty($getleadData[0]->passenger_5_relationship) ? $getleadData[0]->passenger_5_relationship : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Describe your client's relationship with this person </th>
                                <td><?php echo!empty($getleadData[0]->passenger_5_date_of_birth) ? $getleadData[0]->passenger_5_date_of_birth : ''; ?></td>
                            </tr>
                            
                              
                            <tr>
                                <th>What Injuries did you suffer?  </th>
                                <td><?php echo!empty($getleadData[0]->passenger_5_position_in_car) ? $getleadData[0]->passenger_5_position_in_car : ''; ?></td>
                            </tr>
                            <tr>
                                <th> Did you seek medical attention?  </th>
                                <td><?php echo!empty($getleadData[0]->passenger_6) ? $getleadData[0]->passenger_6 : ''; ?></td>
                            </tr>
                            <tr>
                                <th>What Medication or treatment did you undergo  </th>
                                <td><?php echo!empty($getleadData[0]->passenger_6_relationship) ? $getleadData[0]->passenger_6_relationship : ''; ?></td>
                            </tr>
                            <tr>
                                <th> Did you attend a Hospit  </th>
                                <td><?php echo!empty($getleadData[0]->passenger_6_date_of_birth) ? $getleadData[0]->passenger_6_date_of_birth : ''; ?></td>
                            </tr>
                            <tr>
                                <th> GP Details, Address and contact details   </th>
                                <td><?php echo!empty($getleadData[0]->passenger_6_position_in_car) ? $getleadData[0]->passenger_6_position_in_car : ''; ?></td>
                            </tr>
                            <tr>   
                                <th> When did the hire period end?  </th>
                                <td><?php echo!empty($getleadData[0]->tp_insurer_details_name) ? $getleadData[0]->tp_insurer_details_name : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Enter a description of the accident events (Accident Cricumstances)  </th>
                                <td><?php echo!empty($getleadData[0]->accident_circumstances) ? $getleadData[0]->accident_circumstances : ''; ?></td>
                            </tr>
                            <tr>  
                                <th>What is your Employment status?  </th>
                                <td><?php echo!empty($getleadData[0]->client_status_in_accident) ? $getleadData[0]->client_status_in_accident : ''; ?></td>
                            </tr>
                            <tr> 
                                <th>Is the cost of the damage to your vehicle likely  </th>
                                <td><?php echo!empty($getleadData[0]->are_you_a_litigation_friend) ? $getleadData[0]->are_you_a_litigation_friend : ''; ?></td>
                            </tr>
                            <tr> 
                                <th> How many days were they absent from work?  </th>
                                <td><?php echo!empty($getleadData[0]->replacement_invoice_number) ? $getleadData[0]->replacement_invoice_number : ''; ?></td>
                            </tr>
                            <tr>
                                <th> Full details of all Witnesses, Full name, Phone number, Email address, Address & Postcode </th>
                                <td><?php echo!empty($getleadData[0]->if_litigation_friend_name_and_date_of_birth_of_the_claimant) ? $getleadData[0]->if_litigation_friend_name_and_date_of_birth_of_the_claimant : ''; ?></td>
                            </tr>
                            <tr>  
                                <th>Are any witness details known?  </th>
                                <td><?php echo!empty($getleadData[0]->what_injuries_did_you_suffer) ? $getleadData[0]->what_injuries_did_you_suffer : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Did you seek medical attention?  </th>
                                <td><?php echo!empty($getleadData[0]->did_you_seek_medical_attention) ? $getleadData[0]->did_you_seek_medical_attention : ''; ?></td>
                            </tr>
                            <tr>   
                                <th> Tell us about the damaged property </th>
                                <td><?php echo!empty($getleadData[0]->who_do_you_blame_for_the_accident) ? $getleadData[0]->who_do_you_blame_for_the_accident : ''; ?></td>
                            </tr>
                            <tr> 
                                <th> Registration Number of your Vehicle or the Vehicle you were  </th>
                                <td><?php echo!empty($getleadData[0]->client_car_registration) ? $getleadData[0]->client_car_registration : ''; ?></td>
                            </tr>
                            <tr>   
                                <th>TP Vehicle Registration  </th>
                                <td><?php echo!empty($getleadData[0]->tp_car_registration) ? $getleadData[0]->tp_car_registration : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Make and model of vehicle  </th>
                                <td><?php echo!empty($getleadData[0]->tp_car_make_model) ? $getleadData[0]->tp_car_make_model : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Are you still off work ?  </th>
                                <td><?php echo!empty($getleadData[0]->have_you_claimed_before) ? $getleadData[0]->have_you_claimed_before : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Confirm your total loss of earnings due to your absence from work</th>
                                <td><?php echo!empty($getleadData[0]->do_you_wish_to_make_a_claim) ? $getleadData[0]->do_you_wish_to_make_a_claim : ''; ?></td>
                            </tr>
                            <tr>
                                <th>  NI Number </th>
                                <td><?php echo!empty($getleadData[0]->ni_number) ? $getleadData[0]->ni_number : ''; ?></td>
                            </tr>
                            <tr> 
                                <th>  Did the Police attend the accident? </th>
                                <td><?php echo!empty($getleadData[0]->were_the_police_involved) ? $getleadData[0]->were_the_police_involved : ''; ?></td>
                            </tr>
                            <tr> 
                                <th> Is there anything else you want to tell us about the accident location?  </th>
                                <td><?php echo!empty($getleadData[0]->what_was_the_exact_location_of_the_accident) ? $getleadData[0]->what_was_the_exact_location_of_the_accident : ''; ?></td>
                            </tr>
                            <tr>
                                <th>What are you claiming for? Damage to your vehicle, Loss of earnings, Damage to property other than a vehicle, Hire Vehicle, Excess  </th>
                                <td><?php echo!empty($getleadData[0]->what_was_the_weather_like) ? $getleadData[0]->what_was_the_weather_like : ''; ?></td>
                            </tr>
                            <tr> 
                                <th>Excess Amount  </th>
                                <td><?php echo!empty($getleadData[0]->client_password) ? $getleadData[0]->client_password : ''; ?></td>
                            </tr>
                            <tr> 
                                <th>Has the accident been reported to the Police?  </th>
                                <td><?php echo!empty($getleadData[0]->was_accident_reported_or_recorded_in_the_accident_book) ? $getleadData[0]->was_accident_reported_or_recorded_in_the_accident_book : ''; ?></td>
                            </tr>
                            <tr>
                                <th>Name of company providing hire  </th>
                                <td><?php echo!empty($getleadData[0]->employers_name_address_telephone_number) ? $getleadData[0]->employers_name_address_telephone_number : ''; ?></td>
                            </tr>
                            <tr>   
                                <th>Is the hire ongoing?  </th>
                                <td><?php echo!empty($getleadData[0]->credit_hire_or_vehicle_replacement) ? $getleadData[0]->credit_hire_or_vehicle_replacement : ''; ?></td>
                            </tr>
                             <tr>
                                <th> When did the hire period end?  </th>
                                <td><?php echo!empty($getleadData[0]->is_injury_on_going_injury_physio) ? $getleadData[0]->is_injury_on_going_injury_physio : ''; ?></td>
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
