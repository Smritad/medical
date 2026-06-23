@extends('layouts.frontend-header')

@section('content')




            <div class="clearfix"></div>
            <section class="contact-home full-height footer-section contact-page-section no-mob-hidden2">
                <!-- <div class="footer-decor">
                    <canvas id="bg-animation" width="100%" height="657"></canvas>
                </div> -->
                <div id="particles-js"></div>
                <div class="container">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="contact-form-section">
                            <!-- <div class="close-contact_form cnt-anim"><i class="fa fa-times"></i></div> -->
                            <div class="contact-details-title fl-wrap">
                                <h2>Login</h2>
                            </div>
                            <div id="contact-form" class="fl-wrap">
                                <div id="message"></div>
                                <form class="custom-form" method="POST" action="{{ route('login') }}"">
									{{csrf_field()}}
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="text" name="email" id="email" placeholder="Email ID *"
                                                    value="">
                                            </div>
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
                                            <div class="col-sm-12">
                                                <input type="password" name="password" id="password" placeholder="Password *"
                                                    value="">
                                            </div>
											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
                                            <div class="col-md-12">
                                                <button class="btn fl-btn color-bg color-bg-green"
                                                    id="submit" type="submit" name="submit"><span>Submit</span>
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </section>




@endsection
