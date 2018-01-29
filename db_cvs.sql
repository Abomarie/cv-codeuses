-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 30 jan. 2018 à 00:06
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_cvs`
--

-- --------------------------------------------------------

--
-- Structure de la table `codeuses`
--

CREATE TABLE `codeuses` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenoms` varchar(200) NOT NULL,
  `naissance` varchar(20) NOT NULL,
  `resume` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `specialisation` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `github` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `codeuses`
--

INSERT INTO `codeuses` (`id`, `nom`, `prenoms`, `naissance`, `resume`, `email`, `telephone`, `mdp`, `specialisation`, `photo`, `facebook`, `twitter`, `github`) VALUES
(1, 'admin', '', '', '', 'admin@sheisthecode.org', '', 'e3afed0047b08059d0fada10f400c1e5', '', '', '', '', ''),
(2, 'ANOUAN', 'ABO MARIE CHRISTELLE', '08/08/1993', 'Je suis une fille qui desire apprendre de nouvelles choses pour accroitre son champs de competence ', 'mariechristelleanouan@gmail.com', '57-33-43-52', '336e1633ea004e841d56a3c205310793', 'Codeuse', 'IMG_20171003_093201.jpg', '', '', ''),
(3, 'KOUAKOU', 'FLORE', '20/06/1990', 'Je suis une fille assidue au travail', 'flore@gmail.com', '62/12/65/48', 'a408eae65ca21f137745c692241d357c', 'digital management', 'IMG-20171022-WA0005.jpg', 'https:florekouakou.facebook', 'https:florekouakou.twitter', 'https:florekouakou.githb');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `github` varchar(200) NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `id` int(11) NOT NULL,
  `anne` varchar(20) NOT NULL,
  `libelle` varchar(200) NOT NULL,
  `ecole` varchar(200) NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `diplomes`
--

INSERT INTO `diplomes` (`id`, `anne`, `libelle`, `ecole`, `id_codeuses`) VALUES
(1, '2015', 'le bac', 'sheisthecode', 1),
(2, '2017', 'le bts', 'groupe loko', 2),
(3, '2016', 'le BTS en ressources humaines', 'CEFIAT', 3);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `debut` varchar(20) NOT NULL,
  `fin` varchar(20) NOT NULL,
  `entreprise` varchar(200) NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `titre`, `debut`, `fin`, `entreprise`, `id_codeuses`) VALUES
(1, 'stagiaire', '20/05/2017', '23/10/2017', 'akendewa', 2),
(2, 'Audit des accidents', '2008', '2012', 'NSIA assurances ', 3);

-- --------------------------------------------------------

--
-- Structure de la table `interets`
--

CREATE TABLE `interets` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `interets`
--

INSERT INTO `interets` (`id`, `titre`, `description`, `id_codeuses`) VALUES
(1, 'la musique', '', 1),
(2, 'le sport', '', 2),
(3, 'la cuisine', 'j\'adore faire la patisserie', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `codeuses`
--
ALTER TABLE `codeuses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `interets`
--
ALTER TABLE `interets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `codeuses`
--
ALTER TABLE `codeuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `interets`
--
ALTER TABLE `interets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
