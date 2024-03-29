<?php

/*archivo usado para el uso de plantillas para el sitio web */

class webSite
{

    public static function header($title)
    {

        session_start();

        //se imprime la estructura html
        print '
        <!DOCTYPE html>
            <html lang="es">
              <head onload="load()">
                <meta charset="utf-8"> 
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
                <link rel="icon" type="image/png" href="../../resources/img/iconows.png" />
                <link type="text/css" rel="stylesheet" href="../../resources/css/styles.css" />
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> 
                <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> 

                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
               <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> -->
                <!--Se informa al navegador que el sitio web está optimizado para dispositivos móviles-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <!--Título del documento-->
                <title>Waresoft | ' . $title . '</title>
              </head>
        <body>
       ';

        //elaboracion de navbar

        print '
        
        
        <nav class="navbar navbar-expand-lg fixed-top" id="navbar" role="navigation" >
            <a class="navbar-brand" href="index.php">
            <img src="../../resources/img/LogoClaro.png" width="140px" height="47px" class="d-inline-block align-top" alt="" id="logoNav">
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
              <a class="nav-link" aria-current="page" id="project" href="proyecto.php">PROYECTOS</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" id="services" href="servicios.php">SERVICIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="nosotros.php">NOSOTROS</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="contacto.php">CONTACTO</a>
          </li>
            <li class="nav-item">
                <button type="button" class="btn" id="claro" onclick="modoClaro()"><span class="material-icons margenModo">
                light_mode
                </span></button>
                <button type="button" class="btn" id="oscuro" onclick="modoOscuro()"><span class="material-icons margenModo">
                dark_mode
                </span></button>            
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

        print '
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../app/controllers/public/' . $controller . '"></script>
        <script type="text/javascript" src="../../app/controllers/public/template.js"></script>
        <script type="text/javascript" src="../../resources/js/sweetalert.min.js"></script>
        <script src="../../app/helpers/components.js"></script>
        <script src="https://www.google.com/recaptcha/api.js?render=6Lf0cuAhAAAAAJIimQGNnPTNO5ww7TS9kkkQnvwm"></script>
<!--         <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
 -->


        <div class="container" id="container">
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

                <div class="InfoFooter col col-md-4 col-sm-12 col-12" >

                <span class="material-icons iconos">
                location_on
                </span><span class="worksans">
                7a Calle Poniente 5146, Colonia Escalon, San Salvador, El Salvador</span>
                <br>

                <span class="material-icons iconos">
                phone
                </span> 
                <span class="worksans">
                +503 2222-2222</span>
                <br>
                
                </div>

                
        </footer>
        </div>
       
        
</main>
        
        </body>
        </html> 
    ';
    }

    /*template para formulario*/
    public static function formTemplate()
    {

        print '<div class="container animate__animated animate__fadeInLeft" id="formContainer ">
        <p class="tituloExperiencia">CONTÁCTANOS</p>

      <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-sm-12">
          <h2 class="headers">En <span class="headerceleste">Waresoft</span>, juntos innovamos, crecemos y ganamos</h2>
          <form method="post" id="save-form" autocomplete="off" >
          <div style="display: none">     
          <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
          </div>
              <div class="row margenform">
                  <div class="col col-md-5 col-lg-5 col-xl-5 col-sm-12 col-12" id="colForm">
                        <h1 class="numerows">+20</h1>
                        <h5 class="textoForm">AÑOS EXPERIENCIA EN CHILE</h5>

                        <h1 class="numerows">+4</h1>
                        <h5 class="textoForm">AÑOS DE PRESENCIA EN CENTROAMÉRICA</h5>
                        
                  </div>
                  <div class="col col col-md-7 col-lg-7 col-xl-7 col-sm-12 col-12">
                      <label class="forms">NOMBRE COMPLETO</label>
                      <input id="nombre" name="nombre" type="text" class="form-control forms-input" placeholder="Nombre" required> 
                      <br>
                      <label class="forms">¿QUÉ BUSCAS?</label>
                      <input id="comentarios" name="comentarios" type="text" class="form-control forms-input" placeholder="Comentarios" required>
                      <br>
  
                      <label class="forms">CORREO ELECTRÓNICO</label>
                      <input type="email" id="email" name="email" class="form-control forms-input" placeholder="Correo Electrónico" required>
                      <br>

                      <label class="forms">MENSAJE</label>
                      <textarea id="mensaje" name="mensaje" class="form-control forms-textarea" placeholder="Mensaje" rows="5" required></textarea>
                      <br>
                      <div class="col-md-12 text-center">
                          <button type="submit" id="enviar" name="enviar"  class="btn btn-primary forms-button">Enviar</button>
                          <div class="spinner-border m-3 d-none loadingForm" id="spinner"  role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                      </div>
                  </div>
                  <div class="row" id="badgeMobile">
                  
                  <div class="col-6 col-sm-6 md-7">
                  <h1 class="numerows">4<sup>+</sup></h1>
                  </div>

                  <div class="col-6 col-sm-6 mt-5">
                  <h5 class="headers">AÑOS</h5>
                      <h5 class="headers">EXPERIENCIA</h5>
                      <h5 class="headers">LABORAL</h5>
                  <div/>
                  
                  </div>
              </div>
          </form>
  
      </div>
  
  </div>
  </div>';
    }


    /*template de slier infinito*/

    public static function infiniteSlider()
    {

        print '<div class="slider">
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
              <img src="../../resources/img/udb.png" height="250" width="250" alt="" />
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
              <img src="../../resources/img/udb.png" height="250" width="250" alt="" />
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
              <img src="../../resources/img/udb.png" height="250" width="250" alt="" />
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
              <img src="../../resources/img/udb.png" height="250" width="250" alt="" />
          </div>
      
          </div>
  </div>';
    }

    /*template de banner ws academy*/

    public static function wsacademyBanner()
    {
        print '<div class="wsacademy">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                      <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-sm-12">
                          <div class="row ">
                              <div class="col col col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12">
                                  <img src="../../resources/img/wsacademy.png" alt="" id="imgwsacademy" class="imgwsacademy">
                                  <p class="textowsacademy">Empieza tu camino como profesional TI. JavaScript, Angular,
                                      Python,React, Base de Datos, Big Data, Business Inteligent
                                      y muchas más certificaciones que tu puedes tomar</p>
                                  <div class="row">
                                      <div class="col col-md-1 col-lg-1 col-xl-1 col-sm-12 col-12">
                                          <a class="btn botonwsacademy" href="https://waresoft.academy/contact/" target="_blank" role="button">¡Aplica a una beca!</a>
                                      </div>
                                      <div class="col col-md-11 col-lg-11 col-xl-11 col-sm-12 col-12 links">
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
                                          <a class="btn wslink" href="https://waresoft.academy/" target="_blank" role="button">Ir a página 〉</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
            
           ';
    }

    public static function wsacademyMobile()
    {

        print ' <div class="wsacademyMobile">

        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-sm-12">
                <div class="row ">
                    <img src="../../resources/img/wsacademy.png" alt="" id="bannerMobile" class="img-fluid" style="padding:40px 40px 0px 40px;">
                    <br>
                    <p class="mobileText">Empieza tu camino como profesional TI. JavaScript, Angular,
                        Python,React, Base de Datos, Big Data, Business Inteligent
                        y muchas más certificaciones que tu puedes tomar</p>
    
    
                    <div class="col col-sm-12 col-12 text-center">
                        <a class="btn botonwsacademy" style="margin-left:0px" href="https://waresoft.academy/contact/" target="_blank" role="button">¡Aplica a una beca!</a>
                    </div>
    
                    <div class="col col-sm-12 col-12 links text-center">
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
    
                    <div class="row" style="margin-top : 20px;">
                        <div class="col-sm-10 col-10">
    
                            <img src="../../resources/img/modelows.png" class="img-fluid" alt="">
    
    
                        </div>
                        <div class="col-sm-2 col-2">
    
                        <a class="btn wslink" href="https://waresoft.academy/" style="margin-left: -95px; margin-top: 50px; font-size: 20px;"target="_blank" role="button">Ir a página 〉</a>
    
    
                        </div>
                    </div>
    
    
                </div>
            </div>
        </div>
    
    
    </div>';
    }

    /*template carousel*/

    public static function carousel()
    {
        print '<div id="myCarousel" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video class="" width="1920" height="1080" autoplay loop muted src="../../resources/video/programming.mp4"></video>
                <div class="carousel-caption d-flex flex-column justify-content-center " style="top: 0">
                    <div class="row">
                        <div class="col borderCol">
                            <p class="titulosSliderImage">SOFTWARE</p>
                            <h1 class="titulosSlider">Imagina</h1>
                            <h1 class="titulosSlider"><span class="headercelesteSlider">Y lo </span></h1>
                            <h1 class="titulosSlider">Hacemos</h1>
                            <br>
    
                            <p class="titulosSliderImage2"> <a class="btn btnSlider" href="proyecto.php" role="button">Ver proyecto 〉</a></p>
    
    
                        </div>
    
    
                    </div>
    
                </div>
            </div>
            <div class="carousel-item">
                <video width="1920" height="1080" autoplay loop muted src="../../resources/video/coding.mp4"></video>
                <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                    <div class="row">
                        <div class="col borderCol">
                            <p class="titulosSliderImage">SOFTWARE</p>
                            <h1 class="titulosSlider">Imagina</h1>
                            <h1 class="titulosSlider"><span class="headercelesteSlider">Y lo </span></h1>
                            <h1 class="titulosSlider">Hacemos</h1>
                            <br>
    
                            <p class="titulosSliderImage2"> <a class="btn btnSlider" href="https://waresoft.academy/" role="button">Ver proyecto 〉</a></p>
    
    
                        </div>
    
    
                    </div>
    
                </div>
            </div>
            <div class="carousel-item">
                <video class="" autoplay loop muted src="../../resources/video/Red.mp4"></video>
                <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                    <div class="row">
                        <div class="col borderCol">
                            <p class="titulosSliderImage">SOFTWARE</p>
                            <h1 class="titulosSlider">Imagina</h1>
                            <h1 class="titulosSlider"><span class="headercelesteSlider">Y lo </span></h1>
                            <h1 class="titulosSlider">Hacemos</h1>
                            <br>
    
                            <p class="titulosSliderImage2"> <a class="btn btnSlider" href="https://waresoft.academy/" role="button">Ver proyecto 〉</a></p>
    
    
                        </div>
    
    
                    </div>
    
                </div>
            </div>
            <div class="carousel-item">
                <video class="" autoplay loop muted src="../../resources/video/video.mp4"></video>
                <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                    <div class="row">
                        <div class="col borderCol">
                            <p class="titulosSliderImage">SOFTWARE</p>
                            <h1 class="titulosSlider">Imagina<br></h1>
                            <h1 class="titulosSlider"><span class="headercelesteSlider">Y lo </span></h1>
                            <h1 class="titulosSlider">Hacemos</h1>
                            <br>
    
                            <p class="titulosSliderImage2"> <a class="btn btnSlider" href="https://waresoft.academy/" role="button">Ver proyecto 〉</a></p>
    
    
                        </div>
    
    
                    </div>
    
                </div>
            </div>
    
    
    
            <ul class="nav nav-pills nav-justified justify-content-end">
                <li data-bs-target="#myCarousel" class="active" data-bs-slide-to="0"><a href="#">01 <span class="spanSlider">Servicio <br>Tecnología &nbsp;</span> </a></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"><a href="#">02 <span>Servicio <br>Software</span></a></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"><a href="#">03 <span>Servicio <br>Cloud</span></a></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="3"><a href="#">04 <span>Servicio <br>Digital</span></a></li>
    
            </ul>
    
    
        </div>
    
    </div>
    
    </div>
    ';
    }

    /*template carousel de proyectos*/
    public static function projectSlider()
    {

        print '
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators" id="indicators">
                
            </div>
            <div class="carousel-inner" id="contenidoCarousel">
                
            
               
            </div>
        </div>
        ';
    }

    /*template secccion de servicios*/
    public static function serviceSlider()
    {
        print '
        <div class="container d-flex flex-column justify-content-center h-100" style="top: 0">
            <div class="row">
                <div class="col marginVideo col-md-7 col-lg-6 col-xl-6 col-sm-12 col-12 ">
                    <video class="img-fluid" id="video1" autoplay loop muted src="../../resources/video/coding.mp4"></video>
                    <video class="img-fluid d-none" id="video2" autoplay loop muted src="../../resources/video/programming.mp4"></video>
                    <video class="img-fluid d-none" id="video3" autoplay loop muted src="../../resources/video/Red.mp4"></video>
                    <video class="img-fluid d-none" id="video4" autoplay loop muted src="../../resources/video/Electronica.mp4"></video>
        
        
                </div>
                <div class="col col-md-5 align-items-center col-lg-6 col-xl-6 col-sm-12 col-12 ">
                    <p class="tituloExperiencia">SERVICIOS</p>
                    <h2 id="titulo1" class="titulosExperiencia">Estamos <br>aquí<br>para ayudarte</h2>
                    <br>
                    <ul class="listaServicios">
                        <li class="item"><button id="btnV1" class="buttonServicios activeServicios" onclick="showVideo1()">01. SOLUCIONES DE TECNOLOGÍA
                        </button></li>
                        <li class="item"><button id="btnV2" class="buttonServicios" onclick="showVideo2()">02. ARQUITECTURA DE SOFTWARE
                        </button></li>
                        <li class="item"><button id="btnV3" class="buttonServicios" onclick="showVideo3()">03. SERVICIO CLOUD</button></li>
                        <li class="item"><button id="btnV4" class="buttonServicios" onclick="showVideo4()">04. DIGITAL DESIGN SERVICE
                        </button></li>
        
                    </ul>
        
        
                </div>
        
            </div>
        </div>';
    }

    /*slider equipo waresoft*/
    public static function  teamSlider()
    {
        print '
        <div class="container__slider ">

    <div class="container">
    <p class="tituloExperiencia">NOSOTROS</p>

        <input type="radio" name="slider" class="d-none" id="item-1" checked>
        <input type="radio" name="slider" class="d-none" id="item-2">
        <input type="radio" name="slider"class="d-none"  id="item-3">

        <div class="cards">
            <label class=" card col-lg-5 col-sm-12 col-12 col-xl-5 layout decoracion" for="item-1" id="selector-1">
                <img src="../../resources/img/marco.png" class="profile" alt="">
                <h1 class="nombres item-padding">Marco Arévalo</h1>

                <h3 class="rol item-padding">Director</h3>

                
                
                <p class="parrafoEquipo item-padding">Ingeniero en Gestión e Informática, titulado
                 con honores en el 2006, especialista en evaluación, implementación y de proyectos IT,
                  arquitectura de software,infraestructura, automatización de 
                inteligencia de negocios a nivel nacional e internacional. <span id="dots"></span><span id="more"> Vasta experiencia como consultor senior en proyectos de infraestructura, salud, finanzas, banca, software, factory, business intelligence,integración,ERP, facturación electrónica, PaaS y SaaS, servicios de integración, interrelacionado con diversas plataformas de desarrollo y procesos de negocio local y latinoamericano. Con estudios certificados en Ingeniería del Software y Gestión de Proyectos.</span>
                </p>
                <button class="btn btnRead" onclick="myFunction()" id="myBtn">Leer más</button>


            </label>
            <label class=" card col-lg-5 col-sm-12 col-12 col-xl-5 layout decoracion" for="item-2" id="selector-2">
                <img src="../../resources/img/cesar.png" class="profile" alt="">



                <h1 class="nombres item-padding">Cesar Quintanilla</h1>

                <h3 class="rol item-padding">Jefe de Proyecto </h3>

                <p class="parrafoEquipo item-padding">Soy responsable de atender las necesidades de los analistas de sistemas, brindando una solución a los requerimientos que estos necesiten, estableciendo control de avances y velando el buen término la ejecución de los proyectos.
                </p>
            </label>
            <label class=" card col-lg-5 col-sm-12 col-12 col-xl-5 layout decoracion" for="item-3" id="selector-3">
                <img src="../../resources/img/kath.png" class="profile" alt="">



                <h1 class="nombres item-padding">Katherinne Márquez</h1>

                <h3 class="rol item-padding">Jefa de Proyecto </h3>

                <p class="parrafoEquipo item-padding">Mi función dentro de la empresa Waresoft SA. De C.V. es gestionar los proyectos, planificar, definir recursos, coordinar y supervisar el desarrollo del proyecto, con el objetivo de cumplir con las fechas y alcances propuestos inicialmente y con la mejor calidad posible.
                </p>
            </label>



        </div>

    </div>

    
    

</div>
        
    ';
    }

    /*template detalle de proyecto seleccionado*/
    public static function projectTemplate()
    {
        print '<div class="container" id="formContainer">

        <div class="row d-flex justify-content-center align-items-center animate__animated animate__fadeInLeft h-100">
            <div class="col-12 col-md-7 col-lg-6 col-xl-6 col-sm-12 " >
                <p class="titulosHorizontal">EXPERIENCIA</p>
                <div class="row margenform">
                    <div class="col col-md-7 col-lg-7 col-xl-7 col-sm-12 col-12 marginsuperior">
                        <h2 class="titulosExperiencia" id="tituloProyecto"></h2>

    
                        <p class="parrafoExperiencia2" id="parrafoPrincipal"></p>
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
    
                        <div class="indicadores" style="transform: rotate(-90deg);">
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
    </div>';
    }

    /*casos de exito*/
    public static function getProjects()
    {
        print '<div class="container" id="formContainer">
        <p class="tituloExperiencia">CASOS DE ÉXITO</p>
    
        <div class="row justify-content-center animate__animated animate__backInUp" id="proyectos">
    
    
    
    
        </div>
    
        <div class="row justify-content-center animate__animated animate__backInUp" id="proyectos2">
    
    
    
    
        </div>
    
    </div>';
    }


    public static function getServices()
    {

        print '<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <div class="container d-flex flex-column justify-content-center marginsuperior  animate__animated animate__fadeInLeft">
            <div class="row ">
                <div class="col col-md-12 col-lg-5 col-xl-5 col-sm-12 col-12">
                    <p class="tituloExperiencia" >SERVICIOS</p>
                    <h6 class="headers" style="font-size:36px">Descubra lo que podemos hacer por usted
                    </h6>
                    <br>
                    <ul class="listaServicios" id="listaServicios" style="line-height:400%">
                        <li class="item"><button id="btn1" class="buttonServicios2 activeServicios2">01. Soluciones de tecnología 
                        </button></li>
                        <li class="item"><button id="btn2" class="buttonServicios2">02. Arquitectura de software</button></li>
                        <li class="item"><button id="btn3" class="buttonServicios2">03. SERVICIO CLOUD</button></li>
                        <li class="item"><button id="btn4" class="buttonServicios2">04. Digital Design Service</button></li>
        
                    </ul>
        
                </div>
                <div class="col  col-md-12 col-lg-5 col-xl-6 col-sm-12 col-12 catalogo ">
        
        
                    <div id="tecnologia" class="servicios">
                        <img src="../../resources/img/tecnologia-.png" alt="" class="img-fluid imagenesServicios">
        
                        <h3 class="headerServicios">Soluciones de tecnología</h3>
                        <p class="parrafoEquipo">Hoy en día, el papel de la automatización se ha vuelto tan importante que nos obliga a pensar en nuevas formas de trabajo. Cuanto mejor y más rápido podamos realizar funciones repetitivas dentro de nuestras organizaciones, más oportunidades tendremos de mejorar el valor añadido de las mismas.</p>
                        
                        <ul>
                            <li class="parrafoEquipo">Soluciones IA</li>
                            <li class="parrafoEquipo">Capacitación y Relatoría</li>
                            <li class="parrafoEquipo">Asesoria Empresarial</li>
                            <li class="parrafoEquipo">Big Data</li>
                            <li class="parrafoEquipo">Seguridad Informática</li>
                        </ul>
                        </p>
                    </div>
        
                    <div id="software" class="d-none">
                        <img src="../../resources/img/software.png" alt="" class="img-fluid imagenesServicios">
        
                        <h3 class="headerServicios">ARQUITECTURA DE SOFTWARE</h3>
                        <p class="parrafoEquipo">No es fácil elegir las mejores herramientas de desarrollo de software para su proyecto. Puede llevar tiempo, paciencia y experiencia encontrar el conjunto de herramientas adecuado que se ajuste a tus necesidades.                        </p>

                        <ul>
                            <li class="parrafoEquipo">Arquitectura de software</li>
                            <li class="parrafoEquipo">Desarrollo de sofware a medida</li>
                            <li class="parrafoEquipo">Desarrollo de aplicaciones</li>
                            <li class="parrafoEquipo">Testing</li>
                            <li class="parrafoEquipo">Mantenimiento</li>
                        </ul>
                    </div>
        
                    <div id="cloud" class="d-none">
                        <img src="../../resources/img/cloud.png" alt="" class="img-fluid imagenesServicios">
        
                        <h3 class="headerServicios">servicio cloud </h3>
                        <p class="parrafoEquipo">Los servicios en la nube son una de las tendencias más candentes de la informática en la actualidad. Es una nueva forma de crear y utilizar infraestructuras, servicios y aplicaciones informáticas. A las aplicaciones basadas en la nube pueden acceder múltiples usuarios de todo el mundo, en cualquier lugar que tenga una conexión a Internet.

                        </p>
                        <ul>
                            <li class="parrafoEquipo">Backup as Service</li>
                            <li class="parrafoEquipo">Desarrollo de sofware a medida</li>
                            <li class="parrafoEquipo">Infraestructura as a Service</li>
                            <li class="parrafoEquipo">Disaster Recovery as a Service</li>
                            <li class="parrafoEquipo">Desktop as a Service</li>
                        </ul>
                        </p>
                    </div>
        
                    <div id="digital" class="d-none">
                        <img src="../../resources/img/uml.png" alt="" class="img-fluid imagenesServicios">
        
                        <h3 class="headerServicios">digital design service</h3>
                        <p class="parrafoEquipo">En Waresoft entendemos la importancia de la arquitectura UX / UI y lo que trae a mejores beneficios para nuestros clientes. Es por eso que al momento de diseñar una página web, software o aplicación implementamos todos los conocimientos existentes de arquitectura UX / UI.</p>
                        <ul>
                            <li class="parrafoEquipo">Arquitectura UX/UI</li>
                            <li class="parrafoEquipo">Diseño de Interfaz UI</li>
                            <li class="parrafoEquipo">Research UX</li>
                            <li class="parrafoEquipo">Branding</li>
                        </ul>
                        </p>
                    </div>
        
                    <div class="indicadores" id="indicadores" style=" transform: rotate(-90deg);margin-left: 650px;margin-top: -300px;">
        
                        <button type="button" style="pointer-events:none;" class="botonesindicador" id="btnOn"></button>
                        <button type="button" style="pointer-events:none;" class="botonesindicador" id="btnNext"></button>
                        <button type="button" style="pointer-events:none;" class="botonesindicador" id="btnNext2"></button>
                        <button type="button" style="pointer-events:none;" class="botonesindicador activeIndicador" id="btnPrev"></button>
        
        
                    </div>
        
        
                </div>
        
        
            </div>
        </div>
        
        
        
        
        <br>
        <br>
        <br>
        ';
    }

    public static function getBanner()
    {
        print '<br>
        <br>
        <br>
       

        <div class="nosotros animate__animated animate__fadeInLeft">
            <h1 class="headers margin-left">Tu mejor aliado estratégico</h1>
            <h5 class="subtitulo margin-left">Somos una empresa que brinda soluciones tecnológicas y creativas</h5>

        </div>';
    }

    public static function getTeamInfo()
    {

        print '
        
        <br>
        <br>
     

    <div class="container d-flex flex-column justify-content-center marginsuperior  animate__animated animate__fadeInLeft">
       
        <div class="row ">

            <div class="col col-md-12 col-lg-5 col-xl-5 col-sm-12 col-12">

                <br>
                <div class="info">
                    <h1 class="margin-left headers">Acerca de Waresoft</h1>

                </div>
                <br>

                
                <p class="margin-left parrafoEquipo on">WARESOFT S.A DE C.V. Es una empresa constituida en El Salvador ,
                    el 4 de abril del 2019, enfocada en la asesoría de soluciones tecnológicas
                    empresariales. con clientes en gran parte de latinoamérica incluido
                    Chile, El Salvador, Panamá, Perú, Argentina y Costa Rica, con experiencia
                    de más de años en mejora de procesos, implementación de arquitecturas
                    empresariales, Arquitecturas de sistemas expertos en el área de procesos
                    industriales, financieros, contables, gestión de personas, gestión médica,
                    procesos de medios electrónicos, facturación electrónica, e-commerce,
                    desarrollo de soluciones móviles entre otros.
                </p>

            </div>
            <div class="col  col-md-12 col-lg-5 col-xl-6 col-sm-12 col-12 catalogo ">
    
            

            <div id="carouselEquipo" class="margin-left vertical carousel slide" data-bs-ride="false" style="margin-top:50px;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselEquipo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselEquipo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselEquipo" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../resources/img/img1.png" alt="" class="img-fluid imagenesServicios">
        
                </div>
                <div class="carousel-item">
                    <img src="../../resources/img/img2.png" alt="" class="img-fluid imagenesServicios">
        
                </div>
                <div class="carousel-item">
                    <img src="../../resources/img/img3.png" alt="" class="img-fluid imagenesServicios">
        
                </div>
            </div>
            
        </div>



            </div>


        </div>


        <br>
        <br>
        <br>
        <br>

        <div class="container__slider2">
 <div class="info">

        <h1 class="headers margin-left">Nosotros en números</h1>
        </div>        <br>

    <div class="container">

        <input type="radio" name="slider2" class="d-none" id="item-5" checked>
        <input type="radio" name="slider2" class="d-none" id="item-6">
        <input type="radio" name="slider2" class="d-none" id="item-7">
        <input type="radio" name="slider2" class="d-none" id="item-8">


        <div class="cards">
            <div class=" card carta col-lg-5 col-sm-12 col-12 col-xl-5 layout decoracion" for="item-5" id="selector-5">
                <img src="../../resources/img/location.png" height="45" width="34" alt="">
                <h3 class="headers" style="margin-top:15px">9 Países</h3>
                <p class="parrafoEquipo">Estamos orgullosos de ser líderes en desarrollo, con presencia en nueve países y proporcionamos soluciones innovadoras a clientes de todo el mundo.

                </p>

            </div>
            <div class=" card carta col-lg-5 col-sm-12 col-12 col-xl-5 layout decoracion" for="item-6" id="selector-6">
                <img src="../../resources/img/enterprise.png" height="40" width="40" alt="">
                <h3 class="headers" style="margin-top:15px">15 Empresas</h3>
                <p class="parrafoEquipo">Estamos orgullosos de haber realizado proyectos de tecnología e innovación en países de todo el mundo bajo estándares de calidad y sostenibilidad.

                </p>
            </div>
            <div class=" card carta col-lg-5 col-sm-12 col-12 col-xl-5 layout decoracion" for="item-7" id="selector-7">
                <img src="../../resources/img/crown.png" height="38" width="35" alt="">
                <h3 class="headers" style="margin-top:15px">40 Certificaciones</h3>
                <p class="parrafoEquipo">Con más de 40 certificaciones nacionales e internacionales en el ámbito tecnológico y de la innovación, podemos ayudarle a encontrar la solución adecuada para su negocio.

                </p>
            </div>

            <div class=" card carta col-lg-5 col-sm-12 col-12 col-xl-5 layout decoracion" for="item-8" id="selector-8">
                <img src="../../resources/img/person.png"  height="36" width="37" alt="">
                <h3 class="headers" style="margin-top:15px">200 Profesionales</h3>
                <p class="parrafoEquipo">Nos complace anunciar que hemos completado con éxito proyectos en los países en los que estamos presentes, y que estos proyectos se han entregado a tiempo y dentro del presupuesto.

                </p>
            </div>

        </div>
    </div>

</div>
        
        <!-- <div class="wrapper row margin-left" id="wrapper" style="margin-top:50px">
            <div class="item col-lg-5 col-sm-12 col-12 col-xl-5 layout decoracion">
            <img src="../../resources/img/location.png" alt="" class="img-fluid">
            <h3 class="headers" style="margin-top:15px">9 Países</h3>
            <p class="parrafoEquipo">Nos enorgullece ser líderes en el desarrollo con presencia en 9 países brindando soluciones innovadoras con ubicaciones en zonas estratégicas.
            </p>          
            </div>

            <div class="item col-lg-5 col-sm-12 col-12 col-xl-5 layout decoracion">
            <img src="../../resources/img/enterprise.png" alt="" class="img-fluid">
            <h3 class="headers" style="margin-top:15px">15 Empresas</h3>
            <p class="parrafoEquipo">Nos complace saber que hemos entregado proyectos de tecnología e innovación bajo estándares de calidad y sostenibilidad en los países en los tenemos presencia.
            </p>        
            </div>

           <button class="btn btnScroll" id="btnScroll" onclick="clicked()";> </button>

            <button class="btn btnScroll2" id="btnScroll2" onclick="clicked2()";> </button> 


            <div class="item col-lg-5 col-sm-12 col-12 col-xl-5 layout decoracion">
            <img src="../../resources/img/crown.png" alt="" class="img-fluid">
            <h3 class="headers" style="margin-top:15px">40 Certificaciones</h3>
            <p class="parrafoEquipo">Con un conocimiento respaldado por más de 40 certificaciones tanto nacionales como internacionales en el ambiente tecnológico y de innovación.
            </p>     
            </div>

            <div class="item col-lg-5 col-sm-12 col-12 col-xl-5 layout decoracion">
            <img src="../../resources/img/person.png" alt="" class="img-fluid">
            <h3 class="headers" style="margin-top:15px">200 Profesionales</h3>
            <p class="parrafoEquipo">Nos complace saber que hemos entregado proyectos de tecnología e innovación bajo estándares de calidad y sostenibilidad en los países en los tenesmos presencia.
            </p>     
            </div>

            
        </div>-->


       <!--   <div class="col-12 text-center botonesMobile">
        <button class="btn btnScrollMobile" id="btnScrollMobile1" onclick="clicked3()";> </button>
        <button class="btn btnScrollMobile2" id="btnScrollMobile2" onclick="clicked4()";> </button>


        </div>  -->';
    }
}
