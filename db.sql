-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 29 oct. 2019 à 21:55
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `testweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `intutile` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `intutile`, `lieu`) VALUES
(6, 'sites web', 'paris'),
(7, 'commercial', 'paris'),
(8, 'Bases de données ', 'Lille'),
(9, 'Gestion de Projets', 'Paris-La défense'),
(10, 'développement Mobile', 'Amiens'),
(11, 'Méthodes Agile', 'Paris'),
(12, 'Dev Java JEE', 'paris'),
(13, 'java script ', 'lille'),
(14, 'Symfony', 'lille'),
(15, 'PHP ', 'Paris'),
(16, 'pdo', 'lille'),
(17, 'pdomvc', 'lille');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `formation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `adresse`, `formation_id`) VALUES
(30, 'soumia', 'soumia', 'lille', 8),
(31, 'papa', 'baba', 'rue de mes parents', 11),
(61, 'ss', 'ss', 'ss', 8),
(62, 'sadik', 'soumia', 'ghjj', 8),
(63, 'sadik', 'soumia', 'ghjj', 8),
(64, 'sadik', 'soumia', 'ghjj', 8),
(65, 'sadik', 'soumia', 'ghjj', 8),
(66, 'sadik', 'soumia', 'ghjj', 8),
(67, 'sadik', 'soumia', 'ghjj', 8),
(73, 'sadik', 'sadik', 'kjkcj', 8),
(74, 'sadik', 'sadik', 'kjkcj', 8);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `formation_id` (`formation_id`);
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`);
COMMIT;

