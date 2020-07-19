-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2020 a las 20:33:27
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `foro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_tema`, `nombre`, `comentario`) VALUES
(1, 1, 'Anonimo', ''),
(2, 1, 'Anonimo', ''),
(3, 1, 'Anonimo', ''),
(4, 1, 'Anonimo', ''),
(5, 1, 'Anonimo', ''),
(6, 1, 'Anonimo', 'Edgar es un loquillo'),
(7, 50, 'Anonimo', 'Conozco a David y no es cierto'),
(8, 4, 'Anonimo', 'trini');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `estudiante` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `n_control` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `carrera` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `semestre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `grupo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `turno` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `aula` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `queja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sugerencia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `respuesta` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id`, `nombre`, `correo`, `estudiante`, `telefono`, `n_control`, `carrera`, `semestre`, `grupo`, `turno`, `aula`, `queja`, `sugerencia`, `fecha`, `estado`, `respuesta`) VALUES
(1, 'david avila', 'isc.david.avila@gmail.com', 'No', '9828226237', '140204016', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 'NOVENO', 'ISMA', 'MATUTINO', '10-B', 'Ninguna', 'Ninguna', '2020-07-18 15:43:16', 'En proceso', 'Hola Jondalar'),
(2, 'kan', '', '', '', '', '', '', '', '', '', 'fsdfdf', 'dsfdsf', '2020-07-11 21:09:09', '', ''),
(3, 'dfdsfsd', 'dfsx', '', '', '', '', '', '', 'dfsdf', '', 'dfdfds', 'fdsfsdfsdfnnnnnn', '2020-07-11 21:09:09', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', 'ñlkfjnlsekn', 'canción üfelipe', '2020-07-13 14:56:17', 'f', ''),
(38, '', '', '', '', '', '', '', '', '', '', '', '38', '2020-07-13 07:14:37', 'En Espera', ''),
(39, '', '', '', '', '', '', '', '', '', '', '', '39', '2020-07-13 07:15:09', 'En Espera', ''),
(40, '', '', '', '', '', '', '', '', '', '', '', '42', '2020-07-13 07:15:40', 'En Espera', ''),
(41, '', '', '', '', '', '', '', '', '', '', '', '66', '2020-07-13 07:42:25', 'En Espera', ''),
(42, '', '', '', '', '', '', '', '', '', '', '', 'kathi', '2020-07-13 14:54:07', 'En Espera', ''),
(43, '', '', '', '', '', '', '', '', '', '', '', '99999999999999999999', '2020-07-13 19:42:29', 'En Espera', 'Sin Respuesta por el Momento'),
(44, '', '', '', '', '', '', '', '', '', '', '', 'holaaaaa queja1', '2020-07-14 21:32:17', 'En Espera', 'Sin Respuesta por el Momento'),
(45, '', '', '', '', '', '', '', '', '', '', '', '123456', '2020-07-14 21:36:49', 'En Espera', 'Sin Respuesta por el Momento'),
(46, 'David', 'davila_2496@hotmail.com', 'Publico en General', '9828226237', '140204016', 'mercedes', '', '', '', '', '15/07/2020', 'Prueba 1 del nuevo formato', '2020-07-15 20:53:38', 'En Espera', 'Sin Respuesta por el Momento'),
(47, 'ERIK DAM,VID', 'isc.david.avila@gmail.com', 'Personal', '9828226237', '140204016', 'Administracion', '', '', '', '', 'anonimo', 'anonimo', '2020-07-15 20:55:19', 'En Espera', 'Sin Respuesta por el Momento'),
(48, 'ERIK DAVID', 'davila_2496@hotmail.com', 'Si', '9828226237', '140204016', 'Anonimo', 'Octavo', 'ISMA', 'Anonimo', '10-B', '11:04', '15/07/2020', '2020-07-16 04:05:01', 'En Espera', 'Sin Respuesta por el Momento'),
(49, 'David', 'davila_2496@hotmail.com', 'Publico en General', '9828226237', '140204016', 'Ingenieria en Sistemas Computacionales', '', '', '', '', '15', '07/2020', '2020-07-16 04:10:46', 'En espera', 'Sin Respuesta por el Momento'),
(50, 'Jondalar', '', 'FÃ­sica', '', '', '', '', '', '', '', 'David es un maltratador', 'El dÃ­a de hace 5 aÃ±os conocÃ­ a David y todo parecÃ­a muy lindo pero realmente el es muy cruel y despiadado por que me deja resolver mis errores yo solo', '2020-07-19 14:46:53', 'En Espera', 'Sin Respuesta por el Momento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(10) NOT NULL,
  `curp` varchar(18) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`, `nombre`, `apellido`, `direccion`, `email`, `telefono`, `curp`) VALUES
(2, 'avila', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', '', '', '', '', 0, ''),
(7, 'edgar', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Edgar', 'Baeza', 'calle 50 * 49 col. Flores Magon', 'baezaedgar855@gmail.com', 0, 'BASE980113HYNZCD04'),
(8, 'jondalar', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'Jondalar', 'RodrÃ­guez', 'calle17*26', 'jondalar59@gmail.com', 0, 'rodj930603hdfdzn05'),
(9, 'trini', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'Trinidad Angelica', 'de la Cruz Perez', 'calle 13 col fatima', 'trini@gmail.com', 0, 'TRIN');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
