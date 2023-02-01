<?php
session_start();
require '../vendor/autoload.php';

use App\Database;

$db = new Database('brawlstickmen');

require '../app/models/function.php';
require '../app/controllers/inventaire.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRAWLSTICKMEN</title>
</head>

<body>
    <header class="header-maps">
        <a href="menu.php">
            <h1>Retour</h1>
        </a>
        <div style="display: flex;gap:35%">
            <img src="img/Vector 21.svg" alt="">
            <p style="font-size: 32px;">26</p>
        </div>
    </header>
    <main class="main-inventaire">
        <section class="sec-eqp" style="width:50%">
            <h2>EQUIPEMENT</h2>
            <div>
                <div class="p-eq">
                    <div class="in-eq"></div>
                    <div class="in-eq"></div>
                    <div class="in-eq"></div>
                </div>
                <div style="background-color: red;width: 90%;height: 50vh;"><img src="" alt=""></div>
                <div class="p-eq">
                    <div class="in-eq"></div>
                    <div class="in-eq"></div>
                    <div class="in-eq"></div>
                </div>
            </div>
        </section>
        <section class="sec-inv">
            <h2>INVENTAIRE</h2>
            <div class="sec-inv-p">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>

        </section>
    </main>

    <footer>
        <div class="div-footer">
            <h2>ATTAQUE</h2>
            <div style="display: flex;justify-content: space-between;align-items: center;">
                <p style="font-size: 28px;">+2</p>
                <img src="img/croix.png" alt="">
            </div>
        </div>
        <div class="div-footer">
            <h2>ATTAQUE</h2>
            <div style="display: flex;justify-content: space-between;align-items: center;">
                <p style="font-size: 28px;">+2</p>
                <img src="img/croix.png" alt="">
            </div>
        </div>
        <div class="div-footer">
            <h2>ATTAQUE</h2>
            <div style="display: flex;justify-content: space-between;align-items: center;">
                <p style="font-size: 28px;">+2</p>
                <img src="img/croix.png" alt="">
            </div>
        </div>
        <div class="div-footer">
            <h2>ATTAQUE</h2>
            <div style="display: flex;justify-content: space-between;align-items: center;">
                <p style="font-size: 28px;">+2</p>
                <img src="img/croix.png" alt="">
            </div>
        </div>
    </footer>