@extends('layouts.frontend-header')
@if(!empty($fetch_blog_details))
@section('page-title',$fetch_blog_details->meta_title)
@section('page-description',$fetch_blog_details->meta_description)
@section('page-keywords',$fetch_blog_details->meta_keywords)
@endif
@section('content')
            <div class="clearfix"></div>
            <!--column-wrap-->
            <!--column-wrap-container -->
            <!-- <div class="col-wc_dec"></div> -->
            <section class="blog-section blog-grid blog-detail">
                <div class="container">
                    <div class="section-title fl-wrap">
                        <h3>{{$fetch_blog_details->blog_title}}
                        </h3>
                        <ul class="blog-title-opt  fl-wrap">
                            <li><a href="#">{{$fetch_blog_details->blog_date}}</a></li>
                            <li> - </li>
                            <li><a href="#">{{$fetch_blog_details->blog_type}} </a> | </li> 
                            <!-- <li><a href="#">Design</a></li> -->
                            <!-- <li> - </li> -->
                            <li><a href="#">Author : {{$fetch_blog_details->author}}</a></li>
                        </ul>
                    </div>
                    <!-- blog media -->
                    <div class="blog-media fl-wrap">
                        <div class="single-slider-wrap">
                            <div class="single-slider fl-wrap">
                                <div class="swiper-container">
                                    @if($fetch_blog_details->main_type == 'Image')
                                    <div class="swiper-wrapper lightgallery">
                                       @php
    $imageName = pathinfo($fetch_blog_details->upload_image, PATHINFO_FILENAME);
    $altText = preg_replace('/^\d+-/', '', $imageName); // Remove leading timestamp and dash
    $altText = str_replace('-', ' ', $altText); // Replace dashes with spaces
@endphp

<div class="swiper-slide">
    <img loading="lazy" decoding="async"
        src="{{ asset('frontend/images/blogs/' . $fetch_blog_details->upload_image) }}"
        alt="{{ $altText }}">
</div>

                                        <!-- <div class="swiper-slide hov_zoom"><img loading="lazy" decoding="async" src="images/folio/4.jpg" alt=""><a href="images/folio/4.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                    <div class="swiper-slide hov_zoom"><img loading="lazy" decoding="async" src="images/folio/5.jpg" alt=""><a href="images/folio/5.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div> -->
                                    </div>
                                    @else
                                    <div class="video-play">
                                        <iframe width="100%" height="500px" src="{{$fetch_blog_details->video_url}}" title="{{$fetch_blog_details->blog_title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="ss-slider-pagination_wrap">
                                <div class="ss-slider-pagination"></div>
                            </div>
                            <div class="ss-slider-cont ss-slider-cont-prev"><i class="fal fa-angle-left"></i></div>
                            <div class="ss-slider-cont ss-slider-cont-next"><i class="fal fa-angle-right"></i></div>
                        </div>
                    </div>
                    <!-- blog media end -->
                    <div class="fl-wrap text-block">
                        <!-- <div class="pr-tags">
                                                        <span>Tags : </span>
                                                        <ul>
                                                            <li><a href="#">Design</a></li>
                                                            <li><a href="#">Photography</a></li>
                                                            <li><a href="#">Fasion</a></li>
                                                        </ul>
                                                    </div> -->
                        <div class="clearfix"></div>
                        {!! $fetch_blog_details->description !!}
                    </div>
                    <!-- <div class="pr-subtitle"> Comments</div> -->
                    <!-- <div class="section-separator sp2 fl-wrap"><span></span></div> -->
                    <div id="comments" class="single-post-comm">
                        <!-- <ul class="commentlist clearafix">
                                                        <li class="comment">
                                                            <div class="comment-body">
                                                                <div class="comment-author">
                                                                    <img loading="lazy" decoding="async" alt='' src='images/avatar/2.jpg' width="50" height="50">
                                                                </div>
                                                                <cite class="fn"><a href="#">Kevin</a></cite>
                                                                <div class="comment-meta">
                                                                    <h6><a href="#">January 02, 2020 </a> / <a class='comment-reply-link' href="#">Reply</a></h6>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                                                                <div class="comment-num">01.</div>
                                                            </div>
                                                        </li>
                                                        <li class="comment">
                                                            <div class="comment-body">
                                                                <div class="comment-author">
                                                                    <img loading="lazy" decoding="async" alt='' src='images/avatar/4.jpg' width="50" height="50">
                                                                </div>
                                                                <cite class="fn"><a href="#">Andy</a></cite>
                                                                <div class="comment-meta">
                                                                    <h6><a href="#">January 22, 2020  </a> / <a class='comment-reply-link' href="#">Reply</a></h6>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                                                                <div class="comment-num">02.</div>
                                                            </div>
                                                        </li>
                                                    </ul> -->
                        <div class="clearfix"></div>
                        <div id="respond" class="clearafix">
                            <div class="pr-subtitle"> Leave A Review</div>
                            <div class="comment-reply-form clearfix">
                                <form id="add-comment" class="add-comment custom-form" action="{{route('submit_blog_reviews')}}" method="post">
								<input type="hidden" name="blog_id" value="{{$fetch_blog_details->id}}">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Your Name *" name="full_name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" placeholder="Email Address*" name="email_id">
                                            </div>
                                        </div>
                                        <textarea cols="40" rows="3" placeholder="Your Comment:" name="user_comment"></textarea>
                                    </fieldset>
									{{csrf_field()}}
                                    <button type="submit" name="submit" class="btn flat-btn color-bg"><span>Submit</span></button>
                                </form>
                            </div>
                        </div>
                        <!--end respond-->
                    </div>
                    <!--comments end -->
                </div>
            </section>
@endsection