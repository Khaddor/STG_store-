@extends('layouts.layout')

@section('content')

 <style>
 		.sticky-wrapper{
 			color: black!important;
 		}
        .logo-orange {
            max-width: 70px;
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
            color: #f5821f;
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
                border-right: 10px solid #fbf5f0;
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
                font-size: 60px;
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
            }

            .logo-orange {
                max-width: 100%;
            }

        }
    </style>

    <link href="https://stgtelecom.com/asstes/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href=" http://127.0.0.1:8000/assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href=" http://127.0.0.1:8000/assets/vendor/fontawesome-free/css/all.min.css "><link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CPoppins:300,400,500,600,700" media="all">
<section class="stg-vente">
        <div class="container-vente">
            <div class="row">
                <div class="col-12 col-sm-5 mb-4 my-2 auto">
                    <h1  style="margin-left:20px;" class="font-weight-bold">Points de vente</h1>
                    <h3 style="margin-left:20px;">Disponible chez :
                        <span>
                            <img style="margin-left: 500px;" src="https://stgtelecom.com/asstes/images/vente/orange.png" alt="Points de vente" class="img-fluid logo-orange">
                        </span>
                    </h3>
                </div>
                <div class="col-12 col-sm-5">
                    <img style="margin-left: 250px;"  src="https://stgtelecom.com/asstes/images/vente/points-maps.png" alt="Points de vente" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="section-md accordion" id="accordionExample">
        <div class="card">
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
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>101, AVENUE HASSAN II AGADIR</td>
                                </tr>
                                <tr>
                                    <td>Souk</td>
                                    <td>N° 1 immeuble 9 (Kheir Rabi), Rue du Souk Agadir</td>
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
                    Ait Melloul                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lot Yamna Ismail</td>
                                    <td>Lot Yamna Smail Bd Prince Héritier route Biougra</td>
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
                    Beni Mellal                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>Angle Boulevard Hassan II & Rue Chaouki</td>
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
                    Berkane                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hay Laayoune</td>
                                    <td>217, rue Allal Ben Abdallah, Hay Laayoune</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingFive">
                <div class="row" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <div class="col-6">
                    Berrechid                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Moulay Smail</td>
                                    <td>local " Dar Mansouri Habib Eddine", Bd Moulay Smaîl n° 248/250</td>
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
                    Casablanca                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2 Mars</td>
                                    <td>117, Boulevard 2 Mars</td>
                                </tr>
                                <tr>
                                    <td>Ain Chock</td>
                                    <td>130 Bd Panoramique</td>
                                </tr>
                                <tr>
                                    <td>Anfa</td>
                                    <td>194 Boulevard D'Anfa</td>
                                </tr>
                                <tr>
                                    <td>Oulfa</td>
                                    <td>225, résidence les Deux Palmiers WIAM Quartier Oulfa</td>
                                </tr>
                                <tr>
                                    <td>Anfa</td>
                                    <td>36 Bd d'anfa résidence Anafe</td>
                                </tr>
                                <tr>
                                    <td>Bin Lamdoun</td>
                                    <td>896, Boulevard El Qods</td>
                                </tr>
                                <tr>
                                    <td>Hay Mohammadi</td>
                                    <td>Bd Grande Ceinture N° 88 Bis Hay Hohammadi</td>
                                </tr>
                                <tr>
                                    <td>Bernoussi</td>
                                    <td>Bloc 6  n° 9  bernoussi</td>
                                </tr>
                                <tr>
                                    <td>Mabrouka</td>
                                    <td>Boulevard Med Bouziane</td>
                                </tr>
                                <tr>
                                    <td>Abdelmoumen</td>
                                    <td>Centre commercial Abdelmoumen ERAC centre, n° 18</td>
                                </tr>
                                <tr>
                                    <td>Ain Diab</td>
                                    <td>Magasin Meditel N° L 1001, zone 5 Niveau RDC Morocco Mall Casa</td>
                                </tr>
                                <tr>
                                    <td>El Fida</td>
                                    <td>Route El Fida, n° 657 et 659, Casablanca, Maroc,</td>
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
                    El Hoceima                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>N°2 angle Bd Med V et rue bnou tachfine</td>
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
                    El Jadida                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>Tours Jumelles 13 » sis Boulevard Mohamed VI</td>
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
                    Fes                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hadika</td>
                                    <td>«HADIKA 3 » et « HADIKA 4 », sis Lotissement Hadika, résidence KAMHI, n° 1 & 2, Oued Fès, Maroc, </td>
                                </tr>
                                <tr>
                                    <td>Al Baraka</td>
                                    <td>«Al Baraka 7»,  55, Boulevard Moulay Rachid, Route de Sefrou, Fès, Maroc, </td>
                                </tr>
                                <tr>
                                    <td>Florence</td>
                                    <td>46 Av Hassan II</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTen">
                <div class="row" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                    <div class="col-6">
                    Guercif                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hay sidi moussa</td>
                                    <td>34, BD Med V Guercif</td>
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
                    Inzegane                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>Bab Taroudante 2 » Bd Mokhtar Soussi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwelve">
                <div class="row" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                    <div class="col-6">
                    Kénitra                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>144 Bis Av Mohamed Diouri</td>
                                </tr>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>407, Bd Mohammed V  KENITRA</td>
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
                    Khouribga                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rue Marrakech</td>
                                    <td>1 Bis Rue Marrakech Khouribgha</td>
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
                    Laayoune                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Essmara</td>
                                    <td>Avenue Mohamed 6 N° 249 et 250 Laayoune</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingFifteen">
                <div class="row" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                    <div class="col-6">
                    Marrakech                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>279 AV Mohamed V</td>
                                </tr>
                                <tr>
                                    <td>Massira</td>
                                    <td>83 OPERATION RAJA 3 MASSIRA 2</td>
                                </tr>
                                <tr>
                                    <td>Gare Oncf</td>
                                    <td>Galerie commercial Gare ONCF Marrakech </td>
                                </tr>
                                <tr>
                                    <td>Gueliz</td>
                                    <td>Magasin Méditel, N° B10 RDC Centre commercial Carre EDEN, Marrakech</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingSixteen">
                <div class="row" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                    <div class="col-6">
                    Meknes                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Agouray ait Oula</td>
                                    <td>Zaryouh 5 »,  Route Agouray Marjane</td>
                                </tr>
                                <tr>
                                    <td>Hamriya</td>
                                    <td>3 Rue de Paris Ville nouvelle</td>
                                </tr>
                                <tr>
                                    <td>Baladia</td>
                                    <td>Place du 2 septembre et Angle Rue Beyrouth</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingSeventeen">
                <div class="row" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">
                    <div class="col-6">
                    Midelt                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>1,  rue Ahmed Chaouki</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingEighteen">
                <div class="row" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen">
                    <div class="col-6">
                    Mohammedia                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>Imm Taghi Av des FAR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingNineteen">
                <div class="row" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="true" aria-controls="collapseNineteen">
                    <div class="col-6">
                    Nador 
                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>El Kindy</td>
                                    <td>243 AV des FAR</td>
                                </tr>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>Boulevard Ibn Sinaa, n° 52</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwenty">
                <div class="row" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="true" aria-controls="collapseTwenty">
                    <div class="col-6">
                    Oujda                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre ville</td>
                                    <td>128, Angle rue De Hjeira (ex rue de marrakech) et rue de Figuige</td>
                                </tr>
                                <tr>
                                    <td>Sidi Brahim</td>
                                    <td>38 rue Sidi Brahim  Av Mohamed V</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwentyOne">
                <div class="row" data-toggle="collapse" data-target="#collapseTwentyOne" aria-expanded="true" aria-controls="collapseTwentyOne">
                    <div class="col-6">
                    Ourzzazate                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwentyOne" class="collapse" aria-labelledby="headingTwentyOne" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gare Ctm</td>
                                    <td>La nouvelle gare routiere de la CTM, Boulevard Mohamed 5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwentyTwo">
                <div class="row" data-toggle="collapse" data-target="#collapseTwentyTwo" aria-expanded="true" aria-controls="collapseTwentyTwo">
                    <div class="col-6">
                    Rabat                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwentyTwo" class="collapse" aria-labelledby="headingTwentyTwo" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>28 , AV Allal Ben  Abdellah</td>
                                </tr>
                                <tr>
                                    <td>Takadoum</td>
                                    <td>45, Boulevard El haouz Mag N°1</td>
                                </tr>
                                <tr>
                                    <td>Hay Riad</td>
                                    <td>Espace Ennakhil 2 Ang Bd Ennakhil & Mehdi Ben Barka</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwentyThree">
                <div class="row" data-toggle="collapse" data-target="#collapseTwentyThree" aria-expanded="true" aria-controls="collapseTwentyThree">
                    <div class="col-6">
                    Safi                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwentyThree" class="collapse" aria-labelledby="headingTwentyThree" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ville Nouvelle</td>
                                    <td>105, Avenue Kennedy, ville nouvelle </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwentyFour">
                <div class="row" data-toggle="collapse" data-target="#collapseTwentyFour" aria-expanded="true" aria-controls="collapseTwentyFour">
                    <div class="col-6">
                    Salé                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwentyFour" class="collapse" aria-labelledby="headingTwentyFour" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tabriquet</td>
                                    <td>Al Kamal 1 » sis Lot n° 210, Boulevard Mohamed V, Lotissement Karima II</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwentyFive">
                <div class="row" data-toggle="collapse" data-target="#collapseTwentyFive" aria-expanded="true" aria-controls="collapseTwentyFive">
                    <div class="col-6">
                    Sidi Slimane                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwentyFive" class="collapse" aria-labelledby="headingTwentyFive" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hay Essalam</td>
                                    <td>Bd Brahim Roudani Bloc 9 N° 2032 Hay Essalam</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwentySix">
                <div class="row" data-toggle="collapse" data-target="#collapseTwentySix" aria-expanded="true" aria-controls="collapseTwentySix">
                    <div class="col-6">
                    Tanger                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwentySix" class="collapse" aria-labelledby="headingTwentySix" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hay Dradeb</td>
                                    <td> Local " El MTIOUI", Hay Dradeb</td>
                                </tr>
                                
                                <tr>
                                    <td>Sahat Al Madina</td>
                                    <td>«  EN NASSIRI » sis à Angle Place Médina et rue Ibn Toumert  n° 8- Tanger</td>
                                </tr>
                                <tr>
                                    <td>Route Tétouan</td>
                                    <td>« Ibn Batouta 15 », Route de Tétouan</td>
                                </tr>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>Angle Boulevard Mohamed V  et Ibnou Noussair n° 4 Tanger</td>
                                </tr>
                                <tr>
                                    <td>Drissia</td>
                                    <td>Avenue Tarek ibn Zyad N°35 Hay Bani Makada, Drissia</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwentySeven">
                <div class="row" data-toggle="collapse" data-target="#collapseTwentySeven" aria-expanded="true" aria-controls="collapseTwentySeven">
                    <div class="col-6">
                    Taroudant                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwentySeven" class="collapse" aria-labelledby="headingTwentySeven" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>Jnane Derdouri, rue Prince Héritier</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwentyEight">
                <div class="row" data-toggle="collapse" data-target="#collapseTwentyEight" aria-expanded="true" aria-controls="collapseTwentyEight">
                    <div class="col-6">
                    Taza                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwentyEight" class="collapse" aria-labelledby="headingTwentyEight" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Taza El Jadida</td>
                                    <td>55 RUE ALI BENOU ABI TALEB - TAZA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwentyNine">
                <div class="row" data-toggle="collapse" data-target="#collapseTwentyNine" aria-expanded="true" aria-controls="collapseTwentyNine">
                    <div class="col-6">
                    Temara                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseTwentyNine" class="collapse" aria-labelledby="headingTwentyNine" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>6, Av Hassan II Industriel</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThirty">
                <div class="row" data-toggle="collapse" data-target="#collapseThirty" aria-expanded="true" aria-controls="collapseThirty">
                    <div class="col-6">
                    Tetouan                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseThirty" class="collapse" aria-labelledby="headingThirty" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Touabal Oulya</td>
                                    <td>Avenue des FAR, Immeuble Rzini,</td>
                                </tr>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>Boulevard Mohamed 5 N°21</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThirtyOne">
                <div class="row" data-toggle="collapse" data-target="#collapseThirtyOne" aria-expanded="true" aria-controls="collapseThirtyOne">
                    <div class="col-6">
                    Tifelt                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div id="collapseThirtyOne" class="collapse" aria-labelledby="headingThirtyOne" data-parent="#accordionExample">
                    <div class="card-body px-0">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Quartier</th>
                                    <th scope="col">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Centre Ville</td>
                                    <td>63 Bd Med V Tifelt</td>
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
                            <tr>
                                <th scope="col" style="width: 25%;text-transform: uppercase;">Ville</th>
                                <th scope="col" style="width: 30%;text-transform: uppercase;">Quartier</th>
                                <th scope="col" style="width: 40%;text-transform: uppercase;">Adresse</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Agadir</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                        <li style=" margin-left: 10px;">Souk</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">101, AVENUE HASSAN II AGADIR</li>
                                        <li style=" margin-left: 10px;">N° 1 immeuble 9 (Kheir Rabi), Rue du Souk Agadir</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Ait Melloul</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Lot Yamna Ismail</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Lot Yamna Smail Bd Prince Héritier route Biougra</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Beni Mellal</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Angle Boulevard Hassan II & Rue Chaouki</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Berrechid</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Moulay Smail</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">local " Dar Mansouri Habib Eddine", Bd Moulay Smaîl n° 248/250</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Casablanca</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">2 Mars</li>
                                        <li style=" margin-left: 10px;">Ain Chock</li>
                                        <li style=" margin-left: 10px;">Anfa</li>
                                        <li style=" margin-left: 10px;">Oulfa</li>
                                        <li style=" margin-left: 10px;">Anfa</li>
                                        <li style=" margin-left: 10px;">Bin Lamdoun</li>
                                        <li style=" margin-left: 10px;">Hay Mohammadi</li>
                                        <li style=" margin-left: 10px;">Bernoussi</li>
                                        <li style=" margin-left: 10px;">Mabrouka</li>
                                        <li style=" margin-left: 10px;">Abdelmoumen</li>
                                        <li style=" margin-left: 10px;">Ain Diab</li>
                                        <li style=" margin-left: 10px;">El Fida</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">117, Boulevard 2 Mars</li>
                                        <li style=" margin-left: 10px;">130 Bd Panoramique</li>
                                        <li style=" margin-left: 10px;">194 Boulevard D'Anfa</li>
                                        <li style=" margin-left: 10px;">225, résidence les Deux Palmiers WIAM Quartier Oulfa</li>
                                        <li style=" margin-left: 10px;">36 Bd d'anfa résidence Anafe</li>
                                        <li style=" margin-left: 10px;">896, Boulevard El Qods</li>
                                        <li style=" margin-left: 10px;">Bd Grande Ceinture N° 88 Bis Hay Hohammadi</li>
                                        <li style=" margin-left: 10px;">Bloc 6  n° 9  bernoussi</li>
                                        <li style=" margin-left: 10px;">Boulevard Med Bouziane</li>
                                        <li style=" margin-left: 10px;">Centre commercial Abdelmoumen ERAC centre, n° 18</li>
                                        <li style=" margin-left: 10px;">Magasin Meditel N° L 1001, zone 5 Niveau RDC Morocco Mall Casa</li>
                                        <li style=" margin-left: 10px;">Route El Fida, n° 657 et 659, Casablanca, Maroc,</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>El Hoceima</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">N°2 angle Bd Med V et rue bnou tachfine</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>El Jadida</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Tours Jumelles 13 » sis Boulevard Mohamed VI</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Fes</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Hadika</li>
                                        <li style=" margin-left: 10px;">Al Baraka</li>
                                        <li style=" margin-left: 10px;">Florence</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">«HADIKA 3 » et « HADIKA 4 », sis Lotissement Hadika, résidence KAMHI, n° 1 & 2, Oued Fès, Maroc, </li>
                                        <li style=" margin-left: 10px;">«Al Baraka 7»,  55, Boulevard Moulay Rachid, Route de Sefrou, Fès, Maroc, </li>
                                        <li style=" margin-left: 10px;">46 Av Hassan II</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Guercif</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Hay sidi moussa</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">34, BD Med V Guercif</li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td>Inzegane</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Bab Taroudante 2 » Bd Mokhtar Soussi</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Kénitra</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                        <li style=" margin-left: 10px;">Rue Marrakech</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">144 Bis Av Mohamed Diouri</li>
                                        <li style=" margin-left: 10px;">407, Bd Mohammed V  KENITRA</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Khouribga</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Rue Marrakech</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">1 Bis Rue Marrakech Khouribgha</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Laayoune</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Essmara</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Avenue Mohamed 6 N° 249 et 250 Laayoune</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Marrakech</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                        <li style=" margin-left: 10px;">Massira</li>
                                        <li style=" margin-left: 10px;">Gare Oncf</li>
                                        <li style=" margin-left: 10px;">Gueliz</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">279 AV Mohamed V</li>
                                        <li style=" margin-left: 10px;">83 OPERATION RAJA 3 MASSIRA 2</li>
                                        <li style=" margin-left: 10px;">Galerie commercial Gare ONCF Marrakech </li>
                                        <li style=" margin-left: 10px;">Magasin Méditel, N° B10 RDC Centre commercial Carre EDEN, Marrakech</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Meknes</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Agouray ait Oula</li>
                                        <li style=" margin-left: 10px;">Hamriya</li>
                                        <li style=" margin-left: 10px;">Baladia</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Zaryouh 5 »,  Route Agouray Marjane</li>
                                        <li style=" margin-left: 10px;">3 Rue de Paris Ville nouvelle</li>
                                        <li style=" margin-left: 10px;">Place du 2 septembre et Angle Rue Beyrouth</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Midelt</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">1,  rue Ahmed Chaouki</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Mohammedia</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Imm Taghi Av des FAR</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Nador</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">El Kindy</li>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">243 AV des FAR</li>
                                        <li style=" margin-left: 10px;">Boulevard Ibn Sinaa, n° 52</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Oujda</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre ville</li>
                                        <li style=" margin-left: 10px;">Sidi Brahim</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">128, Angle rue De Hjeira (ex rue de marrakech) et rue de Figuige</li>
                                        <li style=" margin-left: 10px;">38 rue Sidi Brahim  Av Mohamed V</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Ourzzazate</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Gare Ctm</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">La nouvelle gare routiere de la CTM, Boulevard Mohamed 5</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Rabat</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                        <li style=" margin-left: 10px;">Takadoum</li>
                                        <li style=" margin-left: 10px;">Hay Riad</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">28 , AV Allal Ben  Abdellah</li>
                                        <li style=" margin-left: 10px;">45, Boulevard El haouz Mag N°1</li>
                                        <li style=" margin-left: 10px;">Espace Ennakhil 2 Ang Bd Ennakhil & Mehdi Ben Barka</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Safi</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Ville Nouvelle</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">105, Avenue Kennedy, ville nouvelle </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Salé</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Tabriquet</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Al Kamal 1 » sis Lot n° 210, Boulevard Mohamed V, Lotissement Karima II</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Sidi Slimane</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Hay Essalam</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Bd Brahim Roudani Bloc 9 N° 2032 Hay Essalam</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Tanger</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Hay Dradeb</li>
                                        <li style=" margin-left: 10px;">Sahat Al Madina</li>
                                        <li style=" margin-left: 10px;">Route Tétouan</li>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                        <li style=" margin-left: 10px;">Drissia</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;"> Local " El MTIOUI", Hay Dradeb</li>
                                        <li style=" margin-left: 10px;">«  EN NASSIRI » sis à Angle Place Médina et rue Ibn Toumert  n° 8- Tanger</li>
                                        <li style=" margin-left: 10px;">« Ibn Batouta 15 », Route de Tétouan</li>
                                        <li style=" margin-left: 10px;">Angle Boulevard Mohamed V  et Ibnou Noussair n° 4 Tanger</li>
                                        <li style=" margin-left: 10px;">Avenue Tarek ibn Zyad N°35 Hay Bani Makada, Drissia</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Taroudant</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Jnane Derdouri, rue Prince Héritier</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Taza</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Taza El Jadida</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">55 RUE ALI BENOU ABI TALEB - TAZA</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Temara</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">6, Av Hassan II Industriel</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Tetouan</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Touabal Oulya</li>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Avenue des FAR, Immeuble Rzini,</li>
                                        <li style=" margin-left: 10px;">Boulevard Mohamed 5 N°21</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>Tifelt</td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">Centre Ville</li>
                                    </ul>
                                </td>
                                <td class="text-left">
                                    <ul>
                                        <li style=" margin-left: 10px;">63 Bd Med V Tifelt</li>
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









       
@endsection	