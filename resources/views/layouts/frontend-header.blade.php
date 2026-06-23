<!DOCTYPE HTML>
<html lang="en">

<head>
    
    <!--=============== basic  ===============-->
@php
use Illuminate\Support\Str;

// Build current URL
$link = request()->fullUrl();

// Default meta from child pages
$metaTitle = trim($__env->yieldContent('page-title'));
$metaKeywords = trim($__env->yieldContent('page-keywords'));
$metaDescription = trim($__env->yieldContent('page-description'));


// BLOG pagination SEO
if (Str::startsWith($link, 'https://medicalappraisals.org.uk/blogs')) {

    $page = (int) request()->get('page', 0); // 0 = main /blogs page

    /* =========================
       META TITLES
    ========================== */

    if ($page === 0) {
        // https://medicalappraisals.org.uk/blogs
        $metaTitle = "Medical Appraisal & Revalidation Blog | UK Healthcare Insights";
    } elseif ($page === 1) {
        $metaTitle = "Medical Appraisal Blogs – Page 1 | UK Doctor Revalidation";
    } else {
        $metaTitle = "Medical Appraisal Blogs – Page {$page} | UK Doctors & Revalidation";
    }

    /* =========================
       META DESCRIPTIONS
    ========================== */

    if ($page === 0) {
        $metaDescription = "Browse medical appraisal articles for UK doctors covering revalidation, NHS updates, compliance tips, and professional guidance from experts.";
    } elseif ($page === 1) {
        $metaDescription = "Expert insights on medical appraisals, revalidation, and NHS guidance for UK doctors. Read the latest updates from trusted appraisal professionals.";
    } elseif (in_array($page, [3,4,5,6,7,8,9,10])) {
        $metaDescription = "Browse earlier medical appraisal blogs with expert insights on UK doctor revalidation, appraisal requirements, and NHS guidance.";
    } else {
        // fallback for future pagination pages
        $metaDescription = "Explore medical appraisal blogs for UK doctors with practical advice on revalidation, appraisal preparation, and regulatory requirements.";
    }
}

$robotsMeta = 'index, follow';
$showRobots = true; // controls whether the robots meta tag prints

// BLOG pages: do not output robots meta tag at all
if (Str::startsWith($link, 'https://medicalappraisals.org.uk/blogs')) {
    $showRobots = false;
}
@endphp



<meta charset="UTF-8">
<meta name="referrer" content="strict-origin-when-cross-origin">
<title>{{ $metaTitle }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@if($showRobots)
<meta name="robots" content="{{ $robotsMeta }}">
@endif<meta name="keywords" content="{{ $metaKeywords }}">
<meta name="description" content="{{ $metaDescription }}">
<link rel="canonical" href="<?php echo $link; ?>">
<link rel="alternate" hreflang="x-default" href="<?php echo $link; ?>">

    <!--=============== css  ===============-->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link href="{{asset('frontend/css/plugins.css')}}" type="text/css" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link href="{{asset('frontend/css/magnific-popup.css')}}" type="text/css" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link href="{{asset('frontend/css/owl.theme.default.min.css')}}" type="text/css" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link href="{{asset('frontend/css/owl.carousel.min.css')}}" type="text/css" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" as="style" href="{{asset('frontend/css/style1.css')}}" rel="preload" as="style" onload="this.rel='stylesheet'">
    
    <link href="{{asset('frontend/css/color.css')}}" type="text/css" rel="preload" as="style" onload="this.rel='stylesheet'">
    
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}"> 
    
    @php
        $isBlog   = \Illuminate\Support\Str::contains($link, '/blog/');
        $hasOg    = file_exists(public_path('frontend/images/og-image.jpg'));
        $ogImage  = $hasOg ? asset('frontend/images/og-image.jpg') : asset('frontend/images/logo.png');
        $ogImageW = $hasOg ? 1200 : 350;
        $ogImageH = $hasOg ? 630  : 111;
    @endphp
    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="{{ $isBlog ? 'article' : 'website' }}">
    <meta property="og:title" content="{{ $metaTitle }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:url" content="{{ $link }}">
    <meta property="og:site_name" content="Medical Appraisals">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:image:width" content="{{ $ogImageW }}">
    <meta property="og:image:height" content="{{ $ogImageH }}">
    @if($isBlog)
    <meta property="article:author" content="Prof. Rehan Kazi">
    <meta property="article:publisher" content="https://www.facebook.com/medicalappraisals.org.uk">
    @endif
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Medappraisals">
    <meta name="twitter:title" content="{{ $metaTitle }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    
   
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalOrganization",
      "name": "MEDICAL APPRAISALS",
      "url": "https://medicalappraisals.org.uk/",
      "logo": "https://medicalappraisals.org.uk/frontend/images/logo.png",
      "sameAs": [
        "https://www.facebook.com/medicalappraisals.org.uk",
        "https://twitter.com/Medappraisals",
        "https://www.youtube.com/channel/UCGv7f1oW3wjrs1hCriW6k2Q",
        "https://www.linkedin.com/in/professor-rehan-kazi-309ab45b/"
      ]
    }
    </script>

    <script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "WebSite",
    "name": "MEDICAL APPRAISALS",
    "url": "https://medicalappraisals.org.uk/",
    "potentialAction": {
    "@type": "SearchAction",
    "target": "https://medicalappraisals.org.uk/?s={search_term_string}",
    "query-input": "required name=search_term_string"
    }
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "MEDICAL APPRAISALS",
      "image": "https://medicalappraisals.org.uk/frontend/images/logo.png",
      "@id": "",
      "url": "https://medicalappraisals.org.uk/",
      "telephone": "+44 - 7792 870 526",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "14 Imperial Way, Croxley Green, Rickmansworth WD3 3FL,",
        "addressLocality": "England",
        "postalCode": "3FL",
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
        "https://www.youtube.com/channel/UCGv7f1oW3wjrs1hCriW6k2Q",
        "https://www.linkedin.com/in/professor-rehan-kazi-309ab45b/"
      ] 
    }
    </script>


    <!-- Google tag (gtag.js) -->
    <script src="https://www.googletagmanager.com/gtag/js?id=AW-869870078" async></script>
    
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-869870078');
    </script>
    
    <!-- Event snippet for Contact Us page Enquiry conversion page -->
    <script>
      gtag('event', 'conversion', {'send_to': 'AW-869870078/Km-GCLjyqmsQ_tPkngM'});
    </script>
    
    <script src="https://integration.beyondchats.com/chat-widget?orgId=medicalappraisals.org.uk" async></script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NC78GWK');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NC78GWK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- loader   -->
    <!--<div class="loader">-->
    <!--    <div class="loading-text-container "><span class="loading-text">Load<strong>ing</strong></span> <span-->
    <!--            class="loader_count">0</span></div>-->
    <!--    <div class="loader-anim"></div>-->
    <!--    <div class="loader-anim2 color-bg"></div>-->
    <!--</div>-->
    <!-- loader  end-->
    
    <!-- main start  -->
    <div id="main">
        <!-- header-->
        <header class="main-header"> 
            <a href="{{url('/')}}" class="logo-holder">
                <img width="350" height="111" fetchpriority="high" src="{{asset('frontend/images/logo.png')}}" alt="Medical Appraisals Logo">
            </a>
            <div class="nav-button but-hol">
                <span class="ncs"></span>
                <span class="nos"></span>
                <span class="nbs"></span>
                <div class="menu-button-text">Menu</div>
            </div>
            <div class="header-contacts">
                <ul>
                    <li><span><i class="fa fa-phone-alt" aria-hidden="true"></i>
                    </span> <a href="tel:+447792870526">+447792870526</a></li>
                    <li><span><i class="fa fa-envelope" aria-hidden="true"></i>
                    </span> <a
                            href="mailto:admin@medicalappraisals.org.uk">admin@medicalappraisals.org.uk</a></li>
                </ul>
            </div>
        </header>
        <aside class="left-header">
            <span class="lh_dec color-bg"></span>
            <div class="left-header_social">
                <ul>
                    <li><a href="https://www.facebook.com/medicalappraisals.org.uk" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/Medappraisals" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/professor-rehan-kazi-309ab45b/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="mailto:?subject=Check this https://medicalappraisals.org.uk" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a></li>
                                        <!--<li><a href="https://medicalappraisals.beezer.com/" target="_blank" rel="noopener noreferrer"><i class="fas fa-globe"></i></a></li>-->
                </ul>
            </div>
        </aside>
        <div class="share-btn color-bg">
            <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/c/MedicalAppraisals"><i class="fab fa-youtube"></i></a>
        </div>
        <!-- share button end-->
        <!-- right header-->
        <div class="hc_dec_color">
            <div class="page-subtitle"><span>Blogs</span></div>
        </div>
        <!-- right header end-->
        <!-- wrapper  -->
        <div id="wrapper">
            <!-- navigation menu-->
            <div class="nav-holder">
                <div class="nav-holder-wrap but-hol">
                    <div class="nav-container fl-wrap">
                        <!-- nav -->
                        <nav class="nav-inner" id="menu">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>
                                    <a href="#">Services</a>
                                    <ul>
                                        <li><a href="{{route('medical_appraisal_and_revalidation')}}">Medical Appraisals & Revalidation</a></li>
                                        <li><a href="{{route('designated_body_connection')}}">Designated Body Connection 
                                        </a></li>
                                        
                                        <li><a href="{{route('observership_clinical_attachment_programme')}}">Observership & Clinical Attachment Programmes</a></li>
                                        <li><a href="{{route('responsible_officer_services')}}" >Responsible Officer Services</a></li>
                                        <li><a href="{{route('assurance_for_designated_bodies')}}" >Assurance for Designated Bodies</a></li>
                                        <li><a href="{{route('medico_legal_support')}}" >Medico-legal Support</a></li>
                                        <li><a href="{{route('career_coaching')}}" >Career Coaching
                                        </a></li>
                                       
                                    </ul>
                                </li>
                                 <li><a href="{{route('appraisal_advisory_call')}}">Advisory Call for Doctors</a></li>
                                <li>
                                <li><a href="{{route('frontend_cost_show')}}" >Cost</a></li>
                                <li><a href="{{route('frontend_reviews_show')}}" >Reviews</a></li>
                                <li><a href="{{route('frontend_watch_and_learn_show')}}" >Watch & Learn</a></li>
                                <li><a href="{{route('frontend_about_us_show')}}" >About Us</a></li>
                                <!--<li><a href="{{route('frontend_faqs_show')}}" >FAQs</a></li>-->
                                <li><a href="{{route('frontend_all_blogs_show')}}" >Blogs</a></li>
                                <li><a href="{{route('frontend_contact_us_show')}}" >Contact Us</a></li>
                                                                <li class="highlight-menu"><a href="{{route('terms_show')}}" >Terms & Disclaimer</a></li>
                                <li class="highlight-menu"><a href="{{route('privacy_show')}}" >Privacy Policy</a></li>
                            </ul>
                        </nav>
                        <!-- nav end-->
                    </div>
                    <div class="nav-footer"><span>Copyright © 2026 Medical Appraisals. All rights reserved </span></div>
                    <div class="nav-holder-wrap_line"></div>
                    <div class="nav-holder-wrap_dec"></div>
                </div>
            </div>
            <div class="nav-overlay"></div>
            <!-- navigation menu end  -->
            
                <!-- hero-section-dec-->                  
            <!-- content-->
            <!--fixed-column-wrap-->
            <section class="breadcrums-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrums-text">
                                <h1>Blogs</h1>
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li>Blogs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- content end -->
            <!-- Start About Area -->
            <!-- End About Area -->
            @yield('content')
            <div class="clearfix"></div>
            <section class="cta-btn-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <h2>Looking for a medical appraisal</h2>
                        </div>

                        <div class="col-md-3">
                            <div class="cta-btn">
                                <a href="{{route('medical_appraisal_and_revalidation')}}" class="btn color-bg"><span>Book Now</span></a>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <!-- Skill Section -->

            <div class="clearfix"></div>
            
            <section class="contact-home full-height footer-section no-mob-hidden2 ro-contact">
               <div class="container">
    <div class="row align-items-center">

        <!-- LEFT SIDE -->
        <div class="col-md-6">
            <div class="content-inner">

                <div class="content-front">
                    <div class="cf-inner">
                        <div class="contact-details-title fl-wrap">
                            <h2>Contact Details</h2>
                        </div>

                        <div class="contact-details fl-wrap">
                            <ul>
                                <li>
                                    <span><i class="fa fa-envelope"></i> Mail :</span>
                                    <a href="mailto:rehan.kazi@medicalappraisals.org.uk">
                                        rehan.kazi@medicalappraisals.org.uk
                                    </a>
                                </li>

                                <li>
                                    <span><i class="fa fa-map-marker"></i> Address :</span>
                                    <a href="https://goo.gl/maps/PUhHhgavi8YB4GTd6" target="_blank" rel="noopener noreferrer">
                                        14 Imperial Way, Croxley Green,<br>
                                        Rickmansworth WD3 3FL, United Kingdom
                                    </a>
                                </li>

                                <li>
                                    <span><i class="fa fa-phone-alt"></i> Phone :</span>
                                    <a href="tel:+447792870526">+44 7792 870 526</a>
                                </li>
                            </ul>
                        </div>

                        <a href="#" class="btn fl-btn color-bg color-bg-green show_contact-form">
                            <span>Enquire Now</span>
                        </a>
                    </div>
                </div>

                <div class="content-back">
                    <div class="hidden-contact_form-wrap_inner">
                        <div class="close-contact_form cnt-anim">
                            <i class="fa fa-times"></i>
                        </div>

                        <div class="contact-details-title fl-wrap">
                            <h2>Get in Touch</h2>
                        </div>

                        <div id="contact-form" class="fl-wrap">
                            <div id="message"></div>

                            <script src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=VpzvmE" defer></script>
                            <div class="klaviyo-form-VLbFsn"></div>

                            <p class="white-text">
                                You may reach Prof Rehan Kazi directly via this email -
                                <a href="mailto:rehan.kazi@medicalappraisals.org.uk">
                                    rehan.kazi@medicalappraisals.org.uk
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- RIGHT SIDE CTA -->
    <!-- RIGHT SIDE CTA -->
<div class="col-md-6">
    <div class="advisory-box" style="margin-top: 100px; text-align:center;">
        
        <h2>Confused about your appraisal, revalidation, or next steps?</h2>
<br>
        <p style="color:#fff; margin:0px 0;">
            Book an advisory call for clear, personalised guidance on what to do next.
        </p>
<br>
        <div style="display:flex; justify-content:center; align-items:center;">
            <a href="{{ route('appraisal_advisory_call') }}" class="btn fl-btn color-bg color-bg-green show_contact-form">
                            <span> Schedule A Call</span>
                        </a>
        </div>

    </div>
</div>
    </div>
    
    <!-- Countries we serve -->
    <div class="country-foo-custom-sp-sec">
        <p class="section-title-custom">
            <span class="globe-icon">&#9675;</span>Countries we serve
        </p>
        <div class="country-pills-wrap">
            <a class="country-pill" href="#"><span class="cc">IN</span> India</a>
            <a class="country-pill" href="#"><span class="cc">BD</span> Bangladesh</a>
            <a class="country-pill" href="#"><span class="cc">PK</span> Pakistan</a>
            <a class="country-pill" href="#"><span class="cc">ME</span> Middle East</a>
            <a class="country-pill" href="#"><span class="cc">LK</span> Sri Lanka</a>
            <a class="country-pill" href="#"><span class="cc">AF</span> Africa</a>
            <a class="country-pill" href="#"><span class="cc">NG</span> Nigeria</a>
            <a class="country-pill" href="#"><span class="cc">LA</span> Latin America</a>
            <a class="country-pill" href="#"><span class="cc">EU</span> Europe</a>
            <a class="country-pill" href="#"><span class="cc">UK</span> United Kingdom</a>
            <a class="country-pill" href="#"><span class="cc">GL</span> Globally</a>
        </div>
    </div>
</div>
                
            </section>

            <!-- share-wrapper-->
            <!-- <div class="share-wrapper">
                <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i></div>
                <div class="share-container fl-wrap  isShare"></div>
            </div> -->
            <!-- share-wrapper  end -->
        </div>
        <!-- wrapper end -->
        <!-- cursor-->
        <div class="element">
            <div class="element-item"></div>
        </div>
        <div class="to-top-btn to-top"><i class="fa fa-long-arrow-up"></i></div>
        <!-- cursor end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script src="{{asset('frontend/js/jquery.min.js')}}" ></script>
    <script src="{{asset('frontend/js/magnific-popup.min.js')}}" ></script>
    <script src="{{asset('frontend/js/plugins.js')}}" ></script>
    <script src="{{asset('frontend/js/owl.carousel.js')}}" ></script>
    <script src="{{asset('frontend/js/owl-slider.js')}}" ></script>
    <script src="{{asset('frontend/js/particles.js')}}" ></script>
    
    <script src="{{asset('frontend/js/scripts.js')}}" ></script>
	
	<script type="text/javascript" src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=VpzvmE" async rel="prefetch"></script>
	<!-- begin Moneypenny code -->



<!-- end Moneypenny code -->
</body>

</html>