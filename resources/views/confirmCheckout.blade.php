@extends('layouts.layout')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Checkout</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<ul class="checkout-progress-bar">
					<li>
						<span>Livraison</span>
					</li>
					<li class="active">
						<span>Confirmation</span>
					</li>
				</ul>
				<div class="row">
					<div class="col-lg-4">
						<div class="order-summary">
							<h3>Resumé</h3>
							<h4>
								<a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">{{$orders->count()}} Produit(s) au panier</a>
							</h4>

							<div class="collapse" id="order-cart-section">
								<table class="table table-mini-cart">
									<tbody>
						
										<div class="dropdown-cart-products">

@foreach ($orders as $order)

										<tr>
											<td class="product-col">
												<figure class="product-image-container">
													<a href="{{route('product',[$order->product->id])}}" class="product-image">
														<img src="{{asset('productsImages/'.$order->product->image)}}" alt="product" width="80" height="80">
													</a>
												</figure>
												<div>
													<h2 class="product-title">
														<a href="{{route('product',[$order->product->id])}}">{{$order->product->name}} </a>
													</h2>

													<span class="product-qty"> X  {{$order->quantity}} </span>


												</div>
											</td>
										<td >
											<span class="cart-product-info">
												<span class="cart-product-qty"></span>
												 {{$order->product->price}} DH
											</span>
										</td>
										</tr>
@endforeach

									</tbody>	
								</table>
							</div><!-- End #order-cart-section -->
						 </div><!-- End .order-summary  -->

						<!-- <div class="checkout-info-box">
							<h3 class="step-title">Ship To:
								<a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
							</h3>

							<address>
								Desmond Mason <br>
								123 Street Name, City, USA <br>
								Los Angeles, California 03100 <br>
								United States <br>
								(123) 456-7890
							</address>
						</div>End .checkout-info-box --> 

					<!-- 	<div class="checkout-info-box">
							<h3 class="step-title">Shipping Method: 
								<a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
							</h3>

							<p>Flat Rate - Fixed</p>
						</div>End .checkout-info-box -->
					</div><!-- End .col-lg-4 -->

					<div class="col-lg-8 order-lg-first">
						<div class="checkout-payment">
							<h2 class="step-title">Verifier Informations :</h2>

							<h4>Confirmer vos informations</h4>
							
							@if (Session::has('success'))
								<div class="alert alert-success" role="alert">
									{{Session::get('success')}}
								</div>
							@endif

						
								
							
							<div>
								<address>
									{{$req->firstname ?? ""}} {{$req->lastname ?? ""}}<br>
									{{$req->address1 ?? ""}} <br>
									{{$req->address2 ?? ""}} <br>
									{{$req->city ?? ""}} <br>
									{{$req->phone ?? ""}}		
								</address>
							</div><!-- End #checkout-shipping-address -->
							
							<form action=" {{route('place_order')}} " method="POST">
								@csrf
								
								<input type="hidden" name="firstname"  value="{{$req->firstname ?? ""}}">
								<input type="hidden" name="lastname" value="{{$req->lastname ?? ""}}">
								<input type="hidden" name="user_id"  value = "{{auth()->user()->id ?? ""}}" >

								<input type="hidden" name="address1" value="{{$req->address1 ?? ""}} " >
								<input type="hidden" name="address2"  value="{{$req->address2 ?? ""}}">
								<input type="hidden" name="city" value="{{$req->city ?? ""}}" >
								<input type="hidden" name="phone" value="{{$req->phone ?? ""}}" >
							
								<div class="clearfix">
									<button class="btn btn-primary float-right" type="submit" onclick="alert()"> Passer la Commande</button>	
								</div><!-- End .clearfix -->

								<script>
									function alert(){
											swal('Ordered Placed Successfully','',"success");

											window.setTimeout(function(){
												window.location = "{{route('home')}} ";
											},5000);

									}
								</script>
							</form>

						</div><!-- End .checkout-payment -->
						<div class="checkout-discount">
							<h4>
							</h4>

							
						</div><!-- End .checkout-discount -->
					</div><!-- End .col-lg-8 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
</main><!-- End .main -->
@endsection
