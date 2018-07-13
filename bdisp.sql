CREATE USER 'userisp'@'localhost' IDENTIFIED BY 'userisp';
--
-- Base de datos: `bdisp`
--
CREATE DATABASE IF NOT EXISTS `bdisp`;
USE `bdisp`;

GRANT ALL PRIVILEGES ON `bdisp`.* TO 'userisp'@'localhost' WITH GRANT OPTION;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis_muestras`
--

CREATE TABLE `analisis_muestras` (
  `id` int(11) NOT NULL,
  `fecha_recepcion` datetime NOT NULL,
  `temperatura` decimal(3,1) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `empresa_codigo` int(11) NOT NULL,
  `particular_codigo` int(11) NOT NULL,
  `empleado_rut` varchar(10) NOT NULL
);

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
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `categoria` varchar(1) NOT NULL
);

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
);

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
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_analisis`
--

CREATE TABLE `resultado_analisis` (
  `tipo_analisis_id` int(11) NOT NULL,
  `analisis_muestras_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `ppm` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `empleado_rut` varchar(10) NOT NULL
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id` int(11) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `particular_codigo` int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_analisis`
--

CREATE TABLE `tipo_analisis` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisis_muestras`
--
ALTER TABLE `analisis_muestras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_codigo` (`empresa_codigo`),
  ADD KEY `particular_codigo` (`particular_codigo`),
  ADD KEY `empleado_rut` (`empleado_rut`);

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
-- Indices de la tabla `resultado_analisis`
--
ALTER TABLE `resultado_analisis`
  ADD PRIMARY KEY (`tipo_analisis_id`,`analisis_muestras_id`),
  ADD KEY `empleado_rut` (`empleado_rut`),
  ADD KEY `analisis_muestras_id` (`analisis_muestras_id`),
  ADD KEY `tipo_analisis_id` (`tipo_analisis_id`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id`),
  ADD KEY `particular_codigo` (`particular_codigo`);

--
-- Indices de la tabla `tipo_analisis`
--
ALTER TABLE `tipo_analisis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisis_muestras`
--
ALTER TABLE `analisis_muestras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `particular`
--
ALTER TABLE `particular`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_analisis`
--
ALTER TABLE `tipo_analisis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analisis_muestras`
--
ALTER TABLE `analisis_muestras`
  ADD CONSTRAINT `analisis_muestras_ibfk_1` FOREIGN KEY (`empleado_rut`) REFERENCES `empleado` (`rut`) ON UPDATE CASCADE,
  ADD CONSTRAINT `analisis_muestras_ibfk_2` FOREIGN KEY (`particular_codigo`) REFERENCES `particular` (`codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `analisis_muestras_ibfk_3` FOREIGN KEY (`empresa_codigo`) REFERENCES `empresa` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`empresa_codigo`) REFERENCES `empresa` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `resultado_analisis`
--
ALTER TABLE `resultado_analisis`
  ADD CONSTRAINT `resultado_analisis_ibfk_1` FOREIGN KEY (`analisis_muestras_id`) REFERENCES `analisis_muestras` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `resultado_analisis_ibfk_2` FOREIGN KEY (`tipo_analisis_id`) REFERENCES `tipo_analisis` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `resultado_analisis_ibfk_3` FOREIGN KEY (`empleado_rut`) REFERENCES `empleado` (`rut`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `telefono_ibfk_1` FOREIGN KEY (`particular_codigo`) REFERENCES `particular` (`codigo`) ON UPDATE CASCADE;
COMMIT;

----------------------------------------------------

INSERT INTO `tipo_analisis` (`id`, `nombre`) VALUES
(1, 'Deteccion Paguicidas Prohibidos'),
(2, 'Deteccion Metales Pesados'),
(3, 'Deteccion Micotoxinas'),
(4, 'Deteccion Marea Roja'),
(5, 'Deteccion Bacterias Nocivas');

INSERT INTO `particular` (`codigo`, `rut`, `password`, `nombre`, `direccion`, `email`) VALUES
(1, '456789', '456789', 'DionisioChavez', 'Independencia 789', 'dchavez@gmail.com'),
(2, '222333', '222333', 'LeonDriusi', 'Recoleta 1233', 'ldriusi@gmail.com');

INSERT INTO `empresa` (`codigo`, `rut`, `nombre`, `password`, `direccion`) VALUES
(1, '212121', 'Adidas', '212121', 'Independencia 211'),
(2, '131313', 'Nike', '131313', 'Independencia 2112');

INSERT INTO `empleado` (`rut`, `nombre`, `password`, `categoria`) VALUES
('112233', 'AndresChavez', '112233', 'A'),
('12345', 'RobertoGomez', '12345', 'A'),
('128934', 'RosanaMerlin', '128934', 'T'),
('44556677', 'JuanRaiz', '44556677', 'T'),
('66553311', 'RamiroAsman', '66553311', 'R'),
('998877', 'DanielCharles', '998877', 'A');

INSERT INTO `contacto` (`rut`, `nombre`, `email`, `telefono`, `empresa_codigo`) VALUES
('2221112', 'Ricardo Fiel', 'rfiel@gmail', '98882222', 1),
('44445551', 'Juan Zamorano', 'jzamorano@gmail.com', '9080808', 2);

INSERT INTO `analisis_muestras` (`id`, `fecha_recepcion`, `temperatura`, `cantidad`, `empresa_codigo`, `particular_codigo`, `empleado_rut`) VALUES
(1, '2013-01-01 00:00:00', '10.0', 3, 1, 2, '128934');

COMMIT;