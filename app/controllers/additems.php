<?php
if (
    isset($_POST['id_boutique']) &&
    isset($_POST['id_joueur'])
) {
    $nid_joueur = htmlspecialchars(trim($_POST['id_joueur']));
    $id_boutique = htmlspecialchars(trim($_POST['id_boutique']));
    $data = [
        "id_boutique" => $id_boutique,
        "id_joueur" => $id_joueur,
    ];
    additems($db, $data);
    header('Location: dashboard.php');
} else {
}
