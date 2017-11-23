-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2017 a las 18:22:41
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `formula_id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `detalle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `estado_id`, `formula_id`, `nombre`, `detalle`) VALUES
(4, 1, 4, 'pan de centeno', 'receta tradicional'),
(5, 1, 6, 'pan casero', 'receta con grasa'),
(6, 1, 7, 'medialuna de manteca', 'receta tradicional'),
(7, 1, 8, 'medialuna de grasa', 'receta tradicional'),
(8, 1, 9, 'pan de salvado', 'receta original'),
(9, 1, 10, 'churro', 'receta tradicional'),
(10, 1, 11, 'churro relleno', 'receta tradicional - relleno de dulce de leche'),
(11, 1, 12, 'churro baÃ±ado', 'receta tradicional - baÃ±ado en chocolate para cobertura'),
(12, 1, 13, 'churro baÃ±ado relleno', 'receta tradicional - baÃ±ado en chocolate para cobertura y relleno de dulce de leche'),
(13, 1, 14, 'bola de fraile', 'receta original - relleno de dulce de leche'),
(14, 1, 16, 'vigilante', 'receta tradicional con crema pastelera'),
(15, 1, 17, 'librito', 'receta tradicional con grasa'),
(16, 1, 18, 'chipa', 'receta tradicional con queso'),
(17, 1, 19, 'flautita', 'receta tradicional'),
(18, 1, 20, 'flautita', 'receta sin sal'),
(19, 1, 21, 'mignon', 'receta tradicional'),
(20, 1, 22, 'mignon', 'receta sin sal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
