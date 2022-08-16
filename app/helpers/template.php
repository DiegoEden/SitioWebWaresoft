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
                <!--Se informa al navegador que el sitio web está optimizado para dispositivos móviles-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <!--Título del documento-->
                <title>Waresoft | ' . $title . '</title>
              </head>
        <body>';

        //elaboracion de navbar
        
        print'<nav class="navbar navbar-expand-lg sticky-top" id="navbar" role="navigation" style="background-color:transparent;">
            <a class="navbar-brand" style="padding-left:40px" href="index.php">
            <img src="../../resources/img/LogoClaro.png" width="117px" height="47px" class="d-inline-block align-top" alt="">
            </a>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
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
        <a style="padding-right:5px">
        <img src="../../resources/img/linkedin.png" width="20px" class="d-inline-block align-top" alt="">

        </a>

        <a style="padding-right:5px">
        <img src="../../resources/img/linkedin.png"  width="20px" class="d-inline-block align-top" alt="">

        </a>

        <a style="padding-right:40px">
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
                <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                </a>
                <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
        </footer>
        

        
        </body>
        </html> 
    ');
    }
}

?>