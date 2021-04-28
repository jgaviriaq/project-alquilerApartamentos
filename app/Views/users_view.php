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

<body class="body4">
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

    <div class="row">
    <h1 id="h1">Listado de Usuarios</h1>
        <?php
        foreach ($registeruser as $item) {
            $template = "
    <div class='col-12 col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center mt-4 '>
            <div class='card border-primary bg-dark' style='width: 15rem;'>
            <ul class='list-group list-group-flush text'>
                <li class='list-group-item text-white bg-dark'>User : {$item->nameUser}</li>
                <li class='list-group-item text-white bg-dark'> Email : {$item->emailUser}</li>
                <li class='list-group-item text-white bg-dark'>Country : {$item->countryUser}</li>
                <li class='list-group-item text-white bg-dark'>City : {$item->cityUser}</li>
                <li class='list-group-item text-white bg-dark'>Rol : {$item->rol} </li>
            </ul>
        <div class='row'>
                <div class='col-12 col-md-6 mt-2 mb-1 d-flex justify-content-center'>
                    <button type='button' class='btn btn-warning ' data-toggle='modal' data-target=''>Edit</button>
                </div>
                <div class='col-12 col-md-6 mt-2 mb-1 d-flex justify-content-center'>
                <a href='' class='btn btn-danger'>Delete</a>
                </div>
            </div>    
       </div>   
    </div>";
            echo $template;
        }
        ?>