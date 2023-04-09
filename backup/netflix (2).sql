-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2023 a las 03:21:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `netflix`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banca`
--

CREATE TABLE `banca` (
  `idBank` int(11) NOT NULL,
  `dateBan` datetime DEFAULT NULL,
  `entBan` float DEFAULT NULL,
  `salBan` float DEFAULT NULL,
  `desBan` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idBan` int(11) DEFAULT NULL,
  `idMov` int(11) DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `banca`
--

INSERT INTO `banca` (`idBank`, `dateBan`, `entBan`, `salBan`, `desBan`, `idBan`, `idMov`, `status`) VALUES
(1234, '2022-08-18 20:02:00', 123, NULL, 'pago', 1, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE `banco` (
  `idBan` int(11) NOT NULL,
  `typBan` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `banco`
--

INSERT INTO `banco` (`idBan`, `typBan`, `status`) VALUES
(1, 'Provincial', '0'),
(2, 'Mercantil', '0'),
(3, 'Banesco', '0'),
(4, 'Venezuela', '0'),
(5, 'Sofitasa', '0'),
(6, 'Bicentenario', '0'),
(7, 'Divisa', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambio`
--

CREATE TABLE `cambio` (
  `idCam` int(11) NOT NULL,
  `proCam` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tazCam` float DEFAULT NULL,
  `monCam` float DEFAULT NULL,
  `dateCam` datetime DEFAULT NULL,
  `resCam` float DEFAULT NULL,
  `idBan` int(11) DEFAULT NULL,
  `idDiv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisa`
--

CREATE TABLE `divisa` (
  `idDiv` int(11) NOT NULL,
  `typDiv` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `divisa`
--

INSERT INTO `divisa` (`idDiv`, `typDiv`) VALUES
(1, 'Bolivares / Pesos'),
(2, 'Bolivares / Dolares'),
(3, 'Pesos / Dolares'),
(4, 'Binance');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excel`
--

CREATE TABLE `excel` (
  `idExc` int(11) NOT NULL,
  `fchExc` date DEFAULT NULL,
  `DesExc` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idBan` int(11) DEFAULT NULL,
  `refExc` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `entExc` float DEFAULT NULL,
  `salExc` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastoref`
--

CREATE TABLE `gastoref` (
  `idGas` int(11) NOT NULL,
  `gasCod` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `dateGas` datetime DEFAULT NULL,
  `monGas` float DEFAULT NULL,
  `idBan` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `gastoref`
--

INSERT INTO `gastoref` (`idGas`, `gasCod`, `dateGas`, `monGas`, `idBan`, `status`) VALUES
(1, '27991190', '2022-08-29 19:14:00', -24, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE `movimiento` (
  `idMov` int(11) NOT NULL,
  `typMov` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `movimiento`
--

INSERT INTO `movimiento` (`idMov`, `typMov`) VALUES
(1, 'Entrada'),
(2, 'Salida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencia`
--

CREATE TABLE `referencia` (
  `idRef` int(11) NOT NULL,
  `refCod` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `dateRef` datetime DEFAULT NULL,
  `monRef` float DEFAULT NULL,
  `idBan` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `referencia`
--

INSERT INTO `referencia` (`idRef`, `refCod`, `dateRef`, `monRef`, `idBan`, `status`) VALUES
(1, '27507583', '2022-08-18 20:02:00', 30, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUser` int(11) NOT NULL,
  `userName` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `userPass` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUser`, `userName`, `userPass`) VALUES
(1, 'master', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banca`
--
ALTER TABLE `banca`
  ADD PRIMARY KEY (`idBank`),
  ADD KEY `idBan` (`idBan`),
  ADD KEY `idMov` (`idMov`);

--
-- Indices de la tabla `banco`
--
ALTER TABLE `banco`
  ADD PRIMARY KEY (`idBan`);

--
-- Indices de la tabla `cambio`
--
ALTER TABLE `cambio`
  ADD PRIMARY KEY (`idCam`),
  ADD KEY `idBan` (`idBan`),
  ADD KEY `idDiv` (`idDiv`);

--
-- Indices de la tabla `divisa`
--
ALTER TABLE `divisa`
  ADD PRIMARY KEY (`idDiv`);

--
-- Indices de la tabla `excel`
--
ALTER TABLE `excel`
  ADD PRIMARY KEY (`idExc`),
  ADD KEY `idBan` (`idBan`);

--
-- Indices de la tabla `gastoref`
--
ALTER TABLE `gastoref`
  ADD PRIMARY KEY (`idGas`),
  ADD KEY `idBan` (`idBan`);

--
-- Indices de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD PRIMARY KEY (`idMov`);

--
-- Indices de la tabla `referencia`
--
ALTER TABLE `referencia`
  ADD PRIMARY KEY (`idRef`),
  ADD KEY `idBan` (`idBan`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banca`
--
ALTER TABLE `banca`
  MODIFY `idBank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT de la tabla `banco`
--
ALTER TABLE `banco`
  MODIFY `idBan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cambio`
--
ALTER TABLE `cambio`
  MODIFY `idCam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `divisa`
--
ALTER TABLE `divisa`
  MODIFY `idDiv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `excel`
--
ALTER TABLE `excel`
  MODIFY `idExc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `gastoref`
--
ALTER TABLE `gastoref`
  MODIFY `idGas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  MODIFY `idMov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `referencia`
--
ALTER TABLE `referencia`
  MODIFY `idRef` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `banca`
--
ALTER TABLE `banca`
  ADD CONSTRAINT `banca_ibfk_1` FOREIGN KEY (`idBan`) REFERENCES `banco` (`idBan`),
  ADD CONSTRAINT `banca_ibfk_2` FOREIGN KEY (`idMov`) REFERENCES `movimiento` (`idMov`);

--
-- Filtros para la tabla `cambio`
--
ALTER TABLE `cambio`
  ADD CONSTRAINT `cambio_ibfk_1` FOREIGN KEY (`idBan`) REFERENCES `banco` (`idBan`),
  ADD CONSTRAINT `cambio_ibfk_2` FOREIGN KEY (`idDiv`) REFERENCES `divisa` (`idDiv`);

--
-- Filtros para la tabla `excel`
--
ALTER TABLE `excel`
  ADD CONSTRAINT `excel_ibfk_1` FOREIGN KEY (`idBan`) REFERENCES `banco` (`idBan`);

--
-- Filtros para la tabla `gastoref`
--
ALTER TABLE `gastoref`
  ADD CONSTRAINT `gastoref_ibfk_1` FOREIGN KEY (`idBan`) REFERENCES `banco` (`idBan`);

--
-- Filtros para la tabla `referencia`
--
ALTER TABLE `referencia`
  ADD CONSTRAINT `referencia_ibfk_1` FOREIGN KEY (`idBan`) REFERENCES `banco` (`idBan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
