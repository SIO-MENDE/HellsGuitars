-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Base de données: `hellsguitars`
--

DROP DATABASE IF EXISTS `hellsguitars`;
CREATE DATABASE IF NOT EXISTS `hellsguitars`
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE `hellsguitars`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `idCateg` int(11) NOT NULL AUTO_INCREMENT,
  `libCateg` varchar(50) NOT NULL,
  PRIMARY KEY (`idCateg`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`idCateg`, `libCateg`) VALUES
(1, 'Guitares Electriques'),
(2, 'Guitares Folks'),
(3, 'Guitares Classiques'),
(4, 'Basses');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `refProd` varchar(10) NOT NULL,
  `nomProd` varchar(255) NOT NULL,
  `descProd` longtext,
  `PUHTProd` decimal(8,2) NOT NULL,
  `categProd` int(11) NOT NULL,
  PRIMARY KEY (`refProd`),
  KEY `categProd` (`categProd`),
  KEY `categProd_2` (`categProd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`refProd`, `nomProd`, `descProd`, `PUHTProd`, `categProd`) VALUES
('ARIAC100F', 'Aria AC 100 F natural', 'Guitare flamenco\r\nTable en épicéa massif\r\nDos et éclisses en érable sycomore massif\r\nManche acajou\r\nTouche ébène\r\nDiapason 650mm (25.59")\r\n19 frettes\r\nAcastillage doré', '790.00', 3),
('CDBIBC7', 'Cordoba Iberia C7 natural', 'Table massive en cèdre canadien\r\nFond et éclisses palissandre indien\r\nManche cèdre\r\nTouche palissandre\r\nDiapason 650mm\r\nLargeur au sillet 52mm\r\nChevalet en os\r\nRosace mosaic en bois\r\nCordes Savarez Cristal Corum 500CRJ\r\nFinition brillante\r\nLivré avec housse', '440.00', 3),
('CRTBASSACT', 'Cort Action Bass Active black', 'Basse active\r\nCorps agathis\r\nManche érable\r\nTouche palissandre\r\n1 micro PB\r\n1 micro JB Powersound\r\nEqualiseur actif 2 bandes\r\nChevalet EB7\r\nAccastillage chromé', '226.00', 4),
('EPICASLNN', 'Epiphone Casino ed. lim. John Lennon Finition Natural', 'Rendre hommage au plus célèbre Epiphone Casino jamais joué ! Le Casino de « Révolution » est une réplique de guitare Epiphone préféré de John pendant qu''il travaillait sur « The White Album » et « Abbey Road ». Cette Gibson USA P-90 deux micros du caractéristiques de la guitare incroyable et un corps fabriqué à partir de bois d''érable et inclut même un Etui Epiphone officiel.', '799.50', 1),
('EPILPMG', 'Epiphone Les paul Standard metallic gold', 'Spécifications techniques :\r\nCorps acajou\r\nManche collé en acajou\r\nTouche palissandre\r\nDiapason 628.65mm\r\nLargeur au sillet 42.67mm\r\nRepères trapezoid\r\nAccastillage chromé\r\nMicros doubles Alnico Classic', '319.00', 1),
('EPIRIVP93', 'Epiphone Riviera Custom P93 wine red', 'Spécifications techniques :\r\nTable érable\r\nCorps érable\r\nManche collé acajou\r\nTouche palissandre\r\nDiapason 628.65mm\r\nRepères parallelogram\r\n3 micros Alnico V P-90s\r\nCordier Bigsby\r\nAccastillage doré', '385.00', 1),
('EPISHEUJ', 'Epiphone Union Jack Sheraton', 'Rendant hommage au mouvement Brit Pop, l''Union Jack Sheraton est inspirée Noel Gallagher. Elle comprend des Gibson USA mini-humbuckers ainsi que des mécaniques Grover de haute qualité. Les détails sont fidèles à la conception Epiphone Sheraton 1996 d''origine.', '755.00', 1),
('EPISWGEMP', 'Epiphone Emperor Swingster translucent black', 'Spécifications techniques :\r\nTable épicéa bombé sélectionné\r\nCorps érable laminé\r\nManche 3-pcs érable\r\nTouche palissandre\r\nDiapason 628.65mm (24.75")\r\nLargeur au sillet 42.67mm (1.68")\r\nRepères block\r\n2 micros SwingBuckers\r\nVibrato Bigsby B60\r\nAccastillage nickel', '595.00', 1),
('KRMDISCWH', 'Kramer Disciple pearl white', 'Corps acajou\r\nManche érable\r\nTouche ébène\r\nDiapason 863.60mm\r\n24 frettes\r\nMicro EMG MMCS\r\nPréampli EMG BTS\r\nContrôle volume, treble et basse\r\nAccastillage noir', '298.20', 4),
('LAGTRT400D', 'Lag Tramontane T400D natural', 'Tête palissandre d''Indonésie avec logo incrusté en érable\r\nTable Epicéa de Sitka massif\r\nDos et éclisses palissandre d''Indonésie avec filets palissandre et érable\r\nManche acajou\r\nTouche palissandre d''Indonésie\r\nLargeur au sillet 43mm\r\n20 frettes médium silver nickel\r\nMécaniques bain d''huile avec boutons "tulipe"\r\nTige de réglage double sens\r\nSillet de tête graphite\r\nRosace Tramontane à croix occitane\r\nChevalet palissandre d''Indonésie\r\nFinition Vernis brillant\r\nCordes Elixir', '459.50', 2),
('MARDX1AE', 'Martin X serie DX1AE natural', 'Forme de corps D14\r\nTable épicéa sitka massif\r\nFond et éclisses acajou pattern HPL\r\nManche rust stratabond\r\nTouche black richlite\r\nDiapason 645.16mm (25.4")\r\nLargeur au sillet 42.86mm (1-11/16")\r\nRayon de la touche 406.4mm (16")\r\nMécaniques chromées\r\nPlaque tortoise\r\nElectronique Fishman Sonitone\r\nChevalet black richlite', '650.00', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `idC` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomC` varchar(40) NOT NULL,
  `prenomC` varchar(20) NOT NULL,
  `adresseC` varchar(40) NOT NULL,
  `cpC` char(5) NOT NULL,
  `villeC` varchar(40) NOT NULL,
  `mailC` varchar(50) NOT NULL,
  `passwordC` varchar(32) NOT NULL,
  PRIMARY KEY (`idC`),
  UNIQUE KEY `mailC` (`mailC`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `clients` (`idC`,`nomC`,`prenomC`,`adresseC`,`cpC`,`villeC`,`mailC`,`passwordC`) VALUES
(1, 'Passalaqua', 'Joseph', '2 rue de la Sicile', '48000', 'Mende','j.pass@gmail.com','joseph'),
(2, 'Reinhardt','Django','3 rue de la Belgique', '48000', 'Mende','d.reinhardt@gmail.com','django');


-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idA` varchar(32) NOT NULL,  
  `passwordA` varchar(32) NOT NULL,
  PRIMARY KEY (`idA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`idA`, `passwordA`) VALUES
('admin','admin'),
('jvaissade','jv48');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`categProd`) REFERENCES `categories` (`idCateg`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
