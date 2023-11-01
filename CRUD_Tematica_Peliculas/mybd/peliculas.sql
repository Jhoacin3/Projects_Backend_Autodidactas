-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2023 a las 22:39:17
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
-- Base de datos: `peliculas`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `peliculas_con_letra` (IN `letra` CHAR(1))   SELECT * FROM pelicula WHERE nombre_peli LIKE concat('%',letra,'%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_prueba1` (IN `_genero` VARCHAR(45), IN `_idioma` VARCHAR(45), IN `_nombre_peli` VARCHAR(45), IN `_subtitulado` VARCHAR(45))   BEGIN
	INSERT INTO pelicula (nombre_peli,genero,idioma,subtitulado) VALUES (_nombre_peli,_genero,_idioma,_subtitulado);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `accion` varchar(255) NOT NULL,
  `fecha_hora` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`id`, `accion`, `fecha_hora`) VALUES
(1, 'Se actualizo el registro', '2023-05-07 16:43:59'),
(2, ' Se actualizo el registro de pelicula ID viejo:22 nombre de la pelicula:Inter Estelar genero viejo:Ciencia Ficción idioma viejo:Español (Latino)subtitulado viejo:Noaño de estreno viejo:2018id nuevo:22nombre nuevo:TRIGGER NUEVOgenero nuevo:Ciencia Ficcióni', '2023-05-07 17:19:07'),
(3, ' Se actualizo el registro de pelicula ID viejo:23 nombre de la pelicula:Kimetsu genero viejo:Ciencia Ficción idioma viejo:Latino subtitulado viejo:No año de estreno viejo:2017 id nuevo:23 nombre nuevo:Propuesta laboral genero nuevo:Drama idioma nuevo:Espa', '2023-05-09 09:24:33'),
(4, ' Se actualizo el registro de pelicula ID viejo:23 nombre de la pelicula:Propuesta laboral genero viejo:Drama idioma viejo:Español (Latino) subtitulado viejo:No año de estreno viejo:2017 id nuevo:23 nombre nuevo:ACTUALIZAR TRIGGER genero nuevo:Documental i', '2023-05-16 09:29:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mas_info`
--

CREATE TABLE `mas_info` (
  `id_info` int(11) NOT NULL,
  `descripción` varchar(100) NOT NULL,
  `personajes` varchar(45) NOT NULL,
  `calificación` int(11) NOT NULL,
  `Reseña` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `idpelicula` int(11) NOT NULL,
  `nombre_peli` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `idioma` varchar(45) NOT NULL,
  `subtitulado` varchar(45) NOT NULL,
  `año_estreno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`idpelicula`, `nombre_peli`, `genero`, `idioma`, `subtitulado`, `año_estreno`) VALUES
(1, 'Inter Estelar', 'Ciencia Ficción', 'Latino', 'No', 2017),
(2, 'One Piece', 'Anime', 'Japones', 'Si', 2017),
(3, 'Shingeki No Kriojin', 'Anime', 'Japones', 'Si', 2019),
(4, 'No le temas a la oscuridad', 'Suspenso', 'Latino', 'No', 2020),
(5, 'Suzume', 'Anime', 'Japones', 'Si', 2020),
(6, 'Super Mario Bros La pelicula', 'Animación', 'Latino', 'No', 2023),
(7, 'Avatar: El camino del agua', 'Ciencia Ficción', 'Latino', 'No', 2022),
(8, 'Shazam La furia de los dioses', 'Acción', 'Español (Latino)', 'No', 2017),
(9, 'Gato con botas: El último deseo', 'Animación', 'Latino', 'No', 2021),
(11, 'Juego de tronos', 'Aventura', 'Frances', 'Si', 2017),
(12, 'Morbius', 'Acción', 'Latino', 'No', 2017),
(13, 'Inferno', 'Terror', 'Latino', 'No', 2018),
(14, 'La noche del demonio 1 (INSIDIOUS)', 'Suspenso', 'Ingles', 'Si', 2020),
(15, 'La noche del demonio 3: La ultima llave', 'Suspenso', 'Latino', 'No', 2020),
(16, 'Español(Latino)', 'SP_prueba', 'Terror', 'No', NULL),
(17, 'Vicenzo', 'Acción', 'Latino', 'No', 2023),
(18, 'Un amor tan hermoso', 'Drama', 'Castellano', 'Si', 2019),
(19, 'Viaje de Shujiru', 'Anime', 'Castellano', 'No', 2017),
(20, 'El exorcista del Papa', 'Suspenso', 'Latino', 'No', 2023),
(21, 'Maze Runner: Correr o morir', 'Acción', 'Ingles', 'Si', 2018),
(23, 'ACTUALIZAR TRIGGER', 'Documental', 'Español (Latino)', 'Si', 2019),
(24, 'Duro de matar', 'Terror', 'Español Latino', 'No', NULL),
(25, 'ranbo', 'accion ', 'ingles', 'no', NULL),
(26, 'ACTUALIZAR', 'Ciencia Ficción', 'Latino', 'No', 2017),
(28, 'Mazinger Z', 'Aventura', 'Japones', 'No', 2017);

--
-- Disparadores `pelicula`
--
DELIMITER $$
CREATE TRIGGER `log_de_tbpelicula` AFTER UPDATE ON `pelicula` FOR EACH ROW INSERT INTO log (accion) VALUES (concat(' Se actualizo el registro de pelicula ID viejo:',old.idpelicula,' nombre de la pelicula:',old.nombre_peli, ' genero viejo:',old.genero,' idioma viejo:',old.idioma,' subtitulado viejo:',old.subtitulado,' año de estreno viejo:',old.año_estreno, ' id nuevo:',new.idpelicula,' nombre nuevo:',new.nombre_peli,' genero nuevo:',new.genero,' idioma nuevo:',new.idioma,' subtitulado nuevo:',new.subtitulado,' año de estreno:',new.año_estreno))
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mas_info`
--
ALTER TABLE `mas_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`idpelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mas_info`
--
ALTER TABLE `mas_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `idpelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
