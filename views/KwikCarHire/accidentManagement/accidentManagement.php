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
                <h2>Accident Management Service </h2>
                <span class="underline">&nbsp;</span> 
                <p>We specialise in providing a full accident management service on demand.
                Choose our Accident Management service and experience how easy we can provide a replacement vehicle. Our Accident Management service means we can bring replacement vehicle to you, rather than you having to go out of your way to collect this. We aim to make things easy and stress free whilst their car is being repaired.
                </p>
             </div>
              <div class="col-md-12">
               <div class="col-md-6">
                  <div class="service-box wow fadeInLeft" data-wow-offset="100">
                    <h3 class="service-title" style="padding-inline-start: 40px;">Accident Management</h3>
                    <div class="clearfix"></div>
                     <ul style="list-style-type: none">	
                        <li><span class="glyphicon glyphicon-ok"></span>  UK wide coverage for delivery and collection</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Dedicated reservations team available 7 days a week</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Immediate response to requests – no 3rd party/brokers</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Vehicle delivery on time every time</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  No Excess to pay</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  No Up-front costs</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Quality Vehicle Repairs</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Like for Like Vehicle Replacement</li>
                    </ul>
                  </div>
                </div>
                <!-- Service Box end -->

                <!-- Service Box start -->
                <div class="col-md-6">
                  <div class="service-box wow fadeInRight" data-wow-offset="100">
                    <h3 class="service-title" style="padding-inline-start: 40px; ">How it works</h3>
                    <div class="clearfix"></div>
                     <ul style="list-style-type: none">	
                        <li><span class="glyphicon glyphicon-ok"></span>  Personal delivery to the home, business or body-shop</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Saves time - no need to collect from our depot</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Guaranteed delivery time to suit you</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Personal collection upon the end of the hire</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  No Excess to pay</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Quick replace</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Quick Repairs</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Guarantee customer satisfaction</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <h2>Enquire about Credit Hire & Accident Management</h2>
                <span class="underline">&nbsp;</span> 
                <p>If you would like to know more about the our Credit Hire & Accident Management service or any of the luxury vehicles available please fill out our contact form or call us on: 0845 154 9679
                </p>
             </div>
          </div>
       </div>
            
    </section>
