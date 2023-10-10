<?php


require_once('../helpers/validator.php');
require_once('../models/mail.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require '../../libraries/phpmailer65/src/Exception.php';
require '../../libraries/phpmailer65/src/PHPMailer.php';
require '../../libraries/phpmailer65/src/SMTP.php';



$mailer = new PHPMailer(true);

if (isset($_GET['action'])) {
    $mail = new Mail;
    //Array para respuesta de la API
    $result = array('status' => 0, 'recaptcha' => 0, 'error' => 0, 'message' => null, 'exception' => null);

    switch ($_GET['action']) {
        case 'sendMail':
            $_POST = $mail->validateForm($_POST);
            $token = filter_input(INPUT_POST, 'g-recaptcha-response', FILTER_SANITIZE_STRING);
            if ($token) {
                $secretKey = '';
                $ip = $_SERVER['REMOTE_ADDR'];

                $data = array(
                    'secret' => $secretKey,
                    'response' => $token,
                    'remoteip' => $ip
                );

                $options = array(
                    'http' => array(
                        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                        'method'  => 'POST',
                        'content' => http_build_query($data)
                    ),
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false
                    )
                );

                $url = 'https://www.google.com/recaptcha/api/siteverify';
                $context  = stream_context_create($options);
                $response = file_get_contents($url, false, $context);
                $captcha = json_decode($response, true);

                if ($captcha['success']) {
                    if ($mail->setNombres($_POST['nombre'])) {
                        if (isset($_POST['nombre'])) {
                            if ($mail->setAsunto($_POST['comentarios'])) {
                                if (isset($_POST['comentarios'])) {
                                    if ($mail->setCorreo($_POST['email'])) {
                                        if (isset($_POST['email'])) {
                                            if ($mail->setMensaje($_POST['mensaje'])) {
                                                if (isset($_POST['mensaje'])) {
                                                    try {
                                                        $mailer->SMTPDebug = 0;
                                                        $mailer->isSMTP();
                                                        $mailer->Host       = 'c1960222.ferozo.com';
                                                        $mailer->SMTPAuth   = true;
                                                        $mailer->Username   = $username;
                                                        $mailer->Password   = $password;
                                                        $mailer->SMTPSecure = 'ssl';
                                                        $mailer->Port       = 465;
                                                        $mailer->CharSet = 'UTF-8';
                                                        $mailer->setFrom($mail->getCorreo(), $mail->getNombres());
                                                        $mailer->addAddress('diego.ramirez@waresoft.com.sv');

                                                        //Contenido
                                                        $mailer->isHTML(true);
                                                        $mailer->Subject = $mail->getAsunto();
                                                        $mailer->Body    = $mail->getMensaje();
                                                        if ($mailer->send()) {
                                                            $result['status'] = 1;
                                                            $result['message'] = 'Gracias por contactarse con nosotros ';
                                                            try {

                                                                $body = "<html>                                                 
                                                                <body>
                                                                <table width='100%'>
                                                                  <div style='background: url(http://waresoft.com.sv/resources/img/fondoCorreo.png); '>
                                                                    <div style='text-align:center; '>
                                                                      <div style='text-align: center;'>
                                                                        <img
                                                                          src='http://waresoft.com.sv/resources/img/LogoClaro.png'
                                                                          alt=''
                                                                          width='328'
                                                                          height='115'
                                                                          style='margin-top: 25px; margin-bottom: -10px'
                                                                        />
                                                                      </div>
                                                                      <div style='text-align: center;'>
                                                                        <h1
                                                                          style='
                                                                            color: black;
                                                                            font-style: normal;
                                                                            font-weight: 700;
                                                                            font-size: 40px;
                                                                            margin-bottom: 30px;
                                                                          '
                                                                        >
                                                                          ¡Gracias por contactarse con nosotros!
                                                                        </h1>
                                                                      </div>";

                                                                $body .= "

                                                                <div style='text-align: center;'>
                                                                <img
                                                                  src='http://waresoft.com.sv/resources/img/checkCorreo.png'
                                                                  alt=''
                                                                  style='margin-bottom: 25px'
                                                                />
                                                              </div>
                                                      
                                                              <div style='text-align: center;'>
                                                              <p
                                                                  style='
                                                                    font-style: normal;
                                                                    font-weight: 400;
                                                                    font-size: 22px;
                                                                    color: black;
                                                                    margin-bottom: 35px;
                                                                    text-align: center;
                                                      
                                                                  '
                                                                ><span>
                                                                Hola ".$mail->getNombres().",
                                                                </span><br>
                                                    
                                                                hemos recibido correctamente tu mensaje y en breve estaremos
                                                                  respondiendo tu solicitud.
                                                                </p>
                                                              </div>
                                                              <div style='text-align: center;'>
                                                              <span  style='
                                                              font-style: normal;
                                                              font-weight: 400;
                                                              font-size: 20px;
                                                              color: black;
                                                              margin-bottom: 35px;
                                                              text-align: center;
                                                              letter-spacing: 0.07em;
                                                
                                                            '>Recuerda visitar nuestra academia</span>
                                                              
                                                              </div>

                                                              <div style=' display: inline-flex!important;' >
                                                              <a
                                                                  ttarget='_blank'
                                                                  style='
                                                                    text-decoration: none;
                                                                    color: white;
                                                                    font-style: normal;
                                                                    font-weight: 400;
                                                                    border-radius: 6px;
                                                                    height: auto;
                                                                    margin-bottom: 30px;
                                                                    padding: 20px;
                                                                    font-size: 22px;
                                                                    text-align: center;
                                                                    background:linear-gradient(135deg, #55B7D6 18.75%, #7B8CFB 96.68%);
                                                                    margin-top:35px;
                                                                  '
                                                                  href='https://waresoft.academy'
                                                                >
                                                                <span>
                                                                    waresoft.academy</span
                                                                  ></a
                                                                >
                                                              </div>
                                                      
                                                              <div style='text-align: center;'>

                                                              
                                                                <p
                                                                  style='
                                                                    font-style: normal;
                                                                    font-weight: 400;
                                                                    font-size: 22px;
                                                                    color:black;
                                                                    text-align: center;
                                                                  '
                                                                >
                                                                  No te olvides de seguirnos en nuestras redes sociales, encuéntranos
                                                                  en:
                                                                </p>
                                                              </div>
                                                                
                                                                ";

                                                                $body .= "
                                                                
                                                                <div style='text-align: center;'>

                                                                    <a
                                                                        href='https://www.linkedin.com/company/waresoftsv'
                                                                        target='_blank'
                                                                        style='
                                                                        text-decoration: none;
                                                                        margin-right: 20px;
                                                                        '
                                                                    >
                                                                        <img
                                                                        src='http://waresoft.com.sv/resources/img/lkBlanco.png'
                                                                        width='60'
                                                                        height='60'
                                                                        alt=''
                                                                        />
                                                                    </a>

                                                                    <a
                                                                        style='
                                                                        text-decoration: none;
                                                                        margin-right: 20px;
                                                                        '
                                                                        href='https://www.facebook.com/waresoftsv'
                                                                        target='_blank'
                                                                    >
                                                                        <img
                                                                        src='http://waresoft.com.sv/resources/img/fbBlanco.png'
                                                                        width='60'
                                                                        height='60'
                                                                        alt=''
                                                                        />
                                                                    </a>

                                                        
                                                                    </div>

                                                                    <div style='text-align: center; margin-bottom: 30px;'>

                                                                     <footer style='background: transparent; text-align: center; margin-top:35px;
                                                                     border-top: 2px solid #6B7EFD;'>
                                                                        <h1
                                                                        style='
                                                                            font-style: normal;
                                                                            font-weight: 500;
                                                                            font-size: 14px;
                                                                            line-height: 21px;
                                                                            letter-spacing: 0.2em;
                                                                            text-transform: uppercase;

                                                                            color: black;
                                                                        '
                                                                        >WARESOFT
                                                                        </h1>
                                                                    </footer>
                                                                    </div>
                                                                    <div style='text-align: center; margin-bottom: 30px;'>

                                                                    <footer style='background: transparent; text-align: center; margin-top:35px'>
                                                                    <h1
                                                                    style='
                                                                        font-style: normal;
                                                                        font-weight: 500;
                                                                        font-size: 14px;
                                                                        line-height: 21px;
                                                                        letter-spacing: 0.2em;
                                                                        text-transform: uppercase;

                                                                        color: transparent;
                                                                    '
                                                                    >WARESOFT
                                                                    </h1>
                                                                </footer>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                </table>
                                                            </body>
                                                            </html>
                                                                ";


                                                               

                                                                $responseMail = new PHPMailer(true);
                                                                $responseMail->SMTPDebug = 0;
                                                                $responseMail->isSMTP();
                                                                $responseMail->Host       = 'c1960222.ferozo.com';
                                                                $responseMail->SMTPAuth   = true;
                                                                $responseMail->Username   = 'diego.ramirez@waresoft.com.sv';
                                                                $responseMail->Password   = 'W4r3s0ft';
                                                                $responseMail->SMTPSecure = 'ssl';
                                                                $responseMail->Port       = 465;
                                                                $responseMail->CharSet = 'UTF-8';
                                                                $responseMail->setFrom('diego.ramirez@waresoft.com.sv', 'WARESOFT');
                                                                $responseMail->addAddress($mail->getCorreo());

                                                                //Contenido
                                                                $responseMail->isHTML(true);

                                                                $responseMail->Subject = 'Gracias por contactarse con nosotros';
                                                                $responseMail->Body    = $body;

                                                                if ($responseMail->send()) {
                                                                    $result['status'] = 1;
                                                                }
                                                            } catch (Exception $e) {

                                                                $result['exception'] = $responseMail->ErrorInfo;
                                                            }
                                                        }
                                                    } catch (Exception $e) {

                                                        $result['exception'] = $mailer->ErrorInfo;
                                                    }
                                                } else {
                                                    $result['exception'] = 'Por favor, escriba su mensaje';
                                                }
                                            } else {

                                                $result['exception'] = 'Mensaje incorrecto';
                                            }
                                        } else {
                                            $result['exception'] = 'Por favor, ingrese su correo electrónico';
                                        }
                                    } else {
                                        $result['exception'] = 'Correo incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Por favor, llene el campo solicitado';
                                }
                            } else {

                                $result['exception'] = 'Asunto incorrecto';
                            }
                        } else {
                            $result['exception'] = 'Por favor, escriba su nombre';
                        }
                    } else {

                        $result['exception'] = 'Nombres incorrectos';
                    }
                } else {
                    $result['recaptcha'] = 1;
                    $result['exception'] = 'No eres un humano';
                }
            } else {

                $result['exception'] = 'Ocurrió un problema al cargar el reCAPTCHA';
            }


            break;

        default:
            $result['exception'] = 'La acción no está disponible afuera de la sesión';
            break;
    }
    // Se indica el tipo de contenido a mostrar y su respectivo conjunto de caracteres.
    header('content-type: application/json; charset=utf-8');
    // Se imprime el resultado en formato JSON y se retorna al controlador.
    print(json_encode($result));
} else {

    print(json_encode('Recurso no disponible'));
}
