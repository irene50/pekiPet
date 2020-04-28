-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-04-2020 a las 20:06:40
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pekipet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`usuario`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(10) NOT NULL,
  `idAnimal` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `especie` varchar(30) NOT NULL,
  `tamano` set('grande','mediano','pequeno') NOT NULL,
  PRIMARY KEY (`idAnimal`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

DROP TABLE IF EXISTS `cita`;
CREATE TABLE IF NOT EXISTS `cita` (
  `idCita` int(11) NOT NULL AUTO_INCREMENT,
  `idAnimal` int(10) NOT NULL,
  `tipoServicio` set('dia','horas','cortar','limpiar') NOT NULL,
  `fecha` datetime NOT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `idPrecio` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`idCita`),
  KEY `idAnimal` (`idAnimal`),
  KEY `idAnimal_2` (`idAnimal`),
  KEY `idPrecio` (`idPrecio`),
  KEY `idPrecio_2` (`idPrecio`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `telefono` int(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `descuento` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

DROP TABLE IF EXISTS `cupones`;
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
('Q1jW-jU65-47hW', 1, 50),
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

DROP TABLE IF EXISTS `precios`;
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
