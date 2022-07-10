-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 10 Juillet 2022 à 21:30
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `thalasso-zen`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambers`
--

CREATE TABLE `chambers` (
  `chambers_id` int(11) NOT NULL,
  `chamber_style` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chambers`
--

INSERT INTO `chambers` (`chambers_id`, `chamber_style`) VALUES
(1, 'familly'),
(2, 'lover'),
(3, 'friends');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `choice` varchar(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contacts`
--

INSERT INTO `contacts` (`id`, `choice`, `firstname`, `name`, `email`, `message`) VALUES
(1, 'renseignements', 'tony', 'deconink', 'alban.havard@aliceadsl.fr', 'Comment faire pour rÃ©server ?'),
(2, 'autre', 'Lorraine', 'Lescour', 'lorraineND@aol.com', 'Comment je fais j\'arrive pas, snif'),
(3, 'autre', 'Lorraine', 'Lescour', 'lorraineND@aol.com', 'Comment je fais j\'arrive pas, snif');

-- --------------------------------------------------------

--
-- Structure de la table `grad`
--

CREATE TABLE `grad` (
  `grad_id` int(11) NOT NULL,
  `grad` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `grad`
--

INSERT INTO `grad` (`grad_id`, `grad`) VALUES
(1, 'customer'),
(2, 'managers'),
(3, 'admin'),
(4, 'master'),
(0, 'bannis');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id_reservation` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_chamber` int(11) NOT NULL,
  `people_number` varchar(20) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `grad_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `name`, `phonenumber`, `email`, `password`, `grad_id`) VALUES
(1, 'alban', 'havard', '0620197240', 'alban.havard@aliceadsl.fr', 'apollo', 4),
(2, 'sandro', 'havard', '0235841014', 'alban556@live.fr', 'sandro', 1),
(9, 'tony', 'deconink', '0657512555', 'levieuxgÃ©rard@troudebal.fr', 'alban', 1);

-- --------------------------------------------------------

--
-- Structure de la table `view`
--

CREATE TABLE `view` (
  `id_view` int(11) NOT NULL,
  `id_chamber` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_reservation` int(11) NOT NULL,
  `mark` varchar(5) NOT NULL,
  `reviews` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chambers`
--
ALTER TABLE `chambers`
  ADD PRIMARY KEY (`chambers_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `grad`
--
ALTER TABLE `grad`
  ADD PRIMARY KEY (`grad_id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id_view`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `view`
--
ALTER TABLE `view`
  MODIFY `id_view` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
