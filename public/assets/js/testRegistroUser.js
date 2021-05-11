
function validarUser() {
    let user, emailuser, countryuser, cityuser, passworduser, roluser, expresion_correo;
    user = document.getElementById("user").value;
    emailuser = document.getElementById("emailuser").value;
    countryuser = document.getElementById("countryuser").value;
    cityuser = document.getElementById("cityuser").value;
    passworduser = document.getElementById("passworduser").value;
    roluser = document.forms["formulario"]["roluser"].selectedIndex;
    expresion_correo = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.+[a-zA-Z0-9-.]+$/;
    expresion_nombre = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;

    if (user == "" || emailuser == "" || countryuser ==  "" || cityuser == "" || passworduser ==  "" || roluser ==  "") {
        document.querySelector('#formulario_mensaje ').classList.add('formulario_mensaje-activo');
        return false
    }
    else {
        document.querySelector('#formulario_mensaje ').classList.remove('formulario_mensaje-activo');
    }


    if (!expresion_nombre.test(user) || user.length > 20) {
        document.querySelector('#grupouser .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupouser .input_error').classList.remove('input_error-activo');
    }


    if (!expresion_correo.test(emailuser)) {
        document.querySelector('#grupoemailuser .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupoemailuser .input_error').classList.remove('input_error-activo');
    }


    if (!expresion_nombre.test(countryuser)|| countryuser.length > 20) {
        document.querySelector('#grupocountryuser .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupocountryuser .input_error').classList.remove('input_error-activo');
    }


    if (!expresion_nombre.test(cityuser)|| cityuser.length > 20) {
        document.querySelector('#grupocityuser .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupocityuser .input_error').classList.remove('input_error-activo');
    }


    if (passworduser.length < 9 || passworduser.length > 12) {
        document.querySelector('#grupopassworduser .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#grupopassworduser .input_error').classList.remove('input_error-activo');
    }

    if (roluser== 0) {
        document.querySelector('#gruporoluser .input_error').classList.add('input_error-activo');
        return false
    }
    else {
        document.querySelector('#gruporoluser .input_error').classList.remove('input_error-activo');
    }

    

}


// function numero(user) {
//     let numbers = [0,1,2,3,4,5,6,7,8,9,'$','!','#','%','&','(',')','?','¡','¿','<','>',';','*','+','~','[',']',':','_','-','^','/','°','|','{','}','.','`','"',"'"]
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



/*
function tiene_numeros(texto) {
    let numeros = "0123456789";
    for (i = 0; i < texto.length; i++) {
        if (numeros.indexOf(texto.charAt(i), 0) != -1) {
            return 1;
        }
    }
    return 0;
}
*/