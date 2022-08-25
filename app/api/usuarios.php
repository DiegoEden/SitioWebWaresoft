<?php
require_once('../helpers/connection.php');
require_once('../helpers/validator.php');
require_once('../models/usuarios.php');


// Se comprueba si existe una acción a realizar, de lo contrario se finaliza el script con un mensaje de error.
if (isset($_GET['action'])) {
    // Se crea una sesión o se reanuda la actual para poder utilizar variables de sesión en el script.
    session_start();
    // Se instancia la clase correspondiente.
    $usuarios = new Usuarios();
    // Se declara e inicializa un arreglo para guardar el resultado que retorna la API.
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    // Se verifica si existe una sesión iniciada como administrador, de lo contrario se finaliza el script con un mensaje de error.
    if (isset($_SESSION['id_usuario'])) {
        // Se compara la acción a realizar cuando un administrador ha iniciado sesión.
        switch ($_GET['action']) {
            case 'logOut':
                // Ejecutamos el metodo para cerrar sesion
                unset($_SESSION['id_usuario']);
                $result['status'] = 1;
                // Mostramos mensaje de confirmacion
                $result['message'] = 'Sesión eliminada correctamente';
                break;
            default:
                $result['exception'] = 'Acción no disponible dentro de la sesión';
        }
    } else {
        switch ($_GET['action']) {
                // Caso para cargar todos datos de la tabla
            case 'readAll':
                if ($result['dataset'] = $usuarios->readAll()) {
                    $result['status'] = 1;
                } else {
                    // Se ejecuta si existe algun error en la base de datos 
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay usuarios registrados, por favor regístrese';
                    }
                }
                break;

            case 'register':

                $_POST = $usuarios->validateForm($_POST);
                if ($usuarios->setNombres($_POST['nombre'])) {
                    if ($usuarios->setApellidos($_POST['apellido'])) {
                        if ($usuarios->setUsername($_POST['username'])) {
                            if ($_POST['password'] == $_POST['password2']) {
                                if ($usuarios->setPassword($_POST['password'])) {
                                    if ($usuarios->register()) {
                                        $result['status'] = 1;
                                        $result['message'] = 'Usuario registrado correctamente.';
                                    } else {
                                        $result['error'] = 1;
                                        $result['exception'] = Database::getException();
                                    }
                                } else {
                                    $result['exception'] = 'Contraseña incorrecta';
                                }
                            } else {
                                $result['exception'] = 'Las contraseñas no coinciden';
                            }
                        } else {
                            $result['exception'] = 'Username incorrecto';
                        }
                    } else {
                        $result['exception'] = 'Apellido incorrecto';
                    }
                } else {
                    $result['exception'] = 'Nombre incorrecto';
                }


                break;

            case 'logIn':
                $_POST = $usuarios->validateForm($_POST);
                if ($usuarios->checkUser($_POST['login'])) {
                    if ($usuarios->checkPassword($_POST['password'])) {
                        $_SESSION['id_usuario'] = $usuarios->getId();
                        $_SESSION['username'] = $usuarios->getUsername();
                        $_SESSION['nombre'] = $usuarios->getNombres();
                        $_SESSION['apellido'] = $usuarios->getApellidos();
                        $result['status'] = 1;
                        $result['message'] = 'Sesión iniciada correctamente, bienvenido ' . $_SESSION['username'] . '';
                    } else {
                        $result['exception'] = 'Contraseña incorrecta';
                    }
                } else {
                    $result['exception'] = 'El correo ingresado es incorrecto.';
                }

                break;

            default:
                $result['exception'] = 'Acción no disponible dentro de la sesión';
        }
    }
    header('content-type: application/json; charset=utf-8');
    print(json_encode($result));
} else {
    print(json_encode('Recurso no disponible'));
}
