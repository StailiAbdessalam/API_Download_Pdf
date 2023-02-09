<html>
<head>
    <title>Fiche Commerciale</title>
    <link rel="stylesheet" type="text/css" href="https://solusoft.espaceo.net/web/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://solusoft.espaceo.netweb/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://solusoft.espaceo.netweb/app-assets/css/bootstrap-extended.css">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="https://solusoft.espaceo.netweb/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <link rel="stylesheet" type="text/css" href="https://solusoft.espaceo.netweb/app-assets/vendors/css/charts/apexcharts.css">
    <!-- END: Vendor CSS-->
    <style>
        #loader-wrapper{
            width: 100%;
            height: 100vh;
        }
        @font-face {
            font-family: myFirstFont;
        {{--src: url("https://solusoft.espaceo.net/web/assets/fonts/Montserrat-SemiBold.ttf");--}}
        }


        * {
            font-family: myFirstFont;
        }

        @page {
            size: A4;
        }




        .entry-header .entry-title h1{
            color: #ffffff !important;
        }
        body{
            background-color: #ffffff;
        }
        table{
            table-layout: fixed;
            width: 100%;
            max-height: 150px;
            border-collapse: collapse;
        }
        table tr{
            padding:  3px;
        }
        table td{
            text-align: left;
            vertical-align: top;
            padding:  3px;
            font-size: 8px;
            font-weight: bold;
        }

        .extra-table td{
            border-top: 1px solid #e5ebf5;
            border-right: 1px solid #e5ebf5;
            border-left: 1px solid #e5ebf5;
            border-bottom: 1px solid #e5ebf5;
        }

        .ref-block{
            padding: 5px;
            margin: 0;
        }
        .ref-block table{
            table-layout: fixed;
            width: 99%;
        }
        .ref-block table td{
            text-align: left;
            vertical-align: middle;
            font-size: 8px;
            font-weight: bold;
        }

        .ref-block .first {
            width:20%;
            text-align: left;
        }
        .ref-block .second {
            width:60%;
            height: 10px !important;
            text-align: left;
        }
        .ref-block .third {
            width:20%;
            text-align: left;
        }

        .honoraire-block h6 {
            margin: 0;
            position : relative;
            top :-0.5rem;
        }
        .first {
            width:50%;
            text-align: left;
        }
        .second {
            width:10%;
            text-align: center;
        }
        .second p {
            margin-top: -3px;
        }
        .third {
            width:20%;
            height: 10px;
            text-align: left;
        }
        .third img {
            width:80%;
        }
        .odd{
            background-color: white;
        }
        .first-row{
            background-color: white;
            color:black;
        }
        .page-one-container{
            padding: 0.3rem;
            width: 100%;
        }
        .header-container{
            width: 100%;
            padding: 5px 0px;
            border: 0.5px solid #e5ebf5;
            border-radius: 10px;
            height : 7%;
        }
        .agence-container{
            display: inline-block;
            vertical-align: top;
            margin-top: 0.2rem;
            width: 10%;
        }
        .logo-container{
            margin-top: 0.2rem;
            display: inline-block;
            vertical-align: top;
            width: 66%;
            height: 100px;
            text-align: left;
        }
        .logo-container img{
            margin-top: 0.2rem;
            margin-left: 0.5rem;
            width: 22%;
        }
        .agent-container{
            margin-top: 0.2rem;
            display: inline-block;
            vertical-align: top;
            width: 22%;
        }
        .agence-info{
            margin-top: 0.2rem;
            display: inline-block;
            vertical-align: top;
            width: 100%;
            float: right;
        }
        .agence-info p{
            padding: 0;
            margin: 0;
            font-size: 8px;
            font-weight: bold;
        }
        .agence-logo{
            display: inline-block;
            vertical-align:top;
            width: 25%;

        }
        .agence-logo img{
            width: 70%;
            height: 100px;
            margin: 0.8rem;
        }
        .agent-info{
            margin-top: 0.8rem;
            display: inline-block;
            vertical-align: bottom;
            width: 100%;
            float: right;
        }
        .agent-info p{
            padding: 0;
            margin: 0;
            font-size: 8px;
            font-weight: bold;
            text-align: right;
        }
        .agent-logo{
            margin-top: 60px;
            display: inline-block;
            vertical-align: top;
            width: 100%;
        }
        .agent-logo img{
            margin-left: 15px;
            width: 100%;
            border-radius: 50%;
            border: 1px solid #e5ebf5;
        }
        .main-title-container{
            width: 100%;
            height: 50px;
            text-align: center;
        }
        .divider{
            margin-top: 0.8rem;
            display: inline-block;
            width: 33%;
            height: 25px;
            border-bottom: 1px solid #e5ebf5;
        }
        .main-title{
            margin-top: 0.8rem;
            display: inline-block;
            width: 32%;
            height: 25px;
            text-align: center;
        }
        .main-info-container{
            margin-top: 10px;
            width: 100%;
            border-radius: 10px;
            border: 0.5px solid #e5ebf5;
        }
        .main-info-container.padding-bottom{
            border : none !important;
        }
        .main-info-container.padding-bottom .extra-info-style{
            border-left: none !important;
        }
        .text-align-left{
            text-align: left;
        }
        .text-align-center{
            text-align: center;
        }
        .text-align-right{
            text-align: right;
        }
        .info-block{
            display: inline-block;
            width: 32%;
            height: 10px;
        }
        .info-block h4{
            margin: 0;
            font-size: 10px;
            font-weight: bold;
            height: 10px;
        }
        .long-divider{
            display: inline-block;
            width: 70%;
            height: 1px;
            border-bottom: 1px solid #e5ebf5;
        }
        .honoraire-block{
            display: inline-block;
            width: 25%;
            font-size: 10px;
            font-weight: bold;
        }

        .main-picture{
            width: 96%;
            height: 130px;
            border-radius: 6px;
        }
        .section2{
            height: 17%;
        }
        .title-block h4 , .title-block dev{
            margin: 0;
            color: black;
        }
        .title-block{
            text-align: center;
            height: 3%;
            background-color: white;
        }
        .pictures-block{
            margin: 0;

            padding: 0;
            text-align: center;
        }
        .diag-pic{
            width: 85%;
            height: 120px;
            margin-top: 10px;
            text-align: center;
        }
        .description-container{
            width: 100%;
            border-radius: 10px;
            border: 1px solid #e5ebf5;
            margin-top: 10px;
            min-height: 100px;
            margin: 5px 0px;
        }
        .description-container.images{
            border: none !important;
        }

        .description-image{
            display: inline;
            width: 100%;
            margin: 0 10px 10px 10px;
            max-height: 120px;

        }

        .referent-ville{
            display: inline-block;
            width: 59%;
            margin: 0;
            border-radius: 10px;
            border: 1px solid #e5ebf5;
        }
        .info-ville{
            display: inline-block;
            width: 39%;
            border-radius: 10px;
            border: 1px solid #e5ebf5;
        }


        .description-title h4{
            margin: 0;
            color: black;
            font-size: 8px;
        }
        .description-title{
            width: 100%;
            padding: 3px;
            background-color: white;

        }
        .description-content{
            width: 100%;
            margin: 0 10px 10px 10px;
        }
        .description-content p{
            text-align: justify;
            width: 97%;
            margin: 0;
            font-size: 7px;
        }
        .p-10{
            padding: 0.1rem;
        }
        #map{
            width: 95%;
            height: 300px;
        }

        #energie-bl, #ges-bl{
            margin-top: 16px;
            position: relative;
        }

        .extra-info-block{
            display: inline-block;
            width: 100%;
            margin: 0;
        }
        .extra-info-block h4{
            margin: 0;
            padding: 3px;
            font-size: 8px;
            font-weight: bold;
            height: 7px;
            color: black;
        }
        .energie-valeur{
            position: absolute;
            right: 30px;
            bottom: 20px;
            font-size: 8px;
            font-weight: bold;
            background : red !important;
            text-align: center;
        }
        .ges-valeur{
            position: absolute;
            right: 30px;
            bottom: 50px;
            font-size: 8px;
            font-weight: bold;
            text-align: center;
        }
        .extra-info-style{
            /*padding: 30px 0px;*/
            padding: 3px 0px !important;
            margin-top :-10px !important;
            border-left: 1px solid #e5ebf5;
        }
        .padding-bottom{
            padding-bottom: 0px;
        }
        .ville-block{
            display: flex;
            width: 100%;
            margin-top: 50px;
        }
        .info-ville-img img{
            width: 98%;
        }
        .info-ville-img{
            width: 100%;
            text-align: center;
        }
        .info-ville-habit{
            width: 100%;
            text-align: center;
        }
        .info-ville-btns{
            width: 100%;
            text-align: center;
        }
        .info-ville-habit h5{
            font-size: 7px;
            font-weight: bold;
            display: inline-block;
            margin: 10px;
            max-height: 280px;
        }
        .btn-outline-info {
            border: 1px solid #00CFE8;
            background-color: transparent;
            color: #00CFE8;
            font-size: 7px;
            border-radius: 3px;
            padding: 5px 2px;
        }
        .btn-outline-light{
            border: 1px solid grey;
            background-color: transparent;
            color: black;
            font-size: 7px;
            border-radius: 3px;
            padding: 5px 2px;
        }
        .pro-loc{
            width: 100%;
            display: inline-block;
            text-align: center;
            margin-top: 10px;
        }
        .pro-loc p{
            display: inline-block;
            font-weight: bold;
            font-size: 12px;
            vertical-align: middle;
            line-height: normal;
        }
        .loc-grey{
            width: 20px;
            height: 20px;
            background-color: #dde4f2;
            display: inline-block;
            margin: 2px 5px;

        }
        .pro-blue{
            width: 20px;
            height: 20px;
            background-color: #4da6fd;
            display: inline-block;
            margin: 2px 5px;
        }
        .chart-block{
            width: 40%;
            text-align: center;
            margin-left: 30%;
        }
        .table2{
            width: 97%;
        }
        .table2 img{
            width: 90%;
            border-radius: 5px;
            margin: 5px;
        }

        .back-link a {
            color: #4ca340;
            text-decoration: none;
            border-bottom: 1px #4ca340 solid;
        }
        .back-link a:hover,
        .back-link a:focus {
            color: #408536;
            text-decoration: none;
            border-bottom: 1px #408536 solid;
        }
        h1 {
            height: 100%;
            /* The html and body elements cannot have any padding or margin. */
            margin: 0;
            font-size: 14px;
            font-family: 'Open Sans', sans-serif;
            font-size: 32px;
            margin-bottom: 3px;
            text-align: center;
        }
        .entry-header {
            text-align: left;
            margin: 0 auto 50px auto;
            width: 80%;
            max-width: 978px;
            position: relative;
            z-index: 10001;
        }
        #demo-content {
            padding-top: 100px;
        }
        .centered-container{
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            border: 1px #e5ebf5 solid;
            width: 90%;
            margin: auto;
        }
        .dividerV{
            width: 1px;
            display: inline-block;
            height: 15px;
            background-color: #dde4f2;
            margin: 5px 10px;
        }

        .extra-table td {
            height: 5px !important;
            font-size : 7px !important;
        }
        .agent-logo .img {
            position :relative;
            top :-65px;
            left : 10px;
        }
        .agent-logo .agent-info {
            position :relative;
            min-width: 100px;
            top :-115px;
            left : 140px;
        }
        .ville td {
            font-size :8px !important;
        }
        .ville .first img {
            width : 20px !important;
            height : 20px !important;
        }
        .pro-loc p {
            font-size : 10px !important;
        }
        .agent-container .agence-info{
            position:relative;
            top : -5px;
            right : -20px;
        }
        .imprimedimg div {
            width: 100% !important;
        }
        .imprimedimg {
            margin-right : 0px !important;
        }
        .imprimedimg img {
            width :100% !important;
            height :48% !important;
            object-fit: cover;
            margin-bottom : 10px !important;
        }

        .imprimedimg div img {
            width :49% !important;
            height : 300px !important;
            object-fit: cover;
            margin-bottom : 10px !important;
        }
    </style>
</head>
<body>



<div id="demo-content">
    <header class="entry-header">
        <h1 class="entry-title" style="color:#ffffff">Veuillez patienter votre PDF est en cours de creation</h1>
    </header>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
</div>



<div class="page-one-container">
    <div class="header-container">
        <div class="logo-container">
            <img src="https://solusoft.espaceo.net/uploads/documents/fiche-commerciale/logo3.png">
            <div class="agent-container">
                <div class="agence-info">
                    <p>Votre agence : L'IMMOBILIER.NET</p>
                    <p>2 AVENUE DU LAC 74140 DOUVAINE</p>
                    <p>Tél: 04.57.43.81.94</p>
                    <p>monprojet@limmobilier.net</p>
                    <p>www.limmobilier.net</p>
                </div>
            </div>
        </div>
        <div class="agence-container">
            <div class="agent-logo">
                <?php
                $picture = !empty($compte['compte_image'])? $compte['compte_image']: 'default-avatar.png'
                ?>
                <img class="img" src="<?= "https://solusoft.espaceo.net/uploads/comptes/".$picture; ?>">
                <div>
                    <div class="agent-info">
                        <p>Votre <?php echo $role["role_titre"]; ?> :</p>
                        <p><?php echo $compte['compte_nom'].' '.$compte['compte_prenom']; ?></p>
                        <p><?php echo $compte['compte_tel']; ?></p>
                        <p><?php echo $compte['compte_email']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-info-container section2">
        <div class="title-block">
            <div class="info-block text-align-left">
                <h4>Ref de bien : <?php echo $bien['bien_id']; ?></h4>
            </div>
            <div class="info-block text-align-center">
                <h4>Fiche Commerciale</h4>
            </div>
            <div class="info-block text-align-right">
                <h4></h4>
            </div>
        </div>
        <div class="p-10">
            <div class="long-divider">
            </div>
            <div class="honoraire-block">
                <h6>*Honoraires à la charge du <?php echo $bien['bien_charge_de']; ?></h6>
            </div>
        </div>
        <div class="pictures-block">
            <?php
            $gazImageSrc = "";
            $energieImageSrc = "";
            $energieValeur = $energie['energie_dpe_valeur'];
            $gazValeur = $energie['energie_gaz_serre'];

            if($energieValeur == "A"){
                $energieImageSrc = "/uploads/diagnostic/EnergieA.png";
            }elseif($energieValeur == "B"){
                $energieImageSrc = "/uploads/diagnostic/EnergieB.png";
            }elseif($energieValeur == "C"){
                $energieImageSrc = "/uploads/diagnostic/EnergieC.png";
            }elseif($energieValeur == "D"){
                $energieImageSrc = "/uploads/diagnostic/EnergieD.png";
            }elseif($energieValeur == "E"){
                $energieImageSrc = "/uploads/diagnostic/EnergieE.png";
            }elseif($energieValeur == "F"){
                $energieImageSrc = "/uploads/diagnostic/EnergieF.png";
            }else{
                $energieImageSrc = "/uploads/diagnostic/EnergieG.png";
            }
            if($gazValeur == "A"){
                $gazImageSrc = "/uploads/diagnostic/GazA.png";
            }elseif($gazValeur == "B"){
                $gazImageSrc = "/uploads/diagnostic/GazB.png";
            }elseif($gazValeur == "C"){
                $gazImageSrc = "/uploads/diagnostic/GazC.png";
            }elseif($gazValeur == "D"){
                $gazImageSrc = "/uploads/diagnostic/GazD.png";
            }elseif($gazValeur == "E"){
                $gazImageSrc = "/uploads/diagnostic/GazE.png";
            }elseif($gazValeur == "F"){
                $gazImageSrc = "/uploads/diagnostic/GazF.png";
            }else{
                $gazImageSrc = "/uploads/diagnostic/GazG.png";
            }
            ?>
            <div class="">
                <div class="info-block text-align-left">
                    <?php
                    $i=0;
                    $photos = array();

                    foreach ($medias as $key => $value):
                    if($value['media_type'] == "image"){
                        $i++;
                        $photos[] = $value['media_valeur'];
                    if($i == 1){
                        ?>
                    <img class="main-picture" src="<?="https://solusoft.espaceo.net/uploads/biens/".$value['media_valeur']; ?>">
                        <?php
                    }
                    }
                        ?>
                    <?php endforeach; ?>
                </div>
                <div id="energie-bl" class="info-block text-align-center">
                    <img class="diag-pic" src="<?="https://solusoft.espaceo.net".$energieImageSrc; ?>">
                </div>
                <div id="ges-bl" class="info-block text-align-center" style="margin-top:-10px">
                    <img class="diag-pic" src="<?="https://solusoft.espaceo.net".$gazImageSrc; ?>">
                </div>
            </div>
        </div>
    </div>

    <div class="description-container">
        <div class="title-block">
            <div class="info-block text-align-left">
                <h4><?php echo $bien['bien_type']; ?> à vendre</h4>
            </div>
            <div class="info-block text-align-center">
                <h4><?php echo $local['ville_name']; ?></h4>
            </div>
            <div class="info-block text-align-center">
                <h4><?php echo $bien['bien_prix_fai']; ?> €</h4>
            </div>
        </div>
        <div class="description-content">
            <p><?php echo $bien['bien_description']; ?></p>
        </div>
    </div>





    <div class="main-info-container padding-bottom">
        <div class="extra-info-style" id="testu">
            <table class="extra-table">
                <tr class="first-row">
                    <td>
                        <div class="extra-info-block text-align-center">
                            <h4>INTERIEUR</h4>
                        </div>
                    </td>
                    <td>
                        <div class="extra-info-block text-align-center">
                            <h4>EXTERIEUR</h4>
                        </div>
                    </td>
                    <td>
                        <div class="extra-info-block text-align-center">
                            <h4>ASPECT FINANCIER</h4>
                        </div>
                    </td>
                    <td>
                        <div class="extra-info-block text-align-center">
                            <h4>AUTRE CRITERES</h4>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Niveau :<?php echo $inter['inter_niveaux']; ?></td>
                    <td>Année de construction :<?php echo $exter['exter_annee_construction']; ?></td>
                    <td>Taxe foncière :<?php echo $energie['energie_taxe_fonciere']; ?></td>
                    <td>Type de chauffage :<?php echo $energie['energie_type_chauffage']; ?></td>
                </tr>
                <tr class="odd">
                    <td>Surface utile :<?php echo $surface['surface_utile']; ?></td>
                    <td>Type de construction :<?php echo $exter['exter_type_construction']; ?></td>
                    <td>Coût chauffage :<?php echo $energie['energie_charges_chauffage']; ?></td>
                    <td>Mode de chauffage :<?php echo $energie['energie_mode_chauffage']; ?></td>
                </tr>
                <tr>
                    <td>Nbre pièces :<?php echo $inter['inter_pieces']; ?></td>
                    <td>Fenêtres :<?php echo $exter['exter_fenetres']; ?></td>
                    <td>Coût electricité :<?php echo $energie['energie_charges_electriques']; ?></td>
                    <td>Energie :<?php echo $energie['energie_valeur_energetique']; ?></td>
                </tr>
                <tr  class="odd">
                    <td>Chambres :<?php echo $inter['inter_chambres']; ?></td>
                    <td>Volets :<?php echo $exter['exter_volets']; ?></td>
                    <td>Coût eau :<?php echo $energie['energie_charges_eau']; ?></td>
                    <td>Eau chaude :<?php echo $energie['energie_eau_chaude']; ?></td>
                </tr>
                <tr>
                    <td>Dont chambre(s)RDC :<?php echo $inter['inter_chambre_rdc']; ?></td>
                    <td>Toiture :<?php echo $exter['exter_toiture']; ?></td>
                    <td>Charges de copropriété :<?php echo $energie['energie_charges_copropriete']; ?></td>
                    <td>Cheminée/poêle :<?php echo $energie['energie_cheminee_poele']; ?></td>
                </tr>
                <tr  class="odd">
                    <td>Salle(s) de bains :<?php echo $inter['inter_salle_bain']; ?></td>
                    <td>Tout à l'égout :<?php echo $exter['exter_egout']; ?></td>
                    <td>Total Coût annuel :<?php echo $energie['energie_cout_annuel']; ?></td>
                    <td>Tout à l'égout :<?php echo $exter['exter_egout']; ?></td>
                </tr>
                <tr>
                    <td>Salle(S) d'eau :<?php echo $inter['inter_salle_eau']; ?></td>
                    <td>Garage :<?php echo $exter['exter_garage']; ?></td>
                    <td></td>
                    <td>Surface carrez :<?php echo $surface['surface_carrez']; ?></td>
                </tr>
                <tr  class="odd">
                    <td>Type de cuisine :<?php echo $inter['inter_type_cuisine']; ?></td>
                    <td>Parking :<?php echo $exter['exter_parking']; ?></td>
                    <td></td>
                    <td>Étage :<?php echo $local['local_etage']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Surface Extérieure :<?php echo $bien['bien_terrain']; ?></td>
                </tr>
            </table>
        </div>

    </div>

    <div class="description-container">
        <div class="description-title text-align-center">
            <h4>LE BIEN EN 360°</h4>
        </div>
        <div class="description-content">
            <div id="map"></div>
            <div class="poi">
                <div class="kq_accordion ml-2 mt-2">
                    <dl>
                    </dl>
                </div>
            </div>
        </div>
    </div>


    <div class="ville-block">
        <div id="id_referent_block" class="referent-ville">
            <div class="description-title text-align-center">
                <h3 style="font-size:8px">Les informations dans la ville</h3>
            </div>
            <div class="ref-block">
                <table class="ville">
                    <tr>
                        <td class="first">
                            <img src="https://solusoft.espaceo.net/uploads/documents/fiche-commerciale/icon1.png">
                        </td>
                        <td class="second">
                            <strong>Si on sortait ?</strong>
                            <p>Bar (<span id="dis-bar"></span>)Parc, Jardin et Square (<span id="dis-parc"></span>), Terrain et Salle de sport(<span id="dis-sport"></span>)</p>
                        </td>
                        <td class="third">
                            <img src="https://solusoft.espaceo.net/uploads/documents/fiche-commerciale/bar1.png">
                        </td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="https://solusoft.espaceo.net/uploads/documents/fiche-commerciale/icon2.png">
                        </td>
                        <td class="second">
                            <strong>N'oubliez pas de faire les courses</strong>
                            <p>Banque (<span id="dis-banque"></span>)Boucherie (<span id="dis-boucherie"></span>) Boulangerie (<span id="dis-boulangerie"><?= $data['poiCounts']['Commerce et Service']['Boulangerie']?></span>) Bureau de poste (<span id="dis-bureau"></span>) Supérette (<span id="dis-superette"></span>) Supermarché et Hypermarché (<span id="dis-supermarche"></span>) </p>
                        </td>
                        <td class="third">
                            <img src="https://solusoft.espaceo.net/uploads/documents/fiche-commerciale/bar2.png">
                        </td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="https://solusoft.espaceo.net/uploads/documents/fiche-commerciale/icon3.png">
                        </td>
                        <td class="second">
                            <strong>C'est l'heure d'aller à l'école</strong>
                            <p>Collège (<span id="dis-college"></span>) Ecole maternelle (<span id="dis-maternelle"></span>) Ecole primaire (<span id="dis-primaire"></span>) Ecole Lycée (<span id="dis-lycee"></span>) Crèche (<span id="dis-creche"></span>)</p>
                        </td>
                        <td class="third">
                            <img src="https://solusoft.espaceo.net/uploads/documents/fiche-commerciale/bar3.png">
                        </td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="https://solusoft.espaceo.net/uploads/documents/fiche-commerciale/icon4.png">
                        </td>
                        <td class="second">
                            <strong>Et au niveau des transports ?</strong>
                            <p>Parking (<span id="dis-parking"></span>)</p>
                        </td>
                        <td class="third">
                            <img src="https://solusoft.espaceo.net/uploads/documents/fiche-commerciale/bar4.png">
                        </td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="https://solusoft.espaceo.net/uploads/documents/fiche-commerciale/icon5.png">
                        </td>
                        <td class="second">
                            <strong>Restez en bonne santé</strong>
                            <p>Medecin généraliste (<span id="dis-generaliste"></span>) Medecin spécialiste (<span id="dis-specialiste"></span>) Pharmacie (<span id="dis-pharmacie"></span>)</p>
                        </td>
                        <td class="third">
                            <img src="https://solusoft.espaceo.net/uploads/documents/fiche-commerciale/bar5.png">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="info-ville">
            <div class="description-title text-align-center">
                <h3 style="font-size:8px">les informations sur <?= $local['ville_name']; ?></h3>
            </div>
            <div class="info-ville-img">
                <div class="info-ville-habit">
                    <h5>Habitants : <span id="Habitants-val"></span></h5><span class="space"></span><h5>Revenus Moyen: <span id="Revenus-val"></span></h5>
                </div>
                <div class="info-ville-btns">
                    <button class="btn btn-outline-info mr-1 mb-1 waves-effect waves-light">Propriétaires</button>
                    <button class="btn btn-outline-light mr-1 mb-1 waves-effect waves-light">Locataires</button>
                </div>
                <div class="centered-container">
                    <div class="chart-block">
                        <div id="avg-session-chart"></div>
                    </div>
                    <div class="pro-loc">
                        <span class="pro-blue"></span><p> <span id="Proprietaires-val"></span> Propriétaires</p>
                        <span class="loc-grey"></span><p> <span id="Locataires-val"></span> Locataires</p>
                    </div>
                </div>
                <div class="pro-loc">
                    <p>Âge Moyenne = <span id="Age-val"></span></p>
                    <span class="dividerV"></span>
                    <p>Chômage = <span id="Chomage-val"></span></p>
                </div>
            </div>
        </div>
    </div>



</div>

<div class="page-one-container">
    <?php if(!empty($photos)){ ?>
    <div class="description-container images">
        <div class="description-title text-align-center">
            <h3>Planche photos</h3>
        </div>
        <div class="description-image">
                <?php for($i=0; $i<count($photos); $i+=2){ ?>
            <div class="imprimedimg">
                    <?php  if(isset($photos[$i])){ ?>
                <img src="<?="https://solusoft.espaceo.net/uploads/biens/".$photos[$i]; ?>">
                <?php } ?>
                    <?php if(isset($photos[$i+1])){ ?>
                <img src="<?="https://solusoft.espaceo.net/uploads/biens/".$photos[$i+1]; ?>">
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"
        integrity="sha512-VGxuOMLdTe8EmBucQ5vYNoYDTGijqUsStF6eM7P3vA/cM1pqOwSBv/uxw94PhhJJn795NlOeKBkECQZ1gIzp6A=="
        crossorigin="anonymous">
</script>
<script src="https://solusoft.espaceo.net/web/assets/js/jquery.js"></script>
<script src="https://solusoft.espaceo.net/web/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://solusoft.espaceo.net/web/assets/js/modernizr-custom.js" type="text/javascript"></script>
<!-- BEGIN: Vendor JS-->
<script src="https://solusoft.espaceo.net/web/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="https://solusoft.espaceo.net/web/assets/js/js_commun.js" type="text/javascript"></script>
<script src="https://solusoft.espaceo.net/web/assets/js/gestion_zoom_commun.js" type="text/javascript"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
<script src="https://solusoft.espaceo.net/web/assets/js/index.js" type="text/javascript"></script>
<script src="https://solusoft.espaceo.net/web/assets/js/elegance_checkbox.js" type="text/javascript"></script>
<script src="https://solusoft.espaceo.net/web/assets/js/main.js"></script>

<script type="text/javascript">
    var dossierIcon = 'assets'; //Répertoire des images de l'API
    var domaineURL = '';

    var Lat = <?= $local->latitude ?>;
    var Lng =  <?= $local->longitude ?>;

    var Adresse = '';

    var oCentre;
    var map;
    var tabMarker = [];
    var GoogleMapMarkerAdresse;
    var GoogleMapPolygone;
    var TabData = new Array();

    var TabDataMarker = new Array();

    var opaciteBtn = 0.7;

    var ObliqueMode = 0;

    var infowindow = null;

    var bAvecInfo = true;

    var idLastMarker = null;

    var geocoder = null;

    function graphInitialize(){
        var Proprietaires = <?= $sectorInfos->proprietaire_pourcent?>;
        var Locataires =<?= $sectorInfos->locataire_pourcent?>;
        var sessionChartoptions1 = {
            chart: {
                type: 'pie',
                height: 200,
                toolbar: {
                    show: false
                }
            },
            dataLabels: {
                enabled: false
            },
            series: [Locataires ,Proprietaires],
            legend: { show: false },
            labels: ['Propriétaires', 'Locataires'],
            stroke: { width: 0 },
            colors: [ '#dde4f2','#4da6fd'],
            fill: {
                colors: ['#dde4f2','#4da6fd']
            }
        }
        var sessionChart = new ApexCharts(
            document.querySelector("#avg-session-chart"),
            sessionChartoptions1
        );
        sessionChart.render();

    }

     function initialize() {
          graphInitialize();
          //initial map
          setTimeout(function(){
                let map = L.map('map', {
                    center: [Lat,Lng],
                    zoom: 15,
                    zoomControl: false,
                    fullscreenControl: false,
                    fullscreenControlOptions: {
                        title: "Afficher la carte en plein écran",
                        titleCancel: "Quitter le mode plein écran"
                    }
                });

                L.control.layers({
                    "plan": L.tileLayer(
                        'https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                            minZoom: 4,
                            maxZoom: 20,
                            maxNativeZoom: 19,
                            attribution: ''
                        }).addTo(map),
                }, {});
                L.marker([Lat,Lng]).addTo(map);

            }, 500);
          setTimeout(function(){
              scrine();
          }, 2000);




    }


    async function scrine(){
        let base64datamap ;
        let base64chart ;

        html2canvas(document.getElementById("map"),{
            allowTaint:false,
            useCORS: true,
        }).then(canvas => {
            canvas.toBlob((blob) => {
                const link = document.createElement("a");
                link.href = URL.createObjectURL(blob);
                /* convert blob to base64 */
                var reader = new FileReader();
                reader.readAsDataURL(blob);

                 reader.onloadend = function() {
                    base64datamap = reader.result;
                     html2canvas(document.getElementById("avg-session-chart"),{
                         allowTaint:false,
                         useCORS: true,
                     }).then(canvas => {
                         canvas.toBlob((blob) => {
                             const link = document.createElement("a");
                             link.href = URL.createObjectURL(blob);

                             /* convert blob to base64 */
                             var reader = new FileReader();
                             reader.readAsDataURL(blob);
                             reader.onloadend = function() {
                                 base64chart = reader.result;
                                   axios.post('/saveImage/<?= $bien['bien_id']; ?>', {
                                      base64datamap: base64datamap,
                                      base64chart: base64chart,
                                  })
                                      .then(() =>{
                                          window.location.href = '/download_Pdf/<?= $bien['bien_id']; ?>';
                                      })
                             }
                         });
                     });
                }
            });
        });





    }


    var adresseText = "<?php echo $local['ville_name']; ?>";
    $.ajax({
        type: "GET",
        url: "https://maps.googleapis.com/maps/api/geocode/json",
        data: { address :adresseText, key:"AIzaSyACMG67UMlUXsZYokICDxH40Eq0n2oCRi8" },
        success: function(data){
            if(data.status == "OK"){
                Lat = data.results[0].geometry.location.lat;
                Lng = data.results[0].geometry.location.lng;
                geocoder = new google.maps.Geocoder();
                oCentre = new google.maps.LatLng(Lat, Lng);
                // CrÃ©ation de l'objet MAP avec par dÃ©faut un zoom Ã  17 et le LngLat que vous dÃ©sirez

                var mapOptions = {
                    zoom: 16,
                    center: oCentre,
                    mapTypeControl: false,
                    zoomControl: false,
                    streetViewControl: true,
                    streetViewControlOptions: {
                        position: google.maps.ControlPosition.LEFT_TOP
                    }
                };

                //De base la vue Ã  45Â° est dÃ©sactivÃ©e pour la vue satellite
                map = new google.maps.Map(document.getElementById('map'), mapOptions);
                map.setTilt(0);

                //Marqueur pour le centre de la carte
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(Lat, Lng),
                    map: map
                });

                // enregistrement d'un Ã©couteur sur le changement de cadrage de la carte
                google.maps.event.addListener(map, 'idle', refresh_DATA);
                google.maps.event.addListener(map, 'center_changed', gestionCenter);

                //Div de contrÃ´le du zoom + et -
                var zoomControlDiv = document.createElement('div');
                //zoomControlDiv.style.marginLeft= '15px';
                gestionControlZoom(zoomControlDiv, map);
                zoomControlDiv.index = 1;
                map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomControlDiv);

                //Div de contrÃ´le des vues (satellite, plan et oblique)
                var viewControlDiv = document.createElement('div');
                //viewControlDiv.style.marginBottom = '5px';
                gestionControlView(viewControlDiv, map);
                viewControlDiv.index = 1;
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(viewControlDiv);
            }
        },
        failure: function(errMsg) {
            //alert(errMsg);
        }
    });


</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyACMG67UMlUXsZYokICDxH40Eq0n2oCRi8&callback=initialize" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
