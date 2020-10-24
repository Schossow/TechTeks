-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-09-2020 a las 05:09:20
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `links_history`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_enlace`
--

DROP TABLE IF EXISTS `info_enlace`;
CREATE TABLE IF NOT EXISTS `info_enlace` (
  `enlace_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numero de enlace',
  `creador_id` int(11) NOT NULL COMMENT 'ID del usuario creador',
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de creacion del enlace',
  PRIMARY KEY (`enlace_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_usuario`
--

DROP TABLE IF EXISTS `info_usuario`;
CREATE TABLE IF NOT EXISTS `info_usuario` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numero de usuario',
  `user_ip` varchar(50) NOT NULL COMMENT 'IP del usuario',
  `enlaces_creados` int(11) NOT NULL COMMENT 'Enlaces creados por el usuario',
  `ultima_mod` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de creacion del ultimo enlace',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_ip` (`user_ip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
