<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/assets/css/styless.css" />
    <title>Alquier Apartamentos</title>
</head>

<body class="body5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url() ?>/public"><i class="fas fa-home"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 " aria-current="page" href="<?php echo base_url() ?>/public/login" target="_blank">Log in</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 " aria-current="page" href="<?php echo base_url() ?>/public/regiterUser" target="_blank">Register user</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 " aria-current="page" href="<?php echo base_url() ?>/public/registerApartment" target="_blank">Register Apartment</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 " aria-current="page" href="<?php echo base_url() ?>/public/perfil" target="_blank">Perfil</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 " aria-current="page" href="<?php echo base_url() ?>/public/users" target="_blank">Users List</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 " aria-current="page" href="<?php echo base_url() ?>/public/apartments" target="_blank">Apartments List</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row justify-content-center">
        <div id="title" class="col-md-7">
            <h1 id="h1">Lista de Apartamentos</h1>
        </div>
        <?php
        foreach ($registerApartment as $item) {
            $template = "
    <div class='col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center mt-2 '>    
            <div class='card mt-2 me-2' style='width: 26rem; border-color:turquoise; border-width:2px'>
                <img src='{$item->outstandingimage}' class='card-img-top' alt='...'>
                <div class='card-body bg-dark'>
                    <div class='row g-0'>
                        <div class='col-md-6 d-flex justify-content-center'>
                            <img style='width: 12rem;' src='{$item->imagesapartment}' class='card-img-top m-0' alt='...'>
                        </div>
                         <div class='col-md-6 '>
                            <div class='row g-0'>    
                                <div class='col-md-12 listapartments'>
                                <h6 class='card-text d-flex justify-content-center mt-1'>Pais: {$item->countryapartment}</h6>
                                <h6 class='card-text d-flex justify-content-center '>Ciudad: {$item->cityapartment}</h6>
                                <h6 class='card-text d-flex justify-content-center '>Dirección: {$item->addressapartment}</h6>
                                <h6 class='card-text d-flex justify-content-center '>Habitaciones: {$item->numberrooms}</h6>
                                <h6 class='card-text d-flex justify-content-center '>Valor Noche: {$item->nightvalue}</h6>
                                <h6 class='card-text d-flex justify-content-center '><a href='{$item->urlgoogle}'  target='_blank'>Ubicación Google Maps</a></h6>
                            </div>
                          </div>
                        </div> 
                        <div class='card-body listapartments'>
                        <h6 class='card-title d-flex justify-content-center'>Descripción:</h6>
                        <p id='description' class='card-text'>{$item->descriptionapartment}</p>
                        <a href='#' class='btn btn-primary'>Go somewhere</a>
                      </div>
                    </div> 
                </div>
            </div>
      </div>     ";
            echo $template;
        }
        ?>

    