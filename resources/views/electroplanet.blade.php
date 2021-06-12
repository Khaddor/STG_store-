@extends('layouts.layout')

@section('content')


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




@endsection 