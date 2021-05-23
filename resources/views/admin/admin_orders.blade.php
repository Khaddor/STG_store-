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
				<h2>Orders</h2>
	
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Product </th>
                                <th scope="col">Quantity</th>
                                <th scope="col">USer</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row"> </th>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>


                            </tr>
                        </table>
        
                </div>
    




			<!--SideBar---->			
			<aside class="sidebar col-lg-3">
				<div class="widget widget-dashboard">
					<h3 class="widget-title">My Account</h3>

					<ul class="list">
						<li ><a href=" {{route('adminIndex')}} ">Adding Products/Categories</a></li>
						<li  ><a href="{{route('admin_manage')}}"> Manage Products/Categories</a></li>
						<li class="active"><a href=" {{route('admin_manageOrders')}}">Manage Orders</a></li>
						
				</ul>
				</div><!-- End .widget -->
			</aside><!-- End .col-lg-3 -->
		</div><!-- End .row -->
	</div><!-- End .container -->

	<div class="mb-5"></div><!-- margin -->
</main>
@endsection
