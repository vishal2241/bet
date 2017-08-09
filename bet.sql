-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2017 a las 16:25:51
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
  `ID_PAIS` varchar(30) DEFAULT NULL,
  `MARKET_COUNT` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `competencia`
--

INSERT INTO `competencia` (`ID_COMPETENCIA`, `NOMBRE`, `ID_PAIS`, `MARKET_COUNT`) VALUES
(7485811, 'Copa FAI', 'IRL', 40),
(5388369, 'Bangladeshi Premier League', 'BGD', 19),
(11397029, 'FFA Cup 2017', 'AUS', 77),
(9, 'Erste Liga', 'AUT', 120),
(13, 'Campeonato Brasileiro', 'BRA', 114),
(5281887, 'Liga Kolmonen Finlandesa', 'FIN', 48),
(15, 'Premier búlgara', 'BGR', 102),
(17, 'Croatian Division 1', 'HRV', 98),
(11418298, 'A League 2017/18', 'AUS', 1),
(21, 'Synot Liga', 'CZE', 104),
(23, 'Superliga Danesa', 'DNK', 93),
(10135426, 'Cameroon Cup', 'CMR', 37),
(9404054, 'Dutch Eredivisie', 'NLD', 177),
(25, 'División 1 danesa', 'DNK', 12),
(872215, 'Ukrainian Persha Liga', 'UKR', 216),
(3037492, 'Beloften Pro League', 'BEL', 24),
(7946082, 'Ukrainian U21 League', 'UKR', 24),
(8616348, 'Amistoso', 'International', 528),
(24865, 'EA Sports Cup', 'IRL', 1),
(35, 'League One', 'GBR', 373),
(321319, '2 División Brasileña', 'BRA', 264),
(37, 'League Two', 'GBR', 343),
(868392, 'Russian Youth League', 'RUS', 24),
(8083549, 'Israeli Super Cup', 'ISR', 24),
(8594603, 'Primera División peruana', 'PER', 24),
(4905, 'Liga 1 rumana', 'ROU', 232),
(41, 'National League North', 'GBR', 8),
(45, 'Veikkausliiga finlandesa', 'FIN', 144),
(11068551, 'Eliteserien', 'NOR', 67),
(4655, 'Copa Sudamericana', 'International', 24),
(5618298, 'Bulgarian B PFG', 'BGR', 24),
(879931, 'Chinese Super League', 'CHN', 72),
(55, 'Ligue 1 Francesa', 'FRA', 336),
(57, 'French Ligue 2', 'FRA', 265),
(59, 'Bundesliga 1', 'DEU', 129),
(61, 'Bundesliga 2', 'DEU', 34),
(5982310, 'Copa Rio', 'BRA', 24),
(11420561, 'CONCACAF League', 'GBR', 24),
(961354, 'Chilean Cup', 'CHL', 24),
(1032778, 'Copa Catalunya', 'ESP', 48),
(880458, 'División 1 rusa', 'RUS', 159),
(584, 'Supercopa de España', 'ESP', 15),
(856134, 'Primera B Colombiana', 'COL', 24),
(77, 'Airtricity Premier Division', 'IRL', 5),
(7552802, 'Scottish Women\'s Premier Leagu', 'GBR', 96),
(81, 'Serie A', 'ITA', 134),
(1874, 'Coppa Italia', 'ITA', 565),
(83, 'Serie B', 'ITA', 1),
(943450, 'Icelandic Second Division', 'ISL', 24),
(2134, 'EFL Carabao Cup', 'GBR', 331),
(89, 'J League', 'JPN', 253),
(984404, 'Icelandic 1st Division (Fem)', 'ISL', 24),
(30558, 'English FA Cup', 'GBR', 2),
(62815, 'Copa Libertadores', 'International', 199),
(95, 'Norwegian 1 Division', 'NOR', 14),
(97, 'Ekstraklasa', 'POL', 24),
(99, 'Primeira Liga', 'PRT', 221),
(101, 'Premier Division', 'RUS', 281),
(103, 'Serbian Super Liga', 'SRB', 192),
(105, 'Premiership Escocesa', 'GBR', 179),
(107, 'Championship Escocesa', 'GBR', 121),
(3242333, 'National Soccer League (W)', 'USA', 24),
(109, 'League One Escocesa', 'GBR', 121),
(3004992, 'USL Pro', 'USA', 24),
(1105022, 'Malaysia Cup', 'MYS', 175),
(111, 'League Two Escocesa', 'GBR', 121),
(10564816, 'T&T Pro League', 'TTO', 24),
(113, 'Slovakian Super Liga', 'SVK', 122),
(7893771, 'Copa Venezuela', 'VEN', 240),
(115, 'Slovenian Prva Liga', 'SVN', 98),
(5627174, 'Mexican Primera Division', 'MEX', 106),
(117, 'Primera División', 'ESP', 23),
(119, 'Segunda División ', 'ESP', 1),
(879221, 'Liga A lituana', 'LTU', 96),
(10854877, 'Copa polaca', 'POL', 225),
(89979, 'Jupiler League belga', 'BEL', 147),
(5754, 'Supercopa de Italia', 'ITA', 15),
(887158, 'Urvalsdeild', 'ISL', 72),
(1038449, 'Copa de la Liga Escocesa', 'GBR', 116),
(11413201, 'Mosta Domain Tournament', 'Internatio', 48),
(2608550, 'Apuestas Especiales', 'International', 6),
(129, 'Allsvenskan', 'SWE', 112),
(11402030, 'Indonesia Liga II', 'IDN', 24),
(318343, 'Regionalliga Nordost', 'DEU', 48),
(131, 'Superettan suceca', 'SWE', 192),
(133, 'Swiss Super League', 'CHE', 121),
(887178, 'Virsliga letona', 'LVA', 22),
(135, 'Swiss Challenge League', 'CHE', 120),
(854148, 'Copa Colombia', 'COL', 24),
(1987477, 'Czech U19 League', 'CZE', 24),
(3127716, 'Paulista U20', 'BRA', 216),
(139, 'Vischya Liga', 'UKR', 100),
(141, 'MLS', 'USA', 106),
(6366702, 'Shillong Premier League', 'IND', 24),
(2079376, 'Costa Rican Primera Division', 'CRI', 24),
(1979279, 'Copa Mexico', 'MEX', 120),
(1062024, 'J2 League', 'JPN', 264),
(11086347, 'National League', 'GBR', 1),
(862638, 'Czech 2 Liga', 'CZE', 124),
(194215, 'Super League turca', 'TUR', 267),
(844197, 'Colombian Primera A', 'COL', 96),
(744098, 'Primera chilena', 'CHL', 104),
(7883210, 'Brazilian Taca FPF', 'BRA', 96),
(4040072, 'Primera División georgiana', 'GEO', 24),
(911286, 'Icelandic Premier League (Fem)', 'ISL', 72),
(10932509, 'Premier League Inglesa', 'GBR', 945),
(10187098, 'Czech Rep Cup', 'CZE', 150),
(3583988, 'Copa Paulista', 'BRA', 24),
(30921, 'Copa danesa', 'DNK', 304),
(853446, 'Saudí Premier', 'SAU', 48),
(10662505, 'DFB Pokal', 'DEU', 477),
(10479956, 'Bundesliga Austríaca', 'AUT', 98),
(5614746, 'FIFA Mundial 2018', 'International', 10),
(309972, 'AFC Cup', 'Internatio', 24),
(7408034, 'Regional Cup Niedersachsen', 'DEU', 50),
(4051, 'Norwegian Cup', 'NOR', 147),
(2005, 'UEFA Europa League', 'International', 36),
(10238283, 'Estonia Cup', 'EST', 50),
(802004, 'Copa de Egipto', 'EGY', 24),
(7197874, 'Uzbekistan 1 Division', 'UZB', 48),
(3765209, 'Vietnamese U21 Championship Qu', 'VNM', 144),
(228, 'UEFA Champions League', 'International', 161),
(1161205, 'Israeli Premier League Cup', 'ISR', 50),
(905441, 'Icelandic First Division', 'ISL', 24),
(3332575, 'Thailand Premier League', 'THA', 14),
(7129730, 'The Championship', 'GBR', 484),
(944127, 'Copa singapurense', 'SGP', 24),
(5449376, 'Polish U19 Central Junior Leag', 'POL', 48),
(3729355, 'Bolivian Liga Nacional A', 'BOL', 24),
(873203, 'Esiliiga de Estonia', 'EST', 48),
(9513, 'Segunda Liga', 'PRT', 48),
(803690, 'Primera A ecuatoriana', 'ECU', 48),
(7998231, 'Danish Division 2', 'DNK', 64),
(867459, 'K League Koreana', 'KOR', 78),
(839575, 'Primera de Paraguay', 'PRY', 48),
(11433561, 'Trofeo Ciudad de Murcia', 'International', 24),
(13051, 'Sub-19 Internacional', 'International', 48),
(11433557, 'Trofeo Villa de Leganes', 'International', 24);

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
('AR', NULL, 33, NULL),
('AT', NULL, 220, NULL),
('AU', NULL, 1, NULL),
('BD', NULL, 19, NULL),
('BE', NULL, 173, NULL),
('BG', NULL, 136, NULL),
('BO', NULL, 24, NULL),
('BR', NULL, 927, NULL),
('CA', NULL, 32, NULL),
('CH', NULL, 245, NULL),
('CL', NULL, 128, NULL),
('CM', NULL, 38, NULL),
('CN', NULL, 72, NULL),
('CO', NULL, 120, NULL),
('CR', NULL, 24, NULL),
('CS', NULL, 192, NULL),
('CY', NULL, 2, NULL),
('CZ', NULL, 380, NULL),
('DE', NULL, 738, NULL),
('DK', NULL, 473, NULL),
('EC', NULL, 48, NULL),
('EE', NULL, 98, NULL),
('EG', NULL, 24, NULL),
('ES', NULL, 87, NULL),
('FI', NULL, 192, NULL),
('FR', NULL, 601, NULL),
('GB', NULL, 3263, NULL),
('GE', NULL, 24, NULL),
('GR', NULL, 4, NULL),
('HR', NULL, 102, NULL),
('ID', NULL, 24, NULL),
('IE', NULL, 45, NULL),
('IL', NULL, 74, NULL),
('IN', NULL, 24, NULL),
('IS', NULL, 218, NULL),
('IT', NULL, 717, NULL),
('JP', NULL, 264, NULL),
('KG', NULL, 24, NULL),
('KR', NULL, 78, NULL),
('LI', NULL, 24, NULL),
('LT', NULL, 96, NULL),
('LV', NULL, 24, NULL),
('MD', NULL, 33, NULL),
('MK', NULL, 2, NULL),
('MX', NULL, 226, NULL),
('MY', NULL, 175, NULL),
('NL', NULL, 181, NULL),
('NO', NULL, 228, NULL),
('PE', NULL, 24, NULL),
('PH', NULL, 24, NULL),
('PL', NULL, 299, NULL),
('PT', NULL, 271, NULL),
('PY', NULL, 48, NULL),
('RO', NULL, 232, NULL),
('RU', NULL, 464, NULL),
('SA', NULL, 48, NULL),
('SE', NULL, 304, NULL),
('SG', NULL, 24, NULL),
('SI', NULL, 98, NULL),
('SK', NULL, 197, NULL),
('TH', NULL, 14, NULL),
('TR', NULL, 267, NULL),
('TT', NULL, 24, NULL),
('UA', NULL, 340, NULL),
('US', NULL, 98, NULL),
('UZ', NULL, 48, NULL),
('VE', NULL, 240, NULL),
('VN', NULL, 144, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE `partido` (
  `ID_PARTIDO` bigint(20) NOT NULL,
  `ID_PAIS` varchar(20) DEFAULT NULL,
  `ID_COMPETENCIA` bigint(20) NOT NULL,
  `LOCAL` varchar(40) DEFAULT NULL,
  `VISITANTE` varchar(40) DEFAULT NULL,
  `TIMEZONE` varchar(50) NOT NULL,
  `FECHA` date DEFAULT NULL,
  `HORA` time DEFAULT NULL,
  `MARKET_COUNT` int(11) NOT NULL,
  `ESTADO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Betfair';

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`ID_PARTIDO`, `ID_PAIS`, `ID_COMPETENCIA`, `LOCAL`, `VISITANTE`, `TIMEZONE`, `FECHA`, `HORA`, `MARKET_COUNT`, `ESTADO`) VALUES
(28313864, 'PE', 8594603, 'Real Garcilaso', 'Deportivo Municipal', 'Europe/London', '2017-08-09', '13:15:00', 23, NULL),
(28328217, 'PT', 99, 'Porto', 'Estoril Praia', '28328217', '2017-08-09', '18:00:00', 34, NULL),
(28328218, 'PT', 99, 'Benfica', 'Braga', '28328218', '2017-08-09', '20:00:00', 34, NULL),
(28331656, 'MX', 1979279, 'Pachuca', 'Queretaro', '28331656', '2017-08-10', '00:00:00', 23, NULL),
(28331657, 'MX', 1979279, 'FC Juarez', 'Guadalajara', '28331657', '2017-08-10', '02:00:00', 23, NULL),
(28331658, 'MX', 1979279, 'Universidad Guadalajara', 'Toluca', '28331658', '2017-08-10', '02:00:00', 23, NULL),
(28331659, 'MX', 1979279, 'Pumas UNAM', 'Monterrey', '28331659', '2017-08-10', '01:30:00', 23, NULL),
(28331660, 'MX', 1979279, 'Veracruz', 'Leon', '28331660', '2017-08-10', '00:00:00', 23, NULL),
(28331689, 'BR', 62815, 'Palmeiras', 'Barcelona (Ecu)', '28331689', '2017-08-10', '00:45:00', 31, NULL),
(28331690, 'BR', 62815, 'Atletico MG', 'Jorge Wilstermann', '28331690', '2017-08-10', '00:45:00', 31, NULL),
(28331968, 'DK', 30921, 'Norresundby', 'Oversidder', '28331968', '2017-08-09', '16:30:00', 8, NULL),
(28331969, 'DK', 30921, 'Alleso GF', 'Vejle', '28331969', '2017-08-09', '16:30:00', 8, NULL),
(28331970, 'DK', 30921, 'Herlufsholm GF', 'HB Koge', '28331970', '2017-08-09', '16:30:00', 8, NULL),
(28331971, 'DK', 30921, 'DGL 2000', 'Brabrand', '28331971', '2017-08-09', '16:30:00', 8, NULL),
(28331972, 'DK', 30921, 'Linde', 'VSK Aarhus', '28331972', '2017-08-09', '16:30:00', 8, NULL),
(28331973, 'DK', 30921, 'Hedensted', 'Thisted', '28331973', '2017-08-09', '16:30:00', 27, NULL),
(28331974, 'DK', 30921, 'Avarta', 'Fremad Amager', '28331974', '2017-08-09', '16:30:00', 27, NULL),
(28331975, 'DK', 30921, 'Holstebro', 'Aarhus Fremad', '28331975', '2017-08-09', '16:30:00', 8, NULL),
(28331976, 'DK', 30921, 'Lystrup', 'Vendsyssel FF', '28331976', '2017-08-09', '16:30:00', 27, NULL),
(28331978, 'DK', 30921, 'Tarup-Paarup', 'Dalum', '28331978', '2017-08-09', '16:30:00', 27, NULL),
(28331979, 'DK', 30921, 'Sunred Beach', 'CSC', '28331979', '2017-08-09', '17:30:00', 8, NULL),
(28331980, 'DK', 30921, 'Rishoj', 'Greve', '28331980', '2017-08-09', '16:30:00', 27, NULL),
(28331981, 'DK', 30921, 'Vejlby-Risskov', 'Skive', '28331981', '2017-08-09', '16:30:00', 27, NULL),
(28331983, 'DK', 30921, 'Silkeborg KFUM', 'Viborg', '28331983', '2017-08-09', '16:30:00', 27, NULL),
(28331984, 'DK', 30921, 'Fredericia', 'Esbjerg', '28331984', '2017-08-09', '17:15:00', 8, NULL),
(28331985, 'DK', 30921, 'Roskilde', 'Nykobing FC', '28331985', '2017-08-09', '16:30:00', 27, NULL),
(28331986, 'GB', 2134, 'Leeds', 'Port Vale', '28331986', '2017-08-09', '18:45:00', 39, NULL),
(28331987, 'GB', 2134, 'Oldham', ' Burton', '28331987', '2017-08-09', '18:45:00', 39, NULL),
(28331988, 'GB', 2134, 'Crewe', 'Bolton', '28331988', '2017-08-09', '18:45:00', 39, NULL),
(28331989, 'GB', 2134, 'Sheff Utd', 'Walsall', '28331989', '2017-08-09', '18:45:00', 39, NULL),
(28332002, 'NO', 4051, 'Lillestrom', 'Tromso', '28332002', '2017-08-09', '16:30:00', 27, NULL),
(28332003, 'NO', 4051, 'Haugesund', 'Molde', '28332003', '2017-08-09', '16:30:00', 8, NULL),
(28332004, 'NO', 4051, 'Sarpsborg', 'Odds BK', '28332004', '2017-08-09', '16:30:00', 8, NULL),
(28332005, 'NO', 4051, 'Kristiansund', 'Floro', '28332005', '2017-08-09', '16:30:00', 27, NULL),
(28332006, 'NO', 4051, 'Mjondalen', 'Brann', '28332006', '2017-08-09', '17:45:00', 27, NULL),
(28332007, 'NO', 4051, 'Stabaek', 'Aalesunds', '28332007', '2017-08-09', '16:30:00', 8, NULL),
(28332009, 'RU', 101, 'Rubin Kazan', 'Lokomotiv', '28332009', '2017-08-09', '17:00:00', 31, NULL),
(28332010, 'RU', 101, 'Rostov', 'Dinamo Moscú', '28332010', '2017-08-09', '17:00:00', 31, NULL),
(28332011, 'RU', 101, 'Spartak Moscow', 'Arsenal Tula', '28332011', '2017-08-09', '16:30:00', 31, NULL),
(28332012, 'RU', 101, 'Ural', 'Zenit St Petersburg', '28332012', '2017-08-09', '14:30:00', 17, NULL),
(28332013, 'RU', 101, 'Tosno', 'CSKA Moscow', '28332013', '2017-08-09', '17:00:00', 31, NULL),
(28332015, 'GB', 41, 'Darlington', 'Gainsborough', '28332015', '2017-08-09', '18:45:00', 8, NULL),
(28332020, 'DE', 318343, 'BFC Dynamo', 'Wacker Nordhausen', '28332020', '2017-08-09', '17:00:00', 23, NULL),
(28332022, 'RU', 880458, 'FC Khimki', 'FK Avangard Kursk', '28332022', '2017-08-09', '16:00:00', 23, NULL),
(28332024, 'RU', 880458, 'Baltika', 'Yenisey Krasnoyarsk', '28332024', '2017-08-09', '17:00:00', 23, NULL),
(28332030, 'GB', 1038449, 'Ross Co', 'Motherwell', '28332030', '2017-08-09', '18:45:00', 27, NULL),
(28332031, 'GB', 1038449, 'Hamilton', 'Aberdeen', '28332031', '2017-08-09', '18:45:00', 27, NULL),
(28332032, 'GB', 1038449, 'Rangers', 'Dunfermline', '28332032', '2017-08-09', '18:45:00', 27, NULL),
(28332033, 'GB', 1038449, 'Dundee', 'Dundee Utd', '28332033', '2017-08-09', '18:45:00', 27, NULL),
(28332036, 'GB', 7552802, 'Stirling University (W)', 'Celtic (W)', '28332036', '2017-08-09', '18:00:00', 23, NULL),
(28332037, 'GB', 7552802, 'Hamilton WFC (W)', 'Rangers (W)', '28332037', '2017-08-09', '18:00:00', 23, NULL),
(28332038, 'GB', 7552802, 'Aberdeen (W)', 'Glasgow City (W)', '28332038', '2017-08-09', '18:00:00', 23, NULL),
(28332039, 'GB', 7552802, 'Spartans WFC (W)', 'Hibernian (W)', '28332039', '2017-08-09', '18:00:00', 23, NULL),
(28332041, 'SE', 131, 'Dalkurd FF', 'IK Frej', '28332041', '2017-08-09', '17:00:00', 23, NULL),
(28332042, 'SE', 131, 'Falkenbergs', 'Varnamo', '28332042', '2017-08-09', '17:00:00', 23, NULL),
(28332043, 'SE', 131, 'Gefle', 'Varbergs BoIS', '28332043', '2017-08-09', '17:00:00', 23, NULL),
(28332044, 'SE', 131, 'Orgryte', 'Brommapojkarna', '28332044', '2017-08-09', '17:00:00', 23, NULL),
(28332046, 'CH', 135, 'Chiasso', 'Rapperswil-Jona', '28332046', '2017-08-09', '18:00:00', 23, NULL),
(28332047, 'CH', 135, 'Servette', 'FC Wil', '28332047', '2017-08-09', '18:00:00', 23, NULL),
(28332048, 'CH', 135, 'Wohlen', 'Neuchatel Xamax', '28332048', '2017-08-09', '18:00:00', 23, NULL),
(28332050, 'CH', 133, 'St Gallen', 'Luzern', '28332050', '2017-08-09', '18:00:00', 23, NULL),
(28332051, 'CH', 133, 'Lausanne', 'Lugano', '28332051', '2017-08-09', '18:00:00', 23, NULL),
(28332052, 'CH', 133, 'Young Boys', 'Thun', '28332052', '2017-08-09', '18:00:00', 23, NULL),
(28332054, 'IS', 887158, 'Vikingur Olafsvik', 'Grindavik', '28332054', '2017-08-09', '19:15:00', 23, NULL),
(28332056, 'IS', 887158, 'Stjarnan', 'Breidablik', '28332056', '2017-08-09', '20:00:00', 23, NULL),
(28332057, 'IS', 887158, 'Fjolnir', 'KA Akureyri', '28332057', '2017-08-09', '18:00:00', 23, NULL),
(28332059, 'FI', 45, 'HIFK', 'VPS', '28332059', '2017-08-09', '15:30:00', 21, NULL),
(28332060, 'FI', 45, 'PS Kemi', 'Ilves', '28332060', '2017-08-09', '15:30:00', 23, NULL),
(28332074, 'BR', 62815, 'Gremio', 'Godoy Cruz', '28332074', '2017-08-09', '22:15:00', 31, NULL),
(28333375, 'DE', 61, 'FC Heidenheim', 'Erzgebirge', '28333375', '2017-08-09', '18:00:00', 31, NULL),
(28334256, 'GB', 2134, 'Colchester', 'Aston Villa', '28334256', '2017-08-09', '18:45:00', 72, NULL),
(28334388, 'PL', 10854877, 'Bytovia Bytow', 'Lechia Gdansk', '28334388', '2017-08-09', '17:00:00', 24, NULL),
(28334389, 'PL', 10854877, 'GKS Belchatow', 'Chojniczanka Chojnice', '28334389', '2017-08-09', '17:00:00', 24, NULL),
(28334390, 'PL', 10854877, 'GKS Tychy', 'Cracovia Krakow', '28334390', '2017-08-09', '17:30:00', 24, NULL),
(28334391, 'PL', 10854877, 'Miedz Legnica', 'Sandecja Nowy Sacz', '28334391', '2017-08-09', '17:00:00', 24, NULL),
(28334392, 'PL', 10854877, 'Pogon Szczecin', 'Lech Poznan', '28334392', '2017-08-09', '18:00:00', 24, NULL),
(28334398, 'PL', 10854877, 'Sokol Ostroda', 'Gornik Zabrze', '28334398', '2017-08-09', '17:00:00', 24, NULL),
(28334403, 'PL', 10854877, 'Zaglebie Lubin', 'Jagiellonia Bialystock', '28334403', '2017-08-09', '18:00:00', 24, NULL),
(28334413, 'BR', 4655, 'Flamengo', 'Palestino', '28334413', '2017-08-10', '00:45:00', 23, NULL),
(28334429, 'RO', 4905, 'FCSB', 'CSMS Iasi', '28334429', '2017-08-09', '18:45:00', 26, NULL),
(28334430, 'RO', 4905, 'Juventus Bucharest', 'CS Uni Craiova', '28334430', '2017-08-09', '16:15:00', 26, NULL),
(28334435, 'BR', 13, 'Ponte Preta', 'Fluminense', 'Europe/London', '2017-08-09', '18:00:00', 31, NULL),
(28334450, 'DE', 318343, 'Viktoria Berlin', 'Meuselwitz', '28334450', '2017-08-09', '16:00:00', 23, NULL),
(28334643, 'ES', 1032778, 'UA Horta', 'Badalona', '28334643', '2017-08-09', '18:30:00', 23, NULL),
(28336936, 'CO', 844197, 'Atletico Nacional (Col)', 'La Equidad', '28336936', '2017-08-09', '22:15:00', 23, NULL),
(28336967, 'BO', 3729355, 'Nacional Potosi', 'Real Potosi', '28336967', '2017-08-09', '23:30:00', 23, NULL),
(28337167, 'UA', 8616348, 'Granada B', 'Sevilla B', 'Europe/London', '2017-08-09', '12:15:00', 23, NULL),
(28337995, 'CS', 103, 'Backa Palanka', 'FK Napredak', '28337995', '2017-08-09', '16:00:00', 21, NULL),
(28337996, 'CS', 103, 'Cukaricki', 'Mladost Lucani', '28337996', '2017-08-09', '18:00:00', 23, NULL),
(28337997, 'CS', 103, 'Partizan Belgrade', 'Vozdovac', '28337997', '2017-08-09', '18:00:00', 23, NULL),
(28337998, 'CS', 103, 'Macva Sabac', 'Radnicki Nis', '28337998', '2017-08-09', '16:00:00', 23, NULL),
(28337999, 'CS', 103, 'Rad', 'Zemun', '28337999', '2017-08-09', '18:00:00', 23, NULL),
(28338004, 'UA', 872215, 'Balkany Zorya', 'Hirnyk-Sport', 'Europe/London', '2017-08-09', '10:00:00', 17, NULL),
(28338005, 'UA', 872215, 'Avangard Kramatorsk', 'Rukh Vynnyky', 'Europe/London', '2017-08-09', '10:00:00', 14, NULL),
(28338006, 'UA', 872215, 'Arsenal Kiev', 'Volyn', 'Europe/London', '2017-08-09', '10:30:00', 17, NULL),
(28338007, 'UA', 872215, 'Desna', 'Kolos Kovalivka', 'Europe/London', '2017-08-09', '11:00:00', 19, NULL),
(28338008, 'UA', 872215, 'Zhemchuzhyna Odesa', 'FC Poltava', 'Europe/London', '2017-08-09', '10:00:00', 17, NULL),
(28338009, 'UA', 872215, 'Naftovik-Ukrnafta', 'Inhulets Petrove', 'Europe/London', '2017-08-09', '10:00:00', 17, NULL),
(28338010, 'UA', 872215, 'Kremin', 'Obolon-Brovar', 'Europe/London', '2017-08-09', '10:00:00', 17, NULL),
(28338011, 'UA', 872215, 'Sumy', 'MFC Mykolaiv', 'Europe/London', '2017-08-09', '10:00:00', 17, NULL),
(28338015, 'BG', 338432, 'Ludogorets', 'Botev Plovdiv', 'Europe/London', '2017-08-09', '12:00:00', 8, NULL),
(28338117, 'BR', 7883210, 'AC Paranavai U23', 'Foz do Iguacu FC U23', '28338117', '2017-08-09', '18:30:00', 23, NULL),
(28338118, 'BR', 7883210, 'Rio Branco Par U23', 'FC Cascavel U23', '28338118', '2017-08-09', '18:30:00', 23, NULL),
(28338119, 'BR', 7883210, 'Iraty SC U23', 'Toledo EC U23', '28338119', '2017-08-09', '18:30:00', 23, NULL),
(28338121, 'BR', 5982310, 'Audax Rio', 'Sao Goncalo EC RJ', '28338121', '2017-08-09', '18:00:00', 23, NULL),
(28338127, 'BR', 3127716, 'CA Penapolense U20', 'Olimpia FC U20', '28338127', '2017-08-09', '18:00:00', 23, NULL),
(28338128, 'BR', 3127716, 'Comercial FC U20', 'Marilia AC U20', '28338128', '2017-08-09', '18:00:00', 23, NULL),
(28338129, 'BR', 3127716, 'Corinthians U20', 'RB Brasil U20', '28338129', '2017-08-09', '18:00:00', 23, NULL),
(28338130, 'BR', 3127716, 'Gremio E O U20', 'Sao Caetano U20', '28338130', '2017-08-09', '18:00:00', 23, NULL),
(28338131, 'BR', 3127716, 'Guarani FC Campinas U20', 'SC Atibaia U20', '28338131', '2017-08-09', '18:00:00', 23, NULL),
(28338132, 'BR', 3127716, 'Ituano FC U20', 'Capivariano FC U20', '28338132', '2017-08-09', '18:00:00', 23, NULL),
(28338133, 'BR', 3127716, 'Mogi Mirim EC U20', 'Rio Branco EC U20', '28338133', '2017-08-09', '18:00:00', 23, NULL),
(28338134, 'BR', 3127716, 'Rio Claro FC U20', '15 de Novembre U20', '28338134', '2017-08-09', '18:00:00', 23, NULL),
(28338141, 'CZ', 10187098, 'Stechovice', 'Pribram', '28338141', '2017-08-09', '15:30:00', 24, NULL),
(28338142, 'CZ', 10187098, 'SK Zapy', 'Banik Sokolov', '28338142', '2017-08-09', '15:00:00', 21, NULL),
(28338143, 'CZ', 10187098, 'Prevysov', 'Dukla Prague', '28338143', '2017-08-09', '15:00:00', 23, NULL),
(28338144, 'CZ', 10187098, 'Pisek', 'Pardubice', '28338144', '2017-08-09', '15:00:00', 16, NULL),
(28338145, 'CZ', 10187098, 'Loko Vltavin', 'Teplice', '28338145', '2017-08-09', '15:00:00', 19, NULL),
(28338146, 'CZ', 10187098, 'Hulin', 'Banik Ostrava', '28338146', '2017-08-09', '15:00:00', 21, NULL),
(28338149, 'DK', 30921, 'Helsinge Fodbold', 'HIK', '28338149', '2017-08-09', '16:30:00', 8, NULL),
(28338151, 'EG', 802004, 'Al Ahly', 'Smouha', '28338151', '2017-08-09', '18:00:00', 23, NULL),
(28338153, 'EE', 10238283, 'Rumori Calcio', 'JK Kadakas Kernu', '28338153', '2017-08-09', '17:00:00', 24, NULL),
(28338154, 'EE', 10238283, 'Viimsi MRJK', 'Flora Tallinn II', '28338154', '2017-08-09', '15:00:00', 19, NULL),
(28338156, 'EE', 873203, 'Tartu Welco', 'FC Maardu', '28338156', '2017-08-09', '16:00:00', 23, NULL),
(28338158, 'FI', 5281887, 'HPS Helsinki', 'Latino Espanol (CLE)', 'Europe/London', '2017-08-09', '11:30:00', 23, NULL),
(28338161, 'DE', 7408034, 'SW Rehden', 'Osnabruck', '28338161', '2017-08-09', '17:00:00', 24, NULL),
(28338162, 'DE', 7408034, 'USI Lupo-Martini', 'Germania E-L', '28338162', '2017-08-09', '16:30:00', 24, NULL),
(28338195, 'GB', 2134, 'Oldham', ' Burton', '28338195', '2017-08-09', '18:45:00', 1, NULL),
(28338207, 'IL', 1161205, 'Maccabi Netanya', 'Hapoel Raanana', '28338207', '2017-08-09', '16:00:00', 22, NULL),
(28338208, 'IL', 1161205, 'Maccabi Petach Tikva', 'Maccabi Tel Aviv', '28338208', '2017-08-09', '18:00:00', 24, NULL),
(28338211, 'NO', 4051, 'Jerv', 'Rosenborg', '28338211', '2017-08-09', '16:30:00', 8, NULL),
(28338229, 'LT', 879221, 'Kauno Zalgiris', 'Trakai', '28338229', '2017-08-09', '15:00:00', 17, NULL),
(28338230, 'LT', 879221, 'Zalgiris', 'FK Suduva', '28338230', '2017-08-09', '17:00:00', 23, NULL),
(28338235, 'PL', 5449376, 'MOSP Jagiellonia U19', 'AP LKS Lodz U19', '28338235', '2017-08-09', '15:00:00', 16, NULL),
(28338236, 'PL', 5449376, 'UKS SMS Lodz U19', 'Jagiellonia U19', '28338236', '2017-08-09', '15:00:00', 15, NULL),
(28338238, 'RU', 868392, 'Akhmat Groznyi (Y)', 'FK Krasnodar (Y)', 'Europe/London', '2017-08-09', '10:00:00', 15, NULL),
(28338239, 'CS', 103, 'Borac Cacak', 'Vojvodina', '28338239', '2017-08-09', '18:00:00', 23, NULL),
(28338250, 'UA', 872215, 'Cherkaskyi Dnipro', 'Helios', 'Europe/London', '2017-08-09', '10:00:00', 14, NULL),
(28338258, 'VE', 7893771, 'Atletico Socopo', 'Zamora', '28338258', '2017-08-09', '19:00:00', 23, NULL),
(28338264, 'VE', 7893771, 'Deportivo JBL Zulia', 'Trujillanos', '28338264', '2017-08-09', '19:00:00', 23, NULL),
(28338265, 'VE', 7893771, 'Deportivo Petare', 'Deportivo La Guaira', '28338265', '2017-08-09', '23:00:00', 23, NULL),
(28338266, 'VE', 7893771, 'Estudiantes de Caracas', 'Metropolitanos', '28338266', '2017-08-09', '17:00:00', 23, NULL),
(28338267, 'VE', 7893771, 'LALA FC', 'Monagas', '28338267', '2017-08-09', '19:00:00', 23, NULL),
(28338268, 'VE', 7893771, 'ULA Merida FC', 'Estudiantes de Merida', '28338268', '2017-08-09', '19:30:00', 23, NULL),
(28338270, 'UA', 8616348, 'AC Milan', 'Betis', 'Europe/London', '2017-08-09', '13:45:00', 23, NULL),
(28338271, 'UA', 8616348, 'Alcorcon', 'Getafe', 'Europe/London', '2017-08-09', '13:00:00', 23, NULL),
(28338272, 'UA', 8616348, 'Atletico Astorga CF', 'Leonesa', 'Europe/London', '2017-08-09', '13:15:00', 23, NULL),
(28338273, 'UA', 8616348, 'Atromitos', 'Olympiakos', 'Europe/London', '2017-08-09', '12:30:00', 23, NULL),
(28338274, 'UA', 8616348, 'De Graafschap', 'Achilles 29', 'Europe/London', '2017-08-09', '12:00:00', 23, NULL),
(28338275, 'UA', 8616348, 'FC Cartagena', 'Albacete', 'Europe/London', '2017-08-09', '14:00:00', 23, NULL),
(28338276, 'UA', 8616348, 'Gimnàstic', 'Zaragoza', 'Europe/London', '2017-08-09', '13:30:00', 23, NULL),
(28338277, 'UA', 8616348, 'Kustosija', 'NK Sesvete', 'Europe/London', '2017-08-09', '11:00:00', 23, NULL),
(28338278, 'UA', 8616348, 'Linense', 'Al Wasl', 'Europe/London', '2017-08-09', '13:00:00', 23, NULL),
(28338279, 'UA', 8616348, 'Lorca FC', 'Bani Yas', 'Europe/London', '2017-08-09', '12:00:00', 23, NULL),
(28338281, 'UA', 8616348, 'Lugo', 'Mallorca', 'Europe/London', '2017-08-09', '13:00:00', 23, NULL),
(28338282, 'UA', 8616348, 'Mirandes', 'Leioa', 'Europe/London', '2017-08-09', '12:00:00', 23, NULL),
(28338283, 'UA', 8616348, 'Sociedad B', 'Real Union', 'Europe/London', '2017-08-09', '12:00:00', 23, NULL),
(28338284, 'UA', 8616348, 'Sporting Gijon', 'Racing Santander', 'Europe/London', '2017-08-09', '11:30:00', 23, NULL),
(28338285, 'UA', 8616348, 'UCAM Murcia', 'Bengaluru', 'Europe/London', '2017-08-09', '12:00:00', 23, NULL),
(28338286, 'UA', 8616348, 'US Folgore Caratese ASD', 'Novara', 'Europe/London', '2017-08-09', '13:00:00', 23, NULL),
(28338287, 'UA', 8616348, 'Valladolid', 'Rayo Vallecano', 'Europe/London', '2017-08-09', '13:00:00', 23, NULL),
(28338290, 'BO', 11433561, 'Real Murcia', 'Hercules', '28338290', '2017-08-09', '19:00:00', 23, NULL),
(28338291, 'BO', 11433557, 'Leganes', 'Alaves', '28338291', '2017-08-09', '18:45:00', 23, NULL),
(28338292, 'BO', 13051, 'Croatia Sub19', 'Italia Sub19', '28338292', '2017-08-09', '16:30:00', 23, NULL),
(28339237, 'BR', 11420561, 'Plaza Amador', 'Portmore Utd', '28339237', '2017-08-10', '00:00:00', 23, NULL),
(28339241, 'CO', 854148, 'Millonarios', 'Junior', '28339241', '2017-08-10', '00:10:00', 23, NULL),
(28339243, 'BR', 3583988, 'Portuguesa SP', 'Agua Santa', '28339243', '2017-08-09', '23:00:00', 23, NULL),
(28339245, 'VE', 7893771, 'Urena', 'Deportivo Tachira', '28339245', '2017-08-09', '23:00:00', 23, NULL),
(28339246, 'VE', 7893771, 'Llaneros', 'Portuguesa (Ven)', '28339246', '2017-08-09', '23:00:00', 23, NULL),
(28339248, 'CR', 2079376, 'Herediano', 'Limon', '28339248', '2017-08-10', '02:00:00', 23, NULL),
(28339260, 'US', 3004992, 'Toronto FC II (USL)', 'Charlotte Independence', '28339260', '2017-08-10', '00:00:00', 23, NULL),
(28339304, 'CL', 961354, 'Univ Catolica (Chile)', 'Rangers (Chile)', '28339304', '2017-08-10', '00:00:00', 23, NULL),
(28339338, 'US', 141, 'Kansas City', 'San Jose Earthquakes', '28339338', '2017-08-10', '00:30:00', 31, NULL),
(28339345, 'MY', 1105022, 'Kuala Lumpur', 'PKNS', '28339345', '2017-08-09', '13:00:00', 24, NULL),
(28339346, 'MY', 1105022, 'Terengganu', 'Sarawak', '28339346', '2017-08-09', '13:00:00', 24, NULL),
(28339347, 'MY', 1105022, 'UiTM', 'Melaka Utd', '28339347', '2017-08-09', '13:00:00', 24, NULL),
(28339348, 'MY', 1105022, 'Johor Darul Takzim', 'Selangor', '28339348', '2017-08-09', '13:00:00', 24, NULL),
(28339349, 'MY', 1105022, 'Negeri Sembilan', 'PKNP', '28339349', '2017-08-09', '13:00:00', 24, NULL),
(28339350, 'MY', 1105022, 'Perak', 'Felda Utd', '28339350', '2017-08-09', '13:00:00', 24, NULL),
(28339351, 'MY', 1105022, 'Pahang', 'PBDKT T-Team', '28339351', '2017-08-09', '13:00:00', 24, NULL),
(28339601, 'BR', 3127716, 'Gremio Nov’tino U20', 'Botafogo SP U20', '28339601', '2017-08-09', '18:00:00', 23, NULL);

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
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`ID_PARTIDO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CEDULA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
