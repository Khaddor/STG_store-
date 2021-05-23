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
				<h2>Products</h2>
					<table class="table table-bordered">
						<thead>
						<tr>
							<th scope="col">Name</th>
							<th scope="col">Price</th>
							<th scope="col">Image</th>
							<th scope="col">Category ID</th>
							<th scope="col">Action</th>

						</tr>
						</thead>
						<tbody>
				@foreach ($products as $product)
						<tr>
							<th scope="row"> {{$product->name}} </th>
							<td> {{$product->price}} </td>
							<td> {{$product->image}} </td>
							<td>{{$product->category_id}}   ({{$product->category->name}}) </td>
						<form action=" {{route('adminDeleteProduct')}} " method="post">
							@csrf
							<input type="hidden" name="id" value="{{$product->id }}">
							<td ><button type="button" class="btn btn-primary btn-sm">Edit</button>
								<button type="submit" class="btn btn-danger btn-sm">Delete</button></td>
						</form>
						</tr>
				@endforeach	
					</table>
	

			<div class="col-lg-9 order-lg-last dashboard-content">
				<h2>Categories</h2>
					<table class="table table-bordered">
						<thead>
						<tr>
							<th scope="col">Category ID</th>
							<th scope="col">Name</th>
							<th scope="col">Action</th>
						</tr>
						</thead>
						<tbody>
				@foreach ($categories as $category)
						<tr>
							<th scope="row"> {{$category->id}} </th>
							<td> {{$category->name}} </td>
							<td ><button type="button" class="btn btn-primary btn-sm">Edit</button>
								<button type="button" class="btn btn-danger btn-sm">Delete</button></td>
						</tr>
				@endforeach	
					</table>
	
			</div>

		</div>
			


			<!--SideBar---->			
			<aside class="sidebar col-lg-3">
				<div class="widget widget-dashboard">
					<h3 class="widget-title">My Account</h3>

					<ul class="list">
						<li ><a href=" {{route('adminIndex')}} ">Adding Products/Categories</a></li>
						<li  class="active"><a href="{{route('admin_manage')}}"> Manage Products/Categories</a></li>
						<li><a href=" {{route('admin_manageOrders')}} ">Manage Orders</a></li>
				</ul>
				</div><!-- End .widget -->
			</aside><!-- End .col-lg-3 -->
		</div><!-- End .row -->
	</div><!-- End .container -->

	<div class="mb-5"></div><!-- margin -->
</main>
@endsection
