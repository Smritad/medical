@extends('layouts.main-header')
@section('content')


<div class="nav-overlay"></div>
            <!-- navigation menu end  -->
            <!-- content-->
            <!--fixed-column-wrap-->
            <section class="breadcrums-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrums-text">
                                <h1>Cost</h1>
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li>Cost</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- content end -->
            <!-- Start About Area -->

            <!-- <section class="about-area bg-color-f8f8f8 pt-100 pb-70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-content mr-15">
                                <span class="top-title">Choose us</span>
                                <h2>Why choose Medical Appraisals?</h2>

                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <div class="text">
                                            <p>Simple, smooth and stress-free service</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <div class="text">
                                            <p>No hidden costs</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <div class="text">
                                            <p>Appraisals meet GMC/NHS criteria and are available face-to-face or online</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <div class="text">
                                            <p>Direct access to your experienced appraiser, Prof Kazi</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <div class="text">
                                            <p>Cost-effective and robust appraisals</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <div class="text">
                                            <p>Enhance the quality of your professional work by planning your professional development</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <div class="text">
                                            <p>Appraisal coaching available to help with the appraisal process</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <div class="text">
                                            <p>5 star rating and reviews</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="about-img ml-15 mb-0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="about-1">
                                            <img loading="lazy" decoding="async" src="./images/choose-us/shutterstock_1854521311.jpg"
                                                class="img-responsive" alt="Image">
                                        </div>
                                        <div class="about-2">
                                            <img loading="lazy" decoding="async" src="./images/choose-us/shutterstock_491761618.jpg"
                                                class="img-responsive" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="about-3">
                                            <img loading="lazy" decoding="async" src="./images/choose-us/shutterstock_1678229824.jpg"
                                                class="img-responsive" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  -->
            <!-- End About Area -->



            <div class="clearfix"></div>
            <!-- Skill Section -->
            <div class="clearfix"></div>
            <!-- Skill Section -->
            <section class="service-section cost-section">

                <div class="container">
                    <div class="row">
                        <!-- <div class="heading text-white text-center">
                            <span>Our full list of services</span>
                            <h2>Our Cost</h2>
                        </div> -->
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme" id="treatment11" style="display:block;">
                                <div class="item">
                                    <div class="service-block-one">
                                        <div class="inner-box">
                                            <div class="inner">
                                                <div class="icon-box">
                                                    <img loading="lazy" decoding="async" width="64" height="64" src="{{asset('frontend/images/services/checklist.png')}}" alt="Medical Appraisal and Revalidation">
                                                </div>
                                                <!-- <span class="category">Energo</span> -->
                                                <h5><a href="{{route('frontend_contact_us_show')}}">Medical Appraisal & Revalidation
                                                    </a>
                                                </h5>
                                                <!-- <div class="price-value">
                                                    <span class="amount">£350 - via video / £450 - in person, face to face</span>
                                                </div> -->
                                                <div class="desc">
                                                <ul>
                                                    <li>Appraisal via video - £399</li>
                                                    <li>Face to face - £450</li>
<li>Pre-appraisal support &amp; coaching – £200</li>
<li>Express appraisal - £500</li>
<li>Annual Return process of the GMC – Appraisal + REV12 form = £499</li>
 <li>Same day appraisal - £799</li>
                                                </ul>
                                            </div>
                                                <div class="link"><a href="{{route('frontend_contact_us_show')}}"><i class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i>
                                                        <span>Book Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="service-block-one">
                                        <div class="inner-box">
                                            <div class="inner">
                                                <div class="icon-box">
                                                    <img loading="lazy" decoding="async" width="64" height="64" src="{{asset('frontend/images/services/conversation.png')}}" alt="Responsible Officer Services">
                                                </div>
                                                <!-- <span class="category">Energo</span> -->
                                                <h5><a href="{{route('frontend_contact_us_show')}}">Responsible Officer & Designated body Services

                                                    </a></h5>
                                                    <!-- <div class="price-value">
                                                        <span class="amount">Price on application</span>
                                                    </div> -->
                                                    <div class="desc">
                                                        <ul>
                                                            <li>Price on application</li>
                                                        </ul>
                                                    </div>
                                                <div class="link"><a href="{{route('frontend_contact_us_show')}}"><i class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i>
                                                        <span>Book Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="service-block-one">
                                        <div class="inner-box">
                                            <div class="inner">
                                                <div class="icon-box">
                                                    <img loading="lazy" decoding="async" width="64" height="64" src="{{asset('frontend/images/services/assurance.png')}}" alt="Assurance services supporting medical appraisal costs and doctor appraisal fees">

                                                </div>
                                                <h5><a href="{{route('frontend_contact_us_show')}}">External quality Assurance (EQA) for Designated bodies



                                                    </a></h5>
                                                    <!-- <div class="price-value">
                                                        <span class="amount">£1999</span>
                                                    </div> -->
                                                    <div class="desc">
                                                        <ul>
                                                            <li>EQA - £1999</li>
                                                        </ul>
                                                    </div>
                                                <div class="link"><a href="{{route('frontend_contact_us_show')}}"><i class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i>
                                                        <span>Book Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="service-block-one">
                                        <div class="inner-box">
                                            <div class="inner">
                                                <div class="icon-box">
                                                    <img loading="lazy" decoding="async" width="64" height="64" src="{{asset('frontend/images/services/healthcare.png')}}" alt="Medico legal support services">

                                                </div>
                                                <h5><a href="{{route('frontend_contact_us_show')}}">Professional Lifestyle & Career Coaching




                                                    </a></h5>
                                                    <!-- <div class="price-value">
                                                        <span class="amount">Cost</span>
                                                    </div> -->
                                                    <div class="desc">
                                                    <ul>
                                                        <li>Dr Sudhir Sethi £200/hour</li>
                                                        <li>Professor Rehan Kazi £250/hour</li>
                                                        <li>Lisa Stone £145/hour</li>
                                                        <li>Mat Daniel £225/hour</li>
                                                        <li>Dr Anjalee Perera - POA</li>
                                                </ul>
                                            </div>
                                                <div class="link"><a href="{{route('frontend_contact_us_show')}}"><i class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i>
                                                        <span>Book Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="item">
                                    <div class="service-block-one">
                                        <div class="inner-box">
                                            <div class="inner">
                                                <div class="icon-box">
                                                    <img src="{{asset('frontend/images/services/leadership.png')}}" alt="Leadership and medical appraisal support" width="80" height="80" loading="lazy" />

                                                </div>
                                                <h5><a href="">Professional Coaching





                                                    </a></h5>
                                                    <div class="price-value">
                                                        <span class="amount">Cost: Lorem Ipsum</span>
                                                    </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                                <div class="link"><a href=""><i class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i>
                                                        <span>More Info</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="item">
                                    <div class="service-block-one">
                                        <div class="inner-box">
                                            <div class="inner">
                                                <div class="icon-box">
                                                    <img loading="lazy" decoding="async" width="64" height="64" src="{{asset('frontend/images/services/heart.png')}}" alt="Medico legal support services">

                                                </div>
                                                <h5><a href="{{route('frontend_contact_us_show')}}">Medicolegal support</a></h5>
                                                    <!-- <div class="price-value">
                                                        <span class="amount"></span>
                                                    </div> -->
                                                    <div class="desc">
                                                        <ul>
                                                    <li>MLS - £ 375/hour</li>
                                                    <li>Mentoring - £300 per meeting</li>
                                                    <li>Dr Pather - £275/hour</li>
                                                   
                                                        </ul>
                                                    </div>
                                                <div class="link"><a href="{{route('frontend_contact_us_show')}}"><i class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i>
                                                        <span>Book Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
<section class="about-review review-section">
                <div class="container">
                    <div class="heading text-white text-center">
                        <h2>See Our Google Reviews</h2>
                    </div>
                    <!-- Elfsight Google Reviews | Medical Appraisal - grid -->
<script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-4c4a96e0-ce35-47ca-b67c-ed8869acdb14" data-elfsight-app-lazy></div>
<div class="testimonilas-carousel-wrap fl-wrap">
                                            <div class="testimonilas-carousel">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                        <div class="testimonilas-text fl-wrap">
                                                <h3>Dr. Usha kiran <span>- Dubai</span></h3>
                                        <p>I had my appraisal process with Prof Rham Kazi.
It was a very comfortable experience.
I was feeling quite anxious as I had left UK in 2012 and was not sure how to go about it.
He did the preappraisal coaching for me and explained how to go about collecting information and documentation for it and throughout the appraisal process he kept me at ease and explained things very well.
I felt supported.
My sincere thanks to Prof. Kazi for everything.
</p>
<p>Review Link - <a href="https://share.google/X55fdT0oTnLNdv99l">https://share.google/X55fdT0oTnLNdv99l</a></p>

                                                                </div>
                                                            </div>
                                                        </div>

                                                         <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                        <div class="testimonilas-text fl-wrap">
                                                <h3> Dr. Lourdes Gaspar <span>- Consultant in Anaesthetics and Pain Management</span></h3>
                                        <p>Professor Kazi recently carried out my appraisal after I left the NHS hospital that i had been working at for 26 years as a consultant.

I found his services to be prompt, efficient and very supportive.

Professor Kazi has a complete understanding of what is needed and all the required processes. He is very knowledgeable, has a very approachable manner and my experience was very positive. He also provided me with the helpful guidance and advice going forward.

I highly recommend his services for anybody looking for an independent appraiser.
</p>
<p>Review Link - <a href="https://share.google/McVU52PwsoTn1DZKO">https://share.google/McVU52PwsoTn1DZKO</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                        <div class="testimonilas-text fl-wrap">
                                                <h3>Gelani Baha (Dr. Elgelani Bahaeldein) <span>- Consultant Physician / Endocrinologist</span></h3>
                                        <p>It has been a pleasure to have my appraisal done by Prof.Kazi.
He put me at ease and took me through the appraisal process in a detailed yet simple approach and his comments were tailored to my needs in terms of how to enhance and keep my career progress and personal development.
He responds promptly and always supportive and caring.
I can not thank him enough and I highly recommend him to highest terms for anyone seeking appraisals for their work.
I will certainly conduct all my future appraisals with Prof.Kazi.
</p>
<p>Review Link - <a href="https://share.google/uTVyr9yqwvRHjms2B">https://share.google/uTVyr9yqwvRHjms2B</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                        <div class="testimonilas-text fl-wrap">
                                                <h3>Dr. Siva Sivapragasam <span> - FRCS(Eng), FRCS(Edin) (Consultant Surgeon)</span></h3>
                                        <p>Prof Rehan Kazi  is an excellent Appraiser.  He made me feel comfortable and the whole process went smoothly.  I would certainly recommend him as an Appraiser for all the Consultants and Junior doctors
</p>
<p>Review Link - <a href="https://share.google/SpNb0tXXbktqPKoUm">https://share.google/SpNb0tXXbktqPKoUm</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                       <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                        <div class="testimonilas-text fl-wrap">
                                                <h3> Dr. Azhar Ali <span>- Cardiology Registrar</span></h3>
                                        <p>Professor Kazi was really helpful during my appraisal. He listened to me patiently and guided me not only for the appraisal but also for my future goals.
</p>
<p>Review Link - <a href="https://share.google/ivxhQI5FCNXgR5U6B">https://share.google/ivxhQI5FCNXgR5U6B</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                        <div class="testimonilas-text fl-wrap">
                                                <h3>Dr. Naemat Rahman <span>- MANCHESTER. UK.</span></h3>
                                        <p>It was pleasure to meet an excellent team as Medical Appraisals and especially Prof kazi who help me in my appraisal and advice me for my revalidation process.
To use their service is easy and convenient and always there is someone to guide you if need it.
Many many thanks
And wish you all the best and Merry Christmas.
</p>
<p>Review Link - <a href="https://share.google/XnUjfM5k9swvpdNer">https://share.google/XnUjfM5k9swvpdNer</a></p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tc-pagination"></div>
                                            <div class="tc-button_wrap">
                                                <div class="tc-button tc-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="fal fa-angle-left"></i></div>
                                                <div class="tc-button tc-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="fal fa-angle-right"></i></div>
                                            </div>
                                        </div>

                        <a aria-label="See our google reviews" href="https://www.google.com/maps/place/Medical+Appraisals/@51.642407,-0.4480379,17z/data=!4m7!3m6!1s0x48766a4b0e02c4ad:0xfc261b1104b51436!8m2!3d51.6424021!4d-0.4458598!9m1!1b1" target="_blank" rel="noopener noreferrer" class="btn">
                            <span>more than 700 five-star reviews</span>
                        </a>

                </div>
            </section>
            <script>

  document.addEventListener("DOMContentLoaded", function () {

    $("#treatment11").owlCarousel({

      loop: true,

      margin: 30,

      stagePadding: 20,

      dots: false,

      navigation: true,

      autoplay: true,

      autoplaySpeed: 3000,

      navText: [

        "<span>&#8249;</span>",

        "<span>&#8250;</span>"

      ],

      responsiveClass: true,

      responsive: {

        0: { items: 1 },

        500: { items: 1 },

        768: { items: 2 },

        1000: { items: 3 }

      }

    });

  });
</script>
 

@endsection