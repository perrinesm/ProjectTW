-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 23 oct. 2019 à 08:22
-- Version du serveur :  5.7.10-log
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pineapple`
--

-- --------------------------------------------------------

--
-- Structure de la table `tableproduit`
--

DROP TABLE IF EXISTS `tableproduit`;
CREATE TABLE IF NOT EXISTS `tableproduit` (
  `type` varchar(255) NOT NULL,
  `produit` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `car1` varchar(255) NOT NULL,
  `car2` varchar(255) NOT NULL,
  `car3` varchar(255) NOT NULL,
  `car4` varchar(255) NOT NULL,
  `car5` varchar(255) NOT NULL,
  `car6` varchar(255) NOT NULL,
  `car7` varchar(255) NOT NULL,
  `car8` varchar(255) NOT NULL,
  `des1` varchar(255) NOT NULL,
  `des2` varchar(255) NOT NULL,
  `des3` varchar(255) NOT NULL,
  `des4` varchar(255) NOT NULL,
  `des5` varchar(255) NOT NULL,
  `des6` varchar(255) NOT NULL,
  `des7` varchar(255) NOT NULL,
  `des8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tableproduit`
--

INSERT INTO `tableproduit` (`type`, `produit`, `image`, `prix`, `description`, `car1`, `car2`, `car3`, `car4`, `car5`, `car6`, `car7`, `car8`, `des1`, `des2`, `des3`, `des4`, `des5`, `des6`, `des7`, `des8`) VALUES
('tablette', 'PinPad Pro 13.3', 'tabA1.png', 899.99, 'Meilleure tablette du marché. Une technologie est toute nouvelle, tout écran, toute puissante. Elle renferme nos technologies les plus avancées dans un design complètement réinventé.. Waterproof .', 'Type de produit :', 'Capacité :', 'Processeur :', 'Type de carte graphique :', 'Caméra TrueDepth :', 'Système d\'exploitation :', 'Mémoire graphique :', '', 'Tablette', '512 Go', 'Puce A12X Bionic avec architecture 64 bits.Neural Engine. Coprocesseur M12 intégré', 'Intel Iris Plus Graphics 645', 'Photos 7 Mpx Capteur arrière de luminosité.Stabilisation automatique de l’image.', 'iOS 14.5', '8.0 Go', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
