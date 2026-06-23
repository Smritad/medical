@extends('layouts.frontend-header')
@section('content')
<div class="clearfix"></div>
                                <!--column-wrap--> 
                                    <!--column-wrap-container -->   
                                        <!-- <div class="col-wc_dec"></div> -->
                                        <section class="blog-section blog-grid">
                                            <div class="container">
											<?php
											$fetch_all_blogs = DB::table('all_blogs')
															->where('status','=',1)
															->orderBy('blog_date','DESC')
															->paginate(9);
											?>
											@foreach($fetch_all_blogs as $all_blogs)
                                                <div class="col-md-4">
                                                    <div class="news-one__single">
                                                        <div class="news-one__img">
                                                        @php
                                                            $imageName = pathinfo($all_blogs->upload_image, PATHINFO_FILENAME);
                                                            $altText = preg_replace('/^\d+-/', '', $imageName); // Remove numeric prefix
                                                            $altText = str_replace('-', ' ', $altText); // Replace dashes with spaces
                                                        @endphp
                                                        
                                                        <img loading="lazy" decoding="async"
    src="{{ asset('frontend/images/blogs/' . $all_blogs->upload_image) }}"
    loading="lazy"
    width="1200"
    height="630"
    alt="{{ $altText }}"
>
                                                            <div class="news-one__tag">
                                                                <p><i class="far fa-folder"></i>{{$all_blogs->blog_type}}</p>
                                                            </div>
                                                            <div class="news-one__arrow-box">
                                                                <a href="" class="news-one__arrow">
                                                                    @if($all_blogs->main_type == 'Image')
                                                                    <span class="fa fa-long-arrow-right"></span>
                                                                    @else
                                                                    <span class="fa fa-play"></span>
                                                                    @endif
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="news-one__content">
                                                            <ul class="list-unstyled news-one__meta">
                                                                <li><a href=""><i class="far fa-calendar"></i> {{$all_blogs->blog_date}} </a>
                                                                </li>
                                                                <li><a href=""><i class="far fa-user"></i>{{$all_blogs->author}}</a>
                                                                </li>
                                                            </ul>
                                                            <h3 class="news-one__title"><a href="{{route('view_blog_details')}}/{{$all_blogs->slug_url}}">{{$all_blogs->blog_title}}</a></h3>
                                                            <div class="news-one__read-more">
                                                                <a href="{{route('view_blog_details')}}/{{$all_blogs->slug_url}}">Read More <i class="fas fa-angle-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												@endforeach
                                                 
                                            </div>
											
                                            <div class="container">
                                                <div class="row">
													
                                                    <div class="col-xl-12">
                                                        <div class="pagination justify-content-center mt-50">
															{!! $fetch_all_blogs->links('pagination::bootstrap-4') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
@endsection