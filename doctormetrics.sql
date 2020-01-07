-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 06 Janvier 2020 à 16:25
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Structure de la table `Profession`
--

CREATE TABLE `Profession` (
  `id` int(11) NOT NULL,
  `RPPS` varchar(11) DEFAULT NULL,
  `job` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Results`
--

CREATE TABLE `Results` (
  `id` int(11) NOT NULL,
  `RPPS` varchar(11) DEFAULT NULL,
  `reactionTime` int(11) DEFAULT NULL,
  `soundRecognition` int(11) DEFAULT NULL,
  `colorRecognition` int(11) DEFAULT NULL,
  `skinTemperature` int(11) DEFAULT NULL,
  `heartRate` int(11) DEFAULT NULL,
  `dateOfTest` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Settings`
--

CREATE TABLE `Settings` (
  `id` int(11) NOT NULL,
  `job` varchar(100) DEFAULT NULL,
  `frequency` int(11) DEFAULT NULL,
  `reactionTimeThreshold` int(11) DEFAULT NULL,
  `soundDistinctionThreshold` int(11) DEFAULT NULL,
  `stressThreshold` int(11) DEFAULT NULL,
  `colorDistinctionThreshold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `RPPS` varchar(11) NOT NULL,
  `tel` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mail` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lastName` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `firstName` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `path` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `CGU` tinyint(1) DEFAULT '0',
  `admin` tinyint(1) DEFAULT '0',
  `position` varchar(128) DEFAULT NULL,
  `avatar` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`RPPS`, `tel`, `mail`, `lastName`, `firstName`, `password`, `path`, `CGU`, `admin`, `position`, `avatar`) VALUES
('123', '603571876', 'gregoire@debray.com', 'Debray', 'Gregoire', '2acfa5d173e10de2586042ddb6d9d75415148bc2', NULL, 0, 0, NULL,NULL),
('456', '603571877', 'alexandre@perbet.com', 'Perbet', 'Alexandre', '0badd0ef0e968c2cdc5e30c04c69261db825f2cb', NULL, 0, 0, NULL,NULL),
('789', '654546', 'jyrt@sfr.fr', 'Malinvaud', 'Ambroise', '9ec4236a09d01395a838f2e774923b4e8548fd19', NULL, 1, 1, NULL,NULL),
('147', '603571879', 'alexandre@lalau.com', 'Lalau', 'Alexandre', '9009337cf16333f07109b593405cf7552ed8059a', NULL, 0, 0, NULL,NULL),
('258', '55555', 'karim@ouarti.com', 'Ouarti', 'Karim', '82451b41fd7878180b6aa2b54e369cbec4e8032c', NULL, 1, 0, NULL,NULL),
('0', '0545454545', 'jgt@sfr.fr', '5454', '5454', 'fb644351560d8296fe6da332236b1f8d61b2828a', NULL, 0, 0, NULL,NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Profession`
--
ALTER TABLE `Profession`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Results`
--
ALTER TABLE `Results`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Settings`
--
ALTER TABLE `Settings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`RPPS`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Profession`
--
ALTER TABLE `Profession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Results`
--
ALTER TABLE `Results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Settings`
--
ALTER TABLE `Settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
