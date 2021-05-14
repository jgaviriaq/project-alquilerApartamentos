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
<div class="container-fluid">
    <div class="row justify-content-center">
        <div id="title" class="col-md-7">
            <h1 id="h1">Lista de Apartamentos</h1>
        </div>
        <?php
        for($i=0;$i<count($registerApartment);$i++) {
            $route = base_url() . "/public/deleteApartment?id={$registerApartment[$i]->id}";
            $update = base_url() . "/public/updateApartment?id={$registerApartment[$i]->id}";
            $template = "
    <div class='col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center mt-2'>    
            <div class='card mt-2 me-2' style='width:27rem; border-color:turquoise; border-width:2px'>
                <img src='{$registerApartment[$i]->outstandingimage}' class='card-img-top' alt='...'>
                <div class='card-body bg-dark '>
                    <div class='row g-0'>
                        <div class='col-md-6 col-sm-12 col-12 d-flex justify-content-center'>
                            <img style='width:11rem;' src='{$registerApartment[$i]->imagesapartment}' class='card-img-top p-2' alt='...'>
                        </div>
                         <div class='col-md-6 '>
                            <div class='row g-0'>    
                              <div class='col-md-12 listapartments'>
                                <h6 class='card-text d-flex justify-content-center mt-1'>Pais: {$registerApartment[$i]->countryapartment}</h6>
                                <h6 class='card-text d-flex justify-content-center '>Ciudad: {$registerApartment[$i]->cityapartment}</h6>
                                <h6 class='card-text d-flex justify-content-center '>Dirección: {$registerApartment[$i]->addressapartment}</h6>
                                <h6 class='card-text d-flex justify-content-center '>Habitaciones: {$registerApartment[$i]->numberrooms}</h6>
                                <h6 class='card-text d-flex justify-content-center '>Valor Noche: {$registerApartment[$i]->nightvalue}</h6>
                                <h6 class='card-text d-flex justify-content-center '><a href='{$registerApartment[$i]->urlgoogle}'  target='_blank'>Ubicación Google Maps</a></h6>
                             </div>
                           </div>
                        </div> 
                        <div class='card-body listapartments'>
                            <h6 class='card-title d-flex justify-content-center'>Descripción:</h6>
                            <p id='description' class='card-text'>{$registerApartment[$i]->descriptionapartment}</p>
                             <div class='row'> 
                               <div class= 'col-md-6 d-flex justify-content-center mb-1' >     
                                    <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#editar{$registerApartment[$i]->id}'>
                                        Edit
                                    </button>
                               </div> 
                                <div class='col-md-6 d-flex justify-content-center' >   
                                    <a href='{$route}' class='btn btn-danger'>Delete</a>
                                </div> 
                             </div>  
                      </div>
                    </div> 
                </div>
            </div>      
      </div>    
      <div class='modal fade ' id='editar{$registerApartment[$i]->id}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
         <div class='modal-dialog'>
            <div class='modal-content cont bg-dark text-white'>
                    <div class='modal-header'>
                        <h5 class='modal-title ' id='exampleModalLabel'>Date Apartment</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
            <div class='modal-body'>
                    <form onsubmit='return validarApartamento1($i);' action='{$update}'  method='POST'>
                            <div id='grupocountry'>
                                <div class='form-groupApartment'>
                                    <div class='input-group has-validation'>
                                        <span class='input-group-text'><i class='fas fa-globe'></i></span>
                                        <input type='text' name='countryApartment' id='countryApartment{$i}' class='form-control' value='{$registerApartment[$i]->countryapartment}'>
                                    </div>
                                    <p class='input_error'>El país solo debe tener letras y no ser mayor a 15 caracteres</p>
                                </div>
                            </div>

                            <div class='form-group mt-3' id='grupocity'>
                                <div class='form-groupApartment'>
                                    <div class='input-group has-validation'>
                                        <span class='input-group-text' id='inputGroupPrepend'><i class='fas fa-building'></i></span>
                                        <input type='text' name='cityApartment' id='cityApartment{$i}' value='{$registerApartment[$i]->cityapartment}' class='form-control' >
                                    </div>
                                    <p class='input_error'>La ciudad solo debe tener letras y no ser mayor a 20 caracteres</p>
                                </div>
                            </div>
                        
                            
                            <div class='mt-3' id='grupoDireccion'>
                                <div class='form-groupApartment'>
                                    <div class='input-group has-validation'>
                                        <span class='input-group-text'><i class='fas fa-map-marker'></i></span>
                                        <input type='text' name='addressApartment' id='addressApartment{$i}'value='{$registerApartment[$i]->addressapartment}' class='form-control'>
                                    </div>
                                    <p class='input_error'>La dirección no debe tener mas de 20 caracteres</p>
                                </div>
                            </div>
                       

                            <div class='mt-3' id='grupoHabitaciones'>
                                <div class='form-groupApartment'>
                                    <div class='input-group has-validation'>
                                        <span class='input-group-text'><i class='fas fa-bed'></i></span>
                                        <input type='text' name='RoomsApartment' id='numberRoomsApartment{$i}' value='{$registerApartment[$i]->numberrooms}' class='form-control'>
                                    </div>
                                    <p class='input_error'>Solo digite numeros, los caracteres no pueden ser mayor a 10 </p>
                                </div>
                            </div>

                            <div class='mt-3' id='grupoValorNoche'>
                                <div class='form-groupApartment'>
                                    <div class='input-group has-validation'>
                                        <span class='input-group-text' ><i class='fas fa-moon'></i></span>
                                        <input  type='text' name='nightValueApartment' id='nightValueApartment{$i}'  value='{$registerApartment[$i]->nightvalue}' class='form-control '>
                                    </div>
                                    <p class='input_error'>Solo digite numeros, los caracteres no pueden ser mayor a 10</p>
                                </div>
                            </div>
                        
                            <div class='mt-3' id='grupoImagenes'>
                                <div class='form-groupApartment'>
                                    <div class='input-group has-validation'>
                                      <span class='input-group-text'><i class='far fa-images'></i></span>
                                        <input  type='text' name='outstandingimage' id='outstandingimage{$i}'  value='{$registerApartment[$i]->outstandingimage}' class='form-control '>
                                    </div>
                                    <p class='input_error'>No es un formato de URL</p>
                                </div>
                            </div> 
                            
                              <div class='mt-3' id='grupoImagen'>
                                <div class='form-groupApartment'>
                                    <div class='input-group has-validation'>
                                      <span class='input-group-text'><i class='far fa-images'></i></span>
                                        <input  type='text' name='imagesapartment' id='imagesapartment{$i}'  value='{$registerApartment[$i]->imagesapartment}' class='form-control '>
                                    </div>
                                    <p class='input_error'>No es un formato de URL</p>
                                </div>
                            </div> 


                            <div class='mt-3' id='grupoReseñaApartamento'>
                                <div class='form-groupApartment'>
                                    <div>
                                        <span class='input-group-text mb-1 ' id='span'> <i class='fas fa-home'></i>Reseña del Apartamento</span>
                                        <textarea class='form-control' name='descriptionApartment' id='descriptionApartment{$i}' cols='50' rows='3' <p>{$registerApartment[$i]->descriptionapartment}</textarea>
                                    </div>
                                    <p class='input_error'>No puede escribir mas de 500 caracteres</p>
                                </div>
                            </div>

                            <div class='formulario_mensaje mt-3' id='formulario_mensaje{$i}'>
                                 <p><i class='fas fa-exclamation-triangle'></i> <b>Error:</b> Digite todos los campos</p>
                             </div>

                             <div class= 'mt-2 mb-2'>
                                <button type='submit' name='btnRegistrar' class='btn btn-info'><i class='fas fa-sign-in-alt'></i> Enviar</button>
                             </div>
                 </form>
            </div>
        </div>
     </div>
  </div> ";
            echo $template;
        }
        ?>
   </div>
 </div>;