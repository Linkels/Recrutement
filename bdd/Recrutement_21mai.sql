-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 21 Mai 2019 à 11:15
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Recrutement`
--

-- --------------------------------------------------------

--
-- Structure de la table `codep`
--

CREATE TABLE `codep` (
  `idcodep` varchar(10) NOT NULL,
  `designation` varchar(10) NOT NULL,
  `idhor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `codep` varchar(10) NOT NULL,
  `nationalite` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `numetelp` varchar(15) NOT NULL,
  `numtels` varchar(15) NOT NULL,
  `superheros` longtext NOT NULL,
  `hacks` longtext NOT NULL,
  `intformat` longtext NOT NULL,
  `motivation` mediumtext NOT NULL,
  `dansunan` mediumtext NOT NULL,
  `prerequis1` longtext NOT NULL,
  `prerequis2` longtext NOT NULL,
  `profilsuppl` longtext NOT NULL,
  `langlais` varchar(50) NOT NULL,
  `lastdipl` varchar(50) NOT NULL,
  `disponib` varchar(30) NOT NULL,
  `situactu` varchar(30) NOT NULL,
  `liphoto` varchar(255) NOT NULL,
  `progression` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `infospromo`
--

CREATE TABLE `infospromo` (
  `idip` int(11) NOT NULL,
  `nompromo` float NOT NULL,
  `datecandidature` date NOT NULL,
  `datedebutpromo` date NOT NULL,
  `datefinpromo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `infospromo`
--

INSERT INTO `infospromo` (`idip`, `nompromo`, `datecandidature`, `datedebutpromo`, `datefinpromo`) VALUES
(1, 1.3, '2019-12-31', '2020-02-01', '2020-09-30');

-- --------------------------------------------------------

--
-- Structure de la table `nationalite`
--

CREATE TABLE `nationalite` (
  `idnat` int(11) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `idhor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `nivangl`
--

CREATE TABLE `nivangl` (
  `idnivangl` int(11) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `idhor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `situactu`
--

CREATE TABLE `situactu` (
  `idsituactu` int(11) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `idhor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `codep`
--
ALTER TABLE `codep`
  ADD PRIMARY KEY (`idcodep`),
  ADD KEY `codep_etudiant_FK` (`idhor`);

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
-- Index pour la table `nationalite`
--
ALTER TABLE `nationalite`
  ADD PRIMARY KEY (`idnat`),
  ADD KEY `nationalite_etudiant_FK` (`idhor`);

--
-- Index pour la table `nivangl`
--
ALTER TABLE `nivangl`
  ADD PRIMARY KEY (`idnivangl`),
  ADD KEY `nivangl_etudiant_FK` (`idhor`);

--
-- Index pour la table `situactu`
--
ALTER TABLE `situactu`
  ADD PRIMARY KEY (`idsituactu`),
  ADD KEY `situactu_etudiant_FK` (`idhor`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idhor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `infospromo`
--
ALTER TABLE `infospromo`
  MODIFY `idip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `nationalite`
--
ALTER TABLE `nationalite`
  MODIFY `idnat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `nivangl`
--
ALTER TABLE `nivangl`
  MODIFY `idnivangl` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `situactu`
--
ALTER TABLE `situactu`
  MODIFY `idsituactu` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `codep`
--
ALTER TABLE `codep`
  ADD CONSTRAINT `codep_etudiant_FK` FOREIGN KEY (`idhor`) REFERENCES `etudiant` (`idhor`);

--
-- Contraintes pour la table `nationalite`
--
ALTER TABLE `nationalite`
  ADD CONSTRAINT `nationalite_etudiant_FK` FOREIGN KEY (`idhor`) REFERENCES `etudiant` (`idhor`);

--
-- Contraintes pour la table `nivangl`
--
ALTER TABLE `nivangl`
  ADD CONSTRAINT `nivangl_etudiant_FK` FOREIGN KEY (`idhor`) REFERENCES `etudiant` (`idhor`);

--
-- Contraintes pour la table `situactu`
--
ALTER TABLE `situactu`
  ADD CONSTRAINT `situactu_etudiant_FK` FOREIGN KEY (`idhor`) REFERENCES `etudiant` (`idhor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
