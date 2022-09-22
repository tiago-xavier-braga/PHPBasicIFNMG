<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetData</title>
    <style>
        body {
            margin: 0;
        }

        main {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 30%;
            height: 40vh;
            background-color: #eee;
            border-radius: 10px;
        }
        input,
        button, select {
            margin-top: 2vh;
            height: 3vh;
            border: none;
            border: 1px solid #333;
            border-radius: 5px;
            padding: 4px;
        }
    </style>
</head>

<body>
    <main>
        <form action="calculatorSelectInput.php">
            <input type="number" name="numberOne" id="numberOne" placeholder="Number">
            <select name="operation">
                <option value="+">Somar</option>
                <option value="-">Subtrair</option>
                <option value="*">Multiplicar</option>
                <option value="/">Dividir</option>
            </select>
            <input type="number" name="numberTwo" id="numberTwo" placeholder="Number">
            <input type="submit" value="Calculator">
            <?php
            if (isset($_GET['numberOne']) && isset($_GET['operation']) && isset($_GET['numberTwo'])) {
                # code...
                $numberOne = $_GET['numberOne'];
                $numberTwo = $_GET['numberTwo'];
                $operation = $_GET['operation'];

                switch ($operation) {
                    case '+':
                        $result = $numberOne + $numberTwo;
                        echo '<h2>' . $result . '</h2>';
                        break;
                    case '-':
                        $result = $numberOne - $numberTwo;
                        echo '<h2>' . $result . '</h2>';
                        break;
                    case '*':
                        $result = $numberOne * $numberTwo;
                        echo '<h2>' . $result . '</h2>';
                        break;
                    case '/':
                        $result = $numberOne / $numberTwo;
                        echo '<h2>' . $result . '</h2>';
                        break;
                    default:
                        
                        break;
                }
            }
            ?>
        </form>
    </main>
</body>

</html>