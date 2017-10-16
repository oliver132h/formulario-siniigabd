-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-10-2017 a las 19:56:53
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `siniiga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresar`
--

DROP TABLE IF EXISTS `ingresar`;
CREATE TABLE IF NOT EXISTS `ingresar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ClaveUpp` varchar(50) NOT NULL,
  `NomProduc` varchar(50) NOT NULL,
  `NomPredio` varchar(50) NOT NULL,
  `NomTecni` varchar(50) NOT NULL,
  `SerieDel` varchar(50) NOT NULL,
  `AL` varchar(50) NOT NULL,
  `TotalPaqComp` int(11) NOT NULL,
  `FechaAre` date NOT NULL,
  `NumSini` int(11) NOT NULL,
  `AreteCam` varchar(50) NOT NULL,
  `Mes` varchar(50) NOT NULL,
  `Anio` varchar(50) NOT NULL,
  `Genero` varchar(50) NOT NULL,
  `Raza` varchar(50) NOT NULL,
  `RazaCruza` varchar(50) NOT NULL,
  `Empadre` varchar(50) NOT NULL,
  `Padre` varchar(50) NOT NULL,
  `Madre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
