-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 avr. 2022 à 19:06
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
('double', 190),
('simple', 100),
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
(1, 'suite'),
(2, 'suite'),
(3, 'double'),
(4, 'simple'),
(6, 'suite'),
(7, 'double'),
(8, 'double'),
(9, 'suit'),
(10, 'simple'),
(11, 'suite'),
(12, 'suite'),
(13, 'simple');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `chambrecat`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `chambrecat` (
`numeroC` int(11)
,`type` varchar(255)
,`prix` int(11)
);

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
(14533778, 'stasta', 'hend', 'bizerte', 'h@g.com', 23445566),
(15422889, 'soussi', 'nour', 'tunis', 'nour@gmail.com', 23433333),
(17665555, 'makhloufi', 'mohamed', 'mestir', 'mohamed@gmail.com', 98161111),
(12095222, 'amdouni', 'mariem', 'bizerte', 'mariem@gmail.com', 98271453),
(14006362, 'makhloufi', 'MOHAMED', 'bouhjar', 'medmak.943@gmail.com', 29020932);

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
('mohamed', '4SQVM097V', 'client', 17665555),
('mariem', '4DSFGHYGTG', 'client', 12095222),
('admin', 'admin', 'admin', 0),
('medmak123', '0000', 'client', 14006362);

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
(20, 14533778, 4, '2022-03-02', '2022-03-06'),
(21, 14006362, 2, '2022-04-04', '2022-04-30'),
(22, 14006362, 1, '2022-04-05', '2022-04-30'),
(14, 14533778, 9, '2022-09-23', '2022-09-29'),
(13, 14533778, 2, '2022-02-23', '2022-07-23');

-- --------------------------------------------------------

--
-- Structure de la vue `chambrecat`
--
DROP TABLE IF EXISTS `chambrecat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chambrecat`  AS SELECT `c`.`numeroC` AS `numeroC`, `c`.`type` AS `type`, `ca`.`prix` AS `prix` FROM (`chambre` `c` join `categorie` `ca` on(`c`.`type` = `ca`.`type`)) ;

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
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `numeroC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `numeroR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
