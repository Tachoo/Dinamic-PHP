-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2017 a las 18:18:49
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_testweb`
--
CREATE DATABASE IF NOT EXISTS `db_testweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_testweb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_data`
--

CREATE TABLE `users_data` (
  `id` int(100) NOT NULL,
  `username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_paterno` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_materno` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `correo_electronico` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `numero_telefonico` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabla donde alojamos los usuarios';

--
-- Volcado de datos para la tabla `users_data`
--

INSERT INTO `users_data` (`id`, `username`, `password`, `nombre`, `apellido_paterno`, `apellido_materno`, `correo_electronico`, `numero_telefonico`) VALUES
(1, 'Tachoo', 'XTachoo', 'sergio', 'angulo', 'rosales', 'senao28@icloud.com', '3111646067'),
(3, 'imero', '123', 'leo', 'acosta', 'mts', 'correo@hotmail.com', '3111646066'),
(5, 'sakura-chan ', '123', 'sakurai ', 'miho', 'yotsuba', 'cooperwood@icloud.com', '1332397923'),
(6, 'sakura-onechan ', '123', 'hinako ', 'amarazagi', 'yuuki', 'chigainokao992@icloud.com', '1338047623'),
(7, ' tomoyo ', 'takaku', 'hinako ', 'amarazagi', 'gamdias', 'chigainokao992@icloud.com', '1338047623'),
(8, 'mitsubishi ', 'takaku', 'hinako ', 'amarazagi', 'takaki', 'narita@icloud.com', '1338047623'),
(9, ' naruto ', 'takaku', 'hinako ', 'amarazagi', 'gremory', 'makachan@icloud.com', '1338047623'),
(10, 'hinata ', 'takaku', 'hinako ', 'amarazagi', 'yukihira', 'makenki@icloud.com', '1338047623'),
(11, 'sakura-onechan ', 'takaku', 'hinako ', 'amarazagi', 'tekken', 'meko@icloud.com', '1338047623'),
(12, 'neko ', 'takaku', 'hinako ', 'amarazagi', 'bakemono', 'rodo@icloud.com', '1338047623'),
(13, ' bakamitae ', 'takaku', 'hinako ', 'amarazagi', 'yuuki', 'chigainokao12@icloud.com', '1338047623'),
(14, 'Uniat', 'password', 'UniatUniat', 'Uniat', 'Uniat ', 'Uniat@Uniat.com', '3111646067'),
(15, 'L', 'Lrules', 'LL', 'L', 'L', 'L@hotmail.com', '311164606'),
(17, 'Mariana', 'Mariana05', 'marianamariana', 'mariana', 'mariana', 'mariana@mariana.com', '789456123'),
(18, 'Mariana', 'Mariana05', 'marianamariana', 'mariana', 'mariana', 'mariana@mariana.com', '789456123'),
(19, 'Mariana', 'Mariana05', 'marianamariana', 'mariana', 'mariana', 'mariana@mariana.com', '789456123'),
(20, '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users_data`
--
ALTER TABLE `users_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
