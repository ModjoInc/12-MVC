<?php

// On vérifie qu'un hash est présent
if (!empty($_GET['hash'])) {

	// On veut utiliser le modèle des membres (~/modeles/membres.php)
	include MODELE.'membres.php';

	// valider_compte_avec_hash() est définit dans ~/modeles/membres.php
	if (valider_compte_avec_hash($_GET['hash'])) {

		// Affichage de la confirmation de validation du compte
		include VIEW.'compte_valide.php';

	} else {

		// Affichage de l'erreur de validation du compte
		include VIEW.'erreur_activation_compte.php';
	}

} else {

	// Affichage de l'erreur de validation du compte
	include VIEW.'erreur_activation_compte.php';
}
?>
