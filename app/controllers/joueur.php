<?php 

if (isset($_POST['nom']) && isset($_POST['password'])) {
    $nom = $_POST['nom'];
    $password = sha1($_POST['password']);
    $user = userExit($nom, $password, $db);
    var_dump($user);
    if($user){
        $_SESSION['userid']= $user['id'];
        
        header('location: menu.php');
    }else{
        print($error);
        $error = "Non d'utilisateur ou mot de passe incorect";
    }
    

}
    