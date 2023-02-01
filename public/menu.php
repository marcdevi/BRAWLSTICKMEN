<?php
session_start();

require '../vendor/autoload.php';

use App\Database;

$db = new Database('brawlstickmen');

require '../app/models/function.php';
require '../app/controllers/menu.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BRAWLSTICKMEN</title>
</head>
<body>
    <header>
        <h1 style="font-family: droog, sans-serif;">Brawlstickmen</h1>
        <div class="nv">
            <div>
                <img src="img/Vector 21.svg" alt="" height="50%">
                <div>
                <p style="font-size: 32px;font-family: brevia, sans-serif;font-weight: 900;font-style: normal;">26</p>
                </div>
                <img src="" alt="">
            </div>
            <div>
                <img src="img/Clazssement.png" alt="" height="50%">
                <p style="font-size: 32px;font-family: brevia, sans-serif;font-weight: 900;font-style: normal;">CLASSEMENT</p>
            </div>
        </div>
    </header>
    <main>
        <section class="left">
            <div>
                <a href="boutique.php"><img src="img/coFFRE.png" alt="">
                <p style="color:black;text-align:center;font-family: brevia, sans-serif;font-weight: 900;font-style: normal;">BOUTIQUE</p></a>
            </div>
            <div>
            <a href="inventaire.php"><img src="img/Inventaire.png" alt="">
                <p style="color:black;text-align:center;font-family: brevia, sans-serif;font-weight: 900;font-style: normal;">INVENTAIRE</p></a>
            </div>
        </section>
        <section class="right">
            <a href="#"><button class="niveau" style="font-family: brevia, sans-serif;font-weight: 900;font-style: normal;padding: 60px 90px;margin: 30px 0%;font-family: brevia, sans-serif;font-weight: 900;font-style: normal;color:white">NIVEAU</button></a>
            <a href="combat.php"><button style="padding: 60px 90px;margin: 30px 0%;font-family: brevia, sans-serif;font-weight: 900;font-style: normal;" class="jouer">JOUER</button></a>
        </section>
    </main>
    <footer></footer>
</body>
</html>