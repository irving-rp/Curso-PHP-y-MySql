-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2022 a las 21:21:05
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coffe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `Id_Pedido` int(11) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Id_Usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`Id_Pedido`, `Descripcion`, `Id_Usuarios`) VALUES
(1, '2 Malteadas de Fresa', 10),
(2, '1 Cafe Expreso', 9),
(3, '1 Cafe Irlandes', 8),
(4, '1 Malteada de Chocolate, 1 Rebanada de Tarta', 7),
(5, '1 Frappe de Mocha, 1 Cupcake', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_Usuarios` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellidos` varchar(55) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `FechaNac` date NOT NULL,
  `Id_Pedido` int(11) NOT NULL,
  `Usuario` varchar(55) NOT NULL,
  `Password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuarios`, `Nombre`, `Apellidos`, `Telefono`, `FechaNac`, `Id_Pedido`, `Usuario`, `Password`) VALUES
(6, 'Irving', 'Ramirez Perez', '5545567825', '2005-11-11', 3, '0', '0'),
(7, 'Yaneth', 'Perez Robles', '5689241583', '1990-05-14', 1, '0', '0'),
(8, 'Fidencio', 'Ramirez Velazquez', '5587446622', '1985-11-16', 2, '0', '0'),
(9, 'Angelica', 'Ramirez Perez', '5688451230', '2004-09-28', 4, '0', '0'),
(10, 'Angel', 'Ramirez Perez', '5545820132', '2001-10-14', 5, '0', '0'),
(12, 'Alejandro', 'Ramirez Perez', '5614882064', '2000-11-13', 3, 'Alejandrx33', '25f9e794323b453885f5181f1b624d0b'),
(13, 'Roberto', 'Perez Angel', '55687295', '1996-06-18', 2, 'Robert', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`Id_Pedido`),
  ADD KEY `Id_Usuarios` (`Id_Usuarios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuarios`),
  ADD KEY `Id_Pedido` (`Id_Pedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `Id_Pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`Id_Usuarios`) REFERENCES `usuarios` (`Id_Usuarios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_Pedido`) REFERENCES `pedidos` (`Id_Pedido`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
