-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2018 a las 12:18:27
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.19

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
  `desc_categoria` text,
  `estado_categoria` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `desc_categoria`, `estado_categoria`) VALUES
(1, 'comida', 'descripci+on comid', 1),
(2, 'medicamento', '', 0),
(3, 'metales', '', 0),
(4, 'plasticos', '', 0),
(5, 'categoriaprueba', '', 0),
(6, 'categoriaprueba2', 'dszfgsdfgd', 0),
(7, 'sdfgzsd', 'que bonito soy que bonito soy como me quiero', 0);

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
('001', 'Ericksito', 'Alejandro', 'Perez', 'Chia', 'ericksan@misena.edu.co', 'telclie', 1, 2),
('002', 'l', 'lkljkl', 'lkjlj', 'lkjlj', 'sas@jljk', '323', 1, 1),
('003', 'kljhlkj', 'lkjl', 'lkjlkj', 'lkjlkj', 'lkjlkj@ljlkj', '321321', 1, 1);

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
('123', '4585', 'sdfgsadg', '2300', '2344', '2018-07-05', 1, 6),
('as', 'sa', 's <!--', 'sa', 'sa', '2018-07-03', 0, 2),
('assdsasd', 'asdasdasd  <!--', 'asdasdasda <!--', 'asdasd', 'dasdadas', '2018-07-01', 0, 1),
('EMP01', 'empanadas', 'empanditas de maiz', '3200', '4200', '2018-07-30', 1, 5),
('EMP015', 'empanadas <!--', 'empandas de cerdo ', '2800', '3400', '2018-07-03', 0, 1),
('EMP04', 'empanadas', 'empandas de pollo', '1100', '4000', '2018-07-03', 0, 1),
('prueba01', 'prueba ver actualizacion html', 'prueba actu html', '01', '32000', '2018-07-05', 1, 3),
('prueba02', 'actualizacion realizada', 'actualizacion realizada', '100', '500', '2018-07-10', 0, 2),
('prueba03', 'prueba ver danos', 'prueba ver actualizacion', '01010101', '01010101', '2018-07-06', 0, 1),
('prueba07', 'sasad', 'prueba', '3200', '32000', '2018-07-30', 1, 7),
('prueba08', 's', 's', 's', 's', '2018-07-03', 0, 1),
('qerqweqwe', 'wqeqweqwe', 'qweqweqwe', 'qweqweqw', 'qweqweqw', '2018-07-04', 0, 3);

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
(1, 'proveedor'),
(2, 'cliente');

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
(3, 1, '2018-07-21 21:59:39', 'EMP012222'),
(200, 100, '2018-07-26 10:24:15', 'EMP01'),
(12, 120, '2018-07-26 10:34:10', '123'),
(10, 0, '2018-07-26 10:34:41', '123'),
(200, 100, '2018-07-26 10:35:29', '123'),
(0, 100, '2018-07-26 10:36:40', '123'),
(10, 0, '2018-07-26 10:39:44', '123'),
(10, 0, '2018-07-26 10:39:50', '123');

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
(1010, 'sanelite34@gmail', 'jjdgfd', 'gcdxgfd', '', 'asdasdsad', '$2y$10$qd0E2SjtyrzA70A5E1eMXumDKYUSvNHJH5vJc3uPkiqmI3gxGoOre', '01', 1, 'CE', 1),
(9999, 'xzzxv@zxczc', '<!--', '<!--', '<!--', '<!--', '$2y$10$R1UGMqSfxAO1IEgTl8uS0e5ckoPUVZY.12owkb7MQLyUOA/TxJokW', '321321', 1, 'NIT', 3),
(12345, 'prueba@gmail', 'prueba1', 'prueba2', 'prueba3', 'prueba4', '$2y$10$6.6qX/pnarSImVWIrO0LzuQAZq57R3IAodcqA9vgTlXfOcB7O3hhC', '321', 1, 'CC', 1),
(321111, 'b@b', 'hgfh', 'hgfhg', '<!--', 'jlkjlkj', '$2y$10$hG68ZL0U/ms8VyWG6J9aLeR2tmTPjrxq5vNbAouyjNrCpMZBB009O', '321', 1, 'NIT', 3),
(32132132, 'a@a', 'nombre1', 'nombre2', '<!--', 'kljlkjk', '$2y$10$54wl0DeTyiF8fCWyRNE15.bkd6r9AMFjiN379yGQ8bNV2lwHkXmvK', '302', 1, 'PP', 3),
(101010101, 'asd@asd', 'lkÃ±lk', 'lkjl', 'lkj', '<!--', '$2y$10$8izGGU/I6NxZBV7aL/8HxOknE65Oh5k1XJGVTcx/lx9SEVSPdbjsC', '321321', 1, 'CC', 3),
(1022423958, 'admin@admin', 'Camilo', 'Alejandro', 'Moreno', 'Pineros', '$2y$10$5tao.GzsHFeuOrQ0NKFGIe7MTEBU8Tf/.MDb2mD0.7myKUn5GItDe', '01', 0, 'CC', 1);

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
