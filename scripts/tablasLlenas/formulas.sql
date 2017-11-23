-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2017 a las 18:22:22
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
-- Estructura de tabla para la tabla `formulas`
--

CREATE TABLE `formulas` (
  `id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formulas`
--

INSERT INTO `formulas` (`id`, `estado_id`, `nombre`, `descripcion`) VALUES
(4, 1, 'pan de centeno', '+ 300 g de harina 000\r\n+ 100 g de harina de integral\r\n+ 175 g de harina de centeno\r\n+ 2 cucharaditas de levadura seca\r\n+ 1 cucharadita de sal\r\n+ 3 cucharaditas de semillas lino\r\n+ 1 cucharada de melaza\r\n+ 100 ml de leche\r\n+ 300 ml de agua.'),
(6, 1, 'pan casero', '+ 1kg de Harina 000\r\n+ 100kg de Grasa\r\n+ 50g de Levadura Fresca\r\n+ 500ml de Agua\r\n+ 1 cucharadita de AzÃºcar,\r\n+ 20g de Sal\r\n'),
(7, 1, 'medialuna de manteca', 'Masa: \r\n+ 500g de harina 0000\r\n+ 15g de sal\r\n+ 75g de azÃºcar\r\n+ 1 huevo\r\n+ 200cm3 de leche\r\n+ 10g de levadura seca\r\n+ 1 cucharadita de esencia de vainilla\r\n\r\nEmpaste:\r\n+ 50g de harina 0000\r\n+ 250g de manteca\r\n\r\nAlmÃ­bar:\r\n+ 200cm3 de agua\r\n+ 200gr azÃºcar'),
(8, 1, 'medialuna de grasa', 'Masa:\r\n+ 500g de harina 0000\r\n+ 10g de levadura fresca\r\n+ 20de sal\r\n+ 25g de azÃºcar\r\n+ 250cm2 de agua\r\n\r\nEmpaste:\r\n+ 100g de grasa\r\n+ 100g de margarina\r\n+ 20g de harina 0000'),
(9, 1, 'pan de salvado', '+ 1kg de harina 000\r\n+ 200g de harina de salvado\r\n+ 15g de levadura fresca\r\n+ 375cm2 de leche.\r\n+ 500cm2 de agua.\r\n+ 1 cucharadita de sal.\r\n+ 1 cucharadita de azÃºcar.'),
(10, 1, 'churro', '+ 300g de harina 0000\r\n+ 440ml de agua.\r\n+ 1 cucharadita de sal\r\n+ 3g de azucar\r\n+ 200ml de aceite de maiz'),
(11, 1, 'churro relleno de dulce de leche', 'Masa:\r\n+ 300g de harina 0000\r\n+ 440ml de agua.\r\n+ 1 cucharadita de sal\r\n+ 3g de azucar\r\n+ 200ml de aceite de maiz\r\n\r\nRelleno:\r\n+ 170g de dulce de leche'),
(12, 1, 'churro baÃ±ado de chocolate', 'Masa:\r\n+ 300g de harina 0000\r\n+ 440ml de agua\r\n+ 1 cucharadita de sal\r\n+ 3g de azucar\r\n+ 200ml de aceite de maiz \r\n\r\nCobertura:\r\n\r\n+100g de chocolate para cobertura'),
(13, 1, 'churro baÃ±ado y relleno de dulce de leche', 'Masa:\r\n+ 300g de harina 0000\r\n+ 440ml de agua\r\n+ 1 cucharadita de sal\r\n+ 3g de azucar\r\n+ 200ml de aceite de maiz \r\n\r\nCobertura:\r\n+100g de chocolate para cobertura\r\n\r\nRelleno:\r\n+ 170g de dulce de leche '),
(14, 1, 'bola de fraile de dulce de leche', 'Masa:\r\n+ 750g de harina 0000\r\n+ 50g de levadura fresca\r\n+ 150ml de agua\r\n+ 150ml de leche\r\n+ 350g de azucar\r\n+ 3 cucharadas de aceite de girasol\r\n+ 1 huevo\r\n\r\nRelleno:\r\n+ 500g de dulce de leche'),
(15, 1, 'bola de fraile de crema pastelera', 'Masa:\r\n+ 750g de harina 0000\r\n+ 50g de levadura fresca\r\n+ 150ml de agua\r\n+ 150ml de leche\r\n+ 350g de azucar\r\n+ 3 cucharadas de aceite de girasol\r\n+ 1 huevo\r\n\r\nRelleno:\r\n+ 500g de crema pastelera'),
(16, 1, 'vigilante de crema pastelera', 'Masa:\r\n\r\n+ 750 g harina 0000\r\n+ 500ml de leche\r\n+ 70 g manteca\r\n+ 1 1/2 cucharadita de sal\r\n+ 70g de azÃºcar\r\n+ 16g de levadura seca\r\n+ 1 huevo\r\n\r\nTopping:\r\n+100g de crema pastelera'),
(17, 1, 'librito de grasa', 'Masa:\r\n+ 500g de Harina 0000\r\n+ 250 cm2 de Agua\r\n+ 20g de Sal \r\n+ 15g de AzÃºcar\r\n+ 50g de Grasa\r\n\r\nEmpaste:  \r\n+ 75g de Margarina\r\n+ 75g de Grasa\r\n+ 1 cucharadita de Harina 0000\r\n'),
(18, 1, 'chipa con queso', '+ 500g de harina de mandioca\r\n+ 500g de queso cÃ¡scara colorada\r\n+ 1/2 taza de queso rallado\r\n+ 150g de manteca\r\n+ 4 huevos\r\n+ 1/2 taza leche\r\n+ 1/2 cucharadita de pimienta\r\n+ 1 cucharadita de sal\r\n+ 1 cucharada de polvo de hornear'),
(19, 1, 'flautita', '+ 500g de harina 0000\r\n+ 30g de levadura fresca\r\n+ 100ml aceite de girasol\r\n+ 1 cucharada de sal\r\n+ 1 taza de leche tibia'),
(20, 1, 'flautita sin sal', '+ 500g de harina 0000\r\n+ 30g de levadura fresca\r\n+ 100ml aceite de girasol\r\n+ 1 taza de leche tibia'),
(21, 1, 'mignon', '+ 300g de Harina 000\r\n+ 10g de Levadura fresca\r\n+ 180ml de Agua\r\n+ 1 cucharadita de Sal'),
(22, 1, 'mignon sin sal', '+ 300g de Harina 000\r\n+ 10g de Levadura fresca\r\n+ 180ml de Agua');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulas`
--
ALTER TABLE `formulas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulas`
--
ALTER TABLE `formulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
