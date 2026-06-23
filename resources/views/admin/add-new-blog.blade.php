@extends('layouts.admin-header')
@section('content')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Add New</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<div class="row">
						<form action="{{route('new_blog_insert')}}" method="post" enctype="multipart/form-data">
							<div class="form-group row">
								<div class="col-md-6">
									<label for="exampleInputEmail1">Type</label>
									<select class="form-control" name="blog_type">
										<option value="Blog">Blog</option>
										<option value="Event">Event</option>
										<option value="News">News</option>
									</select>
								</div>
								<div class="col-md-6">
									<label for="exampleInputEmail1">Blog Main Type</label>
									<select class="form-control" name="blog_main_type">
									
										<option value="Image">Image</option>
										<option value="Video">Video</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<label for="exampleInputPassword1">Title</label>
									<input type="text" class="form-control" id="blog_title" name="blog_title">
								</div>
								
							</div>
							<div class="form-group row">
								<div class="col-md-6">
									<label for="exampleInputPassword1">Published Date</label>
									<input type="date" class="form-control" id="blog_date" name="blog_date">
								</div>
								<div class="col-md-6">
									<label for="exampleInputPassword1">Author</label>
									<input type="text" class="form-control" id="author" name="author">
								</div>
								
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<label for="exampleInputPassword1">Video Embeded Url</label>
									<input type="text" class="form-control" id="video_url" name="video_url">
								</div>
								
								
							</div>
							<div class="form-group row">
								<div class="col-md-6">
									<label for="exampleInputPassword1">Upload Image</label>
									<input type="file" class="form-control" id="upload_image" name="upload_image">
								</div>
								
								
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<label for="exampleInputPassword1">Description</label>
									<textarea name="description" id="description" class="form-control"></textarea>
								</div>
							</div>
							<div class="col-md-2">
									{{csrf_field()}}
									
									<button type="submit" name="submit" class="btn btn-primary btn-sm waves-effect waves-light" style="margin-top:23%;">Submit</button>
								</div>
							
						</form>
						</div>
						
					</div>
					
				</div>
				
			</div>
	
		</div>
		
@endsection