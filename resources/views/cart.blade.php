@extends('layouts.layout')



@section('content')
    
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
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
										<th class="product-col">Product</th>
										<th class="price-col">Price</th>
										<th class="qty-col">Qty</th>
										<th>Subtotal</th>
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
											<input class="vertical-quantity form-control" type="text" name="q">
										</td>
										<td>{{$order->quantity  *  $order->product->price}}</td>
									</tr>
									<tr class="product-action-row">
										<td colspan="4" class="clearfix">


 
											

											<div class="float-left">
												<a href="#" class="btn-move">Move to Wishlist</a>
											</div><!-- End .float-left -->


											

											

											
											<div class="float-right">
												<a href="#" title="Edit product" class="btn-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
												<a href="#" title="Remove product" class="btn-remove"><span class="sr-only">Remove</span></a>
											</div><!-- End .float-right -->
										</td>
									</tr>
							@endforeach
								
									
								</tbody>

								<tfoot>
									<tr>
										<td colspan="4" class="clearfix">
											<div class="float-left">

												<a href="/" class="btn btn-outline-secondary">Continue Shopping</a>


												<a href="/" class="btn btn-outline-secondary">Continue Shopping</a>


												<a href="category.html" class="btn btn-outline-secondary">Continue Shopping</a>

											</div><!-- End .float-left -->

											<div class="float-right">
												<a href="#" class="btn btn-outline-secondary btn-clear-cart">Clear Shopping Cart</a>
												<a href="#" class="btn btn-outline-secondary btn-update-cart">Update Shopping Cart</a>
											</div><!-- End .float-right -->
										</td>
									</tr>
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->

						<div class="cart-discount">
							<h4>Apply Discount Code</h4>
							<form action="#">
								<div class="input-group">
									<input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
									<div class="input-group-append">
										<button class="btn btn-sm btn-primary" type="submit">Apply Discount</button>
									</div>
								</div><!-- End .input-group -->
							</form>
						</div><!-- End .cart-discount -->
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="cart-summary">
							<h3>Summary</h3>

							

							
		<!------------------SUMMARY------------------------->
							<table class="table table-totals">
								
								<tfoot>
									<tr>
										<td>Order Total</td>
										<td>$ {{$total}} </td>
									</tr>
								</tfoot>
							</table>

							<div class="checkout-methods">
								<a href=" {{route('checkout')}} " class="btn btn-block btn-sm btn-primary">Go to Checkout</a>
								<a href="#" class="btn btn-link btn-block">Check Out with Multiple Addresses</a>
							</div><!-- End .checkout-methods -->
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->


@endsection
