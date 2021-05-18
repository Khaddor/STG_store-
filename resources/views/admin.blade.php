@extends('layouts.layout')



@section('content')

<main class="main">
	<nav aria-label="breadcrumb" class="breadcrumb-nav">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
				<li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
			</ol>
		</div><!-- End .container -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-lg-9 order-lg-last dashboard-content">
				<h2>Add Product</h2>
				
				<form action="{{route('admin')}}" method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="row">
						<div class="col-sm-11">
								<div class="col-md-5">
									<div class="form-group required-field">
										<label for="acc-name">Product Name</label>
										<input type="text" class="form-control" id="acc-name" name="name" required="">
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->

								<div class="col-md-5">
									<div class="form-group">
										<label for="acc-mname">Product Price</label>
										<input type="text" class="form-control" id="acc-mname" name="price">
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->

								<div class="col-md-5">
									<div class="form-group required-field">
										<label for="acc-lastname">Reduced Price</label>
										<input type="text" class="form-control" id="acc-lastname" name="reduced_price" required="">
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->
                                <div class="col-md-5">
									<div class="form-group required-field">
										<label for="acc-lastname">Category </label>
										<input type="text" class="form-control" id="acc-lastname" name="category" required="">
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->

                                <div class="col-md-5">
                                    <div class="form-group required-field">
                                        <label for="acc-lastname">Choose image </label>
                                        <input type="file" class="form-control" id="acc-lastname" name="image" required="">
                                    </div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->
                                
							
						</div><!-- End .col-sm-11 -->
					</div><!-- End .row -->

			
					<div class="required text-right">* Required Field</div>
					<div class="form-footer">
						<a href="#"><i class="icon-angle-double-left"></i>Back</a>

						<div class="form-footer-right">
							<button type="submit" class="btn btn-primary">Add product</button>
						</div>
					</div><!-- End .form-footer -->
				</form>
			</div><!-- End .col-lg-9 -->

			<aside class="sidebar col-lg-3">
				<div class="widget widget-dashboard">
					<h3 class="widget-title">My Account</h3>

					<ul class="list">
						<li class="active"><a href="#">Adding Products</a></li>
	
					</ul>
				</div><!-- End .widget -->
			</aside><!-- End .col-lg-3 -->
		</div><!-- End .row -->
	</div><!-- End .container -->

	<div class="mb-5"></div><!-- margin -->
</main>
@endsection
