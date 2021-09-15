@extends('layouts.layout')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<main class="main">
			<div class="container">
				<nav aria-label="breadcrumb" class="breadcrumb-nav">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Home</a></li>
						<li class="breadcrumb-item"><a href="category/{{$product->category->name}} "> {{$product->category->name}} </a></li>
					</ol>
				</nav>
				<div class="product-single-container product-single-default">
					<div class="row">
						<div class="col-md-5 product-single-gallery">
							<div class="product-slider-container">
								<div class="product-single-carousel owl-carousel owl-theme">
									<div class="product-item">
										<img class="product-single-image" src="{{asset('productsImages/'.$product->image)}}" /> <!-- data-zoom-image=" -->
									</div>
									<div class="product-item">
										<img class="product-single-image" src="{{asset('productsImages/'.$product->image)}}" />
									</div>
									<div class="product-item">
										<img class="product-single-image" src="{{asset('productsImages/'.$product->image)}}" />
									</div>
									<div class="product-item">
										<img class="product-single-image" src="{{asset('productsImages/'.$product->image)}}" />
									</div>
								</div>
								<!-- End .product-single-carousel -->
								<span class="prod-full-screen">
									<i class="icon-plus"></i>
								</span>
							</div>
							<div class="prod-thumbnail owl-dots" id='carousel-custom-dots'>
								<div class="owl-dot">
									<img src="{{asset('productsImages/'.$product->image)}}"/>
								</div>
								<div class="owl-dot">
									<img src="{{asset('productsImages/'.$product->image)}}"/>
								</div>
								<div class="owl-dot">
									<img src="{{asset('productsImages/'.$product->image)}}"/>
								</div>
								<div class="owl-dot">
									<img src="{{asset('productsImages/'.$product->image)}}"/>
								</div>
							</div>
						</div><!-- End .product-single-gallery -->

						<div class="col-md-7 product-single-details product_data">
							<h1 class="product-title">{{$product->name}}</h1>

							<div class="ratings-container">
								<div class="product-ratings">
									<span class="ratings" style="width:60%"></span><!-- End .ratings -->
								</div><!-- End .product-ratings -->

								<a href="#" class="rating-link">( 6 Reviews )</a>
							</div><!-- End .ratings-container -->

							<hr class="short-divider">

							<div class="price-box">
								<span class="product-price"> {{$product->price}} DH </span>
							</div><!-- End .price-box -->

							<div class="product-desc">
								<p>
									{{$product->description}}
								</p>
							</div><!-- End .product-desc -->

							

							<hr class="divider">

							<div class="product-action">
								

					@if ($product->inStock > 0)
									<div class="product-single-qty">
										<input type="hidden" name="id" value=" {{$product->id}} " class="product_id">
										<input class="horizontal-quantity form-control quantity" type="text" name="quantity">
									</div><!-- End .product-single-qty -->
									<div class="btn-icon-group">
										<button class="btn btn-dark add-cart icon-shopping-cart"   type="submit" > Ajouter au panier</button>
									</div>
									@else
										<h3 class="text-danger">Stock Epuisé</h3>
					@endif	
										
				
									
							</div><!-- End .product-action -->

							<hr class="divider mb-1">

							<div class="product-single-share">
								<label class="sr-only">Share:</label>

								<div class="social-icons mr-2">
									<a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
									<a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
									<a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
									<a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
									<a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
								</div><!-- End .social-icons -->

							</div><!-- End .product single-share -->
						</div><!-- End .product-single-details -->
					</div><!-- End .row -->
				</div><!-- End .product-single-container -->

				<div class="product-single-tabs">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
							<div class="product-desc-content">
									<p> {{ $product->description}} </p>								
							</div><!-- End .product-desc-content -->
						</div><!-- End .tab-pane -->

						

					
					
					</div><!-- End .tab-content -->
				</div><!-- End .product-single-tabs -->

				<div class="products-section pt-0">
					<h2 class="section-title">Produits Similaires</h2>

					<div class="products-slider owl-carousel owl-theme dots-top">
@foreach ($related_products as $related_product)

						<div class="product-default inner-quickview inner-icon product_data">
							<figure>
	
								<!-----------img-------------->
								<a href="/product/{{$related_product->id}}">
											<img src="{{asset('productsImages/'.$related_product->image)}}">
								</a>
										
								
								
										<div class="btn-icon-group">
											<input type="hidden" name="id" value=" {{$product->id}} " class="product_id">
											<input class="product_quantity" type="hidden" name="quantity">

												@if ($related_product->inStock > 0)
													<button class="btn-icon btn-add-cart addToCartBtn"  type="submit" ><i class="icon-shopping-cart"></i></button>		
												@else		
														<span class="product-label label-sale ">Stock Épuisé</span>
												@endif
										</div>
							</figure>
							<div class="product-details">
								<div class="category-wrap">
								<div class="category-list">
												<!---------CATEGORY_NAME------------->
												<a href="category/{{$related_product->category->id}}" class="product-category">{{$related_product->category->name}}</a>
											</div>
								</div>
								<h3 class="product-title">
											<!--------------PRODUCT_NAME----------->
											<a href="/product/{{$related_product->id}} ">  {{$related_product->name}} </a>
										</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .ratings-container -->
								<div class="price-box">
									<span class="old-price">59.00 DH</span>
									<span class="product-price"> {{$related_product->price}} DH</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
@endforeach		



			
						
				
						
						</div>
					</div><!-- End .products-slider -->
				</div><!-- End .products-section -->
			</div><!-- End .container -->
		</main><!-- End .main -->


@endsection
