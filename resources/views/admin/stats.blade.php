@extends('layouts.admin_panel')

<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
 
@section('content')
<div class="container pt-4 p-0 bg-white rounded" >

     <div class="container rounded " >
            <h1 class="pb-3">Statistiques</h1><br>

        <div class="row ">
            <div class="col-md-6">
                <div class="row ">
                    <div class="col-md-6 pl-2 rounded">
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
                    <div class="col-md-6   rounded">
                        <table class="table table-borderless border-bottom  " >
                            <thead>
                            <tr> 
                                <td > Store Visits <i class='fas fa-eye float-right '></i>  </td>
                            </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td style="height: 100px; font-weight: bold; font-size: 30px" class="pt-4" > + en cours </td>
                                </tr>
                                <tr >
                                    <td style="color:rgb(52, 141, 52); "> <i class='fas fa-arrow-circle-up'></i> Today</td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="  col-md-6 ml-5 rounded">
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
                </div> 
            </div>
            <div class="col-md-6 ">   
                <div id="chart" style="height: 300px; padding-right: 0px; margin-right: 0px"></div>
            </div>

        </div>
    </div>      
    <hr><br>
    <div class="row">
     
        <div class=" col-md-4 pb-5 mb-5 ml-5 border-left" >   
            <table class="table table-hover table-striped bg-white ">
                <thead>
                    <tr> 
                        <td class="bg-primary "> Orders <span class="badge badge-light float-right "> {{$orders->count()}} </span></td>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td > En attend<span class="badge badge-primary float-right "> {{$orders_onHold->count()}} </span></td>
                    </tr>
                    <tr>
                        <td>Accepted<span class="badge badge-primary float-right ">{{$orders_accepted->count()}}</span></td>
                    </tr>
                    <tr>
                        <td>Rejected<span class="badge badge-primary float-right ">{{$orders_rejected->count()}}</span></td>
                    </tr>
                    <tr>    
                        <td>Done<span class="badge badge-primary float-right ">{{$orders_done->count()}}</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
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