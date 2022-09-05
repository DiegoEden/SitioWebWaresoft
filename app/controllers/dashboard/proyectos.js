const API_PROYECTOS = '../../app/api/proyectos.php?action=';

document.getElementById('register-Form').addEventListener('submit', function (event) {
    //Evento para evitar que recargue la página
    event.preventDefault();
    let action = '';
    // Comparamos si existe o no id 
    if (document.getElementById('id_proyecto').value) {
        action = 'update';
    } else {
        action = 'register';
    }
    saveRow(API_PROYECTOS, action, 'register-Form');
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
    document.getElementById('id_proyecto').value = "";


}



document.addEventListener('DOMContentLoaded', function () {

    readRows(API_PROYECTOS);

})

document.getElementById('btnInsert').addEventListener('click', function () {
    document.getElementById('nombre_proyecto').value = "";
    document.getElementById('imagen1').value = "";
    document.getElementById('imagen2').value = "";
    document.getElementById('textoPrincipal').value = "";
    document.getElementById('textoCliente').value = "";
    document.getElementById('textoDesafio').value = "";
    document.getElementById('textSolucion').value = "";
    document.getElementById('logoProyecto').value = "";
    document.getElementById('logoProyecto2').value = "";
    document.getElementById('id_proyecto').value = "";
    document.getElementById('tituloForm').textContent = "Registrar proyecto";
    document.getElementById('submit').value = "Agregar";
});

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
    document.getElementById('tituloForm').textContent = "Actualizar proyecto";
    document.getElementById('submit').value = "Actualizar";


    const data = new FormData();
    data.append('id_proyecto', id);

    fetch(API_PROYECTOS + 'readOne', {
        method: 'post',
        body: data
    }).then(function (request) {
        // Se verifica si la petición es correcta, de lo contrario se muestra un mensaje indicando el problema.
        if (request.ok) {
            request.json().then(function (response) {

                document.getElementById('textoPrincipal').value = response.dataset.texto_principal;
                document.getElementById('nombre_proyecto').value = response.dataset.nombre_proyecto;
                document.getElementById('textoCliente').value = response.dataset.texto_cliente;
                document.getElementById('textoDesafio').value = response.dataset.texto_desafio;
                document.getElementById('textSolucion').value = response.dataset.texto_solucion;
                document.getElementById('id_proyecto').value = response.dataset.id_proyecto;
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



(function (document) {
    'use strict';

    var TableFilter = (function (myArray) {
        var search_input;

        function _onInputSearch(e) {
            search_input = e.target;
            var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
            myArray.forEach.call(tables, function (table) {
                myArray.forEach.call(table.tBodies, function (tbody) {
                    myArray.forEach.call(tbody.rows, function (row) {
                        var text_content = row.textContent.toLowerCase();
                        var search_val = search_input.value.toLowerCase();
                        row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                    });
                });
            });
        }

        return {
            init: function () {
                var inputs = document.getElementsByClassName('busqueda');
                myArray.forEach.call(inputs, function (input) {
                    input.oninput = _onInputSearch;
                });
            }
        };
    })(Array.prototype);

    document.addEventListener('readystatechange', function () {
        if (document.readyState === 'complete') {
            TableFilter.init();
        }
    });

})(document);