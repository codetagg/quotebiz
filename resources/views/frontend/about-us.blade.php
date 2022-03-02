@extends('frontend.layouts.master')

@section('content')
<style>
    .header-style-three .main-menu .navigation > li > a{
        color: #fff;
    }
</style>
<!--Page Title-->
<section class="page-title" style="background-image: url({{asset('frontend-assets/images/background/3.jpg')}});">
	<div class="auto-container">
		<ul class="bread-crumb">
			<li><a href="{{url('/')}}">Home</a></li>
			<li class="active">About Us</li>
		</ul>
		<h1>About Us</h1>
	</div>
</section>
<!--End Page Title-->

<!--Blog-->
<section class="repair-section box-section">
      <div class="auto-container">
        <div class="sec-title-one">
                        <h2>About Us</h2>
                        <div class="text"> When it comes to smartphones, we're the only one place that does it all.</div>
                    </div>
          <!--Sec Title One-->
            <!-- <div class="sec-title-one">
                <h2>WE ARE CELL CITY PHONE REPAIR</h2>
                <div class="text">Overcome faithful endless salvation enlightenment salvation overcome pious merciful<br>ascetic madness holiest joy passion zarathustra suicide overcome snare.</div>
            </div> -->

          <div class="row clearfix">

                <!--Services Block-->
                <div class="services-block col-md-3 col-sm-6 col-xs-6" >
                  <div class="inner-box wow fadeIn animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible;height: 192px; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">
                      <!--Icon Box-->
                      <a href="https://cellcity.us/repair">
                        <div class="icon-box">
                          <img src="https://cellcity.us/frontend-assets/images/Buy_Phones.svg" alt="">
                        </div>
                        <h3>Refurbished Smartphones</h3>
                      </a>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-3 col-sm-6 col-xs-6" >
                  <div class="inner-box wow fadeIn animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible;height: 192px; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeIn;">
                      <!-- <div class="big-letter">Q</div> -->
                      <!--Icon Box-->
                      <a href="https://cellcity.us/buy-phone">
                        <div class="icon-box">
                              <img src="https://cellcity.us/frontend-assets/images/Buy_Phones.svg" alt="">
                        </div>
                        <h3>Smartphones Accessories</h3>
                      </a>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-3 col-sm-6 col-xs-6" >
                  <div class="inner-box wow fadeIn animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible;height: 192px; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeIn;">
                      <!-- <div class="big-letter">C</div> -->
                      <!--Icon Box-->
                      <a href="https://cellcity.us/pay-bills">
                          <div class="icon-box">
                              <img src="https://cellcity.us/frontend-assets/images/phone_repair.svg" style=" width: 78px;" alt="">
                          </div>
                          <h3>Smartphones Repair</h3>
                      </a>

                    </div>
                </div>
                <!--Services Block-->
                <div class="services-block col-md-3 col-sm-6 col-xs-6" >
                  <div class="inner-box wow fadeIn animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible;height: 192px; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeIn;">
                      <!-- <div class="big-letter">C</div> -->
                      <!--Icon Box-->
                      <a href="https://cellcity.us/pay-bills">
                          <div class="icon-box">
                              <img src="https://cellcity.us/frontend-assets/images/billpay.png" style=" width: 78px;" alt="">
                          </div>
                          <h3>Phone Bill Payment</h3>
                      </a>

                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection
@section('script')


@endsection
