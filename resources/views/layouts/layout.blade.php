<?php
use App\Models\order;
use App\Models\product;
use App\Controllers\orderController;
use App\Controllers\cartController;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<title>STG Maroc | Smartphones | Accessoires | Robotics</title>

	<title>STG Maroc </title>


	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Bootstrap eCommerce Template">
	<meta name="author" content="SW-THEMES">
		
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="{{asset('assets/images/icons/faviicon.ico')}}">
	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery-ui.css')}}">

	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700' ] }
		};
		(function(d) {
			var wf = d.createElement('script'), s = d.scripts[0];
			wf.src = 'assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>
	
	<!-- Plugins CSS File -->
	<link rel="stylesheet" href=" {{ asset('assets/css/bootstrap.min.css') }}">

	<!-- Main CSS File -->
	<link rel="stylesheet" href=" {{ asset('assets/css/style.min.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendor/fontawesome-free/css/all.min.css') }} ">

</head>
    <body>

		        <!-- top bar-->
		<div class="top-notice bg-info" >
			<div class="owl-carousel info-boxes-slider" data-owl-options="{
				'items': 1,
				'dots': false,
				'loop': false,
				'responsive': {
					'768': {
						'items': 2
					},
					'992': {
						'items': 3
					}
				}
			}">
				<div class="info-box info-box-icon-left">
					<i class="icon-shipping"></i>

					<div class="info-box-content">
						<h4>LIVRAISON ET RETOUR GRATUITS</h4>
					</div><!-- End .info-box-content -->
				</div><!-- End .info-box -->

				<div class="info-box info-box-icon-left bg-info">
					<i class="icon-money"></i>
					<div id="chercher">
					<div class="info-box-content">
						<h4>100% garantie de remboursement</h4>
					</div><!-- End .info-box-content -->
					</div>
				</div><!-- End .info-box -->

				<div class="info-box info-box-icon-left">
					<i class="icon-secure-payment"></i>

					<div class="info-box-content">
						<h4>SUPPORT EN LIGNE 24/7</h4>
					</div><!-- End .info-box-content -->
				</div><!-- End .info-box -->
			</div><!-- End .owl-carousel -->
		</div>

		
			<!--HEADER ---->
        <header class="header " >
			<div class="header-top">
				<div class="container">
					<div class="header-left d-none d-sm-block " >
						<h6 class="telephone mb-0">APPELEZ-NOUS (123) 456 7890</h6>

					</div><!-- End .header-left -->

					<div class="header-right w-sm-100">
						<div class="header-dropdown dropdown-expanded mr-auto mr-sm-3">
							<a href="#">Links</a> 
							<div class="header-menu">
								<ul>
									@guest
									<li><a href=" {{route('login')}} ">Se connecter </a></li>
									@endguest

									@auth
									@if (Auth::user()->is_admin==1)
									<li><a href="{{route('admin_dashboard')}}">Admin Dashboard </a></li>
									@endif
									
									<li><a href="{{route('profile')}}">{{auth()->user()->firstname}} </a></li>
									<li><a href=" {{route('logout')}} ">Se déconnecter</a></li>
									@endauth
									<!--test-->
									<li><a href="/a_propos_de_nous">À propos de nous</a></li>

									

								<!--	<li><a href="category">Our Stores</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="#">Help &amp; FAQs</a></li>-->
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

						<div class="social-icons">
							<a href="https://www.instagram.com/stgtelecom/" class="social-icon social-instagram icon-instagram" target="_blank"></a>
							<a href="https://twitter.com/stgtelecom" class="social-icon social-twitter icon-twitter" target="_blank"></a>
							<a href="https://www.facebook.com/STGTelecomOfficiel/" class="social-icon social-facebook icon-facebook" target="_blank"></a>
						</div><!-- End .social-icons -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-top -->

			<div class="header-mobile-merge">
				<div class="header-middle header-align-center">
					<div class="container">
						<div class="header-left d-none d-lg-block">
							<div class="header-dropdowns font2">
							

								<div class="header-dropdown switcher">
									<a href="#">FR</a>
									<div class="header-menu">
										<ul>
											<li><a href="#">ENG</a></li>
											<li><a href="#">FR</a></li>
											<li><a href="#">AR</a></li>

										</ul>
									</div><!-- End .header-menu -->
								</div><!-- End .header-dropown -->
							</div><!-- End .header-dropdowns -->						
						</div><!-- End .header-left -->

						<div class="header-center">
							<button class="mobile-menu-toggler d-lg-none mr-1 mr-md-3" type="button">
								<i class="icon-menu"></i>
							</button>


							<a href="/" class="llogo">
								<img src="{{asset('assets/images/logo.png')}}" height="100" width="100" alt="stg Logo">

							<!-- <a href="/" class="logo">
								<img src="{{asset('assets/images/logo.png')}}" alt="Porto Logo">

							</a> -->
						</div><!-- End .headeer-center -->

						<div class="header-right">
							<div class="header-search header-search-inline header-icon">
								<a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
								<form action="{{ url('/search')}}" method="GET" role="search">
									
									<div class="header-search-wrapper">
										<input type="search" class="form-control" name="query"  placeholder="Chercher..."  required>
										<button class="btn icon-search-3" type="submit"></button>
									</div><!-- End .header-search-wrapper -->
									
								</form>
							</div><!-- End .header-search -->
						</div><!-- End .header-right -->
					</div><!-- End .container -->
				</div><!-- End .header-middle -->

				<div class="header-bottom sticky-header">
					<div class="container">
						<div class="header-left">
							<nav class="main-nav">
								<ul class="menu">
									<li >
										<a style="color: black!important;" href="/">Accueil</a>
									</li>
									<li>
										<a style="color: black!important;" href="/">Catégories</a>
									</li>
					
								</ul>
							</nav>
						</div><!-- .header-left -->
				@auth
			
		
						@php
							$id = Auth::user()->id;
							$orders = order::where('user_id',$id)->get();
						@endphp	
						
						<!-------------MINI-ADDTOCART-------------------->
						<div class="header-right">
							
							<div class="dropdown cart-dropdown">
								<a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
									<div style="color: black!important;" class="bag">
										<i class="icon-bag-2" ></i>
										<span class="cart-count"> {{$orders->count()}} </span>
									</div>
								</a>

								<div class="dropdown-menu">
									<div class="dropdownmenu-wrapper">
										<div class="dropdown-cart-header">
											<span>{{$orders->count()}} Items</span>
											

											<!-- <a href="/cart" class="float-right">View Cart</a>-->

<!-- 											<a href="/cart" class="float-right">View Cart</a>
 -->
										</div><!-- End .dropdown-cart-header -->
								

						@foreach ($orders as $order)
						
										<div class="dropdown-cart-products">
											<div class="product">
												<div class="product-details">
													<h4 class="product-title">
														<a href="{{route('product',[$order->product->id])}}">{{$order->product->name}} </a>
													</h4>
													
													<span class="cart-product-info">
														<span class="cart-product-qty"> {{$order->quantity}} </span>
														x {{$order->product->price}}
													</span>
												</div><!-- End .product-details -->
													
												<figure class="product-image-container">
													<a href="{{route('product',[$order->product->id])}}" class="product-image">
														<img src="{{asset('productsImages/'.$order->product->image)}}" alt="product" width="80" height="80">
													</a>
											<!--DELETE BTN ----->
													<form action="/layout/{{$order->id}}" method="post">
													@csrf
													<button type="submit">
														<i class="btn-remove icon-cancel"></i>
													</button>
													</form>
												</figure>
											</div><!-- End .product -->
						@endforeach
			
										</div><!-- End .cart-product -->
										

						@php
								$total=0;
								foreach ($orders as $order) {
								$total = $total + $order->product->price;
								}
						@endphp
						
								@if ($orders->count()!=0)
									
										<div class="dropdown-cart-total">
											<span>Total</span>
									<span class="cart-total-price float-right">DH {{$total}} </span>
										</div><!-- End .dropdown-cart-total -->
										
										<div class="dropdown-cart-action">

											<a href="/cart" class="btn btn-primary btn-block" style="font-weight: 50px;">Voir le panier</a>

											

										</div><!-- End .dropdown-cart-total -->
								@endif	
								
									</div><!-- End .dropdownmenu-wrapper -->
								</div><!-- End .dropdown-menu -->
							</div><!-- End .dropdown -->
						</div><!-- End .header-right -->
				@endauth
				@guest
				<a href="{{route('login')}} " class="dropdown-toggle" role="button">
					<i class="icon-bag-2"></i>
					<span class="cart-count">0</span>
				</a>
				@endguest
				
					</div><!-- End .container-->
				</div><!-- End .header-bottom -->
			</div>
		</header><!-- End .header -->


		<!-----------------CONTENT ------------------->
            @yield('content')


<footer class="footer font2" style="
    background-color: black;
">
			<div class="container" style="
    /* color: white; */
">
				<div class="footer-middle" style="
    margin-left: 10px;
">
    	<img src="{{asset('assets/images/icons/favicon.ico')}}" height="100" width="100" alt="Logo" style="
    margin-left: 550px;
">
					<div class="row" style="margin-left: 10px!important;">
    
						<div style="color: white!important;" class="col-lg-2 m-b-5">
							

							
<div class="widget widget-block">
    <div class="widget">
								<h4 class="widget-title" style="color: white;">Points de vente</h4>

								<ul class="links">
									<li><a href="/marjane">Marjane</a></li>
									<li><a href="/orange">Orange</a></li>
									<li><a href="/electroplanet">Electroplanet</a></li>
									<li><a href="https://www.jumia.ma/stg/">Jumia</a></li>
									<li><a href="https://inwi.ma/">Inwi</a></li>
								</ul>
							</div>
								
							
							</div>

							

							<div class="row ls-0">
								
								<div class="col-sm-6">
									
								</div>
							</div>
						</div><!-- End .col-lg-5 -->
					
                	<div class="col-lg-2 col-sm-4 m-b-4" style="color: white!important;">
							<div class="widget">
								<h4 class="widget-title" style="color: white;">Qui sommes-nous</h4>

								<ul class="links">
									<li><a href="http://127.0.0.1:8000/termes_conditions">Termes et conditions</a></li>
									<li><a href="#chercher">Recherche Avancée</a></li>
									<li><a href="/a_propos_de_nous">À propos de nous</a></li>

								</ul>
							</div><!-- End .widget -->
						</div>
							<div class="col-lg-3 col-sm-4 m-b-4" style="color: white!important;">
             		       <div class="widget" style="padding-left: 25px;">
                        <h4 class="widget-title" style="color: white;">Contactez nous </h4>
                        <ul class="contact-info">
                            <li>
                                <span class="contact-info-label">Adresse</span>
                    			Immeuble Bureau ANATOLIA<br>
								26, Rue Andaloussi, 1er étage n°7, <br>
								Tanger - MAROC.
								
                            </li>
                            <li>
                                <span class="contact-info-label">Téléphone</span>Tél : <a href="tel:">+212 (0) 5 39 340 734 </a>
                                
                            </li>
                            <li>
                                <span class="contact-info-label">Email</span> <a href="mailto:contact@stgtelecom.ma">contact@stg.ma</a>
                            </li>
                            <li>
                                
                            </li>
                        </ul>
                       
                    </div><!-- End .widget -->
                </div><!-- End .col-lg-3 -->

<div class="col-lg-3 col-sm-4 m-b-4">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.1784760777305!2d-5.8110756848067515!3d35.770991980173434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b80a95fb05e3d%3A0xcf5b316a11b49add!2sSTG%20Maroc!5e0!3m2!1sfr!2sma!4v1623459724830!5m2!1sfr!2sma" style="width: 450px; height:200px; border:0; padding-right: 10px;" allowfullscreen="" loading="lazy"></iframe>
</div>
						<!-- End .col-lg-2 -->
						<!-- End .col-lg-2 -->

						
	
					
				
					</div><!-- End .row -->
				</div><!-- End .footer-middle -->

				<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">

					<p class="footer-copyright py-3 pr-4 mb-0">© Copyright 2021 - STGTelecom -</p>

					


					<div class="social-icons py-3">
						<a href="https://www.facebook.com/STGTelecomOfficiel/" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
						<a href="https://twitter.com/stgtelecom" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
						<a href="https://www.linkedin.com/company/stg-telecom/" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
					</div><!-- End .social-icons -->
				</div><!-- End .footer-bottom -->
			</div>
		</footer>
	</div><!-- End .page-wrapper -->
    
    </body>
</html>



<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu mb-3 border-0">
                
                <!-- <li>
                    <a href="#">ENG</a>
                    <ul>
                        <li><a href="#">ENG</a></li>
                        <li><a href="#">FRE</a></li>
                    </ul>
                </li> -->
            </ul>
            <ul class="mobile-menu">
                <li class="active"><a href="index.html">Home</a></li>
                <li>
                    <a href="category.html">Catégories</a>
                    <ul>
                        <li><a href="category-banner-full-width.html">Full Width Banner</a></li>
                        <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                        <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                        <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                        <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                        <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                        <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                        <li><a href="#">List Types</a></li>
                        <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                        <li><a href="category.html">3 Columns Products</a></li>
                        <li><a href="category-4col.html">4 Columns Products</a></li>
                        <li><a href="category-5col.html">5 Columns Products</a></li>
                        <li><a href="category-6col.html">6 Columns Products</a></li>
                        <li><a href="category-7col.html">7 Columns Products</a></li>
                        <li><a href="category-8col.html">8 Columns Products</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product.html">Horizontal Thumbs</a></li>
                                <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product.html">Inner Zoom</a></li>
                                <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layout Types</a>
                            <ul>
                                <li><a href="product.html">Default Layout</a></li>
                                <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                <li><a href="product-full-width.html">Full Width Layout</a></li>
                                <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                    <ul>
                        <li><a href="cart">Shopping Cart</a></li>
                        <li>
                            <a href="#">Checkout</a>
                            <ul>
                                <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                <li><a href="checkout-review.html">Checkout Review</a></li>
                            </ul>
                        </li>
                        <li><a href="about">About</a></li>
                        <li><a href="#" class="login-link">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="single.html">Blog Post</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="https://www.facebook.com/STGTelecomOfficiel/" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
            <a href="https://twitter.com/stgtelecom" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
            <a href="https://www.instagram.com/stgtelecom/" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-------------NEWSLETTER-POPUP---------------------
		<div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url(assets/images/newsletter_popup_bg.jpg)">
			<div class="newsletter-popup-content">
				<img src="assets/images/logo-black.png" alt="Logo" class="logo-newsletter">
				<h2>BE THE FIRST TO KNOW</h2>
				<p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
				<form action="#">
					<div class="input-group">
						<input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
						<input type="submit" class="btn" value="Go!">
					</div><!- End .from-group 
				</form>
				<div class="newsletter-subscribe">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="1">
							Don't show this popup again
						</label>
					</div>
				</div>
			</div><! End .newsletter-popup-content -->
		<!--</div><!- END .newsletter-popup -->

<!-- Add Cart Modal -->
<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body add-cart-box text-center">
        <p>You've just added this product to the<br>cart:</p>
        <h4 id="productTitle"></h4>
        <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
        <div class="btn-actions">
            <a href="cart"><button class="btn-primary">Go to cart page</button></a>
            <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
        </div>
      </div>
    </div>
  </div>
</div>

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<!-- Plugins JS File -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/optional/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.min.js')}}"></script>
<!-- Main JS File -->
<script src="{{asset('assets/js/main.min.js')}}"></script>


	
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
<script type="text/javascript">
	//-----JS for Price Range slider-----
	function readamount(){
		// Getting min and max values onclick
		var str = $(":input[type=text][readonly='readonly']").val();
		var mySubString = str.replace(/ |DH/g,'');
		mySubString = mySubString.split('-');
		var min = mySubString[0];
		var max = mySubString[1];
		// console.log(min);
		// console.log(max);
		document.getElementById('min').value = min;
		document.getElementById('max').value = max;
	}

$(function() {
	var minP;
	function handleMin(data) {
	  minP = data;
	}
	var maxP;
	function handleMax(data) {
	  maxP = data;
	}
		$.ajax({
		    type: 'GET',
		    url: '{{"getminPrice"}}',
		    dataType: "json",
		    async: false,
		    success:handleMin,

		});
	$.ajax({
		    type: 'GET',
		    url: '{{"getmaxPrice"}}',
		    dataType: "json",
		    async: false,
		    success:handleMax,

	});

	$( "#slider-range" ).slider({
	  range: true,
	  min: minP,
	  max: maxP,
	  values: [ minP,maxP ],
	  slide: function( event, ui ) {
		$( "#amount" ).val( "DH" + ui.values[ 0 ] + "           -        DH" + ui.values[ 1 ] );
	  }
	});
	$( "#amount" ).val( "DH" + $( "#slider-range" ).slider( "values", 0 ) +
	  "           -        DH" + $( "#slider-range" ).slider( "values", 1 ) );
});
</script>