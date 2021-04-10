
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section1">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="<?php echo base_url(); ?>/public/assets/img/avatar1.jpg" alt="">
                </div>
                <form class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="icon">U</label>
                            <input type="text" name="usuario" class="form-control" placeholder="Ingrese nombre completo" required="required">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group" >
                            <label class="icon">@</label>
                            <input type="email" name="email" class="form-control" placeholder="Ingrese email" required="required">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="icon"><i class="fas fa-globe"></i></label>
                            <input type="text" name="country" class="form-control" placeholder="Ingrese el país" required="required">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="icon "><i class="fas fa-building"></i></label>
                            <input type="text" name="city" class="form-control" placeholder="Ingrese la ciudad" required="required">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="icon">w</label>
                            <input type="password" name="password" class="form-control" placeholder="Ingrese contraseña" required="required">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="btnRegistrar" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Registrar</button>
                    </div>
                </form>
            </div>
        </div>




</body>

</html>