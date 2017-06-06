-- Contenu de la table `FraisForfait`
--

INSERT INTO `FraisForfait` (`id`, `libelle`, `montant`) VALUES
('ETP', 'Forfait Etape', 110.00),
('KM', 'Frais Kilométrique', 0.62),
('NUI', 'Nuitée Hôtel', 80.00),
('REP', 'Repas Restaurant', 25.00);




/* Visiteurs */
INSERT INTO `visiteur` (`id`, `nom`, `prenom`, `login`, `mdp`, `adresse`, `cp`, `ville`, `dateEmbauche`) VALUES
(1, 'Villechalane', 'Louis', 'lvillachane', 'jux7g', '8 rue des Charmes', '46000', 'Cahors', '2005-12-21'),
(2, 'Andre', 'David', 'dandre', 'oppg5', '1 rue Petit', '46200', 'Lalbenque', '1998-11-23'),
(3, 'Bedos', 'Christian', 'cbedos', 'gmhxd', '1 rue Peranud', '46250', 'Montcuq', '1995-01-12'),
(4, 'Tusseau', 'Louis', 'ltusseau', 'ktp3s', '22 rue des Ternes', '46123', 'Gramat', '2000-05-01'),
(5, 'Bentot', 'Pascal', 'pbentot', 'doyw1', '11 allée des Cerises', '46512', 'Bessines', '1992-07-09'),
(6, 'Bioret', 'Luc', 'lbioret', 'hrjfs', '1 Avenue gambetta', '46000', 'Cahors', '1998-05-11'),
(7, 'Bunisset', 'Francis', 'fbunisset', '4vbnd', '10 rue des Perles', '93100', 'Montreuil', '1987-10-21'),
(8, 'Bunisset', 'Denise', 'dbunisset', 's1y1r', '23 rue Manin', '75019', 'Paris', '2010-12-05'),
(9, 'Cacheux', 'Bernard', 'bcacheux', 'uf7r3', '114 rue Blanche', '75017', 'Paris', '2009-11-12'),
(10, 'Cadic', 'Eric', 'ecadic', '6u8dc', '123 avenue de la République', '75011', 'Paris', '2008-09-23'),
(11, 'Charoze', 'Catherine', 'ccharoze', 'u817o', '100 rue Petit', '75019', 'Paris', '2005-11-12'),
(12, 'Clepkens', 'Christophe', 'cclepkens', 'bw1us', '12 allée des Anges', '93230', 'Romainville', '2003-08-11'),
(13, 'Cottin', 'Vincenne', 'vcottin', '2hoh9', '36 rue Des Roches', '93100', 'Monteuil', '2001-11-18'),
(14, 'Daburon', 'François', 'fdaburon', '7oqpv', '13 rue de Chanzy', '94000', 'Créteil', '2002-02-11'),
(15, 'De', 'Philippe', 'pde', 'gk9kx', '13 rue Barthes', '94000', 'Créteil', '2010-12-14'),
(16, 'Debelle', 'Michel', 'mdebelle', 'od5rt', '181 avenue Barbusse', '93210', 'Rosny', '2006-11-23'),
(17, 'Debelle', 'Jeanne', 'jdebelle', 'nvwqq', '134 allée des Joncs', '44000', 'Nantes', '2000-05-11'),
(18, 'Debroise', 'Michel', 'mdebroise', 'sghkb', '2 Bld Jourdain', '44000', 'Nantes', '2001-04-17'),
(19, 'Desmarquest', 'Nathalie', 'ndesmarquest', 'f1fob', '14 Place d Arc', '45000', 'Orléans', '2005-11-12'),
(20, 'Desnost', 'Pierre', 'pdesnost', '4k2o5', '16 avenue des Cèdres', '23200', 'Guéret', '2001-02-05'),
(21, 'Dudouit', 'Frédéric', 'fdudouit', '44im8', '18 rue de l église', '23120', 'GrandBourg', '2000-08-01'),
(22, 'Duncombe', 'Claude', 'cduncombe', 'qf77j', '19 rue de la tour', '23100', 'La souteraine', '1987-10-10'),
(23, 'Enault-Pascreau', 'Céline', 'cenault', 'y2qdu', '25 place de la gare', '23200', 'Gueret', '1995-09-01'),
(24, 'Eynde', 'Valérie', 'veynde', 'i7sn3', '3 Grand Place', '13015', 'Marseille', '1999-11-01'),
(25, 'Finck', 'Jacques', 'jfinck', 'mpb3t', '10 avenue du Prado', '13002', 'Marseille', '2001-11-10'),
(26, 'Frémont', 'Fernande', 'ffremont', 'xs5tq', '4 route de la mer', '13012', 'Allauh', '1998-10-01'),
(27, 'Gest', 'Alain', 'agest', 'dywvt', '30 avenue de la mer', '13025', 'Berre', '1985-11-01');


/* Etat */
INSERT INTO `Etat` (`id`, `libelle`) VALUES
(1, 'Remboursée'),
(2, 'Saisie clôturée'),
(3, 'Fiche créée, saisie en cours'),
(4, 'Validée et mise en paiement');


/* Spécialité */
INSERT INTO `specialite` (`id`, `libelle`) VALUES (1, 'pharmacien');
INSERT INTO `specialite` (`id`, `libelle`) VALUES (2, 'infirmier');
INSERT INTO `specialite` (`id`, `libelle`) VALUES (3, 'dentiste');
INSERT INTO `specialite` (`id`, `libelle`) VALUES (4, 'médecin généraliste');
INSERT INTO `specialite` (`id`, `libelle`) VALUES (5, 'dermatologue');
INSERT INTO `specialite` (`id`, `libelle`) VALUES (6, 'chirurgien');
INSERT INTO `specialite` (`id`, `libelle`) VALUES (7, 'gastro-entérologue');
INSERT INTO `specialite` (`id`, `libelle`) VALUES (8, 'pédiatre');
INSERT INTO `specialite` (`id`, `libelle`) VALUES (9, 'gynécologue');



/* Délégué */
INSERT INTO `delegue` (`idVisiteur`, `idDelegue`) VALUES (5, 1);
INSERT INTO `delegue` (`idVisiteur`, `idDelegue`) VALUES (8, 2);
INSERT INTO `delegue` (`idVisiteur`, `idDelegue`) VALUES (2, 3);
INSERT INTO `delegue` (`idVisiteur`, `idDelegue`) VALUES (4, 4);



/* Responsable */
INSERT INTO `responsable` (`idDelegue`, `idResponsable`) VALUES (2, 1);
INSERT INTO `responsable` (`idDelegue`, `idResponsable`) VALUES (3, 2);



/* Formation */
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (1, 'Utilisation des vaccins', 'Cette formation va vous sensibiliser à l utilisation des vaccins.');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (2, 'Nouveaux médicaments', 'Vous découvrirez de nouveaux médicaments.');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (3, 'Logiciel de gestion', 'Vous apprendrez à utiliser le nouveau logiciel de gestion des patients, rdv...');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (4, 'Conseils et accompagnements des séniors', '2 jours pour développer votre expertise dans l’approche de la personne âgée et assurer votre mission de service public dans sa prise en charge globale.');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (5, 'Aromathérapie', 'Acquérir la connaissance de plus de 100 huiles essentielles Enseignement pratique physiologique et clinique basé sur les acquis scientifiques mais aussi les connaissances transmises par la tradition.');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (6, 'Découverte de l homéopathie', 'Conseiller les médicaments homéopathiques en première intention, face aux situations cliniques les plus couramment rencontrées à l’officine Accompagner la délivrance d’ordonnances de médicaments homéopathiques pour assurer une bonne observance.');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (7, 'Dépose des éléments prothétiques', 'Vous apprendrez à déposer des prothèses dentaires.');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (8, 'Gestion des situations difficiles', 'Vous apprendrez à gérer les situations difficiles.');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (9, 'Radioprotection des patients', 'Cette formation aborde les parties opérationnelles et cliniques de la radioprotection des patients.');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (10, 'Chirurgie cardiaque', 'Vous apprendrez la chirurgie cardiaque.');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (11, 'Chirurgie vasculaire', 'Vous apprendrez la chirurgie vasculaire.');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (12, 'Chirurgie digestive', 'Vous apprendrez la chirurgie digestive.');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (13, 'Interventions digestives', 'Vous apprendrez à réaliser des interventions digestives.');
INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (14, 'Nutrition', 'Vous apprendrez à donner des conseils nutritionnels.');
/*INSERT INTO `formation` (`id`, `libelle`, `description`) VALUES (15, 'Skyrim', 'Vous apprendrez à jouer à Skyrim au lieu de vous occuper de vos patients.');*/




/* Session */
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (1, '2017-03-15', 1, 20);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (2, '2017-03-17', 1, 10);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (3, '2017-03-24', 2, 30);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (4, '2017-03-26', 3, 25);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (5, '2017-03-26', 4, 15);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (6, '2017-03-31', 5, 17);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (7, '2017-04-02', 6, 35);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (8, '2017-04-03', 7, 18);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (9, '2017-04-05', 8, 26);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (10, '2017-04-05', 8, 31);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (11, '2017-04-10', 9, 20);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (12, '2017-04-17', 10, 16);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (13, '2017-04-18', 11, 20);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (14, '2017-04-24', 12, 10);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (15, '2017-04-30', 13, 30);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (16, '2017-05-15', 14, 25);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (17, '2017-05-25', 8, 15);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (18, '2017-06-17', 5, 14);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (19, '2017-06-28', 12, 35);
INSERT INTO `session` (`id`, `date`, `idFormation`, `nombrePlace`) VALUES (20, '2017-09-14', 1, 31);





/* Inscription */
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (1, 2, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (2, 1, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (3, 3, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (4, 2, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (5, 6, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (5, 5, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (6, 3, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (6, 7, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (7, 14, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (8, 5, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (9, 9, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (10, 6, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (10, 2, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (11, 4, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (12, 7, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (13, 1, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (14, 6, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (15, 12, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (15, 13, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (16, 14, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (17, 5, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (17, 10, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (18, 8, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (18, 11, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (19, 2, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (20, 1, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (21, 3, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (22, 2, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (23, 6, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (24, 10, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (24, 11, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (25, 14, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (26, 4, 'En attente');
INSERT INTO `inscription` (`idVisiteur`, `idFormation`, `valide`) VALUES (27, 5, 'En attente');



/* Convenir */
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (1, 2);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (1, 4);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (2, 4);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (2, 1);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (3, 3);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (4, 2);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (5, 8);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (6, 1);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (6, 5);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (7, 3);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (8, 9);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (9, 9);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (10, 6);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (11, 6);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (12, 6);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (13, 6);
INSERT INTO `convenir` (`idFormation`, `idSpecialite`) VALUES (14, 7);



/* Avoir */
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (1, 1);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (2, 2);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (3, 3);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (4, 4);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (5, 5);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (5, 8);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (6, 6);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (6, 3);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (7, 7);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (8, 8);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (9, 9);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (10, 1);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (11, 2);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (12, 3);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (13, 4);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (14, 5);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (15, 6);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (16, 7);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (17, 8);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (17, 6);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (18, 9);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (18, 6);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (19, 1);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (20, 2);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (21, 3);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (22, 4);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (23, 5);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (24, 6);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (25, 7);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (26, 2);
INSERT INTO `avoir` (`idVisiteur`, `idSpecialite`) VALUES (27, 8);






/* fichefrais */
INSERT INTO `fichefrais` (`idVisiteur`, `mois`, `nbJustificatifs`, `montantValide`, `dateModif`, `idEtat`) VALUES (1, 'janvier', 1, 110, '2017-01-05', 1);
INSERT INTO `fichefrais` (`idVisiteur`, `mois`, `nbJustificatifs`, `montantValide`, `dateModif`, `idEtat`) VALUES (2, 'septembre', 2, 124, '2016-09-25', 4);
INSERT INTO `fichefrais` (`idVisiteur`, `mois`, `nbJustificatifs`, `montantValide`, `dateModif`, `idEtat`) VALUES (3, 'fevrier', 1, 80, '2017-02-05', 3);
INSERT INTO `fichefrais` (`idVisiteur`, `mois`, `nbJustificatifs`, `montantValide`, `dateModif`, `idEtat`) VALUES (4, 'mars', 2, 50, '2017-03-05', 2);




/* lignefraishorsforfait */
INSERT INTO `lignefraishorsforfait` (`id`, `idVisiteur`, `mois`, `libelle`, `date`, `montant`) VALUES (1, 1, 'janvier', 'libelle 1', '2017-01-05', 110);
INSERT INTO `lignefraishorsforfait` (`id`, `idVisiteur`, `mois`, `libelle`, `date`, `montant`) VALUES (2, 3, 'fevrier', 'libelle 2', '2017-02-05', 80);



/* lignefraisforfait */
INSERT INTO `lignefraisforfait` (`idVisiteur`, `mois`, `idFraisForfait`, `quantite`) VALUES (2, 'septembre', 'KM', 1);
INSERT INTO `lignefraisforfait` (`idVisiteur`, `mois`, `idFraisForfait`, `quantite`) VALUES (4, 'mars', 'REP', 1);
