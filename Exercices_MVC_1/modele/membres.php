<?php

function maj_avatar_membre($id_utilisateur , $avatar) {

	$pdo = PDO2::getInstance();

	$requete = $pdo->prepare("UPDATE membres SET
		avatar = :avatar
		WHERE
		id = :id_utilisateur");

	$requete->bindValue(':id_utilisateur', $id_utilisateur);
	$requete->bindValue(':avatar',         $avatar);

	return $requete->execute();
}


function valider_compte_avec_hash($hash_validation) {

	$pdo = PDO2::getInstance();

	$requete = $pdo->prepare("UPDATE membres SET
		hash_validation = ''
		WHERE
		hash_validation = :hash_validation");

	$requete->bindValue(':hash_validation', $hash_validation);

	$requete->execute();

	return ($requete->rowCount() == 1);
}

?>
