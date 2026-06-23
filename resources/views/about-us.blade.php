@extends('layouts.main-header')
@section('content')
 <style>
  .custom-list {
    list-style: none; /* Remove default bullets */
    padding-left: 0;
  }

  .custom-list li {
    position: relative;
    padding-left: 30px; /* Space for the icon */
    margin-bottom: 12px;
    font-size: 16px;
    color: white;
  }
  .custom-list li::before {
    content: "➔"; /* Unicode arrow, you can replace with an SVG or image */
    color: #4caf50; /* Green color */
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 0;
    font-size: 20px;
    line-height: 1;
  }

  .custom-list li strong {
    font-weight: 700;
  }
  .medical-offer h6 {
    line-height: 30px;
    margin-bottom: 15px !important;
    font-size: 25px;
    font-weight: 900;
    color: #fff;
    text-align: center;}
</style>
            <div class="nav-overlay"></div>
            <!-- navigation menu end  -->
            <!-- content-->
            <section class="breadcrums-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrums-text">
                                <h1>About Us</h1>
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li>About Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content end -->
            <section class="about-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 image-column">
                          <div class="image_block_2">
                            <div class="image-box">
                                <figure class="image"><img loading="lazy" src="{{asset('frontend/images/about/thumbnail_Rehan Sir Image 1.png
')}}" alt="about"></figure>
                                <div class="image-content">
                                    <div class="icon-box"><img width="64" height="64" loading="lazy" src="{{asset('frontend/images/about/plus.png')}}" alt="plus"></div>
                                    <h4><span>10</span>Years of Experience</h4>
                                </div>
                            </div>
                        </div>
                        <div class="element_circle_pink"><img width="82" height="82" loading="lazy" src="{{asset('frontend/images/icon/element_pink_circle.png')}}" alt="element pink circle"></div>
                        </div>

                        <div class="col-md-6">
                             <div class="about-text">
                                <div class="heading">
                                    <!-- <span>About Us</span> -->
                                    <h2>Who We Are</h2>
                                </div>
                                <p>Medical Appraisals UK was established in 2016 as an independent, certified &amp;
                                    cost-effective
                                    medical appraisal provider for doctors by Professor Rehan Kazi.</p>
                                <p>Rehan is a highly experienced, trained medical appraiser and Responsible Officer. He
                                    has
                                    completed over 3000+ appraisals for various NHS Trusts, locum agencies, private
                                    clinics,
                                    overseas doctors and has been actively involved with healthcare licensing,
                                    regulation and
                                    clinical governance for doctors. Rehan has helped towards the set up &amp; quality
                                    assurance of
                                    the appraisal and revalidation systems for several outsource organisations.</p>
                                    <p>Over the years, Medical Appraisals UK has grown into a truly international service, supporting GMC-registered doctors not only across the UK but also those practising in the
UAE, India, Pakistan, Ireland, Australia, South Africa, Nigeria, and Sri Lanka. Doctors based overseas rely on us for medical appraisals, designated body connections, revalidation support, and career guidance, all delivered through a fully virtual service. We understand the unique challenges of maintaining GMC registration while living and working abroad, and we have built our service to meet those needs with flexibility, professionalism, and care.</p>
                                    <p>Rehan is an active member of the London RO network group meetings, the locum RO network group and the GMC reference group for responsible officers. He remains active in research and his last work was on the utility of Skype-based appraisals for doctors practising in the United Kingdom presented at the NHSE locum RO network meeting.</p>
                             </div>
                        </div>
                    </div>
                </div>
                
                 <!-- <div class="shape-1">
                    <img src="images/logo.png" alt="">
                </div> -->
                <div class="blur-bg"></div>
            </section>
                <section class="medical-offer">
    <div class="container">
        <div class="row clearfix align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_5">
                    <div class="content-box">
                        <div class="heading">
                            <h6>Why Choose Medical Appraisals?</h6>
                        </div>
                        <ul class="custom-list">
                          <li> Comprehensive GMC support services available worldwide, helping doctors in the UAE, Greece, Turkiye, India, Pakistan, Bangladesh, Sri Lanka, Burma, Nepal, Nigeria, Sudan, Somalia, Ghana, South Africa and other countries from Asia, Africa and Europe and beyond.</li>
<li>Specialist experience supporting internationally based doctors and those returning to UK practice after working abroad</li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            <section class="mission-vision-section">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_5">
                                <div class="content-box">
                                   <div class="heading">
                                        <h2>Our Vision</h2>
                                    </div>
                                    <p>Rehan firmly believes that an appraisal experience should be supportive, not
                                        judgemental or
                                        onerous. An appraisal is not a pass or fail event but an effort to understand your
                                        scope of
                                        work, enhance the quality and plan for future professional development with the help
                                        of an
                                        experienced and supportive appraiser.</p>
                                        <div class="heading">
                                            <h2>Our Promise</h2>
                                        </div>
                                    <p>Current appraisal providers are either unnecessarily too expensive or burdensome in their requirements.

                                        We are not. You will have direct and 1-2-1 access to Professor Kazi who is highly qualified surgeon, unbiased and experienced to handle even the complex appraisals for NHS, locum and independent sector doctors. We will be happy to help you with any appraisal coaching or the appraisal itself using the MAG form or any other recognised portfolio template.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <div class="image-bg"></div>
                                <figure class="image"><img width="600" height="500" loading="lazy" src="{{asset('frontend/images/about/ab1.jpg')}}" alt="lazy"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <section class="hero-area">
                <div class="hero-wrapper-one">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-offset-3">
                                <div class="hero-content">
                                    
                                    <div class="inner-about">
                                        <p>Medical Appraisals UK was established in 2016 as an independent, certified &amp;
                                            cost-effective
                                            medical appraisal provider for doctors by Professor Rehan Kazi.</p>
                                        <p>Rehan is a highly experienced, trained medical appraiser and Responsible Officer. He
                                            has
                                            completed over 2000 appraisals for various NHS Trusts, locum agencies, private
                                            clinics,
                                            overseas doctors and has been actively involved with healthcare licensing,
                                            regulation and
                                            clinical governance for doctors. Rehan has helped towards the set up &amp; quality
                                            assurance of
                                            the appraisal and revalidation systems for several outsource organisations.</p>
                                        <p>Rehan firmly believes that an appraisal experience should be supportive, not
                                            judgemental or
                                            onerous. An appraisal is not a pass or fail event but an effort to understand your
                                            scope of
                                            work, enhance the quality and plan for future professional development with the help
                                            of an
                                            experienced and supportive appraiser.</p>
                                        <p>Rehan is an active member of the London RO network group meetings, the locum RO
                                            network group and the GMC reference group for responsible officers. He remains
                                            active in
                                            research and his last work was on the utility of Skype-based appraisals for doctors
                                            practising
                                            in the United Kingdom presented at the NHSE locum RO network meeting.</p>
                                        <p>Current appraisal providers are either unnecessarily too expensive or burdensome in
                                            their
                                            requirements.</p>
                                        <p>We are not. You will have direct and 1-2-1 access to Professor Kazi who is highly
                                            qualified
                                            surgeon, unbiased and experienced to handle even the complex appraisals for NHS,
                                            locum
                                            and independent sector doctors. We will be happy to help you with any appraisal
                                            coaching
                                            or the appraisal itself using the MAG form or any other recognised portfolio
                                            template.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- <section class="wpo-about-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="about-img">
                                <img loading="lazy" decoding="async" src="./images/about/DSC_1200.jpg" alt="">
                                <div class="shape-1"></div>
                                <div class="shape-2"></div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="inner-about">
                                <p>Medical Appraisals UK was established in 2016 as an independent, certified &amp;
                                    cost-effective
                                    medical appraisal provider for doctors by Professor Rehan Kazi.</p>
                                <p>Rehan is a highly experienced, trained medical appraiser and Responsible Officer. He
                                    has
                                    completed over 2000 appraisals for various NHS Trusts, locum agencies, private
                                    clinics,
                                    overseas doctors and has been actively involved with healthcare licensing,
                                    regulation and
                                    clinical governance for doctors. Rehan has helped towards the set up &amp; quality
                                    assurance of
                                    the appraisal and revalidation systems for several outsource organisations.</p>
                                <p>Rehan firmly believes that an appraisal experience should be supportive, not
                                    judgemental or
                                    onerous. An appraisal is not a pass or fail event but an effort to understand your
                                    scope of
                                    work, enhance the quality and plan for future professional development with the help
                                    of an
                                    experienced and supportive appraiser.</p>
                                <p>Rehan is an active member of the London RO network group meetings, the locum RO
                                    network group and the GMC reference group for responsible officers. He remains
                                    active in
                                    research and his last work was on the utility of Skype-based appraisals for doctors
                                    practising
                                    in the United Kingdom presented at the NHSE locum RO network meeting.</p>
                                <p>Current appraisal providers are either unnecessarily too expensive or burdensome in
                                    their
                                    requirements.</p>
                                <p>We are not. You will have direct and 1-2-1 access to Professor Kazi who is highly
                                    qualified
                                    surgeon, unbiased and experienced to handle even the complex appraisals for NHS,
                                    locum
                                    and independent sector doctors. We will be happy to help you with any appraisal
                                    coaching
                                    or the appraisal itself using the MAG form or any other recognised portfolio
                                    template.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


            <!-- Start About Area -->
            <section class="choose-section full-height no-mob-hidden2">
                <div class="faq__two-left-bg">
                    <!-- <img loading="lazy" decoding="async" src="https://finaxio.netlify.app/assets/img/bg/faoq.jpg" alt=""> -->
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="choose-us-content">
                                <div class="heading">
                                    <!-- <span>Choose us
                                            </span> -->
                                    <!--  <h2>smart parking solutions</h2> -->
                                    <h2>Why choose Medical Appraisals?
                                    </h2>
                                </div>
                                <ul>
                                    <li>Simple, smooth and stress-free service</li>
                                    <li>No hidden costs</li>
                                    <li>Appraisals meet GMC/NHS criteria and are available face-to-face or online</li>
                                    <li>Direct access to your experienced appraiser, Prof Kazi</li>
                                    <li>Cost-effective and robust appraisals</li>
                                    <li>Enhance the quality of your professional work by planning your professional
                                        development</li>
                                    <li>Appraisal coaching available to help with the appraisal process</li>
                                    <li>5 star rating and reviews</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="faq__area-left">
                                <div class="faq__area-left-image">
                                    <div class="faq__area-left-image-one">
                                        <img width="250" height="417" src="{{asset('frontend/images/choose-us/choose-2.jpg')}}" loading="lazy" alt="choose us">
                                    </div>
                                    <div class="faq__area-left-image-two">
                                        <img width="250" height="417" src="{{asset('frontend/images/choose-us/choose-1.jpg')}}" loading="lazy" alt="choose us">
                                    </div>
                                    <!-- <div class="faq__area-left-image-three">
                                                <img loading="lazy" decoding="async" src="https://finaxio.netlify.app/assets/img/icon/faq.png" alt="">
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Area -->

            <div class="clearfix"></div>
            <div class="about-review review-section">
                <div class="container">
                    <div class="heading text-white text-center">
                        <h2>See Our Google Reviews</h2>
                    </div>
                    <script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-4c4a96e0-ce35-47ca-b67c-ed8869acdb14" data-elfsight-app-lazy></div>
<div class="testimonilas-carousel-wrap fl-wrap">
                                            <div class="testimonilas-carousel">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper">
                                                        <!--testi-item-->
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
                                                        <!--testi-item end-->
                                                        <!--testi-item-->
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
                                                        <!--testi-item end-->
                                                        <!--testi-item-->
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
                                                        <!--testi-item end-->
                                                        <!--testi-item-->
                                                        <!--testi-item end-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tc-pagination"></div>
                                            <!--<div class="tc-button_wrap">-->
                                            <!--    <div class="tc-button tc-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="fal fa-angle-left"></i></div>-->
                                            <!--    <div class="tc-button tc-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="fal fa-angle-right"></i></div>-->
                                            <!--</div>-->
                                        </div>
                        <a aria-label="See our google reviews" href="https://www.google.com/maps/place/Medical+Appraisals/@51.642407,-0.4480379,17z/data=!4m7!3m6!1s0x48766a4b0e02c4ad:0xfc261b1104b51436!8m2!3d51.6424021!4d-0.4458598!9m1!1b1" target="_blank" rel="noopener noreferrer" class="btn ">
                            <span>more than 700 five-star reviews</span>
                        </a>
                </div>
            </div>
            <section class="cta-btn-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <h2>Want To Know More About Our Services</h2>
                        </div>

                        <div class="col-md-3">
                            <div class="cta-btn">
                                <a href="{{route('frontend_contact_us_show')}}" class="btn color-bg"><span>Get In Touch</span></a>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <!-- Skill Section -->
            <div class="clearfix"></div>
            <section class="step-timeline full-height no-mob-hidden2">
                <div class="container">
                    <div class="heading text-center">
                        <span class="top-title">Just follow a simple 3-step process</span>
                        <h2><span>Quick start :</span> Get your medical appraisal from £350</h2>
                    </div>
                    <div class="main-timeline">
                        <div class="col-md-4">
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <img width="64" height="64" src="{{asset('frontend/images/icon/requirement.png')}}" loading="lazy" alt="requirement">
                                    </div>
                                    <div class="timeline-year">
                                        <span>STEP 1</span>
                                    </div>
                                    <div class="inner-content">
                                        <h3 class="title">Complete the appraisal form</h3>
                                        <!-- <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo
                                        </p> -->
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="timeline blue">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <img width="64" height="64" src="{{asset('frontend/images/icon/appraisal.png')}}" loading="lazy"  alt="Medical Appraisal ">
                                    </div>
                                    <div class="timeline-year">
                                        <span>STEP 2</span>
                                    </div>
                                    <div class="inner-content">
                                        <h3 class="title">Confidential Appraisal Discussion With Professor Rehan Kazi
                                            (In-Person Or Online)</h3>
                                        <!-- <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo
                                        </p> -->
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <img width="64" height="64" src="{{asset('frontend/images/icon/statistics.png')}}" loading="lazy"  alt="Strategy graph Icon">
                                    </div>
                                    <div class="timeline-year">
                                        <span>STEP 3</span>
                                    </div>
                                    <div class="inner-content">
                                        <h3 class="title">Receive your appraisal certificate</h3>
                                        <!-- <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo
                                        </p> -->
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <a href="{{route('medical_appraisal_and_revalidation')}}" class="btn ajax color-bg"><span>Get
                            Started</span></a>
                </div>
            </section>

@endsection