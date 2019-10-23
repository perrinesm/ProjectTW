-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 23 Octobre 2019 à 15:14
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pineapple`
--

-- --------------------------------------------------------

--
-- Structure de la table `tableproduit`
--

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
-- Contenu de la table `tableproduit`
--

INSERT INTO `tableproduit` (`type`, `produit`, `image`, `prix`, `description`, `car1`, `car2`, `car3`, `car4`, `car5`, `car6`, `car7`, `car8`, `des1`, `des2`, `des3`, `des4`, `des5`, `des6`, `des7`, `des8`) VALUES
('tablette', 'PinPad Pro 13.3', 'tabA1.png', 899.99, 'Meilleure tablette du marché. Une technologie est toute nouvelle, tout écran, toute puissante. Elle renferme nos technologies les plus avancées dans un design complètement réinventé.. Waterproof .', 'Type de produit :', 'Capacité :', 'Processeur :', 'Type de carte graphique :', 'Caméra TrueDepth :', 'Système d''exploitation :', 'Mémoire graphique :', '', 'Tablette', '512 Go', 'Puce A12X Bionic avec architecture 64 bits.Neural Engine. Coprocesseur M12 intégré', 'Intel Iris Plus Graphics 645', 'Photos 7 Mpx Capteur arrière de luminosité.Stabilisation automatique de l’image.', 'iOS 14.5', '8.0 Go', ''),
('Tablette', 'Pin Smart', 'tabA2.png', 459.99, 'Conçu et testé par Pineapple la tablette PinSmart dispose d''un processeur quadricoeur plus rapide. \r\nBatterie offrant jusqu''à 24h d''autonomie.\r\nNaviguez sur Internet, regardez des films, un grand divertissement jour après jour.\r\nWaterproof .', 'Type de produit :', 'Capacité :', 'Processeur :', 'Type de carte graphique :', 'Caméra TrueDepth :', 'Système d''exploitation :', 'Mémoire graphique :', '', 'Tablette', '100 Go', 'Puce A12X Bionic avec architecture 64 bits.Neural Engine. Coprocesseur M12 intégré', 'Intel Iris Plus Graphics 645.', 'Photos 7 Mpx Capteur arrière de luminosité. Stabilisation automatique de l’image.', 'iOS 14.5', '8.0 Go', ''),
('ordinateur', 'PinPad Pro 13.3', 'ordiA1.png', 4599, 'Une incroyable puissance. Au meilleur prix. \r\nWaterproof .', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'Fréquence :', 'Résolution de la webcam :', 'Système d''exploitation :', 'Mémoire graphique :', '', 'Ultra portable - Sub Notebook', 'Intel Core i5', 'Intel Iris Plus Graphics 645', 'Intel Iris Plus Graphics 645', 'Caméra FaceTime HD 720p', 'Mac OS Mojave', '8.0 Go', ''),
('ordinateur', 'PinPad Pro 13.3', 'ordiA1.png', 4599.9, 'Une incroyable puissance. Au meilleur prix. \r\nWaterproof .', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'Fréquence :', 'Résolution de la webcam :', 'Système d''exploitation :', 'Mémoire graphique :', '', 'Ultra portable - Sub Notebook', 'Intel Core i5', 'Intel Iris Plus Graphics 645', 'Intel Iris Plus Graphics 645', 'Caméra FaceTime HD 720p', 'Mac OS Mojave', '8.0 Go', ''),
('ordinateur', 'PinTosh 1984 GRIFFIN', 'ordiA2.png', 5599.9, 'Une relique remasterisée en PC gaming nouvelle génération pouvant faire tourner n''importe quel jeu.\r\nEgalement très utile pour du minage de bitcoin.', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'Fréquence :', 'Capacité SSD :', 'Système d''exploitation :', 'Mémoire graphique :', '', 'Gamer', 'Intel® Core i9-8950HK', 'NVIDIA GeForce RTX 2080', '2666 MHz ', '1000.0 Go', 'Windows 11', '8.0 Go', ''),
('ordinateur', 'Universe PinTab', 'ordiS1.png', 749.9, '', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'Fréquence :', 'Durée de fonctionnement :', 'Système d''exploitation :', 'Mémoire graphique :', '', 'Ultra portable - Sub Notebook', 'Intel Core i5 7200U (Dual-Core 3.1 GHz)', 'Intel HD Graphics 615', 'de 1.4 GHz à 3.9 GHz', 'Jusqu''à 13.5 heures', 'Windows 10', '6.0 Go', ''),
('ordinateur', 'SurvivorPin 2.0', 'ordiS2.png', 419.9, '', 'Type de produit :', 'Processeur :', 'Ecran :', 'Type de carte graphique :', 'Durée d''utilisation :', 'Résolution de la webcam :', 'Système d''exploitation :', 'Mémoire graphique :', 'Téléphone portable ', 'Intel Core i5', 'Affichage lisible en plein soleil Quadraclear 1000 cd/m²', 'Intel® Core™ i7-6600U vPro 2,6GHz, Max. 3,4 GHz', '72 heures', 'Caméra Infrarouge FaceTime HD', 'Astra Linux', '16.0 Go');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
