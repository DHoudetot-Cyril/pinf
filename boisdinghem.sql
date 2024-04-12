-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 25 avr. 2022 à 11:00
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boisdinghem`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualités`
--

DROP TABLE IF EXISTS `actualités`;
CREATE TABLE IF NOT EXISTS `actualités` (
  `id_actu` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL,
  `contenu` text NOT NULL,
  `date_publication` datetime NOT NULL,
  PRIMARY KEY (`id_actu`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actualités`
--

INSERT INTO `actualités` (`id_actu`, `titre`, `image`, `contenu`, `date_publication`) VALUES
(13, 'Boisdinghem, Le village dont le maire s’appelle Michel Lheureux depuis soixante ans', 'https://lvdneng.rosselcdn.net/sites/default/files/dpistyles_v2/FirstImageUrl/2019/12/28/686908/44733555/public/2019/12/28/B9722038129Z.1_20191228122534_000%2BG5FF6JTQA.1-0.jpg?itok=GWChrk2c1577717362', 'Maire de père en fils (1). Ils sont maires de leur commune, après que leur père l a été lui aussi. Voir le paternel exercer la fonction leur a finalement donné envie de prendre le relais, un peu comme si c’était une transmission. Aujourd’hui, entretien avec Michel Lheureux qui, en 2008, a succédé à son père… Michel. Lequel était maire depuis 1959.', '2022-02-16 22:19:05'),
(19, 'Boisdinghem', 'https://upload.wikimedia.org/wikipedia/commons/8/8d/Boisdinghem_%C3%A9glise.jpg', 'Eglise de boisdinghem ', '2022-03-02 18:26:32'),
(20, 'TEST', 'https://upload.wikimedia.org/wikipedia/commons/8/8d/Boisdinghem_%C3%A9glise.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae risus ex. Ut eget lobortis eros. Aliquam ultrices eleifend tincidunt. Nunc non risus mauris. Proin at leo ut mi mattis commodo. Nullam dignissim varius eros at tempor. Integer vitae quam dapibus mauris lacinia maximus. Ut vel mauris mi.', '2022-03-02 22:35:45');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `passe` varchar(30) NOT NULL,
  `connecte` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `passe`, `connecte`) VALUES
(2, 'leo', 'leo', 1),
(3, 'paul', '123', 1);

-- --------------------------------------------------------

--
-- Structure de la table `conseil municipal`
--

DROP TABLE IF EXISTS `conseil municipal`;
CREATE TABLE IF NOT EXISTS `conseil municipal` (
  `id_personne` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_personne`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conseil municipal`
--

INSERT INTO `conseil municipal` (`id_personne`, `nom`, `prenom`, `role`, `photo`, `description`) VALUES
(1, 'Lheureux', 'Michel', 'Maire', './ressources/elus/Michel Lheureux.jpg', ''),
(2, 'Colin', 'Olivier', 'Adjoint ', './ressources/elus/Olivier COLIN.jpg ', ' '),
(3, 'Fiolet', 'René', 'Adjoint', './ressources/elus/René fiolet.jpg', ''),
(4, 'Legrand ', 'Isabelle', 'Adjoint', './ressources/elus/Isabelle legrand.jpg', ''),
(5, 'Bocquet', 'Christophe', 'Conseiller municipal', './ressources/elus/Christophe Bocquet.jpg', ''),
(6, 'Croquelois', 'Anne-Sophie', 'Conseiller municipal', './ressources/elus/Anne-Sophie CROQUELOIS.jpg', ''),
(7, 'Dufour', 'Danielle', 'Conseiller municipal', './ressources/elus/Danielle Dufour.jpg', ''),
(8, 'Gognau', 'David', 'Conseiller municipal', './ressources/elus/david gognau.jpg', ''),
(9, 'Eric', 'Kowalski', 'Conseiller municipal', './ressources/elus/Eric Kowalski.jpg', ''),
(10, 'Penet', 'Stéphanie', 'Conseiller municipal', './ressources/elus/Stéphanie PENET.jpg', ''),
(11, 'MIKOLAJCZAK', 'Julien', 'Conseiller municipal', './ressources/elus/Julien MIKOLAJCZAK.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `défunt`
--

DROP TABLE IF EXISTS `défunt`;
CREATE TABLE IF NOT EXISTS `défunt` (
  `id_défunt` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `date_décès` date NOT NULL,
  `id_tombe` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` int(11) NOT NULL,
  `nom_image` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `id_page` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lien`
--

DROP TABLE IF EXISTS `lien`;
CREATE TABLE IF NOT EXISTS `lien` (
  `id_lien` int(11) NOT NULL AUTO_INCREMENT,
  `lien` varchar(50) NOT NULL,
  `id_page` int(11) NOT NULL,
  PRIMARY KEY (`id_lien`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
