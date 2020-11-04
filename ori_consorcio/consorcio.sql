-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2019 a las 20:32:26
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consorcio`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pa_AddUsuario` (`vusuario` VARCHAR(50), `vclave` VARCHAR(50))  INSERT INTO usuario (usuario,clave) VALUES(vusuario,vclave)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cod` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `ape` varchar(50) NOT NULL,
  `dir` varchar(50) NOT NULL,
  `fnac` date NOT NULL,
  `sex` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cod`, `nom`, `ape`, `dir`, `fnac`, `sex`) VALUES
(1, 'Cesar Augusto', 'Huaman Quincho', 'Av. Las Torres 340', '2008-06-19', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `cod` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `ape` varchar(50) NOT NULL,
  `dir` varchar(50) NOT NULL,
  `fnac` date NOT NULL,
  `sex` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`cod`, `nom`, `ape`, `dir`, `fnac`, `sex`) VALUES
(1, 'Jorge Antonio', 'Luque Chambi', 'Urb Brisas de Sta Rosa Mz K Lt 16', '1975-06-18', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `mar` varchar(50) NOT NULL,
  `pre` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod`, `nom`, `mar`, `pre`) VALUES
(1, 'Disco duro 2TB ', 'Toshiba', '400.00'),
(2, 'Teclado', 'Genius', '50.00'),
(3, 'Cuaderno cuadricula 100 hojas', 'Loro', '10.00'),
(4, 'Usb', 'Toshiba', '60.00'),
(5, 'Disco duro externo 2Gb', 'Toshiba', '450.00'),
(6, 'Teclado en espaÃ±ol', 'Genus', '45.00'),
(7, 'Hojas boom A4 1 millar', 'Pelikan', '35.00'),
(8, 'Cartuchera de cuero 20cm x 8cm', 'Tottus', '20.00'),
(9, 'Lapicero color negro', 'Pilot ', '5.00'),
(10, 'Borrador', 'Pelikan', '4.00'),
(11, 'Cartuchera', 'Renzo costa', '40.00'),
(12, 'Audifonos', 'Samsung', '20.00'),
(13, 'Lapicero', 'Novo', '2.00'),
(14, 'Agenda 2020', 'Artesco', '25.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `clave`) VALUES
(1, 'ahuayanay', '654321'),
(2, 'wrivas', '123456'),
(3, 'rnazario', '111222'),
(4, 'jgarcia', '654654'),
(5, 'flopez', '654654'),
(6, 'dtomas', '123412'),
(7, 'jluque', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
