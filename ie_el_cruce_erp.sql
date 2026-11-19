-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2026 a las 17:48:08
-- Versión del servidor: 10.4.32-MariaDB-log
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ie_el_cruce_erp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `grado_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` enum('presente','ausente','tardanza','justificado') DEFAULT 'presente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`id`, `estudiante_id`, `curso_id`, `grado_id`, `fecha`, `estado`) VALUES
(1, 16, 1, 1, '2026-11-19', 'presente'),
(2, 17, 2, 6, '2026-11-19', 'tardanza'),
(3, 1, 1, 1, '2026-11-19', 'presente'),
(4, 2, 1, 6, '2026-11-19', 'tardanza'),
(5, 3, 1, 11, '2026-11-19', 'presente'),
(6, 4, 1, 16, '2026-11-19', 'presente'),
(7, 5, 1, 19, '2026-11-19', 'tardanza'),
(8, 36, 1, 1, '2026-11-19', 'presente'),
(9, 37, 1, 1, '2026-11-19', 'presente'),
(10, 38, 1, 1, '2026-11-19', 'tardanza'),
(11, 39, 1, 2, '2026-11-19', 'presente'),
(12, 40, 1, 2, '2026-11-19', 'presente'),
(13, 41, 1, 2, '2026-11-19', 'tardanza'),
(14, 42, 1, 3, '2026-11-19', 'presente'),
(15, 43, 1, 3, '2026-11-19', 'presente'),
(16, 44, 1, 3, '2026-11-19', 'tardanza'),
(17, 45, 1, 4, '2026-11-19', 'presente'),
(18, 46, 1, 4, '2026-11-19', 'presente'),
(19, 47, 1, 4, '2026-11-19', 'tardanza'),
(20, 48, 1, 5, '2026-11-19', 'presente'),
(21, 49, 1, 5, '2026-11-19', 'presente'),
(22, 50, 1, 5, '2026-11-19', 'tardanza'),
(23, 51, 1, 6, '2026-11-19', 'presente'),
(24, 52, 1, 6, '2026-11-19', 'presente'),
(25, 53, 1, 6, '2026-11-19', 'tardanza'),
(26, 54, 1, 7, '2026-11-19', 'presente'),
(27, 55, 1, 7, '2026-11-19', 'presente'),
(28, 56, 1, 7, '2026-11-19', 'tardanza'),
(29, 57, 1, 8, '2026-11-19', 'presente'),
(30, 58, 1, 8, '2026-11-19', 'presente'),
(31, 59, 1, 8, '2026-11-19', 'tardanza'),
(32, 60, 1, 9, '2026-11-19', 'presente'),
(33, 61, 1, 9, '2026-11-19', 'presente'),
(34, 62, 1, 9, '2026-11-19', 'tardanza'),
(35, 63, 1, 10, '2026-11-19', 'presente'),
(36, 64, 1, 10, '2026-11-19', 'presente'),
(37, 65, 1, 10, '2026-11-19', 'tardanza'),
(38, 66, 1, 11, '2026-11-19', 'presente'),
(39, 67, 1, 11, '2026-11-19', 'presente'),
(40, 68, 1, 11, '2026-11-19', 'tardanza'),
(41, 69, 1, 12, '2026-11-19', 'presente'),
(42, 70, 1, 12, '2026-11-19', 'presente'),
(43, 71, 1, 12, '2026-11-19', 'tardanza'),
(44, 72, 1, 13, '2026-11-19', 'presente'),
(45, 73, 1, 13, '2026-11-19', 'presente'),
(46, 74, 1, 13, '2026-11-19', 'tardanza'),
(47, 75, 1, 14, '2026-11-19', 'presente'),
(48, 76, 1, 14, '2026-11-19', 'presente'),
(49, 77, 1, 14, '2026-11-19', 'tardanza'),
(50, 78, 1, 15, '2026-11-19', 'presente'),
(51, 79, 1, 15, '2026-11-19', 'presente'),
(52, 80, 1, 15, '2026-11-19', 'tardanza'),
(53, 81, 1, 16, '2026-11-19', 'presente'),
(54, 82, 1, 16, '2026-11-19', 'presente'),
(55, 83, 1, 16, '2026-11-19', 'tardanza'),
(56, 84, 1, 17, '2026-11-19', 'presente'),
(57, 85, 1, 17, '2026-11-19', 'presente'),
(58, 86, 1, 17, '2026-11-19', 'tardanza'),
(59, 87, 1, 18, '2026-11-19', 'presente'),
(60, 88, 1, 18, '2026-11-19', 'presente'),
(61, 89, 1, 18, '2026-11-19', 'tardanza'),
(62, 90, 1, 19, '2026-11-19', 'presente'),
(63, 91, 1, 19, '2026-11-19', 'presente'),
(64, 92, 1, 19, '2026-11-19', 'tardanza'),
(65, 93, 1, 20, '2026-11-19', 'presente'),
(66, 94, 1, 20, '2026-11-19', 'presente'),
(67, 95, 1, 20, '2026-11-19', 'tardanza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `grado_id` int(11) NOT NULL,
  `bimestre` enum('I','II','III','IV') NOT NULL,
  `nota` varchar(2) NOT NULL,
  `anio_escolar` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id`, `estudiante_id`, `curso_id`, `grado_id`, `bimestre`, `nota`, `anio_escolar`) VALUES
(1, 16, 1, 1, 'I', 'AD', '2024'),
(2, 17, 2, 6, 'I', 'A', '2024'),
(3, 18, 6, 11, 'I', 'B', '2024'),
(4, 19, 4, 16, 'II', 'AD', '2024'),
(5, 22, 7, 2, 'II', 'B', '2026'),
(6, 23, 7, 2, 'II', 'A', '2026'),
(7, 21, 7, 2, 'II', 'A', '2026'),
(8, 1, 1, 1, 'I', 'A', '2024'),
(9, 2, 1, 6, 'I', 'B', '2024'),
(10, 3, 1, 11, 'I', 'C', '2024'),
(11, 4, 1, 16, 'I', 'AD', '2024'),
(12, 5, 1, 19, 'I', 'A', '2024'),
(13, 36, 1, 1, 'I', 'AD', '2024'),
(14, 37, 1, 1, 'I', 'A', '2024'),
(15, 38, 1, 1, 'I', 'B', '2024'),
(16, 39, 1, 2, 'I', 'C', '2024'),
(17, 40, 1, 2, 'I', 'AD', '2024'),
(18, 41, 1, 2, 'I', 'A', '2024'),
(19, 42, 1, 3, 'I', 'B', '2024'),
(20, 43, 1, 3, 'I', 'C', '2024'),
(21, 44, 1, 3, 'I', 'AD', '2024'),
(22, 45, 1, 4, 'I', 'A', '2024'),
(23, 46, 1, 4, 'I', 'B', '2024'),
(24, 47, 1, 4, 'I', 'C', '2024'),
(25, 48, 1, 5, 'I', 'AD', '2024'),
(26, 49, 1, 5, 'I', 'A', '2024'),
(27, 50, 1, 5, 'I', 'B', '2024'),
(28, 51, 1, 6, 'I', 'C', '2024'),
(29, 52, 1, 6, 'I', 'AD', '2024'),
(30, 53, 1, 6, 'I', 'A', '2024'),
(31, 54, 1, 7, 'I', 'B', '2024'),
(32, 55, 1, 7, 'I', 'C', '2024'),
(33, 56, 1, 7, 'I', 'AD', '2024'),
(34, 57, 1, 8, 'I', 'A', '2024'),
(35, 58, 1, 8, 'I', 'B', '2024'),
(36, 59, 1, 8, 'I', 'C', '2024'),
(37, 60, 1, 9, 'I', 'AD', '2024'),
(38, 61, 1, 9, 'I', 'A', '2024'),
(39, 62, 1, 9, 'I', 'B', '2024'),
(40, 63, 1, 10, 'I', 'C', '2024'),
(41, 64, 1, 10, 'I', 'AD', '2024'),
(42, 65, 1, 10, 'I', 'A', '2024'),
(43, 66, 1, 11, 'I', 'B', '2024'),
(44, 67, 1, 11, 'I', 'C', '2024'),
(45, 68, 1, 11, 'I', 'AD', '2024'),
(46, 69, 1, 12, 'I', 'A', '2024'),
(47, 70, 1, 12, 'I', 'B', '2024'),
(48, 71, 1, 12, 'I', 'C', '2024'),
(49, 72, 1, 13, 'I', 'AD', '2024'),
(50, 73, 1, 13, 'I', 'A', '2024'),
(51, 74, 1, 13, 'I', 'B', '2024'),
(52, 75, 1, 14, 'I', 'C', '2024'),
(53, 76, 1, 14, 'I', 'AD', '2024'),
(54, 77, 1, 14, 'I', 'A', '2024'),
(55, 78, 1, 15, 'I', 'B', '2024'),
(56, 79, 1, 15, 'I', 'C', '2024'),
(57, 80, 1, 15, 'I', 'AD', '2024'),
(58, 81, 1, 16, 'I', 'A', '2024'),
(59, 82, 1, 16, 'I', 'B', '2024'),
(60, 83, 1, 16, 'I', 'C', '2024'),
(61, 84, 1, 17, 'I', 'AD', '2024'),
(62, 85, 1, 17, 'I', 'A', '2024'),
(63, 86, 1, 17, 'I', 'B', '2024'),
(64, 87, 1, 18, 'I', 'C', '2024'),
(65, 88, 1, 18, 'I', 'AD', '2024'),
(66, 89, 1, 18, 'I', 'A', '2024'),
(67, 90, 1, 19, 'I', 'B', '2024'),
(68, 91, 1, 19, 'I', 'C', '2024'),
(69, 92, 1, 19, 'I', 'AD', '2024'),
(70, 93, 1, 20, 'I', 'A', '2024'),
(71, 94, 1, 20, 'I', 'B', '2024'),
(72, 95, 1, 20, 'I', 'C', '2024');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `area` varchar(50) DEFAULT NULL,
  `horas_semanales` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `area`, `horas_semanales`) VALUES
(1, 'Matemática', 'Matemática', 5),
(2, 'Comunicación', 'Comunicación', 5),
(3, 'Segunda Lengua', 'Idiomas', 2),
(4, 'Inglés', 'Idiomas', 3),
(5, 'Ciencias Sociales', 'Sociales', 4),
(6, 'Ciencia y Tecnología', 'Ciencia', 4),
(7, 'Arte y Cultura', 'Arte', 2),
(8, 'Educación Física', 'Física', 2),
(9, 'Tutoría', 'Tutoría', 1),
(10, 'Religión', 'Religión', 2),
(11, 'Historia', 'Sociales', 2),
(12, 'EPT', 'Tecnología', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `especialidad` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `dni`, `nombres`, `apellidos`, `especialidad`, `telefono`, `email`, `estado`) VALUES
(1, '40123456', 'Carlos Alberto', 'Mendoza Torres', 'Matemática', '988877766', 'cmendoza@elcruce.edu.pe', 'activo'),
(2, '41234567', 'Ana Lucía', 'Flores Silva', 'Comunicación', '977766655', 'aflores@elcruce.edu.pe', 'activo'),
(3, '42345678', 'Jorge Luis', 'Vargas Castro', 'Ciencia y Tecnología', '966655544', 'jvargas@elcruce.edu.pe', 'activo'),
(4, '43456789', 'Elena', 'Ríos Paz', 'Inglés', '955444333', 'erios@elcruce.edu.pe', 'activo'),
(5, '50123456', 'Carlos Alberto', 'Mendoza Torres', 'Matemática', '988877766', 'cmendoza2@elcruce.edu.pe', 'activo'),
(6, '51234567', 'Ana Lucía', 'Flores Silva', 'Comunicación', '977766655', 'aflores2@elcruce.edu.pe', 'activo'),
(7, '52345678', 'Jorge Luis', 'Vargas Castro', 'Ciencia y Tecnología', '966655544', 'jvargas2@elcruce.edu.pe', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT 'M',
  `telefono` varchar(15) DEFAULT NULL,
  `apoderado` varchar(100) DEFAULT NULL,
  `grado_id` int(11) DEFAULT NULL,
  `estado` enum('activo','retirado','egresado') DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `dni`, `nombres`, `apellidos`, `fecha_nacimiento`, `sexo`, `telefono`, `apoderado`, `grado_id`, `estado`) VALUES
(1, '71234567', 'Juan Carlos', 'Pérez Gómez', '2010-05-14', 'M', '987654321', 'Rosa Gómez', 1, 'activo'),
(2, '72345678', 'María Fernanda', 'Quispe Mamani', '2009-08-22', 'F', '912345678', 'Luis Quispe', 6, 'activo'),
(3, '73456789', 'Pedro Alejandro', 'Huamán Rojas', '2008-11-03', 'M', '956789123', 'Carmen Rojas', 11, 'activo'),
(4, '74567890', 'Lucía', 'Torres Silva', '2007-02-18', 'F', '933222111', 'Jorge Torres', 16, 'activo'),
(5, '75678901', 'Diego', 'Mendoza Castro', '2006-09-30', 'M', '944555666', 'Ana Castro', 19, 'activo'),
(16, '80111222', 'Juan Carlos', 'Pérez Gómez', '2010-05-14', 'M', '987654321', 'Rosa Gómez', 1, 'activo'),
(17, '80222333', 'María Fernanda', 'Quispe Mamani', '2009-08-22', 'F', '912345678', 'Luis Quispe', 6, 'activo'),
(18, '80333444', 'Pedro Alejandro', 'Huamán Rojas', '2008-11-03', 'M', '956789123', 'Carmen Rojas', 11, 'activo'),
(19, '80444555', 'Lucía', 'Torres Silva', '2007-02-18', 'F', '933222111', 'Jorge Torres', 16, 'activo'),
(20, '80555666', 'Diego', 'Mendoza Castro', '2006-09-30', 'M', '944555666', 'Ana Castro', 19, 'activo'),
(21, '80666777', 'Carlos', 'Sánchez Torres', '2010-01-15', 'M', '911222333', 'Pedro Sánchez', 2, 'activo'),
(22, '80777888', 'Andrea', 'Gómez Ríos', '2010-03-22', 'F', '922333444', 'María Ríos', 2, 'activo'),
(23, '80888999', 'Luis', 'Pérez Vargas', '2010-07-10', 'M', '933444555', 'José Pérez', 2, 'activo'),
(24, '80999000', 'Camila', 'Flores Díaz', '2008-09-12', 'F', '955666777', 'Ana Díaz', 12, 'activo'),
(25, '80123123', 'Mateo', 'Rojas Paredes', '2007-12-05', 'M', '966777888', 'Luis Paredes', 17, 'activo'),
(36, '71000001', 'Carlos', 'Gómez', '2010-01-10', 'M', NULL, NULL, 1, 'activo'),
(37, '71000002', 'Ana', 'Rojas', '2010-02-11', 'F', NULL, NULL, 1, 'activo'),
(38, '71000003', 'Luis', 'Pérez', '2010-03-12', 'M', NULL, NULL, 1, 'activo'),
(39, '71000004', 'María', 'Torres', '2010-04-13', 'F', NULL, NULL, 2, 'activo'),
(40, '71000005', 'José', 'Flores', '2010-05-14', 'M', NULL, NULL, 2, 'activo'),
(41, '71000006', 'Lucía', 'Mendoza', '2010-06-15', 'F', NULL, NULL, 2, 'activo'),
(42, '71000007', 'Pedro', 'Silva', '2010-07-16', 'M', NULL, NULL, 3, 'activo'),
(43, '71000008', 'Rosa', 'Castro', '2010-08-17', 'F', NULL, NULL, 3, 'activo'),
(44, '71000009', 'Diego', 'Vargas', '2010-09-18', 'M', NULL, NULL, 3, 'activo'),
(45, '71000010', 'Elena', 'Ríos', '2010-10-19', 'F', NULL, NULL, 4, 'activo'),
(46, '71000011', 'Jorge', 'Paz', '2010-11-20', 'M', NULL, NULL, 4, 'activo'),
(47, '71000012', 'Carmen', 'Luna', '2010-12-21', 'F', NULL, NULL, 4, 'activo'),
(48, '72000001', 'Juan', 'Sánchez', '2009-01-10', 'M', NULL, NULL, 5, 'activo'),
(49, '72000002', 'María', 'Gómez', '2009-02-11', 'F', NULL, NULL, 5, 'activo'),
(50, '72000003', 'Luis', 'Torres', '2009-03-12', 'M', NULL, NULL, 5, 'activo'),
(51, '72000004', 'Ana', 'Rojas', '2009-04-13', 'F', NULL, NULL, 6, 'activo'),
(52, '72000005', 'Pedro', 'Pérez', '2009-05-14', 'M', NULL, NULL, 6, 'activo'),
(53, '72000006', 'Lucía', 'Flores', '2009-06-15', 'F', NULL, NULL, 6, 'activo'),
(54, '72000007', 'José', 'Mendoza', '2009-07-16', 'M', NULL, NULL, 7, 'activo'),
(55, '72000008', 'Rosa', 'Silva', '2009-08-17', 'F', NULL, NULL, 7, 'activo'),
(56, '72000009', 'Diego', 'Castro', '2009-09-18', 'M', NULL, NULL, 7, 'activo'),
(57, '72000010', 'Elena', 'Vargas', '2009-10-19', 'F', NULL, NULL, 8, 'activo'),
(58, '72000011', 'Jorge', 'Ríos', '2009-11-20', 'M', NULL, NULL, 8, 'activo'),
(59, '72000012', 'Carmen', 'Paz', '2009-12-21', 'F', NULL, NULL, 8, 'activo'),
(60, '73000001', 'Carlos', 'Luna', '2008-01-10', 'M', NULL, NULL, 9, 'activo'),
(61, '73000002', 'Ana', 'Gómez', '2008-02-11', 'F', NULL, NULL, 9, 'activo'),
(62, '73000003', 'Luis', 'Rojas', '2008-03-12', 'M', NULL, NULL, 9, 'activo'),
(63, '73000004', 'María', 'Pérez', '2008-04-13', 'F', NULL, NULL, 10, 'activo'),
(64, '73000005', 'José', 'Torres', '2008-05-14', 'M', NULL, NULL, 10, 'activo'),
(65, '73000006', 'Lucía', 'Flores', '2008-06-15', 'F', NULL, NULL, 10, 'activo'),
(66, '73000007', 'Pedro', 'Mendoza', '2008-07-16', 'M', NULL, NULL, 11, 'activo'),
(67, '73000008', 'Rosa', 'Silva', '2008-08-17', 'F', NULL, NULL, 11, 'activo'),
(68, '73000009', 'Diego', 'Castro', '2008-09-18', 'M', NULL, NULL, 11, 'activo'),
(69, '73000010', 'Elena', 'Vargas', '2008-10-19', 'F', NULL, NULL, 12, 'activo'),
(70, '73000011', 'Jorge', 'Ríos', '2008-11-20', 'M', NULL, NULL, 12, 'activo'),
(71, '73000012', 'Carmen', 'Paz', '2008-12-21', 'F', NULL, NULL, 12, 'activo'),
(72, '74000001', 'Juan', 'Luna', '2007-01-10', 'M', NULL, NULL, 13, 'activo'),
(73, '74000002', 'María', 'Gómez', '2007-02-11', 'F', NULL, NULL, 13, 'activo'),
(74, '74000003', 'Luis', 'Rojas', '2007-03-12', 'M', NULL, NULL, 13, 'activo'),
(75, '74000004', 'Ana', 'Pérez', '2007-04-13', 'F', NULL, NULL, 14, 'activo'),
(76, '74000005', 'Pedro', 'Torres', '2007-05-14', 'M', NULL, NULL, 14, 'activo'),
(77, '74000006', 'Lucía', 'Flores', '2007-06-15', 'F', NULL, NULL, 14, 'activo'),
(78, '74000007', 'José', 'Mendoza', '2007-07-16', 'M', NULL, NULL, 15, 'activo'),
(79, '74000008', 'Rosa', 'Silva', '2007-08-17', 'F', NULL, NULL, 15, 'activo'),
(80, '74000009', 'Diego', 'Castro', '2007-09-18', 'M', NULL, NULL, 15, 'activo'),
(81, '74000010', 'Elena', 'Vargas', '2007-10-19', 'F', NULL, NULL, 16, 'activo'),
(82, '74000011', 'Jorge', 'Ríos', '2007-11-20', 'M', NULL, NULL, 16, 'activo'),
(83, '74000012', 'Carmen', 'Paz', '2007-12-21', 'F', NULL, NULL, 16, 'activo'),
(84, '75000001', 'Carlos', 'Luna', '2006-01-10', 'M', NULL, NULL, 17, 'activo'),
(85, '75000002', 'Ana', 'Gómez', '2006-02-11', 'F', NULL, NULL, 17, 'activo'),
(86, '75000003', 'Luis', 'Rojas', '2006-03-12', 'M', NULL, NULL, 17, 'activo'),
(87, '75000004', 'María', 'Pérez', '2006-04-13', 'F', NULL, NULL, 18, 'activo'),
(88, '75000005', 'José', 'Torres', '2006-05-14', 'M', NULL, NULL, 18, 'activo'),
(89, '75000006', 'Lucía', 'Flores', '2006-06-15', 'F', NULL, NULL, 18, 'activo'),
(90, '75000007', 'Pedro', 'Mendoza', '2006-07-16', 'M', NULL, NULL, 19, 'activo'),
(91, '75000008', 'Rosa', 'Silva', '2006-08-17', 'F', NULL, NULL, 19, 'activo'),
(92, '75000009', 'Diego', 'Castro', '2006-09-18', 'M', NULL, NULL, 19, 'activo'),
(93, '75000010', 'Elena', 'Vargas', '2006-10-19', 'F', NULL, NULL, 20, 'activo'),
(94, '75000011', 'Jorge', 'Ríos', '2006-11-20', 'M', NULL, NULL, 20, 'activo'),
(95, '75000012', 'Carmen', 'Paz', '2006-12-21', 'F', NULL, NULL, 20, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `seccion` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id`, `nombre`, `seccion`) VALUES
(1, '1°', 'A'),
(2, '1°', 'B'),
(3, '1°', 'C'),
(4, '1°', 'D'),
(5, '2°', 'A'),
(6, '2°', 'B'),
(7, '2°', 'C'),
(8, '2°', 'D'),
(9, '3°', 'A'),
(10, '3°', 'B'),
(11, '3°', 'C'),
(12, '3°', 'D'),
(13, '4°', 'A'),
(14, '4°', 'B'),
(15, '4°', 'C'),
(16, '4°', 'D'),
(17, '5°', 'A'),
(18, '5°', 'B'),
(19, '5°', 'C'),
(20, '5°', 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE `matriculas` (
  `id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `grado_id` int(11) NOT NULL,
  `anio_escolar` year(4) NOT NULL,
  `fecha_matricula` date NOT NULL,
  `estado` enum('activa','retirada') DEFAULT 'activa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`id`, `estudiante_id`, `curso_id`, `grado_id`, `anio_escolar`, `fecha_matricula`, `estado`) VALUES
(1, 16, 1, 1, '2024', '2024-03-01', 'activa'),
(2, 17, 1, 6, '2024', '2024-03-01', 'activa'),
(3, 18, 1, 11, '2024', '2024-03-01', 'activa'),
(4, 19, 1, 16, '2024', '2024-03-01', 'activa'),
(5, 20, 1, 19, '2024', '2024-03-01', 'activa'),
(6, 21, 1, 2, '2024', '2024-03-01', 'activa'),
(7, 22, 1, 2, '2024', '2024-03-01', 'activa'),
(8, 23, 1, 2, '2024', '2024-03-01', 'activa'),
(16, 1, 1, 1, '2024', '2024-03-01', 'activa'),
(17, 2, 1, 6, '2024', '2024-03-01', 'activa'),
(18, 3, 1, 11, '2024', '2024-03-01', 'activa'),
(19, 4, 1, 16, '2024', '2024-03-01', 'activa'),
(20, 5, 1, 19, '2024', '2024-03-01', 'activa'),
(21, 36, 1, 1, '2024', '2024-03-01', 'activa'),
(22, 37, 1, 1, '2024', '2024-03-01', 'activa'),
(23, 38, 1, 1, '2024', '2024-03-01', 'activa'),
(24, 39, 1, 2, '2024', '2024-03-01', 'activa'),
(25, 40, 1, 2, '2024', '2024-03-01', 'activa'),
(26, 41, 1, 2, '2024', '2024-03-01', 'activa'),
(27, 42, 1, 3, '2024', '2024-03-01', 'activa'),
(28, 43, 1, 3, '2024', '2024-03-01', 'activa'),
(29, 44, 1, 3, '2024', '2024-03-01', 'activa'),
(30, 45, 1, 4, '2024', '2024-03-01', 'activa'),
(31, 46, 1, 4, '2024', '2024-03-01', 'activa'),
(32, 47, 1, 4, '2024', '2024-03-01', 'activa'),
(33, 48, 1, 5, '2024', '2024-03-01', 'activa'),
(34, 49, 1, 5, '2024', '2024-03-01', 'activa'),
(35, 50, 1, 5, '2024', '2024-03-01', 'activa'),
(36, 51, 1, 6, '2024', '2024-03-01', 'activa'),
(37, 52, 1, 6, '2024', '2024-03-01', 'activa'),
(38, 53, 1, 6, '2024', '2024-03-01', 'activa'),
(39, 54, 1, 7, '2024', '2024-03-01', 'activa'),
(40, 55, 1, 7, '2024', '2024-03-01', 'activa'),
(41, 56, 1, 7, '2024', '2024-03-01', 'activa'),
(42, 57, 1, 8, '2024', '2024-03-01', 'activa'),
(43, 58, 1, 8, '2024', '2024-03-01', 'activa'),
(44, 59, 1, 8, '2024', '2024-03-01', 'activa'),
(45, 60, 1, 9, '2024', '2024-03-01', 'activa'),
(46, 61, 1, 9, '2024', '2024-03-01', 'activa'),
(47, 62, 1, 9, '2024', '2024-03-01', 'activa'),
(48, 63, 1, 10, '2024', '2024-03-01', 'activa'),
(49, 64, 1, 10, '2024', '2024-03-01', 'activa'),
(50, 65, 1, 10, '2024', '2024-03-01', 'activa'),
(51, 66, 1, 11, '2024', '2024-03-01', 'activa'),
(52, 67, 1, 11, '2024', '2024-03-01', 'activa'),
(53, 68, 1, 11, '2024', '2024-03-01', 'activa'),
(54, 69, 1, 12, '2024', '2024-03-01', 'activa'),
(55, 70, 1, 12, '2024', '2024-03-01', 'activa'),
(56, 71, 1, 12, '2024', '2024-03-01', 'activa'),
(57, 72, 1, 13, '2024', '2024-03-01', 'activa'),
(58, 73, 1, 13, '2024', '2024-03-01', 'activa'),
(59, 74, 1, 13, '2024', '2024-03-01', 'activa'),
(60, 75, 1, 14, '2024', '2024-03-01', 'activa'),
(61, 76, 1, 14, '2024', '2024-03-01', 'activa'),
(62, 77, 1, 14, '2024', '2024-03-01', 'activa'),
(63, 78, 1, 15, '2024', '2024-03-01', 'activa'),
(64, 79, 1, 15, '2024', '2024-03-01', 'activa'),
(65, 80, 1, 15, '2024', '2024-03-01', 'activa'),
(66, 81, 1, 16, '2024', '2024-03-01', 'activa'),
(67, 82, 1, 16, '2024', '2024-03-01', 'activa'),
(68, 83, 1, 16, '2024', '2024-03-01', 'activa'),
(69, 84, 1, 17, '2024', '2024-03-01', 'activa'),
(70, 85, 1, 17, '2024', '2024-03-01', 'activa'),
(71, 86, 1, 17, '2024', '2024-03-01', 'activa'),
(72, 87, 1, 18, '2024', '2024-03-01', 'activa'),
(73, 88, 1, 18, '2024', '2024-03-01', 'activa'),
(74, 89, 1, 18, '2024', '2024-03-01', 'activa'),
(75, 90, 1, 19, '2024', '2024-03-01', 'activa'),
(76, 91, 1, 19, '2024', '2024-03-01', 'activa'),
(77, 92, 1, 19, '2024', '2024-03-01', 'activa'),
(78, 93, 1, 20, '2024', '2024-03-01', 'activa'),
(79, 94, 1, 20, '2024', '2024-03-01', 'activa'),
(80, 95, 1, 20, '2024', '2024-03-01', 'activa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `rol` enum('admin','secretaria','docente') DEFAULT 'secretaria',
  `activo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password_hash`, `rol`, `activo`) VALUES
(1, 'Administrador IE El Cruce', 'admin@elcruce.edu.pe', '$2y$10$R6PppYFIAMCuptx/HRrnCu0oElKAVCmh5o29CnPCRpurNoDukeh7C', 'admin', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unica_asistencia` (`estudiante_id`,`curso_id`,`fecha`),
  ADD KEY `curso_id` (`curso_id`),
  ADD KEY `grado_id` (`grado_id`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estudiante_id` (`estudiante_id`),
  ADD KEY `curso_id` (`curso_id`),
  ADD KEY `grado_id` (`grado_id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD KEY `grado_id` (`grado_id`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unica_matricula` (`estudiante_id`,`curso_id`,`anio_escolar`),
  ADD KEY `curso_id` (`curso_id`),
  ADD KEY `grado_id` (`grado_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `asistencias_ibfk_2` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `asistencias_ibfk_3` FOREIGN KEY (`grado_id`) REFERENCES `grados` (`id`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `calificaciones_ibfk_3` FOREIGN KEY (`grado_id`) REFERENCES `grados` (`id`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`grado_id`) REFERENCES `grados` (`id`);

--
-- Filtros para la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD CONSTRAINT `matriculas_ibfk_1` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matriculas_ibfk_2` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `matriculas_ibfk_3` FOREIGN KEY (`grado_id`) REFERENCES `grados` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
