@extends('layouts.admin_panel')


@section('content')

        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-lg-last dashboard-content">
                    <h2>Orders</h2>

                    @if (Session::has('success'))
                        <div class="alert alert-success"> {{Session::get('success')}} </div>
                    @endif

                    <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col"> ID</th>
                                    <th scope="col">Product </th>
                                    <th scope="col">User Info</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Order Date</th>
                                    <th>Order Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $oldID=0
                                    @endphp
                            @foreach ($orders as $order)
                            <tr>
                                <th style="width: 5%"> {{$order->id}} </th>
                                <td >  {{($order->product?$order->product->name:"---")}}   <span class="badge badge-info">x {{($order->product?$order->quantity:"---")}}</span></td>
                              
                                <td >  <i class="fas fa-user"></i> {{$order->product?$order->user->firstname:"---"}} <br><i class="fa fa-home"></i> 
                                      {{$order->product?$order->city:"---"}} , {{$order->product?$order->user_address:"---"}} <br>
                                    <i class="fas fa-phone"></i> {{$order->product?$order->user_phone:"---"}} </td>

                                <td > {{($order->product?$order->product->price*$order->quantity:"---")}} <span class="badge badge-info">DH</span> </td>
                                <td > {{$order->product?$order->created_at:"---"}} </td>
                                <td >  
                                 <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                    <form action=" {{route('change_status')}} " method="POST">
                                        @csrf
                                        <!--switch for badge------------------->
                                                @switch($order->status_id)
                                                    @case(1)
                                                    <span class="badge badge-warning mb-2 " id="statusBadge" >{{$order->status->state}}</span>      
                                                        @break
                                                    @case(2)
                                                    <span class="badge badge-info mb-2 " id="statusBadge" >{{$order->status->state}}</span>   
                                                        @break
                                                    @case(3)
                                                        <span class="badge badge-danger mb-2 " id="statusBadge" >{{$order->status->state}}</span>    
                                                        @break
                                                    @case(4)
                                                        <span class="badge badge-success mb-2 " id="statusBadge" >{{$order->status->state}}</span>    
                                                        @break
                                                    @default
                                                        
                                                @endswitch         
                                        <select class=" custom-select custom-select-sm" name="selectedStatus" id="statusEdit" >
                                            <option value="1">En attente</option>
                                            <option value="2">Accepted</option>
                                            <option value="3">rejected</option>
                                            <option value="4">Done</option>

                                          </select>  
                                        </div>
                                        <input type="hidden" name="order_id" value=" {{$order->id}} "> 
                                          <div class="col-md-4">
                                           <button class="btn btn-success btn-sm mt-4"  type="submit" > <i class="fa fa-check fa-sm"></i> </button> 
                                          </div>
                                    </div>     
                                 
                                    </form>
                                     </div> 
                                     @if($order->status_id == 2)
                                    <form method="POST" action="{{route('generate-pdf')}}">
                                        @csrf
                                        <input type="hidden" name="order_id" value="{{$order->id}}">
                                        <button class="btn btn-primary btn-sm mt-4"  type="submit" > <i class="fas fa-file-pdf fa-sm"></i></button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                            @endforeach

                    </table>
             <div class="toolbox toolbox-pagination float-right">
            {{ $orders->links('vendor.pagination.bootstrap-4') }}
        </div>
                    </div>                
                    
            </div><!-- End .row -->
            
        </div><!-- End .container -->
@endsection

