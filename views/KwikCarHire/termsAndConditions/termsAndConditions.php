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
             <div class="col-md-12 text-center">
                <h2>Terms and Conditions</h2>
                <span class="underline">&nbsp;</span> 
                <p>By using this website, you agree that you have read the information below and that you agree to below terms and conditions and that you further agree that your use of this website will be expressly limited to non-commercial personal use. If you do not agree to the terms and conditions you should not use this site.
                </p>
             </div>
              <div class="container">
        <h4 ><b>Terms and Conditions</b></h4>

        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">By using this website, you agree that you have read the information below and that you agree to below terms and conditions and that you further agree that your use of this website will be expressly limited to non-commercial personal use. If you do not agree to the terms and conditions you should not use this site.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>COOKIES POLICY</b></h4>
                <p class="text-justify">We do not use cookies. So, if you use our website, no cookies will be transferred on your device.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>STORING YOUR DATA</b></h4>
               

                <p class="text-justify">The website and its relevant data including information entered by you will be stored with hosting companies in EEA. And we will try our best to protect it. <br> Although the data submission and its storage cannot be insured completely. And we cannot guarantee its complete security. And all information entered on our website is at your own risk.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>DATA SHARING</b></h4>
               

                <p class="text-justify">We will not commercially sell or disclose your data to other companies. Although your data will be provided to our partner companies regarding your accident. They will also contact you by post, phone, email or message.<br>By providing your details you agree to be contacted by telephone, SMS, email or post by our group of companies. If you wish to find out how much you could claim but prefer not to provide your telephone number for a call back, you may call us  on phone 0845 154 9679 and request the information in person.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>Information on Website</b></h4>
               

                <p class="text-justify">Information displayed on this website is for general information only and is based on the law of England and Wales and is for general information purposes only and is not intended to replace legal advice. Any reliance upon the information provided within this site is at the user’s own risk.<br>All reasonable care is taken to ensure that information on this website is accurate and up to date but we do not accept any responsibility for the completeness of the content, or any mistakes or omissions contained therein. Kwik Car Hire does not enter any express or implied representations, conditions, or warranties regarding the quality or accuracy of the information displayed.<br>Please note that although reasonable care is taken to ensure that the website and materials available from it are virus free it remains the responsibility of the user to ensure that it is virus free. Kwik Car Hire cannot accept responsibility for any viruses that you download. Our site security has been enhanced to stand in line with industry best practice, but it is also important that you do what you can. Always update your system with the latest anti-virus signatures and security patches. Use anti spyware software and a personal firewall.<br>To the fullest extent permitted Kwik Car Hire excludes liability for any loss or damage, whether direct or indirect, arising from your use of this website.<br>This website contains convenient links to other websites neither operated nor controlled by us. You acknowledge and agree that Kwik Car Hire is not responsible for the availability of any third-party websites or material accessed via this site. Kwik Car Hire does not endorse nor can be held responsible or liable for any content, product or services available via third party websites.</p>                
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <h4 ><b>Copywrite and intellectual property</b></h4>
               

                <p class="text-justify">All copyright, trademarks and all other intellectual property rights in all material or content supplied as part of this website are owned by Kwik car Hire.<br>Use of this website is expressly limited to personal, non-commercial use and you are not permitted to use this material or content save for the printing of or downloading of a reasonable number of unmodified copies for your personal use.<br>For the avoidance of doubt, the exemptions referred to above do not permit you to incorporate all or any part of the content of this website in any commercial publication or document, or for any other commercial purpose.</p>
            </div>
        </div>
       

    </div>   
          </div>
       </div>
            
    </section>

