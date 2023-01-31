<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="stylecombat.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMBAT</title>
</head>

<body>
    <div style="position: relative;display: inline-block;">
        <div style="position: absolute;display:flex;width:100%;align-items:center;padding:20px">
            <div style="position: relative;height:30px;width:100%;display:flex;justify-content:flex-end">
                <div style="background-color: red;height:30px;width:100%"></div>
                <div id="playerHealth" style="position:absolute; background: green; top:0;right:0;bottom:0;width:100%"></div>
            </div>
            <div id="timer" style="background-color: red;width:100px;height:100px;flex-shrink: 0;display:flex;align-items:center;justify-content:center">
            10
        </div>
            <div style="position: relative;height:30px;width:100%">
                <div style="background-color: red;height:30px"></div>
                <div id="enemyHealth" style="position:absolute; background: green; top:0;right:0;bottom:0;left:0"></div>
            </div>
        </div>
        <div id="displayText" style="position: absolute;color:white;align-items:center;justify-content:center;top:0;right:0;bottom:0;left:0;display:none">Tie</div>
        <canvas></canvas>
    </div>


    <script src="js/utils.js"></script>
    <script src="js/classes.js"></script>
    <script src="index.js"></script>

</body>

</html>