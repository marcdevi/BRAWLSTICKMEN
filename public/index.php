<?php
session_start();
require '../vendor/autoload.php';

use App\Database;

$db = new Database('brawlstickmen');

require '../app/models/function.php';
require '../app/controllers/addjoueur.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addjoueur</title>
</head>

<body style="color: white;display: flex;justify-content: center;align-items: center;">
    <section>
        <form action="" method="post">
            <div>
                <h3>Nom</h3>
                <input type="text" name="nom">
            </div>
            <div>
                <h3>prenom</h3>
                <input type="text" name="prenom">
            </div>
            <div>
                <h3>sexe</h3>
                <input type="text" name="sexe">
            </div>
            <div>
                <h3>Mots de passe</h3>
                <input type="password" name="password">
            </div>
            <button type="submit">envoyer</button>
        </form>
    <a href="connexion.php"><p>SE CONNECTER</p></a>
    </section>
    
</body>

</html>