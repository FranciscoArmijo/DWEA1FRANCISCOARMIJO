-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-11-2020 a las 23:07:48
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
('12510455-k', 'Pedro', 'Muñoz', 'Jaque', 'Dolores 467', 'MASCULINO', '1975-03-24'),
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
  `rut` varchar(50) NOT NULL,
  `origen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_transaccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Volcado de datos para la tabla `transacciones`
--

INSERT INTO `transacciones` (`id_transaccion`, `transaccion`, `fecha_transaccion`, `rut`, `origen`) VALUES
(31, 'like Set 15 pcs', '2020-11-20', '11111111-1', 'MAC'),
(32, 'like Pincel Goma', '2020-11-20', '11111111-1', 'MAC'),
(33, 'like NSP', '2020-11-20', '11111111-1', 'MAC'),
(34, 'like Set metalico', '2020-11-20', '33333333-3', 'MAC'),
(35, 'like Monster Clay', '2020-11-20', '33333333-3', 'MAC'),
(36, 'like PLastilina escultor', '2020-11-20', '33333333-3', 'MAC'),
(37, 'like Sculpey Firm', '2020-11-20', '33333333-3', 'MAC'),
(38, 'like Set metalico', '2020-11-20', '16691874-k', 'LUN'),
(39, 'like Sculpey Med', '2020-11-20', '16691874-k', 'LUN'),
(40, 'like NSP', '2020-11-20', '16691874-k', 'LUN'),
(41, 'like PLastilina escultor', '2020-11-20', '33333333-3', 'MAC'),
(42, 'like PLastilina escultor', '2020-11-20', '33333333-3', 'MAC'),
(43, 'like PLastilina escultor', '2020-11-20', '33333333-3', 'MAC'),
(44, 'like Bolillo metal', '2020-11-23', '11111111-1', 'MAC'),
(45, 'like NSP', '2020-11-23', '11111111-1', 'MAC'),
(46, 'like PLastilina escultor', '2020-11-23', '11111111-1', 'MAC'),
(47, 'like Bolillo metal', '2020-11-23', '11111111-1', 'MAC'),
(48, 'like PLastilina escultor', '2020-11-23', '11111111-1', 'MAC'),
(49, 'like PLastilina escultor', '2020-11-23', '11111111-1', 'MAC'),
(50, 'like Bolillo metal', '2020-11-23', '11111111-1', 'MAC'),
(51, 'like NSP', '2020-11-20', '11111111-1', 'MAC'),
(52, 'like Monster Clay', '2020-11-23', '11111111-1', 'MAC'),
(53, 'like Set metalico', '2020-11-23', '44444444-4', 'LUN'),
(54, 'like Sculpey Med', '2020-11-23', '44444444-4', 'LUN'),
(55, 'like PLastilina escultor', '2020-11-23', '44444444-4', 'LUN'),
(56, 'like Bolillo metal', '2020-11-23', '44444444-4', 'LUN'),
(57, 'like Set metalico', '2020-11-24', '16691874-k', 'LOCAL'),
(58, 'like Sculpey Firm', '2020-11-24', '16691874-k', 'LOCAL'),
(59, 'like NSP', '2020-11-24', '16691874-k', 'LOCAL'),
(60, 'like Set metalico', '2020-11-24', '16691874-k', 'LUN'),
(61, 'like Sculpey Med', '2020-11-24', '16691874-k', 'LUN'),
(62, 'like PLastilina escultor', '2020-11-24', '11111111-1', 'MAC'),
(63, 'Inicio de sesiÃ³n', '2020-11-24', '16691874-k', 'LOCAL'),
(64, 'Inicio de sesiÃ³n', '2020-11-24', '12510455-k', 'LOCAL'),
(65, 'like Set 30 pcs', '2020-11-24', '12510455-k', 'LOCAL'),
(66, 'Inicio de sesiÃ³n', '2020-11-24', '12510455-k', 'LOCAL'),
(67, 'Inicio de sesiÃ³n', '2020-11-24', '12510455-k', 'LOCAL'),
(68, 'like Sculpey Med', '2020-11-24', '12510455-k', 'LOCAL'),
(69, 'Inicio de sesiÃ³n', '2020-11-24', '12510455-k', 'LOCAL'),
(70, 'like Set 15 pcs', '2020-11-24', '12510455-k', 'LOCAL'),
(71, 'Inicio de sesiÃ³n', '2020-11-24', '16691874-k', 'LOCAL'),
(72, 'Inicio de sesiÃ³n', '2020-11-25', '16691874-k', 'LUN'),
(73, 'like Set metalico', '2020-11-25', '16691874-k', 'LUN'),
(74, 'like Sculpey Med', '2020-11-25', '16691874-k', 'LUN'),
(75, 'Inicio de sesiÃ³n', '2020-11-25', '16691874-k', 'LUN'),
(76, 'Inicio de sesiÃ³n', '2020-11-25', '11111111-1', 'MAC'),
(77, 'like Bolillo metal', '2020-11-25', '11111111-1', 'MAC'),
(78, 'like Bolillo metal', '2020-11-25', '11111111-1', 'MAC'),
(79, 'like Bolillo metal', '2020-11-25', '11111111-1', 'MAC'),
(80, 'like Bolillo metal', '2020-11-25', '11111111-1', 'MAC'),
(81, 'like Bolillo metal', '2020-11-25', '11111111-1', 'MAC'),
(82, 'Inicio de sesiÃ³n', '2020-11-25', '16691874-k', 'LUN'),
(83, 'like NSP', '2020-11-25', '16691874-k', 'LUN'),
(84, 'like Sculpey Med', '2020-11-25', '16691874-k', 'LUN'),
(85, 'like Sculpey Firm', '2020-11-25', '16691874-k', 'LUN'),
(86, 'Inicio de sesiÃ³n', '2020-11-25', '16691874-k', 'LOCAL');

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
('armijo', '54321', 'LUN', 2, '16691874-k'),
('francisco', '12345', 'LOCAL', 1, '16691874-k'),
('javier', '54321', 'MAC', 2, '11111111-1'),
('jean', '12345', 'LUN', 2, '44444444-4'),
('julio', '54321', 'MAC', 2, '33333333-3'),
('pedro', '12345', 'LOCAL', 2, '12510455-k');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rut`) REFERENCES `datospersonales` (`rut`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`origen`) REFERENCES `origenes` (`origen`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
