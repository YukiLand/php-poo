<?php
include 'Form.php';

// Des variables par défaut pour vos tests.

// YOUR CODE HERE
$action = '#';
$method = 'POST';
$name = 'a';
$min_age = 14;
$min_players = 2;
$max_players = 4;
$is_available = (bool) true;

$form = new Form($action, $method);  // créer le début du formulaire
$form->addTextField('name',$fieldName); // créer un input de type texte avec comme valeur par défaut $nom
$form->addNumberField('min_age',$min_age);
$form->addSelectField($options,'dauphin',1);//créer une liste d'options
$form->addCheckboxField('is available',$is_available);
$form->addSubmitButton('Save'); //Créer un bouton pour soumettre le formulaire se nommant Modifier

echo $form->build(); // générer le formulaire
