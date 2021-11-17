-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2021 a las 19:55:14
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `categorias` varchar(45) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categorias`, `categoria_id`) VALUES
('Almacen', 1),
('Bebidas', 2),
('Celiacos', 3),
('Golosinas', 4),
('Lacteos', 5),
('Panificados', 6),
('Snacks', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `producto_id` int(11) NOT NULL,
  `producto` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `precio` varchar(45) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`producto_id`, `producto`, `categoria`, `precio`, `descripcion`) VALUES
(1, 'Coca-cola', 'Bebidas', '130', 'Coca-Cola Sabor Original BEBIDA SIN ALCOHOL GASIFICADA DE EXTRACTOS VEGETALES.'),
(2, 'Fanta', 'Bebidas', '115', 'Fanta Naranja BEBIDA SIN ALCOHOL ARTIFICIAL CON SABOR A NARANJA GASIFICADA.'),
(3, 'Pepsi', 'Bebidas', '110', 'Pepsi-Cola, es una bebida azucarada y gaseosa de cola producida por la compañía PepsiCo'),
(4, 'Sprite', 'Bebidas', '115', 'Sprite BEBIDA SIN ALCOHOL GASIFICADA CON 5% DE JUGO DE LIMÓN.'),
(5, 'Alfajor-Jorgito', 'Golosinas', '90', 'Alfajor relleno con dulce de leche cubierto con baño de repostería negro.'),
(6, 'Milka-Aereado', 'Golosinas', '120', 'CHOCOLATE CON LECHE AIREADO. CON AROMATIZANTE IDÉNTICO AL NATURAL VAINILLINA.'),
(7, 'Cofler-Block', 'Golosinas', '130', 'Chocolate con leche con Maní'),
(9, 'Leche-La Serenisima', 'Lacteos', '110', 'Leche La Serenisima. cremosa y nutritiva, con toda la frescura y calidad que garantiza La Serenísima.'),
(10, 'Leche-Sancor', 'Lacteos', '90', 'Leche abundante en calorias y grasas consumidoras fatales'),
(11, 'Yogurt-Serenisima', 'Lacteos', '105', 'Yogurt rico en cremosidad alegre'),
(12, 'Yogurt-Sancor', 'Lacteos', '95', 'Yogurt firme de buen porte en vitaminas'),
(13, 'Salsa-Noel', 'Almacen', '112', 'salsa q acompaniara tus comidas'),
(14, 'Spaghetti-Matarazzo', 'Almacen', '90', 'Faciles de cocinar y rico sabor'),
(15, 'Coditos-Matarazzo', 'Almacen', '80', 'Todo lo q sea matarazzo es rico'),
(16, 'Harina 000-Blancaflor', 'Almacen', '55', 'La harina 000 Blancaflor es ideal para hacer pizzas o masas que precisen de levadura, dado que cuenta con ungran contenido de gluten y además retienen más gas, por lo que tienen mayor estructura. La harina 0000 es la más refinada de todas porque no tiene mucho gluten y siempre se utiliza para hacer '),
(17, 'Lays-Papas clasicas', 'Snacks', '110', 'Puro aire'),
(18, 'Pehuamar-Chisitos', 'Snacks', '80', 'Epicos'),
(21, 'Seven-UP', 'Bebidas', '115', 'Sentite arriba '),
(39, 'pan monarca', 'Panificados', '200', 'El pan mas rico de la city');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_data`
--

CREATE TABLE `users_data` (
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users_data`
--

INSERT INTO `users_data` (`email`, `password`, `rol`) VALUES
('benja@gmail.com', '$2y$10$WL.y2RqiptY2gpAsGfNhUOp1w.bJIpl/CEBayL0WTpCcds9JzrMqa', ''),
('adminB@gmail.com', '$2y$10$pAXj4EzVlUpDQSEjTcW7W.m0uRyhihwRsmFIT3zPbYmGIkSN6FmL.', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categorias`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`producto_id`),
  ADD KEY `categoria` (`categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `producto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`categorias`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
