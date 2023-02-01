<?php
function addjoueur($db, $data) {
    $stmt = $db->getPDO()->prepare('INSERT INTO joueur (nom, prenom, sexe, password) VALUES (:nom, :prenom, :sexe, :password)');
    return $stmt->execute($data);
}
function additems($db, $data) {
    $stmt = $db->getPDO()->prepare('INSERT INTO inventaire (id_boutique,id_joueur ) VALUES (:id_boutique, :id_joueur)');
    return $stmt->execute($data);
}

function userExit($nom, $password, $db){
    $checkSql = $db->getPDO()->prepare('SELECT * FROM  joueur WHERE nom= :nom and password= :pswd ');
    $checkSql->execute([
        'nom' => $nom,
        'pswd' => $password
    ]);
    $data = $checkSql->fetch();
    return $data;
}
function isConnected(){
    if(isset($_SESSION['userid']) && $_SESSION['userid'] != null){
        return true;
    }else{
        return false;
    }
}

function getinventaire($db, $userid){
    $stmt = $db->getPDO()->prepare('SELECT * FROM inventaire WHERE id_joueur = :userid');
    $stmt->execute([
        'userid' => $userid
    ]);
    $datas= $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $datas;
}
?>

