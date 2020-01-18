-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 18 jan. 2020 à 11:34
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
-- Structure de la table `profession`
--

DROP TABLE IF EXISTS `profession`;
CREATE TABLE IF NOT EXISTS `profession` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RPPS` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `job` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profession`
--

INSERT INTO `profession` (`id`, `RPPS`, `job`) VALUES
(1, '123', 'chirurgien'),
(2, '456', 'infirmier'),
(3, '789', 'anesthesiste'),
(4, '147', 'chirurgien'),
(5, '258', 'infirmier');

-- --------------------------------------------------------

--
-- Structure de la table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RPPS` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `reactionTime` int(11) DEFAULT NULL,
  `soundRecognition` int(11) DEFAULT NULL,
  `colorRecognition` int(11) DEFAULT NULL,
  `skinTemperature` float DEFAULT NULL,
  `heartRate` int(11) DEFAULT NULL,
  `dateOfTest` date DEFAULT NULL,
  `capable` varchar(3) CHARACTER SET latin1 NOT NULL DEFAULT 'non',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `results`
--

INSERT INTO `results` (`id`, `RPPS`, `reactionTime`, `soundRecognition`, `colorRecognition`, `skinTemperature`, `heartRate`, `dateOfTest`, `capable`) VALUES
(1, '123', 263, 9, 10, 32, 68, '2020-01-03', 'oui'),
(2, '456', 322, 10, 8, 33, 95, '2019-12-25', 'oui'),
(3, '789', 285, 4, 10, 33, 76, '2019-12-27', 'non'),
(4, '789', 235, 9, 9, 34, 78, '2019-12-23', 'oui'),
(5, '789', 225, 10, 9, 33, 75, '2019-12-12', 'oui'),
(6, '789', 302, 8, 10, 33.4, 80, '2019-11-21', 'non'),
(7, '123', 300, 7, 7, 35, 95, '2019-12-02', 'oui'),
(10, '789', 300, 8, 7, 32, 85, '2019-12-15', 'oui'),
(14, '789', 254, 8, 9, 34.2, 75, '2020-01-08', 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `frequency` int(11) DEFAULT NULL,
  `reactionTimeThreshold` int(11) DEFAULT NULL,
  `soundDistinctionThreshold` int(11) DEFAULT NULL,
  `colorDistinctionThreshold` int(11) DEFAULT NULL,
  `heartRateThreshold` int(11) NOT NULL,
  `skinTempThreshold` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `job`, `frequency`, `reactionTimeThreshold`, `soundDistinctionThreshold`, `colorDistinctionThreshold`, `heartRateThreshold`, `skinTempThreshold`) VALUES
(1, 'chirurgien', 14, 300, 5, 5, 80, 30),
(2, 'infirmier', 28, 350, 5, 5, 100, 32),
(3, 'anesthesiste', 14, 300, 8, 8, 90, 30);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `RPPS` varchar(11) CHARACTER SET latin1 NOT NULL,
  `tel` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mail` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lastName` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `firstName` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `CGU` tinyint(1) DEFAULT '0',
  `admin` tinyint(1) DEFAULT '0',
  `avatar` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT 'PhotoProfil.jpg',
  PRIMARY KEY (`RPPS`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`RPPS`, `tel`, `mail`, `lastName`, `firstName`, `password`, `CGU`, `admin`, `avatar`) VALUES
('11111111111', '603571876', 'gregoire@debray.com', 'Debray', 'Gregoire', '2acfa5d173e10de2586042ddb6d9d75415148bc2', 1, 0, '123.jpg'),
('33333333333', '603571877', 'alexandre@perbet.com', 'Perbet', 'Alexandre', '0badd0ef0e968c2cdc5e30c04c69261db825f2cb', 1, 0, '456.jpg'),
('789', '0603571875', 'ambroise.malinvaud@gmail.com', 'Malinvaud', 'Ambroise', 'bc6221c9b8a107b0557a9068a40cd28c2e701792', 1, 1, '789.jpg'),
('22222222222', '603571879', 'alexandre@lalau.com', 'Lalau', 'Alexandre', '9009337cf16333f07109b593405cf7552ed8059a', 1, 0, '147.jpg'),
('44444444444', '0601020304', 'karim@ouarti.com', 'Ouarti', 'Karim', '82451b41fd7878180b6aa2b54e369cbec4e8032c', 1, 0, '258.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
