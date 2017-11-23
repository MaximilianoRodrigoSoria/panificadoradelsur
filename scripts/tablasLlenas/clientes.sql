-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2017 a las 18:21:43
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `panificadosdelsur`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `estado_id`, `nombre`, `apellido`, `dni`, `telefono`, `email`) VALUES
(1, 1, 'Jesica', 'Soria', 34404040, 1233123123, 'jesica_deSoria@gmail.com'),
(2, 1, 'Roberto', 'Poggi', 25449825, 42601212, 'poggi0577@gmail.com'),
(3, 1, 'Kevin', 'Hidalgo', 36548121, 49875656, 'kevinhidalgo@hotmail.com'),
(4, 1, 'Jesica', 'Lopez', 35125550, 42000101, 'lopezjesi@yahoo.com.ar'),
(5, 1, 'Julian', 'Salgado', 37564098, 42016164, 'salgado_xeneize@gmail.com'),
(6, 1, 'Yamila', 'Vergara', 36915226, 2034659745, 'yamilaluciavergara@hotmail.com'),
(7, 1, 'Mariano', 'Martinez', 33121255, 1558022624, 'reysol_marquesi@yahoo.com.ar'),
(8, 1, 'Lorenzo', 'Lamas', 2147483647, 49026487, 'lamas_original@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
