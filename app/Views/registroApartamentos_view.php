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
            <a class="navbar-brand" href="<?php echo base_url() ?>/public/home"><i class="fas fa-home"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 " aria-current="page" href="<?php echo base_url() ?>/public/login">Log in</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 " aria-current="page" href="<?php echo base_url() ?>/public/registerApartment">Register Apartment</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 " aria-current="page" href="<?php echo base_url() ?>/public/perfil">Perfil</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 " aria-current="page" href="<?php echo base_url() ?>/public/apartments">Apartments List</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 " aria-current="page" href="<?php echo base_url() ?>/public/salir">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal-dialog modal-lg text-center">
        <div class="col-sm-12 main-sectionApartment">
            <div class="modal-content">
                <div class="col-12 user-img mt-0">
                    <img src="<?php echo base_url(); ?>/public/assets/img/apartment.png" alt="">
                </div>
                <form id="formulario" class="col-12" onsubmit="return validarApartamento();" action="<?php echo base_Url(); ?>/public/listApartments" method="POST">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3" id="grupocity">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-building"></i></span>
                                        <input type="text" name="cityApartment" id="cityApartment" class="form-control" placeholder="Digite Ciudad">
                                    </div>
                                    <p class="input_error">La ciudad solo debe tener letras y no ser mayor a 20 caracteres</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3" id="grupocountry">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                        <input type="text" name="countryApartment" id="countryApartment" class="form-control" placeholder="Digite País">
                                    </div>
                                    <p class="input_error">El país solo debe tener letras y no ser mayor a 15 caracteres</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3" id="grupoDireccion">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                        <input type="text" name="addressApartment" id="addressApartment" class="form-control" placeholder="Digite dirección">
                                    </div>
                                    <p class="input_error">La dirección no debe tener mas de 20 caracteres</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3" id="grupoUbicacion">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        <input type="text" name="ubicacionApartment" id="ubicacionApartment" class="form-control" placeholder="Ubicación Google">
                                    </div>
                                    <p class="input_error"> No corresponde a una dirección URL válida</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3" id="grupoHabitaciones">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-bed"></i></span>
                                        <input type="text" name="numberRoomsApartment" id="numberRoomsApartment" class="form-control" placeholder="Num Cuartos">
                                    </div>
                                    <p class="input_error">Solo digite numeros, los caracteres no pueden ser mayor a 10 </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3" id="grupoImagenes">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="far fa-images"></i></span>
                                        <input type="text" name="imagesApartment" id="imagesApartment" class="form-control" placeholder="Imagen Apart.">
                                        <p class="input_error"> No corresponde a una dirección URL válida</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3" id="grupoImagenDestacada">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-camera"></i></span>
                                        <input type="text" name="featuredImagesApartment" id="featuredImagesApartment" class="form-control" placeholder="Imagen Principal">
                                    </div>
                                    <p class="input_error"> No corresponde a una dirección URL válida</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3" id="grupoValorNoche">
                                <div class="form-groupApartment">
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-moon"></i></span>
                                        <input type="text" name="nightValueApartment" id="nightValueApartment" class="form-control " placeholder="Valor Noche">
                                    </div>
                                    <p class="input_error">Solo digite numeros, los caracteres no pueden ser mayor a 10</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3" id="grupoReseñaApartamento">
                                <div class="form-groupApartment">
                                    <div>
                                        <span class="input-group-text mb-1 " id="span"> <i class="fas fa-home"></i>Reseña del Apartamento</span>
                                        <textarea class="form-control" name="descriptionApartment" id="descriptionApartment" cols="50" rows="5"></textarea>
                                    </div>
                                    <p class="input_error">No puede escribir mas de 500 caracteres</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="formulario_mensaje" id="formulario_mensaje">
                        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Digite todos los campos</p>
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="btnRegistrar" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>