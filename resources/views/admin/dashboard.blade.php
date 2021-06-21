@extends('layouts.admin_panel')

<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
 
@section('content')
<div class="container pt-4 p-0 bg-white rounded" >

     <div class="container rounded pt-4" >

        @if (Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="row ">
            <div class="col-md-12">
                <div class="row ">

                    <div class="col-md-3 ml-5 rounded">
                        <table class="table table-borderless border-bottom  " >
                            <thead>
                            <tr> 
                                <td > Orders <i class='fas fa-list-alt float-right '></i>  </td>
                            </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td style="height: 100px; font-weight: bold; font-size: 30px" class="pt-4" > + {{$orders_today->count()}} </td>
                                </tr>
                                <tr >
                                    <td style="color:rgb(52, 141, 52); "> <i class='fas fa-arrow-circle-up'></i> Today</td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                    
       
      

                    <div class="  col-md-3 ml-5 rounded">
                        <table class="table table-borderless border-bottom  " >
                            <thead>
                            <tr> 
                                <td > New Users  <i class='fas fa-users float-right '></i>  </td>
                            </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td style="height: 100px; font-weight: bold; font-size: 30px" class="pt-4" > + {{$users_today->count()}} </td>
                                </tr>
                                <tr >
                                    <td style="color:rgb(52, 141, 52); "> <i class='fas fa-arrow-circle-up'></i> Today</td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>

         <div class="col-md-4 ml-3 pt-0  rounded "  >   
         <div class="mt-0">   <h3>Orders status  :</h3></div> 
            <table class="table table-hover table-striped bg-white ">
                <thead>
                    <tr> 
                        <td class=" bg-primary " style="background-color:#2F4F4F; color: white"> Orders <span class="badge badge-light float-right "> {{$orders->count()}} </span></td>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td > En attend<span class="badge badge-secondary float-right "> {{$orders_onHold->count()}} </span></td>
                    </tr>
                    <tr>
                        <td>Accepted<span class="badge badge-primary float-right ">{{$orders_accepted->count()}}</span></td>
                    </tr>
                    <tr>
                        <td>Rejected<span class="badge badge-danger float-right ">{{$orders_rejected->count()}}</span></td>
                    </tr>
                    <tr>
                        <td>Done<span class="badge badge-success float-right ">{{$orders_done->count()}}</span></td>
                    </tr>
                    <tr>    
                    </tr>
                </tbody>
            </table>
        </div>
       
                </div> 
            </div>
            

        </div>
       
    </div>    

    <hr><br>

    <div class="col-md-12"> 
        <h3 class="ml-5"><i class='fas fa-list-alt  '></i>  Orders Per City : </h3>
       <div id="chart" style="height: 300px; padding-right: 0px; margin-right: 0px"></div>
   </div>  

   <hr><br> 
   <div class="col-md-6 mb-3">
     <h3 class="ml-5"><i class='fas fa-exclamation-triangle text-warning '></i>  Products out of stock</h3>
           <table class="table table-hover table-striped ml-5">
           
            <tbody>
                @foreach ($products as $product)  
                <tr>
                    <td><i class="fas fa-circle text-danger"></i> &nbsp; {{$product->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
   </div>

</div>

<script>
    const chart = new Chartisan({
    el: '#chart',
    url: "@chart('OrdersChart')",
    hooks: new ChartisanHooks()
    .colors(['#0000FF', '#0000FF'])
    .legend({ position: 'bottom' })
    .datasets([{ type: 'bar', fill: true }, 'bar']),  

    });
</script> 
@endsection
