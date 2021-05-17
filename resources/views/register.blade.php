@extends('layouts.layout')

@section('content')
    

<div class="col-md-8"style="padding-left:30%">
						<div class="heading">
							<h2 class="title">Create An Account</h2>
							<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
						</div><!-- End .heading -->

						<form action="{{route('register')}}" method="post">
							@csrf
							<input type="text" class="form-control" placeholder="First Name"  name="firstname" value="{{old('firstname')}}">
							@error('firstname')
							<div style="color:red;">	{{$message}}</div>

							@enderror
							<input type="text" class="form-control" placeholder="Last Name"  name="lastname" value="{{old('lastname')}}">
							@error('lastname')
							<div style="color:red;">	{{$message}}</div>

							@enderror

							<input type="text" class="form-control" placeholder="Phone number"  name="phone" value="{{old('phone')}}">
							@error('phone')
							<div style="color:red;">	{{$message}}</div>

							@enderror
				<!--			<input type="text" class="form-control" placeholder="Last Name" required>--->
							<input type="email" class="form-control" placeholder="Email Address"  name="email" value="{{old ('email')}} ">
							@error('email')
							<div style="color:red;">	{{$message}}</div>

							@enderror
							<input type="password" class="form-control" placeholder="Password"  name="password">
							@error('password')
								<div style="color:red;">	{{$message}}</div>
							@enderror
							<input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" >
						
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="newsletter-signup">
								<label class="custom-control-label" for="newsletter-signup">Sing up our Newsletter</label>
							</div><!-- End .custom-checkbox -->

							<div class="form-footer">
								<button type="submit" class="btn btn-primary">Create Account</button>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-md-6 -->
				</div><!-- End .row -->
			</div><!-- End .container -->


@endsection