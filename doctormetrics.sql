-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 09 déc. 2019 à 14:53
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `doctormetrics`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `RPPS` int(11) NOT NULL,
  `tel` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mail` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lastName` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `firstName` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `path` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `CGU` tinyint(1) DEFAULT '0',
  `admin` tinyint(1) DEFAULT '0',
  `position` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`RPPS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`RPPS`, `tel`, `mail`, `lastName`, `firstName`, `password`, `path`, `CGU`, `admin`, `position`) VALUES
(123, '603571876', 'gregoire@debray.com', 'Debray', 'Gregoire', '2acfa5d173e10de2586042ddb6d9d75415148bc2', NULL, 0, 0, NULL),
(456, '603571877', 'alexandre@perbet.com', 'Perbet', 'Alexandre', '0badd0ef0e968c2cdc5e30c04c69261db825f2cb', NULL, 0, 0, NULL),
(789, '123456789', 'ambroise@gmail.com', 'Malinvaud', 'Ambroise', '9ec4236a09d01395a838f2e774923b4e8548fd19', NULL, 1, 1, NULL),
(147, '603571879', 'alexandre@lalau.com', 'Lalau', 'Alexandre', '9009337cf16333f07109b593405cf7552ed8059a', NULL, 0, 0, NULL),
(258, '55555', 'karim@ouarti.com', 'Ouarti', 'Karim', '82451b41fd7878180b6aa2b54e369cbec4e8032c', NULL, 1, 0, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
