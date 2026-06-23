@extends('layouts.admin-header')
@section('content')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">All Blogs</h4>
					<a href="{{route('add_new_blog_show')}}" class="btn btn-xs btn-primary" style="float:right; margin-top:-5%;">Add New</a>
					<!-- /.box-title -->
					<div class="card-content">
					<table class="table table-bordered">
						<!--<caption>All Blogs</caption> -->
						<thead>
							<tr>
								<th>#</th>
								<th>Blog Title</th> 
								<th>BLog Type</th>
								<th>Published Date</th>
								<th>Author</th>
								<th>Status</th>
								<th>Action</th> 
							</tr> 
						</thead> 
						<tbody> 
						<?php 
						$i = 1;
						?>
						@foreach($fetch_all_blogs as $all_blogs)
							<tr> 
								<th scope="row">{{$i++}}</th> 
								<td>{{$all_blogs->blog_title}}</td> 
								<td>{{$all_blogs->blog_type}}</td>
								<td>{{$all_blogs->blog_date}}</td>
								<td>{{$all_blogs->author}}</td>
								<td>
									@if($all_blogs->status == 1)
										<a href="{{route('blog_status_inactive')}}/{{$all_blogs->id}}" class="btn btn-xs btn-success">Active</a>
									@else
										<a href="{{route('blog_status_active')}}/{{$all_blogs->id}}" class="btn btn-xs btn-warning">Inactive</a>
									@endif
								</td>
								<td>
									<a href="{{route('view_blog_details_show')}}/{{$all_blogs->id}}" type="button" class="btn btn-primary btn-circle btn-xs waves-effect waves-light"><i class="ico fa fa-eye"></i></button></li>
									<a href="{{route('delete_blog')}}/{{$all_blogs->id}}" class="btn btn-danger btn-circle btn-xs waves-effect waves-light"><i class="ico fa fa-trash"></i></a></li>
								</td> 
							</tr>
						@endforeach
							 
						</tbody> 
					</table>
					</div>
					
					<!-- /.card-content -->
				</div>
				
			</div>
			<!-- /.col-lg-6 col-xs-12 -->

			

			
		
			
		</div>
		
@endsection