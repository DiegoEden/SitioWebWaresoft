<?php
//Se imprime la plantilla del encabezado y se envía el titulo para la página web

include('../../app/helpers/template.php');
webSite::header('Experiencia');
?>


<br>
<br>
<br>
<br>
<br>

<div class="container" id="formContainer">
    <p class="tituloExperiencia">EXPERIENCIA</p>

    <div class="row justify-content-center animate__animated animate__backInUp" id="proyectos">
        <div class="animate__animated animate__bounceIn col-xl-4 col-md-4 col-sm-12 col-xs-12 mt-4 d-flex justify-content-center align-items-center text-center">
            <div class="tarjeta">
                <!-- Fila para Imagen -->
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
                <!-- Fila para Información -->
                <div class="row mt-2">
                    <div class="col-12 ">

                    </div>
                </div>


                <!-- Fin de Tarjeta -->
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

webSite::footer('experiencia.js');
?>