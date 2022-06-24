<!-- Teaser start -->
    <section id="teaser">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-xs-12 pull-left">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides start -->
              <div class="carousel-inner">
                <div class="item active">
                  <h1 class="title">HAD AN ACCIDENT?
                    <span class="subtitle">Need Courtesy Car?</span></h1>
                    <div class="car-img">
                      <img src="<?php echo base_url('public/siteAssets/');?>img/car1.png" class="img-responsive" alt="car1">
                    </div>
                  </div>
                  <div class="item">
                    <h1 class="title">LOOKING FOR CREDIT HIRE?
                      <span class="subtitle">Get a car on one call now</span></h1>
                      <div class="car-img">
                        <img src="<?php echo base_url('public/siteAssets/');?>img/car2.png" class="img-responsive" alt="car1">
                      </div>
                    </div>
                  </div>
                  <!-- Wrapper for slides end -->

                  <!-- Slider Controls start -->
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                  <!-- Slider Controls end -->
                </div>
              </div>
              <div class="col-md-5 col-xs-12 pull-right">
                <div class="reservation-form-shadow">

                  <form action="#" method="post" name="car-select-form" id="car-select-form">

                    <div class="alert alert-danger hidden" id="car-select-form-msg">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <strong>Note:</strong> All fields required!
                    </div>

                    <!-- Car select start -->
                    <div class="styled-select-car">
                      <select name="car-select" id="car-select">
                        <option value="">NATURE OF ENQUIRY</option>
                        <option value="Accident Management">Accident Management</option>
                        <option value="Credit Hire">Credit Hire</option>
                        <option value="Accident Recovery">Accident Recovery</option>
                      </select>
                    </div>
                    <!-- Car select end -->
                    <div class="form-group"> 
                        <div class="col-md-6" style="padding-left: 0px; padding-right: 2px;">
                            <input type="text" class="form-control first-name text-field" name="first-name" placeholder="YOUR FIRST NAME:"> 
                        </div>
                        <div class="col-md-6" style="padding-right: 0px; padding-left: 2px;">
                            <input type="text" class="form-control last-name text-field" name="last-name" placeholder="YOUR LAST NAME:"> 
                        </div> 
                        <div class="clearfix"></div> 
                    </div>
                   <div class="form-group"> 
                       <input type="email" class="form-control email text-field" name="email" placeholder="YOUR EMAIL:"> 
                        <div class="clearfix"></div> 
                    </div> <!-- Pick-up date/time end --> 
                    <div class="form-group"> 
                        <input type="tel" class="form-control telephone text-field" name="telephone" placeholder="ENTER TELEPHONE NUMBER:"> 
                          <div class="clearfix"></div> 
                      </div>
                    <!-- Drop-off date/time start -->
                    <div class="datetime drop-off">
                      <div class="date pull-left">
                        <div class="input-group">
                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Availability</span>
                          <input type="text" name="Availability" id="drop-off-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                        </div>
                      </div>
                      <div class="time pull-right">
                        <div class="styled-select-time">
                          <select name="drop-off-time" id="drop-off-time">
                            <option value="12:00 AM">12:00 AM</option>
                            <option value="12:30 AM">12:30 AM</option>
                            <option value="01:00 AM">01:00 AM</option>
                            <option value="01:30 AM">01:30 AM</option>
                            <option value="02:00 AM">02:00 AM</option>
                            <option value="02:30 AM">02:30 AM</option>
                            <option value="03:00 AM">03:00 AM</option>
                            <option value="03:30 AM">03:30 AM</option>
                            <option value="04:00 AM">04:00 AM</option>
                            <option value="04:30 AM">04:30 AM</option>
                            <option value="05:00 AM">05:00 AM</option>
                            <option value="05:30 AM">05:30 AM</option>
                            <option value="06:00 AM">06:00 AM</option>
                            <option value="06:30 AM">06:30 AM</option>
                            <option value="07:00 AM">07:00 AM</option>
                            <option value="07:30 AM">07:30 AM</option>
                            <option value="08:00 AM">08:00 AM</option>
                            <option value="08:30 AM">08:30 AM</option>
                            <option value="09:00 AM">09:00 AM</option>
                            <option value="09:30 AM">09:30 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="10:30 AM">10:30 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="11:30 AM">11:30 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="12:30 PM">12:30 PM</option>
                            <option value="01:00 PM">01:00 PM</option>
                            <option value="01:30 PM">01:30 PM</option>
                            <option value="02:00 PM">02:00 PM</option>
                            <option value="02:30 PM">02:30 PM</option>
                            <option value="03:00 PM">03:00 PM</option>
                            <option value="03:30 PM">03:30 PM</option>
                            <option value="04:00 PM">04:00 PM</option>
                            <option value="04:30 PM">04:30 PM</option>
                            <option value="05:00 PM">05:00 PM</option>
                            <option value="05:30 PM">05:30 PM</option>
                            <option value="06:00 PM">06:00 PM</option>
                            <option value="06:30 PM">06:30 PM</option>
                            <option value="07:00 PM">07:00 PM</option>
                            <option value="07:30 PM">07:30 PM</option>
                            <option value="08:00 PM">08:00 PM</option>
                            <option value="08:30 PM">08:30 PM</option>
                            <option value="09:00 PM">09:00 PM</option>
                            <option value="09:30 PM">09:30 PM</option>
                            <option value="10:00 PM">10:00 PM</option>
                            <option value="10:30 PM">10:30 PM</option>
                            <option value="11:00 PM">11:00 PM</option>
                            <option value="11:30 PM">11:30 PM</option>
                          </select>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- Drop-off date/time end -->

                    <input type="submit" class="submit" name="submit" value="Submit" id="checkoutModalLabel">
                  </form>

                </div>
              </div>

            </div>
          </div>
        </section>
        <div class="arrow-down"></div>

    <section id="partners" class="wow fadeIn animated" data-wow-offset="50" style="visibility: visible; animation-name: fadeIn;">
       <div class="container">
           <div class="row">
           <div class="container">
        <h3 style="color: #35b7ff; text-align: center"><b>Privacy Policy</b></h3>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>1. Background</b></h4>
                <p style="text-align: justify">Kwik Car Hire understands that your privacy is important to you and that you care about how your personal data is used. We respect and value the privacy of all our customers and stakeholders and will only collect and use personal data in ways that are described here, and in a way that is consistent with our obligations and your rights under the law.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>2. Cover?</b></h4>
               
                <p style="text-align: justify">This Privacy Information explains how we use your personal data: how it is collected, how it is held, and how it is processed. It also explains your rights under the law relating to your personal data.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>3. What is Personal Data?</b></h4>
               
                <p style="text-align: justify">Personal data is defined by the General Data Protection Regulation (EU Regulation 2016/679 ) (the “GDPR”) as ‘any information relating to an identifiable person who can be directly or indirectly identified in particular by reference to an identifier’.<br>Personal data is, in simpler terms, any information about you that enables you to be identified. Personal data covers obvious information such as your name and contact details, but it also covers less obvious information such as identification numbers, electronic location data, and other online identifiers.<br>The personal data that we use is set out in Part 5, below.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>4. What Are My Rights?</b></h4>
               
                <p style="text-align: justify">Under the GDPR, you have the following rights, which we will always work to uphold:</p>
                               
                <ol style="text-align: justify">
                    <li>The right to be informed about our collection and use of your personal data. This Privacy Notice should tell you everything you need to know, but you can always contact us to find out more or to ask any questions using the details in Part 11.</li>
                   
                    <li>The right to access the personal data we hold about you. Part 10 will tell you how to do this.</li>
                   
                    <li>The right to have your personal data rectified if any of your personal data held by us is inaccurate or incomplete. Please contact us using the details in Part 11 to find out more.</li>
                   
                    <li>The right to be forgotten, i.e. the right to ask us to delete or otherwise dispose of any of your personal data that we have. Please contact us using the details in Part 11 to find out more.</li>
                   
                    <li>The right to restrict (i.e. prevent) the processing of your personal data.</li>
                   
                    <li>The right to object to us using your personal data for a particular purpose or purposes.</li>
                   
                    <li>The right to data portability. This means that, if you have provided personal data to us directly, we are using it with your consent or for the performance of a contract, and that data is processed using automated means, you can ask us for a copy of that personal data to re-use with another service or business in many cases.</li>
                   
                    <li>Rights relating to automated decision-making and profiling we do not use your personal data in this way</li>
                </ol>
                <p style="text-align: justify">For more information about our use of your personal data or exercising your rights as outlined above, please contact us using the details provided in Part 11.<br>Further information about your rights can also be obtained from the Information Commissioner’s Office or your local Citizens Advice Bureau.<br>If you have any cause for complaint about our use of your personal data, you have the right to lodge a complaint with the Information Commissioner’s Office.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>5. What Personal Data Do You Collec?</b></h4>
               
                <p style="text-align: justify">We may collect some or all of the following personal data (this may vary according to your relationship with us:</p>
                               
                <ul style="text-align: justify">
                    <li>Name</li>
                    <li>Date of birth</li>
                    <li>Gender</li>
                    <li>NI number</li>
                    <li>Address</li>
                    <li>Email address</li>
                    <li>Telephone number</li>
                    <li>Business name</li>
                    <li>Job title</li>
                    <li>Profession</li>
                    <li>Payment information</li>
                    <li>Vehicle documentation</li>
                    <li>Bank statement</li>
                </ul>
                <p style="text-align: justify">Your personal data is obtained from the following third parties:</p>
                               
                <ul style="text-align: justify">
                    <li>Recommending agents</li>
                    <li>Claim management companies</li>
                    <li>Solicitors</li>
                    <li>Insurance Companies</li>
                </ul>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>6. How Do You Use My Personal Data?</b></h4>
               
                <p style="text-align: justify">Under the GDPR, we must always have a lawful basis for using personal data. This may be because the data is necessary for our performance of a contract with you, because you have consented to our use of your personal data, or because it is in our legitimate business interests to use it. Your personal data will be used for the following purposes:</p>
                               
                <ol style="text-align: justify">
                    <li>Internal Record Keeping</li><br>
                    <li>Recovery of the compensation for losses arisen </li><br>
                    <li>Supplying our services to you.</li><br>
                    <li>Your personal details are required for us to enter into a contract with you.</li><br>
                    <li>Communicating with you. This may include responding to emails or calls from you.</li><br>
                    <li>To pass your details to accountants, consultant and other professionals for the purpose of obtaining professional advice and complying with our contractual obligation.</li><br>
                    <li>Supplying you with information by email and post that you have opted-in to which you may unsubscribe or opt-out at any time by <a href="http://tools.google.com/dlpage/gaoptout.wls" target="_blank">http://tools.google.com/dlpage/gaoptout.wls</a></li><br>
                </ol>
                <p style="text-align: justify">With your permission, we may also use your personal data for marketing purposes, which may include contacting you by email, telephone, text message and/or post with information, news, and offers on our services. You will not be sent any unlawful marketing or spam. We will always work to fully protect your rights and comply with our obligations under the GDPR and the Privacy and Electronic Communications (EC Directive) Regulations 2003, and you will always can opt-out.<br>If at any point you wish to query any action that we take on the basis of this or wish to request ‘human intervention’ (i.e. have someone review the action themselves, rather than relying only on the automated method), the GDPR gives you the right to do so. Please contact us to find out more using the details in Part 11.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>7. How Long Will You Keep My Personal Data?</b></h4>
               
                <p style="text-align: justify">We will not keep your personal data for any longer than is necessary in light of the reason(s) for which it was first collected. Your personal data will therefore be kept for the following periods (or, where there is no fixed period, the following factors will be used to determine how long it is kept):</p>
               
                <ul>
                    <li>Up to 6 years</li>
                </ul>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>8. How and Where Do You Store or Transfer My Personal Data?</b></h4>
               
                <p style="text-align: justify">We will only store or transfer your personal data in the UK. This means that it will be fully protected under the GDPR.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>9. Do You Share My Personal Data?</b></h4>
               
                <p style="text-align: justify">We will not transfer, disclose, sell, distribute or lease your personal information to third parties other than our partners, employees and agents of Kwik Car Hire to administer any accounts, services provided to you by Kwik Car Hire now or in the future unless we have your permission or are required by law.<br>We may sometimes contract with the following third parties to supply services to you. These may include claim processing, delivery, and marketing and payment processing. In some cases, those third parties may require access to some or all your personal data that we hold.</p>
               
                <ul style="text-align: justify">
                    <li>Solicitors Firm: when a claim is being recommended ahead, to progress a claim and/or where a claim needs to be litigated on</li><br>
                    <li>Local Council: When a penalty charge notice is received to progress a presentation.</li><br>
                    <li>Engineers: to prepare an engineer report to valuate a vehicle damage claim</li><br>
                    <li>Insurance: to progress claims for compensation.</li>
                </ul>
               
                <p style="text-align: justify">If any of your personal data is required by a third party, as described above, we will take steps to ensure that your personal data is handled safely, securely, and in accordance with your rights, our obligations, and the third party’s obligations under the law, as described above in Part 8.<br>If any personal data is transferred outside of the EEA, we will take suitable steps in order to ensure that your personal data is treated just as safely and securely as it would be within the UK and under the GDPR, as explained above in Part 8.<br>In some limited circumstances, we may be legally required to share certain personal data, which might include yours, if we are involved in legal proceedings or complying with legal obligations, a court order, or the instructions of a government authority.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>10. Security</b></h4>
               
                <p style="text-align: justify">We are committed to ensure that your information is secure. In order to prevent unauthorized access or disclosure we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>11. How Can I Access My Personal Data?</b></h4>
               
                <p style="text-align: justify">If you want to know what personal data, we have about you, you can ask us for details of that personal data and for a copy of it (where any such personal data is held). This is known as a “subject access request”.<br>All subject access requests should be made in writing and sent to the email or postal addresses shown in Part 11.<br>There is not normally any charge for a subject access request. If your request is ‘manifestly unfounded or excessive’ (for example, if you make repetitive requests) a fee may be charged to cover our administrative costs in responding.<br>We will respond to your subject access request within 2 weeks and, in any case, not more than one month of receiving it. Normally, we aim to provide a complete response, including a copy of your personal data within that time. In some cases, however, particularly if your request is more complex, more time may be required up to a maximum of three months from the date we receive your request. You will be kept fully informed of our progress.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>12. How Do I Contact You?</b></h4>
               
                <p style="text-align: justify">To contact us about anything to do with your personal data and data protection, including to make a subject access request, please use the following details (for the attention of The Data Protection Officer)<br>Email address: info@kwikcarhire.co.uk<br>Telephone number: 0203 642 7692<br>Postal Address: Floor 33,25 Canada Square, Canary Wharf, London, E14 5LB</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>13. Changes to this Privacy Notice</b></h4>
               
                <p style="text-align: justify">We may change this Privacy Notice from time to time. This may be necessary, for example, if the law changes, or if we change our business in a way that affects personal data protection.<br>Any changes will be made available in our website within the contents of this privacy policy.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>14. Use of cookies on our website</b></h4>
               
                <h5>What are cookies? </h5>
               
                <p style="text-align: justify">Cookies are small text files that are placed on your computer by websites that you visit. They are widely used in order to make websites work, or work more efficiently, as well as to provide information to the owners of the site. <br>One of the cookies we use is essential for parts of the site to operate and has already been set. You may delete and block all cookies from this site, but parts of the site will not work. External cookies used <br><b>Google Analytics:</b> _utma, _utmb, _utmc, _utmz <br>These cookies are used to collect information about how visitors use our site. We use the information to compile reports and to help us improve the site. The cookies collect information in an anonymous form, including the number of visitors to the site, where visitors have come to the site from and the pages they visited. <br>Follow the link below for Google’s Privacy Policy <br><a target="_blank" href="http://www.google.co.uk/intl/en/analytics/privacyoverview.html">http://www.google.co.uk/intl/en/analytics/privacyoverview.html</a><br>Most web browsers allow some control of most cookies through the browser settings. To find out more about cookies, including how to see what cookies have been set and how to manage and delete them, visit <a href="http://www.allaboutcookies.org" target="_blank">http://www.allaboutcookies.org</a></p>
            </div>
        </div>
       

    </div>    
           </div>
       </div>
            
    </section>

