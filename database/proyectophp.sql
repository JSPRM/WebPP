-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2021 a las 22:11:03
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectophp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cart_item`
--

INSERT INTO `cart_item` (`id`, `name`, `price`, `image`) VALUES
(1, 'Producto1', '12.49', 'product-1.png'),
(2, 'Producto2', '59.99', 'product-2.png'),
(3, 'Producto3', '23.00', 'product-3.png'),
(4, 'Producto4', '32.99', 'product-4.png'),
(5, 'Producto5', '38.00', 'product-5.png'),
(6, 'Producto6', '29.99', 'product-6.png'),
(7, 'Producto7', '31.49', 'product-7.png'),
(8, 'Producto8', '29.00', 'product-8.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuariosId` int(11) NOT NULL,
  `usuariosNombre` varchar(128) NOT NULL,
  `usuariosNickname` varchar(128) NOT NULL,
  `usuariosEmail` varchar(128) NOT NULL,
  `usuariosPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuariosId`, `usuariosNombre`, `usuariosNickname`, `usuariosEmail`, `usuariosPwd`) VALUES
(1, 'tets', 'test', 'test@test.com', '$2y$10$QqGxgD7cYLMmVXRlmY4EHe2SEB1jAt1YKExw402xNwxiT6oKTRp0W');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuariosId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuariosId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
