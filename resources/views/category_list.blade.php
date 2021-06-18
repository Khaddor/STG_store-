@extends('layouts.layout')

@section('content')
    

			<div class="container">
				<nav aria-label="breadcrumb" class="breadcrumb-nav">
					<ol class="breadcrumb">
					</ol>
				</nav>

				<div class="row">
					<div class="col-lg-9 order-lg-1">
						<nav class="toolbox">
							<div class="toolbox-left">
								<div class="toolbox-item toolbox-sort">
									
								</div><!-- End .toolbox-item -->
							</div><!-- End .toolbox-left -->

							<div class="toolbox-right">
								<div class="toolbox-item toolbox-show">
									<label>Show:</label>

									<div class="select-custom">
										<select name="count" class="form-control">
											<option value="12">12</option>
											<option value="24">24</option>
											<option value="36">36</option>
										</select>
									</div><!-- End .select-custom -->
								</div><!-- End .toolbox-item -->

								<div class="toolbox-item layout-modes">
									<a href=" {{route('category' , $category_id)}} " class="layout-btn btn-grid " title="Grid">
										<i class="icon-mode-grid"></i>
									</a>
									<a href=" {{route('category_list' , $category_id)}} " class="layout-btn btn-list active" title="List">
										<i class="icon-mode-list"></i>
									</a>
								</div><!-- End .layout-modes -->
							</div><!-- End .toolbox-right -->
						</nav>

						<div class="row pb-4">
						
						
							
		@if (!empty($products) && $products->count())
		@foreach ($products as $key => $product)
							
					<div class="col-12 product-default left-details product-list mb-4">
						<figure>
							<a href="/product/{{$product->id}}">
								<img src="{{asset('productsImages/'.$product->image)}}">

							</a>
						</figure>
						<div class="product-details">
							<div class="category-list">
								<a href="category/{{$product->category->id}}" class="product-category">{{$product->category->name}}</a>
							</div>
							<h2 class="product-title">
								<a href="/product/{{$product->id}} "> {{$product->name}} </a>
							</h2>
							<div class="ratings-container">
								<div class="product-ratings">
									<span class="ratings" style="width:100%"></span><!-- End .ratings -->
									<span class="tooltiptext tooltip-top"></span>
								</div><!-- End .product-ratings -->
							</div><!-- End .product-container -->
							<p class="product-description"> {{$product->description}} </p>
							<div class="price-box">
								<span class="product-price"> {{$product->price}} DH </span>
							</div><!-- End .price-box -->


					<form action=" {{route('addToCart')}} " method="POST">
						@csrf
							<div class="product-action">

								<input type="hidden" name="id" value="{{$product->id}} ">
							@if ($product->inStock > 0)
								<button class="btn-icon btn-add-cart"  type="submit"><i class="icon-shopping-cart"></i>ADD TO CART</button>
							@else 
								<span class="product-label label-sale ">Stock Épuisé</span>
							@endif
							
							</div>
					</form>
						</div><!-- End .product-details -->
					</div>
	@endforeach
		@else
					<h3>No products available</h3>
		@endif
					

						</div>
<div> {{$products->links()}} </div>
					</div><!-- End .col-lg-9 -->

					<div class="sidebar-overlay"></div>
					<div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
					<aside class="sidebar-shop col-lg-3 mobile-sidebar">
						<div class="sidebar-wrapper">
							<div class="widget">
								<h3 class="widget-title">
									<a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
								</h3>

								<div class="collapse show" id="widget-body-2">
									<div class="widget-body">
										<ul class="cat-list">
					@foreach ($categories as $category)
	
											<li><a href="/category/{{$category->id}}" >{{$category->name}}</a></li>
					@endforeach

										</ul>
									</div><!-- End .widget-body -->
								</div><!-- End .collapse -->
							</div><!-- End .widget -->

				
							
							<div class="widget widget-featured">
								<h3 class="widget-title">Voir Aussi</h3>
								
								<div class="widget-body">
									<div class="owl-carousel widget-featured-products">
										@foreach ($products as $product)

											<div class="featured-col">

												<div class="product-default left-details product-widget">
													<figure>
														<a href="/product/{{$product->id}}">
															<img src="{{asset('productsImages/'.$product->image)}}">
														</a>
													</figure>
													<div class="product-details">
														<h2 class="product-title">
															<a href="product.html"> {{$product->name}} </a>
														</h2>
														<div class="ratings-container">
															<div class="product-ratings">
																<span class="ratings" style="width:100%"></span><!-- End .ratings -->
																<span class="tooltiptext tooltip-top"></span>
															</div><!-- End .product-ratings -->
														</div><!-- End .product-container -->
														<div class="price-box">
															<span class="product-price">$ {{$product->price}} </span>
														</div><!-- End .price-box -->
													</div><!-- End .product-details -->
												</div>
												
											</div><!-- End .featured-col -->

										@endforeach
										

									
									</div><!-- End .widget-featured-slider -->
								</div><!-- End .widget-body -->
							</div><!-- End .widget -->
							
							
						
						</div><!-- End .sidebar-wrapper -->
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-3"></div><!-- margin -->
		</main><!-- End .main -->


@endsection
