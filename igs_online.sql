-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 avr. 2023 à 15:53
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `igs_online`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `cat_id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `nom`, `description`, `image`, `status`, `created_at`) VALUES
(1, 'Electroménagers', 'jhcuhbudcugcusgbu', 'img/0ab10e153284685.Y3JvcCwzMjMyLDI1MjgsNDgsMA.png', 0, '2023-04-11 10:34:34'),
(2, 'Vetements', 'sdfghjklm', 'img/0bfe16151980069.Y3JvcCwxNDAwLDEwOTUsMCw1MDI.jpg', 0, '2023-04-11 10:35:31'),
(3, 'Chaussures', 'lkjhgfd', 'img/0d5ebe157356053.Y3JvcCwxNTM0LDEyMDAsMzQsMA.png', 0, '2023-04-11 10:36:15'),
(4, 'Meubles de bureau', 'xcfghjklmkjhbgfc', 'img/0f1cc4141808743.Y3JvcCw0MTYwLDMyNTMsMCwxNDkz.jpg', 0, '2023-04-11 10:37:04'),
(5, 'Matériels événementiels', 'dfghjklkjhgf', 'img/0fe94d157633805.Y3JvcCwxNjE2LDEyNjQsMCww.jpg', 0, '2023-04-11 10:38:14'),
(6, 'Jouets d&#039;enfants', 'dfghjkilmkjhjvg', 'img/01fed4149733213.62ec9e909d722.jpg', 0, '2023-04-11 10:39:10'),
(7, 'Matériels médicaux', 'zergfhjkl', 'img/1c1eb1323801267.6368f1315db49.jpg', 0, '2023-04-11 10:40:11'),
(8, 'Quincaillerie', 'dfghjkjhgfdsfghjk', 'img/1d406a156152085.Y3JvcCwxNTM0LDEyMDAsMzQsMA.jpg', 1, '2023-04-11 10:44:18'),
(9, 'Sanitaire', 'bnertghjkfghjk', 'img/1d406a156152085.Y3JvcCwxNTM0LDEyMDAsMzQsMA.jpg', 0, '2023-04-11 10:50:16'),
(10, 'Carreaux-Fleurs', 'shbsdbdbjbuj', 'img/5cf8ed153146221.Y3JvcCwxMzYyLDEwNjUsMCww.png', 0, '2023-04-11 10:51:13'),
(11, 'Tapis/Moquettes', 'cgsvydggvycgyhg', 'img/1d5501155783675.Y3JvcCwyNzYxLDIxNjAsNDc4LDA.jpg', 0, '2023-04-11 10:52:09'),
(12, 'Equipements de sport', 'fdghjklmkjhg', 'img/1e4097135998575.Y3JvcCwxMDgwLDg0NCwwLDIzMg.jpg', 0, '2023-04-11 10:53:12'),
(13, 'Equipements d&#039;hôtel', 'kojihugfghjkl', 'img/1c1eb1323801267.6368f1315db49.jpg', 0, '2023-04-11 10:56:27'),
(14, 'Bijoux', 'dfghjkl', 'img/7f026a152749447.Y3JvcCw1MzI3LDQxNjcsMzQyLDA_002.webp', 0, '2023-04-11 10:57:07'),
(15, 'Cosmétiques', 'cvghjkl', 'img/4b835a138226907.Y3JvcCwxNDAwLDEwOTUsMCw0NTM_003.jpg', 0, '2023-04-11 10:58:03'),
(16, 'Layette', 'dfghjkloml', 'img/4b096f151635191.Y3JvcCwxMzY2LDEwNjgsMCww_002.png', 0, '2023-04-11 10:58:59'),
(17, 'Pièces auto et moto', 'fghbjklmkjhbvgcf', 'img/6ac864157271549.Y3JvcCwxMTE4LDg3NSwxNDEsMA_003.webp', 0, '2023-04-11 11:00:01'),
(18, 'Matériels salon de coiffure', 'fghjklfghbj', 'img/06eadc154824403.Y3JvcCwxNTM0LDEyMDAsMzQsMA.png', 0, '2023-04-11 11:01:06'),
(19, 'Machine', 'dfghjkljnhbgvcfg', 'img/4d8da9155008995.Y3JvcCwxMDQ4LDgyMCw3NSww.jpg', 0, '2023-04-11 11:02:01'),
(20, 'Matériels musical', 'juhygfdfgh', 'img/3d4142148763611.Y3JvcCwxMjEyLDk0OCwwLDA_003.webp', 0, '2023-04-11 11:03:16'),
(21, 'Lustres', 'ojihkugjyhfcghjkl', 'img/12aeb2155334173.Y3JvcCwxMjQ2LDk3NCwxMzIsMjM4NA.png', 0, '2023-04-11 11:04:14'),
(22, 'Ecrans plats', 'fghjikojhg', 'img/47a344125451701.Y3JvcCwxOTIwLDE1MDEsMCww_002.jpg', 0, '2023-04-11 11:05:19');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `cmd_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `prod_id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `soustitre` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`service_id`, `nom`, `image`, `description`, `created_at`) VALUES
(1, 'Focab', 'img/Screenshot 2022-12-18 at 08-46-50 jancom.png', 'sdfghyjukilodfghjkl', '2023-04-11 07:45:28'),
(2, 'Central d\'achat', 'img/Screenshot 2022-12-18 at 08-46-30 jancom.png', 'sdfghjkl', '2023-04-11 07:46:14'),
(3, 'Règlement Factures Fournisseur', 'img/Screenshot 2022-12-18 at 08-45-59 jancom.png', 'sdfghjkllkjhgfde', '2023-04-11 07:47:24'),
(4, 'Vente directe et sur commande', 'img/Screenshot 2022-12-18 at 08-45-13 jancom.png', 'sdfghjklsdfghjkl', '2023-04-11 07:48:52'),
(5, 'Partenariat financier pour ach', 'img/Screenshot 2022-12-18 at 08-44-53 jancom.png', 'kjhgfd', '2023-04-11 07:50:00'),
(6, 'Transport maritime et aerien', 'img/Screenshot 2022-12-18 at 08-44-26 jancom.png', 'oiujyhgfd', '2023-04-11 07:50:52'),
(7, 'Publicité', 'img/Screenshot 2022-12-18 at 08-44-01 jancom.png', 'reghjkfghjkl', '2023-04-11 07:51:49'),
(8, 'Représentation des marques', 'img/Screenshot 2022-12-18 at 08-47-04 jancom.png', 'des marques de tout genre ', '2023-04-11 07:53:50'),
(9, 'Location d\'espace', 'img/Screenshot 2022-12-18 at 08-45-32 jancom.png', 'efdgnhjklkjhngbfv', '2023-04-11 07:54:49');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `client_id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adresse` varchar(60) NOT NULL,
  `telephone` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_as` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`client_id`, `nom`, `email`, `adresse`, `telephone`, `password`, `role_as`, `status`, `created_at`) VALUES
(2, 'mandja', 'mandja@gmail.com', 'douala_yassa', '+4554957497', '25d55ad283aa400af464c76d713c07ad', 0, 0, '2023-03-22 18:39:11'),
(3, 'jaswan', 'jaswn1234@gmail.com', 'yaounde', '614463164694', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, '2023-03-22 21:46:46'),
(4, 'mathieunebra', 'mathieunebra@gmail.com', 'paris', '+333254999', '6115ea649890522ebe79e32e07e5b353', 0, 0, '2023-03-22 21:51:55'),
(6, 'cabrelcode', 'codejean@gmail.com', 'mariland', '+1246322155', '25d55ad283aa400af464c76d713c07ad', 0, 0, '2023-03-24 14:00:18'),
(7, 'frank armel', 'nguepinsifrank@gmail.com', 'borne 10', '+237651734079', '25d55ad283aa400af464c76d713c07ad', 0, 0, '2023-03-25 16:30:44'),
(8, 'jean', 'houafojean@gmail.com', 'yaounde', '+237674491694', '25d55ad283aa400af464c76d713c07ad', 1, 1, '2023-04-01 08:36:32'),
(10, 'Sandra', 'sorth@gmail.com', 'yassa', '+234556655', '25d55ad283aa400af464c76d713c07ad', 0, 1, '2023-04-11 06:21:46');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`cmd_id`),
  ADD KEY `cmd_clt_id` (`client_id`),
  ADD KEY `cmd_prod_id` (`prod_id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `produit_cat_id` (`cat_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`client_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `cmd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `cmd_clt_id` FOREIGN KEY (`client_id`) REFERENCES `user` (`client_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cmd_prod_id` FOREIGN KEY (`prod_id`) REFERENCES `produit` (`prod_id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_cat_id` FOREIGN KEY (`cat_id`) REFERENCES `categorie` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
