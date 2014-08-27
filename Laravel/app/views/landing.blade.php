@extends('layouts.master')

@section('content')
<style>
.centered {
    float: none;
    margin-left: auto;
    margin-right: auto;
}
</style>
<div class="row">
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-6 centered">
				<img src="https://s3-us-west-1.amazonaws.com/geekweise/message-cup.jpg" alt="magic urn">	
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<!-- login form -->
		<div class="row">
			<form class="form-horizontal" method="POST" action="/login" role="form">
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="email" class="form-control" id="loginemail" name="email" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="password" class="form-control" id="loginpassword" name="password" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
					<label>
						<input type="checkbox"> Remember me
					</label>
					&middot;	
					<a href="">Forgot Password?</a>
					<button type="submit" class="btn btn-primary pull-right">Sign in</button>
			    </div>
			  </div>
			</form>
		</div>

		@if (Session::get('login'))
		<div class="alert alert-warning" role="alert">{{{ Session::get('login') }}}</div>
		@endif


		<!-- register form -->
		<div class="row">
			<form class="form-horizontal" method="post" action="/register" role="form">
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="registerfullname" name="full_name" placeholder="Full Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="email" class="form-control" id="registeremail" name="email" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="password" class="form-control" id="registerpassword" name="password" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
					<button type="submit" class="btn btn-warning pull-right">Sign up with GWA Twitter</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
</div>
@stop
