-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-03-2020 a las 20:14:25
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
(9, 'crack', 'ERTdfgcvb345'),
(13, 'cracki', 'ERTdfgcvb345'),
(10, 'crackk', 'ERTdfgcvb345'),
(11, 'crackkk', 'ERTdfgcvb345'),
(12, 'crackkkk', 'ERTdfgcvb345'),
(16, 'fsejknfsefknesf', 'ERTdfgcvb345'),
(7, 'izhar', 'ERTdfgcvb345'),
(15, 'ncdfd', 'ERTdfgcvb345'),
(14, 'wnkdejzcn', 'ERTdfgcvb345');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE IF NOT EXISTS `cita` (
  `idAnimal` int(10) NOT NULL,
  `idCita` int(10) NOT NULL AUTO_INCREMENT,
  `tipo` set('corte','retoque','completo','alternativo') NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idCita`),
  KEY `idAnimal` (`idAnimal`),
  KEY `idAnimal_2` (`idAnimal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidos`, `telefono`, `email`) VALUES
(7, 'zaroky', 'nex nex', 617345660, 'aloolaalo11@gmail.com'),
(8, 'izhar', 'Arias ', 0, 'izharias1@hotmail.com'),
(9, 'izhar', 'Arias ', 0, 'izharias1@hotmail.com'),
(10, 'izharr', 'Arias ', 0, 'izharias11@hotmail.com'),
(11, 'izzharr', 'Arias ', 0, 'izharias111@hotmail.com'),
(12, 'izzharrr', 'Arias ', 0, 'izharias1211@hotmail.com'),
(13, 'zarokyy', 'nexx nex', 0, 'aloolaalo111@gmail.com'),
(14, 'zarokydwd', 'nex nex', 0, 'aloolaalo11nfd@gmail.com'),
(15, 'enfsnefkjesnfkes', 'flesnfesf slfnsejknfes', 0, 'aloolaaldbjebfjo11@gmail.com'),
(16, 'dknfzdbjzdb', 'ekbjesbfjesbfjbesjfs nex', 0, 'aloolaalo1kefjsefjesfs1@gmail.'),
(17, 'dknfzdbjzdb', 'ekbjesbfjesbfjbesjfs nex', 0, 'aloolaalo1kefjsefjesfs1@gmail.'),
(18, 'dknfzdbjzdb', 'ekbjesbfjesbfjbesjfs nex', 0, 'aloolaalo1kefjsefjesfs1@gmail.'),
(19, 'dknfzdbjzdb', 'ekbjesbfjesbfjbesjfs nex', 0, 'aloolaalo1kefjsefjesfs1@gmail.'),
(20, 'dknfzdbjzdb', 'ekbjesbfjesbfjbesjfs nex', 0, 'aloolaalo1kefjsefjesfs1@gmail.');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`id`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`idAnimal`) REFERENCES `animal` (`idAnimal`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
