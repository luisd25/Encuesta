-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2014 a las 11:14:31
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE IF NOT EXISTS `inicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `tipo`, `categoria`, `nombre`, `cantidad`) VALUES
(17, 'multiple', 'categoria', 'prueba', 1),
(20, 'abiertas', 'abierta', 'abierta', 1),
(23, 'cerradas', 'probando', 'saludos', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `respuesta1` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `respuesta2` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `respuesta3` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `respuesta4` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correcta` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `pregunta` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `correcta`, `pregunta`, `nombre`, `categoria`) VALUES
(33, '', '', '', '', 'si', 'esta es una cerrada', 'saludos', 'probando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `user` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `ask` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=61 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `user`, `password`, `ask`) VALUES
(13, 'prueba1', 'jaimito', 'huauh', 'lol', 'prueba', ''),
(15, 'prueba3', 'jaimito', 'huauh', '12-1096', 'prueba', ''),
(25, 'prueba4', 'jaimito', 'huauh', '12-1096', 'luis', ''),
(26, 'prueba4', 'jaimito', 'luis-dominguez1994@hotmail.com', '12-1096', 'luis', ''),
(27, 'prueba5', 'jaimito', 'luis-dominguez1994@hotmail.com', '12-1096', 'luis', ''),
(30, 'prueba7', 'jaimito', 'huauh', '12-1096', 'luis', ''),
(31, 'prueba8', 'jaimito', 'luis-dominguez1994@hotmail.com', '12-1096', 'luis', ''),
(32, 'prueba9', 'jaimito', 'huauh', '12-1096', 'luis16', ''),
(33, 'lol', 'jaimito', 'luis-dominguez1994@hotmail.com', '12-1096', 'l', ''),
(34, 'prueba12', 'lol', 'huauh', '12-1096', 'luis06', ''),
(35, 'luis', 'luis', 'luis', '12-1097', 'luis06', ''),
(36, 'luis', 'luis', 'luis', '12-1097', 'luis06', ''),
(37, 'luis', 'luis', 'luis', '12-1097', 'luis06', ''),
(38, 'luis', 'luis', 'luis', '12-1098', 'luis062594', ''),
(39, 'luis', 'luis', 'luis', '12-1096', 'luis06', ''),
(40, 'luis', 'luis', 'luis', '12-1098', 'luis06', ''),
(41, 'luis', 'luis', 'luis', '12-1099', 'luis06', ''),
(42, 'luis', 'luis', 'luis', '12-1099', 'luis056', ''),
(43, 'luis', 'luis', 'luis', '12-1098', 'luis06', ''),
(45, 'juan', 'luis', 'luis', 'lol', '3000000', ''),
(46, 'prueba1', 'jaimito', 'bielka_800@hotmail.com', '12', 'dddddddddddddd', ''),
(47, 'prueba1', 'jaimito', 'huauh', '13', 'hhhhhhhhhhhhhhhhhhhh', ''),
(48, 'lol', 'jaimito', 'huauh', '14', 'hhhhhhhhhhhhhhhhhhhh', 'sssssssssssssss'),
(51, 'lol', 'jaimito', 'huauh', '15', 'cccccccccccccccccc', 'sssssssssssssss'),
(52, 'lol', 'jaimito', 'huauh', '16', 'hhhhhhhhhhhhhhhh', 'sssssssssssssss'),
(53, 'lol', 'jaimito', 'huauh', '17', 'ssssssssssssssssss', 'sssssssssssssss'),
(54, 'lol', 'jaimito', 'huauh', '18', 'ssssssssssssss', 'sssssssssssssss'),
(55, 'lol', 'jaimito', 'huauh', '19', 'ssssssssssssss', 'sssssssssssssss'),
(56, 'prueba1', 'jaimito', 'huauh', '25', 'aaaaaaaaaaaaa', 'sssssssssssssss'),
(57, 'prueba1', 'jaimito', 'huauh', 'luis_dominguez', 'luis062594', 'sanjuan'),
(58, 'prueba1', 'jaimito', 'luis-dominguez1994@hotmail.com', 'luis', '123456', 'sanjuan'),
(59, 'luis', 'dominguez', 'luis-dominguez1994@hotmail.com', 'luisd25', 'luis062594', 'jose'),
(60, 'jose', 'jo', 's', 's', 'sssssssss', 's');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
