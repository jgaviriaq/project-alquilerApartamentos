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

<body class="body3">
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
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="<?php echo base_url(); ?>/public/assets/img/avatar4.png" alt="">
                    <br>
                </div>
                <form class="col-12" onsubmit="return validarPerfil();" action="registrar1.php" method="pos">
                    <div class="mb-3" id="grupoNombre">
                        <div class="form-group">
                            <label class="icon">U</label>
                            <input type="text" name="profileName" id="profileName" class="form-control" placeholder="Ingrese el nombre">
                        </div>
                        <p class="input_error">El nombre solo debe tener letras y no ser mayor a 20 caracteres</p>
                    </div>

                    <div class="mb-3" id="grupoCiudad">
                        <div class="form-group">
                            <label class="icon"><i class="fas fa-building"></i></label>
                            <input type="text" name="profileCity" id="profileCity" class="form-control" placeholder="Ingrese Ciudad">
                        </div>
                        <p class="input_error">La ciudad solo debe tener letras y no ser mayor a 20 caracteres</p>
                    </div>

                    <div class="mb-3" id="grupoFoto">
                        <div class="form-group">
                            <label class="icon">a</i></label>
                            <input type="text" name="profileImage" id="profileImage" class="form-control" placeholder="Ingrese foto">
                        </div>
                        <p class="input_error">No es una URL válida</p>
                    </div>

                    <div class="mb-3" id="grupoReseña">
                        <span class="input-group-text mb-2" id="span1">Reseña Propietario</span>
                        <textarea class="form-control" name="descriptionLessor" id="descriptionLessor" rows="3"></textarea>
                        <p class="input_error">No debe superar más de 500 caracteres</p>

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