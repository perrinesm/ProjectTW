-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 13 nov. 2019 à 16:11
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
-- Structure de la table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `produit` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`) VALUES
(1, 'pm', 'pm@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(8, 'ed', 'ed@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(9, 'edi', 'edi@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(10, 'Toine', 'antoine.g2210@gmail.com', '9359a4d812173b65a3a0094cd86363e79731a3c2'),
(11, 'bono', 'kiosqofficial@hotmail.com', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37'),
(12, 'mrRobot', 'thebodeofficial@hotmail.com', '026e996a3a5897970b058ffb093a163a1d763649'),
(13, 'juju', 'antoine.genonceau@isen.yncrea.fr', '68a658b44bbaefab3ef5cd231967195fc0ff9d69'),
(14, 'Toin', 'antoine.g20@gmail.com', '13a391026e85cb6a198eea65a06d109ad37e2850'),
(15, 'Toi', 'antoine.20@gmail.com', '2ed45186c72f9319dc64338cdf16ab76b44cf3d1'),
(16, 'yu', 'antne.g2210@gmail.com', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37'),
(17, 'bonou2', 'a@h.com', 'b9c69e5488ff88b92096f1137382e67fe1172fa6'),
(18, 'bonou', 'a@i.com', 'b9c69e5488ff88b92096f1137382e67fe1172fa6');

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
('tablette', 'PinPad Pro 13.3', 'tabA1.png', 899.99, 'Meilleure tablette du marchÃ©. Une technologie est toute nouvelle, tout Ã©cran, toute puissante. Elle renferme nos technologies les plus avancÃ©es dans un design complÃ¨tement rÃ©inventÃ©.. Waterproof .', 'Type de produit :', 'CapacitÃ© :', 'Processeur :', 'Type de carte graphique :', 'CamÃ©ra TrueDepth :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Tablette', '512 Go', 'Puce A12X Bionic avec architecture 64 bits.Neural Engine. Coprocesseur M12 intÃ©grÃ©', 'Intel Iris Plus Graphics 645', 'Photos 7 Mpx Capteur arriÃ¨re de luminositÃ©.Stabilisation automatique de lâimage.', 'iOS 14.5', '8.0 Go', ''),
('tablette', 'Pin Smart', 'tabA2.png', 459.99, 'ConÃ§u et testÃ© par Pineapple la tablette PinSmart dispose d\'un processeur quadricoeur plus rapide. \r\nBatterie offrant jusqu\'Ã  24h d\'autonomie.\r\nNaviguez sur Internet, regardez des films, un grand divertissement jour aprÃ¨s jour.\r\nWaterproof .', 'Type de produit :', 'CapacitÃ© :', 'Processeur :', 'Type de carte graphique :', 'CamÃ©ra TrueDepth :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Tablette', '100 Go', 'Puce A12X Bionic avec architecture 64 bits.Neural Engine. Coprocesseur M12 intÃ©grÃ©', 'Intel Iris Plus Graphics 645.', 'Photos 7 Mpx Capteur arriÃ¨re de luminositÃ©. Stabilisation automatique de lâimage.', 'iOS 14.5', '8.0 Go', ''),
('ordinateur', 'LapPinTop 2k19', 'ordiA1.png', 4599.9, 'Une incroyable puissance. Au meilleur prix. \r\nWaterproof .', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'FrÃ©quence :', 'RÃ©solution de la webcam :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Ultra portable - Sub Notebook', 'Intel Core i5', 'Intel Iris Plus Graphics 645', 'Intel Iris Plus Graphics 645', 'CamÃ©ra FaceTime HD 720p', 'Mac OS Mojave', '8.0 Go', ''),
('ordinateur', 'PinTosh 1984 GRIFFIN', 'ordiA2.png', 5599.9, 'Une relique remasterisÃ©e en PC gaming nouvelle gÃ©nÃ©ration pouvant faire tourner n\'importe quel jeu.\r\nEgalement trÃ¨s utile pour du minage de bitcoin.', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'FrÃ©quence :', 'CapacitÃ© SSD :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Gamer', 'IntelÂ® Core i9-8950HK', 'NVIDIA GeForce RTX 2080', '2666 MHz ', '1000.0 Go', 'Windows 11', '8.0 Go', ''),
('ordinateur', 'Universe PinTab', 'ordiS1.png', 749.9, 'La patience, c\'est surfait: parfois, vous voulez que Ã§a aille vite !\r\n                  Le Universe PinBook offre le lecteur d\'empreintes digitales derniÃ¨re gÃ©nÃ©ration.\r\n                  Combinez la nettetÃ© de la 4K avec les couleurs incroyablement ', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'FrÃ©quence :', 'DurÃ©e de fonctionnement :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Ultra portable - Sub Notebook', 'Intel Core i5 7200U (Dual-Core 3.1 GHz)', 'Intel HD Graphics 615', 'de 1.4 GHz Ã  3.9 GHz', 'Jusqu\'Ã  13.5 heures', 'Windows 10', '6.0 Go', ''),
('ordinateur', 'SurvivorPin 2.0', 'ordiS2.png', 419.9, 'Produit sponsorisÃ© par Bear Grill.\r\n                  Utilisable dans toutes conditions mÃ©tÃ©orologiques. RecommandÃ© en zone de conflit armÃ©..', 'Type de produit :', 'Processeur :', 'Ecran :', 'Type de carte graphique :', 'DurÃ©e d\'utilisation :', 'RÃ©solution de la webcam :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', 'TÃ©lÃ©phone portable ', 'Intel Core i5', 'Affichage lisible en plein soleil Quadraclear 1000 cd/mÂ²', 'IntelÂ® Coreâ¢ i7-6600U vPro 2,6GHz, Max. 3,4 GHz', '72 heures', 'CamÃ©ra Infrarouge FaceTime HD', 'Astra Linux', '16.0 Go'),
('telephone', 'Pinphone XS', 'telA1.png', 899.9, 'ConÃ§u par HMD le Pineapple XS est un smartphone d\'un grand Ã©cran de 6.5 pouces. Fonctionnant avec Andoid One.Il embarque le processeur Qualcomm SnpDragon 710 avec 4 Go de mÃ©moire vive Il dispose d\'un double module camÃ©ra de 12 et 13 Mpix.', 'Type de produit :', 'CapacitÃ© :', 'Processeur :', 'Taille d\'Ã©cran :', 'DÃ©finition :', 'MÃ©moire vive :', '', '', 'TÃ©lÃ©phone portable', '128 Go', 'Pineapple A10 Fusion', '4.7 pouces', ' 1334 x 750 pixels', '2.0 Go', '', ''),
('telephone', 'Pinphone Xmax', 'telA2.png', 1159.9, 'Le Pinphone Xmax est Ã©quipÃ© d\'un petit Ã©cran 4.5 pouces. Il embarque un processeur SnapDragon 660 couplÃ© Ã  6 Go de ram. Une incroyable puissance. Au meilleur prix. Waterproof .Bulletproof', 'CapacitÃ© :', 'Processeur :', 'Type de carte graphique :', 'CamÃ©ra TrueDepth :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', '', '32 Go', 'Puce A12X Bionic avec architecture 64 bits.Neural Engine.Coprocesseur M12 intÃ©grÃ©', 'Intel Iris Plus Graphics 645', 'Photos 7 Mpx Capteur arriÃ¨re de luminositÃ©. Stabilisation automatique de lâimage.', 'iOS 14.5', '8.0 Go', '', ''),
('telephone', 'Pineapple 3310x', 'tels1.png', 659.9, 'Une incroyable puissance. Au meilleur prix.Le Pinphone Xmax est Ã©quipÃ© d\'un petit Ã©cran 4.5 pouces. Il embarque un processeur SnapDragon 660 couplÃ© Ã  6 Go de ram.La batterie a Ã©galement Ã©tait revue avec une capacitÃ© de 3300 mAh.Bulletproof', 'Processeur :', 'Type de carte graphique :', 'FrÃ©quence :', 'DurÃ©e de fonctionnement :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', '', 'Intel Core i5 7200U (Dual-Core 3.1 GHz)', 'Intel HD Graphics 615', 'de 1.4 GHz Ã  3.9 GHz', 'Jusqu\'Ã  13.5 heures', 'Windows 10', '6.0 Go', '', ''),
('telephone', 'PinGalaxy S9', 'telS2.png', 799.9, 'Une incroyable puissance. Au meilleur prix. Ce mobile est Ã©quipÃ© d\'un double capteur photo arriÃ¨re de 13 et 2 megapixels garantissant des flous artistiques de qualitÃ©. Autonomie garantie avec une batterie de 4000 mAh.Waterproof .Bulletproof', 'Processeur :', 'Ecran : ', 'Type de carte graphique :', 'DurÃ©e d\'utilisation :', 'RÃ©solution de la webcam :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Intel Core i5', 'Affichage lisible en plein soleil Quadraclear 1000 cd/mÂ²', 'IntelÂ® Coreâ¢ i7-6600U vPro 2,6GHz, Max. 3,4 GHz', '72 heures', 'CamÃ©ra Infrarouge FaceTime HD', 'Astra Linux', '16.0 Go', ''),
('accessoire', 'Ecouteurs', 'ecouteur.jpg', 34.9, 'Son Pure Bass, puissant.\r\nMaintenant, vous pouvez mÃªme lâemporter avec vous.\r\nDÃ©couvrez les Ã©couteurs T205 Pineapple au son Pineapple Pure Bass. Ils sont lÃ©gers.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('accessoire', 'Etui tablette', 'etui.jpg', 19.9, 'Etui compatible avec toutes les tablettes Pineapple. EntiÃ¨rement en cuir. Waterproof.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('accessoire', 'Chargeur', 'load.jpg', 9.9, 'Chargeur Secteur 1A + cable USB, connecteur lightning.Rechargez facilement vos appareils disposant d\'une entree Pineapple Lightning (PinPhone pro, PinPod, ..). Cable lightning inclus, longueur 0,90 cm. Etui compatible avec toutes les tablettes Pineapple.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('accessoire', 'Clavier Bluetooth', 'clavier.png', 99.9, 'Le PinKeyboard, avec son nouveau design, possÃ¨de une batterie rechargeable et des touches plus fonctionnelles. Le PinKeyboard sâassocie automatiquement Ã  tous nos produits. OpÃ©rationnel pendant un mois entre chaque chargement.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('tablette', 'PinPad Pro 13.3', 'tabA1.png', 899.99, 'Meilleure tablette du marchÃ©. Une technologie est toute nouvelle, tout Ã©cran, toute puissante. Elle renferme nos technologies les plus avancÃ©es dans un design complÃ¨tement rÃ©inventÃ©.. Waterproof .', 'Type de produit :', 'CapacitÃ© :', 'Processeur :', 'Type de carte graphique :', 'CamÃ©ra TrueDepth :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Tablette', '512 Go', 'Puce A12X Bionic avec architecture 64 bits.Neural Engine. Coprocesseur M12 intÃ©grÃ©', 'Intel Iris Plus Graphics 645', 'Photos 7 Mpx Capteur arriÃ¨re de luminositÃ©.Stabilisation automatique de lâimage.', 'iOS 14.5', '8.0 Go', ''),
('tablette', 'Pin Smart', 'tabA2.png', 459.99, 'ConÃ§u et testÃ© par Pineapple la tablette PinSmart dispose d\'un processeur quadricoeur plus rapide. \r\nBatterie offrant jusqu\'Ã  24h d\'autonomie.\r\nNaviguez sur Internet, regardez des films, un grand divertissement jour aprÃ¨s jour.\r\nWaterproof .', 'Type de produit :', 'CapacitÃ© :', 'Processeur :', 'Type de carte graphique :', 'CamÃ©ra TrueDepth :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Tablette', '100 Go', 'Puce A12X Bionic avec architecture 64 bits.Neural Engine. Coprocesseur M12 intÃ©grÃ©', 'Intel Iris Plus Graphics 645.', 'Photos 7 Mpx Capteur arriÃ¨re de luminositÃ©. Stabilisation automatique de lâimage.', 'iOS 14.5', '8.0 Go', ''),
('ordinateur', 'LapPinTop 2k19', 'ordiA1.png', 4599.9, 'Une incroyable puissance. Au meilleur prix. \r\nWaterproof .', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'FrÃ©quence :', 'RÃ©solution de la webcam :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Ultra portable - Sub Notebook', 'Intel Core i5', 'Intel Iris Plus Graphics 645', 'Intel Iris Plus Graphics 645', 'CamÃ©ra FaceTime HD 720p', 'Mac OS Mojave', '8.0 Go', ''),
('ordinateur', 'PinTosh 1984 GRIFFIN', 'ordiA2.png', 5599.9, 'Une relique remasterisÃ©e en PC gaming nouvelle gÃ©nÃ©ration pouvant faire tourner n\'importe quel jeu.\r\nEgalement trÃ¨s utile pour du minage de bitcoin.', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'FrÃ©quence :', 'CapacitÃ© SSD :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Gamer', 'IntelÂ® Core i9-8950HK', 'NVIDIA GeForce RTX 2080', '2666 MHz ', '1000.0 Go', 'Windows 11', '8.0 Go', ''),
('ordinateur', 'Universe PinTab', 'ordiS1.png', 749.9, 'La patience, c\'est surfait: parfois, vous voulez que Ã§a aille vite !\r\n                  Le Universe PinBook offre le lecteur d\'empreintes digitales derniÃ¨re gÃ©nÃ©ration.\r\n                  Combinez la nettetÃ© de la 4K avec les couleurs incroyablement ', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'FrÃ©quence :', 'DurÃ©e de fonctionnement :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Ultra portable - Sub Notebook', 'Intel Core i5 7200U (Dual-Core 3.1 GHz)', 'Intel HD Graphics 615', 'de 1.4 GHz Ã  3.9 GHz', 'Jusqu\'Ã  13.5 heures', 'Windows 10', '6.0 Go', ''),
('ordinateur', 'SurvivorPin 2.0', 'ordiS2.png', 419.9, 'Produit sponsorisÃ© par Bear Grill.\r\n                  Utilisable dans toutes conditions mÃ©tÃ©orologiques. RecommandÃ© en zone de conflit armÃ©..', 'Type de produit :', 'Processeur :', 'Ecran :', 'Type de carte graphique :', 'DurÃ©e d\'utilisation :', 'RÃ©solution de la webcam :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', 'TÃ©lÃ©phone portable ', 'Intel Core i5', 'Affichage lisible en plein soleil Quadraclear 1000 cd/mÂ²', 'IntelÂ® Coreâ¢ i7-6600U vPro 2,6GHz, Max. 3,4 GHz', '72 heures', 'CamÃ©ra Infrarouge FaceTime HD', 'Astra Linux', '16.0 Go'),
('telephone', 'Pinphone XS', 'telA1.png', 899.9, 'ConÃ§u par HMD le Pineapple XS est un smartphone d\'un grand Ã©cran de 6.5 pouces. Fonctionnant avec Andoid One.Il embarque le processeur Qualcomm SnpDragon 710 avec 4 Go de mÃ©moire vive Il dispose d\'un double module camÃ©ra de 12 et 13 Mpix.', 'Type de produit :', 'CapacitÃ© :', 'Processeur :', 'Taille d\'Ã©cran :', 'DÃ©finition :', 'MÃ©moire vive :', '', '', 'TÃ©lÃ©phone portable', '128 Go', 'Pineapple A10 Fusion', '4.7 pouces', ' 1334 x 750 pixels', '2.0 Go', '', ''),
('telephone', 'Pinphone Xmax', 'telA2.png', 1159.9, 'Le Pinphone Xmax est Ã©quipÃ© d\'un petit Ã©cran 4.5 pouces. Il embarque un processeur SnapDragon 660 couplÃ© Ã  6 Go de ram. Une incroyable puissance. Au meilleur prix. Waterproof .Bulletproof', 'CapacitÃ© :', 'Processeur :', 'Type de carte graphique :', 'CamÃ©ra TrueDepth :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', '', '32 Go', 'Puce A12X Bionic avec architecture 64 bits.Neural Engine.Coprocesseur M12 intÃ©grÃ©', 'Intel Iris Plus Graphics 645', 'Photos 7 Mpx Capteur arriÃ¨re de luminositÃ©. Stabilisation automatique de lâimage.', 'iOS 14.5', '8.0 Go', '', ''),
('telephone', 'Pineapple 3310x', 'tels1.png', 659.9, 'Une incroyable puissance. Au meilleur prix.Le Pinphone Xmax est Ã©quipÃ© d\'un petit Ã©cran 4.5 pouces. Il embarque un processeur SnapDragon 660 couplÃ© Ã  6 Go de ram.La batterie a Ã©galement Ã©tait revue avec une capacitÃ© de 3300 mAh.Bulletproof', 'Processeur :', 'Type de carte graphique :', 'FrÃ©quence :', 'DurÃ©e de fonctionnement :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', '', 'Intel Core i5 7200U (Dual-Core 3.1 GHz)', 'Intel HD Graphics 615', 'de 1.4 GHz Ã  3.9 GHz', 'Jusqu\'Ã  13.5 heures', 'Windows 10', '6.0 Go', '', ''),
('telephone', 'PinGalaxy S9', 'telS2.png', 799.9, 'Une incroyable puissance. Au meilleur prix. Ce mobile est Ã©quipÃ© d\'un double capteur photo arriÃ¨re de 13 et 2 megapixels garantissant des flous artistiques de qualitÃ©. Autonomie garantie avec une batterie de 4000 mAh.Waterproof .Bulletproof', 'Processeur :', 'Ecran : ', 'Type de carte graphique :', 'DurÃ©e d\'utilisation :', 'RÃ©solution de la webcam :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Intel Core i5', 'Affichage lisible en plein soleil Quadraclear 1000 cd/mÂ²', 'IntelÂ® Coreâ¢ i7-6600U vPro 2,6GHz, Max. 3,4 GHz', '72 heures', 'CamÃ©ra Infrarouge FaceTime HD', 'Astra Linux', '16.0 Go', ''),
('accessoire', 'Ecouteurs', 'ecouteur.jpg', 34.9, 'Son Pure Bass, puissant.\r\nMaintenant, vous pouvez mÃªme lâemporter avec vous.\r\nDÃ©couvrez les Ã©couteurs T205 Pineapple au son Pineapple Pure Bass. Ils sont lÃ©gers.', 'Son Pure Bass, puissant. Maintenant, vous pouvez même l’emporter avec vous. Découvrez les écouteurs T205 Pineapple au son Pineapple Pure Bass. Ils sont légers.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('accessoire', 'Etui tablette', 'etui.jpg', 19.9, 'Etui compatible avec toutes les tablettes Pineapple. EntiÃ¨rement en cuir. Waterproof.', 'Etui compatible avec toutes les tablettes Pineapple. Entièrement en cuir. Waterproof.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('accessoire', 'Chargeur', 'load.jpg', 9.9, 'Chargeur Secteur 1A + cable USB, connecteur lightning.Rechargez facilement vos appareils disposant d\'une entree Pineapple Lightning (PinPhone pro, PinPod, ..). Cable lightning inclus, longueur 0,90 cm. Etui compatible avec toutes les tablettes Pineapple.', 'Chargeur Secteur 1A + cable USB, connecteur lightning. Rechargez facilement vos appareils disposant d\'une entree Pineapple Lightning (PinPhone pro, PinPod, ..). Cable lightning inclus, longueur 0,90 cm.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('accessoire', 'Clavier Bluetooth', 'clavier.png', 99.9, 'Le PinKeyboard, avec son nouveau design, possÃ¨de une batterie rechargeable et des touches plus fonctionnelles. Le PinKeyboard sâassocie automatiquement Ã  tous nos produits. OpÃ©rationnel pendant un mois entre chaque chargement.', 'Le PinKeyboard, avec son nouveau design, possède une batterie rechargeable et des touches plus fonctionnelles. Le PinKeyboard s’associe automatiquement à tous nos produits. Opérationnel pendant un mois entre chaque chargement.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('tablette', 'PinPad Pro 13.3', 'tabA1.png', 899.99, 'Meilleure tablette du marchÃ©. Une technologie est toute nouvelle, tout Ã©cran, toute puissante. Elle renferme nos technologies les plus avancÃ©es dans un design complÃ¨tement rÃ©inventÃ©.. Waterproof .', 'Type de produit :', 'CapacitÃ© :', 'Processeur :', 'Type de carte graphique :', 'CamÃ©ra TrueDepth :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Tablette', '512 Go', 'Puce A12X Bionic avec architecture 64 bits.Neural Engine. Coprocesseur M12 intÃ©grÃ©', 'Intel Iris Plus Graphics 645', 'Photos 7 Mpx Capteur arriÃ¨re de luminositÃ©.Stabilisation automatique de lâimage.', 'iOS 14.5', '8.0 Go', ''),
('tablette', 'Pin Smart', 'tabA2.png', 459.99, 'ConÃ§u et testÃ© par Pineapple la tablette PinSmart dispose d\'un processeur quadricoeur plus rapide. \r\nBatterie offrant jusqu\'Ã  24h d\'autonomie.\r\nNaviguez sur Internet, regardez des films, un grand divertissement jour aprÃ¨s jour.\r\nWaterproof .', 'Type de produit :', 'CapacitÃ© :', 'Processeur :', 'Type de carte graphique :', 'CamÃ©ra TrueDepth :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Tablette', '100 Go', 'Puce A12X Bionic avec architecture 64 bits.Neural Engine. Coprocesseur M12 intÃ©grÃ©', 'Intel Iris Plus Graphics 645.', 'Photos 7 Mpx Capteur arriÃ¨re de luminositÃ©. Stabilisation automatique de lâimage.', 'iOS 14.5', '8.0 Go', ''),
('ordinateur', 'LapPinTop 2k19', 'ordiA1.png', 4599.9, 'Une incroyable puissance. Au meilleur prix. \r\nWaterproof .', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'FrÃ©quence :', 'RÃ©solution de la webcam :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Ultra portable - Sub Notebook', 'Intel Core i5', 'Intel Iris Plus Graphics 645', 'Intel Iris Plus Graphics 645', 'CamÃ©ra FaceTime HD 720p', 'Mac OS Mojave', '8.0 Go', ''),
('ordinateur', 'PinTosh 1984 GRIFFIN', 'ordiA2.png', 5599.9, 'Une relique remasterisÃ©e en PC gaming nouvelle gÃ©nÃ©ration pouvant faire tourner n\'importe quel jeu.\r\nEgalement trÃ¨s utile pour du minage de bitcoin.', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'FrÃ©quence :', 'CapacitÃ© SSD :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Gamer', 'IntelÂ® Core i9-8950HK', 'NVIDIA GeForce RTX 2080', '2666 MHz ', '1000.0 Go', 'Windows 11', '8.0 Go', ''),
('ordinateur', 'Universe PinTab', 'ordiS1.png', 749.9, 'La patience, c\'est surfait: parfois, vous voulez que Ã§a aille vite !\r\n                  Le Universe PinBook offre le lecteur d\'empreintes digitales derniÃ¨re gÃ©nÃ©ration.\r\n                  Combinez la nettetÃ© de la 4K avec les couleurs incroyablement ', 'Type de produit :', 'Processeur :', 'Type de carte graphique :', 'FrÃ©quence :', 'DurÃ©e de fonctionnement :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Ultra portable - Sub Notebook', 'Intel Core i5 7200U (Dual-Core 3.1 GHz)', 'Intel HD Graphics 615', 'de 1.4 GHz Ã  3.9 GHz', 'Jusqu\'Ã  13.5 heures', 'Windows 10', '6.0 Go', ''),
('ordinateur', 'SurvivorPin 2.0', 'ordiS2.png', 419.9, 'Produit sponsorisÃ© par Bear Grill.\r\n                  Utilisable dans toutes conditions mÃ©tÃ©orologiques. RecommandÃ© en zone de conflit armÃ©..', 'Type de produit :', 'Processeur :', 'Ecran :', 'Type de carte graphique :', 'DurÃ©e d\'utilisation :', 'RÃ©solution de la webcam :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', 'TÃ©lÃ©phone portable ', 'Intel Core i5', 'Affichage lisible en plein soleil Quadraclear 1000 cd/mÂ²', 'IntelÂ® Coreâ¢ i7-6600U vPro 2,6GHz, Max. 3,4 GHz', '72 heures', 'CamÃ©ra Infrarouge FaceTime HD', 'Astra Linux', '16.0 Go'),
('telephone', 'Pinphone XS', 'telA1.png', 899.9, 'ConÃ§u par HMD le Pineapple XS est un smartphone d\'un grand Ã©cran de 6.5 pouces. Fonctionnant avec Andoid One.Il embarque le processeur Qualcomm SnpDragon 710 avec 4 Go de mÃ©moire vive Il dispose d\'un double module camÃ©ra de 12 et 13 Mpix.', 'Type de produit :', 'CapacitÃ© :', 'Processeur :', 'Taille d\'Ã©cran :', 'DÃ©finition :', 'MÃ©moire vive :', '', '', 'TÃ©lÃ©phone portable', '128 Go', 'Pineapple A10 Fusion', '4.7 pouces', ' 1334 x 750 pixels', '2.0 Go', '', ''),
('telephone', 'Pinphone Xmax', 'telA2.png', 1159.9, 'Le Pinphone Xmax est Ã©quipÃ© d\'un petit Ã©cran 4.5 pouces. Il embarque un processeur SnapDragon 660 couplÃ© Ã  6 Go de ram. Une incroyable puissance. Au meilleur prix. Waterproof .Bulletproof', 'CapacitÃ© :', 'Processeur :', 'Type de carte graphique :', 'CamÃ©ra TrueDepth :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', '', '32 Go', 'Puce A12X Bionic avec architecture 64 bits.Neural Engine.Coprocesseur M12 intÃ©grÃ©', 'Intel Iris Plus Graphics 645', 'Photos 7 Mpx Capteur arriÃ¨re de luminositÃ©. Stabilisation automatique de lâimage.', 'iOS 14.5', '8.0 Go', '', ''),
('telephone', 'Pineapple 3310x', 'tels1.png', 659.9, 'Une incroyable puissance. Au meilleur prix.Le Pinphone Xmax est Ã©quipÃ© d\'un petit Ã©cran 4.5 pouces. Il embarque un processeur SnapDragon 660 couplÃ© Ã  6 Go de ram.La batterie a Ã©galement Ã©tait revue avec une capacitÃ© de 3300 mAh.Bulletproof', 'Processeur :', 'Type de carte graphique :', 'FrÃ©quence :', 'DurÃ©e de fonctionnement :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', '', 'Intel Core i5 7200U (Dual-Core 3.1 GHz)', 'Intel HD Graphics 615', 'de 1.4 GHz Ã  3.9 GHz', 'Jusqu\'Ã  13.5 heures', 'Windows 10', '6.0 Go', '', ''),
('telephone', 'PinGalaxy S9', 'telS2.png', 799.9, 'Une incroyable puissance. Au meilleur prix. Ce mobile est Ã©quipÃ© d\'un double capteur photo arriÃ¨re de 13 et 2 megapixels garantissant des flous artistiques de qualitÃ©. Autonomie garantie avec une batterie de 4000 mAh.Waterproof .Bulletproof', 'Processeur :', 'Ecran : ', 'Type de carte graphique :', 'DurÃ©e d\'utilisation :', 'RÃ©solution de la webcam :', 'SystÃ¨me d\'exploitation :', 'MÃ©moire graphique :', '', 'Intel Core i5', 'Affichage lisible en plein soleil Quadraclear 1000 cd/mÂ²', 'IntelÂ® Coreâ¢ i7-6600U vPro 2,6GHz, Max. 3,4 GHz', '72 heures', 'CamÃ©ra Infrarouge FaceTime HD', 'Astra Linux', '16.0 Go', ''),
('accessoire', 'Ecouteurs', 'ecouteur.jpg', 34.9, 'Son Pure Bass, puissant.\r\nMaintenant, vous pouvez mÃªme lâemporter avec vous.\r\nDÃ©couvrez les Ã©couteurs T205 Pineapple au son Pineapple Pure Bass. Ils sont lÃ©gers.', 'Son Pure Bass, puissant. Maintenant, vous pouvez même l’emporter avec vous. Découvrez les écouteurs T205 Pineapple au son Pineapple Pure Bass. Ils sont légers.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('accessoire', 'Etui tablette', 'etui.jpg', 19.9, 'Etui compatible avec toutes les tablettes Pineapple. EntiÃ¨rement en cuir. Waterproof.', 'Etui compatible avec toutes les tablettes Pineapple. Entièrement en cuir. Waterproof.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('accessoire', 'Chargeur', 'load.jpg', 9.9, 'Chargeur Secteur 1A + cable USB, connecteur lightning.Rechargez facilement vos appareils disposant d\'une entree Pineapple Lightning (PinPhone pro, PinPod, ..). Cable lightning inclus, longueur 0,90 cm. Etui compatible avec toutes les tablettes Pineapple.', 'Chargeur Secteur 1A + cable USB, connecteur lightning. Rechargez facilement vos appareils disposant d\'une entree Pineapple Lightning (PinPhone pro, PinPod, ..). Cable lightning inclus, longueur 0,90 cm.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('accessoire', 'Clavier Bluetooth', 'clavier.png', 99.9, 'Le PinKeyboard, avec son nouveau design, possÃ¨de une batterie rechargeable et des touches plus fonctionnelles. Le PinKeyboard sâassocie automatiquement Ã  tous nos produits. OpÃ©rationnel pendant un mois entre chaque chargement.', 'Le PinKeyboard, avec son nouveau design, possède une batterie rechargeable et des touches plus fonctionnelles. Le PinKeyboard s’associe automatiquement à tous nos produits. Opérationnel pendant un mois entre chaque chargement.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
