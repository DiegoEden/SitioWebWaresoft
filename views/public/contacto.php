<?php
//Se imprime la plantilla del encabezado y se envía el titulo para la página web

include('../../app/helpers/template.php');
webSite::header('Contacto');
?>



<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">

                <div class="row">
                    <div class="col col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 ">

                        <p class="tituloExperiencia">SOFTWARE</p>
                        <h2 class="titulosExperiencia">Lukky</h2>

                        <br>

                        <p class="parrafoExperiencia">Es una aplicación móvil que te permite mantener un historial de tu máscota en su veterinaria: vacunas, citas, medicamentos y más. Además de la placa inteligente que te permite rastrear a tu perro por si se extravía.</p>

                        <br>
                        <img src="../../resources/img/indicador.png" alt="">

                        <br>
                        <br>



                        <a href="#" class="btn btnExp" target="_blank" role="button">VER PROYECTO</a>


                    </div>

                    <div class="col col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 colImg ">
                        <img src="../../resources/img/luckyLaptop.png" class="img-fluid" alt="">

                    </div>



                </div>

            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                <div class="row">
                    <div class="col col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 ">

                        <p class="tituloExperiencia">SOFTWARE</p>
                        <h2 class="titulosExperiencia">Lukky</h2>

                        <br>

                        <p class="parrafoExperiencia">Es una aplicación móvil que te permite mantener un historial de tu máscota en su veterinaria: vacunas, citas, medicamentos y más. Además de la placa inteligente que te permite rastrear a tu perro por si se extravía.</p>

                        <br>
                        <img src="../../resources/img/indicador.png" alt="">

                        <br>
                        <br>



                        <a href="#" class="btn btnExp" target="_blank" role="button">VER PROYECTO</a>


                    </div>

                    <div class="col col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 colImg ">
                        <img src="../../resources/img/luckyLaptop.png" class="img-fluid" alt="">

                    </div>



                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                <div class="row">
                    <div class="col col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 ">

                        <p class="tituloExperiencia">SOFTWARE</p>
                        <h2 class="titulosExperiencia">Lukky</h2>

                        <br>

                        <p class="parrafoExperiencia">Es una aplicación móvil que te permite mantener un historial de tu máscota en su veterinaria: vacunas, citas, medicamentos y más. Además de la placa inteligente que te permite rastrear a tu perro por si se extravía.</p>

                        <br>
                        <img src="../../resources/img/indicador.png" alt="">

                        <br>
                        <br>



                        <a href="#" class="btn btnExp" target="_blank" role="button">VER PROYECTO</a>


                    </div>

                    <div class="col col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 colImg ">
                        <img src="../../resources/img/luckyLaptop.png" class="img-fluid" alt="">

                    </div>



                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>

<?php

webSite::formTemplate();

?>






<?php
//Se imprime la plantilla del footer y se envía el controlador a usar

webSite::footer('index.js');
?>