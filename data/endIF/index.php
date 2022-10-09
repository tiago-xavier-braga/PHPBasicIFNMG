<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $hour = date("H");
        if($hour < 12){ 
    ?>
    <p>Bom Dia</p>
    <?php 
        } elseif($hour < 18){ 
    ?>
        <p>Boa Tarde</p>
    <?php
        } else { 
    ?>
    <p>Boa noite</p>
    <?php 
        }
    ?>
</body>
</html>