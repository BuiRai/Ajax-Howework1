-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-09-2015 a las 01:48:40
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ajaxt1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dateAdmission` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `career` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `student`
--

INSERT INTO `student` (`id`, `name`, `lastname`, `birthdate`, `dateAdmission`, `gender`, `email`, `career`) VALUES
('11', 'sakari02', 'asd', 'asd', 'asd', 'F', 'buirai_naetle@hotmail.com', 'qqqqq');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `ajaxt1`.`student` (`id`, `name`, `lastname`, `birthdate`, `dateAdmission`, `gender`, `email`, `career`) VALUES 
('11111111', 'Jose', 'Santos Bolaños', '01-01-1993', '01-01-2015', 'M', 'jose@gmail.com', 'Ing. de Software'), 
('22222222', 'Maria', 'Arvizu Olivas', '02-02-1890', '02-02-2015', 'F', 'marvizu@gmail.com', 'Actriz de doblaje');
