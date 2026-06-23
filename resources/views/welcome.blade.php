@extends('layouts.main-header')

@section('page-schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalOrganization",
      "@id": "https://medicalappraisals.org.uk/#organization",
      "name": "MEDICAL APPRAISALS",
      "url": "https://medicalappraisals.org.uk/",
      "logo": "https://medicalappraisals.org.uk/frontend/images/logo.png",
      "sameAs": [
        "https://www.facebook.com/medicalappraisals.org.uk",
        "https://twitter.com/Medappraisals",
        "https://www.youtube.com/channel/UCGv7f1oW3wjrs1hCriW6k2Q",
        "https://www.linkedin.com/in/professor-rehan-kazi-309ab45b/"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "bestRating": "5",
        "reviewCount": "753"
      }
    },
    {
      "@type": "MedicalBusiness",
      "@id": "https://medicalappraisals.org.uk/#medical-business",
      "name": "MEDICAL APPRAISALS",
      "image": "https://medicalappraisals.org.uk/frontend/images/logo.png",
      "url": "https://medicalappraisals.org.uk/",
      "telephone": "+44 7792 870 526",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "14 Imperial Way, Croxley Green",
        "addressLocality": "Rickmansworth",
        "postalCode": "WD3 3FL",
        "addressCountry": "GB"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 51.6423925,
        "longitude": -0.445895
      },
      "sameAs": [
        "https://www.facebook.com/medicalappraisals.org.uk",
        "https://twitter.com/Medappraisals",
        "https://www.youtube.com/channel/UCGv7f1oW3wjrs1hCriW6k2Q"
      ]
    },
    {
      "@type": "Person",
      "@id": "https://medicalappraisals.org.uk/#professor-rehan-kazi",
      "name": "Professor Rehan Kazi",
      "jobTitle": "Medical Appraiser & Responsible Officer",
      "url": "https://medicalappraisals.org.uk/about-us",
      "worksFor": {
        "@id": "https://medicalappraisals.org.uk/#organization"
      },
      "sameAs": [
        "https://www.linkedin.com/in/professor-rehan-kazi-309ab45b/"
      ],
      "description": "Professor Rehan Kazi is a senior medical appraiser and clinical leader providing GMC-compliant medical appraisal and revalidation services in the United Kingdom."
    },
   [
  {
    "@type": "Review",
    "@id": "https://medicalappraisals.org.uk/#review-1",
    "itemReviewed": { "@id": "https://medicalappraisals.org.uk/#organization" },
    "author": { "@type": "Person", "name": "Dr. Usha Kiran, Dubai" },
    "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
    "reviewBody": "I had my appraisal process with Prof Rham Kazi. It was a very comfortable experience. I was feeling quite anxious as I had left the UK in 2012 and was not sure how to go about it. He did the preappraisal coaching for me and explained how to go about collecting information and documentation for it and throughout the appraisal process he kept me at ease and explained things very well. I felt supported. My sincere thanks to Prof. Kazi for everything."
  },
  {
    "@type": "Review",
    "@id": "https://medicalappraisals.org.uk/#review-2",
    "itemReviewed": { "@id": "https://medicalappraisals.org.uk/#organization" },
    "author": { "@type": "Person", "name": "Dr. Lourdes Gaspar, Consultant in Anaesthetics and Pain Management" },
    "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
    "reviewBody": "Professor Kazi recently carried out my appraisal after I left the NHS hospital that I had been working at for 26 years as a consultant. I found his services to be prompt, efficient and very supportive. Professor Kazi has a complete understanding of what is needed and all the required processes. He is very knowledgeable, has a very approachable manner and my experience was very positive. He also provided me with helpful guidance and advice going forward. I highly recommend his services for anybody looking for an independent appraiser."
  },
  {
    "@type": "Review",
    "@id": "https://medicalappraisals.org.uk/#review-3",
    "itemReviewed": { "@id": "https://medicalappraisals.org.uk/#organization" },
    "author": { "@type": "Person", "name": "Gelani Baha (Dr. Elgelani Bahaeldein) - Consultant Physician/Endocrinologist" },
    "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
    "reviewBody": "It has been a pleasure to have my appraisal done by Prof.Kazi. He put me at ease and took me through the appraisal process in a detailed yet simple approach and his comments were tailored to my needs in terms of how to enhance and keep my career progress and personal development. He responds promptly and is always supportive and caring. I cannot thank him enough and I highly recommend him to highest terms for anyone seeking appraisals for their work. I will certainly conduct all my future appraisals with Prof.Kazi."
  },
  {
    "@type": "Review",
    "@id": "https://medicalappraisals.org.uk/#review-4",
    "itemReviewed": { "@id": "https://medicalappraisals.org.uk/#organization" },
    "author": { "@type": "Person", "name": "Dr. Siva Sivapragasam, FRCS(Eng), FRCS(Edin) (Consultant Surgeon)" },
    "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
    "reviewBody": "Prof Rehan Kazi is an excellent Appraiser. He made me feel comfortable and the whole process went smoothly. I would certainly recommend him as an Appraiser for all the Consultants and Junior doctors."
  },
  {
    "@type": "Review",
    "@id": "https://medicalappraisals.org.uk/#review-5",
    "itemReviewed": { "@id": "https://medicalappraisals.org.uk/#organization" },
    "author": { "@type": "Person", "name": "Dr. Azhar Ali, Cardiology Registrar" },
    "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
    "reviewBody": "Professor Kazi was really helpful during my appraisal. He listened to me patiently and guided me not only for the appraisal but also for my future goals."
  }
],
    {
      "@type": "WebSite",
      "@id": "https://medicalappraisals.org.uk/#website",
      "name": "MEDICAL APPRAISALS",
      "url": "https://medicalappraisals.org.uk/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://medicalappraisals.org.uk/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    
    {
      "@type": "Question",
      "name": "Who can use your medical appraisal service?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The service is open to all GMC-registered doctors, including those working in the NHS, private practice, academia, or as locum doctors. Overseas practitioners seeking a compliant doctor appraisal for UK revalidation are also supported." 
      }
    },
    
    {
      "@type": "Question",
      "name": "Do your appraisals meet GMC revalidation requirements?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. All appraisals conducted by Medical Appraisals UK follow GMC and NHS England guidance, ensuring they meet the full criteria for medical revalidation in the UK." 
      }
    },
    
    {
      "@type": "Question",
      "name": "Can locum doctors book annual appraisals with you?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. The service specialises in flexible, remote annual appraisals for locum doctors, making it easy for locums to stay compliant and on track with their revalidation timelines." 
      }
    },
    
    {
      "@type": "Question",
      "name": "Will you provide an appraisal certificate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. You will receive an appraisal certificate upon completion of a successful evaluation." 
      }
    },
    
    {
      "@type": "Question",
      "name": "How much does a medical appraisal cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The medical appraisal and revalidation service starts from £399 with no hidden fees. This includes full access to your appraiser, personalised support, and a streamlined, stress-free process." 
      }
    },
    
    {
      "@type": "Question",
      "name": "How do I complete my appraisal portfolio?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You may use any online appraisal software such as l2p.co.uk, fourteenfish.com, or Clarity to complete your appraisal portfolio and share it with Professor Rehan Kazi." 
      }
    },
    
    {
      "@type": "Question",
      "name": "Are you a qualified appraiser?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes — Professor Rehan Kazi is a trained, certified, and experienced medical appraiser. He is qualified to undertake even complex appraisals and appraisals of doctors doing a direct submission (annual return) to the GMC." 
      }
    },
    
    {
      "@type": "Question",
      "name": "What is different about your service compared to other appraisers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Medical Appraisals UK provides transparent, fair pricing and flexible online or in-person appraisal options. Prof Kazi is highly experienced and can handle complex appraisals. They also offer coaching and support with recognised appraisal templates, making the process smooth and stress-free." 
      }
    },
    
    {
      "@type": "Question",
      "name": "What if I have no idea about the requirements of an appraisal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In such cases, a pre-appraisal 1-to-1 coaching session is recommended to help you understand the requirements of an appraisal and how to meet them effectively." 
      }
    },
    
    {
      "@type": "Question",
      "name": "What is a significant event for a medical appraisal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Watch & Learn video on the site explains what is meant by significant events and how to record them in your appraisal portfolio." 
      }
    },
    
    {
      "@type": "Question",
      "name": "Tell me about the complaints and compliments section for a medical appraisal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A short video in the Watch & Learn section explains how to record complaints and compliments in your appraisal portfolio." 
      }
    }
    
  ]
}
</script>
@endsection
@section('content')
            <div class="nav-overlay"></div>
            <!-- navigation menu end  -->
            <!-- content-->
            <div class="content full-height" data-pagetitle="Home">
                <div class="fl-wrap full-height hero-conatiner">
                    <div class="hero-wrapper fl-wrap full-height hidden-item">
                        <!-- <span class="hc_dec"></span> -->
                        <!-- fs-slider-wrap  -->
                        <!-- hero-slider-wrap -->
                        <div class="hero-slider-wrap home-half-slider fl-wrap full-height">
                            <div class="hero-slider fs-gallery-wrap fl-wrap full-height">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- swiper-slide-->
                                        <!--<div class="swiper-slide">-->
                                        <!--    <div class="half-hero-wrap">-->
                                                <!-- <div class="hhw_header">Welcome to my Website</div> -->
                                        <!--        <h1>Are you a UK-based doctor, nurse or other <span>medical-->
                                        <!--                professional</span>-->
                                        <!--            looking for a skilled and experienced medical appraiser?</h1>-->
                                                <!-- <h4>Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. </h4> -->
                                        <!--        <div class="clearfix"></div>-->
                                        <!--        <a href="{{route('medical_appraisal_and_revalidation')}}" class="btn fl-btn color-bg"><span>Get-->
                                        <!--                Started</span></a>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!-- swiper-slide end-->
                                        <!-- swiper-slide-->
                                        <!--<div class="swiper-slide">-->
                                        <!--    <div class="half-hero-wrap">-->
                                                <!-- <div class="hhw_header">12 december 2020</div> -->
                                        <!--        <h1><span>Medical Appraisals</span> is here to support you-->
                                        <!--            with your regulatory requirements</h1>-->
                                                <!-- <h4>Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. </h4> -->
                                        <!--        <div class="clearfix"></div>-->
                                        <!--        <a href="{{route('medical_appraisal_and_revalidation')}}"-->
                                        <!--            class="btn fl-btn color-bg"><span>Get Started</span></a>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!-- swiper-slide end-->
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <div class="half-hero-wrap">
                                                <!-- <div class="hhw_header">25 may 2019</div> -->
                                                <h1>Experience the Best Appraisal Service for Doctors in the UK</span>
                                                   </h1>
                                                   <p style="color:white;">Serving GMC-registered doctors across the UK and internationally, including those based in the UAE, Greece, Turkiye, India, Pakistan, Bangladesh, Burma, Nepal, Nigeria, Sudan, Somalia, Ghana, South Africa and other countries from Asia, Africa and Europe through secure video consultations.</p>
                                                <!-- <h4>Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. </h4> -->
                                                <div class="clearfix"></div>
                                                <a href="{{route('medical_appraisal_and_revalidation')}}" class="btn fl-btn color-bg"><span>Get
                                                        Started</span></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- hero-slider-wrap  end-->
                        <!-- hero-slider-img-->
                        <div class="hero-slider-img hero-slider-wrap_halftwo hidden-item">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    
                                    
                                    <div class="swiper-slide">
                                        
                                      

<div class="bg" 
     data-bg="https://medicalappraisals.org.uk/frontend/images/banner/image2.webp" 
     data-swiper-parallax="20%" 
     style="background-image: url('https://medicalappraisals.org.uk/frontend/images/banner/image2.webp');">
</div>

                                            
                                           

<div class="overlay"></div>

                                    </div>
                                    <!-- swiper-slide end-->
                                </div>
                            </div>
                            <div class="hero-corner-dec"></div>
                            <!-- <div class="hero-corner-dec2"></div> -->
                        </div>
                        
                        <!--<div class="swiper-counter hs_counter">-->
                        <!--    <div class="current">01</div>-->
                        <!--    <div class="total"></div>-->
                        <!--</div>-->
                        <!--<div class="hero-slider_control-wrap">-->
                        <!--    <div class="hsc hsc-prev"><span><i class="fal fa-angle-left"></i></span> </div>-->
                        <!--    <div class="hsc hsc-next"><span><i class="fal fa-angle-right"></i></span></div>-->
                        <!--</div>-->
                        
                    </div>
                    
                    <!--<div class="hero-slider-wrap_pagination"></div>-->
                    <!--<div class="hero-scroll-down-notifer">-->
                    <!--    <div class="scroll-down-wrap ">-->
                    <!--        <div class="mousey">-->
                    <!--            <div class="scroller"></div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <i class="far fa-angle-down"></i>-->
                    <!--</div>-->
                </div>
            </div>
           <section class="about-us medical-about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="aboutus-content mr-15">
<p>Medical Appraisals UK offers expert-led, stress-free appraisals for doctors, nurses, and other healthcare professionals including locum doctor's appraisals. Trusted by thousands, our experienced appraisers provide personalised guidance, fast turnaround, and full compliance with GMC revalidation standards.</p> 
<p>Wherever you are in your career, we make your medical appraisal process simple, supportive, and seamless.                </p>
<p>We are widely regarded as the best appraisal service for doctors in UK as evidenced by our more than 700 google 5-star reviews!</p>
                </div>
            </div>
            <div class="images-column col-md-6">
                <div class="inner-column">
                    <div class="images">
                        <div class="image mask-skew" style="top: 86px;">
                            <img loading="lazy" decoding="async" src="{{asset('frontend/images/about/thumbnail_Rehan sir Image 3.png
')}}" alt="Senior medical appraiser guiding doctors through GMC revalidation">
                        </div>
                        <div class="image-two mask-skew">
                            <img loading="lazy" decoding="async" width="2000" height="1997" src="{{asset('frontend/images/shutterstock_1681615882.jpg')}}" alt="Medical professional discussing annual appraisal requirements">
                        </div>
                        <div class="image-three mask-skew">
                            <img loading="lazy" decoding="async" width="500" height="499" src="{{asset('frontend/images/shutterstock_1723631059.jpg')}}" alt="Doctor reviewing records for appraisal and revalidation compliance">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    

<section class="medical-offer">
    <div class="container">
        <div class="row clearfix align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_5">
                    <div class="content-box">

                        <div class="heading">
                            <h6>What We Offer</h6>
                        </div>

                        <div class="panel-group faq-cont" id="accordion" role="tablist" aria-multiselectable="true">

                            <!-- Annual Appraisal for Locum Doctors -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading1">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            Annual Appraisal for Locum Doctors
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                                    <div class="panel-body">
                                        <p>Seamless, GMC-compliant locum doctors appraisals tailored to flexible working patterns.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Doctor Appraisals Across All Specialties -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Doctor Appraisals Across All Specialities
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                    <div class="panel-body">
                                        <p>Expert-led appraisal for doctors in NHS, private practice, academia, and locum roles.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Medical Appraisal and Revalidation Support -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading3">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            Medical Appraisal and Revalidation Support
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                    <div class="panel-body">
                                        <p>End-to-end assistance with your medical revalidation and revalidation UK requirements.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Experienced Medical Appraisers -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            Experienced Medical Appraisers
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="panel-body">
                                        <p>Work with trusted medical appraisers who understand the pressures of modern clinical practice.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Remote and Convenient Medical Appraisals -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading5">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            Remote and Convenient Medical Appraisals
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                    <div class="panel-body">
                                        <p>Flexible online options to suit busy professionals, including locum appraisal and remote doctors.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Trusted Appraisal Service in the UK -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading6">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            Trusted Appraisal Service in the UK
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                    <div class="panel-body">
                                        <p>At Medical Appraisals UK, we deliver the best and most supportive medical practice appraisals that help you grow with confidence.</p>
                                    </div>
                                </div>
                            </div>
 <!-- Trusted Appraisal Service in the UK -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading7">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                           International Appraisal Support for Overseas Doctors
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                    <div class="panel-body">
                                        <p>We support GMC-registered doctors based internationally, including those in the UAE, Greece, Turkiye, India, Pakistan, Bangladesh, Sri Lanka, Burma, Nepal, Nigeria, Sudan, Somalia, Ghana, South Africa and other countries from Asia, Africa and Europe offering appraisals, designated body connections, and revalidation guidance through a fully online service, wherever you are in the world.</p>
                                    </div>
                                </div>
                            </div>

                        </div><!-- End Accordion -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="choose-section full-height no-mob-hidden2">
    <div class="faq__two-left-bg"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="choose-us-content">
                    <div class="heading" >
                        <h2 style="font-size: 29px;">Why Choose Medical Appraisals UK?</h2>
                       <br>
                    </div>
                    <ul class="">
                        <li>Simple, stress-free, best appraisal service for doctors</li>
                        <li>No hidden costs transparent pricing</li>
                        <li>Meets all GMC/NHS appraisal standards</li>
                        <li>Online or face-to-face locum doctor's appraisal</li>
                        <li>Direct access to expert medical appraiser Prof. Kazi</li>
                        <li>Supports medical revalidation and career growth</li>
                        <li>Best and most reputable medical appraisal service in the world</li>
                        <li>Proudly serving GMC-registered doctors worldwide, including those based in the UAE, Greece, Turkiye, India, Pakistan, Bangladesh, Sri Lanka, Burma, Nepal, Nigeria, Sudan, Somalia, Ghana, South Africa and other countries from Asia, Africa and Europe</li>
                        <li>Flexible appointment slots available Monday to Saturday to accommodate doctors across different international time zones.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="faq__area-left">
                    <video style="bottom:auto; width: 100%; height: 400px;" controls>
                        <source src="https://medicalappraisals.org.uk/frontend/images/Medical_Appraisal_Marketing_latest.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
            <!-- End About Area -->
            <!--<section class="step-timeline full-height no-mob-hidden2">-->
            <!--    <div class="container">-->
            <!--        <div class="heading text-center">-->
            <!--            <span class="top-title">Just follow a simple 3-step process</span>-->
            <!--            <h2><span>Quick start :</span> Get your medical appraisal from £399</h2>-->
            <!--        </div>-->
            <!--        <div class="main-timeline">-->
            <!--            <div class="col-md-4">-->
            <!--                <div class="timeline">-->
            <!--                    <div class="timeline-content">-->
                                    
            <!--                         <div class="timeline-icon">-->
            <!--                            <img loading="lazy" decoding="async" src="{{asset('frontend/images/icon/requirement.webp')}}" width="60" height="60" alt="">-->
            <!--                        </div>-->
            <!--                        <div class="timeline-year">-->
            <!--                            <span>STEP 1</span>-->
            <!--                        </div>-->
            <!--                        <div class="inner-content">-->
            <!--                            <h3 class="title">Complete the appraisal form (using the MAG form or any other appraisal software)</h3>-->
                                        
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-md-4">-->
            <!--                <div class="timeline blue">-->
            <!--                    <div class="timeline-content">-->
            <!--                        <div class="timeline-icon">-->
            <!--                            <img loading="lazy" decoding="async" src="{{asset('frontend/images/icon/appraisal.webp')}}" width="60" height="60" alt="">-->
            <!--                        </div>-->
            <!--                        <div class="timeline-year">-->
            <!--                            <span>STEP 2</span>-->
            <!--                        </div>-->
            <!--                        <div class="inner-content">-->
            <!--                            <h3 class="title">Get in touch (using our email or <a aria-label="Contact Form" style="color: #90ea58" href="https://medicalappraisals.org.uk/contact-us" target="_blank" rel="noopener noreferrer">contact form</a> to book your appraisal meeting</h3>-->
                                        
            <!--                        </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            </div>-->
            <!--            <div class="col-md-4">-->
            <!--                <div class="timeline">-->
            <!--                    <div class="timeline-content">-->
                                    
            <!--                          <div class="timeline-icon">-->
            <!--                            <img loading="lazy" decoding="async" src="{{asset('frontend/images/icon/statistics.webp')}}" width="60" height="60" alt="">-->
            <!--                        </div>-->
            <!--                        <div class="timeline-year">-->
            <!--                            <span>STEP 3</span>-->
            <!--                        </div>-->
            <!--                        <div class="inner-content">-->
            <!--                            <h3 class="title">Attend the appraisal meeting (video or in person)</h3>-->
                                        
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--        </div>-->
            <!--        <div class="clearfix"></div>-->
            <!--        <a href="{{route('medical_appraisal_and_revalidation')}}" class="btn color-bg"><span>Get-->
            <!--                Started</span></a>-->
            <!--    </div>-->
            <!--    </div>-->
            <!--</section>-->
                       
<section class="about-us no-mob-hidden2" style="position: relative; padding: 90px 0; background: #f9f9f9; overflow: hidden;">
    <!-- Background overlay -->
    <div style="position: absolute; inset: 0; background: rgba(255, 255, 255, 0.85); z-index: 0;"></div>

    <!-- Decorative background shapes -->
    <div class="bg-shape" style="position: absolute; width: 450px; height: 450px; background: radial-gradient(circle at center, #d1e6df, transparent); top: -120px; left: -120px; border-radius: 50%; z-index: 0;"></div>
    <div class="bg-shape" style="position: absolute; width: 400px; height: 400px; background: radial-gradient(circle at center, #f3dada, transparent); bottom: -100px; right: -100px; border-radius: 50%; z-index: 0;"></div>

    <!-- Decorative floating images -->
    <div class="bg-images" style="position: absolute; right: -60px; top: 50%; transform: translateY(-50%); z-index: 0; opacity: 0.12;">
        <div style="position: relative;">
<img width="5496" height="5504" class="float-img" src="{{ asset('frontend/images/about/DSC_1193.jpg') }}" alt="Doctor receiving professional medical appraisal and revalidation support" loading="lazy" style="width: 220px; border-radius: 12px; position: absolute; top: -40px; left: 0;">
            <img loading="lazy" decoding="async" width="2000" height="1997" class="float-img" src="{{asset('frontend/images/shutterstock_1681615882.jpg')}}" alt="Doctor discussing medical appraisal with colleague" style="width: 180px; border-radius: 12px; position: absolute; top: 60px; left: 120px;">
            <img loading="lazy" decoding="async" width="500" height="499" class="float-img" src="{{asset('frontend/images/shutterstock_1723631059.jpg')}}" alt="Doctor reviewing records for appraisal and revalidation compliance" style="width: 200px; border-radius: 12px; position: absolute; top: 160px; left: -40px;">
        </div>
    </div>

    <div class="container position-relative" style="z-index: 1;">
        <!-- Section Title -->
        <div class="text-center">
            <h2 class="fw-bold" style="font-size: 38px; color: #222;">Meet Our Team</h2>
            <p style="max-width: 750px; margin: auto; line-height: 28px; color: #555; font-size: 16px;">
                At <strong>Medical Appraisals UK</strong>, our team consists of experienced, GMC-recognised medical appraisers 
                who understand the realities of modern clinical practice. We are committed to delivering supportive, 
                high-quality appraisals for doctors across the UK and internationally.
            </p>
            <br>
            <br>
        </div>
<br>
        <div class="row align-items-center">
            <!-- Image Side -->
            <div class="col-lg-6 mb-5 mb-lg-0 text-center">
                <div class="position-relative" style="max-width: 540px; margin: auto;">
                    <img loading="lazy" decoding="async" width="600" height="400" src="{{ asset('frontend/images/thumbnail_Rehan Sir Image 1.png') }}" 
                         alt="Professor Rehan Kazi" 
                         class="img-fluid shadow-lg about-image" 
                         style="border-radius: 20px; transition: transform 0.4s ease, box-shadow 0.4s ease;">
                </div>
            </div>

            <!-- Content Side -->
            <div class="col-lg-6">
                <div style="max-width: 550px; margin: auto;">
                    <h4 class="fw-semibold mb-2" style="color: #0b649f; font-size: 22px;">
                        Professor Rehan Kazi 
                        <small class="text-muted d-block mt-1" style="font-size: 14px;">Lead Medical Appraiser</small>
                    </h4>
                    <p style="line-height: 28px; color: #555; font-size: 16px;">
                        Prof. Rehan Kazi, founder of Medical Appraisals UK (est. 2016), is a highly experienced head and neck surgeon, medical appraiser, and Responsible Officer. He has completed over <strong>3,000+</strong> appraisals for NHS Trusts, locum agencies, private clinics, and overseas doctors and has received over <u>700 five-star Google reviews.</u>

                    </p>
                    <p style="line-height: 28px; color: #555; font-size: 16px;">
                        Actively involved with national groups including the GMC Reference Group and Locum RO Network, 
                        he is known for his clear, supportive approach and leads our team in delivering trusted, 
                        high-standard doctor appraisals worldwide.
                    </p>

                    <a href="{{ route('frontend_about_us_show') }}" 
                       class="btn mt-4 px-4 py-2 about-btn" 
                       style="background-color: #0b649f; color: #fff; border-radius: 30px; font-weight: 500; transition: all 0.3s ease; font-size: 15px;">
                        Find Out More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-btn-wrap home-cta">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Book Your Advisory Call Today!</h2>
            </div>
            <div class="col-md-3">
                <div class="cta-btn-advisory">
                    <a href="{{route('appraisal_advisory_call')}}" class="btn color-bg"><span>Book Now</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hover & Animation Effects -->
<style>
.btn:before {
    display: none !important;
}

.about-us .about-image {
    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.18); /* Always visible shadow */
    cursor: pointer;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.about-us .about-image:hover {
    transform: scale(1.04);
}

/* Click effect */
.about-us .about-image:active {
    transform: scale(1.02);
    box-shadow: 0 22px 55px rgba(0, 0, 0, 0.25); /* Slightly stronger on click */
}

.about-us .about-image:hover {
    transform: scale(1.04);
    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.18);
}

.float-img {
    animation: floatAnim 6s ease-in-out infinite;
}
.float-img:nth-child(2) {
    animation-delay: 2s;
}
.float-img:nth-child(3) {
    animation-delay: 4s;
}
@keyframes floatAnim {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
}
</style>




            <div class="clearfix"></div>
            <!-- Skill Section -->

            <!--<section class="service-section full-height no-mob-hidden2">-->

            <!--    <div class="container">-->
            <!--        <div class="row">-->
            <!--            <div class="heading text-white text-center">-->
                            <!-- <span>Our full list of services</span> -->
            <!--                <h2>Our Services</h2>-->
            <!--            </div>-->
            <!--            <div class="col-md-12">-->
            <!--                <div class="owl-carousel owl-theme" id="treatment">-->
            <!--                    <div class="item">-->
            <!--                        <div class="service-block-one">-->
            <!--                            <div class="inner-box">-->
            <!--                                <div class="inner">-->
                                                
            <!--                                     <div class="icon-box">-->
            <!--                                        <img loading="lazy" decoding="async" src="{{asset('frontend/images/services/checklist.png')}}" width="80" height="80" alt="">-->
            <!--                                    </div>-->
                                                
                                                
            <!--                                    <h5><a href="{{route('frontend_contact_us_show')}}">Medical Appraisals & Revalidation</a>-->
            <!--                                    </h5>-->
            <!--                                    <p>We aim to provide a stress-free, cost-effective, robust and quality-->
            <!--                                        assured appraisal service for doctors, locums & GPs as per NHSE and-->
            <!--                                        GMC guidance.-->

            <!--                                    </p>-->
            <!--                                    <div class="link"><a aria-label="Book Now" href="{{route('frontend_contact_us_show')}}"><i-->
            <!--                                                class="fa fa-long-arrow-right" aria-hidden="true"></i>-->
            <!--                                            <span>book now</span></a></div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="item">-->
            <!--                        <div class="service-block-one">-->
            <!--                            <div class="inner-box">-->
            <!--                                <div class="inner">-->
                                                
            <!--                                     <div class="icon-box">-->
            <!--                                        <img loading="lazy" decoding="async" src="{{asset('frontend/images/services/conversation.png')}}" width="80" height="80" alt="">-->
            <!--                                    </div>-->
                                                
            <!--                                    <h5><a href="{{route('frontend_contact_us_show')}}">Responsible Officer Services-->
            <!--                                        </a></h5>-->
            <!--                                    <p>We offer advise and support to organisations, locum agencies, small &-->
            <!--                                        large clinics who are a designated body or want to become one.-->

            <!--                                    </p>-->
            <!--                                    <div class="link"><a aria-label="Book Now" href="{{route('frontend_contact_us_show')}}"><i-->
            <!--                                                class="fa fa-long-arrow-right" aria-hidden="true"></i>-->
            <!--                                            <span>book now</span></a></div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->

            <!--                    <div class="item">-->
            <!--                        <div class="service-block-one">-->
            <!--                            <div class="inner-box">-->
            <!--                                <div class="inner">-->
            <!--                                    <div class="icon-box">-->
                                                    
            <!--                                        <img loading="lazy" decoding="async" src="{{asset('frontend/images/services/assurance.png')}}" width="80" height="80" alt="">-->
            <!--                                    </div>-->
                                                
            <!--                                    <h5><a href="{{route('frontend_contact_us_show')}}">Assurance for Designated Bodies-->

            <!--                                        </a></h5>-->
            <!--                                    <p>For designated bodies and Responsible Officers who wish to commission-->
            <!--                                        an external quality assurance review of the systems and processes.-->

            <!--                                    </p>-->
            <!--                                    <div class="link"><a aria-label="Book Now" href="{{route('frontend_contact_us_show')}}"><i-->
            <!--                                                class="fa fa-long-arrow-right" aria-hidden="true"></i>-->
            <!--                                            <span>book now</span></a></div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->

            <!--                    <div class="item">-->
            <!--                        <div class="service-block-one">-->
            <!--                            <div class="inner-box">-->
            <!--                                <div class="inner">-->
                                                
            <!--                                    <div class="icon-box"><img loading="lazy" decoding="async" src="{{asset('frontend/images/services/healthcare.png')}}" width="80" height="80" alt="">-->
            <!--                                    </div>-->
                                                
            <!--                                    <h5><a href="{{route('frontend_contact_us_show')}}">Medico-legal Support-->
            <!--                                        </a></h5>-->
            <!--                                    <p>Tailored advice and support to doctors in disciplinary and regulatory-->
            <!--                                        matters with the Trust, GMC, GDC in investigations, medical-->
            <!--                                        tribunals, IOPs, in contractual issues and other Employment-->
            <!--                                        Procedures and Partnership matters.-->

            <!--                                    </p>-->
            <!--                                    <div class="link"><a aria-label="Book Now" href="{{route('frontend_contact_us_show')}}"><i-->
            <!--                                                class="fa fa-long-arrow-right" aria-hidden="true"></i>-->
            <!--                                            <span>book now</span></a></div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="item">-->
            <!--                        <div class="service-block-one">-->
            <!--                            <div class="inner-box">-->
            <!--                                <div class="inner">-->
                                                
            <!--                                    <div class="icon-box"> <img loading="lazy" decoding="async"  src="{{asset('frontend/images/services/leadership.png')}}" width="80" height="80" alt="">-->
            <!--                                    </div>-->
                                                
            <!--                                    <h5><a href="{{route('frontend_contact_us_show')}}">Career Coaching-->


            <!--                                        </a></h5>-->
            <!--                                    <p>Transition coaching & Lifestyle coaching. We offer a bespoke coaching-->
            <!--                                        service for doctors who need some guidance and advise whilst-->
            <!--                                        considering a new career pathway or experiencing a transition or are-->
            <!--                                        considering lifestyle changes.-->
            <!--                                    </p>-->
            <!--                                    <div class="link"><a aria-label="Book Now" href="{{route('frontend_contact_us_show')}}"><i-->
            <!--                                                class="fa fa-long-arrow-right" aria-hidden="true"></i>-->
            <!--                                            <span>book now</span></a></div>-->
            <!--                                </div>-->
                                           
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->
            <div class="clearfix"></div>
            <!-- Skill Section -->

                                <!--section end-->          
            <section class="testimonial-section no-mob-hidden2">
                <div class="container">
        
                    <div class="heading text-white text-center">
                        <!-- <span>Testimonials
                        </span> -->
                        <!--  <h2>User Feedbackssmart parking solutions</h2> -->
                        <h2>See our google reviews</h2>
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
                    <!--<div class="col-md-12" id="elfsight-container">-->
                        
                    <!--    <div class="elfsight-app-a34af474-1c67-4f86-8fb8-ad89accfa538"></div>-->
                        <a aria-label="See our google reviews" href="https://www.google.com/maps/place/Medical+Appraisals/@51.642407,-0.4480379,17z/data=!4m7!3m6!1s0x48766a4b0e02c4ad:0xfc261b1104b51436!8m2!3d51.6424021!4d-0.4458598!9m1!1b1" target="_blank" rel="noopener noreferrer" class="btn">
                            <span>more than 700 five-star reviews</span>
                        </a>
                    <!--</div>-->
                </div>
            </section>
            
            <section class="medical-offer">
    <div class="container">
        <div class="row clearfix align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_5">
                    <div class="content-box">

                        <div class="heading">
                            <h6>FAQs</h6>
                        </div>

                        <div class="panel-group faq-cont" id="faqAccordion" role="tablist" aria-multiselectable="true">

                            <!-- FAQ 1 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading1faq">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse1faq" aria-expanded="true" aria-controls="collapse1faq">
                                            1. Who can use your medical appraisal service?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1faq" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1faq">
                                    <div class="panel-body">
                                        <p>Our service is open to all GMC-registered doctors, including those working in the NHS, private practice, academia, or as locum doctors. We also support overseas practitioners seeking a compliant doctor appraisal for UK revalidation.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading2faq">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse2faq" aria-expanded="false" aria-controls="collapse2faq">
                                            2. Do your appraisals meet GMC revalidation requirements?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2faq">
                                    <div class="panel-body">
                                        <p>Yes. All appraisals conducted by Medical Appraisals UK follow GMC and NHS England guidance, ensuring they meet the full criteria for medical revalidation in the UK.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading3faq">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse3faq" aria-expanded="false" aria-controls="collapse3faq">
                                            3. Can locum doctors book annual appraisals with you?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3faq">
                                    <div class="panel-body">
                                        <p>Absolutely. We specialise in flexible, remote annual appraisals for locum doctors, making it easy for locums to stay compliant and on track with their revalidation timelines.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4faq">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse4faq" aria-expanded="false" aria-controls="collapse4faq">
                                            4. Will you provide an appraisal certificate?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse4faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4faq">
                                    <div class="panel-body">
                                        <p>Absolutely, you will receive an appraisal certificate upon completion of a successful evaluation.</p>
                                    </div>
                                </div>
                            </div>

                          <!-- FAQ 5 -->
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading5faq">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse5faq" aria-expanded="false" aria-controls="collapse5faq">
                5. How much does a medical appraisal cost?
            </a>
        </h4>
    </div>
    <div id="collapse5faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5faq">
        <div class="panel-body">
            <p>Our medical appraisal and revalidation service starts from just £399, with no hidden fees. This includes full access to your appraiser, personalised support, and a streamlined, stress-free process.</p>
        </div>
    </div>
</div>

<!-- FAQ 6 -->
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading6faq">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse6faq" aria-expanded="false" aria-controls="collapse6faq">
                6. How do I complete my appraisal portfolio?
            </a>
        </h4>
    </div>
    <div id="collapse6faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6faq">
        <div class="panel-body">
            <p>You may use any online appraisal software like <a href="https://l2p.co.uk" target="_blank" rel="noopener noreferrer">l2p.co.uk</a>, <a href="https://www.fourteenfish.com" target="_blank" rel="noopener noreferrer">fourteenfish.com</a>, or Clarity to complete your appraisal portfolio and share it with Prof Rehan Kazi.</p>
        </div>
    </div>
</div>

<!-- FAQ 7 -->
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading7faq">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse7faq" aria-expanded="false" aria-controls="collapse7faq">
                7. Are you a qualified appraiser?
            </a>
        </h4>
    </div>
    <div id="collapse7faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7faq">
        <div class="panel-body">
            <p>Yes – Professor Rehan Kazi is a trained, certified, experienced medical appraiser. He is qualified to undertake even complex appraisals and appraisals of doctors doing a direct submission (annual return) to the GMC. Proof can be provided if required.</p>
        </div>
    </div>
</div>

<!-- FAQ 8 -->
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading8faq">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse8faq" aria-expanded="false" aria-controls="collapse8faq">
                8. What is different about your service compared to other appraisers?
            </a>
        </h4>
    </div>
    <div id="collapse8faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8faq">
        <div class="panel-body">
            <p>Current appraisal providers are either unnecessarily too expensive or burdensome in their requirements. We are not. Professor Kazi is well trained, unbiased, and experienced to handle even complex appraisals for NHS, locum, and independent sector doctors. We also provide appraisal coaching and use the MAG form or any recognised portfolio template.</p>
            <p>We appreciate that the appraisal process can be burdensome and cause anxiety. We conduct appraisals via Skype or face-to-face as per your convenience, ensuring a smooth and stress-free process. Our charges are transparent and fair, reflected in positive reviews on Google and other sites.</p>
            <p>Blogs on our website provide useful information and mythbusters to help doctors complete their appraisal requirements. We can also provide a super-quick appraisal appointment within 24–48 hours if your portfolio is complete.</p>
        </div>
    </div>
</div>

<!-- FAQ 9 -->
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading9faq">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse9faq" aria-expanded="false" aria-controls="collapse9faq">
                9. I have no idea about the requirements of an appraisal?
            </a>
        </h4>
    </div>
    <div id="collapse9faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9faq">
        <div class="panel-body">
            <p>In such a case, we strongly suggest a pre-appraisal 1-2-1 coaching session with us. This will bring you up to speed with the requirements of an appraisal and how to meet them effectively.</p>
        </div>
    </div>
</div>

<!-- FAQ 10 -->
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading10faq">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse10faq" aria-expanded="false" aria-controls="collapse10faq">
                10. What is a significant event for a medical appraisal?
            </a>
        </h4>
    </div>
    <div id="collapse10faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10faq">
        <div class="panel-body">
            <p>The short video in our <strong>Watch and Learn</strong> section explains what is meant by a significant event for your appraisal and how to record this in your appraisal portfolio.</p>
             <p><a href="https://medicalappraisals.org.uk/watch-and-learn" target="_blank" rel="noopener noreferrer">Watch here</a></p>
        </div>
    </div>
</div>
<!-- FAQ 11 -->
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading11faq">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse11faq" aria-expanded="false" aria-controls="collapse11faq">
                11. Tell me about the complaints and compliments section for a medical appraisal?
            </a>
        </h4>
    </div>
    <div id="collapse11faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11faq">
        <div class="panel-body">
            <p>The short video in our <strong>Watch and Learn</strong> section explains how to record complaints and compliments in your appraisal portfolio.</p>
            <p><a href="https://medicalappraisals.org.uk/watch-and-learn" target="_blank" rel="noopener noreferrer">Watch here</a></p>
        </div>
    </div>
</div>

<!-- FAQ 12 -->
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading12faq">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse12faq" aria-expanded="false" aria-controls="collapse12faq">
                12. Can I use your services if I am a GMC-registered doctor based outside the UK, for example in the UAE, India, or Pakistan?
            </a>
        </h4>
    </div>
    <div id="collapse12faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12faq">
        <div class="panel-body">
            <p>Yes, absolutely. Our services are fully available to GMC-registered doctors worldwide. We regularly support doctors based in the UAE, Greece, Turkiye, India, Pakistan, Bangladesh, Burma, Sri Lanka, Nepal, Nigeria, Sudan, Somalia, Ghana, South Africa and other countries from Asia, Africa and Europe with their medical appraisals, designated body connections, and GMC revalidation. Consultations are available via video or telephone, with appointment times scheduled Monday to Saturday to suit different time zones.</p>
        </div>
    </div>
</div><!-- FAQ 13 -->
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading13faq">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#collapse13faq" aria-expanded="false" aria-controls="collapse13faq">
                13. I trained outside the UK and have recently obtained GMC registration where do I start?
            </a>
        </h4>
    </div>
    <div id="collapse13faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13faq">
        <div class="panel-body">
            <p>The best first step is to book a 30-minute advisory call with Professor Rehan Kazi. He has supported hundreds of international medical graduates from India, Pakistan, Egypt, Nigeria, Sri Lanka, and the Philippines through their first GMC appraisal and revalidation cycle. In one focused session, he will explain exactly what you need, what documentation to prepare, and what your revalidation timeline looks like giving you complete clarity on your next steps.</p>
        </div>
    </div>
</div>

                        </div><!-- End Accordion -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            <div class="skill-section">
                <div class="image-layer"></div>
                    <div class="container" id="elfsight-container2" style="display:none;">
                        
<div class="elfsight-app-1148bbc6-5f73-45e2-91f0-d5f2795795c3"></div>
                    
                    <a aria-label="Visit Our Youtube Channel" href="https://www.youtube.com/c/MedicalAppraisals" class="btn color-bg"><span>Visit Our Youtube Channel</span></a>

                </div>
            </div>
<script>
    window.onload = function() {
        // Select the container element
        var elfsightContainer = document.getElementById('elfsight-container');
        var elfsightContainer2 = document.getElementById('elfsight-container2');
        
        // Make the content visible after page load
        elfsightContainer.style.display = 'block';
        elfsightContainer2.style.display = 'block';
        
        var prefetchLink = document.createElement('link');
        prefetchLink.rel = 'prefetch';
        prefetchLink.href = 'https://apps.elfsight.com/p/platform.js';
        document.head.appendChild(prefetchLink);

        // Optional: Dynamically load the script
        var script = document.createElement('script');
        script.src = 'https://apps.elfsight.com/p/platform.js';
        script.async = true;
        document.body.appendChild(script);
    };
</script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS (v3.x for your markup style) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@endsection