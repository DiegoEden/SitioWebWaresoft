<?php
include('../../app/helpers/dashboard_template.php');

Dashboard::header('Proyectos');
?>


<div class="wrapper formulario fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <br>

            <h3>Registrar proyecto</h3>

        </div>

        <!-- Login Form -->
        <form id="register-Form" method="post" autocomplete="off" enctype="multipart/form-data">


            <div class="row">

                <div class="col-xl-6 mb-4 col-md-12 col-sm-12 col-xs-12 col-12 centrarColumnas">
                    <input type="text" id="nombre_proyecto" class="fadeIn" name="nombre_proyecto" placeholder="Nombre del proyecto" required>
                    <label for="">Imagen principal</label>

                    <br>
                    <input type="file" id="imagen1" class="fadeIn" name="imagen1" accept=".gif, .jpg, .png" required>
                    <label for="">Imagen secundaria</label>

                    <br>
                    <input type="file" id="imagen2" class="fadeIn" name="imagen2" accept=".gif, .jpg, .png" required>
                    <br>

                    <label for="">Logo del proyecto</label>

                    <input type="file" id="logoProyecto" class="fadeIn" name="logoProyecto" accept=".gif, .jpg, .png" required>
                    <br>
                    <label for="">Logo del proyecto(modo oscuro)</label>

                    <input type="file" id="logoProyecto2" class="fadeIn" name="logoProyecto2" accept=".gif, .jpg, .png" required>
                    <br>
                    <label for="">Texto principal</label>
                    <br>
                    <br>

                    <textarea name="textoPrincipal" id="textoPrincipal" class="fadeIn" cols="45" rows="10" required></textarea>
                </div>


                <div class="col-xl-6 mb-4 col-md-12 col-sm-12 col-xs-12 col-12 marginCol2 centrarColumnas">

                    

                    <label for="">Texto acerca del cliente</label>
                    <br>
                    <br>
                    <textarea name="textoCliente" id="textoCliente" class="fadeIn" cols="45" rows="10" required></textarea>
                    <br>
                    <br>
                    <label for="">Texto desafío</label>
                    <br>
                    <br>
                    <textarea name="textoDesafio" id="textoDesafio" class="fadeIn" cols="45" rows="10" required></textarea>
                    <br>
                    <br>
                    <label for="">Texto solución</label>
                    <br>
                    <br>

                    <textarea name="textSolucion" id="textSolucion" class="fadeIn" cols="45" rows="10" required></textarea>


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