-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 04 mai 2019 à 19:42
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `algerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(75) DEFAULT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `titre_court` varchar(255) NOT NULL,
  `libelle_url` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `content` text NOT NULL,
  `date_creation` date NOT NULL,
  `date_modification` date NOT NULL,
  `article_type_id` int(11) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `ordre` int(5) NOT NULL DEFAULT '1',
  `station_id` int(11) NOT NULL,
  `format` int(11) NOT NULL COMMENT '1-Article,2-video,3-infographie',
  `status` int(11) DEFAULT NULL COMMENT '1:en attente, 2: validé'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article_type`
--

DROP TABLE IF EXISTS `article_type`;
CREATE TABLE IF NOT EXISTS `article_type` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(15) DEFAULT NULL,
  `prenom` varchar(75) DEFAULT NULL,
  `nom` varchar(75) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `twitter` varchar(45) DEFAULT NULL,
  `skype` varchar(45) DEFAULT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `linkdin` varchar(45) DEFAULT NULL,
  `youtube` varchar(45) DEFAULT NULL,
  `fonction` varchar(45) DEFAULT NULL,
  `service` varchar(45) DEFAULT NULL,
  `photo` varchar(75) DEFAULT NULL,
  `membre_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `description` text,
  `dateDebut` datetime DEFAULT NULL,
  `dateFin` datetime DEFAULT NULL,
  `adresse` text,
  `cp` varchar(15) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `typeEvenement` int(11) DEFAULT NULL COMMENT '0: En attente, 1:validé,2:rejeté,3:supprimé',
  `status` int(11) DEFAULT NULL,
  `membre_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gelerie`
--

DROP TABLE IF EXISTS `gelerie`;
CREATE TABLE IF NOT EXISTS `gelerie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(15) DEFAULT NULL,
  `prenom` varchar(75) DEFAULT NULL,
  `nom` varchar(75) NOT NULL,
  `adresse` text,
  `codepostal` varchar(15) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `fonction` varchar(75) DEFAULT NULL,
  `dateAdhesion` datetime DEFAULT NULL,
  `dateSortie` datetime DEFAULT NULL,
  `cluf` datetime DEFAULT NULL,
  `confidentialiteDonnees` datetime DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `station`
--

DROP TABLE IF EXISTS `station`;
CREATE TABLE IF NOT EXISTS `station` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb-idee`
--

DROP TABLE IF EXISTS `tb-idee`;
CREATE TABLE IF NOT EXISTS `tb-idee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(255) DEFAULT NULL,
  `contenu` text,
  `typeidee` varchar(45) DEFAULT NULL,
  `prenom` varchar(75) DEFAULT NULL,
  `nom` varchar(75) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `membre_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text,
  `membre_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
