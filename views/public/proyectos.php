<?php
//Se imprime la plantilla del encabezado y se envía el titulo para la página web

include('../../app/helpers/template.php');
$proyecto = $_GET['project'];


webSite::header($proyecto);
?>


<br>
<br>
<br>
<br>
<br>

<div class="container" id="formContainer">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-7 col-lg-6 col-xl-6 col-sm-12">
            <p class="titulosHorizontal">EXPERIENCIA</p>
            <div class="row margenform">
                <div class="col col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 marginsuperior">
                    <h2 class="titulosExperiencia" id="tituloProyecto"></h2>


                    <p class="parrafoExperiencia" id="parrafoPrincipal"></p>
                </div>
                <div class="col col col-md-5 col-lg-6 col-xl-6 col-sm-12 col-12">
                    <img class="img-fluid" alt="" id="imagenPrincipal">

                </div>
            </div>

        </div>

    </div>
</div>

<br>
<br>
<br>
<br>

<?php

webSite::formTemplate();

?>





<?php
//Se imprime la plantilla del footer y se envía el controlador a usar

webSite::footer('proyectos.js');
?>