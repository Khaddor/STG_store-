@extends('layouts.admin_panel')


@section('content')
    

<div class="container">
            <!-------ADDING CATEGORIES------>
            <h2>Add Category</h2>

            <form action="{{route('admin_add_category')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-11">
                            <div class="col-md-5">
                                <div class="form-group required-field">
                                    <label for="acc-name">Category Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" required="">
                                            @error('name')
                                                <div style="color:red;">{{$message}}</div>
                                            @enderror
                                </div><!-- End .form-group -->
                            </div><!-- End .col-md-4 -->

                            
                        
                    </div><!-- End .col-sm-11 -->
                </div><!-- End .row -->					
                <div class="required mb-2 text-danger float-left">* Required Field</div>
            
                <div class="text-center">
    
                          <a href=" {{route('admin_categories')}} " class="btn btn-secondary mr-3" >Cancel</a>
                        <button type="submit" class="btn btn-primary  ">Add Category</button>
                </div><!-- End .form-footer -->
            </form>
</div>
@endsection