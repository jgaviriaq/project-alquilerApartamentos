<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/assets/css/styless.css" />
    <title>Alquiler Apartamentos</title>
</head>

<body class="body2">
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
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal-dialog modal-lg text-center">
        <div class="col-sm-12 main-sectionApartment">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="<?php echo base_url(); ?>/public/assets/img/apartment.png" alt="">
                </div>
                <form class="col-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-building"></i></span>
                                        <input type="text" name="cityApartment" class="form-control" placeholder="Digite Ciudad" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                        <input type="text" name="countryApartment" class="form-control" placeholder="Digite País" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                        <input type="text" name="countryApartment" class="form-control" placeholder="Digite dirección" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        <input type="text" name="ubicacionApartment" class="form-control" placeholder="Ubicación Google" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-bed"></i></span>
                                        <input type="text" name="numeroHabitacionesApartment" class="form-control" placeholder="Cantidad Habitaciones" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="far fa-images"></i></span>
                                        <input type="text" name="iamgenesApartment" class="form-control" placeholder="Imagenes Apartamento" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" ><i class="fas fa-camera"></i></span>
                                        <input type="text" name="imagenDestacadaApartment" class="form-control" placeholder="Imagen Destacada" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-moon"></i></span>
                                        <input type="text" name="valorNocheApartment" class="form-control" placeholder="Valor Noche" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <div class="form-groupApartment">
                                    <div>
                                        <span class="input-group-text mb-1 " id="span"> <i class="fas fa-home"></i>Reseña del Apartamento</span>
                                        <textarea class="form-control" name="description" cols="50" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="btnRegistrar" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>