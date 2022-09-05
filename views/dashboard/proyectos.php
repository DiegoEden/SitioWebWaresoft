<?php
include('../../app/helpers/dashboard_template.php');

Dashboard::header('Proyectos');
?>


<div class="wrapper formulario fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
            <br>

            <h3>Gestión de proyectos</h3>
            <br>

            <input type="search" class="form-control fadeIn busqueda" placeholder="Buscar proyecto..." data-table="proyects-list" style="border-bottom: 2px solid #5fbae9;" id="search" name="search" aria-describedby="emailHelp" &#xf002;">



            <div class="mt-4 mx-3 mb-3">
                <input type="button" id="btnInsert" data-bs-toggle="modal" data-bs-target="#modalProyectos" class="fadeIn fourth" value="Nuevo proyecto">

            </div>

            <div class="row mt-3 justify-content-center table-responsive ">
                <div class="col-12 justify-content-center align-items-center text-center">
                    <table class="table table-borderless proyects-list " id="data-table">
                        <thead>
                            <!-- Columnas-->
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nombre del proyecto</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Fecha de creación</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody id="tbody-rows">


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>


<div class="modal fade" id="modalProyectos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">

            <div class="modal-body">
                <div class="wrapper fadeInDown">
                    <div id="formContent3">
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
                                    <input class="d-none" type="number" id="txtId" name="txtId" />
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

            </div>

        </div>
    </div>
</div>

<script>
    (function(document) {
        'use strict';

        var TableFilter = (function(myArray) {
            var search_input;

            function _onInputSearch(e) {
                search_input = e.target;
                var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                myArray.forEach.call(tables, function(table) {
                    myArray.forEach.call(table.tBodies, function(tbody) {
                        myArray.forEach.call(tbody.rows, function(row) {
                            var text_content = row.textContent.toLowerCase();
                            var search_val = search_input.value.toLowerCase();
                            row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                        });
                    });
                });
            }

            return {
                init: function() {
                    var inputs = document.getElementsByClassName('busqueda');
                    myArray.forEach.call(inputs, function(input) {
                        input.oninput = _onInputSearch;
                    });
                }
            };
        })(Array.prototype);

        document.addEventListener('readystatechange', function() {
            if (document.readyState === 'complete') {
                TableFilter.init();
            }
        });

    })(document);
</script>


<?php


Dashboard::footer('proyectos.js');
?>