-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2020 a las 14:05:03
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pekipet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`usuario`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `password`) VALUES
(1, 'Kay', 'BNMghjtyu567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(10) NOT NULL,
  `idAnimal` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `especie` varchar(30) NOT NULL,
  `tamano` set('grande','mediano','pequeno') NOT NULL,
  PRIMARY KEY (`idAnimal`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`id`, `idAnimal`, `nombre`, `especie`, `tamano`) VALUES
(1, 1, 'Shiro', 'gato', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE IF NOT EXISTS `cita` (
  `idCita` int(11) NOT NULL AUTO_INCREMENT,
  `idAnimal` int(10) NOT NULL,
  `tipoServicio` set('dia','horas','cortar','limpiar') NOT NULL,
  `fecha` datetime NOT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `idPrecio` int(11) NOT NULL,
  `precio` double DEFAULT NULL,
  `telefono` int(11) NOT NULL,
  `comentario` varchar(400) NOT NULL,
  PRIMARY KEY (`idCita`),
  KEY `idAnimal` (`idAnimal`),
  KEY `idAnimal_2` (`idAnimal`),
  KEY `idPrecio` (`idPrecio`),
  KEY `idPrecio_2` (`idPrecio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idCita`, `idAnimal`, `tipoServicio`, `fecha`, `fecha_fin`, `idPrecio`, `precio`, `telefono`, `comentario`) VALUES
(2, 1, 'dia', '2020-05-06 11:30:00', '2020-05-06 17:30:00', 42, 200, 664894123, 'No te vayaaaas shiroooo'),
(3, 1, 'dia', '2020-05-06 15:00:00', '2020-05-06 21:00:00', 42, 200, 664984123, 'jfbjsbjf'),
(4, 1, 'dia', '2020-05-05 14:00:00', '2020-05-05 20:00:00', 13, 16, 617345660, 'xnjdvhjdxvh'),
(5, 1, 'dia', '2020-05-05 08:00:00', '2020-05-05 14:00:00', 42, 200, 617345660, 'ewhufhseuf'),
(6, 1, 'dia', '2020-05-05 08:00:00', '2020-05-05 14:00:00', 42, 200, 617345660, 'kvgchv');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `telefono` int(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `descuento` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `descuento` (`descuento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidos`, `telefono`, `email`, `descuento`) VALUES
(1, 'Izhar', 'Arias Campos', 0, 'izharias1@hotmail.com', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE IF NOT EXISTS `cupones` (
  `codigo` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `valido` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cupones`
--

INSERT INTO `cupones` (`codigo`, `valido`, `descuento`) VALUES
('Q1jW-jU65-47hW', 0, 50),
('T1mT-cN65-H79F', 1, 25),
('H1mC-oA65-R7bU', 1, 10),
('X1xL-iE65-57aQ', 1, 5),
('91hC-wC65-U7dB', 1, 25),
('F1t4-4A65-J7dP', 1, 20),
('N15J-aG65-27dE', 1, 30),
('31qS-9J65-X7iM', 1, 5),
('71xQ-jT65-S7dC', 1, 15),
('M1gH-mL65-N7nR', 1, 10),
('B17S-gE65-K73M', 1, 25),
('Q1v3-i765-P7x2', 1, 70),
('81dW-rG65-F7i3', 1, 25),
('L1jX-qU65-77zS', 1, 10),
('C1xL-gT65-27yB', 1, 20);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`id`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`idAnimal`) REFERENCES `animal` (`idAnimal`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
