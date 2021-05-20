@extends('layouts.layout')



@section('content')

<main class="main">
	<nav aria-label="breadcrumb" class="breadcrumb-nav">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
				<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
			</ol>
		</div><!-- End .container -->
	</nav>

	<div class="container">
		<div class="row">
			<aside class="sidebar col-lg-3">
				<div class="widget widget-dashboard">
					<h3 class="widget-title">My Account</h3>



					<ul class="list">
						<li class="active"><a href=" {{route('profile')}} ">Account Information</a></li>
						<li ><a href=" {{route('profile_edit')}} ">Edit Information</a></li>
						<li><a href="#">My Orders</a></li>
					</ul>
				</div><!-- End .widget -->
			</aside><!-- End .col-lg-3 -->
                        
				<div class="col-md-6">
                        <h3>Account Information</h3>
                                
					<div class="card">
						<div class="card-header">
                                                                User Information
                                                        <a href=" {{route('profile_edit')}} " class="card-edit">Edit</a>
						</div><!-- End .card-header -->

					        <div class="card-body">
                                                        <p>
                                                                {{auth()->user()->firstname  }}<br>
                                                                {{auth()->user()->lastname  }}<br>
                                                                {{auth()->user()->phone  }}<br>

                                                                {{auth()->user()->email  }}<br>
                                                                
                                                                <a href=" {{route('profile_edit')}} ">Change Password</a>
                                                        </p>
					        </div><!-- End .card-body -->
				        </div><!-- End .card -->
				</div><!-- End .col-md-6 -->
	</div><!-- End .container -->

	<div class="mb-5"></div><!-- margin -->
</main>
@endsection