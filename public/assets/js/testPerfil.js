function validarPerfil() {

    let profileName, profileCity, profileImage, descriptionLessor;


    profileName = document.getElementById("profileName").value;
    profileCity = document.getElementById("profileCity").value;
    profileImage = document.getElementById("profileImage").value;
    descriptionLessor = document.getElementById("descriptionLessor").value;
    urlregex = /^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/;

    if (profileName == "" || profileCity == "" || profileImage == "" || descriptionLessor == "") {
        document.querySelector('#formulario_mensaje ').classList.add('formulario_mensaje-activo');
        return false
    }
    else {
        document.querySelector('#formulario_mensaje ').classList.remove('formulario_mensaje-activo');
    }


    if (numero(profileName) || profileName.length > 20) {
        document.querySelector('#grupoNombre .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoNombre .input_error').classList.remove('input_error-activo');
    }


    if (numero(profileCity) || profileCity.length > 20) {
        document.querySelector('#grupoCiudad .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoCiudad .input_error').classList.remove('input_error-activo');
    }

    if (!urlregex.test(profileImage)) {
        document.querySelector('#grupoFoto .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoFoto .input_error').classList.remove('input_error-activo');
    }

    if (descriptionLessor.length > 10) {
        document.querySelector('#grupoReseña .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoReseña .input_error').classList.remove('input_error-activo');
    }


}

function numero(user) {
    let numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '$', '!', '#', '%', '&', '(', ')', '?', '¡', '¿', '<', '>', ';', '*', '+', '~', '[', ']', ':', '_', '-', '^', '/', '°', '|', '{', '}', '.', '`', '"', "'"]
    let sw = false;
    for (let i = 0; i < numbers.length; i++) {
        for (let j = 0; j < user.length; j++) {
            if (numbers[i] == user[j]) {
                sw = true;
                break;
            }
        }
        if (sw) {
            break
        }
    }
    return sw;
}
