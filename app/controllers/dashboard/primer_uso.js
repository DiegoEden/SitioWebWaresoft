const API_USUARIOS = '../../app/api/usuarios.php?action=';

document.getElementById('register-Form').addEventListener('submit', function (event) {
    //Evento para evitar que recargue la página
    event.preventDefault();
    //Fetch para registrar al primer usuario del sistema
    fetch(API_USUARIOS + 'register', {
        method: 'post',
        body: new FormData(document.getElementById('register-Form'))
    }).then(request => {
        //Se la verifica si la petición fue correcta de lo contrario muestra un mensaje de error en consola
        if (request.ok) {
            request.json().then(response => {
                //Se verifica si la respuesta fue satisfactoria, de lo contrario se muestra la excepción
                if (response.status) {
                    sweetAlert(1, response.message, 'index.php');
                } else {
                    sweetAlert(2, response.exception, null);
                }
            })
        } else {
            console.log(response.status + ' ' + response.exception);
        }
    }).catch(error => console.log(error));
})