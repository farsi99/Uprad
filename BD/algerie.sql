-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 09 mai 2019 à 08:49
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `titre_court` varchar(255) DEFAULT NULL,
  `libelle_url` varchar(255) NOT NULL,
  `resume` text,
  `content` text NOT NULL,
  `date_creation` datetime DEFAULT NULL,
  `date_modification` datetime DEFAULT NULL,
  `article_type_id` int(11) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `ordre` int(5) NOT NULL DEFAULT '1',
  `station_id` int(11) DEFAULT NULL,
  `format` int(11) DEFAULT NULL COMMENT '1-Article,2-video,3-infographie',
  `status` int(11) DEFAULT NULL COMMENT '1:en attente, 2: validé',
  `auteur` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `titre_court`, `libelle_url`, `resume`, `content`, `date_creation`, `date_modification`, `article_type_id`, `meta_title`, `meta_description`, `thumbnail`, `ordre`, `station_id`, `format`, `status`, `auteur`) VALUES
(1, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste)', '', '', 'Pour attribuer les moyens aux établissements d’enseignement supérieur, \"les modèles du type Sympa ou Modal n’ont pas beaucoup de sens\", estime Philippe Baptiste, directeur de cabinet de Frédérique Vidal, ministre de l’Enseignement supérieur, de la Recherche et de l’Innovation. Il s’exprime lors d’une audition par la MEC (mission d’évaluation et de contrôle) de l’Assemblée nationale, le 31 mai 2018, sur la question du financement public de la recherche dans les universités. Il préconise plutôt de \"travailler à un dialogue de gestion basé sur quelques indicateurs choisis conjointement\". \"Nous souhaitons l’expérimenter dès la rentrée avec un certain nombre d’universités\", annonce-t-il. Cette déclaration répond à la demande d’un tel dialogue de gestion formulée un peu plus tôt dans la journée par Jean Chambaz, président de Sorbonne Université et de la Curif, auditionné lui aussi par la MEC.', 'Si \"l’État a un dialogue annuel et un suivi attentif avec ses organismes de recherche\", \"la gestion des priorités et des budgets des universités et des écoles se fait de manière plus mécaniste\", explique Philippe Baptiste, directeur de cabinet de Frédérique Vidal. Il s’exprime lors d’une audition, le 31 mai 2018, par les députés Amélie de Montchalin (LREM, Essonne), Danièle Hérin (LREM, Aude) et Patrick Hetzel (LR, Bas-Rhin), qui mènent une mission d’évaluation et de contrôle sur le financement public de la recherche dans les universités.\r\n\r\nUN DIALOGUE \"NÉCESSAIRE\" AVANT L’ATTRIBUTION BUDGÉTAIRE\r\n\r\n\"Il est absolument essentiel que l’on se mette en ordre de bataille, État et opérateurs, pour avoir, comme dans toute entité moderne, un dialogue annuel de gestion et de stratégie qui permette de comprendre quels sont les besoins de l’État […] et d’avoir une vision claire de la stratégie des écoles et des universités, avec leurs besoins de financement\", défend Philippe Baptiste.\r\n\r\nIl indique que le ministère souhaite \"l’expérimenter dès la rentrée\" avec quelques universités. \"Nous commençons les discussions en ce moment\", précise-t-il. \"Cela ne veut pas dire que nous allons générer des crédits supplémentaires, prévient-il néanmoins, mais ce dialogue avant l’attribution budgétaire me semble nécessaire.\"\r\n\r\nJEAN CHAMBAZ : \"AVOIR LE MÊME DIALOGUE BUDGÉTAIRE QUE LES EPST\"\r\n\r\nJean Chambaz, président de Sorbonne Université et de la Curif | © UPMC / Laurent ArdhuinCette annonce répond à une demande formulée plus tôt dans l’après-midi par Jean Chambaz, président de Sorbonne Université et de la Curif, auditionné lui aussi par la MEC : \"Nous aimerions le même dialogue budgétaire avec l’État que les EPST\", déclare-t-il aux députés, regrettant que les universités soient \"aujourd’hui […] toujours dans un dialogue d’objectifs, jamais de moyens\". Un dialogue selon lui d’autant plus nécessaire que la structure actuelle du budget de l’État \"ne permet pas de prise en compte des spécificités de la recherche\" des établissements d’enseignement supérieur.\r\n\r\nAinsi, l’affectation des moyens budgétaires des universités via le programme 150 est selon lui \"pénalisante\" pour les \"universités de recherche\". En particulier, illustre-t-il, ce programme budgétaire \"n’identifie pas le poids des infrastructures\" que les universités déploient pour héberger les activités de recherche. \"La recherche est essentiellement menée dans des unités mixtes avec les EPST, ce qui élargit nos capacités critiques, mais c’est à nous que revient de porter l’hébergement\", souligne-t-il.\r\n\r\nEn réponse à une question d’Amélie de Montchalin, qui se demande si les idex ne seraient pas \"un bon périmètre de départ pour expérimenter\" ce dialogue de gestion, Jean Chambaz estime que \"c’est une option\" : \"Je ne suis pas sûr qu’il faille stigmatiser les autres. Il serait préférable de laisser les universités demander\" elles-mêmes à entrer dans l’expérimentation, suggère-t-il.', '2019-05-07 00:00:00', '2019-05-31 00:00:00', 1, '', '', NULL, 1, 1, 1, NULL, 'Farouk Soulé'),
(2, 'lorem ipsaum par ici nous avons quielque chose qui tient la route', NULL, '', 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste)', 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste)', '2019-05-14 10:20:00', NULL, 1, NULL, NULL, NULL, 1, 1, 2, 1, NULL),
(3, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Abdillah'),
(4, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Abdillah'),
(5, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Abdillah'),
(6, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Abdillah'),
(7, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Said'),
(8, 'ok Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Moahmed'),
(9, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Abdillah'),
(10, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Abdillah'),
(11, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Abdillah'),
(12, 'presentation marque blanche', NULL, '', 'voila un contenue sincere', '', '2019-05-17 00:00:00', NULL, 1, 'presentation marque blanche', 'Nous sommes en phase', '20180608_165729.jpg', 1, NULL, 0, 1, NULL),
(13, 'Test developpeur refuser', NULL, '', 'voila ce que ça donne', '', '2019-05-30 00:00:00', NULL, 1, 'ok la famille', 'Nous sommes en phase', 'prison_gpe_face.jpg', 1, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article_type`
--

DROP TABLE IF EXISTS `article_type`;
CREATE TABLE IF NOT EXISTS `article_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article_type`
--

INSERT INTO `article_type` (`id`, `libelle`) VALUES
(1, 'Actualites'),
(2, 'Pages');

-- --------------------------------------------------------

--
-- Structure de la table `ass-station-article`
--

DROP TABLE IF EXISTS `ass-station-article`;
CREATE TABLE IF NOT EXISTS `ass-station-article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_station` int(11) DEFAULT NULL,
  `id_article` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `station`
--

INSERT INTO `station` (`id`, `libelle`) VALUES
(1, 'Politique & gouvernance'),
(2, 'Economie & Sociale'),
(3, 'Education & santé'),
(4, 'Jeunesse & Sports');

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
