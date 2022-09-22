<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/index.css">
    <title>Document</title>
</head>
<body>
    <form action="get.php">
        <input type="number" name="id" id="id">
        <input type="text" name="name" id="name">
        <button type="submit">Enviar</button>
    </form>
    <?php
        if (isset($_GET['id']) && isset($_GET['name'])) {
            # code...
            echo '<h2>' . $_GET['id'] . '</h2>';
            echo '<h2>' . $_GET['name'] . '</h2>';
        } else {
            echo "Não tem id poh";
        }
    ?>
</body>
</html>