CREATE USER 'userbbddisp'@'localhost' IDENTIFIED BY 'userbbddisp';
--
-- Base de datos: `bbddisp`
--
CREATE DATABASE IF NOT EXISTS `bbddisp`;
USE `bbddisp`;

GRANT ALL PRIVILEGES ON `bbddisp`.* TO 'userbbddisp'@'localhost' WITH GRANT OPTION;
-- --------------------------------------------------------

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2018 a las 05:27:20
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbddisp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis_muestra`
--

CREATE TABLE `analisis_muestra` (
  `id` int(11) NOT NULL,
  `fecha_recepcion` datetime NOT NULL,
  `temperatura` decimal(3,1) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `empresa_codigo` int(11) DEFAULT NULL,
  `particular_codigo` int(11) DEFAULT NULL,
  `empleado_rut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `analisis_muestra`
--

INSERT INTO `analisis_muestra` (`id`, `fecha_recepcion`, `temperatura`, `cantidad`, `empresa_codigo`, `particular_codigo`, `empleado_rut`) VALUES
(1, '2013-01-01 00:00:00', '10.0', 3, NULL, 1, '128934'),
(2, '2018-07-12 00:00:00', '99.9', 1, 2, NULL, '1222'),
(3, '2018-07-12 00:00:00', '12.0', 1, 2, NULL, '1222'),
(4, '2018-07-19 00:00:00', '12.0', 1, 1, 1, '1222'),
(5, '2018-07-26 00:00:00', '12.0', 12, 2, 2, '1222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis_resultado`
--

CREATE TABLE `analisis_resultado` (
  `id` int(11) NOT NULL,
  `analisis_tipo_id` int(11) NOT NULL,
  `analisis_muestra_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `ppm` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `empleado_rut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `analisis_resultado`
--

INSERT INTO `analisis_resultado` (`id`, `analisis_tipo_id`, `analisis_muestra_id`, `fecha`, `ppm`, `estado`, `empleado_rut`) VALUES
(1, 5, 1, '2018-07-06 00:00:00', 100, 0, '12345'),
(2, 4, 2, '2018-07-12 00:00:00', 100, 0, '1222'),
(3, 1, 3, '2018-07-06 00:00:00', 12, 0, '1222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis_tipo`
--

CREATE TABLE `analisis_tipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `analisis_tipo`
--

INSERT INTO `analisis_tipo` (`id`, `nombre`) VALUES
(1, 'DetecciÃ³n Plaguicidas Prohibidos'),
(2, 'DetecciÃ³n Metales Pesados'),
(3, 'DetecciÃ³n Micotoxinas'),
(4, 'Deteccion Marea Roja'),
(5, 'Deteccion Bacterias Nocivas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `empresa_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`rut`, `nombre`, `email`, `telefono`, `empresa_codigo`) VALUES
('2121', 'juan perez', 'jperez@gmail.com', '1234', 2),
('2221112', 'Ricardo Fiels', 'rfiel@gmail', '98882222', 1),
('44445551', 'Juan Zamorano', 'jzamorano@gmail.com', '9080808', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `categoria` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`rut`, `nombre`, `password`, `categoria`) VALUES
('112233', 'AndresChavez', '112233', 'A'),
('1222', 'adalberto gomez', '1222', 'R'),
('12345', 'RobertoGomez', '12345', 'A'),
('128934', 'Rosana Merlin', '128934', 'T'),
('212221', 'adrian romero', '212221', 'R'),
('44556677', 'JuanRaiz', '44556677', 'T'),
('66553311', 'RamiroAsman', '66553311', 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `codigo` int(11) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`codigo`, `rut`, `nombre`, `password`, `direccion`) VALUES
(1, '212121', 'Adidas', '212121', 'Independencia 211'),
(2, '131313', 'Nike', '131313', 'Independencia 2112');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `particular`
--

CREATE TABLE `particular` (
  `codigo` int(11) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `particular`
--

INSERT INTO `particular` (`codigo`, `rut`, `password`, `nombre`, `direccion`, `email`) VALUES
(1, '456789', '456789', 'DionisioChavez', 'Independencia 789', 'dchavez@gmail.com'),
(2, '222333', '222333', 'Leon Driusi Anda', 'Recoleta 123', 'ldriusi@gmail.com'),
(5, '1234', '1234', 'romelu', 'lokaku', 'ggchavez@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id` int(11) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `particular_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`id`, `numero`, `particular_codigo`) VALUES
(1, '909091', 5),
(3, '1212', 2),
(4, '2122', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisis_muestra`
--
ALTER TABLE `analisis_muestra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_codigo` (`empresa_codigo`),
  ADD KEY `particular_codigo` (`particular_codigo`),
  ADD KEY `empleado_rut` (`empleado_rut`);

--
-- Indices de la tabla `analisis_resultado`
--
ALTER TABLE `analisis_resultado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleado_rut` (`empleado_rut`),
  ADD KEY `analisis_muestra_id` (`analisis_muestra_id`),
  ADD KEY `analisis_tipo_id` (`analisis_tipo_id`);

--
-- Indices de la tabla `analisis_tipo`
--
ALTER TABLE `analisis_tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `empresa_codigo` (`empresa_codigo`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `particular`
--
ALTER TABLE `particular`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id`),
  ADD KEY `particular_codigo` (`particular_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisis_muestra`
--
ALTER TABLE `analisis_muestra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `analisis_resultado`
--
ALTER TABLE `analisis_resultado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `analisis_tipo`
--
ALTER TABLE `analisis_tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `particular`
--
ALTER TABLE `particular`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analisis_muestra`
--
ALTER TABLE `analisis_muestra`
  ADD CONSTRAINT `analisis_muestra_ibfk_1` FOREIGN KEY (`empleado_rut`) REFERENCES `empleado` (`rut`) ON UPDATE CASCADE,
  ADD CONSTRAINT `analisis_muestra_ibfk_2` FOREIGN KEY (`particular_codigo`) REFERENCES `particular` (`codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `analisis_muestra_ibfk_3` FOREIGN KEY (`empresa_codigo`) REFERENCES `empresa` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `analisis_resultado`
--
ALTER TABLE `analisis_resultado`
  ADD CONSTRAINT `analisis_resultado_ibfk_1` FOREIGN KEY (`analisis_muestra_id`) REFERENCES `analisis_muestra` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `analisis_resultado_ibfk_2` FOREIGN KEY (`analisis_tipo_id`) REFERENCES `analisis_tipo` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `analisis_resultado_ibfk_3` FOREIGN KEY (`empleado_rut`) REFERENCES `empleado` (`rut`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`empresa_codigo`) REFERENCES `empresa` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `telefono_ibfk_1` FOREIGN KEY (`particular_codigo`) REFERENCES `particular` (`codigo`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
