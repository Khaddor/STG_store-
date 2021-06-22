@extends('layouts.admin_panel')


@section('content')
        <div class="col-lg-11 order-lg-last dashboard-content ml-5">
            <h2>Categories</h2>
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
            <div class="float-right"><a href=" {{route('admin_add_category')}} " class="btn btn-primary mb-2"> New Category</a></div>


         
                <table class="table table-striped ">
                    <thead>
                    <tr>
                        <th scope="col">Category ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Products in Category </th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
        @if (!empty($categories) && $categories->count())

                @foreach ($categories as $key => $category)
                <form action=" {{route('admin_delete_category')}} " method="POST">
                    @csrf
                    <input type="hidden" name="category_id" value=" {{$category->id}} ">
                    <tr>
                        <th scope="row"> {{$category->id}} </th>
                        <td> {{$category->name}} </td>
                        <td> {{$category->products->count()}} </td>

                        <td ><a href=" {{route('admin_edit_category',$category->id)}} " type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit fa-md"></i> </a>
                            <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash fa-lg"></i></button></td>
                    </tr>
                </form>
            @endforeach	
                </table>
   <div class="toolbox toolbox-pagination float-right">
            {{ $categories->links('vendor.pagination.bootstrap-4') }}
        </div>
        </div>


        @else
                            <tr>
                                <td colspan="10">There are no data.</td>
                            </tr>
        @endif
         
                </table>
            </div>

@endsection