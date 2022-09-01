<?php
//Se imprime la plantilla del encabezado y se envía el titulo para la página web

include('../../app/helpers/template.php');
webSite::header('Servicios');
?>





<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container d-flex flex-column justify-content-center marginsuperior ">
    <div class="row ">
        <div class="col col-md-12 col-lg-5 col-xl-5 col-sm-12 col-12 " style="margin-left:40px;">
            <p class="titulosHorizontal" style="margin-left:-100px; margin-top: 5px;">SERVICIOS</p>
            <h6 class="headers" style="font-size:36px">Estamos aquí para ayudarte</h6>
            <br>
            <ul class="listaServicios" style="line-height:600%">
                <li class="item"><button id="btnV1" class="buttonServicios2 activeServicios">01. SERVICIO TECNOLOGÍA</button></li>
                <li class="item"><button id="btnV2" class="buttonServicios2">02. SERVICIO SOFTWARE</button></li>
                <li class="item"><button id="btnV3" class="buttonServicios2">03. SERVICIO CLOUD</button></li>
                <li class="item"><button id="btnV4" class="buttonServicios2">04. SERVICIO DIGITAL</button></li>

            </ul>

        </div>
        <div class="col  col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 ">


            <div id="tecnologia">
                <img src="../../resources/img/tecnologia-.png" alt="" class="img-fluid imagenesServicios">

                <h3 class="headerServicios">SERVICIO TECNOLOGÍA</h3>
                <p class="parrafoEquipo">La inteligencia artificial es una tecnología en avance que puede tener un impacto significativo en nuestra vida cotidiana. Es una de las tendencias tecnológicas más calientes que ha invadido el escenario empresarial en los últimos años.
                <ul>
                    <li class="parrafoEquipo">Soluciones IA</li>
                    <li class="parrafoEquipo">Capacitación y Relatoría</li>
                    <li class="parrafoEquipo">Asesoria Empresarial</li>
                    <li class="parrafoEquipo">Big Data</li>
                    <li class="parrafoEquipo">Seguridad Informática</li>
                </ul>
                </p>
            </div>

            <div class="indicadores" style=" transform: rotate(-90deg);">

                <button type="button" class="botonesindicador " onclick="on()" id="btnOn"></button>
                <button type="button" class="botonesindicador" onclick="prev()" id="btnNext"></button>
                <button type="button" class="botonesindicador" onclick="prev()" id="btnNext"></button>

                <button type="button" class="botonesindicador activeIndicador" onclick="next()" id="btnPrev"></button>


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

webSite::footer('servicios.js');
?>