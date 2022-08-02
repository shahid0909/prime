
@extends('frontend.layout.master')

 @section('header')
         @include('frontend.layout.partials.header')
    @endsection
 @section('header')
         @include('frontend.layout.partials.header')
@endsection
<link href="{{ asset('assets/css/contact.css') }}" rel="stylesheet">
@section('content')


    <!-- Main content Start -->
    <!--<div class="main-content">-->
        <!-- Popular Courses Section Start -->
    <!--    <div class="rs-latest-couses orange-color pt-20 pb-30 md-pt-20 md-pb-30">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-sm-12 col-xs-12">-->
    <!--                    <h4>-->
    <!--                     <span-->
    <!--                class="btn btn-info btn-block responsive-width"-->
    <!--                style="-->
    <!--                font-family: 'Rubik', sans-serif;-->
    <!--                font-size: 16px;-->
    <!--                text-transform: uppercase;-->
    <!--                white-space: normal;-->
    <!--                background-color: #283d67; border-color: #283d67;-->
    <!--              "-->
    <!--            >How To Reach Prime University</span>-->
    <!--                    </h4>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-12 mb-40">-->
    <!--                    <div>-->
    <!--                        <div>-->

    <!--                            <p><span><b>You can use Google Maps to find your way to Prime University using public transport.</b></span><br>-->

    <!--                <span style="color: #11f305; font-size: 20px; font-family: 'Nunito'; font-weight: 700;">From Shahjalal Int. Airport Prime university is situated about 16KM away from Hazrat Shahjalal International Airport. You can take a Taxi using renowned apps Uber, Pathao etc. It may take 40mins to reach the university campus which may cost BDT= 450 to BDT=500 only. Publics Buses are also available from Airport Bus Stop to Mirpur-1 Bus Stop. It may cost BDT=35 only. You have to take a Rickshaw from Mirpur-1 to Prime University campus and it will cost BDT=30 only.</span><br>-->

    <!--                <span style="color: #2805f3; font-size: 20px; font-family: 'Nunito'; font-weight: 700;">From Gabtoli Bus Terminal Prime University is very near (1.6KM) to Gabtoli Bus Terminal. You can take a Rickshaw to reach Prime University campus which may cost BDT=20 only.</span><br>-->

    <!--                <span style="color: #f30505; font-size: 20px; font-family: 'Nunito'; font-weight: 700;">From Syedabad Bus Terminal Distance from Syedabad Bus Terminal to Prime University is about 15KM. This route is the busy one in Dhaka city. Taking a Taxi using UBER or Pathao will be the best choice to reach the university campus. It may cost BDT=500 only. You can take a Bus ride from Syedabad Bus Terminal to Gabtoli Bus Terminal and it will cost you BDT=40 only.</span><br>-->

    <!--                <span style="color: #31906c; font-size: 20px; font-family: 'Nunito'; font-weight: 700;">From Shahjalal Int. Airport Prime university is situated about 16KM away from Hazrat Shahjalal International Airport. You can take a Taxi using renowned apps Uber, Pathao etc. It may take 40mins to reach the university campus which may cost BDT= 450 to BDT=500 only. Publics Buses are also available from Airport Bus Stop to Mirpur-1 Bus Stop. It may cost BDT=35 only. You have to take a Rickshaw from Mirpur-1 to Prime University campus and it will cost BDT=30 only.</span><br>-->

    <!--                <span style="color: #5007ac; font-size: 20px; font-family: 'Nunito'; font-weight: 700;">From Sadarghat Bus Terminal Distance from Sadarghat Bus Stop to Prime University is about 14.6KM. You can take a Taxi using UBER or Pathao to reach the university campus. It may cost BDT=500 only. Publics Buses are also available from Sadarghat Bus Stop to Gabtoti Bus Terminal. It may cost BDT=40 only.</span></p>-->

    <!--                            <div class="bottom-part">-->
    <!--                                <h3 class="widget-title" style="text-align: center;">Campus Direction</h3>-->
    <!--                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7515.511293286911!2d90.34796616022672!3d23.79085658704206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9cb8a002d35%3A0xf36071651f4f6585!2sPrime%20University!5e0!3m2!1sen!2sbd!4v1640180286143!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
        <!-- Popular Courses Section End -->


        <!-- Newsletter section start -->
    <!--    <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">-->
    <!--        <div class="container">-->
    <!--            <div class="newsletter-wrap">-->
    <!--                @foreach($home_addr as $home_addrs)-->
    <!--                    <div class="row y-middle">-->
    <!--                        <div class="col-md-4 sm-mb-30">-->
    <!--                            <div class="sec-title">-->
    <!--                                <div class="sub-title white-color">Address</div>-->
    <!--                                <p class="title mb-0 white-color">-->
    <!--                                    {!! $home_addrs->address !!}-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-4 border-left">-->
    <!--                            <div class="sec-title">-->
    <!--                                <div class="sub-title white-color">Phone Number</div>-->
    <!--                                <p class="title mb-0 white-color">-->
    <!--                                    {!! $home_addrs->phone_number !!}-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-4 border-left">-->
    <!--                            <div class="sec-title">-->
    <!--                                <div class="sub-title white-color">Email</div>-->
    <!--                                <p class="title mb-0 white-color">-->
    <!--                                    {!! $home_addrs->email !!}-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                @endforeach-->
    <!--            </div>-->
    <!--        </div>-->
            <!-- Newsletter section end -->
    <!--    </div>-->
        <!-- Section bg Wrap 2 End -->
    <!--</div>-->
    <div class="main-content">
      <!-- Popular Courses Section Start -->
      <div class="rs-latest-couses orange-color pt-20 pb-30 md-pt-20 md-pb-30">
        <div class="container"> 
          <div class="row">
            <div class="col-lg-12 mb-40">
              <div>
                <div>
                  <section class="contact-address-area">
                    <div class="container">
                        <div class="sec-title-style1 text-center max-width">
                            <div class="title">Contact Us</div>
                            <div class="text"><div class="decor-left"><span></span></div><p>Quick Contact</p><div class="decor-right"><span></span></div></div>
                            <div class="bottom-text">
                                <p>The University grants Commissions and the Government of the People's Republic of Bangladesh accorded permission to establish this magnificent institute.</p>
                            </div>
                        </div>
                                <div class="contact-address-box row">
                                    <!--Start Single Contact Address Box-->
                                    <div class="col-sm-4 single-contact-address-box text-center" style="background: #283d67;">
                                        <div class="icon-holder">
                                            <span class="icon-clock-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                                <span class="path9"></span>
                                                <span class="path10"></span>
                                                <span class="path11"></span>
                                                <span class="path12"></span>
                                                <span class="path13"></span>
                                                <span class="path14"></span>
                                                <span class="path15"></span>
                                                <span class="path16"></span>
                                                <span class="path17"></span>
                                                <span class="path18"></span>
                                                <span class="path19"></span>
                                                <span class="path20"></span>
                                            </span>
                                        </div>
                                        
                                        <h3 style="color:white;">Website</h3>
                                        <h2><a href="http://prime.reflexit.com.bd/" style="color: #E1AE22;">http://prime.reflexit.com.bd</a></h2>
                                    </div>

                                    <!--End Single Contact Address Box-->
                                    <!--Start Single Contact Address Box-->
                                    <div class="col-sm-4 single-contact-address-box main-branch">
                                        <h3>Prime University</h3>
                                        <div class="inner">
                                            <ul>
                                                <li>
                                                    <div class="title">
                                                        <h4>Address:</h4>
                                                    </div>
                                                    <div class="text">
                                                        <p>114/116 Mazar Road, Mirpur-1
                                                          <br> Dhaka 1216, Bangladesh</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        <h4>Phone No:</h4>
                                                    </div>
                                                    <div class="text">
                                                        <p>+88-02-8031810 <br>+880-1710996196</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        <h4>Email:</h4>
                                                    </div>
                                                    <div class="text">
                                                        <p>info@primeuniversity.edu.bd<br></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Contact Address Box-->
                                    <!--Start Single Contact Address Box-->
                                    <div class="col-sm-4 single-contact-address-box text-center" style="background: #283d67;">
                                        <div class="icon-holder">
                                            <span class="icon-question-2">
                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                            </span>
                                        </div>
                                        <h3 style="color:white;">Admission Hotline Number</h3>
                                        <h2 style="color: #E1AE22;"></h2>
                                    </div>
                                    <!--End Single Contact Address Box-->
                        </div>
                    </div>
                </section>  
                <!--End Contact Address Area-->  
                 
                <!--Start contact form area-->
                <section class="contact-info-area mb-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="contact-form">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="sec-title-style1 float-left">
                                                <div class="title">Send Your Message</div>
                                                <div class="text"><div class="decor-left"><span></span></div><p>Contact Form</p></div>
                                            </div>
                                            <!-- <div class="text-box float-right">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                            </div> -->
                                        </div> 
                                    </div>   
                                    <div class="inner-box">
                                        <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="input-box">   
                                                                <input type="text" name="form_name" value="" placeholder="Name" required="">
                                                            </div> 
                                                             <!-- <div class="input-box"> 
                                                                <input type="text" name="form_phone" value="" placeholder="Phone">
                                                            </div> -->
                                                        </div>
                                                        <div class="col-xl-12">
                                                          <!-- <div class="input-box">   
                                                              <input type="text" name="form_name" value="" placeholder="Name" required="">
                                                          </div>  -->
                                                           <div class="input-box"> 
                                                              <input type="text" name="form_phone" value="" placeholder="Phone">
                                                          </div>
                                                      </div>
                                                        <div class="col-xl-12">
                                                            <div class="input-box"> 
                                                                <input type="email" name="form_email" value="" placeholder="Email" required="">
                                                            </div>
                                                            <!-- <div class="input-box"> 
                                                                <input type="text" name="form_website" value="" placeholder="Website">
                                                            </div>  -->
                                                        </div>  
                                                    </div> 
                                                    <div class="row">
                                                         <div class="col-xl-12">
                                                            <div class="input-box"> 
                                                                <input type="text" name="form_subject" value="" placeholder="Subject">
                                                            </div>     
                                                        </div> 
                                                    </div>   
                                                </div>
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="input-box">    
                                                        <textarea name="form_message" placeholder="Your Message..." required=""></textarea>
                                                    </div>
                                                    <div class="button-box">
                                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                        <button type="submit" data-loading-text="Please wait...">Send Message</button>    
                                                    </div>         
                                                </div> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>

                  <!-- <p><span><b>You can use Google Maps to find your way to Prime University using public transport.

                    From Shahjalal Int. Airport Prime university is situated about 16KM away from Hazrat Shahjalal International Airport. You can take a Taxi using renowned apps Uber, Pathao etc. It may take 40mins to reach the university campus which may cost BDT= 450 to BDT=500 only. Publics Buses are also available from Airport Bus Stop to Mirpur-1 Bus Stop. It may cost BDT=35 only. You have to take a Rickshaw from Mirpur-1 to Prime University campus and it will cost BDT=30 only.
                    
                    From Gabtoli Bus Terminal Prime University is very near (1.6KM) to Gabtoli Bus Terminal. You can take a Rickshaw to reach Prime University campus which may cost BDT=20 only.
                    
                    From Syedabad Bus Terminal Distance from Syedabad Bus Terminal to Prime University is about 15KM. This route is the busy one in Dhaka city. Taking a Taxi using UBER or Pathao will be the best choice to reach the university campus. It may cost BDT=500 only. You can take a Bus ride from Syedabad Bus Terminal to Gabtoli Bus Terminal and it will cost you BDT=40 only.
                    
                    From Shahjalal Int. Airport Prime university is situated about 16KM away from Hazrat Shahjalal International Airport. You can take a Taxi using renowned apps Uber, Pathao etc. It may take 40mins to reach the university campus which may cost BDT= 450 to BDT=500 only. Publics Buses are also available from Airport Bus Stop to Mirpur-1 Bus Stop. It may cost BDT=35 only. You have to take a Rickshaw from Mirpur-1 to Prime University campus and it will cost BDT=30 only.
                    
                    From Sadarghat Bus Terminal Distance from Sadarghat Bus Stop to Prime University is about 14.6KM. You can take a Taxi using UBER or Pathao to reach the university campus. It may cost BDT=500 only. Publics Buses are also available from Sadarghat Bus Stop to Gabtoti Bus Terminal. It may cost BDT=40 only.</b></span></p> -->
                 
                  <div class="bottom-part" style="padding: 10px; background: #f1e1e1; box-shadow: 0px 0px 5px 0px #000;">
                    <h3 class="widget-title" style="text-align: center;">Campus Direction</h3>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7515.511293286911!2d90.34796616022672!3d23.79085658704206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9cb8a002d35%3A0xf36071651f4f6585!2sPrime%20University!5e0!3m2!1sen!2sbd!4v1640180286143!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Popular Courses Section End -->

      <!-- Newsletter section start -->
      <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
        <div class="container">
          <div class="newsletter-wrap">
            <div class="row y-middle">
              <div class="col-md-4 sm-mb-30">
                <div class="sec-title">
                  <div class="sub-title white-color">Address</div>
                  <p class="title mb-0 white-color">
                    Prime University <br />
                    114/116 Mazar Road, Mirpur-1, Dhaka 1216, Bangladesh
                  </p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="sec-title">
                  <div class="sub-title white-color">Phone Number</div>
                  <p class="title mb-0 white-color">
                    PABX: +88-02-48034888, 8031810 <br />
                    01939425030, 01687191986, 01710996196, 01866207160
                  </p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="sec-title">
                  <div class="sub-title white-color">Email</div>
                  <p class="title mb-0 white-color">
                    info@primeuniversity.edu.bd <br />
                    www.primeuniversity.edu.bd
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Newsletter section end -->
      </div>
    </div>
    <!-- Main content End -->


@endsection
