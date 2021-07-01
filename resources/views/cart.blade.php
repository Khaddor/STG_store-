@extends('layouts.layout')



@section('content')
    
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Panier</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="product-col">{{ __('Produit') }}</th>
										<th class="price-col">Prix</th>
										<th class="qty-col">Quantité</th>
										<th>Total</th>
										<th>Action</th>

									</tr>
								</thead>


							@foreach ($orders as $order)
							
								<tbody>
									<tr class="product-row">
										<td class="product-col">
											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="{{asset('productsImages/'.$order->product->image)}}" alt="product">
												</a>
											</figure>
											<h2 class="product-title">
												
												<a href="product/{{$order->product->id}}"> {{$order->product->name}} </a>
											</h2>
										</td>
										<td> {{$order->product->price}} </td>
										<td>
											<input class="vertical-quantity form-control" type="text" name="quantity" value=" {{$order->quantity}} " >
										</td>
										<td>{{$order->quantity  *  $order->product->price}}</td>
										<td>
											<form action="/layout/{{$order->id}}" method="post">
													@csrf
													<button type="submit" class="btn btn-danger btn-sm mt-4 "><i class="fa fa-trash fa-md"></i></button></td>

											</form>
											
										</td>

																		
									</tr>

									<tr class="product-action-row">
										<td colspan="4" class="clearfix">



											<!-- 
											<div class="float-right">
												<a href="#" title="Edit product" class="btn-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
												<a href="#" title="Remove product" class="btn-remove"><span class="sr-only">Remove</span></a>
											</div> End .float-right --> 
										</td>
									</tr>
							@endforeach
								
									
								</tbody>

								<tfoot>
									<tr>
										<td colspan="4" class="clearfix">
											<div class="float-left">

												<a href="/" class="btn btn-outline-secondary">Continuer vos achats</a>



											</div><!-- End .float-left -->

										</td>
									</tr>
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->

						
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="cart-summary">
							<h3>{{__('Total')}}</h3>

							

							
		<!------------------SUMMARY------------------------->
							<table class="table table-totals">
								
								<tfoot>
									<tr>
										<td>Total à payer </td>
										<td>{{$total}} DH </td>
									</tr>
								</tfoot>
							</table>

							<div class="checkout-methods">
								<a href=" {{route('checkout')}} " class="btn btn-block btn-sm btn-primary">Aller à la caisse</a>
							</div><!-- End .checkout-methods -->
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->


@endsection
