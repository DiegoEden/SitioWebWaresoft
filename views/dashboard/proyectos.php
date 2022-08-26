<?php
include('../../app/helpers/dashboard_template.php');

Dashboard::header('Proyectos');
?>


<div class="wrapper formulario fadeInDown">
    <div id="formContent2">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <br>

            <h3>Registrar proyecto</h3>

        </div>

        <!-- Login Form -->
        <form id="register-Form" method="post" autocomplete="off">
            <div class="row">
                <div class="col col col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12">
                    <input type="text" id="nombre_proyecto" class="fadeIn" name="nombre_proyecto" placeholder="Nombre del proyecto">
                    <label for="">Imagen principal</label>

                    <br>
                    <input type="file" id="imagen1" class="fadeIn" name="imagen1" accept=".gif, .jpg, .png">
                    <label for="">Imagen secundaria</label>

                    <br>
                    <input type="file" id="imagen2" class="fadeIn" name="imagen2" accept=".gif, .jpg, .png">
                    <br>

                    <label for="">Texto principal</label>
                    <br>
                    <br>

                    <textarea name="textoPrincipal" id="textoPrincipal" class="fadeIn" cols="60"></textarea>




                </div>
                <div class="col col col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12">

                <label for="">Texto acerca del cliente</label>
                    <br>
                    <br>
                    <textarea name="textoCliente" id="textoCliente" class="fadeIn" cols="60"></textarea>
                    <br>
                    <br>
                    <label for="">Texto desafío</label>
                    <br>
                    <br>
                    <textarea name="textoDesafio" id="textoDesafio" class="fadeIn" cols="60"></textarea>
                    <br>
                    <br>
                    <label for="">Texto solución</label>
                    <br>
                    <br>

                    <textarea name="textSolucion" id="textSolucion" class="fadeIn" cols="60"></textarea>


                    <br>

                </div>
            </div>



            <input type="submit" class="fadeIn fourth" value="Agregar">
        </form>

    </div>

</div>




<?php


Dashboard::footer('proyectos.js');
?>