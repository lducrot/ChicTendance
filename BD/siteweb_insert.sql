delete from t_robe_de_soiree;
delete from t_createur;
delete from t_style;

/* TABLE Styles */
insert into t_style (styl_id, styl_libelle) VALUES
 (1, "Robes de soirée"),
 (2, "Robes de cocktail"),
 (3, "Robes de mariée");
	/* FIN TABLE Style */
	
/* TABLE Createur */
insert into t_createur (crea_id, crea_nom) VALUES
 (1, "Chanel"),
 (2, "Zilli"),
 (3, "Givenchy"),
 (4, "Lucien Pella-Finet"),
 (5, "Zucca");
	/*FIN TABLE createur*/
	
/* TABLE t_robe de soiree */
insert into t_robe_de_soiree (robe_id, robe_nom, robe_dateajout, robe_prix, robe_image, crea_id, styl_id) VALUES
 (1, "Robe de soirée rouge tendance", "2013-10-08", 129.99, "../Contenu/images/robe_soiree_rouge.jpg", 1, 1),
 (2, "Robe de soirée blanche étincelante", "2013-10-08", 109.99, "../Contenu/images/robe_soiree_blanche.jpg", 1, 1),
 (3, "Robe de soirée verte audacieuse", "2013-10-08", 100.99, "../Contenu/images/robe_soiree_verte.jpg", 1, 1),
 (4, "Robe de soirée bleue séductrice", "2013-10-08", 129.99, "../Contenu/images/robe_soiree_bleueFonce.jpg", 1, 1),
 (5, "Robe de soirée bleue attirante", "2013-10-08", 104.99, "../Contenu/images/robe_soiree_bleueClaire.jpg", 2, 1),
 (6, "Robe de soirée dorée lumineuse", "2013-10-08", 139.99, "../Contenu/images/robe_soiree_jaune.jpg", 2, 1),
 (7, "Robe de soirée violette tentatrice", "2013-10-08", 119.99, "../Contenu/images/robe_soiree_violette.jpg", 2, 1),
 (8, "Robe de soirée rose envoutante", "2013-10-08", 104.99, "../Contenu/images/robe_soiree_beige.jpg", 2, 1),
 
 (9, "Robe de cocktail rouge", "2013-10-08", 89.99, "../Contenu/images/robe_cocktail_rouge.jpg", 3, 2),
 (10, "Robe de cocktail noire", "2013-10-08", 99.99, "../Contenu/images/robe_cocktail_noire.jpg", 3, 2),
 (11, "Robe de cocktail rose", "2013-10-08", 85.99, "../Contenu/images/robe_cocktail_rose.jpg", 3, 2),
 (12, "Robe de cocktail verte", "2013-10-08", 79.99, "../Contenu/images/robe_cocktail_vert.jpg", 3, 2),
 (13, "Robe de cocktail blanche", "2013-10-08", 85.99, "../Contenu/images/robe_cocktail_blanche.jpg", 4, 2),
 (14, "Robe de cocktail bleue", "2013-10-08", 79.99, "../Contenu/images/robe_cocktail_bleue.jpg", 4, 2),
 (15, "Robe de cocktail corail", "2013-10-08", 89.99, "../Contenu/images/robe_cocktail_corail.jpg", 4, 2),
 (16, "Robe de cocktail violette", "2013-10-08", 79.99, "../Contenu/images/robe_cocktail_violette.jpg", 4, 2),
 
 (17, "Robe de mariée élégante", "2013-10-08", 199.99, "../Contenu/images/robe_mariee_1.jpg", 5, 3),
 (18, "Robe de mariée dentelle", "2013-10-08", 299.99, "../Contenu/images/robe_mariee_2.jpg", 5, 3),
 (19, "Robe de mariée perlée", "2013-10-08", 285.99, "../Contenu/images/robe_mariee_3.jpg", 5, 3),
 (20, "Robe de mariée plume", "2013-10-08", 379.99, "../Contenu/images/robe_mariee_4.jpg", 5, 3),
 (21, "Robe de mariée duvet", "2013-10-08", 179.99, "../Contenu/images/robe_mariee_5.jpg", 5, 3),
 (22, "Robe de mariée étincelante", "2013-10-08", 279.99, "../Contenu/images/robe_mariee_6.jpg", 5, 3),
 (23, "Robe de mariée légère", "2013-10-08", 485.99, "../Contenu/images/robe_mariee_7.jpg", 5, 3),
 (24, "Robe de mariée classe", "2013-10-08", 589.99, "../Contenu/images/robe_mariee_8.jpg", 5, 3);