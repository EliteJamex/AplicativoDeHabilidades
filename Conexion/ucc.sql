-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2022 a las 21:07:42
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ucc`

	CREATE DATABASE desarrollo;
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_tipo` int(10) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_tipo` int(10) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `id_semestre` int(5) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `id_semestre` int(10) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_semestre` (`id_semestre`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id_semestre`);

ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_tipo`);


ALTER TABLE `registro` ADD CONSTRAINT fk_registrodocumento FOREIGN KEY(id_tipo) 
REFERENCES `documento`(id_tipo);

ALTER TABLE `registro` ADD CONSTRAINT fk_registrosemestre FOREIGN KEY(id_semestre) 
REFERENCES `semestre`(id_semestre);
  --
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_tipo`, `descripcion`) VALUES
(1, 'Cedula'),
(2, 'Pasaporte'),
(3, 'Tarjeta de Identidad');
--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_tipo`, `numero`, `usuario`, `apellido`, `id_semestre`, `telefono`, `correo`, `password`) VALUES
(1, '0', 'Administrador', 'UCC', 0, '5895968', 'administrador@ucc.com.co', 'administradorucc'),
(3, '1997896452', 'Mariana Alejandra', 'Pinzon Restrepo', 1, '3125986741', 'mariana.pinzon@ucc.com', '12345'),
(2, 'ZAB00524', 'Juan Carlos', 'Perez Cardozo', 10, '3115986778', 'carlos.p@ucc.com.co', '47474');

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`id_semestre`, `descripcion`) VALUES
(1, 'Primero'),
(2, 'Segundo'),
(3, 'Tercero'),
(4, 'Cuarto'),
(5, 'Quinto'),
(6, 'Sexto'),
(7, 'Septimo'),
(8, 'Octavo'),
(9, 'Noveno'),
(10, 'Decimo');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
