const API_PROYECTOS = '../../app/api/proyectos.php?action=';

document.addEventListener('DOMContentLoaded', function () {


    load();
    readRows(API_PROYECTOS);
    readIndicators(API_PROYECTOS);


});



//Llenado de tarjetas
function fillTable(dataset) {
    let content = '';
    // Se recorre el conjunto de registros (dataset) fila por fila a través del objeto row.
    dataset.map(function (row) {
        // Se crean y concatenan las filas de la tabla con los datos de cada registro.
        content += `
            <div class="animate__animated animate__bounceIn col-lg-4 col-xl-4 col-md-6 col-sm-12 col-xs-12 col-12 mt-4 d-flex justify-content-center align-items-center">
                <div class="tarjeta content" style="background:url(../../resources/img/projects/${row.logo_proyecto}); background-repeat:no-repeat; background-size:contain; background-position:center; transition: .6s;">
                    <!-- Fila para Información -->
                    <div class="row">
                        <div class="col-12 contenido">
                            <h1 class="headersTarjeta text-left" style="margin-left:20px">${row.nombre_proyecto}</h1>
                            <p class="parrafoCard">${row.texto_principal}</p>
                            <a href="proyectos.php?data_id=${row.id_proyecto}&project=${row.nombre_proyecto}" style="margin:10px; font-weight: 600;" class="btn btnTeam text-left" role="button">VER PROYECTO 〉</a>

                        </div>
                    </div>
                    <!-- Fin de Tarjeta -->
                </div>
            </div>
            `;

    });
    // Se agregan las filas al cuerpo de la tabla mediante su id para mostrar los registros.
    document.getElementById('proyectos').innerHTML = content;
}



function fillIndicators(dataset) {
    let content = '';
    // Se recorre el conjunto de registros (dataset) fila por fila a través del objeto row.
    dataset.map(function (row) {
        // Se crean y concatenan las filas de la tabla con los datos de cada registro.

        content += `
        <div class="animate__animated animate__bounceIn col-lg-4 col-xl-4 col-md-6 col-sm-12 col-xs-12 col-12 mt-4 d-flex justify-content-center align-items-center">
        <div class="tarjeta content" style="background:url(../../resources/img/projects/${row.logo_proyecto_oscuro}); background-repeat:no-repeat; background-size:contain; background-position:center; transition: .6s;">
            <!-- Fila para Información -->
            <div class="row">
                <div class="col-12 contenido">
                    <h1 class="headersTarjeta text-left" style="margin-left:20px">${row.nombre_proyecto}</h1>
                    <p class="parrafoCard">${row.texto_principal}</p>
                    <a href="proyectos.php?data_id=${row.id_proyecto}&project=${row.nombre_proyecto}" style="margin:10px; font-weight: 600;" class="btn btnTeam text-left" role="button">VER PROYECTO 〉</a>

                </div>
            </div>
            <!-- Fin de Tarjeta -->
        </div>
    </div>

`;


    });
    // Se agregan las filas al cuerpo de la tabla mediante su id para mostrar los registros.
    document.getElementById('proyectos2').innerHTML = content;
}
