-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2018 a las 00:18:40
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
(1, 'carnez', 'carne de cerdo gordo', 1),
(2, 'prueba', 'prueba danos', 1),
(3, 'empanadas', 'carne de cerdo gordo', 1),
(4, 'carnezzzzz', 'carne de cerdo gordozzz', 1);

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
('001', 'zzzzzzzzzz', 'zzzzz', 'zzzzz', 'zzzz', 'asdad@adsadas.ocm', 'telclie', 1, 2),
('0014', 'asd', 'asdd', 'adsadas', 'asdad', 'asdad@adsadas.edu.co', '311', 0, 1),
('0034', 'qqq', 'qqqqqqq', 'qq', 'q', 'uyiyui@657.com', 'qq323', 1, 2),
('009', 'fdgdf', 'dfgdfg', 'dfgdfg', 'fdgdfg', 'dfgd@dsf', 'sdf3121', 1, 1),
('1022', 'asd', 'asdd', 'adsadas', 'asdad', 'asdad@adsadas.edu.co', '321321', 1, 1);

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
('prueba01', 'holaz', 'carne de cerdo gordoz', '2800', '3700', '2018-09-12', 0, 2),
('prueba02', 'sasad', 'carne de cerdo gordoz', '3200', '3200', '2018-09-04', 1, 1);

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
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasad ) por ( sasada ) ', '2018-09-01'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasada ) por ( hola ) , ( carne de cerdo gordo ) por ( carne de cerdo gordoz ) , ( 3200 ) por ( 2800 ) , ( 3200 ) por ( 3700 ) , ( 2018-09-04 ) por ( 2018-09-12 ) , ( 1 ) por ( 2 ) ', '2018-09-01'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  (  ) por ( hol ) , (  ) por ( carne de cerdo gordoz ) , (  ) por ( 2800 ) , (  ) por ( 3700 ) , (  ) por ( 2018-09-12 ) , (  ) por ( 2 ) ', '2018-09-01'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  (  ) por ( hola ) , (  ) por ( carne de cerdo gordoz ) , (  ) por ( 2800 ) , (  ) por ( 3700 ) , (  ) por ( 2018-09-12 ) , (  ) por ( 2 ) ', '2018-09-01'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  (  ) por ( sasad ) , (  ) por ( carne de cerdo gordoz ) , (  ) por ( 3200 ) , (  ) por ( 3200 ) , (  ) por ( 2018-09-04 ) , (  ) por ( 1 ) ', '2018-09-01'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  (  ) por ( hola ) , (  ) por ( carne de cerdo gordoz ) , (  ) por ( 2800 ) , (  ) por ( 3700 ) , (  ) por ( 2018-09-12 ) , (  ) por ( 2 ) ', '2018-09-01'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  (  ) por ( hola ) , (  ) por ( carne de cerdo gordoz ) , (  ) por ( 2800 ) , (  ) por ( 3700 ) , (  ) por ( 2018-09-12 ) , (  ) por ( 2 ) ', '2018-09-01'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( hola ) por ( holaz ) ', '2018-09-01');

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
(70, 6, '2018-09-01 12:48:49', 'prueba01'),
(7, 6, '2018-09-01 12:51:51', 'prueba01'),
(34, 6, '2018-09-01 12:53:03', 'prueba02'),
(34, 45, '2018-09-01 12:53:11', 'prueba02'),
(70, 45, '2018-09-01 12:53:14', 'prueba02'),
(34, 6, '2018-09-01 12:53:17', 'prueba02'),
(7, 45, '2018-09-01 12:53:21', 'prueba02'),
(70, 6, '2018-09-01 13:02:11', 'prueba03');

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
  `tipo_documento` varchar(4) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`documento`, `email_usuario`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `contrasena`, `telefono`, `estado_usuario`, `tipo_documento`, `id_rol`) VALUES
(1022423958, 'admin@admin', 'Camilo', 'Alejandro<!--', 'Moreno', 'Pineros', '$2y$10$5tao.GzsHFeuOrQ0NKFGIe7MTEBU8Tf/.MDb2mD0.7myKUn5GItDe', '01', 1, 'CC', 1);

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
  ADD KEY `id_categoria` (`id_categoria`);

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
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_clientes_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
