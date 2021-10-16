@extends('layouts.layout')


@section('content')
    
		<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">La caisse</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<ul class="checkout-progress-bar">
					<li class="active">
						<span>Livraison</span>
					</li>
					<li>
						<span>Confirmation</span>
					</li>
				</ul>
				<div class="row">
					<div class="col-lg-8">
						<ul class="checkout-steps">
							<li>
								<h2 class="step-title">Adresse Livraison</h2>


								<form action=" {{route('confirm_checkout')}} " method="POST">
									@csrf
									<div class="form-group required-field">
										<label>Prénom </label>
										<input type="text" name="firstname" class="form-control" required value=" {{auth()->user()->firstname}} ">
									</div><!-- End .form-group -->

									<div class="form-group required-field">
										<label>Nom </label>
										<input type="text" name="lastname"class="form-control" required value=" {{auth()->user()->lastname}} ">
									</div><!-- End .form-group -->

								

									<div class="form-group required-field">
										<label>Adresse  </label>
										<input type="text" class="form-control" required name="address1">
										<input type="text" class="form-control"  name="address2">
									</div><!-- End .form-group -->


									<div class="form-group required-field">
										<label for="sel1"> Ville </label>
										<select class="form-control" required name="city">
											<option value="Tanger">Tanger</option>
											<option value="Casablanca">Casablanca</option>
											<option value="Rabat">Rabat</option>
											<option value="Tetuan">Tétouan</option>
											<option value="Marrakech">Marrakech</option>
											<option value="Fes">Fes</option>
											<option value="Agadir">Agadir</option>
											<option value="Settat">Settat</option>
											<option value="Laayoun">Laayoun</option>

										</select>
									  </div>

									<div class="form-group required-field">
										<label>Code Postal</label>
										<input type="text" class="form-control" required name="codePostal">
									</div><!-- End .form-group -->


									<div class="form-group required-field">
										<label>Numéro Teléphone </label>
										<div class="form-control-tooltip">
											<input type="tel"  name="phone" class="form-control" required value=" {{auth()->user()->phone}} ">
											<span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
										</div><!-- End .form-control-tooltip -->
									</div><!-- End .form-group -->
									<div class="row">
										<div class="col-lg-8">
											<div class="checkout-steps-action">
												<button class="btn btn-primary float-right" type="submit"> SUIVANT </button>
											</div><!-- End .checkout-steps-action -->
										</div><!-- End .col-lg-8 -->
									</div><!-- End .row -->
								</form>
							</li>

						
						</ul>
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="order-summary">
							<h3>Resumé</h3>

							<h4>
								<a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">{{$orders->count()}} Produit au panier</a>
							</h4>

							<div class="collapse" id="order-cart-section">
								<table class="table table-mini-cart">
									<tbody>
                                    @foreach ($orders as $order)
										
										<tr>
											<td class="product-col">
												<figure class="product-image-container">
													<a href=" {{route('product',[$order->product->id])}} " class="product-image">
														<img src=" {{asset('productsImages/'.$order->product->image)}} " alt="product">
													</a>
												</figure>
												<div>
													<h2 class="product-title">
														<a href="product.html"> {{$order->product->name}} </a>
													</h2>

													<span class="product-qty"> X  {{$order->quantity}} </span>
												</div>
											</td>
											<td class="price-col">DH {{$order->product->price}} </td>
										</tr>
                                    @endforeach

									</tbody>	
								</table>
							</div><!-- End #order-cart-section -->
						</div><!-- End .order-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->

				
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->

@endsection