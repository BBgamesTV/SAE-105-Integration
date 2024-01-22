<?php
session_start();

if(isset($_POST['envoyer'])){
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $sexe = $_POST['sexeOption'];
    if (isset($_POST['rate'])) {
        $etoilesChoisies = $_POST['rate'];
        echo "Étoiles choisies : " . $etoilesChoisies;
    } else {
        echo "Aucune étoile sélectionnée.";
        header('location: ../contact.php?err=2');
    }

    header('location: ../contact.php?err=0');


} else {
    header('location: ../contact.php?err=1');
}