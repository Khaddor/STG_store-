@extends('layouts.layout')


@section('content')
    
<div class="row">
    <div class="col-lg-9 main-content">
        <nav class="toolbox">
            <div class="toolbox-left">
                <div class="toolbox-item toolbox-sort">
                    <label>Sort By:</label>

                    <div class="select-custom">
                        <select name="orderby" class="form-control">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </div><!-- End .select-custom -->

                    
                </div><!-- End .toolbox-item -->
            </div><!-- End .toolbox-left -->

            <div class="toolbox-right">
                <div class="toolbox-item toolbox-show">
                    <label>Show:</label>

                    <div class="select-custom">
                        <select name="count" class="form-control">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                        </select>
                    </div><!-- End .select-custom -->
                </div><!-- End .toolbox-item -->

                <div class="toolbox-item layout-modes">
                    <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                        <i class="icon-mode-grid"></i>
                    </a>
                    <a href="category-list.html" class="layout-btn btn-list" title="List">
                        <i class="icon-mode-list"></i>
                    </a>
                </div><!-- End .layout-modes -->
            </div><!-- End .toolbox-right -->
        </nav>


<!-- ------------------------------PRODUCTS--------------------------->
        <div class="row">
@foreach ($products as $product)

        
            <div class="col-5 col-sm-4">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="/product/{{$product->id}} ">
                            <img src="{{asset('assets/images/products/product-12.jpg')}}">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category/{{$product->category->id}}" class="product-category">{{$product->category->name}}</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="/product/{{$product->id}} ">  {{$product->name}} </a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$90.00</span>
                            <span class="product-price">$ {{$product->price}} </span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
            </div><!-- End .col-sm-4 -->

@endforeach
        </div><!-- End .row -->
        
<!--------------------------------TOOLBOX------------------->
        <nav class="toolbox toolbox-pagination">
            <div class="toolbox-item toolbox-show">
                <label>Show:</label>

                <div class="select-custom">
                    <select name="count" class="form-control">
                        <option value="12">12</option>
                        <option value="24">24</option>
                        <option value="36">36</option>
                    </select>
                </div><!-- End .select-custom -->
            </div><!-- End .toolbox-item -->

            <ul class="pagination toolbox-item">
                <li class="page-item disabled">
                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><span class="page-link">...</span></li>
                <li class="page-item">
                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                </li>
            </ul>
        </nav>
    </div><!-- End .col-lg-9 -->

    <div class="sidebar-overlay"></div>
    <div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
        <div class="sidebar-wrapper">
            <div class="widget">
                <h3 class="widget-title">
                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
                </h3>


<!-----------------------CATEGORIES-------------------------------------------->

                <div class="collapse show" id="widget-body-2">
                    <div class="widget-body">
                        <ul class="cat-list">

                         @foreach ($categories as $category)

                            <li><a href="/category/{{$category->id}}">{{$category->name}}</a></li>
                             
                         @endforeach   
                            
                        </ul>
                    </div><!-- End .widget-body -->
                </div><!-- End .collapse -->
            </div><!-- End .widget -->

            <div class="widget">
                <h3 class="widget-title">
                    <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
                </h3>

                <div class="collapse show" id="widget-body-3">
                    <div class="widget-body">
                        <form action="#">
                            <div class="price-slider-wrapper">
                                <div id="price-slider"></div><!-- End #price-slider -->
                            </div><!-- End .price-slider-wrapper -->

                            <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                <button type="submit" class="btn btn-primary">Filter</button>

                                <div class="filter-price-text">
                                    Price:
                                    <span id="filter-price-range"></span>
                                </div><!-- End .filter-price-text -->
                            </div><!-- End .filter-price-action -->
                        </form>
                    </div><!-- End .widget-body -->
                </div><!-- End .collapse -->
            </div><!-- End .widget -->

            <div class="widget">
                <h3 class="widget-title">
                    <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Size</a>
                </h3>

                <div class="collapse show" id="widget-body-4">
                    <div class="widget-body">
                        <ul class="cat-list">
                            <li><a href="#">Small</a></li>
                            <li><a href="#">Medium</a></li>
                            <li><a href="#">Large</a></li>
                            <li><a href="#">Extra Large</a></li>
                        </ul>
                    </div><!-- End .widget-body -->
                </div><!-- End .collapse -->
            </div><!-- End .widget -->



            <div class="widget widget-featured">
                <h3 class="widget-title">Featured</h3>
                
                <div class="widget-body">
                    <div class="owl-carousel widget-featured-products">
                        <div class="featured-col">
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('assets/images/products/product-10.jpg')}}">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('assets/images/products/product-11.jpg')}}">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('assets/images/products/product-12.jpg')}}">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div><!-- End .featured-col -->

                        <div class="featured-col">
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('assets/images/products/product-13.jpg')}}">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('assets/images/products/product-14.jpg')}}">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('assets/images/products/product-8.jpg')}}">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div><!-- End .featured-col -->
                    </div><!-- End .widget-featured-slider -->
                </div><!-- End .widget-body -->
            </div><!-- End .widget -->
            
            <div class="widget widget-block">
                <h3 class="widget-title">Custom HTML Block</h3>
                <h5>This is a custom sub-title.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi. </p>
            </div><!-- End .widget -->
        </div><!-- End .sidebar-wrapper -->
    </aside><!-- End .col-lg-3 -->
</div><!-- End .row -->
</div><!-- End .container -->



@endsection