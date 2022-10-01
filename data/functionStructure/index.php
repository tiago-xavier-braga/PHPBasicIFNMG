<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    local scope
    <?php
        $x = 4;
        function localScope(){
            $x = 0;
            echo $x;
        }
        localScope();

        echo " - $x"
    ?>
    </p>
    <p>
        overrall Scope
        <?php
        $x = 6;
            function overrallScope(){
                global $x;
                $x++;
                echo $x;
            }
            overrallScope();
            echo " - $x";
        ?>
    </p>
    <p>
        St        local scopeatic Scope
        <?php
            function staticScope(){
                static $x = 5;
                $x++;
                return $x;
            }
            echo staticScope();
            echo staticScope();
            echo staticScope();
        ?>
    </p>
    <p>
        <?php

        ?>
    </p>
</body>
</html>