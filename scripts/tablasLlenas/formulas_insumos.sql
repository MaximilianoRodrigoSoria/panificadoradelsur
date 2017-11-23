-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2017 a las 18:22:28
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
-- Estructura de tabla para la tabla `formulas_insumos`
--

CREATE TABLE `formulas_insumos` (
  `id` int(11) NOT NULL,
  `formula_id` int(11) NOT NULL,
  `insumo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formulas_insumos`
--

INSERT INTO `formulas_insumos` (`id`, `formula_id`, `insumo_id`) VALUES
(8, 4, 1),
(9, 4, 4),
(10, 4, 7),
(11, 4, 11),
(12, 4, 12),
(13, 4, 13),
(14, 4, 14),
(15, 4, 15),
(16, 4, 16),
(18, 6, 1),
(19, 6, 3),
(20, 6, 8),
(21, 6, 13),
(22, 6, 16),
(23, 6, 17),
(24, 7, 1),
(25, 7, 2),
(26, 7, 7),
(27, 7, 8),
(28, 7, 12),
(29, 7, 13),
(30, 7, 16),
(31, 7, 18),
(32, 8, 1),
(33, 8, 3),
(34, 8, 8),
(35, 8, 13),
(36, 8, 16),
(37, 8, 17),
(38, 8, 19),
(39, 9, 1),
(40, 9, 6),
(41, 9, 7),
(42, 9, 8),
(43, 9, 13),
(44, 9, 16),
(45, 9, 17),
(46, 10, 5),
(47, 10, 8),
(48, 10, 13),
(49, 10, 16),
(50, 10, 20),
(51, 11, 5),
(52, 11, 8),
(53, 11, 9),
(54, 11, 13),
(55, 11, 16),
(56, 11, 20),
(57, 12, 8),
(58, 12, 13),
(59, 12, 16),
(60, 12, 20),
(61, 12, 22),
(62, 13, 5),
(63, 13, 8),
(64, 13, 9),
(65, 13, 13),
(66, 13, 16),
(67, 13, 22),
(68, 14, 2),
(69, 14, 7),
(70, 14, 8),
(71, 14, 9),
(72, 14, 16),
(73, 14, 17),
(74, 14, 21),
(75, 15, 5),
(76, 15, 8),
(77, 15, 16),
(78, 15, 17),
(79, 15, 21),
(80, 15, 2),
(81, 15, 23),
(82, 16, 2),
(83, 16, 5),
(84, 16, 7),
(85, 16, 12),
(86, 16, 13),
(87, 16, 23),
(88, 16, 25),
(89, 17, 3),
(90, 17, 5),
(91, 17, 8),
(92, 17, 13),
(93, 17, 16),
(94, 17, 19),
(95, 18, 2),
(96, 18, 7),
(97, 18, 13),
(98, 18, 25),
(99, 18, 26),
(100, 18, 27),
(101, 18, 28),
(102, 18, 29),
(103, 18, 30),
(104, 19, 5),
(105, 19, 7),
(106, 19, 13),
(107, 19, 17),
(108, 19, 21),
(109, 20, 5),
(110, 20, 7),
(111, 20, 13),
(112, 20, 21),
(113, 21, 1),
(114, 21, 13),
(115, 21, 16),
(116, 21, 17),
(117, 22, 1),
(118, 22, 16),
(119, 22, 17);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulas_insumos`
--
ALTER TABLE `formulas_insumos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulas_insumos`
--
ALTER TABLE `formulas_insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
