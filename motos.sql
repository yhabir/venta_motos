-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2022 a las 06:49:35
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `motos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motoventas`
--

CREATE TABLE IF NOT EXISTS `motoventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idmoto` varchar(8) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `precio` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabla para historial de cartones ganadores por codigos de carton' AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `motoventas`
--

INSERT INTO `motoventas` (`id`, `idmoto`, `marca`, `modelo`, `precio`) VALUES
(1, '498f2c78', 'yamaha', 'yamaha', '1600000'),
(2, 'f3deee0b', 'honda', 'honda', '600000'),
(4, '6fc2ca37', 'toyota', 'toyota', '560000'),
(5, '338747ba', 'vera', 'vera', '320000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
