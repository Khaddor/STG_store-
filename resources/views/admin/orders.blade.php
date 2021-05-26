@extends('layouts.admin_panel')


@section('content')

        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-lg-last dashboard-content">
                    <h2>Orders</h2>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col"> ID</th>
                                    <th scope="col">Product </th>
                                    <th scope="col">User Info</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Order Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $oldID=0
                                    @endphp
                            @foreach ($orders as $order)
                            <tr>
                                <th style="width: 5%"> {{$order->id}} </th>
                                <td >  {{$order->product->name}}   <span class="badge badge-info">x {{$order->quantity}}</span></td>
                              
                                <td >  <i class="fas fa-user"></i> {{$order->user->firstname}} <br><i class="fa fa-home"></i> 
                                        {{$order->user_address}} <br>
                                    <i class="fas fa-phone"></i> {{$order->user_phone}} </td>

                                <td > {{$order->product->price * $order->quantity}} <span class="badge badge-info">DH</span> </td>
                                <td > {{$order->created_at}} </td>
                                <td >  
                                 <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                        <select class=" custom-select custom-select-sm">
                                            <option selected>En attend</option>
                                            <option value="1">confirmé</option>
                                            <option value="2">envoyé</option>
                                          </select>  
                                        </div>
                                          <div class="col-md-4">
                                           <button class="btn btn-success btn-sm"> <i class="fa fa-check fa-sm"></i> </button>  
                                          </div>
                                    </div>     
                                </div>   
                                    
                                </td>
                            </tr>
                          
                            @endforeach
                              

                            </table>
            
                    </div>                
            </div><!-- End .row -->
        </div><!-- End .container -->
@endsection