<?php

/*archivo usado para el uso de plantillas de header y footer para el sitio web */

class webSite
{

    public static function header($title)
    {

        session_start();

        //se imprime la estructura html
        print '
        <!DOCTYPE html>
            <html lang="es">
              <head>
                <meta charset="utf-8"> 
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
                <link rel="icon" type="image/png" href="../../resources/img/iconows.png" />
                <link type="text/css" rel="stylesheet" href="../../resources/css/styles.css" />

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> 
                <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

                <!--Se informa al navegador que el sitio web está optimizado para dispositivos móviles-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <!--Título del documento-->
                <title>Waresoft | ' . $title . '</title>
              </head>
        <body>
       ';

        //elaboracion de navbar
        
        print'<nav class="navbar navbar-expand-lg sticky-top" id="navbar" role="navigation" style="background-color:white;">
            <a class="navbar-brand" href="index.php">
            <img src="../../resources/img/LogoClaro.png" width="117px" height="47px" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarNav">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
              <a class="nav-link" id="home" aria-current="page" href="index.php">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="experiencia.php">EXPERIENCIA</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="servicios.php">SERVICIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="nosotros.php">NOSOTROS</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="contacto.php">CONTACTO</a>
            </li>
          </ul>
        </div>
        <a style="padding-right:10px" id="linkedin" href="https://www.linkedin.com/company/waresoftsv" target="_blank">
        <img src="../../resources/img/linkedin.png" width="20px" class="d-inline-block " alt="">

        </a>

        <a style="padding-right:10px" id="facebook" href="https://www.facebook.com/waresoftsv" target="_blank">
        <img src="../../resources/img/Facebook.png"  width="20px" class="d-inline-block " alt="">

        </a>

        <a style="padding-right:40px" id="insta" target="_blank">
        <img src="../../resources/img/insta.png"  width="20px" class="d-inline-block " alt="">

        </a>

        </nav>
        
        <main>
        
        ';
       

        /*navbar movil*/

       


    }



    public static function footer($controller)
    {

        print('
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../app/controllers/' . $controller . '"></script>
        <script type="text/javascript" src="../../app/controllers/template.js"></script>

        <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" >

        
                <div class=" col col-md-4 col-sm-12 col-12" >

                <span class="worksans">Encuentranos en:</span>
                <br>

                <a href="https://www.linkedin.com/company/waresoftsv" target="_blank" style="padding-right:5px;text-decoration:none;" >
                <img src="../../resources/img/linkedin.png" width="20px" class="d-inline-block " alt="" >
        
                </a>
        
                <a style="padding-right:5px;text-decoration:none;" href="https://www.facebook.com/waresoftsv" target="_blank">
                <img src="../../resources/img/Facebook.png"  width="20px" class="d-inline-block " alt="">
                </a>
        
                <a style="padding-right:5px;text-decoration:none;" target="_blank">
                <img src="../../resources/img/insta.png"  width="20px" class="d-inline-block " alt="" >
        
                </a>
                </div>

                <div class=" col col-md-4 col-sm-12 col-12" >

                <span class="worksans">
                7a Calle Poniente 5146, Colonia Escalon, San Salvador, El Salvador</span>
                <br>

                
                </div>

                
        </footer>
        </div>
       
        
</main>
        
        </body>
        </html> 
    ');
    }

    /*template para formulario*/
    public static function formTemplate() {

      print('<div class="container">
      <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-sm-12">
          <p class="titulosHorizontal">CONTÁCTANOS</p>
          <h2 class="headers">En <span class="headerceleste">Waresoft</span> Juntos innovamos, crecemos y ganamos</h2>
          <form method="post" id="save-form" enctype="multipart/form-data">
              <div class="row margenform">
                  <div class="col col-md-5 col-lg-5 col-xl-5 col-sm-12 col-12 marginsuperior" id="colForm">
                      <h1 class="numerows">4<sup>+</sup></h1>
                      <h5 class="headers">AÑOS</h5>
                      <h5 class="headers">EXPERIENCIA</h5>
                      <h5 class="headers">LABORAL</h5>
                  </div>
                  <div class="col col col-md-7 col-lg-7 col-xl-7 col-sm-12 col-12">
                      <label class="forms">NOMBRE</label>
                      <input type="text" class="form-control forms-input" placeholder="Nombre">
                      <br>
                      <label class="forms">APELLIDO</label>
                      <input type="text" class="form-control forms-input" placeholder="Apellido">
                      <br>
  
                      <label class="forms">¿QUÉ BUSCAS?</label>
                      <input type="text" class="form-control forms-input" placeholder="Comentarios">
                      <br>
                      <div class="col-md-12 text-center">
                          <button type="submit" class="btn btn-primary forms-button">Enviar</button>
                      </div>
                  </div>
              </div>
          </form>
  
      </div>
  
  </div>
  </div>');


  
    }


    /*template de slier infinito*/

    public static function infiniteSlider(){

      print('<div class="slider">
      <div class="slide-track">
          <div class="slide">
              <img src="../../resources/img/acsa.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/gimh.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/lukky.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/mterrenos.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/udb.png" height="200" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/acsa.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/gimh.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/lukky.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/mterrenos.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/udb.png" height="200" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/acsa.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/gimh.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/lukky.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/mterrenos.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/udb.png" height="200" width="250" alt="" />
          </div><div class="slide">
          <img src="../../resources/img/acsa.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/gimh.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/lukky.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/mterrenos.png" height="250" width="250" alt="" />
          </div>
          <div class="slide">
              <img src="../../resources/img/udb.png" height="200" width="250" alt="" />
          </div>
      
          </div>
  </div>');
    }

    /*template de banner ws academy*/

    public static function wsacademyBanner() {
    print('<div class="wsacademy">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                      <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-sm-12">
                          <div class="row ">
                              <div class="col col col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12">
                                  <img src="../../resources/img/wsacademy.png" alt="" class="imgwsacademy">
                                  <p class="textowsacademy">Empieza tu camino como profesional TI. JavaScript, Angular,
                                      Python,React, Base de Datos, Big Data, Business Inteligent
                                      y muchas más certificaciones que tu puedes tomar</p>
                                  <div class="row">
                                      <div class="col col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12">
                                          <a class="btn botonwsacademy" href="https://waresoft.academy/contact/" target="_blank" role="button">¡Aplica a una beca!</a>
                                      </div>
                                      <div class="col col-md-8 col-lg-8 col-xl-8 col-sm-12 col-12 links">
                                          <span class="wsacademylinks">Encuentranos en:</span>

                                          <a href="https://www.linkedin.com/company/waresoftsv" target="_blank" style="padding-right:5px;text-decoration:none;">
                                              <img src="../../resources/img/linkedin.png" width="20px" class="d-inline-block " alt="">

                                          </a>

                                          <a style="padding-right:5px;text-decoration:none;" href="https://www.facebook.com/waresoftsv" target="_blank">
                                              <img src="../../resources/img/Facebook.png" width="20px" class="d-inline-block " alt="">
                                          </a>

                                          <a style="padding-right:5px;text-decoration:none;" target="_blank">
                                              <img src="../../resources/img/insta.png" width="20px" class="d-inline-block " alt="">

                                          </a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12">
                                  <div class="row">

                                      <div class="col col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12">
                                          <img src="../../resources/img/modelows.png" width="513" height="438" alt="">

                                      </div>
                                      <div class="col col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12">
                                          <a class="btn wslink" href="https://waresoft.academy/" target="_blank" role="button">Ir a página ></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>');
    }
}
