@extends('layouts.layout')
@section('content')
    

		

		<main class="main">
			<div class="container">
				<div class="home-slider-container">
					<div class="home-slider owl-carousel owl-theme show-nav-hover nav-large nav-outer no-loop" data-owl-options="{
						'loop': false
					}">
						<div class="home-slide home-slide1 banner banner-md-vw-small banner-sm-vw-small">
							<img class="owl-lazy slide-bg" src="assets/images/lazy.png" data-src="assets/images/slider/slide-1.jpg" alt="slider image" width="1120" height="475">
							<div class="banner-layer banner-layer-middle">
								<h2 class="ls-n-20 m-b-2">Spring / Summer Season</h3>
								<h3 class="mb-1"><em class="text-center ls-0">up<br>to</em>50% OFF</h3>
								<h4 class="text-uppercase d-inline-block mb-0 align-top pt-2">Starting at <span class="text-primary ml-2">$<em>19</em>99</span></h5>
								<a href="category" class="btn btn-dark btn-outline btn-xl mt-1">Shop Now</a>
							</div><!-- End .banner-layer -->
						</div><!-- End .home-slide -->

						<div class="home-slide home-slide2 banner banner-md-vw-small banner-sm-vw-small">
							<img class="owl-lazy slide-bg" src="assets/images/lazy.png" data-src="assets/images/slider/slide-2.jpg" alt="slider image" width="1120" height="475">
							<div class="banner-layer banner-layer-middle banner-layer-right">
								<h2 class="mb-0">EXTRA</h3>
								<h3 class="m-b-2">20% OFF</h3>
								<h3 class="mb-2 off-category">ACCESSORIES</h3>
								<a href="category" class="btn btn-block btn-dark">Shop All Sale</a>
							</div><!-- End .banner-layer -->
						</div><!-- End .home-slide -->
					</div><!-- End .home-slider -->
				</div><!-- End .home-slider-container -->

				<div class="brands-slider owl-carousel owl-theme images-center">
					<img src="assets/images/brands/brand1.png" width="140" height="60" alt="brand">
					<img src="assets/images/brands/brand2.png" width="140" height="60" alt="brand">
					<img src="assets/images/brands/brand3.png" width="140" height="60" alt="brand">
					<img src="assets/images/brands/brand4.png" width="140" height="60" alt="brand">
					<img src="assets/images/brands/brand5.png" width="140" height="60" alt="brand">
					<img src="assets/images/brands/brand6.png" width="140" height="60" alt="brand">
					
				</div><!-- End .brands-slider -->
			</div><!-- End .container -->

			<div class="banners-section bg-gray">
				<div class="container mb-2">
					<div class="banners-slider owl-carousel owl-theme">
						<div class="banner banner-sm-vw-large">
							<figure>
								<img src="assets/images/banners/banner-1.jpg" alt="banner">
							</figure>

							<div class="banner-layer banner-layer-top">
								<h3 class="m-b-1">Women's Bags &amp; Purses</h3>
								<h4><del class="">20%</del><strong class="text-primary">30%</strong></h4>
							</div>

							<div class="banner-layer banner-layer-bottom">
								<a href="#" class="btn btn-dark btn-lg">Shop Now</a>
							</div><!-- End .home-banner-content -->

							<div class="banner-layer banner-layer-bottom banner-layer-right">
								<img src="assets/images/banners/brand-1.jpg" width="67" height="21" alt="brand" class="banner-layer-vertical-item w-auto">
							</div>
						</div><!-- End .home-banner -->

						<div class="banner banner-sm-vw-large text-center">
							<figure>
								<img src="assets/images/banners/banner-2.jpg" alt="banner">
							</figure>

							<div class="banner-layer banner-layer-top">
								<h3>Women's Shoes</h3>
							</div>

							<div class="banner-layer banner-layer-circle">
								<h4 class="banner-layer-circle-item">40<sup>%<small>OFF</small></sup></h4>
							</div>

							<div class="banner-layer banner-layer-bottom">
								<a href="#" class="btn btn-dark btn-lg">Shop Now</a>
							</div><!-- End .home-banner-content -->

							<div class="banner-layer banner-layer-bottom banner-layer-left">
								<img src="assets/images/banners/brand-2.jpg" width="69" height="19" alt="brand" class="banner-layer-vertical-item">
							</div>
						</div><!-- End .home-banner -->

						<div class="banner banner-sm-vw-large text-right">
							<figure>
								<img src="assets/images/banners/banner-3.jpg" alt="banner">
							</figure>

							<div class="banner-layer banner-layer-top">
								<h3 class="m-b-1">Men's Leather Belt</h3>
								<h4><del class="">30%</del><strong class="text-primary">50%</strong></h4>
							</div>

							<div class="banner-layer banner-layer-bottom">
								<a href="#" class="btn btn-dark btn-lg">Shop Now</a>
							</div><!-- End .home-banner-content -->

							<div class="banner-layer banner-layer-bottom banner-layer-left">
								<img src="assets/images/banners/brand-3.jpg" width="70" height="18" alt="brand" class="banner-layer-vertical-item">
							</div>
						</div><!-- End .home-banner -->
					</div><!-- End .banners-slider -->
				</div><!-- End .container -->
			</div>

			<div class="section shop-section mb-4">
				<div class="container">
					<h2 class="section-title mb-3">Browse By Category</h2>
					
					<div class="owl-carousel owl-theme nav-thick show-nav-hover nav-outer pb-2 m-b-4" data-owl-options="{
						'items': 2,
						'margin': 20,
						'dots': false,
						'nav': true,
						'responsive': {
							'576': {
								'items': 3
							},
							'992': {
								'items': 4
							}
						}
					}">
						<div class="product-category content-center overlay-light">
							<a href="category">
								<figure>
									<img src="assets/images/categories/category-1.jpg">
								</figure>
								<div class="category-content">
									<h3>Sunglasses</h3>
									<span><mark class="count">22</mark> products</span>
								</div>
							</a>
						</div><!-- End .product-category -->
						<div class="product-category content-center overlay-light">
							<a href="category">
								<figure>
									<img src="assets/images/categories/category-2.jpg">
								</figure>
								<div class="category-content">
									<h3>Bags</h3>
									<span><mark class="count">22</mark> products</span>
								</div>
							</a>
						</div><!-- End .product-category -->
						<div class="product-category content-center overlay-light">
							<a href="category">
								<figure>
									<img src="assets/images/categories/category-3.jpg">
								</figure>
								<div class="category-content">
									<h3>Shoes</h3>
									<span><mark class="count">22</mark> products</span>
								</div>
							</a>
						</div><!-- End .product-category -->
						
					</div>

					<h2 class="section-title mb-3">Featured Products Grid</h2>
					
					<div class="products-grid grid">
						<div class="product-default grid-item inner-quickview inner-icon inner-icon-inline overlay-dark w-50 grid-height-1 w-md-100">
							<figure>
								<a href="product">
									<img src="assets/images/products/grid/product-1.jpg">
								</a>
								<div class="label-group">
									<span class="product-label label-sale">27% Off</span>
								</div>
								<div class="btn-icon-group">
									<a href="#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
								</div>
								<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="category" class="product-category">men</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="product">Woman blouse</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:0%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="product-price">$914.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>

						<div class="product-default grid-item inner-quickview inner-icon inner-icon-inline overlay-dark w-25 grid-height-1 w-md-50 w-xs-100">
							<figure>
								<a href="product">
									<img src="assets/images/products/grid/product-2.jpg">
								</a>
								<div class="btn-icon-group">
									<a href="#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
								</div>
								<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="category" class="product-category">men</a>
								</div>
								<h2 class="product-title">
									<a href="product.html">Man Cloths</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:0%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="product-price">$188.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>

						<div class="product-default grid-item inner-quickview inner-icon inner-icon-inline overlay-dark w-25 grid-height-1-2 w-md-50 w-xs-100">
							<figure>
								<a href="product">
									<img src="assets/images/products/grid/product-3.jpg">
									<img src="assets/images/products/grid/product-3-2.jpg">
								</a>
								<div class="btn-icon-group">
									<a href="#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
								</div>
								<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="category" class="product-category">men</a>
								</div>
								<h2 class="product-title">
									<a href="product">Man Belt</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:0%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="product-price">$18.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>

						<div class="product-default grid-item inner-quickview inner-icon inner-icon-inline overlay-dark w-25 grid-height-1-2 w-md-50 w-xs-100">
							<figure>
								<a href="product">
									<img src="assets/images/products/grid/product-4.jpg">
								</a>
								<div class="btn-icon-group">
									<a href="#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
								</div>
								<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="category" class="product-category">men</a>
								</div>
								<h2 class="product-title">
									<a href="product">Woman Bag</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:0%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="product-price">$48.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
						<div class="grid-col-sizer"></div>
					</div>
				</div><!-- End .container -->
			</div><!-- End .section -->

			<div class="section bg-gray product-widgets-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
							<h4 class="section-sub-title mb-2">Top Rated Products</h4>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="product">
										<img src="assets/images/products/thumbs/product-1.jpg" width="95" height="95">
									</a>
								</figure>
								<div class="product-details">
									<div class="category-list">
										<a href="category" class="product-category">category</a>
									</div>
									<h2 class="product-title">
										<a href="product">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top"></span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<del class="old-price">$59.00</del>
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="product">
										<img src="assets/images/products/thumbs/product-2.jpg" width="95" height="95">
									</a>
								</figure>
								<div class="product-details">
									<div class="category-list">
										<a href="category" class="product-category">category</a>
									</div>
									<h2 class="product-title">
										<a href="product">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top">5.00</span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<del class="old-price">$59.00</del>
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="product">
										<img src="assets/images/products/thumbs/product-3.jpg" width="95" height="95">
									</a>
								</figure>
								<div class="product-details">
									<div class="category-list">
										<a href="category" class="product-category">category</a>
									</div>
									<h2 class="product-title">
										<a href="product">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top"></span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<del class="old-price">$59.00</del>
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
							<h4 class="section-sub-title mb-2">Best Selling Products</h4>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="product">
										<img src="assets/images/products/thumbs/product-4.jpg" width="95" height="95">
									</a>
								</figure>
								<div class="product-details">
									<div class="category-list">
										<a href="category" class="product-category">category</a>
									</div>
									<h2 class="product-title">
										<a href="product">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top">5.00</span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<del class="old-price">$59.00</del>
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="product">
										<img src="assets/images/products/thumbs/product-5.jpg" width="95" height="95">
									</a>
								</figure>
								<div class="product-details">
									<div class="category-list">
										<a href="category" class="product-category">category</a>
									</div>
									<h2 class="product-title">
										<a href="product">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top"></span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<del class="old-price">$59.00</del>
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="product">
										<img src="assets/images/products/thumbs/product-6.jpg" width="95" height="95">
									</a>
								</figure>
								<div class="product-details">
									<div class="category-list">
										<a href="category" class="product-category">category</a>
									</div>
									<h2 class="product-title">
										<a href="product">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top">5.00</span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<del class="old-price">$59.00</del>
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
							<h4 class="section-sub-title mb-2">Latest Products</h4>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="product">
										<img src="assets/images/products/thumbs/product-7.jpg" width="95" height="95">
									</a>
								</figure>
								<div class="product-details">
									<div class="category-list">
										<a href="category" class="product-category">category</a>
									</div>
									<h2 class="product-title">
										<a href="product">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top"></span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<del class="old-price">$59.00</del>
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="product">
										<img src="assets/images/products/thumbs/product-8.jpg" width="95" height="95">
									</a>
								</figure>
								<div class="product-details">
									<div class="category-list">
										<a href="category" class="product-category">category</a>
									</div>
									<h2 class="product-title">
										<a href="product">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top">5.00</span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<del class="old-price">$59.00</del>
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="product">
										<img src="assets/images/products/thumbs/product-9.jpg" width="95" height="95">
									</a>
								</figure>
								<div class="product-details">
									<div class="category-list">
										<a href="category" class="product-category">category</a>
									</div>
									<h2 class="product-title">
										<a href="product">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top"></span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<del class="old-price">$59.00</del>
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
							<div class="banner text-center top-shoes-banner banner-sm-vw-large">
								<figure>
									<img src="assets/images/banners/banner-4.jpg" alt="banner">
								</figure>

								<div class="banner-layer banner-layer-middle">
									<h3 class="m-b-2">Top Shoes</h3>
									<h4 class="text-primary m-b-3">Summer Sale</h4>
									<a href="#" class="btn btn-light btn-outline">Shop Now</a>
								</div><!-- End .home-banner-content -->
							</div><!-- End .home-banner -->
						</div>
					</div><!-- End .row -->

				</div>
			</div><!-- End .section -->

			<div class="container">
				<div class="instagram-feed mt-6">
					<ul class="instagram-feed-list row">
						<li class="col-lg-2 col-sm-3 col-6 mb-2"><a href="#"><img src="assets/images/instagram/1.jpg" alt="Feed"></a></li>
						<li class="col-lg-2 col-sm-3 col-6 mb-2"><a href="#"><img src="assets/images/instagram/2.jpg" alt="Feed"></a></li>
						<li class="col-lg-2 col-sm-3 col-6 mb-2"><a href="#"><img src="assets/images/instagram/3.jpg" alt="Feed"></a></li>
						<li class="col-lg-2 col-sm-3 col-6 mb-2"><a href="#"><img src="assets/images/instagram/4.jpg" alt="Feed"></a></li>
						<li class="col-lg-2 col-sm-3 col-6 mb-2"><a href="#"><img src="assets/images/instagram/5.jpg" alt="Feed"></a></li>
						<li class="col-lg-2 col-sm-3 col-6 mb-2"><a href="#"><img src="assets/images/instagram/6.jpg" alt="Feed"></a></li>
						<li class="col-lg-2 col-sm-3 col-6 mb-2"><a href="#"><img src="assets/images/instagram/7.jpg" alt="Feed"></a></li>
						<li class="col-lg-2 col-sm-3 col-6 mb-2"><a href="#"><img src="assets/images/instagram/8.jpg" alt="Feed"></a></li>
						<li class="col-lg-2 col-sm-3 col-6 mb-2"><a href="#"><img src="assets/images/instagram/9.jpg" alt="Feed"></a></li>
						<li class="col-lg-2 col-sm-3 col-6 mb-2"><a href="#"><img src="assets/images/instagram/10.jpg" alt="Feed"></a></li>
						<li class="col-lg-2 col-sm-3 col-6 mb-2"><a href="#"><img src="assets/images/instagram/11.jpg" alt="Feed"></a></li>
						<li class="col-lg-2 col-sm-3 col-6 mb-2"><a href="#"><img src="assets/images/instagram/12.jpg" alt="Feed"></a></li>
					</ul>
					<div class="instagram-feed-content">
						<i class="icon-instagram"></i>
						<h3>Instagram</h3>
						<h4>@portoecommerce</h4>
						<a href="#" class="btn btn-outline">Follow</a>
					</div><!-- End .instagram-feed-content -->
				</div><!-- End .instagram-feed -->

				<div class="newsletter-section mb-6">
					<div class="info-box icon-top text-center justify-content-center">
						<i class="far fa-envelope"></i>

						<div class="info-box-content">
							<h2 class="ls-n-10 mb-0">Subscribe to Our Newsletter</h2>
							<p>Get all the latest information on Events, Sales and Offers.</p>
						</div><!-- End .info-box-content -->
					</div><!-- End .info-box -->

					<div class="col-md-10 offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-1">
						<form action="#" class="mb-0 d-flex newsletter-form">
							<input type="email" class="form-control" placeholder="Enter Your E-mail Address..." size="40" required>
							<button type="submit" class="btn btn-dark">Subscribe</button>
						</form>
					</div>
				</div>
			</div><!-- End .container -->
		</main><!-- End .main -->



<!---------------------FOOTER PLACE ------------------------------>

  @endsection
