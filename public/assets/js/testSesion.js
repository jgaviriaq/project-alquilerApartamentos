function validar() {
    
    let email, password, expresion_correo;

    email = document.getElementById("email").value;
    password = document.getElementById("password").value;
    expresion_correo = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.+[a-zA-Z0-9-.]+$/;

    if (email == "" || password == "") {
        document.querySelector('#formulario_mensaje ').classList.add('formulario_mensaje-activo');
        return false
    }
    else {
        document.querySelector('#formulario_mensaje ').classList.remove('formulario_mensaje-activo');
    }

    if (!expresion_correo.test(email)) {
        document.querySelector('#grupo_email .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupo_email .input_error').classList.remove('input_error-activo');
    }


    if (password.length < 9 || password.length > 12) {
        document.querySelector('#grupo_password .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupo_email .input_error').classList.remove('input_error-activo');
    }

}

