-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2016 a las 06:10:57
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vendimia`
--
CREATE DATABASE IF NOT EXISTS `vendimia` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `vendimia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_paterno` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_materno` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(8) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_usuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `correo`, `contrasena`) VALUES
(1, 'Antonio', 'Lopez', 'Castañeda', 'paul@gmail.com', '11111111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int(11) NOT NULL,
  `descripcion` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `existencia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `precio_contado` double NOT NULL,
  `total_pagar` double NOT NULL,
  `abono` double NOT NULL,
  `ahorro` double NOT NULL,
  `meses` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(19) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_paterno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_materno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `rfc` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `num_cliente` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id_configuracion` int(11) NOT NULL,
  `financiamiento` float NOT NULL,
  `enganche` float NOT NULL,
  `plazo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id_configuracion`, `financiamiento`, `enganche`, `plazo`) VALUES
(1, 2.8, 20, 12),
(3, 4.8, 20, 12),
(4, 8.8, 20, 12),
(5, 5.8, 20, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `nombre_cliente` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `paterno_cliente` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `materno_cliente` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_articulo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `modelo_articulo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad_articulo` int(11) NOT NULL,
  `precio_articulo` float NOT NULL,
  `importe_articulo` float NOT NULL,
  `enganche_ventas` float NOT NULL,
  `bonificacion_enganche` float NOT NULL,
  `total` float NOT NULL,
  `folio_venta` int(11) NOT NULL,
  `num_cliente` int(11) NOT NULL,
  `meses` int(3) NOT NULL,
  `precio_contado` int(10) NOT NULL,
  `total_pagar` int(10) NOT NULL,
  `abono` int(10) NOT NULL,
  `ahorro` int(10) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id_configuracion`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id_configuracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
