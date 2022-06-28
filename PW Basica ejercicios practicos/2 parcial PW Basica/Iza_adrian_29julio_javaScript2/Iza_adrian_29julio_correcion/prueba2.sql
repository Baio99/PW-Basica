-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-07-2021 a las 00:36:13
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
-- Base de datos: `prueba2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asistencia`
--

CREATE TABLE `tb_asistencia` (
  `asis_codigo` int(2) NOT NULL,
  `usu_codigo` int(2) NOT NULL,
  `asis_fechaentrada` date NOT NULL,
  `asis_horaentrada` time NOT NULL,
  `asis_fechasalida` date NOT NULL,
  `asis_horasalida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_asistencia`
--

INSERT INTO `tb_asistencia` (`asis_codigo`, `usu_codigo`, `asis_fechaentrada`, `asis_horaentrada`, `asis_fechasalida`, `asis_horasalida`) VALUES
(1, 1, '2021-07-28', '06:00:00', '2021-07-28', '16:00:00'),
(2, 2, '2021-07-29', '08:00:00', '2021-07-29', '15:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `usu_codigo` int(10) NOT NULL,
  `usu_nombre` varchar(50) NOT NULL,
  `usu_user` varchar(20) NOT NULL,
  `usu_password` varchar(20) NOT NULL,
  `usu_estado` int(2) DEFAULT '1' COMMENT 'usuario activo 1, usuario inactivo 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`usu_codigo`, `usu_nombre`, `usu_user`, `usu_password`, `usu_estado`) VALUES
(1, 'Kleber', 'kaguilar123', '123', 1),
(2, 'Andrea Paez', 'apaez', '456789', 1),
(5, 'Samanta ggg', 'sggg', '123', 1),
(8, 'Jaime', 'fgfgfgfgfgf', '789', 1),
(9, 'Sandra', 'sandrausuario', '456', 1),
(30, 'Pepito Alvarez', 'palvarez', '123456415465', 1),
(31, 'Pepito Juarez', 'sadfsadas', '', 1),
(32, 'Pepito estebez', 'pesteb', '2345324', 1),
(33, 'Pepito estebez', 'sadfsadas', '', 1),
(34, 'pedro fernandez', 'pedro', '456456', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_asistencia`
--
ALTER TABLE `tb_asistencia`
  ADD PRIMARY KEY (`asis_codigo`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`usu_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_asistencia`
--
ALTER TABLE `tb_asistencia`
  MODIFY `asis_codigo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `usu_codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
