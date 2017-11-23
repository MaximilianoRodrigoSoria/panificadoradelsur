-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2017 a las 18:22:35
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
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id`, `estado_id`, `nombre`, `stock`) VALUES
(1, 1, 'harina 000', 150),
(2, 1, 'huevos', 100),
(3, 1, 'grasa', 40),
(4, 1, 'harina de centeno', 35),
(5, 1, 'harina 0000', 100),
(6, 1, 'harina de salvado', 60),
(7, 1, 'leche', 80),
(8, 1, 'azucar', 210),
(9, 1, 'dulce de leche', 60),
(11, 1, 'harina integral', 100),
(12, 1, 'levadura seca', 50),
(13, 1, 'sal', 60),
(14, 1, 'semilla de lino', 100),
(15, 1, 'melaza', 80),
(16, 1, 'agua', 500),
(17, 1, 'levadura fresca', 50),
(18, 1, 'esencia de vainilla', 67),
(19, 1, 'margarina', 80),
(20, 1, 'aceite de maiz', 67),
(21, 1, 'aceite de girasol', 80),
(22, 1, 'chocolate para cobertura', 70),
(23, 1, 'crema pastelera', 100),
(24, 1, 'dulce de membrillo', 72),
(25, 1, 'manteca', 65),
(26, 1, 'queso rallado', 50),
(27, 1, 'queso cascara colorada', 60),
(28, 1, 'harina de mandioca', 85),
(29, 1, 'pimienta', 71),
(30, 1, 'polvo de hornear', 60);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
