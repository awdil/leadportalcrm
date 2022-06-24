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
                <h2>Credit Hire</h2>
                <span class="underline">&nbsp;</span> 
                <p>Credit hire allows you to keep your life on track while your vehicle is in for repairs. You shouldn’t be out of pocket following an accident and our dedicated team will make sure you are provided with a like-for-like replacement vehicle to keep you mobile. This process is quick and easy with no cost to the pursuer. <br> We understand that all our clients are individuals, facing different situations and circumstances, and so our aim is to provide the right vehicle for you. Our fleet not only contains an extensive range of standard, everyday cars but also motorcycles and commercial vehicles such as taxis too, along with high-value prestige cars. <br> Your hire vehicle will be delivered to you promptly and at a time that is convenient to you, even if that means supplying you with a replacement vehicle on the same day. Our team will guide you through the full process, and our representative will show you around the vehicle and ensure that you are happy with it, complete the paperwork with you, and take care of any questions or concerns that you may have along the way too-and then you’re ready to go, with your replacement vehicle.. </p>
             </div>
              <div class="col-md-12">
               <div class="col-md-12">
                  <div class="service-box wow fadeInLeft" data-wow-offset="100">
                    <h3 class="service-title">Type of Vehicles we provide</h3>
                    <div class="clearfix"></div>
                     <ul style="list-style-type: none">	
                        <li><span class="glyphicon glyphicon-ok"></span>  Standard everyday cars</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Executive Vehicles</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  PCVO/Taxi Licenced Vehicles</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Prestige Vehicles</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Motorbikes</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Vans</li>
                        <li><span class="glyphicon glyphicon-ok"></span>  Commercial Vehicles</li>
                    </ul>
                  </div>
                </div>
                
              </div>
              <div class="col-md-12 text-center">
                <h2>Enquire about Credit Hire</h2>
                <span class="underline">&nbsp;</span> 
                <p>
Don’t foot the bill for something you haven’t done. The effects of an accident on your health, wallet and insurance premiums can be substantial. Allow us to make your life a little easier with a credit hire service that keeps you moving and protects your bank balance.
<br>
Contact us now on 0845 154 9679 to find out more about our dedicated accident management service and credit hire.
                </p>
             </div>
          </div>
       </div>
            
    </section>
