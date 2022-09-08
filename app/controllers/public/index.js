const API_PROYECTOS = '../../app/api/proyectos.php?action=';


document.addEventListener('DOMContentLoaded', function () {


    load();
    readRows(API_PROYECTOS);
    readIndicators(API_PROYECTOS);




});

//Llenado de carousel
function fillTable(dataset) {
    let content = '';
    // Se recorre el conjunto de registros (dataset) fila por fila a través del objeto row.
    dataset.map(function (row) {
        // Se crean y concatenan las filas de la tabla con los datos de cada registro.
        if (row.index_proyecto == 0) {
            content += `
            <div class="carousel-item active">
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
        
                        <div class="row">
                            <div class="col col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 ">
        
                                <p class="tituloExperiencia">EXPERIENCIA</p>
                                <h2 class="titulosExperiencia">${row.nombre_proyecto}</h2>
        
        
                                <p class="parrafoExperiencia">${row.texto_principal}</p>
                              
        
                                
                                <img src="../../resources/img/indicador.png" alt="">
        
                                <br>
                                <br>

    
        
                                <a href="proyectos.php?data_id=${row.id_proyecto}&project=${row.nombre_proyecto}" class="btn btnExp" role="button">VER PROYECTO</a>
        
        
                            </div>
        
                            <div class="col col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 colImg ">
                                <img src="../../resources/img/projects/${row.imagen_principal}" class="img-fluid" alt="">
        
                            </div>
        
        
        
                        </div>
        
                    </div>
                </div>
`;
        } else {

            content += `
            <div class="carousel-item ">
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
        
                        <div class="row">
                            <div class="col col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 ">
        
                                <p class="tituloExperiencia">EXPERIENCIA</p>
                                <h2 class="titulosExperiencia">${row.nombre_proyecto}</h2>
        
        
                                <p class="parrafoExperiencia">${row.texto_principal}</p>
                              
        
                                
                                <img src="../../resources/img/indicador.png" alt="">
        
                                <br>
                                <br>

                               
    
        
                                <a href="proyectos.php?data_id=${row.id_proyecto}&project=${row.nombre_proyecto}" class="btn btnExp" role="button">VER PROYECTO</a>
        
        
                            </div>
        
                            <div class="col col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 colImg ">
                                <img src="../../resources/img/projects/${row.imagen_principal}" class="img-fluid" alt="">
        
                            </div>
        
        
        
                        </div>
        
                    </div>
                </div>
`;
        }



    });
    // Se agregan las filas al cuerpo de la tabla mediante su id para mostrar los registros.
    document.getElementById('contenidoCarousel').innerHTML = content;
}




function fillIndicators(dataset) {
    let content = '';
    // Se recorre el conjunto de registros (dataset) fila por fila a través del objeto row.
    dataset.map(function (row) {
        // Se crean y concatenan las filas de la tabla con los datos de cada registro.
        if (row.index_proyecto == 0) {
            content += `
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="${row.index_proyecto}" class="active" aria-current="true" aria-label="Slide ${row.id_proyecto}"></button>

`;
        } else {

            content += `
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="${row.index_proyecto}" aria-label="Slide ${row.id_proyecto}"></button>

`;
        }



    });
    // Se agregan las filas al cuerpo de la tabla mediante su id para mostrar los registros.
    document.getElementById('indicators').innerHTML = content;
}
