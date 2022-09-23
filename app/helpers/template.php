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
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
                <link rel="icon" type="image/png" href="../../resources/img/iconows.png" />
                <link type="text/css" rel="stylesheet" href="../../resources/css/styles.css" />

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> 
                <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

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
            <img src="../../resources/img/LogoClaro.png" width="117px" height="47px" class="d-inline-block align-top" alt="" id="logoNav">
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
    ';
    }

    /*template para formulario*/
    public static function formTemplate()
    {

        print '<div class="container animate__animated animate__fadeInLeft" id="formContainer ">
      <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-sm-12">
          <p class="titulosHorizontal">CONTÁCTANOS</p>
          <h2 class="headers">En <span class="headerceleste">Waresoft</span> Juntos innovamos, crecemos y ganamos</h2>
          <form method="post" id="save-form" autocomplete="off" >
          <div style="display: none">     
          <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
          </div>
              <div class="row margenform">
                  <div class="col col-md-5 col-lg-5 col-xl-5 col-sm-12 col-12 marginsuperior" id="colForm">
                      <h1 class="numerows">4<sup>+</sup></h1>
                      <h5 class="headers">AÑOS</h5>
                      <h5 class="headers">EXPERIENCIA</h5>
                      <h5 class="headers">LABORAL</h5>
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
                <video class="" width="1920" height="1080" autoplay loop muted src="../../resources/video/pexels-tea-oebel-6804109.mp4"></video>
                <div class="carousel-caption d-flex flex-column justify-content-center " style="top: 0">
                    <div class="row">
                        <div class="col borderCol">
                            <p class="titulosSliderImage">SOFTWARE</p>
                            <h1 class="titulosSlider">Imagina</h1>
                            <h1 class="titulosSlider"><span class="headercelesteSlider">Y lo </span></h1>
                            <h1 class="titulosSlider">Hacemos</h1>
                            <br>
    
                            <p class="titulosSliderImage2"> <a class="btn btnSlider" href="experiencia.php" role="button">Ver proyecto 〉</a></p>
    
    
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
                <video class="" autoplay loop muted src="../../resources/video/Red - 14900.mp4"></video>
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
                <video class="" autoplay loop muted src="../../resources/video/Falla - 27706.mp4"></video>
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
                    <video class="img-fluid d-none" id="video2" autoplay loop muted src="../../resources/video/pexels-tea-oebel-6804109.mp4"></video>
                    <video class="img-fluid d-none" id="video3" autoplay loop muted src="../../resources/video/Red - 14900.mp4"></video>
                    <video class="img-fluid d-none" id="video4" autoplay loop muted src="../../resources/video/Electronica - 5364.mp4"></video>
        
        
                </div>
                <div class="col col-md-5 align-items-center col-lg-6 col-xl-6 col-sm-12 col-12 ">
                    <p class="tituloExperiencia">SERVICIOS</p>
                    <h2 id="titulo1" class="titulosExperiencia">Estamos <br>aquí<br>para ayudarte</h2>
                    <br>
                    <ul class="listaServicios">
                        <li class="item"><button id="btnV1" class="buttonServicios activeServicios" onclick="showVideo1()">01. SERVICIO TECNOLOGÍA</button></li>
                        <li class="item"><button id="btnV2" class="buttonServicios" onclick="showVideo2()">02. SERVICIO SOFTWARE</button></li>
                        <li class="item"><button id="btnV3" class="buttonServicios" onclick="showVideo3()">03. SERVICIO CLOUD</button></li>
                        <li class="item"><button id="btnV4" class="buttonServicios" onclick="showVideo4()">04. SERVICIO DIGITAL</button></li>
        
                    </ul>
        
        
                </div>
        
            </div>
        </div>';
    }

    /*slider equipo waresoft*/
    public static function teamSlider()
    {
        print '
        <div id="carouselTeam" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselTeam" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselTeam" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselTeam" data-bs-slide-to="2" aria-label="Slide 3"></button>


            </div>
        <div class="carousel-inner">
    
    
            <div class="carousel-item active">
                <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
    
                    <div class="container overflow-hidden">
                        <p class="tituloExperiencia">NOSOTROS</p>
    
                        <br>
                        <br>
                        <br>
    
                        <div class="row ">
                            <div class="col decoracion">
                                <div class="p-3 layout">
    
                                    <img src="../../resources/img/marco.png" class="profile" alt="">
    
    
                                    <br>
                                    <br>
                                    <h1 class="nombres">Marco Arévalo</h1>
    
                                    <h3 class="rol">Director</h3>
    
                                    <br>
                                    <p class="parrafoEquipo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit ante interdum tincidunt. Rhoncus ac magna vestibulum sit hendrerit.
                                    </p>
    
    
    
    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <br>
                    <br>
                    <a href="nosotros.php" class="btn btnTeam" role="button">Ver Team 〉</a>
    
    
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                    <div class="container overflow-hidden">
                        <p class="tituloExperiencia">NOSOTROS</p>
    
                        <br>
                        <br>
                        <br>
    
                        <div class="row">
                            <div class="col decoracion">
                                <div class="p-3 layout">
    
                                    <img src="../../resources/img/kath.png" class="profile" alt="">
    
    
                                    <br>
                                    <br>
                                    <h1 class="nombres">Katherinne Márquez</h1>
    
                                    <h3 class="rol">Project Manager</h3>
    
                                    <br>
                                    <p class="parrafoEquipo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit ante interdum tincidunt. Rhoncus ac magna vestibulum sit hendrerit.
                                    </p>
    
    
    
    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <br>
                    <br>
                    <a href="nosotros.php" class="btn btnTeam" role="button">Ver Team 〉</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                    <div class="container overflow-hidden">
                        <p class="tituloExperiencia">NOSOTROS</p>
                        <br>
    
                        <br>
                        <br>
    
                        <div class="row ">
                            <div class="col decoracion">
                                <div class="p-3 layout">
    
                                    <img src="../../resources/img/marco.png" class="profile" alt="">
    
    
                                    <br>
                                    <br>
                                    <h1 class="nombres">Marco</h1>
    
                                    <h3 class="rol">Director</h3>
    
                                    <br>
                                    <p class="parrafoEquipo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit ante interdum tincidunt. Rhoncus ac magna vestibulum sit hendrerit.
                                    </p>
    
    
    
    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <br>
                    <br>
                    <a href="nosotros.php" class="btn btnTeam" role="button">Ver Team 〉</a>
                </div>
    
            </div>
    
        </div>
    </div>';
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
                    <p class="titulosHorizontal" style="margin-left:-100px; margin-top: 5px;">SERVICIOS</p>
                    <h6 class="headers" style="font-size:36px">Estamos aquí para ayudarte</h6>
                    <br>
                    <ul class="listaServicios" id="listaServicios" style="line-height:400%">
                        <li class="item"><button id="btnV1" class="buttonServicios2 activeServicios2">01. SERVICIO TECNOLOGÍA</button></li>
                        <li class="item"><button id="btnV2" class="buttonServicios2">02. SERVICIO SOFTWARE</button></li>
                        <li class="item"><button id="btnV3" class="buttonServicios2">03. SERVICIO CLOUD</button></li>
                        <li class="item"><button id="btnV4" class="buttonServicios2">04. SERVICIO DIGITAL</button></li>
        
                    </ul>
        
                </div>
                <div class="col  col-md-12 col-lg-5 col-xl-6 col-sm-12 col-12 catalogo ">
        
        
                    <div id="tecnologia" class="servicios">
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
        
                    <div id="software" class="d-none">
                        <img src="../../resources/img/software.png" alt="" class="img-fluid imagenesServicios">
        
                        <h3 class="headerServicios">ARQUITECTURA DE SOFTWARE</h3>
                        <p class="parrafoEquipo">La Arquitectura de Software se refiere a “las estructuras de un sistema, compuestas de elementos con propiedades visibles de forma externa y las relaciones que existen entre ellos.
                        <ul>
                            <li class="parrafoEquipo">Arquitectura de software</li>
                            <li class="parrafoEquipo">Desarrollo de sofware a medida</li>
                            <li class="parrafoEquipo">Desarrollo de aplicaciones</li>
                            <li class="parrafoEquipo">Testing</li>
                            <li class="parrafoEquipo">Mantenimiento</li>
                        </ul>
                        </p>
                    </div>
        
                    <div id="cloud" class="d-none">
                        <img src="../../resources/img/cloud.png" alt="" class="img-fluid imagenesServicios">
        
                        <h3 class="headerServicios">BACKUP AS A SERVICE (BaaS) </h3>
                        <p class="parrafoEquipo">El servicio de backup en línea, también conocido como backup en cloud o backup como servicio (BaaS), es un método de almacenamiento de datos fuera del sitio en el que se encuentran archivos, carpetas, O todo el contenido de una unidad de disco duro está respaldado regularmente por un proveedor de servicios en un repositorio de datos remoto basado en cloud seguro a través de una conexión de red.
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
        
                        <h3 class="headerServicios">ARQUITECTURA UX/UI</h3>
                        <p class="parrafoEquipo">En Waresoft entendemos la importancia de la arquitectura UX / UI y lo que trae a mejores beneficios para nuestros clientes. Es por eso que al momento de diseñar una página web, software o aplicación implementamos todos los conocimientos existentes de arquitectura UX / UI.
                        <ul>
                            <li class="parrafoEquipo">Arquitectura UX/UI</li>
                            <li class="parrafoEquipo">Diseño de Interfaz UI</li>
                            <li class="parrafoEquipo">Research UX</li>
                            <li class="parrafoEquipo">Branding</li>
                        </ul>
                        </p>
                    </div>
        
                    <div class="indicadores" id="indicadores" style=" transform: rotate(-90deg);margin-left: 600px;margin-top: -300px;">
        
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

    public static function getTeamInfo()
    {

            print '
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    <div class="container d-flex flex-column justify-content-center marginsuperior  animate__animated animate__fadeInLeft">
        <h1 class="headers margin-left">Tu mejor aliado estratégico</h1>
        <h5 class="subtitulo margin-left">Somos una empresa que brinda soluciones tecnológicas y creativas</h5>
        <div class="row ">

            <div class="col col-md-12 col-lg-5 col-xl-5 col-sm-12 col-12">
                <p class="titulosHorizontal" style="margin-left:-70px; margin-top: -75px;">NOSOTROS</p>

                <br>
                <div class="info">
                    <h1 class="margin-left titleTeam">ACERCA DE WARESOFT</h1>

                </div>
                <br>

                
                <p class="margin-left parrafoExperiencia2 on">WARESOFT S.A DE C.V. Es una empresa constituida en El Salvador ,
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
    





                <!--  <div class="indicadores" id="indicadores" style=" transform: rotate(-90deg);margin-left: 600px;margin-top: -300px;">

                    <button type="button" style="pointer-events:none;" class="botonesindicador" id="btnOn"></button>
                    <button type="button" style="pointer-events:none;" class="botonesindicador" id="btnNext"></button>
                    <button type="button" style="pointer-events:none;" class="botonesindicador" id="btnNext2"></button>
                    <button type="button" style="pointer-events:none;" class="botonesindicador activeIndicador" id="btnPrev"></button>


                </div> -->


            </div>


        </div>


        <br>
        <h1 class="headers margin-left">PERSONALIDAD DE LA MARCA</h1>
        <div class="row justify-content-center animate__animated animate__fadeInLeft" id="personalidad">
            <div class="col col-lg-4 col-xl-4 col-md-6 col-sm-12 col-xs-12 col-12 mt-4 d-flex justify-content-center align-items-center">
                <div class="tarjeta content selectedCard" id="tarjeta1" style="width:400px">
                    <!-- Fila para Información -->
                    <div class="row">
                        <div class="col-12 contenido text-center" style="opacity: 1;">
                            <img src="../../resources/img/avionPapel.png" style="margin-top:85px" class="img-fluid" alt="">
                            <h1 class="headersTarjeta" style="margin-top:30px">Innovadora</h1>
                            <p class="parrafoCard" style="text-align: center;">Buscando siempre pensar fuera de la caja. </p>

                        </div>
                    </div>
                    <!-- Fin de Tarjeta -->
                </div>
            </div>

            <div class="col col-lg-4 col-xl-4 col-md-6 col-sm-12 col-xs-12 col-12 mt-4 d-flex justify-content-center align-items-center">
                <div class="tarjeta content nextCard" id="tarjeta2" style="width:400px">
                    <!-- Fila para Información -->
                    <div class="row">
                        <div class="col-12 contenido text-center" style="opacity: 1;">
                            <img src="../../resources/img/persona.png" style="margin-top:85px" class="img-fluid" alt="">
                            <h1 class="headersTarjeta" style="margin-top:30px">Orientada al cliente</h1>
                            <p class="parrafoCard" style="text-align: center;">Escuchando y brindando orientación y soluciones personalizada.&nbsp;</p>

                        </div>
                    </div>
                    <!-- Fin de Tarjeta -->
                </div>
            </div>
            <div class="col col-lg-4 col-xl-4 col-md-6 col-sm-12 col-xs-12 col-12 mt-4 d-flex justify-content-center align-items-center">
                <div class="tarjeta content prevCard" id="tarjeta3" style="width:400px">
                    <!-- Fila para Información -->
                    <div class="row">
                        <div class="col-12 contenido text-center" style="opacity: 1;">
                            <img src="../../resources/img/like.png" style="margin-top:85px" class="img-fluid" alt="">
                            <h1 class="headersTarjeta" style="margin-top:30px">Calidad</h1>
                            <p class="parrafoCard" style="text-align: center;">Con un estándar establecido y llevado al detalle&nbsp;</p>

                        </div>
                    </div>
                    <!-- Fin de Tarjeta -->
                </div>
            </div>




        </div>
        <br>
        <br>
        <br>
        <h1 class="headers margin-left">Nuestras Características</h1>
        <div class="row " style="margin-top:50px">

            <div class="col col-md-7 col-lg-7 col-xl-7 col-sm-12 col-12  margin-left">

                <div class="row row-cols-2">
                    <div class="col">
                        <img src="../../resources/img/location.png" alt="" class="img-fluid">
                        <h3 class="headers" style="margin-top:15px">9 Países</h3>
                        <p class="parrafoEquipo">Nos enorgullece ser líderes en el desarrollo con presencia en 9 países brindando soluciones innovadoras con ubicaciones en zonas estratégicas.
                        </p>
                    </div>
                    <div class="col">
                        <img src="../../resources/img/enterprise.png" alt="" class="img-fluid">
                        <h3 class="headers" style="margin-top:15px">15 Empresas</h3>
                        <p class="parrafoEquipo">Nos complace saber que hemos entregado proyectos de tecnología e innovación bajo estándares de calidad y sostenibilidad en los países en los tenemos presencia.
                        </p>
                    </div>
                    <div class="col">
                        <img src="../../resources/img/crown.png" alt="" class="img-fluid">
                        <h3 class="headers" style="margin-top:15px">40 Certificaciones</h3>
                        <p class="parrafoEquipo">Con un conocimiento respaldado por más de 40 certificaciones tanto nacionales como internacionales en el ambiente tecnológico y de innovación.
                        </p>
                    </div>
                    <div class="col ">
                        <img src="../../resources/img/person.png" alt="" class="img-fluid">
                        <h3 class="headers" style="margin-top:15px">200 Profesionales</h3>
                        <p class="parrafoEquipo">Nos complace saber que hemos entregado proyectos de tecnología e innovación bajo estándares de calidad y sostenibilidad en los países en los tenesmos presencia.
                        </p>
                    </div>
                </div>

            </div>


        </div>


    </div>





    <br>
    <br>
    <br>';
    }
}
