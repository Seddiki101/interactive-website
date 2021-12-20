-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 09:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncix`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `id_sujet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `nom`, `email`, `comment`, `id_sujet`) VALUES
(1, 'Oussama', 'oussama.seddiki@esprit.tn', 'AAAAAAAAAAAAAAp§', 1),
(2, 'Oussama', 'oussama.seddiki@esprit.tn', 'zepeofjcposkfc,melfsqc', 1),
(3, 'Oussama', 'oussama.seddiki@esprit.tn', 'nice course ', 2),
(4, 'Oussama', 'oussama.seddiki@esprit.tn', 'easy to use', 4);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `Id_cat` int(11) NOT NULL,
  `NomCategorie` varchar(200) NOT NULL,
  `image_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`Id_cat`, `NomCategorie`, `image_cat`) VALUES
(9, 'Workstations', 'workstation.jpg'),
(10, 'Serveurs', 'dell.jpg'),
(11, 'Cables', 'rj45.png');

-- --------------------------------------------------------

--
-- Table structure for table `categorie_service`
--

CREATE TABLE `categorie_service` (
  `ID_cs` int(11) NOT NULL,
  `nom_cs` varchar(20) NOT NULL,
  `image_cs` varchar(255) NOT NULL,
  `numUsersCS` int(11) NOT NULL,
  `revenueCS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorie_service`
--

INSERT INTO `categorie_service` (`ID_cs`, `nom_cs`, `image_cs`, `numUsersCS`, `revenueCS`) VALUES
(1, 'Host', 'hstctg.jpg', 0, 0),
(2, 'Cloud', 'cldctg.jpg', 0, 0),
(3, 'Crypto', 'crpctg.png', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `mode` varchar(30) NOT NULL,
  `rib` int(11) NOT NULL,
  `numero_cb` int(11) NOT NULL,
  `numero_ce` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`id_commande`, `mode`, `rib`, `numero_cb`, `numero_ce`) VALUES
(1, '', 1234567891, 1234567892, 1234567893),
(2, '', 1234567891, 1234567892, 1234567893),
(3, '', 1234567891, 1234567892, 1234567893),
(4, '', 1234567891, 1234567892, 1234567893);

-- --------------------------------------------------------

--
-- Table structure for table `livraison`
--

CREATE TABLE `livraison` (
  `idL` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `dateL` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `livreur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `livreur`
--

CREATE TABLE `livreur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `numtel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livreur`
--

INSERT INTO `livreur` (`id`, `nom`, `prenom`, `email`, `type`, `numtel`) VALUES
(1, 'Aramex', 'aramex', 'aramex@gmail.com', 'T', 99889977),
(3, 'Fedex', 'FedEx', 'fedex@gmail.com', 'T', 11145458);

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`id_panier`, `nom`, `prix`, `id_article`) VALUES
(51, 'Cloud_storage', '4', 2),
(52, 'Website_hosting', '9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `panierp`
--

CREATE TABLE `panierp` (
  `id_panier` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panierp`
--

INSERT INTO `panierp` (`id_panier`, `nom`, `prix`, `id_article`) VALUES
(4, 'RJ 45', '30', 8);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `NumProduit` int(11) NOT NULL,
  `Nomproduit` varchar(100) NOT NULL,
  `Marque` varchar(100) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Prod_desc` varchar(100) NOT NULL,
  `Qte_stock` int(11) NOT NULL,
  `Id_cat` int(11) NOT NULL,
  `image_prod` varchar(255) NOT NULL,
  `Likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`NumProduit`, `Nomproduit`, `Marque`, `Prix`, `Prod_desc`, `Qte_stock`, `Id_cat`, `image_prod`, `Likes`) VALUES
(6, 'Noctua Whiplash', 'Noctua', 3400, 'AMD EPYC 5 6500XT 16 ram 3200 Mhz Nvidia RTX 3080 Asus Mobo Gigabit Networking ', 10, 9, 'workstation.jpg', 11),
(7, 'DELL PowerEdge', 'Dell', 1900, 'Serveur DELL PowerEdge T40 - Format: Tour - Processeur: Intel Xeon E-2224G (Quad-Core, 3.5 GHz Up To', 8, 10, 'dell.jpg', 1),
(8, 'RJ 45', 'Snek', 30, '40 m extension', 30, 11, 'rj45.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `type`) VALUES
(0, 'houssem'),
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `IDs` int(11) NOT NULL,
  `nom_ser` varchar(20) NOT NULL,
  `image_ser` varchar(255) NOT NULL,
  `frais` int(11) NOT NULL,
  `Description` varchar(600) NOT NULL,
  `ID_cs` int(11) DEFAULT NULL,
  `date_s` date NOT NULL DEFAULT current_timestamp(),
  `numUserS` int(11) NOT NULL,
  `revenueS` int(11) GENERATED ALWAYS AS (`numUserS` * `frais`) STORED,
  `likes` int(11) NOT NULL,
  `demo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`IDs`, `nom_ser`, `image_ser`, `frais`, `Description`, `ID_cs`, `date_s`, `numUserS`, `likes`, `demo`) VALUES
(1, 'Website_hosting', 'hstser.jpg', 9, '<p>Every plan includes :Domain registration : Claim your name and get yourself online.Free SSL Website Security Certificate : Your hosting package includes a free SSL certificate that provides security for your website domains and subdomains by encrypting communications between the server and visitors to your websitePlan Specifications :-Personal : Single Website-Buisness : Unlimited websites-Express : Unlimited websites + Unmetered bandwith</p>', 1, '2021-11-25', 7, 17, 'host.html'),
(2, 'Cloud_storage', 'cldser.jpg', 4, '<p>Every plan includes :Cross platform accessPlan Specifications :-Personal : 300 Gb of storage-Buisness : 1 Tb of storage-Express : 2TB of storage</p>', 2, '2021-11-27', 17, 71, 'up.html'),
(3, 'Crypto_monitoring', 'crpser.jpg', 7, '<p>link your e-wallet in order to access this service</p>', 3, '2021-11-26', 4, 7, 'cry.html');

-- --------------------------------------------------------

--
-- Table structure for table `sujet`
--

CREATE TABLE `sujet` (
  `id` int(11) NOT NULL,
  `titresujet` varchar(500) NOT NULL,
  `contenu` varchar(3000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `views` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sujet`
--

INSERT INTO `sujet` (`id`, `titresujet`, `contenu`, `image`, `views`, `likes`) VALUES
(2, 'WEB3', '<p>Web3, also known as Web 3.0, is an idea for a version of the Internet that is based on public blockchains. The term was coined in 2014 by Ethereum co-founder Gavin Wood, and the idea gained interest in 2020 and 2021 from cryptocurrency enthusiasts, large technology companies and venture capitalist firms</p>', 'we.png', 18, 13),
(3, 'GPT3 -AI', '<p>Generative Pre-trained Transformer 3 is an autoregressive language model that uses deep learning to produce human-like text. It is the third-generation language prediction model in the GPT-n series created by OpenAI, a San Francisco-based artificial intelligence research laboratory.</p>', 'gp.png', 1, 0),
(4, 'Github Copilot', '<p>GitHub Copilot is an artificial intelligence tool developed by GitHub and OpenAI to assist users of Visual Studio Code, Neovim, and JetBrains by autocompleting code. It was first announced by GitHub on 29 June 2021</p>', 'gcp.jpeg', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `status` varchar(20) NOT NULL DEFAULT 'notverified',
  `code` int(11) NOT NULL,
  `img_path` varchar(30) NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `password`, `role`, `status`, `code`, `img_path`) VALUES
(96, 'Seddiki', 'Oussama', 'oussama.seddiki@esprit.tn', '$2y$10$BoC1uQ6w28JPxfWm.M5q.elyajHxAG0XcweECBcOZ14Hi.Ou9lIuS', 2, 'verified', 421887, '20200809_100346.jpg'),
(102, 'Yahyaoui', 'Mayssa', 'mayssa.yahyaoui@esprit.tn', '$2y$10$eu7SzQhlKcDe0PWgQwupvOh6U24lcqr.g2teQBAIQ8vwVcHaipd3G', 1, 'verified', 516799, 'may.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Id_cat`);

--
-- Indexes for table `categorie_service`
--
ALTER TABLE `categorie_service`
  ADD PRIMARY KEY (`ID_cs`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Indexes for table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`idL`);

--
-- Indexes for table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `id_article` (`id_article`);

--
-- Indexes for table `panierp`
--
ALTER TABLE `panierp`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `id_article` (`id_article`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`NumProduit`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`IDs`),
  ADD KEY `fk_serv_cat` (`ID_cs`);

--
-- Indexes for table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `Id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categorie_service`
--
ALTER TABLE `categorie_service`
  MODIFY `ID_cs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `idL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `livreur`
--
ALTER TABLE `livreur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `panierp`
--
ALTER TABLE `panierp`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `NumProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `IDs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK11` FOREIGN KEY (`id_article`) REFERENCES `service` (`IDs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `panierp`
--
ALTER TABLE `panierp`
  ADD CONSTRAINT `FK` FOREIGN KEY (`id_article`) REFERENCES `produit` (`NumProduit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `fk_serv_cat` FOREIGN KEY (`ID_cs`) REFERENCES `categorie_service` (`ID_cs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
