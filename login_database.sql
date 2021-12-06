-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2021 a las 07:49:15
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_matricula`
--

CREATE TABLE `registro_matricula` (
  `id-matricula` int(11) NOT NULL,
  `nombres_apellidos` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `dni` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ciclo_turno` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `carrera_prof` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `voucher_pago` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `fecha_registro_matricula` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `registro_matricula`
--

INSERT INTO `registro_matricula` (`id-matricula`, `nombres_apellidos`, `dni`, `ciclo_turno`, `carrera_prof`, `fecha_nac`, `email`, `voucher_pago`, `celular`, `mensaje`, `fecha_registro_matricula`) VALUES
(1, 'Carlos Santisteban', '76043500', 'ciclo1-d', 'computacion-e-informatica', '2021-11-02', 'santistebancalzadoc@gmail.com', 'Final Exam - I06.pdf', '912767102', 'asddadsa', NULL),
(2, 'Carlos Santisteban', '76043500', 'ciclo1-d', 'computacion-e-informatica', '2021-11-01', 'santistebancalzadoc@gmail.com', 'Final Exam - I06.pdf', '912767102', 'asdsadad', '2021-11-30 06:04:46'),
(3, 'Carlos Santisteban', '76043500', 'ciclo1-d', 'computacion-e-informatica', '2021-11-01', 'santistebancalzadoc@gmail.com', '151605477_4465896140123480_8314134590683271387_o.jpg', '912767102', 'asdadsad', '2021-11-30 06:09:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `fecha_registro`) VALUES
(1, 'grupotecnitech@gmail.com', '$2y$10$xasJhyyCmnvZePs4PLDoru3YR6.k2X1Hz3kUuiZHYrzL6a4jT9ZfW', '2021-11-28 22:47:16'),
(2, 'grupotecnitech@gmail.com', '$2y$10$DZjBNfDmvojmijlq32uufeTmpkJKOGtpvIPdqCfxySgbQkXIBTB7u', '2021-11-28 22:51:22'),
(3, 'rodrigosantisteban25@gmail.com', '$2y$10$5EIKiHNWlgSEV.bNatfXKO2y7bK2/v9fFJnHlGDKVin8QTeN2ezUa', '2021-11-28 23:07:11'),
(4, 'pelota_2017@hotmail.com', '$2y$10$KToD6oqdOLeP08.wv1d50OFrMFy7TSIMSxsWTrxfi3.gnzbFZfOqS', '2021-11-28 23:28:40'),
(5, 'carlos@gmail.com', '$2y$10$i8UUpdq57XHWRO4yVyWmueXtTB5CKedYlCGAG1k.Q8heD/kyK0DXG', '2021-11-29 02:08:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_matricula`
--
ALTER TABLE `registro_matricula`
  ADD PRIMARY KEY (`id-matricula`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_matricula`
--
ALTER TABLE `registro_matricula`
  MODIFY `id-matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
