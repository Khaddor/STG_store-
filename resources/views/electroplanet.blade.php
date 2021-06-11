
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<title>STG Telecom | Smartphones | Accessoires | Robotics</title>

	<title>STG Telecom </title>


	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Bootstrap eCommerce Template">
	<meta name="author" content="SW-THEMES">
		
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="http://127.0.0.1:8000/assets/images/icons/favicon.ico">
	
	
	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700' ] }
		};
		(function(d) {
			var wf = d.createElement('script'), s = d.scripts[0];
			wf.src = 'assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>
	
	<!-- Plugins CSS File -->
	<link rel="stylesheet" href=" http://127.0.0.1:8000/assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href=" http://127.0.0.1:8000/assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href=" http://127.0.0.1:8000/assets/vendor/fontawesome-free/css/all.min.css ">
</head>
    <body>

		        <!-- top bar-->
		<div class="top-notice bg-info" >
			<div class="owl-carousel info-boxes-slider" data-owl-options="{
				'items': 1,
				'dots': false,
				'loop': false,
				'responsive': {
					'768': {
						'items': 2
					},
					'992': {
						'items': 3
					}
				}
			}">
				<div class="info-box info-box-icon-left">
					<i class="icon-shipping"></i>

					<div class="info-box-content">
						<h4>LIVRAISON ET RETOUR GRATUITS</h4>
					</div><!-- End .info-box-content -->
				</div><!-- End .info-box -->

				<div class="info-box info-box-icon-left bg-info">
					<i class="icon-money"></i>

					<div class="info-box-content">
						<h4>100% garantie de remboursement</h4>
					</div><!-- End .info-box-content -->
				</div><!-- End .info-box -->

				<div class="info-box info-box-icon-left">
					<i class="icon-secure-payment"></i>

					<div class="info-box-content">
						<h4>SUPPORT EN LIGNE 24/7</h4>
					</div><!-- End .info-box-content -->
				</div><!-- End .info-box -->
			</div><!-- End .owl-carousel -->
		</div>

		
			<!--HEADER ---->
        <header class="header " >
			<div class="header-top">
				<div class="container">
					<div class="header-left d-none d-sm-block " >
						<h6 class="telephone mb-0">APPELEZ-NOUS (123) 456 7890</h6>

					</div><!-- End .header-left -->

					<div class="header-right w-sm-100">
						<div class="header-dropdown dropdown-expanded mr-auto mr-sm-3">
							<a href="#">Links</a> 
							<div class="header-menu">
								<ul>
									
									@guest
                                    <li><a href=" {{route('login')}} ">Se connecter </a></li>
                                    @endguest

                                    @auth
                                    @if (Auth::user()->is_admin==1)
                                    <li><a href="{{route('admin_dashboard')}}">Admin Dashboard </a></li>
                                    @endif
                                    
                                    <li><a href="{{route('profile')}}">{{auth()->user()->firstname}} </a></li>
                                    <li><a href=" {{route('logout')}} ">Se déconnecter</a></li>
                                    @endauth
                                    <!--test-->
                                    <li><a href="about">À propos</a></li>

									

								<!--	<li style=" margin-left: 15px;" style="color:black;"><a href="category">Our Stores</a></li>
									<li style=" margin-left: 15px;" style="color:black;"><a href="blog.html">Blog</a></li>
									<li style=" margin-left: 15px;" style="color:black;"><a href="contact.html">Contact</a></li>
									<li style=" margin-left: 15px;" style="color:black;"><a href="#">Help &amp; FAQs</a></li>-->
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

						<div class="social-icons">
							<a href="https://www.instagram.com/stgtelecom/" class="social-icon social-instagram icon-instagram" target="_blank"></a>
							<a href="https://twitter.com/stgtelecom" class="social-icon social-twitter icon-twitter" target="_blank"></a>
							<a href="https://www.facebook.com/STGTelecomOfficiel/" class="social-icon social-facebook icon-facebook" target="_blank"></a>
						</div><!-- End .social-icons -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-top -->

			<div class="header-mobile-merge">
				<div class="header-middle header-align-center">
					<div class="container">
						<div class="header-left d-none d-lg-block">
							<div class="header-dropdowns font2">
							

								<div class="header-dropdown switcher">
									<a href="#">ENG</a>
									<div class="header-menu">
										<ul>
											<li style=" margin-left: 15px;" style="color:black;"><a href="#">ENG</a></li>
											<li style=" margin-left: 15px;" style="color:black;"><a href="#">FRE</a></li>
										</ul>
									</div><!-- End .header-menu -->
								</div><!-- End .header-dropown -->
							</div><!-- End .header-dropdowns -->						
						</div><!-- End .header-left -->

						<div class="header-center">
							<button class="mobile-menu-toggler d-lg-none mr-1 mr-md-3" type="button">
								<i class="icon-menu"></i>
							</button>


							<a href="/" class="llogo">
								<img src="http://127.0.0.1:8000/assets/images/logo.png" height="100" width="100" alt="stg Logo">

							<!-- <a href="/" class="logo">
								<img src="http://127.0.0.1:8000/assets/images/logo.png" alt="Porto Logo">

							</a> -->
						</div><!-- End .headeer-center -->

						<div class="header-right">
							<div class="header-search header-search-inline header-icon">
								<a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
								<form action="http://127.0.0.1:8000/search" method="GET" role="search">
									
									<div class="header-search-wrapper">
										<input type="search" class="form-control" name="query"  placeholder="Chercher..."  required>
										<button class="btn icon-search-3" type="submit"></button>
									</div><!-- End .header-search-wrapper -->
								</form>
							</div><!-- End .header-search -->
						</div><!-- End .header-right -->
					</div><!-- End .container -->
				</div><!-- End .header-middle -->

				
				</div><!-- End .header-bottom -->
			</div>
		</header><!-- End .header -->


		<!-----------------CONTENT ------------------->
       
	<!-- Plugins CSS File -->
	<link rel="stylesheet" href=" http://127.0.0.1:8000/assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
     <!-- Styles -->
<!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://stgtelecom.com/asstes/css/animate.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

    
        <style>
        
        .logo-orange {
            max-width: 170px;
            margin-left: 20px;
        }

        .rtl .card-body {
            text-align: center;
        }
        .stg-vente {
            padding: 2rem 15px;
        }

        .rtl .stg-vente {
            text-align: right;
        }
        .rtl .logo-orange {
            margin-right: 20px;
        }

        .rtl .section-md.accordion .col-6 {
            text-align: right;
        }
        .rtl .section-md.accordion .col-6.text-right {
            text-align: left !important;
        }

        .stg-vente h1 {
            font-size: 2rem;
            text-transform: uppercase;
        }
        .stg-vente h3 {
            font-size: 1.5rem;
        }

        .bg-gris {
            background-color: red;
        }
        .card {
            border-radius: 0;
        }
        .card-header {
            border: none;
            padding-left: 0;
            padding-right: 0;
        }

        .card .row {
            cursor: pointer;
            margin-left: 0;
            margin-right: 0;
        }
        .section-md table {
            margin: 0;
        }

        .card .row {
            color: #0b3e61;
        }

        @media(min-width: 576px) {
            .mys-auto {
                margin-top: auto;
                margin-bottom: auto !important;
            }
        }

        @media(min-width: 992px) {
            .section-md{
                display: none;
                opacity: 0;
                height: 0px;
            }

            .rtl .section-lg table .text-left {
                text-align: right !important;
            }
            .rtl .section-lg table ul {
                list-style: disc;
                padding-right: 0.9rem; 
                padding-left: 0;
            }
            .stg-vente {
                padding: 6rem 2rem;
            }
            .section-lg {
                display: block !important;
                padding-left: 2rem;
                padding-right: 2rem;
            }

            .section-lg table {
                text-align: center;
            }
            .table .thead-dark th {
                background-color: black;
                border-right: 10px solid #fbf5f0;
            }
            .rtl .table .thead-dark th {
                border-left: 10px solid #fbf5f0;
                border-right: none;
                border-bottom: none;
            }
            .table .thead-dark th:last-child {
                border-right: none !important;
            }

            .table td {
                border-right: 10px solid #d7dfe3;
                border-top: none;
            }
            .table td:last-child {
                border-right: none !important;
            }

            .table td:first-child {
                vertical-align: inherit;
                font-weight: 600;
            }

            .stg-vente h1 {
                font-size: 60px;
            }

            .stg-vente h3 {
                font-size: 40px;
            }

            .logo-orange {
                max-width: 150px;
            }

            .section-lg table ul {
                list-style: disc;
                padding-left: 0.9rem;
            }
        }

        @media(min-width: 1200px) {

            .stg-vente h1{
                font-size: 70px;
            }
            .stg-vente h3 {
                font-size: 50px;
            }
            .stg-vente {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .section-lg {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }

        @media(min-width: 1400px) {
            .stg-vente {
                padding-left: 5rem;
                padding-right: 5rem;
                padding-top: 10rem;
            }
            .section-lg {
                padding-left: 5rem;
                padding-right: 5rem;
            }
        }

        @media(min-width: 1600px) {
            .stg-vente h1{
                font-size: 90px;
            }
            .stg-vente h3 {
                font-size: 68px;
                display: -webkit-box;
                display: -moz-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                align-items: flex-end;
            }

            .logo-orange {
                max-width: 100%;
            }

        }
        .table .thead-dark th{
            color:white;
        }
        
        .wrraper-logo-pv{
            position:relative;

        }
        .wrraper-logo-pv .desktop-version{
            position: absolute;
            top: 25px;
            right: 70px;
        }
        @media(min-width: 1860px) {
            .mobile-version{
                display:none;
            }
            .desktop-version{
                display:block;
            }
            }
        @media(max-width: 1860px) {
            .desktop-version{
                display:none;
            }
            .mobile-version{
                display:inline-block;
            }
        }
        .electro-header{
            text-align: center;
        }
        .electro-header h3{
            text-align: center;
            display: inherit;
        }


    </style>

    <link href="https://stgtelecom.com/asstes/css/style.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127154819-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-127154819-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 683848135 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-683848135"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-683848135');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 613385602 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-613385602"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-613385602');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '879858759031283');
        fbq('track', 'PageView');
       </script>
       <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=879858759031283&ev=PageView&noscript=1"
       />
    </noscript>
       <!-- End Facebook Pixel Code -->

</head>


            <section class="stg-vente">
        <div class="container-vente">
            <div class="row">
                <div class="col-12 col-sm-7 mb-4 my-2-auto wrraper-logo-pv electro-header">
                    <h1 class="font-weight-bold">Points de vente</h1>
                    <h3>
                        Disponible chez :
                    </h3>
                    <img style="margin-left: 330px;"  src="https://stgtelecom.com/asstes/images/vente/electro.png" alt="Points de vente" class="img-fluid logo-orange">
                </div>
                <div class="col-12 col-sm-5">
                    <img src="https://stgtelecom.com/asstes/images/vente/map-electro.png" alt="Points de vente" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="section-md accordion" id="accordionExample">
        <div class="card" style="font-size: 15px!important;">
            <div class="card-header" id="headingOne">
                <div class="row" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="col-6">
                    Agadir                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr style="font-size: 15px;">
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 15px;">
                                    <td></td>
                                    <td style="font-size: 50px ;">Parc d’activité Marjane Founty Agadir ROUTE D’INZEGANE</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                <div class="row" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <div class="col-6">
                    Casablanca                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr style="font-size: 15px;">
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 15px;">
                                    <td>Techno Park</td>
                                    <td>Parc d’activité Marjane Californie TECHNOPARK</td>
                                </tr>
                                <tr style="font-size: 15px;">
                                    <td>Derbsoultan</td>
                                    <td>Galerie Commerciale Marjane Derb Sultan BOULEVARD MOHAMMED</td>
                                </tr>
                                <tr style="font-size: 15px;">
                                    <td>Marina</td>
                                    <td>ventelectroplanet.adressev4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
                <div class="row" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <div class="col-6">
                    El Jadida                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr style="font-size: 15px;">
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 15px;">
                                    <td></td>
                                    <td>Parc d’activité Marjane BOULVARD BRAHIM ALKHALIL</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingFour">
                <div class="row" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <div class="col-6">
                    Fes                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr style="font-size: 15px;">
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 15px;">
                                    <td>Fes Agdal</td>
                                    <td>Fes Agdal</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header" id="headingSix">
                <div class="row" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    <div class="col-6">
                    Kénitra                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr style="font-size: 15px;">
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 15px;">
                                    <td>ventelectroplanet.magasin11</td>
                                    <td>Parc Marjane, Route de Sidi Allal Bahraoui KENITRA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header" id="headingSeven">
                <div class="row" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                    <div class="col-6">
                    Marrakech                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr style="font-size: 15px;">
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 15px;">
                                    <td></td>
                                    <td>Parc d’activité Marjane Square ROUTE DE CASABLANCA</td>
                                </tr>
                                <tr style="font-size: 15px;">
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingEight">
                <div class="row" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                    <div class="col-6">
                    Meknes                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr style="font-size: 15px;">
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 15px;">
                                    <td></td>
                                    <td>Centre commercial Marjane, route Agourai - Ait Ouallal</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingNine">
                <div class="row" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                    <div class="col-6">
                    Mohammedia                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr style="font-size: 15px;">
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 15px;">
                                    <td></td>
                                    <td>Parc d’activité Marjane ROUTE SECONDAIRE 101</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingEleven">
                <div class="row" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                    <div class="col-6">
                    Rabat                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr style="font-size: 15px;">
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 15px;">
                                    <td></td>
                                    <td>Galerie Commerciale Marjane - HAY RIAD Autoroute Rabat-Tanger</td>
                                </tr>
                                <tr style="font-size: 15px;">
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThirteen">
                <div class="row" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                    <div class="col-6">
                    Salé                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr style="font-size: 15px;">
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 15px;">
                                    <td></td>
                                    <td>Parc d’activités Marjane, Route Mohammed V – SALE Tabrekte</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFourteen">
                <div class="row" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                    <div class="col-6">
                    Tanger                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr style="font-size: 15px;">
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 15px;">
                                    <td>Tanger Medina</td>
                                    <td>Parc d’activité Marjane Médina ROUTE DE RABAT- Km 6,2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingfiftheen">
                <div class="row" data-toggle="collapse" data-target="#collapsefiftheen" aria-expanded="true" aria-controls="collapsefiftheen">
                    <div class="col-6">
                    Tétouan                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapsefiftheen" class="collapse" aria-labelledby="headingfiftheen" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr style="font-size: 15px;">
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 15px;">
                                    <td></td>
                                    <td>Parc d’activité Marjane ROUTE DE MDIQ</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-lg d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr style="font-size: 15px;">
                                <th scope="col" style="width: 25%;text-transform: uppercase;">Ville</th>
                                <th scope="col" style="width: 30%;text-transform: uppercase;">Quartier</th>
                                <th scope="col" style="width: 35%;text-transform: uppercase;">Adresse</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="font-size: 15px;">
                                <td>Agadir</td>
                                <td class="text-left">
                                    <ul>
                                        
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Parc d’activité Marjane Founty Agadir ROUTE D’INZEGANE</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr style="font-size: 15px;">
                                <td>Casablanca</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Techno Park</li>
                                        <li style=" margin-left: 15px;" style="color:black;">Derbsoultan</li>
                                        <li style=" margin-left: 15px;" style="color:black;">Marina</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Parc d’activité Marjane Californie TECHNOPARK</li>
                                        <li style=" margin-left: 15px;" style="color:black;">Galerie Commerciale Marjane Derb Sultan BOULEVARD MOHAMMED</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr style="font-size: 15px;">
                                <td>El Jadida</td>
                                <td class="text-left">
                                    <ul>
                                        
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Parc d’activité Marjane BOULVARD BRAHIM ALKHALIL</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr style="font-size: 15px;">
                                <td>Fes</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Fes Agdal</li>
                                        <li style=" margin-left: 15px;" style="color:black;">Fes Sais</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Centre commercial Marjane Agdal ROUTE DE FES-MEKNES</li>
                                    </ul>
                                </td>
                            </tr>

                            

                            <tr style="font-size: 15px;">
                                <td>Kénitra</td>
                                <td class="text-left">
                                    <ul>
                                        
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Parc Marjane, Route de Sidi Allal Bahraoui KENITRA</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr style="font-size: 15px;">
                                <td>Marrakech</td>
                                <td class="text-left">
                                    <ul>
                                        
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Parc d’activité Marjane Square ROUTE DE CASABLANCA</li>
                                        
                                    </ul>
                                </td>
                            </tr>

                            <tr style="font-size: 15px;">
                                <td>Meknes</td>
                                <td class="text-left">
                                    <ul>
                                        
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Centre commercial Marjane, route Agourai - Ait Ouallal</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr style="font-size: 15px;">
                                <td>Mohammedia</td>
                                <td class="text-left">
                                    <ul>
                                        
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Parc d’activité Marjane ROUTE SECONDAIRE 101</li>
                                    </ul>
                                </td>
                            </tr>


                            
                            <tr style="font-size: 15px;">
                                <td>Rabat</td>
                                <td class="text-left">
                                    <ul>
                                        
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Galerie Commerciale Marjane - HAY RIAD Autoroute Rabat-Tanger</li>
                                        
                                    </ul>
                                </td>
                            </tr>
                            
                            <tr style="font-size: 15px;">
                                <td>Salé</td>
                                <td class="text-left">
                                    <ul>
                                        
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Parc d’activités Marjane, Route Mohammed V – SALE Tabrekte</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr style="font-size: 15px;">
                                <td>Tanger</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Tanger Medina</li>
                                        <li style=" margin-left: 15px;" style="color:black;">Tanger City Center</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Parc d’activité Marjane Médina ROUTE DE RABAT- Km 6,2</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr style="font-size: 15px;">
                                <td>Tétouan</td>
                                <td class="text-left">
                                    <ul>
                                        
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 15px;" style="color:black;">Parc d’activité Marjane ROUTE DE MDIQ</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Info aide -->
        
    <!-- Info aide -->




@yield('content')


  
        <footer style="margin-left: 80px;" class="footer font2">
            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-4 m-b-4">
                            <img src="http://127.0.0.1:8000/assets/images/logo.png" height="110" width="110" alt="Logo" class="m-b-4">

                            


                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pulvinar feugiat quam, vitae aliquam urna egestas nec. sit amet</p>

                            <div class="row ls-0">
                                <div class="col-sm-6">
                                    <h6 class="text-uppercase mb-0">Questions?</h6>
                                    <h3>(123) 456-7890</h3>
                                </div>
                                <div class="col-sm-6">
                                    
                                </div>
                            </div>
                        </div><!-- End .col-lg-5 -->

                        <div class="col-lg-2 col-sm-4 m-b-4">
                            <div class="widget">
                                <h4 class="widget-title">Account</h4>

                                <ul class="links">
                                    <li><a href="http://127.0.0.1:8000/profile">Mon profil</a></li>
                                    <li><a href="#">Track Your Order</a></li>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Shipping Guide</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Product Support</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-2 -->

                        <div class="col-lg-2 col-sm-4 m-b-4">
                            <div class="widget">
                                <h4 class="widget-title">Points de vente</h4>

                                <ul class="links">
                                    <li><a href="/marjane">Marjane</a></li>
                                    <li><a href="/orange">Orange</a></li>
                                    <li><a href="/electroplanet">Electroplanet</a></li>
                                    <li><a href="https://www.jumia.ma/stg/">Jumia</a></li>
                                    <li><a href="https://inwi.ma/">Inwi</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-2 -->
    
                        <div class="col-lg-3 col-sm-4 m-b-4">
                            <div class="widget">
                                <h4 class="widget-title">Features</h4>

                                <ul class="links">
                                    <li><a href="#">Powerful Admin Panel</a></li>
                                    <li><a href="#">Mobile &amp; Retina Optimized</a></li>
                                    <li><a href="#">Super Fast Magento Theme</a></li>
                                    <li><a href="#">1st Fully working Ajax Theme</a></li>
                                    <li><a href="#">10 Unique Homepage Layouts</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .footer-middle -->

                <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">

                    <p class="footer-copyright py-3 pr-4 mb-0">&copy; Copyright 2021 - STGTelecom -</p>

                    


                    <div class="social-icons py-3">
                        <a href="https://www.facebook.com/STGTelecomOfficiel/" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                        <a href="https://twitter.com/stgtelecom" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                        <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                    </div><!-- End .social-icons -->
                </div><!-- End .footer-bottom -->
            </div><!-- End .container -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    
    </body>
</html>



<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu mb-3 border-0">
                
                <!-- <li>
                    <a href="#">ENG</a>
                    <ul>
                        <li><a href="#">ENG</a></li>
                        <li><a href="#">FRE</a></li>
                    </ul>
                </li> -->
            </ul>
            <ul class="mobile-menu">
                <li class="active"><a href="index.html">Home</a></li>
                <li>
                    <a href="category.html">Catégories</a>
                    <ul>
                        <li><a href="category-banner-full-width.html">Full Width Banner</a></li>
                        <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                        <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                        <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                        <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                        <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                        <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                        <li><a href="#">List Types</a></li>
                        <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                        <li><a href="category.html">3 Columns Products</a></li>
                        <li><a href="category-4col.html">4 Columns Products</a></li>
                        <li><a href="category-5col.html">5 Columns Products</a></li>
                        <li><a href="category-6col.html">6 Columns Products</a></li>
                        <li><a href="category-7col.html">7 Columns Products</a></li>
                        <li><a href="category-8col.html">8 Columns Products</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product.html">Horizontal Thumbs</a></li>
                                <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product.html">Inner Zoom</a></li>
                                <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layout Types</a>
                            <ul>
                                <li><a href="product.html">Default Layout</a></li>
                                <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                <li><a href="product-full-width.html">Full Width Layout</a></li>
                                <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                    <ul>
                        <li><a href="cart">Shopping Cart</a></li>
                        <li>
                            <a href="#">Checkout</a>
                            <ul>
                                <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                <li><a href="checkout-review.html">Checkout Review</a></li>
                            </ul>
                        </li>
                        <li><a href="about">About</a></li>
                        <li><a href="#" class="login-link">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="single.html">Blog Post</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="https://www.facebook.com/STGTelecomOfficiel/" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
            <a href="https://twitter.com/stgtelecom" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
            <a href="https://www.instagram.com/stgtelecom/" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-------------NEWSLETTER-POPUP---------------------
        <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url(assets/images/newsletter_popup_bg.jpg)">
            <div class="newsletter-popup-content">
                <img src="assets/images/logo-black.png" alt="Logo" class="logo-newsletter">
                <h2>BE THE FIRST TO KNOW</h2>
                <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
                <form action="#">
                    <div class="input-group">
                        <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                        <input type="submit" class="btn" value="Go!">
                    </div><!- End .from-group 
                </form>
                <div class="newsletter-subscribe">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="1">
                            Don't show this popup again
                        </label>
                    </div>
                </div>
            </div><! End .newsletter-popup-content -->
        <!--</div><!- END .newsletter-popup -->

<!-- Add Cart Modal -->
<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body add-cart-box text-center">
        <p>You've just added this product to the<br>cart:</p>
        <h4 id="productTitle"></h4>
        <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
        <div class="btn-actions">
            <a href="cart"><button class="btn-primary">Go to cart page</button></a>
            <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
        </div>
      </div>
    </div>
  </div>
</div>

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<!-- Plugins JS File -->
<script src="http://127.0.0.1:8000/assets/js/jquery.min.js"></script>
<script src="http://127.0.0.1:8000/assets/js/bootstrap.bundle.min.js"></script>
<script src="http://127.0.0.1:8000/assets/js/optional/isotope.pkgd.min.js"></script>
<script src="http://127.0.0.1:8000/assets/js/plugins.min.js"></script>

<!-- Main JS File -->
<script src="http://127.0.0.1:8000/assets/js/main.min.js"></script>