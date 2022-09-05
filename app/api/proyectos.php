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

            case 'update':
                $_POST = $proyectos->validateForm($_POST);
                if ($proyectos->setid_proyectos($_POST['id_proyecto'])) {
                    if ($data=$proyectos->readProyecto()) {
                        if ($proyectos->setNombre_proyecto($_POST['nombre_proyecto'])) {
                            if ($proyectos->setTexto_principal($_POST['textoPrincipal'])) {
                                if ($proyectos->setTexto_cliente($_POST['textoCliente'])) {
                                    if ($proyectos->setTexto_desafio($_POST['textoDesafio'])) {
                                        if ($proyectos->setTexto_solucion($_POST['textSolucion'])) {
                                            if (is_uploaded_file($_FILES['imagen1']['tmp_name'])) {
                                                if ($proyectos->setImagen_principal($_FILES['imagen1'])) {
                                                    if (is_uploaded_file($_FILES['imagen2']['tmp_name'])) {
                                                        if ($proyectos->setImagen_secundaria($_FILES['imagen2'])) {
                                                            if (is_uploaded_file($_FILES['logoProyecto']['tmp_name'])) {
                                                                if ($proyectos->setLogo($_FILES['logoProyecto'])) {
                                                                    if (is_uploaded_file($_FILES['logoProyecto2']['tmp_name'])) {
                                                                        if ($proyectos->setLogoOscuro($_FILES['logoProyecto2'])) {
                                                                            if ($proyectos->updateProyecto($data['logo_proyecto'], $data['logo_proyecto_oscuro'], $data['imagen_principal'], $data['imagen_secundaria'])) {
                                                                                $result['status'] = 1;
                                                                                if ($proyectos->saveFile($_FILES['logoProyecto2'], $proyectos->getRuta(), $proyectos->getLogo_Oscuro())) {
                                                                                    if ($proyectos->saveFile($_FILES['logoProyecto'], $proyectos->getRuta(), $proyectos->getLogo())) {
                                                                                        if ($proyectos->saveFile($_FILES['imagen1'], $proyectos->getRuta(), $proyectos->getimagen_Principal())) {
                                                                                            if ($proyectos->saveFile($_FILES['imagen2'], $proyectos->getRuta(), $proyectos->getimagen_Secundaria())) {

                                                                                                $result['message'] = 'Proyecto actualizado correctamente';
                                                                                            } else {
                                                                                                $result['message'] = 'Proyecto actualizado pero no se guardó la imagen 2';
                                                                                            }
                                                                                        } else {
                                                                                            $result['message'] = 'Proyecto actualizado pero no se guardó la imagen 1';
                                                                                        }
                                                                                    } else {
                                                                                        $result['message'] = 'Proyecto actualizado pero no se guardó el logo';
                                                                                    }
                                                                                } else {
                                                                                    $result['message'] = 'Proyecto actualizado pero no se guardó el logo oscuro';
                                                                                }
                                                                            } else {
                                                                                $result['exception'] = Database::getException();
                                                                            }
                                                                        } else {
                                                                            $result['exception'] = 'Logo incorrecto (modo oscuro)';
                                                                        }
                                                                    } else {
                                                                        $result['exception'] = 'Seleccione un logo (modo oscuro)';
                                                                    }
                                                                } else {
                                                                    $result['exception'] = 'Logo incorrecto';
                                                                }
                                                            } else {
                                                                $result['exception'] = 'Seleccione un logo';
                                                            }
                                                        } else {
                                                            $result['exception'] = 'Imagen secundaaria incorrecta';
                                                        }
                                                    } else {
                                                        $result['exception'] = 'Seleccione una imagen secundaria';
                                                    }
                                                } else {
                                                    $result['exception'] = 'Imagen principal incorrecta';
                                                }
                                            } else {
                                                $result['exception'] = 'Seleccione una imagen principal';
                                            }
                                        } else {
                                            $result['exception'] = 'Texto solución incorrecto';
                                        }
                                    } else {

                                        $result['exception'] = 'Texto desafío incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Texto acerca del cliente incorrecto';
                                }
                            } else {
                                $result['exception'] = 'Texto principal incorrecto';
                            }
                        } else {
                            $result['exception'] = 'Nombre incorrecto';
                        }
                    } else {
                        $result['exception'] = 'ID incorrecto';
                    }
                } else {
                    $result['exception'] = 'Proyecto seleccionado incorrecto';
                }


                break;
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
                                                    if (is_uploaded_file($_FILES['logoProyecto']['tmp_name'])) {
                                                        if (is_uploaded_file($_FILES['logoProyecto2']['tmp_name'])) {
                                                            if ($proyectos->setLogoOscuro($_FILES['logoProyecto2'])) {
                                                                if ($proyectos->setLogo($_FILES['logoProyecto'])) {
                                                                    if ($proyectos->readAll()) {
                                                                        if ($data = $proyectos->getLastId()) {
                                                                            if ($proyectos->setIndex($data['index_proyecto'] + 1)) {
                                                                                if ($proyectos->register($_SESSION['id_usuario'])) {
                                                                                    $result['status'] = 1;
                                                                                    // Guardamos la imagen dentro de la carpeta del proyecto
                                                                                    if ($proyectos->saveFile($_FILES['logoProyecto2'], $proyectos->getRuta(), $proyectos->getLogo_Oscuro())) {
                                                                                        if ($proyectos->saveFile($_FILES['logoProyecto'], $proyectos->getRuta(), $proyectos->getLogo())) {
                                                                                            if ($proyectos->saveFile($_FILES['imagen1'], $proyectos->getRuta(), $proyectos->getimagen_Principal())) {
                                                                                                if ($proyectos->saveFile($_FILES['imagen2'], $proyectos->getRuta(), $proyectos->getimagen_Secundaria())) {

                                                                                                    $result['message'] = 'Proyecto creado correctamente';
                                                                                                } else {
                                                                                                    $result['message'] = 'Proyecto creado pero no se guardó la imagen 2';
                                                                                                }
                                                                                            } else {
                                                                                                $result['message'] = 'Proyecto creado pero no se guardó la imagen 1';
                                                                                            }
                                                                                        } else {
                                                                                            $result['message'] = 'Proyecto creado pero no se guardó el logo';
                                                                                        }
                                                                                    } else {
                                                                                        $result['message'] = 'Proyecto creado pero no se guardó el logo oscuro';
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
                                                                            if ($proyectos->saveFile($_FILES['logoProyecto2'], $proyectos->getRuta(), $proyectos->getLogo_Oscuro())) {
                                                                                if ($proyectos->saveFile($_FILES['logoProyecto'], $proyectos->getRuta(), $proyectos->getLogo())) {
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
                                                                                    $result['message'] = 'Proyecto creado pero no se guardó el logo';
                                                                                }
                                                                            } else {
                                                                                $result['message'] = 'Proyecto creado pero no se guardó el logo oscuro';
                                                                            }
                                                                        } else {
                                                                            $result['exception'] = Database::getException();;
                                                                        }
                                                                    }
                                                                } else {
                                                                    $result['exception'] = 'Logo incorrecto';
                                                                }
                                                            } else {
                                                                $result['exception'] = 'Logo 2 incorrecto';
                                                            }
                                                        } else {
                                                            $result['exception'] = 'Seleccione un logo 2';
                                                        }
                                                    } else {
                                                        $result['exception'] = 'Seleccione un logo';
                                                    }
                                                } else {
                                                    $result['exception'] = 'Imagen 2 incorrecta';
                                                }
                                            } else {
                                                $result['exception'] = 'Seleccione una imagen';
                                            }
                                        } else {

                                            $result['exception'] = 'Imagen 1 incorrecta';
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
            case 'delete':
                $_POST = $proyectos->validateForm($_POST);
                if ($proyectos->setid_proyectos($_POST['id_proyecto'])) {
                    if ($data = $proyectos->readProyecto()) {
                        if ($proyectos->deleteRow()) {
                            chmod($proyectos->getRuta2() . $data['logo_proyecto'], 0777);
                            if (@unlink($proyectos->getRuta2() . $data['logo_proyecto'])) {
                                chmod($proyectos->getRuta2() . $data['logo_proyecto_oscuro'], 0777);
                                if (@unlink($proyectos->getRuta2() . $data['logo_proyecto_oscuro'])) {
                                    chmod($proyectos->getRuta2() . $data['imagen_principal'], 0777);
                                    if (@unlink($proyectos->getRuta2() . $data['imagen_principal'])) {
                                        chmod($proyectos->getRuta2() . $data['imagen_secundaria'], 0777);
                                        if (@unlink($proyectos->getRuta2() . $data['imagen_secundaria'])) {
                                            $result['status'] = 1;
                                            $result['message'] = 'Proyecto eliminado correctamente';
                                        } else {
                                            $result['exception'] = 'Se borró el registro pero no la imagen secundaria';
                                        }
                                    } else {
                                        $result['exception'] = 'Se borró el registro pero no la imagen principal ';
                                    }
                                } else {
                                    $result['exception'] = 'Se borró el registro pero no el logo oscuro';
                                }
                            } else {
                                $result['exception'] = 'Se borró el registro pero no el logo ';
                            }
                        } else {
                            $result['exception'] = Database::getException();
                        }
                    } else {
                        $result['exception'] = 'Proyecto no existente';
                    }
                } else {
                    $result['exception'] = 'Proyecto seleccionado incorrecto';
                }
                break;

            default:
                $result['exception'] = 'Acción no disponible dentro de la sesión';
                break;
        }
    } else {
        switch ($_GET['action']) {
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
                break;
        }
    }
    header('content-type: application/json; charset=utf-8');
    print(json_encode($result));
} else {
    print(json_encode('Recurso no disponible'));
}
