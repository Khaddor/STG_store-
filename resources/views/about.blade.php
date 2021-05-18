@extends('layouts.layout')


@section('content')
    
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="#">Pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">About Us</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="about-section">
				<div class="container">
					<h2 class="title">Who we are</h2>
					<div class="row">
						<div class="col-lg-8">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. desktop publishing software like Aldus PageMaker including versions. was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.</p>
						</div><!-- End .col-lg-8 -->

						<div class="col-lg-4">
							<div class="info-box info-box-icon-left info-box-border">
								<i class="icon-shipped"></i>

								<div class="info-box-content">
									<h4>FREE SHIPPING & RETURN</h4>
									<p>Free shipping on all orders over $99.</p>
								</div><!-- End .info-box-content -->
							</div><!-- End .info-box -->

							<div class="info-box info-box-icon-left info-box-border">
								<i class="icon-us-dollar"></i>

								<div class="info-box-content">
									<h4>MONEY BACK GUARANTEE</h4>
									<p>100% money back guarantee</p>
								</div><!-- End .info-box-content -->
							</div><!-- End .info-box -->

							<div class="info-box info-box-icon-left info-box-border">
								<i class="icon-online-support"></i>

								<div class="info-box-content">
									<h4>ONLINE SUPPORT 24/7</h4>
									<p>Lorem ipsum dolor sit amet.</p>
								</div><!-- End .info-box-content -->
							</div><!-- End .info-box -->
						</div><!-- End .col-lg-4 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .about-section -->

			<div class="team-section">
				<div class="container">
					<h2 class="title">Our Team</h2>

					<div class="row">
						<div class="col-sm-6 col-lg-3">
							<div class="member">
								<img src="{{asset('assets/images/team/member-1.jpg')}}" alt="member">

								<h3 class="member-title">JANE DOE</h3>
							</div><!-- End .member -->
						</div><!-- End .col-lg-3 -->

						<div class="col-sm-6 col-lg-3">
							<div class="member">
								<img src="{{asset('assets/images/team/member-2.jpg')}}" alt="member">

								<h3 class="member-title">John DOE</h3>
							</div><!-- End .member -->
						</div><!-- End .col-lg-3 -->

						<div class="col-sm-6 col-lg-3">
							<div class="member">
								<img src="{{asset('assets/images/team/member-3.jpg')}}" alt="member">

								<h3 class="member-title">John DOE</h3>
							</div><!-- End .member -->
						</div><!-- End .col-lg-3 -->

						<div class="col-sm-6 col-lg-3">
							<div class="member">
								<img src="{{asset('assets/images/team/member-4.jpg')}}" alt="member">

								<h3 class="member-title">JANE DOE</h3>
							</div><!-- End .member -->
						</div><!-- End .col-lg-3 -->
					</div><!-- End .row -->

					<div class="text-center">
						<a href="#" class="btn btn-sm btn-primary">Join Our Team</a>
					</div>
				</div><!-- End .container -->
			</div><!-- End .team-section -->

			<div class="history-section">
				<div class="container">
					<h2 class="title">Our History</h2>

					<div class="row">
						<div class="col-lg-6">
							<div class="history-item">
								<figure class="history-image">
									<img src="{{asset('assets/images/about/history-1.jpg')}}" alt="history">
									<span>2000</span>
								</figure>

								<div class="history-content">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								</div><!-- End .history-content -->
							</div><!-- End .history-item -->
						</div><!-- End .col-lg-6 -->

						<div class="col-lg-6">
							<div class="history-item">
								<figure class="history-image">
									<img src="{{asset('assets/images/about/history-2.jpg')}}" alt="history">
									<span>2010</span>
								</figure>

								<div class="history-content">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								</div><!-- End .history-content -->
							</div><!-- End .history-item -->
						</div><!-- End .col-lg-6 -->

						<div class="col-lg-6">
							<div class="history-item">
								<figure class="history-image">
									<img src="{{asset('assets/images/about/history-3.jpg')}}" alt="history">
									<span>2015</span>
								</figure>

								<div class="history-content">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								</div><!-- End .history-content -->
							</div><!-- End .history-item -->
						</div><!-- End .col-lg-6 -->

						<div class="col-lg-6">
							<div class="history-item">
								<figure class="history-image">
									<img src="{{asset('assets/images/about/history-4.jpg')}}" alt="history">
									<span>2018</span>
								</figure>

								<div class="history-content">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								</div><!-- End .history-content -->
							</div><!-- End .history-item -->
						</div><!-- End .col-lg-6 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .history-section -->
		</main><!-- End .main -->


@endsection
