-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 17 juil. 2019 à 15:51
-- Version du serveur :  10.1.39-MariaDB
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `recrutement`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `idhor` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `datenai` date NOT NULL,
  `adresse_perso` varchar(100) NOT NULL,
  `codep` varchar(10) DEFAULT NULL,
  `ville` varchar(60) DEFAULT NULL,
  `nationalite` varchar(30) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `numtels` varchar(15) NOT NULL,
  `superheros` longtext,
  `hacks` longtext,
  `intformat` longtext,
  `motivation` mediumtext,
  `dansunan` mediumtext,
  `prerequis1` longtext,
  `prerequis2` longtext,
  `profilsuppl` longtext,
  `langlais` varchar(50) DEFAULT NULL,
  `lastdipl` varchar(50) NOT NULL,
  `disponib` varchar(30) DEFAULT NULL,
  `situactu` varchar(30) NOT NULL,
  `liphoto` varchar(255) NOT NULL,
  `date_insc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idhor`, `nom`, `prenom`, `datenai`, `adresse_perso`, `codep`, `ville`, `nationalite`, `email`, `numtels`, `superheros`, `hacks`, `intformat`, `motivation`, `dansunan`, `prerequis1`, `prerequis2`, `profilsuppl`, `langlais`, `lastdipl`, `disponib`, `situactu`, `liphoto`, `date_insc`) VALUES
(64, 'jaune', 'courgette', '2019-07-02', 'rue du commerce', '08300', 'Charleville-mezieres', 'France', 'courgette@gmail.com', '07-82-45-04-00', 'jwyfjry', 'fyjkdty', 'ukdut', 'ryktiu', 'yikdyu', NULL, NULL, NULL, NULL, 'CAP', 'non', 'ASS', 'logo.png', '2019-07-16'),
(65, 'jaune', 'courgette', '2019-07-02', 'rue du commerce', '08300', 'Charleville-mezieres', 'France', 'maas@gmail.com', '07-82-45-04-00', 'wfh,wdt', 'ty;xfy', 'tu;yfi:f', 'fy:oi', 'fyi:io', NULL, NULL, NULL, NULL, 'CAP', 'non', 'RSA', 'logo.png', '2019-07-16');

-- --------------------------------------------------------

--
-- Structure de la table `infospromo`
--

CREATE TABLE `infospromo` (
  `idip` int(11) NOT NULL,
  `nompromo` int(10) DEFAULT NULL,
  `datecandidature` date DEFAULT NULL,
  `datedebutpromo` date DEFAULT NULL,
  `datefinpromo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `infospromo`
--

INSERT INTO `infospromo` (`idip`, `nompromo`, `datecandidature`, `datedebutpromo`, `datefinpromo`) VALUES
(1, 1, '2019-12-31', '2020-02-01', '2020-09-30'),
(2, NULL, '2019-07-05', '2019-07-06', '2019-07-07');

-- --------------------------------------------------------

--
-- Structure de la table `jury_admin`
--

CREATE TABLE `jury_admin` (
  `id_jadmin` int(11) NOT NULL,
  `avis` varchar(1000) NOT NULL,
  `note` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jury_admin`
--

INSERT INTO `jury_admin` (`id_jadmin`, `avis`, `note`) VALUES
(1, 'tuvgbyhnj', '1'),
(2, 'test', '5'),
(3, 'test25', '7');

-- --------------------------------------------------------

--
-- Structure de la table `jury_join`
--

CREATE TABLE `jury_join` (
  `idhor` int(11) NOT NULL,
  `id_jadmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id_session` int(11) NOT NULL,
  `nom_session` int(10) DEFAULT NULL,
  `date_session` date DEFAULT NULL,
  `heure_session` time DEFAULT NULL,
  `jury1_session` varchar(50) DEFAULT NULL,
  `jury2_session` varchar(50) DEFAULT NULL,
  `jury3_session` varchar(50) DEFAULT NULL,
  `jury4_session` varchar(100) DEFAULT NULL,
  `jury5_session` varchar(100) DEFAULT NULL,
  `jury6_session` varchar(100) DEFAULT NULL,
  `jury7_session` varchar(100) DEFAULT NULL,
  `jury8_session` varchar(100) DEFAULT NULL,
  `jury9_session` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id_session`, `nom_session`, `date_session`, `heure_session`, `jury1_session`, `jury2_session`, `jury3_session`, `jury4_session`, `jury5_session`, `jury6_session`, `jury7_session`, `jury8_session`, `jury9_session`) VALUES
(1, 1, '2019-07-31', '14:30:00', 'citron poire', 'courgette jaune', '', 'banane verte', '', '', 'marcel', '', ''),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `iduser` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `mail` varchar(60) DEFAULT NULL,
  `ulogin` varchar(20) DEFAULT NULL,
  `motdepassec` text,
  `jury_admin` tinyint(1) DEFAULT NULL,
  `jury_motiv` tinyint(1) DEFAULT NULL,
  `jury_tech` tinyint(1) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`iduser`, `nom`, `prenom`, `mail`, `ulogin`, `motdepassec`, `jury_admin`, `jury_motiv`, `jury_tech`, `admin`) VALUES
(2, 'RODRIGUEZ', 'Alain', 'araharijaona@orange.fr', 'araharijaona', '', 0, 0, 0, 0),
(3, 'RAHARIJAONA', 'Alain', 'araharijaona@gmail.com', 'roguez', '', 0, 0, 0, 0),
(4, 'visiteur', 'visiteur', 'az.raharijaona@gmail.com', 'visiteur', '$2y$10$Wex9UzwN8mfFSBTUr8Uuye/EZC9fbwUxN0jjjE1eqCJ0To2Xd2mqu', 0, 0, 0, 0),
(6, 'admin', 'admin', 'admin@gmail.com', 'admin', '$2y$10$mWYT24nfdQRuHzC66CunMuJMpRd4cBScQgOBVGdK3dw9ayI1Bmfvq', 0, 0, 0, 0),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`idhor`);

--
-- Index pour la table `infospromo`
--
ALTER TABLE `infospromo`
  ADD PRIMARY KEY (`idip`);

--
-- Index pour la table `jury_admin`
--
ALTER TABLE `jury_admin`
  ADD PRIMARY KEY (`id_jadmin`);

--
-- Index pour la table `jury_join`
--
ALTER TABLE `jury_join`
  ADD PRIMARY KEY (`idhor`,`id_jadmin`) USING BTREE,
  ADD KEY `Jadmin` (`id_jadmin`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id_session`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`iduser`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idhor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `infospromo`
--
ALTER TABLE `infospromo`
  MODIFY `idip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `jury_admin`
--
ALTER TABLE `jury_admin`
  MODIFY `id_jadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id_session` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jury_join`
--
ALTER TABLE `jury_join`
  ADD CONSTRAINT `jury_join_ibfk_1` FOREIGN KEY (`id_jadmin`) REFERENCES `jury_admin` (`id_jadmin`),
  ADD CONSTRAINT `jury_join_ibfk_2` FOREIGN KEY (`idhor`) REFERENCES `etudiant` (`idhor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
