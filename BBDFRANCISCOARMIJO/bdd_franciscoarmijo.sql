-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-10-2020 a las 10:23:01
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdd_franciscoarmijo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE IF NOT EXISTS `datospersonales` (
  `rut` varchar(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datospersonales`
--

INSERT INTO `datospersonales` (`rut`, `nombre`, `apellido_paterno`, `apellido_materno`, `domicilio`, `sexo`, `fecha_nacimiento`) VALUES
('11111111-1', 'Javier', 'Morales', 'Armijo', 'Consistorial #671', 'Masculino', '1987-04-20'),
('16691874-k', 'Francisco', 'Armijo', 'Morales', 'Cruchara Montt 760', 'Masculino', '1987-04-20'),
('33333333-3', 'Andrea', 'Martines', 'Cordero', 'Los aromos 254', 'Femenino', '1999-10-29'),
('44444444-4', 'Juan', 'Diaz', 'Roman', 'Alerces 123', 'Masculino', '1985-05-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origenes`
--

CREATE TABLE IF NOT EXISTS `origenes` (
  `origen` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`origen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `origenes`
--

INSERT INTO `origenes` (`origen`, `descripcion`) VALUES
('LOCAL', 'Personal interno de la empresa'),
('LUN', 'las ultimas noticias'),
('MAC', 'Museo de Arte Contemporaneo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transacciones`
--

CREATE TABLE IF NOT EXISTS `transacciones` (
  `id_transaccion` int(11) NOT NULL AUTO_INCREMENT,
  `transaccion` varchar(50) NOT NULL,
  `fecha_transaccion` date NOT NULL,
  PRIMARY KEY (`id_transaccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `transacciones`
--

INSERT INTO `transacciones` (`id_transaccion`, `transaccion`, `fecha_transaccion`) VALUES
(5, 'like Bolillo metal', '2020-10-29'),
(6, 'like Bolillo metal', '2020-10-29'),
(7, 'like Set metalico', '2020-10-29'),
(8, 'like Set metalico', '2020-10-29'),
(9, 'like Bolillo metal', '2020-10-29'),
(10, 'like Sculpey Firm', '2020-10-29'),
(11, 'like Set metalico', '2020-10-29'),
(12, 'like Set 30 pcs', '2020-10-29'),
(13, 'like NSP', '2020-10-29'),
(14, 'like PLastilina escultor', '2020-10-29'),
(15, 'like Pincel Goma', '2020-10-29'),
(16, 'like Sculpey Firm', '2020-10-30'),
(17, 'like Bolillo metal', '2020-10-30'),
(18, 'like NSP', '2020-10-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `origen` varchar(50) NOT NULL,
  `nivel` int(2) NOT NULL,
  `rut` varchar(11) NOT NULL,
  PRIMARY KEY (`nombre`),
  KEY `rut` (`rut`),
  KEY `origen` (`origen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `clave`, `origen`, `nivel`, `rut`) VALUES
('ANDREA', '12345', 'MAC', 2, '33333333-3'),
('francisco', '12345', 'LOCAL', 1, '16691874-k'),
('javier', '54321', 'MAC', 2, '11111111-1'),
('julio', '54321', 'MAC', 1, '33333333-3');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`origen`) REFERENCES `origenes` (`origen`),
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rut`) REFERENCES `datospersonales` (`rut`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
