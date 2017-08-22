-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2017 a las 05:45:15
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia`
--

CREATE TABLE `competencia` (
  `ID_COMPETENCIA` int(11) NOT NULL,
  `ID_PAIS` int(11) NOT NULL,
  `NOMBRE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `competencia`
--

INSERT INTO `competencia` (`ID_COMPETENCIA`, `ID_PAIS`, `NOMBRE`) VALUES
(2402309, 123, 'OBOS-Ligaen'),
(2439299, 183, 'Copa do Brasil'),
(2512958, 183, 'Série B'),
(2524535, 238, 'Persian Gulf League'),
(2524804, 22, '1.division'),
(2538650, 243, 'EFL Cup'),
(2546009, 218, 'Liga MX - Apertura'),
(2568383, 161, 'Regional Liga Bayern'),
(2568385, 161, 'Regional Liga Südwest'),
(2615602, 248, 'UEFA Champions League - Playof'),
(2618359, 248, 'AFC Champion League - Quarter '),
(2620858, 248, 'UEFA Europa League - Playoffs'),
(2627536, 248, 'Copa Sudamericana - 1/8 Finals'),
(2630071, 14, 'Premier League'),
(50007869, 172, 'FFA Cup'),
(50008498, 55, 'Croatian Cup'),
(50008530, 147, 'France Coupe de la Ligue'),
(50008555, 78, 'Romanian Cup'),
(50011842, 195, 'Copa Chile'),
(50012357, 248, 'AFC Cup Play-offs Round');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `ID_EQUIPO` int(11) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `IMG` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `odd`
--

CREATE TABLE `odd` (
  `ID_ODD` int(11) NOT NULL,
  `ID_TIPO` int(11) NOT NULL,
  `ID_PARTIDO` int(11) NOT NULL,
  `VALOR` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `ID_PAIS` bigint(20) NOT NULL,
  `NOMBRE` varchar(30) DEFAULT NULL,
  `IMG` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`ID_PAIS`, `NOMBRE`, `IMG`) VALUES
(14, 'Sudáfrica', NULL),
(22, 'Polonia', NULL),
(55, 'Croacia', NULL),
(78, 'Romania', NULL),
(123, 'Norway', NULL),
(147, 'Francia', NULL),
(161, 'Alemania', NULL),
(172, 'Australia', NULL),
(183, 'Brazil', NULL),
(195, 'Chile', NULL),
(218, 'Mexico', NULL),
(238, 'Iran', NULL),
(243, 'Inglaterra', NULL),
(248, 'International', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE `partido` (
  `ID_PARTIDO` int(11) NOT NULL,
  `ID_COMPETENCIA` int(11) NOT NULL,
  `FECHA` date DEFAULT NULL,
  `HORARIO` time DEFAULT NULL,
  `ESTADO` varchar(10) DEFAULT NULL,
  `LOCAL` varchar(40) NOT NULL,
  `VISITANTE` varchar(40) NOT NULL,
  `SCORE_1` int(3) NOT NULL,
  `SCORE_2` int(3) NOT NULL,
  `SCORE_1_HT` int(3) DEFAULT '0',
  `SCORE_2_HT` int(3) DEFAULT '0',
  `AUTORIZADO` varchar(2) DEFAULT 'NO',
  `VERIFICADO` varchar(2) DEFAULT 'NO',
  `FECHALOG` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_odd`
--

CREATE TABLE `tipo_odd` (
  `ID_TIPO` int(11) NOT NULL,
  `NOMBRE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `CEDULA` varchar(20) NOT NULL,
  `P_NOMBRE` varchar(20) DEFAULT NULL,
  `S_NOMBRE` varchar(20) DEFAULT NULL,
  `P_APELIIDO` varchar(20) DEFAULT NULL,
  `S_APELLIDO` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `CLAVE` varchar(50) DEFAULT NULL,
  `USUARIO` varchar(10) DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  `DIRECCION` varchar(30) DEFAULT NULL,
  `TELEFONO` varchar(20) DEFAULT NULL,
  `SALDO` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`CEDULA`, `P_NOMBRE`, `S_NOMBRE`, `P_APELIIDO`, `S_APELLIDO`, `EMAIL`, `CLAVE`, `USUARIO`, `FECHA_NAC`, `DIRECCION`, `TELEFONO`, `SALDO`) VALUES
('1110540682', 'Milton', NULL, 'Otavo', NULL, 'milton.otavo@gmail.com', 'admin', 'admin', NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD PRIMARY KEY (`ID_COMPETENCIA`),
  ADD KEY `ID_PAIS` (`ID_PAIS`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`ID_EQUIPO`);

--
-- Indices de la tabla `odd`
--
ALTER TABLE `odd`
  ADD PRIMARY KEY (`ID_ODD`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`ID_PAIS`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`ID_PARTIDO`),
  ADD KEY `FK_TIENE` (`ID_COMPETENCIA`);

--
-- Indices de la tabla `tipo_odd`
--
ALTER TABLE `tipo_odd`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CEDULA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `ID_EQUIPO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `odd`
--
ALTER TABLE `odd`
  MODIFY `ID_ODD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_odd`
--
ALTER TABLE `tipo_odd`
  MODIFY `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
