-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2024 a las 18:53:47
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gymapp4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_muscular`
--

CREATE TABLE `grupo_muscular` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grupo_muscular`
--

INSERT INTO `grupo_muscular` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'hombro', 'El hombro extiende desde el borde inferior de la clavícula hasta la apófisis coracoides de la escápula.', 'hombro.png'),
(2, 'pecho', 'El pecho​ se sitúa en la parte frontal del cuerpo humano, en oposición a la espalda y comprende la región desde la base del cuello y los hombros hasta el abdomen. ', 'pecho.png'),
(3, 'espalda', 'La espalda es la parte posterior del cuerpo humano que va de la base del cuello y hombros hasta la cintura.', 'espalda.png'),
(4, 'pierna', 'La pierna es todo aquello que se encuentra entre la rodilla y la articulación del tobillo.', 'pierna.png'),
(5, 'bíceps', 'El bíceps  se ubica superficial a los músculos braquial y coracobraquial, y básicamente forma el lado anterior del brazo.', 'biceps.png'),
(6, 'tríceps', 'El tríceps es un músculo grande que ocupa aproximadamente dos tercios de la parte superior del brazo, extendiéndose por la parte posterior del húmero, el hueso del brazo.', 'triceps.png'),
(7, 'abdominal', ' El abdominal encuentra situada entre el tórax, hacia arriba, y la pelvis, hacia abajo.', 'abdominal.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupo_muscular`
--
ALTER TABLE `grupo_muscular`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupo_muscular`
--
ALTER TABLE `grupo_muscular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
