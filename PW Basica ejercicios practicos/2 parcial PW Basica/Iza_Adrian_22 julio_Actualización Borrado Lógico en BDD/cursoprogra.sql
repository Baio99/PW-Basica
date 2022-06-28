-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-07-2021 a las 00:53:26
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursoprogra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cp_alumnos`
--

CREATE TABLE `cp_alumnos` (
  `alu_codigo` int(10) NOT NULL,
  `alu_nombre` varchar(50) NOT NULL,
  `alu_apellido` varchar(50) NOT NULL,
  `alu_cedula` varchar(10) NOT NULL,
  `alu_direccion` varchar(100) NOT NULL,
  `alu_email` varchar(100) NOT NULL,
  `alu_telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cp_alumnos`
--

INSERT INTO `cp_alumnos` (`alu_codigo`, `alu_nombre`, `alu_apellido`, `alu_cedula`, `alu_direccion`, `alu_email`, `alu_telefono`) VALUES
(1, 'luis', 'perez', '1234567890', 'quito', 'lperez@yahoo.es', '022123456'),
(2, 'pepe', 'sanchez', '0312456789', 'latacunga', 'psanchez@gmail.com', '032156477'),
(12, 'kevin', 'oña', '1478953214', 'sangolqui', 'kevin@gmail.com', '0954123369');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cp_cursos`
--

CREATE TABLE `cp_cursos` (
  `cur_codigo` int(10) NOT NULL,
  `cur_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cp_cursos`
--

INSERT INTO `cp_cursos` (`cur_codigo`, `cur_nombre`) VALUES
(1, 'pepe'),
(4, 'c140');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cp_inscripcion`
--

CREATE TABLE `cp_inscripcion` (
  `ins_codigo` int(10) NOT NULL,
  `ins_fecha` date NOT NULL,
  `alu_codigo` varchar(10) NOT NULL,
  `cur_codigo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cp_inscripcion`
--

INSERT INTO `cp_inscripcion` (`ins_codigo`, `ins_fecha`, `alu_codigo`, `cur_codigo`) VALUES
(1, '0000-00-00', '526', '45645'),
(4, '0000-00-00', '12', 'c14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cp_usuarios`
--

CREATE TABLE `cp_usuarios` (
  `usu_codigo` int(10) NOT NULL,
  `usu_nombre` varchar(50) NOT NULL,
  `usu_apellido` varchar(50) NOT NULL,
  `usu_user` varchar(20) NOT NULL,
  `usu_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cp_usuarios`
--

INSERT INTO `cp_usuarios` (`usu_codigo`, `usu_nombre`, `usu_apellido`, `usu_user`, `usu_pass`) VALUES
(1, 'lau', 'iza', 'laubb', 'lau123'),
(5, 'adriana', 'oña', 'adrilu', '1245');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cp_alumnos`
--
ALTER TABLE `cp_alumnos`
  ADD PRIMARY KEY (`alu_codigo`,`alu_cedula`),
  ADD UNIQUE KEY `alu_apellido` (`alu_apellido`),
  ADD KEY `alu_apellido_2` (`alu_apellido`);

--
-- Indices de la tabla `cp_cursos`
--
ALTER TABLE `cp_cursos`
  ADD PRIMARY KEY (`cur_codigo`);

--
-- Indices de la tabla `cp_inscripcion`
--
ALTER TABLE `cp_inscripcion`
  ADD PRIMARY KEY (`ins_codigo`);

--
-- Indices de la tabla `cp_usuarios`
--
ALTER TABLE `cp_usuarios`
  ADD PRIMARY KEY (`usu_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cp_alumnos`
--
ALTER TABLE `cp_alumnos`
  MODIFY `alu_codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `cp_cursos`
--
ALTER TABLE `cp_cursos`
  MODIFY `cur_codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cp_inscripcion`
--
ALTER TABLE `cp_inscripcion`
  MODIFY `ins_codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cp_usuarios`
--
ALTER TABLE `cp_usuarios`
  MODIFY `usu_codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
