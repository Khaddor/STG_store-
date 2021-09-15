@extends('layouts.layout')


@section('content')
    
<div class="row">
    <div class="col-lg-9 main-content">
        <nav class="toolbox">
            <div class="toolbox-left">
                <div class="toolbox-item toolbox-sort">
                   

                    
                </div><!-- End .toolbox-item -->
            </div><!-- End .toolbox-left -->

            <div class="toolbox-right" style="margin-right: 50px;">
                

                <div class="toolbox-item layout-modes">
                    <a href="#" class="layout-btn btn-grid active" title="Grid">
                        <i class="icon-mode-grid"></i>
                    </a>
                  
                </div><!-- End .layout-modes -->
            </div><!-- End .toolbox-right -->
        </nav>


<!-- ------------------------------PRODUCTS--------------------------->
        <div class="row">
@foreach ($products as $product)

        
            <div class="col-5 col-sm-4" style="margin-right: 30px;">
                <div class="product-default inner-quickview inner-icon product_data">
                    <figure>
                        <a href="/product/{{$product->id}} ">
                            <img src="{{asset('productsImages/'.$product->image)}}">
                        </a>
                                        <input type="hidden" class="quantity" value="1">
                                        <input type="hidden" class="product_id" value=" {{$product->id}} ">
                                        <div class="btn-icon-group">
                                            <button class="btn-icon btn-add-cart addToCartBtn"   ><i class="icon-shopping-cart"></i></button>
                                        </div>
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
        <div class="sidebar-wrapper" style=" margin-left: 50px;" style="width: 250px;">
            <div class="widget">
                <h3 class="widget-title">
                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
                </h3>


<!-----------------------CATEGORIES-------------------------------------------->

                
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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.1784760777305!2d-5.8110756848067515!3d35.770991980173434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b80a95fb05e3d%3A0xcf5b316a11b49add!2sSTG%20Maroc!5e0!3m2!1sfr!2sma!4v1623459724830!5m2!1sfr!2sma" style="width: 250px; height:350px; border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div><!-- End .sidebar-wrapper -->
    </aside><!-- End .col-lg-3 -->
</div><!-- End .row -->
</div><!-- End .container -->



@endsection