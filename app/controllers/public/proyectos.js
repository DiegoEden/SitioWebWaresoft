const API_PROYECTOS = '../../app/api/proyectos.php?action=';

document.addEventListener('DOMContentLoaded', function () {
    // Se busca en la URL las variables (parámetros) disponibles.
    let params = new URLSearchParams(location.search);
    // Se obtienen los datos localizados por medio de las variables.
    const ID = params.get('data_id');
    // Se llama a la función que muestra el detalle del proyeecto seleccionado previamente.
    readOneProyecto(ID);
});


function readOneProyecto(id) {
    // Se define un objeto con los datos del registro seleccionado.
    const data = new FormData();
    data.append('id_proyecto', id);

    fetch(API_PROYECTOS + 'readOne', {
        method: 'post',
        body: data
    }).then(function (request) {
        // Se verifica si la petición es correcta, de lo contrario se muestra un mensaje indicando el problema.
        if (request.ok) {
            request.json().then(function (response) {
                // Se comprueba si la respuesta es satisfactoria, de lo contrario se muestra un mensaje con la excepción.
                if (response.status) {
                    // Se colocan los datos en la tarjeta de acuerdo al producto seleccionado previamente.
                    document.getElementById('imagenPrincipal').setAttribute('src', '../../resources/img/projects/' + response.dataset.imagen_principal);
                    document.getElementById('parrafoPrincipal').textContent = response.dataset.texto_principal;
                    document.getElementById('tituloProyecto').textContent = response.dataset.nombre_proyecto;


                } else {
                    // Se presenta un mensaje de error cuando no existen datos para mostrar.
                    document.getElementById('nombre').innerHTML = `<i class="material-icons small">cloud_off</i><span class="red-text">${response.exception}</span>`;
                    // Se limpia el contenido cuando no hay datos para mostrar.
                }
            });
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    }).catch(function (error) {
        console.log(error);
    });
}
