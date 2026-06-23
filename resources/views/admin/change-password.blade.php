@extends('layouts.admin-header')
@section('content')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Change Password</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<div class="row">
						<form action="{{route('admin_update_password')}}" method="post" enctype="multipart/form-data">
							<input type="hidden" class="form-control" id="admin_id" name="admin_id" value="{{Auth::user()->id}}">
							<div class="form-group row">
								<div class="col-md-7">
									<label for="exampleInputPassword1">Old Password</label>
									<input type="password" class="form-control" id="old_password" name="old_password">
								</div>
								<div class="col-md-7">
									<label for="exampleInputPassword1">New Password</label>
									<input type="password" class="form-control" id="new_password" name="new_password">
								</div>
								<div class="col-md-7">
									<label for="exampleInputPassword1">Confirm Password</label>
									<input type="password" class="form-control" id="confirm_password" name="confirm_password">
								</div>
								
							</div>
							
							
							
							<div class="form-group row">
								<div class="col-md-2">
									{{csrf_field()}}
									
									<button type="submit" name="submit" class="btn btn-primary btn-sm waves-effect waves-light" style="margin-top:23%;">Submit</button>
								</div>
							</div>
							
							
						</form>
						</div>
						
					</div>
					
				</div>
				
			</div>
	
		</div>
		
@endsection