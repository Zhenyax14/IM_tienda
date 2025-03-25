-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2025 a las 17:57:10
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `im_inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

CREATE TABLE `agentes` (
  `usuario` int(20) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `sueldo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agentes`
--

INSERT INTO `agentes` (`usuario`, `id_especialidad`, `sueldo`) VALUES
(1, 1, 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `id_contratos` int(10) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `id_tarifas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas`
--

CREATE TABLE `casas` (
  `codigo_propiedad` int(11) NOT NULL,
  `plantas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chalets`
--

CREATE TABLE `chalets` (
  `codigo_propiedad` int(11) NOT NULL,
  `tipo` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `usuario` int(20) NOT NULL,
  `pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprar_propiedad`
--

CREATE TABLE `comprar_propiedad` (
  `usuario` int(20) NOT NULL,
  `codigo_propiedad` int(11) NOT NULL,
  `fecha_venta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `id_contratos` int(10) NOT NULL,
  `precio_final` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_documento` int(11) NOT NULL,
  `documento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `duplex`
--

CREATE TABLE `duplex` (
  `codigo_propiedad` int(11) NOT NULL,
  `numero_plantas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id_especialidades` int(11) NOT NULL,
  `nombre` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id_especialidades`, `nombre`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formalizar`
--

CREATE TABLE `formalizar` (
  `usuario_propietario` int(20) NOT NULL,
  `usuario_cliente` int(20) NOT NULL,
  `usuario_agente` int(20) NOT NULL,
  `codigo_propiedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id_foto` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id_pais` int(11) NOT NULL,
  `nombre` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(20) NOT NULL,
  `contrasena` char(30) NOT NULL,
  `nombre` char(20) NOT NULL,
  `apellidos` char(20) NOT NULL,
  `email` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `contrasena`, `nombre`, `apellidos`, `email`) VALUES
(6, '$2y$10$75dLF.T4AVRREYsjER2QOuu', 'Marcus', 'Aurelius', 'imerador@gva.roma.it'),
(7, '$2y$10$2l7z3V2kSGXMge30SJT/oeL', 'Lanius', 'Antoninus', 'lanius@legatus.gva.r'),
(8, '$2y$10$EusSDJ9yF5QyJZ6GIooXuOL', 'Marina', 'Chuckcha', 'cocoloco@cuchka.ru'),
(9, '$2y$10$VLy3OmazpJuCTfAxJUZ1OuM', 'Astr0@buel0', 'C0smico', 'lipidos@peptid.es'),
(10, '$2y$10$DrRkEX6T.SYP1afP2UgyPO3', 'Sus', 'Amogus', 'susus@amogus.kek'),
(11, '$2y$10$4.N0nEi7rRIZxwZ.A2MAeu6', 'Saaa', 'Vaaa', 'adsadasd@asd.asda'),
(12, '$2y$10$ZdiTAPmXPM1ZvRMs9pdm1.J', '1231asda', 'asdsdad', 'adasdasd@ads.s');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `codigo_propiedad` int(11) NOT NULL,
  `piso` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `metros` double NOT NULL,
  `precio` double NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_creacion` datetime DEFAULT current_timestamp(),
  `fecha_mod` datetime NOT NULL DEFAULT current_timestamp(),
  `id_tipos` int(11) NOT NULL,
  `usuario_agente` int(25) NOT NULL,
  `thumbnail` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id`, `titulo`, `metros`, `precio`, `descripcion`, `fecha_creacion`, `fecha_mod`, `id_tipos`, `usuario_agente`, `thumbnail`) VALUES
(5, 'Cabaña ACTUALIZADA 2', 120, 350000000, 'Cabaña rústica en las montañas, perfecta para desconectar del estrés de la ciudad. Ahora más cara que nunca', '2025-03-03 14:03:37', '2025-03-03 14:03:37', 1, 1, NULL),
(6, 'Loft Urbano', 100, 400000, 'Loft moderno en el corazón de la ciudad, con techos altos y espacios abiertos.', '2025-03-03 14:03:37', '2025-03-03 14:03:37', 1, 1, NULL),
(7, 'Casa de Campo', 600, 700000, 'Casa de campo con un gran jardín y piscina, en un entorno tranquilo y natural.', '2025-03-03 14:03:37', '2025-03-03 14:03:37', 1, 1, NULL),
(8, 'Piso en la Playa', 90, 500000, 'Piso en la costa, con vistas al mar y acceso directo a la playa.', '2025-03-03 14:03:37', '2025-03-03 14:03:37', 1, 1, NULL),
(9, 'Chalet de Lujo', 300, 2000000, 'Chalet con piscina infinita, jardín extenso y diseño arquitectónico moderno.', '2025-03-03 14:03:37', '2025-03-03 14:03:37', 1, 1, NULL),
(10, 'Departamento Dúplex', 110, 350000, 'Departamento de dos pisos con balcones privados y acabados de lujo.', '2025-03-03 14:03:37', '2025-03-03 14:03:37', 1, 1, NULL),
(11, 'Casa Colonial', 450, 850000, 'Casa con estilo colonial, jardines amplios y una piscina elegante.', '2025-03-03 14:03:37', '2025-03-03 14:03:37', 1, 1, NULL),
(12, 'Estudio Minimalista M0dificado', 50, 150000, 'Grande estudio minimalista, ideal para personas solas o parejas jóvenes.', '2025-03-03 14:03:37', '2025-03-03 14:03:37', 1, 1, NULL),
(14, 'Casa creada con seguridad prefabricada porton gran', 0, 10000000, 'Precios han subido, es una locura', '2025-03-09 14:58:09', '2025-03-09 14:58:09', 1, 1, NULL),
(15, 'UTF 8 soportará ruso?', 0, 121, 'Проверим', '2025-03-09 15:13:18', '2025-03-09 15:13:18', 1, 1, NULL),
(20, 'Disk image', 123123, 123312, 'Es test image', '2025-03-09 17:50:53', '2025-03-09 17:50:53', 1, 1, ''),
(21, 'Si', 123213, 0, 'adaaaaaaaaaa', '2025-03-09 17:52:31', '2025-03-09 17:52:31', 1, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `usuario` int(20) NOT NULL,
  `residente_urbanizacion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id_tags` int(11) NOT NULL,
  `nombre` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `id_tarifas` int(10) NOT NULL,
  `nombre` char(20) NOT NULL,
  `valor_descuento` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tener_documentos`
--

CREATE TABLE `tener_documentos` (
  `id_documento` int(11) NOT NULL,
  `codigo_propiedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tener_fotos`
--

CREATE TABLE `tener_fotos` (
  `codigo_propiedad` int(11) NOT NULL,
  `id_fotos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tener_propiedad`
--

CREATE TABLE `tener_propiedad` (
  `usuario` int(20) NOT NULL,
  `codigo_propiedad` int(11) NOT NULL,
  `años_en_propiedad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tener_tags`
--

CREATE TABLE `tener_tags` (
  `id_tag` int(11) NOT NULL,
  `codigo_propiedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tener_videos`
--

CREATE TABLE `tener_videos` (
  `codigo_propiedad` int(11) NOT NULL,
  `id_videos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id_tipo` int(11) NOT NULL,
  `tipo` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id_tipo`, `tipo`) VALUES
(1, 'casa prefabricada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_contratos` int(10) NOT NULL,
  `impuestos` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `video` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`usuario`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `especialidad` (`id_especialidad`);

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`id_contratos`),
  ADD KEY `id_contratos` (`id_contratos`),
  ADD KEY `id_tarifas` (`id_tarifas`);

--
-- Indices de la tabla `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`codigo_propiedad`),
  ADD KEY `codigo_propiedad` (`codigo_propiedad`);

--
-- Indices de la tabla `chalets`
--
ALTER TABLE `chalets`
  ADD PRIMARY KEY (`codigo_propiedad`),
  ADD KEY `codigo_propiedad` (`codigo_propiedad`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`usuario`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `pais` (`pais`);

--
-- Indices de la tabla `comprar_propiedad`
--
ALTER TABLE `comprar_propiedad`
  ADD PRIMARY KEY (`usuario`,`codigo_propiedad`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `codigo_propiedad` (`codigo_propiedad`);

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id_contratos`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `duplex`
--
ALTER TABLE `duplex`
  ADD PRIMARY KEY (`codigo_propiedad`),
  ADD KEY `codigo_propiedad` (`codigo_propiedad`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id_especialidades`);

--
-- Indices de la tabla `formalizar`
--
ALTER TABLE `formalizar`
  ADD PRIMARY KEY (`usuario_propietario`,`usuario_cliente`,`usuario_agente`,`codigo_propiedad`),
  ADD KEY `usuario_propietario` (`usuario_propietario`),
  ADD KEY `usuario_cliente` (`usuario_cliente`),
  ADD KEY `usuario_agente` (`usuario_agente`),
  ADD KEY `codigo_propiedad` (`codigo_propiedad`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD PRIMARY KEY (`codigo_propiedad`),
  ADD KEY `codigo_propiedad` (`codigo_propiedad`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipos` (`id_tipos`),
  ADD KEY `usuario_agente` (`usuario_agente`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`usuario`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id_tags`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`id_tarifas`),
  ADD KEY `id_tarifas` (`id_tarifas`);

--
-- Indices de la tabla `tener_documentos`
--
ALTER TABLE `tener_documentos`
  ADD PRIMARY KEY (`id_documento`,`codigo_propiedad`),
  ADD KEY `id_documento` (`id_documento`),
  ADD KEY `codigo_propiedad` (`codigo_propiedad`);

--
-- Indices de la tabla `tener_fotos`
--
ALTER TABLE `tener_fotos`
  ADD PRIMARY KEY (`codigo_propiedad`,`id_fotos`),
  ADD KEY `codigo_propiedad` (`codigo_propiedad`),
  ADD KEY `id_fotos` (`id_fotos`);

--
-- Indices de la tabla `tener_propiedad`
--
ALTER TABLE `tener_propiedad`
  ADD PRIMARY KEY (`usuario`,`codigo_propiedad`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `codigo_propiedad` (`codigo_propiedad`);

--
-- Indices de la tabla `tener_tags`
--
ALTER TABLE `tener_tags`
  ADD PRIMARY KEY (`id_tag`,`codigo_propiedad`),
  ADD KEY `id_tag` (`id_tag`),
  ADD KEY `codigo_propiedad` (`codigo_propiedad`);

--
-- Indices de la tabla `tener_videos`
--
ALTER TABLE `tener_videos`
  ADD PRIMARY KEY (`codigo_propiedad`,`id_videos`),
  ADD KEY `codigo_propiedad` (`codigo_propiedad`),
  ADD KEY `id_videos` (`id_videos`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_contratos`),
  ADD KEY `id_contratos` (`id_contratos`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `id_contratos` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id_contratos` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `id_tarifas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_contratos` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD CONSTRAINT `agentes_ibfk_2` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id_especialidades`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD CONSTRAINT `alquiler_ibfk_1` FOREIGN KEY (`id_contratos`) REFERENCES `contratos` (`id_contratos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alquiler_ibfk_2` FOREIGN KEY (`id_tarifas`) REFERENCES `tarifas` (`id_tarifas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `casas`
--
ALTER TABLE `casas`
  ADD CONSTRAINT `casas_ibfk_1` FOREIGN KEY (`codigo_propiedad`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `chalets`
--
ALTER TABLE `chalets`
  ADD CONSTRAINT `chalets_ibfk_1` FOREIGN KEY (`codigo_propiedad`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`pais`) REFERENCES `paises` (`id_pais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comprar_propiedad`
--
ALTER TABLE `comprar_propiedad`
  ADD CONSTRAINT `comprar_propiedad_ibfk_1` FOREIGN KEY (`codigo_propiedad`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comprar_propiedad_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `clientes` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `duplex`
--
ALTER TABLE `duplex`
  ADD CONSTRAINT `duplex_ibfk_1` FOREIGN KEY (`codigo_propiedad`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `formalizar`
--
ALTER TABLE `formalizar`
  ADD CONSTRAINT `formalizar_ibfk_1` FOREIGN KEY (`codigo_propiedad`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formalizar_ibfk_2` FOREIGN KEY (`usuario_cliente`) REFERENCES `clientes` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formalizar_ibfk_3` FOREIGN KEY (`usuario_propietario`) REFERENCES `propietarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formalizar_ibfk_4` FOREIGN KEY (`usuario_agente`) REFERENCES `agentes` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD CONSTRAINT `pisos_ibfk_1` FOREIGN KEY (`codigo_propiedad`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `propiedades_ibfk_1` FOREIGN KEY (`id_tipos`) REFERENCES `tipos` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propiedades_ibfk_2` FOREIGN KEY (`usuario_agente`) REFERENCES `agentes` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tener_documentos`
--
ALTER TABLE `tener_documentos`
  ADD CONSTRAINT `tener_documentos_ibfk_1` FOREIGN KEY (`codigo_propiedad`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tener_documentos_ibfk_2` FOREIGN KEY (`id_documento`) REFERENCES `documentos` (`id_documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tener_fotos`
--
ALTER TABLE `tener_fotos`
  ADD CONSTRAINT `tener_fotos_ibfk_1` FOREIGN KEY (`codigo_propiedad`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tener_fotos_ibfk_2` FOREIGN KEY (`id_fotos`) REFERENCES `fotos` (`id_foto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tener_propiedad`
--
ALTER TABLE `tener_propiedad`
  ADD CONSTRAINT `tener_propiedad_ibfk_1` FOREIGN KEY (`codigo_propiedad`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tener_propiedad_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `propietarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tener_tags`
--
ALTER TABLE `tener_tags`
  ADD CONSTRAINT `tener_tags_ibfk_1` FOREIGN KEY (`id_tag`) REFERENCES `tags` (`id_tags`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tener_tags_ibfk_2` FOREIGN KEY (`codigo_propiedad`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tener_videos`
--
ALTER TABLE `tener_videos`
  ADD CONSTRAINT `tener_videos_ibfk_1` FOREIGN KEY (`codigo_propiedad`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tener_videos_ibfk_2` FOREIGN KEY (`id_videos`) REFERENCES `videos` (`id_video`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_contratos`) REFERENCES `contratos` (`id_contratos`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
