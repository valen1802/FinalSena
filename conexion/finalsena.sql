-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2022 a las 03:24:37
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `finalsena`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNovedad` (IN `asunto` VARCHAR(150), `descripcion` VARCHAR(500), `cedula_bodeguero` INT(15), `cod_herramienta` VARCHAR(45), `cantidad` INT(15))  BEGIN
			INSERT INTO novedades(asunto, descripcion, cedula_bodeguero, cod_herramienta, cantidad) VALUES (asunto, descripcion, cedula_bodeguero, cod_herramienta, cantidad);
			END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectNovedad` ()  BEGIN
				SELECT * FROM novedades ORDER BY id_novedad DESC;
			END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramienta`
--

CREATE TABLE `herramienta` (
  `id_herramienta` int(15) NOT NULL,
  `cod_herramienta` varchar(45) NOT NULL,
  `nombre_herramienta` varchar(150) NOT NULL,
  `cantidad_disponible` int(15) NOT NULL,
  `precio_herramienta` int(15) NOT NULL,
  `nivel` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id_novedad` int(15) NOT NULL,
  `asunto` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `cedula_bodeguero` int(15) NOT NULL,
  `cod_herramienta` varchar(45) NOT NULL,
  `cantidad` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id_novedad`, `asunto`, `descripcion`, `cedula_bodeguero`, `cod_herramienta`, `cantidad`) VALUES
(0, 'Martillo ', 'Martillo entregado en malas condiciones', 1092454409, '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(15) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `cedula` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `cedula`, `correo`, `celular`, `password`, `estado`, `rol`) VALUES
(1, 'Valentina', '1094973067', 'valentinaburgos0218@gmail.com', '3154171246', '0218', 'activo', 'Administrador'),
(2, 'Kevin', '1092454412', 'kevin@gmail.com', '3146609081', '2345', 'activo', '2'),
(3, 'Maria', '991210073', 'maria@gmail.com', '235235', '2215', 'activo', '2'),
(4, 'Nancy m', '346346', 'nancy@gmail.com', '32634', '1234', 'activo', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `herramienta`
--
ALTER TABLE `herramienta`
  ADD PRIMARY KEY (`id_herramienta`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id_novedad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
