<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <?php
    if (($_POST['login'] == "admin") && ($_POST['mdp'] == "azerty")){
        echo "<h1>Bienvenue</h1>";
    } else {
        echo "<h1>Erreur : Mot de passe incorrecte</h1>";
    }
    ?>

