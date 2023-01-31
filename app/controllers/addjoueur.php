<?php
if (
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['sexe']) &&
    isset($_POST['password'])
) {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $sexe = htmlspecialchars(trim($_POST['sexe']));

    $password = sha1(htmlspecialchars(trim($_POST['password'])));
    $data = [
        "nom" => $nom,
        "prenom" => $prenom,
        "sexe" => $sexe,
        "password" => $password,
    ];
    addjoueur($db, $data);
    header('Location: dashboard.php');
}

