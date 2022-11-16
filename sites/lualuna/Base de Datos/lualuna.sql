-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-06-2021 a las 17:00:11
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lualuna`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `asa`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `asa`;
CREATE TABLE IF NOT EXISTS `asa` (
`id_User` int(11)
,`Nombre` varchar(100)
,`Email` varchar(100)
,`Comentario` varchar(150)
,`Fecha de Envio` date
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_User` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Comentario` varchar(150) NOT NULL,
  `Fecha de Envio` date NOT NULL,
  PRIMARY KEY (`id_User`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_User`, `Nombre`, `Email`, `Comentario`, `Fecha de Envio`) VALUES
(41, 'Opera GX', 'opera@hotmail.com', 'Mandamos un comentario desde Opera GX', '2021-06-23'),
(40, 'Mozilla Firefox', 'firefox@gmail.com', 'Mandamos un comentario desde el buscador Firefox.', '2021-06-23'),
(5, 'Gabriel Arias', 'gabriel8789@hotmail.com', 'Buen dia, me gustaria realizar una compra al mayo, es posible? gracias y saludos.', '2021-06-22'),
(25, 'Ricaldo Lavolpe', 'Richard.ggizi@gmail.com', 'Hola, quisiera saber si poseen un catalogo especial para compras al mayor, gracias y saludos.', '2021-06-22'),
(42, 'Francisco', 'baltasar.222@gmail.com', 'Hola', '2021-06-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `id_User` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL,
  `Contraseña Repetida` varchar(100) NOT NULL,
  `Provincia` varchar(100) NOT NULL,
  `Localidad` varchar(100) NOT NULL,
  `Domicilio` varchar(100) NOT NULL,
  `Codigo Postal` varchar(100) NOT NULL,
  `Telefono Fijo` varchar(100) NOT NULL,
  `Telefono Celular` varchar(100) NOT NULL,
  `Fecha de Envio` date NOT NULL,
  PRIMARY KEY (`id_User`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_User`, `Nombre`, `Apellido`, `Email`, `Contraseña`, `Contraseña Repetida`, `Provincia`, `Localidad`, `Domicilio`, `Codigo Postal`, `Telefono Fijo`, `Telefono Celular`, `Fecha de Envio`) VALUES
(1, 'Lothar ', 'Mattaus', 'Lothar@gmail.com', 'goku', 'goku', 'La Pampa', 'La pampa', 'altoke ', '2121', '3415032946', '3419563287', '2021-06-22'),
(2, 'Santiago', 'Allegri', 'santi.goku@gmail.com', 'lothar', 'lothar', 'Entre Rios', 'Parana', 'guemes ', '2124', '4925032946', '34150329444', '2021-06-22'),
(3, 'Lucas', 'Allegri', 'santi.goku@gmail.com', 'gokuimio', 'gokusimio', 'Entre Rios', 'Parana', 'guemes 2121', '2124', '4925032946', '34150329444', '2021-06-22'),
(4, 'Mozilla', 'Firefox', 'firefox@hotmai.com', 'goku', 'goku', 'Cordoba', 'Cordoba', 'saenz  221', '3421', '3415032946', '34150324578', '2021-06-23'),
(5, 'Opera ', 'GX', 'opera@gmail.com', 'Gohan', 'Gohan', 'San Juan', 'San Juan', 'briasco 2012', '2345', '3415032948', '34150329465', '2021-06-23');

-- --------------------------------------------------------

--
-- Estructura para la vista `asa`
--
DROP TABLE IF EXISTS `asa`;

DROP VIEW IF EXISTS `asa`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `asa`  AS  select `comentarios`.`id_User` AS `id_User`,`comentarios`.`Nombre` AS `Nombre`,`comentarios`.`Email` AS `Email`,`comentarios`.`Comentario` AS `Comentario`,`comentarios`.`Fecha de Envio` AS `Fecha de Envio` from `comentarios` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
