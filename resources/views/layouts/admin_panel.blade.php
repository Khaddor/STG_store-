<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/x-icon" href="{{asset('assets/images/icons/faviicon.ico')}}">

 <!-- CoreUI CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" integrity="sha512-n+g8P11K/4RFlXnx2/RW1EZK25iYgolW6Qn7I0F96KxJibwATH3OoVCQPh/hzlc4dWAwplglKX8IVNVMWUUdsw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <link rel="stylesheet" href="{{asset('assets/css/coreui.min.css')}}">
 <!--<link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">-->
 

 <link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendor/fontawesome-free/css/all.min.css') }} ">

 <title>STG</title>
 </head>
 <body class="c-app">


    <!---------SIDE BAR ------->
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
        <div class="c-sidebar-brand d-lg-down-none text-center">
<!--             <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
 -->               <img class="text-center" style=" height: 50px; margin-top: 5px;" src="http://127.0.0.1:8000/assets/images/icons/favicon.ico"> 

            </svg>
            <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#signet"></use>
             </svg>
        </div>
        <ul class="c-sidebar-nav">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href=" {{route('admin_dashboard')}} ">
                <svg class="c-sidebar-nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg> Dashboard</a>
            </li>
    
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('admin_stock')}}">
                <svg class="c-sidebar-nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
                </svg> Gestion de stock</a>
            </li>
     
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('admin_products')}}">
                <svg class="c-sidebar-nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
                </svg> Products</a>
            </li>

            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('admin_categories')}}">
                <svg class="c-sidebar-nav-icon">
               <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list"></use>
               </svg> Categories </a>
           </li>
            </li>

            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('admin_orders')}}">
                <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list"></use>
            </svg> Orders</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href=" {{route('admin_clients')}} ">
            <svg class="c-sidebar-nav-icon">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
        </svg> Clients</a>
    </li>
  <!--   <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#">
        <svg class="c-sidebar-nav-icon">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
    </svg> Statistiques</a>
</li> -->
        
        </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
        </div>

        <!----------HEADER----------->  
        <div class="c-wrapper c-fixed-components">
         <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
                <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
                    <svg class="c-icon c-icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="c-header-brand d-lg-none" href="#">
             <svg width="118" height="46" alt="CoreUI Logo">
                  <use xlink:href="assets/brand/coreui.svg#full"></use>
             </svg></a>
                 <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
                    <svg class="c-icon c-icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                 </button>
                <ul class="c-header-nav d-md-down-none">
                    <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="  {{route('admin_dashboard')}} ">Dashboard</a></li>
                 </ul>
            <ul class="c-header-nav ml-auto mr-4">
              

                <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar"><img class="c-avatar-img" src="{{asset('assets/images/icons/faviicon.ico')}}" ></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                <a class="dropdown-item" href=" {{route('home')}} ">
                    <svg class="c-icon mr-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                    </svg> Back to Store</a>
                    <a class="dropdown-item" href=" {{route('logout')}} ">
                        <svg class="c-icon mr-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                        </svg> Logout</a>
                </div>
                </li>
            </ul>
        
        </header>



        <div class="c-body">
            <main class="c-main">
 @yield('content')
            </main>
        </div>

 <!-- Optional JavaScript -->
 <!-- Popper.js first, then CoreUI JS -->
 <script src="https://unpkg.com/@popperjs/core@2"></script>
<script src=" {{asset('assets/js/coreui.min.js')}} "></script>
 </body>
</html>


<!-- Plugins JS File -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/optional/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('assets/js/main.min.js')}}"></script>
