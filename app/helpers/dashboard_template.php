<?php
/*archivo usado para el uso de plantillas de header y footer para el dashboard */

class Dashboard
{

  public static function header($title)
  {

    session_start();
    print '
        <!DOCTYPE html>
            <html lang="es">
              <head>
                <meta charset="utf-8"> 
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
                <link rel="icon" type="image/png" href="../../resources/img/iconows.png" />
                <link type="text/css" rel="stylesheet" href="../../resources/css/dashboard_styles.css" />

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> 
                <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

                <!--Se informa al navegador que el sitio web está optimizado para dispositivos móviles-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <!--Título del documento-->
                <title>Dashboard | ' . $title . '</title>
              </head>
        <body>
       ';

    //elaboracion de navbar

    if (isset($_SESSION['id_usuario'])) {
      print '
        <nav class="navbar navbar-expand-lg fixed-top" id="navbar" role="navigation" style="background:white;">
            <a class="navbar-brand" href="dashboard.php">
            <img src="../../resources/img/LogoClaro.png" width="117px" height="47px" class="d-inline-block align-top" alt="" id="logoNav">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarNav">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
              <a class="nav-link" id="home" aria-current="page" href="dashboard.php">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="proyectos.php">PROYECTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#" onclick="logOut()">SALIR</a>
            </li>
            
          </ul>
          
        </div>

        </nav>
        <main>

        
        
        ';
    } else {
      header('location: index.php');
    }
  }


  public static function footer($controller)
  {

    print('
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../app/controllers/dashboard/' . $controller . '"></script>
        <script type="text/javascript" src="../../app/controllers/dashboard/account.js"></script>

        <script type="text/javascript" src="../../resources/js/sweetalert.min.js"></script>
        <script src="../../app/helpers/components.js"></script>
       
        
</main>
        
        </body>
        </html> 
    ');
  }
}
