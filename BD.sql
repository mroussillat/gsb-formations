/*
Navicat MySQL Data Transfer

Source Server         : Local (MySQL)
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-12-06 11:47:05
*/

DROP DATABASE IF EXISTS gsb_gestiondesformations;
CREATE DATABASE gsb_gestiondesformations;

USE gsb_gestiondesformations;

SET FOREIGN_KEY_CHECKS=1;

-- ----------------------------
-- Table structure for avoir
-- ----------------------------
DROP TABLE IF EXISTS `avoir`;
CREATE TABLE `avoir` (
  `idVisiteur` int(11) NOT NULL,
  `idSpecialite` int(11) NOT NULL,
  CONSTRAINT pk_avoir PRIMARY KEY (`idVisiteur`,`idSpecialite`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for convenir
-- ----------------------------
DROP TABLE IF EXISTS `convenir`;
CREATE TABLE `convenir` (
  `idFormation` int(11) NOT NULL,
  `idSpecialite` int(11) NOT NULL,
  CONSTRAINT pk_convenir PRIMARY KEY (`idFormation`,`idSpecialite`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for delegue
-- ----------------------------
DROP TABLE IF EXISTS `delegue`;
CREATE TABLE `delegue` (
  `idVisiteur` int(11) NOT NULL,
  `idDelegue` int(11) NOT NULL,
  CONSTRAINT pk_delegue PRIMARY KEY (`idVisiteur`,`idDelegue`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for etat
-- ----------------------------
DROP TABLE IF EXISTS `etat`;
CREATE TABLE `etat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) DEFAULT NULL,
  CONSTRAINT pk_etat PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for fichefrais
-- ----------------------------
DROP TABLE IF EXISTS `fichefrais`;
CREATE TABLE `fichefrais` (
  `idVisiteur` int(11) NOT NULL,
  `mois` char(30) NOT NULL,
  `nbJustificatifs` int(11) DEFAULT NULL,
  `montantValide` decimal(10,2) DEFAULT NULL,
  `dateModif` date DEFAULT NULL,
  `idEtat` char(2) DEFAULT 'CR',
  CONSTRAINT pk_fichefrais PRIMARY KEY (`idVisiteur`,`mois`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for formation
-- ----------------------------
DROP TABLE IF EXISTS `formation`;
CREATE TABLE `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  CONSTRAINT pk_formation PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for fraisforfait
-- ----------------------------
DROP TABLE IF EXISTS `fraisforfait`;
CREATE TABLE `fraisforfait` (
  `id` char(3) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `montant` decimal(5,2) DEFAULT NULL,
  CONSTRAINT pk_fraisforfait PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for inscription
-- ----------------------------
DROP TABLE IF EXISTS `inscription`;
CREATE TABLE `inscription` (
  `idVisiteur` int(11) NOT NULL,
  `idFormation` int(11) NOT NULL,
  `valide` ENUM('En attente','Validée','Refusé') DEFAULT 'En attente',
  CONSTRAINT pk_inscription PRIMARY KEY (`idVisiteur`,`idFormation`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for lignefraisforfait
-- ----------------------------
DROP TABLE IF EXISTS `lignefraisforfait`;
CREATE TABLE `lignefraisforfait` (
  `idVisiteur` int(11) NOT NULL,
  `mois` char(30) NOT NULL,
  `idFraisForfait` char(3) NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  CONSTRAINT lignefraisforfait PRIMARY KEY (`idVisiteur`,`mois`,`idFraisForfait`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for lignefraishorsforfait
-- ----------------------------
DROP TABLE IF EXISTS `lignefraishorsforfait`;
CREATE TABLE `lignefraishorsforfait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idVisiteur` int(11) NOT NULL,
  `mois` char(30) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `montant` decimal(10,2) DEFAULT NULL,
  CONSTRAINT lignefraishorsforfait PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for responsable
-- ----------------------------
DROP TABLE IF EXISTS `responsable`;
CREATE TABLE `responsable` (
  `idDelegue` int(11) NOT NULL,
  `idResponsable` int(11) NOT NULL,
  CONSTRAINT responsable PRIMARY KEY (`idDelegue`,`idResponsable`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for session
-- ----------------------------
DROP TABLE IF EXISTS `session`;
CREATE TABLE `session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `idFormation` int(11) NOT NULL,
  `nombrePlace` int(11) NOT NULL,
  CONSTRAINT session PRIMARY KEY (`id`,`idFormation`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for specialite
-- ----------------------------
DROP TABLE IF EXISTS `specialite`;
CREATE TABLE `specialite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  CONSTRAINT pk_specialite PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ----------------------------
-- Table structure for visiteur
-- ----------------------------
DROP TABLE IF EXISTS `visiteur`;
CREATE TABLE `visiteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `dateEmbauche` date DEFAULT NULL,
  CONSTRAINT pk_visiteur PRIMARY KEY (`id`)
) ENGINE=InnoDB;

ALTER TABLE avoir ADD CONSTRAINT fk_avoir_idVisiteur FOREIGN KEY (idVisiteur) REFERENCES visiteur(id);
ALTER TABLE avoir ADD CONSTRAINT fk_avoir_idSpecialite FOREIGN KEY (idSpecialite) REFERENCES specialite(id);

ALTER TABLE session ADD CONSTRAINT fk_session_idFormation FOREIGN KEY (idFormation) REFERENCES formation(id);

ALTER TABLE responsable ADD CONSTRAINT fk_responsable_idDelegue FOREIGN KEY (idDelegue) REFERENCES delegue(idVisiteur);
ALTER TABLE responsable ADD CONSTRAINT fk_responsable_idResponsable FOREIGN KEY (idResponsable) REFERENCES delegue(idVisiteur);

ALTER TABLE lignefraishorsforfait ADD CONSTRAINT fk_lignefraishorsforfait_idVisiteur FOREIGN KEY (idVisiteur) REFERENCES visiteur(id);

ALTER TABLE lignefraisforfait ADD CONSTRAINT fk_lignefraisforfait_idVisiteur FOREIGN KEY (idVisiteur) REFERENCES visiteur(id);
ALTER TABLE lignefraisforfait ADD CONSTRAINT fk_lignefraisforfait_idFraisForfait FOREIGN KEY (idFraisForfait) REFERENCES fraisforfait(id);

ALTER TABLE inscription ADD CONSTRAINT fk_inscription_idVisiteur FOREIGN KEY (idVisiteur) REFERENCES visiteur(id);
ALTER TABLE inscription ADD CONSTRAINT fk_inscription_idFormation FOREIGN KEY (idFormation) REFERENCES formation(id);

ALTER TABLE delegue ADD CONSTRAINT fk_delegue_idVisiteur FOREIGN KEY (idVisiteur) REFERENCES visiteur(id);
ALTER TABLE delegue ADD CONSTRAINT fk_delegue_idDelegue FOREIGN KEY (idDelegue) REFERENCES visiteur(id);

ALTER TABLE convenir ADD CONSTRAINT fk_convenir_idFormation FOREIGN KEY (idFormation) REFERENCES formation(id);
ALTER TABLE convenir ADD CONSTRAINT fk_convenir_idSpecialite FOREIGN KEY (idSpecialite) REFERENCES specialite(id);
