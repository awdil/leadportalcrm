<section id="teaser">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-xs-12 pull-left">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides start -->
              <div class="carousel-inner">
                <div class="item active">
                  <h1 class="title">HAD AN ACCIDENT?
                    <span class="subtitle">Offering nationwide recovery, 24-hours a day</span></h1>
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
                <h2>Accident Recovery</h2>
                <span class="underline">&nbsp;</span> 
                <p>If you have been involved in an accident, and need to have your vehicle recovered, you have come to the right place. </p>
                 <p>We offer nationwide recovery, 24-hours a day. We’re incredibly proud of our call-out times and aim to reach each call within two hours. This is much better than some major competitors with people often waiting up to 4 hours to be assisted.</p>
                 <p>Providing you with a complete repair solution if your vehicle has been damaged as a result of a non-fault accident. We work alongside approved manufacturer repairers meaning repairs are at its highest standards. Once your vehicle has been repaired, it will go through quality control procedure ensuring your vehicle is repaired to the highest standards.</p>
             </div>
              <div class="col-md-12">
               <div class="col-md-6">
                  <div class="service-box wow fadeInLeft" data-wow-offset="100">
                    <h3 class="service-title" >Vehicle Recovery</h3>
                    <div class="clearfix"></div>
                     <p>We can recover your vehicle from the scene of accident quickly and efficiently and will give you a like to like vehicle in replacement so that you can continue your work.<br> Vehicle recovery is a specific process of recovering an unroadworthy vehicle from one location to another for many purposes like for safe storage, for repair, for dumping or for selling/reselling activity with a commercial vehicle. <br>
                      We understand that a breakdown because of a road traffic accident, may be a totally worrying situation, mainly in case you are far from domestic. We pride ourselves in making sure we respond to your breakdown and get to you immediately, even within hours.
                      </p>
                  </div>
                </div>
                <!-- Service Box end -->

                <!-- Service Box start -->
                <div class="col-md-6">
                  <div class="service-box wow fadeInLeft" data-wow-offset="100">
                    <h3 class="service-title" >Vehicle Storage</h3>
                    <div class="clearfix"></div>
                     <p>We have a well-maintained storage facility with CCTV Cameras. We will put your unroadworthy vehicle in our storage for as long as needed.<br>We have highly secured storage located Nationwide. We have good-sized storage bays for each vehicle. Along with extensively installed CCTV cameras in our storage for a fool proof security and we inspect on daily basis. Car storage is a big business, especially in England. A storage business is to secure low-cost indoor storage space, such as an empty storehouse or developed buildings. <br>
                      With Kwik Car hire storage services, you can be rest assured that your experience will be hassle-free and handled with the utmost of professionalism.
                      </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <h2>Enquire about Accident Recovery</h2>
                <span class="underline">&nbsp;</span> 
                <p>For Hassle free recovery, storage, Courtesy car, Repair and maximum compensation, Simple contact us at 0845 154 9679.
                </p>
             </div>
          </div>
       </div>
            
    </section>
