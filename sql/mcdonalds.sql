-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2020 a las 17:25:28
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mcdonalds`
--
CREATE DATABASE IF NOT EXISTS `mcdonalds` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mcdonalds`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cli` varchar(10) NOT NULL,
  `nom_cli` varchar(35) NOT NULL,
  `ema_cli` varchar(50) NOT NULL,
  `tel_cli` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cli`, `nom_cli`, `ema_cli`, `tel_cli`) VALUES
('01540588', 'Lopez Sanchez', 'lopezsanchez@gmail.com', '05405441'),
('05785052', 'Juliana Rios', 'julianita797@gmail.com', '050454540'),
('1004959996', 'Andres Betancourt', 'respaldo.betancourth@gmail.com', '3003456592'),
('78005101', 'Kevin Ulloa', 'kevinsapita@gmail.com', '0540231');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_pro` varchar(10) NOT NULL,
  `nom_pro` varchar(50) NOT NULL,
  `img_pro` varchar(50) NOT NULL,
  `pre_pro` float NOT NULL,
  `exi_pro` int(11) NOT NULL,
  `desc_pro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_pro`, `nom_pro`, `img_pro`, `pre_pro`, `exi_pro`, `desc_pro`) VALUES
('754126', 'Club House', 'clubhouse', 30000, 100, 'Hamburguesa de doble carne 100% Angus, con lechuga romana, tomate, cebolla grillada salsa especial y bacon rústico servida, mozarella en un pan tipo brioche'),
('754127', 'Club House Pollo', 'clubhousepollo', 30000, 100, 'Hamburguesa de pechuga de pollo Crispy, con lechuga romana, tomate, cebolla grillada salsa especial y bacon rústico servida, mozarella en un pan tipo brioche.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ema_usr` varchar(50) NOT NULL,
  `nom_usr` varchar(35) NOT NULL,
  `pass_usr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ema_usr`, `nom_usr`, `pass_usr`) VALUES
('andresbetancourt@gmail.com', 'Andres Betancourt', '123456'),
('kevinjotito@gmail.com', 'Kevin Ulloa', '123456'),
('pepito@gmail.com', 'Pepito', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cli`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_pro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ema_usr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
