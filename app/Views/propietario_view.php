<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php

                                                    use SebastianBergmann\Template\Template;

                                                    echo base_url() ?>/public/assets/css/styless.css" />
    <link rel="stylesheet" href="estilos.css">
    <title>Alquiler Apartamentos</title>
</head>
<?php
foreach ($propietario as $item) {
    $return = base_url() . '/public/totalApartments';
    $template = "
                <body class='body7'>
                <div class='profile-area1'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-md-12 d-flex justify-content-center'>
                                <div class='card'style='width: 30rem;'>
                                    <div class='img4'><img src='{$item->outstandingimage}' ></div>
                                    <div class='img5'><img src='{$item->image}'></div>
                                     <div class='main-text1'>
                                        <div class='card-body'>
                                            <h3>{$item->nameUser}</h3>
                                            <p class='card-text'>{$item->description}.</p>
                                            <a href='{$return}' class='btn btn-primary'>Retornar</a>
                                        </div>
                                     </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
    echo $template;
}

?>