@extends('layouts.admin_panel')

@section('content')

    @php
        use App\Models\category;
        $categories = category::get();
    @endphp

    	<!-------ADDING PRODUCTS-------->
    <div class="m-3 ml-4 mb-5" >
        <form action="{{route('admin_edit_product_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-11">
                        <div class="col-md-6">
                            <div class="form-group required-field">
                                <label for="acc-name">Product Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="acc-name" name="name" required="" placeholder="Nom de produit" value=" {{$product->name}} ">
                            </div><!-- End .form-group -->
                                            @error('name')
                                                <div style="color:red;">{{$message}}</div>
                                            @enderror
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-6">
                            <div class="form-group required-field">
                                <label for="acc-name">Product Description <span class="text-danger">*</span></label>
                                <textarea type="text" class="form-control" rows="6"  id="acc-name" name="description" required="" placeholder="Tapez la description du produit" > {{$product->description}} </textarea>
                            </div><!-- End .form-group -->
                                            @error('description')
                                                <div style="color:red;">{{$message}}</div>
                                            @enderror
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="acc-mname">Product Price <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="acc-mname"  value=" {{$product->price}} " name="price" placeholder="Prix du produit">
                            </div><!-- End .form-group -->
                                            @error('price')
                                                <div style="color:red;">{{$message}}</div>
                                            @enderror
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-6">
                            <div class="form-group required-field">
                                <label for="acc-lastname">Reduced Price <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="acc-lastname" name="reduced_price" value=" {{$product->reduction}} " required="" placeholder="Prix promotionnel">
                            </div><!-- End .form-group -->
                                            @error('reduced_price')
                                                <div style="color:red;">{{$message}}</div>
                                            @enderror									
                        </div><!-- End .col-md-4 -->
                        <div class="col-md-6">
                            <div class="form-group required-field">
                                <label for="categories">Category <span class="text-danger">*</span></label>
                                 <select  name="category" >
                                    @foreach ($categories as $category)
                                        <option value=" {{$category->id}} ">{{$category->name}}</option>
                                    @endforeach
                    
                                 </select>
                                  <!--  <label for="acc-lastname">Category </label>
                                <input type="text" class="form-control" id="acc-lastname" name="category" required="">-->
                            </div><!-- End .form-group -->
                        </div><!-- End .col-md-4 -->
                                            @error('category')
                                                <div style="color:red;">{{$message}}</div>
                                            @enderror
                        <div class="col-md-6">
                            <div class="form-group required-field">
                                <label for="acc-lastname">Upload image <span class="text-danger">*</span> </label>
                                <input type="file" class="form-control" id="acc-lastname" value="{{$product->image}} " name="image" required="">
                            </div><!-- End .form-group -->
                                            @error('image')
                                                <div style="color:red;">{{$message}}</div>
                                            @enderror
                        </div><!-- End .col-md-4 -->
                        
                    
                </div><!-- End .col-sm-11 -->
            </div><!-- End .row -->



            
    
            <div class="required mb-2 text-danger float-left">* Required Field</div>
            <br><br>
            <div class="text-center mb-5">

                      <a href=" {{route('admin_products')}} " class="btn btn-secondary mr-3" >Cancel</a>
                    <button type="submit" class="btn btn-primary  ">Update Product</button>
            </div><!-- End .form-footer -->
            <input type="hidden" name="id" value=" {{$product->id}} ">
        </form>

    </div>
@endsection