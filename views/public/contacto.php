<?php
//Se imprime la plantilla del encabezado y se envía el titulo para la página web

include('../../app/helpers/template.php');
webSite::header('Contacto');
?>

<br />
<br />
<br />
<br />

<?php

webSite::formTemplate();

?>

<!-- <html>
  <body>
    <div style='background: url(../../resources/img/fondoCorreo.png)'>
      <div class='row justify-content-center'>
        <div class='col-12 d-flex justify-content-center align-items-center'>
          <img
            src='../../resources/img/logoOscuro.png'
            alt=''
            width='328'
            height='115'
            style='margin-top: 25px; margin-bottom: 20px'
          />
        </div>
        <div class='col-12 d-flex justify-content-center align-items-center'>
          <h1
            style='
              color: #fcfcfc;
              font-family: Montserrat;
              font-style: normal;
              font-weight: 700;
              font-size: 40px;
              margin-bottom: 30px;
            '
          >
            ¡Gracias por contactarse con nosotros!
          </h1>
        </div>

        <div class='col-12 d-flex justify-content-center align-items-center'>
          <img
            src='../../resources/img/checkCorreo.png'
            alt=''
            style='margin-bottom: 25px'
          />
        </div>

        <div class='col-12 d-flex justify-content-center align-items-center'>
          <p
            style='
              font-family: Work Sans;
              font-style: normal;
              font-weight: 400;
              font-size: 24px;
              color: #ffffff;
              margin-bottom: 35px;
              text-align: justify;

            '
          >
            Hemos recibido correctamente tu mensaje y en breve estaremos
            respondiendo tu solicitud.
          </p>
        </div>
        <div class='col-12 d-flex justify-content-center align-items-center'>
          <a
            target='_blank'
            style='
              text-decoration: none;
              color: #f8f8f8;
              font-family: Work Sans;
              font-style: normal;
              font-weight: 400;
              border: 3px solid #3751ff;
              border-radius: 6px;
              height: auto;
              margin-bottom: 30px;
              padding: 20px;
              font-size: 24px;
              text-align: center;
            '
            href='https://waresoft.academy'
          >
            <span>Recuerda visitar nuestra academia</span><br /><span>
              waresoft.academy</span
            ></a
          >
        </div>

        <div
          class='col-12 d-flex justify-content-center align-items-center'
          style='margin-bottom: 20px'
        >
          <p
            style='
              font-family: Work Sans;
              font-style: normal;
              font-weight: 400;
              font-size: 22px;
              color: #f8f8f8;
              text-align: justify;
            '
          >
            No te olvides de seguirnos en nuestras redes sociales, encuentranos
            en:
          </p>
        </div>

        <div
          class='col-12 d-flex justify-content-center align-items-center'
          style='margin-bottom: 40px'
        >
          <a
            href='https://www.linkedin.com/company/waresoftsv'
            target='_blank'
            style='
              padding-right: 5px;
              text-decoration: none;
              margin-right: 20px;
            '
          >
            <img
              src='../../resources/img/lkBlanco.png'
              width='70'
              height='70'
              class='d-inline-block'
              alt=''
            />
          </a>

          <a
            style='
              padding-right: 5px;
              text-decoration: none;
              margin-right: 20px;
            '
            href='https://www.facebook.com/waresoftsv'
            target='_blank'
          >
            <img
              src='../../resources/img/fbBlanco.png'
              width='70'
              height='70'
              class='d-inline-block'
              alt=''
            />
          </a>

          <a
            style='
              padding-right: 5px;
              text-decoration: none;
              margin-right: 20px;
            '
            target='_blank'
          >
            <img
              src='../../resources/img/instaBlanco.png'
              width='70'
              height='70'
              class='d-inline-block'
              alt=''
            />
          </a>
        </div>

        <div
          class='col-12 d-flex justify-content-center align-items-center'
          style='margin-bottom: 30px'
        >
          <footer style='background: transparent; text-align: center; border-top:2px solid #6B7EFD;'>
            <h1
              style='
                font-family: Montserrat;
                font-style: normal;
                font-weight: 500;
                font-size: 14px;
                line-height: 21px;
                letter-spacing: 0.2em;
                text-transform: uppercase;

                color: #fcfcfc;
              '
            >
              WARESOFT
            </h1>
          </footer>
        </div>
      </div>
    </div>
  </body>
</html> -->

<?php
//Se imprime la plantilla del footer y se envía el controlador a usar

webSite::footer('contact.js');
?>
