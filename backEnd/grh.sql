-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 10 mars 2022 à 09:13
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `grh`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `type` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`type`, `prix`) VALUES
('simple', 100),
('double', 180),
('suite', 250);

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `numeroC` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`numeroC`, `type`) VALUES
(1, 'simple'),
(2, 'suite'),
(3, 'double'),
(4, 'simple'),
(5, 'suite'),
(6, 'suite'),
(7, 'double'),
(8, 'double'),
(9, 'double'),
(10, 'simple'),
(11, 'suite');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `CIN` int(8) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`CIN`, `nom`, `prenom`, `adresse`, `email`, `telephone`) VALUES
(14533778, 'Sta', 'hend', 'bizerte', 'hend@gmail.com', 92222222),
(15422889, 'soussi', 'nour', 'tunis', 'nour@gmail.com', 23433333),
(17665555, 'makhloufi', 'mohamed', 'mestir', 'mohamed@gmail.com', 98161111),
(12095222, 'amdouni', 'mariem', 'bizerte', 'mariem@gmail.com', 98271453);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `CIN` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`username`, `password`, `role`, `CIN`) VALUES
('hend', 'h13SFxf', 'client', 14533778),
('mohamed', '4SQVM097V', 'client', 17665555),
('nour', '4DSFGKH', 'client', 15422889),
('mariem', '4DSFGHYGTG', 'client', 12095222),
('admin', 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `numeroR` int(11) NOT NULL,
  `CIN` int(11) NOT NULL,
  `numeroC` int(11) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`numeroR`, `CIN`, `numeroC`, `dateDebut`, `dateFin`) VALUES
(1, 14533778, 2, '2022-03-02', '2022-03-05'),
(2, 15422889, 9, '2022-04-02', '2022-04-04'),
(3, 17665555, 3, '2022-04-02', '2022-04-04'),
(4, 14533778, 7, '2022-07-13', '2022-07-17'),
(5, 12095222, 2, '2022-03-06', '2022-03-10'),
(6, 17665555, 2, '2022-06-03', '2022-06-07'),
(7, 14533778, 2, '2022-03-10', '2022-03-24');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`type`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`numeroC`),
  ADD KEY `type` (`type`),
  ADD KEY `categorie` (`type`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CIN`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`username`),
  ADD KEY `client` (`CIN`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`numeroR`),
  ADD KEY `client` (`CIN`),
  ADD KEY `chambre` (`numeroC`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `numeroR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
