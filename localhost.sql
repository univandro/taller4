-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2012 a las 16:22:42
-- Versión del servidor: 5.5.22
-- Versión de PHP: 5.3.10-1ubuntu3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `medico_db`
--
CREATE DATABASE `medico_db1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `medico_db1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `address`
--
-- Creación: 08-06-2012 a las 20:21:09
--

CREATE TABLE IF NOT EXISTS `address` (
  `id_address` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NOT NULL,
  `location` varchar(145) NOT NULL,
  `zone` varchar(145) NOT NULL,
  `city` varchar(145) NOT NULL,
  `state` varchar(145) NOT NULL,
  `country` varchar(145) NOT NULL,
  `google_map` varchar(145) DEFAULT NULL,
  `date_created` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_modified` date NOT NULL,
  `modified_by` int(11) NOT NULL,
  `is_primary` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_address`),
  KEY `id_person` (`id_person`),
  KEY `created_by` (`created_by`),
  KEY `modified_by` (`modified_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `address`:
--   `id_person`
--       `person` -> `id_person`
--   `modified_by`
--       `person` -> `id_person`
--   `created_by`
--       `person` -> `id_person`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alias`
--
-- Creación: 24-05-2012 a las 22:01:30
--

CREATE TABLE IF NOT EXISTS `alias` (
  `id_alias` int(11) NOT NULL AUTO_INCREMENT,
  `id_medical_center` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `state` varchar(45) NOT NULL,
  PRIMARY KEY (`id_alias`),
  KEY `id_user` (`id_user`),
  KEY `id_medical_center` (`id_medical_center`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `alias`:
--   `id_user`
--       `user` -> `id_user`
--   `id_medical_center`
--       `medical_center` -> `id_medical_center`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `allergy`
--
-- Creación: 10-05-2012 a las 01:51:11
--

CREATE TABLE IF NOT EXISTS `allergy` (
  `id_allergy` int(11) NOT NULL AUTO_INCREMENT,
  `name_allergy` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id_allergy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `allergy_assigned`
--
-- Creación: 24-05-2012 a las 21:44:50
--

CREATE TABLE IF NOT EXISTS `allergy_assigned` (
  `id_allergy_assigned` int(11) NOT NULL AUTO_INCREMENT,
  `id_allergy` int(11) NOT NULL,
  `id_medical_history` int(11) NOT NULL,
  `details` varchar(500) NOT NULL,
  PRIMARY KEY (`id_allergy_assigned`),
  UNIQUE KEY `id_allergy_assigned` (`id_allergy_assigned`),
  KEY `id_allergy` (`id_allergy`,`id_medical_history`,`details`(255)),
  KEY `id_medical_history` (`id_medical_history`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `allergy_assigned`:
--   `id_allergy`
--       `allergy` -> `id_allergy`
--   `id_medical_history`
--       `medical_history` -> `id_medical_history`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cellphone`
--
-- Creación: 18-05-2012 a las 04:54:47
--

CREATE TABLE IF NOT EXISTS `cellphone` (
  `id_cellphone` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NOT NULL,
  `cellphone` varchar(25) NOT NULL,
  `date_created` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_modified` date NOT NULL,
  `modified_by` int(11) NOT NULL,
  `is_primary` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_cellphone`),
  KEY `id_person` (`id_person`),
  KEY `modified_by` (`modified_by`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `cellphone`:
--   `id_person`
--       `person` -> `id_person`
--   `modified_by`
--       `person` -> `id_person`
--   `created_by`
--       `person` -> `id_person`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consult`
--
-- Creación: 27-05-2012 a las 00:20:51
--

CREATE TABLE IF NOT EXISTS `consult` (
  `id_consult` int(11) NOT NULL AUTO_INCREMENT,
  `id_patient` int(11) NOT NULL,
  `id_alias` int(11) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(100) NOT NULL,
  `result` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_consult`),
  KEY `id_patient` (`id_patient`),
  KEY `id_alias` (`id_alias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `consult`:
--   `id_patient`
--       `patient` -> `id_patient`
--   `id_alias`
--       `alias` -> `id_alias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_emergency`
--
-- Creación: 24-05-2012 a las 22:22:40
--

CREATE TABLE IF NOT EXISTS `contact_emergency` (
  `id_contact_emergency` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  PRIMARY KEY (`id_contact_emergency`),
  KEY `id_person` (`id_person`,`id_patient`),
  KEY `id_patient` (`id_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `contact_emergency`:
--   `id_person`
--       `person` -> `id_person`
--   `id_patient`
--       `patient` -> `id_patient`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disease`
--
-- Creación: 24-05-2012 a las 22:02:18
--

CREATE TABLE IF NOT EXISTS `disease` (
  `id_disease` int(11) NOT NULL AUTO_INCREMENT,
  `name_disease` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id_disease`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disease_assigned`
--
-- Creación: 27-05-2012 a las 00:10:26
--

CREATE TABLE IF NOT EXISTS `disease_assigned` (
  `id_disease_assigned` int(11) NOT NULL AUTO_INCREMENT,
  `id_disease` int(11) NOT NULL,
  `id_medical_history` int(11) NOT NULL,
  `details` varchar(500) NOT NULL,
  PRIMARY KEY (`id_disease_assigned`),
  KEY `id_medical_history` (`id_medical_history`),
  KEY `id_disease` (`id_disease`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `disease_assigned`:
--   `id_disease`
--       `disease` -> `id_disease`
--   `id_medical_history`
--       `medical_history` -> `id_medical_history`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `email`
--
-- Creación: 18-05-2012 a las 04:51:40
--

CREATE TABLE IF NOT EXISTS `email` (
  `id_email` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NOT NULL,
  `email` varchar(145) NOT NULL,
  `date_created` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_modified` date NOT NULL,
  `modified_by` int(11) NOT NULL,
  `is_primary` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_email`),
  KEY `id_person` (`id_person`),
  KEY `modified_by` (`modified_by`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `email`:
--   `id_person`
--       `person` -> `id_person`
--   `modified_by`
--       `person` -> `id_person`
--   `created_by`
--       `person` -> `id_person`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examination`
--
-- Creación: 24-05-2012 a las 21:33:34
--

CREATE TABLE IF NOT EXISTS `examination` (
  `id_examination` int(11) NOT NULL AUTO_INCREMENT,
  `name_examination` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id_examination`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examination_associated`
--
-- Creación: 27-05-2012 a las 00:10:45
--

CREATE TABLE IF NOT EXISTS `examination_associated` (
  `id_examination_associated` int(11) NOT NULL AUTO_INCREMENT,
  `id_examination` int(11) NOT NULL,
  `id_consult` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `state` varchar(45) NOT NULL,
  `result` varchar(45) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_examination_associated`),
  KEY `id_examination` (`id_examination`,`id_consult`),
  KEY `id_consult` (`id_consult`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `examination_associated`:
--   `id_examination`
--       `examination` -> `id_examination`
--   `id_consult`
--       `consult` -> `id_consult`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fax`
--
-- Creación: 18-05-2012 a las 04:51:27
--

CREATE TABLE IF NOT EXISTS `fax` (
  `id_fax` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NOT NULL,
  `fax` varchar(25) NOT NULL,
  `date_created` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_modified` date NOT NULL,
  `modified_by` int(11) NOT NULL,
  `is_primary` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_fax`),
  KEY `id_person` (`id_person`),
  KEY `modified_by` (`modified_by`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `fax`:
--   `id_person`
--       `person` -> `id_person`
--   `created_by`
--       `person` -> `id_person`
--   `modified_by`
--       `person` -> `id_person`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manager_g`
--
-- Creación: 10-05-2012 a las 02:07:15
--

CREATE TABLE IF NOT EXISTS `manager_g` (
  `id_manager_g` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_manager_g`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- RELACIONES PARA LA TABLA `manager_g`:
--   `id_user`
--       `user` -> `id_user`
--

--
-- Volcado de datos para la tabla `manager_g`
--

INSERT INTO `manager_g` (`id_manager_g`, `id_user`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manager_m_c`
--
-- Creación: 24-05-2012 a las 22:00:37
--

CREATE TABLE IF NOT EXISTS `manager_m_c` (
  `id_manager_m_c` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `code_m_c` varchar(128) NOT NULL,
  PRIMARY KEY (`id_manager_m_c`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `manager_m_c`:
--   `id_user`
--       `user` -> `id_user`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medical`
--
-- Creación: 24-05-2012 a las 22:03:47
--

CREATE TABLE IF NOT EXISTS `medical` (
  `id_medical` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `specialty` varchar(50) NOT NULL,
  PRIMARY KEY (`id_medical`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `medical`:
--   `id_user`
--       `user` -> `id_user`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medical_center`
--
-- Creación: 10-05-2012 a las 02:17:34
--

CREATE TABLE IF NOT EXISTS `medical_center` (
  `id_medical_center` int(11) NOT NULL AUTO_INCREMENT,
  `name_medical_center` varchar(50) NOT NULL,
  `code_m_c` varchar(128) NOT NULL,
  PRIMARY KEY (`id_medical_center`),
  UNIQUE KEY `code_m_c` (`code_m_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medical_history`
--
-- Creación: 24-05-2012 a las 22:04:06
--

CREATE TABLE IF NOT EXISTS `medical_history` (
  `id_medical_history` int(11) NOT NULL AUTO_INCREMENT,
  `weight` decimal(10,0) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id_medical_history`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicine`
--
-- Creación: 24-05-2012 a las 22:04:27
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `id_medicine` int(11) NOT NULL AUTO_INCREMENT,
  `name_medicine` varchar(50) NOT NULL,
  `composed` varchar(45) NOT NULL,
  `indications` varchar(100) NOT NULL,
  `contraindications` varchar(100) NOT NULL,
  PRIMARY KEY (`id_medicine`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicine_assigned`
--
-- Creación: 27-05-2012 a las 00:18:12
--

CREATE TABLE IF NOT EXISTS `medicine_assigned` (
  `id_medicine_assigned` int(11) NOT NULL AUTO_INCREMENT,
  `id_medicine` int(11) NOT NULL,
  `id_consult` int(11) NOT NULL,
  `details` varchar(500) NOT NULL,
  PRIMARY KEY (`id_medicine_assigned`),
  KEY `id_medical` (`id_medicine`,`id_consult`,`details`(191)),
  KEY `id_consult` (`id_consult`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `medicine_assigned`:
--   `id_medicine`
--       `medicine` -> `id_medicine`
--   `id_consult`
--       `consult` -> `id_consult`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patient`
--
-- Creación: 24-05-2012 a las 22:23:15
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id_patient` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NOT NULL,
  `id_medical_history` int(11) NOT NULL,
  `code_m_c` varchar(128) NOT NULL,
  PRIMARY KEY (`id_patient`),
  KEY `id_person` (`id_person`),
  KEY `id_medical_history` (`id_medical_history`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `patient`:
--   `id_person`
--       `person` -> `id_person`
--   `id_medical_history`
--       `medical_history` -> `id_medical_history`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--
-- Creación: 24-05-2012 a las 22:05:18
--

CREATE TABLE IF NOT EXISTS `person` (
  `id_person` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  PRIMARY KEY (`id_person`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`id_person`, `name`, `father_name`, `mother_name`, `birth_date`) VALUES
(1, 'admin', 'admin', 'admin', '1987-03-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phone`
--
-- Creación: 18-05-2012 a las 04:54:31
--

CREATE TABLE IF NOT EXISTS `phone` (
  `id_phone` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `date_created` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_modified` date NOT NULL,
  `modified_by` int(11) NOT NULL,
  `is_primary` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_phone`),
  KEY `id_person` (`id_person`),
  KEY `modified_by` (`modified_by`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `phone`:
--   `id_person`
--       `person` -> `id_person`
--   `created_by`
--       `person` -> `id_person`
--   `modified_by`
--       `person` -> `id_person`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--
-- Creación: 24-05-2012 a las 22:05:46
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_person` (`id_person`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- RELACIONES PARA LA TABLA `user`:
--   `id_person`
--       `person` -> `id_person`
--

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `id_person`, `password`) VALUES
(1, 1, 'vandro');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `address_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alias`
--
ALTER TABLE `alias`
  ADD CONSTRAINT `alias_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alias_ibfk_2` FOREIGN KEY (`id_medical_center`) REFERENCES `medical_center` (`id_medical_center`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `allergy_assigned`
--
ALTER TABLE `allergy_assigned`
  ADD CONSTRAINT `allergy_assigned_ibfk_1` FOREIGN KEY (`id_allergy`) REFERENCES `allergy` (`id_allergy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `allergy_assigned_ibfk_2` FOREIGN KEY (`id_medical_history`) REFERENCES `medical_history` (`id_medical_history`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cellphone`
--
ALTER TABLE `cellphone`
  ADD CONSTRAINT `cellphone_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cellphone_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cellphone_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `consult`
--
ALTER TABLE `consult`
  ADD CONSTRAINT `consult_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consult_ibfk_2` FOREIGN KEY (`id_alias`) REFERENCES `alias` (`id_alias`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contact_emergency`
--
ALTER TABLE `contact_emergency`
  ADD CONSTRAINT `contact_emergency_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_emergency_ibfk_2` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `disease_assigned`
--
ALTER TABLE `disease_assigned`
  ADD CONSTRAINT `disease_assigned_ibfk_1` FOREIGN KEY (`id_disease`) REFERENCES `disease` (`id_disease`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `disease_assigned_ibfk_2` FOREIGN KEY (`id_medical_history`) REFERENCES `medical_history` (`id_medical_history`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `email_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `email_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `email_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `examination_associated`
--
ALTER TABLE `examination_associated`
  ADD CONSTRAINT `examination_associated_ibfk_1` FOREIGN KEY (`id_examination`) REFERENCES `examination` (`id_examination`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `examination_associated_ibfk_2` FOREIGN KEY (`id_consult`) REFERENCES `consult` (`id_consult`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fax`
--
ALTER TABLE `fax`
  ADD CONSTRAINT `fax_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fax_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fax_ibfk_3` FOREIGN KEY (`modified_by`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `manager_g`
--
ALTER TABLE `manager_g`
  ADD CONSTRAINT `manager_g_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `manager_m_c`
--
ALTER TABLE `manager_m_c`
  ADD CONSTRAINT `manager_m_c_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `medical`
--
ALTER TABLE `medical`
  ADD CONSTRAINT `medical_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `medicine_assigned`
--
ALTER TABLE `medicine_assigned`
  ADD CONSTRAINT `medicine_assigned_ibfk_1` FOREIGN KEY (`id_medicine`) REFERENCES `medicine` (`id_medicine`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medicine_assigned_ibfk_2` FOREIGN KEY (`id_consult`) REFERENCES `consult` (`id_consult`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`id_medical_history`) REFERENCES `medical_history` (`id_medical_history`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phone_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phone_ibfk_3` FOREIGN KEY (`modified_by`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
