-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 13 nov. 2019 à 16:33
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
-- Base de données :  "pineapple"
--

-- --------------------------------------------------------

--
-- Structure de la table "cart"
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produit` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table "membres"
--

INSERT INTO `membres` (`pseudo`, `mail`, `motdepasse`) VALUES
("pm", "pm@gmail.com", "40bd001563085fc35165329ea1ff5c5ecbdbbeef"),
("ed", "ed@gmail.com", "40bd001563085fc35165329ea1ff5c5ecbdbbeef"),
("edi", "edi@gmail.com", "40bd001563085fc35165329ea1ff5c5ecbdbbeef"),
("Toine", "antoine.g2210@gmail.com", "9359a4d812173b65a3a0094cd86363e79731a3c2"),
("bono", "kiosqofficial@hotmail.com", "e0c9035898dd52fc65c41454cec9c4d2611bfb37"),
("mrRobot", "thebodeofficial@hotmail.com", "026e996a3a5897970b058ffb093a163a1d763649"),
("juju", "antoine.genonceau@isen.yncrea.fr", "68a658b44bbaefab3ef5cd231967195fc0ff9d69"),
("Toin", "antoine.g20@gmail.com", "13a391026e85cb6a198eea65a06d109ad37e2850"),
("Toi", "antoine.20@gmail.com", "2ed45186c72f9319dc64338cdf16ab76b44cf3d1"),
("yu", "antne.g2210@gmail.com", "e0c9035898dd52fc65c41454cec9c4d2611bfb37"),
("bonou2", "a@h.com", "b9c69e5488ff88b92096f1137382e67fe1172fa6"),
("bonou", "a@i.com", "b9c69e5488ff88b92096f1137382e67fe1172fa6");

-- --------------------------------------------------------

--
-- Structure de la table "tableproduit"
--

DROP TABLE IF EXISTS `tableproduit`;
CREATE TABLE IF NOT EXISTS `tableproduit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `des8` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table "tableproduit"
--

INSERT INTO `tableproduit` (`type`, `produit`, `image`, `prix`, `description`, `car1`, `car2`, `car3`, `car4`, `car5`, `car6`, `car7`, `car8`, `des1`, `des2`, `des3`, `des4`, `des5`, `des6`, `des7`, `des8`) VALUES
("tablette", "PinPad Pro 13.3", "tabA1.png", 899.99, "Meilleure tablette du marché. Une technologie est toute nouvelle, tout écran, toute puissante. Elle renferme nos technologies les plus avancées dans un design complètement réinventé.. Waterproof .", "Type de produit :", "Capacité :", "Processeur :", "Type de carte graphique :", "Caméra TrueDepth :", "Système d'exploitation :", "Mémoire graphique :", "", "Tablette", "512 Go", "Puce A12X Bionic avec architecture 64 bits.Neural Engine. Coprocesseur M12 intégré", "Intel Iris Plus Graphics 645", "Photos 7 Mpx Capteur arrière de luminosité.Stabilisation automatique de l'image.", "iOS 14.5", "8.0 Go", ""),
("tablette", "Pin Smart", "tabA2.png", 459.99, "Conçu et testé par Pineapple la tablette PinSmart dispose d'un processeur quadricoeur plus rapide. \nBatterie offrant jusqu'Ã  24h d'autonomie.\nNaviguez sur Internet, regardez des films, un grand divertissement jour après jour.\nWaterproof .", "Type de produit :", "Capacité :", "Processeur :", "Type de carte graphique :", "Caméra TrueDepth :", "Système d'exploitation :", "Mémoire graphique :", "", "Tablette", "100 Go", "Puce A12X Bionic avec architecture 64 bits.Neural Engine. Coprocesseur M12 intégré", "Intel Iris Plus Graphics 645.", "Photos 7 Mpx Capteur arrière de luminosité. Stabilisation automatique de l'image.", "iOS 14.5", "8.0 Go", ""),
("ordinateur", "LapPinTop 2k19", "ordiA1.png", 4599.9, "Une incroyable puissance. Au meilleur prix. >>\nWaterproof .", "Type de produit :", "Processeur :", "Type de carte graphique :", "Fréquence :", "Résolution de la webcam :", "Système d'exploitation :", "Mémoire graphique :", "", "Ultra portable - Sub Notebook", "Intel Core i5", "Intel Iris Plus Graphics 645", "Intel Iris Plus Graphics 645", "Caméra FaceTime HD 720p", "Mac OS Mojave", "8.0 Go", ""),
("ordinateur", "PinTosh 1984 GRIFFIN", "ordiA2.png", 5599.9, "Une relique remasterisée en PC gaming nouvelle génération pouvant faire tourner n'importe quel jeu.\nEgalement très utile pour du minage de bitcoin.", "Type de produit :", "Processeur :", "Type de carte graphique :", "Fréquence :", "Capacité SSD :", "Système d'exploitation :", "Mémoire graphique :", "", "Gamer", "IntelÂ® Core i9-8950HK", "NVIDIA GeForce RTX 2080", "2666 MHz", "1000.0 Go", "Windows 11", "8.0 Go", ""),
("ordinateur", "Universe PinTab", "ordiS1.png", 749.9, "La patience, c'est surfait: parfois, vous voulez que ça aille vite !\n                  Le Universe PinBook offre le lecteur d'empreintes digitales dernière génération.\n                  Combinez la netteté de la 4K avec les couleurs incroyablement", "Type de produit :", "Processeur :", "Type de carte graphique :", "Fréquence :", "Durée de fonctionnement :", "Système d'exploitation :", "Mémoire graphique :", "", "Ultra portable - Sub Notebook", "Intel Core i5 7200U (Dual-Core 3.1 GHz)", "Intel HD Graphics 615", "de 1.4 GHz à  3.9 GHz", "Jusqu'à  13.5 heures", "Windows 10", "6.0 Go", ""),
("ordinateur", "SurvivorPin 2.0", "ordiS2.png", 419.9, "Produit sponsorisé par Bear Grill.\n                  Utilisable dans toutes conditions météorologiques. Recommandé en zone de conflit armé..", "Type de produit :", "Processeur :", "Ecran :", "Type de carte graphique :", "Durée d'utilisation :", "Résolution de la webcam :", "Système d'exploitation :", "Mémoire graphique :", "Téléphone portable", "Intel Core i5", "Affichage lisible en plein soleil Quadraclear 1000 cd", "Intel Core i7-6600U vPro 2,6GHz, Max. 3,4 GHz", "72 heures", "Caméra Infrarouge FaceTime HD", "Astra Linux", "16.0 Go"),
("telephone", "Pinphone XS", "telA1.png", 899.9, "Conçu par HMD le Pineapple XS est un smartphone d'un grand écran de 6.5 pouces. Fonctionnant avec Andoid One.Il embarque le processeur Qualcomm SnpDragon 710 avec 4 Go de mémoire vive Il dispose d'un double module caméra de 12 et 13 Mpix.", "Type de produit :", "Capacité :", "Processeur :", "Taille d'écran :", "Définition :", "Mémoire vive :", "", "", "Téléphone portable", "128 Go", "Pineapple A10 Fusion", "4.7 pouces", " 1334 x 750 pixels", "2.0 Go", "", ""),
("telephone", "Pinphone Xmax", "telA2.png", 1159.9, "Le Pinphone Xmax est équipé d'un petit écran 4.5 pouces. Il embarque un processeur SnapDragon 660 couplé Ã  6 Go de ram. Une incroyable puissance. Au meilleur prix. Waterproof .Bulletproof", "Capacité :", "Processeur :", "Type de carte graphique :", "Caméra TrueDepth :", "Système d'exploitation :", "Mémoire graphique :", "", "", "32 Go", "Puce A12X Bionic avec architecture 64 bits.Neural Engine.Coprocesseur M12 intégré", "Intel Iris Plus Graphics 645", "Photos 7 Mpx Capteur arrière de luminosité. Stabilisation automatique de l'image.", "iOS 14.5", "8.0 Go", "", ""),
("telephone", "Pineapple 3310x", "tels1.png", 659.9, "Une incroyable puissance. Au meilleur prix.Le Pinphone Xmax est équipé d'un petit écran 4.5 pouces. Il embarque un processeur SnapDragon 660 couplé Ã  6 Go de ram.La batterie a également était revue avec une capacité de 3300 mAh.Bulletproof", "Processeur :", "Type de carte graphique :", "Fréquence :", "Durée de fonctionnement :", "Système d'exploitation :", "Mémoire graphique :", "", "", "Intel Core i5 7200U (Dual-Core 3.1 GHz)", "Intel HD Graphics 615", "de 1.4 GHz Ã  3.9 GHz", "Jusqu'Ã  13.5 heures", "Windows 10", "6.0 Go", "", ""),
("telephone", "PinGalaxy S9", "telS2.png", 799.9, "Une incroyable puissance. Au meilleur prix. Ce mobile est équipé d'un double capteur photo arrière de 13 et 2 megapixels garantissant des flous artistiques de qualité. Autonomie garantie avec une batterie de 4000 mAh.Waterproof .Bulletproof", "Processeur :", "Ecran :", "Type de carte graphique :", "Durée d'utilisation :", "Résolution de la webcam :", "Système d'exploitation :", "Mémoire graphique :", "", "Intel Core i5", "Affichage lisible en plein soleil Quadraclear 1000 cd", "Intel Core i7-6600U vPro 2,6GHz, Max. 3,4 GHz", "72 heures", "Caméra Infrarouge FaceTime HD", "Astra Linux", "16.0 Go", ""),
("accessoire", "Ecouteurs", "ecouteur.jpg", 34.9, "Son Pure Bass, puissant.\nMaintenant, vous pouvez même l'emporter avec vous.\nDécouvrez les écouteurs T205 Pineapple au son Pineapple Pure Bass. Ils sont légers.", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""),
("accessoire", "Etui tablette", "etui.jpg", 19.9, "Etui compatible avec toutes les tablettes Pineapple. Entièrement en cuir. Waterproof.", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""),
("accessoire", "Chargeur", "load.jpg", 9.9, "Chargeur Secteur 1A + cable USB, connecteur lightning.Rechargez facilement vos appareils disposant d'une entree Pineapple Lightning (PinPhone pro, PinPod, ..). Cable lightning inclus, longueur 0,90 cm. Etui compatible avec toutes les tablettes Pineapple.", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""),
("accessoire", "Clavier Bluetooth", "clavier.png", 99.9, "Le PinKeyboard, avec son nouveau design, possède une batterie rechargeable et des touches plus fonctionnelles. Le PinKeyboard s'associe automatiquement Ã  tous nos produits. Opérationnel pendant un mois entre chaque chargement.", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
