-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2018 a las 21:43:34
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventcorp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `desc_categoria` varchar(255) NOT NULL,
  `estado_categoria` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `desc_categoria`, `estado_categoria`) VALUES
(1, 'comida', 'comidas deliciiosaz', 1),
(2, 'medicamento', 'medicamentos ovs', 1),
(3, 'metales', 'metalurgicos', 1),
(4, 'plasticos', 'plasticosos de arbol', 1),
(5, 'maderas', 'maderas naturales', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listar_clientes_proveedores`
--

CREATE TABLE `listar_clientes_proveedores` (
  `codigo_proveedor_cliente` varchar(50) NOT NULL,
  `primer_nombre_provee_clie` varchar(50) NOT NULL,
  `segundo_nombre_provee_clie` varchar(50) NOT NULL,
  `primer_apellido_provee_clie` varchar(50) NOT NULL,
  `segundo_apellido_provee_clie` varchar(50) NOT NULL,
  `email_proveedor_cliente` varchar(50) NOT NULL,
  `telefono_proveedor_cliente` varchar(50) NOT NULL,
  `estado_proveedor_cliente` tinyint(1) NOT NULL,
  `id_rol_listar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `listar_clientes_proveedores`
--

INSERT INTO `listar_clientes_proveedores` (`codigo_proveedor_cliente`, `primer_nombre_provee_clie`, `segundo_nombre_provee_clie`, `primer_apellido_provee_clie`, `segundo_apellido_provee_clie`, `email_proveedor_cliente`, `telefono_proveedor_cliente`, `estado_proveedor_cliente`, `id_rol_listar`) VALUES
('001', 'zzzzzzzzzzz', 'zzzzz', 'zzzzz', 'zzzz', 'asdad@adsadas', 'telclie', 1, 2),
('007', 'z', 'qweqwe', 'z', 'qweqwe', 'asdad@adsadas', 'telclie', 1, 1),
('009', 'fdgdf', 'dfgdfg', 'dfgdfg', 'fdgdfg', 'dfgd@dsf', 'sdf3121', 1, 1),
('010', 'jum', 'ujm', 'muj', '<!--', 'umj@muj', '3213121', 1, 2),
('011', 'plmlmp', 'plm', '<!--', 'plmplm', 'lppml@pklm', 'telclie', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `id_observacion` int(11) NOT NULL,
  `usuario_observacion` varchar(50) NOT NULL,
  `desc_obeservacion` text NOT NULL,
  `fecha_observacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo_producto` varchar(50) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `desc_producto` varchar(50) NOT NULL,
  `precio_entrada` varchar(50) NOT NULL,
  `precio_salida` varchar(50) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `estado_producto` tinyint(1) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `nombre_producto`, `desc_producto`, `precio_entrada`, `precio_salida`, `fecha_ingreso`, `estado_producto`, `id_categoria`) VALUES
('as', 'carnes', 'carnes de cerdo gordo', '3250', '8920', '2018-07-03', 1, 1),
('assdsasd', 'nombre', 'de verdad', '3212', '6000', '2018-07-01', 1, 4),
('CRN01', 'carne ', 'carne de vaca flaca', '1200', '8600', '2018-08-01', 1, 1),
('EMP01', 'empanadas', 'empanditas de maiz', '3200', '4200', '2018-07-31', 1, 4),
('EMP015', 'empanadas', 'empandas de cerdo', '2800', '3400', '2018-07-03', 0, 1),
('EMP04', 'empanadas', 'empandas de pollo', '1100', '4000', '2018-07-03', 0, 1),
('prueba01', 'prueba ver actualizacion html', 'prueba actu html', '3200', '3200', '2018-07-05', 1, 3),
('prueba02', 'actualizacion realizada', 'actualizacion realizada', '100', '500', '2018-07-10', 0, 2),
('prueba03', 'prueba ver danos', 'prueba ver actualizacion', '3950', '4510', '2018-07-06', 0, 1),
('prueba07', 'sasad', 'prueba', '3600', '3200', '2018-07-30', 1, 2),
('prueba08', 's', 's', '1989', '1945', '2018-07-03', 0, 1),
('prueba34', 'madera', 'madera de nogal', '2890', '2400', '2018-08-31', 1, 3),
('qerqweqwe', 'wqeqweqwe', 'qweqweqwe', '1600', '6000', '2018-07-04', 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `desc_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `desc_rol`) VALUES
(1, 'admin'),
(2, 'usu'),
(3, 'visi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_para_listar`
--

CREATE TABLE `rol_para_listar` (
  `id_rol_listar` int(11) NOT NULL,
  `desc_rol_listar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol_para_listar`
--

INSERT INTO `rol_para_listar` (`id_rol_listar`, `desc_rol_listar`) VALUES
(1, 'clientes'),
(2, 'proveedores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `usuario` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`usuario`, `descripcion`, `fecha`) VALUES
('Camilo', 'Array', '2018-08-11'),
('Camilo', '(&#39;El usuario&#39;), (&#39;Camilo&#39;), (&#39;con documento&#39;), (&#39;1022423958&#39;), (&#39;cambio&#39;), (&#39;carnez&#39;), (&#39;por&#39;), (&#39;carne&#39;), (&#39;, cambio&#39;), (&#39;carne de cerdo gordoz&#39;), (&#39;por&#39;), (&#39;carne de cerdo gordo&#39;)', '2018-08-11'),
('Camilo', ' El usuario , Camilo , con documento , 1022423958 , cambio , carne , por , carnez , , cambio , carne de cerdo gordo , por , carne de cerdo gordoz ', '2018-08-11'),
('Camilo', ' El usuario Camilo con documento 1022423958 cambio ( carnez ) por ( carne ) , cambio ( carne de cerdo gordoz ) por ( carne de cerdo gordo ) ', '2018-08-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 cambio ( carne ) por ( carnez ) , cambio ( carne de cerdo gordo ) por ( carne de cerdo gordoz ) ', '2018-08-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 cambio ( carnez ) por ( carne ) , cambio ( carne de cerdo gordoz ) por ( carne de cerdo gordo ) ', '2018-08-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 cambio ( carne ) por ( carnez ) ', '2018-08-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 cambio ( carnez ) por ( carne ) , cambio ( carne de cerdo gordo ) por ( carne de cerdo gordoz ) ', '2018-08-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 cambio ( carne ) por ( carnes ) , ( carne de cerdo gordoz ) por ( carnes de cerdo gordo ) , ( zzzzzzzzzz ) por ( 3200 ) , ( zzzzzzz ) por ( 8920 ) ', '2018-08-11'),
('', ' El usuario  con documento  inserto un producto nuevo ( prueba34 ) ', '2018-08-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 cambio ( asdasdasd ) por ( nombre ) , ( asdasdasda ) por ( de verdad ) , ( asdasd ) por ( 52000 ) , ( dasdadas ) por ( 60000 ) , ( 1 ) por ( 4 ) ', '2018-08-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 120000 ) por ( 12000 ) , ( 240000 ) por ( 24000 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 12000 ) por ( 1200 ) , ( 24000 ) por ( 2400 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 3200 ) por ( 3250 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 3200 ) por ( 3600 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 52000 ) por ( 3212 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 01 ) por ( 3200 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 5200 ) por ( 4234 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 1200 ) por ( 2890 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 4234 ) por ( 120000 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 2890 ) por ( 289000 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 120000 ) por ( 1200 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 289000 ) por ( 2890 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 32000 ) por ( 3200 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 60000 ) por ( 6000 ) ', '2018-08-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 , ( 32000 ) por ( 3200 ) ', '2018-08-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `cantidad_ingreso` int(11) NOT NULL,
  `cantidad_salida` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `codigo_producto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`cantidad_ingreso`, `cantidad_salida`, `fecha`, `codigo_producto`) VALUES
(1, 2, '2018-07-21 21:58:56', 'EMP01'),
(3, 1, '2018-07-21 21:59:39', 'EMP01'),
(7, 6, '2018-07-21 22:17:10', 'EMP01'),
(3, 45, '2018-07-21 22:20:36', 'EMP01'),
(70, 6, '2018-07-21 22:21:08', 'EMP01'),
(34, 43, '2018-07-21 22:21:33', 'EMP01'),
(1, 16, '2018-07-21 22:21:47', 'EMP01'),
(15, 30, '2018-07-21 22:22:19', 'EMP01'),
(34, 6, '2018-07-21 22:24:14', 'EMP01'),
(20, 10, '2018-07-21 22:42:06', 'EMP01'),
(70, 45, '2018-07-21 23:02:44', 'EMP01'),
(34, 45, '2018-07-22 00:19:03', 'EMP01'),
(70, 6, '2018-07-23 00:12:53', 'as'),
(70, 6, '2018-07-29 14:23:52', 'as'),
(10, 0, '2018-07-29 14:25:01', 'as'),
(5, 6, '2018-08-11 12:30:39', 'EMP01'),
(7, 6, '2018-08-11 19:03:14', 'as'),
(70, 45, '2018-08-11 19:04:34', 'CRN01'),
(7, 6, '2018-08-11 19:05:22', 'CRN01'),
(7, 6, '2018-08-11 19:07:42', 'as'),
(34, 45, '2018-08-11 19:08:38', 'CRN01'),
(7, 2, '2018-08-11 19:09:06', 'CRN01'),
(34, 45, '2018-08-12 09:17:34', 'as'),
(70, 2, '2018-08-12 16:20:12', 'EMP01'),
(7, 45, '2018-08-12 16:20:18', 'EMP01'),
(7, 45, '2018-08-12 16:22:14', 'CRN01'),
(70, 45, '2018-08-12 16:22:19', 'CRN01'),
(34, 45, '2018-08-12 16:22:34', 'CRN01'),
(70, 6, '2018-08-12 16:22:37', 'CRN01'),
(7, 6, '2018-08-12 16:22:41', 'CRN01'),
(18, 3, '2018-08-12 16:22:48', 'CRN01'),
(26, 34, '2018-08-12 16:22:53', 'CRN01'),
(70, 45, '2018-08-12 16:23:23', 'CRN01'),
(34, 45, '2018-08-12 16:23:27', 'CRN01'),
(7, 34, '2018-08-12 16:23:32', 'CRN01'),
(3, 6, '2018-08-12 16:23:40', 'CRN01'),
(7, 6, '2018-08-12 16:24:26', 'as'),
(70, 45, '2018-08-12 16:24:29', 'as'),
(7, 45, '2018-08-12 16:24:32', 'as'),
(70, 134, '2018-08-12 16:24:38', 'as'),
(7, 6, '2018-08-12 16:24:42', 'as'),
(70, 6, '2018-08-12 16:24:44', 'as'),
(70, 6, '2018-08-12 16:24:47', 'as'),
(1, 134, '2018-08-12 16:24:55', 'as');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_documento`
--

CREATE TABLE `tipo_de_documento` (
  `tipo_documento` varchar(2) NOT NULL,
  `desc_documento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `documento` int(11) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `primer_nombre` varchar(50) NOT NULL,
  `segundo_nombre` varchar(50) NOT NULL,
  `primer_apellido` varchar(50) NOT NULL,
  `segundo_apellido` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `estado_usuario` tinyint(1) NOT NULL,
  `tipo_documento` varchar(2) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`documento`, `email_usuario`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `contrasena`, `telefono`, `estado_usuario`, `tipo_documento`, `id_rol`) VALUES
(1022423958, 'admin@admin', 'Camilo', 'Alejandro', 'Moreno', 'Pineros', '$2y$10$5tao.GzsHFeuOrQ0NKFGIe7MTEBU8Tf/.MDb2mD0.7myKUn5GItDe', '01', 1, 'CC', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `listar_clientes_proveedores`
--
ALTER TABLE `listar_clientes_proveedores`
  ADD PRIMARY KEY (`codigo_proveedor_cliente`),
  ADD KEY `fk_clientes_rol_listar` (`id_rol_listar`);

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`id_observacion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo_producto`),
  ADD KEY `fk_idcategoria` (`id_categoria`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `rol_para_listar`
--
ALTER TABLE `rol_para_listar`
  ADD PRIMARY KEY (`id_rol_listar`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`fecha`);

--
-- Indices de la tabla `tipo_de_documento`
--
ALTER TABLE `tipo_de_documento`
  ADD PRIMARY KEY (`tipo_documento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `fk_clientes_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id_observacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `listar_clientes_proveedores`
--
ALTER TABLE `listar_clientes_proveedores`
  ADD CONSTRAINT `fk_clientes_rol_listar` FOREIGN KEY (`id_rol_listar`) REFERENCES `rol_para_listar` (`id_rol_listar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_idcategoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_clientes_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
