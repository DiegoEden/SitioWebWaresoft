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
                <div class="col col-md-7 col-lg-7 col-xl-7 col-sm-12 col-12 marginsuperior">
                    <h2 class="titulosExperiencia" id="tituloProyecto"></h2>


                    <p class="parrafoExperiencia" id="parrafoPrincipal"></p>
                </div>
                <div class="col col-md-5 col-lg-5 col-xl-5 col-sm-12 col-12">
                    <img class="img-fluid" alt="" id="imagenPrincipal">


                </div>
                <br>
                <div class="col col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 marginImg">

                    <img class="img-fluid" id="imagenSecundaria">

                </div>
                <div class="col col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 marginDetalles">

                    <div id="prev">
                        <h5 class="titulosParrafos prev" id="tituloCliente">01. Acerca del cliente</h5>
                        <p class="parrafoExperiencia2 prev" id="parrafoCliente"></p>
                    </div>

                    <div class="indicadores">

                        <button type="button" data-target="#next" class="botonesindicador" onclick="next()" id="btnPrev"></button>
                        <button type="button" class="botonesindicador activeIndicador" onclick="on()" id="btnOn"></button>
                        <button type="button" class="botonesindicador" onclick="prev()" id="btnNext"></button>
                    </div>

                    <div id="on">
                        <h5 class="titulosParrafos on" id="tituloDesafio">02. Desafio</h5>
                        <p class="parrafoExperiencia2 on" id="parrafoDesafio"></p>
                    </div>


                    <div id="next">
                        <h5 class="titulosParrafos next" id="titulosSolucion">03. Solucion</h5>
                        <p class="parrafoExperiencia2 next" id="parrafoSolucion"></p>
                    </div>









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