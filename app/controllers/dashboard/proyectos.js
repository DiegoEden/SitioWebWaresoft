const API_PROYECTOS = '../../app/api/proyectos.php?action=';

document.getElementById('register-Form').addEventListener('submit', function (event) {
    //Evento para evitar que recargue la página
    event.preventDefault();
    //Fetch para registrar al primer usuario del sistema
    fetch(API_PROYECTOS + 'register', {
        method: 'post',
        body: new FormData(document.getElementById('register-Form'))
    }).then(request => {
        //Se la verifica si la petición fue correcta de lo contrario muestra un mensaje de error en consola
        if (request.ok) {
            request.json().then(response => {
                //Se verifica si la respuesta fue satisfactoria, de lo contrario se muestra la excepción
                if (response.status) {
                    sweetAlert(1, response.message, 'proyectos.php');
                    clear();
                } else {
                    sweetAlert(2, response.exception, null);
                }
            })
        } else {
            console.log(response.status + ' ' + response.exception);
        }
    }).catch(error => console.log(error));
})


function clear() {

    document.getElementById('nombre_proyecto').value = "";
    document.getElementById('imagen1').value = "";
    document.getElementById('imagen2').value = "";
    document.getElementById('textoPrincipal').value = "";
    document.getElementById('textoCliente').value = "";
    document.getElementById('textoDesafio').value = "";
    document.getElementById('textSolucion').value = "";
    document.getElementById('logoProyecto').value = "";
    document.getElementById('logoProyecto2').value = "";


}



document.addEventListener('DOMContentLoaded', function () {

    readRows(API_PROYECTOS);

})


//Llenado de tabla
function fillTable(dataset) {
    let content = '';
    // Se recorre el conjunto de registros (dataset) fila por fila a través del objeto row.
    dataset.map(function (row) {
        // Se crean y concatenan las filas de la tabla con los datos de cada registro.
        content += `
            <tr>
                <th scope="row">
                    <div class="row paddingTh">
                        <div class="col-12">
                            <img src="../../resources/img/projects/${row.logo_proyecto}" alt="#"
                                 width="50">
                        </div>
                    </div>
                </th>
                <!-- Datos-->
                <td>${row.nombre_proyecto}</td>
                <td>${row.usuario}</td>
                <td>${row.fecha_creacion}</td>
                <!-- Boton-->
                <th scope="row">
                    <div class="row paddingBotones">
                        <div class="col-12">
                            <a href="#" onclick="readDataOnModal(${row.id_proyecto})"  data-bs-toggle="modal" data-bs-target="#modalProyectos" class="btn btn-warning mx-2">Actualizar</a>

                            <a href="#" onclick="deleteRow(${row.id_proyecto})" class="btn  btn-danger  mx-2">Eliminar</a>
                        </div>
                    </div>
                </th>
            </tr>
        `;
    });
    // Se agregan las filas al cuerpo de la tabla mediante su id para mostrar los registros.
    document.getElementById('tbody-rows').innerHTML = content;


}


function deleteRow(id) {
    // Se define un objeto con los datos del registro seleccionado.
    const data = new FormData();
    data.append('id_proyecto', id);
    // Se llama a la función que elimina un registro.
    confirmDelete(API_PROYECTOS, data);
}



function readDataOnModal(id) {
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
               
                document.getElementById('textoPrincipal').textContent = response.dataset.texto_principal;
                document.getElementById('nombre_proyecto').value = response.dataset.nombre_proyecto;
                document.getElementById('textoCliente').textContent = response.dataset.texto_cliente;
                document.getElementById('textoDesafio').textContent = response.dataset.texto_desafio;
                document.getElementById('textSolucion').textContent = response.dataset.texto_solucion;
               /*  document.getElementById('imagen1').value = response.dataset.imagen_principal;
                document.getElementById('imagen2').value = response.dataset.imagen_secundaria;
                document.getElementById('logoProyecto').value = response.dataset.logo_proyecto;
                document.getElementById('logoProyecto2').value = response.dataset.logo_proyecto_oscuro; */







            });
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    }).catch(function (error) {
        console.log(error);
    });
}