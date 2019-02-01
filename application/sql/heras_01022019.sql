-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2019 a las 17:11:01
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `heras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activity`
--

CREATE TABLE `activity` (
  `idActivity` int(11) NOT NULL,
  `activity_date` date NOT NULL,
  `activity_description` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `activity_category` int(11) NOT NULL,
  `activity_subcategory` int(11) NOT NULL,
  `activity_amount` float NOT NULL,
  `activity_creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activity_lastmodificationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Activity log';

--
-- Volcado de datos para la tabla `activity`
--

INSERT INTO `activity` (`idActivity`, `activity_date`, `activity_description`, `activity_category`, `activity_subcategory`, `activity_amount`, `activity_creationdate`, `activity_lastmodificationdate`) VALUES
(1, '2018-11-30', 'Prueba insertar concepto descripción', 1, 1, 240.94, '2018-12-14 16:41:31', '2018-12-14 16:41:31'),
(10, '2018-11-29', 'Descripción', 1, 1, 62.35, '2018-12-14 16:41:31', '2018-12-14 17:47:27'),
(12, '2018-11-29', 'Venancio Rodríguez López', 1, 2, 236, '2018-12-14 16:41:31', '2019-01-02 19:26:55'),
(14, '2018-11-29', 'Entrega a cuenta para el Economato Lope Sancho Beltranejo', 1, 1, 456.89, '2018-12-14 16:41:31', '2018-12-14 17:31:24'),
(20, '2018-11-29', '0', 1, 1, 300, '2018-12-14 16:41:31', '2018-12-14 16:41:31'),
(21, '2018-11-29', '0', 1, 1, 300, '2018-12-14 16:41:31', '2018-12-14 16:41:31'),
(24, '2018-11-29', 'Javier Gómez Alvea Recibo de agua y luz noviembre 2018', 1, 1, 124.65, '2018-12-14 16:41:31', '2018-12-14 16:56:09'),
(28, '2018-11-29', 'prueba insert 5555', 0, 1, 350, '2018-12-14 16:41:31', '2018-12-14 16:41:31'),
(29, '2018-12-06', 'prueba insert 555', 0, 0, 350, '2018-12-14 16:41:31', '2018-12-14 16:41:31'),
(30, '2018-12-06', 'prueba insert 55', 1, 2, 1012, '2018-12-14 16:41:31', '2018-12-14 16:41:31'),
(32, '2018-12-07', 'prueba insert 5556785', 2, 2, 2564, '2018-12-14 16:41:31', '2018-12-14 16:41:31'),
(34, '2018-12-07', 'prueba insert 22222', 2, 2, 2345, '2018-12-14 16:41:31', '2018-12-14 16:41:31'),
(35, '2018-11-27', '23/18 Expediente Bienvenido Espinosa Cano Agua', 1, 2, 2345, '2018-12-14 16:41:31', '2018-12-14 16:41:31'),
(36, '2018-11-26', 'Descripción345', 1, 1, 236, '2019-01-02 15:53:05', '2019-01-02 15:53:05'),
(37, '2018-11-12', 'prueba insert 4', 1, 4, 2345, '2019-01-02 16:42:29', '2019-01-03 17:45:54'),
(38, '0000-00-00', 'prueba insert 5', 1, 2, 1012, '2019-01-02 16:46:20', '2019-01-03 17:45:45'),
(39, '2019-01-04', 'Prueba Go Back button', 1, 1, 2564, '2019-01-02 16:47:00', '2019-01-03 12:48:34'),
(40, '2018-11-19', 'prueba insert 3456789999', 1, 1, 2564, '2019-01-02 16:48:31', '2019-01-03 13:37:32'),
(41, '2018-11-27', 'prueba insert 34567890\'', 2, 2, 243569000, '2019-01-02 19:51:46', '2019-01-02 19:51:46'),
(42, '2018-11-28', 'prueba insert 55qwetyruii', 2, 2, 167, '2019-01-02 19:56:25', '2019-01-02 19:56:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `idArea` int(11) NOT NULL,
  `area_name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `area_creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `area_lastmodificationdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`idArea`, `area_name`, `area_creationdate`, `area_lastmodificationdate`) VALUES
(1, 'Educativa', '2019-01-29 23:10:43', '2019-01-30 19:39:13'),
(2, 'Salud', '2019-01-29 23:10:43', '2019-01-29 23:16:26'),
(3, 'Conventos y asociaciones', '2019-01-30 19:47:37', '2019-01-30 19:48:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `idCategory` int(11) NOT NULL,
  `category_name` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `category_creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_lastmodificationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`idCategory`, `category_name`, `category_creationdate`, `category_lastmodificationdate`) VALUES
(1, 'Hipotecas y alquileres', '2019-01-03 17:40:01', '2019-01-03 17:40:01'),
(2, 'Comunidad y aguas', '2019-01-03 17:40:01', '2019-01-03 17:40:01'),
(4, 'Nueva categoría', '2019-01-03 17:40:01', '2019-01-03 17:40:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'read_only_users', 'Read Only Users');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `login` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modules`
--

CREATE TABLE `modules` (
  `idModule` int(11) NOT NULL,
  `module_name` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `module_code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `module_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `modules`
--

INSERT INTO `modules` (`idModule`, `module_name`, `module_code`, `module_status`) VALUES
(1, 'Actividad', 'activity', 1),
(2, 'Voluntarios', 'volunteers', 1),
(7, 'Despensa', 'pantry', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories`
--

CREATE TABLE `subcategories` (
  `idSubcategory` int(11) NOT NULL,
  `subcategory` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `subcategory_creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subcategory_lastmodificationdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subcategories`
--

INSERT INTO `subcategories` (`idSubcategory`, `subcategory`, `subcategory_creationdate`, `subcategory_lastmodificationdate`) VALUES
(1, 'Hermanos', '2019-01-03 16:40:06', '2019-01-03 17:27:16'),
(2, 'Feligreses', '2019-01-03 16:40:06', '0000-00-00 00:00:00'),
(4, 'Nueva subcategoría', '2019-01-03 17:31:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(254) COLLATE utf8_spanish_ci NOT NULL,
  `activation_selector` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activation_code` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `forgotten_password_selector` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `forgotten_password_code` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `remember_code` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$v9VVlq1nVjqQeoNbKFqvheUxGIHOkiH.tXO5mJZgWRUKclX.LjUJ6', 'admin@admin.com', NULL, '', NULL, NULL, NULL, '34455c9d7cd2872ae6c573c8ff02f8aedb4a5984', '$2y$10$VE.5QC/f.2hl0IdBaVGYFu8rLosOm.QuLOlTubDqEwkdeYiwS3WyC', 1268889823, 1549037318, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'bienvenido.espinosa@gmail.com', '$2y$10$/BQmNDGDiSjA7pkI7xbVAO7H4SkEI2pngLbOypDJCXj7fJHp3/qeq', 'bienvenido.espinosa@gmail.com', NULL, NULL, '4589da9e5dfbe9958954', '$2y$10$f42qKhylC1uPNrssE1uZfOpqGeStz0PXeWqMV31OiYSJjFIIS72ta', 1546527482, NULL, NULL, 1544856593, NULL, 1, 'Bienvenido', 'Espinosa Cano', 'HM', '686269326');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `volunteers`
--

CREATE TABLE `volunteers` (
  `idVolunteer` int(11) NOT NULL,
  `volunteer_firstname` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `volunteer_lastname` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `volunteer_email` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `volunteer_phone` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `volunteer_profession` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `volunteer_occupation` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `volunteer_preferences` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `volunteer_availability` text COLLATE utf8_spanish_ci NOT NULL,
  `volunteer_experience` text COLLATE utf8_spanish_ci NOT NULL,
  `volunteer_birthdate` date NOT NULL,
  `volunteer_creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `volunteer_lastmodificationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `volunteer_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `volunteers`
--

INSERT INTO `volunteers` (`idVolunteer`, `volunteer_firstname`, `volunteer_lastname`, `volunteer_email`, `volunteer_phone`, `volunteer_profession`, `volunteer_occupation`, `volunteer_preferences`, `volunteer_availability`, `volunteer_experience`, `volunteer_birthdate`, `volunteer_creationdate`, `volunteer_lastmodificationdate`, `volunteer_status`) VALUES
(1, 'Alfredo', 'Pérez Sánchez', 'alfredo.perez@gmail.com', '654989898', 'Estudiante', 'ocupación', '0', 'Los martes y jueves de 15h. a 20h. ', '', '1986-03-20', '0000-00-00 00:00:00', '2018-12-14 15:03:23', 0),
(2, 'Bienvenido ', 'Espinosa Cano', 'bienvenido.espinosa@gmail.com', '686269326', 'Ingeniero de Telecomunicaciones', 'Director de Operaciones Adjunto en empresa de Info', '0', 'las tardes de 11 a 12', 'Experiencias de voluntariado en la Cofradía Ecce Homo de Orihuela. ', '1977-01-11', '0000-00-00 00:00:00', '2018-12-14 15:32:49', 0),
(3, 'Luis Manuel  ', 'Del Toro Vázquez', 'luismanueldeltoro@yahoo.es', '686269326', 'Profesión', 'Ocupación', '0', 'las tardes de 11 a 12', 'experiencia\r\n4', '1954-06-03', '0000-00-00 00:00:00', '2018-12-14 15:39:27', 0),
(4, 'Francisco Javier', 'Cano Vicente ', 'fcanovic@hotmail.com', '686269326', 'Profesión', 'Ocupación', '0', 'las tardes de 11 a 12', 'experiencia\r\n4', '1967-04-19', '0000-00-00 00:00:00', '2018-12-14 15:40:48', 0),
(6, 'Pedro María', 'Fernández Ortuño', 'pedrofernandez@gmail.com', '686269326', 'Profesión', 'Ocupación', '0', 'las tardes de 11 a 12', 'Experiencia', '1952-11-15', '0000-00-00 00:00:00', '2018-12-14 13:37:21', 0),
(7, 'Óscar', 'Ruiz De la Peña ', 'delapena@gmail.com', '686269326', 'Profesión', 'Ocupación', '0', 'las tardes de 11 a 12', 'experiencia\r\n4', '1962-12-13', '0000-00-00 00:00:00', '2018-12-14 15:29:08', 0),
(9, 'José', ' Pérez Pérez', 'jperezp@ppp.com', '686269326', 'profesión', 'Preferencias', '0', 'Disponibilidad', 'Experiencia', '1998-12-14', '2018-12-14 12:46:33', '2018-12-14 15:43:17', 0),
(11, 'Bienvenido', 'Espinosa Cano', 'bienvenido.espinosa@gmail.com', '686269326', 'Profesión', 'Ocupación', 'Preferencias', 'Disponibilidad', 'Experiencia', '2019-01-05', '2019-01-03 13:58:16', '2019-01-03 13:58:16', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`idActivity`),
  ADD KEY `activity_category` (`activity_category`),
  ADD KEY `activity_subcategories` (`activity_subcategory`) USING BTREE;

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD UNIQUE KEY `idArea` (`idArea`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`idModule`);

--
-- Indices de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`idSubcategory`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indices de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indices de la tabla `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`idVolunteer`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activity`
--
ALTER TABLE `activity`
  MODIFY `idActivity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `idArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modules`
--
ALTER TABLE `modules`
  MODIFY `idModule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `idSubcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `idVolunteer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
