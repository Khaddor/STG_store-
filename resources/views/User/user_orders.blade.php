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
			<div class="col-lg-9 order-lg-last dashboard-content">
				
			
			<table class="table table-striped">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Order ID</th>
                        <th>Ordered date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($user->orders as $order)
                    
                    <tr>
                        <td> {{$user->firstname}} </td>
                        <td>{{$order->id}}</td>
                        <td>{{$order->created_at}}</td>
                        @switch($order->status_id)
                        @case(1)
                     <td>   <span class="badge badge-warning mb-1 " id="statusBadge" >{{$order->status->state}}</span>  </td>    
                            @break
                        @case(2)
                     <td>   <span class="badge badge-info mb-1 " id="statusBadge" >{{$order->status->state}}</span>   </td>
                            @break
                        @case(3)
                     <td>       <span class="badge badge-danger mb-1 " id="statusBadge" >{{$order->status->state}}</span>    </td>
                            @break
                        @case(4)
                      <td>      <span class="badge badge-success mb-1 " id="statusBadge" >{{$order->status->state}}</span>    </td>
                            @break
                        @default
                            
                    @endswitch
                    </tr>
                @endforeach

                    <tr>
                        <td>XXX</td>
                        <td>XXX</td>
                        <td>XXX</td>
                        <td>XXX</td>
                    </tr>
                </tbody>
            </table>
		    </div><!-- End .row -->



			<aside class="sidebar col-lg-3">
				<div class="widget widget-dashboard">
					<h3 class="widget-title">My Account</h3>

					<ul class="list">
						<li><a href=" {{route('profile')}} ">Account Information</a></li>
						<li ><a href=" {{route('profile_edit')}} ">Edit Information</a></li>
						<li class="active"><a href="#">My Orders</a></li>
				
					</ul>
				</div><!-- End .widget -->
			</aside><!-- End .col-lg-3 -->
		</div><!-- End .row -->

	</div><!-- End .container -->

	<div class="mb-5"></div><!-- margin -->
</main>
@endsection
