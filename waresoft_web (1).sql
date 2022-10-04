-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2022 a las 21:51:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `waresoft_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ws_proyectos`
--

CREATE TABLE `ws_proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `nombre_proyecto` varchar(255) NOT NULL,
  `texto_principal` longtext DEFAULT NULL,
  `texto_cliente` longtext DEFAULT NULL,
  `texto_desafio` longtext DEFAULT NULL,
  `texto_solucion` longtext DEFAULT NULL,
  `imagen_principal` longtext DEFAULT NULL,
  `imagen_secundaria` longtext DEFAULT NULL,
  `logo_proyecto` longtext NOT NULL,
  `logo_proyecto_oscuro` longtext NOT NULL,
  `index_proyecto` int(11) NOT NULL DEFAULT 0,
  `id_usuario` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ws_proyectos`
--

INSERT INTO `ws_proyectos` (`id_proyecto`, `nombre_proyecto`, `texto_principal`, `texto_cliente`, `texto_desafio`, `texto_solucion`, `imagen_principal`, `imagen_secundaria`, `logo_proyecto`, `logo_proyecto_oscuro`, `index_proyecto`, `id_usuario`, `fecha_creacion`) VALUES
(12, 'KlinexIA', 'Es un software para veterinarias: fichas clínicas, punto de ventas, sistema de control de inventario, agendar citas, un aliado que facilitará la experiencia dentro de tu clínica.', 'Nuestro cliente siempre busco una forma de facilitar la automatización dentro de su clínica y es por eso que quiso crear Klinex IA, con el software pretende acelerar los procesos y llevar un control dentro de la veterinaria.', 'Nuestro reto fue crear un flujo que permita solucionar todas las demandas que una veterinaria posee: desde la entrada de una mascota nueva a el historial de tu perrito registrado con anterioridad. Además de otras características que posee el sistema como la creación de un inventario.', 'Nuestra solución fue tener diferentes métodos de investigación que nos pudieran ayudar a entender más la administración de las veterinarias, al final del estudio comprendimos muchas funciones y tareas que se fueron integrando en el software: la creación de un inventario, la administración de medicina, información de los formularios. dando paso a la creación del proyecto.', '631118595da1b.png', '631118595e06d.png', '631118595e100.png', '631118595e0d7.png', 0, 3, '2022-09-01 20:38:49'),
(13, 'Lukky', 'Es una aplicación móvil que te permite mantener un historial de tu máscota en su veterinaria: vacunas, citas, medicamentos y más. Además de la placa inteligente que te permite rastrear a tu perro por si se extravía.', 'Es una aplicación creada por Waresoft con enfoque social y para ayudar a todos aquellos amantes de los animales. Quisimos solventar una problemática muy recurrente que es el extravío de las mascotas.', 'Nuestro desafío fue identificar otras características que beneficien al usuario además de solo la placa inteligente, muchas de las funciones que se tomaron en cuenta para crear una aplicación que ayudará al cliente fue el historial clínico de su mascota que le permitiría tener registrado todo lo que acontece en la vida médica de la mascota.', 'Se creo una aplicación con un flujo de usabilidad fácil y entendible para el usuario. La aplicación cuenta con flujos cortos y prácticos. Además de acompañarse de una interfaz con un look and feel alineados a los valores e identidad de la marca.', '63111d4a362d8.png', '63111d4a36ed5.png', '63111d4a371b5.png', '63111d4a3713c.png', 1, 3, '2022-09-01 20:59:54'),
(14, 'MundoTerrenos', 'Es una plataforma de compra y venta de inmuebles en Chile. Tiene su interfaz web y móvil que le permiten al usuario tener una experiencia agradable y fácil para gestionar lo que busca. Utiliza las mejores tecnologías en el mercado inmobiliario.', 'Nuestro cliente requería crear una plataforma de compra y venta de terrenos e inmuebles que pudiera ofrecer una mejor propuesta de ventas y publicaciones que ofreciera algo distinto a la competencia chilena.', 'Desarrollar un diseño práctico y cómodo al momento de publicar o buscar una publicación de un terreno o inmueble. Buscar diseñar una interfaz práctica y atractiva para el beneficio del usuario.', 'Nuestro equipo de diseñadores estuvo en arduas investigaciones para conocer el rubro de la compra y venta de terrenos en Chile, dando paso al prototipo, y por último a la realización del proyecto.', '63111f784b427.png', '63111f784b831.png', '63111f784bc82.png', '63111f784bc42.png', 2, 3, '2022-09-01 21:09:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ws_usuarios`
--

CREATE TABLE `ws_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ws_usuarios`
--

INSERT INTO `ws_usuarios` (`id_usuario`, `username`, `contrasena`, `nombre`, `apellido`) VALUES
(3, 'Edesex', '$2y$10$JKvrK2DmEFoLbJU7RhxvUeR8pc.WDHHWs64Uqo6L/zPfCGPkq6Wri', 'Diego', 'Ramirez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ws_proyectos`
--
ALTER TABLE `ws_proyectos`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `fk_usuario` (`id_usuario`);

--
-- Indices de la tabla `ws_usuarios`
--
ALTER TABLE `ws_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ws_proyectos`
--
ALTER TABLE `ws_proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `ws_usuarios`
--
ALTER TABLE `ws_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ws_proyectos`
--
ALTER TABLE `ws_proyectos`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `ws_usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
