-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mar 08 Octobre 2013 à 08:34
-- Version du serveur: 5.5.32
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `siteweb`
--
CREATE DATABASE IF NOT EXISTS `chicTendance` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chicTendance`;

-- --------------------------------------------------------

--
-- Structure de la table `t_createur`
--

CREATE TABLE IF NOT EXISTS `t_createur` (
  `CREA_ID` int(3) NOT NULL,
  `CREA_NOM` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CREA_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_robe_de_soiree`
--

CREATE TABLE IF NOT EXISTS `t_robe_de_soiree` (
  `ROBE_ID` int(3) NOT NULL,
  `ROBE_NOM` varchar(50) DEFAULT NULL,
  `ROBE_DATEAJOUT` date DEFAULT NULL,
  `ROBE_PRIX` decimal(5,2) DEFAULT NULL,
  `ROBE_IMAGE` varchar(200) DEFAULT NULL,
  `CREA_ID` int(3) DEFAULT NULL,
  `STYL_ID` int(3) DEFAULT NULL,
  PRIMARY KEY (`ROBE_ID`),
  KEY `FK_ROBE_CLASSER_CREATEUR` (`CREA_ID`),
  KEY `FK_ROBE_CLASSER_STYLE` (`STYL_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_style`
--

CREATE TABLE IF NOT EXISTS `t_style` (
  `STYL_ID` int(3) NOT NULL,
  `STYL_LIBELLE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`STYL_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_robe_de_soiree`
--
ALTER TABLE `t_robe_de_soiree`
  ADD CONSTRAINT `FK_ROBE_CLASSER_CREATEUR` FOREIGN KEY (`CREA_ID`) REFERENCES `t_createur` (`CREA_ID`),
  ADD CONSTRAINT `FK_ROBE_CLASSER_STYLE` FOREIGN KEY (`STYL_ID`) REFERENCES `t_style` (`STYL_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE USER 'userCT' IDENTIFIED BY 'ct';
GRANT ALL PRIVILEGES ON *.* TO 'userCT';