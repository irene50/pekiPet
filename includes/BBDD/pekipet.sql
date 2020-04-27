-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-04-2020 a las 10:38:11
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
(31, 'Kaysune', 'BNMghjtyu567'),
(32, 'Sergi', 'BNMghjtyu567');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`id`, `idAnimal`, `nombre`, `especie`, `tamano`) VALUES
(32, 2, 'Pimpo', 'perro', 'mediano'),
(32, 3, 'Minina', 'gato', 'pequeno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE IF NOT EXISTS `cita` (
  `idCita` int(11) NOT NULL AUTO_INCREMENT,
  `idAnimal` int(10) NOT NULL,
  `tipoServicio` set('dia','horas','cortar','limpiar') NOT NULL,
  `fecha` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `idPrecio` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`idCita`),
  KEY `idAnimal` (`idAnimal`),
  KEY `idAnimal_2` (`idAnimal`),
  KEY `idPrecio` (`idPrecio`),
  KEY `idPrecio_2` (`idPrecio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idCita`, `idAnimal`, `tipoServicio`, `fecha`, `fecha_fin`, `idPrecio`, `precio`) VALUES
(12, 2, 'limpiar', '2020-04-24 00:00:00', '0000-00-00 00:00:00', 0, 20),
(13, 2, 'limpiar', '2020-04-24 00:00:00', '0000-00-00 00:00:00', 0, 20),
(14, 2, 'cortar', '2020-04-24 00:00:00', '0000-00-00 00:00:00', 32, 35),
(15, 2, 'cortar', '2020-04-23 00:00:00', '0000-00-00 00:00:00', 32, 35),
(20, 2, 'horas', '2020-04-22 00:00:00', '0000-00-00 00:00:00', 21, 6),
(21, 2, 'horas', '2020-04-22 00:00:00', '0000-00-00 00:00:00', 21, 6),
(22, 2, 'horas', '2020-04-22 00:00:00', '0000-00-00 00:00:00', 21, 6),
(23, 2, 'cortar', '2020-04-22 00:00:00', '0000-00-00 00:00:00', 31, 30),
(24, 2, 'cortar', '2020-04-22 00:00:00', '0000-00-00 00:00:00', 31, 30),
(26, 3, 'limpiar', '2020-04-24 10:00:00', '0000-00-00 00:00:00', 31, 30),
(36, 3, 'cortar', '2020-04-23 10:30:00', '0000-00-00 00:00:00', 31, 30),
(40, 3, 'dia', '2020-04-23 10:00:00', '2020-05-23 10:00:00', 11, 300),
(41, 3, 'dia', '2020-04-23 10:00:00', '2020-05-23 10:00:00', 11, 300),
(42, 3, 'dia', '2020-04-23 11:30:00', '0000-00-00 00:00:00', 13, 16),
(43, 3, 'dia', '2020-04-23 11:30:00', '0000-00-00 00:00:00', 13, 16),
(44, 3, 'dia', '2020-04-23 11:30:00', '2020-04-23 15:30:00', 13, 16),
(45, 3, 'dia', '2020-04-23 11:30:00', '2020-04-23 15:30:00', 13, 16),
(46, 3, 'dia', '2020-04-23 11:00:00', '2020-04-23 15:00:00', 13, 16),
(47, 3, 'horas', '2020-04-23 09:00:00', '0000-00-00 00:00:00', 23, 10),
(48, 3, 'horas', '2020-04-23 09:00:00', '2020-04-23 12:00:00', 23, 10),
(49, 3, 'horas', '2020-04-23 09:00:00', '2020-04-23 12:00:00', 23, 10),
(50, 2, 'limpiar', '2020-04-24 19:00:00', '0000-00-00 00:00:00', 31, 30),
(51, 2, 'dia', '2020-05-01 02:01:00', '2020-06-01 02:01:00', 11, 300),
(52, 2, 'dia', '2020-05-01 02:01:00', '2020-06-01 02:01:00', 11, 300),
(53, 2, 'dia', '2020-05-01 02:01:00', '2020-06-01 02:01:00', 11, 300),
(54, 2, 'horas', '2020-04-24 10:30:00', '2020-04-24 14:30:00', 24, 12),
(55, 3, 'dia', '2020-04-24 10:00:00', '2020-05-24 10:00:00', 11, 300),
(56, 2, 'cortar', '2020-04-28 10:00:00', '0000-00-00 00:00:00', 32, 35),
(57, 3, 'limpiar', '2020-04-29 14:30:00', '0000-00-00 00:00:00', 42, 20);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidos`, `telefono`, `email`) VALUES
(31, 'Izhar', 'Arias Campos', 664894123, 'izharias1@hotmail.com'),
(32, 'Serdone', 'Ramos Guindilla', 617345660, 'sergio@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE IF NOT EXISTS `precios` (
  `numero` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`numero`, `precio`) VALUES
(11, 300),
(12, 200),
(13, 16),
(21, 6),
(22, 8),
(23, 10),
(24, 12),
(25, 14),
(31, 30),
(32, 35),
(33, 40),
(41, 15),
(42, 20),
(43, 30),
(44, 40);

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
