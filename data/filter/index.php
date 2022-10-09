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
        $email = "<john.doe@example.com>";
        echo '<p>1. ' . $email . '</p>';
        
        $email = filter_var($email,
            FILTER_SANITIZE_EMAIL);
        echo '<p>2. ' . $email . '</p>';
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>$email válido.</p>";
        } else {
            echo "<p>$email não é válido</p>";
        }
    ?>
</body>
</html>