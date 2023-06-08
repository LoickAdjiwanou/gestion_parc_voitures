-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 jan. 2022 à 21:49
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionvoitures`
--

-- --------------------------------------------------------

--
-- Structure de la table `caissier`
--

CREATE TABLE `caissier` (
  `idCaissier` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `caissier`
--

INSERT INTO `caissier` (`idCaissier`, `name`) VALUES
(1, 'Samuel'),
(2, 'fffffffffff'),
(3, 'Mohamed K.');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `name`, `email`, `telephone`) VALUES
(1, 'Joseph', 'joseph@gmail.com', '+22998765432'),
(2, 'eeeeeeeeeeee', 'tyjftift', '75643345678'),
(3, 'Dechavane', 'devane@gmail.com', '+33745362787');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `idVente` varchar(30) NOT NULL,
  `dateVente` varchar(20) DEFAULT NULL,
  `prix` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`idVente`, `dateVente`, `prix`) VALUES
('001A', '06/01/2022', 150000),
('02Bug', '12/01/22', 1200000),
('hgyu', 'yfogy', 75687);

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `numSerie` varchar(20) NOT NULL,
  `marque` varchar(20) DEFAULT NULL,
  `modele` varchar(10) DEFAULT NULL,
  `couleur` varchar(30) DEFAULT NULL,
  `prixAchat` double DEFAULT NULL,
  `prixVente` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`numSerie`, `marque`, `modele`, `couleur`, `prixAchat`, `prixVente`) VALUES
('AMG01', 'Mercedes', 'AMG', 'Bleu', 120000, 150000),
('AsM33', 'Aston Martin', 'Vanquish', 'Verte', 1000000, 600000),
('BUG02', 'Bugatti', 'Chiron', 'Noir', 950000, 1200000),
('cdsc', 'gft', 'fghf', 'ftft', 76, 67687),
('KonZ', 'Konigsegg', 'Agera RS', 'Blanche', 2500000, 3600000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `caissier`
--
ALTER TABLE `caissier`
  ADD PRIMARY KEY (`idCaissier`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`idVente`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`numSerie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `caissier`
--
ALTER TABLE `caissier`
  MODIFY `idCaissier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
