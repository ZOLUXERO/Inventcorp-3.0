-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2018 a las 23:47:41
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
(4, 'carnezzzzz', 'carne de cerdo gordozzz', 1),
(5, 'una', 'dos', 1),
(6, 'una', 'dos', 1);

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
('001', 'zzzzzzzzzz', 'zzzzz<!--', 'zzzzz', 'zzzz', 'asdad@adsadas.ocm', 'telclie', 1, 2),
('0014', 'asd', 'asdd', 'adsadas', 'asdad', 'asdad@adsadas.edu.co', '311', 1, 1),
('0034', 'qqq', 'qqqqqqq', 'qq', 'q', 'uyiyui@657.com', 'qq323', 1, 2),
('009', 'fdgdf', 'dfgdfg', 'dfgdfg', 'fdgdfg', 'dfgd@dsf.com', 'telclie', 1, 1),
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

--
-- Volcado de datos para la tabla `observaciones`
--

INSERT INTO `observaciones` (`id_observacion`, `usuario_observacion`, `desc_obeservacion`, `fecha_observacion`) VALUES
(1, '1022423958', '        \n      asd asdas dasdas dsad asdas dassad asdasdasda ', '2018-09-12'),
(2, '1022423958', '        \r\n      as dadasd asd asdasd as', '2018-09-12'),
(3, '10224239', '        \r\n      dasda sadsad @ sadsad asdasd ', '2018-09-12'),
(4, '1022423958', '        \r\n      zdsadasda ada sdzX hahahaha prueba 34', '2018-09-12'),
(5, '1022423958', '        \r\n       asdasd asdas dsadasdasdasd asd asd adas asd \r\nasdasd asda dasdas das asdas sa dsadsa ddasd ad ad \r\nasdas dasd asd', '2018-09-12'),
(6, '1022423958', '        \n      as dasdsa asd asdasd asdas dasd asdsaa das sadas \ndasd asdas dad adasd sada d', '2018-09-12'),
(7, '102242395', '        \r\n      XCASDSAD AA SASD ', '2018-09-12');

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
('prueba01', 'res', 'carne de cerdo gordoz', '3200', '3200', '2018-09-04', 1, 1),
('prueba02', 'poipoi', 'carne de cerdo gordoz', '3200', '3200', '2018-09-04', 1, 1),
('prueba03', 'CARNE', 'carne de cerdo gordo', '2800', '3200', '2018-09-12', 1, 6),
('prueba04', 'Pollo', 'Carnes blancas de pollo fresco', '4200', '5600', '2018-09-10', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperar`
--

CREATE TABLE `recuperar` (
  `email` varchar(50) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `tiempo` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recuperar`
--

INSERT INTO `recuperar` (`email`, `token`, `tiempo`) VALUES
('admin@admin', 'XSQoT92BXx', '2018-09-15 13:36:40'),
('admin@admin', '$1$zK..AG3.$h2eWTRGBGMyhiSf7CGS1u0', '2018-09-16 10:05:06'),
('admin@admin', 'a442f845559cad390f24391430d6e989c2b6d301e1d6056c627b7df4f7ae6134a7aebc440386ab958dee477ca7867e408d156f9db650637f4e179cc8369c77a9', '2018-09-16 10:42:09'),
('admin@admin', 'gNoe7M5AOG', '2018-09-16 10:42:53'),
('admin@admin', 'bsMRzztJOZ', '2018-09-16 10:45:15'),
('camoreno859@misena.edu.co', 'jpSDTAmyvE', '2018-09-16 16:33:15'),
('camoreno859@misena.edu.co', 'yBosrngmtY', '2018-09-16 16:36:14'),
('camoreno859@misena.edu.co', 'laDYkgoust', '2018-09-16 16:40:40'),
('camoreno859@misena.edu.co', 'H6r82Uv6nv', '2018-09-16 16:47:38'),
('camoreno859@misena.edu.co', 'nIbYfPqVQL', '2018-09-16 16:58:53'),
('camoreno859@misena.edu.co', 'zrpnA7D1X3', '2018-09-16 17:00:13'),
('camoreno859@misena.edu.co', 'KwCPse4y00', '2018-09-16 17:02:53'),
('camoreno859@misena.edu.co', 'hP6aHIXyiQ', '2018-09-16 17:03:21'),
('camoreno859@misena.edu.co', 'iyyhlXqCN9', '2018-09-16 17:03:58'),
('admin@admin', 'oZTWqWmHZA', '2018-09-16 17:04:42'),
('admin@admin', 'ng3wIY4QyF', '2018-09-16 17:05:43'),
('admin@admin', '28CHou9U8v', '2018-09-16 17:05:50'),
('admin@admin', 'QEIiVK6q7y', '2018-09-16 17:07:37'),
('admin@admin', 'MZDUHBcakk', '2018-09-16 17:08:21'),
('admin@admin', '1aENPf75Qf', '2018-09-16 17:08:38'),
('admin@admin', 'IMLwUYPVFg', '2018-09-16 17:09:29'),
('admin@admin', 'LMrLLVd2yJ', '2018-09-16 17:09:37'),
('admin@admin', 'scm18QU9J2', '2018-09-16 17:10:33'),
('admin@admin', 'oXbpyMY2Ct', '2018-09-16 17:10:44'),
('admin@admin', '5vgnYULkCR', '2018-09-16 17:11:55'),
('admin@admin', 'MFtsAgvgRr', '2018-09-16 17:12:41'),
('admin@admin', 'cnP2wqepVs', '2018-09-16 17:13:57'),
('admin@admin', 'goo6FlorD5', '2018-09-16 17:14:19'),
('admin@admin', 'T4TZl4FSK3', '2018-09-16 17:14:45'),
('camoreno859@misena.edu.co', 'G5y69uJOMp', '2018-09-16 17:17:18'),
('admin@admin', 'ne2DSG64DR', '2018-09-16 17:29:00'),
('admin@admin', 'cMrscnDr4p', '2018-09-16 17:29:31'),
('admin@admin', 'udRLXxSEow', '2018-09-16 17:30:08'),
('admin@admin', '5vSgvEXUtb', '2018-09-16 17:31:09'),
('admin@admin', 'k6BdFFsWDQ', '2018-09-16 17:32:00'),
('admin@admin', '50DiN4sYKt', '2018-09-16 17:32:14'),
('admin@admin', 'FE2KJPAH7y', '2018-09-16 18:11:19'),
('admin@admin', 'MzqcM86ee2', '2018-09-16 18:15:36'),
('admin@admin', 'Fli5PJb3o2', '2018-09-16 18:16:19'),
('admin@admin', '09m3ak2Fcv', '2018-09-16 18:16:58'),
('admin@admin', '1PAHwg9bRi', '2018-09-16 18:19:57'),
('admin@admin', 'rJr57nua7J', '2018-09-16 18:23:46'),
('admin@admin', 'XR2vdDXU4t', '2018-09-16 18:27:12'),
('camoreno859@misena.edu.co', 'tGTRG1wJbF', '2018-09-16 18:28:52');

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
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( hola ) por ( holaz ) ', '2018-09-01'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( holaz ) por ( hola ) ', '2018-09-01'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( prueba03 ) ', '2018-09-03'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  (  ) por ( sasad ) , (  ) por ( carne de cerdo gordo ) , (  ) por ( 3200 ) , (  ) por ( 3200 ) , (  ) por ( 2018-09-04 ) , (  ) por ( 1 ) ', '2018-09-03'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-03'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo (  ) ', '2018-09-03'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  (  ) por ( sasad ) , (  ) por ( carne de cerdo gordo ) , (  ) por ( 3200 ) , (  ) por ( 3200 ) , (  ) por ( 2018-09-11 ) , (  ) por ( 1 ) ', '2018-09-05'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( hola ) por ( sasad ) , ( 2800 ) por ( 3200 ) , ( 3700 ) por ( 3200 ) , ( 2018-09-12 ) por ( 2018-09-04 ) , ( 2 ) por ( 1 ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasad ) por ( &#39;); DROP TABLE usuarios;-- ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasad ) por ( &#39;); DROP TABLE usuarios;-- ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasad ) por ( &#39;); DROP TABLE usuarios;-- ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasad ) por ( &#39;); DROP TABLE usuarios;-- ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasad ) por ( &#39;); DROP TABLE usuarios;-- ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasad ) por ( &#39;); DROP TABLE usuarios;-- ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasad ) por ( &#39;); DROP TABLE usuarios;-- ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasad ) por ( poipoi ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  (  ) por ( asdasd ) , (  ) por ( asdasd ) , (  ) por ( 3213 ) , (  ) por ( 2311 ) , (  ) por ( 2018-09-11 ) , (  ) por ( 2 ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasad ) por ( poipoi ) , ( carne de cerdo gordo ) por ( carne de cerdo gordoz ) , ( 2 ) por ( 1 ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  (  ) por ( poipoi ) , (  ) por ( carne de cerdo gordoz ) , (  ) por ( 3200 ) , (  ) por ( 3200 ) , (  ) por ( 2018-09-04 ) , (  ) por ( 1 ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( poipoi ) por ( &#39; ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  (  ) por ( poipoi ) , (  ) por ( carne de cerdo gordoz ) , (  ) por ( 3200 ) , (  ) por ( 3200 ) , (  ) por ( 2018-09-04 ) , (  ) por ( 1 ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( prueba34 ) ', '2018-09-06'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-07'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-07'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-07'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( drop ) ', '2018-09-07'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-07'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-07'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-07'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-07'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-07'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-07'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( _&#34;DROP TABLE usuarios; ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( &#34;DROP TABLE usuarios; ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( &#34;DROP TABLE usuarios; ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( )DROP TABLE usuarios; ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( *DROP TABLE usuarios; ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( (DROP TABLE usuarios; ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ) DROP TABLE usuarios; ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( DROP TABLE usuarios; ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( &#34;DROP TABLE usuarios ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( &#34;DROP TABLE usuarios ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo ( DROP TABLE usuarios ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo (  usuarios ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasad ) por ( sasad  ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo  ( sasad  ) por ( sasad32 ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo , ( 2018-09-04 ) por ( 2018-09-18 ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo , ( 2018-09-18 ) por ( 2018-09-12 ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo , ( 1 ) por ( 3 ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo , ( 3 ) por ( 6 ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo en el producto [ prueba03 ]  ( sasad32 ) por ( sasad3 ) , ( carne de cerdo gordo ) por ( carne de cerdo gordoZ ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo en el producto [ prueba03 ] ,  ( sasad3 ) por ( CARNE ) , ( carne de cerdo gordoZ ) por ( carne de cerdo gordo ) , ( 3200 ) por ( 2800 ) ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 INHABILITO el producto [  ] ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 INHABILITO el producto [ prueba02 ] ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 INHABILITO el producto [ prueba01 ] ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 inserto un producto nuevo [ prueba04 ] ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 INHABILITO el producto [ prueba03 ] ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 INHABILITO el producto [ prueba04 ] ', '2018-09-11'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo en el producto [ prueba01 ] ,  ( sasad ) por ( res ) ', '2018-09-12'),
('1022423958', ' El usuario Camilo con documento 1022423958 remplazo en el producto [ prueba04 ] ,  ( sasad ) por ( Pollo ) , ( carne de cerdo gordo ) por ( Carnes blancas de pollo fresco ) , ( 3200 ) por ( 4200 ) , ( 3200 ) por ( 5600 ) , ( 2018-09-04 ) por ( 2018-09-10 ) , ( 2 ) por ( 1 ) ', '2018-09-12');

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
(70, 6, '2018-09-01 13:02:11', 'prueba03'),
(70, 6, '2018-09-01 22:36:50', 'prueba01'),
(70, 6, '2018-09-01 22:37:26', 'prueba01'),
(34, 6, '2018-09-01 22:38:01', 'prueba01'),
(7, 12, '2018-09-01 22:38:44', 'prueba01'),
(34, 45, '2018-09-01 22:38:52', 'prueba01'),
(7, 45, '2018-09-01 22:38:56', 'prueba01'),
(70, 6, '2018-09-01 22:40:21', 'prueba02'),
(7, 6, '2018-09-01 22:41:08', 'prueba02'),
(34, 45, '2018-09-01 22:41:13', 'prueba02'),
(70, 6, '2018-09-01 22:44:24', 'prueba01'),
(70, 6, '2018-09-12 13:55:43', 'prueba01');

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
(10224239, 'admin@admin.com.co', 'Camilo', 'Alejandro', 'Moreno', 'Pineros', '$2y$10$VqKyAVNPBXs6A2SQOm7PAO2PJTsHL3yABzmIR1o5WBn3tFASGXARG', '3133265449', 1, 'NIT', 3),
(102242395, 'admin@admin.com', 'Camilo', 'Alejandro', 'Moreno', 'Pineros', '$2y$10$MU3WV9bJHPcyUiXxmJnNLOZZKUw0Vv630XdGd0QHGT4m0PI/ZBgye', '3133265449', 1, 'NIT', 2),
(313365934, 'camoreno859@misena.edu.co', 'Camilo', 'Alejandro', 'Moreno', 'Pineros', '$2y$10$.o3tH8MIbrdpMO/5oyJIje90o1.WAeD47Dk5y9zzc30EFuCz/l5fS', '3133265449', 1, 'CEL', 1),
(1022423958, 'admin@admin', 'Camilo', 'Alejandro', 'Moreno', 'Pineros', '$2y$10$/.s2YUp0zxR6pB7oxCt3WOfvKdflo6NoUBKgXZLVMs3WwTKopr3.y', '311', 1, 'CC', 1);

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
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id_observacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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

DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `prueba_one` ON SCHEDULE EVERY 1 MINUTE STARTS '2018-09-15 12:33:51' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'delete old values.' DO DELETE FROM recuperar 
    WHERE tiempo < (NOW() - INTERVAL 1 MINUTE)$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
