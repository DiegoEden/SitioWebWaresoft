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
                    document.getElementById('imagenSecundaria').setAttribute('src', '../../resources/img/projects/' + response.dataset.imagen_secundaria);
                    document.getElementById('parrafoCliente').textContent = response.dataset.texto_cliente;
                    document.getElementById('parrafoDesafio').textContent = response.dataset.texto_desafio;
                    document.getElementById('parrafoSolucion').textContent = response.dataset.texto_solucion;




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


function prev() {

    document.getElementById('tituloCliente').className = 'titulosParrafos on';
    document.getElementById('parrafoCliente').className = 'parrafoExperiencia2 on';

    document.getElementById('tituloDesafio').className = 'titulosParrafos next';
    document.getElementById('parrafoDesafio').className = 'parrafoExperiencia2 next';

    document.getElementById('titulosSolucion').className = 'titulosParrafos prev';
    document.getElementById('parrafoSolucion').className = 'parrafoExperiencia2 prev';
    document.getElementById('btnOn').classList.remove("activeIndicador");
    document.getElementById('btnPrev').classList.remove("activeIndicador");
    document.getElementById('btnNext').classList.add("activeIndicador");



}

function on() {

    document.getElementById('tituloCliente').className = 'titulosParrafos prev';
    document.getElementById('parrafoCliente').className = 'parrafoExperiencia2 prev';

    document.getElementById('tituloDesafio').className = 'titulosParrafos on';
    document.getElementById('parrafoDesafio').className = 'parrafoExperiencia2 on';

    document.getElementById('titulosSolucion').className = 'titulosParrafos next';
    document.getElementById('parrafoSolucion').className = 'parrafoExperiencia2 next';

    document.getElementById('btnPrev').classList.remove("activeIndicador");
    document.getElementById('btnNext').classList.remove("activeIndicador");
    document.getElementById('btnOn').classList.add("activeIndicador");



}


function next() {

    document.getElementById('tituloCliente').className = 'titulosParrafos prev';
    document.getElementById('parrafoCliente').className = 'parrafoExperiencia2 prev';

    document.getElementById('tituloDesafio').className = 'titulosParrafos next';
    document.getElementById('parrafoDesafio').className = 'parrafoExperiencia2 next';

    document.getElementById('titulosSolucion').className = 'titulosParrafos on';
    document.getElementById('parrafoSolucion').className = 'parrafoExperiencia2 on';

    document.getElementById('btnNext').classList.remove("activeIndicador");
    document.getElementById('btnPrev').classList.add("activeIndicador");
    document.getElementById('btnOn').classList.remove("activeIndicador");
}



var button1 = document.getElementById('prev');
button1.addEventListener('click', function () {
    prev();
});

var button2 = document.getElementById('on');
button2.addEventListener('click', function () {
    on();
});


var button3 = document.getElementById('next');
button3.addEventListener('click', function () {
    next();
});