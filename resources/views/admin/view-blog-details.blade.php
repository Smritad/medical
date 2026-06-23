@extends('layouts.admin-header')
@section('content')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Update Blog Details</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<div class="row">
						<form action="{{route('view_blog_details_update')}}" method="post" enctype="multipart/form-data">
						<input type="hidden" name="blog_id" value="{{$fetch_blog_details->id}}">
							<div class="form-group row">
								<div class="col-md-6">
									<label for="exampleInputEmail1">Type</label>
									<select class="form-control" name="blog_type">
										<option value="Blog" <?php if($fetch_blog_details->blog_type == 'Blog'){ echo 'selected'; } ?>>Blog</option>
										<option value="Event" <?php if($fetch_blog_details->blog_type == 'Event'){ echo 'selected'; } ?>>Event</option>
										<option value="News" <?php if($fetch_blog_details->blog_type == 'News'){ echo 'selected'; } ?>>News</option>
									</select>
								</div>
								<div class="col-md-6">
									<label for="exampleInputEmail1">Blog Main Type</label>
									<select class="form-control" name="blog_main_type">
									
										<option value="Image" <?php if($fetch_blog_details->main_type == 'Image'){ echo 'selected'; } ?>>Image</option>
										<option value="Video" <?php if($fetch_blog_details->main_type == 'Video'){ echo 'selected'; } ?>>Video</option>
										
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<label for="exampleInputPassword1">Title</label>
									<input type="text" class="form-control" id="blog_title" name="blog_title" value="{{$fetch_blog_details->blog_title}}">
								</div>
								
							</div>
							<div class="form-group row">
								<div class="col-md-6">
									<label for="exampleInputPassword1">Published Date</label>
									<input type="date" class="form-control" id="blog_date" name="blog_date" value="{{$fetch_blog_details->blog_date}}">
								</div>
								<div class="col-md-6">
									<label for="exampleInputPassword1">Author</label>
									<input type="text" class="form-control" id="author" name="author" value="{{$fetch_blog_details->author}}">
								</div>
								
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<label for="exampleInputPassword1">Video Embeded Url</label>
									<input type="text" class="form-control" id="video_url" name="video_url" value="{{$fetch_blog_details->video_url}}">
								</div>
								
								
							</div>
							<div class="form-group row">
								<div class="col-md-6">
									<label for="exampleInputPassword1">Upload Image</label>
									<input type="file" class="form-control" id="upload_image" name="upload_image">
									<input type="hidden" name="old_upload_image" value="{{$fetch_blog_details->upload_image}}">
								</div>
								<div class="col-md-6">
									<img loading="lazy" decoding="async" src="{{asset('frontend/images/blogs')}}/{{$fetch_blog_details->upload_image}}" alt="{{ $fetch_blog_details->blog_title ?? 'Blog image' }}">
								</div>
								
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<label for="exampleInputPassword1">Description</label>
									<textarea name="description" id="description" class="form-control">{!! $fetch_blog_details->description !!}</textarea>
								</div>
							</div>
							<div class="col-md-2">
									{{csrf_field()}}
									
									<button type="submit" name="submit" class="btn btn-primary btn-sm waves-effect waves-light" style="margin-top:23%;">Update</button>
								</div>
							
						</form>
						</div>
						
					</div>
					
				</div>
				
			</div>
	
		</div>
		
@endsection