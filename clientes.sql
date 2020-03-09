-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-03-2020 a las 14:45:28
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petshop_dh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `dni` int(11) DEFAULT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `domicilio` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `dni`, `nombre`, `apellido`, `domicilio`, `email`, `password`, `telefono`) VALUES
(2, 1, 'Lucas', 'asd', 'asd', 'a@a.com', '12345', '12345'),
(3, NULL, NULL, NULL, NULL, 'Lupoh_rc@hotmail.com', '$2y$12$EFiGk2gLRR9JrYhAqLLmAe/gW.ZD1jB/eK0lkaoFLQsv0SVTLUhjm', NULL),
(4, NULL, NULL, NULL, NULL, 'kiushodn@hotmail.com.ar', '$2y$12$Oa9QJTwMfv4UgZRi/G2WPumB6gxo29zlwNxGwxLsZCC3ABsGl5hFq', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
