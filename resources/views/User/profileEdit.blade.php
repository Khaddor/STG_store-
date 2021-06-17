@extends('layouts.layout')



@section('content')
	
<main class="main">
	<nav aria-label="breadcrumb" class="breadcrumb-nav">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
				<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
			</ol>
		</div><!-- End .container -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-lg-9 order-lg-last dashboard-content">
				<h2>Modifier Mes Informations</h2> <br>
				
				@if (Session::has('message'))
						<div class="alert alert-success" role="alert">
							{{Session::get('message')}}
						</div>
				@endif

				<form action="{{route('profile')}}" method="POST">
					@csrf
					
					@foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 

					<div class="row">
						<input type="hidden" value="{{auth()->user()->id}}" name="id">
						<div class="col-sm-11">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group required-field">
										<label for="acc-name">Prénom</label>
										<input type="text" class="form-control" id="acc-name" name="firstname" required="">
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->

								

								<div class="col-md-4">
									<div class="form-group required-field">
										<label for="acc-lastname">Nom</label>
										<input type="text" class="form-control" id="acc-lastname" name="lastname" required="">
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->
							</div><!-- End .row -->
						</div><!-- End .col-sm-11 -->
					</div><!-- End .row -->

					<div class="form-group required-field">
						<label for="acc-email">Email</label>
						<input type="email" class="form-control" id="acc-email" name="email" required="">
					</div><!-- End .form-group -->

					<div class="form-group required-field">
						<label for="acc-password">Mot de passe</label>
						<input type="password" class="form-control" id="acc-password" name="password" required="">
					</div><!-- End .form-group -->

					<div class="mb-2"></div><!-- margin -->

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="change-pass-checkbox" value="1">
						<label class="custom-control-label" for="change-pass-checkbox">Changer Mot de passe</label>
					</div><!-- End .custom-checkbox -->

					<div id="account-chage-pass">
						<h3 class="mb-2">Changer Mot de passe</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group required-field">
									<label for="acc-pass2">Mot de passe</label>
									<input type="password" class="form-control" id="acc-pass2" name="passwordConf">
								</div><!-- End .form-group -->
							</div><!-- End .col-md-6 -->

							<div class="col-md-6">
								<div class="form-group required-field">
									<label for="acc-pass3">Confrmer Mot de passe</label>
									<input type="password" class="form-control" id="acc-pass3" name="passwordConf">
								</div><!-- End .form-group -->
							</div><!-- End .col-md-6 -->
						</div><!-- End .row -->
					</div><!-- End #account-chage-pass -->

					<div class="required text-right">* Champs obligatoires </div>
					<div class="form-footer">
						<a href=" {{route('profile')}} "><i class="icon-angle-double-left"></i>Retour</a>

						<div class="form-footer-right">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</div><!-- End .form-footer -->
				</form>
			</div><!-- End .col-lg-9 -->

			<aside class="sidebar col-lg-3">
				<div class="widget widget-dashboard">
					<h3 class="widget-title">Mon Compte</h3>

					<ul class="list">
						<li><a href=" {{route('profile')}} ">Mes informations</a></li>
						<li class="active"><a href=" {{route('profile_edit')}} ">Modifier mes informations</a></li>
						<li><a href=" {{route('user_orders')}} ">Mes commandes</a></li>
				
					</ul>
				</div><!-- End .widget -->
			</aside><!-- End .col-lg-3 -->
		</div><!-- End .row -->
	</div><!-- End .container -->

	<div class="mb-5"></div><!-- margin -->
</main>
@endsection
