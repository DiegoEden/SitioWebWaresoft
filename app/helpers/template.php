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
                <!--Se informa al navegador que el sitio web está optimizado para dispositivos móviles-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <!--Título del documento-->
                <title>Waresoft | ' . $title . '</title>
              </head>
        <body>';

        //elaboracion de navbar
        
        print'<nav class="navbar navbar-expand-lg sticky-top" id="navbar" role="navigation" style="background-color:transparent;">
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
        <a style="padding-right:5px" id="linkedin">
        <img src="../../resources/img/linkedin.png" width="20px" class="d-inline-block align-top" alt="">

        </a>

        <a style="padding-right:5px" id="facebook">
        <img src="../../resources/img/linkedin.png"  width="20px" class="d-inline-block align-top" alt="">

        </a>

        <a style="padding-right:40px" id="insta">
        <img src="../../resources/img/linkedin.png"  width="20px" class="d-inline-block align-top" alt="">

        </a>

        </nav>';


        /*navbar movil*/

       


    }



    public static function footer($controller)
    {

        print('
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../app/controllers/' . $controller . '"></script>
        <script type="text/javascript" src="../../app/controllers/template.js"></script>

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

        
                <div class=" col col-md-4 col-sm-12 col-12" >

                <span class="worksans">Encuentranos en:</span>
                <br>

                <a style="padding-right:5px">
                <img src="../../resources/img/linkedin.png" width="20px" class="d-inline-block align-top" alt="">
        
                </a>
        
                <a style="padding-right:5px" >
                <img src="../../resources/img/linkedin.png"  width="20px" class="d-inline-block align-top" alt="">
        
                </a>
        
                <a style="padding-right:5px" >
                <img src="../../resources/img/linkedin.png"  width="20px" class="d-inline-block align-top" alt="">
        
                </a>
                </div>

                <div class=" col col-md-4 col-sm-12 col-12" >

                <span class="worksans">
                7a Calle Poniente 5146, Colonia Escalon, San Salvador, El Salvador:</span>
                <br>

                
                </div>

                
        </footer>
        

        
        </body>
        </html> 
    ');
    }
}

?>