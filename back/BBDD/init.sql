-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2023 a las 15:54:04
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbdd-tfg`
--
DROP DATABASE IF EXISTS `bbdd-tfg`;
CREATE DATABASE `bbdd-tfg`;
ALTER DATABASE `bbdd-tfg` CHARACTER SET utf8mb4;
ALTER DATABASE `bbdd-tfg` COLLATE utf8mb4_unicode_520_ci;
USE `bbdd-tfg`;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorías`
--

CREATE TABLE `categorías` (
  `id_category` int(5) NOT NULL,
  `name_category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(3) NOT NULL,
  `name_rol` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ti_topics-categories`
--

CREATE TABLE `ti_topics-categories` (
  `id_topic` int(4) NOT NULL,
  `category` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ti_users-topics`
--

CREATE TABLE `ti_users-topics` (
  `user` varchar(25) NOT NULL,
  `id_topic` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `topics`
--

CREATE TABLE `topics` (
  `id_topic` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `reg_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorías`
--
ALTER TABLE `categorías`
  ADD PRIMARY KEY (`id_category`),
  ADD UNIQUE KEY `name_category` (`name_category`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`),
  ADD UNIQUE KEY `name_rol` (`name_rol`);

--
-- Indices de la tabla `ti_topics-categories`
--
ALTER TABLE `ti_topics-categories`
  ADD UNIQUE KEY `id_topic` (`id_topic`,`category`),
  ADD KEY `FK_CATEGORY` (`category`);

--
-- Indices de la tabla `ti_users-topics`
--
ALTER TABLE `ti_users-topics`
  ADD UNIQUE KEY `user` (`user`,`id_topic`),
  ADD KEY `FK_TOPICS` (`id_topic`);

--
-- Indices de la tabla `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id_topic`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`,`pass`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `FK_ROLE` (`role`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ti_topics-categories`
--
ALTER TABLE `ti_topics-categories`
  ADD CONSTRAINT `FK_CATEGORY` FOREIGN KEY (`category`) REFERENCES `categorías` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TOPIC` FOREIGN KEY (`id_topic`) REFERENCES `topics` (`id_topic`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ti_users-topics`
--
ALTER TABLE `ti_users-topics`
  ADD CONSTRAINT `FK_TOPICS` FOREIGN KEY (`id_topic`) REFERENCES `topics` (`id_topic`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_USER` FOREIGN KEY (`user`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_ROLE` FOREIGN KEY (`role`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
