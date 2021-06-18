@extends('layouts/layout')


@section('content')
	
<style type="text/css">
	
.price-range-slider {
	width:100%;
  float:left;
  padding:10px 20px;
	.range-value {
		margin:0;
		input {
			width:100%;
			background:none;
			color: #000;
			font-size: 16px;
			font-weight: initial;
			box-shadow: none;
			border: none;
			margin: 20px 0 20px 0;
		}
	}
	
	.range-bar {
		border: none;
		background: #000;
		height: 3px;	
		width: 96%;
		margin-left: 8px;
		
		.ui-slider-range {
			background:#06b9c0;
		}
		
		.ui-slider-handle {
			border:none;
			border-radius:25px;
			background:#fff;
			border:2px solid #06b9c0;
			height:17px;
			width:17px;
			top: -0.52em;
			cursor:pointer;
		}
		.ui-slider-handle + span {
			background:#06b9c0;
		}
	}
}
</style>

		<main class="main">

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

			<!-- <div class="category-banner-container bg-gray">
				<div class="container">
					<div class="category-banner home-slide1" style="background: no-repeat right bottom/contain url('assets/images/banners/category-banner.jpg');">
						<h2 class="ls-n-20 m-b-2 line-height-1">Spring / Summer Season</h3>
						<h3 class="mb-1 line-height-1"><em class="text-center ls-0">up<br>to</em>50% OFF</h3>
						<h4 class="text-uppercase d-inline-block mb-0 align-top line-height-1">Starting at <span class="text-primary ml-2">$<em>19</em>99</span></h5>
						<a href="category.html" class="btn btn-dark btn-outline btn-xl">Shop Now</a>
					</div>
				</div>
			</div> -->


			<div class="container" style="margin-top: 15px">
				

				<div class="row">
					<div class="col-lg-9 main-content">
						<nav class="toolbox">
							<div class="toolbox-left">
								<div class="toolbox-item toolbox-sort">
									<!-- <label>Sort By:</label>

									<div class="select-custom">
										<select name="orderby" class="form-control">
											<option value="menu_order" selected="selected">Default sorting</option>
											<option value="popularity">Sort by popularity</option>
											<option value="rating">Sort by average rating</option>
											<option value="date">Sort by newness</option>
											<option value="price">Sort by price: low to high</option>
											<option value="price-desc">Sort by price: high to low</option>
										</select>
									</div> End .select-custom --> 
									
								</div><!-- End .toolbox-item -->
							</div><!-- End .toolbox-left -->

							<div class="toolbox-right">
								<div class="toolbox-item toolbox-show">
									<label>Afficher:</label>

									<div class="select-custom">
										<select name="count" class="form-control">
											<option value="12">12</option>
											<option value="24">24</option>
											<option value="36">36</option>
										</select>
									</div><!-- End .select-custom -->
								</div><!-- End .toolbox-item -->

								<div class="toolbox-item layout-modes">
									<a href="category.html" class="layout-btn btn-grid active" title="Grid">
										<i class="icon-mode-grid"></i>
									</a>
									<a href=" {{ route('products_list') }} " class="layout-btn btn-list" title="List">
										<i class="icon-mode-list"></i>
									</a>
								</div><!-- End .layout-modes -->
							</div><!-- End .toolbox-right -->
						</nav>

						@if (Session::has('success'))
							<div class="alert alert-success" role="alert">
								{{Session::get('success')}}
						  	</div>
						@endif

						@if (Session::has('inCart'))
							<div class="alert alert-danger" role="alert">
								{{Session::get('inCart')}}
						  	</div>
						@endif
<!-- ------------------------------PRODUCTS--------------------------->
						<div class="row">
						@if (count($products) == 0)
						<p class="alert alert-danger">Pas de produits qui correspondent à votre recherche</p>
						@endif

@foreach ($products as $product)
							
						
			<div class="col-6 col-sm-4">
				<div class="product-default inner-quickview inner-icon">
					<figure>

						<!-----------img-------------->
						<a href="/product/{{$product->id}}">
							<img src="{{asset('productsImages/'.$product->image)}}">
						</a>
						

					<!----------------ADD-TO-CART-BTN---------------------->
				<form action=" {{route('addToCart')}} " method="POST">
						@csrf
						<div class="btn-icon-group">
							<input type="hidden" name="id" value="{{$product->id}} ">

							@if ($product->inStock > 0)
								<button class="btn-icon btn-add-cart"  type="submit" id="add" ><i class="icon-shopping-cart"></i></button>	
							@else 
								<span class="product-label label-sale ">Stock Épuisé</span>
							@endif
						</div>
					</form>
							


						<!-- <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>  -->
					</figure>
					<div class="product-details">
						<div class="category-wrap">
							<div class="category-list">
								<!---------CATEGORY_NAME------------->
								<a href="category/{{$product->category->id}}" class="product-category">{{$product->category->name}}</a>
							</div>
						</div>
						<h2 class="product-title">
							<!--------------PRODUCT_NAME----------->
							<a href="/product/{{$product->id}} ">  {{$product->name}} </a>
						</h2>
						<div class="ratings-container">
							<div class="product-ratings">
								<span class="ratings" style="width:100%"></span><!-- End .ratings -->
								<span class="tooltiptext tooltip-top"></span>
							</div><!-- End .product-ratings -->
						</div><!-- End .product-container -->
						<div class="price-box">
							<span class="old-price">DH {{$product->reduction}} </span>
							<!---------PRICE------------->
							<span class="product-price">DH {{$product->price}} </span>
						</div><!-- End .price-box -->
					</div><!-- End .product-details -->
				</div>
			</div><!-- End .col-sm-4 -->

@endforeach

						</div><!-- End .row -->
<hr>
<!--------------------------------TOOLBOX------------------->
						<nav class="toolbox toolbox-pagination float-right">
							{{ $products->links('vendor.pagination.bootstrap-4') }}
						</nav>
					</div><!-- End .col-lg-9 -->

					<div class="sidebar-overlay"></div>
					<div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
					<aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
   <div class="sidebar-wrapper">
      <div class="widget">
         <h3 class="widget-title">
            <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Catégories</a>
         </h3>
         <!-----------------------CATEGORIES-------------------------------------------->
         <div class="collapse show" id="widget-body-2">
            <div class="widget-body">
               <ul class="cat-list">
                  @foreach ($categories as $category)
                  <li><a href="/category/{{$category->id}} "> {{$category->name}} </a></li>
                  @endforeach
               </ul>
            </div>
            <!-- End .widget-body -->
         </div>
         <!-- End .collapse -->
      </div>
      <!-- End .widget -->
      <div class="widget">
        <h3 class="widget-title">
            <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Prix</a>
        </h3>
        <div class="price-range-slider">
           <p class="range-value">
              <input style="margin-top: 20px; margin-left: 15px;" type="text" id="amount" readonly="" >
           </p>
           <div id="slider-range" class="range-bar" onclick="readamount()"></div>
        </div>
        <form action="{{ route('home')}}" method="GET">
        	@csrf
        	<input type="hidden" name="min" id="min" value={{App\Models\Product::getLowestPrice()}}>
        	<input type="hidden" name="max" id="max" value={{App\Models\Product::getHighestPrice()}}>
        	<div class="col-md-12 text-center">
        		<button style="border-color: #17a2b8; background-color: #17a2b8;" type="submit" class="btn btn-primary">Filtrer</button>
        	</div>
        </form>

      </div>
      <div class="widget widget-featured">
         <h3 class="widget-title">Featured</h3>
         <div class="widget-body">
            <div class="owl-carousel widget-featured-products">
               <div class="featured-col">
                  @foreach ($featured as $product)
                  <div class="product-default left-details product-widget">
                     <figure>
                        <a href="/product/{{$product->id}}">
                        <img src="{{asset('productsImages/'.$product->image)}}">
                        </a>
                     </figure>
                     <div class="product-details">
                        <h2 class="product-title">
                           <a href="/product/{{$product->id}} ">  {{$product->name}} </a>													
                        </h2>
                        <div class="ratings-container">
                           <div class="product-ratings">
                              <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                              <span class="tooltiptext tooltip-top"></span>
                           </div>
                           <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                           <span class="product-price">DH {{$product->price}} </span>
                        </div>
                        <!-- End .price-box -->
                     </div>
                     <!-- End .product-details -->
                  </div>
                  @endforeach
               </div>
            </div>
            <!-- End .widget-featured-slider -->
         </div>
         <!-- End .widget-body -->
      </div>
      <!-- End .widget -->
   <!-- End .widget -->
   </div><!-- End .sidebar-wrapper -->
</aside>
<!-- End .col-lg-3 -->
				
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-3"></div><!-- margin -->
		</main><!-- End .main -->



@endsection
