@extends('layouts.layout')

@section('content')
	
	<!-- Plugins CSS File -->
	<link rel="stylesheet" href=" http://127.0.0.1:8000/assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
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
                margin-left: 20px !important;
                color: black !important;
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
                background-color: #1e3f5d;
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
            color:#f8e05a;
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


    </style>
    <link href="https://stgtelecom.com/asstes/css/style.css" rel="stylesheet">

	<link rel="stylesheet" href=" http://127.0.0.1:8000/assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href=" http://127.0.0.1:8000/assets/vendor/fontawesome-free/css/all.min.css "><link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CPoppins:300,400,500,600,700" media="all">
</head>
<section class="stg-vente">
	<div class="container-vente">
		<div class="row">
			<div class="col-12 col-sm-7 mb-4 my-2 wrraper-logo-pv">
				<h1 class="font-weight-bold">Points de vente</h1>
				<h3>Disponible chez :
				<img style="margin-left: 450px;" src="https://stgtelecom.com/asstes/images/vente/logo-marjan.png" alt="Points de vente" class="img-fluid logo-orange">

				</h3>
				<span class="desktop-version">
					<img src="https://stgtelecom.com/asstes/images/vente/logo-marjan.png" alt="Points de vente" class="img-fluid logo-orange">
				</span>
			</div>
			<div class="col-12 col-sm-5">
				<img src="https://stgtelecom.com/asstes/images/vente/map-marjane.png" alt="Points de vente" class="img-fluid">
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
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marjane Agadir Founty</td>
								<td>Quartier Founty Route d'Inzegane Commune Ben Sergaou</td>
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
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="color: black !important;">Marjane Casablanca Ain Sebaa</td>
								<td>Quartier Beausite - Ain Sebaa</td>
							</tr>
							<tr>
								<td>Marjane Casablanca Californie</td>
								<td>CT 1029, Commune Ain Chock</td>
							</tr>
							<tr>
								<td>Marjane Derb Sultan</td>
								<td>Bd Mohamed VI Angle Bd Bouchaib Doukkali</td>
							</tr>
							<tr>
								<td>Marjane Hay Hassani</td>
								<td>Angle Bd Bouregreg &amp; Oued Laou - Hay Hassani</td>
							</tr>
							<tr>
								<td>Marjane Morocco Mall</td>
								<td>1, Bd de l'océan Sidi Abderrahman - Ain Diab</td>
							</tr>
							<tr>
								<td>Marjane Tachfine Center</td>
								<td>Boulevard Ibn Tachfine, Casablanca 20250</td>
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
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marjane El Jadida</td>
								<td>Hay El Matar - Route de Sidi Bouzid</td>
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
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marjane Fes 1</td>
								<td>Marjane Fes 1</td>
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
				Inzegane                    </div>
				<div class="col-6 text-right">
					<i class="fa fa-plus"></i>
				</div>
			</div>
			<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
				<div class="card-body px-0">
					<table class="table table-dark">
						<thead>
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marjane Inzegane</td>
								<td>Marjane Inzegane</td>
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
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marjane Kenitra</td>
								<td>Route Sidi Allal El Bahraoui</td>
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
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marjane Marrakech Massira</td>
								<td>Route d'Agadir - Massira</td>
							</tr>
							<tr>
								<td>Marjane Marrakech Menara</td>
								<td>Avenue Mohamed Abdelkrim Khattabi - Menara</td>
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
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marjane Meknès</td>
								<td>Route Agouray Commune Ait Ouhlal</td>
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
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marjane Mohammedia</td>
								<td>Route Secondaire 101</td>
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
				Oujda                    </div>
				<div class="col-6 text-right">
					<i class="fa fa-plus"></i>
				</div>
			</div>
			<div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
				<div class="card-body px-0">
					<table class="table table-dark">
						<thead>
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marjane Oujda</td>
								<td>Route saidia</td>
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
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marjane Bouregreg</td>
								<td>Avenue Azilal</td>
							</tr>
							<tr>
								<td>Marjane Rabat Hay Ryad</td>
								<td>Autoroute de Rabat/Tanger</td>
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
				Safi                    </div>
				<div class="col-6 text-right">
					<i class="fa fa-plus"></i>
				</div>
			</div>
			<div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
				<div class="card-body px-0">
					<table class="table table-dark">
						<thead>
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marjane Safi</td>
								<td>Route de Marrakech</td>
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
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marjane Salé</td>
								<td>Angle Avenue Mohamed V &amp; Abderrahim Bouabid - Tabriquet</td>
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
							<tr>
								<th scope="col">Magasin</th>
								<th scope="col">Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tanger Médina</td>
								<td>Km 5.6, Route de Rabat</td>
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
		<div class="row" style="text-decoration-color: black !important;">
			<div class="col-sm-12">
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col" style="width: 22%;text-transform: uppercase;">Ville</th>
							<th scope="col" style="width: 35%;text-transform: uppercase;">Magasin</th>
							<th scope="col" style="width: 35%;text-transform: uppercase;">Adresse</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>Agadir</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Agadir Founty</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Quartier Founty Route d'Inzegane Commune Ben Sergaou</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Casablanca</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Casablanca Ain Sebaa</li>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Casablanca Californie</li>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Derb Sultan</li>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Hay Hassani</li>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Morocco Mall</li>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Tachfine Center</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Quartier Beausite - Ain Sebaa</li>
									<li style=" margin-left: 10px;" style="color:black;">CT 1029, Commune Ain Chock</li>
									<li style=" margin-left: 10px;" style="color:black;">Bd Mohamed VI Angle Bd Bouchaib Doukkali</li>
									<li style=" margin-left: 10px;" style="color:black;">Angle Bd Bouregreg &amp; Oued Laou - Hay Hassani</li>
									<li style=" margin-left: 10px;" style="color:black;">1, Bd de l'océan Sidi Abderrahman - Ain Diab</li>
									<li style=" margin-left: 10px;" style="color:black;">Boulevard Ibn Tachfine, Casablanca 20250</li>
								</ul>
							</td>
						</tr>

						<tr>
							<td>El Jadida</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane El Jadida</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Hay El Matar - Route de Sidi Bouzid</li>
								</ul>
							</td>
						</tr>

						<tr>
							<td>Fes</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Fes 1</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Commune Agdal - Route de Meknes</li>
								</ul>
							</td>
						</tr>

						<tr>
							<td>Inzegane</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Inzegane</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Lotissement Najah n°119 - Route Ait Melloul</li>
								</ul>
							</td>
						</tr>

						<tr>
							<td>Kénitra</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Kenitra</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Route Sidi Allal El Bahraoui</li>
								</ul>
							</td>
						</tr>

						<tr>
							<td>Marrakech</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Marrakech Massira</li>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Marrakech Menara</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Route d'Agadir - Massira</li>
									<li style=" margin-left: 10px;" style="color:black;">Avenue Mohamed Abdelkrim Khattabi - Menara</li>
								</ul>
							</td>
						</tr>

						<tr>
							<td>Meknes</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Meknès</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Route Agouray Commune Ait Ouhlal</li>
								</ul>
							</td>
						</tr>

						<tr>
							<td>Mohammedia</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Mohammedia</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Route Secondaire 101</li>
								</ul>
							</td>
						</tr>


						<tr>
							<td>Oujda</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Oujda</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Route saidia</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Rabat</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Bouregreg</li>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Rabat Hay Ryad</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Avenue Azilal</li>
									<li style=" margin-left: 10px;" style="color:black;">Autoroute de Rabat/Tanger</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Safi</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Safi</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Route de Marrakech</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Salé</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Marjane Salé</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Angle Avenue Mohamed V &amp; Abderrahim Bouabid - Tabriquet</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Tanger</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black!important;">Tanger Médina</li>
								</ul>
							</td>
							<td class="text-left">
								<ul>
									<li style=" margin-left: 10px;" style="color:black;">Km 5.6, Route de Rabat</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>





@endsection	