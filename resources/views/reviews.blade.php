@extends('layouts.main-header')

@section('page-schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": " Medical Appraisals UK - For Doctors, Locums, NHS DRs and GPs in UK (Professor Rehan Kazi)",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "1",
    "reviewCount": "753"
  },
  "review": [
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Usha Kiran, Dubai" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
      "reviewBody": "I had my appraisal process with Prof Rham Kazi. It was a very comfortable experience. I was feeling quite anxious as I had left the UK in 2012 and was not sure how to go about it. He did the preappraisal coaching for me and explained how to go about collecting information and documentation for it. Throughout the appraisal process he kept me at ease and explained things very well. I felt supported. My sincere thanks to Prof. Kazi for everything."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Lourdes Gaspar, Consultant in Anaesthetics and Pain Management" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
      "reviewBody": "Professor Kazi recently carried out my appraisal after I left the NHS hospital that I had been working at for 26 years. His services were prompt, efficient and very supportive. He has a complete understanding of the required processes, is very knowledgeable and approachable. My experience was very positive and I highly recommend his services."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Mohammed Khan" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
      "reviewBody": "I honestly think you are the best doctor to have ever done my appraisal. The professionalism and support throughout the appraisal were outstanding. There wasnâ€™t a single negative point. Any doctor would benefit immensely from doing their appraisal with you."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Gelani Baha (Dr. Elgelani Bahaeldein - Consultant Physician/Endocrinologist" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
      "reviewBody": "It has been a pleasure to have my appraisal done by Prof. Kazi. He guided me through the process clearly and tailored feedback to my career development. He is supportive, caring and prompt. I highly recommend him."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Siva Sivapragasam FRCS(Eng), FRCS(Edin) (Consultant Surgeon)" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
      "reviewBody": "Prof Rehan Kazi is an excellent appraiser. He made me feel comfortable and the whole process went smoothly. I would certainly recommend him to consultants and junior doctors."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Azhar Ali, Cardiology Registrar" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
      "reviewBody": "Professor Kazi was really helpful during my appraisal. He listened patiently and guided me not only for the appraisal but also for my future goals."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Clive Johnson (Dr. Ivaylo Velkov Ivanov)" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
      "reviewBody": "This was my second appraisal with Professor Rehan Kazi. He was patient, kind and meticulous. He guided me clearly through the MAG4 form and key appraisal points. I highly recommend him."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Ken U (Dr. Keneolisa Udoji)" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
      "reviewBody": "Wonderful experience. The appraisal process went smoothly and I received sound advice and useful feedback. The final appraisal form and certificate were delivered on time. Highly recommended."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Naemat Rahman, Manchester, UK" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
      "reviewBody": "It was a pleasure working with Medical Appraisals and especially Prof Kazi. The process was easy, well supported and professionally guided. Many thanks."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Ahmad, London Aesthetics & Rejuvenation Centre" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
      "reviewBody": "Professor Rehan Kazi was professional, thorough, friendly and supportive throughout the process. I would definitely use his services again."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Gillian Hawkley" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
      "reviewBody": "Highly recommend. The GMC appraisal process was easy to understand and straightforward with Prof. Kaziâ€™s guidance."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Aqeel Safdar,  Prof CAS.Pakistan" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" },
      "reviewBody": "My first appraisal with Prof Rehan was tailored perfectly to my senior role. Worth every penny. Excellent experience."
    }
  ]
}
</script>
@endsection


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
                                <h1>Reviews</h1>
                                <ul>
                                    <li><a target="_blank" rel="noopener noreferrer" href="{{url('/')}}">Home</a></li>
                                    <li>Reviews</li>
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
            <div class="review-section">
                <div class="container">
<div class="col-md-12">
    <div class="heading text-white text-center">
                        <!-- <span>Testimonials
                        </span> -->
                        <!--  <h2>User Feedbackssmart parking solutions</h2> -->
                        <h2>See our google reviews</h2>
                    </div>
                                      <!-- Elfsight Google Reviews | Medical Apprisal - List -->
<script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-ae7f0970-c547-4887-92d4-800b1dd2f0b3" data-elfsight-app-lazy></div>
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
                        <!--<a aria-label="See our google reviews" href="https://www.google.com/maps/place/Medical+Appraisals/@51.642407,-0.4480379,17z/data=!4m7!3m6!1s0x48766a4b0e02c4ad:0xfc261b1104b51436!8m2!3d51.6424021!4d-0.4458598!9m1!1b1" target="_blank" rel="noopener noreferrer" class="btn color-bg">-->
                        <!--    <span>more than 700 five-star reviews</span>-->
                        <!--</a>-->
<!--    <div class="testi-item fl-wrap">-->
<!--                                        <div class="testimonilas-text fl-wrap">-->
<!--                                                <h3>Dr. Usha Kiran <span>- Dubai</span></h3>-->
<!--                                        <p>I had my appraisal process with Prof Rham Kazi.-->
<!--It was a very comfortable experience.-->
<!--I was feeling quite anxious as I had left UK in 2012 and was not sure how to go about it.-->
<!--He did the preappraisal coaching for me and explained how to go about collecting information and documentation for it and throughout the appraisal process he kept me at ease and explained things very well.-->
<!--I felt supported.-->
<!--My sincere thanks to Prof. Kazi for everything.-->
<!--</p>-->
<!--<p>Review Link - <a target="_blank" rel="noopener noreferrer" href="https://share.google/X55fdT0oTnLNdv99l">https://share.google/X55fdT0oTnLNdv99l</a></p>-->

<!--                                                                </div>-->
<!--                                                            </div>-->
<!--    <div class="testi-item fl-wrap">-->
<!--                                        <div class="testimonilas-text fl-wrap">-->
<!--                                                <h3>Dr. Lourdes Gaspar <span>- consultant in anaesthetics and pain management</span></h3>-->
<!--                                        <p>Professor Kazi recently carried out my appraisal after I left the NHS hospital that i had been working at for 26 years as a consultant.-->

<!--I found his services to be prompt, efficient and very supportive.-->

<!--Professor Kazi has a complete understanding of what is needed and all the required processes. He is very knowledgeable, has a very approachable manner and my experience was very positive. He also provided me with the helpful guidance and advice going forward.-->

<!--I highly recommend his services for anybody looking for an independent appraiser.-->
<!--</p>-->
<!--<p>Review Link - <a target="_blank" rel="noopener noreferrer" href="https://share.google/X55fdT0oTnLNdv99l">https://share.google/X55fdT0oTnLNdv99l</a></p>-->

<!--                                                                </div>-->
<!--                                                            </div>-->
<!--    <div class="testi-item fl-wrap">-->
<!--                                        <div class="testimonilas-text fl-wrap">-->
<!--                                                <h3>Dr. Mohammed Khan </h3>-->
<!--                                        <p>Dear Professor Rehan Kazi,-->

<!--I would just like to take this time to thank you and say that I honestly think-->
<!--that you are the best Doctor to have ever done my appraisal. I cannot put into words how much I appreciate your level of professionalism and the way you handled the whole appraisal-->
<!--from start to finish. You made me extremely comfortable and left me extremely satisfied with-->
<!--our appraisal. The best feedback I could possibly give you is that there wasn't a single point during-->
<!--the appraisal where I could point out any negatives whatsoever, the whole appraisal was absolutely excellent and I commend you for that.-->

<!--I sincerely feel that any Doctor doing their appraisal with you, would benefit immensely from-->
<!--doing so. From the many years of my experience of being a professionally qualified doctor, you are a huge credit to our community of Doctor's.-->

<!--Thanking you so very much,-->
<!--</p>-->
<!--<p>Review Link - <a target="_blank" rel="noopener noreferrer" href="https://share.google/B7wDf66NdcZnSNMpk">https://share.google/B7wDf66NdcZnSNMpk</a></p>-->

<!--                                                                </div>-->
<!--                                                            </div>-->
<!--    <div class="testi-item fl-wrap">-->
<!--    <div class="testimonilas-text fl-wrap">-->
<!--                                                <h3>Gelani Baha (Dr. Elgelani Bahaeldein)  <span>- Consultant Physician / Endocrinologist</span></h3>-->
<!--                                        <p>It has been a pleasure to have my appraisal done by Prof.Kazi.-->
<!--He put me at ease and took me through the appraisal process in a detailed yet simple approach and his comments were tailored to my needs in terms of how to enhance and keep my career progress and personal development.-->
<!--He responds promptly and always supportive and caring.-->
<!--I can not thank him enough and I highly recommend him to highest terms for anyone seeking appraisals for their work.-->
<!--I will certainly conduct all my future appraisals with Prof.Kazi.</p>-->
<!--<p>Review Link - <a target="_blank" rel="noopener noreferrer" href="https://share.google/uTVyr9yqwvRHjms2B">https://share.google/uTVyr9yqwvRHjms2B</a></p>-->

<!--                                                                </div>-->
<!--                                                            </div>-->
<!--    <div class="testi-item fl-wrap">-->
<!--                                        <div class="testimonilas-text fl-wrap">-->
<!--                                                <h3>Dr. Siva Sivapragasam <span>- FRCS(Eng), FRCS(Edin) (Consultant Surgeon)</span></h3>-->
<!--                                        <p>Prof Rehan Kazi  is an excellent Appraiser.  He made me feel comfortable and the whole process went smoothly.  I would certainly recommend him as an Appraiser for all the Consultants and Junior doctors</p>-->
<!--<p>Review Link - <a target="_blank" rel="noopener noreferrer" href=" https://share.google/SpNb0tXXbktqPKoUm"> https://share.google/SpNb0tXXbktqPKoUm</a></p>-->

<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                            <div class="testi-item fl-wrap">-->
<!--                                        <div class="testimonilas-text fl-wrap">-->
<!--                                                <h3>Dr. Azhar Ali <span>- Cardiology Registrar</span></h3>-->
<!--                                        <p>Professor Kazi was really helpful during my appraisal. He listened to me patiently and guided me not only for the appraisal but also for my future goals.</p>-->
<!--<p>Review Link - <a target="_blank" rel="noopener noreferrer" href="https://share.google/ivxhQI5FCNXgR5U6B"> https://share.google/ivxhQI5FCNXgR5U6B</a></p>-->

<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                                                                                        <div class="testi-item fl-wrap">-->
<!--                                        <div class="testimonilas-text fl-wrap">-->
<!--                                                <h3>Clive Johnson (Dr. Ivaylo Velkov Ivanov)</h3>-->
<!--                                        <p> It was my second appraisal with Professor Rehan Kazi As usual, has very patient, kind and meticulous in leading me trough the process.-->
<!--He pointed me to the important issues in completing the appraisal and the MAG4 form-->
<!--He advised me on all ipoints that I needed to emphasize on. It went better than my first appraisal thanks to his patience and directions.-->
<!--I can recommend him to anyone looking for independent medical appraisal.</p>-->
<!--<p>Review Link - <a target="_blank" rel="noopener noreferrer" href="https://share.google/tPG4QSBPLZiJBbfy3"> https://share.google/tPG4QSBPLZiJBbfy3</a></p>-->

<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                            <div class="testi-item fl-wrap">-->
<!--                                        <div class="testimonilas-text fl-wrap">-->
<!--                                                <h3>Ken U (Dr. Keneolisa Udoji)</h3>-->
<!--                                        <p>Wonderful experience. The appraisal process went smoothly and the Professor gave sound advice and useful feedback. Final appraisal form and certificate were delivered in a timely fashion.I highly recommend Medical Appraisals.</p>-->
<!--<p>Review Link - <a target="_blank" rel="noopener noreferrer" href="https://share.google/WcSU4vZ9PD96Cnppz"> https://share.google/WcSU4vZ9PD96Cnppz</a></p>-->

<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                             <div class="testi-item fl-wrap">-->
<!--                                        <div class="testimonilas-text fl-wrap">-->
<!--                                                <h3>Dr. Naemat Rahman<span> - MANCHESTER. UK.</span></h3>-->
<!--                                        <p> It was pleasure to meet an excellent team as Medical Appraisals and especially Prof kazi who help me in my appraisal and advice me for my revalidation process.-->
<!--To use their service is easy and convenient and always there is someone to guide you if need it.-->
<!--Many many thanks-->
<!--And wish you all the best and Merry Christmas.</p>-->
<!--<p>Review Link - <a target="_blank" rel="noopener noreferrer" href="https://share.google/XnUjfM5k9swvpdNer"> https://share.google/XnUjfM5k9swvpdNer</a></p>-->

<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                             <div class="testi-item fl-wrap">-->
<!--                                        <div class="testimonilas-text fl-wrap">-->
<!--                                                <h3>Dr. Ahmad<span> - London Aesthetics & Rejuvenation Centre</span></h3>-->
<!--                                        <p> I found Professor Rehan Kazi very Professional and thorough but more importantly very friendly and supportive throughout the whole process. I would definitely use him again and have no hesitation in recommending his services.</p>-->
<!--<p>Review Link - <a target="_blank" rel="noopener noreferrer" href="https://share.google/EoN2y2le1PNcXXFOn"> https://share.google/EoN2y2le1PNcXXFOn</a></p>-->

<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                            <div class="testi-item fl-wrap">-->
<!--                                        <div class="testimonilas-text fl-wrap">-->
<!--                                                <h3>Dr. Gillian Hawkley</h3>-->
<!--                                        <p>Highly recommend. I found the GMC appraisal process with Prof. Kazi easy to understand and relatively straightforward to complete with his guidance. Many thanks, again.</p>-->
<!--<p>Review Link - <a target="_blank" rel="noopener noreferrer" href="https://share.google/Fgb69zFGwwEZNXnHK"> https://share.google/Fgb69zFGwwEZNXnHK</a></p>-->

<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                            <div class="testi-item fl-wrap">-->
<!--                                        <div class="testimonilas-text fl-wrap">-->
<!--                                                <h3>Dr. Aqeel Safdar<span>- Prof CAS. Pakistan </span></h3>-->
<!--                                        <p> So I had my first appraisal with Prof Rehan. I am a senior consultant but the interaction was nicely tailored to my needs. Worth every penny. Keep up the good work.</p>-->
<!--<p>Review Link - <a target="_blank" rel="noopener noreferrer" href="https://share.google/7DiJbYUwZujFfoX3k"> https://share.google/7DiJbYUwZujFfoX3k</a></p>-->

<!--                                                                </div>-->
<!--                                                            </div>-->
</div>
                </div>
                <a aria-label="See our google reviews" href="https://www.google.com/maps/place/Medical+Appraisals/@51.642407,-0.4480379,17z/data=!4m7!3m6!1s0x48766a4b0e02c4ad:0xfc261b1104b51436!8m2!3d51.6424021!4d-0.4458598!9m1!1b1" target="_blank" rel="noopener noreferrer" class="btn">
                            <span>more than 700 five-star reviews</span>
                        </a>
            </div>
            <!-- Skill Section -->
            <div class="clearfix"></div>
            <!-- Skill Section -->
@endsection