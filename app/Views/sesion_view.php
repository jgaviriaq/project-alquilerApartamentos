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

<body class="body1">

    <div class="modal-dialog text-center">
        <div class="col-sm-8 col-md-8 col-lg-10 main-section">
            <div class="modal-content ">
                <div class="col-12 user-img">
                    <img src="<?php echo base_url(); ?>/public/assets/img/login2.jpg" alt="">
                </div>
                <form class="col-12" onsubmit="return validar();" action="<?php echo base_Url() . '/public/sesion' ?>" method="POST">
                    <div class="mb-3" id="grupo_email">
                        <div class="form-group">
                            <label class="icon">U</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese el email">
                        </div>
                        <p class="input_error">El correo solo puede contener letras, números, puntos, y guiones</p>
                    </div>
                    <div class="mb-3" id="grupo_password">
                        <div class="form-group">
                            <label class="icon">w</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <p class="input_error">La contraseña debe ser mayor a 8 digitos y menor a 12</p>
                    </div>

                    <div class="formulario_mensaje" id="formulario_mensaje">
                        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Digite todos los campos</p>
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="btnRegistrar" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
                    </div>
                    <a id="link" href="<?php echo base_url(); ?>/public/regiterUser">Registrarse</a>
                </form>
            </div>
        </div>
    </div>