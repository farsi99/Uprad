-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 mai 2019 à 07:16
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
  `membre_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `email`, `password`, `membre_id`) VALUES
(1, 'Farouk', 'farouksoule@gmail.com', '585425d0d5e399f115c642f3b602806ae04edb94', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `titre_court`, `libelle_url`, `resume`, `content`, `date_creation`, `date_modification`, `article_type_id`, `meta_title`, `meta_description`, `thumbnail`, `ordre`, `station_id`, `format`, `status`, `auteur`) VALUES
(1, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste)', '', '', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Pour attribuer les moyens aux établissements d’enseignement supérieur, \"les modèles du type Sympa ou Modal n’ont pas beaucoup de sens\", estime Philippe Baptiste, directeur de cabinet de Frédérique Vidal, ministre de l’Enseignement supérieur, de la Recherche et de l’Innovation. Il s’exprime lors d’une audition par la MEC (mission d’évaluation et de contrôle) de l’Assemblée nationale, le 31 mai 2018, sur la question du financement public de la recherche dans les universités. Il préconise plutôt de \"travailler à un dialogue de gestion basé sur quelques indicateurs choisis conjointement\". \"Nous souhaitons l’expérimenter dès la rentrée avec un certain nombre d’universités\", annonce-t-il. Cette déclaration répond à la demande d’un tel dialogue de gestion formulée un peu plus tôt dans la journée par Jean Chambaz, président de Sorbonne Université et de la Curif, auditionné lui aussi par la MEC.                                                                                                                                                                                                                                                                                                                                                                                                                                                ', '<p>Si &quot;l&rsquo;&Eacute;tat a un dialogue annuel et un suivi attentif avec ses organismes de recherche&quot;, &quot;la gestion des priorit&eacute;s et des budgets des universit&eacute;s et des &eacute;coles se fait de mani&egrave;re plus m&eacute;caniste&quot;, explique Philippe Baptiste, directeur de cabinet de Fr&eacute;d&eacute;rique Vidal. Il s&rsquo;exprime lors d&rsquo;une audition, le 31 mai 2018, par les d&eacute;put&eacute;s Am&eacute;lie de Montchalin (LREM, Essonne), Dani&egrave;le H&eacute;rin (LREM, Aude) et Patrick Hetzel (LR, Bas-Rhin), qui m&egrave;nent une mission d&rsquo;&eacute;valuation et de contr&ocirc;le sur le financement public de la recherche dans les universit&eacute;s. UN DIALOGUE &quot;N&Eacute;CESSAIRE&quot; AVANT L&rsquo;ATTRIBUTION BUDG&Eacute;TAIRE &quot;Il est absolument essentiel que l&rsquo;on se mette en ordre de bataille, &Eacute;tat et op&eacute;rateurs, pour avoir, comme dans toute entit&eacute; moderne, un dialogue annuel de gestion et de strat&eacute;gie qui permette de comprendre quels sont les besoins de l&rsquo;&Eacute;tat [&hellip;] et d&rsquo;avoir une vision claire de la strat&eacute;gie des &eacute;coles et des universit&eacute;s, avec leurs besoins de financement&quot;, d&eacute;fend Philippe Baptiste. Il indique que le minist&egrave;re souhaite &quot;l&rsquo;exp&eacute;rimenter d&egrave;s la rentr&eacute;e&quot; avec quelques universit&eacute;s. &quot;Nous commen&ccedil;ons les discussions en ce moment&quot;, pr&eacute;cise-t-il. &quot;Cela ne veut pas dire que nous allons g&eacute;n&eacute;rer des cr&eacute;dits suppl&eacute;mentaires, pr&eacute;vient-il n&eacute;anmoins, mais ce dialogue avant l&rsquo;attribution budg&eacute;taire me semble n&eacute;cessaire.&quot; JEAN CHAMBAZ : &quot;AVOIR LE M&Ecirc;ME DIALOGUE BUDG&Eacute;TAIRE QUE LES EPST&quot; Jean Chambaz, pr&eacute;sident de Sorbonne Universit&eacute; et de la Curif | &copy; UPMC / Laurent ArdhuinCette annonce r&eacute;pond &agrave; une demande formul&eacute;e plus t&ocirc;t dans l&rsquo;apr&egrave;s-midi par Jean Chambaz, pr&eacute;sident de Sorbonne Universit&eacute; et de la Curif, auditionn&eacute; lui aussi par la MEC : &quot;Nous aimerions le m&ecirc;me dialogue budg&eacute;taire avec l&rsquo;&Eacute;tat que les EPST&quot;, d&eacute;clare-t-il aux d&eacute;put&eacute;s, regrettant que les universit&eacute;s soient &quot;aujourd&rsquo;hui [&hellip;] toujours dans un dialogue d&rsquo;objectifs, jamais de moyens&quot;. Un dialogue selon lui d&rsquo;autant plus n&eacute;cessaire que la structure actuelle du budget de l&rsquo;&Eacute;tat &quot;ne permet pas de prise en compte des sp&eacute;cificit&eacute;s de la recherche&quot; des &eacute;tablissements d&rsquo;enseignement sup&eacute;rieur. Ainsi, l&rsquo;affectation des moyens budg&eacute;taires des universit&eacute;s via le programme 150 est selon lui &quot;p&eacute;nalisante&quot; pour les &quot;universit&eacute;s de recherche&quot;. En particulier, illustre-t-il, ce programme budg&eacute;taire &quot;n&rsquo;identifie pas le poids des infrastructures&quot; que les universit&eacute;s d&eacute;ploient pour h&eacute;berger les activit&eacute;s de recherche. &quot;La recherche est essentiellement men&eacute;e dans des unit&eacute;s mixtes avec les EPST, ce qui &eacute;largit nos capacit&eacute;s critiques, mais c&rsquo;est &agrave; nous que revient de porter l&rsquo;h&eacute;bergement&quot;, souligne-t-il. En r&eacute;ponse &agrave; une question d&rsquo;Am&eacute;lie de Montchalin, qui se demande si les idex ne seraient pas &quot;un bon p&eacute;rim&egrave;tre de d&eacute;part pour exp&eacute;rimenter&quot; ce dialogue de gestion, Jean Chambaz estime que &quot;c&rsquo;est une option&quot; : &quot;Je ne suis pas s&ucirc;r qu&rsquo;il faille stigmatiser les autres. Il serait pr&eacute;f&eacute;rable de laisser les universit&eacute;s demander&quot; elles-m&ecirc;mes &agrave; entrer dans l&rsquo;exp&eacute;rimentation, sugg&egrave;re-t-il.</p>', '2019-05-10 12:56:13', '2019-05-31 00:00:00', 1, 'maintenant nous saisissons quelque chose par ici', 'voila ce que ça donne', NULL, 1, 1, 1, 1, 'Farouk Soulé'),
(2, 'lorem ipsaum par ici nous avons quielque chose qui tient la route', NULL, '', 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste)', 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste)', '2019-05-14 10:20:00', NULL, 1, NULL, NULL, NULL, 1, 1, 2, 1, NULL),
(6, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Abdillah'),
(7, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, 'financement-de-la-recherche-le-mesri-veut-experimenter-un-dialogue-de-gestion-avec-quelques-universites-ph-baptiste-ok-la-famille', '                                                                            ', '<p>Financement de la recherche : le MESRI veut exp&eacute;rimenter un dialogue de gestion avec quelques universit&eacute;s (Ph. Baptiste). Vous avez raison sur tout &ccedil;a</p>', '2019-05-10 14:30:08', NULL, 1, '', '', NULL, 1, NULL, 1, 1, 'Said'),
(18, 'Deuxieme page evenement', NULL, 'deuxieme-page-evenement', NULL, '<p>ok la famille pour tout</p>', '2019-05-10 14:28:06', NULL, 2, 'maintenant nous saisissons quelque chose par ici', 'voila ce que ça donne', '20171014_170505.jpg', 1, NULL, NULL, NULL, NULL),
(9, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Abdillah'),
(10, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Abdillah'),
(11, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste) ok la famille', NULL, '', NULL, 'Financement de la recherche : le MESRI veut expérimenter un dialogue de gestion avec quelques universités (Ph. Baptiste). Vous avez raison sur tout ça', '2019-05-15 06:35:00', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Abdillah'),
(12, 'presentation marque blanche', NULL, '', 'voila un contenue sincere', '', '2019-05-17 00:00:00', NULL, 1, 'presentation marque blanche', 'Nous sommes en phase', '20180608_165729.jpg', 1, NULL, 0, 1, NULL),
(13, 'Test developpeur refuser', NULL, '', 'voila ce que ça donne', '', '2019-05-30 00:00:00', NULL, 1, 'ok la famille', 'Nous sommes en phase', 'prison_gpe_face.jpg', 1, NULL, 0, NULL, NULL),
(14, 'presentation marque blanche', NULL, '', 'fd', '', '2019-05-17 00:00:00', NULL, 1, 'presentation marque blanche', 'Nous sommes en phase', '', 1, NULL, 0, NULL, NULL),
(15, 'test farouk', NULL, '', 'dfdf', '', '2019-05-16 00:00:00', NULL, 1, 'presentation marque blanche', 'preseantion entiere', '', 1, NULL, 0, NULL, NULL),
(16, 'Test Farouk', NULL, '', '', '', '2019-05-16 00:00:00', NULL, 1, 'presentation marque blanche', 'preseantion entiere', '', 1, NULL, 0, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ass-station-article`
--

INSERT INTO `ass-station-article` (`id`, `id_station`, `id_article`) VALUES
(12, 3, 1),
(13, 1, 7),
(11, 1, 1);

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
-- Structure de la table `historiquevisite`
--

DROP TABLE IF EXISTS `historiquevisite`;
CREATE TABLE IF NOT EXISTS `historiquevisite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresseIp` varchar(15) DEFAULT NULL,
  `navigateur` varchar(255) DEFAULT NULL,
  `date_visite` datetime DEFAULT NULL,
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
  `cp` varchar(15) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `pays` varchar(75) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `fonction` varchar(75) DEFAULT NULL,
  `dateAdhesion` datetime DEFAULT NULL,
  `dateSortie` datetime DEFAULT NULL,
  `cluf` datetime DEFAULT NULL,
  `confidentialiteDonnees` datetime DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `etat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `civilite`, `prenom`, `nom`, `adresse`, `cp`, `ville`, `pays`, `email`, `telephone`, `fonction`, `dateAdhesion`, `dateSortie`, `cluf`, `confidentialiteDonnees`, `password`, `photo`, `etat`) VALUES
(1, 'Madame', 'Farsi', 'Turbos', NULL, NULL, NULL, NULL, 'farsi_99@hotmail.com', '+33648566240', NULL, '2019-05-13 06:16:54', NULL, NULL, NULL, NULL, '56189869_318944495437343_6808059536855793664_n.png', 0),
(2, 'Madame', 'Soulé', 'Farouk', '69 Avenue Gaston Vermeire', '95340', 'Persan', NULL, 'dahoniinfo@gmail.com', '0644983156', 'Developpeur', '2019-05-12 09:54:57', NULL, NULL, NULL, NULL, '20171014_161917.jpg', 1),
(3, 'Monsieur', 'Amine', 'Mahlouf', NULL, NULL, NULL, NULL, 'amin@gmail.com', '', NULL, '2019-05-13 06:15:06', NULL, NULL, NULL, NULL, '56189869_318944495437343_6808059536855793664_n.png', 0);

-- --------------------------------------------------------

--
-- Structure de la table `salonidee`
--

DROP TABLE IF EXISTS `salonidee`;
CREATE TABLE IF NOT EXISTS `salonidee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(255) DEFAULT NULL,
  `contenu` text,
  `typeidee` varchar(45) DEFAULT NULL,
  `prenom` varchar(75) DEFAULT NULL,
  `nom` varchar(75) DEFAULT NULL,
  `civilite` varchar(15) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `etat` int(11) DEFAULT NULL COMMENT '0-En attente,1-validé,3-refuser',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salonidee`
--

INSERT INTO `salonidee` (`id`, `sujet`, `contenu`, `typeidee`, `prenom`, `nom`, `civilite`, `email`, `telephone`, `etat`) VALUES
(1, 'L\'ecole pour tous', 'Nous proposons l\'éducation gratuite pour l\'ensemble des enfants d\'algerie', 'Education', 'Farsi', 'Turbos', NULL, 'farsi_99@hotmail.com', '+33648566240', 0),
(2, 'pauvreté de la population', 'Luttons ensemble contre la pauvreté du pays', 'sociale', 'Ahmed', 'Elkader', NULL, NULL, NULL, 1),
(3, 'Financement des micro entreprises', 'Comment financés notre société pour emerger un mode de vie different', 'sociale', 'Amine', 'Mahlouf', 'Monsieur', NULL, NULL, 2),
(4, 'test idées', 'Voila ce que ça donne', 'Rien', 'Marche', 'Ok', 'Madame', 'marche@gmail.com', '', 1);

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
