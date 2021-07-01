@extends('layouts.layout')

@section('content')
    

<div class="col-md-8"style="padding-left:30%">
						<div class="heading">
							<h2 class="title">Créer un compte</h2>
							<p>En créant un compte avec notre magasin, vous pourrez passer plus rapidement à la caisse, stocker plusieurs adresses de livraison, afficher vos commandes dans votre compte et plus encore.</p>
						</div><!-- End .heading -->

						<form action="{{route('register')}}" method="post">
							@csrf
							<input type="text" class="form-control" placeholder="Prénom"  name="firstname" value="{{old('firstname')}}">
							@error('firstname')
							<div style="color:red;">	{{$message}}</div>

							@enderror
							<input type="text" class="form-control" placeholder="Nom"  name="lastname" value="{{old('lastname')}}">
							@error('lastname')
							<div style="color:red;">	{{$message}}</div>

							@enderror

							<input type="text" class="form-control" placeholder="Téléphone"  name="phone" value="{{old('phone')}}">
							@error('phone')
							<div style="color:red;">	{{$message}}</div>

							@enderror
				<!--			<input type="text" class="form-control" placeholder="Last Name" required>--->
							<input type="email" class="form-control" placeholder="Addresse E-mail"  name="email" value="{{old ('email')}} ">
							@error('email')
							<div style="color:red;">	{{$message}}</div>

							@enderror
							<input type="password" class="form-control" placeholder="Mot de passe"  name="password">
							@error('password')
								<div style="color:red;">	{{$message}}</div>
							@enderror
							<input type="password" class="form-control" placeholder="Confirmez le mot de passe" name="password_confirmation" >
						
							<!-- <div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="newsletter-signup">
								<label class="custom-control-label" for="newsletter-signup">Sing up our Newsletter</label>
							</div> End .custom-checkbox --> 
							<div class="form-footer">
								<button type="submit" class="btn btn-primary">S'inscrire</button>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-md-6 -->
				</div><!-- End .row -->
			</div><!-- End .container -->


@endsection