@extends('layouts.admin-header')

@section('content')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-sm-6 col-lg-3 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-orange">All Blogs</h4>
					<!-- /.box-title -->
					
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-3" class="left-content"></div>
						<!-- /#traffic-sparkline-chart-3 -->
						<div class="right-content">
						<?php 
						$fetch_all_blogs = DB::table('')
						?>
							<h2 class="counter text-danger">12</h2>
							<!-- /.counter -->
							
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-sm-6 col-lg-3 col-xs-12 -->
			<div class="col-sm-6 col-lg-3 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-info">All Events</h4>
					<!-- /.box-title -->
					
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-1" class="left-content margin-top-15"></div>
						<!-- /#traffic-sparkline-chart-1 -->
						<div class="right-content">
							<h2 class="counter text-info">278</h2>
							<!-- /.counter -->
							
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-sm-6 col-lg-3 col-xs-12 -->

			<div class="col-sm-6 col-lg-3 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-success">All News</h4>
					<!-- /.box-title -->
					
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-2" class="left-content margin-top-10"></div>
						<!-- /#traffic-sparkline-chart-2 -->
						<div class="right-content">
							<h2 class="counter text-success">36%</h2>
							<!-- /.counter -->
							
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->

			
			
		</div>
		
@endsection
