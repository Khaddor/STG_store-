@extends('layouts.layout')


@section('content')
		<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="#">Pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">Login</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-md-8 " style="padding-left:30%">
						<div class="heading">
							<h2 class="title">Login</h2>
							<p>If you have an account with us, please log in.</p>
						</div><!-- End .heading -->

						<form action="{{route('login')}}" method="post">
							@csrf
							
							<input type="email" class="form-control" placeholder="Email Address" name="email">
					

							<input type="password" class="form-control" placeholder="Password" name="password">
							

						@if (session('status'))
							<div style="color: red">	{{session('status')}}</div>
						@endif


							<div class="form-footer">
								<button type="submit" class="btn btn-primary">LOGIN</button>
                                <ul>
                                    <li style="padding-top:20px; padding-left:40px;"><a href="register" class="forget-pass"> Creé un compte </a></li>
                                    <li><a href="#" class="forget-pass" style="padding-left: 40px;"> Mot de passe oublié ?</a></li>
                                </ul>
                            </div><!-- End .form-footer -->
						</form>

					

					</div><!-- End .col-md-6 -->

					
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
		</main><!-- End .main -->


@endsection

