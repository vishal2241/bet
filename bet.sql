-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2017 a las 22:43:22
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apifootball`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia`
--

CREATE TABLE `competencia` (
  `ID_COMPETENCIA` bigint(20) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `ID_PAIS` varchar(10) DEFAULT NULL,
  `MARKET_COUNT` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `competencia`
--

INSERT INTO `competencia` (`ID_COMPETENCIA`, `NOMBRE`, `ID_PAIS`, `MARKET_COUNT`) VALUES
(7485811, 'Copa FAI', 'IRL', 40),
(5388369, 'Bangladeshi Premier League', 'BGD', 48),
(11397029, 'FFA Cup 2017', 'AUS', 77),
(9, 'Erste Liga', 'AUT', 120),
(13, 'Campeonato Brasileiro', 'BRA', 52),
(5281887, 'Liga Kolmonen Finlandesa', 'FIN', 48),
(15, 'Premier búlgara', 'BGR', 58),
(17, 'Croatian Division 1', 'HRV', 54),
(11418298, 'A League 2017/18', 'AUS', 1),
(21, 'Synot Liga', 'CZE', 16),
(23, 'Superliga Danesa', 'DNK', 41),
(10135426, 'Cameroon Cup', 'CMR', 48),
(9404054, 'Dutch Eredivisie', 'NLD', 50),
(25, 'División 1 danesa', 'DNK', 12),
(872215, 'Ukrainian Persha Liga', 'UKR', 216),
(3037492, 'Beloften Pro League', 'BEL', 24),
(7946082, 'Ukrainian U21 League', 'UKR', 24),
(8616348, 'Amistoso', 'Internatio', 480),
(24865, 'EA Sports Cup', 'IRL', 1),
(35, 'League One', 'GBR', 32),
(321319, '2 División Brasileña', 'BRA', 113),
(37, 'League Two', 'GBR', 56),
(868392, 'Russian Youth League', 'RUS', 24),
(8083549, 'Israeli Super Cup', 'ISR', 24),
(8594603, 'Primera División peruana', 'PER', 24),
(4905, 'Liga 1 rumana', 'ROU', 180),
(41, 'National League North', 'GBR', 8),
(45, 'Veikkausliiga finlandesa', 'FIN', 144),
(11068551, 'Eliteserien', 'NOR', 41),
(4655, 'Copa Sudamericana', 'Internatio', 24),
(5618298, 'Bulgarian B PFG', 'BGR', 24),
(879931, 'Chinese Super League', 'CHN', 192),
(55, 'Ligue 1 Francesa', 'FRA', 189),
(57, 'French Ligue 2', 'FRA', 234),
(59, 'Bundesliga 1', 'DEU', 129),
(61, 'Bundesliga 2', 'DEU', 34),
(5982310, 'Copa Rio', 'BRA', 24),
(11420561, 'CONCACAF League', 'GBR', 96),
(961354, 'Chilean Cup', 'CHL', 24),
(1032778, 'Copa Catalunya', 'ESP', 48),
(880458, 'División 1 rusa', 'RUS', 240),
(584, 'Supercopa de España', 'ESP', 15),
(856134, 'Primera B Colombiana', 'COL', 24),
(77, 'Airtricity Premier Division', 'IRL', 5),
(7552802, 'Scottish Women\'s Premier Leagu', 'GBR', 96),
(81, 'Serie A', 'ITA', 134),
(1874, 'Coppa Italia', 'ITA', 71),
(83, 'Serie B', 'ITA', 1),
(943450, 'Icelandic Second Division', 'ISL', 24),
(2134, 'EFL Carabao Cup', 'GBR', 374),
(89, 'J League', 'JPN', 253),
(984404, 'Icelandic 1st Division (Fem)', 'ISL', 24),
(30558, 'English FA Cup', 'GBR', 2),
(62815, 'Copa Libertadores', 'Internatio', 265),
(95, 'Norwegian 1 Division', 'NOR', 14),
(97, 'Ekstraklasa', 'POL', 24),
(99, 'Primeira Liga', 'PRT', 155),
(101, 'Premier Division', 'RUS', 215),
(103, 'Serbian Super Liga', 'SRB', 192),
(105, 'Premiership Escocesa', 'GBR', 49),
(107, 'Championship Escocesa', 'GBR', 11),
(3242333, 'National Soccer League (W)', 'USA', 24),
(109, 'League One Escocesa', 'GBR', 11),
(3004992, 'USL Pro', 'USA', 48),
(1105022, 'Malaysia Cup', 'MYS', 175),
(111, 'League Two Escocesa', 'GBR', 1),
(10564816, 'T&T Pro League', 'TTO', 48),
(113, 'Slovakian Super Liga', 'SVK', 34),
(7893771, 'Copa Venezuela', 'VEN', 240),
(115, 'Slovenian Prva Liga', 'SVN', 54),
(5627174, 'Mexican Primera Division', 'MEX', 18),
(117, 'Primera División', 'ESP', 23),
(119, 'Segunda División ', 'ESP', 1),
(879221, 'Liga A lituana', 'LTU', 96),
(10854877, 'Copa polaca', 'POL', 225),
(89979, 'Jupiler League belga', 'BEL', 43),
(5754, 'Supercopa de Italia', 'ITA', 15),
(887158, 'Urvalsdeild', 'ISL', 72),
(1038449, 'Copa de la Liga Escocesa', 'GBR', 116),
(11413201, 'Mosta Domain Tournament', 'Internatio', 48),
(2608550, 'Apuestas Especiales', 'Internatio', 6),
(129, 'Allsvenskan', 'SWE', 81),
(11402030, 'Indonesia Liga II', 'IDN', 48),
(318343, 'Regionalliga Nordost', 'DEU', 48),
(131, 'Superettan suceca', 'SWE', 144),
(133, 'Swiss Super League', 'CHE', 121),
(887178, 'Virsliga letona', 'LVA', 24),
(135, 'Swiss Challenge League', 'CHE', 120),
(854148, 'Copa Colombia', 'COL', 24),
(1987477, 'Czech U19 League', 'CZE', 24),
(3127716, 'Paulista U20', 'BRA', 216),
(139, 'Vischya Liga', 'UKR', 34),
(141, 'MLS', 'USA', 54),
(6366702, 'Shillong Premier League', 'IND', 24),
(2079376, 'Costa Rican Primera Division', 'CRI', 24),
(1979279, 'Copa Mexico', 'MEX', 216),
(1062024, 'J2 League', 'JPN', 242),
(11086347, 'National League', 'GBR', 1),
(862638, 'Czech 2 Liga', 'CZE', 58),
(194215, 'Super League turca', 'TUR', 267),
(844197, 'Colombian Primera A', 'COL', 24),
(744098, 'Primera chilena', 'CHL', 16),
(7883210, 'Brazilian Taca FPF', 'BRA', 96),
(4040072, 'Primera División georgiana', 'GEO', 24),
(911286, 'Icelandic Premier League (Fem)', 'ISL', 72),
(10932509, 'Premier League Inglesa', 'GBR', 931),
(10187098, 'Czech Rep Cup', 'CZE', 150),
(3583988, 'Copa Paulista', 'BRA', 24),
(30921, 'Copa danesa', 'DNK', 304),
(853446, 'Saudí Premier', 'SAU', 48),
(10662505, 'DFB Pokal', 'DEU', 213),
(10479956, 'Bundesliga Austríaca', 'AUT', 10),
(5614746, 'FIFA Mundial 2018', 'Internatio', 10),
(309972, 'AFC Cup', 'Internatio', 24),
(7408034, 'Regional Cup Niedersachsen', 'DEU', 50),
(4051, 'Norwegian Cup', 'NOR', 147),
(2005, 'UEFA Europa League', 'Internatio', 32),
(10238283, 'Estonia Cup', 'EST', 50),
(802004, 'Copa de Egipto', 'EGY', 24),
(7197874, 'Uzbekistan 1 Division', 'UZB', 48),
(3765209, 'Vietnamese U21 Championship Qu', 'VNM', 144),
(228, 'UEFA Champions League', 'Internatio', 161),
(1161205, 'Israeli Premier League Cup', 'ISR', 50),
(905441, 'Icelandic First Division', 'ISL', 24),
(3332575, 'Thailand Premier League', 'THA', 24),
(7129730, 'The Championship', 'GBR', 177),
(944127, 'Copa singapurense', 'SGP', 24),
(5449376, 'Polish U19 Central Junior Leag', 'POL', 72),
(3729355, 'Bolivian Liga Nacional A', 'BOL', 24),
(873203, 'Esiliiga de Estonia', 'EST', 48);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `ID_PAIS` varchar(11) NOT NULL,
  `NOMBRE` int(11) DEFAULT NULL,
  `MARKET_COUNT` int(11) NOT NULL,
  `IMG` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Betfair';

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`ID_PAIS`, `NOMBRE`, `MARKET_COUNT`, `IMG`) VALUES
('AR', NULL, 99, NULL),
('AT', NULL, 132, NULL),
('AU', NULL, 78, NULL),
('BD', NULL, 48, NULL),
('BE', NULL, 69, NULL),
('BG', NULL, 92, NULL),
('BO', NULL, 24, NULL),
('BR', NULL, 714, NULL),
('CA', NULL, 2, NULL),
('CH', NULL, 219, NULL),
('CL', NULL, 40, NULL),
('CM', NULL, 48, NULL),
('CN', NULL, 192, NULL),
('CO', NULL, 72, NULL),
('CR', NULL, 24, NULL),
('CS', NULL, 192, NULL),
('CY', NULL, 2, NULL),
('CZ', NULL, 250, NULL),
('DE', NULL, 474, NULL),
('DK', NULL, 357, NULL),
('EE', NULL, 98, NULL),
('EG', NULL, 24, NULL),
('ES', NULL, 87, NULL),
('FI', NULL, 192, NULL),
('FR', NULL, 423, NULL),
('GB', NULL, 1888, NULL),
('GE', NULL, 24, NULL),
('GR', NULL, 4, NULL),
('HR', NULL, 58, NULL),
('ID', NULL, 48, NULL),
('IE', NULL, 46, NULL),
('IL', NULL, 74, NULL),
('IN', NULL, 24, NULL),
('IS', NULL, 240, NULL),
('IT', NULL, 223, NULL),
('JP', NULL, 495, NULL),
('KG', NULL, 24, NULL),
('LI', NULL, 24, NULL),
('LT', NULL, 96, NULL),
('LV', NULL, 24, NULL),
('MD', NULL, 33, NULL),
('MK', NULL, 2, NULL),
('MX', NULL, 234, NULL),
('MY', NULL, 175, NULL),
('NL', NULL, 54, NULL),
('NO', NULL, 202, NULL),
('PE', NULL, 24, NULL),
('PH', NULL, 24, NULL),
('PL', NULL, 323, NULL),
('PT', NULL, 155, NULL),
('RO', NULL, 180, NULL),
('RU', NULL, 479, NULL),
('SA', NULL, 48, NULL),
('SE', NULL, 225, NULL),
('SG', NULL, 24, NULL),
('SI', NULL, 54, NULL),
('SK', NULL, 109, NULL),
('TH', NULL, 24, NULL),
('TR', NULL, 267, NULL),
('TT', NULL, 48, NULL),
('UA', NULL, 274, NULL),
('US', NULL, 124, NULL),
('UZ', NULL, 48, NULL),
('VE', NULL, 258, NULL),
('VN', NULL, 144, NULL);

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
  ADD PRIMARY KEY (`ID_COMPETENCIA`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`ID_PAIS`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CEDULA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
