<?php
require_once('../helpers/connection.php');
require_once('../helpers/validator.php');
require_once('../models/proyectos.php');


// Se comprueba si existe una acción a realizar, de lo contrario se finaliza el script con un mensaje de error.
if (isset($_GET['action'])) {
    // Se crea una sesión o se reanuda la actual para poder utilizar variables de sesión en el script.
    session_start();
    // Se instancia la clase correspondiente.
    $proyectos = new Proyectos();
    // Se declara e inicializa un arreglo para guardar el resultado que retorna la API.
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    // Se verifica si existe una sesión iniciada como administrador, de lo contrario se finaliza el script con un mensaje de error.
    if (isset($_SESSION['id_usuario'])) {
        // Se compara la acción a realizar cuando un administrador ha iniciado sesión.
        switch ($_GET['action']) {

            case 'register':
                $_POST = $proyectos->validateForm($_POST);

                if ($proyectos->setNombre_proyecto($_POST['nombre_proyecto'])) {
                    if ($proyectos->setTexto_principal($_POST['textoPrincipal'])) {
                        if ($proyectos->setTexto_cliente($_POST['textoCliente'])) {
                            if ($proyectos->setTexto_desafio($_POST['textoDesafio'])) {
                                if ($proyectos->setTexto_solucion($_POST['textSolucion'])) {
                                    if (is_uploaded_file($_FILES['imagen1']['tmp_name'])) {
                                        if ($proyectos->setImagen_principal($_FILES['imagen1'])) {
                                            if (is_uploaded_file($_FILES['imagen2']['tmp_name'])) {
                                                if ($proyectos->setImagen_secundaria($_FILES['imagen2'])) {
                                                    if ($proyectos->readAll()) {
                                                        if ($data = $proyectos->getLastId()) {
                                                            if ($proyectos->setIndex($data['index_proyecto'] + 1)) {
                                                                if ($proyectos->register($_SESSION['id_usuario'])) {
                                                                    $result['status'] = 1;
                                                                    // Guardamos la imagen dentro de la carpeta del proyecto
                                                                    if ($proyectos->saveFile($_FILES['imagen1'], $proyectos->getRuta(), $proyectos->getimagen_Principal())) {
                                                                        if ($proyectos->saveFile($_FILES['imagen2'], $proyectos->getRuta(), $proyectos->getimagen_Secundaria())) {
                                                                            $result['message'] = 'Proyecto creado correctamente';
                                                                        } else {
                                                                            $result['message'] = 'Proyecto creado pero no se guardó la imagen';
                                                                        }
                                                                    } else {
                                                                        $result['message'] = 'Proyecto creado pero no se guardó la imagen';
                                                                    }
                                                                } else {
                                                                    $result['exception'] = Database::getException();;
                                                                }
                                                            } else {
                                                                $result['exception'] = 'Index esperado incorrecto';
                                                            }
                                                        } else {
                                                            $result['exception'] = 'No id';
                                                        }
                                                    } else {
                                                        if ($proyectos->registerFirst($_SESSION['id_usuario'])) {
                                                            $result['status'] = 1;
                                                            // Guardamos la imagen dentro de la carpeta del proyecto
                                                            if ($proyectos->saveFile($_FILES['imagen1'], $proyectos->getRuta(), $proyectos->getimagen_Principal())) {
                                                                if ($proyectos->saveFile($_FILES['imagen2'], $proyectos->getRuta(), $proyectos->getimagen_Secundaria())) {
                                                                    $result['message'] = 'Proyecto creado correctamente';
                                                                } else {
                                                                    $result['message'] = 'Proyecto creado pero no se guardó la imagen';
                                                                }
                                                            } else {
                                                                $result['message'] = 'Proyecto creado pero no se guardó la imagen';
                                                            }
                                                        } else {
                                                            $result['exception'] = Database::getException();;
                                                        }
                                                    }
                                                } else {
                                                    $result['exception'] = 'Imagen incorrecta';
                                                }
                                            } else {
                                                $result['exception'] = 'Seleccione una imagen';
                                            }
                                        } else {

                                            $result['exception'] = 'Imagen incorrecta';
                                        }
                                    } else {

                                        $result['exception'] = 'Seleccione una imagen';
                                    }
                                } else {

                                    $result['exception'] = 'Texto solución incorrecto';
                                }
                            } else {

                                $result['exception'] = 'Texto desafio incorrecto';
                            }
                        } else {

                            $result['exception'] = 'Texto del cliente incorrecto';
                        }
                    } else {

                        $result['exception'] = 'Texto principal incorrecto';
                    }
                } else {

                    $result['exception'] = 'Nombre incorrecto';
                }


                break;

            case 'readAll':
                if ($result['dataset'] = $proyectos->readAll()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No se ha encontrado ningún proyecto registrado.';
                    }
                }
                break;


            case 'readIndicators':
                if ($result['dataset'] = $proyectos->readAll()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No se ha encontrado ningún proyecto registrado.';
                    }
                }
                break;

            case 'readOne':
                if ($proyectos->setid_proyectos($_POST['id_proyecto'])) {
                    if ($result['dataset'] = $proyectos->readProyecto()) {
                        $result['status'] = 1;
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'Proyecto inexistente';
                        }
                    }
                } else {
                    $result['exception'] = 'Proyecto incorrecto';
                }
                break;

            default:
                $result['exception'] = 'Acción no disponible dentro de la sesión';
        }
    } else {
        print(json_encode('Recurso no disponible'));
    }
    header('content-type: application/json; charset=utf-8');
    print(json_encode($result));
} else {
    print(json_encode('Recurso no disponible'));
}
