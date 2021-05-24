@extends('layouts.admin_panel')


@section('content')
        <div class="col-lg-11 order-lg-last dashboard-content ml-5">
            <h2>Categories</h2>
            <div class="float-right"><a href=" {{route('admin_add_category')}} " class="btn btn-primary mb-2"> New Category</a></div>

                <table class="table table-striped ">
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

@endsection