<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetData</title>
    <style>
        body{
            margin: 0;
        }
        main{
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 30%;
            height: 40vh;
            background-color: #eee;
            border-radius: 10px;
        }
        form input, button {
            margin-top: 2vh;
            height: 3vh;
            background-color: #F2F2F2;
            border: none;
            border: 1px solid #333;
            border-radius: 5px;
            padding: 4px;
        }
    </style>
</head>
<body>
    <main>
    <form action="calculator.php">
        <input type="number" name="numberOne" id="numberOne" placeholder="Number">
        <input type="text" name="operation" id="operation" placeholder="Operation">
        <input type="number" name="numberTwo" id="numberTwo" placeholder="Number">
        <button type="submit">Calculator</button>
        <?php
        if (isset($_GET['numberOne']) && isset($_GET['operation']) && isset($_GET['numberTwo'])) {
            # code...
            $numberOne = $_GET['numberOne'];
            $numberTwo = $_GET['numberTwo'];
            $operation = $_GET['operation'];

            if($operation == '+'){
                $result = $numberOne + $numberTwo;
                echo '<h2>' . $result . '</h2>';
            }
            if($operation == '-'){
                $result = $numberOne - $numberTwo;
                echo '<h2>' . $result . '</h2>';
            }
            if($operation == '*'){
                $result = $numberOne * $numberTwo;
                echo '<h2>' . $result . '</h2>';
            }
            if($operation == '/'){
                $result = $numberOne / $numberTwo;
                echo '<h2>' . $result . '</h2>';
            }
        }
    ?>
    </form>
    </main>
</body>
</html>