<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home - Blogs</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="{{asset('admin/assets/styles/style.min.css')}}">
	
	<!-- Material Design Icon -->
	<link rel="stylesheet" href="{{asset('admin/assets/fonts/material-design/css/materialdesignicons.css')}}">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="{{asset('admin/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{asset('admin/assets/plugin/waves/waves.min.css')}}">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="{{asset('admin/assets/plugin/sweet-alert/sweetalert.css')}}">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="{{asset('admin/assets/plugin/percircle/css/percircle.css')}}">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="{{asset('admin/assets/plugin/chart/chartist/chartist.min.css')}}">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="{{asset('admin/assets/plugin/fullcalendar/fullcalendar.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/plugin/fullcalendar/fullcalendar.print.css')}}" media='print'>

	<!-- Color Picker -->
	<link rel="stylesheet" href="{{asset('admin/assets/color-switcher/color-switcher.min.css')}}">
	
</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="{{url('/')}}" class="logo"><img width="350" height="111" src="https://medicalappraisals.org.uk/frontend/images/logo.png" class="img-responsive" alt="Medical Appraisals Logo" style="width:59% !important;"></a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="{{route('all_blogs_show')}}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Blogs</span></a>
				</li>
				<!--<li>-->
				<!--	<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-flower"></i><span>Blogs</span><span class="menu-arrow fa fa-angle-down"></span></a>-->
				<!--	<ul class="sub-menu js__content">-->
						
				<!--		<li><a href="">All Blogs</a></li>-->
						
				<!--	</ul>-->
					<!-- /.sub-menu js__content -->
				<!--</li>-->
				<li class="">
					<a class="waves-effect" href="{{route('admin_show_change_password')}}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Change Password</span></a>
				</li>
				<li class="">
					<!--<a class="waves-effect" href="index.html"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Logout</span></a>-->
					<a class="waves-effect" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="menu-icon mdi mdi-view-dashboard"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
				</li>
				
			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Home</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		
		<div class="ico-item">
			<img loading="lazy" decoding="async" src="http://placehold.it/80x80" alt="" class="ico-img">
			<ul class="sub-ico-item">
				<li><a href="#">Settings</a></li>
				<li><a href="#">Blog</a></li>
				<li><a class="js__logout" href="#">Log Out</a></li>
			</ul>
			<!-- /.sub-ico-item -->
		</div>
		<!-- /.ico-item -->
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="50">
	<h2 class="popup-title">Your Notifications</h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/80x80" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">10 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Anna William</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">15 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
					<span class="name">Update Status</span>
					<span class="desc">Failed to get available update data. To ensure the please contact us.</span>
					<span class="time">30 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Jennifer</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Michael Zenaty</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">50 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Simon</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">1 hour</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
					<span class="name">Account Contact Change</span>
					<span class="desc">A contact detail associated with your account has been changed.</span>
					<span class="time">2 hours</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Helen 987</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">Yesterday</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Denise Jenny</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">Oct, 28</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Thomas William</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">Oct, 27</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="50">
	<h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/80x80" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">10 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Harry Halen</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">15 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Thomas Taylor</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">30 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Jennifer</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Helen Candy</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Anna Cavan</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 hour ago</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-success"><i class="fa fa-user"></i></span>
					<span class="name">Jenny Betty</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 day ago</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img loading="lazy" decoding="async" src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Denise Peterson</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 year ago</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#message-popup -->

<!-- #color-switcher -->

            @yield('content')
		<!-- /.row -->		
		<footer class="footer">
			<ul class="list-inline">
				<li>2022 © Medical Appraisal Blogs.</li>
				
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset('admin/assets/scripts/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/modernizr.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugin/nprogress/nprogress.js')}}"></script>
	<script src="{{asset('admin/assets/plugin/sweet-alert/sweetalert.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugin/waves/waves.min.js')}}"></script>
	<!-- Full Screen Plugin -->
	<script src="{{asset('admin/assets/plugin/fullscreen/jquery.fullscreen-min.js')}}"></script>

	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!-- chart.js Chart -->
	<script src="{{asset('admin/assets/plugin/chart/chartjs/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/chart.chartjs.init.min.js')}}"></script>

	<!-- FullCalendar -->
	<script src="{{asset('admin/assets/plugin/moment/moment.js')}}"></script>
	<script src="{{asset('admin/assets/plugin/fullcalendar/fullcalendar.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/fullcalendar.init.js')}}"></script>

	<!-- Sparkline Chart -->
	<script src="{{asset('admin/assets/plugin/chart/sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/chart.sparkline.init.min.js')}}"></script>

	<script src="{{asset('admin/assets/scripts/main.min.js')}}"></script>
	<script src="{{asset('admin/assets/color-switcher/color-switcher.min.js')}}"></script>
	<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
	<script>
                        CKEDITOR.replace( 'description' );
                </script>
</body>
</html>