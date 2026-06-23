<!DOCTYPE html>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
<meta name="referrer" content="strict-origin-when-cross-origin">
     
    <?php
    $currentURL = URL::current();
    // echo $currentURL;
    if($currentURL == 'https://medicalappraisals.org.uk/cost')
    {
    ?>
    <title>Medical Appraisal Costs & Packages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="">
	<meta name="description" content="Discover our competitive medical appraisal costs and packages. Choose from our flexible options to suit your needs and budget. GMC-compliant appraisals.">
	<!-- DNS Prefetch -->
    <link rel="dns-prefetch" href="https://medicalappraisals.org.uk">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    
    <!-- Preconnect -->
    <link rel="preconnect" href="https://www.google-analytics.com">
    <!-- Preload fonts -->
    <link rel="preload" href="https://fonts.gstatic.com" as="font" type="font/woff2" crossorigin>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="canonical" href="https://medicalappraisals.org.uk/cost">
	<!--<link rel="alternate" href="https://medicalappraisals.org.uk/cost" hreflang="en-UK">-->
	<link rel="alternate" hreflang="x-default" href="https://medicalappraisals.org.uk/cost">
	<?php }elseif($currentURL == 'https://medicalappraisals.org.uk/watch-and-learn'){ ?>
	<title>Watch & Learn from Medical Appraisals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="">
	<meta name="description" content="Learn in the flow of work. Watch latest post of medical Appraisal, updates and news online.">
	
	<link rel="canonical" href="https://medicalappraisals.org.uk/watch-and-learn">
	<!--<link rel="alternate" href="https://medicalappraisals.org.uk/watch-and-learn" hreflang="en-UK">-->
	<link rel="alternate" hreflang="x-default" href="https://medicalappraisals.org.uk/watch-and-learn">
	<?php }elseif($currentURL == 'https://medicalappraisals.org.uk/about-us'){ ?>
	<title>About Us | Medical Appraisal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="About - Medical Appraisals">
	<meta name="description" content="Medical Appraisals UK was established in 2016 as an independent, certified medical appraisal provider for doctors by Professor Rehan Kazi.">
	
	<link rel="canonical" href="https://medicalappraisals.org.uk/about-us">
	<!--<link rel="alternate" href="https://medicalappraisals.org.uk/about-us" hreflang="en-UK">-->
	<link rel="alternate" hreflang="x-default" href="https://medicalappraisals.org.uk/about-us">
	<?php }
	
	elseif($currentURL == 'https://medicalappraisals.org.uk/reviews'){ ?>
	<title>Medical Appraisals UK — Reviews & Contact Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Reviews - Medical Appraisals">
	<meta name="description" content="Read reviews and feedback on Medical Appraisals UK and find contact details for enquiries — get in touch for trusted, GMC-compliant medical appraisal and revalidation support.">
	<link rel="canonical" href="https://medicalappraisals.org.uk/reviews">
	<!--<link rel="alternate" href="https://medicalappraisals.org.uk/reviews" hreflang="en-UK">-->
	<link rel="alternate" hreflang="x-default" href="https://medicalappraisals.org.uk/reviews">
	<?php }

	else{ ?>
	
	<title>Medical Appraiser | Doctors Appraisal | Medical Appraisals UK</title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="">
	<meta name="description" content="Medical Appraisals is one of the leading providers of independent appraisals for locum doctors, medical revalidation and doctor appraisals in the UK.">
	<link rel="canonical" href="https://medicalappraisals.org.uk">
	
	<link rel="alternate" hreflang="x-default" href="https://medicalappraisals.org.uk">
	<?php } ?>
    @php
        $p = request()->path(); // '/', 'cost', 'about-us', 'reviews', 'watch-and-learn'
        $ogMap = [
            '/' => [
                'Medical Appraisal Service for Doctors UK | Prof. Rehan Kazi',
                'Expert GMC-compliant medical appraisals and revalidation support for UK and international doctors. 700+ five-star reviews. From £399. Book with Prof. Rehan Kazi today.',
                'Medical Appraisal Service for Doctors UK | Prof. Rehan Kazi',
                'Expert GMC-compliant medical appraisals and revalidation support for UK and international doctors. 700+ five-star reviews. From £399.',
            ],
            'about-us' => [
                'About Medical Appraisals UK | Prof. Rehan Kazi',
                'Medical Appraisals UK was founded in 2016 by Professor Rehan Kazi, a highly experienced medical appraiser and Responsible Officer with over 3,000 appraisals completed. Independent, GMC-compliant, and doctor-focused.',
                'About Medical Appraisals UK | Prof. Rehan Kazi',
                'Founded in 2016 by Prof. Rehan Kazi — 3,000+ appraisals completed. Independent, GMC-compliant, and supportive medical appraisal services for UK and international doctors.',
            ],
            'cost' => [
                'Medical Appraisal Costs & Packages | Transparent Pricing from £399',
                'Clear, affordable pricing for medical appraisals, revalidation, RO services, career coaching, and medico-legal support. Appraisals from £399 — no hidden fees.',
                'Medical Appraisal Costs & Packages | From £399',
                'Transparent pricing for appraisals, revalidation, RO services, coaching, and medico-legal support. From £399 with no hidden fees.',
            ],
            'reviews' => [
                'Doctor Reviews | 700+ Five-Star Google Reviews | Medical Appraisals UK',
                'Read what doctors say about Medical Appraisals UK. Over 700 five-star Google reviews from NHS consultants, locum doctors, and international practitioners who have worked with Prof. Rehan Kazi.',
                '700+ Five-Star Reviews | Medical Appraisals UK',
                'Over 700 five-star Google reviews from doctors across the UK and internationally. See why doctors choose Prof. Rehan Kazi for their appraisals.',
            ],
            'watch-and-learn' => [
                'Watch & Learn | Medical Appraisal Guidance Videos for Doctors',
                'Short educational videos covering reflection, CPD, feedback, and the personal development plan for your medical appraisal. Free guidance from Prof. Rehan Kazi.',
                'Watch & Learn | Medical Appraisal Videos for Doctors',
                'Free short videos on reflection, CPD, feedback, and PDPs for your medical appraisal — guidance from Prof. Rehan Kazi.',
            ],
        ];
        $og = $ogMap[$p] ?? $ogMap['/'];
        $ogUrl = ($p === '/') ? 'https://medicalappraisals.org.uk/' : 'https://medicalappraisals.org.uk/'.$p;
        $hasOgImg = file_exists(public_path('frontend/images/og-image.jpg'));
        $ogImg  = $hasOgImg ? asset('frontend/images/og-image.jpg') : asset('frontend/images/logo.png');
        $ogImgW = $hasOgImg ? 1200 : 350;
        $ogImgH = $hasOgImg ? 630  : 111;
    @endphp
    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $og[0] }}">
    <meta property="og:description" content="{{ $og[1] }}">
    <meta property="og:url" content="{{ $ogUrl }}">
    <meta property="og:site_name" content="Medical Appraisals">
    <meta property="og:image" content="{{ $ogImg }}">
    <meta property="og:image:width" content="{{ $ogImgW }}">
    <meta property="og:image:height" content="{{ $ogImgH }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Medappraisals">
    <meta name="twitter:title" content="{{ $og[2] }}">
    <meta name="twitter:description" content="{{ $og[3] }}">
    
      @yield('page-schema')




    <!--- Disable right click --->
    <!--<script>-->
    <!--        document.addEventListener('contextmenu', function (e) {-->

    <!--            e.preventDefault();-->

    <!--        });-->
    <!--        document.addEventListener('keydown', function (e) {-->
    <!--            if(e.ctrlKey && (e.key === 'u' || e.key === 'U')) -->

    <!--            {-->
    <!--                e.preventDefault();-->

    <!--                return false;-->
    <!--            }-->
    <!--        });-->
    <!--</script>-->
    
    <!-- Load Google Tag Manager asynchronously -->
    <script>
        window.addEventListener('load', function() {
          setTimeout(function(){
            var script = document.createElement('script');
            script.src = 'https://www.googletagmanager.com/gtag/js?id=AW-869870078';
            script.async = true;
            document.head.appendChild(script);
            
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'AW-869870078', { 'send_page_view': false });
          }, 3000); // Delay loading by 3 seconds
        });
    </script>

    <!-- Event snippet for Contact Us page Enquiry conversion page -->
    <script>
      gtag('event', 'conversion', {'send_to': 'AW-869870078/Km-GCLjyqmsQ_tPkngM'});
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NC78GWK');</script>
    <!-- End Google Tag Manager -->
    
    <!--=============== css  ===============-->
<link rel="stylesheet" href="{{asset('frontend/css/plugins.css')}}" media="print" onload="this.onload=null;this.media='all';">
<noscript><link rel="stylesheet" href="{{asset('frontend/css/plugins.css')}}"></noscript>
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" media="print" onload="this.onload=null;this.media='all';">
<noscript><link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"></noscript>
<!--<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">-->

 <!--<link rel="stylesheet" href="{{asset('frontend/css/plugins.css')}}">-->
    <!--<link rel="stylesheet" href="{{asset('frontend/css/plugins.css')}}">-->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}" media="print" onload="this.onload=null;this.media='all';">
<noscript><link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}"></noscript>
    <!--<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">-->
    <link rel="preload" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="preload" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}"></noscript>
    <link rel="preload" as="style" href="{{asset('frontend/css/style1.css')}}" onload="this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{asset('frontend/css/style1.css')}}"></noscript>
    <link rel="stylesheet" href="{{ asset('frontend/css/color.css') }}" media="print" onload="this.onload=null;this.media='all';">
<noscript><link rel="stylesheet" href="{{ asset('frontend/css/color.css') }}"></noscript>
    <!--<link rel="stylesheet" href="{{ asset('frontend/css/color.css') }}">-->
    
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" sizes="32x32"> 
     
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NC78GWK" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
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
                <img src="{{asset('frontend/images/logo.png')}}" width="350" height="111" loading="lazy" alt="Medical Appraisals Logo">
            </a>
            <div class="nav-button but-hol">
                <span class="ncs"></span>
                <span class="nos"></span>
                <span class="nbs"></span>
                <div class="menu-button-text">Menu</div>
            </div>
           <div class="header-contacts">
    <ul>
        <li>
            <span>
                <i class="fa fa-phone-alt" aria-hidden="true"></i>
            </span> 
            <a href="tel:+447792870526">+44 7792 870 526</a>
        </li>

        <li>
            <span>
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span> 
            <a href="mailto:rehan.kazi@medicalappraisals.org.uk">
                rehan.kazi@medicalappraisals.org.uk
            </a>
        </li>

       <li>
            <a href="{{ route('appraisal_advisory_call') }}" class="expert-advice">
                Get Expert Advice
            </a>
        </li>
    </ul>
    
    
</div>
        </header>
        
        <aside class="left-header">
            <span class="lh_dec color-bg"></span>
            <div class="left-header_social">
                <ul>
                    <li><a aria-label="Facebook" href="https://www.facebook.com/medicalappraisals.org.uk" target="_blank" rel="nofollow noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a aria-label="Twitter" href="https://twitter.com/Medappraisals" target="_blank" rel="nofollow noopener noreferrer"><i class="fab fa-twitter"></i></a></li>
                    <li><a aria-label="Linkedin" href="https://www.linkedin.com/in/professor-rehan-kazi-309ab45b/" target="_blank" rel="nofollow noopener noreferrer"><i class="fab fa-linkedin-in"></i></a></li>"
                    <li><a aria-label="Mail" href="mailto:?subject=Check this https://medicalappraisals.org.uk" target="_blank" rel="nofollow noopener noreferrer"><i class="fas fa-envelope"></i></a></li>
                    
                </ul>
            </div>
        </aside>
        
        <div class="share-btn color-bg">
            <a aria-label="Youtube" target="_blank" href="https://www.youtube.com/c/MedicalAppraisals" rel="nofollow noopener noreferrer">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        
        <!-- right header-->
        <div class="hc_dec_color">
			@if(Request::segment(1) == 'about-us')
            <div class="page-subtitle"><span>About us</span></div>
            	@elseif(Request::segment(1) == 'Advisory Call for Doctors')
            <div class="page-subtitle"><span>Advisory Call for Doctors</span></div>
			@elseif(Request::segment(1) == 'cost')
            <div class="page-subtitle"><span>Cost</span></div>
			@elseif(Request::segment(1) == 'faqs')
            <div class="page-subtitle"><span>FAQS</span></div>
			@elseif(Request::segment(1) == 'watch-and-learn')
            <div class="page-subtitle"><span>Watch & Learn</span></div>
			@elseif(Request::segment(1) == 'reviews')
            <div class="page-subtitle"><span>Reviews</span></div>
			@elseif(Request::segment(1) == 'contact-us')
            <div class="page-subtitle"><span>Contact us</span></div>
			@else
            <div class="page-subtitle"><span>Home</span></div>
			@endif
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
                                        
                                        <li><a href="{{route('responsible_officer_services')}}">Responsible Officer Services</a></li>
                                        <li><a href="{{route('assurance_for_designated_bodies')}}">Assurance for Designated Bodies</a></li>
                                        <li><a href="{{route('medico_legal_support')}}">Medico-legal Support</a></li>
                                        <li><a href="{{route('career_coaching')}}">Career Coaching
                                        </a></li>
                                        
                                    </ul>
                                </li>
                                 <li><a href="{{route('appraisal_advisory_call')}}">Advisory Call for Doctors</a></li>
                                <li><a href="{{route('frontend_cost_show')}}">Cost</a></li>
                                <li><a href="{{route('frontend_reviews_show')}}">Reviews</a></li>
                                <li><a href="{{route('frontend_watch_and_learn_show')}}">Watch & Learn</a></li>
                                <li><a href="{{route('frontend_about_us_show')}}">About Us</a></li>
                                <!--<li><a href="{{route('frontend_faqs_show')}}">FAQs</a></li>-->
                                <li><a href="{{route('frontend_all_blogs_show')}}">Blogs</a></li>
                                <li><a href="{{route('frontend_contact_us_show')}}">Contact Us</a></li>
                                                                <li class="highlight-menu"><a href="{{route('terms_show')}}">Terms & Disclaimer</a></li>
                                <li class="highlight-menu"><a href="{{route('privacy_show')}}">Privacy Policy</a></li>
                            </ul>
                        </nav>
                        <!-- nav end-->
                        
                    </div>
                    <div class="nav-footer"><span>Copyright © 2026 Medical Appraisals. All rights reserved </span></div>
                    <!--<div class="nav-holder-wrap_line"></div>-->
                    <div class="nav-holder-wrap_dec"></div>
                </div>
            </div>
			
@yield('content')


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
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
    <script  src="{{asset('frontend/js/owl-slider.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/magnific-popup.min.js')}}"></script>
    
    
    <!--<script defer src="{{asset('frontend/js/particles.js')}}"></script>-->
    
    <script src="{{asset('frontend/js/scripts.js')}}"></script>
	
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                
                var prefetchLink = document.createElement('link');
                prefetchLink.rel = 'prefetch';
                prefetchLink.href = 'https://integration.beyondchats.com/chat-widget?orgId=medicalappraisals.org.uk';
                document.head.appendChild(prefetchLink);
                
                var script = document.createElement('script');
                script.src = 'https://integration.beyondchats.com/chat-widget?orgId=medicalappraisals.org.uk';
                document.body.appendChild(script);
                
            }, 5000); // Load after 5 seconds
        });
    </script>
   
</body>

</html>