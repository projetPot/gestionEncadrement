-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 23 Juillet 2014 à 20:54
-- Version du serveur: 5.1.33
-- Version de PHP: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projetphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `connectes`
--

CREATE TABLE IF NOT EXISTS `connectes` (
  `ip` varchar(15) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `connectes`
--


-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE IF NOT EXISTS `demande` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `proposeur` varchar(8) NOT NULL,
  `receveur` varchar(8) NOT NULL,
  `message` varchar(255) NOT NULL,
  `domaine` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `vue` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Contenu de la table `demande`
--

INSERT INTO `demande` (`id`, `proposeur`, `receveur`, `message`, `domaine`, `date`, `vue`) VALUES
(43, 'ayissi', '13I13341', 'LE PROFESSEUR M.ayissi SOUHAITE ETRE VOTRE ENCADREUR ENinformatique', '', '2014-07-23 18:57:09', 1),
(40, '13I13341', 'ayissi', 'M.dassi SOUHAITE QUE VOUS SOYEZ SON ENCADREUR ', '', '2014-07-23 18:41:09', 1),
(45, '13I13343', '13I13342', 'M.nyobe SOUHAITE QUE VOUS SOYEZ SON ENCADREUR EN mecanique', 'mecanique', '2014-07-23 20:41:51', 1),
(11, '13I13342', '13I13343', 'LE PROFESSEUR M.ayimdji SOUHAITE ETRE VOTRE ENCADREUR ', '', '2014-07-23 12:58:03', 1),
(42, '13I13342', 'ayissi', 'M.nkele SOUHAITE QUE VOUS SOYEZ SON ENCADREUR ', '', '2014-07-23 18:41:09', 1);

-- --------------------------------------------------------

--
-- Structure de la table `encadre`
--

CREATE TABLE IF NOT EXISTS `encadre` (
  `matriculeEns` varchar(8) NOT NULL,
  `matricule` varchar(8) NOT NULL,
  `objet` varchar(10) NOT NULL,
  PRIMARY KEY (`matricule`,`matriculeEns`),
  KEY `FK_encadre_matriculeEns` (`matriculeEns`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `encadre`
--

INSERT INTO `encadre` (`matriculeEns`, `matricule`, `objet`) VALUES
('13I13342', '13I13343', 'stage'),
('13I13342', '13I13341', ''),
('13I13342', '13I13342', ''),
('13I13342', '13I13325', '');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE IF NOT EXISTS `enseignant` (
  `matriculeEns` varchar(8) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `pswd` varchar(36) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `avatar` varchar(15) NOT NULL,
  `date_enreg` date NOT NULL,
  `connected` tinyint(1) NOT NULL,
  PRIMARY KEY (`matriculeEns`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `enseignant`
--

INSERT INTO `enseignant` (`matriculeEns`, `nom`, `prenom`, `pswd`, `adresse`, `avatar`, `date_enreg`, `connected`) VALUES
('13I13342', 'ayimdji', 'armel', 'armel', '74160948', '13I13342.jpg', '2014-07-19', 0),
('ayissi', 'ayissi', 'christiant', 'christiant', '75486215', 'ayissi.jpg', '2014-07-23', 0);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `matricule` varchar(8) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `pswd` varchar(36) NOT NULL,
  `filiere` varchar(5) NOT NULL,
  `numeroTel` int(8) DEFAULT NULL,
  `avatar` varchar(15) NOT NULL,
  `date_enreg` date NOT NULL,
  `connected` tinyint(1) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `pswd`, `filiere`, `numeroTel`, `avatar`, `date_enreg`, `connected`) VALUES
('13I13343', 'nyobe', 'armel', 'armel', 'GI', 74160948, '13I13343.jpg', '2014-07-21', 0),
('13I13341', 'dassi', 'marcel', 'orleando', 'GI', 72252530, '13I13341.jpg', '2014-07-21', 0),
('13I13342', 'nkele', 'esther', 'marie', 'GI', 70452743, '13I13342.jpg', '2014-07-23', 0),
('13I13325', 'bengueut', 'doriane', 'doriane', 'GI', 95058383, '13I13325.jpg', '2014-07-23', 0);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE IF NOT EXISTS `matiere` (
  `matriculeEns` varchar(8) NOT NULL,
  `matiere` varchar(20) NOT NULL,
  PRIMARY KEY (`matriculeEns`,`matiere`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `matiere`
--

INSERT INTO `matiere` (`matriculeEns`, `matiere`) VALUES
('0', 'informatique');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `destinateur` varchar(20) NOT NULL,
  `destinataire` varchar(20) NOT NULL,
  `date_envoi` date NOT NULL,
  `date_vue` date DEFAULT NULL,
  `contenu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `destinateur`, `destinataire`, `date_envoi`, `date_vue`, `contenu`) VALUES
(1, 'ayimdji', 'nyobe', '2014-07-20', NULL, 'bonjour bonjour monsieur kendeck nyobe moi même'),
(2, 'ayimdji', 'nyobe', '2014-07-22', '0000-00-00', 'bonsoir monsieur ayimdji'),
(3, 'nyobe', 'ayimdji', '2014-07-22', '0000-00-00', 'bonsoir monsieur nyobe'),
(4, 'nyobe', 'ayimdji', '2014-07-22', '0000-00-00', 'je vois votre travail'),
(5, 'ayimdji', 'nyobe', '2014-07-22', '0000-00-00', 'merci monsieur'),
(6, 'ayimdji', 'nyobe', '2014-07-22', '0000-00-00', 'monsieur je suis trop fort'),
(7, 'nyobe', 'ayimdji', '2014-07-22', '0000-00-00', 'je confirme'),
(8, 'nyobe', 'ayimdji', '2014-07-23', '0000-00-00', 'rebonjour monsieur');

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE IF NOT EXISTS `rendez_vous` (
  `matriculeEns` varchar(8) NOT NULL,
  `matricule` varchar(8) NOT NULL,
  `dateprise` date NOT NULL,
  `daterél` date NOT NULL,
  `objet` varchar(30) NOT NULL,
  `vue` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rendez_vous`
--

INSERT INTO `rendez_vous` (`matriculeEns`, `matricule`, `dateprise`, `daterél`, `objet`, `vue`) VALUES
('13I13342', '13I13343', '2014-07-23', '0000-00-00', ' entretient', 1),
('13I13342', '13I13343', '2014-07-23', '2014-08-09', ' entretient', 1),
('13I13342', '13I13343', '2014-07-23', '2014-09-10', ' entretient', 1),
('13I13342', '13I13343', '2014-07-24', '2014-06-10', ' on doit causer', 1),
('13I13342', '', '2014-07-24', '2014-06-13', ' on doit se voir le plus tot p', 0),
('13I13342', '', '2014-07-24', '2014-05-06', ' dassi bonsoir', 0),
('13I13342', '', '2014-07-24', '2014-05-06', ' dassi bonsoir', 0),
('13I13342', '', '2014-07-24', '2014-05-06', ' dassi bonsoir', 0),
('13I13342', '', '2014-07-24', '2014-05-06', ' dassi bonsoir', 0),
('13I13342', '13I13341', '2014-07-24', '2014-07-08', ' on doit se voir le plus tot p', 1);
