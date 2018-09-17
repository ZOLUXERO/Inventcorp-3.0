-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2018 a las 16:11:10
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
  `email` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL,
  `tiempo` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(21541044, 'santagoalvarezgaviria@gmail.com', 'luis', 'miguel', 'pedro', 'infante', '$2y$10$aU2LLGbiKwvN3W18HiWyJuMsErg1v1gPHb8ZTt38CTI/xbwKCF1py', '31332645', 1, 'CC', 3),
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
