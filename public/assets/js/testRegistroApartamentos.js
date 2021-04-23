
function validarApartamento() {
    let cityApartment, countryApartment, addressApartment, ubicacionApartment, numberRoomsApartment, imagesApartment, featuredImagesApartment, nightValueApartment, descriptionApartment, urlregex;

    cityApartment = document.getElementById("cityApartment").value;
    countryApartment = document.getElementById("countryApartment").value;
    addressApartment = document.getElementById("addressApartment").value;
    ubicacionApartment = document.getElementById("ubicacionApartment").value;
    numberRoomsApartment = document.getElementById("numberRoomsApartment").value;
    imagesApartment = document.getElementById("imagesApartment").value;
    featuredImagesApartment = document.getElementById("featuredImagesApartment").value;
    nightValueApartment = document.getElementById("nightValueApartment").value;
    descriptionApartment = document.getElementById("descriptionApartment").value;
    urlregex = /^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/;

    if (cityApartment == "" || countryApartment == "" || addressApartment == "" || ubicacionApartment == "" || numberRoomsApartment == "" || imagesApartment == "" || featuredImagesApartment == "" || nightValueApartment == "" || descriptionApartment == "") {
        document.querySelector('#formulario_mensaje ').classList.add('formulario_mensaje-activo');
        return false
    }
    else {
        document.querySelector('#formulario_mensaje ').classList.remove('formulario_mensaje-activo');
    }


    if (numero(cityApartment) || cityApartment.length > 20) {
        document.querySelector('#grupocity .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupocity .input_error').classList.remove('input_error-activo');
    }


    if (numero(countryApartment) || countryApartment.length > 15) {
        document.querySelector('#grupocountry .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupocountry .input_error').classList.remove('input_error-activo');
    }


    if (addressApartment.length > 20) {
        document.querySelector('#grupoDireccion .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoDireccion .input_error').classList.remove('input_error-activo');
    }


    if (!urlregex.test(ubicacionApartment)) {
        document.querySelector('#grupoUbicacion .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoUbicacion .input_error').classList.remove('input_error-activo');
    }

    if (letras(numberRoomsApartment) || numberRoomsApartment.length > 10) {
        document.querySelector('#grupoHabitaciones .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoHabitaciones .input_error').classList.remove('input_error-activo');
    }


    if (!urlregex.test(imagesApartment)) {
        document.querySelector('#grupoImagenes .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoImagenes .input_error').classList.remove('input_error-activo');
    }


    if (!urlregex.test(featuredImagesApartment)) {
        document.querySelector('#grupoImagenDestacada .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoImagenDestacada .input_error').classList.remove('input_error-activo');
    }


    if (letras(nightValueApartment) || nightValueApartment.length > 10) {
        document.querySelector('#grupoValorNoche .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoValorNoche .input_error').classList.remove('input_error-activo');
    }


    if (descriptionApartment.length > 500) {
        document.querySelector('#grupoReseñaApartamento .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoReseñaApartamento .input_error').classList.remove('input_error-activo');
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

function letras(user) {
    let numbers = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','v','w','x','y','z','$', '!', '#', '%', '&', '(', ')', '?', '¡', '¿', '<', '>', ';', '*', '+', '~', '[', ']', ':', '_', '-', '^', '/', '°', '|', '{', '}', '.', '`', '"', "'"]
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