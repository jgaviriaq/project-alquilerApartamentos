
function validarApartamento1() {
    let cityApartment, countryApartment, addressApartment, ubicacionApartment, numberRoomsApartment, imagesApartment, featuredImagesApartment, nightValueApartment, descriptionApartment, urlregex;
    
    countryApartment = document.getElementById("countryApartment").value;
    cityApartment = document.getElementById("cityApartment").value;
    addressApartment = document.getElementById("addressApartment").value;
    numberRoomsApartment = document.getElementById("numberRoomsApartment").value;
    nightValueApartment = document.getElementById("nightValueApartment").value;
    descriptionApartment = document.getElementById("descriptionApartment").value;
    expresion_nombre = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;

    

    if (cityApartment == '' || countryApartment == '' || addressApartment == '' || numberRoomsApartment == '' || nightValueApartment == '' || descriptionApartment=='') {
        document.querySelector('#formulario_mensaje ').classList.add('formulario_mensaje-activo');
        return false
    }
    else {
        document.querySelector('#formulario_mensaje ').classList.remove('formulario_mensaje-activo');
    }


    if (!expresion_nombre.test(countryApartment) || countryApartment.length > 15) {
        document.querySelector('#grupocountry .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupocountry .input_error').classList.remove('input_error-activo');
    }


    if (!expresion_nombre.test(cityApartment) || cityApartment.length > 20) {
        document.querySelector('#grupocity .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupocity .input_error').classList.remove('input_error-activo');
    }


    if (addressApartment.length > 20) {
        document.querySelector('#grupoDireccion .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoDireccion .input_error').classList.remove('input_error-activo');
    }

    
    if (letras(numberRoomsApartment) || numberRoomsApartment.length > 10) {
        document.querySelector('#grupoHabitaciones .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoHabitaciones .input_error').classList.remove('input_error-activo');
    }

    if (letras(nightValueApartment) || nightValueApartment.length > 10) {
        document.querySelector('#grupoValorNoche .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoValorNoche .input_error').classList.remove('input_error-activo');
    }

    if (descriptionApartment.length > 700) {
        document.querySelector('#grupoReseñaApartamento .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoReseñaApartamento .input_error').classList.remove('input_error-activo');
    }

}





// function numero(user) {
//     let numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '$', '!', '#', '%', '&', '(', ')', '?', '¡', '¿', '<', '>', ';', '*', '+', '~', '[', ']', ':', '_', '-', '^', '/', '°', '|', '{', '}', '.', '`', '"', "'"]
//     let sw = false;
//     for (let i = 0; i < numbers.length; i++) {
//         for (let j = 0; j < user.length; j++) {
//             if (numbers[i] == user[j]) {
//                 sw = true;
//                 break;
//             }
//         }
//         if (sw) {
//             break
//         }
//     }
//     return sw;
// }

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