-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2022 a las 06:14:05
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ingenieria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `pregunta_1` varchar(500) DEFAULT NULL,
  `pregunta_2` varchar(500) DEFAULT NULL,
  `pregunta_3` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`codigo`, `nombre`, `edad`, `pregunta_1`, `pregunta_2`, `pregunta_3`) VALUES
(1, 'Jose martines', 20, 'Los vapores producidos por los químicos se pueden almacenar en los pulmones lo que genera un deterioro en los pulmones, provocando enfermedades crónicas', 'Producen oxigeno en temperatura ambiente ', ' Son aquellos químicos que comienzan arder al entrar en contacto con una llama '),
(2, 'Roger Gómez', 30, 'Los vapores producidos por los químicos se pueden almacenar en los pulmones lo que genera un deterioro en los pulmones, provocando enfermedades crónicas', 'Producen oxigeno en temperatura ambiente ', ' Son aquellos químicos que comienzan arder al entrar en contacto con una llama '),
(3, 'David Perez', 34, 'Los vapores producidos por los químicos se pueden almacenar en los pulmones lo que genera un deterioro en los pulmones, provocando enfermedades crónicas', 'Producen oxigeno en temperatura ambiente ', ' Son aquellos químicos que comienzan arder al entrar en contacto con una llama ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
