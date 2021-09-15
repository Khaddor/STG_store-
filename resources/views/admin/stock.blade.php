@extends('layouts.admin_panel')


@section('content')
    
<div class="container bg-white p-5">

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif

    @if (Session::has('deleted'))
    <div class="alert alert-success" role="alert">
        {{Session::get('deleted')}}
    </div>
@endif
    <div>
    <h2>Stock Management</h2><br>


        <table class="table table-striped">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Products</td>
                    <td>Quantity Available</td>
                    <td>Add</td>
                    <td>Remove</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)  
                <tr>
                    <td> {{$product->id}} </td>
                    <td>{{$product->name}}</td>
                    <td> {{$product->inStock}}</td>
                <form action=" {{route('add_stock')}} " method="POST"> 
                    @csrf   
                    <td>
                        <input type="text" name="added_quantity" class="col-md-3 mr-2" placeholder="..." required><button class="btn btn-success btn-sm" type="submit">ADD</button>
                        <input type="hidden" value=" {{$product->id}} "  name="id">
                    </td>
                </form>
                <form action=" {{route('remove_stock')}} " method="POST"> 
                    @csrf   
                    <td>
                        <input type="text" name="removed_quantity" class="col-md-3 mr-2" placeholder="..." required><button class="btn btn-danger btn-sm" type="submit">Remove</button>
                        <input type="hidden" value=" {{$product->id}} "  name="id">
                    </td>
                </form>
                </tr>
                @endforeach


            </tbody>
    

        </table>
        <div class="toolbox toolbox-pagination float-right">
            {{ $products->links('vendor.pagination.bootstrap-4') }}
        </div>
        </div>
</div>
@endsection