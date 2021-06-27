-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 11 déc. 2019 à 17:12
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
-- Base de données :  `kalkhi`
--

-- --------------------------------------------------------

--
-- Structure de la table `round`
--

DROP TABLE IF EXISTS `round`;
CREATE TABLE IF NOT EXISTS `round` (
  `datetimee` datetime NOT NULL,
  `chrono` float DEFAULT NULL,
  `nb_tries` int(11) DEFAULT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`datetimee`),
  KEY `pseudo` (`pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `round`
--

INSERT INTO `round` (`datetimee`, `chrono`, `nb_tries`, `pseudo`, `score`) VALUES
('2019-12-11 13:04:26', 0.716667, 7, 'selma1', 71),
('2019-12-11 13:03:24', 1.03333, 7, 'selma1', 103),
('2019-12-11 12:41:57', 0.25, 7, 'selma1', 25),
('2019-12-11 12:35:27', 0.2, 7, 'selma1', 20),
('2019-12-11 12:33:35', 1.05, 7, 'selma1', 105),
('2019-12-11 12:06:31', 0.233333, 7, 'selma1', 23),
('2019-12-11 11:25:23', 0.233333, 7, 'selma1', 23),
('2019-12-11 11:21:34', 1.03333, 4, 'lebdaoui', 25),
('2019-12-10 23:14:17', 0.833333, 7, 'selma1', 83),
('2019-12-10 23:25:43', 1.63333, 6, 'selma1', 81),
('2019-12-11 11:01:41', 0.933333, 6, 'selma1', 46),
('2019-12-11 11:13:51', 0.316667, 7, 'selma1', 31),
('2019-12-11 11:15:50', 0.366667, 7, 'selma1', 36),
('2019-12-11 13:05:09', 1.31667, 7, 'selma1', 131),
('2019-12-11 13:06:28', 1.21667, 7, 'selma1', 121),
('2019-12-11 13:07:41', 75.7667, 6, 'selma1', 3788),
('2019-12-11 14:23:27', 1.16667, 7, 'selma1', 116),
('2019-12-11 14:24:37', 0.333333, 7, 'selma1', 33),
('2019-12-11 14:24:57', 1.75, 7, 'selma1', 175),
('2019-12-11 14:26:42', 3.4, 7, 'selma1', 340),
('2019-12-11 14:30:06', 3.01667, 0, 'selma1', 0),
('2019-12-11 14:33:07', 1.28333, 0, 'selma1', 0),
('2019-12-11 14:34:24', 1.6, 0, 'selma1', 0),
('2019-12-11 14:36:00', 44.8, 0, 'selma1', 0),
('2019-12-11 15:21:50', 16.4833, 7, 'selma1', 1648),
('2019-12-11 15:38:19', NULL, NULL, NULL, NULL),
('2019-12-11 16:03:09', 0.366667, 0, 'selma1', 0),
('2019-12-11 16:03:31', 0.366667, 7, 'selma1', 36),
('2019-12-11 16:03:53', 23.85, 0, 'selma1', 0),
('2019-12-11 16:27:44', NULL, NULL, NULL, NULL),
('2019-12-11 16:58:24', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `pseudo` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`pseudo`, `password`, `nom`, `prenom`, `email`) VALUES
('selma1', 'salma123', 'kalkhi', 'salma', 'salma.kalkhi@gmail.com'),
('yassine', 'medyassine', 'bahajou', 'Med yassine', 'yassine.bahajou@gmail.com'),
('hajouba', '123456789', 'hajjou', 'asmae', 'hajou.asmae@gmail.com'),
('kahmed', '123654', 'kalkhi', 'ahmed ', 'kalkhi.ahmed@gmail.com'),
('lebdaoui', '123456', 'Lebdaoui', 'Meryam', 'meryemlebdaoui@gmail');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
