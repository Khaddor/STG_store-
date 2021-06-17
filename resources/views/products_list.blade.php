@extends('layouts.layout')

@section('content')
    
<div class="row stg-section-content stg-x1bleu-content" style="background-color: black">
                    
	<div class="col-lg-6 col-md-12 heading-item x1bleu-desc s30-home-desc">
		<div class="inner-heading"style="margin-top: 150px">
			<div class="stg-phone-title"align="center" >
				<h1 align="center" style="color: white">STG</h1>
				<span>
					<picture>
						<img src="https://stgtelecom.com/asstes/images/s30/stg-s30.png" align="align-items-center" id="s30">
					</picture>
				</span>
			</div>
		  <h2 align="center" style="font-weight: 500;background: repeating-linear-gradient(91deg, #0c2b47 0%,#0de394 100%);font-size: 4.5rem;-webkit-text-fill-color: transparent;-webkit-background-clip: text;">Never Lose Sight </h2>
			<p align="center" style="color: white">Triplez votre expérience</p>
			<a href="http://127.0.0.1:8000/product/4" style="margin-left: 238px;" class="btn btn-dark btn-outline btn-xl">Achetez &nbsp maintenant</a>
		</div>
	</div>
	<div class="col-lg-6 col-md-12 img-item x1bleu-img s30-home-img">
		<div class="inner-img-item">
			<picture>
				<img src="https://stgtelecom.com/asstes/images/s30/stg-s30-homepage.png" alt="">
			</picture>
		</div>
	</div>
<div>
</div>
</div>
			<div class="container">
				<nav aria-label="breadcrumb" class="breadcrumb-nav">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Men</a></li>
						<li class="breadcrumb-item active" aria-current="page">Accessories</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-lg-9 order-lg-1">
						<nav class="toolbox">
							<div class="toolbox-left">
								<div class="toolbox-item toolbox-sort">
									<label>Sort By:</label>

									<div class="select-custom">
										<select name="orderby" class="form-control">
											<option value="menu_order" selected="selected">Default sorting</option>
											<option value="popularity">Sort by popularity</option>
											<option value="rating">Sort by average rating</option>
											<option value="date">Sort by newness</option>
											<option value="price">Sort by price: low to high</option>
											<option value="price-desc">Sort by price: high to low</option>
										</select>
									</div><!-- End .select-custom -->

									
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
									<a href=" {{route('home')}} " class="layout-btn btn-grid " title="Grid">
										<i class="icon-mode-grid"></i>
									</a>
									<a href=" {{route('products_list')}} " class="layout-btn btn-list active" title="List">
										<i class="icon-mode-list"></i>
									</a>
								</div><!-- End .layout-modes -->
							</div><!-- End .toolbox-right -->
						</nav>

						<div class="row pb-4">
						
						
							
		
						@foreach ($products as $product)
							
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

						</div>

						<nav class="toolbox toolbox-pagination">
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

							<ul class="pagination toolbox-item">
								<li class="page-item disabled">
									<a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
								</li>
								<li class="page-item active">
									<a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
								</li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item"><span class="page-link">...</span></li>
								<li class="page-item">
									<a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
								</li>
							</ul>
						</nav>
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
											<li><a href="#">Accessories</a></li>
											<li><a href="#">Watch Fashion</a></li>
											<li><a href="#">Tees, Knits &amp; Polos</a></li>
											<li><a href="#">Pants &amp; Denim</a></li>
										</ul>
									</div><!-- End .widget-body -->
								</div><!-- End .collapse -->
							</div><!-- End .widget -->

							<div class="widget">
								<h3 class="widget-title">
									<a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
								</h3>

								<div class="collapse show" id="widget-body-3">
									<div class="widget-body">
										<form action="#">
											<div class="price-slider-wrapper">
												<div id="price-slider"></div><!-- End #price-slider -->
											</div><!-- End .price-slider-wrapper -->

											<div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
												<button type="submit" class="btn btn-primary">Filter</button>

												<div class="filter-price-text">
													Price:
													<span id="filter-price-range"></span>
												</div><!-- End .filter-price-text -->
											</div><!-- End .filter-price-action -->
										</form>
									</div><!-- End .widget-body -->
								</div><!-- End .collapse -->
							</div><!-- End .widget -->

							<div class="widget">
								<h3 class="widget-title">
									<a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Size</a>
								</h3>

								<div class="collapse show" id="widget-body-4">
									<div class="widget-body">
										<ul class="cat-list">
											<li><a href="#">Small</a></li>
											<li><a href="#">Medium</a></li>
											<li><a href="#">Large</a></li>
											<li><a href="#">Extra Large</a></li>
										</ul>
									</div><!-- End .widget-body -->
								</div><!-- End .collapse -->
							</div><!-- End .widget -->

							<div class="widget">
								<h3 class="widget-title">
									<a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Brand</a>
								</h3>

								<div class="collapse show" id="widget-body-5">
									<div class="widget-body">
										<ul class="cat-list">
											<li><a href="#">Adidas</a></li>
											<li><a href="#">Calvin Klein (26)</a></li>
											<li><a href="#">Diesel (3)</a></li>
											<li><a href="#">Lacoste (8)</a></li>
										</ul>
									</div><!-- End .widget-body -->
								</div><!-- End .collapse -->
							</div><!-- End .widget -->

							<div class="widget">
								<h3 class="widget-title">
									<a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true" aria-controls="widget-body-6">Color</a>
								</h3>

								<div class="collapse show" id="widget-body-6">
									<div class="widget-body">
										<ul class="config-swatch-list">
											<li class="active">
												<a href="#" style="background-color: #000;"></a>
												<span>Black</span>
											</li>
											<li>
												<a href="#" style="background-color: #0188cc;"></a>
												<span>Blue</span>
											</li>
											<li>
												<a href="#" style="background-color: #81d742;"></a>
												<span>Green</span>
											</li>
											<li>
												<a href="#" style="background-color: #6085a5;"></a>
												<span>Indigo</span>
											</li>
											<li>
												<a href="#" style="background-color: #ab6e6e;"></a>
												<span>Red</span>
											</li>
											<li>
												<a href="#" style="background-color: #ddb373;"></a>
												<span>Brown</span>
											</li>
											<li>
												<a href="#" style="background-color: #6b97bf;"></a>
												<span>Light-Blue</span>
											</li>
											<li>
												<a href="#" style="background-color: #eded68;"></a>
												<span>Yellow</span>
											</li>
										</ul>
									</div><!-- End .widget-body -->
								</div><!-- End .collapse -->
							</div><!-- End .widget -->

							<div class="widget widget-featured">
								<h3 class="widget-title">Featured</h3>
								
								<div class="widget-body">
									<div class="owl-carousel widget-featured-products">
										<div class="featured-col">
											<div class="product-default left-details product-widget">
												<figure>
													<a href="product.html">
														<img src="assets/images/products/product-10.jpg">
													</a>
												</figure>
												<div class="product-details">
													<h2 class="product-title">
														<a href="product.html">Product Short Name</a>
													</h2>
													<div class="ratings-container">
														<div class="product-ratings">
															<span class="ratings" style="width:100%"></span><!-- End .ratings -->
															<span class="tooltiptext tooltip-top"></span>
														</div><!-- End .product-ratings -->
													</div><!-- End .product-container -->
													<div class="price-box">
														<span class="product-price">$49.00</span>
													</div><!-- End .price-box -->
												</div><!-- End .product-details -->
											</div>
											<div class="product-default left-details product-widget">
												<figure>
													<a href="product.html">
														<img src="assets/images/products/product-11.jpg">
													</a>
												</figure>
												<div class="product-details">
													<h2 class="product-title">
														<a href="product.html">Product Short Name</a>
													</h2>
													<div class="ratings-container">
														<div class="product-ratings">
															<span class="ratings" style="width:100%"></span><!-- End .ratings -->
															<span class="tooltiptext tooltip-top"></span>
														</div><!-- End .product-ratings -->
													</div><!-- End .product-container -->
													<div class="price-box">
														<span class="product-price">$49.00</span>
													</div><!-- End .price-box -->
												</div><!-- End .product-details -->
											</div>
											<div class="product-default left-details product-widget">
												<figure>
													<a href="product.html">
														<img src="assets/images/products/product-12.jpg">
													</a>
												</figure>
												<div class="product-details">
													<h2 class="product-title">
														<a href="product.html">Product Short Name</a>
													</h2>
													<div class="ratings-container">
														<div class="product-ratings">
															<span class="ratings" style="width:100%"></span><!-- End .ratings -->
															<span class="tooltiptext tooltip-top"></span>
														</div><!-- End .product-ratings -->
													</div><!-- End .product-container -->
													<div class="price-box">
														<span class="product-price">$49.00</span>
													</div><!-- End .price-box -->
												</div><!-- End .product-details -->
											</div>
										</div><!-- End .featured-col -->

										<div class="featured-col">
											<div class="product-default left-details product-widget">
												<figure>
													<a href="product.html">
														<img src="assets/images/products/product-13.jpg">
													</a>
												</figure>
												<div class="product-details">
													<h2 class="product-title">
														<a href="product.html">Product Short Name</a>
													</h2>
													<div class="ratings-container">
														<div class="product-ratings">
															<span class="ratings" style="width:100%"></span><!-- End .ratings -->
															<span class="tooltiptext tooltip-top"></span>
														</div><!-- End .product-ratings -->
													</div><!-- End .product-container -->
													<div class="price-box">
														<span class="product-price">$49.00</span>
													</div><!-- End .price-box -->
												</div><!-- End .product-details -->
											</div>
											<div class="product-default left-details product-widget">
												<figure>
													<a href="product.html">
														<img src="assets/images/products/product-14.jpg">
													</a>
												</figure>
												<div class="product-details">
													<h2 class="product-title">
														<a href="product.html">Product Short Name</a>
													</h2>
													<div class="ratings-container">
														<div class="product-ratings">
															<span class="ratings" style="width:100%"></span><!-- End .ratings -->
															<span class="tooltiptext tooltip-top"></span>
														</div><!-- End .product-ratings -->
													</div><!-- End .product-container -->
													<div class="price-box">
														<span class="product-price">$49.00</span>
													</div><!-- End .price-box -->
												</div><!-- End .product-details -->
											</div>
											<div class="product-default left-details product-widget">
												<figure>
													<a href="product.html">
														<img src="assets/images/products/product-8.jpg">
													</a>
												</figure>
												<div class="product-details">
													<h2 class="product-title">
														<a href="product.html">Product Short Name</a>
													</h2>
													<div class="ratings-container">
														<div class="product-ratings">
															<span class="ratings" style="width:100%"></span><!-- End .ratings -->
															<span class="tooltiptext tooltip-top"></span>
														</div><!-- End .product-ratings -->
													</div><!-- End .product-container -->
													<div class="price-box">
														<span class="product-price">$49.00</span>
													</div><!-- End .price-box -->
												</div><!-- End .product-details -->
											</div>
										</div><!-- End .featured-col -->
									</div><!-- End .widget-featured-slider -->
								</div><!-- End .widget-body -->
							</div><!-- End .widget -->
							
							<div class="widget widget-block">
								<h3 class="widget-title">Custom HTML Block</h3>
								<h5>This is a custom sub-title.</h5>
								<p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi. </p>
							</div><!-- End .widget -->
						</div><!-- End .sidebar-wrapper -->
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-3"></div><!-- margin -->
		</main><!-- End .main -->


@endsection
