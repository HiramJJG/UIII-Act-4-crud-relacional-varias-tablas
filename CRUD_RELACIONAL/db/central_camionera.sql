-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2023 a las 20:26:45
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `central_camionera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camion`
--

CREATE TABLE `camion` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `capacidad` varchar(100) NOT NULL,
  `tipo_combustible` varchar(100) NOT NULL,
  `feacha_fabricacion` date NOT NULL,
  `num_asientos` int(100) NOT NULL,
  `disponibilidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `camion`
--

INSERT INTO `camion` (`id`, `marca`, `modelo`, `capacidad`, `tipo_combustible`, `feacha_fabricacion`, `num_asientos`, `disponibilidad`) VALUES
(7, 'fg', 'fg', 'gf', 'fg', '2023-11-16', 43, '43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `fecha_naci` date NOT NULL,
  `lugar_destino` varchar(100) NOT NULL,
  `num_camion` int(100) NOT NULL,
  `horario_viaje` time NOT NULL,
  `licensia` varchar(100) NOT NULL,
  `curso_manejo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`id`, `nombre_completo`, `fecha_naci`, `lugar_destino`, `num_camion`, `horario_viaje`, `licensia`, `curso_manejo`) VALUES
(1, 'er', '2023-11-17', 'er', 2332, '12:28:00', 'er', 'er');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `Origen` varchar(50) NOT NULL,
  `Destino` varchar(50) NOT NULL,
  `Distancia` varchar(50) NOT NULL,
  `Duracionviajes` varchar(100) NOT NULL,
  `Atracc_cercanas` varchar(50) NOT NULL,
  `Servicios_y_comodidad` varchar(50) NOT NULL,
  `Dificultaddecamino` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `Origen`, `Destino`, `Distancia`, `Duracionviajes`, `Atracc_cercanas`, `Servicios_y_comodidad`, `Dificultaddecamino`) VALUES
(3, 'Campeche', 'Durando', '1140km', '00:00:12', 'parque durango', 'buena', 'nieve');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camion`
--
ALTER TABLE `camion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
