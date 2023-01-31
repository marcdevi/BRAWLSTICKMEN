<?php
function addjoueur($db, $data) {
    $stmt = $db->getPDO()->prepare('INSERT INTO joueur (nom, prenom, sexe, password) VALUES (:nom, :prenom, :sexe, :password)');
    return $stmt->execute($data);
}
function additems($db, $data) {
    $stmt = $db->getPDO()->prepare('INSERT INTO inventaire (id_boutique,id_joueur ) VALUES (:id_boutique, :id_joueur)');
    return $stmt->execute($data);
}

?>

