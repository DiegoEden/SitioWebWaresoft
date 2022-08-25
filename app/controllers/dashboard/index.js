// Constante para establecer la ruta y parámetros de comunicación con la API.
const API_USUARIOS = '../../app/api/usuarios.php?action=';

// Método manejador de eventos que se ejecuta cuando el documento ha cargado.
document.addEventListener('DOMContentLoaded', function () {

    fetch(API_USUARIOS + 'readAll')
        .then(request => {
            //Se verifica si la petición fue correcta
            if (request.ok) {
                request.json().then(response => {
                    //Se verifica si la respuesta no es correcta para redireccionar al primer uso
                    if (!response.status) {
                        sweetAlert(3, response.exception, 'primer_uso.php');
                    }
                })
            } else {
                console.log(request.status + ' ' + request.statusText);
            }
        }).catch(error => console.log(error));
});


// Método manejador de eventos que se ejecuta cuando se envía el formulario de iniciar sesión.
document.getElementById('loginForm').addEventListener('submit', function (event) {
    // Se evita recargar la página web después de enviar el formulario.
    event.preventDefault();
    // Realizamos una peticion a la API indicando el caso a utilizar y enviando la direccion de la API como parametro
    fetch(API_USUARIOS + 'logIn', {
        method: 'post',
        body: new FormData(document.getElementById('loginForm'))
    }).then(function (request) {
        // Se verifica si la petición es correcta, de lo contrario se muestra un mensaje indicando el problema.
        if (request.ok) {
            request.json().then(function (response) {
                // Se comprueba si la respuesta es satisfactoria, de lo contrario se muestra un mensaje con la excepción.
                if (response.status) {
                    sweetAlert(1, response.message, 'proyectos.php');
                } else {

                    sweetAlert(4, response.exception, null);

                }
            });
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    }).catch(function (error) {
        console.log(error);
    });
});