@extends('layouts.admin_panel')


@section('content')
    
<div class="container">

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
            <h2>Products</h2>
            <div class="float-right"><a href=" {{route('admin_add_product')}} " class="btn btn-primary mb-2">New Product</a></div>
          
            <table class="table table-striped">
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
                        <td> {{$product->price}} <span class="badge badge-info">DH</span></td>
                        <td> {{$product->image}} </td>
                        <td>{{$product->category?$product->category_id:"not found"}}   ({{$product->category?$product->category->name:"---"}}) </td>
                    <form action=" {{route('admin_delete_product')}} " method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$product->id }}">
                        <td ><a href=" {{route('admin_edit_product',$product->id)}} " type="button" class="btn btn-info btn-sm"> <i class="fa fa-edit fa-md"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm "><i class="fa fa-trash fa-lg"></i></button></td>
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