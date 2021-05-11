<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section1">
        <div class="modal-content">
            <div class="col-12 user-img">
                <img src="<?php echo base_url(); ?>/public/assets/img/avatar1.jpg" alt="">
            </div>
            <form name="formulario" action="<?php echo base_Url(); ?>/public/listUsers" method="POST" class="col-12" onsubmit="return validarUser();">
                <div class="mb-3" id="grupouser">
                    <div class="form-group">
                        <label class="icon">U</label>
                        <input type="text" name="user" id="user" class="form-control" placeholder="Ingrese nombre completo">
                        <p class="input_error">El nombre solo debe tener letras y no ser mayor a 20 caracteres</p>
                    </div>
                </div>
                <div class="mb-3" id="grupoemailuser">
                    <div class="form-group">
                        <label class="icon">@</label>
                        <input type="text" name="emailuser" id="emailuser" class="form-control" placeholder="Ingrese email">
                        <p class="input_error">El formato de correo es incorrecto</p>
                    </div>
                </div>
                <div class="mb-3" id="grupocountryuser">
                    <div class="form-group">
                        <label class="icon"><i class="fas fa-globe"></i></label>
                        <input type="text" name="countryuser" id="countryuser" class="form-control" placeholder="Ingrese el país">
                        <p class="input_error">El pais solo debe tener letras y no ser mayor a 20 caracteres</p>
                    </div>
                </div>
                <div class="mb-3" id="grupocityuser">
                    <div class="form-group">
                        <label class="icon "><i class="fas fa-building"></i></label>
                        <input type="text" name="cityuser" id="cityuser" class="form-control" placeholder="Ingrese la ciudad">
                        <p class="input_error">La ciudad solo debe tener letras y no ser mayor a 20 caracteres</p>
                    </div>
                </div>
                <div class="mb-3" id="grupopassworduser">
                    <div class="form-group">
                        <label class="icon">w</label>
                        <input type="password" name="passworduser" id="passworduser" class="form-control" placeholder="Ingrese contraseña">
                        <p class="input_error">La contraseña debe ser mayor a 8 y menor a 12 caracteres</p>
                    </div>
                </div>
                <div class="mb-3" id="gruporoluser">
                    <div class="form-group">
                       
                        <select class="form-select" id="roluser" name="roluser" aria-label="Default select example">
                            <option selected> Seleccione Tipo Rol</option>
                            <option value="1">Propietario</option>
                            <option value="2">Invitado</option>
                        </select>
                    </div>
                </div>

                <div class="formulario_mensaje" id="formulario_mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Digite todos los campos</p>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Registrar</button>
                </div>
            </form>
        </div>
    </div>