

/* TABLE Styles */
insert into chicTendance.t_style (styl_id, styl_libelle) VALUES
 (1, "Robes De Soirée"),
 (2, "Robes De Cocktail"),
 (3, "Robes De Mariée");
	/* FIN TABLE Style */
	
/* TABLE Createur */
insert into chicTendance.t_createur (crea_id, crea_nom) VALUES
 (1, "Chanel"),
 (2, "Zilli"),
 (3, "Givenchy"),
 (4, "Lucien Pella-Finet"),
 (5, "Zucca");
	/*FIN TABLE createur*/
	
/* TABLE t_robe de soiree */
insert into chicTendance.t_robe_de_soiree (robe_id, robe_nom, robe_dateajout, robe_prix, robe_image, crea_id, styl_id) VALUES
 (1, "Robe de soirée rouge tendance", "08/10/2013", 129.99, "robe_soiree_rouge.jpg", 1, 1),
 (2, "Robe de soirée blanche étincelante", "08/10/2013", 109.99, "robe_soiree_blanche.jpg", 1, 1),
 (3, "Robe de soirée verte audacieuse", "08/10/2013", 100.99, "robe_soiree_verte.jpg", 1, 1),
 (4, "Robe de soirée bleue séductrice", "08/10/2013", 129.99, "robe_soiree_bleueFonce.jpg", 1, 1),
 (5, "Robe de soirée bleue attirante", "08/10/2013", 104.99, "robe_soiree_bleueClaire.jpg", 2, 1),
 (6, "Robe de soirée dorée lumineuse", "08/10/2013", 139.99, "robe_soiree_jaune.jpg", 2, 1),
 (7, "Robe de soirée violette tentatrice", "08/10/2013", 119.99, "robe_soiree_violette.jpg", 2, 1),
 (8, "Robe de soirée rose envoutante", "08/10/2013", 104.99, "robe_soiree_beige.jpg", 2, 1),
 
 (9, "Robe de cocktail rouge", "08/10/2013", 89.99, "robe_cocktail_rouge.jpg", 3, 2),
 (10, "Robe de cocktail noire", "08/10/2013", 99.99, "robe_cocktail_noire.jpg", 3, 2),
 (11, "Robe de cocktail rose", "08/10/2013", 85.99, "robe_cocktail_rose.jpg", 3, 2),
 (12, "Robe de cocktail verte", "08/10/2013", 79.99, "robe_cocktail_verte.jpg", 3, 2),
 (13, "Robe de cocktail blanche", "08/10/2013", 85.99, "robe_cocktail_blanche.jpg", 4, 2),
 (14, "Robe de cocktail bleue", "08/10/2013", 79.99, "robe_cocktail_bleue.jpg", 4, 2),
 (15, "Robe de cocktail corail", "08/10/2013", 89.99, "robe_cocktail_corail.jpg", 4, 2),
 (16, "Robe de cocktail violette", "08/10/2013", 79.99, "robe_cocktail_violette.jpg", 4, 2);
 
/*(17, "Robe de mariée élégante", "08/10/2013", 199.99, "robe_mariee_1.jpg", 5, 3),
 (18, "Robe de mariée dentelle", "08/10/2013", 299.99, "robe_mariee_2.jpg", 5, 3),
 (19, "Robe de mariée perlée", "08/10/2013", 285.99, "robe_mariee_3.jpg", 5, 3),
 (20, "Robe de mariée plume", "08/10/2013", 379.99, "robe_mariee_4.jpg", 5, 3),
 (21, "Robe de mariée duvet", "08/10/2013", 179.99, "robe_mariee_5.jpg", 5, 3),
 (22, "Robe de mariée étincelante", "08/10/2013", 279.99, "robe_mariee_6.jpg", 5, 3),
 (23, "Robe de mariée légère", "08/10/2013", 485.99, "robe_mariee_7.jpg", 5, 3),
 (24, "Robe de mariée classe", "08/10/2013", 589.99, "robe_mariee_8.jpg", 5, 3);*/

/* TABLE t_client */
insert into chicTendance.t_client (clie_nom, clie_prenom, clie_adresse, clie_cp, clie_ville, clie_courriel, clie_mdp) VALUES
  ("DUPONT", "Claude", "125 rue de paris", "69002", "LYON", "claude.dupont@laposte.net", "123");