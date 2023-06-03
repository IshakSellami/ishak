-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 03 juin 2023 à 16:09
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `voyage`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `tel` int(11) NOT NULL,
  `depart` text NOT NULL,
  `arrivee` text NOT NULL,
  `jours` date NOT NULL,
  `heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `tel`, `depart`, `arrivee`, `jours`, `heure`) VALUES
(3, 'elaggoune', 'zakarya', 'zelaggoune@gmail.com', 792620762, 'Constantine', 'Alger', '2023-04-04', '08:00:00'),
(4, 'ishak', 'bkjb', 'dqsfqs@gmail.com', 657570886, 'Guelma', 'Oran', '2023-06-17', '13:00:00'),
(5, 'wael', 'thr', 'djjddj@gmail.com', 657570886, 'Guelma', 'oran', '2023-06-17', '13:00:00'),
(6, 'jijiokjni', 'bkjb', 'djjddj@gmail.com', 657570886, 'Alger', 'Oran', '2023-06-30', '00:00:00'),
(7, 'anis', 'boukezzoula', 'aniis@gmail.com', 659025525, 'Alger', 'Oran', '2023-06-30', '00:00:00'),
(8, 'ishak', 'sellami', 'ishaksellami26@gmail.com', 657570886, 'Alger', 'Oran', '2023-06-30', '00:00:00'),
(9, 'anis', 'bkjb', 'aniis@gmail.com', 657570886, 'Alger', 'Oran', '2023-06-22', '01:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `id` int(11) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `arrivee` varchar(255) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `immatriculation` varchar(10) NOT NULL,
  `nombre` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`id`, `depart`, `arrivee`, `prix`, `date`, `heure`, `immatriculation`, `nombre`) VALUES
(13, 'SÃ©tif', 'Constantine', '300', '0000-00-00', '16:00:00', '12003', 1),
(16, 'Alger', 'Oran', '1200', '2023-06-22', '01:00:00', '11547', 1),
(21, 'Annaba', 'Alger', '1200', '2023-06-30', '17:00:00', '55585', 1),
(23, 'Annaba', 'Oran', '3000', '2023-06-26', '16:40:00', '12548', 1),
(24, 'Alger', 'Biskra', '2500', '0000-00-00', '15:50:00', '41578', 1),
(27, 'Alger', 'Annaba', '1800', '2023-06-01', '03:10:00', '00147', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
