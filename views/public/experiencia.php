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
    <div class="row d-flex justify-content-center align-items-center h-100">
        <p class="tituloExperiencia">EXPERIENCIA</p>

        <div class="row gx-5">
            <div class="col col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 ">
                <div class="p-3 layout2">






                </div>
            </div>
            <div class="col col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12">
                <div class="p-3 layout2">



                </div>
            </div>

            <div class="col col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12">
                <div class="p-3 layout2">



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

webSite::footer('experiencia.js');
?>