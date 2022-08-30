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
    <p class="tituloExperiencia">CASOS DE ÉXITO</p>

    <div class="row justify-content-center animate__animated animate__backInUp" id="proyectos">




    </div>

    <div class="row justify-content-center animate__animated animate__backInUp" id="proyectos2">




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