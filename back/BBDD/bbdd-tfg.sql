-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2023 a las 09:25:45
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

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `p_id` int(9) NOT NULL,
  `username` varchar(25) NOT NULL,
  `id_topic` int(5) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `img_name` varchar(25) DEFAULT NULL,
  `rating` int(9) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`p_id`, `username`, `id_topic`, `titulo`, `texto`, `img_name`, `rating`) VALUES
(22, 'Mesut Shentyurk', 2, 'Tecnologías Innovadoras', 'En este post se viene a hablar de Inteligencia Artificial, BlockChain, Hacking Ético, Realidad Virtual... Y mucho más!\r\nTe esperamos', 'tecnologia.jpg', 2311),
(23, 'Mesut Shentyurk', 1, 'Coches Extravagantes', 'Nuevamente en este post vamos a hablar sobre coches extravagantes, esta vez nos centraremos en el BMW M4!\r\nUno de los mejores de este año hasta el momento!', 'vehiculos.jpg', 4302),
(25, 'Victor Reyes', 5, 'Deportes en verano', 'Que mejor que empezar el veranos con deporte. Aquí vamos a hablar sobre hábitos saludables y ejercicios que nos ayudarán a mantenernos en la línea durante estos días! \r\nNo dudes en comentar!!', 'deportes.jpg', 87),
(27, 'Victor Reyes', 4, '¿Qué libros te recomiendo?', 'Hoy vamos a hablar sobre los que fueron y son, los mejores libros que jamás he leído. \r\nSin duda alguna pasaremos por diferentes géneros y todos entretenidos a su manera!', 'librosymedios.jpg', 148),
(29, 'Victor Reyes', 7, 'Mejora tu salud', 'La salud es un aspecto fundamental en nuestras vidas, ya que afecta nuestro bienestar físico, mental y emocional. Cuidar de nuestra salud nos permite disfrutar de una vida plena y activa, prevenir enfermedades y promover nuestro bienestar general. Únete a nuestro post para ayudar a otros!!', 'salud.jpg', 91),
(31, 'Mario Bazon', 8, 'Arte Contemporáneo', 'El arte es una manifestación humana que involucra la creación y apreciación de obras estéticas, estimulando la imaginación y el pensamiento crítico, y permitiendo explorar y comunicar ideas, emociones y experiencias de forma única y personal. A través del arte, se establece un puente entre la realidad y la imaginación, fomentando la belleza, la reflexión y la conexión entre las personas. Únete a nuestro post y averigua más.', 'arte.jpg', 473);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(3) NOT NULL,
  `name_rol` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `name_rol`, `description`) VALUES
(0, 'admin', 'Administrador de la página (front/back)'),
(1, 'Support', 'Este es el usuario de soporte de nuestra página'),
(3, 'User', 'Este sería un usuario/cliente normal de nuestra página');

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

--
-- Volcado de datos para la tabla `topics`
--

INSERT INTO `topics` (`id_topic`, `name`, `description`) VALUES
(0, 'Comida', 'Esta es la categoría de comida.'),
(1, 'Vehículos', 'Esta es la categoría de vehículos.'),
(2, 'Tecnología', 'Esta es la categoría de tecnología.'),
(3, 'Electrónica', 'Esta es la categoría de electrónica.'),
(4, 'Libros y Medios', 'Esta es la categoría de Libros y Medios.'),
(5, 'Deportes', 'Esta es la categoría de Deportes.'),
(6, 'Juegos', 'Esta es la categoría de Juegos.'),
(7, 'Salud', 'Esta es la categoría de Salud.'),
(8, 'Arte', 'Esta es la categoría de Arte.'),
(9, 'Alimentos', 'Esta es la categoría de Alimentos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `reg_date` date DEFAULT current_timestamp(),
  `role` int(2) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `email`, `pass`, `reg_date`, `role`) VALUES
('', '', '$2y$10$H3WGQeyoSN142Hqwj/Ieju.q1uGAJF2T6tKVp.712HxGHzZCN78B6', '2023-06-17', 3),
('admin', 'admin@admin', '$2y$10$DIMUgAskNu8s293lgLtlCuXuR9fTTNdDFe1yRXWP4UBJzKWtJJgwC', '2023-06-17', 0),
('Alexander Pérez', 'alecsamder@gmail.com', '$2y$10$O.vXxOAMpVbme.pVsfXZY.DFF1njsrlC26eLiqWA3Jkdk67zO8Z.q', '2023-06-17', 1),
('Juan Carlos', 'juanc@gmail.com', '$2y$10$hBPx1enVTgPmD6LXFXNLiOomFJYxsRsbHDSUIvCWZxBPVMUfJQysm', '2023-06-17', 3),
('Mario Bazon', 'mario@gmail.com', '$2y$10$lu32.CgExafYrT6AifEsNOOLNU0LZibc7Z0uREhAI9qVtxOluL/M.', '2023-06-17', 3),
('Mesut Shentyurk', 'mesut@gmail.com', '$2y$10$lTpUrQ36.Vh97CUCIqveUOSZLpFKaVTWuqcud.MoEQWG1hL/E9J3C', '2023-06-17', 3),
('Victor Reyes', 'victor@gmail.com', '$2y$10$bthnch6EpsogmcFbsLsBiOGg4B4J6MHSymmB35STEpGCv9a0qPM0W', '2023-06-17', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `titulo` (`titulo`),
  ADD KEY `FK_USERNAME` (`username`),
  ADD KEY `FK_TOPIC` (`id_topic`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`),
  ADD UNIQUE KEY `name_rol` (`name_rol`);

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
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `FK_ROLE` (`role`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `p_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_TOPIC` FOREIGN KEY (`id_topic`) REFERENCES `topics` (`id_topic`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_USERNAME` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

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
