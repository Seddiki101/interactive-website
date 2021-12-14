-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 déc. 2021 à 21:03
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog1`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `id_sujet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE `sujet` (
  `id` int(11) NOT NULL,
  `titresujet` varchar(500) NOT NULL,
  `contenu` varchar(3000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sujet`
--

INSERT INTO `sujet` (`id`, `titresujet`, `contenu`, `image`, `views`, `likes`) VALUES
(63, 'sqqsq', 'dcqqf', 'blog-4-720x480.jpg', 95, 11),
(65, 'maisa', 'fgerge', 'blog-3-720x480.jpg', 13, 2),
(66, 'dfzegf', 'hete', 'author-image-4-646x680.jpg', 4, 0),
(67, 'youssef', 'fzgzre', 'product-3-720x480.jpg', 8, 3),
(68, 'seifen', '<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\"><kbd><em>vswdv</em></kbd></div>\r\n', 'author-image-1-646x680.jpg', 1, 0),
(69, 'oussema', '<p>dfzqefze</p>\r\n', 'banner-image-1-1920x700.jpg', 7, 2),
(70, 'badidou', '<p>dsfdf</p>\r\n', 'author-image-4-646x680.jpg', 6, 3),
(71, 'zezerezrze', '<p>frezfzfzfz</p>\r\n', 'author-image-2-646x680.jpg', 0, 0),
(72, 'aaaaaa', '<p>egzergzerg</p>\r\n', 'product-4-720x480.jpg', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sujet` (`id_sujet`);

--
-- Index pour la table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_sujet` FOREIGN KEY (`id_sujet`) REFERENCES `sujet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
