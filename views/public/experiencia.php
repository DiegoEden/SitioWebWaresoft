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
        <div class="col-12 col-md-7 col-lg-6 col-xl-6 col-sm-12">
            <p class="tituloExperiencia">EXPERIENCIA</p>
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
