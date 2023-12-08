-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2023 a las 02:59:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `Id_libro` int(3) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(40) NOT NULL,
  `numero_paginas` int(5) NOT NULL,
  `año_publicacion` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`Id_libro`, `titulo`, `autor`, `numero_paginas`, `año_publicacion`) VALUES
(3, 'Cien años de Soledad', 'Gabriel García Márquez', 534, 1900),
(6, 'Little women', 'Louisa May Alcott', 222, 1868),
(8, 'Correr o morir', 'James Dashner', 398, 2009),
(11, 'Prueba de fuego', 'James Dashner', 421, 2010),
(14, 'Crépusculo ', ' Stephenie Meye', 111, 2000),
(15, 'Tan poca vida', 'Hanya Yanagihar', 1008, 2016),
(18, 'Los miserables', 'Victor Hugo', 500, 2003),
(20, 'Atados a una estrella', 'Claudia Celis', 528, 1900),
(24, 'Una corte de rosas y espinas', 'Sarah J. Maas', 721, 2012),
(27, 'Teoria de La Relatividad', 'Albert Einstein', 139, 1905);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`Id_libro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `Id_libro` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
