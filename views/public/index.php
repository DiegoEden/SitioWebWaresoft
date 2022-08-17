<?php
//Se imprime la plantilla del encabezado y se envía el titulo para la página web

include('../../app/helpers/template.php');
webSite::header('Inicio');
?>


<!-- slider -->





<!-- experiencia -->



<!-- ws-academy -->


<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <p style="color:#35A8E0; font-family: 'work sans', serif;">CONTÁCTANOS</p>
        <h1 style="font-weight: 700;">En <span style="color:#35A8E0">Waresoft</span> Juntos innovamos, crecemos y ganamos</h1>
        <form method="post" id="save-form" enctype="multipart/form-data">
            <div class="row" style="margin-top: 60px;">
                <div class="col">
                </div>
                <div class="col">
                    <label class="logins">NOMBRE</label>
                    <input type="text" class="form-control" placeholder="Last name">
                    <br>
                    <label  class="logins">APELLIDO</label>
                    <input type="text" class="form-control" placeholder="Last name">
                    <br>

                    <label  class="logins">¿QUÉ BUSCAS?</label>
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
        </form>

    </div>

</div>




<?php
//Se imprime la plantilla del footer y se envía el controlador a usar

webSite::footer('index.js');
?>