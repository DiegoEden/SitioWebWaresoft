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
                $secretKey = '6Lf0cuAhAAAAAOsaLBxkADyAyM4CY_s1Iy_zy1YB';
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
                                                        $mailer->Username   = 'diego.ramirez@waresoft.com.sv';
                                                        $mailer->Password   = 'W4r3s0ft';
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
                                                                $mailer->SMTPDebug = 0;
                                                                $mailer->isSMTP();
                                                                $mailer->Host       = 'c1960222.ferozo.com';
                                                                $mailer->SMTPAuth   = true;
                                                                $mailer->Username   = 'diego.ramirez@waresoft.com.sv';
                                                                $mailer->Password   = 'W4r3s0ft';
                                                                $mailer->SMTPSecure = 'ssl';
                                                                $mailer->Port       = 465;
                                                                $mailer->CharSet = 'UTF-8';
                                                                $mailer->setFrom('diego.ramirez@waresoft.com.sv', 'WARESOFT');
                                                                $mailer->addAddress($mail->getCorreo());

                                                                //Contenido
                                                                $mailer->isHTML(true);
                                                                $mailer->Subject = 'Gracias por contactarse con nosotros';
                                                                $mailer->Body    = 'Hola, gracias por contactarse con waresoft';
                                                                if ($mailer->send()) {
                                                                    $result['status'] = 1;
                                                                }
                                                            } catch (Exception $e) {

                                                                $result['exception'] = $mailer->ErrorInfo;
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
