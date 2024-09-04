<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <?php
    if (isset($_POST['prenom']) && isset($_POST['nom'])) {
        $prenom = ($_POST['prenom']);
        $nom = ($_POST['nom']);

        echo "<h1>Bonjour $prenom $nom !</h1>";
    } else {
        echo "<h1>Erreur : Les données n'ont pas été envoyées correctement.</h1>";
    }
    ?>

