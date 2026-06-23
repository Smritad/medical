@extends('layouts.admin-header')
@section('content')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Blog Category</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<div class="row">
						<form action="" method="post">
							<div class="form-group">
								<div class="col-md-5">
									<label for="exampleInputEmail1">Category Name</label>
									<input type="text" name="category_name" class="form-control" id="category_name">
								</div>
								<div class="col-md-5">
									<label for="exampleInputPassword1">Slug</label>
									<input type="text" class="form-control" id="slug" name="slug">
								</div>
								<div class="col-md-2">
									{{csrf_field()}}
									
									<button type="submit" name="submit" class="btn btn-primary btn-sm waves-effect waves-light" style="margin-top:23%;">Submit</button>
								</div>
							</div>
							
							
						</form>
						</div>
						<br>
						<br>
						<br>
						
					
					<table class="table table-bordered">
						<caption>All Blog Categories</caption>
						<thead>
							<tr>
								<th>#</th>
								<th>Category Name</th> 
								<th>Slug</th> 
								<th>Action</th> 
							</tr> 
						</thead> 
						<tbody> 
						@foreach($fetch_all_categories as $all_categories)
							<tr> 
								<th scope="row">1</th> 
								<td>{{$all_categories->category_name}}</td> 
								<td>{{$all_categories->slug}}</td> 
								<td></td> 
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