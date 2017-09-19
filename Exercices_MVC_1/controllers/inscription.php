<?php
require LIBRAIRIES. 'form.php';

$form_inscription = new Form('formulaire_inscription');
$form_inscription->method('POST');

$form_inscription->add('Text', 'nom_utilisateur')
                 ->label('Votre nom d\'utilisateur');

$form_inscription->add('Password', 'mdp')
                 ->label('Votre mot de passe');

$form_inscription->add('Password', 'mdp_verif')
                 ->label('Entrez à nouveau votre mot de passe');

$form_inscription->add('Email', 'adresse_email')
                 ->label('Votre adresse email');

$form_inscription->add('File', 'avatar')
                 ->filter_extensions('jpg', 'png', 'gif')
                 ->max_size(8192)
                 ->label('Choisissez votre avatar(facultatif)')
                 ->Required(false);

$form_inscription->add('Submit', 'submit')
                 ->value('S\'inscrire');

$form_inscription->bound($_POST);

// erreurs
$erreurs_inscription = array();

if ($form_inscription->is_valid($_POST)) {
  if ($form_inscription->get_cleaned_data('mdp') != $form_inscription->get_cleaned_data('mdp_verif')) {
    $erreurs_inscription[] = 'Les mots de passe ne correspondent pas';
  }
  if (empty($erreurs_inscription)) {
    // traitement du formulaire
  }
  else
  {
    include VIEWS . 'view_inscription.php';
  }
}
else
{
  include VIEWS . 'view_inscription.php';
}

// include VIEWS . 'view_inscription.php';



 ?>
