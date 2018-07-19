-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2018 a las 18:18:34
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `amchart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `my_chart_data`
--

CREATE TABLE `my_chart_data` (
  `category` date NOT NULL,
  `value1` int(11) NOT NULL,
  `value2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `my_chart_data`
--

INSERT INTO `my_chart_data` (`category`, `value1`, `value2`) VALUES
('2013-08-24', 417, 127),
('2013-08-25', 417, 356),
('2013-08-26', 531, 585),
('2013-08-27', 333, 910),
('2013-08-28', 552, 30),
('2013-08-29', 492, 371),
('2013-08-30', 379, 781),
('2013-08-31', 767, 494),
('2013-09-01', 169, 364),
('2013-09-02', 314, 476),
('2013-09-03', 437, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `my_chart_data`
--
ALTER TABLE `my_chart_data`
  ADD PRIMARY KEY (`category`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
